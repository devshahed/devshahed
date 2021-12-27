<?php
    include_once('dbconfig.php');
    $sql = "SELECT * FROM show_posts";
    $result = $conn->query($sql);
    function short_text($str, $len){
        echo strlen($str) <= $len? $str:substr($str, 0, $len) . "...";
    }
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
?>
    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 py-3">
        <div class="blog neumorphism-up overflow-hidden w-100 h-100">
            <div class="blog-img">
                <img class="w-100 h-100" src="<?php echo $row['banner_image']; ?>" alt="">
            </div>
            <div class="p-3">
                <h6><?php short_text($row['title'], 50); ?></h6>
                <p class="mb-1"><a href="blogs.php?cat=<?php echo $row['cname']; ?>" class="text-primary text-decoration-none text-small nunito"><?php echo $row['cname']; ?></a> <a href="blogs.php?date=<?php echo $row['post_time']; ?>" class="text-primary text-decoration-none text-small nunito"><?php echo date('d/m/Y', strtotime($row['post_time'])); ?></a>
                <p class="nunito"><?php short_text($row['short_desc'], 100); ?></p>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="post.php?id=1" class="neumorphism-up d-inline-block px-4 py-2 text-decoration-none text-white">Read more</a>
                </div>
            </div>
        </div>
    </div>
<?php }}else{
    echo "No posts found";
} ?>