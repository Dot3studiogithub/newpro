<?php

ob_start();

session_start();

$server = "localhost";
$user = "root";
$pass = "";
$db = "dot3studio";

$config = mysqli_connect($server, $user, $pass, $db);

if($config)
{
    echo "";
}
else{
    echo "not connected";
}