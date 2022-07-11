<?php
session_start();

$connect = mysqli_connect("localhost","root","","bangles");
if(isset($_POST['submit']))
{
  $choice= $_POST['choice'];

  $query="INSERT INTO comments(choice) VALUES ('$choice')";
  $query_run = mysqli_query($connect,$query);

  if($query_run)
  {
    $_SESSION['status']="Inserted Successfully!";
    header("Location: Confirm.php");
  }
  else{
    $_SESSION['status']="Error!";
    header("Location: Confirm.php");
  }

}


?>
<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 .form{
   margin-top: 2%;
  padding: 30px; 
  box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
  border-radius: 5px;
  width: 50%;
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
</style>
  <title>Thank You!!</title>
  <div class="container">
   <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
      <?php
      if(isset($_SESSION['status'])){
          echo "<h6>".$_SESSION['status']."</h6>";
          unset($_SESSION['status']);}
      ?>
      <center>
          <img src = "thankyou.png" style="width:30%; margin-top: 2%;">
    <form  action = "" method = "POST" onsubmit="myFunction()">
  <div class="form">
  <h1 style="font-family: sans-serif;">Your delivery is being processed!!</h1>
  <h3 style="font-family: sans-serif;">Your consignment will be delivered within 5 days!</h3>

  <h4 style="font-family: sans-serif;">If your delivery is not recieved within 5 dayss please contact us!!</h4>

  <h4 style="font-family: sans-serif;">Please Express your overall user Experience!!</h4>

<h1 style="font-family: sans-serif;">
    <div>
      <input type="radio"  name="choice" value="bad"
             checked>
      <label for="bad">Bad</label>

      <input type="radio"  name="choice" value="good">
      <label for="good">Good</label>

      <input type="radio"  name="choice" value="excellent">
      <label for="excellent">Excellent</label>
    </div><br>
    <button class = "button" stype="submit" name="submit">Submit</button>
  </div>
</h1>
</form>
<script>
function myFunction() {
alert("Your response was submitted!!Thank you");
}
</script>
 
</center>
</div>
</div>
</div>


</head>
<body>