<?php get_header(); ?>

<div id="fp-hero">
  <div class="fp-hero-title">
    <div class="flex-row">
      <div class="fp-hero-title-img">
        <img src="wp-content/themes/256ktest-recreation/assets/logo-white.png" />
      </div>
      <div class="fp-hero-title-header">
        <h1><?php bloginfo('name'); ?></h1>
        <p>
          <?php bloginfo( 'description' ); ?>
        </p>
      </div>
    </div>
  </div>
  <div class="fp-hero-message">
    <div class="flex-row">
      <div class="container">

      <h1>Welcome to <?php bloginfo( 'name' ); ?></h1>
      <p>
        <?php
        if ( have_posts() ) :
          while (have_posts()) : the_post();?>

            <?php echo get_the_content(); ?>


          <?php
        endwhile;
        endif;
          ?>

    </div>
    </div>
  </div>
</div>
<div id="fp-projects-grid-wrapper">
  <div class="flex-row">
    <h1 class="fp-projects-grid-title">PROJECTS</h1>
    <div class="fp-projects-grid-box-wrapper">
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://fillmurray.com/400/500')">
        <div class="fp-projects-grid-box-overlay">
          <h1>WEB</h1>
          <p>
            Collection of websites and web applications created by Fayek Helmi
          </p>
          <!-- visual category # 212 -->
          <a href="<?php echo get_category_link( 210 ); ?>" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>
      </div>
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://fillmurray.com/450/550')">
        <div class="fp-projects-grid-box-overlay">
          <h1>ELECTRONICS</h1>
          <p>
            Collection of custom DIY electronic devices designed and or built by Fayek Helmi
          </p>
          <a href="<?php echo get_category_link(211); ?>" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>
      </div>
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://fillmurray.com/550/650')">
        <div class="fp-projects-grid-box-overlay">
          <h1>VISUAL</h1>
          <p>
            Collection of Processing sketches, p5js sketches, CAD files, graphic designs and other visual items created by Fayek Helmi
          </p>
          <a href="<?php echo get_category_link( 212 ); ?>" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>

      </div>
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://fillmurray.com/500/600')">
        <div class="fp-projects-grid-box-overlay">
          <h1>MUSIC</h1>
          <p>
            Collection of music and music related projects created by Fayek Helmi
          </p>
          <a href="<?php echo get_category_link( 209 ); ?>" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>
      </div>

    </div>
  </div>
</div>
<div id="fp-blog-grid">
  <div class="flex-row">
    <h1 class="fp-blog-grid-title">BLOG</h1>
    <div class="fp-blog-grid-box-wrapper">

        <?php

        $WebPosts = new WP_Query('cat=5&posts_per_page=6');
        if ($WebPosts-> have_posts()) :
          while ( $WebPosts-> have_posts()) : $WebPosts->  the_post();
          if (has_post_thumbnail()):
            $thumbnailvar = get_the_post_thumbnail_url($post, 'full');
          else :
            $thumbnailvar = 'http://www.fillmurray.com/600/800';
          endif;
        ?>
              <div class="fp-blog-grid-box">

                    <a href='<?php the_permalink(); ?>'><div class="fp-blog-grid-box-image" style="background-image: url('<?php echo $thumbnailvar ?>')">
                    </div></a>
                    <div class="fp-blog-grid-box-content">
                      <a href="<?php the_permalink(); ?>"><h2><?php echo get_the_title(); ?></h2></a>
                      <p class="blog-post-date">
                        <?php the_time('d - m - Y'); ?>
                      </p>
                      <p>
                        <?php echo get_the_excerpt(); ?>

                        <a href="<?php the_permalink(); ?>">
                          Go...
                        </a>
                      </p>
                    </div>

              </div>


              <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>

      </div>
    </div>

  <div class="flex-row">
    <a href="blog" class="fp-button">View Blog</a>
  </div>
</div>

<?php get_footer(); ?>
