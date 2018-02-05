<?php

namespace Bot;

use E;
use Closure;

class Response
{
	use ResponseRoutes;

	private $responses = [];

	private $routes = [];

	public function __construct()
	{
	}

	private function set(Closure $condition, $action)
	{
		$this->responses[] = [$condition, $action];
	}

	public function buildResponse()
	{
		$e = E::gi();
		if (in_array($e['msg_type'], ['text', 'photo'])) {
			$this->buildRoutes($e);
			foreach ($this->responses as $val) {
				if ($val[0]($e)) {
					if ($val[1] instanceof Closure) {
						if ($val[1]($e)) {
							break;
						}
					} elseif (is_string($val[1])) {
						$val[1] = explode('@', $val[1], 2);
						$val[1][0] = "\\Bot\\Response\\".$val[1][0];
						$val[1][0] = new $val[1][0]($e);
						if (call_user_func_array([$val[1][0], $val[1][1]], [$e])) {
							break;
						}
					}
				}
			}
		}
	}

	public function sendResponse()
	{

	}
}
