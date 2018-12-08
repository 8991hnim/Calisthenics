$(document).ready(function(){

	$('#btnSignUp').click(function(){

		var emailSignup = $('#txtEmailSignUp').val();
		var userNameSignup = $('#txtUserNameSignUp').val();
		var accountSignup = $('#txtAccountSignUp').val();
		var passwordSignup = $('#txtPasswordSignUp').val();
		var confirmPasswordSignup = $('#txtConfirmPasswordSignUp').val();

		var emailValid = new RegExp('^[A-z][A-z0-9_.]{5,32}[^.]@[a-z]{2,}(.[a-z]{2,5}){1,2}$');

		if(emailSignup.length == 0 || userNameSignup.length == 0 || accountSignup.length == 0 || passwordSignup.length == 0 || confirmPasswordSignup.length == 0){
			$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">Please fill in the blank. </div>');
            $(".bg-text").height(480);
		} else 
			if( !emailValid.test(emailSignup) ) { 
				alert(emailSignup);
				$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">The email invalid.</div>');
	            $(".bg-text").height(480);
			} else 
				if(passwordSignup != confirmPasswordSignup){
					$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">The passwords you entered do not match.</div>');
		            $(".bg-text").height(500);
				}
				else{
					$.ajax({

						url: "controller/user/signup.php",
						data: {
							email: emailSignup,
							userName: userNameSignup, 				
							account: accountSignup, 
							password: passwordSignup
						},
						type: "POST",
						success: function(res){
							
							if (res=='existAccount'){
								$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder; font-size: 15px;">Account already exists!</div>');
					            $(".bg-text").height(480);
							} 
							else if(res=='success'){
								alert('add success');
								location.reload();
							}
						},
						error: function(xhr, status, errorThrown) {
			                console.log(errorThrown + status + xhr);
			            }
				
					});
				}

	})

})