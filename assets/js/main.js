$(document).ready(function() {

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $(".header").addClass('header_color')
            $(".head_menu").addClass('wrapper_head_menu')

        } else {
            $(".header").removeClass('header_color')
            $(".head_menu").removeClass('wrapper_head_menu')

        }

        function is_shown(target) {
            var wt = $(window).scrollTop();
            var wh = $(window).height();
            var eh = $(target).outerHeight();
            var et = $(target).offset().top;

            if (wt + wh >= et && wt + wh - eh * 2 <= et + (wh - eh)) {
                return true;
            } else {
                return false;
            }
        }

        $('.block_title').each(function() {
            if (is_shown($(this)) == true) {
                $(this).addClass('aus_title')
            } else {
                $(this).removeClass('aus_title')
            }
        });
        $('.service_page_block_title').each(function() {
            if (is_shown($(this)) == true) {
                $(this).addClass('spb_title')
            }
        });



        $('.about_us_text_foto, .service_page_box').each(function() {
            if (is_shown($(this)) == true) {
                $(this).addClass('aus_text_foto')
            }
        });
        $('.service_box, .gallery_box').each(function() {
            if (is_shown($(this)) == true) {
                $(this).addClass('service_elenebt_open')

            }
        });

    });




    $('.sn_box').mouseover(function() {
        $(this).addClass('sn_box_enlarge')
    });
    $('.sn_box').mouseout(function() {
        $(this).removeClass('sn_box_enlarge')
    });


    let sn = 0
    $('.sn_box').each(function() {
        let sn_arr = $(this).find('.open_sn_bpx').text()
        if (sn_arr == '') {
            $(this).addClass('sn_box_close')
        }
    })






});