
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


function derivingAllPlane() {
  $con=mysqli_connect("localhost","student","ensf","471");
  $query="SELECT Plane_Serial FROM PLANE";

  $result = mysqli_query($con,$query);

  $derivingSuccess =  mysqli_num_rows($result);

  if ($derivingSuccess > 0) {
      while ($row = mysqli_fetch_row($result)) {
          echo "<p><b>Plane Serial:</b> ".$row[0]." </p>";
      }
  }


  mysqli_close($con);
}

derivingAllFlights();
derivingAllPlane();
?>

</html>
<body>
<form action="checkfuelpage.php" method="post">
  Plane Serial:  <input type="text" name="username"><br>
  Type of Fuel: <input type="text" name="flight"><br>
  <input type="submit">
</form>

</body>
</html>
