<?php
session_start();

$connect = mysqli_connect("localhost","root","","bangles");

if(isset($_POST['add_to_cart'])){

    if(isset($_SESSION['cart'])){
        $session_array_id = array_column($_SESSION['cart'],"id");


        if(!in_array($_GET['id'], $session_array_id)){

            $session_array = array(
            'id' => $_GET['id'],
            "fname" => $_POST['fname'],
            "lname" => $_POST['lname'],
            "username" => $_POST['username'],
            "email" => $_POST['email'],
            "date" => $_POST['date']

        );
        $_SESSION['cart'][] = $session_array;

        }

    }else{
        $session_array = array(
            'id' => $_GET['id'],
            "fname" => $_POST['fname'],
            "lname" => $_POST['lname'],
            "username" => $_POST['username'],
            "email" => $_POST['email'],
            "date" => $_POST['date']

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

</style>
  <title>Users</title>

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
<div class="container">
                <div class="col-sm-12">
                    <h2 class="text-center">Products</h2>
                    <div class="col-sm-12">
                    

                    
               <?php
                $query = "SELECT * FROM payment";
                    $result = mysqli_query($connect,$query);
                {?>

                    <?php }
                    ?>
                    <div class= "row">

                    <table class='table table-bordered table-striped' >
                    <tr>
                    <th><h6 class="text-center">Street Address</h6></th>
                    <th><h6 class="text-center">City</h6></th>
                    <th><h6 class="text-center">State</h6></th>
                    <th><h6 class="text-center">Zip Code</h6></th>
                    <tr>
                    </table>
                    <?php
                    while($row = mysqli_fetch_array($result)) {?>
                        <div class= "row">
                        <table class='table-bordered'>
                        
                        <form method="post" action="PaymentDetails.php?id=<?=$row['id']?>">
                            <tr>
                            <td><h6 class="text-center"><?= $row['street']; ?></h6></td>
                            <td><h6 class="text-center"><?= $row['city']; ?></h6></td>
                            <td><h6 class="text-center"><?= $row['state']; ?></h6></td>
                            <td><h6 class="text-center"><?= $row['zip']; ?></h6></td>
                        </tr>
                        </form>
                    
                </table>
                </div>
                         <?php }

                    ?>
            </div>
        </div>
    </div>
</div>
  </div>

</body>
</html>