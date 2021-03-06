<?php get_header();
if (is_category( $category = 'web' )) :
$coverImage = 'http://www.256klabs.com/wpdev/wp-content/uploads/2017/04/web-projects.jpg';
elseif (is_category( $category = 'electronics' )) :
$coverImage = 'http://www.256klabs.com/wpdev/wp-content/uploads/2017/04/electronics-projects.jpg';
elseif (is_category( $category = 'art' )) :
$coverImage = 'http://www.256klabs.com/wpdev/wp-content/uploads/2017/04/music-projects.jpg';
else :
  $coverImage = 'http://www.256klabs.com/wpdev/wp-content/uploads/2017/04/bk2.jpg';
endif;
?>
<div class="projects-hero" style="background-image: url('<?php echo $coverImage ?>')">

  <h1 class="project-hero-title"><?php single_cat_title( '', true ) ?></h1>
  <div class="container">
    <p class="project-hero-description">
      <?php echo category_description(  ); ?>
    </p>
  </div>
</div>




<div class="projects-grid">
  
  <?php if (have_posts()) : ?>

  	<?php while (have_posts()) : the_post();
      if (has_post_thumbnail()):
        $thumbnailvar = get_the_post_thumbnail_url($post, 'full');
      else :
        $thumbnailvar = 'http://www.256klabs.com/wpdev/wp-content/uploads/2017/04/bk2.jpg';
      endif;?>
      
        <div class="projects-grid-box">
          <div class="project-image" style="background-image: url('<?php echo $thumbnailvar ?>')"></div>
          <h2 class="project-title"><?php the_title(); ?></h2>
          <p>
            <?php the_excerpt(); ?>
          </p>
          <a href="<?php the_permalink() ?>" class="projects-grid-box-button">
        view
      </a>
        </div>
      
      

  		<?php // Individual Post Styling ?>

  	<?php endwhile; ?>

  		<?php // Navigation ?>

  	<?php else : ?>
      <h1>Sorry, but looks like this page is empty!</h1>

  		<?php // No Posts Found ?>

  <?php endif; ?>
  


</div>
<?php get_footer(); ?>
