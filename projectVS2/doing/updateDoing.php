<?php 
    require("../config/config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_1 =  "SELECT * from content where id_content = {$id}";
        $test = mysqli_query($db, $sql_1);

        if(isset($_POST['txtSubmit'])){
            $id_info = $_POST['txtID']; //cái này cần thay đổi theo nhu cầu va mothod $_post['name'] (name là ở dưới html nha trong cái input ấy nó là 1 mothod của input)
            $name = $_POST['txtName'];
            $des = $_POST['txtDes'];
            // code từ dòng 12 -19 là upload file ảnh nếu ko cần thì xóa đi còn cần thì ko đụng tới gọi ra là dùng đc
            $target_dir    = "../img/";
            $target_file   = $target_dir . basename($_FILES["img"]["name"]);
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); //cái này đéo biết nhưng kiểu định dạng đuôi hay sao ấy
            $maxfilesize   = 800000;// cái này giới hạn kích cỡ file
            $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','svg');// cái này giới hạn định dạng ảnh
            $img = $_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); // đây là câu lệnh upload ảnh lên db

            $sql = "UPDATE content SET   name='$name', desscription='$des', image='$img' WHERE id_content ='$id'"; // ccàn thay câu lệnh này vào các bài khác

            if(mysqli_query($db, $sql)){
                // echo "Inserted successfully ^^";
                header("Location: http://localhost/test_api/doing/viewDoing.php");   //cai này là link sau khi cái if = true thì nó sẽ chạy về viewDoing
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
    <title>Create View Doing</title>
</head>

<body>
    <?php foreach($test as $item) //cái foreach này có tác dụng để in ra từng file items 1 trong file data của content
     {?>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>id_info</td>
                <!-- khi update nhớ 2 cái giá trị của input nha: name và value (name để có thể get dữ liệu bằng cái $_post còn value thì để lấy dữ liệu về) -->
                <td><input type="text" name='txtID' value="<?php echo $item['id']?>"></td> 
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name='txtName' value="<?php echo $item['name']?>"></td>
            </tr>
            <tr>
                <td>Desscription</td>
                <td><input type="text" name='txtDes' value="<?php echo $item['desscription']?>"></td>
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
    </form>
    <?php } //có mở thì nhớ đóng nha ?> 
</body>

</html>