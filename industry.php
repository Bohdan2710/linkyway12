<?php
/*
TempLate name: Industry
*/
get_header();
?>
<div class="services">
  <?php
    get_template_part('templates/industry/hero-section');
    get_template_part('templates/industry/backlink-packages-section');
    get_template_part('templates/industry/what-makes-section');
  ?>
  <?php 
    get_template_part('templates/specialist-section');
    get_template_part( 'templates/reviews-section');
    get_template_part('templates/modal-form-packages');
    get_template_part('templates/modal-form-niche');
  ?>
  <?php get_template_part( 'templates/button-top');?>
  <?php get_template_part( 'templates/preloader');?>
</div>
<?php get_footer(); ?>
