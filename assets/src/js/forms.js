function formsScripts() {
  //modal form withot niche
  $(".modal_form_packages").hide();
  $(".show_form_packages").on("click", function (e) {
    e.preventDefault();
    $(".modal_form_packages").show();
    $("body").addClass("hidden");
  });
  $(".form_packages__close").on("click", function (e) {
    e.preventDefault();
    $(".modal_form_packages").hide();
    $("body").removeClass("hidden");
  });

  //modal form with niche
  $(".modal_form_niche").hide();
  $(".show_form_niche").on("click", function (e) {
    e.preventDefault();
    $(".modal_form_niche").show();
    $("body").addClass("hidden");
  });
  $(".form_niche__close").on("click", function (e) {
    e.preventDefault();
    $(".modal_form_niche").hide();
    $("body").removeClass("hidden");
  });

  // Dropdown form-industry
  $(".industry_post__link").on("click", function (e) {
    e.preventDefault();
    //for add margin
    $(this).toggleClass("active");

    const $formContainer = $(this).next(".hero__form.form_industry");
    $formContainer.toggleClass("active");
  });

  //disable form button in page main, if checkbox dont checked
  $(".hero__form button").removeAttr("disabled");
  $(".hero__form #invalidCheck2").on("change", function () {
    if (!$(".hero__form #invalidCheck2").is(":checked")) {
      $(".hero__form button").attr("disabled", "disabled");
    } else {
      $(".hero__form button").removeAttr("disabled");
    }
  });

}
export { formsScripts };
