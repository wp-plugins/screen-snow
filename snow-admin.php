<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function color_script(){
wp_enqueue_script( 'colorScript', plugins_url('js/jscolor.js',__FILE__) ); 
}
function snow_table_style(){
wp_enqueue_style( 'tableStyle', plugins_url('css/ts.css',__FILE__) ); 
}
add_action( 'admin_enqueue_scripts', 'color_script' );
add_action( 'admin_enqueue_scripts', 'snow_table_style' );
function snow_menu(){
add_menu_page('Screen Snow','Screen Snow','manage_options','snowmenu','snow_settings_page',plugins_url('imgs/menuicon.png',__FILE__));
}
function snow_settings_page(){
?>
<h2 style="text-align:center; font-weight:bold;"><img width="5%;" src="<?php echo plugins_url('imgs/snow.png',__FILE__); ?>"/><br>Screen Snow</h2>
<form method="post" action="options.php">
<?php
wp_nonce_field('update-options');
settings_fields('snow_settings_group');
?>
<div style="width:98.5%;">
<table  class="widefat" style="width:100% !important;">
<thead>
<tr>
<th colspan="5">
<span style=" font-size:16px;">Screen Snow Settings</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Density
</th>
<!--[if lte IE 9]>
<td >
<input type="radio" name="snow_density" value="0.5" <?php if(get_option('snow_density')=='0.5') echo 'checked';  ?> > <label for="snow_density">High</label>  </td>
<td ><input type="radio" name="snow_density" value="1" <?php if(get_option('snow_density')=='1') echo 'checked';  ?> > <label for="snow_density">Normal</label></td>
<td ><input type="radio" name="snow_density" value="2" <?php if(get_option('snow_density')=='2') echo 'checked';  ?> > <label for="snow_density">Low</label>
</td>
<td></td>
<![endif]-->
<!--[if !IE]> -->
<td colspan="4">
High <input style="width:50%;" type="range" name="snow_density" value="<?php echo get_option('snow_density'); ?>" min="0.01" max="3" step="0.01" /> Low  </td> 
<!-- <![endif]-->
</tr>
<tr >
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Color
</th>
<td colspan="4"><input style="border:1px solid #ccc; width:53%;" name="snow_color" class="color" value="<?php echo get_option('snow_color'); ?>"> </td>

</tr>
<tr>
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Speed
</th>
<!--[if lte IE 9]>
<td style="border-bottom-width:1px !important;">
<input type="radio" name="snow_speed" value="1" <?php if(get_option('snow_speed')=='1') echo 'checked';  ?> > Fast </td>
<td><input type="radio" name="snow_speed" value="10" <?php if(get_option('snow_speed')=='10') echo 'checked';  ?> > Normal </td>
<td><input type="radio" name="snow_speed" value="19" <?php if(get_option('snow_speed')=='19') echo 'checked';  ?> > Slow  
</td>
<td></td>
<![endif]-->
<!--[if !IE]> -->
<td colspan="4">
Fast <input style="width:50%;" type="range" name="snow_speed" value="<?php echo get_option('snow_speed'); ?>" min="1" max="19" step="1" /> Slow  </td> 
<!-- <![endif]-->
</tr>
 <tr>
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Size
</th>
<!--[if lte IE 9]>
<td style="border-bottom-width:1px !important;">
<input type="radio" name="snow_size" value="1" <?php if(get_option('snow_size')=='1') echo 'checked';  ?> > Small </td>
<td><input type="radio" name="snow_size" value="9" <?php if(get_option('snow_size')=='9') echo 'checked';  ?> > Normal </td>
<td><input type="radio" name="snow_size" value="19" <?php if(get_option('snow_size')=='19') echo 'checked';  ?> > Big  
</td>
<td></td>
<![endif]-->
<!--[if !IE]> -->
<td colspan="4">
Small <input style="width:50%;" type="range" name="snow_size" value="<?php echo get_option('snow_size'); ?>" min="1" max="19" step="1" /> Big  </td> 
<!-- <![endif]-->
</tr> 
</tbody>
<tfoot>
<tr>
<th colspan="5" >
<input type="submit" class="button-primary"  value="Save Changes">
</th>
</tr>
</tfoot>
</table>
</div>
<?php
}