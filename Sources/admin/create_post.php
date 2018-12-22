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
	                    	<h1 class="main-title float-left pt-1">
	                    		<i class="fa fa-fw fa-newspaper-o"></i> Create new post!
	                    	</h1>
	                        <ul class="breadcrumb float-right">
	                            <li class="">
	                                <a href="#" class="btn btnColorPost px-4">Save</a>
	                            </li>
	                        </ul>
	                        <div class="clearfix"></div>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-12 bg-white"> <!-- START col-md-8 panel form create -->

		            <div class="row pb-4 pt-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label for="">Title</label>
		                    <input type="text" class="form-control" id="" placeholder="Title...">
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label for="">Link youtube</label>
		                    <input type="text" class="form-control" id="" placeholder="Youtube...">
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label for="">Short content</label>
		                    <input type="text" class="form-control" id="" placeholder="Short content...">
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label for="">Content post</label>
		                    <textarea id="contentPost">
							</textarea>
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12">
		            		<label for="">Seleect a category</label>
		                    <select class="form-control text-center">
		                        <option value="all" selected="">--- Select a category ---</option>
		                        <option value="bicep">Bicep</option>
		                        <option value="tricep">Tricep</option>
		                        <option value="forearms">Forearms</option>
		                        <option value="shoulder">Shoulder</option>
		                        <option value="abs">Abs</option>
		                        <option value="cardio">Cardio</option>
		                        <option value="chest">Chest</option>
		                        <option value="leg">Leg</option>
		                        <option value="back">Back</option>
		                    </select>
		            	</div>
		            </div>

		            <div class="row pb-4">
						<div class="col-md-12 col-sm-12 col-12">
							<span class="text-primary">
								Image for post...
								<input type="file" class="mb-2" onchange="readURL(this);" />
							</span>
	    					<img id="imgPost" src="" class="hide" alt="your image" />
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



<script type="text/javascript">

	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            $("#imgPost").removeClass("hide");

            reader.onload = function (e) {
                $('#imgPost')
                    .attr('src', e.target.result)
                    .width(690)
                    .height(400);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
<script type="text/javascript" src="../js/createPostPresenter.js"></script>