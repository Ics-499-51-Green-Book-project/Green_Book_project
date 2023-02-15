<?php


?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    
    <body>
        
            <div class="loginbox">
            <h1>Login</h1>
            <form action ="logindb.php" method="post">
                <p> User Name</p>
                <input type = "text" name = "username" placeholder="Username" id ="username" required>
                <p> Password</p>
                <input type = "password" name = "password" placeholder="Password" id ="password" required> </br></br> 
                <button type ="submit"> Login</button></br>
                <p> Not yet a member?  <a href="register.php">Sign Up</a></p>
                <p><a href="index.php">back</a></p>
               
      
                </form>
          
        </div>
    </body>
    </head>
</html>


