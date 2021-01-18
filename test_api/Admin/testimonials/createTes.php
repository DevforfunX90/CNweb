
<?php 
    require("../../config/config.php");
    if(isset($_POST['txtSubmit'])){
        // $id_info = $_POST['txtID']; //cái này cần thay đổi theo nhu cầu va mothod $_post['name'] (name là ở dưới html nha trong cái input ấy nó là 1 mothod của input)
        $name = $_POST['name'];
        $note = $_POST['note'];
        
        // code từ dòng 12 -19 là upload file ảnh nếu ko cần thì xóa đi còn cần thì ko đụng tới gọi ra là dùng đc
        $target_dir    = "../../img/";
        $target_file   = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); //cái này đéo biết nhưng kiểu định dạng đuôi hay sao ấy
        $maxfilesize   = 800000;// cái này giới hạn kích cỡ file
        $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','svg');// cái này giới hạn định dạng ảnh
        $img = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); // đây là câu lệnh upload ảnh lên db

        $sql ="INSERT INTO testimonials (id,name,note,image) VALUE ('$id_info','$name','$note','$img')"; // ccàn thay câu lệnh này vào các bài khác

        if(mysqli_query($db, $sql)){
            // echo "Inserted successfully ^^";
            header("Location: http://localhost/test_api/admin/testimonials/viewTes.php");   //cai này là link sau khi cái if = true thì nó sẽ chạy về viewDoing
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
    <title>Document</title>
</head>
<body>
<h1>Add Testimonials</h1>
    <form  method="post" enctype='multipart/form-data'>
    <div class="infor" align="center">
        
        <div class="position">
            <h4>id_information</h4>
            <input type="text" name="id" value="" id="">
        </div>
        <div class="position">
            <h4>Name</h4>
            <input type="text" name="name" value="" id="">
        </div>
        <div class="position">
            <h4>Note</h4>
            <input type="text" name="note" value="" id="">
        </div>
        <div class="position">
            <h4>Image</h4>
            <input type="file" name="img" value="" id="">
        </div>
    </div>
    <div class="setting">
        <input type="submit" name="submit" value="Insert">
    </div>
    </form>
</body>
</html>