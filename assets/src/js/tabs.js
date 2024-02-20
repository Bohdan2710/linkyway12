function tabs() {
  $(".company_cases__wrap_company a:first-child").addClass("active");
  $(".tab_body").hide();
  $(".tab_body:first").show();
  // Click function
  $(".company_cases__wrap_company a").click(function () {
    $(".company_cases__wrap_company a").removeClass("active");
    $(this).addClass("active");
  });
  $('.luxoft').on("click", function(e){
    e.preventDefault();
    $('.tab_body').hide();
    $('#tab_1').show();
  });

  $('.kevuru').on("click", function(e){
    e.preventDefault();
    $('.tab_body').hide();
    $('#tab_2').show();
  });

  $('.genstar').on("click", function(e){
    e.preventDefault();
    $('.tab_body').hide();
    $('#tab_3').show();
  });
}
export { tabs };
