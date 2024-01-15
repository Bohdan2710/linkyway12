<section class="main__hero">
  <div class="hero__background">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/hero/background.jpg" alt="img-background">
  </div>
  <div class="hero__container container">
    <div class="hero__content">
      <h1 class="hero__title">Link building services <span class="span_title_violet">agency</span></h1>
      <p class="hero__text">We are an agency that can get you backlinks that will grow your traffic and lead</p>
    </div>
    <form class="hero__form form_booking_data">
      <span class="form_booking_data__title">booking data</span>
      <div class="form_booking_data__wrap">
        <label for="user" class="form-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/user_form.svg" alt="user"></label>
        <input placeholder="Last&First Name" type="text" class="form-control" id="user">
      </div>

      <div class="form_booking_data__wrap">
        <label for="email" class="form-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/email_form.svg" alt="user"></label>
        <input placeholder="Your e-mail" type="email" class="form-control" id="email">
      </div>

      <div class="form_booking_data__wrap">
        <label for="date" class="form-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/calendar_form.svg" alt="user"></label>
        <input placeholder="Choose a convenient date" type="number" class="form-control" id="date">
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          I give my consent to the processing <span>of personal data</span>
        </label>
      </div>
      <button class="button_violet" type="submit">send</button>
    </form>
  </div>
</section>