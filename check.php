<?php
// read config file
define('IN_PHPBB', true);
$phpbb_root_path = './';
$template_path= $phpbb_root_path . "templates/";
include($phpbb_root_path . 'config.php');

// connect to the database server
$db = mysql_connect($dbhost,$dbuser,$dbpasswd);
if (!$db) die("Unable to connect to database!\n");

// select the PHPBB database
mysql_select_db($dbname,$db);

$sql = "SELECT config_value FROM ".$table_prefix."config WHERE config_name='enable_confirm'";
$config = mysql_query($sql,$db);
if (($config === false) or (mysql_num_rows($config) == 0))
{
   echo "Configuration setting Visual Confirmation missing.<br>\n";
//   remove the /* */ around this section to allow the program to add the configuration setting
/*   $sql = "INSERT INTO ".$table_prefix."config (config_name,config_value) VALUES ('enable_confirm','1')";
   $config = mysql_query($sql,$db);
   if ($config !== false)
      echo "Successfully added Visual Confirmation to config table.<br>\n";
*/
}
else
{
   $enconf = mysql_fetch_array($config);
   echo "Visual Confirmation is ";
   echo ($enconf['config_value'] == '0' ? "disabled" : "enabled");
   echo " in your configuration table<br>\n";
}

$sql = "SHOW TABLES LIKE '".$table_prefix."confirm'";
$config = mysql_query($sql,$db);
if (($config === false) or (mysql_num_rows($config) == 0))
{
   echo $table_prefix."confirm table missing.<br>\n";
//   remove the /* */ around this section to allow the program to add the confirm table
/*   $sql = "CREATE TABLE ".$table_prefix."confirm (
      confirm_id char(32) NOT NULL default '',
      session_id char(32) NOT NULL default '',
      code char(6) NOT NULL default '',
      PRIMARY KEY  (session_id,confirm_id)
      ) TYPE=MyISAM";
   $config = mysql_query($sql,$db);
   if ($config !== false)
      echo "Successfully added Confirm table to database.<br>\n";
*/
}
else
{
   echo $table_prefix."confirm table found.<br>\n";
}

$sql = "SELECT template_name, style_name FROM ".$table_prefix."themes";
$styles = mysql_query($sql,$db);
if ($styles === false)
   die("No styles found!\n");
while ($check = mysql_fetch_array($styles))
{
   $check_path1 = $template_path . $check['template_name'] . "/profile_add_body.tpl";
   $check_path2 = $template_path . $check['template_name'] . "/admin/board_config_body.tpl";
   $user_text = file_get_contents($check_path1);
   $user = strpos(strtolower($user_text),"switch_confirm");
   $config_text = file_get_contents($check_path2);
   $config = strpos(strtolower($config_text),"visual_confirm");
   echo "Style '".$check['style_name']."' ";
   echo $user > 0 ? "supports " : "does not support ";
   echo "Visual Confirmation for registration, ";
   echo $config > 0 ? "supports " : "does not support ";
   echo "Visual Confirmation configuration option.<br>\n";
}
?>