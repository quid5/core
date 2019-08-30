<?php
declare(strict_types=1);

/*
 * This file is part of the QuidPHP package.
 * Website: https://quidphp.com
 * License: https://github.com/quidphp/core/blob/master/LICENSE
 */

namespace Quid\Core\Role;
use Quid\Core;

// editor
// class which contains the default configuration for the editor role
class Editor extends Core\RoleAlias
{
	// config
	public static $config = [
		'permission'=>60,
		'can'=>[
			'login'=>['app'=>true,'cms'=>true]],
		'db'=>[
			'*'=>[
				'rows'=>false,
				'in'=>false,
				'notIn'=>false,
				'insert'=>true,
				'update'=>true,
				'delete'=>true],
			'user'=>[
				'add'=>false],
			'session'=>[
				'view'=>false],
			'lang'=>[
				'view'=>false],
			'redirection'=>[
				'view'=>false],
			'email'=>[
				'view'=>false],
			'option'=>[
				'view'=>false],
			'queueEmail'=>[
				'view'=>false],
			'log'=>[
				'view'=>false],
			'logEmail'=>[
				'view'=>false],
			'logCron'=>[
				'view'=>false],
			'logError'=>[
				'view'=>false],
			'logHttp'=>[
				'view'=>false],
			'logSql'=>[
				'view'=>false]
		]
	];
}

// config
Editor::__config();
?>