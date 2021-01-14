<?php
require_once "./config/config.php";
// connect to database
// $error = false;

// $msg="";
// if upload button is pressed
if (isset($_POST['submit'])) {
    $img = $_FILES['img']['name'];
    // // the path to store the uploaded image
    $target = "img/".basename($img);
    
    echo "hello";
    // get all submit data from the form
    
    $position = $_POST['position'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $gmail = $_POST['email'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $git = $_POST['git'];
    $skype = $_POST['skype'];
    $address = $_POST['address'];
    
    $sql ="insert info( first_name, last_name, birthday, address, phone, position, gmail, skype, facebook, git, instagram, image) values ('$firstName','$lastName','$birthday','$address','$phone','$position','$gmail','$skype','$facebook','$git','$instagram','$img')";
    
    mysqli_query($db,$sql);
    $db->query($sql);
    if(move_uploaded_file($_FILES['img']['tmp_name'],$target)) {
        $msg="image upload successly";
        echo "thanh cong";
    }
    else{
        $msg="there was a problem uploading image";
        // $error = true;
    }
}

?>