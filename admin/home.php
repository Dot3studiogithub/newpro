<?php 

include("includes/header.php");

if(!isset($_SESSION['user']))
{
    
    header("Location: index.php");

}

?>

<?php include("includes/navbar.php");?>
<div class="container-fluid bg-secondary">
<div class="row d-flex align-items-center">
<div class="col-md-12">
<div class="h3 p-2 text-light"><i class="fas fa-cog text-light mr-2"></i>Dashboard <small class="h6">manage your site </small></div>
</div>
</div>
</div><!-- end banner -->

<!-- start cards --->
<div class="container-fluid my-5">
<div class="row">
<div class="col-md-3 p-3">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<i class="fas fa-users fa-3x text-primary"></i>
<div>
<div class="h4 text-right">50000</div>
<div class="h6 text-right">total visitors</div>
</div>
</div>
</div>
</div><!-- end card-->
</div><!-- end card1 -->


<div class="col-md-3 p-3">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<i class="fas fa-file-alt fa-3x text-warning"></i>
<div>
<div class="h4 text-right">2000</div>
<div class="h6 text-right">total Posts</div>
</div>
</div>
</div>
</div><!-- end card-->
</div><!-- end card2 -->

<div class="col-md-3 p-3">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<i class="fas fa-comments fa-3x text-danger"></i>
<div>
<div class="h4 text-right">3000</div>
<div class="h6 text-right">total comments</div>
</div>
</div>
</div>
</div><!-- end card-->
</div><!-- end card3 -->

<div class="col-md-3 p-3">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<i class="fas fa-chart-bar fa-3x text-info"></i>
<div>
<div class="h4 text-right">60</div>
<div class="h6 text-right">total projects</div>
</div>
</div>
</div>
</div><!-- end card-->
</div><!-- end card4 -->

</div>
</div>
<!-- end cards --->

<!--chart start -->
<div class="container-fluid my-5">
<div class="row">
<div class="col-md-8 offset-md-2">
<canvas id="myChart"></canvas>
</div>
</div>

</div>
<!--chart end -->


<!-- recent posts and comments start -->
<div class="container-fluid my-5">
<div class="row">
<div class="col-md-6">
<div class="card ">
<div class="card-header text-center border-0">recent posts</div>
<div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">SR</th>
      <th scope="col">Title</th>
      <th scope="col">category</th>
      <th scope="col">thumbnails</th>
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

<div class="col-md-6">
<div class="card ">
<div class="card-header text-center border-0">recent comments</div>
<div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">SR</th>
      <th scope="col">user</th>
      <th scope="col">comment</th>
      <th scope="col">time</th>
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
</div>
</div>

</div>
<!--recent posts and comments end -->






<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2018', '2019', '2020', '2021', '2022', '2023'],
        datasets: [{
            label: 'progress report',
            data: [2, 19, 13, 0, 0, 0],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<?php include("includes/footer.php");?>






