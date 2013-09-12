<?php
// WordPress view bootstrapper
define( 'WP_USE_THEMES', true );
require( './wp/wp-blog-header.php' );

$wp_base_theme = content_url().'/themes';
echo $wp_base_theme;
echo '<br/>';
echo get_template_directory();