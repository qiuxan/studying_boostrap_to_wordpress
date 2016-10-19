<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SKZ1963shopping
 */

?>

	

<?php wp_footer(); ?>


<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-little" id="myModalLabel"><i class="fa fa-envelop"><b>联系我们</b></i></h4>
				</div> 	<!--modal header-->
				<div class="modal-body">
					<p>如果您对澳洲的产品有兴趣，或者想要了解关于澳洲留学，移民，签证，旅行的信息，<em>欢迎大家留言！</em></p>
					
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="visitor-name">姓名（昵称）</label>
							<input type="text" class="form-control" id="visitor-name" placeholder="姓名（昵称）">
						</div>
						<div class="form-group">
							<label class="sr-only" for="visitor-email">Email</label>
							<input type="text" class="form-control" id="visitor-email" placeholder="Email">
						</div>
						<hr>
						<div class="form-group">
							<label class="sr-only" for="visitor-msg">留言</label>
							<textarea class="form-control" id="exampleTextarea" rows="8" placeholder="留言"></textarea>
  						</div>
  						<hr>
						<input type="submit" class="btn btn-danger" value="提交!">
					</form>
					
					<hr>
					
					<p><small>我们尊重所有人（包括访客和我们的客户）的隐私，<br>您的Email和姓名将只会被用来跟您沟通您咨询的事宜！我们不会给您发送垃圾邮件，或者贩卖您的个人信息。</small></p>


				</div> <!--modal body-->
			</div> <!--modal content-->
		</div> <!--modal-dialog-->
		
	</div> <!--modal-->



<footer>
		<div class="container">
			
			<div class="col-sm-3">
				<p> <a href="/"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="mylogo"></a></p>				
			</div> <!--col end-->
			<div class="col-sm-6">
				
				<?php
						wp_nav_menu(array(
							
							'theme_location'	=> 'footer',
							'container'			=> 'nav',
							'menu_class'	=>'list-unstyled list-inline'
							
							
						) );
					?>
				
				
				
				
				
			</div> <!--col end-->
			<div class="col-sm-3">
						<p class="pull-right"><?php bloginfo('name');?>&copy; <?php echo ' '.date('Y')?>  <?php the_author_link();?></p>		
			</div> <!--col end-->
		</div> <!--container end-->
		
	</footer> <!--footer end-->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>
</html>
