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
	$name = $_POST['Name'];
$sql = "SELECT * FROM guestbook WHERE name='$name'";
$res = mysqli_query($conn, $sql);
$comment = mysqli_fetch_array($res);
?>
    <div class="container">
        <h1>Edit comment</h1>
        <form action="update.php" method="post" class="mt-4">
            <div class="form-group">
                <label for="inputName">Name</label>
                <?php
                    echo '<input type="text" name="name" id="inputName" class="form-control" placeholder="Enter Name" value="'.$comment["Name"].'">'
                ?>
            </div>
            <div class="form-group">
                <label for="inputComment">Comment</label>
                <textarea name="comment" class="form-control" id="inputComment" rows="3" placeholder="Enter Comment"><?php echo $comment['Comment'];?></textarea>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary mr-1">update</button>
            </div>
        </form>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>
