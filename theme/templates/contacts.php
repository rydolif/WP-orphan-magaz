<?php
	/**
		* Template name: Контакти
	*/

	get_header();
?>

	<section class="contacts">
		<div class="contacts__container container">

			<div class="contacts__info">
				<h3>Залишайся на зв’язку</h3>
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
				<?php echo do_shortcode( '[contact-form-7 id="5" title="Контактная контакты"]' ); ?>
			</div>

		</div>
	</section>
	
<?php
	get_footer();
