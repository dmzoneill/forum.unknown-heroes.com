<?php

ini_set("display_errors", true);
ini_set("error_prepend_string", "<span style='color:FF0000;'>");
ini_set("error_append_string", "</span>");
error_reporting(E_ALL ^ E_NOTICE);

session_name("phpbb_igb_session");
session_start();

require_once("base/db.php");
require_once("base/global.php");
require_once("base/igbclass_v2.php");
require_once("base/Page.php");

$sqlConnection = new MySQL_Service();
$sqlConnection->initConnection();
$sqlConnection->useDatabase($sqlConnection->db_database);

	
$_SESSION['PageData'] = new Page("Unknown Heroes");
$_SESSION['ServerData'] = $_SERVER;
$_SESSION['PostData'] = $_POST;
$_SESSION['GetData'] = $_GET;

	
ob_start("ob_gzhandler");
	
$IGBUser = new IGB();
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	
if(!$IGBUser->IsMiniBrowser()){
	header("Location: http://forum.unknown-heroes.com");
}
	
$IGBUser->RequestTrust("Welcome to the Unknown Heroes IGW, in order to access this site it must be in your trusted list, click yes below!");

if ((!$IGBUser->IsMiniBrowser()) || ($IGBUser->BrowserAgent != $_SERVER['HTTP_USER_AGENT'])){
	$_SESSION['PageData']->SendHeader();
	echo "<p>Currently the in-game website is only accessable from the In-Game Browser. ";
	echo "Please access this website from within EvE.</p>";
	$_SESSION['PageData']->SendFooter();
	die;
}
	
	
if ($IGBUser->IsTrustEnabled()){
	
	$llogin = time();

	$getPage = makeSafe($_SESSION['GetData']['p']);
	if(is_null($getPage) || $getPage == "") {
		$getPage = "index";
		$adminss = $sqlConnection->runSelectResult("SELECT * FROM eve_admins");
			while($eppe = $sqlConnection->getArray($adminss)){
				if($e_charid==$eppe[2]){
					$getPage = "admin";
					break;
				}
				else {
					continue;
				}
			}	
	}		
	
	if($sqlConnection->runCheck("SELECT * FROM eve_banned WHERE cid='".$e_charid."'")){
		echo("<br><br><center><h1>You have been banned from this site</h1></center>");
		die();
	}
	
	if(!$sqlConnection->runCheck("SELECT * FROM eve_logged_users WHERE charid='".$e_charid."'")){
		$sqlConnection->runExecute("INSERT INTO eve_logged_users VALUES ('','$e_trust','$e_charid','$e_charname','$e_corpname','$e_corpid','$e_alliname','$e_alliid','$e_corprole','$e_station','$e_solarsystem','$e_const','$e_region','$e_ip','$e_serip','1','$llogin')");
	}
	else {
		$rowdd = $sqlConnection->runSelect("SELECT * FROM eve_logged_users WHERE charid='$e_charid'");
		$e_visits = $rowdd[15];
		$e_visits = $e_visits+1;	
		$llogin = time();
		$sqlConnection->runExecute("update eve_logged_users set corpname='$e_corpname', corpid='$e_corpid', alliname='$e_alliname', alliid='$e_alliid', corprole='$e_corprole', station='$e_station', solarsystem='$e_solarsystem', constell='$e_const', region='$e_region', ipaddy='$e_ip', serverip='$e_serip', pages='$e_visits', lastlogin='$llogin' where charid='$e_charid'");
		
	}
	
	$_SESSION['PageData']->SendHeader();
	$_SESSION['PageData']->SendMain("pages/{$getPage}.php");
	
	$timecross = time() - 3600;	
	$usersonline = $sqlConnection->runSelectResult("SELECT * FROM eve_logged_users WHERE lastlogin>='$timecross'");
	
	if(count($usersonline)>0){
		print "<br><table width=750 cellpadding=0><tr><td width=750 colspan=2><hr></td></tr>
		<tr><td width=150><h5>Users Online :</h5> </td><td width=600>";
		while($eppe = $sqlConnection->getArray($usersonline)){
			$uo_userid = $eppe[2];
			$uo_usernm = $eppe[3];
			print "<a href='showinfo:1377//$uo_userid'>$uo_usernm</a> ";
		}
		print "<br>This data is based on users active in the last 1 hour</td></tr></table>";
	}
	
	
	$_SESSION['PageData']->SendFooter();

	$sqlConnection->closeConnection();
	$sqlConnection = null;

}
else{
	$_SESSION['PageData']->SendHeader();
	echo("<p>[ <a href=\"http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."\">Reload</a> ]<br><br>");
	echo("You need to have this site set as trusted.<br>
		In order to to this click <FONT COLOR='#FF0000'>OPTIONS</FONT> &gt; <FONT COLOR='#FF0000'>TRUSTED SITES</FONT> and select the url and click trusted.<br><img src='imgs/trusted.jpg'>.</p>");
	$_SESSION['PageData']->SendFooter();
}
	
ob_end_flush();
	
$_SESSION['PageData'] = null;
$IGBUser = null;

?>