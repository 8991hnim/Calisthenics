$(document).ready(function() {
    var home_url = "http://localhost:8080/Calisthenics";
    $('#btnLogin').click(function() {
        var account = $('#txtUserNameLogin').val();
        var password = $('#txtPasswordLogin').val();
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
                    $(".bg-text").height(460);
                }else{
                    location.reload(home_url+"index.php?action=login_success");
                }

            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }
        });
    })
})