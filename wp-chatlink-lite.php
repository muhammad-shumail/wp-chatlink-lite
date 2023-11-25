<?php
/**
 * WP ChatLink Lite
 *
 * @package       WPCHATLINK
 * @author        Muhammad Shumail Ansari
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   WP ChatLink Lite
 * Plugin URI:    https://github.com/muhammad-shumail/wp-chatLink-lite
 * Description:    WP ChatLink Lite is a streamlined and efficient WordPress plugin that seamlessly integrates WhatsApp into your website. Enhance user engagement with a quick and accessible chat link, making communication with your audience swift and hassle-free. Elevate your website\'s interactive experience effortlessly with WP ChatLink Lite.
 * Version:       1.0.0
 * Author:        Muhammad Shumail Ansari
 * Author URI:    https://github.com/muhammad-shumail
 * Text Domain:   wp-chatlink-lite
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with WP ChatLink Lite. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Include your custom code here.
function whatsapp_icon_enqueue_scripts() {
    wp_enqueue_style( 'whatsapp-icon-style', plugins_url( 'whatsapp-icon.css', __FILE__ ) );
    wp_enqueue_script( 'whatsapp-icon-script', plugins_url( 'whatsapp-icon.js', __FILE__ ), array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'whatsapp_icon_enqueue_scripts' );

// Add the WhatsApp icon HTML to the footer of every page
function whatsapp_icon_add_html() {
    echo '<div id="whatsapp-icon"><a href="https://wa.me/16509249251" target="_blank"><img src="' . plugins_url( 'whatsapp-icon.png', __FILE__ ) . '" alt="WhatsApp"></a></div>';
}
add_action( 'wp_footer', 'whatsapp_icon_add_html' );