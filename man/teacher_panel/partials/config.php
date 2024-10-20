<?php
    $server = "localhost";
   
    $user = "root";
    $password = "";
    $db = "website";
    
    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        header('Location: ../errors/error.html');
        exit();
    }


?>