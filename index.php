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
            <label for="username" class="form-label">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <input type="submit" value="Submit" class="form-button">
            <input type="reset" value="Reset" class="form-button">
        </form>
        <a class="button"href="register.php">Register</a>
    </div>
</body>

</body>
</html>
