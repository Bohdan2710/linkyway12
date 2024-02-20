<?php
  $user_agreement_blocks = 'user_agreement_blocks';
?>
<section class="user_agreement">
  <div class="container">
    <?php if (have_rows($user_agreement_blocks)) : ?>
      <?php while (have_rows($user_agreement_blocks)) : the_row(); 
        $title = 'title';
        $text = 'text';
        $list = 'list';
      ?>
        <div class="user_agreement__block">
          <?php if (get_sub_field($title)) : ?>
            <h2 class="section_title">
              <?php the_sub_field($title) ?>
            </h2>
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