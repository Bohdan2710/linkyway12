import { preloaderScript } from "./preloader";
import { detectMobile } from "./detect-mobile";
import { headerScripts } from "./header";
import { sliderSwiper } from "./slider-swiper";
import { formsScripts } from "./forms";
import { showAllIndustry } from "./industry-scripts";
import { tabs } from "./tabs";
import { scrollToTopBtn } from "./btn-to-top";
import { calculatorPackages } from "./calculator-packages";

$(document).ready(function () {
  detectMobile();
  preloaderScript();
  scrollToTopBtn();
  headerScripts();
  tabs();
  calculatorPackages();
  sliderSwiper();
  formsScripts();
  showAllIndustry();
});
