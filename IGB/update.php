<?php


require_once("connect.php");

		
		
$get = $stream->do_query("SELECT * FROM kb3_ships where shp_baseprice='0'","array");



	
$r=0;
for($i=0;$i<count($get);$i++){
	$tmp = $get[$i];
	$id = $tmp[0];
	$name = $tmp[1];
	$class = $tmp[2];
	$cost = $tmp[5];
	
	$value = $stream->do_query("SELECT scl_value FROM kb3_ship_classes where scl_id='$class'","one");		
			
	$update = $stream->do_query("update kb3_ships_values set shp_value='$value' where shp_id='$id'","one");		
	
}
		


?>