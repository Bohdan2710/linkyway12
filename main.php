<?php
/*
TempLate name: Main
*/
get_header(); 
?>
  <main class="main">
    <?php
      get_template_part( 'templates/main/hero-section');
      get_template_part( 'templates/main/why-section');
      get_template_part( 'templates/main/cases-section');
      get_template_part( 'templates/main/services-section');
      get_template_part( 'templates/main/packages-section');
      get_template_part( 'templates/main/working-section');
      get_template_part( 'templates/reviews-section');
      get_template_part( 'templates/main/benefit-section');
      get_template_part( 'templates/main/industries-section');
      get_template_part( 'templates/main/building-section');
      get_template_part( 'templates/specialist-section');
      get_template_part( 'templates/faq');
      get_template_part( 'templates/main/latest-section');
      get_template_part('templates/modal-form-packages');
    ?>
  </main>
  <?php get_template_part( 'templates/button-top');?>
  <?php get_template_part( 'templates/preloader');?>

<?php get_footer(); ?>