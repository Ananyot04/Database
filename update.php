<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$sql = "update guestbook set name='".$_POST["Name"]."', comment='".$_POST["Comment"]."' where name='".$_GET["Name"]."'";
if(mysqli_query($conn, $sql)) {
    echo "update successfully";
} else {
    echo "Error: " .$sql. "<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>
