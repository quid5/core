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
use Quid\Orm;

// json
// class for a column which manages json values
class Json extends Core\ColAlias
{
    // config
    protected static array $config = [
        'search'=>false,
        'check'=>['kind'=>'text']
    ];


    // onGet
    // sur le onGet du json
    protected function onGet($return,?Orm\Cell $cell=null,array $option)
    {
        $return = parent::onGet($return,$cell,$option);

        if(Base\Json::is($return))
        $return = Base\Json::decode($return);

        return $return;
    }


    // onSet
    // sur le onSet du json
    protected function onSet($return,?Orm\Cell $cell=null,array $row,array $option)
    {
        $return = parent::onSet($return,$cell,$row,$option);

        if(is_array($return) || is_object($return))
        $return = Base\Json::encode($return);

        return $return;
    }
}

// init
Json::__init();
?>