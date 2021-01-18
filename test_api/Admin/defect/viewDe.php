<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from defect";
    $rec = mysqli_query($db, $sql);
?>

    <title>Disadvanatages</title>
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
                <td ><?php echo $item['id_defect']?></td>
                <td><?php echo $item['id']?></td>
                <td><?php echo $item['content']?></td>
                <td><?php echo "<a href='./updateDe.php?id=$item[id_defect]'>Update</a>" ?></td>
                <td><?php echo "<a href='./deleteDe.php?id=$item[id_defect]'>Delete</a>" ?></td>
                <td><?php echo "<a href='./createDe.php'>Create</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>
<a href="http://localhost/test_api/admin.php" align="center" style="font-size:30px ;"><i class="fas fa-backward"></i>Admin</a>
<?php
    require_once "../../footer.php";
?>