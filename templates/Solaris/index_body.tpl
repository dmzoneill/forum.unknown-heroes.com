




<!-- ************************************************************************************************** -->

<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left" valign="bottom"><span class="gensmall">
	<!-- BEGIN switch_user_logged_in -->
	{LAST_VISIT_DATE}<br />
	<!-- END switch_user_logged_in -->
	{CURRENT_TIME}<br /></span><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></td>
	<td align="right" valign="bottom" class="gensmall">
		<!-- BEGIN switch_user_logged_in -->
		<a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a><br /><a href="{U_SEARCH_SELF}" class="gensmall">{L_SEARCH_SELF}</a><br />
		<!-- END switch_user_logged_in -->
		<a href="{U_SEARCH_UNANSWERED}" class="gensmall">{L_SEARCH_UNANSWERED}</a></td>
  </tr>
</table>



<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
	  <td class="tableborder">

		  
		  <table width="100%" border="0" cellspacing="1">
			  <tr> 
				<td width="73%" class="forumcolumns">&nbsp;{L_FORUM}&nbsp;</td>
				<td width="6%" class="forumcolumns">&nbsp;{L_TOPICS}&nbsp;</td>
				<td width="6%" class="forumcolumns">&nbsp;{L_POSTS}&nbsp;</td>
				<td width="15%" class="forumcolumns">&nbsp;{L_LASTPOST}&nbsp;</td>
			  </tr>

<!-- BEGIN catrow -->		

			  <tr> 
				<td colspan="4" class="categorybar">
		
					  <table border="0">
						<tr>
						  <td><img src="templates/Solaris/images/category_icon.gif" /></td>
						  <td><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></td>
						</tr>
					  </table>
					  
			 	 </td>
			  </tr>

<!-- BEGIN forumrow -->											
					  
			  <tr> 										  
				<td class="row1">

					<table border="0">
						<tr>
						  <td valign="top"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" /></td>
						  <td valign="top"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink">{catrow.forumrow.FORUM_NAME}</a><br />
							  <span class="gensmall">{catrow.forumrow.FORUM_DESC}</span><br />
							  <span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span></td>
						</tr>
					  </table>									  								  
				  </td>
					<td class="row1" align="center"><span class="gensmall">{catrow.forumrow.TOPICS}</span></td>
					<td class="row1" align="center"><span class="gensmall">{catrow.forumrow.POSTS}</span></td>
					<td class="row1" align="center"><span class="gensmall">{catrow.forumrow.LAST_POST}</span></td>
				  </tr>
<!-- END forumrow -->
<!-- END catrow -->			  

			</table>

				
		</td>
	</tr>
  </table>
  
  <table width="100%" cellspacing="0" border="0" align="center" cellpadding="2">
  <tr> 
	<td align="left">
<!-- BEGIN switch_user_logged_in -->     	
	<span class="gensmall"><a href="{U_MARK_READ}" class="gensmall">{L_MARK_FORUMS_READ}</a></span>
<!-- END switch_user_logged_in --> 		
	</td>
	<td align="right"><span class="gensmall">{S_TIMEZONE}</span></td>
  </tr>
</table>


<br />

<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
		<td class="tableborder">

	  		<table width="100%" border="0" cellspacing="1">
				<tr> 
					<td colspan="2" bgcolor="#0C0C0C" class="categorybar">
		
						<table border="0">
							<tr>
								<td><img src="templates/Solaris/images/category_icon.gif" /></td>
								<td><span class="cattitle"><a href="{U_VIEWONLINE}" class="cattitle">{L_WHO_IS_ONLINE}</a></span></td>
							</tr>
						</table>
					
					</td>
				</tr>
				<tr>
					<td class="row1" align="center" valign="middle" rowspan="2" width="6%"><img src="templates/Solaris/images/whosonline.gif" alt="{L_WHO_IS_ONLINE}" /></td>
					<td class="row1" align="left" width="94%"><span class="gensmall">{TOTAL_POSTS}<br />{TOTAL_USERS}<br />{NEWEST_USER}</span></td>
				</tr>
				<tr>
					<td class="row1" align="left"><span class="gensmall">{TOTAL_USERS_ONLINE} &nbsp; [ {L_WHOSONLINE_ADMIN} ] &nbsp; [ {L_WHOSONLINE_MOD} ]<br />{RECORD_USERS}<br />{LOGGED_IN_USER_LIST}<br /><i>{L_ONLINE_EXPLAIN}</i></span></td>				
				</tr>
			</table>
		</td>
	</tr>
</table>

<br />
						  
<!-- BEGIN switch_user_logged_out -->
<form method="post" action="{S_LOGIN_ACTION}">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
		<td class="tableborder">
					  
	  		<table width="100%" border="0" cellspacing="1" cellpadding="3">
				<tr> 
					<td colspan="3" bgcolor="#0C0C0C" class="categorybar">
							
						<table border="0">
							<tr>
								<td><img src="templates/Solaris/images/category_icon.gif" /></td>
								<td><a name="login"></a><span class="cattitle">{L_LOGIN_LOGOUT}</span></a></td>
							</tr>
						</table>
										  
					</td>
				</tr>
				<tr> 
	  				<td class="row1" align="center" valign="middle">
						<span class="gensmall"><strong>{L_USERNAME}</strong>&nbsp;&nbsp;<input class="post" type="text" name="username" size="10" /></span>
					</td>
					<td class="row1" align="center" valign="middle">
						<span class="gensmall"><strong>{L_PASSWORD}</strong>&nbsp;&nbsp;<input class="post" type="password" name="password" size="10" maxlength="32" /></span>
					</td>
					<td class="row1" align="center" valign="middle">
      <!-- BEGIN switch_allow_autologin --> 					
						<span class="gensmall"><input class="text" type="checkbox" name="autologin" style="background-color : #060606;" /> {L_AUTO_LOGIN}</span>
      <!-- END switch_allow_autologin --> 						
 					</td>
				</tr>
				<tr>
					<td class="row1" align="center" colspan="3">
						<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" />
						</span>
					</td>
				</tr>
			</table>
			
		</td>
	</tr>
</table>
</form>
<!-- END switch_user_logged_out -->								  

<br />

<table cellspacing="3" border="0" align="center" cellpadding="0">
  <tr> 
	<td width="20" align="center"><img src="templates/Solaris/images/folder_new.gif" alt="{L_NEW_POSTS}"/></td>
	<td><span class="gensmall">{L_NEW_POSTS}</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="templates/Solaris/images/folder.gif" alt="{L_NO_NEW_POSTS}" /></td>
	<td><span class="gensmall">{L_NO_NEW_POSTS}</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="templates/Solaris/images/folder_lock.gif" alt="{L_FORUM_LOCKED}" /></td>
	<td><span class="gensmall">{L_FORUM_LOCKED}</span></td>
  </tr>
</table>
