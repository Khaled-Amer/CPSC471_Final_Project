<?php
session_start();
$flight = $_POST['flight'];


$con=mysqli_connect("localhost","student","ensf","471");



$query="SELECT COUNT(Ticket_Number)
FROM TICKET
WHERE Flight_Number = '" . $flight . "'";

$result = mysqli_query($con,$query);

$derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<p><b>Tickets Sold:</b> ".$row[0]."</p>";
        }
    }

?>