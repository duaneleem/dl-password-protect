<?php
// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! class_exists( 'DL_Password_Protected' ) ) :

  class DL_Password_Protected {
    /**
     * Activate password protection.
     */
    public static function init() {
      self::passwordProtect();
    } // init()
    
    /**
     * Redirect user to login page if they aren't signed in.
     */
    private function passwordProtect() {
      if(!is_user_logged_in()) {
        auth_redirect();
      } // if
    } // passwordProtect()
  } // DL_Password_Protected

endif; // class exists check
?>