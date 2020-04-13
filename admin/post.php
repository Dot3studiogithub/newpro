<?php

include("includes/header.php");
include("includes/navbar.php");

if(!isset($_SESSION['user']))
{
  header("Location:index.php");
}

$t = "SELECT * FROM create_post_table";
$d = mysqli_query($config,$t);
$total = mysqli_num_rows($d);
$start = 0;
$limit = 8;

$page = ceil($total/$limit);
if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $start = ($id-1)*$limit;
}
else{
  $id = 1;
}

$sql = "SELECT * FROM create_post_table LIMIT $start,$limit";
$gg = mysqli_query($config,$sql);


?>

<div class="container-fluid">
<div class="row">
 <div class="col-md-9">
 <nav aria-label="breadcrumb">
 <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
    
    <li class="breadcrumb-item active" aria-current="page">Post</li>
  </ol>
  </nav>
 </div>
 <div class="col-md-3">
 <a href="create.post.php" class="btn btn-primary">Create Post</a>
 
 </div>
 </div>
 </div>

<div class="container-fluid my-5 bg-light">

<div class="row">
<div class="col-md-8 offset-md-2">

<div class="h1 text-center text-dark my-3">Recent Post</div>
<table class="table table-striped table-hover">
<tbody>
<th scope="row">sr</th>
<th scope="row">title</th>
<th scope="row">subject</th>
<th scope="row">images</th>
<th scope="row">update</th>
<th scope="row">delete</th>
<?php

while($res = mysqli_fetch_assoc($gg))
{
    ?>
  <tr>
  <td><?php echo $res['id'];?></td>
  <td><?php echo $res['post_title'];?></td>
  <td><?php echo $res['post_subject'];?></td>
  <td>
  <?php echo $res['post_img'];?>
  </td>  
  <td><a href="update.post.php?id=<?php echo $res['id'];?>" class="btn btn-warning">update</a></td>
  <td><a href="delete.post.php?id=<?php echo $res['id'];?>" class="btn btn-danger">delete</a></td>

  
  </tr>
  
  <?php
}


?>

</tbody>

</table>
</div>
</div>

</div>

<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
   
    <?php
    
    
    if($id > 1)
    {
      ?>
         <li class="page-item">
      <a class="page-link" href="?id=<?php echo ($id-1);?>">Previous</a>
    </li>
      <?php
    }
    ?>

   <?php
   for($i=1; $i<=$page;$i++)
   {
     ?>
       <li class="page-item">
       <a class="page-link" href="?id=<?php echo $i;?>"><?php echo $i;?></a>
       </li>

     <?php
   }
   
   ?>
    
    <?php
    if($id!=$page)
    {
      ?>
<li class="page-item">
      <a class="page-link" href="?id=<?php echo ($id+1);?>">Next</a>
    </li>
           
      <?php
    }
    
    ?>
    
    
  </ul>
</nav>