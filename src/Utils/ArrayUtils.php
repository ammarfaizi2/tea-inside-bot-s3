<?php

namespace Utils;

trait ArrayUtils
{
	private $container = [];

	public function __get($key)
	{
		return null;
	}

	public function &offsetGet($offset)
	{
		return array_key_exists($offset, $this->container) ? $this->container[$offset] : $this->r;
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
