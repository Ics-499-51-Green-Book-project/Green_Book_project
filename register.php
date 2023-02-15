<?php

?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="css/register.css">
    </head>
    <body>
        <div class ="registerbox">
            
            <h1>registion form</h1>
            <form action ="regdb.php" method="post">
                <p> First Name</p>
                <input type = "text" = "fname" placeholder="Your first Name"required>
                <p> Last Name</p>
                <input type = "text" = "lname" placeholder="Your last Name">
                <p>Phone Number</p>
                <input type = "text" = "phone" placeholder="Phone Number" required>
                <p> Email</p>
                <input type = "text" = "email" placeholder="Email"required>
                <p> Password</p>
                <input type = "password" = "passwordS" placeholder="Password"required></br>    
                <button type ="submit"> Sign Up</button>
                <p><a href="index.php">back</a></p>
                
      
                </form>
        </div>
    </body>
</html>
