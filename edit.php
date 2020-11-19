<html>
<head>
    <title></title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$sql = "SELECT * FROM guestbook where name='".$_GET["Name"]."'";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0) {
    while ($row1 = mysqli_fetch_assoc($res)) {
?>
<form action="update.php" method="post">
<table border="1">
    <tr><td>Name</td><td><input type="text" name="name" value="<?php=$row1["Name"]?>"></td></tr>
    <tr><td>Comment</td><td><input type="text" name="comment" value="<?php=$row1["Comment"]?>"></td></tr>
    }
}

    </select></table>
<input type="submit" name="Submit" value="submit">
    </form>
</body>
</html>
