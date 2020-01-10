<?php
	/**
		* Template name: Главная
	*/

	get_header();

?>

	<section class="hero">
		<div class="hero__container container">

			<h1>
				<?php the_field ( 'index_title' , pll_current_language ( 'slug' ) ) ; ?>
			</h1>
			<p class="hero__sub-title">
				<?php the_field ( 'index_sub-title' , pll_current_language ( 'slug' ) ) ; ?>
			</p>

			<div class="hero__info">
				<?php the_field ( 'index_first-text' , pll_current_language ( 'slug' ) ) ; ?>
			</div>

			<div class="hero__bg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero__bg.png" alt="">
			</div>
		</div>
	</section>

	<section class="project">
		<div class="project__container container">

			<div class="project__col">
				<?php the_field ( 'index_project-description' , pll_current_language ( 'slug' ) ) ; ?>
				<div class="project__question">?</div>
			</div>
			
			<div class="project__col">
				<?php the_field ( 'index_project-description-2' , pll_current_language ( 'slug' ) ) ; ?>
			</div>
			
		</div>
	</section>

	<section class="shop" id="shop">
		<div class="shop__container container">

			<div class="shop__category">
				<h2><?php the_field ( 'index_shop-title' , pll_current_language ( 'slug' ) ) ; ?></h2>
				<?php
					wp_nav_menu(array(
						'menu' => 'category',
					));
				?>
			</div>

			<?php echo do_shortcode('[products per_page="6"]'); ?>

		</div>
	</section>

	<section class="info">
		<div class="container">
			
			<h2>
				<?php the_field ( 'index_info-title' , pll_current_language ( 'slug' ) ) ; ?>
			</h2>

			<div class="info__wrap click">

				<?php the_field ( 'index_info-text' , pll_current_language ( 'slug' ) ) ; ?>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/info__bg.png" alt="" class="info__bg">
			</div>

		</div>
	</section>

<?php
	get_footer();
