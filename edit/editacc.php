<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {
            color: red;
        }
    </style>
    <link rel="stylesheet" href="../css/style22.css" />
</head>

<body>
    <section class="container">
        <header>Edit Profile Form</header>

        <form name="update" method="POST"  class="form" form id="form" enctype="multipart/form-data">
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

                <div class="input-box">
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
                    <span class="error" id="phone-message"></span>
                </div>

                <input type="submit" value='update_data' name="update_data" id="update_data">
                <!-- <input type="submit" id="sign_up" value="Register" name="update_data"> -->
                <!-- <button type="submit" id="submit" value="sign_up" name="sign_up">Register</button> -->
            </form>
            <script src="editacc.js"></script>
    </section>

</body>

</html>
<?php

if (isset($_POST['update_data'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $phone = $_POST['phone'];
    
    if ($_FILES['filetoupload']['error'] === 4) {
        echo '<script>alert("Please insert an image");</script>';

    } else {
        $filename = $_FILES['filetoupload']['name'];
        $filesize = $_FILES['filetoupload']['size'];
        $tmpname = $_FILES['filetoupload']['tmp_name'];
        $valid_img_ext = ['jpg', 'jpeg', 'png'];
        $imag_ext = explode('.', $filename);
        $imag_ext = strtolower(end($imag_ext));
        if (!in_array($imag_ext, $valid_img_ext)) {
            echo '<script>alert("Invalid image extension");</script>';

        } 
        else{

            $new_img_name = uniqid();
            $new_img_name .= '.' . $imag_ext;
            $targetDir = "../signup/user_photo/";
            $targetFilePath = $targetDir . $new_img_name;

            move_uploaded_file($tmpname, $targetFilePath);
    $id = "";
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        include('../signup/db_config.php');

        // sql to delete a record
        $sql = "UPDATE user SET first_name='$first_name', last_name='$last_name', dop='$dob', gender='$gender', address='$address', province='$province', district='$district',user_photo='$new_img_name', phone='$phone' WHERE user_id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Information changed");</script>';
            echo '<script> window.location.href = "editprofile.php"; </script>';
        } else {
            echo '<script>alert("Failed to update");</script>';
            echo '<script> window.location.href = "editprofile.php"; </script>';
        }
    }
}
}
}

?>
