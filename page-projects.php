<?php get_header(); ?>

<div id="fp-projects-grid-wrapper">
  <div class="flex-row">
    <h1 class="fp-projects-grid-title">PROJECTS</h1>
    <div class="fp-projects-grid-box-wrapper">
      <div class="fp-projects-grid-wrapbox">
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://www.256klabs.com/wpdev/wp-content/uploads/2017/04/web-projects.jpg')">
        <div class="fp-projects-grid-box-overlay">
          <h1><?php echo get_the_category_by_ID( 5 )?></h1>
          <p>
            <!-- web -->
            <?php echo category_description( $category = 5 ) ?>
          </p>
          
          <a href="<?php echo get_category_link( 5 ); ?>" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>
      </div>
    </div>
      <div class="fp-projects-grid-wrapbox" >
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://www.256klabs.com/wpdev/wp-content/uploads/2017/04/electronics-projects.jpg')">
        <div class="fp-projects-grid-box-overlay">
          <h1><?php echo get_the_category_by_ID( 6 )?></h1>
          <p>
            <!-- electronics -->
            <?php echo category_description( $category = 6 ) ?>
          </p>
          <a href="<?php echo get_category_link( 6 ); ?>" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>

      </div>
    </div>
    <div class="fp-projects-grid-wrapbox" >
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://www.256klabs.com/wpdev/wp-content/uploads/2017/04/music-projects.jpg')">
        <div class="fp-projects-grid-box-overlay">
          <h1>
            <!-- arts -->
            <?php echo get_the_category_by_ID( 7 )?></h1>
          <p>
            <?php echo category_description( $category = 7 ) ?>
          </p>
          <a href="<?php echo get_category_link(7); ?>" class="fp-projects-grid-box-overlay-button">
        View
      </a>
        </div>
      </div>
    </div>
      


    </div>
  </div>
</div>


<div style="margin-bottom: 200px">
  
</div>
<?php get_footer(); ?>
