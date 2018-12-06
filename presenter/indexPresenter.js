$(document).ready(function() {
    var userID = $('#modalLevel').attr("data-id");

    //cập nhật kết quả tập modal box
    $.ajax({
        url: "model/indexLogic.php",
        type: "POST",
        data: {
            userID: userID
        },
        success: function(res) {
            var arrayProgressTraining = $.parseJSON(res);
            $("#selectLevel1").attr("href", "training.php?level=1&day=" + arrayProgressTraining[0].dayTrained);
            $("#selectLevel2").attr("href", "training.php?level=2&day=" + arrayProgressTraining[1].dayTrained);
            $("#selectLevel3").attr("href", "training.php?level=3&day=" + arrayProgressTraining[2].dayTrained);

            $("#resultLevel1").text(arrayProgressTraining[0].dayTrained + "/12");
            $("#resultLevel2").text(arrayProgressTraining[1].dayTrained + "/12");
            $("#resultLevel3").text(arrayProgressTraining[2].dayTrained + "/12");

        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });
});