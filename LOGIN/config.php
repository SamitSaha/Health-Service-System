<?php
// this file contains database configuration assuming you are running mysql using user "root & password" 
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'login');

    // Try to Connect to the Database
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    
    // Check the connection
    if($conn == false){
        dir('Error: Cannot connect');
    }

?>