<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neve-style','neve-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
   
}



add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'primary') {

        $items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';

    }

    return $items;

}





function aff_quantite() {

    $moncode='
    
    <div class="parent">
    <div class="div1">O </div>
    <div class="div2">+</div>
    <div class="div3">- </div>
    </div>
    ';

return $moncode;
    }

    add_shortcode ('monbouton','aff_quantite');
    
   
    function rightbutton()
    {
        $moncode2= '<div class = "bouton2"> OK </div>' ; 
        return $moncode2 ; 
    }
    add_shortcode('bouton2','rightbutton');









?>
