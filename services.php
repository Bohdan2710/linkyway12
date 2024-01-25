<?php
/*
TempLate name: Services
*/
get_header();
?>
<div class="services">
  <?php
    get_template_part('templates/services/hero-section');
    get_template_part('templates/services/affect-section');
    get_template_part('templates/services/quality-section');
    get_template_part('templates/services/pr-section');
    get_template_part('templates/services/process-section');
  ?>
  <?php 
    get_template_part('templates/services/packages-section');
    get_template_part('templates/main/reviews-section');
    get_template_part('templates/main/specialist-section');
    get_template_part('templates/faq');
  ?>
  <?php get_template_part( 'templates/button-top');?>
</div>
<?php get_footer(); ?>
