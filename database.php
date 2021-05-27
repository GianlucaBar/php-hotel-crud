<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "dbhotel";
    $port= '8889';


    // Connect
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn && $conn->connect_error) {

        echo "Connection failed: " . $conn->connect_error;

        die();
    }
?>