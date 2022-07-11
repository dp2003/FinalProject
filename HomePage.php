<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  background-repeat: no-repeat;
  background-color: white;
  background-size: 100% 720px;
  font-family: sans-serif;
}

div.polaroid {
  float: left;
  padding: 10px 10px 25px 10px;
  width: 707px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 50px;
  margin-right: 25px;
  margin-left: 25px;

}
div.container {
  text-align: center;
  padding: 10px 20px;

}
.navbar{
  background-color: #b3cccc;
}

</style>
  <title>J.A.Bangles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: white">
     <nav class="navbar fixed-top navbar-expand-lg  p-md-2">
      <div class="container">
        <img src= "JaLogo.png" style= "height:50px; padding-right: 30px;">
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
        </div>
      </div>
    </nav>
<br><br><br>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" style="background-color: white">

  <!-- Indicators/dots -->
  <div class="carousel-indicators"  >
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="6.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="7.jpg" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<br><br>
<br><a href="ThreadBangles.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="ThreadB.jpg" style="width:100%">
        <div class="container">
          <p>THREAD BANGLES</p>
        </div>
      </div>
    </a>
      <a href="VelvetBangles.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="velvet.jpg"  style="width:100%">
        <div class="container">
          <p>VELVET BANGLES</p>
        </div>
      </div>
      </a>
      <a href="PearlBangles.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="Pearl.jpg"  style="width:100%">
        <div class="container">
          <p>PEARL BANGLES</p>
        </div>
      </div>
      </a>
      <a href="JhumkiBangles.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="Jhumki.jpg"  style="width:100%">
        <div class="container">
          <p>JHUMKI BANGLES</p>
        </div>
      </div>
      </a>
      <a href="BangleSet.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="set.jpg"  style="width:100%">
        <div class="container">
          <p>BANGLE SET</p>
        </div>
      </div>
      </a>
      
      <a href="Paatla.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="paatla.jpg"  style="width:98.5%"> 
        <div class="container">
          <p>PAATLA</p>
        </div>
      </div>
      </a>
<!-- Footer -->
<footer class="bg-white text-center text-black">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->

    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->

          <!--Grid column-->

          <!--Grid column-->
        </div>
      </form>
    </section>
<center><strong>Find Quickly</strong></center>
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <ul class="list-unstyled mb-0">
            <li>
              <a href="ThreadBangles.php" class="text-black">Thread Bangles</a>
            </li>
            <li>
              <a href="VelvetBangles.php" class="text-black">Velvet Bangles </a>
            </li>
            <li>
              <a href="JhumkiBangles.php" class="text-black">Jhumki Bangles</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <ul class="list-unstyled mb-0">
            <li>
              <a href="BangleSet.php" class="text-black">Bangle Set</a>
            </li>
            <li>
              <a href="PearlBangle.php" class="text-black">Pearl Bangle</a>
            </li>
            <li>
              <a href="Paatla.php" class="text-black">Paatla</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        </div>
      </div>
    </section>
  </div>
</footer>
</body>
</html>