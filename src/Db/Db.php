<?php 

namespace Monitorwp\src\Db;
use Monitorwp\src\Setting\Setting;

class Db {
    



    public static function db_register_init(){
        global $wpdb;
        $ptbd_table_name = $wpdb->prefix . Setting::tableName;
        if ($wpdb->get_var("SHOW TABLES LIKE '". $ptbd_table_name ."'"  ) != $ptbd_table_name ) {
            $sql  = 'CREATE TABLE '.$ptbd_table_name.' (
            id int(9) NOT NULL AUTO_INCREMENT,
            dollar  varchar(55) NOT NULL,
            peso varchar(55) NOT NULL,
            bcv varchar(55) NOT NULL,
            dateinfo varchar(100) NOT NULL,
            username varchar(200) NOT NULL,
            PRIMARY KEY(id))';
            if(!function_exists('dbDelta')) {
                require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            }
            dbDelta($sql);
            update_option('tables_created', true);
        }
        $ptbd_table_name = $wpdb->prefix . Setting::tableName. "_registry";
        if ($wpdb->get_var("SHOW TABLES LIKE '". $ptbd_table_name ."'"  ) != $ptbd_table_name ) {
            $sql  = 'CREATE TABLE '.$ptbd_table_name.' (
            id int(9) NOT NULL AUTO_INCREMENT,
            dollar  varchar(55) NOT NULL,
            peso varchar(55) NOT NULL,
            bcv varchar(55) NOT NULL,
            dateinfo varchar(100) NOT NULL,
            username varchar(200) NOT NULL,
            PRIMARY KEY(id))';
            if(!function_exists('dbDelta')) {
                require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            }
            dbDelta($sql);
            update_option('tables_created', true);
        }
         $ptbd_table_name = $wpdb->prefix . Setting::tableName. "_setting";
        if ($wpdb->get_var("SHOW TABLES LIKE '". $ptbd_table_name ."'"  ) != $ptbd_table_name ) {
            $sql  = 'CREATE TABLE '.$ptbd_table_name.' (
            id int(9) NOT NULL AUTO_INCREMENT,
            setting varchar(255) NOT NULL,
            arg_one varchar(255) NOT NULL,
            arg_two varchar(255) NOT NULL,
            arg_three varchar(255) NOT NULL,
            PRIMARY KEY(id))';
            if(!function_exists('dbDelta')) {
                require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            }
            dbDelta($sql);
            update_option('tables_created', true);
           self::insert_setting__default_monitor_dollar();
		}
    }

    public static function  insert_setting__default_monitor_dollar(){
		global $wpdb;
	 	$nameTable = $wpdb->prefix . Setting::tableName . "_setting";
	 	$nameTable_monitor = $wpdb->prefix . Setting::tableName;


	 $results = $wpdb->insert($nameTable,

			array(
			'setting' => 'config-1',

			'arg_one' => 1,

			'arg_two' => 1,

			'arg_three' => 1,


			)
			

		);
	  $results = $wpdb->insert($nameTable_monitor,

			array(
			'dollar' => '0',

			'peso' => '0',

			'bcv' => '0',

			'dateinfo' => '0',

			'username' => 'monitordollar'


			)
			

		);
	
	}
}