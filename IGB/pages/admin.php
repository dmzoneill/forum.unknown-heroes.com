<?PHP

require_once("base/db.php");
require_once("base/global.php");
	
$sqlConnection = new MySQL_Service();
$sqlConnection->initConnection();
$sqlConnection->useDatabase($sqlConnection->db_database);

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

$llogin = time();
$case = $_GET['case'];

print "<a href='index.php?'><h2>Admin Area</h2></a>";

if($sqlConnection->runCheck("SELECT * FROM eve_admins WHERE charid='$e_charid' and charname='$e_charname'")){
			
	switch($case){
		
		default:
		
		print "<table width=700 cellpadding=5 cellspacing=0 border=0>";
		
			echo ("<tr><td width=700 colspan=2>From Here you can Control");
			echo(" the following Aspects of the IGB site<br><br></td></tr>");
						
			echo("<tr><td width=350><h5>Admin Area Authorized Users</h5><hr>");
			echo("<a href='index.php?p=admin&case=addauser'>Add a user</a>");
			echo(" | <a href='index.php?p=admin&case=removeauser'>Remove a user</a><br><br>");
			
			$admins = $sqlConnection->runSelectResult("SELECT * FROM eve_admins");
			echo("Current Admins : ");
			while($eppe = $sqlConnection->getArray($admins)){
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[1];
				echo ("<a href='showinfo:1377//$admin_userid'>$admin_usernm</a> ");
			}	
			
			
			echo("</td><td width=350><h5>Page Administration</h5><hr>");
			//echo ("<a href='index.php?p=admin&case=addapage'>Add a new page</a><br><br>");
			
			$pages = $sqlConnection->runSelectResult("SELECT * FROM eve_pages");
			echo("Edit a Page : <br>");
			while($eppe = $sqlConnection->getArray($pages)){
				$page_id = $eppe[0];
				$page_name = $eppe[1];
				echo ("<a href='index.php?p=admin&case=editpage&idpage=$page_id'>$page_name</a><br>");
			}			
			echo ("<br><br>");
			echo ("</td></tr>");
			
			
			
			echo("<tr><td width=700 colspan=2><h5>Membership Applications</h5><hr></td></tr>");
			echo ("<tr><td width=100 colspan=2>New Applications : ");
				
			$admins = $sqlConnection->runSelectResult("SELECT * FROM eve_applications where p_status='0'");
			while($eppe = $sqlConnection->getArray($admins)){
				$admin_id = $eppe[0];
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[1];
				echo ("<a href='index.php?p=admin&case=review&id=$admin_id'>");
				echo("$admin_usernm</a> ( $admin_userid ) ");
			}	
								
			echo("</td></tr>");
			echo ("<tr><td width=100 colspan=2>Pending Applications : ");
				
			$admins = $sqlConnection->runSelectResult("SELECT * FROM eve_applications where p_status='1'");
			while($eppe = $sqlConnection->getArray($admins)){
				$admin_id = $eppe[0];
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[1];
				echo ("<a href='index.php?p=admin&case=review&id=$admin_id'>");
				echo("$admin_usernm</a> ( $admin_userid ) ");
			}
				
			echo("</td></tr>");
			echo ("<tr><td width=100 colspan=2>Denied Applications : ");
				
			$admins = $sqlConnection->runSelectResult("SELECT * FROM eve_applications where p_status='2'");
			
			while($eppe = $sqlConnection->getArray($admins)){
				$admin_id = $eppe[0];
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[1];
				echo ("<a href='index.php?p=admin&case=review&id=$admin_id'>");
				echo("$admin_usernm</a> ( $admin_userid ) ");
			}
				
			echo("</td></tr>");
			echo ("<tr><td width=100 colspan=2>Accepted Applications : ");
				
			$admins = $sqlConnection->runSelectResult("SELECT * FROM eve_applications where p_status='3'");
			while($eppe = $sqlConnection->getArray($admins)){
				$admin_id = $eppe[0];
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[1];
				echo ("<a href='index.php?p=admin&case=review&id=$admin_id'>");
				echo("$admin_usernm</a> ( $admin_userid ) ");
			}
				
			echo("<br><br></td></tr>");
			
			echo("<tr><td width=750 colspan=2><br><br></td></tr><tr><td width=350>");
			echo("<h5>IGB Banned Users</h5><hr>");
			echo ("<a href='index.php?p=admin&case=banuser'>Ban a User</a>");
			echo(" | <a href='index.php?p=admin&case=unbanuser'>Unban a User</a><br><br>");
			
			$banned = $sqlConnection->runSelectResult("SELECT * FROM eve_banned");
			echo("Current banned users : <br>");
			while($eppe = $sqlConnection->getArray($banned)){
				$user_id = $eppe[0];
				$user_name = $eppe[1];
				$user_nameid = $eppe[2];
				echo ("<a href='showinfo:1377//$user_nameid'>$user_name</a><br>");
			}	
			
			echo ("<br><br>");
					
			echo("</td><td width=350><h5>Activity Monitor</h5><hr>");
			echo ("<a href='index.php?p=admin&case=activity'>Click here</a>");
			echo(" if you wish to view Everybody who has accesed the ingame website.");
			echo("<br>Note : this could be a huge memory hog and may take eve a while to render</a>");
			
			echo ("</td></tr></table>");
						
		break;
		
		
		case "review":
		
		//index.php?p=admin&case=review&id=$admin_id
			if($_GET['id']){
				
				$id = $_GET['id'];
				$admins = $sqlConnection->runSelectResult("SELECT * FROM eve_applications where id='$id'");
			
				while($eppe = $sqlConnection->getArray($admins)){
										
					$id = $eppe[0];
					$p_char = $eppe[1];
					$p_charid = $eppe[2];
					$p_skills = $eppe[3];
					$p_login = $eppe[4];
					$p_char1 = $eppe[5];
					$p_char2 = $eppe[6];
					$p_char3 = $eppe[7];
					$p_name = $eppe[8];
					$p_age = $eppe[9];
					$p_start = $eppe[10];
					$p_end = $eppe[11];
					$p_days = $eppe[12];
					$p_about = $eppe[13];
					$p_goals = $eppe[14];
					$p_terms = $eppe[15];
					$p_refer = $eppe[16];
					$p_status = $eppe[17];
					$p_date = $eppe[18];
					$p_reason = $eppe[19];
				
					$img = $sqlConnection->runSelect("SELECT * FROM eve_sshots WHERE charid='$p_charid' AND type='0'");
					$e_img = $img[2];
							
					if(stristr($e_img,"strobelix")){
						$p_login = substr($e_img,28,strlen($e_img));
						$p_loginh = substr($e_img,28,strlen($e_img));
						$p_login = "http://forum.unknown-heroes.com/IGB/thumb.php?size=200&tn=" .$p_login;
						$href = "http://forum.unknown-heroes.com/IGB/thumb.php?tn=" .$p_loginh;
					}
					
					
					
					
					
					$charss = $sqlConnection->runSelectResult("SELECT * FROM eve_sshots WHERE charid='$p_charid' AND type='1'");
			 	$v=1;
				while($eppep = $sqlConnection->getArray($charss)){
										
					$imgr = $eppep[2];
					if(stristr($imgr,"strobelix")){
						$ggg = substr($imgr,28,strlen($imgr));
						${"p_char$v"} = substr($imgr,28,strlen($imgr));
						${"p_char$v"} = "http://forum.unknown-heroes.com/IGB/thumb.php?size=200&tn=" .${"p_char$v"};
						${"href$v"} = "http://forum.unknown-heroes.com/IGB/thumb.php?tn=" .$ggg;
					}
					
						$v++;
					}
					
					$imgs = $sqlConnection->runSelect("SELECT * FROM eve_logged_users WHERE charid='$p_charid'");
					$u_ip = $imgs[13];
					
					$_POST['ip'] = $u_ip;					
					
					echo("<br><br>");
					echo("<h5> Membership Apllication $p_char ( $p_charid ) </h5>");
					echo("<br>");
					echo("<table cellpadding=10 width=700><tr><td width=450>");
					echo strtoupper($p_name) .(" here!<br><br>I have been really looking forward to joining up with you guys.");
					echo("<br>I am <b>$p_age</b> years of age and i'm currently in ");
					$_POST['ip'] = $u_ip;
					@include("./features/ip2country.php"); 
					echo("<br><br>My Primary character is <a href='showinfo:1377//$p_charid'>$p_char</a>.");
					echo(" I have attached my <a href='index.php?p=admin&case=skillview&caseid=$id'>skillsheet</a>");
					echo(" and the required screenshots of my account.<br><br>I generally play between ");
					echo("<b>$p_start</b> & <b>$p_end</b> eve time, <b>$p_days</b> days a week.");
					echo("<br><br><h5>I have also prepared this little paragraph about me :</h5><br>$p_about");
					
					
					echo("<br><br><h5>And here's what i would like to achieve : </h5>");
					echo("<br>");
					echo("$p_goals");
					echo("<br><br><h5>What about the Constitution?</h5><br>");
					echo("I have agreed to the Constitution :)<br><br>");
					echo("<br><br>");
					
					echo("</td><td width=250>");
					echo date("F j, Y, g:i a",$p_date) ."<br><br>";
					echo("<img src='http://img.eve.is/serv.asp?s=64&c=$p_charid' size='256'><br><br>");
					echo("<a href='$href'><img src='$p_login' alt='Click To Enlarge'></a><br><br>");
					echo("<a href='$href1'><img src='$p_char1' alt='Click To Enlarge'></a><br><br>");
					echo("<a href='$href2'><img src='$p_char2' alt='Click To Enlarge'></a><br><br>");
					echo("<a href='$href3'><img src='$p_char3' alt='Click To Enlarge'></a></td></tr></table>");
									
					break;	
				}
				
		
			}
		
		
		break;	
		
		
		case "skillview":
		
			/*if($_GET['caseid']){
				$p_charid = $_GET['caseid'];
				$imgs = $sqlConnection->runSelect("SELECT * FROM eve_applications WHERE id='$p_charid'");
				$p_chr = $imgs[1];
				$p_ch = $imgs[2];
				$p_skills = rawurldecode($imgs[3]);
				$p_skills = eregi_replace("&quot;&gt;", '>', $p_skills);
				$p_skills = eregi_replace("&gt;", '>', $p_skills);
				$p_skills = eregi_replace("&amp;", "&", $p_skills);
				$p_skills = eregi_replace("&quot;&lt;", '<', $p_skills);
				$p_skills = eregi_replace("&lt;", '<', $p_skills);
				$contents = eregi_replace("&#x2212;", '', $p_skills);
				@touch("/home/strobelix/forum.unknown-heroes.com/IGB/features/xml/$p_ch.xml");
				@touch("/home/strobelix/forum.unknown-heroes.com/IGB/features/xml/".$p_ch."training.xml");
				@shell_exec("chmod 777 /home/strobelix/forum.unknown-heroes.com/IGB/features/xml/$p_ch.xml");
				
					if($putxml = @fopen("/home/strobelix/forum.unknown-heroes.com/IGB/features/xml/$p_ch.xml",'w')){
						@fwrite($putxml,$p_skills);
						fclose($putxml);
					}
				
				$_POST['d1'] =  $p_chr;
				$_POST['d2'] =  $p_ch;	
				include("features/skillsheet.php");
					
			}
			*/
			
			print "<h5>Not Implemented</h5>";
			
		break;
		
		
		
		
		
		
		case "banuser":
		
		if($_POST['eve_trusted']){
			
			$info = explode(":",$_POST['eve_trusted']);
				
				$sqlConnection->runExecute("INSERT INTO eve_banned values('','".$info[1]."','".$info[0]."')");
				
				echo("<br><h5>User " .$info[1] ." ( " . $info[0] ." ) has been banned</h5><br>" );
				echo("<br>");
			}
									
			echo("<br><h5>Ban User</h5>");
		
		$nadmins = $sqlConnection->runSelectResult("SELECT * FROM eve_logged_users");
			echo("Select User : <form action='index.php?p=admin&case=banuser' method=post><br><select size=10 name='eve_trusted'>");
			while($eppe = $sqlConnection->getArray($nadmins)){
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[3];
				if(!$sqlConnection->runCheck("SELECT * FROM eve_banned WHERE cid='".$admin_userid."'")){
					echo ("<option value='$admin_userid:$admin_usernm'>$admin_usernm ( $admin_userid )</option>");
				}
								
			}	
			echo("</select><br><input type=submit value='Ban User'></form>");
		
		break;
		
		
		case "unbanuser":
		
		if($_POST['eve_trusted']){
			
			$info = explode(":",$_POST['eve_trusted']);
				
				$sqlConnection->runExecute("DELETE FROM eve_banned WHERE cname='".$info[1]."' AND cid='".$info[0]."'");
				
				echo("<br><h5>User " .$info[1] ." ( " . $info[0] ." ) has been unbanned</h5><br>" );
				echo("<br>");
			}
									
			echo("<br><h5>UnBan User</h5>");
		
		$nadmins = $sqlConnection->runSelectResult("SELECT * FROM eve_banned");
			echo("Select User : <form action='index.php?p=admin&case=unbanuser' method=post><br><select size=10 name='eve_trusted'>");
			while($eppe = $sqlConnection->getArray($nadmins)){
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[1];
				echo ("<option value='$admin_userid:$admin_usernm'>$admin_usernm ( $admin_userid )</option>");
			}	
			echo("</select><br><input type=submit value='UnBan User'></form>");
		
		break;
		
		
		
			
		
		
		
		
		
		case "addapage":
		
			if($_GET['add']){
				$id = $_GET['idpage'];
				$page_content = eregi_replace("<","&lt;",$_POST['pcontent']);
				$page_content = eregi_replace(">","&gt;",$page_content);
				$_POST['pcontent'] = addslashes($_POST['pcontent']);
				$pname = $_POST['pname'];
				$sqlConnection->runExecute("insert into eve_pages values('','$pname','".$_POST['pcontent']."')");
	 			echo("<br><h5>Page $pname has been added :) </h5><br>");
			}
				
			echo("<br><h5>Add A Page : </h5><br>");
			echo("<form action='index.php?p=admin&case=addapage&add=true' method='post'>");
			echo("Page Name : <br>");
			echo("<input type=text name=pname value=''><br><br>");
			echo("Page Content : <br><textarea name=pcontent cols=80 rows=25></textarea><br><br>");
			echo("<input type=submit value='Add Page'>");
			echo("</form>");
								
		
		break;
		
				
		case "editpage":
		
			if($_GET['idpage']){
				
				if($_GET['edit']){
					$id = $_GET['idpage'];
					$page_content = eregi_replace("<","&lt;",$_POST['pcontent']);
					$page_content = eregi_replace(">","&gt;",$page_content);
					$_POST['pcontent'] = addslashes($_POST['pcontent']);
					$pname = $_POST['pname'];
					$sqlConnection->runExecute("update eve_pages set name='$pname', content='".$_POST['pcontent'] ."' where id='$id'");
					echo("<br><h5>Page $pname has been edited :) </h5><br>");
				}
				
			
				$page = $_GET['idpage'];				
				$pages = $sqlConnection->runSelectResult("SELECT * FROM eve_pages where id='$page'");
				while($eppe = $sqlConnection->getArray($pages)){
					$page_id = $eppe[0];
					$page_name = $eppe[1];
					$page_content = $eppe[2];
					$page_content = eregi_replace("&lt;","&amp;lt;",$page_content);
					$page_content = eregi_replace("&gt;","&amp;gt;",$page_content);
					echo("<br><h5>Editing Page : </h5><br>");
					echo("<form action='index.php?p=admin&case=editpage&idpage=$page&edit=true' method='post'>");
					echo("Page Name : <br>");
					echo("<input type=text name=pname value='$page_name'><br><br>");
					echo("Page Content : <br><textarea name=pcontent cols=80 rows=25> $page_content </textarea><br><br>");
					echo("<input type=submit value='Update Page Name & Content'>");
					echo("</form>");
					
				}				
			}
			else {
				echo("<br><h3>OOOOOPPPssss !!!!! missing something</h3>");
			}
		
		
		break;
		
		
		
		case "addauser":
		
			echo("<br><br>");
				
			if($_POST['eve_trusted']){
			
			$info = explode(":",$_POST['eve_trusted']);
				
				$sqlConnection->runExecute("INSERT INTO eve_admins values('','$info[1]','$info[0]')");
				
				echo("<h5>Admin Access granted for user " .$info[1] ." ( " . $info[0] ." )</h5><br>" );
				echo("<br>");
			}
									
			echo("<h5>Current Admins</h5>");
			
			$admins = $sqlConnection->runSelectResult("SELECT * FROM eve_admins");
			echo("Current Admins : ");
			while($eppe = $sqlConnection->getArray($admins)){
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[1];
				echo ("<a href='showinfo:1377//$admin_userid'>$admin_usernm</a> ");
			}	
			
			echo("<br><br><h5>Eve IGB Trusted Users</h5>");
			
			$nadmins = $sqlConnection->runSelectResult("SELECT * FROM eve_logged_users");
			echo("Assign admin status to : <form action='index.php?p=admin&case=addauser' method=post><br><select size=10 name='eve_trusted'>");
			while($eppe = $sqlConnection->getArray($nadmins)){
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[3];
				if(!$sqlConnection->runCheck("SELECT * FROM eve_admins WHERE charid='".$admin_userid."'")){
					echo ("<option value='$admin_userid:$admin_usernm'>$admin_usernm ( $admin_userid )</option>");
				}
				
			}	
			echo("</select><br><input type=submit value='Assign Admin Status'></form>");
		break;
		
		
		
		
		
		case "removeauser":
		
			echo("<br><br>");
				
			if($_POST['eve_trusted']){
			
			$info = explode(":",$_POST['eve_trusted']);
				
				$sqlConnection->runExecute("DELETE FROM eve_admins WHERE charid='$info[0]' and charname='$info[1]'");
				
				echo("<h5>Admin Access removed for user " .$info[1] ." ( " . $info[0] ." )</h5><br>" );
				echo("<br><br>");
			}
									
			echo("<h5>Eve IGB Admins</h5>");
			
			$nadmins = $sqlConnection->runSelectResult("SELECT * FROM eve_admins");
			echo("Remove admin status from : <form action='index.php?p=admin&case=removeauser' method=post><br><select size=10 name='eve_trusted'>");
			while($eppe = $sqlConnection->getArray($nadmins)){
				$admin_userid = $eppe[2];
				$admin_usernm = $eppe[1];
				echo ("<option value='$admin_userid:$admin_usernm'>$admin_usernm ( $admin_userid )</option>");
			}	
			echo("</select><br><input type=submit value='Remove Admin Status'></form>");
		break;
		
		case "activity":
		
			$every = $sqlConnection->runSelectResult("SELECT * FROM eve_logged_users");
				echo("<br><h5>Say Hello to Everyone</h5> <br><table cellpadding=10 width=600><tr>");
				$p=0;
				while($eppe = $sqlConnection->getArray($every)){
					$u_id = $eppe[0];
					$u_charid = $eppe[2];
					$u_charname = $eppe[3];
					$u_corpname = $eppe[4];
					$u_corpid = $eppe[5];
					$u_alliname = $eppe[6];
					$u_alliid = $eppe[7];
					$u_ipt = $eppe[13];
					$u_ip = explode(".",$eppe[13]);
					$u_pages = $eppe[15];
					$u_lastlogin = $eppe[16];
							
					if($p%3<1){
						echo ("</tr><tr>");
					}
					echo ("<td width=200><img src='http://img.eve.is/serv.asp?c=$u_charid&s=256' width=128><br><br>
					<a href='showinfo:1377//$u_charid'>$u_charname</a> ");
					$_POST['ip'] = $u_ipt;
					@include("./features/ip2country.php"); 
					echo("<br>
					Corp : <a href='showinfo:2//$u_corpid'>$u_corpname</a><br>
					Alliance : <a href='showinfo:16159//$u_alliid'>$u_alliname</a><br>
					IP Addy : $u_ip[0].$u_ip[1].$u_ip[2].*<br>
					Page Requests : $u_pages<br>
					Last Request : ".date("F j, Y, g:i a",$u_lastlogin) ."<br>
					
					<br></td>");
					$p++;
				}	
				print "</tr></table>";
			
			
		break;
		
	}	
		
}
else {
	
	print "<hr><h3>This Area is restricted</h3>This area is for Unknown Heroes admins only :)<br><br>";
		
}
	




?>


