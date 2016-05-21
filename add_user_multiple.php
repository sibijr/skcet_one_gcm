<?php
require_once 'core/init.php';
require_once('includes/nav_ad_tu.php');
?>
<div class="container-fluid">
	
            <div class="row">
			<?php
					if(session::exists('format_err')){
						session::flash('format_err') ;
						echo '<div class="alert alert-danger fade in text-center"  id="phone_alert">
											<a href="#" class="close" data-dismiss="alert"  aria-label="close">&times;</a>
											<strong>Sorry!</strong> Please upload xls and xlsx format only!
						</div>';
					}
					
			?>
			<div class="col-md-2 aside margin-top" >
			<h3 class='header-bar gradient-form' style="margin:0">Navigate</h3>
			<div class="aside-links">
			<ul>
			<li>Add<ul>
			<li class="active"><a href="product_master.php">Single user</a></li>
			<li><a href="product_master_multiple.php">Multiple user</a></li>
			</ul>
			<li><a href="product_edit.php">Edit</a></li>
			</ul>
			</div>
			</div>
			<div class="col-md-6 col-md-offset-1 shadow-z-2 margin-top margin-bottom bg-elevate" >
			<?php if(session::exists('product')){
						session::flash('product') ;
						echo '<div class="alert alert-success fade in text-center"  id="phone_alert">
											<a href="#" class="close" data-dismiss="alert"  aria-label="close">&times;</a>
											<strong>Success</strong>Products has been added successfully!
						</div>';
					}?>
                    <p class="legend gradient-form">Multiple product</p>
                    <form class="form-horizontal" id="multi_user" action="add_user_excel.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="user-excel" class="col-sm-2 control-label">Excel Sheet</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="user-excel" name="fileToUpload" required/>
                    </div>
                    </div>
                    <div class="form-group col-sm-4 col-sm-offset-4">
                    <a class="btn btn-primary" href="excel/user.xlsx" download>Download sample</a>
                    </div>
                    <div class="col-sm-4 col-sm-offset-4 margin-bottom">
                    <input type="submit" class="btn btn-primary btn-block" value="upload"/></div>
					
					
                    </form>
             </div>
			</div>
			</div>