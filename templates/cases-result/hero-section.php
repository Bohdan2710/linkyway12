<?php
  $cases_posts_hero_main_title = 'cases_posts_hero_main_title';
  $cases_posts_hero_main_text = 'cases_posts_hero_main_text';
  $cases_posts_hero_result = 'cases_posts_hero_result';
?>
<seciton class="cases_result__hero_cases_result">
  <div class="hero_cases_result__container container">
    <div class="hero_cases_result__wrap">
      <div class="hero_cases_result__content">

        <?php if( get_field($cases_posts_hero_main_title) ): ?>
          <h2 class="hero_cases_result__title section_title">
            <?php the_field($cases_posts_hero_main_title, ); ?>
          </h2>
        <?php endif; ?>
        <?php if( get_field($cases_posts_hero_main_text)): ?>
          <span class="result__text">
            <?php the_field($cases_posts_hero_main_text); ?>
          </span>
        <?php endif; ?>

      </div>
      <?php if (have_rows($cases_posts_hero_result)) : ?>
        <div class="hero_cases_result__results">
          <?php while (have_rows($cases_posts_hero_result)) : the_row(); 
            $title = 'title';
            $text = 'text';
          ?>
          <div class="result__block">
            <?php if (get_sub_field($title)) : ?>
              <span class="result__number section_title">
                <?php the_sub_field($title) ?>
              </span>
            <?php endif; ?>

            <?php if (get_sub_field($text)) : ?>
                <span class="result__text">
                  <?php the_sub_field($text) ?>
              </span>
            <?php endif; ?>
          </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</seciton>