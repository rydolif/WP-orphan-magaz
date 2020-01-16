
	</main>

	<footer class="footer">
		<div class="container">
			<div class="footer__container">

				<div class="footer__col">
					<a href="<?php echo get_home_url(); ?>" class="footer__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer__logo.png" alt="">
					</a>
					<p>© 2019</p>
				</div>

				<div class="footer__col">
					<h3><?php the_field ( 'footer_menu' , pll_current_language ( 'slug' ) ) ; ?></h3>
					<?php
						wp_nav_menu(array(
							'menu' => 'footer',
						));
					?>
				</div>

				<div class="footer__col">
					<h3><?php the_field ( 'catalog_title' , pll_current_language ( 'slug' ) ) ; ?></h3>
					<?php
						wp_nav_menu(array(
							'menu' => 'category',
						));
					?>
				</div>

				<div class="footer__col">
					<div>
						<h3><?php the_field ( 'footer_soc' , pll_current_language ( 'slug' ) ) ; ?></h3>
						<div class="footer__soc">
							<a href="<?php the_field('Instagram', 'option'); ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer__in.png" alt="">
							</a>
							<a href="<?php the_field('Facebook', 'option'); ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer__fb.png" alt="">
							</a>
						</div>
					</div>
					<a href="http://flex-design.net/" target="_blank">Created by <b>flexdesign</b></a>
				</div>
				
			</div>
		</div>
	</footer>
	
	<div class="modal" id="login-uk">

		<button class="modal__close login-uk_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php echo do_shortcode( '[profilepress-login id="1"]' ); ?>
	</div>

	<div class="modal" id="register">

		<button class="modal__close register_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php echo do_shortcode( '[profilepress-registration id="1"]' ); ?>
	</div>

	<div class="modal" id="reset">

		<button class="modal__close reset_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php echo do_shortcode( '[profilepress-password-reset id="1"]' ); ?>
	</div>

	<div class="modal" id="login-en">

		<button class="modal__close login-en_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php echo do_shortcode( '[profilepress-login id="2"]' ); ?>
	</div>

	<div class="modal" id="register-en">

		<button class="modal__close register-en_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php echo do_shortcode( '[profilepress-registration id="2"]' ); ?>
	</div>

	<div class="modal" id="reset-en">

		<button class="modal__close reset-en_close" type="button">
			<span></span>
			<span></span>
		</button>

		<?php echo do_shortcode( '[profilepress-password-reset id="2"]' ); ?>
	</div>

	<?php wp_footer(); ?>
	
</body>
</html>