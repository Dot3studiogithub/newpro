<?php 
$page='post';
include("includes/header.php");

if(!isset($_SESSION['user']))
{
    
    header("Location: index.php");

}

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
<a href="#" data-toggle="modal" data-target="#createpostmodal" class="btn btn-outline-primary w-100"><i class="fas fa-plus fa-lg text-light mr-2"></i>Post</a>
</div><!-- end btn 1 -->

<div class="col-md-4 my-2">
<a href="#" class="btn btn-outline-warning w-100"><i class="fas fa-edit fa-lg text-light mr-2"></i>Post</a>
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

<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<!-- modal  -->



<!-- Modal -->
<div class="modal fade" id="createpostmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Post Here.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="create_post_config.php" method="POST" enctype="multipart/form-data" id="myform">
      <div class="form-group my-3">
      <label for="title">Post Title</label>
      <input type="text" class="form-control" name="post_title" autocomplete="off" required>
      </div>

      <div class="form-group my-3">
      <label for="title">Post Subject</label>
      <input type="text" class="form-control" name="post_subject" autocomplete="off" required>
      </div>

      <div class="form-group my-3">
      <label for="title">Post Category</label>
      <select name="post_cate" id="" class="form-control">
      <option value="">choose one..</option>
      <option value="html">html</option>
      <option value="php">php</option>
      <option value="javascript">javascript</option>
      <option value="other">other..</option>
      </select>
      </div>

      <div class="form-group my-3">
      <label for="title">Post image</label>
      <input type="file" class="form-control" name="post_img" autocomplete="off" required>
      </div>

      <div class="form-group my-3">
      <label for="title">Post content</label>
       <textarea name="post_content" id="" cols="30" rows="10" class="form-control" autocomplete="off" required></textarea>
      </div>


      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success" name="createpost" id="mysubmit">Create Post</button>
        </form><!-- end form -->
      </div><!-- end modal body -->
      </div>
  </div>
</div>



<!-- ennd modal  -->




<?php include("includes/footer.php");?>