<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$name = $_POST['Name'];
$objDB = mysqli_select_db("ITFLab");
$strSQL = "delete from guestbook ";
$strSQL .="where Name = '".$_GET["name"]."' ";
$objQuery = mysqli_query($strSQL);
if($objQuery) {
    echo "Delete successfully.";
} else {
    echo "Error Delete [".$strSQL."]";
}

mysqli_close($conn);
?>
