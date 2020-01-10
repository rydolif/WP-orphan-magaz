<?php
	get_header();
?>

	<div class="news">
		<div class="news__container container">

			<h2><?php the_field ( 'news_title' , pll_current_language ( 'slug' ) ) ; ?></h2>
		
			<div class="swiper-container">
				<div class="swiper-wrapper">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="news__slide swiper-slide">

							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" class="" alt="<?php the_title(); ?>" />
							<?php } ?>

							<div class="news__content">
								<h3><?php the_title(); ?></h3>
								<div class="news__excerpt"><?php the_excerpt(); ?></div>
								<div>
									<time datetime="1969-07-16">
										<?php echo get_the_date('Y/m/d'); ?>
									</time>
									<a href="<?php the_permalink(); ?>" class="button">
										<?php the_field ( 'news_btn' , pll_current_language ( 'slug' ) ) ; ?>
									</a>
								</div>

							</div>

						</div>

					<?php endwhile; ?>
					<?php endif; ?>

				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>

		</div>
	</div>

<?php
	get_footer();
