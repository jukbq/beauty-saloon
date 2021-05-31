$(document).ready(function() {

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $(".wraper").addClass('wrapper_color')
            $(".head_menu").addClass('wrapper_head_menu')

        } else {
            $(".wraper").removeClass('wrapper_color')
            $(".head_menu").removeClass('wrapper_head_menu')

        }
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




    /*----------------------Animation--------------------*/
    /*    function is_fully_shown(target) {
           let wt = $(window).scrollTop();
           let wh = $(window).height();
           let eh = $(target).height();
           let et = $(target).offset().top;

           if (et >= wt && et + eh <= wh + wt) {
               return true;

           } else {
               return false;

           }
       } */
    $(window).scroll(function() {
        var wt = $(window).scrollTop();
        var wh = $(window).height();
        var et = $('.about_us_title').offset().top;
        var eh = $('.about_us_title').outerHeight();
        var dh = $(document).height();
        if (wt + wh >= et || wh + wt == dh || eh + et < wh) {
            console.log('Элемент показан');
        }
    })

    /*--------------------------------------------------*/
    $(document).scroll(function() {


        $('.opacity').each(function() {
            if (is_fully_shown($(this)) == true) {
                $(this).addClass('action')

            }
        });

        $('.about_us_title').each(function() {

            if (is_fully_shown($(this)) == true) {
                $(this).addClass('aus_heading')

            }
        });
        $('.abour_us_text').each(function() {
            if (is_fully_shown($(this)) == true) {
                $(this).addClass('aus_text')
            }
        });

        $('.service_box:nth-child(odd)').each(function() {
            if (is_fully_shown($(this)) == true) {
                $(this).addClass('slideRight')
            }
        });

        $('.service_box:nth-child(even)').each(function() {
            if (is_fully_shown($(this)) == true) {
                $(this).addClass('slideLeft')

            }
        });
    });




    let sn = 0
    $('.sn_box').each(function() {
        let sn_arr = $(this).find('.open_sn_bpx').text()
        if (sn_arr == '') {
            $(this).addClass('sn_box_close')
        }
    })






});