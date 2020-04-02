<?php
include("includes/header.php");

if(isset($_POST['updatepost']))
{
    $id= $_GET['id'];

    $postTitle = $_POST['post_title'];
    // $postTitle = mysqli_real_escape_string($config,$postTitle);
    // $postTitle = htmlentities($postTitle);

    $postSubject = $_POST['post_subject'];
    // $postSubject = mysqli_real_escape_string($config,$postSubject);
    // $postSubject = htmlentities($postSubject);

    $postCategory = $_POST['post_cate'];
    

    $postConent = $_POST['post_content'];
    // $postConent = mysqli_real_escape_string($config,$postConent);
    // $postConent = htmlentities($postConent);

    $postImg = $_FILES['post_img'];

    $imgname = $postImg['name'];
    $imgtmp = $postImg['tmp_name'];

    $folder = 'postimage/'.$imgname;

    move_uploaded_file($imgtmp,$folder);

    $sql = "UPDATE `create_post_table` SET `id`='$id', `post_title`='$postTitle', `post_subject`='$postSubject', `post_cat`='$postCategory', `post_img`='$folder', `post_content`='$postConent'  WHERE id='$id'";

    $data = mysqli_query($config,$sql);

    

    if($data)
    {
        header("Location: post.php");
        ?>
        <script>
        alert("you have a updated post");
        </script>
     <?php

    }
    else {
        header("Location: post.php");
        ?>
           <script>
           alert("sorry not update post");
           </script>
        <?php
    }

    
}


?>