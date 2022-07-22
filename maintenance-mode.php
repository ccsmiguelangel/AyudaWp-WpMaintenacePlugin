<?php
/**
 * Plugin Name:       Maintenance Mode
 * Description:       Basic Maintenance Mode.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Miguel Angel Pena 
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       maintenance-mode
 */


function wpr_maintenace_mode() {
  if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) {
      die('Estamos de pruebas, no tardes en volver que enseguida terminamos.');
  }
}
add_action('get_header', 'wpr_maintenace_mode');