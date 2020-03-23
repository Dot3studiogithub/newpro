<?php include("includes/header.php");

?>

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link btn btn-outline-warning my-5 mr-5" href="index.php">LOGIN</a>
  </li>
 
</ul>

<div class="container">
<div class="row">
<div class="col-md-8 offset-md-2">

<div class="h1 text-light text-center my-5">REGISTER ACCOUNT</div>
<form action="admin_register_config.php" method="POST" >
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" autocomplete="off" name="admin_first_name" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" autocomplete="off" name="admin_last_name" required>
    </div>
  </div>

  <div class="row my-5">
    <div class="col">
      <input type="email" class="form-control" placeholder="Email" autocomplete="off" name="admin_email" required>
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="Mobile Number" autocomplete="off" name="admin_number" required>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="admin_password" required>
    </div>
    <div class="col">
      <input type="password" class="form-control" placeholder="Conform Password" autocomplete="off" name="admin_confirm_password" required>
    </div>
  </div>
  <div class="text-center">
  <input type="submit" class="btn btn-outline-primary my-5 w-50" value="REGISTER" name="submit">
  </div>
</form>
</div>
</div>
</div>























<?php include("includes/footer.php");?>