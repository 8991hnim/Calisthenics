$(document).ready(function() {
    var number_of_pages;
    var cat = "all";
    var stt = 1;
    var limit = 3;

    $.ajax({
        url: "../controller/post/GetTotalPagesCat.php",
        data: {
            cat: cat,
            limit: limit
        },
        type: "POST",
        success: function(res) {
            number_of_pages = res;
            setupBootpag();
        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });

    getPost(1);

    $('select').on('change', function() {
        cat = this.value;
        getPost(1);
    });

    //setup UI
    function setupUI(index, id, title, shortContent, image, cat, linkYoutube) {
        $('#table')
            .append($('<tr>')
                .append($('<th class="widthSTT">').append(index))
                .append($('<td>').append('<span><img alt="image" class="img-fluid" style="max-width:150px; height:auto;" src="../image/post/' + image + '.jpg" /></span>'))
                .append($('<td>').append('<h5>' + title + '</h5><br>' + shortContent + '<br>Youtube: <a target="_blank" href="' + linkYoutube + '">' + linkYoutube + '</a>'))
                .append($('<td class="widthCate">').append(cat))
                .append($('<td class="width2btn">').append('<button class="btn btn-info" id="btnEditPost"><i class="fa fa-pencil"></i></button> <button class="btn btn-danger" id="btnDeletePost"><i class="fa fa-trash-o"></i></button>'))
            );
    }

    //get post
    function getPost(num) {
        $.ajax({
            url: "../controller/post/GetPostByCategory.php",
            data: {
                cat: cat,
                page: num,
                limit: limit
            },
            type: "POST",
            success: function(res) {
                arrayPost = $.parseJSON(res);
                $('#table tr td').remove();
                $('#table tr th.widthSTT').remove();
                if (arrayPost.length == 0) {

                } else {
                    $.each(arrayPost, function(index, value) {
                        setupUI(stt, value.id, value.title, value.shortContent, value.image, value.cat, value.linkYoutube);
                        stt++;
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
        $('#pag').bootpag({
            total: number_of_pages,
            maxVisible: 5,
            page: 1
        }).on("page", function(event, /* page number here */ num) {
            stt = (num-1)* limit + 1; //reset stt
            getPost(num);
        });

        $('#pag li').addClass('page-item');
        $('#pag a').addClass('page-link');

    }
})