<?php
    include('connection.php');
    $username = $_POST['username'];  
    $password = $_POST['password'];

    //To prevent from MySQLI injection
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password); 

    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO login (username, password)
    VALUES ('$username', '$password')";

    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
?>