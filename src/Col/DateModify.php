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

// dateModify
// class for a column which stores the current timestamp when the row is updated
class DateModify extends DateAlias
{
    // config
    protected static array $config = [
        'complex'=>'div',
        'visible'=>['validate'=>'notEmpty'],
        'date'=>'long',
        'duplicate'=>false,
        'onGet'=>[[Base\Datetime::class,'onGet'],'long'],
    ];


    // onUpdate
    // sur mise à jour, retourne le timestamp
    final protected function onUpdate(Core\Cell $cell,array $option):int
    {
        return Base\Datetime::now();
    }
}

// init
DateModify::__init();
?>