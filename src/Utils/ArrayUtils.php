<?php

namespace Utils;

trait ArrayUtils
{
	private $___r;

	private $container = [];

	public function __get($key)
	{
		return $this->___r;
	}

	public function &offsetGet($offset)
	{
		if (array_key_exists($offset, $this->container)) {
			return $this->container[$offset];
		} else {
			return $this->___r;
		}
	}

	public function offsetSet($offset, $value)
	{
		$this->container[$offset] = $value;
	}

	public function offsetExists($offset)
	{
		return array_key_exists($offset, $this->container);
	}

	public function offsetUnset($offset)
	{
		unset($this->container[$offset]);
	}
}
