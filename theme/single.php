<?php
	get_header();
?>

	<div class="article">
		<div class="container">

			<div class="grums">
				<span></span>
				<a href="<?php echo get_home_url(); ?>/new/">
					<?php the_field ( 'blog_back' , pll_current_language ( 'slug' ) ) ; ?>
				</a>
			</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>
				
			<?php endwhile; ?>
			<?php endif; ?>


		</div>
	</div>

<?php
	get_footer();


