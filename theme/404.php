<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package schoolstudy
 */

get_header();
?>

	<div id="primary" class="content-area">
		<div class="container">
			<section class="error-404 not-found">
				<header class="page-header">
					<h2 class="page-title"><?php esc_html_e( 'На жаль сторінка не знайдена!', 'schoolstudy' ); ?></h2>
					<a href="<?php echo get_home_url(); ?>">Повернутися на головну</a>
				</header>

			</section>

		</div>
	</div>

<?php
get_footer();
