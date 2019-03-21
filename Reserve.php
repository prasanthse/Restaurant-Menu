<?php 
    
    $con = new mysqli("localhost","root","","RestaurantMenu"); 
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    
    $sql="INSERT INTO reserve (desk, chair) VALUES ('$_POST[table]','$_POST[chair]')";  

    if ($con->query($sql) === TRUE) {
        echo "new record insert successfully";
    }else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
?>