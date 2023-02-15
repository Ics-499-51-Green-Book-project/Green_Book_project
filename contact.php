<?php

?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>contact</title>
        <link rel="stylesheet" type="text/css" href="css/contact.css">
    </head>
    <body>
        <div class ="contactbox">
            
            <h1>Contact Us</h1>
            <form action ="condb.php" method="post">
                <p> Full Name</p>
                <input type = "text" = "fname" placeholder="Your full Name"required>
                <p> Phone Number</p>
                <input type = "text" = "phone" placeholder="Phone Number"required>
                <p> Email</p>
                <input type = "text" = "email" placeholder="Email"required>
                <label>Message</label>
                <input type = "message" = "message" required>
                
                <button type ="submit"> Send</button>
                <p><a href="index.php">back</a></p>
                
      
                </form>
        </div>
    </body>
</html>
