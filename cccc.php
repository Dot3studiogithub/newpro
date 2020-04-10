<?php
    $t = "SELECT * FROM create_post_table";
    $d = mysqli_query($config,$t);
    $total = mysqli_num_rows($d);
    $start = 0;
    $limit = 1;

    $page = ceil($total/$limit);
    if(isset($_GET['id']))
    {
      $id = $_GET['id'];
      $start = ($id-1)*$limit;
    }
    else{
      $id = 1;
    }
    
    
    $sql01 = "SELECT * FROM create_post_table LIMIT $start,$limit";
    $data = mysqli_query($config,$sql01);
    ?>


<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
   
    <?php
    
    
    if($id > 1)
    {
      ?>
         <li class="page-item">
      <a class="page-link" href="?id=<?php echo ($id-1);?>">Previous</a>
    </li>
      <?php
    }
    ?>

   <?php
   for($i=1; $i<=$page;$i++)
   {
     ?>
       <li class="page-item">
       <a class="page-link" href="?id=<?php echo $i;?>"><?php echo $i;?></a>
       </li>

     <?php
   }
   
   ?>
    
    <?php
    if($id!=$page)
    {
      ?>
<li class="page-item">
      <a class="page-link" href="?id=<?php echo ($id+1);?>">Next</a>
    </li>
           
      <?php
    }
    
    ?>
    
    
  </ul>
</nav>