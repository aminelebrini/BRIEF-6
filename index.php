<?php
    $page = $_GET['page'] ?? 'home';

    $Pages = ["home", "service", "about", "contact"];

    if(!in_array($page, $Pages))
    {
        $page = 'home';
    }

     $view = __DIR__ . "/views/$page.php";
    include __DIR__ . "/templates/layout.php";

?>