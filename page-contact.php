<?php get_header(); ?>


  
  <?php if (have_posts()) : ?>
  
  	<?php while (have_posts()) : the_post(); ?>
  <div class="container" style="padding: 0 20px">
    
    <h1>FOR ANY QUESTIONS OR WORK CONSULTATIONS PLEASE CONTACT ME HERE</h1>
    <?php the_content(); ?>
  </div>
  		
  
  	<?php endwhile; ?>
  
  		<?php // Navigation ?>
  
  	<?php else : ?>
  
  		<?php // No Posts Found ?>
  
  <?php endif; ?>

<?php get_footer(); ?>
