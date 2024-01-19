<?php
/*
TempLate name: Cases Result
*/
get_header();
?>
<div class="cases">
  <?php
    get_template_part('templates/cases-result/hero-section');
    get_template_part('templates/cases-result/kevuru-section');
    get_template_part('templates/cases-result/peculiarities-section');
    get_template_part('templates/cases-result/results-section');
  ?>
  <?php 
    get_template_part('templates/main/specialist-section');
  ?>
  <?php get_template_part( 'pages/button-top');?>
</div>
<?php get_footer(); ?>
