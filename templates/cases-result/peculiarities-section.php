<?php 
  $cases_block_3_title = 'cases_block_3_title';
  $cases_block_3_text = 'cases_block_3_text';
  $cases_block_3_list = 'cases_block_3_list';
?>
<section class="cases_result__peculiarities">
  <div class="peculiarities__container container">
    <div class="peculiarities__content_peculiarities">
      <?php if( get_field($cases_block_3_title) ): ?>
        <h2 class="content_peculiarities__title section_title">
          <?php the_field($cases_block_3_title); ?>
        </h2>
      <?php endif; ?>
      <?php if( get_field($cases_block_3_text) ): ?>
        <p class="content_peculiarities__text text_grey">
          <?php the_field($cases_block_3_text); ?>
        </p>
      <?php endif; ?>
    </div>
    <div class="peculiarities__list">
      <ul>
        <?php if (have_rows($cases_block_3_list)) : ?>
          <?php while (have_rows($cases_block_3_list)) : the_row(); 
            $text = 'text';
          ?>
            <?php if (get_sub_field($text)) : ?>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/cases-result-peculiarities.svg" alt="img-icon">
                <p class="text_grey">
                  <?php the_sub_field($text) ?>
                </p>
              </li>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>