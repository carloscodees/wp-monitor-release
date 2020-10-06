<?php


namespace Monitorwp\src\Setting;

use Monitorwp\src\Db\Db;

class Setting {


    /**
     * route namespace
     * @var string
     */
    const namespace = 'monitor/v1';

    /**
     *  lenguaje id
     * @var string
     */
    const monitordollar_lenguaje = '';

    /**
     * notice array id
     * @var array
     */
    const notice = array();

    /**
     * faild edit
     * @var boolean
     */
    const failed_edit = false;

    /**
     * plugin url ./
     * @var string
     */
    public  $plugin_url = '';

    /**
     * plugin dir path ./"."/
     * @var string;
     * 
     */
    public  $plugin_dir_path = '';

    /**
     * version of system
     * @var string
     */
    const version = '0.0.3';

   /**
    * Author id
    * @var string
    */
    const author = 'SeoContenidos';

    /**
     * slug id
     * @var string
     */
    const slug = 'monitor-dollar';
    
    /**
     * idpanel id
     * @var string
     */
    const idPanel =  'idMonitor';

    /**
     * idSubPabel id
     * @var string
     */
    const idsubPanel = 'submenu';

    /**
     * table name id
     * @var string
     */
    const tableName = 'monitordollar';




    function __construct()
    {

        $this->plugin_dir_path = plugin_dir_path( __FILE__ );
		$this->plugin_url = dirname( __FILE__ );
   
    }

}