<?php
  $faq_title = 'faq_title';
  $faq_blocks = 'faq_blocks';
?>
<section class="main__faq faq" id="faq">
  <div class="container">
    <?php if( get_field($faq_title) ): ?>
      <h2 class="faq__title section_title">
        <?php the_field($faq_title); ?>
      </h2>
    <?php endif; ?>
    <div class="faq__accordion accordion accordion-flush" id="accordionFlushExample">
      <?php if (have_rows($faq_blocks)) : ?>
        <?php while (have_rows($faq_blocks)) : the_row(); 
          $title = 'title';
          $text = 'text';
        ?>
          <div class="accordion-item">
            <h3 class="accordion-header" id="flush-heading<?php echo get_row_index(); ?>">
              <?php if (get_sub_field($title)) : ?>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo get_row_index(); ?>">
                  <?php the_sub_field($title) ?>
                  <div class="accordion-button-icon"></div>
                </button>
              <?php endif; ?>
            </h3>
            <div id="flush-collapse<?php echo get_row_index(); ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo get_row_index(); ?>" data-bs-parent="#accordionFlushExample">

              <?php if (get_sub_field($text)) : ?>
                <div class="accordion-body">
                  <?php the_sub_field($text) ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>