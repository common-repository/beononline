<?php

// Block direct access to file
defined( 'ABSPATH' ) or die( 'Not Authorized!' );

class Be_online {

    public function __construct() {

        // Plugin uninstall hook
        register_uninstall_hook( BEON_FILE, array('Be_online', 'plugin_uninstall') );

        // Plugin activation/deactivation hooks
        register_activation_hook( BEON_FILE, array($this, 'plugin_activate') );
        register_deactivation_hook( BEON_FILE, array($this, 'plugin_deactivate') );

        // Plugin Actions
        add_action( 'plugins_loaded', array($this, 'plugin_init') );
        add_action( 'wp_enqueue_scripts', array($this, 'plugin_enqueue_scripts') );
        add_action( 'admin_enqueue_scripts', array($this, 'plugin_enqueue_admin_scripts') );
        add_action( 'admin_menu', array($this, 'plugin_admin_menu_function') );
        add_action( 'init', array($this, 'remove_wc_page_noindex') );
        add_action( 'wp_head', array($this, 'assignMetaInfo') );
       
    }
    
    

function remove_wc_page_noindex(){
	remove_action( 'wp_head', 'wc_page_noindex' );
}




function assignMetaInfo() {

    global $products;

    

       

   echo "<meta name='robots' content='index, follow'>";

}


    public static function plugin_uninstall() { }

    /**
     * Plugin activation function
     * called when the plugin is activated
     * @method plugin_activate
     */
    public function plugin_activate() { }

    /**
     * Plugin deactivate function
     * is called during plugin deactivation
     * @method plugin_deactivate
     */
    public function plugin_deactivate() { }

    /**
     * Plugin init function
     * init the polugin textDomain
     * @method plugin_init
     */
    function plugin_init() {
        // before all load plugin text domain
        load_plugin_textDomain( BEON_TEXT_DOMAIN, false, dirname(BEON_DIRECTORY_BASENAME) . '/languages' );
    }

    

        // create top level submenu page which point to main menu page
        

        // add the support page
        

    	//call register settings function
    

    function plugin_register_settings() {
        register_setting( 'beon-settings-group', 'example_option' );
    	register_setting( 'beon-settings-group', 'another_example_option' );
    }
 }

     ?>   

          
