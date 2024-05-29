<div class="cmp_result">
    <table class="cmp_res_tab">
        <tr>
            <td> Car</td>
            <td> Price </td>
            <td> City </td>
            <td> Fuel Type </td>
            <td> Mileage </td>
            <td> Distance </td>
            <td> Year </td>
            <td> CC </td>
            <td> Seller Mail </td>


        </tr>
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
                $Seller = $row['phone'];
                echo"
                <tr>
        <td> $brand. .$model </td>
        <td> $price </td>
        <td> $city </td>
        <td> $fuel Type </td>
        <td> $mileage </td>
        <td> $distance </td>
        <td> $year </td>
        <td> $cc </td>
        <td> $Seller</td>     
        

    </tr>
                ";
            }
        }

        ?>
        <?php
        if (isset($_POST['cmpcar'])) {
            include "signup/db_config.php";
            $car1 = $_POST['car1'];
            $car2 = $_POST['car2'];
            $query = "SELECT * FROM car_info WHERE car_id =$car2;";
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
                $Seller = $row['phone'];
                echo"
                <tr>
        <td> $brand. .$model </td>
        <td> $price </td>
        <td> $city </td>
        <td> $fuel Type </td>
        <td> $mileage </td>
        <td> $distance </td>
        <td> $year </td>
        <td> $cc </td>
        <td> $Seller</td>     
        

    </tr>
                ";
            }
        }

        ?>



    </table>
</div>

