<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>NovaCraft</title>
</head>
<body>
    <?php include __DIR__ . "/../templates/header.php"?>
    <?php include __DIR__ . "/../templates/side-bar.php"?>
    <div class="container flex flex-col items-center justify-center h-[81vh] text-center">
        <h1 class="text-[60px] md:text-[60px] md:font-bold">404</h1>
        <h2 class="text-[40px] md:text-[40px]">Page Not Found</h2>
        <p class="text-[25px] w-[90%] md:text-[30px]">Sorry, the page you are looking for doesn’t exist.</p>
        <a href="/home" class="p-2 w-[150px] rounded-[10px] bg-gray-900 text-white text-center mt-5">Go Back Home</a>
    </div>
    <?php include __DIR__ . "/../templates/footer.php" ?>

    <script src="../scriptsJs/script.js"></script>
</body>
</html>