<?php
include 'allinc/alltop.php';
?>

<style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,900&display=swap');

    * {
        margin: 0px;
        padding: 0px;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        display: flex;
        justify-self: center;
        padding: 5px;
        border: 2px solid gray;
        background-color: aliceblue;
        margin-left: 25%;
        margin-right: auto;
        width: 800px;
        display: flex;
        float: left;
        border-radius: 10px;
        overflow: hidden;
    }

    .content {
        text-align: center;
        width: 33%;
        background-color: cornsilk;
        border-left: 1px solid gray;
        color: darkorchid;
    }

    .car1 {
        width: 33%;
        background-color: azure;
        border-left: 1px solid gray;
        text-align: center;

    }

    .car2 {
        width: 33%;
        background-color: floralwhite;
        border-left: 1px solid gray;
        text-align: center;

    }

    .carimg {
        width: 95%;
        height: 150px;
        overflow: hidden;
        margin-top: 10px;
        box-shadow: 2px 2px 2px 3px gray;
        border-radius: 2rem;
        margin: 5px;

       
    }

    .carimg img {
        width: auto;
        height: 100%;
    }

    .title {
        width: 100%;
        background-color: darkblue;
        font-size: 1.5rem;       
         font-family: 'roboto', sans-serif;
        text-align: center;
        margin: auto;
        font-weight: bold;
        text-transform: uppercase;
        color: white;
        padding: 5px;

    }

    .topics {
        font-size: 1.5rem;
        vertical-align: middle;
        text-align: center;
        padding: 15px;
        margin: auto;
        font-weight: bold;
        border-bottom: 2px solid gainsboro;

    }

    .desc {
        height: 60px;
        font-size: 20px;
        vertical-align: middle;
        text-align: center;
        margin: auto;
        font-weight: bold;
        border-bottom: 2px solid gainsboro;


    }

    .photo p {
        border-bottom: none;
        margin-top: 30px;
    }

    .photo {
        padding-bottom: 4rem;
        border-bottom: 2px solid gainsboro;
    }

    .a {
        text-decoration: none;
    }

    .details {
        width: 90%;
        padding: 10px;
        font-size: 20px;
        border: none;
        border-radius: 10px;
        background-color: blueviolet;
        font-weight: bold;
        color: white;

    }

    .details span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .details span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .details:hover span {
        padding-right: 25px;
    }

    .details:hover span:after {
        opacity: 1;
        right: 0;
    }
.allbody{
    background:url('image/car2.jpg');
    background-repeat: no-repeat;
    background-size: 100%;
    background-blend-mode: darken;
}
.bodycontainer{
    width:70%;
    justify-content: center;
    text-align: justify;
    margin: auto;

}
.bodydiv{
    
    display: inline-block;
    margin: 30px auto;
    justify-content: center;
    padding: 10px;
    
}
.bodyimg{
    margin: auto;
    weight: 25rem;
    display: block;
    display: flex;
    justify-content: center;
    

}
.bodyimg img{
    height: 100%;
    margin: auto;
    box-shadow:   2px 2px 4px rgba(214, 208, 208, 0.4),
    -2px -2px 4px rgba(255, 0, 0, 0.4);
    border: 1px outset gainsboro;

   
}
.bodytext{
    background-color:#cff8fa;
    color: darkorchid;
    font-weight: bold;
    font-size: 1.2rem;
    padding: 10px;
    display: block;
    justify-content: center;
    width: 95%;
    border-radius: 20px;
}
.bodytext b{
    padding: 10px;
    margin-left: 5rem;
    margin-bottom: 5px;
    text-align: center;
    font-size: 2rem;
    color: darkblue;
    text-decoration: underline;
    
} 

@media (max-width: 768px) {
    .container {
        flex-direction: column;
        width: 90%;
        margin-left: 5%;
        margin-right: 5%;
    }

    .content,
    .car1,
    .car2 {
        width: 100%;
        border-left: none;
        margin: 0;
        padding: 10px;
        box-sizing: border-box;
    }

    .title,
    .topics,
    .desc,
    .bodytext b {
        font-size: 1.2rem;
    }

    .bodycontainer {
        width: 100%;
    }

    .bodydiv {
        margin: 20px auto;
        padding: 5px;
    }

    .bodyimg img {
        width: 100%;
        height: auto;
    }

    .bodytext {
        font-size: 1rem;
        padding: 5px;
    }
}
</style>

<!-- this is for slide show in hero section -->
<!-- <link rel="stylesheet" href="css/cmpcar.css"> -->
<div class="herocontain">

    <div class="w3-content w3-section" id="slidcontain" style="max-width:1200px">
        <img class="mySlides" src="image/car1.jpeg" style="width:100%">
        <img class="mySlides" src="image/car11.jpg" style="width:100%">
        <img class="mySlides" src="image/car111.jpg" style="width:100%">
    </div>


</div>


</div>
<form method="POST" name="cmp_car">
    <!-- this is for compar section -->
    <div class="comparecontain">
        <p> Compare Cars </p>
        <div class="comp">
            <select name="car1" id="" class="cmpcar">
                <?php
                include('allinc/alltop.php');
                include('../signup/db_config.php');
                $query = "select *from car_info";
                $result = $conn->query($query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['car_id'];
                    $id = $row['car_id'];
                    $name = $row['brand'];
                    $model = $row['model'];
                    echo "
                <option value='$id'>$name $model</option>";
                }

                ?>
            </select>
            <p> VS </p>
            <select name="car2" id="" class="cmpcar">
                <?php

                include('../signup/db_config.php');
                $query = "select *from car_info";
                $result = $conn->query($query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['car_id'];
                    $name = $row['brand'];
                    $model = $row['model'];
                    echo "
                <option value='$id'>$name  $model</option>";
                }

                ?>
            </select>
        </div>
        <input type="submit" id="cmp_btn" value="Compare" name="cmpcar" class="cmpbtn">
    </div>

</form>

<?php
if (isset($_POST['cmpcar'])) {
    include "signup/db_config.php";
    $car1 = $_POST['car1'];
    $car2 = $_POST['car2'];
    $query = "SELECT * FROM car_info WHERE car_id =$car1;";
    $result = $conn->query($query);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['car_id'];
        $brand = $row['brand'];
        $model = $row['model'];
        $price = $row['price'];
        $city = $row['city'];
        $fuel = $row['fuel'];
        $year = $row['year'];
        $cc = $row['cc'];
        $mileage = $row['mileage'];
        $distance = $row['distance'];
        $car_photo = $row['car_photo'];
        $car_photo = $row['car_photo'];
        $Seller = $row['phone'];
        echo "
        <div class='container'>
            <div class='content'>
                <P class='title'> Result</P>

                <div class='photo'>
                    <P class='topics' id='photo'> Photo</P>
                </div>
                <P class='topics'>Brand </P>
                <P class='topics'> model</P>
                <P class='topics'> Make Year</P>
                <P class='topics'> Fuel Type</P>
                <P class='topics'> CC</P>
                <P class='topics'> Mileage</P>
                <P class='topics'> City</P>
                <P class='topics'> Price</P>
            

            </div>
            <div class='car1'>
                <P class='title'>Car 1</P>
                <div class='carimg'>

                    <img src='car info/car_photo/$car_photo' alt='car1' srcset=''>
                </div>
                <P class='topics'>
                     $brand                </P>
                <P class='topics'> $model</P>
                <P class='topics'> $year </P>
                <P class='topics'> $fuel</P>
                <P class='topics'> $cc</P>
                <P class='topics'> $mileage</P>
                <P class='topics'> $city</P>
                <P class='topics'> $price</P>
                <a href='product/desc.php?id=$id'> <button class='details'> <span>View Details </span></button> </a>
            </div>";




    }
}


if (isset($_POST['cmpcar'])) {
    include 'signup/db_config.php';
    $car1 = $_POST['car1'];
    $car2 = $_POST['car2'];
    $query = "SELECT * FROM car_info WHERE car_id =$car2;";
    $result = $conn->query($query);
    while ($row = mysqli_fetch_assoc($result)) {
        $id2 = $row['car_id'];
        $brand = $row['brand'];
        $model = $row['model'];
        $price = $row['price'];
        $city = $row['city'];
        $fuel = $row['fuel'];
        $year = $row['year'];
        $cphoto = $row['car_photo'];
        $cc = $row['cc'];
        $mileage = $row['mileage'];
        $distance = $row['distance'];
        $Seller = $row['phone'];
        echo "
            <div class='car2'>
                <P class='title'> car 2</P>
                <div class='carimg'>


                    <img src='car info/car_photo/$cphoto' alt='car2pic' srcset=''>
                </div>
                <P class='topics'>$brand </P>
                <P class='topics'> $model</P>
                <P class='topics'> $year</P>
                <P class='topics'> $fuel</P>
                <P class='topics'> $cc</P>
                <P class='topics'> $mileage</P>
                <P class='topics'> $city</P>
                <P class='topics'> $price</P>
              <a href='product/desc.php?id=$id2' class='a'> <button class='details'> <span>View Details </span></button> </a>
            </div>
        </div>";


    }
}

?>

</div>
<div class="allbody">
<!-- this is a body section of home page in below compare car section -->
<div class="bodycontainer">

    <div class="bodydiv" id="bdiv1">
        <div class="bodyimg"> <img src="image/thar.jpg" alt="car_photo" srcset=""> </div>
        <div class="bodytext"> <b> Mahindra Thar EV Concept Breaks Cover </b>
            <p>The Mahindra Thar EV has made its global concept debut, officially called the Thar.e at the carmaker’s Independence Day 2023 event in South Africa. Importantly, it breaks cover as a five-door version, which gives us the first insight to its ICE version, which is scheduled to go on sale early next year. </div>
    </div>
    <div class="bodydiv" id="bdiv2">
        <div class="bodyimg"> <img src="image/lambo.jpg" alt="car_photo" srcset=""> </div>
        <div class="bodytext"> <b> The Lamborghini Lanzador Concept Gives Us A Sneak Peak</b>
            <p> Lamborghini has unwrapped its electric car concept called the Lamborghini Lanzador. The four-seater electric crossover SUV concept previews the carmaker's first fully electric model, with its design drawing a resemblance to other models from the brand's portfolio. </p>
        </div>
        
    </div>
</div>

</div>

<?php
include 'allinc/allbtm.php';
?>



<script>
    // this is for responsive ness
    const btn = document.querySelector('.iconbtn');
    const bars = document.querySelector('.iconbtn img');
    const dropMenu = document.querySelector('.dropdownmenu');

    btn.addEventListener("click", () => {
        dropMenu.classList.toggle('open');


    })
    var myIndex = 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 3000); // Change image every 2 seconds
    }

    // for profile drop down

    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.userlogo')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

</script>
</body>

</html>