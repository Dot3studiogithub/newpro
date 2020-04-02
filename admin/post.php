<?php 
$page='post';
include("includes/header.php");

if(!isset($_SESSION['user']))
{
    
    header("Location: index.php");

}

?>
 <?php
    $t = "SELECT * FROM create_post_table";
    $d = mysqli_query($config,$t);
    $total = mysqli_num_rows($d);
    $start = 0;
    $limit = 1;

    $page = ceil($total/$limit);
    if(isset($_GET['id']))
    {
      $id = $_GET['id'];
      $start = ($id-1)*$limit;
    }
    else{
      $id = 1;
    }
    
    $sql01 = "SELECT * FROM create_post_table LIMIT $start,$limit";
    $data = mysqli_query($config,$sql01);
    ?>

<?php include("includes/navbar.php");?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Post</li>
  </ol>
</nav>

<section class="create-itemes my-5">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 my-2">
<a href="create.post.php"  class="btn btn-outline-primary w-100"><i class="fas fa-plus fa-lg text-light mr-2"></i>Post</a>
</div><!-- end btn 1 -->

<div class="col-md-4 my-2">
<a href="#"  class="btn btn-outline-warning w-100"><i class="fas fa-edit fa-lg text-light mr-2"></i>Post</a>
</div><!-- end btn 2 -->

<div class="col-md-4 my-2">
<a href="#" class="btn btn-outline-danger w-100"><i class="fas fa-trash fa-lg text-light mr-2"></i>Post</a>
</div><!-- end btn 3 -->
</div>
</div>
</section>

<section class="all-post my-5">
<div class="container">
<div class="row">
<div class="col-md-8 offset-md-2">
   <div class="h1 text-light text-center py-5"> <i class="fas fa-file-alt text-secondary fa-lg mr-2"></i>All post</div>
  
   <table class="table text-center">
   <thead class="text-light">
   <tr>
      <th scope="col">SR</th>
      <th scope="col">Title</th>
      <th scope="col">subject</th>
      
      <th scope="col">image</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>

   </thead>
   <tbody>
   <?php 
   
   

   

   while($newres = mysqli_fetch_assoc($data))
   {
     ?>
      
      <tr>
      <td>
      <?php echo $newres['id'];?>
      </td>
      <td>
      <?php echo $newres['post_title'];?>
      </td>
      <td>
      <?php echo $newres['post_subject'];?>
      </td>
      
      <td>
      <img src="<?php echo $newres['post_img'];?>" alt="" width="50px" height="50px">
      </td>
      <td>
      <a href="post.php?id=<?php echo $newres['id'];?>" data-toggle="modal" data-target="#editpostmodal" class="btn btn-info">Update</a>
      </td>

      <td>
      <a href="" class="btn btn-danger">Delete</a>
      </td>
      </tr>



     <?php
   }
   
   
   ?>
  </tbody>
   </table>

</div>
</div>
</div>
</section>

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












<?php include("includes/footer.php");?>