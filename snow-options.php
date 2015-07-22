<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function snow_install(){
add_option('snow_density','0.5');
add_option('snow_speed','10');
add_option('snow_color','ffffff');
add_option('snow_size','10');
}

function snow_deactivate(){
delete_option('snow_density');
delete_option('snow_speed');
delete_option('snow_color');
delete_option('snow_size');
}