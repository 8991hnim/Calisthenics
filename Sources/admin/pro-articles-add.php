<?php
    
    require"layout_header.php";

?>


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">

					
						<div class="row">
							<div class="col-xl-12">
								<div class="breadcrumb-holder">
									<h1 class="main-title float-left">Add new article</h1>
									<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Home</li>
									<li class="breadcrumb-item">Articles</li>
									<li class="breadcrumb-item active">Add article</li>
									</ol>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<!-- end row -->

							
						<div class="alert alert-danger" role="alert">
						<h4 class="alert-heading">Important!</h4>
						<p>This section is available in Pike Admin PRO version.</p>
						<p><b>Save over 50 hours of development with our Pro Framework: Registration / Login / Users Management, CMS, Front-End Template (who will load contend added in admin area and saved in MySQL database), Contact Messages Management, manage Website Settings and many more, at an incredible price!</b></p>
						<p>Read more about all PRO features here: <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro"><b>Pike Admin PRO features</b></a></p>
						</div>
							
							
						<div class="row">
							
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
								
								<div class="card mb-3">
										
									<div class="card-body">
								
										<form action="#" method="post" enctype="multipart/form-data">					
										<div class="row">
									
											<div class="form-group col-xl-9 col-md-8 col-sm-12">
												<div class="form-group">
												<label>Article title</label>
												<input class="form-control" name="title" type="text" required>
												</div>
												
												<div class="form-group">
												<label>Article content</label>
												<textarea rows="3" class="form-control editor" name="content"></textarea>
												</div>
												
												<div class="form-group">
												<label>Thumbnail image</label><br />
												<input type="file" name="image">
												</div>
												
												<div class="form-group">
												<button type="button" class="btn btn-primary">Add article</button>
												</div>
											</div>
											
											<div class="form-group col-xl-3 col-md-4 col-sm-12 border-left">
												<div class="form-group">
												<label>Meta title</label>
												<input type="text" class="form-control" name="meta_title">    
												</div>

												<div class="form-group">
												<label>Meta description</label>
												<input type="text" class="form-control" name="meta_description">    
												</div>
												
												<div class="form-group">
												<label>Tags</label>
												<input type="text" class="form-control" name="keywords" id="tags" value="">    
												</div>
												
												<div class="form-group">
													<label>Article status</label>
													<select name="status" class="form-control">
													<option value="active">Active (published)</option>
													<option value="draft">Save draft</option>
													<option value="inactive">Inactive</option>
													</select>
												</div>
												
												<div class="form-group">
													<label>Select category</label>
													<select name="categ_id" class="form-control" required>
													<option value="">- select -</option>
													<option value="10">Blog</option>
													<option value="6">News</option>
													</select>
												</div>
												
											</div>
									
											</div><!-- end row -->	
										</form>
								
									</div>	
									<!-- end card-body -->								
								
								</div>
							<!-- end card -->					

							</div>
							<!-- end col -->	
														
						</div>
						<!-- end row -->	



            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">Your Website</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
		</span>
	</footer>

</div>
<!-- END main -->

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
<script src="assets/plugins/trumbowyg/trumbowyg.min.js"></script>
<script src="assets/plugins/trumbowyg/plugins/upload/trumbowyg.upload.js"></script>
<script>
$(document).ready(function () {
    'use strict';
	$('.editor').trumbowyg();	
}); 
</script>
<!-- END Java Script for this page -->

</body>
</html>