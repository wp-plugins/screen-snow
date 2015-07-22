<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php

function snow_settings(){
register_setting('snow_settings_group','snow_density');
register_setting('snow_settings_group','snow_speed');
register_setting('snow_settings_group','snow_color');
register_setting('snow_settings_group','snow_size');
}

function snow_register_settings(){
register_setting('snow_settings_group','snow_density');
register_setting('snow_settings_group','snow_speed');
register_setting('snow_settings_group','snow_color');
register_setting('snow_settings_group','snow_size');
}

register_activation_hook(__FILE__,'snow_install');
register_deactivation_hook(__FILE__,'snow_deactivate');
add_action('wp_footer','snow_footer');
add_action('admin_menu','snow_menu');
add_action('admin_init','snow_settings');