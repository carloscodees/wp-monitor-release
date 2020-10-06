<?php 

namespace Monitorwp;

use Monitorwp\src\Setting\Setting,
    Monitorwp\src\Db\Db,
    Monitorwp\src\Admin\Admin,
    Monitorwp\src\Models\Models,
    Monitorwp\src\Route\Route;

Class Init {
    
    /**
     * @var Setting
     */
    public $setting;
    /**
     * @var Db
     */
    public $db;

    /**
     * @var Admin
     */
    public $admin;

    /**
     * @var Route
     */
    public $route;

    /**
     * @var Models
     */
    public $models;
    
    

    function __construct()
    {
        
        $this->init_component();
        
    }

    public function init_component(){
        
       $this->setting = new Setting();
       $this->db = new Db();
       $this->admin = new Admin();
       $this->route = new Route();
       $this->models = new Models();
       
    }







}
$ejecutar = new Init();