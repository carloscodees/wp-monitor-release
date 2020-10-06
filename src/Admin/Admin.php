<?php

namespace Monitorwp\src\Admin;
use Monitorwp\src\Setting\Setting;
class Admin {
    
    function __construct()
    {
        add_action('admin_menu', array( $this, 'monitor_menu'));
    }

    public function monitor_menu(){
        $page_title = __( 'Monitor Dollar', 'monitor-dollar' );
		$menu_title = __( 'Monitor Dollar', 'monitor-dollar' );
		$capability = 'edit_others_posts';
		$menu_slug  = Setting::slug;
		$function   = array( $this, 'dasboard' );
		add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, 'dashicons-chart-bar', 5);
    }
    public function dasboard(){
        echo "<h1>Hola</h1>";
    }


}