<?php
    
    require"layout_header.php";

?>


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">

				

				<div class="row">
	                <div class="col-md-12 text-right">
	                    <div class="breadcrumb-holder">
	                    	<h1 class="main-title float-left pt-0 pb-3">
	                    		<i class="fa fa-fw fa-rocket"></i> Add exercise to level 1
	                    	</h1>
	                        <div class="clearfix"></div>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-12 bg-white"> <!-- START col-md-8 panel form create -->

		            <div class="row pt-4 pb-4">
		            	<div class="col-md-12 col-sm-12 col-12">
		            		<label class="text-primary">Select day</label>
		                    <select class="form-control">
		                        <option value="">1</option>
		                        <option value="">2</option>
		                        <option value="">3</option>
		                        <option value="">4</option>
		                        <option value="">5</option>
		                        <option value="">6</option>
		                        <option value="">7</option>
		                        <option value="">8</option>
		                        <option value="">9</option>
		                        <option value="">10</option>
		                        <option value="">11</option>
		                        <option value="">12</option>
		                    </select>
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12">
		            		<label class="text-primary">Select exercise</label>
		                    <select class="form-control">
		                        <option value="">Push Up</option>
		                    </select>
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label class="text-primary">Set</label>
		                    <input type="text" class="form-control" placeholder="Set..." id="">
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label class="text-primary">Rep</label>
		                    <input type="text" class="form-control" placeholder="Rep..." id="">
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label class="text-primary">Break time</label>
		                    <input type="text" class="form-control" placeholder="Break time..." id="">
		            	</div>
		            </div>

		            <!-- <div class="col-md-12 border-form"></div> -->

		            <div class="row pb-2 pt-2 text-right">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<button class="btn btn-secondary" id="btnCancelLevel">Cancel</button>
		            		<button class="btn btnColorLevel px-4 text-white">Save</button>
		            	</div>
		            </div>

	        	</div> <!-- END col-md-8 panel form create -->



			
            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
<?php
    
    require"layout_footer.php";

?>


