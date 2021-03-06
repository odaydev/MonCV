<?php
namespace App\Database;

class Hydrator {

	public static function hydrate(array $array, $object)
	{
		$instance = new $object;

		foreach($array as $key =>$value) {

			$method = self::getSetter($key);

			if(method_exists($instance, $method)) {
				$instance->$method($value);
			} else {
				$property = lcfirst(self::getProperty($key));
				$instance->$property = $value;
			}		
		}

		return $instance;
	}

	private static function getSetter(string $fieldname): string{
		return 'set' . self::getProperty($fieldname);
	}

	private static function getProperty(string $fieldname){
		return 'set' . join('', array_map('ucfirst', explode('_', $fieldname)));
	}
}