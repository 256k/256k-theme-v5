<?php get_header(); ?>
<div id="single-blog-post-page">
  <div class="single-blog-post-wrapper">
    <?php if (have_posts()) : ?>

    	<?php while (have_posts()) : the_post();
        if (has_post_thumbnail()):
          $thumbnailvar = get_the_post_thumbnail_url($post, 'full');
        else :
          $thumbnailvar = 'http://localhost:8080/wordpress/wp-content/uploads/2017/03/10253891_673167906064960_4534000355006174346_n.jpg';
        endif;
        ?>
        <div class="blog-post-image" style="background-image: url('<?php echo $thumbnailvar ?>')"></div>
    		<h1></h1>


    	<?php endwhile; ?>



    	<?php else : ?>

    		<?php echo 'No Posts Found' ?>

    <?php endif; ?>


    <div class="single-blog-post-content-container">
    <h1><?php the_title(); ?></h1>
    <p class="blog-post-date">
      <?php the_time('d - m - Y'); ?>
    </p>
    <div class="blog-post-content">
<?php echo  get_the_content(); ?>
    </div>

    <div class="blog-post-info">
      <div class="blog-post-info-tags">
        <p>
          <?php the_tags( 'tags', ' - ', "" ); ?>
        </p>
      </div>
    </div>
    <hr />
    <!--  navigation links -->
    <div class="navigation_post_links">
      <!-- view older posts  -->
    <p>
      <?php previous_post_link( '%link', '< Prev Post' ); ?>


    </p>
    <!-- view newer posts -->
      <p>
        <?php next_post_link( '%link', 'Next Post >'); ?>
      </p>


    </div>
  </div>

  </div>






</div>




<?php get_footer(); ?>
