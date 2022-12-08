<?php

function derivingAllPlane() {
    $con=mysqli_connect("localhost","student","ensf","471");
    $query="SELECT Gate_Number FROM Gate";

    $result = mysqli_query($con,$query);

    $derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<p><b>Gate Number:</b> ".$row[0]." </p>";
        }
    }


    mysqli_close($con);
}

derivingAllPlane();


?>

</html>
<body>
<form action="checkgatepage.php" method="post">
  Gate Number: <input type="text" name="flight"><br>
  <input type="submit">
</form>

</body>
</html>