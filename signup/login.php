<?php
include('db_config.php');
session_start();
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from user where email='$email' and password='$password'";
    $admin="select * from admin_login where email='$email' and password='$password'";;
  $res=$conn->query($admin);
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc();
        $_SESSION['email']=$email;
        header("Location:../home.php");
    }
    elseif($res->num_rows>0){
            header("Location:../admin/home_admin.php");

    }
    else
    {
        $error_msg = "Incorrect password. Please try again.";
    }
}
?>
