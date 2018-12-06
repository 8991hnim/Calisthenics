$(document).ready(function(){


	$('#btnSignUp').click(function(){

		var passwordSignup = $('#txtPasswordSignUp').val();
		var confirmPasswordSignup = $('#txtConfirmPasswordSignUp').val();
		var userNameSignup = $('#txtUserNameSignUp').val();
		var accountSignup = $('#txtAccountSignUp').val();

		if(userNameSignup.length == 0 || accountSignup.length == 0 || passwordSignup.length == 0 || confirmPasswordSignup.length == 0){
			$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">Please fill in the blank. </div>');
            $(".bg-text").height(430);
		}
		else
			if(passwordSignup != confirmPasswordSignup){
				$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">The passwords you entered do not match.</div>');
	            $(".bg-text").height(450);
			}
			else{
				$.ajax({

					url: "model/signupLogic.php",
					data: {
						 userName: userNameSignup, 				
						 account: accountSignup, 
						 password: passwordSignup
					},
					type: "POST",
					success: function(res){
						alert(res);
						if (res=='existAccount'){
							$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder; font-size: 15px;">Account already exists!</div>');
				            $(".bg-text").height(430);
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