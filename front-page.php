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

      <h1>Welcome to 256klabs</h1>
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
      <div class="fp-projects-grid-box" onClick="return true">
        <div class="fp-projects-grid-box-overlay">
          <h3>project type</h3>
          <p>
            project description. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          </p>
          <a href="#" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>
      </div>
      <div class="fp-projects-grid-box" onClick="return true">
        <div class="fp-projects-grid-box-overlay">
          <h3>project type</h3>
          <p>
            project description. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          </p>
          <a href="#" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>
      </div>
      <div class="fp-projects-grid-box" onClick="return true">
        <div class="fp-projects-grid-box-overlay">
          <h3>project type</h3>
          <p>
            project description. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          </p>
          <a href="#" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>

      </div>
      <div class="fp-projects-grid-box" onClick="return true">
        <div class="fp-projects-grid-box-overlay">
          <h3>project type</h3>
          <p>

            project description. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          </p>
          <a href="#" class="fp-projects-grid-box-overlay-button">
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
    <a href="blog-index.html" class="fp-button">View Blog</a>
  </div>
</div>

<?php get_footer(); ?>
