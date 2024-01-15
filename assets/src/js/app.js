// detect mobile
window.matchMedia("(max-width: 1024px)").matches
  ? $("body").addClass("mobile")
  : $("body").addClass("pc");

// header menu
$(".header__menu").on("click", function () {
  $(".header__nav_list_mob").addClass("active");
});
$(".nav_list_mob__close_btn").on("click", function () {
  $(".header__nav_list_mob").removeClass("active");
});

//background header
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $(".header").addClass("back");
  } else {
    $(".header").removeClass("back");
  }
});

// button scroll to top
$(window).scroll(function () {
  if ($(this).scrollTop() > 500) {
    $(".btn_to_top").fadeIn();
  } else {
    $(".btn_to_top").fadeOut();
  }
  $(".btn_to_top").click(function () {
    $("html, body").stop().animate({ scrollTop: 0 }, 200, "swing");
  });
});

// view all text
$(".info__read_more").on("click", function (e) {
  e.preventDefault();
  $(".info__all_text").addClass("active");
  $("body").addClass("hidden");
});
$(".all_text_close").on("click", function () {
  $(".info__all_text").removeClass("active");
  $("body").removeClass("hidden");
});

const sliderSectionWork = new Swiper(".services__slider", {
  slidesPerView: 1,
  loop: true,
  breakpoints: {
    700: {
      slidesPerView: 2,
      centeredSlides: false,
    },
    1024: {
      slidesPerView: 3,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const sliderSectionReviews = new Swiper(".reviews__slider", {
  autoHeight: true,
  slidesPerView: 1,
  loop: true,
  breakpoints: {
    700: {
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 3,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
  navigation: {
    nextEl: ".reviews__button_next",
    prevEl: ".reviews__button_prev",
  },
});

const sliderSectionLatest = new Swiper(".latest__slider", {
  slidesPerView: 1,
  loop: true,
  spaceBetween: 30,
  breakpoints: {
    700: {
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 3,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
  navigation: {
    nextEl: ".reviews__button_next",
    prevEl: ".reviews__button_prev",
  },
});
