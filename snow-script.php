<?php

function snow_footer(){
wp_enqueue_style( 'snowStyle', plugins_url('css/ss.css',__FILE__) ); 
wp_enqueue_script( 'snowScript', plugins_url('js/snow.min.js',__FILE__) ); 
wp_enqueue_script( 'applyScript', plugins_url('js/apply.js',__FILE__) ); 
    $snow_size = get_option('snow_size');
    $snow_density = get_option('snow_density');
	$snow_speed = get_option('snow_speed');
    $snow_color = '#' . get_option('snow_color');
$snowApplyData = array(
    'snow_size' => $snow_size,
    'snow_density' => $snow_density,
	'snow_speed' => $snow_speed,
    'snow_color' => $snow_color,
);
wp_localize_script( 'applyScript', 'snow_php_vars', $snowApplyData );
}