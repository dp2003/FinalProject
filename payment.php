<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $street = $_POST['street'];
     $city = $_POST['city'];
     $state = $_POST['state'];
      $zip = $_POST['zip'];
     $sql = "INSERT INTO payment (street,city,state,zip)
     VALUES ('$street','$city','$state','$zip')";
     if (mysqli_query($conn, $sql)) {
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{

background-color: #eee;
}
.form-control {
border-bottom: 2px solid #eee !important;
border: none;
font-weight: 600
}
.form-control:focus {
color: #495057;
background-color: #fff;
border-color: #8bbafe;
outline: 0;
box-shadow: none;
border-radius: 0px;
border-bottom: 2px solid blue !important;
}

.inputbox {
position: center;
margin-bottom: 20px;
width: 100%;
}
.inputbox span {
position: center;
top: 7px;
left: 11px;
transition: 0.5s;
padding: 50px;
}

.inputbox i {
position: center;
top: 13px;
right: 10px;
transition: 0.5s;
color: #3F51B5;
padding-left:100px ;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0
}

.inputbox input:focus~span {
transform: translateX(-0px) translateY(-15px);
font-size: 12px
}

.inputbox input:valid~span {
transform: translateX(-0px) translateY(-15px);
font-size: 12px
}

.decoration:hover{

text-decoration: none;
color: #fdcc49; 
}
div.container {
  text-align: left;
  padding: 10px 20px;

}
.navbar{
  background-color: #b3cccc;
}
</style>
<title>Pay</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg  p-md-2">
      <div class="container">
        <a class="navbar-brand" style = "color:black" href="#">J.A. Bangles</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <h5><a class="nav-link" style="color: black; margin-right: 25px"; href="HomePage.php">Home</a>
            </li>
            <li class="nav-item">
              <h5><a class="nav-link" style="color: black; margin-right: 25px" href="AboutUs.php">About</a>
            </li>
            <li class="nav-item">
            </h5>
            <h5><a class="nav-link " style = "color:black; margin-right: 25px" href="Customize.php">Customize</a>

            </li>
            <h5><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style = "color:black; margin-right: 25px" href="#" role="button" data-bs-toggle="dropdown">Catagories</a>
          <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="ThreadBangles.php">Thread Bangles</a></li>
            <li><a class="dropdown-item" href="VelvetBangles.php">Velvet Bangles</a></li>
            <li><a class="dropdown-item" href="JhumkiBangles.php">Jhumki Bangles</a></li>
            <li><a class="dropdown-item" href="BangleSet.php">Bangle set</a></li>
            <li><a class="dropdown-item" href="PearlBangles.php">Pearl Bangles</a></li>
            <li><a class="dropdown-item" href="Paatla.php">Paatla</a></li>
          </ul>
        </li></h5>
         <li class="nav-item">
            <h5><a class="nav-link" style = "color:black;margin-right: 30px;" href="FeedbackFormfin.php">Contact</a>
            </h5>
            </li>
          </ul>
    </nav>
    <br><br><br><br><br>
<center><h2>Your payment should be done on delivery</h2></center>
<center>    
<form action="Confirm.php" method="post">
<div class="container">
<div class="row">
<div class="col-md-8">
    <div class="mt-4 mb-4">
        <h6 class="text-uppercase">Billing Address</h6>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="inputbox mt-3 mr-2"> <input type="text" name="street" class="form-control" required="required"> <span>Street Address</span> </div>
            </div>
             <div class="col-md-6">
                <div class="inputbox mt-3 mr-2"> <input type="text" name="city" class="form-control" required="required"> <span>City</span> </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="inputbox mt-3 mr-2"> <input type="text" name="state" class="form-control" required="required"> <span>State/Province</span> </div>
            </div>
             <div class="col-md-6">

             <div class="inputbox mt-3 mr-2"> <input type="text" name="zip" class="form-control" required="required"> <span>Zip code</span> </div>
            </div>
        </div>
    </div>
</div>
<div>
    <a href = 'Confirm.php'>
             <input type="submit" class="btn btn-info" name="submit" value="Done"></a> 
        </div>
</div>
</form>
</center>
</div>
</div>
</body>
</html>