
$(document).ready(function(){

	var name = $('#nameProfile').attr('data-id');
	var email = $('#emailProfile').attr('data-id');
	var account = $('#accountProfile').attr('data-id');

	$('#editNameProfile').click(function() {
		$('#nameProfile').html('<input type="text" value="'+name+'" class="form-control text-center" id="txtNameProfile">');
		$('#editNameProfile').html('<button class="btn btn-success" id="btnSaveProfile">Save changes</button>');
	});

	$('#editEmailProfile').click(function() {
		$('#emailProfile').html('<input type="text" value="'+email+'" class="form-control text-center" id="txtNameProfile">');
		$('#editEmailProfile').html('<button class="btn btn-success" id="btnSaveProfile">Save changes</button>');
	});

	$('#editAccountProfile').click(function() {
		$('#accountProfile').html('<input type="text" value="'+account+'" class="form-control text-center" id="txtNameProfile">');
		$('#editAccountProfile').html('<button class="btn btn-success" id="btnSaveProfile">Save changes</button>');
	});

	

})