<?php
/*
Plugin Name: goodbye-wp-admin
Plugin URI: http://www.yatramantra.com/
Description: Remove wp-admin from url and replace with admin-panel
Author: sarankumar
Author URI: http://yatramantra.com/
Version: 0.2
*/
?>
<?php
	add_filter('site_url',  'wpadmin_filter', 10, 3);
 function wpadmin_filter( $url, $path, $orig_scheme ) {
  $old  = array( "/(wp-admin)/");
  $admin_dir = WP_ADMIN_DIR;
  $new  = array($admin_dir);
  return preg_replace( $old, $new, $url, 1);
 }
 add_action('login_form','redirect_wp_admin');

function redirect_wp_admin(){
$redirect_to = $_SERVER['REQUEST_URI'];

if(count($_REQUEST)> 0 && array_key_exists('redirect_to', $_REQUEST)){
$redirect_to = $_REQUEST['redirect_to'];
$check_wp_admin = stristr($redirect_to, 'wp-admin');
if($check_wp_admin){
wp_safe_redirect( '404.php' );
}
}
}

?>