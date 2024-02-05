<?php
  $main_building_title = 'main_building_title';
  $main_building_blocks = 'main_building_blocks';
?>
<section class="main__building">
  <div class="container">
    <?php if( get_field($main_building_title) ): ?>
      <h2 class="building__title section_title">
        <?php the_field($main_building_title); ?>
      </h2>
    <?php endif; ?>
    <div class="building__wrap">
      <?php if (have_rows($main_building_blocks)) : ?>
        <?php while (have_rows($main_building_blocks)) : the_row(); 
          $title = 'title';
          $text = 'text';
        ?>
          <div class="building__block_building">
            <?php if (get_sub_field($title)) : ?>
              <h3 class="block_building__title section_title">
                <?php the_sub_field($title) ?>
              </h3>
            <?php endif; ?>
            <?php if (get_sub_field($text)) : ?>
              <p class="block_building__text text_grey">
                <?php the_sub_field($text) ?>
              </p>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>