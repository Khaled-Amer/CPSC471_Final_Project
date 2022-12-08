<?php

$username = $_POST['username'];



$con=mysqli_connect("localhost","student","ensf","471");

$query="DELETE FROM Gate WHERE Gate_Number = '".$username."'";

$result = mysqli_query($con,$query);
echo $username;
echo " Removed ";

?>