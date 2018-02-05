<?php

namespace Bot;

class Bot
{
	private $response;

	public function __construct($input)
	{
		class_alias(Event::class, '\E');
		Event::getInstance($input);
		$this->response = new Response();
	}

	public function __call($method, $parameters)
	{
		return $this->response->{$method}(...$parameters);
	}

	public function terminate()
	{
	}
}
