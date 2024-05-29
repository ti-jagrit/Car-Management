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
    <script src="js/index.js"></script>
</head>

<link rel="icon" type="image/x-icon" href="image/logo.png">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/hero.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/drop.css">
<style>
    /* .bcontainer{
    background-color: antiquewhite;
    width: 100%;
    height: auto;
}
.bdiv{
    width:100%;
    display: flex;
    float: left;
    padding: 15px;
    margin: 15px;
    justify-content: center;
    border-bottom: 3px solid gray;
    padding-right: 2rem;
    
}
.bimg1 {
    border-right: 2px solid gray;
     width: 40%;
     
}
.btext{
    text-align: center;
    padding: 7px;
}
.btext1 p ,.btext p{
    text-align: justify;
    width: 100%;
    font-size: 1rem;
    color: black;
}
.btext1 b{
    text-align: center;
    font-size: 1.5rem;
    color: darkblue;
}
.btext b{
    text-align: center;
    font-size: 1.5rem;
    color: darkblue;
}
.bimg {
    border-left: 2px solid gray;
    width: 40%;
}
.btext:hover{
    background-color:  rgb(208, 235, 235);

}
.bimg1:hover{
    transform: scale(1.1);
    
}
.bimg:hover{
    transform: scale(1.1);
    
} */
<style>
    .bcontainer{
    background-color: antiquewhite;
    width: 100%;
    height: auto;
    margin: 0 auto;
}
.bdiv{
    width:100%;
    display: flex;
    float: left;
    padding: 20px;
    margin: 15px;
    justify-content: center;
    border-bottom: 5px solid gray;
    padding-right: 1rem;
    
}
.bimg1 {
    /* border-right: 2px solid gray; */
     width: 40%;
     
     
}
.btext{
    text-align: center;
    padding: 7px;
}
.btext1 p ,.btext p{
    text-align: justify;
    width: 100%;
    font-size: 1rem;
    color: black;
}
.btext1 b{
    text-align: center;
    font-size: 1.5rem;
    color: darkblue;
}
.btext b{
    text-align: center;
    font-size: 1.5rem;
    color: darkblue;
}
.bimg {
    /* border-left: 2px solid gray; */
    width: 60%;

    
}
.btext:hover{
    background-color:  rgb(208, 235, 235);

}
.bimg1:hover{
    transform: scale(1.1) translatex(-10px);
    
}
.bimg:hover{
    transform: scale(1.1) ;
    
}
@media (max-width: 768px){
    .bdiv{
        flex-direction: column;
    }
    .bimg,
    .bimg1{
        width: 100%;
        border: none;
    }
}

</style>

</style>

<body>
    <div class="header">

        <nav class="navbar">
            <a href="index.php"> <img src="image/logo.png" alt="Car Management" class="logo"> </a>
            <div class="navitem">
                <ul class="navlist">
                    <li><a href="home.php"> Home </a></li>
                    <li><a href=""> Product </a></li>
                    <li><a href=""> Sell Car </a></li>
                </ul>
            </div>
            <!-- <a href="signup.html"> <img src="image/userlogo.png" alt="user" srcset="" class="userlogo"></a> -->
            <div class="iconbtn"> <img src="image/menu-icon.png" alt="icon"></div>
            <!-- for profile dropdown -->
            <div id="dropdown">
                <button onclick="myFunction()" class="userlogo">
                    <img src="image\userlogo.png" alt="user" srcset="" class="userlogo">
                </button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="signup\login2.php"> Login </a>
                    <a href="signup\signup2.html"> Signup </a>

                </div>
            </div>

        </nav>
        <!-- this is for the responsive menu -->
        <div class="dropdown">
            <div class="dropdownmenu" id="dropmenu">
                <ul>
                    <li><a href=""> Home </a></li>
                    <li><a href=""> Product </a></li>
                    <li><a href=""> Sell Car </a></li>
                    <li><a href=""> Log In</a></li>
                </ul>
            </div>
        </div>
    </div>





    <!-- this div is for body of the home page -->
    <div class="pagebody">
        <!-- this is for slide show in hero section -->

        <div class="herocontain">

            <div class="w3-content w3-section" id="slidcontain" style="max-width:1200px">
                <img class="mySlides" src="image/car1.jpeg" style="width:100%">
                <img class="mySlides" src="image/car11.jpg" style="width:100%">
                <img class="mySlides" src="image/car111.jpg" style="width:100%">
            </div>


        </div>


    </div>
    <!-- this is for compar section -->
    <!-- <div class="comparecontain">
        <p> Compare Cars </p>
        <div class="comp">

            <select name="cars" id="" class="cmpcar">
                <option value="Car 1"> Swift</option>
                <option value="Car 2"> Creata</option>
                <option value="Car 3"> I20</option>
                <option value="Car 3"> I10</option>
            </select>
            <p> VS </p>
            <select name="cars" id="" class="cmpcar">
                <option value="Car 1"> Swift</option>
                <option value="Car 2"> Creata</option>
                <option value="Car 3"> I20</option>
                <option value="Car 3"> I10</option>
            </select>
        </div>
        <input type="button" value="Compare" class="cmpbtn">
    </div> -->

    <!-- this is a body section of home page in below compare car section -->
    <div class="bcontainer">

        <div class="bdiv">
            <div class="bimg1"> <img src="image/jimmy.jpg" alt="car_photo" srcset=""> </div>
            <div class="btext">

                <p>
                <h2 style="color: black;">Maruti Jimny Car Latest Update</h2>
                </p>
                <p><b>Latest Update:</b> The Maruti Jimny has close to 23,000 pending orders.</p>

                <p><b>Price: </b>The Jimny is priced between Rs 45.00 lakh and Rs 50.00 lakh (ex-showroom).</p>

                <p><b>Variants: </b>Maruti offers the lifestyle off-roader in two broad variants: Zeta and Alpha.</p>

                <p><b>Colours:</b> You can buy it in two dual-tone options and five monotone shades: Kinetic Yellow with
                    Bluish
                    Black roof, Sizzling Red with Bluish Black roof, Sizzling Red, Granite Gray, Nexa Blue, Bluish Black
                    and
                    Pearl Arctic White.</p>

                <p><b>Seating Capacity:</b> Jimny has the capacity to seat four passengers.</p>
                <p id="dots"></p>
                <div id="more" style="display: none;">
                    <p><b>Ground Clearance:</b> The Maruti off-roader has a ground clearance of 210mm.</p>

                    <p><b>Boot Space:</b> Jimny comes with a boot space of 208 litres, which can be increased to 332
                        litres by
                        tumbling down the rear seats.</p>

                    <p> <b> Engine and Transmission:</b> Jimny is powered by a 1.5-litre petrol engine that churns out
                        105PS and
                        134Nm. This unit is paired with either a 5-speed manual or a 4-speed automatic and it comes with
                        a
                        4-wheel drivetrain (4WD) as standard. The claimed fuel efficiency figures are detailed below:

                        Petrol MT: 16.94kmpl

                        Petrol AT: 16.39kmpl</p>

                    <p><b>Features:</b> Maruti has equipped the Jimny with a 9-inch touchscreen infotainment system
                        (from the new
                        Baleno and Brezza) with wireless Android Auto and Apple CarPlay, cruise control, and automatic
                        climate control.</p>

                    <p><b>Safety:</b> In terms of passenger safety, it gets six airbags, ABS with EBD, electronic
                        stability
                        program (ESP), hill-hold assist and a rearview camera.</p>

                    <p><b> Rivals:</b> The Maruti Jimny competes with the Mahindra Thar and the Force Gurkha.</p>
                </div>
                <button onclick="myFunctionCar()" id="myBtn"
                    style="margin-top: 10px; font-size: smaller; border: 1px solid #3498db; background-color: #3498db; color: white; padding: 5px 10px; border-radius: 3px;">
                    Read more
                </button>
            </div>
        </div>
    </div>



    <div class="bdiv">
        <div class="bimg"> <img src="image/creta.jpg" alt="car_photo" srcset=""> </div>

        <div class="btext">
            <p>
            <h2 style="color: black;">Hyundai Creta Car Latest Update</h2>
            </p>


            <p><b>Latest Update:The Hyundai Creta gets an “Adventure” edition with cosmetic changes inside-out.</b>

            <p><b>Price:</b> Prices for the Creta range from NRs 46 lakh to Rs 65 lakh (ex-showroom Nepal).</p>
          

                <p><b>Variants: </b>It can be had in seven broad variants: E, EX, S, S+, SX Executive, SX and SX(O). The
                    Knight
                    Edition is only available on the S+ and S(O) trims, and the new newly launched “Adventure” edition
                    is
                    based on compact SUV’s SX and SX(O) variants.</p>

                <p><b>Colours:</b> The Hyundai Creta is being offered in six monotone and one dual-tone colour options:
                    Polar
                    white, Denim blue, Phantom black, Titan grey, Typhoon silver, Red mulberry and Polar white with
                    Phantom
                    black roof. A new Ranger Khaki paint option has also been introduced with the Creta’s “Adventure”
                    edition.</p>
                    <p id="dotss"></p>
            <div id="more2" style="display: none;">
                <p><b>Seating Capacity:</b> It can seat up to five people.</p>

                <p><b>Engine and Transmission:</b> The Hyundai Creta comes with two engine options: a 1.5-litre
                    naturally
                    aspirated petrol (115PS/144Nm) and a 1.5-litre diesel (116PS/250Nm). Both units are mated with a
                    6-speed
                    manual transmission as standard. For automatic options, the petrol unit gets a CVT gearbox and the
                    diesel one comes with a 6-speed automatic transmission.</p>

                <p><b>Features:</b> Hyundai’s compact SUV is equipped with a semi-digital instrument cluster and a
                    10.25-inch
                    touchscreen infotainment system with connected car tech. It also gets a panoramic sunroof, wireless
                    phone charging, an 8-way power-adjustable driver seat, and ventilated front seats. With the
                    Adventure
                    edition, the Creta also gets a dual dash cam setup.</p>

                <p><b> Safety:</b> It gets six airbags, ABS with EBD, electronic stability control (ESC), vehicle
                    stability
                    management (VSM), hill-start assist control (HAC), all wheel disc brakes and ISOFIX child-seat
                    anchors
                    as standard. The compact SUV also comes with a tyre pressure monitoring system (TPMS) and a rear
                    parking
                    camera.</p>

                <p><b h3>Rivals:</b h3> The Hyundai Creta goes up against the Kia Seltos, Toyota Hyryder, Maruti Grand
                    Vitara,
                    Volkswagen Taigun, Skoda Kushaq, MG Astor, Honda Elevate and Citroen C3 Aircross. Its top variants
                    also
                    take on the Tata Harrier and MG Hector. The Mahindra Scorpio Classic can also be considered a rugged
                    alternative. </p>
            </div>
            <button onclick="myFunction1()" id="myBtn2"
                style="margin-top: 10px; font-size: smaller; border: 1px solid #3498db; background-color: #3498db; color: white; padding: 5px 10px; border-radius: 3px;">
                Read more
            </button>
        </div>
    </div>
    </div>
    

    <!-- this is a footer section in code -->
    <div class="footer">
        <!-- this contain whole footer section -->
        <footer class="footercontainer">
            <div class="footlogo">
                <img src="image/logo.png" alt="logo">

            </div>
            <div class="footmenu">
                <ul>
                    <li><a href=""> Home </a></li>
                    <li><a href=""> Product </a></li>
                    <li><a href=""> Sell Car </a></li>
                    <li><a href=""> Log In</a></li>
                </ul>
            </div>
            <div class="aboutus">
                <h2> About Us</h2>
        
                <h3>Affordable Prices With Quality Cars</h3>
                We offer wide range of quality tested certified second hand used cars from all brands in Kathmandu.
                We are a multi-brand used car dealer providing sales & service under one single umbrella. We have a
                highly trained staff who are professional and customer oriented.
            </div>
        </footer>
        <div class="footerbottom">
            <p>Copyright &copy; All Right Reserved to Car Management </p>
        </div>

    </div>

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
window.onclick = function(event) {
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

    <!-- JavaScript for Read more button -->
    <script>
        function myFunctionCar() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");
            //for another car seemore
            // var dotss = document.getElementById("dotss");
            // var moreTextCar2 = document.getElementById("more2");
            // var btnTextCar2 = document.getElementById("myBtn2");


            if (dots.style.display === "" || dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "block";
            }
        }

    </script>
    <script>
        function myFunction1() {
            var dotss = document.getElementById("dotss");
            var moreTextCar2 = document.getElementById("more2");
            var btnTextCar2 = document.getElementById("myBtn2");
            if (dotss.style.display === "" || dotss.style.display === "none") {
                dotss.style.display = "inline";
                btnTextCar2.innerHTML = "Read more";
                moreTextCar2.style.display = "none";
            } else {
                dotss.style.display = "none";
                btnTextCar2.innerHTML = "Read less";
                moreTextCar2.style.display = "block";
            }
        }
    </script>

</body>

</html>