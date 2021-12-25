<?php
    $title = $_POST['title'];
    $sdesc = $_POST['sdesc'];
    $desc = $_POST['desc'];

    echo $title;
    echo $sdesc;
    echo $desc;

    $folder = "./uploads/".date("Y-m-d H:i:s").".jpg";
    echo $folder;
    $filename = $_FILES['bannerImage']['name'];
	$tempname = $_FILES['bannerImage']["tmp_name"];

    if ( move_uploaded_file( $tempname, $folder ) ) {
        echo "Image uploaded successfully";
    } else{
        echo "Failed to upload image";
	}
?>