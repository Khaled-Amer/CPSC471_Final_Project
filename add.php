
<?php
function derivingAllFlights() {
  $con=mysqli_connect("localhost","student","ensf","471");
  $query="SELECT Name FROM AIRLINE";

  $result = mysqli_query($con,$query);

  $derivingSuccess =  mysqli_num_rows($result);
  echo "<b>Airline Name:</b>";

  if ($derivingSuccess > 0) {
      while ($row = mysqli_fetch_row($result)) {
          echo "<p> ".$row[0]."</p>";
      }
  }


  mysqli_close($con);
}

function derivingAllGates() {
  $con=mysqli_connect("localhost","student","ensf","471");
  $query="SELECT Gate_Number FROM GATE";

  $result = mysqli_query($con,$query);

  $derivingSuccess =  mysqli_num_rows($result);
  echo "<b>Gate:</b>";

  if ($derivingSuccess > 0) {
      while ($row = mysqli_fetch_row($result)) {
          echo "<p> ".$row[0]."</p>";
      }
  }


  mysqli_close($con);
}

function derivingAllRunway() {
  $con=mysqli_connect("localhost","student","ensf","471");
  $query="SELECT Runway_Number FROM RUNWAY";

  $result = mysqli_query($con,$query);

  $derivingSuccess =  mysqli_num_rows($result);

  $derivingSuccess =  mysqli_num_rows($result);
  echo "<b>Runway Numbers:</b>";

  if ($derivingSuccess > 0) {
      while ($row = mysqli_fetch_row($result)) {
          echo "<p> ".$row[0]."</p>";
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
derivingAllGates();
derivingAllRunway();
derivingAllPlane();
?>

</html>
<body>
<form action="addpage.php" method="post">
  Flight Number:  <input type="number" name="flight"><br>
  Departure Time (YYYY-MM-DD HH:MM:SS):  <input type="test" name="DT"><br>
  Arrival Time (YYYY-MM-DD HH:MM:SS):  <input type="text" name="AT"><br>
  Airline Name:  <input type="text" name="airline"><br>
  Plane Serial:  <input type="text" name="PS"><br>
  Arrival Runway:  <input type="text" name="AR"><br>
  Departure Runway:  <input type="text" name="DR"><br>
  Gate Number:  <input type="text" name="GN"><br>
  <input type="submit">
</form>

