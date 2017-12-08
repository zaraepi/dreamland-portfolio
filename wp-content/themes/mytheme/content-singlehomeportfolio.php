<!-- not using this anymore -->



<?php
  
  $imagehomeportfolio_id = get_field('imagehomeportfolio',false,false);
  $imagehomeportfolio_url = wp_get_attachment_url($imagehomeportfolio_id);

  $imagelink_id = get_field('imagelink',false,false);
  $imagelink_url = wp_get_attachment_url($imagelink_id);

  $photo1_id = get_field('photo1',false,false);
  $photo1_url = wp_get_attachment_url($photo1_id);



  //get all type terms for the project
  $terms = get_the_terms(get_the_ID(),'type');
  $type = $terms[0]->slug;
?>

<!-- link this page to the singleproject.php using permalink like below-->
 <div class="works-item  ImageWrapper works-item-one-fourth-spaced <?php echo $type;?>">
    <img data-no-retina alt="" title="" class="img-responsive" src="<?php echo $imagelink_url;?>"/>
    <!-- <a class="venobox" data-gall="portfolio-gallery" href="<?php echo get_permalink();?>"> -->
    	  <!-- <a class="venobox" data-gall="portfolio-gallery" href="<?php echo $imagelink_url;?>"> -->
           <a class="venobox" data-gall="portfolio-gallery" href="<?php echo $photo1_url;?>">
     <div class="works-item-inner ImageOverlayCl">
        <p class="valign text-center"><span class="white font2"><?php echo get_field('title');?></span></p>
     </div>
    </a>
 </div>

