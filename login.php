<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['username'] = $username;
?>

<?php
$con=mysqli_connect("localhost","student","ensf","471");
$query="SELECT Username, Password FROM USER WHERE Username = '" . $username . "' AND Password = '".$password."'";
$result = mysqli_query($con,$query);

$loginSuccess =  mysqli_num_rows($result);

// Legacy Code - IGNORE
// print_r($result);
// if ($result) {
//     while ($row = mysqli_fetch_row($result)) {
//         echo $row[0];
//         echo "<br>";
//         echo $row[1];
//     }
// }
// else {
//     echo "FAILED LOGIN";
// }


if ($loginSuccess) {
    echo "LOGIN SUCESS";
}
else {
    echo "FAILED LOGIN";
}

mysqli_close($con);
?>