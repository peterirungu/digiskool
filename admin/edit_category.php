<?php include ('session.php');?>	
<?php
include('header.php');
$get_id = $_GET['id'];
?>
<body>

<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div class="row">
<div class="col-md-5 well">
<div class="hero-unit-table">   
<div class="hero-unit-table">   
<?php 
include ('connect.php');
$query = mysql_query("select * from category_tbl where category_id='$get_id'") or die(mysql_error());
$row = mysql_fetch_array($query);
?>

<form class="form-horizontal" method="post" enctype="multipart/form-data">
<div class="alert alert-info"><strong>Edit Category</strong> </div>
<hr>
<div class="control-group">
<label class="control-label" for="inputEmail">Category Name</label>
<div class="controls">
<input type="text" name="category_name" id="inputEmail" class = "form-control" value="<?php echo $row['category_name']; ?>">
</div>
</div>


<div class="control-group">
<label class="control-label" for="inputPassword">Category Description</label>
<div class="controls">
<input type="text" name="category_detail" class = "form-control"  value="<?php echo $row['category_detail']; ?>">
</div>
</div>
<div class="control-group">
<label class="control-label" for="input01">Image:</label>
<div class="controls">
<input type="file" name="category_image"> 
</div>
</div>

<hr/>

<div class="control-group">
<div class="controls">

<button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
<span><a href = "category.php" class = "btn btn-danger"> Back</a></span>
</div>
</div>
</form>

<?php
if (isset($_POST['update'])) {

$category_name = $_POST['category_name'];
$category_detail = $_POST['category_detail'];
$category_image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image = addslashes($_FILES['image']['name']);
$image_size = getimagesize($_FILES['image']['tmp_name']);
//
move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
$location = "upload/" . $_FILES["image"]["name"];

mysql_query("update category_tbl set category_name='$category_name ',category_detail='$category_detail',category_image='$location' where category_id='$get_id'") or die(mysql_query());
header('location:category.php');
}
?>


</div>
</div>
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
