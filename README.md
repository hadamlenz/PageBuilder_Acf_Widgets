# === PageBuilder_Acf_Widgets ===
Contributors: (@adrock42, @hadamlenz)
Tags: demo, tinymce, wordpress
Requires at least: 4.9
Tested up to: 4.9.1
Stable tag: 4.9.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This is an example plugin to get ACF Field Groups as PageBuilder Widgets.  Do not use for production

== Description ==
This is an example plugin to get ACF Field Groups as PageBuilder Widgets.

== Prerequisites ==
ACF Pro
PageBuilder by Site Origins
Page Builder Widget Bundle

== Installation ==
1. Download or Clone the Repository
2. Put the siteorigins-acf-widgets in /wp-content/plugins
3. Activate All the Prerequisits
4. Activate the Plugin
5. Create a Field Group in ACF Pro, Alternativly, there is a demo at PLUGIN/widgets/acf-page-tout/acf-export-2017-12-12.json for you to import
Make sure the field group is assigned to the ACF Page Tout widget in the location settings of the field group editing page

== Creating a Widget == 
1. In PLUGIN/widgets/ create a folder named after the widget you want to create.
2. Copy widget-template.php from the plugin folder to the new folder you created and change the name of the file to match the folder.
3. Go through the file and change everything that says Widget Name or widget-name, etc to the name of your plugin
4. Create a new ACF Field Group
5. Assign the field group to the new widget in the location settings of the field group editing page
