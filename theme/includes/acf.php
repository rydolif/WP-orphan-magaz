<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


// ------------------настройка- ACF---------------------
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title'    => 'Настройка темы',
            'menu_title'    => 'Настройка темы',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'  => false
        ));

    }


// ------------------настройка- ACF-мови--------------------
    if( function_exists('acf_add_options_page') ) {
      // Language Specific Options
      // Translatable options specific languages. e.g., social profiles links
      // 
      
      $languages = array( 'en', 'uk' );
      foreach ( $languages as $lang ) {
        acf_add_options_page( array(
          'page_title' => 'Настройка (' . strtoupper( $lang ) . ')',
          'menu_title' => __('Настройка (' . strtoupper( $lang ) . ')', 'text-domain'),
          'menu_slug'  => "site-options-${lang}",
          'post_id'    => $lang
        ) );
      }
    }

