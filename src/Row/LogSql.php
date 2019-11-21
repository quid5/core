<?php
declare(strict_types=1);

/*
 * This file is part of the QuidPHP package.
 * Author: Pierre-Philippe Emond <emondpph@gmail.com>
 * Website: https://quidphp.com
 * License: https://github.com/quidphp/core/blob/master/LICENSE
 * Readme: https://github.com/quidphp/core/blob/master/README.md
 */

namespace Quid\Core\Row;
use Quid\Core;
use Quid\Main;

// logSql
// class to represent a row of the logSql table, stores sql queries
class LogSql extends Core\RowAlias implements Main\Contract\Log
{
    // trait
    use _log;


    // config
    public static $config = [
        'priority'=>1003,
        'cols'=>[
            'request'=>['class'=>Core\Col\Request::class],
            'type'=>['general'=>true,'relation'=>'logSqlType']],
        'logSql'=>[
            'truncate'=>false],
        'type'=>[ // type de logSql
            1=>'select',
            2=>'show',
            3=>'insert',
            4=>'update',
            5=>'delete',
            6=>'create',
            7=>'alter',
            8=>'truncate',
            9=>'drop']
    ];


    // getTypeCode
    // retourne le code à partir du type
    final public static function getTypeCode(string $type):int
    {
        return (in_array($type,static::$config['type'],true))? array_search($type,static::$config['type'],true):0;
    }


    // newData
    // crée le tableau d'insertion
    final public static function newData(string $type,array $json):array
    {
        return ['type'=>static::getTypeCode($type),'json'=>$json];
    }
}

// init
LogSql::__init();
?>