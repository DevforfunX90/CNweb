
<?php
require("../../config/config.php");
if(isset($_GET['id'])){
    $id =$_GET['id'];
    
    $sql="DELETE FROM experience where id_experience={$id}";
    if(mysqli_query($db,$sql)){
        header("Location: http://localhost/test_api/admin/experience/viewExpen.php");  
    };
}
?>