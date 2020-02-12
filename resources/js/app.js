require('./bootstrap');
var $ = require('jquery');
$(document).ready(function(){
    $('.boolean__faq__body__question h3 i').click(function(){
        $('.boolean__faq__body__question p').slideUp();
        if ($(this).hasClass('fa-plus')) {
            $('.boolean__faq__body__question i').removeClass('fa-minus');
            $('.boolean__faq__body__question i').addClass('fa-plus');
            $(this).removeClass('fa-plus');
            $(this).addClass('fa-minus');
            var father = $(this).closest('div');
            father.find('p').slideDown();
        } else {
            $(this).removeClass('fa-minus');
            $(this).addClass('fa-plus');
            var father = $(this).closest('div');
            father.find('p').slideUp();
        };
    })
})
