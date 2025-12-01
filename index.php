<?php
    $page = $_GET['page'] ?? 'home';

    $Pages = ["home", "services", "about", "contact"];

    if(!in_array($page, $Pages))
    {
        $page = 'home';
    }

    $view = "views/$page.php";
    include 'templates/layout.php';
?>