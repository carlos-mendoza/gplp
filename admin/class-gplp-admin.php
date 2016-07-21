<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://onlinevortex.com
 * @since      1.0.0
 *
 * @package    Gplp
 * @subpackage Gplp/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Gplp
 * @subpackage Gplp/admin
 * @author     Carlos Mendoza <carlosm@onlinevortex.com>
 */
class Gplp_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/gplp-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/gplp-admin.js', array( 'jquery' ), $this->version, false );

	}



	// Register Custom Post Type
	function gplp_post_type() {

		$labels = array(
			'name'                  => _x( 'Landing pages', 'Post Type General Name', 'gplp' ),
			'singular_name'         => _x( 'Landing page', 'Post Type Singular Name', 'gplp' ),
			'menu_name'             => __( 'Landing pages', 'gplp' ),
			'name_admin_bar'        => __( 'Landing pages', 'gplp' ),
			'archives'              => __( 'Landing pages Archives', 'gplp' ),
			'parent_item_colon'     => __( 'Parent Item:', 'gplp' ),
			'all_items'             => __( 'All Items', 'gplp' ),
			'add_new_item'          => __( 'Add New Item', 'gplp' ),
			'add_new'               => __( 'Add New', 'gplp' ),
			'new_item'              => __( 'New Item', 'gplp' ),
			'edit_item'             => __( 'Edit Item', 'gplp' ),
			'update_item'           => __( 'Update Item', 'gplp' ),
			'view_item'             => __( 'View Item', 'gplp' ),
			'search_items'          => __( 'Search Item', 'gplp' ),
			'not_found'             => __( 'Not found', 'gplp' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'gplp' ),
			'featured_image'        => __( 'Featured Image', 'gplp' ),
			'set_featured_image'    => __( 'Set featured image', 'gplp' ),
			'remove_featured_image' => __( 'Remove featured image', 'gplp' ),
			'use_featured_image'    => __( 'Use as featured image', 'gplp' ),
			'insert_into_item'      => __( 'Insert into item', 'gplp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'gplp' ),
			'items_list'            => __( 'Items list', 'gplp' ),
			'items_list_navigation' => __( 'Items list navigation', 'gplp' ),
			'filter_items_list'     => __( 'Filter items list', 'gplp' ),
		);
		$args = array(
			'label'                 => __( 'Landing page', 'gplp' ),
			'description'           => __( 'Landing page with form, features information and link to social sites', 'gplp' ),
			'labels'                => $labels,
			'supports'              => array( 'title', ),
//			'taxonomies'            => array( 'category', 'post_tag' ),
			'taxonomies'            => array( ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 25,
			'menu_icon'             => 'dashicons-admin-page',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'gplp', $args );

	}

	public function icons_array() {
		return array (
				'' => 'Please select',
				'facebook' => 'facebook',
				'linkedin' => 'linkedin',
				'pinterest' => 'pinterest',
				'snapchat' => 'snapchat',
				'tumblr' => 'tumblr',
				'twitter' => 'twitter',
				'youtube' => 'youtube',
				'adjust' => 'adjust',
				'american-sign-language-interpreting' => 'american-sign-language-interpreting',
				'anchor' => 'anchor',
				'archive' => 'archive',
				'area-chart' => 'area-chart',
				'arrows' => 'arrows',
				'arrows-alt' => 'arrows-alt',
				'arrows-h' => 'arrows-h',
				'arrows-v' => 'arrows-v',
				'asl-interpreting' => 'asl-interpreting',
				'assistive-listening-systems' => 'assistive-listening-systems',
				'asterisk' => 'asterisk',
				'at' => 'at',
				'audio-description' => 'audio-description',
				'automobile (alias)' => 'automobile (alias)',
				'balance-scale' => 'balance-scale',
				'ban' => 'ban',
				'bank' => 'bank',
				'bar-chart' => 'bar-chart',
				'barcode' => 'barcode',
				'bars' => 'bars',
				'battery-empty' => 'battery-empty',
				'battery-full' => 'battery-full',
				'battery-half' => 'battery-half',
				'battery-quarter' => 'battery-quarter',
				'battery-three-quarters' => 'battery-three-quarters',
				'bed' => 'bed',
				'beer' => 'beer',
				'bell' => 'bell',
				'bell-o' => 'bell-o',
				'bell-slash' => 'bell-slash',
				'bell-slash-o' => 'bell-slash-o',
				'bicycle' => 'bicycle',
				'binoculars' => 'binoculars',
				'birthday-cake' => 'birthday-cake',
				'blind' => 'blind',
				'bluetooth' => 'bluetooth',
				'bluetooth-b' => 'bluetooth-b',
				'bolt' => 'bolt',
				'bomb' => 'bomb',
				'book' => 'book',
				'bookmark' => 'bookmark',
				'bookmark-o' => 'bookmark-o',
				'braille' => 'braille',
				'briefcase' => 'briefcase',
				'bug' => 'bug',
				'building' => 'building',
				'building-o' => 'building-o',
				'bullhorn' => 'bullhorn',
				'bullseye' => 'bullseye',
				'bus' => 'bus',
				'cab' => 'cab',
				'calculator' => 'calculator',
				'calendar' => 'calendar',
				'calendar-check-o' => 'calendar-check-o',
				'calendar-minus-o' => 'calendar-minus-o',
				'calendar-o' => 'calendar-o',
				'calendar-plus-o' => 'calendar-plus-o',
				'calendar-times-o' => 'calendar-times-o',
				'camera' => 'camera',
				'camera-retro' => 'camera-retro',
				'car' => 'car',
				'caret-square-o-down' => 'caret-square-o-down',
				'caret-square-o-left' => 'caret-square-o-left',
				'caret-square-o-right' => 'caret-square-o-right',
				'caret-square-o-up' => 'caret-square-o-up',
				'cart-arrow-down' => 'cart-arrow-down',
				'cart-plus' => 'cart-plus',
				'cc' => 'cc',
				'certificate' => 'certificate',
				'check' => 'check',
				'check-circle' => 'check-circle',
				'check-circle-o' => 'check-circle-o',
				'check-square' => 'check-square',
				'check-square-o' => 'check-square-o',
				'child' => 'child',
				'circle' => 'circle',
				'circle-o' => 'circle-o',
				'circle-o-notch' => 'circle-o-notch',
				'circle-thin' => 'circle-thin',
				'clock-o' => 'clock-o',
				'clone' => 'clone',
				'close' => 'close',
				'cloud' => 'cloud',
				'cloud-download' => 'cloud-download',
				'cloud-upload' => 'cloud-upload',
				'code' => 'code',
				'code-fork' => 'code-fork',
				'coffee' => 'coffee',
				'cog' => 'cog',
				'cogs' => 'cogs',
				'comment' => 'comment',
				'comment-o' => 'comment-o',
				'commenting' => 'commenting',
				'commenting-o' => 'commenting-o',
				'comments' => 'comments',
				'comments-o' => 'comments-o',
				'compass' => 'compass',
				'copyright' => 'copyright',
				'creative-commons' => 'creative-commons',
				'credit-card' => 'credit-card',
				'credit-card-alt' => 'credit-card-alt',
				'crop' => 'crop',
				'crosshairs' => 'crosshairs',
				'cube' => 'cube',
				'cubes' => 'cubes',
				'cutlery' => 'cutlery',
				'dashboard' => 'dashboard',
				'database' => 'database',
				'deaf' => 'deaf',
				'deafness' => 'deafness',
				'desktop' => 'desktop',
				'diamond' => 'diamond',
				'dot-circle-o' => 'dot-circle-o',
				'download' => 'download',
				'edit' => 'edit',
				'ellipsis-h' => 'ellipsis-h',
				'ellipsis-v' => 'ellipsis-v',
				'envelope' => 'envelope',
				'envelope-o' => 'envelope-o',
				'envelope-square' => 'envelope-square',
				'eraser' => 'eraser',
				'exchange' => 'exchange',
				'exclamation' => 'exclamation',
				'exclamation-circle' => 'exclamation-circle',
				'exclamation-triangle' => 'exclamation-triangle',
				'external-link' => 'external-link',
				'external-link-square' => 'external-link-square',
				'eye' => 'eye',
				'eye-slash' => 'eye-slash',
				'eyedropper' => 'eyedropper',
				'fax' => 'fax',
				'feed' => 'feed',
				'female' => 'female',
				'fighter-jet' => 'fighter-jet',
				'file-archive-o' => 'file-archive-o',
				'file-audio-o' => 'file-audio-o',
				'file-code-o' => 'file-code-o',
				'file-excel-o' => 'file-excel-o',
				'file-image-o' => 'file-image-o',
				'file-movie-o' => 'file-movie-o',
				'file-pdf-o' => 'file-pdf-o',
				'file-photo-o' => 'file-photo-o',
				'file-picture-o' => 'file-picture-o',
				'file-powerpoint-o' => 'file-powerpoint-o',
				'file-sound-o' => 'file-sound-o',
				'file-video-o' => 'file-video-o',
				'file-word-o' => 'file-word-o',
				'file-zip-o' => 'file-zip-o',
				'film' => 'film',
				'filter' => 'filter',
				'fire' => 'fire',
				'fire-extinguisher' => 'fire-extinguisher',
				'flag' => 'flag',
				'flag-checkered' => 'flag-checkered',
				'flag-o' => 'flag-o',
				'flash' => 'flash',
				'flask' => 'flask',
				'folder' => 'folder',
				'folder-o' => 'folder-o',
				'folder-open' => 'folder-open',
				'folder-open-o' => 'folder-open-o',
				'frown-o' => 'frown-o',
				'futbol-o' => 'futbol-o',
				'gamepad' => 'gamepad',
				'gavel' => 'gavel',
				'gear' => 'gear',
				'gears' => 'gears',
				'gift' => 'gift',
				'glass' => 'glass',
				'globe' => 'globe',
				'graduation-cap' => 'graduation-cap',
				'group' => 'group',
				'hand-grab-o' => 'hand-grab-o',
				'hand-lizard-o' => 'hand-lizard-o',
				'hand-paper-o' => 'hand-paper-o',
				'hand-peace-o' => 'hand-peace-o',
				'hand-pointer-o' => 'hand-pointer-o',
				'hand-rock-o' => 'hand-rock-o',
				'hand-scissors-o' => 'hand-scissors-o',
				'hand-spock-o' => 'hand-spock-o',
				'hand-stop-o' => 'hand-stop-o',
				'hard-of-hearing' => 'hard-of-hearing',
				'hashtag' => 'hashtag',
				'hdd-o' => 'hdd-o',
				'headphones' => 'headphones',
				'heart' => 'heart',
				'heart-o' => 'heart-o',
				'heartbeat' => 'heartbeat',
				'history' => 'history',
				'home' => 'home',
				'hotel' => 'hotel',
				'hourglass' => 'hourglass',
				'hourglass-1' => 'hourglass-1',
				'hourglass-2' => 'hourglass-2',
				'hourglass-3' => 'hourglass-3',
				'hourglass-end' => 'hourglass-end',
				'hourglass-half' => 'hourglass-half',
				'hourglass-o' => 'hourglass-o',
				'hourglass-start' => 'hourglass-start',
				'i-cursor' => 'i-cursor',
				'image' => 'image',
				'inbox' => 'inbox',
				'industry' => 'industry',
				'info' => 'info',
				'info-circle' => 'info-circle',
				'institution' => 'institution',
				'key' => 'key',
				'keyboard-o' => 'keyboard-o',
				'language' => 'language',
				'laptop' => 'laptop',
				'leaf' => 'leaf',
				'legal' => 'legal',
				'lemon-o' => 'lemon-o',
				'level-down' => 'level-down',
				'level-up' => 'level-up',
				'life-bouy' => 'life-bouy',
				'life-buoy' => 'life-buoy',
				'life-ring' => 'life-ring',
				'life-saver' => 'life-saver',
				'lightbulb-o' => 'lightbulb-o',
				'line-chart' => 'line-chart',
				'link' => 'link',
				'location-arrow' => 'location-arrow',
				'lock' => 'lock',
				'low-vision' => 'low-vision',
				'magic' => 'magic',
				'magnet' => 'magnet',
				'mail-forward' => 'mail-forward',
				'mail-reply' => 'mail-reply',
				'mail-reply-all' => 'mail-reply-all',
				'male' => 'male',
				'map' => 'map',
				'map-marker' => 'map-marker',
				'map-o' => 'map-o',
				'map-pin' => 'map-pin',
				'map-signs' => 'map-signs',
				'meh-o' => 'meh-o',
				'microphone' => 'microphone',
				'microphone-slash' => 'microphone-slash',
				'minus' => 'minus',
				'minus-circle' => 'minus-circle',
				'minus-square' => 'minus-square',
				'minus-square-o' => 'minus-square-o',
				'mobile' => 'mobile',
				'mobile-phone' => 'mobile-phone',
				'money' => 'money',
				'moon-o' => 'moon-o',
				'mortar-board' => 'mortar-board',
				'motorcycle' => 'motorcycle',
				'mouse-pointer' => 'mouse-pointer',
				'music' => 'music',
				'navicon' => 'navicon',
				'newspaper-o' => 'newspaper-o',
				'object-group' => 'object-group',
				'object-ungroup' => 'object-ungroup',
				'paint-brush' => 'paint-brush',
				'paper-plane' => 'paper-plane',
				'paper-plane-o' => 'paper-plane-o',
				'paw' => 'paw',
				'pencil' => 'pencil',
				'pencil-square' => 'pencil-square',
				'pencil-square-o' => 'pencil-square-o',
				'percent' => 'percent',
				'phone' => 'phone',
				'phone-square' => 'phone-square',
				'photo' => 'photo',
				'picture-o' => 'picture-o',
				'pie-chart' => 'pie-chart',
				'plane' => 'plane',
				'plug' => 'plug',
				'plus' => 'plus',
				'plus-circle' => 'plus-circle',
				'plus-square' => 'plus-square',
				'plus-square-o' => 'plus-square-o',
				'power-off' => 'power-off',
				'print' => 'print',
				'puzzle-piece' => 'puzzle-piece',
				'qrcode' => 'qrcode',
				'question' => 'question',
				'question-circle' => 'question-circle',
				'question-circle-o' => 'question-circle-o',
				'quote-left' => 'quote-left',
				'quote-right' => 'quote-right',
				'random' => 'random',
				'recycle' => 'recycle',
				'refresh' => 'refresh',
				'registered' => 'registered',
				'remove' => 'remove',
				'reorder' => 'reorder',
				'reply' => 'reply',
				'reply-all' => 'reply-all',
				'retweet' => 'retweet',
				'road' => 'road',
				'rocket' => 'rocket',
				'rss' => 'rss',
				'rss-square' => 'rss-square',
				'search' => 'search',
				'search-minus' => 'search-minus',
				'search-plus' => 'search-plus',
				'send' => 'send',
				'send-o' => 'send-o',
				'server' => 'server',
				'share' => 'share',
				'share-alt' => 'share-alt',
				'share-alt-square' => 'share-alt-square',
				'share-square' => 'share-square',
				'share-square-o' => 'share-square-o',
				'shield' => 'shield',
				'ship' => 'ship',
				'shopping-bag' => 'shopping-bag',
				'shopping-basket' => 'shopping-basket',
				'shopping-cart' => 'shopping-cart',
				'sign-in' => 'sign-in',
				'sign-language' => 'sign-language',
				'sign-out' => 'sign-out',
				'signal' => 'signal',
				'signing' => 'signing',
				'sitemap' => 'sitemap',
				'sliders' => 'sliders',
				'smile-o' => 'smile-o',
				'soccer-ball-o' => 'soccer-ball-o',
				'sort' => 'sort',
				'sort-alpha-asc' => 'sort-alpha-asc',
				'sort-alpha-desc' => 'sort-alpha-desc',
				'sort-amount-asc' => 'sort-amount-asc',
				'sort-amount-desc' => 'sort-amount-desc',
				'sort-asc' => 'sort-asc',
				'sort-desc' => 'sort-desc',
				'sort-down' => 'sort-down',
				'sort-numeric-asc' => 'sort-numeric-asc',
				'sort-numeric-desc' => 'sort-numeric-desc',
				'sort-up' => 'sort-up',
				'space-shuttle' => 'space-shuttle',
				'spinner' => 'spinner',
				'spoon' => 'spoon',
				'square' => 'square',
				'square-o' => 'square-o',
				'star' => 'star',
				'star-half' => 'star-half',
				'star-half-empty' => 'star-half-empty',
				'star-half-full' => 'star-half-full',
				'star-half-o' => 'star-half-o',
				'star-o' => 'star-o',
				'sticky-note' => 'sticky-note',
				'sticky-note-o' => 'sticky-note-o',
				'street-view' => 'street-view',
				'suitcase' => 'suitcase',
				'sun-o' => 'sun-o',
				'support' => 'support',
				'tablet' => 'tablet',
				'tachometer' => 'tachometer',
				'tag' => 'tag',
				'tags' => 'tags',
				'tasks' => 'tasks',
				'taxi' => 'taxi',
				'television' => 'television',
				'terminal' => 'terminal',
				'thumb-tack' => 'thumb-tack',
				'thumbs-down' => 'thumbs-down',
				'thumbs-o-down' => 'thumbs-o-down',
				'thumbs-o-up' => 'thumbs-o-up',
				'thumbs-up' => 'thumbs-up',
				'ticket' => 'ticket',
				'times' => 'times',
				'times-circle' => 'times-circle',
				'times-circle-o' => 'times-circle-o',
				'tint' => 'tint',
				'toggle-down' => 'toggle-down',
				'toggle-left' => 'toggle-left',
				'toggle-off' => 'toggle-off',
				'toggle-on' => 'toggle-on',
				'toggle-right' => 'toggle-right',
				'toggle-up' => 'toggle-up',
				'trademark' => 'trademark',
				'trash' => 'trash',
				'trash-o' => 'trash-o',
				'tree' => 'tree',
				'trophy' => 'trophy',
				'truck' => 'truck',
				'tty' => 'tty',
				'tv' => 'tv',
				'umbrella' => 'umbrella',
				'universal-access' => 'universal-access',
				'university' => 'university',
				'unlock' => 'unlock',
				'unlock-alt' => 'unlock-alt',
				'unsorted' => 'unsorted',
				'upload' => 'upload',
				'user' => 'user',
				'user-plus' => 'user-plus',
				'user-secret' => 'user-secret',
				'user-times' => 'user-times',
				'users' => 'users',
				'video-camera' => 'video-camera',
				'volume-control-phone' => 'volume-control-phone',
				'volume-down' => 'volume-down',
				'volume-off' => 'volume-off',
				'volume-up' => 'volume-up',
				'warning' => 'warning',
				'wheelchair' => 'wheelchair',
				'wheelchair-alt' => 'wheelchair-alt',
				'wifi' => 'wifi',
				'wrench' => 'wrench',
			);
	}

	public function social_icons_array() {
		return array (
			'facebook' => 'facebook',
			'linkedin' => 'linkedin',
			'pinterest' => 'pinterest',
			'snapchat' => 'snapchat',
			'tumblr' => 'tumblr',
			'twitter' => 'twitter',
			'youtube' => 'youtube',
		);
	}

	function add_landingpage_custom_fields() {

		if(function_exists("register_field_group")) {
			register_field_group(array (
				'id' => 'acf_landing-page',
				'title' => 'Landing page',
				'fields' => array (
					array (
						'key' => 'field_57892900aaec5',
						'label' => 'Subtitle',
						'name' => 'subtitle',
						'type' => 'text',
						'default_value' => '',
						'placeholder' => 'Enter subtitle text',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5789293baaec6',
						'label' => 'image',
						'name' => 'image',
						'type' => 'image',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_57892955aaec7',
						'label' => 'form',
						'name' => 'form',
						'type' => 'text',
						'instructions' => 'Enter the shortcode for the form, example: [contact-form-7 id="9999" title="DownloadForm"]',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'gplp',
							'order_no' => 0,
							'group_no' => 0,
						),
					),
				),
				'options' => array (
					'position' => 'acf_after_title',
					'layout' => 'default',
					'hide_on_screen' => array (
					),
				),
				'menu_order' => 0,
			));
		}

		if(function_exists("register_field_group"))	{
			register_field_group(array (
				'id' => 'acf_features',
				'title' => 'Features',
				'fields' => array (
					array (
						'key' => 'field_57892b26805be',
						'label' => 'Featured title 1',
						'name' => 'featured_title_1',
						'type' => 'text',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892b37805bf',
						'label' => 'Featured text 1',
						'name' => 'featured_text_1',
						'type' => 'text',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892b4b805c0',
						'label' => 'Feature 1 icon',
						'name' => 'featured_icon_1',
						'type' => 'select',
						'choices' => Gplp_Admin::icons_array(),
						'instructions' => 'Select the icon you want to display above the title',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0
					),
					array (
						'key' => 'field_57892b59805c1',
						'label' => 'Featured title 2',
						'name' => 'featured_title_2',
						'type' => 'text',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892b65805c2',
						'label' => 'Featured text 2',
						'name' => 'featured_text_2',
						'type' => 'text',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892b70805c3',
						'label' => 'Feature 2 icon',
						'name' => 'featured_icon_2',
						'type' => 'select',
						'choices' => Gplp_Admin::icons_array(),
						'instructions' => 'Select the icon you want to display above the title',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0
					),
					array (
						'key' => 'field_57892b7e805c4',
						'label' => 'Featured title 3',
						'name' => 'featured_title_3',
						'type' => 'text',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892b87805c5',
						'label' => 'Featured text 3',
						'name' => 'featured_text_3',
						'type' => 'text',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892b92805c6',
						'label' => 'Feature 3 icon',
						'name' => 'featured_icon_3',
						'type' => 'select',
						'choices' => Gplp_Admin::icons_array(),
						'instructions' => 'Select the icon you want to display above the title',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0

					),
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'gplp',
							'order_no' => 0,
							'group_no' => 0,
						),
					),
				),
				'options' => array (
					'position' => 'normal',
					'layout' => 'default',
					'hide_on_screen' => array (
					),
				),
				'menu_order' => 1,
			));
		}

		if(function_exists("register_field_group")) {
			register_field_group(array (
				'id' => 'acf_social-links',
				'title' => 'Social links',
				'fields' => array (
					array (
						'key' => 'field_57892cd59ad1b',
						'label' => 'Social link 1',
						'name' => 'social_link_1',
						'type' => 'text',
						'instructions' => 'Enter the URL, example: http://domain.com',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892ced9ad1c',
						'label' => 'Social link 1 title',
						'name' => 'social_link_1_title',
						'type' => 'text',
						'instructions' => 'Enter the tile (text) you want to display next to the icon',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892cfb9ad1d',
						'label' => 'Social link 1 icon',
						'name' => 'social_link_1_icon',
						'type' => 'select',
						'choices' => Gplp_Admin::social_icons_array(),
						'instructions' => 'Select the icon you want to display for this link',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0
					),
					array (
						'key' => 'field_57892d099ad1e',
						'label' => 'Social link 2',
						'name' => 'social_link_2',
						'type' => 'text',
						'instructions' => 'Enter the URL, example: http://domain.com',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892d129ad1f',
						'label' => 'Social link 2 title',
						'name' => 'social_link_2_title',
						'type' => 'text',
						'instructions' => 'Enter the tile (text) you want to display next to the icon',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892d1c9ad20',
						'label' => 'Social link 2 icon',
						'name' => 'social_link_2_icon',
						'type' => 'select',
						'choices' => Gplp_Admin::social_icons_array(),
						'instructions' => 'Select the icon you want to display for this link',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0
					),
					array (
						'key' => 'field_57892d279ad21',
						'label' => 'Social link 3',
						'name' => 'social_link_3',
						'type' => 'text',
						'instructions' => 'Enter the URL, example: http://domain.com',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892d349ad22',
						'label' => 'Social link 3 title',
						'name' => 'social_link_3_title',
						'type' => 'text',
						'instructions' => 'Enter the tile (text) you want to display next to the icon',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892d3e9ad23',
						'label' => 'Social link 3 icon',
						'name' => 'social_link_3_icon',
						'type' => 'select',
						'choices' => Gplp_Admin::social_icons_array(),
						'instructions' => 'Select the icon you want to display for this link',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0
					),
					array (
						'key' => 'field_57892d4b9ad24',
						'label' => 'Social link 4',
						'name' => 'social_link_4',
						'type' => 'text',
						'instructions' => 'Enter the URL, example: http://domain.com',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892d569ad25',
						'label' => 'Social link 4 title',
						'name' => 'social_link_4_title',
						'type' => 'text',
						'instructions' => 'Enter the tile (text) you want to display next to the icon',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57892d5f9ad26',
						'label' => 'Social link 4 icon',
						'name' => 'social_link_4_icon',
						'type' => 'select',
						'choices' => Gplp_Admin::social_icons_array(),
						'instructions' => 'Select the icon you want to display for this link',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0
					),
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'gplp',
							'order_no' => 0,
							'group_no' => 0,
						),
					),
				),
				'options' => array (
					'position' => 'normal',
					'layout' => 'default',
					'hide_on_screen' => array (
					),
				),
				'menu_order' => 2,
			));
		}


	}

	function gplp_register_footer_menu() {
		register_nav_menus( array(
			'gplp_footer_menu' => 'Footer Menu for landing page',
		) );
	}


}
