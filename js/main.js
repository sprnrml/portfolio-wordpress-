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