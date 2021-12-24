<!DOCTYPE html>
<html lang="en-us">
<?php require('head.php'); ?>
<body>
    <?php require('header.php'); ?>

    <main>
        <!-- ================= Contact ================ -->
        <section id="contact" class="d-flex flex-column justify-content-center align-items-center">
            <div class="container text-white neumorphism-up py-5 px-3">
                <h3 class="lucinda text-center pb-3">Contact me</h3>
                <form action="send.php" method="POST" class="row">
                    <div class="col-sm-6 col-12">
                        <input id="fname" name="fname" type="text" placeholder="First Name" class="neumorphism-down border-0 outline-none w-100 p-3 my-3">
                    </div>
                    <div class="col-sm-6 col-12">
                        <input id="lname" name="lname" type="text" placeholder="Last Name" class="neumorphism-down border-0 outline-none w-100 p-3 my-3">
                    </div>
                    <div class="col-sm-6 col-12">
                        <input id="email" name="email" type="email" placeholder="Email" class="neumorphism-down border-0 outline-none w-100 p-3 my-3">
                    </div>
                    <div class="col-sm-6 col-12">
                        <input id="phone" name="phone" type="text" placeholder="Phone" class="neumorphism-down border-0 outline-none w-100 p-3 my-3">
                    </div>
                    <div class="col-12">
                        <textarea name="message" id="message" cols="5" rows="3" placeholder="Message" class="neumorphism-down border-0 outline-none w-100 p-3 my-3"></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <input id="submitBtn" type="submit" value="Send" class="neumorphism-up border-0 outline-none rounded-pill py-3 px-5 mt-3">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- ================= Footer ================ -->
    <?php include('footer.php'); ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>