<?php


namespace Monitorwp\src\Route;

use Monitorwp\src\Setting\Setting;
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

        register_rest_route(
			Setting::namespace,
			'login',
			array(
                'methods'                 => WP_REST_Server::CREATABLE,
                'permission_callback'     => array( $this, 'privileged_permission_callback' ),
				        'callback'                => array( $this, 'login' ),
            ),
            array(
                'methods'                 => WP_REST_Server::CREATABLE,
                'permission_callback'     => array( $this, 'privileged_permission_callback' ),
                        'callback'                => array( $this, 'logout' )
            )
            
        );


        register_rest_route(
            Setting::namespace,
            'currenty',
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
            )

        );




    }


    /**
     * add category
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
    public function get_currenty( $Request ){


    }
    /**
     * add category
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
    public function delete_currenty(  $Request ){

    }
      /**
     * add category
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
    public function create_currenty( $Request ){
        
    }
    /**
     * add category
     * @param WP_REST_Request $request
     * @return WP_Error|WP_REST_Response
     */
    public function update_currenty( $Request ){

    }

    private function privileged_permission_callback( $Request ){
        return true;
    }







}