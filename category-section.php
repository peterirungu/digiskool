<?php include('admin/connect.php'); ?>
<section class="bg-grey">
	<div id="services" class="container-fluid text-center">
    <h1>SERVICES</h1>
    <div class="alert alert-success">
      <strong>Select/Click on the school category you want...</strong>
    </div>
    <br> 
    <!-- this is where the categories are displayed on the section -->
    <div class="row">
        <?php
          $query = mysql_query("select * from category_tbl") or die(mysql_error());
          while ($row = mysql_fetch_array($query)) {
          $id = $row['category_id'];
        ?>
      <a  href="gen_profile.php">
      <div class="col-sm-3">
        <div class="panel panel-success">          
          <div class="panel-heading">
            <h3 class="panel-title"><b><?php echo $row['category_name']; ?></b></h3>
          </div>
          <div class="panel-body">
            <img class="img-thumbnail" style="height:150px" src="./admin/<?php echo $row['category_image'] ?>"alt="">
            <!-- <p> <?php echo $row['category_detail']; ?></p> --> 
          </div>           
        </div>
      </div> 
      </a>
      <?php } ?>
    </div> 
    <!-- end row -->  
  </div>
</section>