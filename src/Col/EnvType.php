<?php
declare(strict_types=1);

/*
 * This file is part of the QuidPHP package.
 * Author: Pierre-Philippe Emond <emondpph@gmail.com>
 * Website: https://quidphp.com
 * License: https://github.com/quidphp/core/blob/master/LICENSE
 * Readme: https://github.com/quidphp/core/blob/master/README.md
 */

namespace Quid\Core\Col;
use Quid\Base;
use Quid\Core;

// envType
// class for the envType column, updates itself automatically on commit
class EnvType extends Core\ColAlias
{
    // config
    public static $config = [
        'required'=>true,
        'general'=>true,
        'visible'=>['validate'=>'notEmpty'],
        'complex'=>'div',
        'onComplex'=>true,
        'onGet'=>[Base\Json::class,'onGet'],
        'onSet'=>[Base\Json::class,'onSet'],
        'check'=>['kind'=>'char']
    ];


    // onCommit
    // ajoute le envtype sur insertion ou mise à jour
    final protected function onCommit($value,array $row,?Core\Cell $cell=null,array $option):?array
    {
        $return = null;
        $boot = static::bootReady();

        if(!empty($boot))
        $return = $boot->envType();

        return $return;
    }
}

// init
EnvType::__init();
?>