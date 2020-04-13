<?php
include("includes/header.php");

if(isset($_POST['comment']))
{
    $cmtemail = $_POST['commentemail'];
    $cmtemail = mysqli_real_escape_string($con,$cmtemail);
    $cmtemail = htmlentities($cmtemail);

    $cmt = $_POST['commenttextarea'];
    $cmt = mysqli_real_escape_string($con,$cmt);
    $cmt = htmlentities($cmt);

    $commtsql = "INSERT INTO `user_comment`(`cmt_email`, `cmt`) VALUES ('$cmtemail','$cmt')";
    $commtdata = mysqli_query($con,$commtsql);
    
   if($commtdata)
   {
       header("Location:index.php");
   } 
   else{
       ?>
       <script>
       alert("not commit your comment");
       </script>
       <?php
   }
    
}

?>