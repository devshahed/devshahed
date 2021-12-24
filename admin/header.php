<header class="py-3">
    <nav class="row container-fluid justify-content-between align-items-center">
        <div class="logo col-lg-2 col-3 d-flex align-items-center">
            <a href="<?php require('host.php'); ?>/index.php" class="d-block"><img src="<?php require('host.php'); ?>/images/Please (1).png" alt="logo" style="width: 50px;"></a>
            <h4 class="text-white px-2 m-0 lucinda">Devshahed</h4>
        </div>
        <ul class="m-0 col-lg-10 col-8 list-unstyled flex-row justify-content-end align-items-center d-md-flex d-none">
            <li class="px-2"><a href="<?php require('host.php'); ?>/admin/index.php" class="text-decoration-none text-white text-center p-2 px-4 neumorphism-up">Dashboard</a></li>
            <li class="px-2"><a href="<?php require('host.php'); ?>/admin/posts.php" class="text-decoration-none text-white text-center p-2 px-4 neumorphism-up">Posts</a></li>
            <li class="px-2"><a href="<?php require('host.php'); ?>/admin/users.php" class="text-decoration-none text-white text-center p-2 px-4 neumorphism-up">Users</a></li>
        </ul>
        <i onclick="sidebarShow()" class="fas fa-bars fa-2x text-white d-md-none col-1 d-block px-2 y-1 neumorphism-up" style="cursor: pointer;"></i>
    </nav>
    <ul id="sidebar" class="m-0 list-unstyled flex-column justify-content-center align-items-center d-none">
        <li class="py-3"><a href="<?php require('host.php'); ?>/admin/index.php" class="text-decoration-none text-white text-center p-2 px-4">Dashboard</a></li>
        <li class="py-3"><a href="<?php require('host.php'); ?>/admin/posts.php" class="text-decoration-none text-white text-center p-2 px-4">Posts</a></li>
        <li class="py-3"><a href="<?php require('host.php'); ?>/admin/users.php" class="text-decoration-none text-white text-center p-2 px-4">Users</a></li>
    </ul>
</header>