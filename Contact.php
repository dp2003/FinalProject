<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  background-image : url("bg.jpg");
  background-repeat: no-repeat;
  background-size: 100% 720px;
  font-family:Courier New;
}
div.polaroid {
  float: left;
  padding: 10px 10px 25px 10px;
  width: 707px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 50px;
  margin-right: 50px;
}
div.container {
  text-align: center;
  padding: 10px 20px;

}


</style>
  <title>J.A.Bangles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<nav class="navbar fixed-top navbar-expand-lg navbar-dark  p-md-3">
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
              <h5><a class="nav-link text-body" style = "color:black; margin-right: 25px" href="HomePage.php">Home</a>
            </li>
            <li class="nav-item">
              <h5><a class="nav-link text-body" style = "color:black; margin-right: 25px" href="AboutUs.php">About</a>
            </li>
            <li class="nav-item">
            </h5>
            <h5><a class="nav-link text-body" style = "color:black;margin-right: 25px" href="#">Customize</a>
            </li>
            <h5><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style = "color:black; margin-right: 25px" href="#" role="button" data-bs-toggle="dropdown">Catagories</a>
          <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="#">Thread Bangles</a></li>
            <li><a class="dropdown-item" href="#">Velvet Bangles</a></li>
            <li><a class="dropdown-item" href="#">Jhumki Bangles</a></li>
            <li><a class="dropdown-item" href="#">Bangle set</a></li>
            <li><a class="dropdown-item" href="#">Moti Bangles</a></li>
            <li><a class="dropdown-item" href="#">Paatla</a></li>
          </ul>
        </li></h5>
         <li class="nav-item">
            <h5><a class="nav-link text-body" style = "color:black;margin-right: 25px margin-left: 25px" href="Contact.php">Contact</a>
            </h5>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
</center>
<br><br><br><br><br><br><br>
<div class="container">            
  <table class>
      <tr>
        <td rowspan="2"><h2>    Feedback Form</h2></td>
        <td></td>
      </tr>
    <tbody>
      <tr>
        <td>Name</td>
        <td><input type="name" class="form-control" id="name" placeholder="Enter name"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" class="form-control" id="email" placeholder="Enter email"></td>
      </tr>
      <tr>
        <td>Feedback</td>
        <td><input type="textarea" class="form-control" id="email" placeholder="Enter email"></td>
      </tr>
    </tbody>
  </table>
</div>
