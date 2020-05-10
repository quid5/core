<?php
declare(strict_types=1);

/*
 * This file is part of the QuidPHP package.
 * Author: Pierre-Philippe Emond <emondpph@gmail.com>
 * Website: https://quidphp.com
 * License: https://github.com/quidphp/core/blob/master/LICENSE
 * Readme: https://github.com/quidphp/core/blob/master/README.md
 */

namespace Quid\Core\Route;
use Quid\Base;
use Quid\Base\Cli;

// _cliLive
// trait that provides some methods for a cli script which loops
trait _cliLive
{
    // config
    protected static array $configCliLive = [
        'sleepInterval'=>0.3, // interval pour sleep (pour le loop)
        'dbHistory'=>false, // désactive db history, sinon le RAM va sauter la limite
        'opt'=>[
            'stdin'=>true, // permet ou non de regarder le stdin
            'once'=>false], // un seul cycle,
        'liveHttp'=>false, // si live est aussi actif via une requête http
        'cmd'=>[], // tableau associatif, nom de commande valide vers nom de méthode de this
        'exit'=>['stop','exit','quit','die','bye','kill'], // variable qui peuvent tuer le loop dans le stdin
    ];


    // dynamique
    protected int $loopAmount = 0; // conserve le nombre de loop
    protected $stdin = null; // garde une copie de la resource stdin lors


    // onStdin
    // callback lorsqu'une nouvelle ligne est détecté dans le std in
    final protected function onStdin(string $value)
    {
        $return = $this->stdInExit($value);

        if($return === true)
        $return = $this->stdInOpt($value);

        if($return === true)
        $return = $this->stdInCmd($value);

        return $return;
    }


    // onCallOpt
    // callback lors d'un appel d'une commande
    // le tableau de opt doit être retourné
    final protected function onCallOpt(string $method,array $return):array
    {
        return $return;
    }


    // stdInExit
    // fin du loop si stop, exit, quit et die
    final protected function stdInExit(string $value):bool
    {
        return in_array($value,$this->getAttr('exit'),true)? false:true;
    }


    // stdInOpt
    // permet de changer la valeur d'opt dans un cli live
    final protected function stdInOpt(string $value):bool
    {
        $return = true;
        $values = Base\Str::wordExplode($value,null,true,true);

        foreach ($values as $value)
        {
            $parse = Cli::parseOpt($value);

            if(empty($parse))
            break;

            foreach ($parse as $k => $v)
            {
                $cli = ['Opt',$k,$v];
                $this->cliWrite('neutral',$cli);
                $this->setOpt($k,$v);
            }
        }

        return $return;
    }


    // stdInCmd
    // permet d'appeler une commande à partir d'une entrée du stdin
    final protected function stdInCmd(string $value):bool
    {
        $return = true;
        $parse = Cli::parseCmd($value);

        if(!empty($parse))
        {
            ['cmd'=>$cmd,'opt'=>$opt] = $parse;
            $return = $this->callCmd($cmd,$opt);
        }

        return $return;
    }


    // hasCmd
    // retourne vrai si la commande est permise
    final protected function hasCmd(string $cmd):bool
    {
        $method = $this->getAttr(['cmd',$cmd]);
        return is_string($method) && $this->hasMethod($method);
    }


    // callCmd
    // appele une commande et retourne le résultat
    final protected function callCmd(string $cmd,array $opt):bool
    {
        $return = false;

        if(!$this->hasCmd($cmd))
        static::throw('invalidCmd',$cmd);

        else
        {
            $method = $this->getAttr(['cmd',$cmd]);
            $opt = $this->onCallOpt($method,$opt);
            $cli = ['Command',$method];
            $this->cliWrite('neutral',$cli);
            $this->cliWrite('neutral',$opt,false);
            $return = $this->$method($opt) ?? true;
        }

        return $return;
    }


    // getSleep
    // retourne la durée de sleep
    protected function getSleep():float
    {
        return 1;
    }


    // isLive
    // retourne vrai si la route est présentement live (en cli)
    final protected function isLive():bool
    {
        return (Base\Server::isCli() || $this->getAttr('liveHttp')) && !$this->isOpt('once');
    }


    // live
    // loop live pour cli
    // possible de terminer le boot avant d'enclencher le loop
    final protected function live(\Closure $closure,bool $teardown=false):void
    {
        if($teardown === true)
        static::boot()->teardown();

        while (true)
        {
            $this->loopAmountIncrement();
            $continue = $this->checkStdIn();

            if($continue === true)
            {
                try
                {
                    $result = $closure();

                    if(is_array($result))
                    $this->logCron($result);

                    elseif(is_bool($result))
                    $continue = $result;

                    if($continue === true)
                    $continue = $this->checkStdIn();

                    if($continue === true)
                    $continue = $this->sleep();

                    if($continue === true)
                    $continue = $this->isLive();

                    if($continue === false)
                    break;
                }

                catch (\Exception $e)
                {
                    $this->outputException('Interruption',$e);
                }
            }
        }

        return;
    }


    // checkStdIn
    // vérifie s'il y a du nouveau contenu dans le stdin
    // si oui, envoie dans onStdin
    // retourne un bool, false stop le loop et true continue
    final protected function checkStdIn(bool $block=false,bool $lower=false):bool
    {
        $return = true;

        if($this->isOpt('stdin'))
        {
            $line = $this->stdinLine($block,$lower);
            if(!empty($line))
            $return = $this->onStdin($line);
        }

        return $return;
    }


    // stdin
    // retourne la resource stdin
    // emmagasine dans une propriété si non initialisé
    final protected function stdin(bool $block=false)
    {
        $return = $this->stdin;

        if(!is_resource($return))
        $this->stdin = $return = Base\Res::stdin(['block'=>$block]);

        return $return;
    }


    // stdinLine
    // retourne la dernière ligne du stdin
    final protected function stdinLine(bool $block=false,bool $lower=false):?string
    {
        return Base\Cli::stdinLine($this->stdin($block),$lower);
    }


    // isFirstLoop
    // retourne vrai si c'est le premier loop
    final protected function isFirstLoop():bool
    {
        return $this->loopAmount === 1;
    }


    // loopAmountIncrement
    // incrément la propriété loopAmount
    final protected function loopAmountIncrement():void
    {
        $this->loopAmount++;

        return;
    }


    // loopAmount
    // retourne la propriété loopAmount
    final protected function loopAmount():int
    {
        return $this->loopAmount;
    }


    // sleep
    // le script dort
    // retourne false s'il faut break
    final protected function sleep():bool
    {
        $return = true;
        $sleep = $this->getSleep();
        $interval = $this->getAttr('sleepInterval');

        if(is_numeric($interval) && $interval > 0)
        {
            while ($sleep > 0)
            {
                $return = $this->checkStdIn();
                if($return === false)
                break;

                Base\Response::sleep($interval);
                $sleep -= $interval;

                $return = $this->checkStdIn();
                if($return === false)
                break;
            }
        }

        else
        static::throw('invalidInterval',$interval);

        return $return;
    }
}
?>