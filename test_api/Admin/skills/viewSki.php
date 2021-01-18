<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from skills";
    $rec = mysqli_query($db, $sql);
?>

    <title>View_Skills</title>
</head>
<body>
<table class="table" border=1 style="border-collapse: collapse" align="center">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>percentage</th>
            <th><i class="far fa-edit"></i></th>
            <th><i class="fas fa-trash"></i></th>
            <th><i class="far fa-plus-square"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_skills']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['percentage']?></td>
                <td><?php echo "<a href='./updateSki.php?id=$item[id_skills]'>Update</a>" ?></td>
                <td><?php echo "<a href='./deleteSki.php?id=$item[id_skills]'>Delete</a>" ?></td>
                <td><?php echo "<a href='./createSki.php'>create</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>
<a href="./createSki.php">Create</a>
<a href="http://localhost/test_api/admin.php" align="center" style="font-size:30px ;"><i class="fas fa-backward"></i>Admin</a>
<?php
    require_once "../../footer.php";
?>