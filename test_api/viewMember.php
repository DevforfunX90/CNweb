<?php
    require_once "./header.php";
    require_once "./config/config.php";
    $sql = 'select * from info';
    $rec = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/basic_brand.png">
    <title>Information</title>
</head>
<body>
<table class="table" border=1 style="border-collapse: collapse" align="center">
    <thead>
        <tr>
            
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>birth day</th>
            <th>address</th>
            <th colspan=2>Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td scope='row'><?php echo $item['id']?></td>
                <td><?php echo $item['last_name']?></td>
                <td><?php echo $item['first_name']?></td>
                <td><?php echo $item['birthday']?></td>
                <td><?php echo $item['address']?></td>
                <td><?php echo "<a href='./admin/information/updateInfor.php?id=$item[id]'>update</a>" ?></td>
                
            </tr>
        <?php }?>
    </tbody>
</table>

<!-- <a name="" id="" class="btn btn-primary float-right" href="./create.php" role="button">Create</a> -->
<a href="http://localhost/test_api/admin.php" align="center" style="font-size:30px ;"><i class="fas fa-backward"></i>Admin</a>
<?php
    require_once "./footer.php";
?>