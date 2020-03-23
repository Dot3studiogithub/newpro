<?php
include("includes/db_config.php");

if(isset($_POST['submit']))
{
    $first_name = $_POST['admin_first_name'];

    $first_name = mysqli_real_escape_string($config, $first_name);
    $first_name = htmlentities($first_name);

    $last_name = $_POST['admin_last_name'];

    $last_name = mysqli_real_escape_string($config, $last_name);
    $last_name = htmlentities($last_name);

    $admin_email = $_POST['admin_email'];

    $admin_email = mysqli_real_escape_string($config, $admin_email);
    $admin_email = htmlentities($admin_email);

    $admin_number = $_POST['admin_number'];

    $admin_number = mysqli_real_escape_string($config, $admin_number);
    $admin_number = htmlentities($admin_number);

    $ad_pass = $_POST['admin_password'];

    $ad_pass = mysqli_real_escape_string($config, $ad_pass);
    $ad_pass = htmlentities($ad_pass);

    $crypass= password_hash($ad_pass, PASSWORD_BCRYPT);

    $confirm_pass = $_POST['admin_confirm_password'];

    $confirm_pass = mysqli_real_escape_string($config, $confirm_pass);
    $confirm_pass = htmlentities($confirm_pass);

    $con_crypass = password_hash($confirm_pass, PASSWORD_BCRYPT);


    $selquery = "SELECT "

    $query = "INSERT INTO `admin_register`(`first_name`, `last_name`, `email`, `contact_no`, `password`, `confirm_pass`)
               VALUES ($first_name,$last_name,$admin_email,$admin_number,$crypass,$con_crypass)";
               $sql = mysqli_query($config,$query);

               $total_rows= mysqli_num_rows($sql);



   


}


?>