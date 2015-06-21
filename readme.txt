=== Wordpress Video Chat Advanced  - Only updated on Github ===


Contributors: ruddernation

Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FFAC7FBEBH6JE

Tags: video chat, tinychat, chat, wordpress chat, buddypress chat, wordpress video chat, buddypress video chat

Requires at least: 3.6.0

Tested up to: 4.2

Stable tag: 1.1.0

License: GPLv3

License URI: http://www.gnu.org/licenses/gpl-3.0.html


== Description ==


TinyChat full screen video chat for WordPress/BuddyPress, 
This also has YouTube/SoundCloud for all chatters and now has smileys enabled using my embed file, 
This advanced version allows you to add your own room name and allows you to input your own personal data like autoop and prohash info as well as account name, To get the autoop and prohash codes then you need to make sure you're logged in on tinychats domain, I've added screenshots of how to get the hash codes to use, Also if you're not logged in the on account name you can use any name you want even if it is already registered.


== Installation ==


This will automatically create the page and install the short code with link *domain name/chatroom-advanced*, If it does not then please read the rest below.

Simply use shortcode [rnd_tinychat_page] in a page.

For this you'll need to get your own autoop/prohash codes, These are found when you view page source on tinychat.com/selectedroom ,
Around line 449, I've provided screenshots for you to view,

This also uses my modified Tinychat embed file, This get's updated externally so you'll never need to update it,

If you want to use Tinychats original then you'll have to change the embed file url to http://tinychat.com/embed/chat.js.

Some themes may have issues with keyboard shortcuts, Especially for those that use jetpack, You'll have to disable the admin navbar from your frontend by adding 

// Remove Admin Bar Front End

add_filter('show_admin_bar', '__return_false');

to your themes functions.php file.


== Screenshots ==

* Right click to view page source or go to browsers menu and select it from there.

* This shows you the autoop code, This is only visible if you're a admin or a moderator of a room, Prohash will also show on that line but as a larger number.

* These are examples of the hash codes you'll need to enter for your selected room.

* TinyChat load screen, Users of TinyChat will notice the colour change.

* Once loaded you'll have to enter a name.

* This is showing the YouTube/Soundcloud buttons.

* Both show popups which you just enter what you'd like to search.

* This is how it displays with both YouTube and Soundcloud.

* Click this to maximize the video size, This also works when you're on camera.

* This is how it looks using the larger video's.


== Notes ==


This is full screen video chat that is used on TinyChat,
This will allow you to input your own room name unlike my other version which has a set room name,
You can also add your autoop and prohash codes in to this when you're logged in to tinychat to show your pro icon and star,
If anyone else requires another feature or has an idea for me to implement, Then open a support ticket with the relevant information.


== Frequently Asked Questions ==


* Q. Can I use this if I'm not logged in?

* A. Yes - if you want this disabled then I've provided the code in the file for you to edit yourself.


* Q. The chat is not loading for me.

* A. Check to see if you have the Adobe flash player installed (http://helpx.adobe.com/flash-player.html) and JavaScript enabled in your browser.


* Q. How do I add it to my blog/website?

* A. Just go to the backend and on appearance select menus, From there you can add your page, It'll be *chatroom-advanced* by default.


* Q. I'm having issues with my wordpress keyboard shortcuts affecting my chat, It's not allowing me to use certain letters.

* A. The fix for this is to disable the Admin navbar on your frontend only, to do this add * // Remove Admin Bar Front End

add_filter('show_admin_bar', '__return_false'); * to you funtions.php file in your themes folder.


== Changelog ==


= 1.0.0 =

* First version.

= 1.0.2 =

* Works with WP 4.2 and tested up to 4.3-alpha-32280

= 1.0.3 =

* Clicking the share button in chat will now give you the correct URL to share to your friends.

= 1.1.0 =
* Fixed the autoop error, Star was not showing due to letters being removed.

== Social Sites ==

* Website - https://www.ruddernation.com

* Room Spy - https://www.tinychat-spy.com

* Facebook - https://www.facebook.com/rndtc

* Twitter - https://twitter.com/R_N_Designs

* Github - https://github.com/ruddernation

* WordPress - https://profiles.wordpress.org/ruddernation

* Skype - ruddernation.designs