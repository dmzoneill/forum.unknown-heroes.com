<?php
	$baseURL_Default = "http://".$_SERVER['HTTP_HOST']."/IGB/";
	$corpName_Default = "UNKH";
	
	$e_trust = @$_SERVER['HTTP_EVE_TRUSTED'];
	$e_charid = @$_SERVER['HTTP_EVE_CHARID'];
	$e_charname = @$_SERVER['HTTP_EVE_CHARNAME'];
	$e_corpname = @$_SERVER['HTTP_EVE_CORPNAME'];
	$e_corpid = @$_SERVER['HTTP_EVE_CORPID'];
	$e_alliname = @$_SERVER['HTTP_EVE_ALLIANCENAME'];
	$e_alliid = @$_SERVER['HTTP_EVE_ALLIANCEID'];
	$e_corprole = @$_SERVER['HTTP_EVE_CORPROLE'];
	$e_station = @$_SERVER['HTTP_EVE_STATIONNAME'];
	$e_solarsystem = @$_SERVER['HTTP_EVE_SOLARSYSTEMNAME'];
	$e_const = @$_SERVER['HTTP_EVE_CONSTELLATIONNAME'];
	$e_region = @$_SERVER['HTTP_EVE_REGIONNAME'];
	$e_agent = @$_SERVER['HTTP_USER_AGENT'];
	$e_ip = @$_SERVER['REMOTE_ADDR'];
	$e_serip = @$_SERVER['HTTP_EVE_SERVERIP'];
	
	
	function makeSafe($unsafeCode)
	{
		$safeCode = preg_replace("/</", "&lt;", $unsafeCode);
		$safeCode = preg_replace("/>/", "&gt;", $safeCode);
		if (get_magic_quotes_gpc()) $safeCode = stripslashes($safeCode);
		$safeCode = addslashes($safeCode);
		return $safeCode;
	}
?>
