<?php
  $industry_best_title = 'industry_best_title';
  $industry_best_blocks = 'industry_best_blocks';
?>
<section class="industry__makes">
  <div class="makes__container container">
  <?php if( get_field($industry_best_title) ): ?>
    <h2 class="makes__title section_title">
      <?php the_field($industry_best_title); ?>
    </h2>
    <?php endif; ?>

    <?php if (have_rows($industry_best_blocks)) : ?>
      <?php while (have_rows($industry_best_blocks)) : the_row(); 
        $image = 'image';
        $title = 'title';
        $text = 'text';
        $reverse = 'reverse';
        $size = 'size';
      ?>
        <div class="makes__block_makes">
          <div class="<?php echo get_sub_field('reverse') ? 'blocks_makes__wrap reverse' : 'blocks_makes__wrap'; ?>" >
            <div class="block_makes__content">
              <?php if (get_sub_field($title)) : ?>
                <h3 class="block_makes__title section_title">
                  <?php the_sub_field($title) ?>
                </h3>
              <?php endif; ?>

              <?php if (get_sub_field($text)) : ?>
                <p class="block_makes__text text_grey">
                  <?php the_sub_field($text) ?>
                </p>
              <?php endif; ?>
            </div>
            <div class="block_makes__img">
              <?php if( !empty(get_sub_field($image)) ): ?>
                  <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" class="<?php echo get_sub_field('size') ? 'large' : 'small';?>"/>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>