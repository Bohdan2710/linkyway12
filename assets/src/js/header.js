function headerScripts(){
  //menu mob header
  $(".header__menu").on("click", function () {
    $(".header__nav_list_mob").addClass("active");
  });
  $(".nav_list_mob__close_btn").on("click", function () {
    $(".header__nav_list_mob").removeClass("active");
  });

  $(".sub-menu").hide();
  //dropdown menu header
  $(function () {
    // Dropdown toggle
    $(".menu-item-has-children a").click(function (e) {
      $(this).next(".sub-menu").toggle();
    });
  });

  //background header
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".header").addClass("back");
    } else {
      $(".header").removeClass("back");
    }
  });
}
export { headerScripts };