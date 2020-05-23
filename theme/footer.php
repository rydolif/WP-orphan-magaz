
	</main>
	
	<section class="partners">
    	<div class="container">
    	    <div class="partners__list">
    	       <div class="partners__item">
    	           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part3.png" alt="" />
    	       </div>
    	       <div class="partners__item">
    	           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part1.png" alt="" />
    	       </div>
    	       <div class="partners__item">
    	           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part4.png" alt="" />
    	       </div>
    	       <div class="partners__item">
    	           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part2.png" alt="" />
    	       </div>
    	       <div class="partners__item">
    	           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part5.png" alt="" />
    	       </div>
    	    </div>
    	    <p>Проєкт «Handcrafts by Orphans» підтриманий Програмою ООН із відновлення та розбудови миру <br>та профінансований урядами Данії, Швеції та Швейцарії.</p>
    	</div>
    </section>

	<footer class="footer">
		<div class="container">
			<div class="footer__container">

				<div class="footer__col">
					<a href="<?php echo get_home_url(); ?>" class="footer__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer__logo.svg" alt="">
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
								<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,152A105,105,0,1,0,361,257,105.12,105.12,0,0,0,256,152Zm0,0A105,105,0,1,0,361,257,105.12,105.12,0,0,0,256,152ZM437,0H75A75,75,0,0,0,0,75V437a75,75,0,0,0,75,75H437a75,75,0,0,0,75-75V75A75,75,0,0,0,437,0ZM256,392c-74.4,0-135-60.6-135-135s60.6-135,135-135,135,60.6,135,135S330.4,392,256,392ZM421,122a30,30,0,1,1,30-30A30.09,30.09,0,0,1,421,122ZM256,152A105,105,0,1,0,361,257,105.12,105.12,0,0,0,256,152Zm0,0A105,105,0,1,0,361,257,105.12,105.12,0,0,0,256,152Zm0,0A105,105,0,1,0,361,257,105.12,105.12,0,0,0,256,152Z"/></svg>
							</a>
							<a href="<?php the_field('Facebook', 'option'); ?>" target="_blank">
								<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.97 96.12"><path d="M72.09,0,59.62,0c-14,0-23.05,9.28-23.05,23.66V34.56H24a2,2,0,0,0-2,2v15.8a2,2,0,0,0,2,2H36.57V94.16a2,2,0,0,0,2,2H54.88a2,2,0,0,0,2-2V54.29H71.5a2,2,0,0,0,2-2V36.52a2,2,0,0,0-2-2H56.84V25.32c0-4.44,1.06-6.7,6.85-6.7h8.4a2,2,0,0,0,2-2V2A2,2,0,0,0,72.09,0Z" transform="translate(-22.08)"/></svg>
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
	<!-- Facebook Pixel Code -->
	<script>
	 !function(f,b,e,v,n,t,s)
	 {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	 n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	 if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	 n.queue=[];t=b.createElement(e);t.async=!0;
	 t.src=v;s=b.getElementsByTagName(e)[0];
	 s.parentNode.insertBefore(t,s)}(window, document,'script',
	 'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '204630330711104');
	 fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	 src="https://www.facebook.com/tr?id=204630330711104&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158990210-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-158990210-1');
    </script>
</body>
</html>