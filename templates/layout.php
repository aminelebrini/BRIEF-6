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
<?php include __DIR__ . "/header.php";?>
<?php include __DIR__ . "/side-bar.php"; ?>
<main class="w-full">
    <?php   include $view;?>
</main>
<?php include __DIR__ . "/footer.php";?>
<script src="../scriptsJs/script.js"></script>
</body>
</html>
