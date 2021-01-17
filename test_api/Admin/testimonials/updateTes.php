
<?php 
    require("../../config/config.php");
    if(isset($_GET['id_testimonials'])){
        $id = $_GET['id_testimonials'];
        $sql_1 =  "SELECT * from testimonials where id_testimonials = {$id}";
        $rec = mysqli_query($db, $sql_1);
        echo '$rec';
        if(isset($_POST['txtSubmit'])){
            // $id_info = $_POST['txtID']; //cái này cần thay đổi theo nhu cầu va mothod $_post['name'] (name là ở dưới html nha trong cái input ấy nó là 1 mothod của input)
            $name = $_POST['name'];
            $note = $_POST['note'];
            
            // code từ dòng 12 -19 là upload file ảnh nếu ko cần thì xóa đi còn cần thì ko đụng tới gọi ra là dùng đc
            $target_dir    = "../img/";
            $target_file   = $target_dir . basename($_FILES["img"]["name"]);
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); //cái này đéo biết nhưng kiểu định dạng đuôi hay sao ấy
            $maxfilesize   = 800000;// cái này giới hạn kích cỡ file
            $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','svg');// cái này giới hạn định dạng ảnh
            $img = $_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); // đây là câu lệnh upload ảnh lên db

            $sql = "UPDATE testimonials SET id='$id_info',name=$name,note='$note',image='$img' WHERE id_testimonials ='$id' "; // ccàn thay câu lệnh này vào các bài khác

            if(mysqli_query($db, $sql)){
                // echo "Inserted successfully ^^";
                header("Location: http://localhost/test_api/admin/testimonials/viewTes.php");   //cai này là link sau khi cái if = true thì nó sẽ chạy về viewDoing
                // echo "$img";
            }
            else{
                echo "Error!";
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
<?php while($item =mysqli_fetch_array($rec)) {?>
    <form method="POST" enctype="multipart/form-data">
        <table>
           <tr>
                <td>id_information</td>
                <td><input type="text" name='id' value="<?php echo $item['id']?>"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name='name' value="<?php echo $item['name']?>"></td>
            </tr>
            <tr>
                <td>Note</td>
                <td><input type="text" name='note' value="<?php echo $item['note']?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name='image' value="<?php echo $item['image']?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value='Submit' name='txtSubmit'></td>
            </tr>
        </table>

    </form>
    <?php } ?> 
</body>

</html>