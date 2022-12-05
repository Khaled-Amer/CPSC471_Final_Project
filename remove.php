<?php
function derivingAllFlights() {
    $con=mysqli_connect("localhost","student","ensf","471");
    $query="SELECT Flight_Number, Departure_Time FROM FLIGHT";

    $result = mysqli_query($con,$query);

    $derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<p><b>FlightID:</b> ".$row[0]." <b>DepartureTime:</b> ".$row[1]."</p>";
        }
    }


    mysqli_close($con);
}

derivingAllFlights();
?>
</html>
<body>
<form action="removepage.php" method="post">
  Flight Number:  <input type="number" name="flight"><br>
  <input type="submit">
</form>

</body>
</html>

