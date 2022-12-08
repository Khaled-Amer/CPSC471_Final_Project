<?php
session_start();
$flight = $_POST['flight'];


$con=mysqli_connect("localhost","student","ensf","471");

$query="DELETE FROM PREPARE WHERE Gate_Number = '" . $flight . "'";

$result = mysqli_query($con,$query);
echo "Gate ";
echo $flight;
echo " Prepared";

?>