<?php
	/**
		* Template name: Про нас
	*/

get_header();
?>
	
	<section class="about">
		<div class="about__container container">

			<div class="about__col">
				<?php the_field('left'); ?>
			</div>

			<div class="about__col">
				<?php the_field('right'); ?>
			</div>

		</div>
	</section>

<?php
get_footer();
