<footer class="footer">
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
            <img
              src="<?php echo get_bloginfo('template_url'); ?>/images/fusion.svg"
              alt="Fusion"
              title="Fusion"
              width="55"
              height="56"
            />
          </div>
          <div class="foo2" data-aos="fade-up">
            <h3>California Office</h3>
            <p>
              4243 Woodland Terrace <br />Sacramento, CA 95814 <br />916 753
              2645
            </p>
          </div>
          <div class="foo2" data-aos="fade-up">
            <h3>New york Office</h3>
            <p>
              885 Oakwood Avenue<br />
              New York, NY 10013<br />
              212 660 0744
            </p>
          </div>
          <div class="foo3" data-aos="fade-up">
            <h3>Other Contact</h3>
            <p>
              <a
                href="mailto:jobs@templateocean.com"
                title="jobs@templateocean.com"
                >jobs@templateocean.com</a
              >
            </p>
            <ul>
              <li>
                <a href="#" title="Facebook"
                  ><img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/facebook.svg"
                    alt="Facebook"
                    title="Facebook"
                    width="22"
                    height="22"
                /></a>
              </li>
              <li>
                <a href="#" title="Twitter"
                  ><img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/twitter.svg"
                    alt="Twitter"
                    title="Twitter"
                    width="22"
                    height="22"
                /></a>
              </li>
              <li>
                <a href="#" title="Pinterest"
                  ><img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/pinterest.svg"
                    alt="Pinterest"
                    title="Pinterest"
                    width="22"
                    height="22"
                /></a>
              </li>
              <li>
                <a href="#" title="Instagram"
                  ><img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/instagram.svg"
                    alt="Instagram"
                    title="Instagram"
                    width="22"
                    height="22"
                /></a>
              </li>
              <li>
                <a href="#" title="Dribbble"
                  ><img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/dribbble.svg"
                    alt="Dribbble"
                    title="Dribbble"
                    width="22"
                    height="22"
                /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
