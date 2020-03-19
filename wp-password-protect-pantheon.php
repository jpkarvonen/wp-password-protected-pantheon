<?php
/**
 * Plugin Name: WP Password Protected Pantheon Helper
 * Version: 1.0.0
 * Author: John Karvonen
 */


function wp_password_protected_pantheon_add_styx_prefix($pw_protected_cookie_name)
  {
      return 'STYXKEY_' . $pw_protected_cookie_name;
  }

add_filter('password_protected_set_cookie', 'wp_password_protected_pantheon_add_styx_prefix');
