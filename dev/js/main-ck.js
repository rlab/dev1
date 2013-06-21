/******************************************
*******************************************

RANDOM INCLUDES & FUNCTIONS

*******************************************
******************************************//**
 * Equal Heights Plugin
 * Equalize the heights of elements. Great for columns or any elements
 * that need to be the same size (floats, etc).
 * 
 * Version 1.0
 * Updated 12/10/2008
 *
 * Copyright (c) 2008 Rob Glazebrook (cssnewbie.com) 
 *
 * Usage: $(object).equalHeights([minHeight], [maxHeight]);
 * 
 * Example 1: $(".cols").equalHeights(); Sets all columns to the same height.
 * Example 2: $(".cols").equalHeights(400); Sets all cols to at least 400px tall.
 * Example 3: $(".cols").equalHeights(100,300); Cols are at least 100 but no more
 * than 300 pixels tall. Elements with too much content will gain a scrollbar.
 * 
 */// Add equal heights support for various elements when called
function setPlaceholderText(){var e="placeholder"in document.createElement("input");if(e||!$(":input[placeholder]").length)return;$(":input[placeholder]").each(function(){function n(){(!e.val()||e.val()===t)&&e.val(t).addClass("placeholder_text")}var e=$(this),t=e.attr("placeholder");n();e.focus(function(){e.val()===t&&e.val("").removeClass("placeholder_text")}).blur(function(){e.val()||e.val(t).addClass("placeholder_text")});e.closest("form").submit(function(){e.val()===t&&e.val("")}).bind("reset",function(){setTimeout(n,50)})})}(function(e){e.fn.equalHeights=function(t,n){tallest=t?t:0;this.each(function(){e(this).height()>tallest&&(tallest=e(this).height())});n&&tallest>n&&(tallest=n);return this.each(function(){e(this).height(tallest).css("overflow","auto")})}})(jQuery);$(document).ready(function(){setPlaceholderText()});jQuery(document).ready(function(e){var t=e(window).width();e("#mobile_menu").click(function(){if(e(this).siblings("ul").hasClass("open")){e(this).siblings("ul").stop(!0,!0).slideUp(200);e(this).siblings("ul").removeClass("open");return!1}e(this).siblings("ul").stop(!0,!0).slideDown(200);e(this).siblings("ul").addClass("open");return!1});e(".fancybox").fancybox({openEffect:"none",closeEffect:"none",helpers:{media:{}}});t>=1064&&e(".main_nav .wrap > ul li:nth-child(2)").css("margin-left",98)});(function(e){e(window).load(function(){var t=e(window).width();if(t>=768){var n=e("#campus_map_image").height()+60;e("#map_open_close").toggle(function(){var t="Close";e(this).children(".open_or_close").text(t);e(this).children("img").removeClass("open");e(this).children("img").addClass("close");e("#campus_map").animate({height:n},400);e("html, body").animate({scrollTop:e(document).height()},400);return!1},function(){var t="Open";e(this).children(".open_or_close").text(t);e(this).children("img").removeClass("close");e(this).children("img").addClass("open");e("#campus_map").animate({height:100},400);e("html, body").animate({scrollTop:e(document).height()},400);return!1})}if(t>=1030){e(".special_focus_collapse").each(function(){e(this).click(function(){e(this).siblings(".special_focus_info").slideUp(200);e(this).fadeOut();e(this).siblings("header.expandable").addClass("collapsed");return!1})});e("header.expandable").each(function(){e(this).click(function(){e(this).siblings(".special_focus_info").slideDown(200);e(this).siblings(".special_focus_collapse").fadeIn();e(this).removeClass("collapsed");return!1})})}var r=200,i=500;timer=setInterval(function(){$notLoaded=e(".m-wrapper > img").not(".loaded");$notLoaded.eq(Math.floor(Math.random()*$notLoaded.length)).animate({opacity:1},i).addClass("loaded");$notLoaded.length==0&&clearInterval(timer)},r);var s=null,o=null,u=null,a=null;if(t>=1064)var s=226,o=32,u=4,a=4;else if(t>=768)var s=354,o=20,u=2,a=2;else if(t>=480)var s=430,o=30,u=1,a=1;else var s=270,o=30,u=1,a=1;var f=e(".carousel ul.slides").bxSlider({slideWidth:s,minSlides:1,maxSlides:4,slideMargin:o,pager:!1,prevText:"Prev Article",nextText:"Next Article",moveSlides:1});if(t>=1064)var l=242,c=16;else var c=o,l=s;var f=e(".events_slider ul.slides").bxSlider({slideWidth:l,minSlides:1,maxSlides:4,slideMargin:c,pager:!1,prevText:"Prev Article",nextText:"Next Article",moveSlides:1});e("ul.topic_blocks").each(function(){e(this).find("span").equalHeights();t>=768&&e(this).children("li:nth-child(2n)").css("margin-right",0)})})})(jQuery);(function(e){e(window).resize(function(){var t=e(window).width();t<1064&&e(".main_nav .wrap > ul").hide();t>=1064&&e(".main_nav .wrap > ul").show()})})(jQuery);