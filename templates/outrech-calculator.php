<?php
  $outrech_calculator_title = 'outrech_calculator_title';

  $outrech_calculator_quantity_name_input = 'outrech_calculator_quantity_name_input';

  $outrech_calculator_niche_input_name = 'outrech_calculator_niche_input_name';
  $outrech_calculator_niche_option = 'outrech_calculator_niche_option';

  $outrech_calculator_language_input_name = 'outrech_calculator_language_input_name';
  $outrech_calculator_language_option = 'outrech_calculator_language_option';

  $outrech_calculator_country_input_name = 'outrech_calculator_country_input_name';
  $outrech_calculator_country_option = 'outrech_calculator_country_option';

  $outrech_calculator_commission = 'outrech_calculator_commission';
?>
<form class="packages__form packages" id="calculator">
  <div class="packages__label_wrap">
    <?php if( get_field($outrech_calculator_quantity_name_input, 583) ): ?>
      <label for="validationDefault01" class="form-label">
        <?php the_field($outrech_calculator_quantity_name_input, 583); ?>
      </label>
    <?php endif; ?>
    <input type="number" value="1" min="1" max="100" class="form-control text_grey" name="quantity" id="validationDefault01" required>
  </div>

  <div class="packages__label_wrap">
    <?php if( get_field($outrech_calculator_niche_input_name, 583) ): ?>
      <label for="validationDefault02" class="form-label">
        <?php the_field($outrech_calculator_niche_input_name, 583); ?>
      </label>
    <?php endif; ?>
    <select class="form-select text_grey none_arrow" id="validationDefault02" name="niche" required>
      <?php if (have_rows($outrech_calculator_niche_option, 583)) : ?>
        <?php while (have_rows($outrech_calculator_niche_option, 583)) : the_row(); 
          $option = 'option';
        ?>
          <?php if (get_sub_field($option)) : ?>
            <option>
              <?php the_sub_field($option) ?>
            </option>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </select>
  </div>

  <div class="packages__label_wrap">
    <?php if( get_field($outrech_calculator_language_input_name, 583) ): ?>
      <label for="validationDefault03" class="form-label">
        <?php the_field($outrech_calculator_language_input_name, 583); ?>
      </label>
    <?php endif; ?>
    <select class="form-select text_grey" id="validationDefault03" name="language" required>
      <?php if (have_rows($outrech_calculator_language_option, 583)) : ?>
        <?php while (have_rows($outrech_calculator_language_option, 583)) : the_row(); 
          $option = 'option';
        ?>
          <?php if (get_sub_field($option)) : ?>
            <option>
              <?php the_sub_field($option) ?>
            </option>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </select>
  </div>

  <div class="packages__label_wrap">
    <?php if( get_field($outrech_calculator_country_input_name, 583) ): ?>
      <label for="validationDefault04" class="form-label">
        <?php the_field($outrech_calculator_country_input_name, 583); ?>
      </label>
    <?php endif; ?>
    <select class="form-select text_grey" id="validationDefault04" name="country" required>
      <?php if (have_rows($outrech_calculator_country_option, 583)) : ?>
        <?php while (have_rows($outrech_calculator_country_option, 583)) : the_row(); 
          $option = 'option';
        ?>
          <?php if (get_sub_field($option)) : ?>
            <option>
              <?php the_sub_field($option) ?>
            </option>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </select>
  </div>
  <div class="packages__label_wrap">
    <div class="packages__total text_grey">
      <span>Total</span>
      <span class="total__sum">$180</span>
    </div>
  </div>
  <?php if( get_field($outrech_calculator_commission, 583) ): ?>
    <span class="packages__commission text_grey">
      <?php the_field($outrech_calculator_commission, 583); ?>
    </span>
  <?php endif; ?>
</form>