
<script language="javascript" type="text/javascript">
<!--
function refresh_username(selected_username)
{
	opener.document.forms['post'].username.value = selected_username;
	opener.focus();
	window.close();
}
//-->
</script>

<form method="post" name="search" action="{S_SEARCH_ACTION}">

	  <br />

<table width="90%" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr> 
	  <td class="tableborder">


		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
				
					<table width="100%" cellpadding="4" cellspacing="1" border="0">
						<tr> 
							<th class="thHead"><span class="cattitle">{L_SEARCH_USERNAME}</span></th>
						</tr>
						<tr> 
							<td valign="top" class="row1"><span class="genmed"><input type="text" name="search_username" value="{USERNAME}" class="post" />&nbsp; <input type="submit" name="search" value="{L_SEARCH}" class="liteoption" /></span><br /><span class="gensmall">{L_SEARCH_EXPLAIN}</span><br />
							<!-- BEGIN switch_select_name -->
							<span class="genmed">{L_UPDATE_USERNAME}<br /><select name="username_list">{S_USERNAME_OPTIONS}</select>&nbsp; <input type="submit" class="liteoption" onClick="refresh_username(this.form.username_list.options[this.form.username_list.selectedIndex].value);return false;" name="use" value="{L_SELECT}" /></span><br />
							<!-- END switch_select_name -->
						</tr>
						<tr>
							<td align="center" class="row1"><span class="genmed"><a href="javascript:window.close();" class="genmed">{L_CLOSE_WINDOW}</a></span></td>
						</tr>
					</table>
				
				</td>
			</tr>
		</table>

  		</td>
	</tr>
</table>

</form>
