<?php
    session_start();
	$db = mysqli_init();
    mysqli_real_connect($db, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
    if (mysqli_connect_errno($db))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }

	// initialize variables
	$name = "";
	$comment = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$comment = $_POST['comment'];

		mysqli_query($db, "INSERT INTO guestbook (name, comment) VALUES ('$name', '$comment')"); 
		$_SESSION['message'] = "Comment saved"; 
		header('location: index.php');
	}
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];

	mysqli_query($db, "UPDATE guestbook SET name='$name', address='$comment' WHERE id=$id");
	$_SESSION['message'] = "Information updated!"; 
	header('location: index.php');
}
