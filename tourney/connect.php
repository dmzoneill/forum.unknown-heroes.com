<?php


$fcwhost = "mysql.feeditout.com"; //216.26.131.80 
$fcwusername = "strobelix"; 
$fcwpassword2 = "bGn7YnQx"; 
$fcwdb_name = "heroes2";
$fcwdb_type = "mysql";



include($path."db_".$fcwdb_type.".php");
$stream = new db;
$stream->connect();
