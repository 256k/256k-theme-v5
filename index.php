<?php
get_header();
?>
  <div id="blog-page">
<?php

    if (have_posts()):
      while (have_posts()):the_post();
      if (has_post_thumbnail()):
        $thumbnailvar = get_the_post_thumbnail_url($post, 'full');
      else :
        $thumbnailvar = 'http://www.fillmurray.com/600/80';
      endif;
    ?>
    <div class="blog-post-wrapper">



      <a href=" <?php the_permalink(); ?> ">
          <div class="blog-post-image" style="background-image: url('<?php echo $thumbnailvar ?>')"></div></a>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <p class="blog-post-date">
            <?php the_time('d - m - Y'); ?>
          </p>
          <p class="blog-post-date">
            <!-- echo get_post_meta -->
          </p>
          <p class="blog-post-content">
            <?php echo get_the_excerpt(); ?>
          </p>
          <a href="<?php the_permalink(); ?>" class="blog-post-button">
            Read Full
          </a>
          <div class="blog-post-info">
            <div class="blog-post-info-tags">
              <p>
                <?php the_tags( 'tags', ' - ', "" ); ?>
              </p>
            </div>
          </div>
          <hr />
        </div>
    <?php
      endwhile;
      else :
        echo '<p>
        no content found buddy. sorry.
        </p>';
      endif;
      ?>

<!--  navigation links -->
<div class="navigation_post_links">
<!-- view older posts -->
  <p>
    <?php next_posts_link( '< Older Posts' ); ?>
  </p>
  <!-- view newer posts  -->
<p>
  <?php previous_posts_link( 'Newer Posts >' ); ?>
</p>

</div>


</div>
  <?php
get_footer();
 ?>
