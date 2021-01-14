<?php
// connect to database
require_once "../config/config.php";
$msg ="";
// if upload button is pressed

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql_1 =  "SELECT * from info where id = {$id}";
    $test = mysqli_query($db, $sql_1);

    if (isset($_POST['submit'])) {
        // // the path to store the uploaded image
        $img = $_FILES['img']['name'];
        
        // basename show tail jpg or png ,...
        $target = "img/".basename($img);
        // get all submit data from the form
        
        $position = $_POST['position'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthday = $_POST['birthday'];
        $phone = $_POST['phone'];
        $gmail = $_POST['email'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $git = $_POST['git'];
        $skype = $_POST['skype'];
        $address = $_POST['address'];
        
        //code sql 
        $sql = "UPDATE info SET first_name='$firstName',last_name='$lastName',birthday='$birthday',address='$address',phone='$phone',position='$position',gmail='$gmail',skype='$skype',facebook='$facebook',git='$git',instagram='$instagram',image='$img' WHERE id = $id";
        mysqli_query($db,$sql);
        $db->query($sql);
        if(move_uploaded_file($_FILES['img']['tmp_name'],$target)) {
            $msg="image upload successly";
            
        }
        else{
            $msg="there was a problem uploading image";
            
        }
    }
}

require_once "../header.php";
?>
    <?php foreach($test as $item)
     {?>
    <form  method="post" enctype='multipart/form-data'>
    
    <h1>Information</h1>
    <div class="infor">
        
        <div class="position">
            <h4>Position</h4>
            <input type="text" name="position" value="<?php echo $item['position']?>" id="">
        </div>
        <div class="image">
            <h4 >Image</h4>
            <div >
                <span><i class="fas fa-images"></i> </span><input type="file" name="img" value="<?php echo $item['image']?>" src =""  alt="">
            </div>
        </div>
        <div class="first-name">
            <h4>First Name</h4>
            <input type="text" name="firstName" value="<?php echo $item['first_name']?>" id="">
        </div>
        <div class="last-name">
            <h4>Last Name</h4>
            <input type="text" name="lastName" value="<?php echo $item['last_name']?>" id="">
        </div>
        <div class="birthday">
            <h4>Birthday</h4>
            <input type="date" name="birthday" value="<?php echo $item['birthday']?>" id="">
        </div>
        <div class="phone">
            <h4>Phone</h4>
            <input type="text" name="phone" value="<?php echo $item['phone']?>" id="">
        </div>
        <div class="e-mail">
            <h4>Email</h4>
            <input type="text" name="email" value="<?php echo $item['gmail']?>" id="">
        </div>
        <div class="facebook">
            <h4>Facebook</h4>
            <input type="text" name="facebook" value="<?php echo $item['facebook']?>" id="">
        </div>
        <div class="instagram">
            <h4>Instagram</h4>
            <input type="text" name="instagram" value="<?php echo $item['instagram']?>" id="">
        </div>
        <div class="github">
            <h4>Github</h4>
            <input type="text" name="git" value="<?php echo $item['git']?>" id="">
        </div>
        <div class="skype">
            <h4>Skype</h4>
            <input type="text" name="skype" value="<?php echo $item['skype']?>" id="">
        </div>
        <div class="address">
            <h4>Address</h4>
            <input type="text" name="address" value="<?php echo $item['address']?>" id="">
        </div>
        
        
    </div>
    <div class="setting">
        <input type="submit" name="submit" value="Upload">
    </div>
    </form>
        <?php }?>
<?php
    require_once "../footer.php";
?>