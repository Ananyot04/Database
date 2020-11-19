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
	$id = $_GET['Name'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE name=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['Name'];
			$comment = $n['Comment'];
		}
	
?>
	<form method="post" action="update.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="Name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Comment</label>
			<input type="text" name="Comment" value="<?php echo $comment; ?>">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >update</button>
		</div>
	</form>
</body>
</html>
