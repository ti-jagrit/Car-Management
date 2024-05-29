<!-- product page code befor filter -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Car Management</title>
</head>

<link rel="icon" type="image/x-icon" href="../image/logo.png">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/hero.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/product.css">



<body><!-- this are the div for each car -->
  <nav class="navbar">
    <h2>Listed Product</h2>
  </nav>
  <div class="sidenav">
    <div class="logo_side_nav">
      <a href="../home.php"> <img src="../image/logo.png" alt="" srcset=""> </a>
    </div>
    <a href="../home.php">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Add Filter
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <div class="fuel">
          <form action="" method="post">

            <label for="fuel">Fuel Type:</label>
            <select name="fuel" id="fuel">
              <option value="" selected>Fuel Type</option>
              <option value="diesel">Diesel</option>
              <option value="petrol">Petrol</option>
              <option value="electric">Electric</option>

            </select>
            <br>
            <!-- <label for="price">Price:</label><br>
            <select name="price" id="fuel">
              <option value="" selected> Any </option>
              <option value="1">high to low</option>
              <option value="0">Low to high</option>
            </select> -->
            <br>
            <label for="mf">Year:</label><br>
            <!-- <select name="mf" id="fuel"> -->
              <input type="number" name="mf" placeholder="enter year:">
              <!-- <option value="" selected> Non </option>
              <option value="2000">2000-2005</option>
              <option value="2005">2005-2010</option>
              <option value="2010">2010-2015</option>
              <option value="2015">2015-2020</option>
              <option value="2020">2020-above</option> -->
            </select>
        </div>
        <input type="submit" name="filter" id="submit" class='submit' value="Apply Filter">
        </form>
      </div>
    </div>
  </div>




  <div class="main">

    <?php
    include('../signup/db_config.php');
    session_start();
    if(empty( $_SESSION['email']))
    {
    echo "<script> alear('please log in first');</script>";
    header('location:../signup/login2.php');
    }

    
    if (isset($_SESSION['email'])) {
      $email = $_SESSION['email'];
      $sql = "select * from user where email='$email'";
      $userresult = $conn->query($sql);
      if (isset($userresult)) {
        while ($row = $userresult->fetch_assoc()) {
          $first_name = $row['first_name'];
          $last_name = $row['last_name'];
          $id = $row['user_id'];

        }

      }
    }

    ?>

  




  <?php
  // ... (Database connection and query)
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Fuel = $_POST['fuel'];
    // $Price = $_POST['price'];
    $Year = $_POST['mf'];

    // if all empty
  
    if (empty($Fuel) && empty($Price) && empty($Year)) {
      include('../signup/db_config.php');
      $query = "select *from car_info where user_email !='$email'";
      $result = $conn->query($query);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['car_id'];
        $brand = $row['brand'];
        $model = $row['model'];
        $price = $row['price'];
        $city = $row['city'];
        $fuel = $row['fuel'];
        $mileage = $row['mileage'];
        $photo = $row['car_photo'];


        echo "
           <a href='desc.php?id=$id'>
          <div class='item'>
          <div class='imgcontain'>
          
          <img src='../car info/car_photo/$photo' alt='photo' class='img'>
          </div>
          <div class='textcontiner'>
          <P class='carname'>  $brand $model </P>
          <P class='cardetails'>The $fuel type fuel give Mileage of $mileage </P>
          <P class='carprice'>$price  </P>
          <P class='carlocation'>$city </P>
      
          </div>
        
          </div> 
          </a>";
      }

    }

    // Construct the SQL query with filters
   
  $sql = "SELECT * FROM car_info WHERE  user_email !='$email' AND";

  if (!empty($Fuel)) {
      $sql .= " fuel = '$Fuel'";
  }
  
  if (!empty($Year)) {
      if (!empty($Fuel)) {
          $sql .= " AND";
      }
      $sql .= " year = '$Year'";
  }
  
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id = $row['car_id'];
        $brand = $row['brand'];
        $model = $row['model'];
        $price = $row['price'];
        $city = $row['city'];
        $fuel = $row['fuel'];
        $mileage = $row['mileage'];
        $photo = $row['car_photo'];

        echo "
            <a href='desc.php?id=$id'>
            <div class='item'>
                <div class='imgcontain'>
                    <img src='../car info/car_photo/$photo' alt='photo' class='img'>
                </div>
                <div class='textcontiner'>
                    <p class='carname'>$brand $model</p>
                    <p class='cardetails'>The $fuel type fuel gives Mileage of $mileage</p>
                    <p class='carprice'>$price</p>
                    <p class='carlocation'>$city</p>
                </div>
            </div>
            </a>";
      }
    } else {
      echo "No matching cars found.";
    }
  } 
  else{
    
    $query = "select *from car_info where user_email !='$email'";
    $result = $conn->query($query);
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['car_id'];
      $brand = $row['brand'];
      $model = $row['model'];
      $price = $row['price'];
      $city = $row['city'];
      $fuel = $row['fuel'];
      $mileage = $row['mileage'];
      $photo = $row['car_photo'];


      echo "
           <a href='desc.php?id=$id'>
          <div class='item'>
          <div class='imgcontain'>
          
          <img src='../car info/car_photo/$photo' alt='photo' class='img'>
          </div>
          <div class='textcontiner'>
          <P class='carname'>  $brand $model </P>
          <P class='cardetails'>The $fuel type fuel give Mileage of $mileage </P>
          <P class='carprice'>$price  </P>
          <P class='carlocation'>$city </P>
      
          </div>
        
          </div> 
          </a>";
    }
  }

  // ... (Closing tags)
  ?>
  </div>

  <link rel="stylesheet" href="../css/footer.css">
</body>
<script>
  //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
</script>

</html>