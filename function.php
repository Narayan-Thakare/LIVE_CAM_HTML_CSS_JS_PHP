<?php
$conn = mysqli_connect("localhost", "root","","webcam"); // Add your database name here

if (isset($_FILES["webcam"]["tmp_name"])) {
    $tmpName = $_FILES["webcam"]["tmp_name"];
    $imageName = date("Y.m.d") ." - " . date("h.i.sa") . '.jpeg'; 
    move_uploaded_file($tmpName, 'img/' . $imageName);
    $date = date("Y/m/d") ."&" .  date("h:i:sa"); // Fixed the concatenation and added the missing dot
    $query = "INSERT INTO tb_image (date, image) VALUES ('$date', '$imageName')"; // Adjust column names
    mysqli_query($conn, $query);
    if (mysqli_errno($conn)) {
        echo "Database Error: " . mysqli_error($conn);
    }
}
?>
