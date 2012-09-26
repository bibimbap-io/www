<?php
    $path_in = CONTENTS_PATH.'/'.$content;
    $path_ou = CONTENTS_PATH.'/'.$content.'.out';

    if (!file_exists($path_ou) || filemtime($path_in) > filemtime($path_ou)) {
        shell_exec("markdown $path_in -f $path_ou 2>&1");
    }

    if (file_exists($path_ou)) {
        readfile($path_ou);
    } else {
        readfile(VIEWS_PATH.'/404.php');
    }
?>
