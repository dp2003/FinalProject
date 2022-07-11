<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $code = $_POST['code'];
     $img = $_POST['img'];
     $price = $_POST['price'];
     $sql = "INSERT INTO threadbangles (code,img,price)
     VALUES ('$code','$img','$price')";
     if (mysqli_query($conn, $sql)) {
        echo "";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
body {
  margin: 100px;
  background-repeat: no-repeat;
  background-size: 100% 720px;
  font-family: sans-serif;
}

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
  margin-left: 200px;
  padding-left: 20px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 14px;}
}

}
  input[type=text],input[type=email],input[type=mobile]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
   color: black;
}

input[type=text]:focus, input[type=email]:focus,input[type=mobile]:focus{
  background-color: #ddd;
  outline: none;
   color: black;
}
textarea[type=textarea]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
   color: black;
}
textarea[type=textarea]
{
  background-color: #ddd;
  outline: none;
   color: black;
}
.btn {
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
}

.btn:hover {
  opacity: 1;
}


</style>
<title>Profiles</title>
</head>
<body>
<div class="container-fluid">
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
<div class="main">
  <form action="" class="container" method="post">
                        <h1>Add Products</h1>
                        <div class="form-group">
                            <label>Enter Code: </label>
                            <input type="code" name="code" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Enter Image Name:</label>
                            <input type="img" name="img" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Enter Price:</label>
                            <input type="price" name="price" class="form-control">
                        </div>
                        <br>
                        <center>
                        <input type="submit" class="btn" name="submit" value="Add" style= "background-color: #b3cccc;">
                      </center>
                    </form>
</div>
</div>
</body>
</html> 