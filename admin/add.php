<!DOCTYPE html>
<html lang="en-us">
<?php
$host = $_SERVER['HTTP_HOST'];
$head = $host.'/head.php';
include('../head.php'); ?>
<body class="bg-white">
    <header class="py-3 border-bottom">
        <nav class="row container-fluid justify-content-between align-items-center">
            <div class="logo col-lg-2 col-3 d-flex align-items-center">
                <a href="<?php require('host.php'); ?>/index.php" class="d-block"><img src="<?php require('host.php'); ?>/images/Please (1).png" alt="logo" style="width: 50px;"></a>
                <h4 class="text-danger px-2 m-0 lucinda">Devshahed</h4>
            </div>
            <ul class="m-0 col-lg-10 col-8 list-unstyled flex-row justify-content-end align-items-center d-md-flex d-none">
                <li class="px-2"><a href="<?php require('host.php'); ?>/admin/index.php" class="text-decoration-none text-white text-center p-2 px-4 bg-danger text-white rounded-pill">Dashboard</a></li>
                <li class="px-2"><a href="<?php require('host.php'); ?>/admin/posts.php" class="text-decoration-none text-white text-center p-2 px-4 bg-danger text-white rounded-pill">Posts</a></li>
                <li class="px-2"><a href="<?php require('host.php'); ?>/admin/users.php" class="text-decoration-none text-white text-center p-2 px-4 bg-danger text-white rounded-pill">Users</a></li>
            </ul>
            <i onclick="sidebarShow()" class="fas fa-bars fa-2x text-white d-md-none col-1 d-block px-2 y-1 bg-danger" style="cursor: pointer;"></i>
        </nav>
        <ul id="sidebar" class="m-0 list-unstyled flex-column justify-content-center align-items-center d-none">
            <li class="py-3"><a href="<?php require('host.php'); ?>/admin/index.php" class="text-decoration-none text-white text-center p-2 px-4">Dashboard</a></li>
            <li class="py-3"><a href="<?php require('host.php'); ?>/admin/posts.php" class="text-decoration-none text-white text-center p-2 px-4">Posts</a></li>
            <li class="py-3"><a href="<?php require('host.php'); ?>/admin/users.php" class="text-decoration-none text-white text-center p-2 px-4">Users</a></li>
        </ul>
    </header>
    <main>
        <!-- ================= Edit ================ -->
        <section id="edit" class="d-flex flex-column justify-content-center align-items-center">
            <div class="container d-flex flex-column justify-content-center align-items-center py-3">
                <div id="saved"></div>
                <h5>Title</h5>
                <input class="text-dark outline-none border border-danger border-3 p-2 w-100 my-3" type="text" name="title">
                <h5>Description</h5>
                <div enctype='multipart/form-data' method="POST" action="savepost.php" class="d-flex justify-content-center align-items-center my-3">
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="bold"><i class="fas fa-bold"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="italic"><i class="fas fa-italic"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="underline"><i class="fas fa-underline"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="justifyLeft"><i class="fas fa-align-left"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="justifyCenter"><i class="fas fa-align-center"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="justifyFull"><i class="fas fa-align-justify"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="justifyRight"><i class="fas fa-align-right"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="insertImage"><i class="fas fa-images"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="createLink"><i class="fas fa-link"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="insertOrderedList"><i class="fas fa-list-ol"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="insertUnorderedList"><i class="fas fa-list"></i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="formatBlock" data-tag="h1">H1</button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="formatBlock" data-tag="h2">H2</i></button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="formatBlock" data-tag="h3">H3</button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="formatBlock" data-tag="h4">H4</button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="formatBlock" data-tag="h5">H5</button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="formatBlock" data-tag="h6">H6</button>
                    <button class="bg-white text-danger p-2 border border-2 border-danger mx-2" type="button" data-cmd="formatBlock" data-tag="p">P</button>
                    <select class="bg-white text-danger p-2 border border-2 border-danger mx-2" data-cmd="fontSize" name="font-size" id="fontSizeSelect">
                        <?php for($i = 1; $i < 8; $i++){
                            if($i == 3){
                                echo "<option selected value=\"$i\">$i</option>";
                            }else{
                                echo "<option value=\"$i\">$i</option>";
                            }
                        } ?>
                        
                    </select>
                </div>
                <iframe class="border border-danger border-3 p-2 w-100 my-3" id="output" name="textField"></iframe>
                <input class="text-danger p-2 bg-white border border-4 border-danger" onclick="submit()" type="button" value="Submit">
            </div>
        </section>
    </main>
    <script src="<?php require('host.php'); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php require('host.php'); ?>/js/all.min.js"></script>
    <script src="<?php require('host.php'); ?>/js/app.js"></script>
    <script src="<?php require('host.php'); ?>/admin/js/admin.js"></script>
</body>
</html>