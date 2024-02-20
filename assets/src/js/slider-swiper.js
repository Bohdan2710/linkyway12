function sliderSwiper(){
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
}
export { sliderSwiper };