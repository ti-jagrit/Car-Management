<?php
session_start();

if(empty( $_SESSION['email']))
{
echo "<script> alear('please log in first');</script>";
header('location:signup/login2.html');
}


  $id="";
  if(isset($_GET["id"])){
      $id=$_GET["id"];
    include('../signup/db_config.php');

// sql to delete a record
$sql = "DELETE FROM car_info WHERE car_id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('location:sellerdsh.php');
} else {
  echo " <script> alert ('failed to delete id'); </script>";
  header('location:editprofile.php');
}
}
?>