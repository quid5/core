<?php
declare(strict_types=1);
namespace Quid\Core\File;
use Quid\Base;

// json
class Json extends TextAlias
{
	// config
	public static $config = [
		'group'=>'json',
		'type'=>'json'
	];
	
	
	// readGet
	// permet de faire une lecture et retourner seulement une valeur de l'objet json
	public function readGet($key=null) 
	{
		$return = null;
		$source = $this->read();
		
		if(is_array($source))
		$return = Base\Arrs::get($key,$source);
		
		return $return;
	}
}

// config
Json::__config();
?>