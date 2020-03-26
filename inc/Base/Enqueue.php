<?php
/**
 * @package Inpsyde plugin
 */

 namespace Inc\Base;
 
 /**
  * 
  */
 class Enqueue
 {
     public function register() {
        add_action ('admin_enqueue_scripts', array( $this, 'enqueue' ) );
     }

     function enqueue(){
         //enqueue all scripts
        wp_enqueue_style( 'pluginstyle', PLUGIN_URL . ( '/assets/css/style.css' ) );
        wp_enqueue_script( 'pluginscript', PLUGIN_URL . ( '/assets/js/jquery-3.4.1.min.js' ) );
        wp_enqueue_script( 'plugincustomscript', PLUGIN_URL . ( '/assets/js/main.js' ) );
     }
 }