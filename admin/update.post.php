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
    <li class="breadcrumb-item active" aria-current="page">Update Post</li>
  </ol>
</nav>


<section class="postcreatesection my-5">
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-8 offset-md-2">
 <div class="h1 text-center text-light text-uppercase my-5">update Post</div>


<form action="" method="POST" enctype="multipart/form-data" id="myform">
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM create_post_table WHERE id='$id'";
$data1 = mysqli_query($config,$sql);
$result = mysqli_fetch_assoc($data1);
$oldimg = $result['post_img'];

if(isset($_POST['update']))
{
    $postTitle = $_POST['post_title'];
    $postTitle = mysqli_real_escape_string($config,$postTitle);
    $postTitle = htmlentities($postTitle);

    $postSubject = $_POST['post_subject'];
    $postSubject = mysqli_real_escape_string($config,$postSubject);
    $postSubject = htmlentities($postSubject);

    $postCategory = $_POST['post_cate'];
    

    $postConent = $_POST['post_content'];
    $postConent = mysqli_real_escape_string($config,$postConent);
    $postConent = htmlentities($postConent);

    $postImg = $_FILES['post_img'];

    $imgname = $postImg['name'];
    $imgtmp = $postImg['tmp_name'];
    
     unlink("../postimage/$oldimg");
    $folder = '../postimage/'.$imgname;

    

    move_uploaded_file($imgtmp,$folder);

    $kapil = "UPDATE create_post_table SET id='$id',post_title='$postTitle',post_subject='$postSubject',post_cat='$postCategory',post_img='$folder',post_content='$postConent' WHERE id='$id'";
    $nee = mysqli_query($config,$kapil);

    if($nee)
    {
        header("Location: post.php");
        ?>
      <script>
      alert("post updated");
      </script>
      
        <?php
    }
}


?>
<div class="form-row">
      <div class="form-group col-md-6 my-3">
      <label for="title" class="text-primary">Post Title</label>
      <input type="text" class="form-control text-primary" name="post_title" id="postTitle" value="<?php echo $result['post_title'];?>" autocomplete="off" required>
      </div>

      <div class="form-group my-3 col-md-6">
      <label for="title" class="text-danger">Post Subject</label>
      <input type="text" class="form-control text-danger" name="post_subject" id="postSub" value="<?php echo $result['post_subject'];?>"  autocomplete="off" required>
      </div>
      </div>

      <div class="form-row">
      <div class="form-group my-3 col-md-6">
      <label for="title" class="text-info">Post Category</label>
      <select name="post_cate" id="postCate" class="form-control text-info">
      <option value="">choose one..</option>
      <option value="html"
      <?php
      if($result['post_cat']=='html')
      {
         echo "selected";
      }
      ?>
      
      >html</option>
      <option value="php"
        <?php
      if($result['post_cat']=='php')
      {
         echo "selected";
      }
      ?>
      
      >php</option>
      <option value="javascript"
        <?php
      if($result['post_cat']=='javascript')
      {
         echo "selected";
      }
      ?>
      
      >javascript</option>
      <option value="other"
        <?php
      if($result['post_cat']=='other')
      {
         echo "selected";
      }
      ?>
      
      >other..</option>
      </select>
      </div>

      <div class="form-group my-3 col-md-6">
      <img src="../postimage/<?php echo $result['post_img'];?>" alt="" width="60px" height="60px">
      <label for="title" class="text-warning">Post image</label>
      <input type="file" class="form-control text-warning " name="post_img" id="postImg" autocomplete="off" required>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group my-3 col-md-12">
      <label for="title" class="text-secondary">Post content</label>
       <textarea name="post_content"  cols="30" rows="10" class="form-control" autocomplete="off" required>
       <?php echo $result['post_content'];?>
       </textarea>
      </div>
      </div>

      <div class="text-center">
      <button type="submit" class="btn btn-outline-success w-50" name="update" id="mysubmit">update Post</button></div>
      
        
        </form><!-- end form -->
 
 </div>
 </div>
 </div>



</section>
<?php include("includes/footer.php");?>