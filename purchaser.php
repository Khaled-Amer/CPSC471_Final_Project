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
        echo "<br>Flights Available: <br>";
        while ($row = mysqli_fetch_row($result)) {
            
            echo "<p><b>FlightID:</b> ".$row[0]." <b>DepartureTime:</b> ".$row[1]."</p>";
        }
    }
    else{
        echo "<br>No Flights Available<br>";
    }


    mysqli_close($con);
}

function derivingAllTickets($P_ID) {
    $con=mysqli_connect("localhost","student","ensf","471");
    $query="SELECT Ticket_Number, Flight_Number FROM Ticket WHERE P_ID = ".$P_ID.";";

    $result = mysqli_query($con,$query);

    $derivingSuccess =  mysqli_num_rows($result);

    if ($derivingSuccess > 0) {
        echo "<br>Tickets Purchased: <br>";
        while ($row = mysqli_fetch_row($result)) {
            
            echo "<p><b>Ticket_Number:</b> ".$row[0]." <b>Flight_Number:</b> ".$row[1]."</p>";
        }
    }
    else
    {
        echo "<br>No Tickets Purchased <br>";
    }


    mysqli_close($con);
}

function createTicket($P_ID, $Passport_Num, $fNo) {
    $con=mysqli_connect("localhost","student","ensf","471");

    //Legacy Code
    // $ticketNum = $fNo.substr($P_ID,0,4);

    // $query="INSERT INTO TICKET VALUES  (" . $ticketNum . ",'" . $P_ID ."'," . '500' . ",'" . $Passport_Num . "'," . $fNo . ");";
   
    $query = "INSERT INTO TICKET (P_ID, Price, Recipient_Pass, Flight_Number) VALUES ('". $P_ID ."', 500, '".$Passport_Num."', ".$fNo.")";

    $result = mysqli_query($con,$query);
    
    $ticketNum;
    $query2 = "SELECT Ticket_Number FROM TICKET WHERE P_ID = '". $P_ID . "' AND Price = 500 AND Recipient_Pass = '".$Passport_Num."' AND Flight_Number = ".$fNo;
    $result2 = mysqli_query($con,$query2);

    if ($result2) {
        while ($row = mysqli_fetch_row($result2)) {
            $ticketNum = $row[0];
        }
    }


    if($result){
        echo "<br>";
        echo "Ticket Purchase Succesfull!";
        echo "<br>";
        echo "Ticket Number: ";
        echo $ticketNum;
        echo "<br>";
        echo "Flight Number: ";
        echo $fNo;
    }
    else{
        echo "<br>";
        echo "Purchase Failed";
    }
}



?>

<?php
echo "LOGIN PURCHASER SUCCESS!";
echo "<br>";
echo "SSN: ";
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
echo "Passenger ID: ";
echo $P_ID;
echo "<br>";
echo "Passport Number: ";
echo $Passport_Num;
echo "<br>";

?>


<html>
    <body>
        <?php if(isset($_POST['FlightNumber'])):?>
            <?php
                createTicket($P_ID, $Passport_Num, $_POST['FlightNumber']);
            ?>
        <?php endif ?>

        <?php if(!isset($_POST['FlightNumber'])):?>
            <?php
                
                derivingAllFlights();
                
                derivingAllTickets($P_ID);
            ?>
            <div class="flight-chooser">
                <br>
                <form class="login-form" method="POST">
                    <label for="FlightNumber" class="form-label">FlightNumber:</label>
                    <input type="text" id="FlightNumber" name="FlightNumber" placeholder="Enter the Flight Number">
            
                    <input type="submit" value="Submit" class="form-button">
                    <input type="reset" value="Reset" class="form-button">
                </form>

            </div>
            <br>
            <div class="flight-chooser-for-dependents">
                <h4>Only fill out this field if you are buying a ticket for a dependent!</h4>
                <form class="login-form" method="POST">
                    <label for="Fname" class="form-label">First Name:</label>
                    <input type="text" id="Fname" name="Fname" placeholder="Enter Dependent First Name">

                    <label for="Lname" class="form-label">Last Name:</label>
                    <input type="text" id="Lname" name="Lname" placeholder="Enter Dependent Last Name">

                    <label for="Bdate" class="form-label">Birthdate:</label>
                    <input type="text" id="Bdate" name="Bdate" placeholder="YYYY-MM-DD">

                    <label for="Sex" class="form-label">Sex:</label>
                    <input type="text" id="Sex" name="Sex" placeholder="M/F">

                    <label for="passengerID" class="form-label">Sex:</label>
                    <input type="text" id="passengerID" name="passengerID" placeholder="Enter your passenger ID">
                    
                    <label for="FlightNumber" class="form-label">FlightNumber:</label>
                    <input type="text" id="FlightNumber" name="FlightNumber" placeholder="Enter the Flight Number">

                    <input type="submit" value="Submit" class="form-button">
                    <input type="reset" value="Reset" class="form-button">
                </form>

            </div>
        <?php endif ?>

        
    </body>
</html>