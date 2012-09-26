<?php
    require dirname(__DIR__).'/bootstrap.php';

    require VIEWS_PATH.'/_header.php';

    $page = isset($_GET['page']) ? $_GET['page'] : "";
    switch ($page) {
        case 'main':
        case 'downloads':
        case 'main':
            $view = $page;
            $menu = $page;
            break;

        case 'features':
        case 'start':
            $menu = $page;
            $view = "markdown";
            $content = $page.'.md';
            break;

        case '':
            $menu = "main";
            $view = "main";
            break;

        default:
            $menu = "404";
            $view = "404";
            break;
    }

    require VIEWS_PATH.'/_menu.php';
    require VIEWS_PATH.'/'.$view.'.php';
    require VIEWS_PATH.'/_footer.php';
?>
