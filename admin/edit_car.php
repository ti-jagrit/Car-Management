<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Details Form</title>
  <link rel="stylesheet" href="../car info/dstyle.css">
</head>

<body>
  <div class="container">
    <header>Car Details Form</header>
    <form action="" class="form" method="post" name="car_form" enctype="multipart/form-data">

      <!-- for drop down of brand name -->

      <div class="input-box">
        <label for="brand">Brand Name:</label>
        <select id="brand" name="brand" required>
          <option value="">-Select Brand Name-</option>
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
        <input type="text" id="model" placeholder="Enter Model" name="model" required>
      </div>

      <!-- for drop down-box  to select year -->

      <div class="input-box" >
        <label for="year">Manufacture Year:</label>
        <select id="year" required name="year">
          <option value="">-Select Year-</option>
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
        <select id="fuel" required name="fuel">
          <option value="">-Select Fuel Type-</option>
          <option value="Diesel">Diesel</option>
          <option value="Electric">Electric</option>
          <option value="Petrol">Petrol</option>
        </select>
      </div>

      <!-- for price input-box -->

      <div class="input-box">
        <label for="price">Price:</label>
        <input type="text" id="mileage" name="price" placeholder="Enter Price of Car In RS." required>
      </div>

      <!-- for cc  -->

      <div class="input-box">
        <label for="cc">CC:</label>
        <input type="text" id="cc" name="cc" placeholder="Enter CC of Car" required>
      </div>

      <!-- for mileage -->

      <div class="input-box">
        <label for="mileage">Mileage:</label>
        <input type="text" id="mileage" name="mileage" placeholder="Enter Mileage of Car" required>
      </div>

      <!-- for distance Used -->

      <div class="input-box">
        <label for="distance">Runned Distance :</label>
        <input type="text" id="distance" name="distance" placeholder="Enter KiloMeter Used" required>
      </div>

      <!-- for address and street -->

      <div class="input-box">
        <label for="address">Address:</label>
        <input type="text" id="address" name="city" placeholder="Enter Full Street Address" required>
      </div>

      <!-- for Contact Number -->

      <div class="input-box">
        <label for="phone">Contact Number:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter Your Phone Number" required>
      </div>

      <!-- for further description of car -->

      <label for="description">Description:</label>
      <textarea id="description" name="description"></textarea>
      <br>

      <!-- for uploading image and image container -->

      <label for="images">Upload Car Images in JPG,JPEG format:</label>
      <input type="file" name="car_photo"  id="imageUpload" value="upload your photo" required>
      <!-- <button type="button" id="cancelButton">Cancel Upload</button> -->


      <!-- <div id="previewContainer"></div>
      <div id="uploadedImagesContainer"></div> -->

      <!-- for submit button  -->

      <input type="submit" id="submit" name="car_update" value="update">
      <!-- <script src="d.js"></script> -->
    </form>
  </div>

</body>

</html>
<?php
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];


include('../signup/db_config.php');

 
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
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $Date = date('Y-m-d');
        if ($_FILES['car_photo']['error'] === 4) {
        echo " <script> alert ('Please insert an image'); </script>";

    } 
    else {
        $filename = $_FILES['car_photo']['name'];
        $filesize = $_FILES['car_photo']['size'];
        $tmpname = $_FILES['car_photo']['tmp_name'];
        $valid_img_ext = ['jpg','jpeg','png'];
        $imag_ext = explode('.', $filename);
        $imag_ext = strtolower(end($imag_ext));
        if (!in_array($imag_ext, $valid_img_ext)) {
            echo " <script> alert ('invalid image Extenstion'); </script>";
        } 
         else {
          

            $new_img_name = uniqid();
            $new_img_name .= '.' . $imag_ext;
            $targetDir="../car info/car_photo/";
            $targetFilePath =$targetDir.$new_img_name;

            move_uploaded_file($tmpname,$targetFilePath);

    $sql = "UPDATE car_info SET brand='$brand' ,model='$model',year='$year',fuel='$fuel',price='$price',cc='$cc',mileage='$mileage',distance='$distance',city='$city',phone='$phone',description='$description',car_photo='$new_img_name' where car_id='$id'";
                   
    if ($conn->query($sql)) {
        // echo "sucess";
        header("Location:home_admin.php");
    } else {
        echo "Error";
        }
}
}
    }






}
?>
