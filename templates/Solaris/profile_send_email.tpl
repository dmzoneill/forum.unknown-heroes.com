
<script language="JavaScript" type="text/javascript">
<!--
function checkForm(formObj) {

	formErrors = false;    

	if (formObj.message.value.length < 2) {
		formErrors = "{L_EMPTY_MESSAGE_EMAIL}";
	}
	else if ( formObj.subject.value.length < 2)
	{
		formErrors = "{L_EMPTY_SUBJECT_EMAIL}";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	}
}
//-->
</script>

<form action="{S_POST_ACTION}" method="post" name="post" onSubmit="return checkForm(this)">

{ERROR_BOX}

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left"><span  class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></td>
	</tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
	  <td class="tableborder">

		<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
			<tr> 
				<th class="thHead" colspan="2"><span class="cattitle">{L_SEND_EMAIL_MSG}</span></th>
			</tr>
			<tr> 
				<td class="row1" width="22%"><span class="genmed"><b>{L_RECIPIENT}</b></span></td>
				<td class="row2" width="78%"><span class="genmed"><b>{USERNAME}</b></span> </td>
			</tr>
			<tr> 
				<td class="row1" width="22%"><span class="genmed"><b>{L_SUBJECT}</b></span></td>
				<td class="row2" width="78%"><span class="genmed"><input type="text" name="subject" size="45" maxlength="100" style="width:450px" tabindex="2" class="post" value="{SUBJECT}" /></span> </td>
			</tr>
			<tr> 
				<td class="row1" valign="top"><span class="genmed"><b>{L_MESSAGE_BODY}</b></span><br /><span class="gensmall">{L_MESSAGE_BODY_DESC}</span></td>
				<td class="row2"><span class="genmed"><textarea name="message" rows="25" cols="40" wrap="virtual" style="width:500px" tabindex="3" class="post">{MESSAGE}</textarea></span></td>
			</tr>
			<tr> 
				<td class="row1" valign="top"><span class="genmed"><b>{L_OPTIONS}</b></span></td>
				<td class="row2"><table cellspacing="0" cellpadding="1" border="0">
					<tr> 
						<td><input type="checkbox" name="cc_email"  value="1" checked="checked" /></td>
						<td><span class="genmed">{L_CC_EMAIL}</span></td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td class="catBottom" colspan="2" align="center" height="28">{S_HIDDEN_FIELDS}<input type="submit" tabindex="6" name="submit" class="mainoption" value="{L_SEND_EMAIL}" /></td>
			</tr>
		</table>

  		</td>
	</tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
		<td align="right" valign="top"><span class="gensmall">{S_TIMEZONE}</span></td>
	</tr>
</table></form>

<table width="100%" cellspacing="2" border="0" align="center">
	<tr>
		<td valign="top" align="right">{JUMPBOX}</td>
	</tr>
</table>
