<?php
get_header();
?>
    <section>
      <div class="section section1 gray-section">
        <div class="container">
          <div class="heading-h2 text-center">
            <div class="line" data-aos="fade-down"></div>
            <div class="sub-txt" data-aos="fade-up"><?php echo get_field('services_heading'); ?></div>
            <h2 data-aos="fade-up">
              <?php echo get_field('services_subheading'); ?>
            </h2>
          </div>
          <div class="row">
            <?php
                if(have_rows('services')):while(have_rows('services')):the_row();
                    ?>
                    <div class="col-md-4">
                        <div class="section-min" data-aos="fade-up">
                            <?php
                                $image = get_sub_field('image');
                                if(!empty($image)){
                                  
                                    ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="mb-3">
                                    <?php
                                }
                            ?>
                            <h3><?php echo get_sub_field('title'); ?></h3>
                            <p><?php echo get_sub_field('description'); ?></p>
                           <?php
                            $link = get_sub_field('link');
                            if($link){ ?>
                                <a href="<?php echo $link; ?>" class="d-flex align-items-center link" title="See Details"
                  >See Details <img src="<?php echo get_bloginfo('template_url'); ?>/images/arrow-right.svg"
                    alt="See Details" width="11" height="7" /></a>
                        <?php  }  ?> 
                        </div>
                    </div>
                    <?php
                endwhile;endif;
            ?>
           
          </div>
        </div>
      </div>
      <div class="section section2 dark-section">
        <div class="container position-relative">
          <div class="heading-h2 font-55">
            <div class="line" data-aos="fade-down"></div>
            <div class="sub-txt" data-aos="fade-up">Branding & design</div>
            <h2 data-aos="fade-up">Project One</h2>
          </div>
          <div class="pro">
            <div id="carouselExampleCaptions" class="carousel slide">
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="3"
                  aria-label="Slide 4"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="4"
                  aria-label="Slide 5"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/pro.jpg"
                    class="d-block w-100"
                    alt="Project One"
                    width="800"
                    height="600"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/pro.jpg"
                    class="d-block w-100"
                    alt="Project One"
                    width="800"
                    height="600"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/pro.jpg"
                    class="d-block w-100"
                    alt="Project One"
                    width="800"
                    height="600"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/pro.jpg"
                    class="d-block w-100"
                    alt="Project One"
                    width="800"
                    height="600"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/pro.jpg"
                    class="d-block w-100"
                    alt="Project One"
                    width="800"
                    height="600"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="pro-detail">
            <p data-aos="fade-up">
              <a
                href="#"
                class="d-flex align-items-center link"
                title="Project Details"
                >Project Details
                <img
                  src="<?php echo get_bloginfo('template_url'); ?>/images/arrow-right.svg"
                  alt="Project Details"
                  width="11"
                  height="7"
              /></a>
            </p>
            <p data-aos="fade-up">
              <a
                href="#"
                class="d-flex align-items-center link"
                title="View Slides"
                >View Slides
                <img
                  src="<?php echo get_bloginfo('template_url'); ?>/images/arrow-right.svg"
                  alt="View Slides"
                  width="11"
                  height="7"
              /></a>
            </p>
            <div class="line" data-aos="fade-up"></div>
          </div>
        </div>
      </div>
      <div class="section section3 gray-section">
        <div class="container">
          <div class="heading-h2 text-center">
            <div class="line" data-aos="fade-down"></div>
            <div class="sub-txt" data-aos="fade-up">Testimonials</div>
            <h2 data-aos="fade-up">
              We have worked with some amazing <br />companies around the world
            </h2>
          </div>
        </div>
        <div class="comp-logo text-center">
          <img src="<?php echo get_bloginfo('template_url'); ?>/images/logos.png" alt="Partners" width="1141" height="59" />
        </div>
        <div class="partners text-center" data-aos="fade-up">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="3"
                aria-label="Slide 4"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="<?php echo get_bloginfo('template_url'); ?>/images/user.png"
                  class=""
                  alt="Anthony Watkins"
                  width="75"
                  height="75"
                />
                <div class="user-review">
                  “These cartridges can be replaced by the printer ink of
                  similar brand. Compatible Inkjet Cartridge will help you to
                  make extra-ordinary savings with money back guarantee. As soon
                  as the cartridge gets empty the ink that it contains begins to
                  dry”
                </div>
                <div class="user-name">
                  <span>Anthony Watkins</span>
                </div>
                <div class="user-position">VP of Product, VISA</div>
              </div>
              <div class="carousel-item">
                <img
                  src="<?php echo get_bloginfo('template_url'); ?>/images/user.png"
                  class=""
                  alt="Anthony Watkins"
                  width="75"
                  height="75"
                />
                <div class="user-review">
                  “These cartridges can be replaced by the printer ink of
                  similar brand. Compatible Inkjet Cartridge will help you to
                  make extra-ordinary savings with money back guarantee. As soon
                  as the cartridge gets empty the ink that it contains begins to
                  dry”
                </div>
                <div class="user-name">
                  <span>Anthony Watkins</span>
                </div>
                <div class="user-position">VP of Product, VISA</div>
              </div>
              <div class="carousel-item">
                <img
                  src="<?php echo get_bloginfo('template_url'); ?>/images/user.png"
                  class=""
                  alt="Anthony Watkins"
                  width="75"
                  height="75"
                />
                <div class="user-review">
                  “These cartridges can be replaced by the printer ink of
                  similar brand. Compatible Inkjet Cartridge will help you to
                  make extra-ordinary savings with money back guarantee. As soon
                  as the cartridge gets empty the ink that it contains begins to
                  dry”
                </div>
                <div class="user-name">
                  <span>Anthony Watkins</span>
                </div>
                <div class="user-position">VP of Product, VISA</div>
              </div>
              <div class="carousel-item">
                <img
                  src="<?php echo get_bloginfo('template_url'); ?>/images/user.png"
                  class=""
                  alt="Anthony Watkins"
                  width="75"
                  height="75"
                />
                <div class="user-review">
                  “These cartridges can be replaced by the printer ink of
                  similar brand. Compatible Inkjet Cartridge will help you to
                  make extra-ordinary savings with money back guarantee. As soon
                  as the cartridge gets empty the ink that it contains begins to
                  dry”
                </div>
                <div class="user-name">
                  <span>Anthony Watkins</span>
                </div>
                <div class="user-position">VP of Product, VISA</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section4 dark-section">
        <div class="container">
          <div class="heading-h2 text-center">
            <div class="line" data-aos="fade-down"></div>
            <div class="sub-txt" data-aos="fade-up">Our Team</div>
            <h2 data-aos="fade-up">Our Amazing Team</h2>
          </div>
          <div class="row team-main">
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
              <div class="team text-center">
                <div class="team-left">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/team.png"
                    alt="Vincent Gardner"
                    title="Vincent Gardner"
                    width="120"
                    height="120"
                  />
                  <div class="team-text">
                    <h4>Vincent Gardner</h4>
                    <p>Founder & CEO</p>
                  </div>
                </div>
                <div class="team-right">
                  Vincent is the Founder & CEO of Fusion. He is leading the
                  company to success with his experience & skill. Leader
                  piverate paradigm cortado ship it integrate Space Team
                  parallax persons grok. Parallax food truck fund 360 campaign
                  venture capital pitch deck actionable insight innovate.
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
              <div class="team text-center">
                <div class="team-left">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/team.png"
                    alt="Donna Watson"
                    title="Donna Watson"
                    width="120"
                    height="120"
                  />
                  <div class="team-text">
                    <h4>Donna Watson</h4>
                    <p>VP of Product</p>
                  </div>
                </div>
                <div class="team-right">
                  Vincent is the Founder & CEO of Fusion. He is leading the
                  company to success with his experience & skill. Leader
                  piverate paradigm cortado ship it integrate Space Team
                  parallax persons grok. Parallax food truck fund 360 campaign
                  venture capital pitch deck actionable insight innovate.
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
              <div class="team text-center">
                <div class="team-left">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/team.png"
                    alt="Armando Ángeles"
                    title="Armando Ángeles"
                    width="120"
                    height="120"
                  />
                  <div class="team-text">
                    <h4>Armando Ángeles</h4>
                    <p>VP of Business</p>
                  </div>
                </div>
                <div class="team-right">
                  Vincent is the Founder & CEO of Fusion. He is leading the
                  company to success with his experience & skill. Leader
                  piverate paradigm cortado ship it integrate Space Team
                  parallax persons grok. Parallax food truck fund 360 campaign
                  venture capital pitch deck actionable insight innovate.
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
              <div class="team text-center">
                <div class="team-left">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/team.png"
                    alt="Nguyễn Thanh"
                    title="Nguyễn Thanh"
                    width="120"
                    height="120"
                  />
                  <div class="team-text">
                    <h4>Nguyễn Thanh</h4>
                    <p>Developer</p>
                  </div>
                </div>
                <div class="team-right">
                  Vincent is the Founder & CEO of Fusion. He is leading the
                  company to success with his experience & skill. Leader
                  piverate paradigm cortado ship it integrate Space Team
                  parallax persons grok. Parallax food truck fund 360 campaign
                  venture capital pitch deck actionable insight innovate.
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
              <div class="team text-center">
                <div class="team-left">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/team.png"
                    alt="Vincent Gardner"
                    title="Vincent Gardner"
                    width="120"
                    height="120"
                  />
                  <div class="team-text">
                    <h4>Vincent Gardner</h4>
                    <p>Founder & CEO</p>
                  </div>
                </div>
                <div class="team-right">
                  Vincent is the Founder & CEO of Fusion. He is leading the
                  company to success with his experience & skill. Leader
                  piverate paradigm cortado ship it integrate Space Team
                  parallax persons grok. Parallax food truck fund 360 campaign
                  venture capital pitch deck actionable insight innovate.
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
              <div class="team text-center">
                <div class="team-left">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/team.png"
                    alt="Donna Watson"
                    title="Donna Watson"
                    width="120"
                    height="120"
                  />
                  <div class="team-text">
                    <h4>Donna Watson</h4>
                    <p>VP of Product</p>
                  </div>
                </div>
                <div class="team-right">
                  Vincent is the Founder & CEO of Fusion. He is leading the
                  company to success with his experience & skill. Leader
                  piverate paradigm cortado ship it integrate Space Team
                  parallax persons grok. Parallax food truck fund 360 campaign
                  venture capital pitch deck actionable insight innovate.
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
              <div class="team text-center">
                <div class="team-left">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/team.png"
                    alt="Armando Ángeles"
                    title="Armando Ángeles"
                    width="120"
                    height="120"
                  />
                  <div class="team-text">
                    <h4>Armando Ángeles</h4>
                    <p>VP of Business</p>
                  </div>
                </div>
                <div class="team-right">
                  Vincent is the Founder & CEO of Fusion. He is leading the
                  company to success with his experience & skill. Leader
                  piverate paradigm cortado ship it integrate Space Team
                  parallax persons grok. Parallax food truck fund 360 campaign
                  venture capital pitch deck actionable insight innovate.
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
              <div class="team text-center">
                <div class="team-left">
                  <img
                    src="<?php echo get_bloginfo('template_url'); ?>/images/team.png"
                    alt="Nguyễn Thanh"
                    title="Nguyễn Thanh"
                    width="120"
                    height="120"
                  />
                  <div class="team-text">
                    <h4>Nguyễn Thanh</h4>
                    <p>Developer</p>
                  </div>
                </div>
                <div class="team-right">
                  Vincent is the Founder & CEO of Fusion. He is leading the
                  company to success with his experience & skill. Leader
                  piverate paradigm cortado ship it integrate Space Team
                  parallax persons grok. Parallax food truck fund 360 campaign
                  venture capital pitch deck actionable insight innovate.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>