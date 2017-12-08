<?php
$imagehomeportfolio_id = get_field('imagehomeportfolio',false,false);
$imagehomeportfolio_url = wp_get_attachment_url($imagehomeportfolio_id);
// $imagelink_id = get_field('imagelink',false,false);
// $imagelink_url = wp_get_attachment_url($imagelink_id);
//get all type terms for the project
$terms = get_the_terms(get_the_ID(),'type');
// $type = $terms[0]->slug;
$type = '';
if($terms){
foreach($terms as $term){
$type .= $term->slug . '';
}
}
?>
<!-- new column fluid 2, ive adjusted it go to 'work' page section -->
<div class="works-item  ImageWrapper works-item-one-half <?php echo $type;?>">
	<img data-no-retina alt="" title="" class="img-responsive" src="<?php echo $imagehomeportfolio_url;?>"/>
	<!--  <a  class="venobox" data-gall="portfolio-gallery" href="<?php echo $imagelink_url;?>"> -->
	<div class="works-item-inner ImageOverlayCl">
		<p class="valign text-center"><span class="white font2"><?php echo get_field('title');?> <a href="<?php echo get_field('link');?>"</span></p>
	</div>
</a>
</div>