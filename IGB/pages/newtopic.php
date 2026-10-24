<?php // phpcs:ignoreFile ?>
<?php // jscpd:ignore-start ?>
<?PHP
	/* @phpstan-ignore-line */ /** @psalm-suppress MissingFile */ require_once("base/db.php");
	/* @phpstan-ignore-line */ /** @psalm-suppress MissingFile */ require_once("base/global.php");
	
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection = new MySQL_Service();
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection->initConnection();
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection->useDatabase($sqlConnection->db_database);
	
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ $action = makeSafe($_GET['a']);
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ $forumID = makeSafe($_GET['fid']);

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ if(!@$sqlConnection->runSelect("SELECT ig_name FROM " . $sqlConnection->db_table_prefix . "users LIMIT 1")){
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection->runExecute("ALTER TABLE " . $sqlConnection->db_table_prefix . "users ADD COLUMN ig_name VARCHAR(50)");
}
			
if($action == "rmfl"){
	$_SESSION['forumUser'] = "";
	$_SESSION['loggedIn'] = false;
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "users SET ig_name=NULL WHERE ig_name='".addslashes($_SERVER['HTTP_EVE_CHARNAME'])."'");
					
	echo("<span style='color: #FF9900;'>You have now logged out!</span><BR><BR>");
}

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ if(!$sqlConnection->runCheck("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE ig_name='". addslashes($_SERVER['HTTP_EVE_CHARNAME'])."'")){

	/** @psalm-suppress RiskyTruthyFalsyComparison */ if (($_POST['userName']) && ($_POST['userPass'])){
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ $tmpUser = makeSafe($_POST['userName']);
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ $tmpPass = makeSafe($_POST['userPass']);
	}
	else{
		echo "You are required to login with your outgame <U>FORUM</U> username and password.<br>";
	}
					
	if(isset($tmpUser) && isset($tmpPass)){
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $tmpPassSHA = md5($tmpPass);

		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ if($sqlConnection->runCheck("SELECT user_id FROM " . $sqlConnection->db_table_prefix . "users WHERE username='{$tmpUser}' AND user_password=md5('{$tmpPass}')")){
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "users SET ig_name='".addslashes($_SERVER['HTTP_EVE_CHARNAME'])."' WHERE username='{$tmpUser}'");
			echo "Welcome " .$tmpUser .".<br><br>You can now continue to the <a href='index.php?p=forum'>Forums</a>.";
			$_SESSION['loggedIn'] = true;
		}
		else{
			$tmpUser = null;
			$tmpPass = null;
			echo "<BR><BR><font color='#FF9900'>That username and/or password is incorrect. Please try again.</font>";
		}
	}
					
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $_SESSION['forumUser'] = $tmpUser;
	$_SESSION['eveUser'] = addslashes($_SERVER['HTTP_EVE_CHARNAME']);
					
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if(is_null($tmpUser) || is_null($tmpPass) || $tmpUser == "" || $tmpPass == ""){
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

	/** @psalm-suppress UnusedVariable, PossiblyUndefinedArrayOffset */ /** @psalm-suppress UnusedVariable */ $svrQuery = $_SERVER['QUERY_STRING'];
				
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $row = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE ig_name='".$_SERVER['HTTP_EVE_CHARNAME']."'");
	$_SESSION['forumUID'] = $row[0];
	$_SESSION['forumUser'] = $row[2];
	$_SESSION['eveUser'] = $_SERVER['HTTP_EVE_CHARNAME'];
	$_SESSION['userID'] = $row[0];
				

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $rowForum = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "forums WHERE forum_id='{$forumID}'");
				
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $rltAuth = $sqlConnection->runSelectResult("SELECT * FROM " . $sqlConnection->db_table_prefix . "user_group ug, " . $sqlConnection->db_table_prefix . "auth_access aa WHERE ug.user_id={$_SESSION['forumUID']} AND forum_id={$forumID} AND ug.group_id=aa.group_id");
				
				
	echo "<table width=\"750\">	<tr><td width=\"100%\" valign=\"top\">
<BR><h3>New Topic</h3><a href='index.php?p=forum'>UNKH Forum Index</a> -&gt; Forum: <a href='index.php?p=topic&fid={$forumID}'>{$rowForum[2]}</a><Br><br></td></tr></table><table width=\"750\" cellpadding=5 cellspacing=1 bgcolor=#333333>";
		
							
	if(isset($rltAuth))	{
		$i = 0;
					
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ while($rowAuth = $sqlConnection->getArray($rltAuth)){
			/** @psalm-suppress PossiblyUndefinedGlobalVariable */ $tmpAuth[$i] = $rowAuth;
			$i++;
		}
					
		/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ for($i = 0; $i <= count($tmpAuth); $i++){
			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ for($j = 5; $j <= count($tmpAuth[$i]); $j++){
				/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $forumAuth[($j-5)] += $tmpAuth[$i][$j];
			}
		}
	}
				
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if(($rowForum[11] == 0) || ($forumAuth[0] > 0))	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ $getSubject = makeSafe($_POST['subject']);
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ $getContent = makeSafe($_POST['content']);
		$getContent = preg_replace("/\n/", '<br>', $getContent);
		/** @psalm-suppress PossiblyNullArgument */ $getContent = preg_replace("/\r/", '', $getContent);
					
		if(is_null($getSubject) || $getSubject == "" || is_null($getContent) || $getContent == ""){
			/* @phpstan-ignore-next-line */ /** @psalm-suppress UndefinedGlobalVariable */ echo "<tr><td  style=\"background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)\" bgcolor='#222222' width='100%'>Add a new Topic:</td></tr><tr>
<td bgcolor='#111111' width='100%' valign='top'><BR><center><form action='index.php?p=newtopic&fid={$forumID}&tid={$topicID}' method='post'>
Subject:<BR><input name='subject' type='text'><BR><BR>Content:<BR>
<textarea rows='15' cols='60' name='content'></textarea><BR><BR>
<input name='submit' type='submit' value='Post New Topic'></form><center><BR></td></tr>";
							
		}
		else {
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedArrayOffset */ /** @psalm-suppress UndefinedClass */ $sqlConnection->runExecute("INSERT INTO " . $sqlConnection->db_table_prefix . "posts (topic_id, forum_id, poster_id, post_time, poster_ip) VALUES ('{$topicID}', '{$forumID}', '".$_SESSION['forumUID']."', '".time()."', '".$_SERVER['REMOTE_ADDR']."')");
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $postID = $sqlConnection->lastID();
			
			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyInvalidCast */ /** @psalm-suppress UndefinedClass */ $sqlConnection->runExecute("INSERT INTO " . $sqlConnection->db_table_prefix . "posts_text (post_id, bbcode_uid, post_text) VALUES ('{$postID}', '', '{$getContent}')");
						
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection->runExecute("INSERT INTO " . $sqlConnection->db_table_prefix . "topics (forum_id, topic_title, topic_poster, topic_time, topic_first_post_id, topic_last_post_id) VALUES ('{$forumID}', '{$getSubject}', '".$_SESSION['userID']."', '".time()."', '{$postID})', '{$postID}')");
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $topicID = $sqlConnection->lastID();
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "posts SET topic_id='{$topicID}' WHERE post_id='{$postID}' AND forum_id='{$forumID}'");
						
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedClass */ $postcount = mysql_result($sqlConnection->runSelectResult("SELECT user_posts FROM " . $sqlConnection->db_table_prefix . "users WHERE user_id='{$_SESSION['userID']}'"),0) + 1;
												
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "users SET user_posts='$postcount' WHERE user_id='{$_SESSION['userID']}'");
						
			$totPosts = $rowForum[6] + 1;
			$totTopics = $rowForum[7] + 1;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "forums SET forum_posts='{$totPosts}', forum_topics='{$totTopics}', forum_last_post_id='{$postID}' WHERE forum_id='{$forumID}'");
						
			echo "<tr><td bgcolor='#111111' width='100%' colspan='4'><BR>Your post has been added!<BR><BR></td></tr>";
		}
	}
}	
?></table><BR><BR>

<?php // jscpd:ignore-end ?>
