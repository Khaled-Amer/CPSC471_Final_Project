<?php
function derivingalloperate() {
    $con=mysqli_connect("localhost","student","ensf","471");
    $query="SELECT Gate_Number FROM Gate ";

    $result = mysqli_query($con,$query);

    $derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<p><b>Gate:</b> ".$row[0]." </p>";
        }
    }

    


    mysqli_close($con);
}

derivingalloperate();

?>

</html>
<body>
<form action="gateremovepage.php" method="post">
  Gate Number:  <input type="text" name="username"><br>
  <input type="submit">
</form>

</body>
</html>