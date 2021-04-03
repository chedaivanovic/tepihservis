$('.hero-slider').slick({
  dots: true
});
$('.users-counter-slider').slick({
  slidesToShow: 3,
  arrows: false,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        arrows: true,
        prevArrow: $('#counter-prev'),
        nextArrow: $('#counter-next')
      }
    }
  ]
});



var sessionCount = 0;

var headerMain = $(".main-header")[0];
var headerSec = $(".top-header")[0];
var body = $('body')[0];
$(window).on('scroll', function () {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (sessionCount == 0 && $(window).scrollTop() > oTop) {
    setTimeout(function () {
      $('.counter-value').each(function () {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },
          {
            duration: 2000,
            easing: 'swing',
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
            }
          });
      });
    }, 500);
    sessionCount = 1;
  };
  if (window.pageYOffset > 40) {
    $(headerMain).addClass("sticky");
    $(body).addClass('header-sticky');
  } else {
    $(headerMain).removeClass("sticky");
    $(body).removeClass('header-sticky');
  }
});
AOS.init({
  duration: 1200,
});

let menuToggler = $('#navbar-toggler');
let mainMenu = $('#main-menu');

$(menuToggler).on('click', function () {
  if (!$(mainMenu).hasClass('menu-resp-visible')) {
    $(this).addClass('toggler-active');
    $(mainMenu).addClass('menu-resp-visible');
  } else {
    $(this).removeClass('toggler-active');
    $(mainMenu).removeClass('menu-resp-visible');
  }
});

//CONTACT FORM
//Exclude phone characters other than
$('#user-phone').on('keypress', function (event) {
  var regex = new RegExp("^[0-9 / + - - ()]+$");
  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
  if (!regex.test(key)) {
     event.preventDefault();
     return false;
  }
});
