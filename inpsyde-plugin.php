<?php

/**
 * @package Inpsyde
 */
/*
Plugin Name: Inpsyde Plugin
Plugin URI: https://inpsyde.bojanvasic.me/
Description: Plugin for Inpsyde, connecting to endpoint API
Version: 1.0.0.
Author: Bojan Vasic
Author URI: https://inpsyde.bojanvasic.me/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

defined( 'ABSPATH' ) or die( 'Not accessible.' );

if ( file_exists( dirname( __FILE__ ). '/vendor/autoload.php') ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

define ('PLUGIN_PATH', plugin_dir_path(__FILE__));
define ('PLUGIN_URL', plugin_dir_url(__FILE__));
define ('PLUGIN', plugin_basename( __FILE__) );

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function activate_inpsyde_plugin() {
    Activate::activate();
}

function deactivate_inpsyde_plugin() {
    Deactivate::deactivate();
}


register_activation_hook( __FILE__, 'activate_inpsyde_plugin');
register_deactivation_hook( __FILE__, 'deactivate_inpsyde_plugin');

if ( class_exists( 'Inc\\Init' ) ){
    Inc\Init::register_services();
}