<?php
/**
 * @package Inpsyde plugin
 */

 namespace Inc\Base;
 
 class Enqueue extends BaseController
 {
     public function register() {
        add_action ('admin_enqueue_scripts', array( $this, 'enqueue' ) );
     }

     function enqueue(){
         //enqueue all scripts
        wp_enqueue_style( 'pluginstyle', $this->plugin_url . ( '/assets/css/style.css' ) );
        wp_enqueue_script( 'pluginscript', $this->plugin_url . ( '/assets/js/jquery-3.4.1.min.js' ) );
        wp_enqueue_script( 'plugincustomscript', $this->plugin_url . ( '/assets/js/main.js' ) );
     }
 }