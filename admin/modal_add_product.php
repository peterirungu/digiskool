<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">              
                <div class="alert alert-info"><strong><center>Add New Category </center></strong></div>
            </div>
            <div class="modal-body">
                <form  method="post" enctype="multipart/form-data">

                      <hr>

                     <div class="control-group">
                               <label class="control-label" for="inputEmail">Category Name:</label>
                               <input type="text" name="name" class = "form-control" placeholder="Name">
                              
                     </div>

                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Description:</label>
                        <div class="controls">
                            <textarea cols="10" rows="5" type="text" class = "form-control"  name="description"  placeholder="Description" ></textarea> 
                        </div>
                    </div>                       

                    <div class="control-group">
                        <label class="control-label" for="input01">Image:</label>
                        <div class="controls">
                            <input type="file" name="image"> 	
                        </div>
                    </div>

                    <div class = "modal-footer">
                    	<button name = "addCategory" class="btn btn-primary">Save</button>
                    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                	   </div> 
                    </div>    	
                </form>  
    	  
            	<?php include ('connect.php');
                    if (isset($_POST['addCategory'])) {

                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    //image
                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $image_name = addslashes($_FILES['image']['name']);
                    $image_size = getimagesize($_FILES['image']['tmp_name']);
                    //
                    move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                    $location = "upload/" . $_FILES["image"]["name"];


                    mysql_query("insert into category_tbl (category_name,category_detail,category_image)
                    values ('$name','$description','$location')
                    ") or die(mysql_error());

                    header('location:product.php');
                    }
                ?>	  
    </div>
</div>