<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

		<title>Law</title>
		<!-- fontawesome -->
		<link rel="stylesheet"	href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" />
		<!---bootstrap.min.css--->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" />
		<!--slick CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick-theme.css" />
		<!-- main.css -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" />
		
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
		
	

</head>
<body>

<!-- Header_start -->
		<header>
		   
			<?php  dynamic_sidebar('header_phone_details');?>
			
			<div class="header_wrap">
				<div class="container">
					<div class="header_inner">
						<div class="left_logo">
							<div class="main_logo">
								<?php the_custom_logo(); ?>              
							</div>						         
						</div>
						<div class="center_menu">
							<div class="second_header_menu mobile-menu " id="mobile_menu_toggle">
								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>
								<ul id="menu-header-menu" class="bottom_menu_bars">
										<?php
                                    $menu_items = wp_get_nav_menu_items('main_menu');
                                        foreach ($menu_items as $item) {
                                            echo '<li class="main_menu_item menu-item-75 "><a  href="'.$item->url.'" title="'.$item->title.'">'.$item->title.'</a></li>';
                                        }
                                  ?>
								</ul>  
							</div>   							     							
						</div>
						<div class="header_button">
							<div class="buton_1">
							 	<?php
                                    $menu_items2 = wp_get_nav_menu_items('header_menu_first');
                                        foreach ($menu_items2 as $item2) {
                                            echo '<a  href="'.$item2->url.'" title="'.$item2->title.'">'.$item2->title.'</a>';
                                        }
                                  ?>
							</div>
							<div class="buton_2">
							<?php
                                    $menu_items3 = wp_get_nav_menu_items('header_menu_second');
                                        foreach ($menu_items3 as $item3) {
                                            echo '<a  href="'.$item3->url.'" title="'.$item3->title.'">'.$item3->title.'</a>';
                                        }
                                  ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>	
		<!-- Header_end -->