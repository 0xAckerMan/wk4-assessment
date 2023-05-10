<?php

/*
 * @package BookRegistration
 */

/*
  Plugin Name: Book Registration
  Plugin URI: http://...
  Version: 1.0.0
  Author: Kores
  Author URI: http://...
*/

// Security Check
defined('ABSPATH') or die('Hello hacker');

class Bookreg{
  function __constructor(){
    
  }

  function registerPage(){
    add_action('admin_menu', [$this, 'add_admin_page']);
  }
  function add_admin_page(){
    add_menu_page('Book Registration','Register Book', 'manage_options', 'register_hook', '',)
  }

}
?>
