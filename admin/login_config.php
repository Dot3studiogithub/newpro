<?php
include("includes/db_config.php");


if(isset($_POST['login']))
{
    $inpt_email= $_POST['l_email'];
    $inpt_email = mysqli_real_escape_string($config, $inpt_email);
    $inpt_email = htmlentities($inpt_email);

    $inpt_pass= $_POST['l_password'];
    $inpt_pass = mysqli_real_escape_string($config, $inpt_pass);
    $inpt_pass = htmlentities($inpt_pass);

    $login_query = "SELECT * FROM admin_register WHERE email='$inpt_email'";
    $login_sql = mysqli_query($config, $login_query);

    $login_count_email = mysqli_num_rows($login_sql);

    if($login_count_email)
    {
        $new_pass = mysqli_fetch_assoc($login_sql);
        $db_pass = $new_pass['password'];
        $_SESSION['user'] = $new_pass['first_name'];


        $pass_decode = password_verify($inpt_pass, $db_pass);

                if($pass_decode)
                {
                    
                    ?>
                    <script>
                    location.replace("home.php");
                    </script>
                 <?php
                }
                else{

                    ?>
                    <script>
                    alert("invailed email and password");
                    </script>
                 <?php

                }
       


    }
    else{

        ?>
           <script>
           alert(" somthing went wrong");
           </script>
        <?php
    }
}











?>