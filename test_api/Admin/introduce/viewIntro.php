<?php
    require_once "../../header.php";
    require_once "../../config/config.php";
    $sql = "select * from introduce";
    $rec = mysqli_query($db, $sql);
?>
    <title>View_Introduce</title>
</head>
<body>
<table class="table" border=1 style="border-collapse: collapse" align="center">
    <thead>
        <tr>
            
            <th>id</th>
            <th>Content</th>
            <th>Note</th>
            <th><i class="far fa-edit"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td ><?php echo $item['id_controuce']?></td>
                <td><?php echo $item['content']?></td>
                <td><?php echo $item['note']?></td>
                <td><?php echo "<a href='./updateIntro.php?id_controuce=$item[id_controuce]'>Update</a>" ?></td>
            </tr>
            
        <?php }?>
    </tbody>
</table>
<a href="http://localhost/test_api/admin.php" align="center" style="font-size:30px ;"><i class="fas fa-backward"></i>Admin</a>
<?php
    require_once "../../footer.php";
?>