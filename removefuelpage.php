<?php
session_start();
$username = $_POST['username'];


$con=mysqli_connect("localhost","student","ensf","471");

$query="DELETE FROM FUEL WHERE Type = '" . $username . "'";

$result = mysqli_query($con,$query);
echo $username;
echo " is now deleted ";

?>