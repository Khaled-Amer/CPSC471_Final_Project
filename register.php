

<Html>  
    <body>  
        <?php
            if(isset($_POST['submit'])) {
                addPassenger();
            }

            function addPassenger(){
                echo "ASDSDA";
                $Username = $_POST['Username'];
                $Password = $_POST['Password'];
                $SSN = $_POST['SSN'];
                $Firstname = $_POST['Firstname'];
                $Lastname = $_POST['Lastname'];
                $Sex = $_POST['Sex'];
                $Birthdate = $_POST['Birthdate'];

                echo $Username;
                echo "\r";
                echo $Password;
                echo $SSN;
                echo $Birthdate;

                #$con=mysqli_connect("localhost","student","ensf","471");

                #$query="INSERT INTO FLIGHT VALUES  ('" . $flight . "','" . $DT . "', '" . $AT . "', '" . $airline . "', '" . $PS . "', '" . $AR . "', '" . $DR . "', '" . $GN . "')";

                $result = mysqli_query($con,$query);
            }

        ?>

        <br>  
        <br>  
        <form method="post">
            <b>Passenger Registration Page </b><br>
            <br>
            <label class="form-label"> Username </label>         
            <input type="text" name="Username" size="15"/> <br> <br>  
            <label> Password: </label>     
            <input type="text" name="Password" size="15"/> <br> <br>  
            <label> SSN: </label>         
            <input type="text" name="SSN" size="15"/> <br> <br>  
            <label> Firstname </label>  
            <input type="text" name="Firstname" size="15"/> <br> <br>  
            <label> Lastname: </label>         
            <input type="text" name="Lastname" size="15"/> <br> <br>  
            <label> Sex: </label>         
            <select id="Sex">
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
            </select><br> <br>  
            <label for="start">Birth date:</label>
            <input type="date" id="birthDate" name="birth date"a><br> <br>  
            <input type="submit" name="submit" value="Submit"/>  
        </form>  
    </body>  
</html>