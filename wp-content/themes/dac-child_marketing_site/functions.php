<?php
function dac_child_styles() {

    $parent_style = 'main_css';
    $bootstrap = 'bootstrap_css';
    $font = 'libre-franklin-font';

    wp_enqueue_style( $bootstrap, get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'libre-franklin-font',
        'https://fonts.googleapis.com/css?family=Libre+Franklin:400,400i,700'
    );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $bootstrap, $parent_style, $font )
    );

}
add_action( 'wp_enqueue_scripts', 'dac_child_styles' );
?>
<?php
function dac_child_js() {
    wp_enqueue_script( 'child_theme-js', get_stylesheet_directory_uri() . '/js/child-theme.js', array('jquery', 'bootstrap_js', 'theme_js'), '', true );
}
add_action('wp_enqueue_scripts', 'dac_child_js');
?>
<?php
function remove_menus(){
  
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'tools.php' );                  //Tools
  
}
add_action( 'admin_menu', 'remove_menus' );
?>
<?php // Allows BS modal to be triggered by nav item
add_filter( 'nav_menu_link_attributes', 'dac_menu_item_data_toggle', 10, 2 );
function dac_menu_item_data_toggle( $atts, $item ) {
  // Manipulate attributes
  if ( 183 == $item -> ID ) {
    $atts['data-toggle'] = 'modal';
    $atts['data-target'] = '#contactForm';
  }
  return $atts;
}
?>