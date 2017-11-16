$(document).ready(function(){

  var isMobile = false;
  if (/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini|Opera Mobile|Kindle|Windows Phone|PSP|AvantGo|Atomic Web Browser|Blazer|Chrome Mobile|Dolphin|Dolfin|Doris|GO Browser|Jasmine|MicroB|Mobile Firefox|Mobile Safari|Mobile Silk|Motorola Internet Browser|NetFront|NineSky|Nokia Web Browser|Obigo|Openwave Mobile Browser|Palm Pre web browser|Polaris|PS Vita browser|Puffin|QQbrowser|SEMC Browser|Skyfire|Tear|TeaShark|UC Browser|uZard Web|wOSBrowser|Yandex.Browser mobile/i.test(navigator.userAgent)) isMobile = true;


  // INDEX WAVY BACKGROUND ANIMATION CONTROL

  // for IE and mobile add a fix-background
  if (navigator.userAgent.search("MSIE") >= 0 || navigator.userAgent.search("Trident/") > -1 || isMobile ==true) {
    $('#header').addClass('fix-background');
  }

  // for other browser wavy animation on header hover
  else if (navigator.userAgent.search("Chrome") >= 0) {
    $('#header').hover(function(event) {
      $('.header-background').toggleClass('anime-header');
    });
  }
  else if (navigator.userAgent.search("Firefox") >= 0) {
    $('#header').hover(function(event) {
      $('.header-background').toggleClass('anime-header');
    });
  }
  else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
    $('#header').hover(function(event) {
      $('.header-background').toggleClass('anime-header');
    });
  }
  else if (navigator.userAgent.search("Opera") >= 0) {
    $('#header').hover(function(event) {
      $('.header-background').toggleClass('anime-header');
    });
  }

  // MENU TRIGGER CONTROL
  $('.menu-trigger').click(function(event) {
    $(this).toggleClass('open');
    $('.menu').toggleClass('menu-open');

  });

  // OPEN-CLOSE MENU CONTROL
  $('.menu-item').click(function(event){
    $('.menu').removeClass('menu-open');
  });

  $('.menu').click(function(event){
    $(this).removeClass('menu-open');
    $('.menu-trigger').removeClass('open');
  });

  // SMOOTH SCROLL ON MENU-ITEM CLICK
  $('a').smoothScroll();

  // HINT LINK CONTROL
  $('.rounded-ex').hover(function(event){
    $(this).next('.link').toggleClass('link-pseudo');
    $(this).parent('.second').find('.link').toggleClass('link-pseudo');
  });


  // SLICK SLIDER INIT
  $('.slick').slick({
    infinite:true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    responsive: [{
      breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        }
     },{
      breakpoint : 767,
      settings: {
        slidesToShow : 1,
      }
     }]

  });



  // PARALLAX INIT
  $('#scrollax').enllax();

  // SVG DRAW
  $(window).scroll(function(){
    if ($(window).scrollTop() > 500){
      $('#Layer_1').addClass( "start-draw");
    }
  });

  // FULLPAGE INIT
  $('#fullpage').fullpage({
    controlArrows: false,
    slidesNavigation: false,
    anchors:['firstPage'],
    responsiveWidth: 992,
    responsiveHeight: 710
  });

  $(document).on('click', '.prev', function(){
  $.fn.fullpage.moveSlideLeft();
  });

  $(document).on('click', '.next', function(){
  $.fn.fullpage.moveSlideRight();
  });

  /* Check width on page load*/
  if ( $(window).width() < 992) {
    $('.section').addClass('fp-auto-height');
  }

  else {
  }

  if ($(window).height() < 700) {
     $('.section').addClass('fp-auto-height');
    }
  else {
    $('.section').removeClass('fp-auto-height');
  }





    function checkDevice() {

          $('.arrows').hide();
          $('.hand-drag').hide();

         if (isMobile==true) {
          $('.arrows').hide();
          $('.hand-drag').show();
        }
        else if ($(window).width() > 767) {
          $('.arrows').hide();
          $('.hand-drag').hide();
        }
        else if (isMobile ==false || $(window).width() < 768) {
          $('.arrows').show();
          $('.hand-drag').hide();
        }

       }
    // Execute on load
    checkDevice();
    // Bind event listener
    $(window).resize(checkDevice);



  // LABEL BETTER INIT
  $("input.label_better").label_better({
    position: "top"
  });



  //CONTACT FORM

    $('#contact-form input[type="text"], #contact-form input[type="email"]').on('focus', function() {
        $('#contact-form input[type="text"], #contact-form input[type="email"]').removeClass('input-error');
    });
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $('#contact-form input[type="text"], #contact-form input[type="email"]').removeClass('input-error');
        var postdata = $('#contact-form').serialize();
        $.ajax({
            type: 'POST',
            url: 'includes/contact.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if(json.emailMessage != '') {
                    $('#contact-form .email').addClass('input-error');
                }
                if(json.nameMessage != '') {
                    $('#contact-form .name').addClass('input-error');
                }
                if(json.messageMessage != '') {
                    $('#contact-form .message').addClass('input-error');
                }

                if(json.emailMessage == '' && json.nameMessage == '' && json.messageMessage == '') {
                    $('#contact-form').fadeOut('fast', function() {
                        $('#contact #scrollax').append('<p>Thanks for contacting krm-web, we will get back to you very soon !</p>');

                    });
                }
            }
        });
    });

});

$(window).resize(function() {
    /*If browser resized, check width again */
    if ($(window).width() < 992) {
     $('.section').addClass('fp-auto-height');
    }
    else {
      $('.section').removeClass('fp-auto-height');
    }

    if ($(window).height() < 700) {
     $('.section').addClass('fp-auto-height');
    }
    else {
      $('.section').removeClass('fp-auto-height');
    }

    function checkDevice() {

         if (isMobile==true) {
          $('.arrows').hide();
          $('.hand-drag').show();
        }
        else if (isMobile==false || $(window).width() < 767) {
          $('.arrows').show();
          $('.hand-drag').hide();
        }

       }

 });




// TYPED INIT
document.addEventListener('DOMContentLoaded', function(){
    Typed.new('#typed', {
      stringsElement: document.getElementById('typed-strings'),
      showCursor: false,
      typeSpeed: 25
    });

    // COOKIES NOTIF
    window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#ffffff",
      "text": "#13547a"
    },
    "button": {
      "background": "#13547a",
      "text": "#ffffff"
    }
  },
  "theme": "edgeless",
  "position": "top",
  "static": true
});
  });

// WOW INIT
new WOW().init();
