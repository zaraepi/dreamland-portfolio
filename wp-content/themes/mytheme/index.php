
<?php echo get_header();?>

    <!-- Features -->
    <div class="container">
     
      <!-- ive created pseudo/placeholder container here, is this ok?= if 
      the original code dont have any div to hole the header and footer? -->
      
      <!-- the loop -->
      <?php 

      while ( have_posts() ) {
        the_post(); 
        //
        // Post Content here
        get_template_part('content','page');
        //
      } // end while


      ?>

    </div>
<?php echo get_footer();?>
   