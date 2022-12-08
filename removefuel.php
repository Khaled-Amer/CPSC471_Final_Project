<?php
function derivingAllFlights() {
  $con=mysqli_connect("localhost","student","ensf","471");
  $query="SELECT Type, Price FROM FUEL";

  $result = mysqli_query($con,$query);

  $derivingSuccess =  mysqli_num_rows($result);

  if ($derivingSuccess > 0) {
      while ($row = mysqli_fetch_row($result)) {
          echo "<p><b>Fuel Name:</b> ".$row[0]."</p><b>Fuel Price:</b>".$row[1]."";
      }
  }


  mysqli_close($con);
}



derivingAllFlights();

?>

</html>
<body>
<form action="removefuelpage.php" method="post">
  Fuel Name:  <input type="text" name="username"><br>
  <input type="submit">
</form>

</body>
</html>