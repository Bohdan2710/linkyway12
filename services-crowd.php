<?php
/*
TempLate name: Services Crowd
*/
get_header();
?>
<div class="services">
  <?php
    get_template_part('templates/services-crowd/hero-section');
    get_template_part('templates/services-crowd/affect-section');
    get_template_part('templates/services-crowd/quality-section');
    get_template_part('templates/services-crowd/pr-section');
    get_template_part('templates/services-crowd/process-section');
  ?>
  <?php 
    get_template_part('templates/services-crowd/packages-section');
    get_template_part('templates/main/reviews-section');
    get_template_part('templates/main/specialist-section');
    get_template_part('templates/faq');
  ?>
  <?php get_template_part( 'templates/button-top');?>
</div>
<?php get_footer(); ?>
