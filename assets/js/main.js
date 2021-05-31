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
            var wt = $(window).scrollTop();
            var wh = $(window).height();
            var eh = $(target).height();
            var et = $(target).offset().top;

            if (et >= wt && et + eh <= wh + wt) {
                return true;
            } else {
                return false;
            }
        }
        $('.block_title').each(function() {

            if (is_fully_shown($(this)) == true) {
                $(this).addClass('aus_title')
                console.log('111123456');

            }
        });

    });

    /*-------------------animation services------------*/

    $('.service_box:nth-child(odd)').mouseover(function() {
        let service = $(this).find('.icon_service');
        let text = $(this).find('.text_box');
        let frame = $(this).find('.frame_icon');
        $(frame).addClass('active_rigth')
        $(service).addClass('big')
        $(text).addClass('tb_animation_left')
    });

    $('.service_box:nth-child(even)').mouseover(function() {
        let service = $(this).find('.icon_service');
        let text = $(this).find('.text_box');
        let frame = $(this).find('.frame_icon');
        $(frame).addClass('active_left')
        $(service).addClass('big')
        $(text).addClass('tb_animation_right')
    });

    $('.service_box').mouseout(function() {
        let frame = $(this).find('.frame_icon');
        let service = $(this).find('.icon_service');
        let text = $(this).find('.text_box');
        $(frame).removeClass('active_rigth')
        $(frame).removeClass('active_left')
        $(service).removeClass('big')
        $(text).removeClass('tb_animation_left')
        $(text).removeClass('tb_animation_right')
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