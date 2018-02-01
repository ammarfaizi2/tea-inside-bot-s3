<?php

class Connector
{
	public static function run()
	{
        shell_exec(PHP_BINARY.' "'.CONNECTOR_DIR.'/background.php" "'.urlencode(

            '{
    "update_id": 344653262,
    "message": {
        "message_id": 40938,
        "from": {
            "id": 243692601,
            "is_bot": false,
            "first_name": "Ammar",
            "last_name": "F.",
            "username": "ammarfaizi2",
            "language_code": "en-US"
        },
        "chat": {
            "id": 243692601,
            "first_name": "Ammar",
            "last_name": "F.",
            "username": "ammarfaizi2",
            "type": "private"
        },
        "date": 1517386204,
        "text": "!debug"
    }
}'

        /*file_get_contents('php://input')*/).'"');

        exit();



		shell_exec('nohup '.PHP_BINARY.' "'.CONNECTOR_DIR.'/background.php" "'.urlencode(

			'{
    "update_id": 344653262,
    "message": {
        "message_id": 40938,
        "from": {
            "id": 243692601,
            "is_bot": false,
            "first_name": "Ammar",
            "last_name": "F.",
            "username": "ammarfaizi2",
            "language_code": "en-US"
        },
        "chat": {
            "id": 243692601,
            "first_name": "Ammar",
            "last_name": "F.",
            "username": "ammarfaizi2",
            "type": "private"
        },
        "date": 1517386204,
        "text": "!debug"
    }
}'

		/*file_get_contents('php://input')*/).'" >> "'.LOG_DIR.'/bg.out" 2>&1 &');
	}
}
