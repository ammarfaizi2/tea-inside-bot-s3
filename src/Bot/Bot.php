<?php

namespace Bot;

class Bot
{
	public function __construct($input)
	{
		class_alias(Event::class, '\E');
		Event::getInstance($input);
	}

	public function run()
	{
	}
}
