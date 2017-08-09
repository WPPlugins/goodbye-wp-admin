=== Good Bye wp-admin ===
Contributors: sarankumar
Tags: remove wp-admin,wp-admin,admin-panel
Stable tag: 0.2

Chaging wp-admin to anything you want.

== Description ==
Plugin change the wp-admin url to admin-panel(or anything you want) in  wordpress admin area without breaking anything.
eg: www.example.com/wp-admin/  to www.example.com/admin-panel/

= Steps you should follow for working this plugin correctly : =

Step 1: add this code to your wp-config file(screen shot-1).

`define('WP_ADMIN_DIR', 'admin-panel');
define('ADMIN_COOKIE_PATH',SITECOOKIEPATH.WP_ADMIN_DIR);`

Step 2: add this rule at the top of the your htaccess file(screenshot-2).

`RewriteRule ^admin-panel/(.*) wp-admin/$1?%{QUERY_STRING} [L]`

Step 3: Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.
Refer screenshot for clear understanding.
= Why this plugin need manual editing : =
<div>
  <ul>
    <li>
      There is no option for inserting values wp-config file using wordpress hooks/filters
    </li>
    <li>
      its difficult to add new rules in htaccess file with wordpress hook.
    </li>
  </ul>
</div>
Because of this two reasons i cannot build a fully automatic plugin.Suggesions for improving this plugin is always welcome.
= Warning : =
<div>
<ul>
  <li>Use this plugin at your own risk.    </li>
  <li>Don't Activate the plugin on live website.You will loss wp-admin access.    </li>
   <li>USE ONLY YOU HAVE ROOT ACCESS.</li>
  <li> For working this plugin correctly ,you should follow the steps correctly.</li>
</ul>
</div>




== Installation ==


Step 1: add this code to your wp-config file.


`define('WP_ADMIN_DIR', 'admin-panel');
define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_DIR);`



Step 2: add this rule at the top of the your htaccess file.

`RewriteRule ^admin-panel/(.*) wp-admin/$1?%{QUERY_STRING} [L]`


Step 3: Activate the plugin as usual.

see screenshot for more details.



== Screenshots ==
1. htaccess file
2. wp-config file
3. dashboard