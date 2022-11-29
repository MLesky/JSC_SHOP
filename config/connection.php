<?php
    // change to your user account details
    $servername = "localhost";
    $username = "lespa";  
    $password = "test1234";
    $database = "jsc_shop";

    $connection = mysqli_connect($servername, $username, $password, $database);

    if(!$connection) {
        die("Connection failes: " . mysqli_connect_error());
    }

    echo "Connected Succesfully";

?>