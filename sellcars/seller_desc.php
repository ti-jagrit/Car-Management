<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Change</title>
    <link rel="stylesheet" href="../css/details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    /* html, body{
    font-family: 'Roboto', sans-serif;
}
*/
    img {
        width: 100%;
        display: block;
    }

    .main-wrapper {
        min-height: 100vh;
        /* background-color: lightslategray;     */
        background-color: deepskyblue;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        max-width: 100%;
        padding: 5%;
        margin: 0 auto;
    }

    .product-div {
        margin: 1rem 0;
        padding: 2rem 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        background-color: lavenderblush;
        border-radius: 3px;
        column-gap: 10px;
    }

    .product-div-left {
        padding: 20px;
    }

    .product-div-right {
        padding: 20px;
    }

    .img-container img {
        width: 500px;
        height: 300px;
        margin: 0 auto;
    }

    .hover-container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        margin-top: 32px;
        width: 500px;
        margin: 0 auto;

    }

    .hover-container div {
        border: 2px solid rgba(252, 160, 175, 0.7);
        padding: 10%;
        border-radius: 5px;
        margin: 2px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 200px;
        height: 100px;
    }

    .hover-container img {
        width: 100px;
        margin: 0 auto;
    }

    .active {
        border-color: rgba(246, 9, 9, 0.977) !important;
    }

    /*for sub image using hover and js to show on main pic*/
    .hover-container div img {
        width: 150px;
        cursor: pointer;
    }

    .product-div-right span {
        display: block;
    }

    .product-name {
        font-size: 26px;
        margin-bottom: 22px;
        font-weight: 700;
        letter-spacing: 1px;
        opacity: 0.9;
    }

    .product-price {
        font-weight: 700;
        font-size: 24px;
        opacity: 0.9;
        font-weight: 500;
    }

    .product-rating {
        display: flex;
        align-items: center;
        margin-top: 12px;
    }

    .product-rating span {
        margin-right: 6px;
    }

    .product-description {
        font-weight: 18px;
        line-height: 1.6;
        font-weight: 300;
        opacity: 0.9;
        margin-top: 22px;
    }

    .btn-groups {
        margin-top: 22px;
    }

    .btn-groups button {
        display: inline-block;
        font-size: 16px;
        font-family: inherit;
        text-transform: uppercase;
        padding: 15px 16px;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-groups button .fas {
        margin-right: 8px;
    }

    .add-cart-btn {
        background-color: #FF9F00;
        border: 2px solid #FF9F00;
        margin-right: 8px;
    }

    .add-cart-btn:hover {
        background-color: #fff;
        color: #FF9F00;
    }

    .buy-now-btn {
        background-color: #000;
        border: 2px solid #000;
    }

    .buy-now-btn:hover {
        background-color: #fff;
        color: #000;
    }

    @media screen and (max-width: 992px) {
        .product-div {
            grid-template-columns: 100%;
        }

        .product-div-right {
            text-align: center;
        }

        .product-rating {
            justify-content: center;
        }

        .product-description {
            max-width: 400px;
            margin-right: auto;
            margin-left: auto;
        }
    }

    @media screen and (max-width: 400px) {
        .btn-groups button {
            width: 100%;
            margin-bottom: 10px;
        }
    }

    .btns button {
        margin: 10px;
        padding: 8px;
        border: none;
        background-color: darkmagenta;
        color: white;
        border-radius: 5px;
    }

    .btns a {
        text-decoration: none;

    }

    .btns button:hover {
        background-color: darkblue;
        box-shadow: 2px 2px 2px gray;
    }
</style>

<body>


    <div class="main-wrapper">

        <div class="container">

            <div class="product-div">
                <div class="product-div-left">
                    <?php


                    $id = "";
                    if (isset($_GET["id"])) {
                        $id = $_GET["id"];

                        include('../signup/db_config.php');
                        $sql = "select * FROM car_info WHERE car_id='$id'";
                        $result = $conn->query($sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['car_id'];
                            $brand = $row['brand'];
                            $model = $row['model'];
                            $price = $row['price'];
                            $city = $row['city'];
                            $fuel = $row['fuel'];
                            $mileage = $row['mileage'];
                            $phone = $row['phone'];
                            $desc = $row['description'];
                            $photo = $row['car_photo'];
                            $photo1 = $row['car_photo1'];
                            $photo2 = $row['car_photo2'];
                            $upload_date=$row['date'];
                            $year=$row['year'];


                            echo "
                          
                          <div class='img-container'>
                          <img src='../car info/car_photo/$photo' alt='Car'>
                          </div>
                          <div class='hover-container'>
                                                  <div><img src='../car info/car_photo/$photo'></div>
                                                  <div><img src='../car info/car_photo/$photo1'></div>
                                                  <div><img src='../car info/car_photo/$photo2'></div>
                                               
                                                  
                                              </div>
                    
                </div>
                <div class='product-div-right'>
                    <span class='product-name'>$brand $model </span>
                    
                    <span class='product-price'>Rs.$price</span>
                    <p class='product-description'> Mileage: $mileage </p>
                    <p class='product-description'> <i class='fas fa-gas-pump' style='color:red'></i> $fuel </p>
                    <p class='product-description'> <i class='fas fa-map-marker' style='color:red'></i> $city </p>
                    <p class='product-description'> <i class='fas fa-phone-volume' style='color:red'></i> $phone </p> 
                    <p class='product-description'> <b> M.F. Year:</b> $year </p>
                    <p class='product-description'> <h2>Description:<br></h2> $desc </p>
                    <p class='product-description'> <h2>Upload on:<br></h2> $upload_date </p>
                   

                     


                

            </div>

        </div>
        <div class='btns' style='text-align: center;'>
            <a href='sellerdsh.php'>
                <button style='font-size: 24px;'>Dashboard <i class='fa fa-car'></i></button>
            </a>
            <a href='edit_product.php?id=$id'> <button style='font-size: 24px;'> Edit Product </button> </a>
            <a href='delete_product.php?id=$id'> <button style='font-size: 24px;'> Delete Product </button> </a>";
        }
    } 
            ?>
        </div>
    </div>

    </div>

    <?php
    include '../allinc/allbtmdesc.php';
    ?>

<script>
    // Select all the hover images and the main image container
    const allHoverImages = document.querySelectorAll('.hover-container div img');
    const imgContainer = document.querySelector('.img-container img');

    // When the page is loaded, set the first hover image as active
    window.addEventListener('DOMContentLoaded', () => {
        allHoverImages[0].parentElement.classList.add('active');
    });

    // Add event listeners to each hover image
    allHoverImages.forEach((image) => {
        image.addEventListener('mouseover', () => {
            // Update the src of the main image to the hovered image's src
            imgContainer.src = image.src;
            
            // Reset active class from all hover images and add to the current one
            resetActiveImg();
            image.parentElement.classList.add('active');
        });
    });

    // Function to remove active class from all hover images
    function resetActiveImg() {
        allHoverImages.forEach((img) => {
            img.parentElement.classList.remove('active');
        });
    }
</script>

     
   
</body>

</html>
