<?php
if (isset($_POST['username'])) {
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

    $sql = "DELETE FROM login WHERE username = '$username'";

    if ($con->query($sql) === TRUE) {
      echo "Your account deleted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
    } else {
        // User is not logged in, redirect to login page
        header('Location: login.php');
  }
?>