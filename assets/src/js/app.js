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

const sliderButtonsPackages = new Swiper(".packages__wrap_buttons", {
  slidesPerView: 1,
  loop: true,
  spaceBetween: 26,
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


//calculator packages

$(document).ready(function () {
  // Функция для обновления суммы
  function updateTotalSum() {
    const valueOptionNiche = $('select[name="niche"] option:selected').val();
    const valueOptionLanguage = $('select[name="language"] option:selected').val();
    const valueOptionCountry = $('select[name="country"] option:selected').val();
    const valueQuantity = $('input[name="quantity"]').val();

    if ((valueOptionNiche === "Adult" || valueOptionNiche === "Essay" || valueOptionNiche === "Gambling/betting" || valueOptionNiche === "Crypto") && valueOptionLanguage === "English" && valueOptionCountry === "USA") {
      $(".total__sum").text(`$${valueQuantity * 100}`);
    } else if (!(valueOptionNiche === "Adult" || valueOptionNiche === "Essay" || valueOptionNiche === "Gambling/betting" || valueOptionNiche === "Crypto") && valueOptionLanguage === "English" && valueOptionCountry === "USA") {
      $(".total__sum").text(`$${valueQuantity * 180}`);
    } else if (!(valueOptionNiche === "Adult" || valueOptionNiche === "Essay" || valueOptionNiche === "Gambling/betting" || valueOptionNiche === "Crypto") && valueOptionLanguage === "Ukrainian" && valueOptionCountry === "Ukraine") {
      $(".total__sum").text(`$${valueQuantity * 20}`);
    } else if ((valueOptionNiche === "Adult" || valueOptionNiche === "Essay" || valueOptionNiche === "Gambling/betting" || valueOptionNiche === "Crypto") && valueOptionLanguage === "Ukrainian" && valueOptionCountry === "Ukraine") {
      $(".total__sum").text(`$${valueQuantity * 50}`);
    } else if (!(valueOptionNiche === "Adult" || valueOptionNiche === "Essay" || valueOptionNiche === "Gambling/betting" || valueOptionNiche === "Crypto") && (valueOptionLanguage === "French" || valueOptionLanguage === "German" || valueOptionLanguage === "Other")) {
      $(".total__sum").text(`$${valueQuantity * 180}`);
    } else if ((valueOptionNiche === "Adult" || valueOptionNiche === "Essay" || valueOptionNiche === "Gambling/betting" || valueOptionNiche === "Crypto") && (valueOptionLanguage === "French" || valueOptionLanguage === "German" || valueOptionLanguage === "Other")) {
      $(".total__sum").text(`$${valueQuantity * 220}`);
    } else {
      $(".total__sum").text(`$-`);
    }
  }

  // Вызов функции при изменении значений в форме
  $('select[name="niche"], select[name="language"], select[name="country"], input[name="quantity"]').on('change', updateTotalSum);

  // Инициализация при загрузке страницы
  updateTotalSum();
});

$(".packages__price").hide();
$(".packages__complex").hide();

$(".crowd").on("click", function(e){
  $(".packages__form, .packages__title, .packages__request_packages, .packages__complex").hide();
  $(".packages__price").show();
  $(".complex, .outreach, .packages__wrap_price").removeClass("active");
  $(this).addClass("active");
});

$(".complex").on("click", function(e){
  $(".packages__form, .packages__title, .packages__request_packages, .packages__price").hide();
  $(".packages__complex").show();
  $(".crowd, .outreach, .packages__wrap_price").removeClass("active");
  $(this).addClass("active");
});

$(".outreach").on("click", function(e){
  $(".packages__price, .packages__complex").hide();
  $(".packages__form, .packages__title, .packages__request_packages").show();
  $(".crowd, .complex").removeClass("active");
  $(this).addClass("active");
  $(".packages__wrap_price").addClass("active");
});