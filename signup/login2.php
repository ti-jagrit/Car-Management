<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Unicons -->
</head>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
<link rel="stylesheet" href="../css/login2.css" />
<style>
  .error {
    color: red;
  }
</style>
</style>

<body>
<?php
$error_msg=null;
$email=null;
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
        echo"
        <script> 
        window.location.href = '../home.php';</script>";
        // header("Location:../home.php");
    }
    elseif($res->num_rows>0){
            header("Location:../admin/home_admin.php");

    }
    else
    {
        $error_msg = "Incorrect username/password. Please try again.";
    }
}
?>

  <!-- Login Form  -->
   <div class="loginform">
   <a href="../index.php"> <div class="close-btn" id="close-btn">&times;</div></a>
    <form action="" method="POST" id="login-form" name="login">
      <h2>Login</h2>

      <div class="inputbox">
        <input type="email" placeholder="Enter your email" value="<?php echo $email; ?>" name="email" required id="email" />
        <i class="uil uil-envelope-alt email"></i>

      </div>

      <div class="inputbox">
        <input type="password" name="password" placeholder="Enter your password" required id="password1" />
             <br><br>
        <p class="error_msg" style="font-size: 15px; color: red;">      <?php if (isset($error_msg)) {
                echo $error_msg;
            } ?> </p>
      </div>
      <br><br>
      <input type="submit" name="login" id="submit" class='submit' value="log IN">
      
       <div class="login_signup">Don't have an account? <a href="signup2.html" id="signup">Signup</a></div>
    </form>
  </div>


  <script src="login2.js"></script>
</body>


</html>