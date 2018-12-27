$(document).ready(function() {
    $('#btnSave').click(function() {
        var yt = new RegExp('^https://www.youtube.com/embed/[A-z0-9-_]{11}$');
        if ($('#name').val().trim().length < 1) {
            alert('Fill in the blank');
        } else if (!yt.test($('#linkYT').val())) {
            alert("Link youtube does not match!");
        } else {
            var name = $('#name').val();
            var linkYT = $('#linkYT').val();

            var idLinkYT = linkYT.split("/");

            createNewExercise(name, idLinkYT[4]);

        };
    })

    function createNewExercise(name, linkYT) {

        $.ajax({
            url: "../controller/exercise/CreateExercise.php",
            data: {
                name: name,
                linkYT: linkYT
            },
            type: "POST",
            success: function(res) {
                if(res!="fail"){
                     swal({
                        title: "Success",
                        text: "",
                        icon: "success"
                    })
                    .then((value) => {
                        var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/admin/manage_exercise.php"));
                        window.location.href = url.href;
                    });
                }else{
                     swal({
                        title: "Opps :(",
                        text: "Something went wrong",
                        icon: "warning"
                    })
                }
            },
            error: function(xhr, status, errorThrown) {
                console.log("a:" + errorThrown + status + xhr);
            }
        });
    }

})