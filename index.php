<?php
get_header();
if (have_posts()):
  while (have_posts()):the_post();
?>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

  <p>
    <?php
    the_author();
    the_content(); ?>
  </p>
<?php
  endwhile;
  else :
    echo '<p>
    no content found buddy. sorry.
    </p>';
  endif;
get_footer();
 ?>
