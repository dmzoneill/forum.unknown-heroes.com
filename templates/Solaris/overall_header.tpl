<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}">
<meta http-equiv="Content-Style-Type" content="text/css">
{META}
{NAV_LINKS}
<title>{SITENAME} :: {PAGE_TITLE}</title>
<link rel="stylesheet" href="templates/Solaris/{T_HEAD_STYLESHEET}" type="text/css">

<!-- BEGIN switch_enable_pm_popup -->
<script language="Javascript" type="text/javascript">
<!--

	if ( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
	}

	
//-->
</script>
<!-- END switch_enable_pm_popup -->

</head>
<body>
<table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td valign="top" class="maintable">
	
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="55%" valign="top"><a href="http://www.unknown-heroes.com" title="Home Page" class="nav"><img src="templates/Solaris/images/forumlogo.jpg" width="253" height="98" border="0" alt="Home Page"/></a><a href='http://killboard.unknown-heroes.com' title="Killboard"><img src="http://forum.unknown-heroes.com/images/killbd.png" alt="Killboard" border=0></a></td>
            <td width="35%" valign="top">
			<table border="0" align="right" cellpadding="0" cellspacing="1">
                <tr> 
                  <td></td>
                  <td></td>
                  <td><img src="templates/Solaris/images/spacer.gif" width="10" height="9" /></td>
                </tr>
                <tr> 
                  <td><a href="{U_FAQ}" name="topnavurl0"><img src="templates/Solaris/images/lang_english/topimg_faq-e.jpg" alt="{L_FAQ}" name="topnavimg0" border="0" /></a></td>                  
				  <td><a href="{U_LOGIN_LOGOUT}" name="topnavurl1"><img src="templates/Solaris/images/lang_english/topimg_login-e.jpg" alt="{L_LOGIN_LOGOUT}" name="topnavimg1" border="0" /></a></td>				  
                  <td><img src="templates/Solaris/images/spacer.gif" width="10" height="10" /></td>
                </tr>
                <tr> 
                  <td><a href="{U_SEARCH}" name="topnavurl2"><img src="templates/Solaris/images/lang_english/topimg_search-e.jpg" width="80" height="15" alt="{L_SEARCH}" name="topnavimg2" border="0" /></a></td>
                  <td><a href="{U_PROFILE}" name="topnavurl3"><img src="templates/Solaris/images/lang_english/topimg_profile-d.jpg" width="80" height="15" alt="{L_PROFILE}" name="topnavimg3" border="0" /></a></td>
                  <td><img src="templates/Solaris/images/spacer.gif" width="10" height="10" /></td>
                </tr>
                <tr> 
                  <td><a href="{U_MEMBERLIST}" name="topnavurl4"><img src="templates/Solaris/images/lang_english/topimg_members-d.jpg" width="80" height="15" alt="{L_MEMBERLIST}" name="topnavimg4" border="0" /></a></td> <!--  onLoad="this.src=topnavimg_4;" -->
                  <td><a href="{U_GROUP_CP}" name="topnavurl5"><img src="templates/Solaris/images/lang_english/topimg_groups-e.jpg" width="80" height="15" alt="{L_USERGROUPS}" name="topnavimg5" border="0" /></a></td>
                  <td><img src="templates/Solaris/images/spacer.gif" width="10" height="10" /></td>
                </tr>
                <tr> 
                  <td colspan="2"><a href="{U_PRIVATEMSGS}" name="topnavurl6"><img src="templates/Solaris/images/lang_english/topimg_pms-d.jpg" width="161" height="15" alt="{PRIVATE_MESSAGE_INFO}" name="topnavimg6" border="0" /></a></td>
                  <td><img src="templates/Solaris/images/spacer.gif" width="10" height="15" /></td>
                </tr>
                <tr> 
                  <td colspan="2"><a href="{U_REGISTER}" name="topnavurl7"><img src="templates/Solaris/images/topimg_register.jpg" width="161" height="15" name="topnavimg7" alt="{L_REGISTER}" border="0" /></a></td>
                  <td><img src="templates/Solaris/images/spacer.gif" width="10" height="8" /></td>
                </tr>
              </table>
			  
<script language="Javascript" type="text/javascript">
<!--
//declaring variables and arrays
var privmsg_image_path = "{PRIVMSG_IMG}", current_lang = "";

//extract the current language string
current_lang = privmsg_image_path.match(/lang_[a-z]*/);

if (current_lang != ""){

<!-- BEGIN switch_user_logged_out -->

	//assign image paths
	document.images["topnavimg0"].src = "templates/Solaris/images/" + current_lang + "/topimg_faq-e.jpg";			//faq
	document.images["topnavimg1"].src = "templates/Solaris/images/" + current_lang + "/topimg_login-e.jpg";	//login/logout
	document.images["topnavimg2"].src = "templates/Solaris/images/" + current_lang + "/topimg_search-e.jpg";		//search
	document.images["topnavimg3"].src = "templates/Solaris/images/" + current_lang + "/topimg_profile-d.jpg";		//profile
	document.images["topnavimg4"].src = "templates/Solaris/images/" + current_lang + "/topimg_members-e.jpg";		//memberlist
	document.images["topnavimg5"].src = "templates/Solaris/images/" + current_lang + "/topimg_groups-e.jpg";		//usergroups
	document.images["topnavimg6"].src = "templates/Solaris/images/" + current_lang + "/topimg_pms-d.jpg";			//private messages/new private messages
	document.images["topnavimg7"].src = "templates/Solaris/images/" + current_lang + "/topimg_register-e.jpg";		//register
	
<!-- END switch_user_logged_out -->

<!-- BEGIN switch_user_logged_in -->

	//parse strings
	loginlogout = "{U_LOGIN_LOGOUT}";
	stringIndex = loginlogout.indexOf("amp");
	loginlogout2 = loginlogout.slice(0,stringIndex);
	loginlogout2 += loginlogout.slice(stringIndex+4);

	//assign image paths
	document.images["topnavimg0"].src = "templates/Solaris/images/" + current_lang + "/topimg_faq-e.jpg";			//faq
	document.images["topnavimg1"].src = "templates/Solaris/images/" + current_lang + "/topimg_logout-e.jpg";	//login/logout
	document.images["topnavimg2"].src = "templates/Solaris/images/" + current_lang + "/topimg_search-e.jpg";		//search
	document.images["topnavimg3"].src = "templates/Solaris/images/" + current_lang + "/topimg_profile-e.jpg";		//profile
	document.images["topnavimg4"].src = "templates/Solaris/images/" + current_lang + "/topimg_members-e.jpg";		//memberlist
	document.images["topnavimg5"].src = "templates/Solaris/images/" + current_lang + "/topimg_groups-e.jpg";		//usergroups
	document.images["topnavimg6"].src = "{PRIVMSG_IMG}";																	//private messages/new private messages
	document.images["topnavimg7"].src = "templates/Solaris/images/" + current_lang + "/topimg_register-d.jpg";		//register
	
<!-- END switch_user_logged_in -->	

}

//-->
</script>  
		  
			</td>
          </tr>
          <tr valign="top"> 
            <td colspan="2"><img src="templates/Solaris/images/bg_top_border.jpg" width="750" height="51" /></td>
          </tr>
          <tr>             
      		<td colspan="2">
          
				  <table width="720" border="0" cellpadding="0" cellspacing="0" align="center">
					<tr> 					  
                  		<td class="mainforumcell">
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  							<tr>
    							<td width="1%"><img src="templates/Solaris/images/spacer.gif" width="10" /></td>
    							<td width="98%">
