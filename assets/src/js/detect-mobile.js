function detectMobile(){
  window.matchMedia("(max-width: 1024px)").matches
  ? $("body").addClass("mobile")
  : $("body").addClass("pc");
}
export { detectMobile };