<?php
add_action( 'wp_enqueue_scripts', 'emprendedor_style' );
function emprendedor_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>