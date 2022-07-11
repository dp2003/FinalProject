<style>
.sidenav {
  height: 100%;
  width: 210px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #b3cccc;
  overflow-x: hidden;
  padding-top: 30px;
}

.sidenav a {
  padding: 16px 6px 6px 32px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
div.polaroid {
  float: left;
  padding: 10px 10px 25px 10px;
  width: 450px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-right: 50px;
  margin-left: 70px;

}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  padding-left: 70px;
   padding-top: 30px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 14px;}
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
    border: 1px solid black;
}

td, th {
    text-align: left;
    padding: 8px;
     border: 1px solid black;

}

tr:nth-child(even) {
    background-color: white;
     border: 1px solid black;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
 .frm{
   margin-top: 10%;
  background: #fff;
  padding: 30px; 
   box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
   border-radius: 5px;
   width: 50%;
   font-family: sans-serif;
 }
.button {
  background-color: #b3cccc;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
   .label_txt{ 
font-size: 18px; 
float: left;
border-radius: 25px 
   }  
.txtField{
font-size: 18px; 
float: left;
width: 100%;
}
</style>
<?php
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($dbc,"UPDATE velvetbangles set id='" . $_POST['id'] . "', code='" . $_POST['code'] . "', price='" . $_POST['price'] . "', img='" . $_POST['img'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($dbc,"SELECT * FROM velvetbangles WHERE id ='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
   <title>Update data</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 </head>
 <body style="background-color: white">
<div class="container">
<div class="col-md-6">
<div class="row">
<div class="col-md-6">
<div class="sidenav">
  <a><img src="JaLogo.png" width="160px" style="padding-right: 15px;"></a>
  <a href="Profile.php">Profile</a>
  <a href="Users.php">Users</a>
  <a href="Categories.php">Categories</a>
  <a href="AddPro.php">Add products</a>
  <a href="UpdatePro.php">Update products</a>
  <a href="DelProducts.php">Remove products</a>
  <a href="PaymentDetails.php">Payment details</a>
  <a href="Analysis.php">Survey</a>
  <a href="SA.php">Sentiment Analysis</a>
</div>
</div>
</div>
</div>
</head>
<div class="main">
   <center>
<form name="frmUser" method="post" action="" class="center">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div class = "frm">
<div>
	<h1>Update</h1>
</div>
<br><label class="label_txt">Id: </label><br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id" class="txtField"  value="<?php echo $row['id']; ?>">
<br><br>
<br><label class="label_txt">Code: </label><br>
<input type="text" name="code" class="txtField" value="<?php echo $row['code']; ?>">
<br><br>
<br><label class="label_txt">Price: </label><br>
<input type="text" name="price" class="txtField" value="<?php echo $row['price']; ?>">
<br><br>
<br><label class="label_txt">Image: </label><br>
<input type="text" name="img" class="txtField" value="<?php echo $row['img']; ?>">
<br><br><br>
<input type="submit" name="submit" value="Submit" class="button">
</div>
</form>
</center>
</div>
</body>
</html>