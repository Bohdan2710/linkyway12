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
    get_template_part('templates/services-crowd/packages-section');
    get_template_part( 'templates/reviews-section');
    get_template_part('templates/specialist-section');
    get_template_part('templates/faq');
    get_template_part('templates/modal-form-packages');
    get_template_part('templates/modal-form-niche');
  ?>
  <?php get_template_part( 'templates/button-top');?>
  <?php get_template_part( 'templates/preloader');?>
</div>
<?php get_footer(); ?>
