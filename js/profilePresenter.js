$(document).ready(function() {

    var name = $('#nameProfile').attr('data-id');
    var email = $('#emailProfile').attr('data-id');
    var account = $('#accountProfile').attr('data-id');

    $('#editNameProfile').click(function() {
    	$(this).off(); //clear su kien click 
        $('#nameProfile').html('<input type="text" value="' + name + '" class="form-control text-center" id="txtNameProfile">');
        $('#editNameProfile').html('<i class="btn btn-success pt-2 pb-2 fa fa-check text-light" title="Save" id="btnSaveChangeNameProfile"></i>&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEdit"></i>');

    });

    $('#editPasswordProfile').click(function() {
        $('#passwordProfile').html('<input type="password" placeholder="Old password" class="form-control text-center" id="">');
        $('#editPasswordProfile').html('<i class="btn btn-info pt-2 pb-2 fa fa-arrow-right text-light" title="Continue" id="btnContinuePassword"></i>&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEdit"></i>');
    });

    $('#btnContinuePassword').click(function() {
        //đoạn dưới hiện 2 textbox trên 1 dòng để nhập pass mới và xác nhận. k đc xóa code này
        $('#passwordProfile').html('<div class="input-group">' +
            '<input type="password" class="form-control text-center mr-1" placeholder="New password" id="">' +
            '<input type="password" class="form-control text-center" placeholder="Confirm new password" id="">' +
            '</div>');
        $('#editPasswordProfile').html('<i class="btn btn-success pt-2 pb-2 fa fa-check text-light title="Save" id="btnSaveChangePassword""></i>&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEdit"></i>');
    })

    $("body").delegate("#btnSaveChangeNameProfile","click", function(){
        var nameChange = $('#txtNameProfile').val();
        alert(nameChange);
        if (nameChange.length == 0) {
            alert('Please fill in the blank.');
        }
    });


})