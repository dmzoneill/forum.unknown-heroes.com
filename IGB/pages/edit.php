<?PHP
	
	require_once("base/db.php");
	require_once("base/global.php");
	
	$sqlConnection = new MySQL_Service();
	$sqlConnection->initConnection();
	$sqlConnection->useDatabase($sqlConnection->db_database);
	
	$post_id = makeSafe($_GET['postid']);
	$action = makeSafe($_GET['a']);
	$offset = makeSafe($_GET['o']);
	$forumID = makeSafe($_GET['fid']);
	$topicID = makeSafe($_GET['tid']);
	
	$row = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE ig_name='".$_SERVER['HTTP_EVE_CHARNAME']."'");
	$_SESSION['forumUID'] = $row[0];
	$_SESSION['forumUser'] = $row[2];
	$_SESSION['eveUser'] = $_SERVER['HTTP_EVE_CHARNAME'];
	$_SESSION['userID'] = $row[0];
				
	$rowForum = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "forums WHERE forum_id='{$forumID}'");
	$rowTopic = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "topics WHERE topic_id='{$topicID}'");	
	$rltPosts = $sqlConnection->runSelectResult("SELECT po.poster_id, po.post_id, po.topic_id, po.forum_id, pt.post_subject, pt.post_text, po.post_time FROM " . $sqlConnection->db_table_prefix . "posts po, " . $sqlConnection->db_table_prefix . "posts_text pt WHERE po.forum_id='{$forumID}' AND po.topic_id='{$topicID}' AND po.post_id=pt.post_id");
		
		
		


	echo "<br><table width=\"750\">	<tr>
		<td width=\"100%\" valign=\"top\">
		<h3>Editing Post</h3><a href='index.php?p=forum'>UNKH Forum Index</a> -&gt; Forum: <a href='index.php?p=topic&fid={$forumID}'>{$rowForum[2]}</a> -&gt; Topic: <a href='index.php?p=post&fid={$forumID}&tid={$topicID}'>{$rowTopic[2]}</a></td>
		</tr></table><br><br>
		
		<table width=\"750\" cellspacing=\"1\" cellpadding=\"5\" border=0 bgcolor=#333333>";
		
		
		
		
while($rowPost = $sqlConnection->getArray($rltPosts)){
	$rowUser = $sqlConnection->runSelect("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE user_id='{$rowPost[0]}'");
						
	if($rowPost[1]==$post_id){
		
		if($rowPost[0]==$_SESSION['forumUID']){
		
		$rowPost[5] = eregi_replace("<","&amp;lt;",$rowPost[5]);
		$rowPost[5] = eregi_replace(">","&amp;gt;",$rowPost[5]);
		$rowPost[5] = eregi_replace("&lt;","&amp;lt;",$rowPost[5]);
		$rowPost[5] = eregi_replace("&gt;","&amp;gt;",$rowPost[5]);
		$rowPost[5] = eregi_replace("\"","&amp;quot;",$rowPost[5]);
		$rowPost[5] = eregi_replace("<br>","\n",$rowPost[5]);
		
			if($_POST['p_content']){
				$_POST['p_content'] = addslashes($_POST['p_content']);
				$ppp = htmlspecialchars($_POST['p_content']);
				$ppp = eregi_replace("&amp;", "&", $ppp);
				$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "posts_text SET post_text='{$ppp}' WHERE post_id='{$post_id}'");
				
				echo "<tr><td style=\"background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)\" bgcolor='#222222' width='100%'>Post Edited!</td>
			</tr>
			<tr>
			<td bgcolor='#111111' width='100%' valign='top'>
			<center>Your post has been edited, <a href='index.php?p=post&fid={$forumID}&tid={$topicID}'>Click Here</a> to go back to the topic</center>
			</td>
			</tr>";	
				
			}
			else {
				echo "<tr><td  style=\"background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)\"  bgcolor='#222222' width='100%'>Editing Post :</td>
			</tr>
			<tr>
			<td bgcolor='#111111' width='100%' valign='top'>
			<BR><center><form action='index.php?p=edit&fid={$forumID}&tid={$rowTopic[0]}&postid=$rowPost[1]' method='post'>
			Content:<BR><textarea rows='15' cols='60' name='p_content'>{$rowPost[5]}</textarea><BR><BR>
			<input name='submit' type='submit' value='Edit Post'>
			</form><center><BR>
			</td>
			</tr>";
			}		
		}
		else {
			
			echo "<tr><td  style=\"background-image:url(http://forum.unknown-heroes.com/IGB/imgs/cell.jpg)\" bgcolor='#222222' width='100%'>Editing Post :</td>
			</tr>
			<tr>
			<td bgcolor='#111111' width='100%' valign='top'>
			<h4>I dont think this is your post m8 :/</h4>
			</td>
			</tr>";		
			
		}
	}
}	
	
echo "</table>";			
				
				
?>

