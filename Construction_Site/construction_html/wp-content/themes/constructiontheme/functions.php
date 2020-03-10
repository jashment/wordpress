<?php
// remove visual editor
add_filter('user can richedit', '__return_false', 50);

// create menu item
register_nav_menu('siteNavigation', 'Primary Navigation');

function wpdocs_excerpt_more($more) {
	return '<a href="'.get_the_permalink().'" rel="nofollow" id="readMore">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more');

?>