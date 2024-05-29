<?php
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    include('../signup/db_config.php');

    // Delete car_info first
    $userResult = $conn->query("SELECT email FROM user WHERE user_id='$id'");
    if ($userResult->num_rows > 0) {
        $row = $userResult->fetch_assoc();
        $email = $row['email'];

        $pro = "DELETE FROM car_info WHERE user_email='$email'";
         $pro2="DELETE FROM user WHERE email='$email'";
        if ((!$conn->query($pro)) && (!$conn->query($pro2))) {
            echo "<script> alert('Failed to delete accopunt'); </script>";
            header('location: home_admin.php');
            exit;
        }
        elseif(($conn->query($pro)) && ($conn->query($pro2))) {
                    echo '<script>
            alert("Account Deleted Sucessfullt");
            window.location.href = "home_admin.php";
          </script>';
    }

        }
   
} else {
    echo "<script> alert('Invalid request'); </script>";
    header('location: home_admin.php');
    exit;
}



        
?>

