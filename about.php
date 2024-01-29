<?php
/*
TempLate name: About
*/
get_header(); 
?>
  <div class="about">
    <?php
      get_template_part( 'templates/about/hero-section');
      get_template_part( 'templates/about/who-we-section');
      get_template_part( 'templates/about/approach-section');
      get_template_part( 'templates/about/about-result-section');
      get_template_part( 'templates/main/reviews-section');
      get_template_part( 'templates/main/specialist-section');
    ?>
  </div>
  <?php get_template_part( 'templates/button-top');?>

<?php get_footer(); ?>