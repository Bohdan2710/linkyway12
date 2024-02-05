<?php
  $main_benefit_title = 'main_benefit_title';
  $main_benefit_bocks = 'main_benefit_bocks';
?>

<section class="main__benefit">
  <div class="container">
    <?php if (get_field($main_benefit_title)) : ?>
      <h2 class="benefit__title section_title">
        <?php the_field($main_benefit_title) ?>
      </h2>
    <?php endif; ?>
    <div class="benefit__wrap">
      <?php if (have_rows($main_benefit_bocks)) : ?>
        <?php while (have_rows($main_benefit_bocks)) : the_row(); 
          $emoji = 'emoji';
          $title = 'title';
          $text = 'text';
        ?>
            <div class="benefit__block_binefit">
              <?php if (get_sub_field($emoji)) : ?>
                <div class="block_binefit__emoji">
                  <?php the_sub_field($emoji) ?>
                </div>
              <?php endif; ?>
              <?php if (get_sub_field($title)) : ?>
                <span class="block_binefit__title">
                  <?php the_sub_field($title) ?>
                </span>
              <?php endif; ?>

              <?php if (get_sub_field($text)) : ?>
                <span class="block_binefit__text">
                  <?php the_sub_field($text) ?>
                </span>
              <?php endif; ?>
            </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
