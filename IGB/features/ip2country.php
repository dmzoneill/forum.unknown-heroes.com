<?php
$db_host="mysql.feeditout.com";			// Database parameters
$db_user="strobelix";
$db_pass="bGn7YnQx";
$database="heroes";

mysql_connect($db_host,$db_user,$db_pass) or die("Unable to connect to database");
mysql_select_db($database) or die("Unable to select database");

//****** determination IP¨& country - START
$flag="0";
$country="";
$ip=$_SERVER["REMOTE_ADDR"];
if(isset($_POST["ip"]) && ($_POST["ip"]==long2ip(ip2long($_POST["ip"]))))
	{$ip=long2ip(ip2long($_POST["ip"]));}
$resultat=mysql_query("SELECT COUNTRY_CODE2 FROM ip2country WHERE (IP_FROM<=inet_aton('".$ip."') AND IP_TO>=inet_aton('".$ip."'))");
if(!($ligne=mysql_fetch_array($resultat)))
	{$country="1";}
	else
	{
	$resultat2=mysql_query("SELECT printable_name FROM country WHERE iso='".$ligne["COUNTRY_CODE2"]."'");
	if(!($ligne2=mysql_fetch_array($resultat2)))
		{$country="2";}
		else
		{
		$flag="features/flags/".strtolower($ligne["COUNTRY_CODE2"]).".png";
		if(!file_exists($flag)){$flag="0";}
		$country=$ligne2["printable_name"];
		}
	}

//****** determination IP¨& country - END



//*********** Display IP & country

if($country=="1"){echo '<input type=text name=countryc>';}
else if($country=="2"){echo '<input type=text name=countryc>';}
else
	{
	if($flag=="0"){
		echo '<input type=text name=countryc>';
	} 
	else {
	
	if($_GET['p']=="admin"){
		echo "<img src='$flag' alt='' width=18 height=10>";
	}
	else {
		echo "<input type=text name=countryc value='$country'> <img src='$flag' alt='' width=18 height=10>";
	}	
	}

	}

?>