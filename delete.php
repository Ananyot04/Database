<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if($_REQUEST['name'] != "")
{
$name = $_REQUEST['name'];
$sql_del = "DELETE FROM guestbook WHERE name=$name";
mysql_query($sql_del) or die(mysql_error());
echo "ลบข้อมูล ID $name เรียบร้อยแล้ว";
}

$conn->close();
?>
