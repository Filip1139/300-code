<?php

/**
 * Plugin Name: App Custom API
 * Description: A custom API endpoint for the app
 * Version: 0.0.1
 */

class App_REST_Sections_Controller {

  private $namespace;
  private $resource_name;

	// Here initialize our namespace and resource name
	public function __construct() {
		$this->namespace     = '/app/v1';
		$this->resource_name = 'sections';
	}

	// Register our routes.
	public function register_routes() {
		register_rest_route( $this->namespace, '/' . $this->resource_name, array(
			array(
				'methods'   => WP_REST_Server::READABLE,
				'callback'  => array( $this, 'get_data' ),
				'permission_callback' => '__return_true',
			),
		) );
	}

	// Grabs the mocked json data and outputs them as a rest response
	public function get_data( ) {
    $json_file =  plugin_dir_path( __FILE__ ) . 'src/mock-data/data.json';
    $json_data = file_get_contents( $json_file );

    if( $json_data ) {
      $data = json_decode( $json_data, true );

      return rest_ensure_response( $data );
    } else {
      return new WP_Error( 'no-data', 'No data found', array( 'status' => 404 ) );
    }
	}
}

// Function to register our new routes from the controller
function  app_register_rest_routes() {
	$controller = new App_REST_Sections_Controller();
	$controller->register_routes();
}

add_action( 'rest_api_init', 'app_register_rest_routes' );
