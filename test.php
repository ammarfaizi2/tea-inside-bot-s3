<?php

function scanner($dir)
{
	$dir = realpath($dir);
	$result = [];
	foreach (scandir($dir) as $val) {
		if (! in_array($val, ['.', '..'])) {
			if (is_dir($dir.'/'.$val)) {
				$result[] = $dir.'/'.$val;
				$result = array_merge($result, scanner($dir.'/'.$val));
			} else {
				$result[] = $dir.'/'.$val;
			}
		}
	}
	return $result;
}

$a = scanner('.');
print_r($a);