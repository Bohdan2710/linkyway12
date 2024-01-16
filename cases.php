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
    get_template_part('templates/main/specialist-section');
  ?>
  <?php get_template_part( 'pages/button-top');?>
</div>
<?php get_footer(); ?>
