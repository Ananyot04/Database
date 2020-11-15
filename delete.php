<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$name = $_POST["name"];
$res = mysqli_query($conn, "SELECT * FROM guestbook where name='".trim($name)."'";

if (mysqli_num_rows($res) > 0) {
    $res = "DELETE FROM guestbook where name='".trim($name)."'";
    if(mysqli_query($conn, $sql)) {
        echo "Delete successfully";
    } else {
    echo "Error: " .$sql. "<br>". mysqli_error($conn);
    }
} else {
    echo "ไม่พบข้อมูล";
} 

  
mysqli_close($conn);
?>
