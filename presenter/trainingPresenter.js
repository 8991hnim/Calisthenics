    $(document).ready(function() {
    var level = $('#btnGetLevel').attr('data-id');
    var day = $('#btnGetDay').attr('data-id');
    var userID = $('#btnGetUserID').attr('data-id');
    var arrayExercise;
    var pos = 0;
    var dayTrained = 0;

    $("#dayNumber").text("Day " + day);



    $.ajax({
        url: "model/trainingLogic.php",
        data: {
            level: level,
            day: day
        },
        type: "GET",
        success: function(res) {
            arrayExercise = $.parseJSON(res);
            console.log(arrayExercise);
            setupUI();

        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }

    });

    $.ajax({
        url: "model/trainingLogic.php",
        data: {
            level: level,
            userID: userID
        },
        type: "POST",
        success: function(res) {
            dayTrained = res;
            //chỉnh màu nút 
            $("#btnGroup button").each(function() {
                console.log($(this).data('id'));
                if ($(this).data('id') <= dayTrained) {
                    $(this).css("background-color", "#3d5c5c");
                }
                if($(this).data('id')==day){
                    $(this).css("background-color","#993333");
                }
            });
        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }

    });



    $("#btnGroup").on("click", "button", function(event) {
        var dayClicked = $(this).attr('data-id');
        //chuyển trang
        var url = new URL(window.location.href);
        url.searchParams.set('level', level);
        url.searchParams.set('day', dayClicked);
        window.location.href = url.href;
    });

    $("#btnPrevious").click(function() {
        pos--;
        setupUI();

    });

    $("#btnNext").click(function() {
        pos++;
        setupUI();

    });

    function setupUI() {
        $('#btnPrevious').css("display", "block");
        $('#btnNext').css("display", "block");
        $('#btnFinishTraining').css("display", "none");

        if (pos == 0) $('#btnPrevious').css("display", "none");
        if (pos == arrayExercise.length - 1) {
            $('#btnNext').css("display", "none");
            $('#btnFinishTraining').css("display", "inline-block");
        }

        $("#nameTraining").text(arrayExercise[pos].name);
        $("#setTraining").text(arrayExercise[pos].set);
        $("#repTraining").text(arrayExercise[pos].rep);
        $("#breaksTraining").text(arrayExercise[pos].breakTime);
        $(".actualyoutube iframe").remove();
        $('<iframe height="315" width="100%" frameborder="0" allowfullscreen></iframe>')
            .attr("src", arrayExercise[pos].urlYT)
            .appendTo(".actualyoutube");
    }
})