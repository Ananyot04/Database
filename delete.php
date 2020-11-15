<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$name = $_POST["name"];

$sql = "DELETE from guestbook where name='".trim($name)."'";
if(mysqli_query($conn, $sql)) {
    echo "Delete successfully";
} else {
    echo "Error: " .$sql. "<br>". mysqli_error($conn);
} 

  
mysqli_close($conn);
?>
