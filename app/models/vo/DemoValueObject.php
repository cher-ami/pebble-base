<?php

namespace app\models\vo;

use pebble\models\ValueObject;

class DemoValueObject extends ValueObject
{
	/**
	 * @see ValueObject comments
	 */

	/**
	 * This is a property existing inside your table as my_database_prop.
	 * Note the use of snake_case here.
	 * @var string
	 */
	public $my_database_prop;

	/**
	 * @var string
	 */
	public $other_database_prop;
}