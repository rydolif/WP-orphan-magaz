
	</main>

	<footer class="footer">
		<div class="container">
			<div class="footer__container">
			
				<p>© 2019 Hand Crafts by Orphans</p>

				<a href="<?php the_field('policy', 'option'); ?>" target="_blank">Політика конфіденційності</a>

				<a href="http://flex-design.net/" target="_blank">Created by <b>flexdesign</b></a>
				
			</div>
		</div>
	</footer>
	
	<div class="modal" id="login">

		<button class="modal__close login_close" type="button">
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

	<?php wp_footer(); ?>
	
</body>
</html>