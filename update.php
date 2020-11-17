<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE guestbook set name='" . $_POST['name'] . "', comment='" . $_POST['comment'] . "' WHERE name='" . $_POST['name'] . "'");
    $message = "Record Modified Successfully";
    }
    $result = mysqli_query($conn,"SELECT * FROM guestbook WHERE name='" . $_GET['name'] . "'");
    $row= mysqli_fetch_array($result);
    ?>
    <html>
    <head>
    <title>Update Employee Data</title>
    </head>
    <body>
    <form name="frmUser" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
    </div>
    Name: <br>
    <input type="hidden" name="name" class="txtField" value="<?php echo $row['name']; ?>">
    <input type="text" name="name"  value="<?php echo $row['name']; ?>">
    <br>
    Comment: <br>
    <input type="text" name="comment" class="txtField" value="<?php echo $row['comment']; ?>">
    <br>
    <input type="submit" name="submit" value="Submit" class="buttom">
    
    </form>
    </body>
    </html>
