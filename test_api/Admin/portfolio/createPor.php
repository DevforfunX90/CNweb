<?php
// connect to database
require_once "../../config/config.php";
// if upload button is pressed

    if (isset($_POST['submit'])) {
     
        $id_info = $_POST['id'];
        $name = $_POST['name'];
        $description=$_POST['description'];
        
        $link=$_POST['link'];

        $target_dir    = "../../img/";
        $target_file   = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); //cái này đéo biết nhưng kiểu định dạng đuôi hay sao ấy
        $maxfilesize   = 800000;// cái này giới hạn kích cỡ file
        $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','svg');// cái này giới hạn định dạng ảnh
        $img = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

        //code sql 
        $sql ="INSERT INTO portfolio (id,name,description,image,link) VALUE ('$id_info','$name','$description','$img','$link')";
        
       //mysqli_query($db,$sql);
       // $db->query($sql);
        if(mysqli_query($db,$sql)) {
            //echo "successfully added";
            header("Location:http://localhost/test_api/admin/portfolio/viewPor.php");
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
<h1>Add Portfolio</h1>
    <form  method="post" enctype='multipart/form-data'>
    <div class="infor">
        
        <div class="position">
            <h4>id_information</h4>
            <input type="text" name="id" value="" id="">
        </div>
        <div class="position">
            <h4>Name</h4>
            <input type="text" name="name" value="" id="">
        </div>
        <div class="position">
            <h4>Desscription</h4>
            <input type="text" name="description" value="" id="">
        </div>
        <div class="position">
            <h4>Image</h4>
            <input type="file" name="img" value="" id="">
        </div>
        <div class="position">
            <h4>Link</h4>
            <input type="text" name="link" value="" id="">
        </div>
    </div>
    <div class="setting">
        <input type="submit" name="submit" value="Insert">
    </div>
    </form>
</body>
</html>