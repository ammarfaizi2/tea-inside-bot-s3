<?php

class Bot
{
	public static function __callStatic($method, $parameters)
	{
		$opt = [
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_SSL_VERIFYHOST => false
			];
			
		if (($i = isset($parameters[1])) and ($parameters[1] = strtolower($parameters[1])) === 'get') {
			$ch = curl_init("https://api.telegram.org/bot".TOKEN."/".$method."?".http_build_query($parameters[0]));
		} else {
			$ch = curl_init("https://api.telegram.org/bot".TOKEN."/".$method);
			if ($i) {
				if ($parameters[1] === 'post-url') {
					$post = http_build_query($parameters[0]);
				} else {
					$post = $parameters[0];
				}
			} else {
				$post = http_build_query($parameters[0]);
			}
			$opt[CURLOPT_POST] = true;
			$opt[CURLOPT_POSTFIELDS] = $post;
		}

		if (isset($parameters[2]) && is_array($parameters[2])) {
			foreach ($parameters[2] as $key => $val) {
				$opt[$key] = $val;
			}
		}

		curl_setopt_array($ch, $opt);

		$out = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);

		return [
			'out' => $out,
			'info' => $info
		];
	}
}