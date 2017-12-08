<?php echo get_header();?>


<?php 

while ( have_posts() ) {
the_post(); 
//
// Post Content here
get_template_part('content','abouts');
//
} // end while


?>




<?php echo get_footer();?>