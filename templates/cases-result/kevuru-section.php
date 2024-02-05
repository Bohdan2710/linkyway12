<?php 
  $cases_posts_about_image = 'cases_posts_about_image';
  $cases_posts_about_title = 'cases_posts_about_title';
  $cases_posts_about_text = 'cases_posts_about_text';
?>
<section class="cases_result__kevuru">
  <div class="kevuru__container container">
    <div class="kevuru__img">
      <?php $image = get_field($cases_posts_about_image);
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
      <?php endif; ?>
    </div>
    <div class="kevuru__content_kevuru">

      <?php if( get_field($cases_posts_about_title) ): ?>
        <h3 class="content_kevuru__title section_title">
          <?php the_field($cases_posts_about_title); ?>
        </h3>
      <?php endif; ?>
      <div  class="content_kevuru__text text_grey">
        <?php if( get_field($cases_posts_about_text) ): ?>
          <?php the_field($cases_posts_about_text); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>