$(document).ready(function() {
    var cat = $("#container").attr('data-id');
    var arrayPost;

    $.ajax({
        url: "controller/post/GetPostByCategory.php",
        data: {
            cat: cat
        },
        type: "POST",
        success: function(res) {
            arrayPost = $.parseJSON(res);
            if (arrayPost.length == 0) {
                $("#content").html('<div class="alert alert-dark" role="alert"><h4 class="alert-heading">Opps :(</h4><p>There are no post to display. Please come back later ...</p></div>');
            } else {
                $.each(arrayPost, function(index, value) {
                    $("#content").append(setupUI(value.id, value.title, value.shortContent, value.image));
                });
            }
            $.each(arrayPost, function(index, value) {
                $("#content").append(setupUI(value.id, value.title, value.shortContent, value.image));
            });

        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });

    function setupUI(id, title, shortContent, image) {
        var postUI = '<div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-4 offset-md-0 mt-3 mb-3 hvr-hang">' +
            '<div class="card colorPost">' +
            '<img class="card-img-top" alt="Bootstrap Thumbnail First" src="image/post/' + image + '.jpg" />' +
            '<div class="card-block">' +
            '<h5 class="card-title text-info">' +
            title +
            '</h5>' +
            '<p class="card-text">' +
            shortContent +
            '</p>' +
            '<a target="_blank" class="btn btn-danger btn-detail" data-id="' + id + '">Detail</a>' +
            '</div>' +
            '</div>' +
            '</div>';
        return postUI;
    }

    $("body").delegate(".card-block a", "click", function() {
        var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/detail_post.php?id=" + $(this).attr('data-id')));
        window.location.href = url.href;
    });
});