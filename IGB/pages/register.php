<?PHP

	require_once("base/db.php");
	require_once("base/global.php");
	
	$sqlConnection = new MySQL_Service();
	$sqlConnection->initConnection();
	$sqlConnection->useDatabase($sqlConnection->db_database);
	
	$action = makeSafe($_GET['a']);
?>

<table width="90%">
	<tr>
		<td width="100%" valign="top" colspan="2"><BR>
		<hr>
			<?PHP
				if(!$sqlConnection->runCheck("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE ig_name='". addslashes($_SERVER['HTTP_EVE_CHARNAME'])."'"))
				{
					if (($_POST['userName']) && ($_POST['userPass']))
					{
						$tmpUser = makeSafe($_POST['userName']);
						$tmpPass = makeSafe($_POST['userPass']);
					}
					else
					{
						echo "This form will enable you to add a new account to the out of game forums. This will be linked to your EvE account!";
					}
					
					if(isset($tmpUser) && isset($tmpPass))
					{
						if($sqlConnection->runCheck("SELECT * FROM " . $sqlConnection->db_table_prefix . "users WHERE username='{$tmpUser}'"))
						{
							echo "<font color='#FF9900'>This account already exists!</font>";
							$tmpUser = null;
						}
						else
						{
							$tmpPassSHA = md5($tmpPass);
							
							$id = 1;
							$gogo = true;
							
							while($gogo == true)
							{
								$id++;
								
								if($sqlConnection->runCheck("SELECT user_id FROM " . $sqlConnection->db_table_prefix . "users WHERE user_id='{$id}'") == 0)
								{
									$gogo = false;
								}
							}
							
							//echo "SELECT user_id FROM " . $sqlConnection->db_table_prefix . "users WHERE username='{$tmpUser}' AND user_password=md5('{$tmpPass}')";						
							if($sqlConnection->runExecute("INSERT INTO " . $sqlConnection->db_table_prefix . "users (user_id, username, user_password, ig_name, user_dateformat, user_regdate) VALUES ('{$id}', '{$tmpUser}', '{$tmpPassSHA}', '".addslashes($_SERVER['HTTP_EVE_CHARNAME'])."', 'd M Y h:i a', '".time()."')")
								&& $sqlConnection->runExecute("INSERT INTO " . $sqlConnection->db_table_prefix . "groups (group_name, group_description) VALUES ('', 'Personal User')")
								&& $sqlConnection->runExecute("INSERT INTO " . $sqlConnection->db_table_prefix . "user_group (group_id, user_id, user_pending) VALUES (LAST_INSERT_ID(), '{$id}', '0')"))
							{
								//$sqlConnection->runExecute("UPDATE " . $sqlConnection->db_table_prefix . "users SET ig_name='".addslashes($_SERVER['HTTP_EVE_CHARNAME'])."' WHERE username='{$tmpUser}'");
								echo "This forum account has been created and your eve account has been tied to it. Please <a href='index.php?p=forum'>load this page</a> in order to see the forums.";
								$_SESSION['loggedIn'] = true;
							}
							else
							{
								$_SESSION['loggedIn'] = false;
								$tmpUser = null;
								$tmpPass = null;
								echo "<font color='#FF9900'>This account could not be created! ".$sqlConnection->getError().".</font>";
							}
						}
					}
					
					$_SESSION['forumUser'] = $tmpUser;
					$_SESSION['eveUser'] = addslashes($_SERVER['HTTP_EVE_CHARNAME']);
					
					if(is_null($tmpUser) || is_null($tmpPass) || $tmpUser == "" || $tmpPass == "")
					{
					
					//	<BR><BR><form action="index.php?p=register" method="post">
						//	New Username:<BR>
						//	<input type="text" name="userName"><BR><BR>
						//	New Password:<BR>
						//	<input type="password" name="userPass"><BR><BR>
						//	
						//	<input type="submit" value="Accept Registration Data">
						//</form>
					//
					}
				}
				else
				{	
					echo "You are already registered on the forums! If you require a new account you will need to logout of this one!";
				}
			?>
		</td>
	</tr>
</table><BR>

