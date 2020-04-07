<?php

ob_start();

session_start();

$server = "localhost";
$user = "root";
$pass = "";
$db = "dot3studio";

$con = mysqli_connect($server, $user, $pass, $db);

if($con)
{
    echo "";
}
else{
    echo "not connected";
}