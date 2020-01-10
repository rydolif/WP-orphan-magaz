<?php
	/**
		* Template name: Про нас
	*/

get_header();
?>
	
	<section class="about">
		<div class="about__container container">

			<div class="about__col">
				<?php the_field ( 'about_left' , pll_current_language ( 'slug' ) ) ; ?>
			</div>

			<div class="about__col">
				<?php the_field ( 'about_right' , pll_current_language ( 'slug' ) ) ; ?>
			</div>

		</div>
	</section>

<?php
get_footer();
