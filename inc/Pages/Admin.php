<?php
namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;
class Admin extends BaseController
{
    public $settings;

    public $admin_pages = array();

    public function __construct()
    {
        $this->settings = new SettingsApi();
    }

    public function register() {
        //add_action( 'admin_menu', array( $this, 'add_admin_pages') );
        $pages = [
            [
                'page_title' => 'Inpsyde Plugin',
                'menu_title' => 'Inpsyde',
                'capability' => 'manage_options',
                'menu_slug'  => 'inpsyde_plugin',
                'callback'   => function() { echo '<h1>Inpsyde plugin</h1>'; },
                'icon_url'   => 'dashicons-store',
                'position'   => 110
            ],
            [
                'page_title' => 'Test Plugin',
                'menu_title' => 'Test',
                'capability' => 'manage_options',
                'menu_slug'  => 'test_plugin',
                'callback'   => function() { echo '<h1>External</h1>'; },
                'icon_url'   => 'dashicons-external',
                'position'   => 9
            ]
        ];
        $this->settings->addPages( $pages )->register();
    }
}