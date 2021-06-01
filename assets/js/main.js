$(document).ready(function() {

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $(".header").addClass('header_color')
            $(".head_menu").addClass('wrapper_head_menu')

        } else {
            $(".header").removeClass('header_color')
            $(".head_menu").removeClass('wrapper_head_menu')

        }

        function is_fully_shown(target) {
            let wt = $(window).scrollTop();
            let wh = $(window).height();
            let eh = $(target).height();
            let et = $(target).offset().top;

            if (et >= wt && et + eh <= wh + wt) {
                return true;
            } else if (wt == 0) {
                return false;
            }

        }

        $('.block_title').each(function() {
            if (is_fully_shown($(this)) == true) {
                $(this).addClass('aus_title')
            } else {
                $(this).removeClass('aus_title')
            }
        });
        $('.about_us_text_foto').each(function() {
            if (is_fully_shown($(this)) == true) {
                $(this).addClass('aus_text_foto')
            }
        });
        $('.service_elenebt').each(function() {
            if (is_fully_shown($(this)) == true) {
                $(this).addClass('service_elenebt_open')
            }
        });

    });

    /*-------------------animation services------------*/


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