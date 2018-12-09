$(document).ready(function() {
    var postID = $('#getPostId').attr("data-id");

    $.ajax({
        url: "controller/post/GetDetailPost.php",
        type: "POST",
        data: {
            postID: postID
        },
        success: function(res) {
            var post = $.parseJSON(res);

            if (post.id != null) {
                setupUI(post);
            } else {
                $('#container').html('<div style="color:#fff; font-size:30px"><p><strong>Opps :(</strong></p>Not found 404</div>');
            }
        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });

    function setupUI(post) {
        $(".actualyoutube iframe").remove();
        $('<iframe class="video-detail-post"></iframe>')
            .attr("src", post.linkYoutube)
            .appendTo(".actualyoutube");
        $('#postTitle').text(post.title);
        $('#postContent').text(post.content);
    }
});