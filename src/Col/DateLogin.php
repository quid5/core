<?php
declare(strict_types=1);

/*
 * This file is part of the QuidPHP package.
 * Website: https://quidphp.com
 * License: https://github.com/quidphp/core/blob/master/LICENSE
 */

namespace Quid\Core\Col;
use Quid\Base;

// dateLogin
// class for the dateLogin column, current timestamp is applied automatically when the user logs in
class DateLogin extends DateAlias
{
    // config
    public static $config = [
        'general'=>false,
        'complex'=>'div',
        'date'=>'long',
        'visible'=>['validate'=>'notEmpty'],
        'onGet'=>[[Base\Date::class,'onGet'],'long'],
    ];
}

// config
DateLogin::__config();
?>