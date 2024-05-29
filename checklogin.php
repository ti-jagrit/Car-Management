<?php

if(empty( $_SESSION['email']))
{
echo "<script> alear('please log in first');</script>";
header('location:signup/login2.php');
}
?>