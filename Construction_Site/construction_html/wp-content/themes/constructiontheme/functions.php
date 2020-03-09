<?php
// remove visual editor
add_filter('user can richedit', '__return_false', 50);

// create menu item
register_nav_menu('siteNavigation', 'Primary Navigation');



?>