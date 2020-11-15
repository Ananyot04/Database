<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$name=$_POST["name"];
$comment = $_POST['comment'];


$del = "DELETE from guestbook (Name , Comment) VALUES ('$name', '$comment')";


if (mysqli_query($conn, $del)) {
    echo "Delete successfully";
  } else {
    echo "Error: " . $del . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
