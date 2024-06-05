<!-- Footer_Start -->
<?php $footer = get_field('footer_section');?>
		<footer class="footer_wrap bg_style" style="background-image: url(<?php echo $footer['footer_bg_image']?>);">
			<div class="container">
				<div class="inner_footer_main">
					<div class="inner_footer">
						<div class="top_newslatter_sec">
							<div class="inner_newslater">
								<h3><?php echo $footer['newsletter_heading']?></h3>
								<div class="inupt_email_sec">
								    <?php echo do_shortcode('[contact-form-7 id="14d2f3e" title="Newsletter"]'); ?>
								</div>
							</div>					
						</div>
						<div class="inner_footer_sec">
							<div class="main_footer ">
							<?php  dynamic_sidebar('footer_content'); ?>
								<div class="footer_link_list footer123">
									<div class="footer_head">
										<h3>Site Map</h3>
									</div>
									<ul>
										<li>
										<?php
                                        $menu_items = wp_get_nav_menu_items('footer_menu');
                                            foreach ($menu_items as $item) {
                                                echo '<li><a href="'.$item->url.'" title="'.$item->title.'">'.$item->title.'</a></li>';
                                            }
                                      ?>
										</li>
									</ul>    
								</div>
								<div class="footer_link_list footer1230">
								 <?php dynamic_sidebar ('footer_contact_details'); ?> 
								</div>
								<div class="footer_link_list footer120">
									 	<?php dynamic_sidebar ('footer_social_policy'); ?> 
								</div>					  
							</div> 
						</div>
					</div>
				
							<?php dynamic_sidebar ('footer_copyright'); ?> 
				
				</div>
			</div>
		</footer>
		<!-- Footer_end -->

		<!-- jquery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<!--bootstrap.bundle.min.js-->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
		<!--slick js -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
		<!-- main.js -->
		<!--<script src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>-->
	</body>
</html>