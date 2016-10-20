<?php include('admin/connect.php'); ?>
<section class="container-fluid bg-grey">
	<div id="services" class="row" style="padding: 40px 8px;">    
    <div class="alert alert-success text-center">
      <h1>SERVICES</h1>
      <strong>Select/Click on the school you want and view its profile...</strong>
    </div>    
    <div class="row">
      <div class="col-lg-3" style="background-color:#8CDD81; border-radius:20px;">
        <div class="alert alert-success text-center">
          <strong><span class="glyphicon glyphicon-filter"></span>Filter Schools Here..</strong>
        </div>
        <div class="form-group">
            <label>Select County</label>
            <select class="form-control">               
              <option><selected>Select County Here...</selected></option>
              <option>County 1</option>
              <option>County 2</option>
              <option>County 3</option>
            </select>
        </div>
           
        <div class="form-group">
          <label>Select Constituency</label>
          <select class="form-control">
            <option><selected>Select Constituency Here...</selected></option>
            <option>Constituency 1</option>
            <option>Constituency 2</option>
            <option>Constituency 3</option>
          </select>
        </div>

        <div class="form-group">
          <label>Select Category</label>
          <select class="form-control">
            <option><selected>Select Category Here...</selected></option>
            <option>Private Schools</option>
            <option>Public Schools</option>
            <option>Special Schools</option>
          </select>
        </div> 

        <div class="form-group">
          <label>Choose Type</label>
            <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Boarding School
            </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Day Schools
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Others
                </label>
            </div>
        </div>
        <hr style="background: 2px solid :#8CDD81;"> 
        <div>
          <label>Enter the School Code Here <span class="fa fa-arrow-down" aria-hidden="true"></span> 
          </label>
          <div class="input-group input-group-sm">
              <input type="text" class="form-control">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
            </div>
        </div> 
        </br></br>           
      </div>
      <div class="col-lg-9">
       <!-- this is where the categories are displayed on the section -->
     <!--   ======================================================================================================================================================================================================== -->
        <div class="row text-center">
          <?php
            $num_rec_per_page=12;
            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
            $start_from = ($page-1) * $num_rec_per_page; 
            $sql = "SELECT * FROM category_tbl LIMIT $start_from, $num_rec_per_page"; 
            $rs_result = mysql_query ($sql); //run the query
            ?> 

            <?php 
            while ($row = mysql_fetch_assoc($rs_result)) { 
            ?> 
                       <a  href="gen_profile.php">
                      <div class="col-sm-3">
                        <div class="panel panel-primary">          
                          <div class="panel-heading">
                            <h3 class="panel-title"><b><?php echo $row['category_name']; ?></b></h3>
                          </div>
                          <div class="panel-body">
                            <img style="height:80px; width:150px;" src="./admin/<?php echo $row['category_image'] ?>"alt="">
                            <!-- <p> <?php echo $row['category_detail']; ?></p> --> 
                          </div>           
                        </div>
                      </div> 
                      </a>
            <?php 
            }; 
            ?> 
            </div> 
            <?php 
            $sql = "SELECT * FROM category_tbl"; 
            $rs_result = mysql_query($sql); //run the query
            $total_records = mysql_num_rows($rs_result);  //count number of records
            $total_pages = ceil($total_records / $num_rec_per_page); 

            echo "<a href='index.php#services?page=1'>".'prev'."</a> "; // Goto 1st page  

            for ($i=1; $i<=$total_pages; $i++) { 
              echo "<a href='index.php#services?page=".$i."'>".$i."</a> "; 
            }; 
            echo "<a href='index.php#services?page=$total_pages'>".'next'."</a> "; // Goto last page
            ?>

        
      <!--   =========================================================================================================================================================================== -->
        <!-- end row --> 
      </div>
    </div>     
  </div>
  
</section>