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
  background-repeat: no-repeat;
  background-size: 100% 720px;
  font-family:sans-serif;
}

div.polaroid {
  float: left;
  padding: 10px 10px 25px 10px;
  width: 707px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 50px;
  margin-right: 50px;
  margin-left: 50px;
}
div.container {
  text-align: center;
  padding: 10px 20px;

}

.wrapper {
    margin-top: 30px
}

.card {
    border: 1px solid #eee;
    cursor: pointer;
    float: right;
}

.weight {
    margin-top: -65px;
    transition: all 0.5s
}

.weight small {
    color: #e2dede
}

.buttons {
    padding: 10px;
    background-color: #d6d4d44f;
    border-radius: 4px;
    position: relative;
    margin-top: 7px;
    opacity: 0;
    transition: all 0.8s
}

.dot {
    height: 14px;
    width: 14px;
    background-color: green;
    border-radius: 50%;
    position: absolute;
    left: 27%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 8px;
    color: #fff;
    opacity: 0
}

.cart-button {
    height: 48px
}

.cart-button:focus {
    box-shadow: none
}

.cart {
    position: relative;
    height: 48px !important;
    width: 50px;
    margin-right: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    padding: 11px;
    border-radius: 5px;
    font-size: 14px;
    transition: 1s ease-in-out;
    overflow: hidden
}

.cart-button.clicked span.dot {
    animation: item 0.3s ease-in forwards
}


.card:hover .buttons {
    opacity: 1
}

.card:hover .weight {
    margin-top: 10px
}

.card:hover {
    transform: scale(1.04);
    z-index: 2;
    float: right;

    overflow: hidden
}
.navbar{
  background-color: #b3cccc;
}


</style>
  <title>J.A.Bangles</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
</head>
<body style="background-color: white">


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
              <h5><a class="nav-link" style="color: black; margin-right: 25px;" href="HomePage.php">Home</a>
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
            <h5><a class="nav-link" style = "color:black;margin-right: 25px;" href="FeedbackFormfin.php">Contact</a>
            </h5>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Products</h2>
                    <div class="col-md-12">
                        <div class= "row">

                    <?php
                    $query = "SELECT * FROM velvetbangles";
                    $result = mysqli_query($connect,$query);

                    while($row = mysqli_fetch_array($result)) {?>
 
                    <div class="col-md-6">
                        <form method="post" action="VelvetBangles.php?id=<?=$row['id']?>">
                         <img src="img/<?= $row['img'] ?>" style='width: 100%;'>
                            <h5 class="text-center">Code: <?= $row['code']; ?></h5>
                            <h5 class="text-center">Rs.<?= number_format($row['price'],2);?></h5>
                            <input type="hidden" name="code" value ="<?= $row['code'] ?>" >
                            <input type="hidden" name="price" value ="<?= $row['price'] ?>" >
                            <input type="number" name="quantity" value="1" class="form-control">
                            <input type="submit" name = "add_to_cart" class="btn btn-block my-2" value= "Add to Cart" style= "background-color: #b3cccc ">
                        </form>
                    </div>

                    <?php }

                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class= "text-center">Item Selected</h2>
                    <?php 

                    $total = 0;
                    
                    $output = "";

                    $output .= "

                    <table class='table table-bordered table-striped'>
                    <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
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
                            <td><a href= 'VelvetBangles.php?action=remove&id=".$value['id']."'>
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
                        <a href = 'VelvetBangles.php?action=clearall'>
                        <button class='btn btn-warning btn-block'>Clear</button>
                        </a>
                        </td>
                        </tr>
                        <tr>
                        <td colspan=6>

                        <a href = 'Invoice.php'>
                        <button class='btn btn-warning btn-block'>Invoice</button>
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

</body>
</html>