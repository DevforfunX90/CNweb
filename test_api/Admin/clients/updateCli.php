

<?php 
    require("../../config/config.php");
    if(isset($_GET['id_clients'])){
        $id = $_GET['id_clients'];
        $sql_1 =  "SELECT * from clients where id_clients = {$id}";
        $test = mysqli_query($db, $sql_1);
        
        if (isset($_POST['txtSubmit'])) {

        
            // $id_info = $_POST['txtID']; //cái này cần thay đổi theo nhu cầu va mothod $_post['name'] (name là ở dưới html nha trong cái input ấy nó là 1 mothod của input)
            $id_info = $_POST['id'];
        
        $link = $_POST['link'];
        $note=$_POST['note'];
            // code từ dòng 12 -19 là upload file ảnh nếu ko cần thì xóa đi còn cần thì ko đụng tới gọi ra là dùng đc
            $target_dir    = "../../img/";
            $target_file   = $target_dir . basename($_FILES["img"]["name"]);
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); //cái này đéo biết nhưng kiểu định dạng đuôi hay sao ấy
            $maxfilesize   = 800000;// cái này giới hạn kích cỡ file
            $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','svg');// cái này giới hạn định dạng ảnh
            $img = $_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); // đây là câu lệnh upload ảnh lên db
            echo $img;
            $sql = "UPDATE clients SET  image='$img', link='$link',note='$note' WHERE id_clients ='$id' "; // ccàn thay câu lệnh này vào các bài khác
            
            if(mysqli_query($db,$sql)) {
                // echo "successfully added";
                header("Location:http://localhost/test_api/admin/clients/viewCli.php");
            }
            else{
               echo "Error";
            }
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<?php foreach ($test as $item) {?>
    <form method="POST" enctype="multipart/form-data">
        <table>
           <!-- <tr>
                <td>id_information</td>
                <td><input type="text" name='id' value="<?php echo $item['id']?>"></td>
            </tr> -->
            <tr>
                <td>Image</td>
                <td><input type="file" name='img' value="<?php echo $item['image']?>"></td>
            </tr>
            <tr>
                <td>Link</td>
                <td><input type="text" name='link' value="<?php echo $item['link']?>"></td>
            </tr>
            <tr>
                <td>Note</td>
                <td><input type="text" name='note' value="<?php echo $item['note']?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value='Submit' name='txtSubmit'></td>
            </tr>
        </table>

    </form>
    <?php } ?> 
</body>

</html>