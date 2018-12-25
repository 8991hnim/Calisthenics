$(document).ready(function() {
    var number_of_pages;
    var limit = 6;


    getTotalPages();
    getExercise(1);

    $('#input-search').on('input', function() {
        console.log("in search");
        var keyword = $(this).val();
        if (keyword.trim().length == 0) {

            getExercise(1);
            getTotalPages();
        } else {


            $.ajax({
                url: "../controller/exercise/FindExercise.php",
                data: { keyword: keyword },
                type: "POST",
                success: function(res) {
                    var arrayExercise = $.parseJSON(res);
                    console.log("length: " + arrayExercise.length);
                    $('#table tbody tr').remove();
                    $('#pag').off();
                    $('#pag ul').remove();
                    if (arrayExercise.length == 0) {

                    } else {
                        $.each(arrayExercise, function(index, value) {
                            setupUI(value.id, value.name, value.linkYoutube);
                        });
                    }

                },
                error: function(xhr, status, errorThrown) {
                    console.log(errorThrown + status + xhr);
                }
            });
        }

    });

    //setup UI
    function setupUI(id, name, linkYoutube) {
        $('#table')
            .append($('<tr>')
                .append($('<th>').append(id))
                .append($('<td>').append(name))
                .append($('<td>').append('Youtube: <a target="_blank" href="' + linkYoutube + '">' + linkYoutube + '</a>'))
                .append($('<td class="width2btn">').append('<button class="btn btn-info" id="btnEditExercise"><i class="fa fa-pencil"></i></button> <button class="btn btn-danger" id="btnDeleteExercise" onclick="deleteExercise('+id+');"><i class="fa fa-trash-o"></i></button>'))
            );
    }

    

    //get total page
    function getTotalPages() {
        $.ajax({
            url: "../controller/exercise/GetTotalPages.php",
            data: { limit: limit },
            type: "POST",
            success: function(res) {
                number_of_pages = res;
                setupBootpag();
            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }
        });
    }

    //get post
    function getExercise(num) {
        $.ajax({
            url: "../controller/exercise/GetListExercise.php",
            data: {
                page: num,
                limit: limit
            },
            type: "POST",
            success: function(res) {
                var arrayExercise = $.parseJSON(res);
                $('#table tbody tr').remove();
                if (arrayExercise.length == 0) {

                } else {
                    $.each(arrayExercise, function(index, value) {
                        setupUI(value.id, value.name, value.linkYoutube);
                    });
                }

            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }
        });

    }
    

    //boot pag
    function setupBootpag() {
        $('#pag').off();
        $('#pag ul').remove();

        $('#pag').bootpag({
            total: number_of_pages,
            maxVisible: 5,
            page: 1
        }).on("page", function(event, /* page number here */ num) {
            // alert(stt);
            getExercise(num);
        });

        $('#pag li').addClass('page-item');
        $('#pag a').addClass('page-link');

    }
})



function deleteExercise(idExercise){

    if(idExercise <= 0) {
        alert('oops :(');
    }else {

        $.ajax({

            url: "../controller/exercise/DeleteExercise.php",
            data: { exerciseID: idExercise },
            type: "POST",
            success: function(res) {
                
                alert(res);
                location.reload();

            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }

        });

    }
};