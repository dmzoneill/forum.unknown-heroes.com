<?PHP
require_once("base/db.php");
	require_once("base/global.php");
?>
<table width="700">
	<tr>
	
	<td width='140' height='32' valign='top'>
			<img src="http://img.eve.is/serv.asp?c=<?php echo("{$_SERVER['HTTP_EVE_CHARID']}"); ?>&s=256" width='128'><br />
			<br />
			<?php
		
			print "Character: <br>".@$_SERVER['HTTP_EVE_CHARNAME'] ."<br><br>";
			print "Corporation: <br>".@$_SERVER['HTTP_EVE_CORPNAME'] ."<br><br>";
			print "Alliance: <br>".@$_SERVER['HTTP_EVE_ALLIANCENAME'] ."<br><br>";
			
			
			?>
			
			</td>
					
		<td width="560" valign="top">
		
			
		<h4>Welcome <?php echo $_SERVER['HTTP_EVE_CHARNAME']; ?></h4>
		<BR><BR>
		<h4>Members</h4>
		You can logon to the forums <a href='index.php?p=forum'>Here</a>.
		<br /><br />
		<h4>Membership</h4>	
		New Unknown Heroes applicants can apply <a href='index.php?p=applicant'>Here</a>.<br /> 
		New Unknown Heroes should also know our history <a href='index.php?p=history'>Here</a>. <br />
		Please be firmilair with our <a href='index.php?p=constitution'>Aims & Constitution</a> before applying :).
		<br /><br />
		<h4>Diplomats</h4>	
		Any Diplomats visiting this page looking for contact information and or standings info, please check out <a href='index.php?p=diplomacy'>Diplomacy</a>.<br /><br />	
			
			
			Thanks, UNKH Management.
			
			<br /><br /><br />
			Ps. The In Game Browser can be slow at rendering pages, please be patient.<br />
			Pages should take no more than 5 seconds to load.<br /><br />
			If you have a query about the IGB website you can <a href='evemail:Epro' SUBJECT='IGB Webiste Query' message='Some query'>Eve Mail</a> it to <a href='showinfo:1377//130729818'>Epro</a>.
			
		</td>
	</tr>
</table>
