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