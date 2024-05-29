<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="icon" type="image/x-icon" href="../image/logo.png">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/hero.css">
<link rel="stylesheet" href="../css/footer.css">

<body>
    <div class='container'>
        <?php
        include('../signup/db_config.php');

        session_start();

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
        include('../signup/db_config.php');
        $query = "select *from car_info";
        $result = $conn->query($query);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['car_id'];
            $brand = $row['brand'];
            $model = $row['model'];
            $price = $row['price'];
            $city = $row['city'];
            $fuel = $row['fuel'];
            $mileage = $row['mileage'];


            echo "
   
    <div class='item'>
    <div class='imgcontain'>
    
    <img src='../image/car.jpg' alt='' class='img'>
    </div>
    <div class='textcontiner'>
    <P class='carname'>  $brand $model </P>
    <P class='cardetails'>The $fuel type fuel give Mileage of $mileage </P>
    <P class='carprice'>$price  </P>
    <P class='carlocation'>$city </P>
    <P class='carlocation'>$first_name  $last_name </P>
    </div>
  
    </div> '";
        }

        ?>

        <a href="details.html">
            <div class="container">
                <div class="item">
                    <div class="imgcontain">

                        <img src="../image/plus.png" alt="" class="img">
                    </div>
                    <div class="textcontiner">
                        <P class="carname">add New</P>

                    </div>
                </div>
            </div>
        </a>
</body>

</html>