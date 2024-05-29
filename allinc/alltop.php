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
    <script src="../index.js"></script>
</head>

<link rel="icon" type="image/x-icon" href="image/logo.png">
<link rel="stylesheet" href="css/cmpcar.css">
<link rel="stylesheet" href="css/drop.css">
<link rel="stylesheet" href="css/edit.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/hero.css">
<link rel="stylesheet" href="css/login2.css">
<link rel="stylesheet" href="css/sellerdsh.css">
<link rel="stylesheet" href="css/style.css">


<body>

    <div class="header">

        <nav class="navbar">
            <a href="index.php"> <img src="image/logo.png" alt="Car Management" class="logo"> </a>
            <div class="navitem">
                <ul class="navlist">
                    <li><a href="home.php"> Home </a></li>
                    <li><a href="product/product.php"> Product </a></li>
                    <li><a href="sellcars/sellerdsh.php"> Sell Car </a></li>
                </ul>
            </div>
            <!-- <a href="signup.html"> <img src="image/userlogo.png" alt="user" srcset="" class="userlogo"></a> -->
            <div class="iconbtn"> <img src="image/menu-icon.png" alt="icon"></div>
            <!-- for profile dropdown -->
            <div id="dropdown">
                <button onclick="myFunction()" class="userlogo">
                    <?php

                    session_start();
                    if (empty($_SESSION['email'])) {
                        echo "<script> alear('please log in first');</script>";
                        header('location:signup/login2.php');
                    }

                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        include('signup/db_config.php');
                        $sql = "select * from user where email='$email'";
                        $result = $conn->query($sql);
                        if (isset($result)) {
                            while ($row = $result->fetch_assoc()) {
                                $first_name = $row['first_name'];
                                $last_name = $row['last_name'];
                                $id = $row['user_id'];
                                $image = $row['user_photo'];
                                if (isset($image)) {
                                    echo "
             <img src='signup/user_photo/$image' alt='user' class='userlogo'>
            </button>     
            
            <div id='myDropdown' class='dropdown-content'>

            
            <a>";
                                } else {
                                    echo "
            
                <img src='../image/userlogo.png' alt='user' class='userlogo'>
                </button>
                
                
                <div id='myDropdown' class='dropdown-content'>
    
                
                <a>";

                                }
                                echo $first_name . ' ' . $last_name;
                            }

                        } else {
                            echo 'nonon';
                        }
                    }
                    ?>
                    </a>
                    <a href="edit/editprofile.php"> Edit Profile </a>
                    <a href="signup/logout.php"> Log Out </a>

            </div>
    </div>

    </nav>
    <!-- this is for the responsive menu -->
    <div class="dropdown">
        <div class="dropdownmenu" id="dropmenu">
            <ul>
                <li><a href="#"> Home </a></li>
                <li><a href="product/product.php"> Product </a></li>
                <li><a href="car info/details.html"> Sell Car </a></li>
                <li><a href="signup/login2.html"> Log In</a></li>
            </ul>
        </div>
    </div>
    </div>





    <!-- this div is for body of the home page -->
    <div class="pagebody">