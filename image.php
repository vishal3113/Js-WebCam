<?php

    require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Attendence Admin</title>
</head>
<body>
    <table border=1 cellspacing=0 cellpadding=10>
        <tr>
            <td>#</td>
            <td>Date & Time</td>
            <td>Image</td>
        </tr>
        <?php
            $i=1;
            $rows=mysqli_query($conn,"SELECT * FROM tb_image ORDER BY id DESC");
        ?>
        <?php foreach($rows as $row): ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["date"]; ?></td>
                <td><img src="img/<?php echo $row["image"];?>" width=200 alt=""></td>
            </tr>
        <?php endforeach;   ?>
    </table>
</body>
</html>