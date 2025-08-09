<?php
/*
    * Wall-V Plugin Development
    * This file is part of the Wall-V plugin development.
    * It contains the necessary hooks and functions to integrate with the Wall-V platform.
    * This plugin serves as a framework for developers to create their own plugins compatible with Wall-V.
    * It is designed to be easily extendable and customizable.
    * It provides a basic structure for plugin development, including admin menu creation and a simple settings page.
    * It is recommended to follow the coding standards and best practices while developing plugins using this framework.
    * @package Wall-V
    * @subpackage Plugin Development
    * @version 1.0.0
    * @author Wall-V Team
    * @license GPL-2.0+
    * @link https://www.wall-v.com
    * @since 1.0.0
    * @description This file serves as a starting point for developers to create plugins for the Wall-V platform.
    * It includes necessary hooks and functions to ensure compatibility with the Wall-V system.
    * @todo Add more functionality as needed for plugin development.
    * @todo Ensure that all functions are properly documented and follow the coding standards.
    * @todo Test the plugin thoroughly before releasing it to ensure compatibility with the Wall-V platform.
    * @todo Consider adding more hooks and filters to allow for greater customization by plugin developers.
    * Plugin Name: Wall-V Plugin Development
    * Plugin URI: https://www.wall-v.com/services/wp-plugin-development
    * Description: A plugin development framework for Wall-V.
    * Author Name: Wall-V Team
    * Author URI: https://www.wall-v.com
    * Version: 1.0.0
    * License: GPL-2.0+
    * License URI: https://www.gnu.org/licenses/gpl-2.0.html
    * Text Domain: wall-v-plugin-development
    * Domain Path: /languages
    * Requires at least: 5.0
    * Requires PHP: 7.0
*/


add_action( 'admin_menu', 'wall_v_plugin_menu' );

function wall_v_plugin_menu() {
    add_menu_page(
        'Wall-V Plugin Development',
        'Wall-V Plugin',
        'manage_options',
        'wall-v-plugin-development',
        'wall_v_plugin_development_page',
        'dashicons-admin-plugins',
        6
    );
}

function wall_v_plugin_development_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Wall-V Plugin Development', 'wall-v-plugin-development' ); ?></h1>
        <p><?php esc_html_e( 'Welcome to the Wall-V Plugin Development page!', 'wall-v-plugin-development' ); ?></p>
    </div>
    <?php
}

?>