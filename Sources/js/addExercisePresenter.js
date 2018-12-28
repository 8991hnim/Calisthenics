$(document).ready(function() {
    var level = $('#getLevel').attr('data-id');
    $('#title').text(" Add exercise to level " + level);
    var day = 1;
    var exerciseId = 1;

    $('#selectDay').on('change', function() {
        day = this.value;
    });

    $('#selectExercise').on('change', function() {
        exerciseId = this.value;
    });

    $('#btnSave').click(function() {

        // alert();
        if(isEmpty()){
            alert("Please fill in the blank.");
        }else if (!isNumeric($('#setInp').val())) {
            alert("Set must be a number");
        } else if (!isNumeric($('#repInp').val())) {
            alert("Rep must be a number");
        } else if (!isNumeric($('#breakTimeInp').val())) {
            alert("Break time must be a number");
        }
    })

    //add exercise vào select
    $.ajax({
        url: "../controller/exercise/GetAllExercise.php",
        type: "GET",
        success: function(res) {
            var arrayExercise = $.parseJSON(res);
            $.each(arrayExercise, function(index, value) {
                var o = new Option(value.name, value.id);
                $(o).html(value.name);
                $("#selectExercise").append(o);
            });

        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });

    function isNumeric(s) {
        var re = new RegExp("^[0-9]+");
        return re.test(s);
    }

    function isEmpty(){
        if($('#setInp').val().trim() < 1 || $('#repInp').val().trim() < 1 || $('#breakTimeInp').val().trim() < 1){
            return true;
        }
        return false;
    }
})