(function($) {

    "use strict";



    $('#category').on('change', function() {
        // alert('ff');
        get_posts();

    });
    $('#state').on('change', function() {
        // alert('ff');
        get_posts();

    });
    $('#dgree').on('change', function() {
        // alert('ff');
        get_posts();

    });

    $('#have_pool').on('change', function() {
        // alert('ff');
        get_posts();

    });
    $('#stars').on('change', function() {
        // alert('ff');
        get_posts();

    });
    $('#have_discount').on('change', function() {
        // alert('ff');
        get_posts();

    });

    

    function get_posts() {
        offset = 12;
        page = 1;
        let category = $('#category :selected').val();
        let have_pool = $('#have_pool :selected').val();
        let state = $('#state :selected').val();
        let stars = $('#stars :selected').val();
        let have_discount = $('#have_discount :selected').val();
        let dgree = $('#dgree :selected').val();

        $('html, body').animate({
            scrollTop: $("#post-data").offset().top
        }, 1500);
        $.ajax({
            url: '?page=' + page + '&offset=' + offset,
            type: 'get',
            data: {
                        'category': category,
                        'have_pool': have_pool,
                        'state': state,
                        "stars": stars,
                        'have_discount': have_discount,
                        "dgree": dgree,
                   },
            success: function(data) {
                // $("#post-data").empty();

                $("#post-data").html(data.html);


            }
        });
        page++;
    }

    var val2 = {};


    function getTypeId(src1) {
        $(src1).click(function() {
            val2.one = $(this).parent().attr('id');
            val2.two = $(this).text()
        })
    }

    getTypeId('.Engagements span')




    $('.content span').each(function() {

        $(this).click(function() {

            let value = $(this).text();

            get_posts();

        });

    });


})(jQuery);