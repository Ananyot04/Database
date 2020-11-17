<!DOCTYPE html>
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
$sql = "SELECT * FROM guestbook where name='".$_POST["Name"]."'";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)) {
    while ($row1 = mysqli_fetch_assoc($res)) {
?>
<form action="update.php" method="post">
<table border="1">
    <tr><th>Name</th><td><input type="text" name="name" value="<?=$row1["Name"]?>"></td></tr>
    <tr><th>Comment</th><td><input type="text" name="comment" value="<?=$row1["Comment"]?>"></td></tr>
<?php
$sql = "SELECT Name,Comment FROM guestbook";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
        if($row["name"]==$row1["name"]) {
            echo "<option value=" .$row["name"]. " selected>".$row["comment"];
        } else {
            echo "<option value=" .$row["name"]. ">".$row["comment"];
        }
    }
}
    }
}
?>
    </select></td></tr></table>
<input type="submit" name="Submit" value="submit">
</body>
</html>
