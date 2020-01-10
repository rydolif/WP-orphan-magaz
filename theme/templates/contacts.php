<?php
	/**
		* Template name: Контакти
	*/

	get_header();
?>

	<section class="contacts">
		<div class="contacts__container container">

			<div class="contacts__info">
				<h3>
					<?php the_field ( 'contacts_title' , pll_current_language ( 'slug' ) ) ; ?>
				</h3>
				<div class="contacts__info_list">
					<a href="tel:<?php the_field('tel_url', 'option'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts__tel.png" alt="">
						<span><?php the_field('tel', 'option'); ?></span>
					</a>
					<a href="mailto:<?php the_field('mail', 'option'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts__mail.png" alt="">
						<span><?php the_field('mail', 'option'); ?></span>
					</a>
					<a href="<?php the_field('site', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts__site.png" alt="">
						<span><?php the_field('site', 'option'); ?></span>
					</a>
				</div>
			</div>

			<div class="contacts__form">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>

		</div>
	</section>
	
<?php
	get_footer();
