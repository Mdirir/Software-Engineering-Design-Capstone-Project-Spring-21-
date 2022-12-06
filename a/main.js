
$(function () {

  'use strict';

  (function () {
//부트스트랩 햄버거 클릭시 사이드바 on off
    
    var aside = $('.side-nav'),

        showAsideBtn = $('.show-side-btn'),

        contents = $('#contents');

    showAsideBtn.on("click", function () {

      $("#" + $(this).data('show')).toggleClass('show-side-nav');

      contents.toggleClass('margin');

    });

    if ($(window).width() <= 767) {

      aside.addClass('show-side-nav');

    }
    $(window).on('resize', function () {

      if ($(window).width() > 767) {

        aside.removeClass('show-side-nav');

      }

    });

    // dropdown menu in the side nav
    var slideNavDropdown = $('.side-nav-dropdown');

    $('.side-nav .categories li').on('click', function () {

      $(this).toggleClass('lol').siblings().removeClass('lol');

      if ($(this).hasClass('lol')) {

        $(this).find('.side-nav-dropdown').slideToggle('fast');

        $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

      } else {

        $(this).find('.side-nav-dropdown').slideUp('fast');

      }

    });

    $('.side-nav .close-aside').on('click', function () {

      $('#' + $(this).data('close')).addClass('show-side-nav');

      contents.removeClass('margin');

    });

  }());

 



  console.log(Chart.defaults.global);


  

});

