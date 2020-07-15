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
});

//ハンバーガーメニューオープン
$('.toggle_open-menu').on('click', function() {
    $('.toggle_dropdown', this).slideToggle();
});