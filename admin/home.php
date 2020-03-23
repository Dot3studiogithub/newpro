

<?php

include("includes/header.php");

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}
?>



<a href="logout.php" class="btn btn-danger">logout</a>

    <?php include("includes/footer.php");?>

    













