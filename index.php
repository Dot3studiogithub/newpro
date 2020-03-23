<?php $page='home';
 include("includes/header.php");?>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <a class="navbar-brand" href="index.php">
  <img src="images/KUPALA LOGO-01.PNG" alt="" width="120px">
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
      
      <li class="nav-item">
        <a class="nav-link " href="#">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">CONTACT US</a>
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
      <div class="col-md-3 my-5">
      <div class="card" style="width: 18rem;">
  <img src="" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
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