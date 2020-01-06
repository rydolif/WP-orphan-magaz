<?php
	/**
		* Template name: Корзина
	*/

get_header();

?>


	<section class="order">
		<div class="container">

			<h2><?php the_title(); ?></h2>


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>


		</div>
	</section>


<?php
get_footer();
