<?php 
/*
Plugin Name: WP Monitor Dollar Release
Description: Monitoriar el cambio de divisas: Dolar, Peso Colombiano, Banco central de venezula
Author: SeoContenidos
Version: 0.0.3
Author URI: https://seocontenidos.net/
License: GPLv2 or later
Text Domain: monitor-dollar-text
*/
if ( ! defined( 'ABSPATH' ) ) {  
	exit;
}

require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
use Monitorwp\src\Db\Db;
if(!class_exists('Wp_monitor_release')){
    require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
    register_activation_hook( __FILE__ , 'db_monitor_dollar');
    function db_monitor_dollar(){
       Db::db_register_init();
    }
}


