
// <!DOCTYPE html>
// <html lang="en">

// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Product Description</title>
//     <link rel="stylesheet" href="../css/details.css">
//     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
//         integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
//         crossorigin="anonymous" referrerpolicy="no-referrer" />
// </head>

// <style>
    
//     .input-box {
//    height: 100vh;
//         background-color: lightslategray;
//         display: flex;
//        justify-content: center;
//        align-items: center;
//     }

//     h2 {
//         text-align: center;
//     }

//     form {
//         width: 500px;
//         margin: 0 auto;
//         padding: 20px;
//         background-color: white;
//         border-radius: 4px;
//     }


//     .input-box input,
//     .input-box textarea {
//         width: 100%;
//         padding: 10px;
//         margin-top: 10px;
//         box-sizing: border-box;
//     }

//     .input-box input[type="submit"] {
//         background-color: lightblue;
//         color: white;
//         padding: 10px 20px;
//         border: none;
//         border-radius: 4px;
//         cursor: pointer;
//     }

//     .input-box input[type="submit"]:hover {
//         background-color: lightslategray;
        
//     }
//         /* Change to your desired hover background color */
    
// </style>


// <link rel="icon" type="image/x-icon" href="image/logo.png">

// <div class="input-box">
//     <form method='post'>
//         <h2>Fill This Details to Set Meeting </h2>
//         Select Date of Meeting:<input type='date' name='date_meet' required>
//         <!-- Phone Number:<input type='text' name='phone' required> -->
//         Description:<textarea name="remark" rows="4" cols="50" placeholder="Fill Your Queries"></textarea>

//         <a href='../product/product.php'><input type='submit' name='rquest' value='Request'></a>
       

//     </form>
// </div>

// <?php
// session_start();

// if (isset($_SESSION['email'])) {
//     $log_email = $_SESSION['email'];
//     if (isset($_GET["id"])) {
//         $id = $_GET["id"];
//         include('../signup/db_config.php');

//         $query = "select *from car_info where car_id='$id'";
//         $result = $conn->query($query);
//         while ($row = mysqli_fetch_assoc($result)) {
//             $c_id = $row['car_id'];
//             $seller_email = $row['user_email'];
//             $model = $row['model'];
//             $year = $row['year'];
//         }
//         $res = "select *from user where email='$seller_email'";
//         $out = $conn->query($res);
//         while ($row = mysqli_fetch_assoc($out)) {
//             $id = $row['user_id'];

//         }
//     }
//     if (isset($_POST['rquest'])) {
//         $meetdate = $_POST['date_meet'];
//         $remark = $_POST['remark'];
//         $date = date('Y-m-d H:i:s');
//         $sql = "insert into meet_req(seller_email,buyer_email,meet_date,req_date,remark) 
//     values('$seller_email','$log_email','$meetdate','$date','$remark')";
//         if ($conn->query($sql)) {
//             // echo "sucess";
//             header('Location:../product/product.php');
//         } else {
//             echo "Error";
//         }
//     }
// }
// ?>