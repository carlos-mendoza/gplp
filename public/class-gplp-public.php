<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://onlinevortex.com
 * @since      1.0.0
 *
 * @package    Gplp
 * @subpackage Gplp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Gplp
 * @subpackage Gplp/public
 * @author     Carlos Mendoza <carlosm@onlinevortex.com>
 */
class Gplp_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gplp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gplp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		$cpt = get_post_type(get_queried_object_id());
		if ('gplp' == $cpt ) {
			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/gplp-public.css', array(), $this->version, 'all' );
			wp_enqueue_style( 'gplp-icons', plugin_dir_url( __FILE__ ) . 'css/font-awesome.min.css', array(), $this->version, 'all' );
			wp_enqueue_style( 'gplp-font', 'https://fonts.googleapis.com/css?family=Signika:100,300,400,600', false ); 
		}
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gplp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gplp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/gplp-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 *  Check if the theme has a custom template for the landing page, 
	 * if not it uses the default one included with the plugin 
	 */
	function gplp_template($template) {
		$cpt = get_post_type(get_queried_object_id());
	    if ('gplp' == $cpt ) {
			$single_postType_template = locate_template("{$cpt}-template.php");
			if( file_exists( $single_postType_template ) ) {
				return $single_postType_template;
			} else {
				$template = dirname( __FILE__ ) . '/templates/'.$cpt.'-template.php';
			}
		}
		return $template;
	}

	/**
	 *  Check if the theme has a custom template for the landing page, 
	 * if not it uses the default one included with the plugin 
	 */
	function gplp_header($template) {
		$cpt = get_post_type(get_queried_object_id());
	    if ('gplp' == $cpt ) {
			$single_postType_template = locate_template("{$cpt}-header.php");
			if( file_exists( $single_postType_template ) ) {
				return $single_postType_template;
			} else {
				$template = dirname( __FILE__ ) . '/templates/'.$cpt.'-header.php';
			}
		}
		return $template;
	}


}
