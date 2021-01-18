<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from experience";
    $rec = mysqli_query($db, $sql);
?>

    <title>Experience</title>
</head>
<body>
<table class="table" border=1 style="border-collapse: collapse" align="center">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Time</th>
            <th>Desscription</th>
            <th><i class="far fa-edit"></i></th>
            <th><i class="fas fa-trash"></i></th>
            <th><i class="far fa-plus-square"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_experience']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['time']?></td>
                <td><?php echo $item['desscription']?></td>
                <td><?php echo "<a href='./updateExpen.php?id=$item[id_experience]'>Update</a>" ?></td>
                <td><?php echo "<a href='./deleteExpen.php?id=$item[id_experience]'>Delete</a>" ?></td>
                <td><?php echo "<a href='./createExpen.php'>Create</a>" ?></td>
            </tr>
            
        <?php }?>
    </tbody>
</table>

<a href="http://localhost/test_api/admin.php" align="center" style="font-size:30px ;"><i class="fas fa-backward"></i>Admin</a>
<?php
    require_once "../../footer.php";
?>