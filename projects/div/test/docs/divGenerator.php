<?php

/**
 * Class divGenerator
 *
 * Sub class of Div PHP Template Engine for code generators
 *
 * @author  Rafa Rodriguez [@rafageist]
 * @version 1.0
 */
class divGenerator extends div
{
	/**
	 * divGenerator constructor.
	 *
	 * @param string $src
	 * @param mixed  $items
	 * @param array  $ignore
	 */
	public function __construct($src = null, $items = null, $ignore = [])
	{
		self::addCustomModifier('camel:', function($value){
			$new_value = '';
			$parts = explode('_', $value);
			foreach($parts as $part) $new_value .= ucfirst(trim($part));
			return $new_value;
		});

		return parent::__construct($src, $items, $ignore);
	}
}