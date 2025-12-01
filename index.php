<?php
    $page = $_GET['page'] ?? 'home';

    $Pages = ["home", "services", "about", "contact"];

    if(!in_array($page, $Pages))
    {
        $page = 'home';
    }

    $view = "views/$page.php";
    include __DIR__ . "/templates/layout.php";

?>