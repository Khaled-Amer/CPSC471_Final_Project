<?php
session_start();
$username = $_POST['username'];
$flight = $_POST['flight'];


$con=mysqli_connect("localhost","student","ensf","471");

$query="DELETE FROM WORKS_FOR WHERE Username = '" . $username . "' AND Airline_Name = '" . $flight . "'";

$result = mysqli_query($con,$query);
echo $username;
echo " if now fired from ";
echo $flight;

?>