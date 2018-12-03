$(document).ready(function(){


	$('#btnSignUp').click(function(){

		var passwordSignup = $('#txtPasswordSignUp').val();
		var confirmPasswordSignup = $('#txtConfirmPasswordSignUp').val();
		var userNameSignup = $('#txtUserNameSignUp').val();
		var accountSignup = $('#txtAccountSignUp').val();

		if(userNameSignup.length == 0 || accountSignup.length == 0 || passwordSignup.length == 0 || confirmPasswordSignup.length == 0){
			$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">Please fill in the blank. </div>');
            $(".bg-text").height(450);
            $('#signupAlert').margin(30);
		}
		else
			if(passwordSignup != confirmPasswordSignup){
				$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">Confirm password incorrect.</div>');
	            $(".bg-text").height(450);
	            $('#signupAlert').padding(30);
			}

		$.ajax({
			

			url: "model/signupLogic.php",
			data: {
				 userName: userNameSignup, 				
				 account: accountSignup, 
				 password: passwordSignup, 
				 confirmPassword: confirmPasswordSignup
			},
			type: "POST",
			success: function(res){
				if (res=='existAccount'){
					$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder; font-size: 15px;">Account already exists!</div>');
		            $(".bg-text").height(450);
		            $('#signupAlert').margin(30);
				} 
				else if(res=='xong'){
					alert('add success');
					location.reload();
				}
			}
			
		});

	})

})