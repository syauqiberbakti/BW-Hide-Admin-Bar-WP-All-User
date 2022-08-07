<?php

/*

Plugin Name: BW Hide Admin Bar WP (All User)
Plugin URI: https://www.berbakti.com/bw-hide-admin-bar-wp-for-all-user/
Description: BW Hide Admin Bar WP is a plugin that has the ability to hide the appearance of the WordPress Admin Bar. The existence of this plugin makes it easy for WordPress users to hide the Admin Bar for all users.
Version: 1.0.0
Author: Berbakti Webhoster
Author URI: https://www.berbakti.com/
Donation URI: https://www.berbakti.com/donation/
Development URI: https://www.fajarpos.com/
License: GPL-3.0 license
License URI: https://github.com/syauqiberbakti/BW-Hide-Admin-Bar-WP-All-User/blob/main/LICENSE

*/

/* Hide Admin Bar Wordpress for All User */

add_filter('show_admin_bar', '__return_false');

?>
