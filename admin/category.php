<?php include ('session.php');?>	
<?php include ('header.php');?>	
<body>
	<div id="wrapper">
		<?php include ('top_navbar.php');?>
		<!--/. NAV TOP  -->
		<?php include ('nav_sidebar.php');?>
		<!-- /. NAV SIDE  -->
		<div id="page-wrapper" >
			<div id="page-inner">
				<div class="row">
				<div class="col-md-12">
				    <div class="alert alert-info">
					   <strong><i class="icon-user icon-large"></i><span class="glyphicon glyphicon-th-large"></span>&nbsp;Categories Table</strong>
					</div>
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
					<a href="#delete_product<?php echo $id; ?>" role="button"  data-target = "#delete_product<?php echo $id;?>"data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
					<a href="edit_product.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
					</td>
					<!-- product delete modal -->
					<?php include ('delete_product_modal.php');?>
					<!-- end delete modal -->
					</tr>
					<?php } ?>
					</tbody>
				</table>
				</div>
				</div>
				</div> 
			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->
	<!-- JS Scripts-->
	<!-- jQuery Js -->
	<?php include ('script.php');?>
</body>
</html>
