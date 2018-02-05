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
		$in = json_decode($in, true);
		$this["input"] = $in;
		
		if (isset($in["message"]["text"])) {
			// user info
			$this["user_id"] = $in["message"]["from"]["id"];
			$this["is_bot"] = $in["message"]["from"]["is_bot"];
			$this["first_name"] = $in["message"]["from"]["first_name"];
			$this["last_name"] = isset($in["message"]["from"]["last_name"]) ? $in["message"]["from"]["last_name"] : null;
			$this["name"] = $this["first_name"].($this["last_name"] !== null ? " ".$this["last_name"] : "");
			$this["username"] = isset($in["message"]["from"]["username"]) ? $in["message"]["from"]["username"] : null;
			$this["lang_code"] = isset($in["message"]["from"]["language_code"]) ? $in["message"]["from"]["language_code"] : null;

			// chat info
			$this["msg_id"] = $in["message"]["message_id"];
			$this["msg_type"] = "text";
			$this["text"] = $in["message"]["text"];
			$this["chat_id"] = $in["message"]["chat"]["id"];
			$this["chat_type"] = $in["message"]["chat"]["type"];
			$this["date"] = $in["message"]["date"];
		}
	}
}
