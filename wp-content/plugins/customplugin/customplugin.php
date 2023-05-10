<?php
/**
 * @package CustomPlugin
 */

/**
 * Plugin Name: Basic custom Plugin
 * Plugin URI: http://.....
 * Version: 1.0.0\
 * Author: K0r3s
 * Author URI: k0r3s.me
 * Licence: Harvard
 */

// SECURING THE PLUGIN

// METHOD 1
IF (!defined('ABSPATH')){
  die;
}

//METHOD 2
defined('ABSPATH') or die('Hey you hacker, got you');

//METHOD 3
if(!function_exists('add_action')){
  echo "Got you!";
  exit;
}

class CustomPlugin{
  function __constructor(){
    echo 'Action triggered';
  }
  function activate(){
    echo 'Has been activated'
    flush_rewrite_rules();

  }
}

if (class_exists('CustomPlugin')){
  $CustomPluginInstance = New CustomPlugin();
}
 
?>
