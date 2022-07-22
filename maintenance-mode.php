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


function wp_maintenance_mode()
{
  if (!current_user_can('edit_posts') || !is_user_logged_in() || is_user_admin()
  ) {
    wp_die('<h1>Under Maintenance</h1><br />Website under planned maintenance. Please check back later.');
  }
}
add_action('get_header', 'wp_maintenance_mode');
