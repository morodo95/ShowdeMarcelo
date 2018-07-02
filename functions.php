<?php 
add_theme_support('post-formats',array('aside', 'video'));
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>