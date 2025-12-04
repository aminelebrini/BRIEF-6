<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<?php
    $Services = [
        [
            "icon" => "fas fa-object-group",
            "title" => "Custom UI/UX Design",
            "text" => "Crafting intuitive and visually appealing user interfaces for websites and mobile apps, optimized for user experience and conversion."
        ],
        [
            "icon" => "fas fa-palette",
            "title" => "Visual Identity & Branding",
            "text" => "Designing logos, brand guidelines, and cohesive visual assets to strengthen brand image and recognition."
        ],
        [
            "icon" => "fas fa-bullhorn",
            "title" => "Graphic Design & Marketing Assets",
            "text" => "Creating eye-catching visuals, infographics, banners, and digital content for marketing campaigns and online communication."
        ],
    ];
?>
<?php include __DIR__ . "/../templates/header.php"?>
<div class="w-full flex flex-col items-center justify-center gap-10 py-10 h-full md:h-[81vh]">
    <h1 class="text-4xl font-bold">Our Services</h1>
    <div class="w-full flex flex-col md:flex-row md:flex-wrap md:justify-center gap-5">
        <?php foreach($Services as $serv) { ?>
            <div class="flex flex-col items-center justify-center p-5 shadow-lg rounded-lg bg-white w-full md:w-[300px]">
                <i class="<?= $serv['icon'] ?> text-indigo-500 text-3xl"></i>
                <h2 class="text-xl font-medium mt-2"><?= $serv['title'] ?></h2>
                <p class="mt-2 text-center"><?= $serv['text'] ?></p>
            </div>
        <?php } ?>
    </div>
</div>
<?php include __DIR__ . "/../templates/footer.php" ?>
