<?php

/**
 * beonline
 *
 * @package       BEONLINE
 * @author        Neven Sakotic
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   3beonline
 * Plugin URI:    https://mydomain.com
 * Description:   Beonline help indexing your site
 * Version:       1.0.0
 * Author:        Neven Sakotic
 * Author URI:    http://web-repair-custom-wp-plugins-seo.com/
 * Text Domain:   3beonline
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with beonline. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Block direct access to file
defined( 'ABSPATH' ) or die( 'Not Authorized!' );

// Plugin Defines
define( "BEON_FILE", __FILE__ );
define( "BEON_DIRECTORY", dirname(__FILE__) );
define( "BEON_TEXT_DOMAIN", dirname(__FILE__) );
define( "BEON_DIRECTORY_BASENAME", plugin_basename( BEON_FILE ) );
define( "BEON_DIRECTORY_PATH", plugin_dir_path( BEON_FILE ) );
define( "BEON_DIRECTORY_URL", plugins_url( null,BEON_FILE ) );

// Require the main class file
require_once( BEON_DIRECTORY . '/include/main-class.php' );
function Be_online_menus_development() {
    add_menu_page("Beonline", "Beonline", "manage_options", "Be_online", "Be_online_list_call");
    add_submenu_page("Be_online", "List Students", "List Students", "manage_options", "Be_online", "Be_online_list_call");
    
}
add_action("admin_menu", "Be_online_menus_development");

function Be_online_list_call() {
    include_once BEON_DIRECTORY_PATH . '/include/beonlinefixindexing.php';
}

 ?>  
