'use strict';

//ドロップダウンメニュー
$('li.dropdown').hover(function() {
        $('ul.dropdown_menu', this).slideDown();
    },
    function() {
        $('ul.dropdown_menu', this).slideUp();
    }
);

//スライダー
$(function() {
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
    });
});

//ハンバーガーメニュー
$('#toggle_menu').on('click', function() {
    $('.toggle_open').slideToggle();
    return false;
});
  $(window).resize(function(){
      $(".toggle_open").hide();
    });

    //ハンバーガーメニューオープン
$('.toggle_open-menu').on('click', function() {
    $('.toggle_dropdown', this).slideToggle();
});

//スクロール時フェードイン
$(function() {
    var effect_pos = -150; // 画面下からどの位置でフェードさせるか(px)
    var effect_move = 50; // どのぐらい要素を動かすか(px)
    var effect_time = 800; // エフェクトの時間(ms) 1秒なら1000

    // フェードする前のcssを定義
    $('.scroll-fade').css({
        opacity: 0,
        transform: 'translateY(' + effect_move + 'px)',
        transition: effect_time + 'ms'
    });

    // スクロールまたはロードするたびに実行
    $(window).on('scroll load', function() {
        var scroll_top = $(this).scrollTop();
        var scroll_btm = scroll_top + $(this).height();
        effect_pos = scroll_btm - effect_pos;

        // effect_posがthis_posを超えたとき、エフェクトが発動
        $('.scroll-fade').each(function() {
            var this_pos = $(this).offset().top;
            if (effect_pos > this_pos) {
                $(this).css({
                    opacity: 1,
                    transform: 'translateY(0)'
                });
            }
        });
    });
});

//topへスクロール
$(function() {
    var pageTop = $('.page_top');
    pageTop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
            pageTop.fadeIn();
        } else {
            pageTop.fadeOut();
        }
    });
    pageTop.click(function () {
        $('body, html').animate({scrollTop:0}, 500, 'swing');
        return false;
    });
});
