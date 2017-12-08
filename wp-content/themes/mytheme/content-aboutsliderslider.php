<?php
//  global $active;
global $aboutCount;
if(($aboutCount % 2) == 1){
$aboutColour = 'white-bg';
}else{
$aboutColour = 'dark-bg';
}
$aboutCount++;

$aboutimage_id = get_field('aboutimage',false,false);
$aboutimage_url = wp_get_attachment_url($aboutimage_id);

?>
<div class="testimonial-block ">
  <div class="testimonial-info <?php echo $aboutColour?>">
    <img alt="" title="" src="<?php echo $aboutimage_url;?>">
    <h3 class="sub-heading  font2 black"><?php echo get_the_title()?></h3>
    <p>Clara Sealand</p>
    <h5>CEO - MegaDreams LLC</h5>
    <ul class="testimonial-social">
      <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
    </ul>
  </div>
</div>

<!--
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
</div>
-->