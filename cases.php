<?php
/*
TempLate name: Cases
*/
get_header();
?>
<div class="cases">
  <?php
    get_template_part('templates/cases/hero-section');
    get_template_part('templates/cases/posts-section');
  ?>
  <?php 
    get_template_part('templates/specialist-section');
  ?>
  <?php get_template_part( 'templates/button-top');?>
  <?php get_template_part( 'templates/preloader');?>
</div>
<?php get_footer(); ?>
