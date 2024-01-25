<?php
/*
TempLate name: Cases Posts
*/
get_header();
?>
<div class="services">
  <?php
    get_template_part('templates/cases-posts/hero-section');
    get_template_part('templates/cases-posts/posts-section');
  ?>
  <?php 
    get_template_part('templates/main/specialist-section');
  ?>
  <?php get_template_part( 'pages/button-top');?>
</div>
<?php get_footer(); ?>
