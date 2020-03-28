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
<a href="#" class="btn btn-outline-primary w-100"><i class="fas fa-edit fa-lg text-light mr-2"></i>Post</a>
</div><!-- end btn 2 -->

<div class="col-md-4 my-2">
<a href="#" class="btn btn-outline-primary w-100"><i class="fas fa-trash fa-lg text-light mr-2"></i>Post</a>
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


<div class="modal fade" id="createpostmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">Create post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
      <form action="" method="" enctype="multipart/form-data">
      <div class="form-row">
      <div class="form-group col-md-6">
      <input type="text" class="form-control" name="writeTitle"  placeholder="Title" autocomplete="" required>
      </div>
      <div class="form-group col-md-6">
      <input type="text" class="form-control" name="writeSubject"  placeholder="Subject" autocomplete="" required>
      </div>

      <div class="form-group col-md-6">
      <select id="postCategory" class="form-control" name="selectCategory">
        <option>choose..</option>
        <option>html project</option>
        <option>php project</option>
        <option>javascript projects</option>
        <option>Other..</option>
      </select>
      </div>

      <div class="form-group col-md-6">
      <input type="file" class="form-control" autocomplete="off" required name="selectfile">
      </div>
      </div>
      <div class="form-group col-md-12">
      <textarea name="" id="" cols="30" rows="10" class="form-control" name="writepost"></textarea>
      </div>
      </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times mr-2 fa-lg text-light"></i>Cencel</button>
        <button type="button" class="btn btn-primary">Create Post</button>
      </div>
    </div>
  </div>
</div>



<!-- ennd modal  -->


<?php include("includes/footer.php");?>