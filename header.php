<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="sass/_vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>frontpage.php</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

  <div id="navbar">
    <div class="navbar-wrapper">
      <div class="container">
        <div class="flex-row">
          <div class="nav-title">
            <a href="<?php bloginfo('url') ?>"><h1>256klabs</h1></a>
          </div>
          <div class="nav-menu">
            <ul>
              <a id="nav-home-link" href="" class="nav-menu-item"><li>Home</li></a>
              <a id="nav-projects-link" href="#" class="nav-menu-item"><li>Projects</li></a>
              <a id="nav-blog-link" href="blog-index.html" class="nav-menu-item"><li>Blog</li></a>
              <a id="nav-contact-link" href="projects.html" class="nav-menu-item"><li>Contact</li></a>
            </ul>
          </div>
        </div>
      </div>
      <div class="projects-menu-wrapper">
        <div class="container">
        <div class="flex-row">
          <div class="projects-menu">
            <ul>
              <a href="#" class="projects-menu-item"><li>Web</li></a>
              <a href="#" class="projects-menu-item"><li>Creative Coding</li></a>
              <a href="#" class="projects-menu-item"><li>Music</li></a>
              <a href="#" class="projects-menu-item"><li>Electronics</li></a>
              <a href="#" class="projects-menu-item"><li>Videos</li></a>
              <a href="#" class="projects-menu-item"><li>Photography</li></a>
            </ul>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
