<?php
/*
  Plugin Name: WordPress Password Protected
  Plugin URI: https://blog.duaneleem.com/disabling-woocommerce-reviews/
  Description: Make the whole WordPress only viewable by logged in users.
  Version: 1.0
  Author: Duane Leem
  Author URI: https://duaneleem.com
  License: GPLv2+
  Text Domain: dl-password-protect
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * Active password protection.
 */
function dl_password_protected_init() {
  require_once("includes/class-dl-password-protect.php");
  DL_Password_Protected::init();
}
add_filter( "template_redirect", "dl_password_protected_init");

?>