<?php $page='home';
 include("includes/header.php");?>
 <?php
 $t = "SELECT * FROM create_post_table";
 $d = mysqli_query($con,$t);
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
 
 $sql = "SELECT * FROM create_post_table LIMIT $start,$total";
 $data = mysqli_query($con,$sql);
 
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <a class="navbar-brand" href="index.php">
  <img src="images/my-new-logo.png" alt="" width="120px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if($page == 'home'){echo 'active';}?>">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if($page == 'portfolio'){echo 'active';}?>">
        <a class="nav-link" href="portfolio.php">PORTFOLIO</a>
      </li>
      
      <li class="nav-item <?php if($page == 'about us'){echo 'active';}?>">
        <a class="nav-link " href="about.php">ABOUT US</a>
      </li>
      <li class="nav-item <?php if($page == 'services'){echo 'active';}?>">
        <a class="nav-link " href="services.php">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class=" btn btn-outline-success" href="contact.php">CONTACT US</a>
      </li>
    </ul>
    
  </div>
</nav>

<section class="post-section">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="text-center">
  <div class="display-4 tommy text-warning">DOT3STUDIO</div>
  <div class="h1 text-light">WE ARE <span class="type text-danger"></span></div>
  <a  href="portfolio.php" class="btn btn-outline-primary">DISCOVER ME</a>
</div>

</div><!-- text div -->

<div class="col-md-6 my-5  text-center">
  <div class="text-center">
  <img src="images/banner.png" class=" mx-auto d-block" width="600px">
  </div>
</div>
</div>
</div>
</section>



<section class="user-post-section">


  <div class="container">
    <div class="row">
    <?php
    while($re = mysqli_fetch_assoc($data))
    {
      ?>
       <div class="col-md-3 my-5 mx-3">
      <div class="card" style="width: 18rem;">
     <div class="text-center">
     <i class="fas fa-file-pdf fa-4x text-danger mt-3"></i>
     </div>
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo $re['post_title'];?></h5>
    
    <div class="text-center">
    <a href="postimage/<?php echo $re['post_img'];?>" target="blank" class="btn btn-primary">View</a>
    </div>
  </div>
</div>
      </div>

      <?php
    }
    
    ?>
     
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

<section class="comment-section my-5">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 offset-md-2">
<form action="comment.php" method="POST">
<div class="form-group">
<input type="email" class="form-control mb-3" name="commentemail" placeholder="E-mail" autocomplete="off" required>
</div>

<div class="form-group">
<textarea name="commenttextarea" id="" cols="30" rows="10" class="form-control" placeholder="Comment..." required></textarea>
</div>
<div class="text-center">
<button type="submit" class="btn btn-outline-success" name="comment">comment</button>
</div>
</form>

</div>
</div>
</div>

</section>



<script>
     var typed = new Typed('.type', {
    strings: ['DEVELOPER', 'DESIGNER'],
    typeSpeed: 80,
    backSpeed: 80,
    loop: true
  });
</script>
  
<?php include("includes/footer.php");?>