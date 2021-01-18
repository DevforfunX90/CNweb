<?php
// connect to database
require_once "../../config/config.php";
// if upload button is pressed

    if (isset($_POST['submit'])) {
    
        $id_info = $_POST['id'];
        
        $link = $_POST['link'];
        $note=$_POST['note'];

        $target_dir    = "../../img/";
        $target_file   = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $maxfilesize   = 800000;
        $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','svg');
        $img = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

        //code sql 
        $sql ="INSERT INTO clients (id,image,link,note) VALUE ('$id_info','$img','$link','$note')";
        
       //mysqli_query($db,$sql);
       // $db->query($sql);
        if(mysqli_query($db,$sql)) {
            //echo "successfully added";
            header("Location:http://localhost/test_api/admin/clients/viewCli.php");
        }
        else{
           echo "Error";
            
        }
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add Clients</h1>
    <form  method="post" enctype='multipart/form-data'>
    <div class="infor">
        
        <div class="position">
            <h4>id_information</h4>
            <input type="text" name="id" value="" id="">
        </div>
        <div class="position">
            <h4>Image</h4>
            <input type="file" name="img" value="" id="">
        </div>
        <div class="position">
            <h4>Link</h4>
            <input type="text" name="link" value="" id="">
        </div>
        <div class="position">
            <h4>Note</h4>
            <input type="text" name="note" value="" id="">
        </div>
    </div>
    <div class="setting">
        <input type="submit" name="submit" value="Insert">
    </div>
    </form>
</body>
</html>