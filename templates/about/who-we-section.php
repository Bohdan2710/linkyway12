<?php
  $about_who_block = get_field('about_who_block');
  $image = $about_who_block['image'];
  $title = $about_who_block['title'];
  $text = $about_who_block['text'];
?>
<section class="about__who_we">
  <div class="who_we__container container">
    <?php if (have_rows("about_who_block")) : ?>
        <?php while (have_rows("about_who_block")) : the_row(); 
          $image = 'image';
          $title = 'title';
          $text = 'text';
        ?>
            <div class="who_we__block">
              <div class="who_we__img">
                <?php if( !empty(get_sub_field($image)) ): ?>
                    <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
                <?php endif; ?>
              </div>
              <?php if (get_sub_field($title)) : ?>
                <h3 class="who_we__title section_title text_grey">
                  <?php the_sub_field($title) ?>
                </h3>
              <?php endif; ?>

              <?php if (get_sub_field($text)) : ?>
                <p class="who_we__text text_grey">
                  <?php the_sub_field($text) ?>
                </p>
              <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>