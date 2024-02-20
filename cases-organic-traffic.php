<?php
/*
TempLate name: Cases Organic Traffic
*/
get_header();
?>
<div class="cases">
  <?php
    get_template_part('templates/cases-organic-traffic/hero-section');
    get_template_part('templates/cases-organic-traffic/kevuru-section');
    // get_template_part('templates/cases-organic-traffic/peculiarities-section');
    get_template_part('templates/cases-organic-traffic/results-section');
  ?>
  <?php 
    get_template_part('templates/specialist-section');
  ?>
  <?php get_template_part( 'templates/button-top');?>
  <?php get_template_part( 'templates/preloader');?>
</div>
<?php get_footer(); ?>