<?php $page='about us';
include("includes/header.php");
include("includes/navbar.php");
?>


<section class="about-section">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-6">
<div class="text-center">
<div class="display-4 text-secondary">ABOUT ME</div>
</div>
</div><!-- END COL-->

<div class="col-lg-7 col-md-6 my-3">
<div class="text-center">
<div class="h6 text-secondary text-justify text-light">
     WE ARE <span class="text-warning">DOT3STUDIO</span> ETABLISHED 2019 IN INDIA AND WE ARE A TEAM OF WEB DEVELOPERS AND WEB DESIGNER. WE ARE ALWAYS LEARN HOW TO CREATE BEAUTIFUL WEB LAYOUTS AND DEVELOPE IT WITH YOUR 
VALUEABLE ADVICES WITH HAPPYNESS.
</div>
</div>
</div><!-- END COL-->
</div>
</div>
</section>

<section class="skillsection my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="h1 text-center text-secondary text-uppercase">my skills</div>
                
                <div class="my-4">
                    <label for="" class="text-success">HTML</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success progress-bar-animated myhtml " role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                </div>

                <div class="my-4">
                    <label for="" class="text-warning">CSS</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated mycss" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90                          %</div>
                    </div>
                </div>

                <div class="my-4">
                    <label for="" class="text-info">JAVASCRIPT</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated myjs" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>

                <div class="my-4">
                    <label for="" class="text-danger">PHP</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated myphp" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>


<script>
$(document).ready(function(){
$('.myhtml').animate({width: '95%'}, 200);
$('.mycss').animate({width: '90%'}, 200);
$('.myjs').animate({width: '75%'}, 200);
$('.myphp').animate({width: '65%'}, 200);

});

</script>

<?php include("includes/footer.php");?>