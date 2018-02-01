<?php

namespace Bot;

use ArrayAccess;
use Hub\Singleton;
use Utils\ArrayUtils;

class Event implements ArrayAccess
{
	use ArrayUtils, Singleton {
		Singleton::getInstance as gi;
	}

	protected function __construct($in)
	{
		$this['input'] = json_decode($in, true);
		if (isset($this['message'])) {
			# code...
		}
	}
}
