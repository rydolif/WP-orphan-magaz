<?php
	/**
		* Template name: Профіль
	*/

get_header();
?>
	
	<section class="cabinet">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>
		<?php endif; ?>

	</section>

<?php
get_footer();
