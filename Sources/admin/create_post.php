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
	                    	<h1 class="main-title float-left pt-1">Create new post!</h1>
	                        <ul class="breadcrumb float-right">
	                            <li class="">
	                                <a href="#" class="btn btnColorPost px-4">Save</a>
	                            </li>
	                        </ul>
	                        <div class="clearfix"></div>
	                    </div>
	                </div>
	            </div>

	            <div class="row pb-4">
	            	<div class="col-md-6 col-sm-8 offset-sm-2 col-8 offset-2 text-center">
	                    <select class="form-control text-center">
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
	            	<div class="col-md-12  col-sm-8 offset-sm-2 col-8 offset-2 text-center">
	                    <input type="text" class="form-control" id="" placeholder="Title...">
	            	</div>
	            </div>

	            <div class="row pb-4">
	            	<div class="col-md-12 col-sm-8 offset-sm-2 col-8 offset-2 text-center">
	                    <input type="text" class="form-control" id="" placeholder="Youtube...">
	            	</div>
	            </div>

	            <div class="row pb-4">
	            	<div class="col-md-12 col-sm-8 offset-sm-2 col-8 offset-2 text-center">
	                    <input type="text" class="form-control" id="" placeholder="Short content...">
	            	</div>
	            </div>

	            <div class="row pb-4">
	            	<div class="col-md-12  col-sm-8 offset-sm-2 col-8 offset-2">
	                    <textarea id="contentPost">
						</textarea>
	            	</div>
	            </div>

	            <div class="row">
					<div class="col-md-12  col-sm-8 offset-sm-2 col-8 offset-2 text-center">
						<span class="text-primary">
							Image for post...
							<input type="file" class="mb-2" onchange="readURL(this);" />
						</span>
    					<img id="imgPost" src="" class="hide" alt="your image" />
	            	</div>
	            </div>

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
                    .width(520)
                    .height(400);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
<script type="text/javascript" src="../js/createPostPresenter.js"></script>