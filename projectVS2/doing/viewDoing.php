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
            <th colspan=3>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rec as $item) {?>
            <tr>
                <td scope='row'><?php echo $item['id_content']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['desscription']?></td>
                <td><img src="../img/<?php echo $item['image']?>" alt="" srcset=""></td>
                <td><?php echo "<a href='./updateDoing.php?id=$item[id_content]'>sua</a>" ?></td>
                <!-- chú ý phần echo thẻ a này ra : cái href là đường dẫn link và nhứo truyền id khóa chính cho nó thì nó mới chạy đc -->
                <td><?php echo "<a href='./deleteDoing.php?id=$item[id_content]'> xoa </a>" ?></td>
                

            </tr>
        <?php }?>
    </tbody>
</table>

<a name="" id="" class="btn btn-primary float-right" href="./createDoing.php" role="button">Create</a>

<?php
    require_once "../footer.php";
?>