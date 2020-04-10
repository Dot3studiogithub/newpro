<?php
include("includes/header.php");
include("includes/navbar.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM create_post_table WHERE id='$id'";
     $data = mysqli_query($con,$sql);
     
}

?>

<div class="container-fluid my-5">
<div class="row d-flex justify-content-center">
<?php

while($sh = mysqli_fetch_assoc($data))
{
    ?>

<div class="col-md-8">
<div class="text-center"><img src="postimage/<?php echo $sh['post_img'];?>" alt="" width="300px" height="300px" class="text-center"></div>
<div class="h1 my-3 text-light text-center"><?php echo $sh['post_title'];?></div>
<div class="h4 my-5 text-light text-left"><?php echo $sh['post_subject'];?></div>
<p class="text-light text-center my-5"><?php echo $sh['post_content'];?></p>
</div>


    <?php
}


?>

</div>
</div>