$(function(){
 /* выбор языка */
 $('.language_list').click(function(){
 $(".dropdown-menu").slideToggle('fast');
 });
 $('ul.dropdown-menu li').click(function(){
 var tx = $(this).html();
 var tv = $(this).attr('alt');
 $(".dropdown-menu").slideUp('fast');
 });
 })