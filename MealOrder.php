<?php 
    
    $con = new mysqli("localhost","root","","RestaurantMenu"); 
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    
    $sql="INSERT INTO meal (clientID, season, time, date, deskID) VALUES ('$_POST[id]','$_POST[season]','$_POST[time]','$_POST[desk]','$_POST[deskid]')";  

    if ($con->query($sql) === TRUE) {
        echo "new record insert successfully";
    }else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
?>