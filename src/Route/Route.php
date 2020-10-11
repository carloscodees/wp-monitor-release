<?php


namespace Monitorwp\src\Route;

use Monitorwp\src\Setting\Setting;
use WP_REST_Request;
use WP_REST_Server;

class Route {
    
    function __construct()
    {
        add_action( 'rest_api_init', array( $this, 'registerRouter' ) );
    }  

    /**
     * init de router
     */

    public function registerRouter(){

        register_rest_route(    Setting::namespace, '/login/', array(
            array(
                'methods'                 => WP_REST_Server::CREATABLE,
                'permission_callback'     => array( $this, 'privileged_permission_callback' ),
				        'callback'                => array( $this, 'login' ),
            ),
            array(
                'methods'                 => WP_REST_Server::DELETABLE,
                'permission_callback'     => array( $this, 'privileged_permission_callback' ),
                        'callback'                => array( $this, 'logout' )
            ),
        )
			
            
        );

        /**
         * crud currenty
         */

        register_rest_route(     Setting::namespace, '/currenty/',  array(
            array(
                'methods'               => WP_REST_Server::READABLE,
                'permission_callback'   => array($this, 'privileged_permission_callback'),
                        'callback'              => array($this, 'get_currenty')
            ),
            array(
                'methods'               => WP_REST_Server::DELETABLE,
                'permission_callback'   => array($this, 'privileged_permission_callback'),
                         'callback'              => array($this, 'delete_currenty')
            ),
            array(
                'methods'               => WP_REST_Server::CREATABLE,
                'permission_callback'   => array($this, 'privileged_permission_callback'),
                        'callback'              => array($this, 'create_currenty')
            ),
            array(
                'methods'               => WP_REST_Server::EDITABLE,
                'permission_callback'   => array($this, 'privileged_permission_callback'),
                        'callback'              => array($this, 'update_currenty')
            ),
        )
           

        );

       


    }


    /**
     * get currenty
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
    public function get_currenty(WP_REST_Request $Request ){

        die('get');
    }
    /**
     * delete currenty
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
    public function delete_currenty(WP_REST_Request $Request ){

        die('delete');
    }
      /**
     * add category
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
    public function create_currenty(WP_REST_Request $Request ){

        
        die('succes');
    }
    /**
     * add category
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
    public function update_currenty(WP_REST_Request $Request ){

        die('put');
    }
        /**
     * add login
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
     public function login(WP_REST_Request $Request ){

        die('login');
    }
     /**
     * add logout
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
     public function logout(WP_REST_Request $Request ){

        die('logout');
    }

    public function privileged_permission_callback( $Request ){
      
        return true;
    }







}