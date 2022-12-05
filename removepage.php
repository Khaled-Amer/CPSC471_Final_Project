<?php
session_start();
$flight = $_POST['flight'];


$con=mysqli_connect("localhost","student","ensf","471");

$query="DELETE FROM FLIGHT WHERE Flight_Number = '" . $flight . "'";

$result = mysqli_query($con,$query);
echo "Flight ";
echo $flight;
echo " removed";

?>