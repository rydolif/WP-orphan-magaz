
	</main>

	<footer class="footer">
		<div class="container">
			<div class="footer__container">
			
				<p>
					<?php the_field ( 'copy' , pll_current_language ( 'slug' ) ) ; ?>
				</p>

				<a href="<?php the_field ( 'policy_link' , pll_current_language ( 'slug' ) ) ; ?>" target="_blank">
					<?php the_field ( 'policy_text' , pll_current_language ( 'slug' ) ) ; ?>
				</a>

				<a href="http://flex-design.net/" target="_blank">Created by <b>flexdesign</b></a>
				
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