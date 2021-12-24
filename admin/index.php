<!DOCTYPE html>
<html lang="en-us">
<?php
$host = $_SERVER['HTTP_HOST'];
$head = $host.'/head.php';
include('../head.php'); ?>
<body>
    <?php include('header.php'); ?>
    <main>
        <!-- ================= Admin ================ -->
        <section id="home" class="d-flex flex-column justify-content-center align-items-center">
            <div class="my-4 container text-white neumorphism-up py-5 px-3 d-flex justify-content-center align-items-center flex-column">
                <h1 class="display-1 text-center charu">Welcome Devshahed</h1>
                <p>Total post: <span>100</span></p>
                <p>Total users: <span>10</span></p>
            </div>
            <?php include('footer.php'); ?>
        </section>
    </main>
    <script src="<?php require('host.php'); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php require('host.php'); ?>/js/all.min.js"></script>
    <script src="<?php require('host.php'); ?>/js/app.js"></script>
</body>
</html>