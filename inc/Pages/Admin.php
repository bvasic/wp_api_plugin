<?php
namespace Inc\Pages;

class Admin
{
    public function register() { 
        //add_action( 'admin_enqueue_scripts', array( $this , 'enqueue' ) );

        add_action( 'admin_menu', array( $this, 'add_admin_pages') );

        //add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link') );
    }

    

    public function add_admin_pages() {
        add_menu_page('Inpsyde Plugin', 'Inpsyde', 'manage_options', 'inpsyde_plugin', array( $this, 'admin_index'), 'dashicons-admin-plugins', 110);
    }

    public function admin_index() {
        require_once PLUGIN_PATH . 'templates/admin.php';
    }
}