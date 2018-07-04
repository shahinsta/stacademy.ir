/**
 * Created by STA on 5/9/2018.
 */
var count = 0;

/*$(document).live("scroll", function (e) {
    if ($(this).scrollTop() > 300) {
        console.log($(window).scrollTop());
        $('#header_desktop').addClass('header_after_scroll_down');
        $('#nav_desktop').addClass('nav_after_scroll_down');
        $('#call-me_desktop').removeClass('call_me');
        $('#call-me_desktop').addClass('call_me_after_scroll_down');
    } else {
        console.log($(window).scrollTop());
    }
});*/
$(window).scroll(function () {
   // $('.call_me').css({'width': 95 - $(window).scrollTop() , 'height' : 95 - $(window).scrollTop() });

    if ($(window).scrollTop() > 95) {
        $('.call_me').css('top', '7px');
        $('#header_desktop').addClass('header_after_scroll_down');
        $('.header_after_scroll_down').css('top','0px');
        $('#nav_desktop').addClass('nav_after_scroll_down');
        $('#call-me_desktop').removeClass('call_me');
        $('#call-me_desktop').addClass('call_me_after_scroll_down');
        $('.main').css('padding-top', '150px');
        $('.logo').css('width','190px');
        $('.logo_txt').css('letter-spacing','0');
    } else if ($(window).scrollTop() < 95) {
        $('.call_me').css('top', - $(window).scrollTop());
        if($(window).scrollTop() == 0){
            $('.call_me').css('top', '7px');
        }
        $('#header_desktop').removeClass('header_after_scroll_down');
        $('#nav_desktop').removeClass('nav_after_scroll_down');
        $('#call-me_desktop').addClass('call_me');
        $('#call-me_desktop').removeClass('call_me_after_scroll_down');
        $('.logo').css('width','360px');
        $('.logo_txt').css('letter-spacing','8px');

        if($(window).width() < 480){
            $('.main').css('padding-top', '100px');
        }else{
            $('.main').css('padding-top', '50px');
        }

    }
});
$(document).ready(function () {
    $("button").click(function () {
        console.log($(window).width());
    });


    $('.nav li').on('click', function () {
        $('li').removeClass('active');
        $(this).addClass('active');
    });

    $('.menu_btn').click(function () {

        console.log(count);
        if (count === 0) {
            $('.dark_layer').css({
                'display': 'block',
                'width': '"' + $(window).width() + '"',
                'height': '"' + $(window).height() + '"'
            });
            $(this).removeClass('box_rotate0 box_transition0');
            $(this).addClass('box_rotate90 box_transition90');
            count++;
            $('.menu_mbl').css('right', '0px');
            $(this).css('background', 'url(http://localhost/stacademy/images/close-menu.png) no-repeat center center scroll');
        } else {
            $('.dark_layer').css('display', 'none');
            $(this).removeClass('box_rotate90 box_transition90');
            $(this).addClass('box_rotate0 box_transition0');
            count--;
            $('.menu_mbl').css('right', '-300px');
            $(this).css('background', 'url(http://localhost/stacademy/images/open-menu.png) no-repeat center center scroll');
        }
    });


});

