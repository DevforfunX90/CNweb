<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from clients";
    $rec = mysqli_query($db, $sql);
?>

    <title>Clients</title>
</head>
<body>
<table class="table" border=1 style="border-collapse: collapse" align="center">
    <thead>
        <tr>
            
            <th>id</th>
            <th>Image</th>
            <th>Link</th>
            <th>Note</th>
            <th><i class="far fa-edit"></i></th>
            <th><i class="fas fa-trash"></i></th>
            <th><i class="far fa-plus-square"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_clients']?></td>
                
                <td><?php echo $item['link']?></td>
                <td><?php echo $item['note']?></td>
                <td><img src="../../img/<?php echo $item['image']?>" style="width:200px"></td>
                <td><?php echo "<a href='./updateCli.php?id_clients=$item[id_clients]'>Update</a>" ?></td>
                <td><?php echo "<a href='./deleteCli.php?id_clients=$item[id_clients]'>Delete</a>" ?></td>
                <td><?php echo "<a href='./createCli.php'>Create</a>" ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>
<a href="http://localhost/test_api/admin.php" align="center" style="font-size:30px ;"><i class="fas fa-backward"></i>Admin</a>
<?php
    require_once "../../footer.php";
?>