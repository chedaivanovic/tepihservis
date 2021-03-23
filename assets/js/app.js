$('.hero-slider').slick({
    dots:true
});
$('.users-counter-slider').slick({
    slidesToShow: 3
});

var sessionCount = 0;
$(window).on('scroll',function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (sessionCount == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
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
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        });
    });
    sessionCount = 1;
  }
});

window.onscroll = function() {myFunction()};

var headerMain = document.getElementsByClassName("main-header")[0];
var headerSec = document.getElementsByClassName("sec-header")[0];
var body = document.getElementsByTagName('body')[0];
function myFunction() {
  if (window.pageYOffset > 40) {
    headerMain.classList.add("sticky");
    body.classList.add('header-sticky')
  } else {
    headerMain.classList.remove("sticky");
    body.classList.remove('header-sticky')
  }
}
