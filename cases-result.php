<?php
/*
TempLate name: Cases Result
TempLate Post Type: post, pages
*/
get_header();
?>
<div class="cases">
  <?php
    get_template_part('templates/cases-result/hero-section');
    get_template_part('templates/cases-result/kevuru-section');
    get_template_part('templates/cases-result/peculiarities-section');
    get_template_part('templates/cases-result/results-section');
  ?>
  <?php 
    get_template_part('templates/specialist-section');
    get_template_part('templates/modal-form-packages');
  ?>
  <?php get_template_part( 'templates/button-top');?>
  <?php get_template_part( 'templates/preloader');?>
</div>
<?php get_footer(); ?>
