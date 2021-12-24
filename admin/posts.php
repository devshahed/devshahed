<!DOCTYPE html>
<html lang="en-us">
<?php require('../head.php'); ?>
<body>
    <?php include('header.php'); ?>
    <main>
        <!-- ================= Posts ================ -->
        <section class="d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <?php include('post.php'); ?>
            </div>
        </section>
    </main>
    <script src="<?php require('host.php'); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php require('host.php'); ?>/js/all.min.js"></script>
    <script src="<?php require('host.php'); ?>/js/app.js"></script>
</body>
</html>