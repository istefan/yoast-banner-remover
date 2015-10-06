<?php
/*
    Plugin Name: Yoast Banner Remover
    Plugin URI: http://wpshed.com/wordpress/plugins/yoast-banner-remover/
    Description: This plugin removes the sidebar ads from <a href="https://wordpress.org/plugins/google-analytics-for-wordpress/">Google Analytics by Yoast</a> plugin and <a href="https://wordpress.org/plugins/wordpress-seo/">Yoast SEO</a> plugin. By no means this is not intended to be a lack of appreciation for the plugin authors and we highly recommend using those plugins. It's just that sometimes a distraction free dashboard is more suitable, especially when dealing with clients.
    Version: 0.1
    Author: Stefan I.
    Author URI: http://wpshed.com/
    License: GNU General Public License v2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


/**
* Hide Banner Ads
*/
function yoast_banner_remover() {
	echo '<style>#sidebar-container #sidebar, .yoast-ga-banners {display:none;visibility:hidden;}</style>';
}
add_action( 'admin_head', 'yoast_banner_remover' );