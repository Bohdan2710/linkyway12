//packages tabs
$(".crowd").on("click", function (e) {
  $(".packages__form, .packages__title, .packages__request_packages, .packages__complex, .packages__copywriting, .packages__serm").hide();
  $(".packages__price").show();
  $(".complex, .outreach, .packages__wrap_price, .copywriting, .serm").removeClass("active");
  $(this).addClass("active");
});

$(".complex").on("click", function (e) {
  $(".packages__form, .packages__title, .packages__request_packages, .packages__price, .packages__copywriting, .packages__serm").hide();
  $(".packages__complex").show();
  $(".crowd, .outreach, .packages__wrap_price, .copywriting, .serm").removeClass("active");
  $(this).addClass("active");
});

$(".outreach").on("click", function (e) {
  $(".packages__price, .packages__complex, .packages__copywriting, .packages__serm").hide();
  $(".packages__form, .packages__title, .packages__request_packages").show();
  $(".crowd, .complex, .copywriting, .serm").removeClass("active");
  $(this).addClass("active");
  $(".packages__wrap_price").addClass("active");
});

$(".copywriting").on("click", function (e) {
  $(".packages__form, .packages__title, .packages__request_packages,.packages__price, .packages__complex, .packages__serm, .packages__copywriting").hide();
  $(".packages__copywriting").show();
  $(".crowd, .complex, .outreach, .packages__wrap_price, .serm").removeClass("active");
  $(this).addClass("active");
});

$(".serm").on("click", function (e) {
  $(".packages__form, .packages__title, .packages__request_packages, .packages__price, .packages__complex, .packages__copywriting").hide();
  $(".packages__serm").show();
  $(".crowd, .complex, .outreach, .copywriting, .packages__wrap_price").removeClass("active");
  $(this).addClass("active");
});

// //for section services crowd
if($(".crowd").hasClass('active')){
  $(".packages__form, .packages__title, .packages__request_packages, .packages__complex, .packages__copywriting, .packages__serm").hide();
  $(".packages__price").show();
  $(".complex, .outreach, .packages__wrap_price, .copywriting").removeClass("active");
  $(this).addClass("active");
}

if($(".copywriting").hasClass('active')){
  $(".packages__form, .packages__title, .packages__request_packages, .packages__complex").hide();
  $(".packages__copywriting").show();
  $(".complex, .outreach, .packages__wrap_price, .serm").removeClass("active");
  $(this).addClass("active");
}

if($(".serm").hasClass('active')){
  $(".packages__form, .packages__title, .packages__request_packages, .packages__price, .packages__complex, .packages__copywriting").hide();
  $(".packages__serm").show();
  $(".crowd, .complex, .outreach, .copywriting, .packages__wrap_price, .serm").removeClass("active");
  $(this).addClass("active");
}

if($(".complex").hasClass('active')){
  $(".packages__form, .packages__title, .packages__request_packages, .packages__price, .packages__copywriting, .packages__serm").hide();
  $(".packages__complex").show();
  $(".crowd, .outreach, .packages__wrap_price").removeClass("active");
  $(this).addClass("active");
}

if($(".outreach").hasClass('active')){
  $(".packages__price, .packages__complex, .packages__copywriting, .packages__serm").hide();
  $(".packages__form, .packages__title, .packages__request_packages").show();
  $(".crowd, .complex").removeClass("active");
  $(this).addClass("active");
  $(".packages__wrap_price").addClass("active");
}