<?php
/*
	Template Name: Full-width Page Template
	

 */

$thumbnail_url= wp_get_attachment_url(get_post_thumbnail_id($post->ID));

//advance custom fields



get_header(); ?>

<!--feature img-->

<?php if (has_post_thumbnail()){?>

<section class="feature-image feature-image-default" data-type="background" style="background: url( '<?php echo $thumbnail_url;?>') no-repeat; background-size: cover;" data-speed="2">
	<h1 class="page-title"> <?php the_title();?></h1>
</section>

<?php } else{?>
<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title();?></h1>
</section>
<?php }?>



<!--main content-->
<div class="container">
	<div class="row" id="primary">
		<div class="col-sm-12">
			<?php while(have_posts()):the_post();?>
				<?php the_content();?>
			<?php endwhile;?>				
			</section> <!--main content-->		
		</div> <!--contenr col end-->
	</div> <!--primary row-->
</div> <!--container-->




<?php
get_footer();
