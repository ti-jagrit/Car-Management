<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details Form</title>
    <link rel="stylesheet" href="../car info/dstyle.css">
    <link rel="icon" type="image/x-icon" href="../image/logo.png">
</head>
<style>
    .error{
        color: red;
    }
</style>


<body>
    <div class="container">
        <header>Car Details Form</header>
        <?php
        $id = "";
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            include('../signup/db_config.php');
            $sql = "select * FROM car_info WHERE car_id='$id'";
            $result = $conn->query($sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['car_id'];
                $brand = $row['brand'];
                $model = $row['model'];
                $year = $row['year'];
                $price = $row['price'];
                $cc = $row['cc'];
                $city = $row['city'];
                $fuel = $row['fuel'];
                $mileage = $row['mileage'];
                $distance = $row['distance'];
                $phone = $row['phone'];
                $desc = $row['description'];
                $photo = $row['car_photo'];
                $upload_date = $row['date'];
                ?>
                <form action="" class="form" method="post" name="car_form" enctype="multipart/form-data">

                    <div class="input-box">
                        <label for="brand">Brand Name:</label>
                        <select id="brand" name="brand" placeholder="<?php echo $brand; ?>">
                            <!-- <option value="">-Select Brand Name-</option> -->
                            <option value="<?php $brand ?>"><?php echo $brand; ?></option>
                            <option value="TATA">TATA</option>
                            <option value="MAHINDRA">MAHINDRA</option>
                            <option value="MARUTI">MARUTI SUZUKI</option>
                            <option value="HYUNDAI">HYUNDAI</option>
                            <option value="KIA">KIA</option>
                            <option value="RENAULT">RENAULT</option>
                            <option value="SKODA">SKODA</option>
                            <option value="TOYOTA">TOYOTA</option>
                            <option value="FORD">FORD</option>
                            <option value="HONDA">HONDA</option>
                            <option value="NISSAN">NISSAN</option>
                            <option value="MG">MG MOTORS</option>
                            <option value="VOLVO">VOLVO</option>
                            <option value="VOLKSWAGEN">VOLKSWAGEN</option>


                        </select>
                    </div>

                    <!-- for model name input box -->

                    <div class="input-box">
                        <label for="model">Model Name:</label>
                        <input type="text" id="model" placeholder="<?php echo $model; ?>" name="model">
                    </div>

                    <!-- for drop down-box  to select year -->

                    <div class="input-box">
                        <label for="year">Manufacture Year:</label>
                        <select id="year" name="year" placeholder="">
                            <!-- <option value="">-Select Year-</option> -->
                            <option value="<?php $year ?>"><?php echo $year; ?></option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2000">2000</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>

                    <!-- dropdown box for fuel type -->

                    <div class="input-box">
                        <label for="fuel">Fuel Type:</label>
                        <select id="fuel" name="fuel" placeholder="<?php $fuel ?>">
                            <option value="<?php $fuel ?>"> <?php echo $fuel; ?> </option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electric">Electric</option>
                            <option value="Petrol">Petrol</option>
                        </select>
                    </div>

                    <!-- for price input-box -->

                    <div class="input-box">
                        <label for="price">Price:</label>
                        <input type="text" id="price" name="price" value="<?php echo $price; ?>">
                        <span class="error" id="price-message"></span>
                    </div>

                    <!-- for cc  -->

                    <div class="input-box">
                        <label for="cc">CC:</label>
                        <input type="text" id="cc" name="cc" value="<?php echo $cc; ?>">
                        <span class="error" id="cc-message"></span>
                    </div>

                    <!-- for mileage -->

                    <div class="input-box">
                        <label for="mileage">Mileage:</label>
                        <input type="text" id="mileage" name="mileage" value="<?php echo $mileage; ?>">
                        <span class="error" id="mileage-message"></span>
                    </div>

                    <!-- for distance Used -->

                    <div class="input-box">
                        <label for="distance">Runned Distance :</label>
                        <input type="text" id="distance" name="distance" value="<?php echo $distance; ?>">
                        <span class="error" id="distance-message"></span>
                    </div>

                    <!-- for address and street -->

                    <div class="input-box">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="city" value="<?php echo $city; ?>">
                        <span class="error" id="address-message"></span>
                    </div>

                    <!-- for Contact Number -->



                    <!-- for further description of car -->

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" value="<?php echo $desc;?>"></textarea>
            <span class="error" id="description-message"></span>
            <br>

            <!-- for uploading image and image container -->

            <label for="images">Upload Car Images in JPG,JPEG format:</label>
            <input type="file" name="car_photo" id="imageUpload" value="upload your photo">
            <input type="file" name="car_photo1" id="imageUpload" value="upload your photo">
            <input type="file" name="car_photo2" id="imageUpload" value="upload your photo">

            <input type="submit" id="submit" name="car_update" value="Submit">
            <script src="update_valid.js"></script>
        </form>
        
        <?php
        }
    }
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
    </div>
</body>

</html>