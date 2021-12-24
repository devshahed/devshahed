<header class="py-3">
    <nav class="row container-fluid justify-content-between align-items-center">
        <div class="logo col-lg-2 col-3 d-flex align-items-center">
            <a href="<?php require('host.php'); ?>/index.php" class="d-block"><img src="images/Please (1).png" alt="logo" style="width: 50px;"></a>
            <h4 class="text-white px-2 m-0 lucinda">Devshahed</h4>
        </div>
        <ul class="m-0 col-lg-10 col-8 list-unstyled flex-row justify-content-end align-items-center d-md-flex d-none">
            <li class="px-2"><a href="<?php require('host.php'); ?>/index.php" class="text-decoration-none text-white text-center p-2 px-4 neumorphism-up">Home</a></li>
            <li class="px-2"><a href="<?php require('host.php'); ?>/about.php" class="text-decoration-none text-white text-center p-2 px-4 neumorphism-up">About</a></li>
            <li class="px-2"><a href="<?php require('host.php'); ?>/blogs.php" class="text-decoration-none text-white text-center p-2 px-4 neumorphism-up">Blogs</a></li>
            <li class="px-2"><a href="<?php require('host.php'); ?>/contact.php" class="text-decoration-none text-white text-center p-2 px-4 neumorphism-up">Contact</a></li>
        </ul>
        <i onclick="sidebarShow()" class="fas fa-bars fa-2x text-white d-md-none col-1 d-block px-2 y-1 neumorphism-up" style="cursor: pointer;"></i>
    </nav>
    <ul id="sidebar" class="m-0 list-unstyled flex-column justify-content-center align-items-center d-none">
        <li class="py-3"><a href="<?php require('host.php'); ?>/index.php" class="text-decoration-none text-white text-center p-2 px-4">Home</a></li>
        <li class="py-3"><a href="<?php require('host.php'); ?>/about.php" class="text-decoration-none text-white text-center p-2 px-4">About</a></li>
        <li class="py-3"><a href="<?php require('host.php'); ?>/blogs.php" class="text-decoration-none text-white text-center p-2 px-4">Blogs</a></li>
        <li class="py-3"><a href="<?php require('host.php'); ?>/contact.php" class="text-decoration-none text-white text-center p-2 px-4">Contact</a></li>
    </ul>
</header>