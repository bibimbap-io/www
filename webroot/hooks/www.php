<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);
//update yourself
require dirname(dirname(__DIR__)).'/bootstrap.php';

chdir(ROOT_PATH);
shell_exec("HOME='/home/www-data' git pull origin master");
