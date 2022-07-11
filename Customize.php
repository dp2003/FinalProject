<!DOCTYPE html>
<style>
body{ 
background:#EAE9E5;
 font-family: sans-serif;
 } 
 .login_form{
 margin-top: 25%;
  background: #fff;
  padding: 30px; 
     box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
     border-radius: 5px;
 }
 .form_btn{ 
 	background: #fb641b;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
    border: none;
    color: #fff; 
    width: 100% 
  }
  .label_txt{ 
font-size: 12px; 
   }  
   .form-control{border-radius: 20px }
   .signup_form{ 
    background: #fff;
  padding-left: 25px; 
   padding-right: 25px; 
      padding-bottom:5px; 
     box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
     border-radius: 5px;
    }
    .errmsg{ 
  margin: 2px auto;
  border-radius: 5px;
  border: 1px solid red;
  background: pink;
  text-align: left;
  color: brown;
  padding: 1px;
}
.successmsg{
  margin: 5px auto;
  text-align: left;
  color: black;
  padding: 10px;
}
.navbar{
  background-color: #b3cccc;
}
div.container {
  text-align: center;
  padding: 10px 20px;

}
</style>
<?php require_once("config.php"); ?>
<html>
<head>
<title> Customize</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
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
<br><br><br><br><br><br>

	<div class="row">
<?php 
 if(isset($_POST['signup'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $length = $_POST['length'];
    $size = $_POST['size'];
    $color = $_POST['color'];
$result = mysqli_query($dbc,"INSERT into customize(fname,lname,email,phone,length,size,color) values('$fname','$lname','$email','$phone','$length','$size','$color')");

    if($result)
    {
     $done=2; 
    }
    else{
      $error[] ='Failed : Something went wrong';
    }
 }
  ?>

         <div class="col-sm-4">
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>
		</div>
		<div class="col-sm-4">
      <?php if(isset($done)) 
      { ?>
    <div class="successmsg"><span style="font-size:100px;"></span> <br> Your data have been recieved successfully...
      <?php } else { ?>
       <div class="signup_form">
		<form action="" method="POST">
      <center><img src="JALogo.png" alt="JA Bangles" class="logo img-fluid" width="300px" ></center>
  <div class="form-group">
  	
        <label class="label_txt">First Name</label>
    <input type="text" class="form-control" name="fname" value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Last Name </label>
    <input type="text" class="form-control" name="lname" value="<?php if(isset($error)){ echo $_POST['lname'];}?>" required="">
  </div>
<div class="form-group">
    <label class="label_txt">Email </label>
    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Phone No.</label>
    <input type="text" class="form-control" name="phone" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Color </label>
    <input type="text" class="form-control" name="color" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Bangle Set Length</label>
                    <select name="length" class="form-control">
                        <option value="Select Length" class="label_txt">Select Length</option>
                        <option value="Short (12-18 Bangles each hand)" class="label_txt">Short (12-18 Bangles each hand)</option>
                        <option value="Tall (25-38 Bangles on each hand)" class="label_txt">Tall (25-38 Bangles on each hand)</option>
                        <option value="Ranisa (Above 40 Bangles on each hand)" class="label_txt">Ranisa (Above 40 Bangles on each hand)</option>
                    </select>
                    <div class="clear"></div>
  </div>
  <div class="form-group">
    <label class="label_txt" >Wrist size</label>
                    <select name="size" class="form-control">
                        <option value="Select Size" class="label_txt" >Select Size</option>
                        <option value="2.4 inch" class="label_txt" >2.4 inch</option>
                        <option value="2.6 inch" class="label_txt">2.6 inch</option>
                        <option value="2.8 inch" class="label_txt">2.8 inch</option>
                        <option value="2.10 inch" class="label_txt">2.10 inch</option>
                        <option value="2.12 inch" class="label_txt">2.12 inch</option>
                    </select>
                    <div class="clear"></div>
  </div>
  <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">Submit</button>
</form>
<?php } ?> 
</div>
		</div>
		<div class="col-sm-4">
		</div>

	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>