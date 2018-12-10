<?php 
	require"menu_header.php"
 ?>

<div class="container">
	<div class="row mt-6"></div>
	<p class="text-center text-light animated fadeInDown profile-thanks">MVTech thank Vinh!</p>
	<p class="text-info mt-5 pt-5 animated fadeInUp">Account management</p>
	<table class="table table-dark table-hover animated fadeInUp">
    	<tbody>
      		<tr>
    			<td>Name</td>
        		<td id="nameProfile" data-id="<?php echo $user->username ?>"> <?php echo $user->username ?> </td>
        		<td class="text-right edit-account" id="editNameProfile"><i class="fa fa-edit" title="Edit"></i></td>
      		</tr>
      		<tr>
        		<td>Email</td>
        		<td id="emailProfile"> <?php echo $user->email ?> </td>
        		<td class="text-right edit-account"><i class="text-danger fa fa-exclamation-circle" title="You can't change."></i></td>
      		</tr>
      		<tr>
        		<td>Account</td>
        		<td id="accountProfile"> <?php echo $user->account ?> </td>
        		<td class="text-right edit-account"><i class="text-danger fa fa-exclamation-circle" title="You can't change."></i></td>
      		</tr>
      		<tr>
        		<td>Password</td>
        		<td id="passwordProfile"><i class="fa fa-warning text-warning"></i> For security reasons, we can not show your password.</td>
        		<td class="text-right edit-account" id="editPasswordProfile"><i class="fa fa-edit" title="Edit"></i></td>
      		</tr>
    	</tbody>
  	</table>
  	<p class="text-info mt-5 pt-5 animated fadeInUp">Training results</p>
  	<div class="row animated fadeInUp">
  		<div class="col-12 col-sm-12 col-md-4 offset-md-0">
  			<table class="table table-dark table-hover">
		    	<tbody class="text-center">
		      		<tr>
		    			<td>Level 1</td>
		      		</tr>
		      		<tr>
		        		<td>Day number: 12</td>
		      		</tr>
		      		<tr>
		        		<td>Day trained: 6</td>
		      		</tr>
		      		<tr>
		        		<td><a href="" class="btn btn-primary">Continue training</a></td>
		      		</tr>
		    	</tbody>
  			</table>
  		</div>
  		<div class="col-12 col-sm-12 col-md-4 offset-md-0">
  			<table class="table table-dark table-hover">
		    	<tbody class="text-center">
		      		<tr>
		    			<td>Level 2</td>
		      		</tr>
		      		<tr>
		        		<td>Day number: 12</td>
		      		</tr>
		      		<tr>
		        		<td>Day trained: 6</td>
		      		</tr>
		      		<tr>
		        		<td><a href="" class="btn btn-primary">Continue training</a></td>
		      		</tr>
		    	</tbody>
  			</table>
  		</div>
  		<div class="col-12 col-sm-12 col-md-4 offset-md-0">
  			<table class="table table-dark table-hover">
		    	<tbody class="text-center">
		      		<tr>
		    			<td>Level 3</td>
		      		</tr>
		      		<tr>
		        		<td>Day number: 12</td>
		      		</tr>
		      		<tr>
		        		<td>Day trained: 6</td>
		      		</tr>
		      		<tr>
		        		<td><a href="" class="btn btn-primary">Continue training</a></td>
		      		</tr>
		    	</tbody>
  			</table>
  		</div>
  	</div>
</div>

 <?php 
	require"footer.php"
 ?>

 <script type="text/javascript" src="js/profilePresenter.js"></script>