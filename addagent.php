<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
        <?php
        require('db.php');
        // If form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
                // removes backslashes
                $username = stripslashes($_REQUEST['username']);
                //escapes special characters in a string
                $username = mysqli_real_escape_string($con, $username);
                $email = stripslashes($_REQUEST['email']);
                $email = mysqli_real_escape_string($con, $email);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
                $trn_date = date("Y-m-d H:i:s");
                $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '" . md5($password) . "', '$email', '$trn_date')";
                $result = mysqli_query($con, $query);
                if ($result) {
                        echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
                }
        } else {
        ?>
                <div style="background-color:aquamarine;">
                        <div class="form" style=" text-align:center">
                                <h1>ADD AGENT</h1>
                                <form name="ADD AGENT" action="" method="post">
                                        <input type="text" name="Agent Name" placeholder="Agent Name" required />
                                        <input type="text" name="Mobile" placeholder="Mobile" required />
                                        <input type="text" name="Password" placeholder="Password" required />
                                        <input type="submit" name="register" value="ADD AGENT" />
                                </form>
                  </div>
                </div>
        <?php } ?>
</body>

</html>