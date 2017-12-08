<?php echo get_header();?>

<!-- <div class="container-graphic">
<div>Hello this graphic page</div>

<h1>bla bla</h1>

</div> -->


  <?php 

      while ( have_posts() ) {
        the_post(); 
        //
        // Post Content here
        get_template_part('content','singlewebproject');
        //
      } // end while


      ?>


<?php echo get_footer();?>