<?php
/*
Plugin Name: Calculadora de Transcipciones
Plugin URI:  https://www.veritescrow.com
Description: Calcula el precio del pedido de audio que se desea transcribir [cal_transcription].
Version:     1.0
Author:      Jesus Farias
Author URI:  https://www.veritescrow.com
License:     GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: Calculadora de Transcipciones
 */
defined('ABSPATH') or die('No script kiddies please!');
// global $wpdb;
//define plugin url global
define('DOCUMENTO', plugin_dir_path(__FILE__));
define('ARCHIVO', plugin_dir_url(__FILE__));
// add_action("wp_enqueue_scripts", "insertar_js");
// function dcms_insertar_js(){
//     wp_register_script('resumable', plugin_dir_url(__FILE__). 'transcription-audio/bower_components/resumablejs/resumable.js', array('jquery'), '1', true );
//     wp_enqueue_script('resumable');
// }
function wptuts_scripts_with_jquery()
{
    // Register the script like this for a plugin:
    wp_register_script('custom-script', plugins_url('/transcription-audio/bower_components/resumablejs/resumable.js', __FILE__), array('jquery'));
    wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'wptuts_scripts_with_jquery');
add_action('wp_enqueue_scripts', 'transcrip_js');
function transcrip_js()
{
    wp_register_script('script_delet', plugin_dir_url(__FILE__) . 'transcription-audio/js/delet.js', array('jquery'), '1', true);
    wp_enqueue_script('script_delet');
    wp_localize_script('script_delet', 'delet', ['ajaxurl' => admin_url('admin-ajax.php')]);
    wp_register_script('script_visitor', plugin_dir_url(__FILE__) . 'transcription-audio/js/visitor.js', array('jquery'), '1', true);
    wp_enqueue_script('script_visitor');
    wp_localize_script('script_visitor', 'visitor', ['visitor_ajax' => admin_url('admin-ajax.php')]);
    wp_register_script('script_carrito', plugin_dir_url(__FILE__) . 'transcription-audio/js/carrito.js', array('jquery'), '1', true);
    wp_enqueue_script('script_carrito');
    wp_localize_script('script_carrito', 'carrito', ['carrito_ajax' => admin_url('admin-ajax.php')]);
}
function calculadora_transcription_function()
{
    require_once DOCUMENTO . 'transcription-audio/transcriptions.php';
}
function db_transcription()
{
    require_once DOCUMENTO . 'transcription-audio/src/tabla.php';
}
function deactivate_calculadora_transcription()
{
    // Lo que quiero que haga el plugin cuando un usuario lo desactiva
}
//Devolver datos a archivo js
add_action('wp_ajax_nopriv_delet_audio', 'delet_audio');
add_action('wp_ajax_delet_audio', 'delet_audio');
function delet_audio()
{
    global $wpdb;
    $id_post    = absint($_POST['id_post']);
    $item_id    = $id_post;
    $audio      = $wpdb->prefix . "transcriAudio";
    $orderaudio = $wpdb->prefix . "transcriOrder";
    function rmDir_rf($carpeta)
    {
        foreach (glob($carpeta . "/*") as $archivos_carpeta) {
            if (is_dir($archivos_carpeta)) {
                rmDir_rf($archivos_carpeta);
            } else {
                unlink($archivos_carpeta);
            }
        }
        rmdir($carpeta);
    }
    $audtra = $wpdb->get_row("SELECT * FROM $audio where item_id='{$item_id}'");
    $delet = $wpdb->delete($audio, array('item_id' => $item_id));
    $contdel = $wpdb->get_var("SELECT COUNT(*) FROM $audio where order_id = '{$audtra->order_id}' AND link = 1");
    $salto   = chr(13) . chr(10);
    $enlaces = '';

    if ($contdel > 0) {
        $client = $wpdb->get_results("SELECT * FROM $audio where order_id='{$audtra->order_id}' AND link = 1");
        $enlaces .= 'Estos son los enlaces subidos por el cliente y sus tiempo de Duracion: ' . $salto;
        foreach ($client as $audio) {
            $enlaces .= $salto . '[[ Enlace: ' . $audio->download . ' ] [ Duration: ' . $audio->duration_for_humans . ' ]' . $salto;
            if ($audio->comment != '') {
                $enlaces .= ' [ Commentario :' . $audio->comment . ' ]]' . $salto;
            } else {
                $enlaces .= ' [ Commentario : Sin comentario.  ]]' . $salto;
            }
            $enlaces .= ' [ ------------------------------------------ ]' . $salto;
        }
        $file = fopen(DOCUMENTO ."transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id . "/enlaces.txt", "w");
        fwrite($file, $enlaces . PHP_EOL);
        fclose($file);
    } else {
        if (is_file(DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id . "/enlaces.txt")) {
            unlink(DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id . "/enlaces.txt");
        }
    }
    if (is_file(DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id . "/empty")) {
        unlink(DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id . "/empty");
    }
    if (is_file(DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id . "/" . $audtra->original_filename)) {
        unlink(DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id . "/" . $audtra->original_filename);
    }
    if (is_file(DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id . "/cort-" . $audtra->original_filename)) {
        unlink(DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id . "/cort-" . $audtra->original_filename);
    }

    $carpeta = (DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id);
    $is_empty = (bool) (count(scandir(DOCUMENTO . "transcription-audio/update-unpaid-order/uploads/" . $audtra->order_id)) == 2);
    if ($is_empty) {
        rmdir($carpeta);
    }

    wp_die();
}
add_action('wp_ajax_visitor_transcri', 'visitor_transcri');
add_action('wp_ajax_nopriv_visitor_transcri', 'visitor_transcri');
function visitor_transcri()
{
    global $wpdb;
    $audio      = $wpdb->prefix . "transcriAudio";
    $orderaudio = $wpdb->prefix . "transcriOrder";
    require_once DOCUMENTO . 'transcription-audio/visitor.php';
}
add_action('wp_ajax_nopriv_carrito', 'carrito');
add_action('wp_ajax_carrito', 'carrito');
function carrito()
{
    WC()->cart->empty_cart();
    function getIp()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $ip;
    }
    $visitor = getIp();
    $idped   = rand();
    global $wpdb;
    $audio    = $wpdb->prefix . "transcriAudio";
    $audioOrd = $wpdb->prefix . "transcriOrder";
    $pedido   = $visitor . '-' . $idped;
    $wpdb->update($audio,
        array(
            'order_id' => $pedido,
        ),
        array('order_id' => $visitor)
    );
    $wpdb->update($audioOrd,
        array(
            'order_id' => $pedido,
        ),
        array('order_id' => $visitor)
    );
    rename(__DIR__ . '/transcription-audio/update-unpaid-order/uploads/' . $visitor, __DIR__ . '/transcription-audio/update-unpaid-order/uploads/' . $pedido);
    $time       = $wpdb->get_row("SELECT * FROM $audioOrd where order_id='{$pedido}'");
    $min        = $time->total_min;
    //$product_id = 2064;
    //check if product already in cart
    if (WC()->cart->get_cart_contents_count() == 0) {
        // if no products in cart, add it
        //WC()->cart->add_to_cart($product_id, $min);
        if ($time->text_format == 'clean_verbatim') {
        } else {
            WC()->cart->add_to_cart(2065, $min);
        }
        if ($time->tat == 'normal') {
            WC()->cart->add_to_cart(2069, $min);
        } else if ($time->tat == 'rapido') {
            WC()->cart->add_to_cart(2068, $min);
        } else if ($time->tat == 'express') {
            WC()->cart->add_to_cart(2067, $min);
        } else if ($time->tat == 'horas') {
            WC()->cart->add_to_cart(2069, $min);
        }
        if ($time->speaker == 'si') {
            WC()->cart->add_to_cart(2071, $min);
        }
        if ($time->low_quality == 'si') {
            WC()->cart->add_to_cart(2070, $min);
        }
        if ($time->subtitle == 'si') {
            WC()->cart->add_to_cart(2072, $min);
        }
        if ($time->timestamping != 'not_required') {
            WC()->cart->add_to_cart(2073, $min);
        }
        $commentdb = $wpdb->get_results("SELECT item_id,original_filename,comment,order_id FROM $audio WHERE order_id='{$pedido}'");
        $c         = 0;
        foreach ($commentdb as $comen) {
            if ($c < 1) {
                $coment .= 'Pedido: ' . $comen->order_id . '\n';
                $c++;
            }
            if ($comen->comment != '') {
                $coment .= ' Id: ' . $comen->item_id . ', Nombre de archivo: ' . $comen->original_filename . ', Comentario: ' . $comen->comment . '\n';
            }
        }
        // $coment = $commentdb->comment;
        session_start();
        $_SESSION["comentarioAudio"] = $coment;

    }
}
// Hook in
add_filter('woocommerce_default_address_fields', 'custom_override_default_address_fields');
// Our hooked in function - $address_fields is passed via the filter!
function custom_override_default_address_fields($address_fields)
{
    $address_fields['comentario']['type'] = 'textarea';
    return $address_fields;
}
register_deactivation_hook(__FILE__, 'deactivate_calculadora_transcription');
register_activation_hook(__FILE__, 'db_transcription');
add_shortcode('cal_transcription', 'calculadora_transcription_function');
function descarga_pedido()
{
    add_menu_page('Descarga audios del pedido', 'Pedidos de Audios', 'manage_options', DOCUMENTO . '/transcription-audio/buscacarpeta.php');
}
add_action('admin_menu', 'descarga_pedido');