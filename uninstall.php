<?php

/**
 * Trigger this on Plugin uninstall
 * @package Inpsyde
 */

 if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ){
    die;
 } 

//Clear Database stored data
//  $inpsyde = get_posts( array( 'post_type' => 'inpsyde', 'numberposts' => -1 ) );


//  foreach ($inpsyde as $item) {
//     wep_delete_post( $inpsyde->ID, true );
//  }

// Access db trough SQL
global $wpdb;
$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'inpsyde'" );
$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
$wpdb->query( "DELETE FROM we_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)" );