<div class="contain p-10 flex flex-col items-center justify-center md:w-full md:justify-evenly gap-10 md:flex-row md:gap-15">
    <div class="left-contain md:w-full flex flex-col items-center justify-center text-center">
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
                <?php 
                    $namevef = "";
                    $verifName = "";
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
                ?>
                <p><?php echo $namevef; ?></p>
            </div>
            <div  class="flex flex-col">
                <label for="email" class="text-[18px]">EMAIL</label>
                <input class="border-[3px] rounded-[10px] p-[15px]" name="email" type="text" id="email" placeholder="FULL NAME"/>
                <?php 
                    $email = "";
                    $verifEmail = "";
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
                ?>
                <p><?php echo $email ?></p>
            </div>
            <div  class="flex flex-col">
                <label for="message" class="text-[18px]">MESSAGE</label>
                <textarea class="h-[200px] border-[3px] rounded-[10px] p-[15px] resize-none" name="message" type="text" id="message" placeholder="MESSAGE"></textarea>
                <?php 
                    $message = "";
                    if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST['message']))
                    {
                        $message = '<div class="popup text-red-700 ">Veuillez entrer un message valide.</div>';
                    }
                ?>
                <p><?php echo $message ?></p>
            </div>
            <div class="sub w-full flex flex-row items-center justify-center md:justify-end">
                <button type="submit" class="border-2 w-[200px] h-[50px] rounded-[10px] hover:bg-gray-900 hover:text-white hover:transition-all hover:duration-500 hover:ease-in-out">SEND</button>
            </div>
        </form>
    </div>
    <div class="Message" id="Message"></div>
</div>

<?php
    



    // if (empty($_POST['name'])) {
    //     $name =  '<div class="popup">Veuillez entrer un nom valide.</div>';
    // }

    // if (empty($_POST['email'])) {
    //     echo '<div class="popup absolute top-20 gap-5 right-0 translate-x-0 opacity-100 p-4 bg-red-700 text-white rounded shadow-lg flex items-center justify-center transition-all duration-[2s]">
    //             <i class="fas fa-times text-2xl"></i>Veuillez entrer un email valide.
    //           </div>';
    // }

    // if (empty($_POST['message'])) {
    //     echo '<div class="popup absolute top-20 gap-5 right-0 translate-x-0 opacity-100 p-4 bg-red-700 text-white rounded shadow-lg flex items-center justify-center transition-all duration-[2s]">
    //             <i class="fas fa-times text-2xl"></i>Veuillez entrer un message pour envoyer.
    //           </div>';
    // }

    

?>