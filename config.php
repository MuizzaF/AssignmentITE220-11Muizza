<?php

$dbhost = "localhost:8080";
$dbusername = "root@localhost";
$dbpass = "root";

// connect database
$link = mysqli_connect($dbhost, $dbusername, $dbpass, 'ite220ASSIGN11');
if (!$link) {
    die('Could not connect: ' . mysqli_error(link));
}


?>