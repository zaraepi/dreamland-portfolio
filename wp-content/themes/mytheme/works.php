<?php echo get_header();?>

<!-- <div class="container-graphic">
  <div>Hello this is master works page</div>
  <h1>bla bla</h1>
</div> -->
<!-- MASTER CONTENT
––––––––––––––––––––––––––––––––––––––––––––––––––  -->
<section class="mastwrap add-bottom-half">

  <section class="container news ">
     <!-- <h1 class="h1-works-page">Works</h1> -->
    <div class="row">

      <!-- <article class="col-md-6 text-left">not using article, change to div -->
      <div class="flex-row">
        <?php
        $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $post->ID
        );
        // $query = new WP_Query($args);
        // while($query->have_posts()){
        //   $query->the_post();
        
        //   get_template_part('content','works');
        // }
        ?>

        
       
        <div class="news-block add-bottom  inner-pad">
         
          <!-- <a href="post.html"> -->
          <a href="<?php echo get_permalink(62);?>">
            <h4 class="grey font1 h4-works">Website</h4>
            <h3 class="main-heading  font2 black h3-works">The over-all point is that new technology will not necessarily replace old technology, but it will date it. By definition. Eventually, it will replace it</h3>
            <img alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/website-submenu.png"/>
            <!--  <div class="works-item-inner ImageOverlayCl">
              <p class="valign text-center"><span class="white font2">You look handsome today</span></p>
            </div> -->
          </a>
        </div>
        
        
        <div class="news-block inner-pad">
          <a href="<?php echo get_permalink(64);?>">
            <h4 class="grey font1 h4-works">UX/UI </h4>
            <h3 class="main-heading  font2 black h3-works">The over-all point is that new technology will not necessarily replace old technology, but it will date it. By definition. Eventually, it will replace it</h3>
            <img alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/user-submenu.png"/>
          </a>
        </div>
        <!--    </article>not using article, change to div -->
      </div>
      <!-- <article class="col-md-6 text-left"> -->
      <div class="flex-row">
        <div class="news-block add-bottom  inner-pad">
          <a href="<?php echo get_permalink(120);?>">
            <h4 class="grey font1 h4-works">Graphic</h4>
            <h3 class="main-heading  font2 black h3-works">The over-all point is that new technology will not necessarily replace old technology, but it will date it. By definition. Eventually, it will replace it</h3>
            <img alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/graphic-submenu.png"/>
          </a>
        </div>
        <div class="news-block  inner-pad">
          <a href="<?php echo get_permalink(124);?>">
            <h4 class="grey font1 h4-works">Branding</h4>
            <h3 class="main-heading  font2 black h3-works">The over-all point is that new technology will not necessarily replace old technology, but it will date it. By definition. Eventually, it will replace it</h3>
            <img alt="" title="" class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/works/branding-submenu.png"/>
          </a>
        </div>
        <!-- </article> -->
      </div>
    </div>
    
  </section>
</section>

<?php echo get_footer();?>