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
		$address = $_POST['comment'];

		mysqli_query($db, "INSERT INTO guestbook (name, comment) VALUES ('$name', '$comment')"); 
		$_SESSION['message'] = "Comment saved"; 
		header('location: index.php');
	}
