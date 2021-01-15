<?php
require("../config/config.php");
if(isset($_GET['id'])){
    $id =$_GET['id'];
    // echo $id;
    $sql="DELETE FROM content where id_content={$id}";
    if(mysqli_query($db,$sql)){
        header("Location: http://localhost/test_api/doing/viewDoing.php");  
    };
}
?>