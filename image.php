
<?php

require 'function.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<style>

    
</style>


<body>
    <table border= 1 cellspacing= 0 cellpadding= 10>
        <tr>
            <td>#</td>
            <td>Date & Time</td>
            <td>Image</td>
        </tr>
        <?php
        $i = 1;

        
        $rows = mysqli_query($conn, "SELECT * FROM tb_image ORDER BY id DESC");
        ?>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["date"]; ?></td>
                <td><img src="img/<?php echo $row["image"]; ?>" width="200" title="<?php echo $row["image"]; ?>"alt=""></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php"> <button type="button" name="button">Go to  webcam</button> </a>
</body>
</html>
