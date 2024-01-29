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
    get_template_part('templates/main/reviews-section');
    get_template_part('templates/main/specialist-section');
    get_template_part('templates/faq');
  ?>
  <?php get_template_part( 'templates/button-top');?>
</div>
<?php get_footer(); ?>
