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


    $selquery = "SELECT * FROM admin_register WHERE email='admin_email'";
    $selsql = mysqli_query($config, $selquery);

    $countemail = mysqli_num_rows($selsql);

    if($countemail > 0)
    {
       ?>
        <script> alret("email already exists")</script>

        <?php
    }
    else{

        if($ad_pass === $confirm_pass)
        {
            $query = "INSERT INTO `admin_register`(`first_name`, `last_name`, `email`, `contact_no`, `password`, `confirm_pass`)
            VALUES ('$first_name','$last_name','$admin_email','$admin_number','$crypass','$con_crypass')";
            $sql = mysqli_query($config,$query);

               if($sql)
               {
                  header("Location: index.php");
               }

               else{
                  header("Location: register.php");
                ?>
                <script>
                      alret("you are not register");
                      </script>

         <?php

               }
        }

        else{
            ?>
                <script>
                alret("password are not match");
                </script>

            <?php
        }
    }

    

              



   


}


?>