function preloaderScript(){
  let count = 0;
  let counter = setInterval(function() {
    if(count < 40) {
      $("body").addClass("hidden");
      $('.preloader__counter').text(count + '%');
      $('.preloader__bar').css('width', count + '%');
      count++;
    } else {
      $("body").removeClass("hidden");
      $('.preloader').fadeOut();
    }
  }, 20);
}
export { preloaderScript };