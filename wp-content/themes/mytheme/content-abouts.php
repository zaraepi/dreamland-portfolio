<?php
$aboutimage_id = get_field('aboutimage',false,false);
$aboutimage_url = wp_get_attachment_url($aboutimage_id);
?>
<section class="mastwrap add-bottom-half">
  <section class="container ">
    <div class="row">
      <article class="col-md-12 text-left inner-pad">
        <img alt="" title="" class="img-responsive about-main-img" src="<?php echo get_bloginfo('template_directory')?>/images/works/website-submenu.png"/>
      </article>
    </div>
    
  </section>
  <section class="container about  add-top add-bottom">
    <div class="row">
      <article class="col-md-4 text-left  inner-pad">
        <h6 class="promo-text  font1 grey h3-works">Hello everyone!</h6>
        <h4 class="black font2bold tiny-caps h4-works">I am Zara Epifantseva</h4>
      </article>
      <article class="col-md-8 text-left ">
        <h3 class="main-heading  font2light black h3-works">I am Zara, a passionate web designer and developer from Auckland. I have 5 years of professional experience working with top companies overseas and in New Zealand.</h3>
        <div class="row add-top-quarter">
          <article class="col-md-6">
            <p class="h3-works">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
          </article>
          <article class="col-md-6">
            <p class="h3-works">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
          </article>
        </div>
        <div class="row add-top-quarter">
          <article class="col-md-3">
            <img alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/sign.png"/>
          </article>
        </div>
      </article>
    </div>
    
  </section>
  <section class="testimonials  silver-bg pad-top pad-bottom">
    <div class="container">
      <div class="row">
        <article class="col-md-4 text-left  inner-pad">
          <h6 class="promo-text  font1 grey h3-works">Words of Love</h6>
          <h4 class="black font2bold tiny-caps h4-works">Testimonials</h4>
        </article>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <article class="col-md-12">
          
          <section class="carousel-outer-wrap add-top-quarter">
            <!-- Set up your HTML -->
            <div class="owl-carousel owl-nav-sticky-extra-wide testimonial-carousel ">
              <!--  <div class="testimonial-block ">
                <div class="testimonial-info white-bg">
                  <img alt="" title="" src="<?php echo $aboutimage_url;?>">
                  <h3 class="sub-heading  font2 black">Designova is our most favorite theme developers. We love their every works.</h3>
                  <p>Clara Sealand</p>
                  <h5>CEO - MegaDreams LLC</h5>
                  <ul class="testimonial-social">
                    <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
                  </ul>
                </div>
              </div>
              
              <div class="testimonial-block ">
                <div class="testimonial-info dark-bg">
                  <img alt="" title="" src="<?php echo $aboutimage_url;?>">
                  <h3 class="sub-heading  font2 white">Amazed by the perfection within Designova themes. I highly recommend them.</h3>
                  <p>Blake Thomson</p>
                  <h5>Founder / Las Vegas News</h5>
                  <ul class="testimonial-social">
                    <li><a href="#"><span class="ion-social-twitter white"></span></a></li>
                  </ul>
                </div>
              </div> -->
              <!-- slide loops goes here  -->
              <?php
              $args = array('post_type' => 'aboutslider');
              $query = new WP_Query($args);
              
              global $aboutCount;
              $aboutCount = 1;
              while($query->have_posts()){
              $query->the_post();
              get_template_part('content','aboutsliderslider');
              // $active = '';
              }
              ?>
              <!--
              <div class="testimonial-block ">
                <div class="testimonial-info white-bg">
                  <img alt="" title="" src="<?php echo $aboutimage_url;?>">
                  <h3 class="sub-heading  font2 black">Designova is our most favorite theme developers. We love their every works.</h3>
                  <p>Robert Foster</p>
                  <h5>CEO / New Media Co.</h5>
                  <ul class="testimonial-social">
                    <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="testimonial-block ">
                <div class="testimonial-info dark-bg">
                  <img alt="" title="" src="<?php echo $aboutimage_url;?>">
                  <h3 class="sub-heading  font2 white">Amazed by the perfection within Designova themes. I highly recommend them.</h3>
                  <p>Blake Thomson</p>
                  <h5>Founder / Las Vegas News</h5>
                  <ul class="testimonial-social">
                    <li><a href="#"><span class="ion-social-twitter white"></span></a></li>
                  </ul>
                </div>
              </div> -->
            </div>
          </section>
        </article>
      </div>
    </div>
  </section>
  <section class="container skill-graph-region add-top add-bottom">
    <div class="row">
      <article class="col-md-4 text-left ">
        <h6 class="promo-text  font1 grey h3-works">My Expertise</h6>
        <h4 class="black font2bold tiny-caps h4-works">Tech Skills</h4>
      </article>
      <article class="col-md-8 text-left inner-pad  ">
        <div class="row">
          <article class="col-md-12">
            
            <div class="skills">
              
              <div class="row add-top-quarter">
                <article class="col-md-6 progress-container no-pad">
                  <h6 class="font2 dark h4-works">Web Design<span class="font1 color">90%</span></h6>
                  <div class="progress active">
                    <div class="progress-bar dark-bg" data-skills-value="65"></div>
                  </div>
                </article>
                <article class="col-md-6 progress-container no-pad">
                  <h6 class="font2 dark h4-works">Coding<span class="font1 color">85%</span></h6>
                  <div class="progress active">
                    <div class="progress-bar dark-bg" data-skills-value="78"></div>
                  </div>
                </article>
              </div>
              <div class="row add-top-quarter">
                <article class="col-md-12 progress-container no-pad">
                  <h6 class="font2 dark h4-works">Graphic Design<span class="font1 color">80%</span></h6>
                  <div class="progress active">
                    <div class="progress-bar dark-bg" data-skills-value="92"></div>
                  </div>
                </article>
              </div>
              <div class="row add-top-quarter">
                <article class="col-md-12 progress-container no-pad">
                  <h6 class="font2 dark h4-works">Branding<span class="font1 color">80%</span></h6>
                  <div class="progress active">
                    <div class="progress-bar dark-bg" data-skills-value="56"></div>
                  </div>
                </article>
              </div>
              <div class="row add-top-quarter">
                <article class="col-md-12 progress-container no-pad">
                  <h6 class="font2 dark h4-works">UX/UI<span class="font1 color">80%</span></h6>
                  <div class="progress active">
                    <div class="progress-bar dark-bg" data-skills-value="81"></div>
                  </div>
                </article>
              </div>
              
            </div>
          </article>
        </div>
      </article>
      
    </div>
  </section>
  <section class="counter-region  silver-bg pad-top pad-bottom">
    <div class="container">
      <div class="row">
        <article class="text-center col-md-12">
          <ul class="elements-counter-wrap">
            
            <li data-delay="100" class="elements-counter" style="opacity: 1;">
              <div class="number font2 black h4-works">87</div>
              <div class="subject font1 color h3-works">Web Designs</div>
            </li>
            
            <li data-delay="300" class="elements-counter" style="opacity: 1;">
              <div class="number font2 black h4-works">633</div>
              <div class="subject font1 color h3-works">Logo Designs</div>
            </li>
            
            <li data-delay="500" class="elements-counter" style="opacity: 1;">
              <div class="number font2 black h4-works">113</div>
              <div class="subject font1 color h3-works">Print Designs</div>
            </li>
            
            <li data-delay="700" class="elements-counter" style="opacity: 1;">
              <div class="number font2 black h4-works">843</div>
              <div class="subject font1 color h3-works">Mobile Apps</div>
            </li>
            
          </ul>
        </article>
      </div>
    </div>
  </section>
  <section class="container featured-project add-top add-bottom">
    <div class="row">
      <article class="col-md-4 text-left ">
        <h6 class="promo-text  font1 grey h3-works">My Experience</h6>
        <h4 class="black font2bold tiny-caps h4-works">Career Profile</h4>
      </article>
      <article class="col-md-4 text-left inner-pad  ">
        <div class="row">
          <article class="col-md-12 featured-project-block ">
            <h3 class=" font2 black h4-works">World Vision</h3>
            <p class="h3-works">Designer</p>
            <h5><a href="#">2011-12</a></h5>
          </article>
        </div>
        <div class="row add-top-quarter">
          <article class="col-md-12 featured-project-block  ">
            <h3 class=" font2 black h4-works">StudioNord Lisbon</h3>
            <p class="h3-works">Designer</p>
            <h5><a href="#">2012-14</a></h5>
          </article>
        </div>
      </article>
      <article class="col-md-4 text-left inner-pad  ">
        <div class="row">
          <article class="col-md-12 featured-project-block ">
            <h3 class=" font2 black h4-works">WHR LLC</h3>
            <p class="h3-works">Senior Designer</p>
            <h5><a href="#">2014-15</a></h5>
          </article>
        </div>
        <div class="row add-top-quarter">
          <article class="col-md-12 featured-project-block  ">
            <h3 class=" font2 black h4-works">Media Fortis</h3>
            <p class="h3-works">UX Designer</p>
            <h5><a href="#">2015-Present</a></h5>
          </article>
        </div>
      </article>
      
    </div>
    <div class="row add-top-half">
      <article class="col-md-8 col-md-offset-4 text-left ">
        <h6 class="promo-text  font1 grey h3-works">Getting Impressed?</h6>
        <!-- <a href="#" class="btn btn-krome btn-krome-dark" >contact me</a> -->
        <a href="mailto:sasha.epifantseva@gmail.com" class="btn btn-krome btn-krome-dark ">contact me</a>
        <a href="<?php echo wp_get_attachment_url(195)?>" class="btn btn-krome btn-krome-dark ">Download CV</a>
      </article>
      
      
    </div>
  </section>
</section>