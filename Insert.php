<?php 
    
    $con = new mysqli("localhost","root","","RestaurantMenu"); 
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    
    $sql="INSERT INTO client (fullname, phone, email, card, pin) VALUES ('$_POST[fullName]','$_POST[phoneNumber]','$_POST[mail]','$_POST[card]','$_POST[pin]')";  

    if ($con->query($sql) === TRUE) {
        echo "new record insert successfully";
    }else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
?>