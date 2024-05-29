<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Management</title>
</head>
<link rel="icon" type="image/x-icon" href="../image/logo.png">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,900&display=swap');

  * {
    margin: 0px;
    padding: 0px;
    font-family: 'Roboto', sans-serif;
  }

  .container {
    max-width: 400px;
    margin: 0 auto;
    margin-top: 3rem;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 2px 2px 2px 2px gray;
  }

  h2 {
    text-align: center;
    margin-bottom: 1rem;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  .form-group input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }

  .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: purple;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
  }

  .btn:hover {
    background-color: darkmagenta;
  }
  .error{
    color: red;
  }
</style>

<body>
<?php
session_start();
if(empty( $_SESSION['email']))
{
echo "<script> alear('please log in first');</script>";
header('location:signup/login2.html');
}
$err="";
    include('../signup/db_config.php');
    if (isset($_POST['change_pass'])) {
      $oldPassword = $_POST["old_pass"];
      $newPassword = $_POST["new_pass"];
      $confirmPassword = $_POST["confirm_pass"];
      if ($confirmPassword !== $newPassword) {
        $err="Conform Password Doesn't Match";
    }
    
      else{
      $id = "";
      if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "SELECT password FROM user WHERE user_id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
          $row = $result->fetch_assoc();
          $currentPassword = $row["password"];
          if ($currentPassword !== $oldPassword) {
            $err="Old Password Doesn't Match";
          } else {
            // Update the password in the database
            $updateSql = "UPDATE user SET password = '$newPassword' WHERE user_id = $id";
            
            if ($conn->query($updateSql) === TRUE) {
              echo "<script> alert ('Password changed Sucessfully') </script>";
              header('location:editprofile.php');

            }
          }
        }
        }
      }
    }
    // else{
    //   echo "<script> alert ('enter correct a password') </script>";
    // }
    ?>
  <div class="container">
    <h2>Password Change Form</h2>
    <form method="POST">
      <div class="form-group">
        <label for="oldPassword">Old Password:</label>
        <input type="password" id="oldPassword" name="old_pass">
        <span id="error" class="error"> <?php echo $err; ?></span>
      </div>
      <div class="form-group">
        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="new_pass">
        <span class="error" id="password1-message"></span>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirm_pass">
        <span class="error" id="password2-message"></span>
        
        
      </div>
      <div class="form-group">
        <input type="submit" value="Change Password" name="change_pass" id="update_pass" class="btn">
          </div>
              <script src="password.js"></script>
      <a href='editprofile.php'><input type="button" value=" &lt;Back"> </a>
    </form>


</body>

</html>
