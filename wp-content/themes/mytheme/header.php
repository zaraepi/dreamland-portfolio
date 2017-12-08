<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Info
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>ZARA.EPI - Web Developer/UX/UI Designer</title>
    <meta name="description" content="KROME - A premium portfolio / agency template from designova">
    <meta name="author" content="designova">
    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory')?>/images/favicon.png" />
    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/fonts/webfonts.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600|Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
  <!--  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"> -->
    <!-- ICON FONTS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/stylesheets/ionicons.min.css">
    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/stylesheets/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/elements/css/elements.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/stylesheets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/stylesheets/sinister.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/stylesheets/venobox.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/stylesheets/slimmenu.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/stylesheets/main.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/stylesheets/main-bg.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/stylesheets/main-responsive.css">
    <!-- LESS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- <link rel="stylesheet/less" type="text/css" href="less/color.less">
    <link rel="stylesheet/less" type="text/css" href="less/fonts.less">
    <script src="less/less.min.js"></script> -->
    <?php wp_head();?>
  </head>
  <body>
    <!-- Preloader
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- end : preloader -->
    <!-- Nav Link Show Panel
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="link-show-poster">
      <div class="valign"><h1 class="black font2"></h1></div>
    </div>
    <!-- Mobile Only Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav class="mobile-nav ">

         <div class="mobile-nav">
                     <?php
                         wp_nav_menu(array(
                       'theme-location'=>'main-menu',
                      'container'=>'ul',
                       'menu_class'=>'slimmenu font2',
                    ));

                    ?>
    <!--   <ul class="slimmenu font2">
        <li>
          <a class="sub-collapser" href="">home</a>
          <ul>
            <li><a href="index.html">portfolio</a></li>
            <li><a href="index02.html">agency</a></li>
            <li><a href="index03.html">photography</a></li>
            <li><a href="index04.html">slider</a></li>
            <li><a href="index05.html">video</a></li>
          </ul>
        </li>
        <li>
          <a class="sub-collapser" href="">portfolio</a>
          <ul>
            <li><a href="works.html">spaced 4 col</a></li>
            <li><a href="works02.html">spaced 6 col</a></li>
            <li><a href="works03.html">spaced 3 col</a></li>
            <li><a href="works04.html">spaced 2 col</a></li>
            <li><a href="works05.html">fluid 4 col</a></li>
            <li><a href="works06.html">fluid 6 col</a></li>
            <li><a href="works07.html">fluid 3 col</a></li>
            <li><a href="works08.html">fluid 2 col</a></li>
          </ul>
        </li>
        <li>
          <a class="sub-collapser" href="">pages</a>
          <ul>
            <li><a href="about01.html">studio</a></li>
            <li><a href="about02.html">personal</a></li>
            <li><a href="elements.html">elements</a></li>
            <li><a href="news.html">news list</a></li>
            <li><a href="post.html">news post</a></li>
          </ul>
        </li>
        <li>
          <a class="sub-collapser" href="">project</a>
          <ul>
            <li><a href="project01.html">slider project</a></li>
            <li><a href="project02.html">video project</a></li>
            <li><a href="project03.html">parallax project</a></li>
          </ul>
        </li>
        <li><a href="contact.html">say hello</a></li>
      </ul> -->
    </nav>
    <!-- mobile only navigation : ends -->
    <!-- Header
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <header class="masthead ">
      <div class="container">
        <div class="row">
          <article class="col-md-3">
            <a href="<?php echo get_permalink(4);?>"><img alt="" title="" class="main-logo " src="<?php echo get_bloginfo('template_directory')?>/images/logo-zara.png"></a>
          </article>
          <article class="col-md-1 col-md-offset-6 no-pad">
            <!--works filter panel :starts -->
            <div class="works-filter-wrap ">
              <ul class="
                works-filter  text-left clearfix font1">
                <li><a id="all" href="#" data-filter="*" class="active"><span>All</span></a></li>
            



            <?php

            $terms = get_terms('type',array('hide_empty'=>false));

            foreach($terms as $term){
              echo '<li><a class="filter-btn" href="#" data-filter=".'.$term->slug.'">'.$term->name.'</a></li>'."\n";
            }

            ?>
             <!--    <li><a href="#" data-filter=".branding"><span>Branding</span></a></li>
                <li><a href="#" data-filter=".graphics"><span>Graphics</span></a></li>
                <li><a href="#" data-filter=".logos"><span>Logos</span></a></li>
                <li><a href="#" data-filter=".ui"><span>UI</span></a></li>
                <li><a href="#" data-filter=".web"><span>Web</span></a></li> -->
              </ul>
            </div>
            <!-- works filter panel :ends -->
          </article>
          <article class="col-md-2">
            <nav class="mastnav ">


                <div class="mastnav">
                     <?php
                    //      wp_nav_menu(array(
                    //    'theme-location'=>'main-menu',
                    //   'container'=>'ul',
                    //    'menu_class'=>'main-menu',
                    // ));

                    ?>

              <ul class="main-menu ">
                <li>
                  <a class="main-link font2 sub-menu-trigger activelink" href="<?php echo get_permalink(4);?>">Home</a>
                 <!--  <div class="sub-menu font1">
                    <a href="index.html">Portfolio</a>
                    <a href="index02.html">Agency</a>
                    <a href="index03.html">Photography</a>
                    <a href="index04.html">Corporate</a>
                    <a href="index05.html">BG Video</a>
                  </div> -->
                </li>
                <li>
                  <a class="main-link font2 sub-menu-trigger" href="<?php echo get_permalink(8);?>">Works</a>
                  <div class="sub-menu font1">
                   <!--  <a href="works.html">spaced 4 col</a>
                    <a href="works02.html">spaced 6 col</a>
                    <a href="works03.html">spaced 3 col</a>
                    <a href="works04.html">spaced 2 col</a>
                    <a href="works05.html">fluid 4 col</a>
                    <a href="works06.html">fluid 6 col</a>
                    <a href="works07.html">fluid 3 col</a>
                    <a href="works08.html">fluid 2 col</a> -->
                    <a href="<?php echo get_permalink(62);?>">Website</a>
                    <a href="<?php echo get_permalink(64);?>">UX/UI</a>
                    <a href="<?php echo get_permalink(120);?>">Graphic</a>
                    <a href="<?php echo get_permalink(124);?>">Branding</a>
                   <!--  <a href="works05.html">fluid 4 col</a> -->
                  <!--   <a href="works06.html">fluid 6 col</a>
                    <a href="works07.html">fluid 3 col</a>
                    <a href="works08.html">fluid 2 col</a> -->
                  </div>
                </li>
                <li>
                  <!-- <a class="main-link font2 sub-menu-trigger" href="http://localhost/dreamland/about/">About</a> -->
                  <a class="main-link font2 sub-menu-trigger" href="<?php echo get_permalink(6);?>">About</a>
               <!--    <div class="sub-menu font1">
                    <a href="about01.html">Studio</a>
                    <a href="about02.html">Personal</a>
                    <a href="elements.html">Elements</a>
                    <a href="news.html">News List</a>
                    <a href="post.html">News Post</a>
                  </div> -->
                </li>
               <!--  <li>
                  <a class="main-link font2 sub-menu-trigger" href="#">Project</a>
                  <div class="sub-menu font1">
                    <a href="project01.html">Slider</a>
                    <a href="project02.html">Video</a>
                    <a href="project03.html">Parallax</a>
                  </div>
                </li> -->
                <li>
                  <!-- <a class="main-link font2" href="http://localhost/dreamland/contact/">Say Hello</a> -->
                  <a class="main-link font2" href="<?php echo get_permalink(10);?>">Say Hello</a>
                </li>
              </ul>
            </nav>
          </article>
        </div>
      </div>
    </header>
    <!-- end : masthead -->
    <!-- MASTER CONTENT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <?php
    //  get_template_part('homepageportfolio');
    ?>

    <!-- end : mastwrap -->
    <!-- FOOTER
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    
 