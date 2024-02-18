
$(function () {
  $(".js-hamburger,.js-drawer").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-drawer").fadeToggle();
  });
});

var mySwiper = new Swiper ('.swiper-container', {
  direction: 'vertical',
  effect: 'slide',
  slidesPerView: 1,
  loop: true,
  autoplay: {
      delay: 4000,
      reverseDirection: true,
      disableOnInteraction: false,
  },
})

let fadeInTarget = document.querySelectorAll('.fade-in');
window.addEventListener('scroll', () => {
  for (let i = 0; i < fadeInTarget.length; i++){
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 150) {
      fadeInTarget[i].classList.add('scroll-in-up','scroll-in-right','scroll-in-left');
    }
  }
});

$(function () {
  $(".test-slick").slick({
      autoplay: true,
      autoplaySpeed: 0,
      speed: 5000,
      cssEase: 'linear',
      slidesToShow: 3,
      swipe: false,
      pauseOnFocus: false, 
      pauseOnHover: false,
      arrows: false,
  });
});

//scroll_effect
$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll('.scroll_up , .scroll_left , .scroll_right');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 150;
      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add('on');
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
});