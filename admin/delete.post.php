<?php

include("includes/header.php");

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}

?>

<?php
$id = $_GET['id'];
$dlq = "DELETE FROM create_post_table WHERE id='$id'";
$dldata = mysqli_query($config,$dlq);

if($dldata)
{
    header("Location: post.php");
}
else{
    header("Location: post.php");
}



?>