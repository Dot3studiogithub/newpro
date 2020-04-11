<?php 

include("includes/header.php");

if(!isset($_SESSION['user']))
{
    
    header("Location: index.php");

}

?>
<?php include("includes/navbar.php");?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="post.php">Post</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create Post</li>
  </ol>
</nav>


<section class="postcreatesection my-5">
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-8 offset-md-2">
 <div class="h1 text-center text-light text-uppercase my-5">Create Post</div>


<form action="create_post_config.php" method="POST" enctype="multipart/form-data" id="myform">
<div class="form-row">
      <div class="form-group col-md-6 my-3">
      <label for="title" class="text-primary">Post Title</label>
      <input type="text" class="form-control text-primary" name="post_title" id="postTitle" autocomplete="off" required>
      </div>

      <div class="form-group my-3 col-md-6">
      <label for="title" class="text-danger">Post Subject</label>
      <input type="text" class="form-control text-danger" name="post_subject" id="postSub"  autocomplete="off" required>
      </div>
      </div>

      <div class="form-row">
      <div class="form-group my-3 col-md-6">
      <label for="title" class="text-info">Post Category</label>
      <select name="post_cate" id="postCate" class="form-control text-info">
      <option value="">choose one..</option>
      <option value="html">html</option>
      <option value="php">php</option>
      <option value="javascript">javascript</option>
      <option value="other">other..</option>
      </select>
      </div>

      <div class="form-group my-3 col-md-6">
      <label for="title" class="text-warning">Post image</label>
      <input type="file" class="form-control text-warning " name="post_img" id="postImg" autocomplete="off" required>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group my-3 col-md-12">
      <label for="title" class="text-secondary">Post content</label>
       <textarea name="post_content"  cols="30" rows="10" class="form-control" autocomplete="off" required></textarea>
      </div>
      </div>

      <div class="text-center">
      <button type="submit" class="btn btn-outline-success w-50" name="createpost" id="mysubmit">Create Post</button></div>
      
        
        </form><!-- end form -->
 
 </div>
 </div>
 </div>



</section>



















<?php include("includes/footer.php");?>