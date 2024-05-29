<?php

include "db_config.php";
if (isset($_POST['sign_up'])) {
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
    $sql = "select * from user";
    $userresult = $conn->query($sql);
    if (isset($userresult)) {
      while ($row = $userresult->fetch_assoc()) {
        $demail = $row['email'];
        if($email==$demail)
        {
          echo '<script>
          alert(" User Already Exits");
          window.location.href = "signup2.html";
        </script>';
  }
      }}

    if ($_FILES['filetoupload']['error'] === 4) {
        echo '<script> alert("Please insert an image"); </script>';

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
            $targetDir = "user_photo/";
            $targetFilePath = $targetDir . $new_img_name;

            move_uploaded_file($tmpname, $targetFilePath);
            echo"$first_name data feateach";

            $sql = "insert into user(first_name,last_name,email,dop,gender,address,province,district,citizenship,user_photo,phone,password,registered_date) 
        values('$first_name','$last_name','$email','$dob','$gender','$address','$province','$district','$citizenship','$new_img_name','$phone','$password','$date')";
            if ($conn->query($sql)) {
                header('Location:login2.php');
                // echo '<script>alert("Account registered Sucessfully")</script>';

            } else {
                echo "Error";
            }
        }
    }
}

?>