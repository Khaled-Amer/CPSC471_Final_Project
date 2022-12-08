<?php
session_start();
$username = $_POST['username'];
$flight = $_POST['flight'];
$size = $_POST['size'];


$con=mysqli_connect("localhost","student","ensf","471");

$query="INSERT INTO GATE VALUES('" . $username . "', '" . $flight . "', '" . $size . "')";

$result = mysqli_query($con,$query);
echo "Gate ";
echo $username;
echo " Added Staff to ";
echo $flight;

?>