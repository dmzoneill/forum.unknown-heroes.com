<?PHP

	require_once("base/db.php");
	require_once("base/global.php");
	
	$sqlConnection = new MySQL_Service();
	$sqlConnection->initConnection();
	$sqlConnection->useDatabase($sqlConnection->db_database);
	
	$action = makeSafe($_GET['a']);
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

				$svrQuery = $_SERVER['QUERY_STRING'];
				
				$row = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE ig_name='".$_SERVER['HTTP_EVE_CHARNAME']."'");
				$_SESSION['forumUID'] = $row[0];
				$_SESSION['forumUser'] = $row[2];
				$_SESSION['eveUser'] = $_SERVER['HTTP_EVE_CHARNAME'];
				$_SESSION['userID'] = $row[0];
			
				$rowForum = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "forums WHERE forum_id='{$forumID}'");
				$rowTopic = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "topics WHERE topic_id='{$topicID}'");
				
				$rltAuth = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "user_group ug, " . $sqlConnection->db_table_prefix . "auth_access aa WHERE ug.user_id={$_SESSION['forumUID']} AND forum_id={$forumID} AND ug.group_id=aa.group_id");
				
				echo "<table width=\"750\">	<tr>
						<td width=\"100%\" valign=\"top\">
						<BR><h3>Reply To Post</h3><a href='index.php?p=forum'>UNKH Forum Index</a> -&gt; Forum: <a href='index.php?p=topic&fid={$forumID}'>{$rowForum[2]}</a> -&gt; Topic: <a href='index.php?p=post&fid={$forumID}&tid={$topicID}'>{$rowTopic[2]}</a><Br><br></td></tr></table><table width=\"750\" cellpadding=5 cellspacing=1 bgcolor=#333333>
				";
				
								
				$go_to_topic = "<a href='index.php?p=post&fid={$forumID}&tid={$topicID}'>Return to topic</a>";	
					
				if(isset($rltAuth))
				{
					$i = 0;
					
					while($rowAuth = $sqlConnection->getArray($rltAuth))
					{
						$tmpAuth[$i] = $rowAuth;
						$i++;
					}
					
					for($i = 0; $i <= count($tmpAuth); $i++)
					{
						for($j = 5; $j <= count($tmpAuth[$i]); $j++)
						{
							$forumAuth[($j-5)] += $tmpAuth[$i][$j];
						}
					}
				}
				
				if(($rowForum[11] == 0) || ($forumAuth[0] > 0))
				{
					$getContent = makeSafe($_POST['content']);
					$getContent = preg_replace("/\n/", '<br>', $getContent);
					$getContent = preg_replace("/\r/", '', $getContent);
					
					if(is_null($getContent) || $getContent == "")
					{
						echo "
							<tr>
								<td style=\"background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)\" bgcolor='#222222' width='100%'>Reply to Post: <a href='index.php?p=post&fid={$forumID}&tid={$topicID}'>{$rowTopic[2]}</a></td>
							</tr>
							<tr>
								<td bgcolor='#111111' width='100%' valign='top'>
									<BR><center><form action='index.php?p=newpost&fid={$forumID}&tid={$topicID}' method='post'>
										Content:<BR>
										<textarea rows='15' cols=60 name='content'></textarea><BR><BR>
										<input name='submit' type='submit' value='Reply'>
									</form><center><BR>
								</td>
							</tr>";
							
					}
					else
					{
						$sqlConnection->runExecute("INSERT INTO " . $sqlConnection->db_table_prefix . "posts (topic_id, forum_id, poster_id, post_time, poster_ip) VALUES ('{$topicID}', '{$forumID}', '".$_SESSION['forumUID']."', '".time()."', '".$_SERVER['REMOTE_ADDR']."')");
						$postID = $sqlConnection->lastID();
						$sqlConnection->runExecute("INSERT INTO " . $sqlConnection->db_table_prefix . "posts_text (post_id, bbcode_uid, post_text) VALUES ('{$postID}', '', '{$getContent}')");
						
						$totReplies = $rowTopic[6] + 1;
						$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "topics SET topic_replies='{$totReplies}', topic_last_post_id='{$postID}' WHERE topic_id='{$topicID}'");
						
						$totPosts = $rowForum[6] + 1;
						$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "forums SET forum_posts='{$totPosts}', forum_last_post_id='{$postID}' WHERE forum_id='{$forumID}'");
						
						$postcount = mysql_result($sqlConnection->runSelectResult("SELECT user_posts FROM " . $sqlConnection->db_table_prefix . "users WHERE user_id='{$_SESSION['userID']}'"),0) + 1;
												
						$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "users SET user_posts='$postcount' WHERE user_id='{$_SESSION['userID']}'");
						
						echo "<tr><td colspan=4 style=\"background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)\" bgcolor='#222222' width='100%'>Reply Posted!</td>
			</tr>
							<tr>
								<td bgcolor='#111111' width='100%' colspan='4'><BR>Your post has been added! $go_to_topic</td>
							</tr>
							";
					}
				}
			} ?></table>
	<BR><BR>


