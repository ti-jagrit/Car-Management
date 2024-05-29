<!DOCTYPE html>
<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,900&display=swap');

        * {
            margin: 0px;
            padding: 0px;
            font-family: 'Roboto', sans-serif;
        }

        /* this contain the card and its box */
        .item {
            display: flex;
            display: inline-block;
            justify-content: space-around;
            width: 18rem;
            align-content: center;
            align-items: center;
            vertical-align: middle;
            border-radius: 4px 4px 8px 8px;
            /* box-shadow: 2px 2px 4px gray; */
            border: 2px inset darkgray;
            margin: 30px 40px 12px 25px;
            justify-content: center;
            height: 20rem;
            /* overflow-x: scroll; */
            scroll-behavior: smooth;
            
            cursor: pointer;
            /* background-color: red; */

        }

        #c_buttons {
            height: 21rem;
        }

        /* this is a hover style for each of car and its details */
        .item:hover {
            box-shadow: 4px 3px 6px gray;
            border: 2px solid gray;
            border: 0px;
        }

        /* this is a container for car which contain each car detailas */
        .container {
            width: 98%;
            align-self: center;
            margin: auto;
            padding-left: 2rem;


        }

        .imgcontain {
            background-color: orange;
            width: 100%;
            height: 15%;
            padding-top: 10px;
            border-bottom: 3px solid blueviolet;
            display: block;
            overflow-x: hidden;
            overflow-y: hidden;
            justify-content: center;
            text-align: center;
        }

        .meet {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: capitalize;


        }

        .textcontiner {
            /* background-color: deepskyblue; */
            /* color: white; */
            width: 100%;
            height: 85%;
            text-align: center;
            border-radius: 0px 0px 7px 7px;
            padding: 10px;
            background-color: aliceblue;


        }

        .textcontiner a {
            text-decoration: none;
        }


        /* this contain the detailas of card */

        .cardetails {

            text-align: justify;
            font-size: 1rem;
            font-weight: bold;
            /* color: white; */
            color: blueviolet;
            padding-left: 3px;
            padding-right: 3px;
            margin: 10px;
        }

        .desc {
            color: blue;
            font-weight: 900;
            text-transform: capitalize;
            margin-top: 15px;



        }

        .btns {
            margin-top: 25px;

        }

        .btns button {
            padding: 5px 10px;
            margin-left: 15px;
            cursor: pointer;
            border: none;
            border-radius: 3px;
            transition: background-color 0.3s ease;
            z-index: -10;
        }

        .btns button.accept {
            background-color: #5cb85c;
            color: black;
        }

        .btns button.decline {
            background-color: red;
            color: white;
        }

        .btns button:hover {
            background-color: paleturquoise;
        }

        #meeting {
            border-bottom: 15px solid rebeccapurple;
            width: 18rem;

        }
    </style>
</head>

<link rel="icon" type="../mage/x-icon" href="image/logo.png">

<body>
    <div class="container">






        <?php
        include('../signup/db_config.php');

        session_start();
        // this is for request for visit
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            // $meet_req = "select * from meet_reqwhere seller_email='$email'";
            $meet_req = "select * from meet_req";
            $meet_res = $conn->query($meet_req);
            if ($meet_res->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($meet_res)) {
                    $m_id = $row['meet_id'];
                    $buyer = $row['buyer_email'];
                    $meet_date = $row['meet_date'];
                    $remark = $row['remark'];
                    $status = $row['status'];
                    $seller = $row['seller_email'];
                    $seller = $row['seller_email'];

                    // for buyer data featching
                    $buy = "select * from user where email='$buyer'";
                    $buy_usr = $conn->query($buy);
                    if ($buy_usr->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($buy_usr)) {
                            $b_name = $row['first_name'];
                            $b_lname = $row['last_name'];
                            $b_phone = $row['phone'];



                            if ($seller == $email) {


                                if ($status == 1) {
                                    echo "
                        <!-- for accepted -->
        <div class='item' id='meeting'>
            <div class='imgcontain'>
                <P class='meet'> Meeting Information </P>
            </div>
            <div class='textcontiner'>
                <P class='cardetails'>You Have Meeting on </P>
                <P class='cardetails'> For selling car </P>
                <P class='cardetails'>Name: $b_name $b_lname </P>
                <P class='cardetails'>Contact: $b_phone </P>
                <P class='cardetails'>Email: $buyer </P>
                <P class='cardetails'>Date: $meet_date </P>
                <P class='desc'>$remark </P>

            </div>
        </div>

        ";
                                } elseif ($status == 0) {

                                } else {
                                    echo "
                 <div class='item' id='c_buttons'>
                    <div class='imgcontain'>
                        <P class='meet'> Meeting Request </P>
                    </div>
                    <div class='textcontiner'>
                        <P class='cardetails'> You Have Meeting Request </P>
                        <P class='cardetails'> For selling car </P>
                        <P class='cardetails'>Name: $b_name $b_lname </P>
                        <P class='cardetails'>Contact: $b_phone </P>
                        <P class='cardetails'>Email: $buyer </P>
                        <P class='cardetails'>date: $meet_date </P>
        
                        <P class='desc'> $remark </P>
        
                        <div class='btns'>
                            <a href='accept.php?id=$m_id'> <button class='accept' name='accept'>Accept</button> </a>
                            <a href='decline.php?id=$m_id'> <button class='decline' name='decline'>Decline</button> </a>
        
                        </div>
                    </div>
                </div>  ";


                                }




                            }
                            // for seller information
                            $sell = "select * from user where email='$seller'";
                            $sell_usr = $conn->query($sell);
                            if ($sell_usr->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($sell_usr)) {
                                    $s_name = $row['first_name'];
                                    $s_lname = $row['last_name'];
                                    $s_phone = $row['phone'];

                                    if ($buyer == $email) {


                                        if ($status == 1) {
                                            echo "
                        <div class='item' id='meeting'>
                        <div class='imgcontain'>
                            <P class='meet'> Meeting Information </P>
                        </div>
                        <div class='textcontiner'>
                            <P class='cardetails'>You Have Meeting  </P>
                            <P class='cardetails'>for buying car</P>
                            <P class='cardetails'>Name:  $s_name $s_lname </P>
                            <P class='cardetails'>Contact: $s_phone </P>
                            <P class='cardetails'>Email: $seller </P>
                            <P class='cardetails'>Date: $meet_date </P>
                            <P class='desc'>$remark </P>
            
                        </div>
                    </div>
               ";
                                        } elseif ($status == 0) {
                                            echo "
                        <div class='item'>
                        <div class='imgcontain'>
                            <P class='meet'> Meeting Request </P>
                        </div>
                        <div class='textcontiner'>
                            <P class='cardetails'> Your Meeting Request </P>
                            <P class='cardetails'>for buying car</P>
                            <P class='cardetails'>Name:  $s_name $s_lname </P>
                            <P class='cardetails'>Contact: $s_phone </P>
                            <P class='cardetails'>Email: $seller </P>
            
                            <P class='desc'> $remark </P>
                    
                            <P class='desc'> Is declined </P>
            
            
                            </div>
                        </div>
                    </div>
                        ";
                                        } else {
                                            echo "  <div class='item' id='meeting'>
                        <div class='imgcontain'>
                            <P class='meet'> Meeting Information </P>
                        </div>
                        <div class='textcontiner'>
                            <P class='cardetails'>No Meeting info </P>
                      
            
                        </div>
                    </div>";

                                        }
                                    }
                                }



                            }
                        }

                    }
                }
            }
        }

        ?>

    </div>



    <div style='text-align: center;'>
        <a href='../sellcars/sellerdsh.php'>
            <button style='font-size: 24px;'>Product <i class='fa fa-car'></i></button>
        </a>
    </div>

</body>

</html>