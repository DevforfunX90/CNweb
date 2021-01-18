<?php
require("../../config/config.php");
if(isset($_GET['id_clients'])){
    $id =$_GET['id_clients'];
    
    $sql="DELETE FROM clients where id_clients ={$id}";
    if(mysqli_query($db,$sql)){
        header("Location: http://localhost/test_api/admin/clients/viewCli.php");  
    };
}
?>