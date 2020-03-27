<?php
/**
 * @package Inpsyde plugin
 */
namespace Inc\Base;

use Error;

class BaseController
{
    public $plugin_path;

    public $plugin_url;

    public $plugin;

    public function __construct()
    {
        $this->plugin_path = plugin_dir_path( dirname( __FILE__, 2 ) );
        $this->plugin_url = plugin_dir_url( dirname( __FILE__, 2 ) );
        $this->plugin = plugin_basename( dirname( __FILE__, 3 ) ) . '/inpsyde-plugin.php';
        
        $request = wp_remote_get( 'https://jsonplaceholder.typicode.com/users' );
        $body = wp_remote_retrieve_body( $request );
        $data = json_decode( $body );    
        // var_dump($data[0]->name);
        // exit(0);
        if( ! empty( $data ) ) {
            echo '<ul>';
            foreach( $data as $user ) {
                echo '<li>';
                    echo "Name:" . $user->name . "<br>";
                    echo "Id:" .  $user->id . "<br>";
                    echo "Username:" .  $user->username . "<br>";
                    echo "E-mail:" .  $user->email . "<br>";
                echo '</li>';
            }
            echo '</ul>';
        }
    }
}

//Define CONSTANTS
define ('PLUGIN_PATH', plugin_dir_path(__FILE__));
define ('PLUGIN_URL', plugin_dir_url(__FILE__));
define ('PLUGIN', plugin_basename( __FILE__) );