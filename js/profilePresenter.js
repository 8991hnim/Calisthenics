

$(document).ready(function() {

    var name = $('#nameProfile').attr('data-id');

    $('#editNameProfile').click(function() {
    	$(this).off(); //clear su kien click 
        $('#nameProfile').html('<input type="text" value="' + name + '" class="form-control text-center" id="txtNameProfile">');
        $('#editNameProfile').html('<i class="btn btn-success pt-2 pb-2 fa fa-check text-light" title="Save" id="btnSaveChangeNameProfile"></i>&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEdit"></i>');

    });

    $('#editPasswordProfile').click(function() {
        $(this).off();
        $('#passwordProfile').html('<input type="password" placeholder="Old password" class="form-control text-center" id="txtOldPassword">');
        $('#editPasswordProfile').html('<i class="btn btn-info pt-2 pb-2 fa fa-arrow-right text-light" title="Continue" id="btnContinuePassword"></i>&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEdit"></i>');
    });

    $("body").delegate("#btnSaveChangeNameProfile","click", function(){

        var nameChange = $('#txtNameProfile').val();

        if (nameChange.length == 0) {
            alert('Please fill in the blank.');
        }else{
            if (nameChange.length < 6 || nameChange.length > 20){
                alert('Username must be between 6 and 20 characters.');
            }else{
                $.ajax({

                    url: "controller/user/change_profile.php",
                    data: { nameChange: nameChange},
                    type: "POST",
                    success: function(res){

                        alert(res);
                        location.reload();

                    },
                    error: function(xhr, status, errorThrown) {
                            console.log(errorThrown + status + xhr);
                    }

                });
            }
        }



    });

    $("body").delegate("#btnContinuePassword","click", function() {

        var oldPass = $('#txtOldPassword').val();

        if (oldPass.length == 0) {
            alert('Please fill in the blank.');
        }else{

            $.ajax({

                url: "controller/user/change_profile.php",
                data: { oldPass: oldPass},
                type: "POST",
                success: function(res){
                    if (res == 'fail'){
                        alert('The passwords you entered do not match');
                    }else{

                        alert(res);

                        $('#passwordProfile').html('<div class="input-group">' +
                            '<input type="password" class="form-control text-center mr-1" placeholder="New password" id="">' +
                            '<input type="password" class="form-control text-center" placeholder="Confirm new password" id="">' +
                            '</div>');
                        $('#editPasswordProfile').html('<i class="btn btn-success pt-2 pb-2 fa fa-check text-light title="Save" id="btnSaveChangePassword""></i>&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEdit"></i>');

                    }
                    
                },
                error: function(xhr, status, errorThrown) {
                        console.log(errorThrown + status + xhr);
                }

            });

        }




        //đoạn dưới hiện 2 textbox trên 1 dòng để nhập pass mới và xác nhận. k đc xóa code này
        // $('#passwordProfile').html('<div class="input-group">' +
        //     '<input type="password" class="form-control text-center mr-1" placeholder="New password" id="">' +
        //     '<input type="password" class="form-control text-center" placeholder="Confirm new password" id="">' +
        //     '</div>');
        // $('#editPasswordProfile').html('<i class="btn btn-success pt-2 pb-2 fa fa-check text-light title="Save" id="btnSaveChangePassword""></i>&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEdit"></i>');
    });

})