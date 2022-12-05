<?php 
session_start();
//$FlightID = $_POST['FlightID'];
?>

<?php 

function derivingAllFlights() {
    $con=mysqli_connect("localhost","student","ensf","471");
    $query="SELECT Flight_Number, Departure_Time FROM FLIGHT";

    $result = mysqli_query($con,$query);

    $derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<br>";
            echo "<p><b>FlightID:</b> ".$row[0]." <b>DepartureTime:</b> ".$row[1]."</p>";
        }
    }


    mysqli_close($con);
}


?>

<?php
echo "LOGIN PURCHASER SUCCESS";
derivingAllFlights();
if (isset( $_POST['FlightID'])) {
    echo "Flight: ".  $_POST['FlightID'];
}
?>


<html>
    <body>
        <div class="flight-chooser">
            <form class="login-form" method="POST">
                <label for="FlightNumber" class="form-label">FlightNumber:</label>
                <input type="text" id="FlightNumber" name="FlightNumber" placeholder="Enter the Flight Number">
                <input type="submit" value="Submit" class="form-button">
                <input type="reset" value="Reset" class="form-button">
            </form>

        </div>
    </body>
</html>