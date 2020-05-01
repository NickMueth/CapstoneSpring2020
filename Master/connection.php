<?php
    $servername = "localhost:3308";
    $user = "root";
    $pass = "";
    $db = "capstone";

    $conn = new mysqli($servername, $user, $pass, $db);

    if($conn->connect_error){
        die($conn->connect_error);
        echo '<script type="text/javascript">
            var error = "', $conn->connect_error, '";
            console.error("CONNECTION FAILED...", error);</script>';
    }
?>