<?php
    include_once('dbconfig.php'); 
    $sql_cat = "SELECT cname FROM category";
    $result = $conn->query($sql_cat);
?>
<!DOCTYPE html>
<html lang="en-us">
<?php require('head.php'); ?>
<body>
    <?php require('header.php'); ?>

    <main>
        <!-- ================= Blogs ================ -->
        <section id="blogs" class="d-flex flex-column justify-content-center align-items-center">
            <div class="container text-white py-5 px-3 d-flex justify-content-center align-items-center flex-column">
                <h3 class="lucinda text-center pb-3">Blogs</h3>
                <div class="d-flex justify-content-between align-items-center position-relative py-2 row">
                    <div class="d-flex justify-content-center align-items-center position-relative col-sm-6 col-12">
                        <a href="javascript:void(0)" class="text-white text-decoration-none" onclick="dropdown()">Category</a>

                        <ul id="category" class="list-unstyled justify-content-center flex-column py-2 px-3 position-absolute">
                        <li class="py-1"><a href="javascript:void(0)" class="text-white text-decoration-none d-block">All</a></li>
                        <?php if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                            ?>
                            <li class="py-1"><a href="javascript:void(0)" class="text-white text-decoration-none d-block"><?php echo $row['cname'] ?></a></li>
                        <?php }} ?>
                        </ul>
                    </div>
                    <form method="GET" action="?" class="col-sm-6 col-12 d-flex justify-content-center align-items-center py-sm-0 py-3">
                        <input name="q" type="text" placeholder="Search" class="neumorphism-down border-0 outline-none py-2 px-3 w-50">
                        <input type="submit" value="Search" class="neumorphism-up border-0 outline-none py-2 px-3">
                    </form>
                </div>
                
                <div id="blogBox" class="row">
                    Loading please wait....
                </div>
            </div>
        </section>
    </main>
    <!-- ================= Footer ================ -->
    <?php include('footer.php'); ?>

    <script src="<?php require('host.php'); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php require('host.php'); ?>/js/all.min.js"></script>
    <script src="<?php require('host.php'); ?>/js/ajax.js"></script>
    <script src="<?php require('host.php'); ?>/js/app.js"></script>
</body>
</html>