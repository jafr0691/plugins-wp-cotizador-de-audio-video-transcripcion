<?php
// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
} 
 
// Drop a custom db table
global $wpdb;
$audio   = $wpdb->prefix . "transcriAudio";
$orderaudio   = $wpdb->prefix . "transcriOrder";
$wpdb->query( "DROP TABLE IF EXISTS {$audio}" );

$wpdb->query( "DROP TABLE IF EXISTS {$orderaudio}" );
 
//Elimina las opciones que se guardan en la BD
delete_option(‘mi_opcion’); 
delete_site_option(‘mi_opcion’);