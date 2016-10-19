<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SKZ1963shopping
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">哎呀，没有找到您查询的页面！</h1>
	</section>

	<div class="container">
		<div class="row" id="primary">
			<main class="col-sm-8" id="content">
				<div class="not-found error-404">
					<div class="page-content">
						
						<h2>别担心，看看这里有没有你想要的内容。</h2>
						
						<h3>产品</h3>
						<p>您是在找某样产品么？</p>
						
						
						
						
					<?php $loop= new WP_Query(array('post_type'=>'product','orderby'=>'post_id','order'=>'ASC'));?>	
						
					<div class="product-row clearfix">
						<?php while($loop->have_posts()): $loop->the_post();?>
						<?php 
							 $product_image=get_field('product_image');
							 $product_url=get_field('product_url');
							 $button_text=get_field('button_text');
						?>						
							<div class="product">
								<img src="<?php echo $product_image[url];?>" alt="<?php echo $product_image[alt];?>">			
					    	<h3><a href="<?php echo $product_url;?>"> <?php the_title();?></a></h3>
					    	<?php the_excerpt();?>
					    	<?php if(!empty($button_text)):?>
					    	<a href="<?php echo $product_url;?>" class="btn btn-success"> <?php echo $button_text;?></a>
					    	
					    	<?php endif;?>
						</div> <!--product-->
						<?php endwhile;?>
					</div> <!--product row-->
					
					<h3>分类</h3>
					<p>...或者您要找的是哪一个类别的博客？</p>
					
					<div class="widget widget_categories">
						<h4 class="widget-title">最常被搜索的类别：</h4>
						<ul>
							<?php 
								wp_list_categories(array(
									'orderby' 		=>'count',
									'order'	  		=>'DESC',
									'show_count'	=>'1',
									'title_li'		=>'',
									'number'		=>10
									
								));
								
							?>
						</ul>
					</div> <!--.widget-->
					
					<p>或者，回到<a href=" <?php esc_url(home_url('/'));?>">主页</a></p>
					
					</div> <!--.page-content-->
				</div> <!--.error 404-->
				
				
			</main> <!--#content-->
			<aside class="col-sm-4">
				<?php get_sidebar();?>
			</aside>
		</div> <!--#primary-->
	</div> <!--.container-->

<?php
get_footer();
