<?php
//Template name:home_page

get_header();
?>

<?php $banner_image= get_field("banner_image"); 
if($banner_image['hide_section'] == 0) {
?>
		<!-- Banner_section -->
		<section class="home_banner_sec bg_style" style="background-image: url(<?php echo $banner_image['banner_bg_image']; ?>);">
			<div class="home_main_slider">
				<div class="banner_img">
					<img src="<?php echo $banner_image['banner_img']; ?>">
				</div>
				<div class="content_slider">
					<div class="home_banner_slider">
					    <?php
            	           $data = query_posts("post_type=banner&posts_per_page=-1&orderby=date&fields=ids&order=DESC");
            		      while(have_posts() ): the_post();
                        ?>
						<div class="inner_sec">
							<div class="home_banner_text">         
								<h1 class="banner_title"><?php echo the_title(); ?> </h1>
								<div class="theme_btn">
									<a href="<?php echo $banner_image['banner_btn_link']['url'] ?> "> <?php echo $banner_image['banner_btn_link']['title'] ?> <img src="<?php echo $banner_image['banner_arrow']; ?>"> </a>
								</div>                     
							</div>
						</div>
						<?php  endwhile; wp_reset_query(); ?>
					</div>
					<div class="review_sec">
						<div class="customer_img">
							<img src="<?php echo $banner_image['banner_customer_image'] ?>" class="vector_img">
						</div>
						<div class="custer_title">
							<h5><?php echo $banner_image['banner_review_rate'] ?></h5>
							<P><?php echo $banner_image['banner_review_description'] ?></P>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	<?php }	?>
		<!-- Banner_end -->

		<!-- Second_section -->
		<?php $practice = get_field("home_practice_section"); ?>
		<section class="practice_area_section bg_style" style="background-image: url(<?php echo $practice['practice_bg_image'] ?>);">
			<div class="container">
				<div class="inner_practice_area">
					<div class="left_content_sec">
						<h2 class="title"><?php echo $practice['practice_heading'];  ?></h2>
						<p><?php echo $practice['practice_description'];  ?></p>
						<div class="theme_btn theme_btn2">
							<a href="<?php echo $practice['practice_btn_link']['url'];  ?>"><?php echo $practice['practice_btn_link']['title'];  ?><img src="<?php echo $practice['practice_arrow']; ?>"></a>
						</div> 
						<div class="call_us">
							<a href="<?php echo $practice['practice_contact_btn']['url'];  ?>"><?php echo $practice['practice_contact_btn']['title'];  ?></a>
						</div>
					</div>
						
						<div class="right_sec_slider">
                            <?php
                                $args = array(
                                    'post_type'      => 'practice',
                                    'posts_per_page' => -1,
                                    'orderby'        => 'date',
                                    'order'          => 'ASC'
                                );
                        
                                $query = new WP_Query($args);
                        
                                if ($query->have_posts()) {
                                    $count = 0; 
                                    while ($query->have_posts()) {
                                        $query->the_post();
                        
                                        if ($count % 4 == 0) { 
                            ?>
                                <div class="inner_slider_services">
                            <?php } ?>
                        
                                <div class="image1 image ">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                    <div class="img_heading">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                        
                            <?php
                                        $count++;
                                        if ($count % 4 == 0 || $count == $query->post_count) {
                            ?>
                                </div> 
                            <?php
                                        }
                                    }
                                    wp_reset_postdata();
                                } else {
                                    echo '<p>No content found</p>';
                                }
                            ?>
                        </div>
					</div>
				</div>
			</div>
		</section>
		<!-- Second_end -->

		<!-- Third_section -->
		<?php $history  = get_field("home_history_section"); ?> 
		<section class="our_history_sec py_8">
			<div class="container">
				<div class="main_history_sec">
					<div class="history_img_sec">
						<div class="inner_his_img">
							<div class="iner_img">
								<img src="<?php echo $history['history_image']; ?> ">
							</div>
							<div class="video_icon">
								<img src="<?php echo $history['history_image_thumbnail']; ?>">
							</div>
						</div>
						<div class="img_title">
							<h5><?php echo $history['history_image_title']; ?></h5>
						</div>
					</div>
					<div class="right_history_content">
						<h2 class="title"><?php echo $history['history_main_title']; ?></h2>
						<div class="block_sec">
							<h4><?php echo $history['history_title_1']; ?></h4>
							<p><?php echo $history['history_description_1']; ?></p>
						</div>
						<div class="block_sec">
							<h4><?php echo $history['history_title_2']; ?></h4>
							<p><?php echo $history['history_description_2']; ?></p>
						</div>
						<div class="block_sec">
							<h4><?php echo $history['history_title_3']; ?></h4>
							<p><?php echo $history['history_description_3']; ?></p>
						</div>
						<div class="theme_btn">
							<a href="<?php echo $history['history_btn_link']['url']; ?>"><?php echo $history['history_btn_link']['title']; ?><img src="<?php echo $history['history_arrow']; ?>"></a>
						</div>  
					</div>
				</div>
			</div>
		</section>
		<!-- Third_end -->

		<!-- Forth_section -->
		<?php $help  = get_field("home_help_section"); ?> 
		<section class="trouble_help_sec bg_style" style="background-image: url(<?php echo $help['help_bg_image'] ?>);">
			<div class="container">
				<div class="inner_help_sec">
					<div class="top_heading">
						<h2 class="title"><?php echo $help['help_main_heading']?></h2>
						<p><?php echo $help['help_description']?></p>
					</div>
					<div id="counter">
                        <div class="item">
                            <h1 class="count" data-number="<?php echo $help['help_count_heading_one']?>"></h1>
                            <h3 class="text"><?php echo $help['help_heading_one']?></h3>
                        </div>
                        <div class="item item-2">
                            <h1 class="count" data-number="<?php echo $help['help_count_heading_two']?>"></h1>
                            <h3 class="text"><?php echo $help['help_heading_two']?></h3>
                        </div>
                        <div class="item">
                            <h1 class="count" data-number="<?php echo $help['help_count_heading_three']?>"></h1>
                            <h3 class="text"><?php echo $help['help_heading_three']?></h3>
                        </div>
                        <div class="item item-2 no-add-pluse">
                            <h1 class="count" data-number="<?php echo $help['help_count_heading_four']?>"></h1>
                            <h3 class="text"><?php echo $help['help_heading_four']?></h3>
                        </div>
                    </div>
					<div class="theme_btn theme_btn2">
						<a href="<?php echo $help['help_btn_link']['url']?>"><?php echo $help['help_btn_link']['title']?> <img src="<?php echo $help['help_arrow']?>"></a>
					</div> 
				</div>
			</div>
		</section>
		<!-- Forth_end -->

		<!-- Fifth_section -->
		<?php $team =get_field('team_section');?>
		<section class="our_team_sec bg_style" style="background-image: url(<?php echo $team['team_bg_image']?>);">
			<div class="inner_our_team">
				<div class="top_heading">
					<h2 class="title"><?php echo $team['team_heading']?></h2>
					<p><?php echo $team['team_description']?></p>
				</div>
				<div class="main_team_sec">
					<div class="main_team">
					    <?php
            	           $data = query_posts("post_type=team&posts_per_page=-1&orderby=date&fields=ids&order=DESC");
            		      while(have_posts() ): the_post();
                        ?>
						<div class="team_img_title">
							<div class="team_img">
								<img src=<?php echo get_the_post_thumbnail_url() ?> >
							</div>
							<div class="team_details">
								<h4><?php the_title(); ?></h4>
								<p><?php the_content(); ?></p>
							</div>
						</div>
						<?php  endwhile; wp_reset_query(); ?>
					</div>					
				</div>
			</div>
		</section>
		<!-- Fifth_end -->

<!-- Sixth_section -->
		<?php $contact_sec = get_field('contact_sec'); 
		if($contact_sec['hide_section'] == 0) {
		?>
		<section class="free_consultation_section bg_style" style="background-image: url('<?php echo $contact_sec['contact_img']; ?>');">
			<div class="inner_section_consult">
				<div class="free_consult_form">
					<div class="top_heading">
						<h2 class="title"><?php echo $contact_sec['contact_heading']; ?></h2>
						<p><?php echo $contact_sec['contact_description']; ?></p>
					</div>
					<div class="form_contact">
					     
    					<?php echo do_shortcode('[contact-form-7 id="9cf040d" title="Contact form 1"]'); ?>
    					
    					
						<div class="call_us">
							<a href="<?php echo $contact_sec['contact_number']['url']; ?>"> <?php echo $contact_sec['contact_number']['title']; ?> </a>
						</div>
						<div class="rated_sec">
							<h4><?php echo $contact_sec['contact_image_text']; ?></h4>
						</div>					
					</div>
				</div>
			</div>
		</section>
		<?php } ?>
		<!-- Sixth_end -->



		<!-- Seventh_section -->
		<?php $about = get_field('client_about_section'); ?>
		<section class="clients_says_sec">
			<div class="container">
				<div class="inner_about_us">
					<div class="left_client_says">
						<h2 class="title"><?php echo $about['client_about_heading']?></h2>
						<p><?php echo $about['client_about_description']?></p>
					</div>
					<div class="right_reviews">
						<div class="inner_reviews">
						    <?php
                	           $data = query_posts("post_type=about&posts_per_page=-1&orderby=date&fields=ids&order=DESC");
                		       while(have_posts() ): the_post();
                            ?>
							<div class="review_box">
								<h4><?php the_title(); ?></h4>
								<?php the_content(); ?>
							</div>
							<?php  endwhile; wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Seventh_end -->

		<!-- Eighth_section -->
		<?php $faq = get_field("faq_section"); ?>
		<section class="faq_question_sec">
			<div class="inner_main_faq">
				<div class="faq_inner_sec">
					<div class="product-faq">
						<h2><?php echo $faq["faq_main_heading"] ?></h2>
					</div>
					<div class="faq-list">       
						<div class="faq-item">
							<div class="faq-question "><?php echo $faq["faq_heading_one"] ?></div>
							<div class="faq-answer" style="display: none;"><p><?php echo $faq["faq_description_one"] ?></p></div>
						</div>           
						<div class="faq-item">
							<div class="faq-question "><?php echo $faq["faq_heading_two"] ?></div>
							<div class="faq-answer" style="display: none;"><p><?php echo $faq["faq_description_two"] ?></p></div>
						</div>         
						<div class="faq-item">
							<div class="faq-question "><?php echo $faq["faq_heading_three"] ?></div>
							<div class="faq-answer" style="display: none;"><p><?php echo $faq["faq_description_three"] ?></p></div>
						</div>           
						<div class="faq-item">
							<div class="faq-question "><?php echo $faq["faq_heading_four"] ?></div>
							<div class="faq-answer" style="display: none;"><p><?php echo $faq["faq_description_four"] ?> </p></div>
						</div>           
						<div class="faq-item">
							<div class="faq-question "><?php echo $faq["faq_heading_five"] ?></div>
							<div class="faq-answer" style="display: none;"><p><?php echo $faq["faq_description_five"] ?></p></div>
						</div>                  
					</div>
				</div>
				<div class="faq_img">
					<img src="<?php echo $faq["faq_image"] ?>">
				</div>
			</div>
		</section>
		<!-- Eight_end -->
		
		<!-- Ninth_section -->
		<?php $choose = get_field('choose_section'); ?>
		<section class="why_choose_sec py_7">
			<div class="container">
				<div class="inner_choose_sec">
					<div class="choose_content">
						<h2 class="title"><?php echo $choose['choose_heading']?></h2>
						<p><?php echo $choose['choose_description']?></p>
					</div>
					<div class="choose_images_sec">
						<div class="img_us">
							<img src="<?php echo $choose['choose_image_one']?>">
						</div>
						<div class="img_us">
							<img src="<?php echo $choose['choose_image_two']?>">
						</div>
					</div>
				</div>
				<div class="free_consultation">
					<a href="<?php echo $choose['choose_btn_link']['url']?>"><?php echo $choose['choose_btn_link']['title']?></a>
				</div>
			</div>
		</section>
		<!-- Ninth_end -->

		<!-- Tenth_section -->
		<?php $law = get_field('law_section'); ?>
		<section class="law_information_sec">
			<div class="inner_information">
				<div class="left_main">
					<div class="inner_img">
						<img src="<?php echo $law['law_image_one'] ?>">
					</div>
					<div class="inner_img_title">
						<h3><?php echo $law['law_heading_one'] ?></h3>
					</div>
				</div>
				<div class="left_main right_main">
					<div class="inner_img">
						<img src="<?php echo $law['law_image_two'] ?>">
					</div>
					<div class="inner_img_title">
						<h3><?php echo $law['law_heading_two'] ?></h3>
					</div>
				</div>
			</div>
		</section>
		<!-- Tenth_end -->

<?php
get_footer();
?>