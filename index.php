<?php
    $page = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

    if($page === '/home')
    {
        $view = __DIR__ . "/views/$page.php";
    }
    else if($page === '/service')
    {
        $view = __DIR__ . "/views/$page.php";
    }
    else if($page === '/about')
    {
        $view = __DIR__ . "/views/$page.php";
    }
    else if($page === '/contact')
    {
        $view = __DIR__ . "/views/$page.php";
    }
    else{
        $view = __DIR__ . "/views/$page.php";
    }
    require_once __DIR__ . "/templates/layout.php";

?>