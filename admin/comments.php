<?php
$page='comments';
include("includes/header.php");
if(!isset($_SESSION['user']))
{

    header("Location: index.php");

}

?>

<?Php include("includes/navbar.php");?>


<div class="container-fluid my-5">
<div class="row">
<div class="col-md-12 text-center">
  <div class="h1"> <i class="fas fa-comments fa-lg text-primary mr-2"></i>All Comments</div>
</div>
</div>
</div>
<!-- enh heading -->

<!-- strat comment section -->
<section class="comment-sec my-5">
<div class="container">
<div class="row">
<div class="col-md-8 offset-md-2">
<table class="table text-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</section>



<!-- end comments section  -->




<?Php include("includes/footer.php");?>