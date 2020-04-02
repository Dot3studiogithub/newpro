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
      <li class="nav-item">
        <a class="nav-link " href="#">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-outline-success" href="#">CONTACT US</a>
      </li>
    </ul>
    
  </div>
</nav>