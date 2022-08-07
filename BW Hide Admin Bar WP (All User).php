<?php

/*

Plugin Name: BW Hide Admin Bar WP (All User)
Plugin URI: https://www.berbakti.com/plugin-wordpress/bw-hide-admin-bar-wp
Description: BW Hide Admin Bar WP is a plugin that has the ability to hide the appearance of the WordPress Admin Bar. The existence of this plugin makes it easy for WordPress users to hide the Admin Bar for all users.
Version: 1.0.0
Author: Berbakti Webhoster
Author URI: https://www.berbakti.com/
Donation URI: https://www.berbakti.com/donation/
Development URI: https://www.fajarpos.com/
License: GPL v2.0
License URI: https://www.gnu.org/licenses/gpl-2.0.html

*/

/* Hide Admin Bar Wordpress for All User */

add_filter('show_admin_bar', '__return_false');

?>