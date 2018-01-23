<?php

shell_exec("nohup sudo git reset --hard && sudo git pull origin master && cd .. && php phpunit &");
