 
<form action="{S_LOGIN_ACTION}" method="post" target="_top">

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left" class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
  </tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
  		<td class="tableborder">

			<table width="100%" cellpadding="4" cellspacing="1" border="0" align="center">
			  <tr> 
				<th class="thHead" nowrap="nowrap">{L_ENTER_PASSWORD}</th>
			  </tr>
			  <tr> 
				<td class="row1"><table border="0" cellpadding="3" cellspacing="1" width="100%">
					  <tr> 
						<td colspan="2" align="center">&nbsp;</td>
					  </tr>
					  <tr> 
						<td width="45%" align="right"><span class="genmed">{L_USERNAME}:</span></td>
						<td> 
						  <input type="text" name="username" size="25" maxlength="40" value="{USERNAME}" />
						</td>
					  </tr>
					  <tr> 
						<td align="right"><span class="genmed">{L_PASSWORD}:</span></td>
						<td> 
						  <input type="password" name="password" size="25" maxlength="32" />
						</td>
					  </tr>
					  <tr align="center"> 
        <!-- BEGIN switch_allow_autologin --> 					  
						<td colspan="2"><span class="genmed">{L_AUTO_LOGIN}: <input type="checkbox" name="autologin" class="checkbox" /></span></td>
        <!-- END switch_allow_autologin -->						
					  </tr>
					  <tr align="center"> 
						<td colspan="2">{S_HIDDEN_FIELDS}<input type="submit" name="login" class="mainoption" value="{L_LOGIN}" /></td>
					  </tr>
					  <tr align="center"> 
						<td colspan="2"><span class="gensmall"><a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a></span></td>
					  </tr>
					</table>
				</td>
			  </tr>
			</table>

  		</td>
	</tr>
</table>  	

</form>
