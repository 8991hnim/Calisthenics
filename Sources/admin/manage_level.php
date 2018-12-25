
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
							<h1 class="main-title float-left pb-3" id="levelName">Level</h1>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

                <div class="row py-3">
	                <div class="col-md-4">
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
	                    	<option value="all" selected>--- Select day ---</option>
	                    </select>
	                </div>
	                <div class="col-md-8">
	                    <input type="text" id="input-search" class="form-control" placeholder="Search...">
	                </div>
	            </div>
				
	            <div class="row">
	                <div class="col-md-12">
	                    <table class="table table-light table-bordered table-hover" id="table">
	                        <thead class="text-center headPost">
	                            <tr>
	                                <th>Day</th>
	                                <th>Exercise name</th>
	                                <th>Link youtube</th>
	                                <th>Set</th>
	                                <th>Rep</th>
	                                <th>Break time</th>
	                                <th></th>
	                            </tr>
	                        </thead>
	                        <tbody class="text-center">
	                            <tr>
	                                <td>3</td>
	                                <td>Push up</td>
	                                <td>
	                                	<a target="_blank" href="https://www.youtube.com/embed/Q5HpzxnNtvc">https://www.youtube.com/embed/Q5HpzxnNtvc</a>
	                                </td>
	                                <td>25</td>
	                                <td>3</td>
	                                <td>45s</td>
	                                <td class="width2btn">
	                                    <button class="btn btn-info" id="btnEditPost">
	                                        <i class="fa fa-pencil"></i>
	                                    </button>
	                                    <button class="btn btn-danger" id="btnDeletePost">
	                                        <i class="fa fa-trash-o"></i>
	                                    </button>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </div>                    
	            </div>

	            <div class="row float-right">
	                <div class="col-md-12" id="pag"></div>
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
