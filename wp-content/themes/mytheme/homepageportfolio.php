 <section class="mastwrap add-bottom-half">
      <section class="container intro-01 ">
       

       <!-- not using this  -->
       <!--  <section id="works-container" class="works-container  works-masonry-container clearfix white-bg works-thumbnails-view"> -->
<!-- end of this -->

<!-- new column -->
            <section id="works-container" class="works-container  works-masonry-container clearfix white-bg works-thumbnails-view">


          <!-- start : works-item -->


                  <!-- slide loops goes here  -->
                <?php

                $args = array('post_type' => 'homeportfolio', 'posts_per_page'=>-1);
                $query = new WP_Query($args);

                // global $active;

                // $active = 'active';

                while($query->have_posts()){

                $query->the_post();

                get_template_part('content','homepageportfolio');
               // $active = '';

              }
            ?>


<!-- not using below, ive changed the layout,but almost similar, go to
html fluid2 -->
       <!--    <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom ui web">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/01.gif"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="<?php echo get_bloginfo('template_directory')?>/images/works/01.gif">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Anonymus</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info logos ui">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/02.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Capdevilla</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/03.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/03.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Oregon</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info web graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/04.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Benterivo</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
        <!--   <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/05.gif"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/05.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Laura's Inn</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info logos">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/07.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Green Fox</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
        <!--   <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos ui">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/08.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/08.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Nexxa</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info web">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/06.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Novomoto</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/09.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/09.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">100Degree</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
       <!--    <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/10.gif"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">R.T.W</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
        <!--   <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/11.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">CenterPort</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/13.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/12.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Classic 32</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/14.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Medorne</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/15.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/15.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Argentia</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/16.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/16.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">FM 387</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/17.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Adjoint34</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/18.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Farmaloop</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos ui">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/19.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/19.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">MusicOne</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/20.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Needless</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/21.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/21.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Stacy &amp; CO.</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/22.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/22.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Inivisible</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/23.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">North Zone</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/24.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/24.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">GoodEyes</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom ui web">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/01.gif"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/01.gif">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Edmunds</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced info logos ui">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/02.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Caffe Rogue</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/03.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/03.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Antimotion</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced info web graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/04.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Bell &amp; Crack</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/05.gif"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/05.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Fegereax</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced info logos">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/07.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Zone9</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos ui">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/08.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/08.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Macao Club</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info web">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/06.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">FerryBox</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/09.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/09.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Alasca</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/10.gif"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">OneFiveNine</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/11.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">F.J.S</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/13.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/12.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Majority</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/14.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Adjoint34</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/15.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/15.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Novatell</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/16.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/16.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Beet Match</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/17.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">VideoRoar</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
        <!--   <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/18.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Fidelity XP</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos ui">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/19.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/19.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Onefortis</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          
          <!-- start : works-item -->
          <!-- <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/20.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">ACapella League</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
        <!--   <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/21.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/21.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Lee Cook</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom branding graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/22.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/22.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Story Dept.</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced info branding">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/23.jpg"/>
            <a  href="project.html">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">Class &amp; Kool</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
          <!-- start : works-item -->
         <!--  <div class="works-item  ImageWrapper works-item-one-fourth-spaced zoom logos graphics">
            <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/24.jpg"/>
            <a  class="venobox" data-gall="portfolio-gallery" href="images/works/24.jpg">
              <div class="works-item-inner ImageOverlayCl">
                <p class="valign text-center"><span class="white font2">FlightForce</span></p>
              </div>
            </a>
          </div> -->
          <!-- end : works-item -->
        </section>
        <!-- end : works-container -->
      </section>
    </section>