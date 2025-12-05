<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>NovaCraft</title>
</head>
<body>
<?php include __DIR__ . "/../templates/header.php"?>
<?php include __DIR__ . "/../templates/side-bar.php"?>
<div class="contain p-10 flex flex-col items-center justify-center md:w-full md:justify-evenly gap-10 md:flex-row md:gap-15">
    <div class="left-contain md:w-full flex flex-col items-center justify-center text-center md:text-left">
        <h1 class="text-[30px] font-bold md:text-left">Contact Us</h1>
        <p class="text-[20px] text-center md:text-left">Have a project in mind or just want to say hello? Fill out the form, and our team at NovaCraft Studio will respond promptly.<br>
        We’re excited to hear from you and bring your ideas to life!</p>
    </div>
    <div class="right-contain w-full flex flex-col items-center justify-center gap-10">
        <h2 class="text-[30px] font-bold">Contact Us</h2>
        <form method="POST" class="w-full flex flex-col gap-5">
            <div  class="flex flex-col">
                <label for="fullname" class="text-[18px]">FULL NAME</label>
                <input class="border-[3px] rounded-[10px] p-[15px]" name="name" type="text" id="fullname" placeholder="FULL NAME"/>
                <p><?= $nameErr; ?></p>
            </div>
            <div  class="flex flex-col">
                <label for="email" class="text-[18px]">EMAIL</label>
                <input class="border-[3px] rounded-[10px] p-[15px]" name="email" type="text" id="email" placeholder="EMAIL"/>
                <p><?= $emailErr ?></p>
            </div>
            <div  class="flex flex-col">
                <label for="message" class="text-[18px]">MESSAGE</label>
                <textarea class="h-[200px] border-[3px] rounded-[10px] p-[15px] resize-none" name="message" type="text" id="message" placeholder="MESSAGE"></textarea>
                <p><?= $messageErr ?></p>
            </div>
            <div class="sub w-full flex flex-row items-center justify-center md:justify-end">
                <button type="submit" class="border-2 w-[200px] h-[50px] rounded-[10px] hover:bg-gray-900 hover:text-white hover:transition-all hover:duration-500 hover:ease-in-out">SEND</button>
            </div>
        </form>
    </div>
</div>
 <?php
    $Contact = [];
    $messageErr = "";
    $verifMessage = "";
    $nameErr = "";
    $verifName = "";
    $emailErr = "";
    $verifEmail = "";
    $allowSend = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
            $verifName = $_POST['name'];
                    
            if(empty($verifName))
            {
                $nameErr = '<div class="popup text-red-700 ">Veuillez entrer Le nom</div>';
            }
            for($x = 0; $x < strlen($verifName); $x++)
            {
                if(!(($verifName[$x] >= 'a' && $verifName[$x] <= 'z') || ($verifName[$x] >= 'A' && $verifName[$x] <= 'Z') || $verifName[$x] === " "))
                {
                    $nameErr = '<div class="text-red-700">Veuillez entrer un nom Valide</div>';
                }
            }

            $verifEmail = $_POST['email'];

            if(empty($verifEmail))
            {
                $emailErr = '<div class="popup text-red-700 ">Veuillez entrer un email</div>';
            }
            if(!(str_ends_with($verifEmail, ".com") || str_ends_with($verifEmail, ".ma")))
            {
                $emailErr = '<div class="popup text-red-700 ">Veuillez entrer un email valide.</div>';
            }

            $verifMessage = $_POST['message'];
            if(empty($verifMessage))
            {
                $messageErr = '<div class="popup text-red-700 ">Veuillez entrer un message valide.</div>';
            }
                        

        if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {

        echo '<div class="popupsucess bg-green-500 p-5 fixed top-20 right-0">
            <h1 class="text-2xl text-white"><i class="fas fa-check-square"></i> Votre message a bien été envoyé !</h1>
        </div>';
        echo '
            <form id="autoSend" action="https://formspree.io/f/xgvgzled" method="POST">
                <input type="hidden" name="name" value="' . $verifName . '">
                <input type="hidden" name="email" value="' . $verifEmail . '">
                <input type="hidden" name="message" value="' . $verifMessage . '">
            </form>
            <script>
                document.getElementById("autoSend").submit();
            </script>';
        }
        echo '<div class="popupsucess bg-red-500 p-5 fixed top-20 right-0">
                <h1 class="text-2xl text-white"><i class="fas fa-multiply text-2xl"></i> Votre message n&apos; a pas pu être envoyé. !</h1>
            </div>';
    }
?>
    <?php include __DIR__ . "/../templates/footer.php" ?>
    <script src="../scriptsJs/script.js"></script>
</body>
</html>

