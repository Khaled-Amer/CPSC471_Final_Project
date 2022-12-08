<?php
session_start();
$flight = $_POST['flight'];



$con=mysqli_connect("localhost","student","ensf","471");

$query="SELECT Flight_Number, Arrival_Time, Departure_Time, Airline_Name FROM FLIGHT WHERE Gate_Number = '" . $flight . "'";

$result = mysqli_query($con,$query);
$derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<p><b>Flight Number:</b> ".$row[0]."<b>Airline:</b> ".$row[3]." <b>Arrival Time:</b> ".$row[1]." <b>Departure Time:</b> ".$row[2]."</p>";
        }
    }

?>