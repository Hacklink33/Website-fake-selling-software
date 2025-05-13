<?php      
    $db_host = "localhost";  
    $db_username = "root";  
    $db_password = '';  
    $db_name = "tp4";  

    $con = mysqli_connect($db_host, $db_username, $db_password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  