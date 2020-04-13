<?php

include("includes/header.php");

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}


?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM create_post_table WHERE id='$id'";
$data1 = mysqli_query($config,$sql);
$result = mysqli_fetch_assoc($data1);
$oldimg = $result['post_img'];
unlink("../postimage/$oldimg");
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