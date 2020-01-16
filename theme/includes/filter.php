<?php 

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}



add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
  register_nav_menu( 'menu', 'Menu' );
  register_nav_menu( 'profile', 'Profile' );
  register_nav_menu( 'login', 'Login' );
  register_nav_menu( 'footer', 'footer'
 );
}
