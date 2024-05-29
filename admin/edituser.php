<!-- <html> -->
  <style>
    .error {
      color: red;
    }
  </style>
  <link rel="stylesheet" href="../css/style22.css" />
<body>
  <section class="container">
    <h1> SignUp Form </h1>

    <form name="signup_form" method="POST" class="form" form id="form" enctype="multipart/form-data">
      <div class="input-box">
        <label for="user_image">Upload Photo: </label>
        <input type="file" accept="image/png, image/jpeg, image/jpg" name="filetoupload" value="upload your photo">
      </div>

      <div class="column">
        <div class="input-box">
          <label for="first_name">First Name:</label>
          <input type="text" name="first_name" id="fname" placeholder="First Name" required>
          <span class="error" id="fname-message"></span>
        </div>
        <div class="input-box">
          <label for="last_name">Last Name:</label>
          <input type="text" name="last_name" id="lname" placeholder="Last Name" required>
          <span class="error" id="lname-message"></span>
        </div>
      </div>

      <div class="input-box">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email Address">
        <span class="error" id="email-message"></span>
      </div>

      <div class="column">
        <div class="input-box">
          <label for="dob">Date of birth:</label>
          <input type="date" name="dob" id="dob">
          <span class="error" id="dob-message"></span>
        </div>
        <div class="gender">
          <label for="gender">Gender:</label>
          <select name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>

      <div class="input-box address">
        Address: <input type="text" name="address" id="address" placeholder="Enter Street Address" required>
        <span class="error" id="address-message"></span>

        <div class="column">
          <div class="select-box">
            <select name="province" id="province" required>
              <span class="error" id="province-message"></span>
              <option value="koshi">Koshi</option>
              <option value="madhesh">Madhesh</option>
              <option value="bagmati" selected>Bagmati</option>
              <option value="gandaki">Gandaki</option>
              <option value="lumbini">Lumbini</option>
              <option value="karnali">Karnali</option>
              <option value="sudurpaschim">Sudurpaschim</option>
            </select>
          </div>
          <div class="select-box">
            <select name="district" id="district" required>
              <span class="error" id="district-message"></span>
              <option>Kathmandu</option>
              <option>Bhaktapur</option>
              <option>Kritipur</option>
              <option>Lalitpur</option>
            </select>
          </div>
        </div>
        <div class="input-box address">
          Citizenship No: <input type="text" name="citizenship" id="citizenship" placeholder="Enter Citizenship Number"
            required>
          <span class="error" id="citizenship-message"></span>
        </div>
        <div class="input-box">
          <label for="citizenship_photo">Citizenship Photo: </label>
          <input type="file" name="citizenship_photo" value="upload your photo if citizenship">
          <p>*both side have to marged in at one</p>
          <span class="error" id="citizenship-photo-message"></span>
        </div>
        <div class="input-box">
          <label for="phone">Phone Number:</label>
          <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
          <span class="error" id="phone-message"></span>
        </div>

        <div class="column">
          <div class="input-box">
            <label for="password1">Password:</label>
            <input type="password" name="password" id="password1" placeholder="Password" required>
            <span class="error" id="password1-message"></span>
          </div>
          <div class="input-box">
            <label for="password2">Confirm Password:</label>
            <input type="password" name="" id="password2" placeholder="Confirm Password" required>
            <span class="error" id="password2-message"></span>
          </div>
        </div>

      </div>

      <input type="submit" id="sign_up" value="Update" name="update_record">

      <script src="signup.js"></script>
    </form>
  </section>

<?php
$id = "";
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  include('../signup/db_config.php');
  if (isset($_POST['update_record'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $citizenship = $_POST['citizenship'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $date = date('Y-m-d H:i:s');
    if ($_FILES['filetoupload']['error'] === 4) {
      echo " <script> alert ('Please insert an image'); </script>";

    } else {
      $filename = $_FILES['filetoupload']['name'];
      $filesize = $_FILES['filetoupload']['size'];
      $tmpname = $_FILES['filetoupload']['tmp_name'];
      $valid_img_ext = ['jpg', 'jpeg', 'png'];
      $imag_ext = explode('.', $filename);
      $imag_ext = strtolower(end($imag_ext));
      if (!in_array($imag_ext, $valid_img_ext)) {
        echo " <script> alert ('invalid image Extenstion'); </script>";
      } else {

        $new_img_name = uniqid();
        $new_img_name .= '.' . $imag_ext;
        $targetDir = "../signup/user_photo/";
        $targetFilePath = $targetDir . $new_img_name;

        move_uploaded_file($tmpname, $targetFilePath);

        $res = "UPDATE user SET first_name='$first_name',last_name='$last_name',email='$email',dop='$dob',gender='$gender',address='$address',province='$province',district='$district',citizenship='$citizenship',user_photo='$new_img_name',phone='$phone',password='$password' WHERE user_id='$id'";
        if ($conn->query($res)) {
          header("Location:home_admin.php");
          echo " <script> alert ('user details updated sucessfully'); </script>";
        } else {
          echo "Error";
        }
      }
    }
  }
}
?>