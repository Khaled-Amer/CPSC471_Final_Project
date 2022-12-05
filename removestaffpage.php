<?php

$username = $_POST['username'];
$flight = $_POST['flight'];


$con=mysqli_connect("localhost","student","ensf","471");

$query="DELETE FROM OPERATES WHERE Username = '".$username."' AND Plane_Serial = '".$flight."'";

$result = mysqli_query($con,$query);
echo $username;
echo " Removed From Flight ";
echo $flight;

?>