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
            <?php if(have_rows('projects')): ?>
                <div class="carousel-indicators">
                <?php
                $i = 0; 
                while(have_rows('projects')):the_row();
                if($i==0){
                    $class="active";
                    $current = "true";
                }else{
                    $class="";
                    $current = "";
                }
                    ?>
                    <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="<?php echo $i; ?>"
                  class="<?php echo $class; ?>"
                  aria-current="<?php echo $current; ?>"
                  aria-label="Slide <?php echo $i+1; ?>"
                ></button>
                    <?php
                    $i++;
                endwhile;
                
                ?>
                </div>
                <?php endif; ?>
                <div class="carousel-inner">
                <?php 
                $i=0;
                if(have_rows('projects')):  while(have_rows('projects')):the_row(); ?>
                    <?php
                        $image = get_sub_field('project_image'); 
                        if(!empty($image)){
                            ?>
                            <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                            <img src="<?php echo $image['url'] ?>" class="d-block w-100" alt="<?php echo $image['alt']; ?>" />
                            </div>
                            <?php
                        }
                    ?>
                <?php
                $i++;
                endwhile;endif;   ?>
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
        <?php
            global $post;
            $args = array('post_type' => 'client','posts_per_page'=>-1);
            $query = new WP_Query($args);
            if($query->have_posts()): ?>
             <div class="owl-carousel owl-theme">
                <?php while($query->have_posts()):$query->the_post(); ?>
                <div class="item">
                    <?php
                        $image = get_the_post_thumbnail_url();
                        if($image)
                        echo '<img src="'.$image.'" alt="'.get_the_title().'">'
                    ?>
                </div>
                <?php endwhile; ?>
            </div>
                <?php endif;  wp_reset_query(); ?>
        </div>
        <div class="partners text-center" data-aos="fade-up">
          <div id="carouselExampleIndicators" class="carousel slide">
          <?php
            global $post;
            $args = array('post_type' => 'testimonials','posts_per_page'=>-1);
            $query = new WP_Query($args);
            if($query->have_posts()): 
                echo '<div class="carousel-indicators">';
                $i = 0;
                while($query->have_posts()):
                    $query->the_post();
                    if($i==0){
                        $class="active";
                        $current = "true";
                    }else{
                        $class="";
                        $current = "";
                    }
                    ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>"
                class="<?php echo $class; ?>" aria-current="<?php echo $current; ?>" aria-label="Slide <?php echo $i+1; ?>" ></button>
                    <?php
                $i++;
                endwhile;
                echo '</div>';
            endif;
            wp_reset_query();

            if($query->have_posts()): 
                $i=0;
                echo '<div class="carousel-inner">';
                while($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="carousel-item <?php echo ($i==0)? 'active' : ''; ?>">
                        <?php
                            $image = get_the_post_thumbnail_url();
                            if($image)
                            echo '<img src="'.$image.'" alt="'.get_the_title().'">';
                        ?>
                        <div class="user-review">
                           <?php echo get_the_content(); ?>
                        </div>
                        <div class="user-name">
                            <span><?php echo get_the_title(); ?></span>
                        </div>
                        <div class="user-position"><?php echo get_field('designation'); ?></div>
                    </div>
                    <?php
                    $i++;
                endwhile;
                echo '</div>';
            endif;
            wp_reset_query();
              ?>
            
           
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
            <?php
                $args = array('post_type'=>'team','posts_per_page'=>-1);
                $query = new WP_Query($args);
                if($query->have_posts()):while($query->have_posts()):$query->the_post();
                    ?>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up">
                        <div class="team text-center">
                        <div class="team-left">
                            <?php 
                            $image = get_the_post_thumbnail_url(); 
                            if($image){
                                echo '<img src="'.$image.'" alt="'.get_the_title().'">';
                            }

                            ?>

                            <div class="team-text">
                            <h4><?php echo get_the_title(); ?></h4>
                            <p><?php echo get_field('designation'); ?></p>
                            </div>
                        </div>
                        <div class="team-right">
                           <?php echo get_the_content(); ?>
                        </div>
                        </div>
                        </div>
                    <?php
                endwhile;endif;
                wp_reset_query();
            ?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>