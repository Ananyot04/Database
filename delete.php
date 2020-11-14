<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if($_REQUEST['del_id'] != "")
{
$del_id = $_REQUEST['del_id'];
$sql_del = "DELETE FROM guestbook WHERE id=$del_id";
mysql_query($sql_del) or die(mysql_error());
echo "ลบข้อมูล ID $del_id เรียบร้อยแล้ว";
}

$conn->close();
?>
