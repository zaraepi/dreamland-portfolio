<!-- not using this anymore -->

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Klasik
 * @since Klasik 1.0
 */

get_header(); ?>

    <?php 

      while ( have_posts() ) {
        the_post(); 
        //
        // Post Content here
        get_template_part('content','singlehomeportfolio');
        //
      } // end while


      ?>
                        
           <h1>blah</h1> 
                    
<?php get_footer(); ?>