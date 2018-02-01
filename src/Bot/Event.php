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
		$this['msg_type'] = isset($input['message'])
	}
}
