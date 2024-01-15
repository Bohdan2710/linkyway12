<section class="main__packages">
  <div class="container">
    <h2 class="packages__title section_title">our<span class="span_title_violet">packages</span></h2>
    <div class="packages__wrap">
      <form class="packages__form packages">

        <div class="packages__label_wrap">
          <label for="validationDefault01" class="form-label">Quantity<span>*Choose the number of posts</span></label>
          <input type="number" value="1" class="form-control text_grey" id="validationDefault01" required>
        </div>

        <div class="packages__label_wrap">
          <label for="validationDefault02" class="form-label">Choose you niche</label>
          <select class="form-select text_grey none_arrow" id="validationDefault02" required>
            <option selected value="General">General</option>
            <option>Pro</option>
            <option>VIP</option>
          </select>
        </div>

        <div class="packages__label_wrap">
          <label for="validationDefault03" class="form-label">Language</label>
          <select class="form-select text_grey" id="validationDefault03" required>
            <option selected value="English">English</option>
            <option>Spanish</option>
            <option>Polish</option>
          </select>
        </div>

        <div class="packages__label_wrap">
          <label for="validationDefault04" class="form-label">Top Country</label>
          <select class="form-select text_grey" id="validationDefault04" required>
            <option selected value="Spain">Spain</option>
            <option>United Kingdom</option>
            <option>Polish</option>
          </select>
        </div>
        <div class="packages__label_wrap">
          <div class="packages__total text_grey">
            <span>Total</span>
            <span class="total__sum">$100</span>
          </div>
        </div>

        <span class="packages__commission text_grey">
          Commission: Our commission is $35 per referral. *May be lower or higher depending on the complexity of the links
        </span>
        <div class="packages__wrap_buttons">
          <button class="button_violet" type="submit">outreach</button>
          <button class="button_black" type="submit">crowd</button>
        </div>
      </form>
      <div class="packages__request_packages">
        <div class="request_packages__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/packages/astronaut_packages.png" alt="img-astronaut">
        </div>
        <span class="request_packages__title">
          <span>
            approximate price
          </span>
        </span>
        <span class="request_packages__sum">$589</span>
        <span class="request_packages__text text_grey">The displayed result is an average. If you want to know the exact prices of the sites for your requirements. Leave a request for discussion.</span>
        <a href="#" class="request_packages__button button_violet">Leave a request</a>
      </div>
    </div>
  </div>
</section>