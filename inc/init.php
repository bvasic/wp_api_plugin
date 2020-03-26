<?php

/**
 * @package InpsydePlugin
 */

 namespace Inc;

 final class Init
 {
     /**
      * Store all the classes inside an array
      * @return array Full list of classes
      */
     public static function get_services() 
     {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
     }
     /** 
      * Loop trough the classes, initialize them, and call the register() method if it exists
      * @return class instance  new insance of the class
     */
     public static function register_services() 
     {
        foreach (self::get_services() as $class){
            $service = self::instantiate($class);
                if (method_exists($service, 'register') ){
                    $service->register(); 
            }
        }
    }

    /**
     * Initialize the classs
     * @param class $class  class from the services array
     * @return 
     */
    private static function instantiate ( $class )
    {
        $service = new $class();
        return $service;
    }
 }


//  use Inc\Activate;
//  use Inc\Deactivate;
//  use Inc\Pages\Admin; 

//  class InpsydePlugin
// {

//     public $plugin;

//     function __construct(){
//         $this->plugin = plugin_basename( __FILE__);
//     }

//     function register() {
//         Admin::register();
//     }

//     public function settings_link( $links ){
//         Admin::settings_link();
//     }

//     public function add_admin_pages() {
//         Admin::add_admin_pages();
//     }

//     protected function create_post_type() {
//         add_action( 'init', array( $this, 'custom_post_type' ) );
//     }

//     function custom_post_type() {

//         register_post_type( 'inpsyde' , ['public' => true, 'label' => 'Inpsyde'] );

//     }

//     static function enqueue() {
//         //enqueue all scripts
//         wp_enqueue_style( 'pluginstyle', plugins_url( '/assets/css/style.css', __FILE__ ) );
//         wp_enqueue_script( 'pluginscript', plugins_url( '/assets/js/jquery-3.4.1.min.js', __FILE__ ) );
//         wp_enqueue_script( 'plugincustomscript', plugins_url( '/assets/js/main.js', __FILE__ ) );
//     }

//     function activate() {
//         //require_once plugin_dir_path( __FILE__ ) . 'inc/inpsyde-plugin-activate.php';
//         Activate::activate();
//         Deactivate::deactivate();
//     }

// }

// if ( class_exists ( 'InpsydePlugin' ) ){
//     $inpsydePlugin = new InpsydePlugin();
//     $inpsydePlugin->register();
// }

// //activation
// register_activation_hook( __FILE__, array ( $inpsydePlugin, 'activate' ) );

// //deactivation
// require_once plugin_dir_path( __FILE__ ) . 'inc/inpsyde-plugin-deactivate.php';
// register_deactivation_hook( __FILE__, array ( 'InpsydePluginDeactivate', 'deactivate' ) );