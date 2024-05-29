<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Car Management</title>

</head>

<link rel="icon" type="image/x-icon" href="../image/logo.png">
<link rel="stylesheet" href="../css/edit.css">
<style>

   
  </style>
</head>
<body>
<?php

session_start();

if(empty( $_SESSION['email']))
{
echo "<script> alear('please log in first');</script>";
header('location:signup/login2.html');
}

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    include('../signup/db_config.php');
    $sql = "select * from user where email='$email'";
    $result = $conn->query($sql);
    if (isset($result)) {
      while ($row = $result->fetch_assoc()) {
          $id=$row['user_id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $dop =$row['dop'];
            $gender =$row['gender'];
            $address =$row['address'];
            $phone =$row['phone'];
            $image=$row['user_photo'];
echo"
  <div class='container'>
     <div class='picture-container'>
  <img src='../signup/user_photo/$image' alt='Picture'>
</div>
    <h1 class='profile-name'>$first_name $last_name</h1>
     
    <div class='info'>
      <h2> Information</h2>
      <p>Email: $email </p>
      <p>Date of Birth: $dop</p>
      <p>Gender: $gender </p>
      <p>Address: $address</p>
      <p>Phone: $phone </p>
    </div>
  
  
    <div class='btns'>
    
    <a href='deleteacc.php?id=$id'>   <input type='button' value='Delete Account' class='delete_acc'> </a>
    <a href='editacc.php?id=$id'>   <input type='button' value='Edit Profile' class='editprofile'> </a>
    <a href='passchange.php?id=$id'>  <input type='button' value='Change Password' class='pass_change'> </a>
    <a href='../home.php'>  <input type='button' value='Home' class='pass_change'> </a>
    </div>
    </div>
    
    ";
  }
}
}
  ?>


</body>

</html>