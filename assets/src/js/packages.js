//packages tabs
$(".packages__price").hide();
$(".packages__complex").hide();

$(".crowd").on("click", function (e) {
  $(".packages__form, .packages__title, .packages__request_packages, .packages__complex").hide();
  $(".packages__price").show();
  $(".complex, .outreach, .packages__wrap_price").removeClass("active");
  $(this).addClass("active");
});

$(".complex").on("click", function (e) {
  $(".packages__form, .packages__title, .packages__request_packages, .packages__price").hide();
  $(".packages__complex").show();
  $(".crowd, .outreach, .packages__wrap_price").removeClass("active");
  $(this).addClass("active");
});

$(".outreach").on("click", function (e) {
  $(".packages__price, .packages__complex").hide();
  $(".packages__form, .packages__title, .packages__request_packages").show();
  $(".crowd, .complex").removeClass("active");
  $(this).addClass("active");
  $(".packages__wrap_price").addClass("active");
});

//for section services crowd
if($(".crowd").hasClass('active')){
  $(".packages__form, .packages__title, .packages__request_packages, .packages__complex").hide();
  $(".packages__price").show();
  $(".complex, .outreach, .packages__wrap_price").removeClass("active");
  $(this).addClass("active");
}