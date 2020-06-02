<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//--------------------------------------------количество товаров--------------------------------
	add_filter( 'loop_shop_per_page', function ( $cols ) { return 9; }, 20 ); 


//--------------------------------------------remove--------------------------------
	remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
	remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );


//--------------------------------------------wrap_cart--------------------------------
	add_action( 'woocommerce_before_main_content', 'woocommerce_before_main_content_wrap', 10 );
	function woocommerce_before_main_content_wrap() {
		?>
			<div class="shop__container container">			
		<?php 
	}

	add_action( 'woocommerce_after_main_content', 'woocommerce_after_main_content_wrap', 20 );
	function woocommerce_after_main_content_wrap() {
		?>
			</div>
		<?php 
	}


//--------------------------------------------wrap_arhive_filter-------------------------------
	add_action( 'woocommerce_before_shop_loop', 'woocommerce_before_shop_loop_wrap', 10 );
	function woocommerce_before_shop_loop_wrap() {
		?>

			<div class="shop__category">
				<h2><?php the_field ( 'catalog_title' , pll_current_language ( 'slug' ) ) ; ?></h2>
				<?php
					wp_nav_menu(array(
						'menu' => 'category',
					));
				?>
			</div>


		<?php 
	}

	add_action( 'woocommerce_after_shop_loop', 'woocommerce_after_shop_loop_wrap', 20 );
	function woocommerce_after_shop_loop_wrap() {
		?>
		<?php 
	}


//--------------------------------------------thumbnail--------------------------------
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
	add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail_wrap', 10 );
	function woocommerce_template_loop_product_thumbnail_wrap() {

		?>

			<a href="<?php the_permalink(); ?>" class="cart__img">
				<div><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
			</a>

		<?php

	}


//--------------------------------------------price--------------------------------
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
	add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price_wrap', 10 );
	function woocommerce_template_loop_price_wrap() {

		?>

		<p class="cart__price"><b>
			<?php global $product; if ( $price_html = $product->get_price_html() ) : ?>
				<?php echo $price_html; ?>
			<?php endif; ?>
		</b></p>

		
		<div class="cart__wrap">

			<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

		<?php

	}
