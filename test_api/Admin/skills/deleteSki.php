<?php
require("../../config/config.php");
if(isset($_GET['id'])){
    $id =$_GET['id'];
    
    $sql="DELETE FROM skills where id_skills={$id}";
    if(mysqli_query($db,$sql)){
        header("Location: http://localhost/test_api/admin/skills/viewSki.php");  
    };
}
?>