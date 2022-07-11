<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "bangles";
   $con=mysqli_connect($servername,$username,$password,"$dbname");
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE threadbangles set id='" . $_POST['id'] . "', code='" . $_POST['code'] . "', img='" . $_POST['img'] . "', price='" . $_POST['price'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM threadbangles WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
ID: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Code: <br>
<input type="text" name="code" class="txtField" value="<?php echo $row['code']; ?>">
<br>
Image :<br>
<input type="text" name="img" class="txtField" value="<?php echo $row['img']; ?>">
<br>
Price:<br>
<input type="text" name="price" class="txtField" value="<?php echo $row['price']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>