<?php
    $title = $_POST['title'];
    $sdesc = $_POST['sdesc'];
    $desc = $_POST['desc'];
    $filename = $_FILES['bannerImage']['name'];
    $filename = explode('.', $filename);
    echo $title;
    echo $sdesc;
    echo $desc;

    $folder = "./uploads/".$filename[0].date("YmdHi").".jpg";
	$tempname = $_FILES['bannerImage']["tmp_name"];

    if ( move_uploaded_file( $tempname, $folder ) ) {
        echo "Image uploaded successfully";
    } else{
        echo "Failed to upload image";
	}
?>