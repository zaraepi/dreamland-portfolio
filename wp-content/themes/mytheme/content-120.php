<!-- <div class="container-graphic">
			<div>Hello this child graphic page</div>
			<h1>bla bla</h1>
</div> -->
<?php
$childimage_id = get_field('childimage',false,false);
$childimage_url = wp_get_attachment_url($childimage_id);
$photo2_id = get_field('photo2',false,false);
$photo2_url = wp_get_attachment_url($photo2_id);
$photo3_id = get_field('photo3',false,false);
$photo3_url = wp_get_attachment_url($photo3_id);
$photo4_id = get_field('photo4',false,false);
$photo4_url = wp_get_attachment_url($photo4_id);
?>
<section class="mastwrap add-bottom-half">
	<section class="container news ">
		<div class="row">
			<!-- <article class="col-md-6 text-left">not using article, change to div -->
			<div class="flex-row">
				<div class="news-block add-bottom  inner-pad">
					<a href="<?php echo get_permalink();?>">
						<!-- 	<?php echo get_field('title');?> -->
						<h4 class="grey font1 h4-works">Beautiful Bath</h4>
						<h3 class="main-heading  font2 black h3-works">The over-all point is that new technology will not necessarily replace old technology, but it will date it. By definition. Eventually, it will replace it</h3>
						<img alt="" title="" class="img-responsive" src="<?php echo $childimage_url;?>"/>
					</a>
					<a href="http://104.236.124.94/netinsites/index.html" class="btn  btn-krome btn-krome-dark add-top-quarter">View Project</a>
					<a href="news.html" class="btn  btn-krome btn-krome-dark add-top-quarter">Share</a>
				</div>
				<div class="news-block add-bottom  inner-pad">
					<a href="<?php echo get_permalink();?>">
						<h4 class="grey font1 h4-works">Frugt</h4>
						<h3 class="main-heading  font2 black h3-works">The over-all point is that new technology will not necessarily replace old technology, but it will date it. By definition. Eventually, it will replace it</h3>
						<img alt="" title="" class="img-responsive" src="<?php echo $photo2_url;?>"/>
					</a>
					<a href="<?php echo get_permalink();?>" class="btn  btn-krome btn-krome-dark add-top-quarter">View Project</a>
					<a href="news.html" class="btn  btn-krome btn-krome-dark add-top-quarter">Share</a>
				</div>
			</div>
			<div class="flex-row">
				<div class="news-block add-bottom  inner-pad">
					<a href="<?php echo get_permalink();?>">
						<h4 class="grey font1 h4-works">Packaging</h4>
						<h3 class="main-heading  font2 black h3-works">The over-all point is that new technology will not necessarily replace old technology, but it will date it. By definition. Eventually, it will replace it</h3>
						<img alt="" title="" class="img-responsive" src="<?php echo $photo3_url;?>"/>
					</a>
					<a href="news.html" class="btn  btn-krome btn-krome-dark add-top-quarter">View Project</a>
					<a href="news.html" class="btn  btn-krome btn-krome-dark add-top-quarter">Share</a>
				</div>
				<div class="news-block add-bottom  inner-pad">
					<a href="<?php echo get_permalink();?>">
						<h4 class="grey font1 h4-works">Frugt</h4>
						<h3 class="main-heading  font2 black h3-works">The over-all point is that new technology will not necessarily replace old technology, but it will date it. By definition. Eventually, it will replace it</h3>
						<img alt="" title="" class="img-responsive" src="<?php echo $photo4_url;?>"/>
						<!-- <h3><a href="mailto:sasha.epifantseva@gmail.com">Send me an email</a></h3> -->
					</a>
					<a href="news.html" class="btn  btn-krome btn-krome-dark add-top-quarter">View Project</a>
					<a href="https://www.facebook.com/" class="btn  btn-krome btn-krome-dark add-top-quarter">Share</a>
				</div>
			</div>
			<h6 class="promo-text  font1 grey promo-left">Getting Impressed?</h6>
			<a href="mailto:sasha.epifantseva@gmail.com" class="btn btn-krome btn-krome-dark mailto-left" >contact me</a>
		</div>
		
	</section>
</section>
<!-- example of mov.video tag, test this  -->
<!--   <video controls="controls" width="800" height="600"
name="Video Name" src="http://www.myserver.com/myvideo.mov"></video> -->