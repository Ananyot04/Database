<html>
<head>
<title>ITF Lab</title>
</head>
<body>
    
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ananyot.mysql.database.azure.com', 'kilzen@ananyot', 'sM7wgvcaip', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo <div align="center">$Result['Name'];?></div></td>
    <td><?php echo <div align="center">$Result['Comment'];?></div></td>
    <td><button oncilk="familyName($Result['ID'])">ลบ</button><button oncilk="">แก้ไข</button></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
    <form action = "form.html" method = "post" id="ITFLab" >
        <input type="submit" value="เพิ่ม">
</form>
    
</body>
</html>
