<?php
function derivingalloperate() {
    $con=mysqli_connect("localhost","student","ensf","471");
    $query="SELECT Flight_Number FROM FLIGHT ";

    $result = mysqli_query($con,$query);

    $derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<p><b>Flight number:</b> ".$row[0]."</p>";
        }
    }

    


    mysqli_close($con);
}

derivingalloperate();

?>

</html>
<body>
<form action="ticketcountpage.php" method="post">
  Flight: <input type="text" name="flight"><br>
  <input type="submit">
</form>

</body>
</html>