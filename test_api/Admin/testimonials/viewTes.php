<!-- <style>
    .table{
        border: 1px solid;
    }
    th{
        border-right: 1px solid;
        border-bottom: 1px solid;
    }
</style> -->
<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from testimonials";
    $rec = mysqli_query($db, $sql);
?>

    <title>View Tesstimonials</title>
</head>
<body>
<table class="table" border=1 style="border-collapse: collapse" align="center">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Note</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_testimonials']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['note']?></td>
                <td><img src="../../img/<?php echo $item['image']?>" style="width:200px"></td>
                <td><?php echo "<a href='./updateTes.php?id_testimonials=$item[id_testimonials]'>Update</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>
<a href="http://localhost/test_api/admin.php" align="center" style="font-size:30px ;"><i class="fas fa-backward"></i>Admin</a>
<?php
    require_once "../../footer.php";
?>