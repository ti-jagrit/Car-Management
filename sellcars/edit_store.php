<?php
if (isset($_POST['car_update'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $fuel = $_POST['fuel'];
    $price = $_POST['price'];
    $cc = $_POST['cc'];
    $mileage = $_POST['mileage'];
    $distance = $_POST['distance'];
    $city = $_POST['city'];
    $description = $_POST['description'];
    $Date = date('Y-m-d');

    if ($_FILES['car_photo']['error'] === 4) {
        $error_message = "Please insert the second image.";
    } else {
        // Handle the second file upload
        $filename = $_FILES['car_photo']['name'];
        $filesize = $_FILES['car_photo']['size'];
        $tmpname = $_FILES['car_photo']['tmp_name'];
        $valid_img_ext = ['jpg', 'jpeg', 'png'];
        $imag_ext = explode('.', $filename);
        $imag_ext = strtolower(end($imag_ext));
        if (!in_array($imag_ext, $valid_img_ext)) {
            $error_message = "Invalid image extension for the second image.";
        } else {
            $new_img_name = uniqid();
            $new_img_name .= '.' . $imag_ext;
            $targetDir = "../car info/car_photo/";
            $targetFilePath = $targetDir . $new_img_name;
    
            move_uploaded_file($tmpname, $targetFilePath);
            $car = "UPDATE car_info SET car_photo='$new_img_name' where car_id='$id'";
            if ($conn->query($car)) {
                echo "uploaded car";
                // header("Location:sellerdsh.php");
            } else {
                echo "Error";
                }
    
            // Further processing logic for the second image...
        }
    }
  
        if ($_FILES['car_photo1']['error'] === 4) {
            $error_message1 = "Please insert the second image.";
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
            } else {
                $new_img_name1 = uniqid();
                $new_img_name1 .= '.' . $imag_ext1;
                $targetDir1 = "../car info/car_photo/";
                $targetFilePath1 = $targetDir1 . $new_img_name1;
        
                move_uploaded_file($tmpname1, $targetFilePath1);
                $car1 = "UPDATE car_info SET car_photo1='$new_img_name1' where car_id='$id'";
                if ($conn->query($car1)) {
                    echo "uplodaed car 1";
                    // header("Location:sellerdsh.php");
                } else {
                    echo "Error";
                    }
        
                // Further processing logic for the second image...
            }
        }
        
        // Check if the third file is uploaded
        if ($_FILES['car_photo2']['error'] === 4) {
            $error_message2 = "Please insert the third image.";
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
            } else {
                $new_img_name2 = uniqid();
                $new_img_name2 .= '.' . $imag_ext2;
                $targetDir2 = "../car info/car_photo/";
                $targetFilePath2 = $targetDir2 . $new_img_name2;
        
                move_uploaded_file($tmpname2, $targetFilePath2);
                $car2 = "UPDATE car_info SET car_photo2='$new_img_name2' where car_id='$id'";
                if ($conn->query($car2)) {
                    echo '<script> alert"uploaded car photos"; </script>';
                    // header("Location:sellerdsh.php");
                } else {
                    echo "Error";
                    }
        
                // Further processing logic for the third image...
            }
        }

        $updates = array();

        // Check and add columns with non-empty values to the updates array
        if (!empty($brand)) {
            $updates[] = "brand='$brand'";
        }
        if (!empty($model)) {
            $updates[] = "model='$model'";
        }
        if (!empty($year)) {
            $updates[] = "year='$year'";
        }
        if (!empty($fuel)) {
            $updates[] = "fuel='$fuel'";
        }
        if (!empty($price)) {
            $updates[] = "price='$price'";
        }
        if (!empty($cc)) {
            $updates[] = "cc='$cc'";
        }
        if (!empty($mileage)) {
            $updates[] = "mileage='$mileage'";
        }
        if (!empty($distance)) {
            $updates[] = "distance='$distance'";
        }
        if (!empty($city)) {
            $updates[] = "city='$city'";
        }
        if (!empty($phone)) {
            $updates[] = "phone='$phone'";
        }
        if (!empty($description)) {
            $updates[] = "description='$description'";
        }
        
        // Construct the SET clause of the SQL query
        $updateClause = implode(', ', $updates);
        
        // Check if there are any non-empty values to update
        if (!empty($updateClause)) {
            // Construct the complete SQL query
            $sql = "UPDATE car_info SET $updateClause WHERE car_id='$id'";
            // Now you can execute this SQL query using your database connection
        } else {
            // No non-empty values to update
            echo "No values to update.";
        }
                   
        if ($conn->query($sql)) {
            echo '<script>alert("Car Information Updated successfully");
            </script>';
            echo '<script> window.location.href = "sellerdsh.php"
            </script>';
           
        } else {
            echo "Error";
        }
        
    } 


?>