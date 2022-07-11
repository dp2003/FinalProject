<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
  margin-left: 200px; /* Same as the width of the sidenav */
  padding-left: 70px;
   padding-top: 30px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 14px;}
}


</style>
<title>Catagories</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-color: white">
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
  <center>
<br><a href="ThreadB.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="ThreadB.jpg" style="width:100%">
        <div class="container">
          <p>THREAD BANGLES</p>
        </div>
      </div>
    </a>
      <a href="VelvetB.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="velvet.jpg"  style="width:100%">
        <div class="container">
          <p>VELVET BANGLES</p>
        </div>
      </div>
      </a>
      <a href="PearlB.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="Pearl.jpg"  style="width:100%">
        <div class="container">
          <p>PEARL BANGLES</p>
        </div>
      </div>
      </a>
      <a href="JhumkiB.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="Jhumki.jpg"  style="width:100%">
        <div class="container">
          <p>JHUMKI BANGLES</p>
        </div>
      </div>
      </a>
      <a href="BangleS.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="set.jpg"  style="width:100%">
        <div class="container">
          <p>BANGLE SET</p>
        </div>
      </div>
      </a>
      
      <a href="PaatlaB.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="paatla.jpg"  style="width:98.5%"> 
        <div class="container">
          <p>PAATLA</p>
        </div>
      </div>
      </a>
      <center>
  </div>
</div>
</body>
</html> 