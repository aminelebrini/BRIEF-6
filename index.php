<?php
    $page = $_GET['page'] ?? 'home';

    if($page === 'home')
    {
        $view = __DIR__ . "/views/$page.php";
    }
    else if($page === 'service')
    {
        $view = __DIR__ . "/views/$page.php";
    }
    else if($page === 'about')
    {
        $view = __DIR__ . "/views/$page.php";
    }
    else if($page === 'contact')
    {
        $view = __DIR__ . "/views/$page.php";
    }
    else{
        $view = __DIR__ . "/views/404.php";
    }
    include __DIR__ . "/templates/layout.php";

?>