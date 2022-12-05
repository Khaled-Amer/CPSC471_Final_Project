<?php 
session_start();
$username = $_SESSION['username'];
$SSN = $_SESSION['SSN'];
?>

<?php 

function obtainPassengerDetails() {}

function derivingAllFlights() {
    $con=mysqli_connect("localhost","student","ensf","471");
    $query="SELECT Flight_Number, Departure_Time FROM FLIGHT";

    $result = mysqli_query($con,$query);

    $derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<br>";
            echo "<p><b>FlightID:</b> ".$row[0]." <b>DepartureTime:</b> ".$row[1]."</p>";
        }
    }


    mysqli_close($con);
}

function createTicket($PassengerID, $PassengerPassport, $fNo) {

}



?>

<?php
echo "LOGIN PURCHASER SUCCESS";
echo $SSN;
$P_ID;
$Passport_Num;
// Derive P_ID from database using Username and SSN. {Can be turned into function if more efficient}
$con=mysqli_connect("localhost","student","ensf","471");
$query="SELECT P_ID FROM PURCHASER WHERE Username = '" . $username . "' AND SSN = '".$SSN."'";
$result = mysqli_query($con,$query);

if ($result) {
    while ($row = mysqli_fetch_row($result)) {
        $P_ID = $row[0];
    }
}

// Deriving Passport_Num from database using P_ID
$query = "SELECT Passport_Num FROM PASSENGER WHERE P_ID = ".$P_ID;
$result2 = mysqli_query($con,$query);


if ($result2) {
    while ($row = mysqli_fetch_row($result2)) {
        $Passport_Num = $row[0];
    }
}


mysqli_close($con);

echo "<br>";
echo $P_ID;
echo "<br>";
echo $Passport_Num;
echo "<br>";

?>


<html>
    <body>
        <?php if(isset($_POST['FlightNumber'])):?>
            createTicket();
        <?php endif ?>

        <?php if(!isset($_POST['FlightNumber'])):?>
            <?php
                derivingAllFlights();
            ?>
            <div class="flight-chooser">
                <form class="login-form" method="POST">
                    <label for="FlightNumber" class="form-label">FlightNumber:</label>
                    <input type="text" id="FlightNumber" name="FlightNumber" placeholder="Enter the Flight Number">
                    <input type="submit" value="Submit" class="form-button">
                    <input type="reset" value="Reset" class="form-button">
                </form>

            </div>
        <?php endif ?>

        
    </body>
</html>