<nav class="navbar navbar-expand-md navbar-dark bg-transparent">
  <a class="navbar-brand" href="#">
  <img src="images/KUPALA LOGO-01.png" alt="" width="80px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Comments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">chart</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          user
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Messages</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Setting</a>
      </li>
    </ul>
   <ul class="navbar-nav">
   <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
        <img src="images/portfolio.jpg" alt="" width="40" class="img-fluid myuserpic">
        </a>
      </li>
      <a class="nav-link text-warning mt-2" href="#" tabindex="-1" aria-disabled="true">
            <?php echo $_SESSION['user'];?>
        </a>
      </li>
   </ul>
  </div>
</nav>