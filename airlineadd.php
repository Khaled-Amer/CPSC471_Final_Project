<?php

function derivingAllPlane() {
    $con=mysqli_connect("localhost","student","ensf","471");
    $query="SELECT Name FROM AIRLINE";

    $result = mysqli_query($con,$query);

    $derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<p><b>Airline:</b> ".$row[0]." </p>";
        }
    }


    mysqli_close($con);
}
function derivingAllStaff() {
    $con=mysqli_connect("localhost","student","ensf","471");
    $query="SELECT Username, Job FROM STAFF ";

    $result = mysqli_query($con,$query);

    $derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            $name = "SELECT Fname, Lname FROM USER WHERE Username = '" . $row[0] . "'";
            $staffname = mysqli_query($con,$name);
            $test = mysqli_fetch_row($staffname);
            echo "<p><b>Username:</b> ".$row[0]." <b>Job:</b> ".$row[1]."<b> Fname:</b> ".$test[0]." <b>Lname:</b> ".$test[1]."</p>";
        }
    }


    


    mysqli_close($con);
}

derivingAllPlane();
derivingAllStaff();

?>

</html>
<body>
<form action="airlineaddpage.php" method="post">
  Airline:  <input type="text" name="flight"><br>
  Staff Username: <input type="text" name="username"><br>
  <input type="submit">
</form>

</body>
</html>