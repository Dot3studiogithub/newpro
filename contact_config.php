<?php

include("includes/header.php");

if(isset($_POST['send']))
{
    $name = $_POST['cname'];
    $name = mysqli_real_escape_string($con,$name);
    $name = htmlentities($name);

    $email = $_POST['cemail'];
    $email = mysqli_real_escape_string($con,$email);
    $email = htmlentities($email);

    $number = $_POST['cnumber'];
    $number = mysqli_real_escape_string($con,$number);
    $number = htmlentities($number);

    $cmessage = $_POST['cmsg'];
    $cmessage = mysqli_real_escape_string($con,$cmessage);
    $cmessage = htmlentities($cmessage);

}

$sql = "INSERT INTO `contact_message`(`cname`, `cemail`, `cnumber`, `cmessage`) VALUES('$name','$email','$number','$cmessage')";
$data = mysqli_query($con,$sql);

if($data)
{
    header("Location:contact.php");
}
else
{

}

?>