<!--  <div class="container-graphic">
      <div>Hello this webproject page</div>
      <h1>bla bla</h1>
</div>  -->
<?php
$webimage_id = get_field('webimage',false,false);
$webimage_url = wp_get_attachment_url($webimage_id);
$webimage2_id = get_field('webimage2',false,false);
$webimage2_url = wp_get_attachment_url($webimage2_id);
$webimage3_id = get_field('webimage3',false,false);
$webimage3_url = wp_get_attachment_url($webimage3_id);
$video_id = get_field('video',false,false);
$video_url = wp_get_attachment_url($video_id);
?>
<section class="mastwrap">
  <section class="container about  add-bottom-half">
    <div class="row">
      <article class="col-md-4 text-left  inner-pad">
        <h6 class="promo-text  font1 grey h3-works">Sample Project Page with Parallax</h6>
        <h4 class="black font3 h4-works">Category</h4>
      </article>
      <article class="col-md-8 text-left ">
        <h3 class="main-heading  font2 black h4-works">Dreamland is a homegrown design studio from Auckland, NZ. I create beatuful identities and cool web experience for modern business.</h3>
        <div class="row add-top-quarter">
          <article class="col-md-6">
            <p class="h3-works">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
            <a href="news.html" class="btn  btn-krome btn-krome-dark add-top-quarter">Learn More</a>
          </article>
          <article class="col-md-6">
            <p class="h3-works">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
          </article>
        </div>
      </article>
    </div>
    <!-- <div class="row video-styling"> -->
    <div class="row">
      <?php if ($video_url): ?>
      <!-- <div class="video-container"> -->
      <!-- <video width="320" height="400" controls> -->
      <video class="video-size" controls>
        <source src="<?php echo $video_url?>" type="video/mp4">
        
        Your browser does not support the video tag.
      </video>
      <!-- </div> -->
      <?php endif ?>
      
    </div>
    
  </section>
  <section class="parallax-showcase-wrap ">
    
    <!-- parallax section -->
    <section class="parallax-showcase  parallax-showcase-01 fullheight parallax" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo $webimage_url?>)">
      <div class="parallax-showcase-overlay fullheight">
        <div class="valign">
          <div class="project-title text-center">
            <a href="#"><h1 class="font3bold white">Caption Here</h1></a>
          </div>
        </div>
      </div>
    </section>
    <!-- parallax section -->
    <section class="parallax-showcase  parallax-showcase-02 fullheight parallax" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo $webimage2_url?>)">
      <div class="parallax-showcase-overlay fullheight">
        <div class="valign">
          <div class="project-title text-center">
            <a href="#"><h1 class="font3bold white">Caption Here</h1></a>
          </div>
        </div>
      </div>
    </section>
    <!-- parallax section -->
    <section class="parallax-showcase  parallax-showcase-03 fullheight parallax" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo $webimage3_url?>)">
      <div class="parallax-showcase-overlay fullheight">
        <div class="valign">
          <div class="project-title text-center">
            <a href="#"><h1 class="font3bold white">Caption Here</h1></a>
          </div>
        </div>
      </div>
    </section>
  </section>
  
</section>
<?php echo get_footer();?>
<!-- example of mov.video tag, test this  -->
<!--   <video controls="controls" width="800" height="600"
name="Video Name" src="http://www.myserver.com/myvideo.mov"></video>