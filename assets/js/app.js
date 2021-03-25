$('.hero-slider').slick({
  dots: true
});
$('.users-counter-slider').slick({
  slidesToShow: 3
});



var sessionCount = 0;

var headerMain = $(".main-header")[0];
var headerSec = $(".top-header")[0];
var body = $('body')[0];
console.log(headerSec);
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