<?php

namespace Bot\Response;

use Bot as B;
use Bot\ResponseAbstraction as Response;

class Help extends Response
{
	public function showHelp($e)
	{
		$a = B::sendMessage(
			[
				"chat_id" => $e["chat_id"],
				"text" => $e["text"]
			]
		);
		var_dump($a);
	}
}
