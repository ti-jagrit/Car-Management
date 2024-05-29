<link rel="icon" type="image/x-icon" href="image/logo.png">
<?php
session_start();
include('../signup/db_config.php');

$email = $_SESSION['email'];
if (isset($_POST['car_submit'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $fuel = $_POST['fuel'];
    $price = $_POST['price'];
    $cc = $_POST['cc'];
    $mileage = $_POST['mileage'];
    $distance = $_POST['distance'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $Date = date('Y-m-d');

    $queeee = "SELECT * FROM car_info WHERE user_email='$email' AND brand='$brand' AND model='$model' AND price='$price'";
    $resu = $conn->query($queeee);

    if (!$resu) {
        echo "Error in query: " . mysqli_error($conn);
    } 
    else {
        if (mysqli_num_rows($resu) > 0) {
            echo '<script>
                alert("This Car already exists");
                window.location.href = "details.html";
            </script>';
            echo"";
        }
        else{
            
            
            
      
    
    

            if ($_FILES['car_photo']['error'] === 4) {
                $error_message = "Please insert the first image.";
                $err=1;
            } else {
                // Handle the first file upload
                $filename = $_FILES['car_photo']['name'];
                $filesize = $_FILES['car_photo']['size'];
                $tmpname = $_FILES['car_photo']['tmp_name'];
                $valid_img_ext = ['jpg', 'jpeg', 'png'];
                $imag_ext = explode('.', $filename);
                $imag_ext = strtolower(end($imag_ext));
                if (!in_array($imag_ext, $valid_img_ext)) {
                    $error_message = "Invalid image extension for the first image.";
                    $err=1;
                } else {
                    $new_img_name = uniqid();
                    $new_img_name .= '.' . $imag_ext;
                    $targetDir = "car_photo/";
                    $targetFilePath = $targetDir . $new_img_name;

                    move_uploaded_file($tmpname, $targetFilePath);
                }}
                    // Further processing logic for the first image...

                    // Check if the second file is uploaded
                    if ($_FILES['car_photo1']['error'] === 4) {
                        $error_message1 = "Please insert the second image.";
                        $err=1;
                    } else {
                        // Handle the second file upload
                        $filename1 = $_FILES['car_photo1']['name'];
                        $filesize1 = $_FILES['car_photo1']['size'];
                        $tmpname1 = $_FILES['car_photo1']['tmp_name'];
                        $valid_img_ext1 = ['jpg', 'jpeg', 'png'];
                        $imag_ext1 = explode('.', $filename1);
                        $imag_ext1 = strtolower(end($imag_ext1));
                        if (!in_array($imag_ext1, $valid_img_ext1)) {
                            $error_message1 = "Invalid image extension for the second image.";
                            $err=1;
                        } else {
                            $new_img_name1 = uniqid();
                            $new_img_name1 .= '.' . $imag_ext1;
                            $targetDir1 = "car_photo/";
                            $targetFilePath1 = $targetDir1 . $new_img_name1;

                            move_uploaded_file($tmpname1, $targetFilePath1);
                        }}

                            // Further processing logic for the second image...


                            // Check if the third file is uploaded
                            if ($_FILES['car_photo2']['error'] === 4) {
                                $error_message2 = "Please insert the third image.";
                                $err=1;
                            } else {
                                // Handle the third file upload
                                $filename2 = $_FILES['car_photo2']['name'];
                                $filesize2 = $_FILES['car_photo2']['size'];
                                $tmpname2 = $_FILES['car_photo2']['tmp_name'];
                                $valid_img_ext2 = ['jpg', 'jpeg', 'png'];
                                $imag_ext2 = explode('.', $filename2);
                                $imag_ext2 = strtolower(end($imag_ext2));
                                if (!in_array($imag_ext2, $valid_img_ext2)) {
                                    $error_message2 = "Invalid image extension for the third image.";
                                    $err=1;
                                } else {
                                    $new_img_name2 = uniqid();
                                    $new_img_name2 .= '.' . $imag_ext2;
                                    $targetDir2 = "car_photo/";
                                    $targetFilePath2 = $targetDir2 . $new_img_name2;

                                    move_uploaded_file($tmpname2, $targetFilePath2);

                                    // Further processing logic for the third image...



                   
                                }
                            }
                    if($err!==1){
        $sql = "insert into car_info(brand,model,year,fuel,price,cc,mileage,distance,city,phone,description,date,car_photo,car_photo1,car_photo2,user_email)
        values('$brand','$model','$year','$fuel','$price','$cc','$mileage','$distance','$city','$phone','$description','$Date','$new_img_name','$new_img_name1','$new_img_name2','$email')";
                        if ($conn->query($sql)) {
                            // echo "sucess";
                            header("Location:../home.php");
                        }
                        } 
                        else {
                            echo '<script>alert("Failed to upload car");</script>';
                            echo '<script> window.location.href = "details.html"; </script>';
                        }
                        

    }
}
}




?>