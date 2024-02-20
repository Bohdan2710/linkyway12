function showAllIndustry(){
  $(".industry_posts__more").on("click", function (e) {
    e.preventDefault();
    $(".industry_posts_modal").addClass("active");
  });
  $(".industry_posts__hide").on("click", function (e) {
    e.preventDefault();
    $(".industry_posts_modal").removeClass("active");
  });
}
export { showAllIndustry };