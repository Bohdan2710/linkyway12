<?php
/*
TempLate name: Services Marketing
*/
get_header();
?>
<div class="services">
  <?php
    get_template_part('templates/services-marketing/hero-section');
    get_template_part('templates/services-marketing/affect-section');
    get_template_part('templates/services-marketing/quality-section');
    get_template_part('templates/services-marketing/pr-section');
    get_template_part('templates/services-marketing/process-section');
  ?>
  <?php 
    get_template_part('templates/services-marketing/packages-section');
    get_template_part('templates/reviews-section');
    get_template_part('templates/specialist-section');
    get_template_part('templates/faq');
    get_template_part('templates/modal-form-packages');
  ?>
  <?php get_template_part( 'templates/button-top');?>
  <?php get_template_part( 'templates/preloader');?>
</div>
<?php get_footer(); ?>