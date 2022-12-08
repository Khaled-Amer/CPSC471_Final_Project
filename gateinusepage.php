<?php
session_start();
$flight = $_POST['flight'];



$con=mysqli_connect("localhost","student","ensf","471");

$query="

SELECT Flight_Number, Airline_Name, Arrival_Time, Departure_Time, Airline_Name  FROM FLIGHT WHERE Gate_Number = '" . $flight . "'  AND Arrival_Time <= CAST(UTC_TIMESTAMP() as time) AND Departure_Time >= CAST(UTC_TIMESTAMP() as time) 
";

$result = mysqli_query($con,$query);
$derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "The time is " . gmdate("h:i:sa") . " UTC <br>";
            echo "Today is " . date("Y/m/d") . "<br>";
            echo "<p><b>Flight Number:</b> ".$row[0]."<b>Airline:</b> ".$row[1]." <b>Arrival Time:</b> ".$row[2]." <b>Departure Time:</b> ".$row[3]." </p>";;
        }
    } else {
        echo "Gate is not in use";
    }

?>