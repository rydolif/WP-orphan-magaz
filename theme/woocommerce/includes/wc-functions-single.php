<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


//--------------------------------------------похожі_товари--------------------------------
	function my_related_products_args( $args ) {
	      $args['posts_per_page'] = 4; // количество "Похожих товаров"
	      $args['columns'] = 4; // количество колонок П.т
	      return $args;
	}
	add_filter( 'woocommerce_output_related_products_args', 'my_related_products_args' );
	/** задаём количество похожих товаров, колонок */


//--------------------------------------------single_grums--------------------------------
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title_wrap', 3 );
	function woocommerce_template_single_title_wrap() {
		?>

			<div class="grums">
				<span></span>
				<a href="<?php echo get_home_url(); ?>/shop/">
					<?php the_field ( 'single_back' , pll_current_language ( 'slug' ) ) ; ?>
				</a>
			</div>

		<?php 
	}


//--------------------------------------------single_description--------------------------------
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt_wrap', 25 );
	function woocommerce_template_single_excerpt_wrap() {
		?>

			<div class="single__content"><?php the_content(); ?></div>

		<?php 
	}


//--------------------------------------------single_price--------------------------------
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

//--------------------------------------------single_form--------------------------------
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

		

//--------------------------------------------single_menta--------------------------------
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

