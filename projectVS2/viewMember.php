<?php
    require_once "./header.php";
    require_once "./config/config.php";
    $info = $db->query('select * from info');
    
    $info = $info->fetchAll(PDO::FETCH_ASSOC);
?>
<table class="table">
    <thead>
        <tr>
            
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>dateOfBirth</th>
            <th>address</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($info as $item) {?>
            <tr>
                <td scope='row'><?php echo $item['id']?></td>
                <td><?php echo $item['last_name']?></td>
                <td><?php echo $item['first_name']?></td>
                <td><?php echo $item['dateOfBirth']?></td>
                <td><?php echo $item['gender']?></td>
                <td><?php echo "<a href='./updateInfor.php?id=$item[id]'>sua</a>" ?></td>
                <td><?php echo "<a href='./delete.php?id=$item[id]> xoa </a>" ?></td>
                <td><?php echo "<a href='./detail.php??id=$item[id]'>chi tiet</a>" ?></td>

            </tr>
        <?php }?>
    </tbody>
</table>

<a name="" id="" class="btn btn-primary float-right" href="./create.php" role="button">Create</a>

<?php
    require_once "./footer.php";
?>