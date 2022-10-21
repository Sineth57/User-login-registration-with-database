<?php 
    $servername = "localhost";
    $username = "root";
    $password = "2000SGW@";
    $db_name = "mydatabase4";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
    
    ?>