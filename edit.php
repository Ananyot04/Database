<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
	<?php
	$id = $_GET['name'];
	$record = mysqli_query($conn, "SELECT * FROM guestbook WHERE name=$id");
	while($res = mysqli_fetch_array($record)) {
		
	
?>
	<form method="post" action="update.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $res["name"]; ?>">
		</div>
		<div class="input-group">
			<label>Comment</label>
			<input type="text" name="comment" value="<?php echo $res["comment"]; ?>">
		</div>
		<?php
	}
	?>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >update</button>
		</div>
	</form>
</body>
</html>
