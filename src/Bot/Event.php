<?php

namespace Bot;

use ArrayAccess;
use Utils\ArrayUtils;

class Event implements ArrayAccess
{
	use ArrayUtils, Singleton;

	protected function __construct($in)
	{

	}
}
