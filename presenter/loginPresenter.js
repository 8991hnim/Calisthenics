$(document).ready(function() {

    $('#btnLogin').click(function() {

        var account = $('#txtUserNameLogin').val();
        var password = $('#txtPasswordLogin').val();
        if (account.length == 0 || password.length == 0){
            $('#loginAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">Please fill in the blank.</div>');
            $(".bg-text").height(490);
        }
        else{
            
            $.ajax({
                url: "model/loginLogic.php",
                type: "POST",
                data: {
                    account: account,
                    password: password
                },
                success: function(res) {
                    alert(res);
                    if (res == "Fail") {
                    	$('#loginAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;"><strong>Access Denied.</strong> Your username or password maybe incorrect.</div>');
                        $(".bg-text").height(490);
                    }else{
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