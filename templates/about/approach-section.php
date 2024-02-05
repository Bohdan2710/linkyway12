<?php
  $about_approach_title = 'about_approach_title';
  $about_approach_text = 'about_approach_text';
?>
<section class="about__approach">
  <div class="container">
    <div class="approach__content">
      <?php if( get_field($about_approach_title) ): ?>
        <h2 class="approach__title section_title">
          <?php the_field($about_approach_title); ?>
        </h2>
      <?php endif; ?>
      <?php if( get_field($about_approach_text) ): ?>
        <span class="approach__text text_grey">
          <?php the_field($about_approach_text); ?>
        </span>
      <?php endif; ?>
    </div>
    <div class="approach__list">
      <ul>
        <?php if (have_rows("about_approach_block")) : ?>
          <?php while (have_rows("about_approach_block")) : the_row(); 
            $title = 'title';
            $text = 'text';
          ?>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/cases-result-peculiarities.svg" alt="img-icon">
            <div class="approach__item">
              <?php if (get_sub_field($title)) : ?>
                <span class="approach__item_title section_title">
                  <?php the_sub_field($title) ?>
                </span>
              <?php endif; ?>
              <?php if (get_sub_field($text)) : ?>
                <span class="text_grey">
                  <?php the_sub_field($text) ?>
                </span>
              <?php endif; ?>
            </div>
          </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <!-- <ul>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/cases-result-peculiarities.svg" alt="img-icon">
          <div class="approach__item">
            <span class="approach__item_title section_title">Loren ipsum</span>
            <span class="text_grey">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/cases-result-peculiarities.svg" alt="img-icon">
          <div class="approach__item">
            <span class="approach__item_title section_title">Loren ipsum</span>
            <span class="text_grey">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/cases-result-peculiarities.svg" alt="img-icon">
          <div class="approach__item">
            <span class="approach__item_title section_title">Loren ipsum</span>
            <span class="text_grey">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span>
          </div>
        </li>
      </ul> -->
    </div>
  </div>
</section>