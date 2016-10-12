<?php
/*
	Template Name: Home Page	
	

 */

//Custom Fields btn_text
$b_word 		=get_post_meta( 7, 'b_word',true);
$contact_text 		=get_post_meta( 7, 'contact_text',true);
$contacta_btn_text 		=get_post_meta( 7, 'contacta_btn_text',true);


//advance custom fields

$notebook_image 		=get_field('notebook_image');
$notebook_section__title 		=get_field('notebook_section__title');
$title1 		=get_field('title1');
$information_content1 		=get_field('information_content1');
$title2 		=get_field('title2');
$information_content2 		=get_field('information_content2');
$title3 		=get_field('title3');
$information_content3 		=get_field('information_content3');
$title4 		=get_field('title4');
$information_content4 		=get_field('information_content4');

//print_r($notebook_image);

get_header(); ?>

<section id="hero" data-type="background" data-speed="5"><!--============hero
		=================-->
		
		<article>
			<div class="container claerfix">
				<div class="row">
					<div class="col-sm-5">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
					</div> <!--col-->
					<div class="col-sm-7 hero-text">
						<h1><?php bloginfo('name');?></h1>
			            <p class="lead"><?php bloginfo('description');?><b><?php echo $b_word;?></b></p>

					</div> <!--col-->
				</div>		<!--row-->
			</div> <!--container-->
		</article>
	</section> <!--hero-->
	
	
	
	<!--msgtoadmin-->
	<section id="msgtoadmin">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<p class="lead"><?php echo $contact_text;?></p>
				</div> <!--col-->
				
				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $contacta_btn_text;?></button>
				</div> <!--col-->
				
			</div>
		</div> <!--container-->
	</section> <!--msgtoadmin end-->
	
	
	
	
	
	
	
	
	
	<section id="our-advantage">
		
		<div class="container">
			
			<div class="section-header">
				
				<!--if feature img exist-->
				
				<?php    
					if(!empty($notebook_image)):?>
					<img src="<?php echo $notebook_image['url'];?>" alt="<?php echo $notebook_image['alt'];?>">
					<?php endif;?>
				
				
				
				<h2><?php echo $notebook_section__title;?></h2>
			</div> <!--s headere-->
			
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2"> 
					<h3><?php echo $title1;?></h3>
					<p><?php echo $information_content1;?></p>

					<h3><?php echo $title2;?></h3>
					<p><?php echo $information_content2;?></p>
					

					<h3><?php echo $title3;?></h3>
					<p><?php echo $information_content3;?>/p>
					
					<h3><?php echo $title4;?></h3>
					<p><?php echo $information_content4;?></p>

				</div> <!--col-->
				
			</div> <!--row-->
		
		</div> <!--container-->
				
		
	</section> <!--ouradvantage-->
	
	
	<section id="quick-link">
		<div class="container">
			
			<div class="section-header">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
				<h2>快速链接</h2>

			</div> <!--end section header-->
			<div class="row">
				
				<div class="col-sm-2">
					<i class="ci ci-computer"></i> <!--font awesome-->
					<h4>Lifetime access to 80+ lectures</h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<i class="ci ci-watch"></i>
					<h4>10+ hours of HD video content</h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<i class="ci ci-calendar"></i>
					<h4>30-day money back guarantee</h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<i class="ci ci-community"></i>
					<h4>Access to a community of like-minded students</h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<i class="ci ci-instructor"></i>
					<h4>Direct access to the instructor</h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<i class="ci ci-device"></i>
					<h4>Accessible content on your mobile devices</h4>
				</div><!-- end col -->

				
			</div> <!--row-->
			
		</div> <!--container end-->
	</section>	<!--end quicklink-->

<?php
get_footer();
