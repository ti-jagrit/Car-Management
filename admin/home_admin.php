<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management</title>
</head>
<link rel="icon" type="image/x-icon" href="../image/logo.png">
<link rel="stylesheet" href="admin_sytle.css">

<body>
    <div class="container">
        <div class="header">
           <a href="admin_logout.php" id='admin_logout'> Log Out</a>
            <img src="../image/logo.png" alt="" srcset="">
            <div class="text">
                <p class="head"> Car Management</p>
                <p class="admin">Admin Panel </p>
            </div>

        </div>

    </div>
    <div class="user">
        <button class="user_btn"> User Panel </button>
    </div>
    <div class='datacontainer'>
        <table>
            <tr>
        
                <td> ID </td>
                <td> Name </td>
                <td> Email </td>
                <td> Date of Birth </td>
                <td> Gender </td>
                <td> Address </td>
                <td> citizenship </td>
                <td> Phone </td>
                <td> Password </td>
                <td> Register Date </td>
                <td> </td>
            </tr>
            <?php
            session_start();
            include('../signup/db_config.php');
            $query = "select *from user";
            $result = $conn->query($query);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['user_id'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $email = $row['email'];
                $dob = $row['dop'];
                $gender = $row['gender'];
                $address = $row['address'];
                $citizenship = $row['citizenship'];
                $phone = $row['phone'];
                $password = $row['password'];
                $photo = $row['user_photo'];
                $registered_date = $row['registered_date'];


                echo "
            <tr>
    
                        <td> $id </td>
                <td>   $first_name  $last_name </td>
                <td> $email </td>
                <td>   $dob </td>
                <td>  $gender </td>
                <td>   $address </td>
                <td> $citizenship </td>
                <td>  $phone </td>
                <td> $password </td>
                <td> $registered_date </td>
                <td><a href='removeuser.php?id=$id'> Delete </a></td>
            </tr>
        ";
            }
            ?>
        </table>
    </div>
    <div class="Carpanal">
        <button class="carpanal"> Car Panel </button>
    </div>
    <div class='admin_container'>
        <table>
            <tr>
                <td> Car_Id </td>
                <td> Brand </td>
                <td> Model </td>
                <td> Year </td>
                <td> Fuel </td>
                <td> Price </td>
                <td> CC </td>
                <td> Mileage </td>
                <td> Distance </td>
                <td> City </td>
                <td> description </td>
                <td> date </td>
                <td> Seller </td>

            </tr>
            <?php
            include('../signup/db_config.php');
            $query = "select *from car_info";
            $result = $conn->query($query);
            while ($row = mysqli_fetch_assoc($result)) {
                $c_id = $row['car_id'];
                $brand = $row['brand'];
                $model = $row['model'];
                $year = $row['year'];
                $fuel = $row['fuel'];
                $price = $row['price'];
                $cc = $row['cc'];
                $mileage = $row['mileage'];
                $distance = $row['distance'];
                $city = $row['city'];
                $phone = $row['phone'];
                $description = $row['description'];
                $date = $row['date'];
                $seller_email = $row['user_email']; 


                echo "
            <tr>
                <td> $c_id </td>
                <td>   $brand </td>
                <td> $model </td>
                <td>  $year </td>
                <td>   $fuel </td>
                <td> $price </td>
                <td>  $cc </td>
                <td> $mileage </td>
                <td> $distance </td>
                <td> $city </td>
                <td> $description </td>
                <td> $date </td>                
                <td> $seller_email </td>
                <td><a href='remove_car.php?id=$c_id'> Delete </a></td>
            </tr>
        ";
            }
            ?>
        </table>
    </div>

</body>

</html>