<?php
declare(strict_types=1);

/*
 * This file is part of the QuidPHP package.
 * Website: https://quidphp.com
 * License: https://github.com/quidphp/core/blob/master/LICENSE
 */

namespace Quid\Core\Col;
use Quid\Orm;

// active
// class for the active column - a simple yes checkbox
class Active extends YesAlias
{
    // config
    public static $config = [];


    // onDuplicate
    // callback sur duplication, retourne null
    final protected function onDuplicate($return,array $row,Orm\Cell $cell,array $option)
    {
        return;
    }
}

// init
Active::__init();
?>