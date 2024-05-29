
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management</title>
</head>
<link rel="icon" type="image/x-icon" href="../image/logo.png">
<link rel="stylesheet" href="../css/sellerdsh.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/hero.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/drop.css">
<style>
    .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: lightgray;
        color: royalblue;
        margin-bottom: 1rem;
        position: sticky;
        top: 0;
    }

    .navbar h2 {
        display: flex;
        list-style: none;
        margin: 20px 0px;
        float: left;
    }

    .navbar h2 {
        font-family: century;
        font-size: 40px;
        font-weight: bold;
    }

    .navbar h2:hover {
        background-color: whitesmoke;
        color: blue;
        box-shadow: 0 0 10;
    }

    .sidenav {
        height: 100%;
        width: 250px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        border-right: 2px solid white;


        /* background-color: darkslateblue; */
        background-color: gainsboro;
        overflow-x: hidden;
        padding-top: 50px;
    }

    .sidenav a {
        padding: 20px 10px 50px 50px;
        text-decoration: none;
        font-size: 1.5rem;
        color: darkblue;
        display: block;
        text-decoration: underline;
    }

    .logo_side_nav img {
        width: 200px;
        margin-left: -2rem;
        border-bottom: 2px solid gray;
        /* background-color: white; */
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .main {
        margin-left: 260px;
        /* Same as the width of the sidenav */
    }


    .footerbottom {
        position: fixed;
        width: 100%;
        left: 0;
        right: 0;
        bottom: 0;
        display: inline-block;
        background-color: blue;
        text-align: center;
        
        color: white;
        padding-top: 10px;
        padding-bottom: 15px;
        font-size: 1rem;

    }
</style>

<body>

    <nav class="navbar">
        <h2>Seller Dashboard</h2>
    </nav>
    <div class="sidenav">
        <div class="logo_side_nav">
            <a href="#"> <img src="../image/logo.png" alt="" srcset=""> </a>
        </div>
     
        <a href="../home.php">Home</a>
        <a href="../product/product.php">Product</a>
        <a href="../sellcars/meetinginfo.php">Meeting Info</a>

    </div>
    <div class="main">
        <h2></h2>


        <?php
        include('../signup/db_config.php');

        session_start();
        // this is for request for visit
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

        include('../signup/db_config.php');
        $query = "select * from car_info where user_email='$email'";
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
   
                <a href='seller_desc.php?id=$id'>
       
                <div class='item'>
                <div class='imgcontain'>
                
                <img src='../car info/car_photo/$photo' alt='' class='img'>
                </div>
                <div class='textcontiner'>
                <P class='carname'>  $brand $model </P>
                <P class='cardetails'>The $fuel type fuel give Mileage of $mileage </P>
                <P class='carprice'>$price  </P>
                <P class='carlocation'>$city </P>
            
                </div>
              
                </div></a> '";

            }

        }
    

        ?>
        <a href="../car info/details.html">
            <div class="item">
                <div class="imgcontain">

                    <img src="../image/plus.png" alt="" class="img">
                </div>
                <div class="textcontiner">
                    <P class="carname">Add New</P>

                </div>
            </div>
        </a>





        <div class="footerbottom">
            <p>Copyright &copy; All Right Reserved to Car Management </p>
        </div>

    </div>



</body>

</html>
