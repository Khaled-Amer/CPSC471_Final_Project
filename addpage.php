<?php
session_start();
$flight = $_POST['flight'];
$DT = $_POST['DT'];
$AT = $_POST['AT'];
$airline = $_POST['airline'];
$PS = $_POST['PS'];
$AR = $_POST['AR'];
$DR = $_POST['DR'];
$GN = $_POST['GN'];
echo $flight;
echo "\r";
echo $DT;
echo $AT;
echo $airline;

$con=mysqli_connect("localhost","student","ensf","471");

$query="INSERT INTO FLIGHT VALUES  ('" . $flight . "','" . $DT . "', '" . $AT . "', '" . $airline . "', '" . $PS . "', '" . $AR . "', '" . $DR . "', '" . $GN . "')";

$result = mysqli_query($con,$query);


?>