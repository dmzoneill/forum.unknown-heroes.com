<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="#000000" text="#FFCC00" style="font-family:Verdana, Arial, Helvetica, sans-serif">

<?php

include("connect.php");

$case = $_GET['case'];

switch($case){

default:

	$get = $stream->do_query("select * from heroes","array");
	$random = array();
print "<center><form action=index.php?case=fixtures method=post>";
print "Select Participants<br>";
print "<select multiple=\"multiple\" name=heroes[] size=38>";



$r=2;
for($i=0;$i<count($get);$i++){
	
	$tmp = $get[$i];
	$id = $tmp[0];
	$char = $tmp[1];
	$charid = $tmp[2];
	
	print "<option value='$char|$charid'>$char</option>";
		
}		

print "</select><br><input type=submit value='Create Fixtures'></form></center>";

break;

case "fixtures":

$random = $_POST['heroes'];

shuffle($random);

print "<center><h3>Fixtures</h3><table width=600 cellspacing=1 cellpadding=10 bgcolor='#444444'><tr>";

for($i=0;$i<count($random);$i++){
	
	$id = explode("|",$random[$i]);
	$char = $id[0];
	$charid = $id[1];
	
			
	print "<td width=200 bgcolor='#111111'><center>$char<br><img src='http://img.eve.is/serv.asp?c=".$charid."&s=256' width=64></td>";
	if($i%2<1){
	print "<td width=200 bgcolor='#222222'> <center><h2>VS</h2> </td>";
	}
	
	if($i%2>0){
		print "</tr><tr>";
	}
	$r++;
}		
				
				

break;
}	
		
		?>

		</table>
		
	</body></html>