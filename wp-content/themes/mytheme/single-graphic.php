get_header(); ?>

    <?php 

      while ( have_posts() ) {
        the_post(); 
        //
        // Post Content here
        get_template_part('content','singlegraphic');
        //
      } // end while


      ?>
                        
           <h1>blah</h1> 
                    
<?php get_footer(); ?>