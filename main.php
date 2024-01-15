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
      get_template_part( 'templates/main/reviews-section');
      get_template_part( 'templates/main/benefit-section');
      get_template_part( 'templates/main/info-section');
      get_template_part( 'templates/main/building-section');
      get_template_part( 'templates/main/specialist-section');
      get_template_part( 'templates/faq');
      get_template_part( 'templates/main/latest-section');
    ?>
  </main>
  <?php get_template_part( 'pages/button-top');?>

<?php get_footer(); ?>