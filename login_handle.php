<?php

error_reporting(0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "MCQ_Assessment";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn)
    {
    }
    else{
        echo "Connection Failed" .mysqli_connect_error();
    }

?>