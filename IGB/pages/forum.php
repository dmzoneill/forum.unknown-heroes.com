<?PHP

require_once("base/db.php");
require_once("base/global.php");
	
$sqlConnection = new MySQL_Service();
$sqlConnection->initConnection();
$sqlConnection->useDatabase($sqlConnection->db_database);
$action = makeSafe($_GET['a']);
	
if(is_null($_SESSION['newPosts'])){
	$_SESSION['newPosts'] = "";
}


if(!@$sqlConnection->runSelect("SELECT ig_name FROM " . $sqlConnection->db_table_prefix . "users LIMIT 1")){
	$sqlConnection->runExecute("ALTER TABLE " . $sqlConnection->db_table_prefix . "users ADD COLUMN ig_name VARCHAR(50)");
}
			
if($action == "rmfl"){
	$_SESSION['forumUser'] = "";
	$_SESSION['loggedIn'] = false;
	$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "users SET ig_name=NULL WHERE ig_name='".addslashes($_SERVER['HTTP_EVE_CHARNAME'])."'");
					
	echo("<span style='color: #FF9900;'>You have now logged out!</span><BR><BR>");
}

if(!$sqlConnection->runCheck("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE ig_name='". addslashes($_SERVER['HTTP_EVE_CHARNAME'])."'")){
	if (($_POST['userName']) && ($_POST['userPass'])){
		$tmpUser = makeSafe($_POST['userName']);
		$tmpPass = makeSafe($_POST['userPass']);
	}
	else{
		echo "You are required to login with your outgame <U>FORUM</U> username and password.<br>";
	}
					
	if(isset($tmpUser) && isset($tmpPass)){
		$tmpPassSHA = md5($tmpPass);

		if($sqlConnection->runCheck("SELECT user_id FROM " . $sqlConnection->db_table_prefix . "users WHERE username='{$tmpUser}' AND user_password=md5('{$tmpPass}')")){
			$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "users SET ig_name='".addslashes($_SERVER['HTTP_EVE_CHARNAME'])."' WHERE username='{$tmpUser}'");
			echo "Welcome " .$tmpUser .".<br><br>You can now continue to the <a href='index.php?p=forum'>Forums</a>.";
			$_SESSION['loggedIn'] = true;
		}
		else{
			$tmpUser = null;
			$tmpPass = null;
			echo "<BR><BR><font color='#FF9900'>That username and/or password is incorrect. Please try again.</font>";
		}
	}
					
	$_SESSION['forumUser'] = $tmpUser;
	$_SESSION['eveUser'] = addslashes($_SERVER['HTTP_EVE_CHARNAME']);
					
	if(is_null($tmpUser) || is_null($tmpPass) || $tmpUser == "" || $tmpPass == ""){
?>
	<BR><BR><form action="index.php?p=forum" method="post">
	Username:<BR>
	<input type="text" name="userName"><BR><BR>
	Password:<BR>
	<input type="password" name="userPass"><BR><BR>
	<input type="submit" value="Accept Login Data">
	</form>
<?PHP
	}
}
else {	
	$_SESSION['loggedIn'] = true;
	$row = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE ig_name='".addslashes($_SERVER['HTTP_EVE_CHARNAME'])."'");
	$_SESSION['forumUID'] = $row[0];
	$_SESSION['forumUser'] = $row[2];
	$_SESSION['userlvl'] = $row[31];
	$_SESSION['eveUser'] = addslashes($_SERVER['HTTP_EVE_CHARNAME']);
	$_SESSION['userID'] = $row[0];
	$_SESSION['lastVisit'] = $row[6];
					
	$rltNewPosts = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "posts WHERE post_time > $row[6]");
					
	while($rowNewPosts = $sqlConnection->getArray($rltNewPosts)){
		if($rowNewPosts[3] != $_SESSION['userID']){
			$_SESSION['newPosts'] .= ":".$rowNewPosts[0]."~".$rowNewPosts[1]."~".$rowNewPosts[2]."~".$rowNewPosts[3].": ";
		}
	}
	
	$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "users SET user_lastvisit='".time()."' WHERE ig_name='".addslashes($_SERVER['HTTP_EVE_CHARNAME'])."'");
					
	$rltCategories = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "categories ORDER BY cat_order ASC");
?>
<br /><h3>Forum Index</h3><br />

<?PHP

echo "<table width='750' cellspacing=1 cellpadding=5 bgcolor=#333333><tr style='background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)'>
				<td bgcolor='#222222' width='500' height='15' align=center valign=middle colspan=2>Forum</td>
				<td width='50' align=center valign=middle bgcolor='#222222'>Topics</td>
				<td width='50' align=center valign=middle bgcolor='#222222'>Posts</td>
				<td width='150' align=center valign=middle bgcolor='#222222'>Last Post</td>
				</tr>";

	while($row = $sqlConnection->getArray($rltCategories)){
		
		echo "<tr style='background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)'>
				<td bgcolor='#222222' width='500' height='15' colspan=5> <img width=\"9\" height=\"9\" src='imgs/category_icon.gif'> <b>{$row[1]}</b></td>
			</tr>";
						
		$rltForums = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "forums WHERE cat_id='{$row[0]}' ORDER BY forum_order ASC");
						
		while($rowForums = $sqlConnection->getArray($rltForums)){
			$rltAuth = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "user_group ug, " . $sqlConnection->db_table_prefix . "auth_access aa WHERE ug.user_id={$_SESSION['forumUID']} AND forum_id={$rowForums[0]} AND ug.group_id=aa.group_id AND ug.user_pending='0'");
							
			if(isset($rltAuth))	{
				$i = 0;
								
				while($rowAuth = $sqlConnection->getArray($rltAuth)){
					$tmpAuth[$i] = $rowAuth;
					$i++;
				}
								
				for($i = 0; $i <= count($tmpAuth); $i++){
					for($j = 5; $j <= count($tmpAuth[$i]); $j++){
						$forumAuth[($j-5)] += $tmpAuth[$i][$j];
					}
				}
			}
							
			if(($rowForums[11] == 0) || ($forumAuth[0] > 0)){
				if(preg_match('/:.{0,6}~.{0,6}~'.$rowForums[0].'~.{0,6}:/', $_SESSION['newPosts'])){
					$setColour = " bgcolor='#000000'><img src=\"./imgs/folder_new.gif\" width=\"16\" height=\"16\" />"; //new
				}
				else{
					$setColour = " bgcolor='#000000'><img src=\"./imgs/folder.gif\" width=\"16\" height=\"16\" />"; //no change
				}
								
				$lstposter = $sqlConnection->runSelectResult("SELECT poster_id FROM " . $sqlConnection->db_table_prefix . "posts WHERE post_id='{$rowForums[8]}'");
				$lstpostert = $sqlConnection->runSelectResult("SELECT post_time FROM " . $sqlConnection->db_table_prefix . "posts WHERE post_id='{$rowForums[8]}'");
				$lp_poster = @mysql_result($lstposter,0);
$lp_poster = @mysql_result($sqlConnection->runSelectResult("SELECT username FROM " . $sqlConnection->db_table_prefix . "users WHERE user_id='$lp_poster'"),0);			
				$ptime = date("Y-m-d H:i",@mysql_result($lstpostert,0));	
				$date = new DateTime("$ptime");
				$date->modify("+7 hours");
				$ptime = $date->format("F j, Y, g:i a");
									
				$desc = $rowForums[3];
				
				if(strlen($desc)>3){
					$desc = " - {$rowForums[3]}";
				}
				else {
					$desc = "";
				}
								
				echo "<tr>
					<td width='10'{$setColour}</td>
					<td bgcolor='#222222' width='410' height='15' valign=middle >
					<a href='index.php?p=topic&fid={$rowForums[0]}'>{$rowForums[2]}</a><br>$desc</td>
					<td width='50' valign=middle align=center bgcolor='#111111'>{$rowForums[7]}</td>
					<td width='50' valign=middle align=center bgcolor='#222222'>{$rowForums[6]}</td>
					<td width='220' valign=middle align=center bgcolor='#111111'>$ptime &lt;&lt;
					<a href='evemail:$lp_poster'>$lp_poster</a></td>
					</tr>";
																
			}	
		}
	}
	echo "</table>";
?>
<br><br>All times are Eve Time<br /><br />
<br /><img src="./imgs/folder_new.gif" width="16" height="16" /> New Posts
<br /><img src="./imgs/folder.gif" width="16" height="16" /> No New Posts
<?PHP
}
?>
</td>
</tr>
</table><BR>


