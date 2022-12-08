<?php
session_start();
$username = $_POST['username'];
$flight = $_POST['flight'];


$con=mysqli_connect("localhost","student","ensf","471");

$query="INSERT INTO WORKS_FOR VALUES('" . $username . "', '" . $flight . "')";

$result = mysqli_query($con,$query);
echo "Gate ";
echo $username;
echo " Added Staff to ";
echo $flight;

?>