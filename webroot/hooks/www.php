<?php
//update yourself
require dirname(dirname(__DIR__)).'/bootstrap.php';

chdir(ROOT_PATH);
shell_exec("git pull origin master");
