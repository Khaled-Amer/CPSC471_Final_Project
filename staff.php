<?php
echo "LOGIN STAFF SUCCESS";


?>

<html>
<body>

<!-- <form action="add.php" method="post">
   Name: <input type="text" name="name"><br>
   E-mail: <input type="text" name="email"><br>
   <input type="submit" value="add">
</form> -->

<body>
    <div class="login-box">
        <form class="login-form" method="POST" action="login.php">
            <input type="button" value="add Flight" onclick="location='add.php'" />
            <input type="button" value="remove Flight" onclick="location='remove.php'" />
            <input type="button" value="add staff to plane" onclick="location='staffFlight.php'" />
            <input type="button" value="Remove staff from plane" onclick="location='removestaffflight.php'" />
            <input type="button" value="Add staff to prepare gate" onclick="location='addgate.php'" />
            <input type="button" value="Staff has finished Prepring gate" onclick="location='removegate.php'" />
            <input type="button" value="Add gate to airport" onclick="location='airportgateadd.php'" />
            <input type="button" value="Remove gate from airport" onclick="location='removegateairport.php'" />
            <input type="button" value="Check tickets sold for flight" onclick="location='ticketcount.php'" />
            <input type="button" value="Add staff to airline" onclick="location='airlineadd.php'" />
            <input type="button" value="Fire staff" onclick="location='firestaff.php'" />
            <input type="button" value="Check when gate is in use" onclick="location='checkgate.php'" />
            <input type="button" value="Add fuel to plane" onclick="location='checkfuel.php'" />
            <input type="button" value="Add fuel to database" onclick="location='addfuel.php'" />
            <input type="button" value="Remove fuel from database" onclick="location='removefuel.php'" />
            <input type="button" value="Check gate in use currently" onclick="location='gateinuse.php'" />
        </form>
    </div>
</body>

</body>
</html>