<?php
  $cookies_blocks = 'cookies_blocks';
?>
<section class="cookies_policy">
  <div class="container">
    <?php if (have_rows($cookies_blocks)) : ?>
      <?php while (have_rows($cookies_blocks)) : the_row(); 
        $title = 'title';
        $text = 'text';
        $list = 'list';
      ?>
        <div class="cookies_policy__block">
          <?php if (get_sub_field($title)) : ?>
            <h2 class="section_title">
              <?php the_sub_field($title) ?>
            </h2>
          <?php endif; ?>

          <?php if (get_sub_field($text)) : ?>
            <p>
              <?php the_sub_field($text) ?>
            </p>
          <?php endif; ?>

          <?php if( have_rows($list) ): ?>
            <ul>
              <?php while( have_rows($list) ): the_row(); ?>
                  <li><?php the_sub_field('item'); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif;?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>