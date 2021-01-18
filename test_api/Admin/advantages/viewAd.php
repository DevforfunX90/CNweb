<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from advantages";
    $rec = mysqli_query($db, $sql);
?>

    <title>View_Advantages</title>
</head>
<body>
<table class="table" border=1 style="border-collapse: collapse" align="center">
    <thead>
        <tr>
            <th>id</th>
            <th>id_information</th>
            <th>Content</th>
            <th><i class="far fa-edit"></i></th>
            <th><i class="fas fa-trash"></i></th>
            <th><i class="far fa-plus-square"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_advantages']?></td>
                <td><?php echo $item['id']?></td>
                <td><?php echo $item['content']?></td>
                <td><?php echo "<a href='./updateAd.php?id=$item[id_advantages]'>Update</a>" ?></td>
                <td><?php echo "<a href='./deleteAd.php?id=$item[id_advantages]'>Delete</a>" ?></td>
                <td><?php echo "<a href='./createAd.php'>Create</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>
<a href="http://localhost/test_api/admin.php" align="center" style="font-size:30px ;"><i class="fas fa-backward"></i>Admin</a>
<?php
    require_once "../../footer.php";
?>