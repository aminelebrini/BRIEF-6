<?php
    $Contact = [];
    $message = "";
    $verifMessage = "";
    $namevef = "";
    $verifName = "";
    $email = "";
    $verifEmail = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $verifName = $_POST['name'];
                    
            if(empty($verifName))
            {
                $namevef = '<div class="popup text-red-700 ">Veuillez entrer Le nom</div>';
            }
            for($x = 0; $x < strlen($verifName); $x++)
            {
                if(!(($verifName[$x] >= 'a' && $verifName[$x] <= 'z') || ($verifName[$x] >= 'A' && $verifName[$x] <= 'Z') || $verifName[$x] === " "))
                {
                    $namevef = '<div class="text-red-700">Veuillez entrer un nom Valide</div>';
                }
            }
        }

        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $verifEmail = $_POST['email'];

            if(empty($verifEmail))
            {
                $email = '<div class="popup text-red-700 ">Veuillez entrer un email</div>';
            }
            if(!(str_ends_with($verifEmail, ".com") || str_ends_with($verifEmail, ".ma")))
            {
                $email = '<div class="popup text-red-700 ">Veuillez entrer un email valide.</div>';
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($verifMessage))
        {
            $verifMessage = $_POST['message'];
            if(empty($verifMessage))
            {
                $message = '<div class="popup text-red-700 ">Veuillez entrer un message valide.</div>';
            }
                        
        }
        array_push($Contact, [$verifName, $verifEmail, $verifMessage]);
?>