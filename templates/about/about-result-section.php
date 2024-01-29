<?php
  $about_result_image = 'about_result_image';
?>
<section class="about__result">
  <div class="result__container container">
    <div class="result__list">
      <ul>
        <li>
          <span class="result__list_sum section_title">100+</span>
          <div class="result__list_wrap">
            <span class="result__list_title section_title">Loren ipsum</span>
            <span class="result__list_text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span>
          </div>
        </li>
        <li>
          <span class="result__list_sum section_title">100+</span>
          <div class="result__list_wrap">
            <span class="result__list_title section_title">Loren ipsum</span>
            <span class="result__list_text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span>
          </div>
        </li>
        <li class="margin">
          <span class="result__list_sum section_title">100+</span>
          <div class="result__list_wrap">
            <span class="result__list_title section_title">Loren ipsum</span>
            <span class="result__list_text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span>
          </div>
        </li>
      </ul>
    </div>
    <div class="result__img">
      <?php $image = get_field($about_result_image);
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>