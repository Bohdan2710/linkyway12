<form class="hero__form form_booking_data">
  <span class="form_booking_data__title">booking data</span>
  <div class="form_booking_data__wrap">
    <label for="user" class="form-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/user_form.svg" alt="user"></label>
    <input placeholder="Last&First Name" type="text" class="form-control" id="user" required>
  </div>

  <div class="form_booking_data__wrap">
    <label for="email" class="form-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/email_form.svg" alt="user"></label>
    <input placeholder="Your e-mail" type="email" class="form-control" id="email" required>
  </div>

  <div class="form_booking_data__wrap">
    <label for="date" class="form-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/calendar_form.svg" alt="user"></label>
    <input placeholder="Choose a convenient date" type="date" class="form-control" id="date" required>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
      I give my consent to the processing <span>of personal data</span>
    </label>
  </div>
  <button class="button_violet" type="submit">send</button>
</form>