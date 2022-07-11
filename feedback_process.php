<?php 
require_once("config.php"); 
  //creating connection to database
$con=mysqli_connect("localhost","root","","bangles") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['signup'])))
{
  //fetching and storing the form data in variables
$fname = $con->real_escape_string($_POST['fname']);
$lname = $con->real_escape_string($_POST['lname']);
$email = $con->real_escape_string($_POST['email']);
$mobile = $con->real_escape_string($_POST['mobile']);
$feedback = $con->real_escape_string($_POST['feedback']);

  //query to insert the variable data into the database
$sql="INSERT INTO feedback (fname, lname, email, mobile, feedback) VALUES ('".$fname."','".$lname."','".$email."', '".$mobile."', '".$feedback."')";
if($numRows  == 1){
        $row = mysqli_fetch_assoc($res);


  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
}

?>