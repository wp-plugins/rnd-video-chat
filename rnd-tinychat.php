<?php
/*
* Plugin Name: Wordpress Video Chat Advanced 
* Plugin URI: https://wordpress.org/plugins/rnd-video-chat/
* Author: Ruddernation Designs
* Author URI: http://profiles.wordpress.org/ruddernation
* Description: TinyChat full screen video chat for WordPress/BuddyPress, This also has YouTube/SoundCloud for all chatters and now has smileys enabled using my embed file, This advanced version allows you to add your own room name and allows you to input your own personal data like autoop and prohash info as well as account name.
* Requires at least: WordPress 3.6, BuddyPress 1.8.1
* Tested up to: WordPress 4.3, BuddyPress 2.3
* Version: 1.1.6
* License: GPLv3
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
* Date: 08th August 2015
*/
define('COMPARE_VERSION', '1.1.5');
register_activation_hook(__FILE__, 'wordpress_chat_advanced_install');
function wordpress_chat_advanced_install() {
	
	global $wpdb, $wp_version;

	$post_date = date("Y-m-d H:i:s");

	$post_date_gmt = gmdate("Y-m-d H:i:s");

	$sql = "SELECT * FROM ".$wpdb->posts." WHERE post_content LIKE '%[rnd_tinychat_page]%' AND `post_type` NOT IN('revision') LIMIT 1";

	$page = $wpdb->get_row($sql, ARRAY_A);

	if($page == NULL) {

		$sql ="INSERT INTO ".$wpdb->posts."(

			post_author, post_date, post_date_gmt, post_content, post_content_filtered, post_title, post_excerpt,  post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_parent, menu_order, post_type)

			VALUES

			('1', '$post_date', '$post_date_gmt', '[rnd_tinychat_page]', '', 'chatroom-advanced', '', 'publish', 'closed', 'closed', '', 'chatroom-advanced', '', '', '$post_date', '$post_date_gmt', '0', '0', 'page')";



		$wpdb->query($sql);

		$post_id = $wpdb->insert_id;

		$wpdb->query("UPDATE $wpdb->posts SET guid = '" . get_permalink($post_id) . "' WHERE ID = '$post_id'");

	} else {

		$post_id = $page['ID'];

	}

	update_option('wordpress_chat_advanced_url', get_permalink($post_id));

}

add_filter('the_content', 'wp_show_wordpress_chat_advanced_page', 67);



function wp_show_wordpress_chat_advanced_page($content = '') {



	if(preg_match("/\[rnd_tinychat_page\]/",$content)) {

		wp_show_wordpress_chat_advanced();


		return "";

	}

	return $content;

}

function wp_show_wordpress_chat_advanced() {

	if(!get_option('wordpress_chat_advanced_enabled', 0)) {

	}

	?>
<?php $room = $_POST ['room']; $username = $_POST ['username']; $autoop = $_POST ['autoop']; $prohash = $_POST ['prohash'];$account = $_POST ['account']; $url = ''; $current_user = wp_get_current_user(); 
echo ' 
<ul><form action="'.$url.'" method="post" class="form">Room:&nbsp;<input type="text" name="room" title="Enter Room Name, If it does not exist then it will create the room for you." placeholder="Example:ruddernation"/>
Autoop:&nbsp;<input type="text" name="autoop" id="autoop" title="Enter your autoop code, This is needed for admins of the room only."/>
Prohash:&nbsp;<input type="text" name="prohash" id="prohash" title="Enter prohash code, If your a pro user only."/>
<br><input type="submit" class="button" value="Enter"/></ul></form></div>'; ?>
<strong>If Chat isn't loading then check for a shield in your URL bar, <br />
Click that and allow/load unsecured/unsafe scripts/content to run<br />
TinyChat do not currently encrypt all of their content.</strong>

<style>#chat{position:fixed;left:0px;right:0px;bottom:0px;height:98%;width:100%;z-index:9999}input[type="text"]{width:280px;display:block;}</style>
<?php 
if((preg_match("/^[a-zA-Z0-9]{3,}/", $_POST['room']) == '1'))
{
if($room !== 'room')
$room=(strlen($room) > 32) ? substr($room,0,32).'' : $room;
$autoop=(strlen($autoop) > 32) ? substr($autoop,0,32).'' : $autoop;
$prohash=(strlen($prohash) > 64) ? substr($prohash,0,64).'' : $prohash;
$room=htmlspecialchars($room,ENT_QUOTES, 'UTF-8');
$autoop=htmlspecialchars($autoop,ENT_QUOTES, 'UTF-8');
$prohash=htmlspecialchars($prohash,ENT_QUOTES, 'UTF-8');
$room=preg_replace('/[^a-zA-Z0-9]/s', '', $room);
$prohash=preg_replace('/[^a-zA-Z0-9]/s', '', $prohash);
$autoop=preg_replace('/[^a-zA-Z0-9]/s', '', $autoop);
{		
echo '<div id="chat"><script data-cfasync="false" type=text/javascript>
var tinychat = {room: "'.$room.'",';{echo' autoop: "'.$autoop.'",';}{echo' prohash: "'.$prohash.'",';} 
echo 'wmode:"transparent",'; 
echo 'youtube:"all",';
echo 'chatSmileys:"true",';
echo 'nick: "' . $current_user->display_name .'",'; {echo' urlsuper: "'.$_SERVER["HTTP_HOST"],$_SERVER["REQUEST_URI"].'"';}echo '}</script><script data-cfasync="false" src="https://www.ruddernation.com/info/js/eslag.js"></script>
<div id="client"> </div></div>';}}}?>