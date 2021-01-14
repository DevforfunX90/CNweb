<?php
    require_once "../header.php";
    require_once "../config/config.php";
    $sql = "SELECT * FROM content";
    $rec = mysqli_query($db, $sql);
?>
<table class="table" border=1 style="border-collapse: collapse">
    <thead>
        <tr>
            
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>image</th>
            <th colspan=2>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td scope='row'><?php echo $item['id_content']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['desscription']?></td>
                <td><?php echo $item['image']?></td>
                <td><?php echo "<a href='./updateInfor.php?id=$item[id]'>sua</a>" ?></td>
                <td><?php echo "<a href='./delete.php?id=$item[id]> xoa </a>" ?></td>
                <td><?php echo "<a href='./detail.php??id=$item[id]'>chi tiet</a>" ?></td>

            </tr>
        <?php }?>
    </tbody>
</table>

<a name="" id="" class="btn btn-primary float-right" href="./create.php" role="button">Create</a>

<?php
    require_once "../footer.php";
?>