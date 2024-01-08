<footer class="footer" id="footer">
      <div class="container">
        <div class="heading-h2 text-center">
          <div class="line" data-aos="fade-down"></div>
          <div class="sub-txt" data-aos="fade-up">Contact us</div>
          <h2 data-aos="fade-up">Let's talk about the project</h2>
        </div>
        <div class="footer-form" data-aos="fade-up">
          <form action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="yourName"
                    placeholder="YOUR NAME"
                  />
                  <label for="yourName">YOUR NAME</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="yourEmail"
                    placeholder="YOUR EMAIL"
                  />
                  <label for="yourEmail">YOUR EMAIL</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="company"
                    placeholder="COMPANY"
                  />
                  <label for="company">COMPANY</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    placeholder="SUBJECT"
                  />
                  <label for="subject">SUBJECT</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-floating mb-3">
                  <textarea
                    class="form-control"
                    placeholder="YOUR MESSAGE"
                    id="yourMessage"
                    style="height: 100px"
                  ></textarea>
                  <label for="yourMessage">YOUR MESSAGE</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <button class="btn btn-warning">
                  Get in Touch
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/arrow-right.svg"
                    alt="Get in Touch"
                    width="11"
                    height="7"
                  />
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="footer-bottom">
          <div class="foo1" data-aos="fade-up">
           <?php
            if(is_active_sidebar('footer-1'))
            dynamic_sidebar('footer-1');
           ?>
          </div>
          <div class="foo2" data-aos="fade-up">
          <?php
            if(is_active_sidebar('footer-2'))
            dynamic_sidebar('footer-2');
           ?>
          </div>
          <div class="foo2" data-aos="fade-up">
          <?php
            if(is_active_sidebar('footer-3'))
            dynamic_sidebar('footer-3');
           ?>
          </div>
          <div class="foo3" data-aos="fade-up">
          <?php
            if(is_active_sidebar('footer-4'))
            dynamic_sidebar('footer-4');
           ?>
          </div>
        </div>
      </div>
    </footer>
  
    <script>
      AOS.init();
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
