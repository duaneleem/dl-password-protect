<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! class_exists( 'DL_WC_Remove_Reviews' ) ) :

  class DL_Password_Protected {
    // Active Password Protection.
    public static function init() {
      self::passwordProtect();
    } // init()
    
    private function passwordProtect() {
      if(!is_user_logged_in()) {
        auth_redirect();
        exit;
      } // if
    } // passwordProtect()
  } // DL_Password_Protected

endif; // class exists check
?>