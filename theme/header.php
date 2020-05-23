<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title("", true); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">
	<meta name="theme-color" content="#000">

</head>

<?php wp_head(); ?>

<body>


	<div class="soc">
		<a href="<?php the_field('Instagram', 'option'); ?>" target="_blank">Instagram</a>
		<a href="<?php the_field('Facebook', 'option'); ?>" target="_blank">Facebook</a>
	</div>

	<header class="header">
		<div class="header__container container">

			<button class="hamburger" type="button">
				<span class="hamburger__box">
					<span class="hamburger__item"></span>
				</span>
			</button>

			<?php
				wp_nav_menu(array(
					'menu' => 'menu',
					'menu_class' => 'header__nav nav',
					'theme_location' => 'menu',
				));
			?>

			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
			</a>

			<div class="header__info">

				<div class="header__info_wrap header__search">
					<?php echo do_shortcode( '[aws_search_form]' ); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__search.svg" alt="">
				</div>

				<?php cart_link(); ?><?php the_widget('WC_Widget_Cart', 'title='); ?>

				<div class="header__info_wrap header__hard">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__hard.svg" alt="">
					<?php echo do_shortcode('[ti_wishlist_products_counter]'); ?>
				</div>

				<div class="header__info_wrap header__login">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__login.svg" alt="">
					<?php
						wp_nav_menu(array(
							'menu' => 'login',
							'theme_location' => 'menu',
						));
					?>
				</div>
				<div class="header__lang">
					<?php
						wp_nav_menu(array(
							'menu' => 'lang',
							'theme_location' => 'lang',
						));
					?>
				</div>
			</div>

		</div>
	</header>

	<main class="main">