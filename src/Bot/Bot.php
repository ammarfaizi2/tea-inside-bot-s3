<?php

namespace Bot;

class Bot
{
	public function __construct($input)
	{
		Event::getInstance($input);
	}
}
