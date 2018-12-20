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
												<h1 class="main-title float-left">My Profile</h1>
												<ol class="breadcrumb float-right">
													<li class="breadcrumb-item">Home</li>
													<li class="breadcrumb-item active">Profile</li>
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
											<div class="card-header">
												<h3><i class="fa fa-user"></i> Profile details</h3>								
											</div>
												
											<div class="card-body">
												
												
												<form action="#" method="post" enctype="multipart/form-data">
								
												<div class="row">	
												
												<div class="col-lg-9 col-xl-9">
													
													<div class="row">				
														<div class="col-lg-6">
														<div class="form-group">
														<label>Full name (required)</label>
														<input class="form-control" name="name" type="text" value="Administrator" required />
														</div>
														</div>

														<div class="col-lg-6">
														<div class="form-group">
														<label>Valid Email (required)</label>
														<input class="form-control" name="email" type="email" value="office@website.com" required />
														</div>
														</div>  
													</div>
													
													<div class="row">				
														<div class="col-lg-6">
														<div class="form-group">
														<label>Password (leave empty not to change)</label>
														<input class="form-control" name="password" type="password" value="" />
														</div>
														</div>              			                                
														
														<div class="col-lg-6">
														<div class="form-group">
														<label>Skype</label>
														<input class="form-control" name="skype" type="text" value="skypeid" />
														</div>
														</div>   
													</div>
													
													<div class="row">
														<div class="col-lg-12">
														<button type="button" class="btn btn-primary">Edit profile</button>
														</div>
													</div>
												
												</div>
												
												
												
												<div class="col-lg-3 col-xl-3 border-left">
													<b>Latest activity</b>: Dec 06 2017, 22:23	
													<br />
													<b>Register date: </b>: Nov 24 2017, 20:32	
													<br />
													<b>Register IP: </b>: 123.456.789
													
													<div class="m-b-10"></div>
													
													<div id="avatar_image">
														<img alt="image" style="max-width:100px; height:auto;" src="assets/images/avatars/admin.png" />
														<br />
														<i class="fa fa-trash-o fa-fw"></i> <a class="delete_image" href="#">Remove avatar</a>
																	
													</div>  
													<div id="image_deleted_text"></div>                      

													
													<div class="m-b-10"></div>
													
													<div class="form-group">
													<label>Change avatar</label> 
													<input type="file" name="image" class="form-control">
													</div>
													
												</div>
												</div>								
												
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

<!-- END Java Script for this page -->

</body>
</html>