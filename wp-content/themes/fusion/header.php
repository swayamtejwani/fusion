<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="<?php echo get_bloginfo('template_url'); ?>/images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="<?php echo get_bloginfo('template_url'); ?>/images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?php echo get_bloginfo('template_url'); ?>/images/favicon-16x16.png"
    />
    <?php wp_head(); ?>
  </head>

  <body>
    <header
      class="main-header d-flex justify-content-center align-items-center"
    >
      <div class="container">
        <div class="heading-center text-center">
          <?php echo get_field('heading'); ?>
          
        </div>
      </div>
      <div class="header-bottom">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <img
              src="<?php echo get_bloginfo('template_url'); ?>/images/fusion.svg"
              alt="Fusion Free"
              title="Fusion Free"
              width="55"
              height="56"
            />
            <a
              href="#footer"
              class="d-flex align-items-center link"
              title="Get in Touch"
              >Get in touch
              <img
                src="<?php echo get_bloginfo('template_url'); ?>/images/arrow-right.svg"
                alt="Get in touch"
                width="11"
                height="7"
            /></a>
          </div>
        </div>
        <img
          src="<?php echo get_bloginfo('template_url'); ?>/images/down-arrow.svg"
          alt="Down"
          class="down-side"
          width="13"
          height="8"
        />
      </div>
    </header>