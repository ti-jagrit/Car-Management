<?php
    $id = "";
    if (isset($_GET["id"])) {
      $id = $_GET["id"];
      include('../signup/db_config.php');
      $sql = "DELETE FROM car_info WHERE car_id='$id'";

if ($conn->query($sql) === TRUE) {
    header('location:home_admin.php');
    echo " <script> alert ('car deleted sucessfully'); </script>";
} else {
    header('location:home_admin.php');
    echo " <script> alert ('failed to delete car'); </script>";
}
}
?>

