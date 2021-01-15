<?php 
    require("../config/config.php");
    if(isset($_POST['txtSubmit'])){
        $id_info = $_POST['txtID'];
        $name = $_POST['txtName'];
        $des = $_POST['txtDes'];

        $target_dir    = "../img/";
        $target_file   = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $maxfilesize   = 800000;
        $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','svg');
        $img = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

        $sql = "INSERT INTO content (id, name, desscription, image) VALUES ('$id_info', '$name', '$des', '$img')";

        if(mysqli_query($db, $sql)){
            // echo "Inserted successfully ^^";
            header("Location: http://localhost/test_api/doing/viewDoing.php");   
            // echo "$img";
        }
        else{
            echo "Error!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create View Doing</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>id_info</td>
                <td><input type="text" name='txtID'></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name='txtName'></td>
            </tr>
            <tr>
                <td>Desscription</td>
                <td><input type="text" name='txtDes'></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="img" /></td>
            </tr>
            <tr>
                <td><input type="submit" value='Submit' name='txtSubmit'></td>
            </tr>
        </table>
    </form>
</body>
</html>