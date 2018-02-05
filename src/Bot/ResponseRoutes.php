<?php

namespace Bot;

trait ResponseRoutes
{
	private function buildRoutes($e)
	{
		$this->set(
			function () {
				return true;
			},
			"Help@showHelp"
		);
	}
}
