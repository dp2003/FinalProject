<?php
session_start();

$connect = mysqli_connect("localhost","root","","bangles");

if(isset($_POST['add_to_cart'])){

    if(isset($_SESSION['cart'])){
        $session_array_id = array_column($_SESSION['cart'],"id");


        if(!in_array($_GET['id'], $session_array_id)){

            $session_array = array(
            'id' => $_GET['id'],
            'code' => $_POST['code'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity']
        );
        $_SESSION['cart'][] = $session_array;

        }

    }else{
        $session_array = array(
            'id' => $_GET['id'],
            'code' => $_POST['code'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity']
        );
        $_SESSION['cart'][] = $session_array;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family:Courier New;
}

.topnav {
  overflow: hidden;
  background-color: #000000;
}

.topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:#000000;
  color: white;
}

.center {
  margin-left: auto;
  margin-right: auto;
}
div.container {
  text-align: center;
  padding: 10px 20px;

}
.navbar{
  background-color: #b3cccc;
}
</style>
  <title>Invoice</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
        </div>
      </div>
    </nav>
</center>
<br><br><br><br>
 <?php 

          ?>
            </div>
          </div>
        </div>
        <div class="col-md-12">
        <h3 class= "text-center">Invoice</h3>
          <?php 

          $total = 0;
          
          $output = "";

          $output .= "

          <center><table class='table table-bordered table-striped'>

          <tr>
          <th>ID</th>
          <th>Code</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total Price</th>
          <th>Action</th>
          <tr>

          ";

          if(!empty($_SESSION['cart'])){

            foreach($_SESSION['cart'] as $key => $value){

              $output.="
              <tr>
              <td>".$value['id']."</td>
              <td>".$value['code']."</td>
              <td>".$value['price']."</td>
              <td>".$value['quantity']."</td>
              <td>".number_format($value['price']*$value['quantity'],2)."</td>
              <td><a href= 'payment.php?action=remove&id=".$value['id']."'>
              <button class = 'btn btn-danger btn-block'>Remove</button>
              </a>
              </td>
              ";

              $total = $total + $value['quantity']= $value['price'];
            

            }

            $output .="
            <tr>
            <td colspan=3></td>
            <td></b>Total Price</b></td>
            <td>".number_format($total,2)."</td>
            <td>
            <a href = 'payment.php?action=clearall'>
            <button class='btn btn-warning btn-block'>Clear</button>
            </a>
            </td>
            </tr>
            <tr>
            <td colspan=6>

            <a href = 'payment.php'>
            <button class='btn btn-warning btn-block'>Payment</button>
            </a>

            </td>
            </tr>
            ";
            $total;  
          }
          $_SESSION["t"]= $total;
          echo $output;
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php

  if(isset($_GET['action'])){
    if($_GET['action']== "clearall"){
      unset($_SESSION['cart']);
    }

    if($_GET['action']=="remove"){

      foreach ($_SESSION['cart'] as $key => $value) {
        if($value['id'] == $_GET['id']){
          unset($_SESSION['cart'][$key]);
        }
      }
    }
  }
  ?>
</center>
</body>
</html>