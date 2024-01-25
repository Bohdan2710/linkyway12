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
    get_template_part('templates/main/specialist-section');
    get_template_part( 'templates/main/reviews-section');
  ?>
  <?php get_template_part( 'templates/button-top');?>
</div>
<?php get_footer(); ?>
