
<nav class="navbar navbar-expand-md navbar-dark bg-transparent">
  <a class="navbar-brand" href="home.php">
  <img src="images/my-new-logo.png" alt="" width="130px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item <?php if($page =='Dashboard'){echo 'active';}?>">
        <a class="nav-link neww-link" href="home.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if($page =='post'){echo 'active';}?>">
        <a class="nav-link neww-link" href="post.php">Post</a>
      </li>
      <li class="nav-item <?php if($page =='comments'){echo 'active';}?>">
        <a class="nav-link neww-link" href="comments.php">Comments</a>
      </li>
      <li class="nav-item <?php if($page =='post'){echo 'active';}?>">
        <a class="nav-link neww-link" href="#">chart</a>
      </li>
      <li class="nav-item dropdown <?php if($page =='post'){echo 'active';}?>">
        <a class="nav-link neww-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          user
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      <li class="nav-item <?php if($page =='post'){echo 'active';}?>">
        <a class="nav-link neww-link" href="#">Setting</a>
      </li>
    </ul>
   <ul class="navbar-nav mr-3">
   <li class="nav-item dropdown">
   <a href="" class="nav-link neww-link mt-2" data-toggle="dropdown" id="messagedropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-envelope fa-lg"></i></a>
   <div class="dropdown-menu" aria-labelledby="messagedropdown">
          <div class="text-center">
          <div class="message-heading">Messages <span class="text-primary">19</span></div>
          </div>
          <div class="message-body mt-3">
          <?php
          
          $sql = "SELECT * FROM contact_message";
          $data = mysqli_query($config,$sql);
          
          
          ?>
          <ul class="list-group text-center">
          <?php
          while($re = mysqli_fetch_assoc($data))
          {
            ?>
            <li class="list-group-item"><?php echo $re['cmessage'];?> <span>by</span><span class="text-primary ml-2"><?php echo $re['cname'];?></span></li>
            <?php
          }
          
          ?>
  
  
</ul>
          </div>
   </li>
   <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
        <img src="images/portfolio.jpg" alt="" width="40" class="img-fluid myuserpic">
        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link text-warning mt-2" href="#" tabindex="-1" aria-disabled="true">
            <?php echo $_SESSION['user'];?>
        </a>
      </li>
   </ul>
  </div>
</nav>


<!-- Modal -->
<!-- <div class="modal fade" id="messagemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->