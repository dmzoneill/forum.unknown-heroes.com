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
	$_SESSION['newPosts'] = preg_replace("/:.{0,6}~".$topicID."~".$forumID."~.{0,6}:/", "",  $_SESSION['newPosts']);
	
	if(is_null($offset) || $offset == "") $offset = 0;

		$svrQuery = $_SERVER['QUERY_STRING'];
		$row = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE ig_name='".$_SERVER['HTTP_EVE_CHARNAME']."'");
		$_SESSION['forumUID'] = $row[0];
		$_SESSION['forumUser'] = $row[2];
		$_SESSION['eveUser'] = $_SERVER['HTTP_EVE_CHARNAME'];
		$_SESSION['userID'] = $row[0];
				
		$rowForum = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "forums WHERE forum_id='{$forumID}'");
		$rowTopic = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "topics WHERE topic_id='{$topicID}'");
				
		echo "<table width=\"750\">	<tr><td width=\"100%\" valign=\"top\">
		<BR><h3>{$rowTopic[2]}</h3><a href='index.php?p=forum'>UNKH Forum Index</a> -&gt; Forum: 
<a href='index.php?p=topic&fid={$forumID}'>{$rowForum[2]}</a> -&gt; Topic: 
<a href='index.php?p=post&fid={$forumID}&tid={$topicID}'>{$rowTopic[2]}</a></td></tr></table>";
				
	
	echo "<table width=\"750\" cellspacing=\"1\" cellpadding=\"5\" border=0><tr><td width='100%' height='15'>
<a href='index.php?p=newpost&fid={$forumID}&tid={$topicID}'><h4>Reply</h4></a>
</td><td width='100%' height='15' align=right colspan=2>Sort: 
<a href='index.php?p=post&fid={$forumID}&tid={$topicID}&sort1=po.post_time&sort2=DESC'>DESC</a> | 
<a href='index.php?p=post&fid={$forumID}&tid={$topicID}&sort1=po.post_time&sort2=ASC'>ASC</a></td></tr></table>";

?>
<table width="750" cellspacing="1" cellpadding="5" border=0 bgcolor=#333333>
<?php					
					
	$getSort1 = makeSafe($_GET['sort1']);
	$getSort2 = makeSafe($_GET['sort2']);
				
	if(is_null($getSort1) || is_null($getSort2) || $getSort1 == "" || $getSort2 == ""){
		$getSort1 = "po.post_time";
		$getSort2 = "ASC";
	}
					
	$rltPosts = $sqlConnection->runSelectResult("SELECT po.poster_id, po.post_id, po.topic_id, po.forum_id, pt.post_subject, pt.post_text, po.post_time FROM " . $sqlConnection->db_table_prefix . "posts po, " . $sqlConnection->db_table_prefix . "posts_text pt WHERE po.forum_id='{$forumID}' AND po.topic_id='{$topicID}' AND po.post_id=pt.post_id ORDER BY {$getSort1} {$getSort2} LIMIT {$offset},10");
	
	$rltAuth = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "user_group ug, " . $sqlConnection->db_table_prefix . "auth_access aa WHERE ug.user_id={$_SESSION['forumUID']} AND forum_id={$forumID} AND ug.group_id=aa.group_id");
				
	if(!$numPosts = $sqlConnection->getNum($rltPosts)){
		$numPosts = 0;
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
		$totViews = $rowTopic[5] + 1;
		$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "topics SET topic_views='{$totViews}' WHERE topic_id='{$topicID}'");
		
		echo "<tr style=\"background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)\">
<td bgcolor='#222222' width='130' align=center valign=middle>Author</td>
<td bgcolor='#222222' width='620' height='15' colspan=2  align=center valign=middle>Message</td></tr>";			
					
		while($rowPost = $sqlConnection->getArray($rltPosts)){
			$rowUser = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE user_id='{$rowPost[0]}'");
						
			require_once("base/bbcode.php");			
			$bbcode = &new bbcode();

			$rowPost[5] =  $bbcode->code($rowPost[5]); 				
											
			$regex ="{ \\b                      # start at word\n"
     .  "                           # boundary\n"
     .  "(                          # capture to $1\n"
     .  "(https?|telnet|gopher|file|wais|ftp) : \n"
     .  "                           # resource and colon\n"
     .  "[\\w/\\#~:.?+=&%@!\\-]+?   # one or more valid\n"
     .  "                           # characters\n"
     .  "                           # but take as little as\n"
     .  "                           # possible\n"
     .  ")\n"
     .  "(?=                        # lookahead\n"
     .  "[.:?\\-]*                  # for possible punct\n"
     .  "(?:[^\\w/\\#~:.?+=&%@!\\-] # invalid character\n"
     .  "|$)                        # or end of string\n"
     .  ") }x";
						
						
			$rowPost[5] = eregi_replace("&amp;", "&", $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;", "<", $rowPost[5]);
			$rowPost[5] = eregi_replace("&gt;", ">", $rowPost[5]);
			$rowPost[5] = preg_replace($regex, "<a href=\"$1\">$1</a>", $rowPost[5]);
			$rowPost[5] = ereg_replace("\n", "<BR>", $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;/a&gt;", '</a>', $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;br&gt;", '<br>', $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;a href=&quot;evemail", '<a href=evemail', $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;a href=\"evemail", '<a href=evemail', $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;a href=&quot;note", '<a href=note', $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;a href=\"note", '<a href=note', $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;a href=&quot;showinfo", '<a href=showinfo', $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;a href=\"showinfo", '<a href=showinfo', $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;a href=&quot;contract", '<a href=contract', $rowPost[5]);
			$rowPost[5] = eregi_replace("&lt;a href=\"contract", '<a href=contract', $rowPost[5]);
			$rowPost[5] = eregi_replace("&quot;&gt;", '>', $rowPost[5]);
			$rowPost[5] = eregi_replace("\"&gt;", '>', $rowPost[5]);
			//$rowPost[5] = eregi_replace("&quot;", '&amp;quot;', $rowPost[5]);
			
			$rowPost[5] = preg_replace("/\[url=(\W?)(.*?)(\W?)\](.*?)\[\/url\]/", '<a href="$2">$4</a>', $rowPost[5]);
			$rowPost[5] = preg_replace("/\[b\](.*)\[\/b\]/", '<b>$1</b>', $rowPost[5]);
			$rowPost[5] = preg_replace("/\[i\](.*)\[\/i\]/", '<i>$1</i>', $rowPost[5]);
			$rowPost[5] = preg_replace("/\[u\](.*)\[\/u\]/", '<u>$1</u>', $rowPost[5]);
			$rowPost[5] = eregi_replace("&quot;", '', $rowPost[5]);
			
			$posid = $rowPost[0];
			
			if(strlen($rowUser[38]) >5){
				$sig = &new bbcode();
				$sigr =  $sig->code("{$rowUser[38]}"); 	
				$sig = &new bbcode();
				$sig =  nl2br($sig->code($sigr)); 	
			}	
			else {
				$sig = "";
			}
					
			print "<tr><td bgcolor='#111111' width='130' valign='top'>";
								
			$ui_rank = mysql_result($sqlConnection->runSelectResult("SELECT user_rank FROM " . $sqlConnection->db_table_prefix . "users WHERE username='{$rowUser[2]}'"),0);	
			
			if((!$ui_rank=="0") && (!$ui_rank=="")){
				$ui_rank_title = mysql_result($sqlConnection->runSelectResult("SELECT rank_title FROM " . $sqlConnection->db_table_prefix . "ranks WHERE rank_id='$ui_rank'"),0);
			}
			else {
				$ui_rank_title = "";
			}
						
			if(strlen("../images/avatars/{$rowUser[32]}")>18){
				echo "<h6>$rowUser[2]</h6>$ui_rank_title<br><img src='../images/avatars/{$rowUser[32]}' width=96>";
			}
			else {
				echo "<h6>$rowUser[2]</h6>$ui_rank_title<br><img src='./imgs/blank.jpg' width=96>";
			}
			
			$postcount = mysql_result($sqlConnection->runSelectResult("SELECT user_posts FROM " . $sqlConnection->db_table_prefix . "users WHERE username='{$rowUser[2]}'"),0);
			
			echo "<br><br>Posts: " . $postcount;
			echo "<br>Registerd: " . date("d/m/Y", $rowUser[7]);
			echo "<br>Location: " . $rowUser[37];
			echo "<br>Evemail: <a href='evemail:{$rowUser[2]}'>{$rowUser[2]}</a><br><br>";
						
			echo"</td><td bgcolor='#111111' width='100%' valign='top' height='15' colspan=2>";
			echo "{$rowPost[5]} <br><br> ".$sig ."</td></tr><tr><td bgcolor='#111111' width='150'>Posted:</td>
			<td bgcolor='#111111'>";
			
			$ptime = date("Y-m-d H:i",$rowPost[6]);	
			$date = new DateTime("$ptime");
			$date->modify("+7 hours");
			echo $date->format("d/m/Y H:i:s");
			
			echo " </td><td bgcolor='#111111' align=right>";
								
			if($_SESSION['forumUser']==$rowUser[2]){
				echo " <a href='index.php?p=edit&fid={$forumID}&tid={$rowTopic[0]}&postid=$rowPost[1]'>Edit</a>";
			}
								
			echo "</td></tr>";
			echo "<tr style=\"background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)\" height=1>
<td bgcolor='#222222' height=3 colspan=3></td></tr>";
		}
					
		echo "</table><table width=\"750\" cellspacing=\"1\" cellpadding=\"5\" border=0 ><td>
		<a href='index.php?p=newpost&fid={$forumID}&tid={$topicID}'><h4>Reply</h4></a>
		</td><td align=right>";
					
		if($offset > 0){
			echo "<a href='index.php?p=post&fid={$forumID}&tid={$topicID}&o=".($offset-10)."&sort1={$getSort1}&sort2={$getSort2}'>Previous</a> 10 Replies";
		}
		
		if($offset < $numPosts - 1){
			echo " <a href='index.php?p=post&fid={$forumID}&tid={$topicID}&o=".($offset+10)."&sort1={$getSort1}&sort2={$getSort2}'>Next</a> 10 Replies";
		}
					
		echo "</td></tr></table><br><br>All times are Eve Time<br /><br />";
				
	}
}	
?>


