function scrollToTopBtn(){
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
}
export { scrollToTopBtn };