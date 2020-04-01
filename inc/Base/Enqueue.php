<?php
/**
 * @package Inpsyde plugin
 */

 namespace Inc\Base;
 
 class Enqueue extends BaseController
 {
    public function register() {
        add_action ('wp_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    function enqueue(){
        //enqueue all scripts
        wp_enqueue_style( 'pluginStyle', $this->plugin_url . ( '/assets/css/style.css' ) );   
        wp_enqueue_script( 'pluginScript', $this->plugin_url . ( '/assets/js/jquery-3.4.1.min.js' ) );
        wp_enqueue_style( 'pluginDataTableStyle', $this->plugin_url . ( '/assets/css/jquery.dataTables.min.css' ) );
        wp_enqueue_script( 'pluginDataTablesScript', $this->plugin_url . ( '/assets/js/jquery.dataTables.min.js' ) );
        wp_enqueue_script( 'pluginCustomScript', $this->plugin_url . ( '/assets/js/main.js' ) );
    }
  
 }