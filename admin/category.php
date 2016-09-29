<?php
include('session.php');
include('header.php');
?>
<section>
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->        
        <div class="alert alert-info">
          <strong><i class="icon-user icon-large"></i><span class="glyphicon glyphicon-th-large"></span>&nbsp;Categories Table</strong>
        </div>
        <!-- /.row -->
        <section class="content">
        <h1 class="page-header">
          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Add Category
          </button>
        </h1>
        <?php include ('modal_add_product.php');?>
        <div class="hero-unit-table">   
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">    
          <thead>
          <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php include ('connect.php');
          $query = mysql_query("select * from category_tbl") or die(mysql_error());
          while ($row = mysql_fetch_array($query)) {
          $id = $row['category_id'];
          ?>
          <tr class="warning">
          <td><?php echo $row['category_name']; ?></td> 
          <td><?php echo $row['category_detail']; ?></td>           
          <td width="50" align="center"><img src="<?php echo $row['category_image']; ?>" class="img-rounded" width="50" height="40"></td> 
          <td width="160">
          <a href="#delete_category<?php echo $id; ?>" role="button"  data-target = "#delete_category<?php echo $id;?>"data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
          <a href="edit_category.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
          </td>
          <!-- product delete modal -->
          <?php include ('delete_category_modal.php');?>
          <!-- end delete modal -->
          </tr>
          <?php } ?>
          </tbody>
        </table>
        </div>   
        <!-- /.row -->
        </section>
        <!-- /.content -->
        <!-- /.row -->  
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include ('script.php');?>
</section>
<?php
include('footer.php');
?>