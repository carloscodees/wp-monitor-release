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

    /**
     * page title
     * @var string
     */
    const page_title = 'Monitor Dollar';

    /**
     * page capacitly
     * @var string
     */
    const edit_others_posts = 'edit_others_posts';

    /**
     * taxtonomi
     * @var string
     */
    const textDomain = 'monitor-dollar-text';

    /**
     * money
     * @var array
     */
    const currency = array(
        "australia_dolar"               => "AUD",
        "gran_bretana_libre_esterlina"  => "GBP",
        "euro"                          => "EUR",
        "japon_yen"                     => "JPY",
        "suiza_franco"                  => "CHF",
        "EE_UU_dolar"                   => "USD",
        "afganistan_afgani"             => "AFN",
        "albania_lek"                   => "ALL",
        "algeria_dinar"                 => "DZD",
        "angola_kwanza"                 => "AOA",
        "algeria_dinar"                 => "ALL",
        "algeria_dinar"                 => "DZD",
        "angola_kwanza"                 => "AOA",
        "argentina_peso"                => "ARS",
        "armenia_dram"                  => "AMD",
        "aruba_florin"                  => "AWG",
        "australia_dolar"               => "ATS (EURO)"
    );




    function __construct()
    {

        $this->plugin_dir_path = plugin_dir_path( __FILE__ );
		$this->plugin_url = dirname( __FILE__ );
   
    }
    public function get_plugin_url(){
        return $this->plugin_url;
    }
}