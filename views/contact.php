<div class="contain p-10 flex flex-col items-center justify-center gap-10 md:flex-row md:gap-15">
    <div class="left-contain flex flex-col items-center justify-center text-center md:items-start md:text-start">
        <h1 class="text-[30px] font-bold">Contact Us</h1>
        <p class="text-[20px]">Have a project in mind or just want to say hello? Fill out the form, and our team at NovaCraft Studio will respond promptly.<br>
        We’re excited to hear from you and bring your ideas to life!</p>
    </div>
    <div class="right-contain w-full flex flex-col items-center justify-center gap-10">
        <h2 class="text-[30px] font-bold">Contact Us</h2>
        <form method="POST" class="w-full flex flex-col gap-5">
            <div  class="flex flex-col">
                <label for="fullname" class="text-[18px]">FULL NAME</label>
                <input class="border-[3px] rounded-[10px] p-[15px]" name="name" type="text" id="fullname" placeholder="FULL NAME"/>
            </div>
            <div  class="flex flex-col">
                <label for="email" class="text-[18px]">EMAIL</label>
                <input class="border-[3px] rounded-[10px] p-[15px]" name="email" type="text" id="email" placeholder="FULL NAME"/>
            </div>
            <div  class="flex flex-col">
                <label for="message" class="text-[18px]">MESSAGE</label>
                <textarea class="h-[200px] border-[3px] rounded-[10px] p-[15px] resize-none" name="message" type="text" id="message" placeholder="MESSAGE"></textarea>
            </div>
            <div class="sub w-full flex flex-row items-center justify-center">
                <button type="submit" class="border-2 w-[200px] h-[50px] rounded-[10px]">SEND</button>
            </div>
        </form>
    </div>
    <div class="Message" id="Message"></div>
</div>

<?php
    $arrayINFO = [];

    $name;
    $email;
    $message;

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(empty($_POST['name']))
        {
            echo '<div class="popup fixed top-20 right-0 translate-x-0 opacity-100 transition-all duration-[5s] p-4 bg-red-700 text-white rounded shadow-lg flex flex-row items-center justify-center">
            <i class="fas fa-multiply text-2xl text-white"></i>Veuillez entrer un nom valide.</div>';
        }
        if (empty($_POST['email'])) {
            echo '<div class="popup fixed top-20 right-0 translate-x-0 opacity-100 transition-all duration-[5s] p-4 bg-red-700 text-white rounded shadow-lg flex flex-row items-center justify-center">
            <i class="fas fa-multiply text-2xl text-white"></i>Veuillez entrer un Email valide.</div>';
        }
        if(empty($_POST['message']))
        {
            echo '<div class="popup fixed top-20 right-0 translate-x-0 opacity-100 transition-all duration-[5s] p-4 bg-red-700 text-white rounded shadow-lg flex flex-row items-center justify-center">
            <i class="fas fa-multiply text-2xl text-white"></i>Veuillez entrer un Message pour Envoyer</div>';
        }
    }
?>