<html>
<head>
<title>EDIT</title>
</head>
<body>
    
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$name = $_GET["name"];
$sql = "SELECT * FROM guestbook where name='".$name."'";
$res = mysqli_query($conn, $sql);

?>
<form action="update.php" method="post">
<table width="600" border="1">
  <tr>
    <td><div align="center">Name</div></td><td><input type="text" name="name" value="<?php=$row1["name"]?>"></td>
    <td><div align="center">Comment </div></td><td><input type="text" comment="comment" value="<?php=$row1["comment"]?>"></td>
  </tr>
<?php
$sql = "SELECT name, comment FROM guestbook";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0);
    while($Result = mysqli_fetch_array($res)) {
        if($Result["name"]==$Result1["name"])
    }

?>
</table>
<?php
mysqli_close($conn);
?>
<input type="submit" value="เพิ่ม">
</form>
    
</body>
</html>