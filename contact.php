<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<div class="container-fluid my-5">
<div class="row">
<div class="col-md-8 offset-md-2 my-5 bg-light mainbox">
<div class="text-center bg-light topicon">
<img src="images/typing.gif" alt="" width="60px" height="60px" class="mt-4">
</div>
<div class="h1 text-center text-primary contformheading">Drop Us A Message</div>
<form action="contact_config.php" method="POST" class="mycontform">
<div class="form-row">
<div class="col-md-6">
<input type="text" name="cname" class="form-control mb-3" placeholder="* Name" required>
<input type="email" name="cemail" class="form-control mb-3" placeholder="* Email" required>
<input type="text" name="cnumber" class="form-control mb-3" placeholder="* Contact No" required>
<button type="submit" name="send" class="btn btn-primary my-3">Sand Message</button>
</div>
<div class="col-md-6">
    <textarea name="cmsg" id="" class="form-control mb-5" cols="30" rows="10" placeholder="* Message"></textarea>
</div>
</div>
</form>
</div>
</div>
</div>























<?php include("includes/footer.php")?>