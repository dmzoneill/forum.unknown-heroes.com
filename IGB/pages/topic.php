<?PHP
	require_once("base/db.php");
	require_once("base/global.php");
	
	$sqlConnection = new MySQL_Service();
	$sqlConnection->initConnection();
	$sqlConnection->useDatabase($sqlConnection->db_database);
	
	$action = makeSafe($_GET['a']);
	$offset = makeSafe($_GET['o']);
	$forumID = makeSafe($_GET['fid']);
	$topicID = makeSafe($_GET['tid']);
	
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
	
	
	if(is_null($_SESSION['newPosts']))
	{
		$_SESSION['newPosts'] = "";
	}
	
	if(is_null($offset) || $offset == "") $offset = 0;

		$svrQuery = $_SERVER['QUERY_STRING'];
				
		$row = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE ig_name='".$_SERVER['HTTP_EVE_CHARNAME']."'");
		$_SESSION['forumUID'] = $row[0];
		$_SESSION['forumUser'] = $row[2];
		$_SESSION['eveUser'] = $_SERVER['HTTP_EVE_CHARNAME'];
		$_SESSION['userID'] = $row[0];
				
		$rltNewPosts = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "posts WHERE post_time > $row[6]");
		while($rowNewPosts = $sqlConnection->getArray($rltNewPosts)){
			if($rowNewPosts[3] != $_SESSION['userID']){
				$_SESSION['newPosts'] .= ":".$rowNewPosts[0]."~".$rowNewPosts[1]."~".$rowNewPosts[2]."~".$rowNewPosts[3].": ";
			}
		}
		
		$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "users SET user_lastvisit='".time()."' WHERE ig_name='".$_SERVER['HTTP_EVE_CHARNAME']."'");
				
		$rowForum = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "forums WHERE forum_id='{$forumID}'");
				
		echo "<table width=\"750\">	<tr><td width=\"750\" valign=\"top\"><BR><h3>{$rowForum[2]}</h3><a href='index.php?p=forum'>UNKH Forum Index</a> -&gt; Forum: <a href='index.php?p=topic&fid={$forumID}'>{$rowForum[2]}</a><Br><br></td></tr>";
					
		$rltTopics = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "topics WHERE forum_id='{$forumID}' ORDER BY topic_type DESC, topic_time DESC LIMIT {$offset},20");
				
		$rltAuth = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "user_group ug, " . $sqlConnection->db_table_prefix . "auth_access aa WHERE ug.user_id={$_SESSION['forumUID']} AND forum_id={$forumID} AND ug.group_id=aa.group_id");
				
		if($rltTopics){
			$numTopics = $sqlConnection->getNum($rltTopics);
		}
		else{
			$numTopics = 0;
		}
				
		if(isset($rltAuth)){
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
				
		if(($rowForum[11] == 0) || ($forumAuth[0] > 0))	{
				
			echo "<tr><td width='750' height='15'><a href='index.php?p=newtopic&fid={$forumID}'><h4>New Topic</h4></a></td></tr>";
					
			echo "</table>
			
			<table width=\"750\" cellspacing=\"1\" cellpadding=\"5\" border=0 bgcolor=#333333>
<tr  style=\"background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)\">
			<td bgcolor='#222222' valign=middle align=center width='350' height='15' colspan=2>{$rowForum[2]}</td>
			<td width='50' valign=middle align=center bgcolor='#222222'>Replies</td>
			<td width='100' valign=middle align=center bgcolor='#222222'>Author</td>
			<td width='250' valign=middle align=center bgcolor='#222222'>Last Post</td>
		</tr>";
				
		while($rowTopic = $sqlConnection->getArray($rltTopics))	{
			$rowLastPoster = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE user_id='{$rowTopic[3]}'");
			$rowLastPost = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "posts WHERE post_id='{$rowTopic[11]}'");
						
			$lstposter = $sqlConnection->runSelectResult("SELECT poster_id FROM " . $sqlConnection->db_table_prefix . "posts WHERE post_id='{$rowTopic[11]}'");	
				
			$lp_poster = @mysql_result($lstposter,0);
			$lp_poster = @mysql_result($sqlConnection->runSelectResult("SELECT username FROM " . $sqlConnection->db_table_prefix . "users WHERE user_id='$lp_poster'"),0);	

			$lstpostert = @mysql_result($sqlConnection->runSelectResult("SELECT post_time FROM " . $sqlConnection->db_table_prefix . "posts WHERE post_id='{$rowTopic[11]}'"),0);
	
			$ptime = date("Y-m-d H:i",$lstpostert);	
			$date = new DateTime("$ptime");
			$date->modify("+7 hours");
			$ptime = $date->format("F j, Y, g:i a");
						
			if(preg_match('/:.{0,6}~'.$rowTopic[0].'~.{0,6}~.{0,6}:/', $_SESSION['newPosts'])){
				$topicType = " bgcolor='#000000'><img src=\"./imgs/folder_new.gif\" width=\"16\" height=\"16\" />"; 
			}
			elseif($rowTopic[9] == 1){
				$topicType = " bgcolor='#000000'><img src=\"./imgs/folder_sticky.gif\" width=\"16\" height=\"16\" />"; 
			}
			elseif($rowTopic[9] == 2){
				$topicType = " bgcolor='#000000'><img src=\"./imgs/folder_announce.gif\" width=\"16\" height=\"16\" />"; 
			}
			else{
				$topicType = " bgcolor='#000000'><img src=\"./imgs/folder.gif\" width=\"16\" height=\"16\" />"; 
			}
						
			echo "<tr width=100%>
		<td valign=middle width='10'{$topicType}</td>
		<td valign=middle width='310' bgcolor='#222222'> 
		<a href='index.php?p=post&fid={$forumID}&tid={$rowTopic[0]}'>{$rowTopic[2]}</a></td>
		<td valign=middle align=center bgcolor='#111111'>{$rowTopic[6]}</td>
		<td valign=middle align=center bgcolor='#222222'>
		<a href='evemail:{$rowLastPoster[2]}'>{$rowLastPoster[2]}</a></td>
		<td valign=middle align=center bgcolor='#111111'>$ptime &lt;&lt;
		<a href='evemail:$lp_poster'>$lp_poster</a></td></tr>";
		}
		
		echo "</table><table width='730' cellspacing=1><tr>
			<td width='100%' height='15' colspan='3'>
			<a href='index.php?p=newtopic&fid={$forumID}'><h4>New Topic</h4></a></td>";
						
		echo "<td height='15' colspan='2' align=right>";
					
		if($offset > 0)	{
		echo "<a href='index.php?p=topic&fid={$forumID}&o=".($offset-10)."'>Previous Page</a>";
		}
					
		if ($numTopics > 0)	{
			$topicsEnd = min($numTopics,($offset + 10) - 1);
		}
					
		if($topicsEnd < $numTopics){
			echo " <a href='index.php?p=topic&fid={$forumID}&o=".($offset+10)."'>Next Page</a>";
		}
					
		echo "</td></tr>";
						
				
	}
	else {
		echo ("<tr><td><h1>You Do not sufficient priviledges to access this forum</h1></td></tr>");
	}

?>
</table><br><br>All times are Eve Time<br /><br />
			
<img src="./imgs/folder_new.gif" width="16" height="16" /> New Posts<br />
<img src="./imgs/folder.gif" width="16" height="16" /> No New Posts<br />
<img src="./imgs/folder_announce.gif" width="16" height="16" />	Announcements<br />
<img src="./imgs/folder_sticky.gif" width="16" height="16" /> Stickies<br />
<?php } ?>					
		</td>
	</tr>
</table><BR><BR>

