<?php 


//Вывод кратких данных из корзины
	if ( ! function_exists( 'cart_link' ) ) {
	 function cart_link() {
	 ?>
	<a class="header__info_wrap header__cart cart-contents" href="<?php echo get_home_url(); ?>/cart/">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__cart.svg" alt="">
		<span><?php echo sprintf (_n( '%d', '%d ', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></span>
		</a> 
	 <?php
	 }
	}

//Ajax Обновление кратких данных из корзины
	add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

	function woocommerce_header_add_to_cart_fragment( $fragments ) {
	 ob_start();
	 ?>
	 <a class="header__info_wrap header__cart cart-contents" href="<?php echo get_home_url(); ?>/cart/">
	 	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__cart.svg" alt="">
	 	<span class="active"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></span></a> 
	 <?php
	 $fragments['a.cart-contents'] = ob_get_clean();
	 return $fragments;
	}

