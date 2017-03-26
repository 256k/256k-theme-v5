<?php get_header(); ?>

<div id="fp-projects-grid-wrapper">
  <div class="flex-row">
    <h1 class="fp-projects-grid-title">PROJECTS</h1>
    <div class="fp-projects-grid-box-wrapper">
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://localhost:8080/wordpress/wp-content/uploads/2017/03/web-projects.jpg')">
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
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://localhost:8080/wordpress/wp-content/uploads/2017/03/electronics-projects.jpg')">
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
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://localhost:8080/wordpress/wp-content/uploads/2017/03/visual-projects.jpg')">
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
      <div class="fp-projects-grid-box" onClick="return true" style="background-image: url('http://localhost:8080/wordpress/wp-content/uploads/2017/03/music-projects.jpg')">
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


<div style="margin-bottom: 200px">
  
</div>
<?php get_footer(); ?>
