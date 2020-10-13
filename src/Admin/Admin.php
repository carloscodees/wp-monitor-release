<?php

namespace Monitorwp\src\Admin;
use Monitorwp\src\Setting\Setting;



class Admin {
    
    function __construct()
    {
        add_action( 'admin_enqueue_scripts', array( $this, 'js_admin_init' ), 11 );
		// add_action( 'wp_enqueue_scripts', array( $this, 'admin_enqueue_scripts_dos' ), 11 );
        add_action('admin_menu', array( $this, 'monitor_menu'));
    }

    public function monitor_menu(){
        $page_title = __( Setting::page_title , Setting::textDomain );
		$menu_title = __( Setting::page_title , Setting::textDomain );
		$capability = Setting::edit_others_posts;
		$menu_slug  = Setting::slug;
		$function   = array( $this, 'dasboard' );
		add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, 'dashicons-chart-bar', 5);
    }
    public function dasboard(){
        $url =  new Setting();
  
        include_once( $url->get_plugin_url() . '/../Admin/pages/dasboard.php');
    }

    public function js_admin_init(){
        // wp_enqueue_style( 'monitor-dollar', plugin_dir_url( __FILE__ ) . 'include/style/style.css', array(), $this->version );
		wp_enqueue_script( 'wpmonitor_js', plugin_dir_url( __FILE__ ) . '../../assets/js/init.js', array( 'jquery' ), Setting::version, true );
		// wp_localize_script('monitor_dollar_ajax_js','monitor_vars',['ajaxurl'=>admin_url('admin-ajax.php')]);
    }




}