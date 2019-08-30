<?php
declare(strict_types=1);

/*
 * This file is part of the QuidPHP package.
 * Website: https://quidphp.com
 * License: https://github.com/quidphp/core/blob/master/LICENSE
 */

namespace Quid\Core\Cms;
use Quid\Core;

// sitemap
// class for the sitemap.xml route of the CMS
class Sitemap extends Core\Route\Sitemap
{
	// config
	public static $config = [];
}

// config
Sitemap::__config();
?>