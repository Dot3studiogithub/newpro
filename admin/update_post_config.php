<?php
include("includes/header.php");

if(isset($_POST['update']))
{
    $id = $_GET['id'];

   $post_title = $_POST['post_title'];
   $post_sub = $_POST['post_subject'];
   $post_cate = $_POST['post_cate'];
   $post_cont = $_POST['post_content'];

   $update_query = "UPDATE `create_post_table` SET `id`=$id,`post_title`=$post_title,`post_subject`=$post_sub,`post_cat`=$post_cate,`post_content`=$post_cont WHERE id=$id";
   $data = mysqli_query($config,$update_query);

   if($data)
   {
       header("Location:update.post.php");
   }
}





?>