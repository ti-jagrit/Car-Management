<?php
   $servername="localhost";
   $username="root";
   $password="";
   $db_name="car_management";
   $conn =new mysqli($servername,$username,$password,$db_name);
   $conn= mysqli_connect($servername,$username, $password,$db_name);
   // check connection
   if(!$conn){
       die("connection failed: ".mysqli_connect_error());
   }
?>