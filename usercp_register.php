<?php
// phpcs:ignoreFile
// jscpd:ignore-start
/***************************************************************************
 *                            usercp_register.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: usercp_register.php,v 1.20.2.78 2006/12/17 10:51:27 acydburn Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

/*

	This code has been modified from its original form by psoTFX @ phpbb.com
	Changes introduce the back-ported phpBB 2.2 visual confirmation code. 

	NOTE: Anyone using the modified code contained within this script MUST include
	a relevant message such as this in usercp_register.php ... failure to do so 
	will affect a breach of Section 2a of the GPL and our copyright

	png visual confirmation system : (c) phpBB Group, 2003 : All Rights Reserved

*/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
	/* @phpstan-ignore-line */ /** @psalm-suppress UnevaluatedCode */ /** @psalm-suppress UnevaluatedCode */ exit;
}

$unhtml_specialchars_match = array('#&gt;#', '#&lt;#', '#&quot;#', '#&amp;#');
$unhtml_specialchars_replace = array('>', '<', '"', '&');

// ---------------------------------------
// Load agreement template since user has not yet
// agreed to registration conditions/coppa
//
/** @psalm-suppress MissingReturnType */ /** @psalm-suppress MissingReturnType */ function show_coppa()
{
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ global $userdata, $template, $lang, $phpbb_root_path, $phpEx;

	$template->set_filenames(array(
		'body' => 'agreement.tpl')
	);

	/** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ $template->assign_vars(array(
		'REGISTRATION' => $lang['Registration'],
		'AGREEMENT' => $lang['Reg_agreement'],
		"AGREE_OVER_13" => $lang['Agree_over_13'],
		"AGREE_UNDER_13" => $lang['Agree_under_13'],
		'DO_NOT_AGREE' => $lang['Agree_not'],

		/* @phpstan-ignore-line */ "U_AGREE_OVER13" => append_sid("profile.$phpEx?mode=register&amp;agreed=true"),
		/* @phpstan-ignore-line */ "U_AGREE_UNDER13" => append_sid("profile.$phpEx?mode=register&amp;agreed=true&amp;coppa=true"))
	);

	$template->pparse('body');

}
//
// ---------------------------------------

$error = FALSE;
$error_msg = '';
/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ $page_title = ( $mode == 'editprofile' ) ? $lang['Edit_profile'] : $lang['Register'];

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( $mode == 'register' && !isset($HTTP_POST_VARS['agreed']) && !isset($HTTP_GET_VARS['agreed']) )
{
	/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/page_header.'.$phpEx);

	show_coppa();

	/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude */ /** @psalm-suppress UnresolvableInclude */ include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
}

$coppa = ( empty($HTTP_POST_VARS['coppa']) && empty($HTTP_GET_VARS['coppa']) ) ? 0 : TRUE;

//
// Check and initialize some variables if needed
//
/** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if (
	isset($HTTP_POST_VARS['submit']) ||
	isset($HTTP_POST_VARS['avatargallery']) ||
	isset($HTTP_POST_VARS['submitavatar']) ||
	isset($HTTP_POST_VARS['cancelavatar']) ||
	/* @phpstan-ignore-line */ $mode == 'register' )
{
	/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/functions_validate.'.$phpEx);
	/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/bbcode.'.$phpEx);
	/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/functions_post.'.$phpEx);

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( $mode == 'editprofile' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_id = intval($HTTP_POST_VARS['user_id']);
		/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ $current_email = trim(htmlspecialchars($HTTP_POST_VARS['current_email']));
	}

	$strip_var_list = array('email' => 'email', 'icq' => 'icq', 'aim' => 'aim', 'msn' => 'msn', 'yim' => 'yim', 'website' => 'website', 'location' => 'location', 'occupation' => 'occupation', 'interests' => 'interests', 'confirm_code' => 'confirm_code');

	// Strip all tags from data ... may p**s some people off, bah, strip_tags is
	// doing the job but can still break HTML output ... have no choice, have
	// to use htmlspecialchars ... be prepared to be moaned at.
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ while( list($var, $param) = @each($strip_var_list) )
	{
		if ( !empty($HTTP_POST_VARS[$param]) )
		{
			$$var = trim(htmlspecialchars($HTTP_POST_VARS[$param]));
		}
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ $username = ( !empty($HTTP_POST_VARS['username']) ) ? phpbb_clean_username($HTTP_POST_VARS['username']) : '';

	$trim_var_list = array('cur_password' => 'cur_password', 'new_password' => 'new_password', 'password_confirm' => 'password_confirm', 'signature' => 'signature');

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ while( list($var, $param) = @each($trim_var_list) )
	{
		if ( !empty($HTTP_POST_VARS[$param]) )
		{
			$$var = trim($HTTP_POST_VARS[$param]);
		}
	}

	$signature = (isset($signature)) ? str_replace('<br />', "\n", $signature) : '';
	$signature_bbcode_uid = '';

	// Run some validation on the optional fields. These are pass-by-ref, so they'll be changed to
	// empty strings if they fail.
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ validate_optional_fields($icq, $aim, $msn, $yim, $website, $location, $occupation, $interests, $signature);

	$viewemail = ( isset($HTTP_POST_VARS['viewemail']) ) ? ( ($HTTP_POST_VARS['viewemail']) ? TRUE : 0 ) : 0;
	$allowviewonline = ( isset($HTTP_POST_VARS['hideonline']) ) ? ( ($HTTP_POST_VARS['hideonline']) ? 0 : TRUE ) : TRUE;
	$notifyreply = ( isset($HTTP_POST_VARS['notifyreply']) ) ? ( ($HTTP_POST_VARS['notifyreply']) ? TRUE : 0 ) : 0;
	$notifypm = ( isset($HTTP_POST_VARS['notifypm']) ) ? ( ($HTTP_POST_VARS['notifypm']) ? TRUE : 0 ) : TRUE;
	$popup_pm = ( isset($HTTP_POST_VARS['popup_pm']) ) ? ( ($HTTP_POST_VARS['popup_pm']) ? TRUE : 0 ) : TRUE;
	$sid = (isset($HTTP_POST_VARS['sid'])) ? $HTTP_POST_VARS['sid'] : 0;

	/* @phpstan-ignore-line */ if ( $mode == 'register' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $attachsig = ( isset($HTTP_POST_VARS['attachsig']) ) ? ( ($HTTP_POST_VARS['attachsig']) ? TRUE : 0 ) : $board_config['allow_sig'];

		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowhtml = ( isset($HTTP_POST_VARS['allowhtml']) ) ? ( ($HTTP_POST_VARS['allowhtml']) ? TRUE : 0 ) : $board_config['allow_html'];
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowbbcode = ( isset($HTTP_POST_VARS['allowbbcode']) ) ? ( ($HTTP_POST_VARS['allowbbcode']) ? TRUE : 0 ) : $board_config['allow_bbcode'];
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowsmilies = ( isset($HTTP_POST_VARS['allowsmilies']) ) ? ( ($HTTP_POST_VARS['allowsmilies']) ? TRUE : 0 ) : $board_config['allow_smilies'];
	}
	else
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $attachsig = ( isset($HTTP_POST_VARS['attachsig']) ) ? ( ($HTTP_POST_VARS['attachsig']) ? TRUE : 0 ) : $userdata['user_attachsig'];

		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowhtml = ( isset($HTTP_POST_VARS['allowhtml']) ) ? ( ($HTTP_POST_VARS['allowhtml']) ? TRUE : 0 ) : $userdata['user_allowhtml'];
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowbbcode = ( isset($HTTP_POST_VARS['allowbbcode']) ) ? ( ($HTTP_POST_VARS['allowbbcode']) ? TRUE : 0 ) : $userdata['user_allowbbcode'];
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowsmilies = ( isset($HTTP_POST_VARS['allowsmilies']) ) ? ( ($HTTP_POST_VARS['allowsmilies']) ? TRUE : 0 ) : $userdata['user_allowsmile'];
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_style = ( isset($HTTP_POST_VARS['style']) ) ? intval($HTTP_POST_VARS['style']) : $board_config['default_style'];

	if ( !empty($HTTP_POST_VARS['language']) )
	{
		if ( preg_match('/^[a-z_]+$/i', $HTTP_POST_VARS['language']) )
		{
			$user_lang = htmlspecialchars($HTTP_POST_VARS['language']);
		}
		else
		{
			$error = true;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg = $lang['Fields_empty'];
		}
	}
	else
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_lang = $board_config['default_lang'];
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_timezone = ( isset($HTTP_POST_VARS['timezone']) ) ? doubleval($HTTP_POST_VARS['timezone']) : $board_config['board_timezone'];

	$sql = "SELECT config_value
		FROM " /* @phpstan-ignore-line */ . CONFIG_TABLE . "
		WHERE config_name = 'default_dateformat'";
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( !($result = $db->sql_query($sql)) )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not select default dateformat', '', __LINE__, __FILE__, $sql);
	}
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $row = $db->sql_fetchrow($result);
	/** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $board_config['default_dateformat'] = $row['config_value'];
	$user_dateformat = ( !empty($HTTP_POST_VARS['dateformat']) ) ? trim(htmlspecialchars($HTTP_POST_VARS['dateformat'])) : $board_config['default_dateformat'];

	$user_avatar_local = ( isset($HTTP_POST_VARS['avatarselect']) && !empty($HTTP_POST_VARS['submitavatar']) && $board_config['allow_avatar_local'] ) ? htmlspecialchars($HTTP_POST_VARS['avatarselect']) : ( ( isset($HTTP_POST_VARS['avatarlocal'])  ) ? htmlspecialchars($HTTP_POST_VARS['avatarlocal']) : '' );
	/** @psalm-suppress PossiblyUndefinedArrayOffset, RiskyTruthyFalsyComparison */ /** @psalm-suppress PossiblyUndefinedArrayOffset, RiskyTruthyFalsyComparison */ $user_avatar_category = ( isset($HTTP_POST_VARS['avatarcatname']) && $board_config['allow_avatar_local'] ) ? htmlspecialchars($HTTP_POST_VARS['avatarcatname']) : '' ;

	$user_avatar_remoteurl = ( !empty($HTTP_POST_VARS['avatarremoteurl']) ) ? trim(htmlspecialchars($HTTP_POST_VARS['avatarremoteurl'])) : '';
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_avatar_upload = ( !empty($HTTP_POST_VARS['avatarurl']) ) ? trim($HTTP_POST_VARS['avatarurl']) : ( ( $HTTP_POST_FILES['avatar']['tmp_name'] != "none") ? $HTTP_POST_FILES['avatar']['tmp_name'] : '' );
	$user_avatar_name = ( !empty($HTTP_POST_FILES['avatar']['name']) ) ? $HTTP_POST_FILES['avatar']['name'] : '';
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $user_avatar_size = ( !empty($HTTP_POST_FILES['avatar']['size']) ) ? $HTTP_POST_FILES['avatar']['size'] : 0;
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $user_avatar_filetype = ( !empty($HTTP_POST_FILES['avatar']['type']) ) ? $HTTP_POST_FILES['avatar']['type'] : '';

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_avatar = ( empty($user_avatar_local) && $mode == 'editprofile' ) ? $userdata['user_avatar'] : '';
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_avatar_type = ( empty($user_avatar_local) && $mode == 'editprofile' ) ? $userdata['user_avatar_type'] : '';

	if ( (isset($HTTP_POST_VARS['avatargallery']) || isset($HTTP_POST_VARS['submitavatar']) || isset($HTTP_POST_VARS['cancelavatar'])) && (!isset($HTTP_POST_VARS['submit'])) )
	{
		$username = stripslashes($username);
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $email = stripslashes($email);
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $cur_password = htmlspecialchars(stripslashes($cur_password));
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $new_password = htmlspecialchars(stripslashes($new_password));
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $password_confirm = htmlspecialchars(stripslashes($password_confirm));

		/* @phpstan-ignore-line */ $icq = stripslashes($icq);
		/* @phpstan-ignore-line */ $aim = stripslashes($aim);
		/* @phpstan-ignore-line */ $msn = stripslashes($msn);
		/* @phpstan-ignore-line */ $yim = stripslashes($yim);

		/* @phpstan-ignore-line */ $website = stripslashes($website);
		/* @phpstan-ignore-line */ $location = stripslashes($location);
		/* @phpstan-ignore-line */ $occupation = stripslashes($occupation);
		/* @phpstan-ignore-line */ $interests = stripslashes($interests);
		/** @psalm-suppress PossiblyInvalidCast, PossiblyInvalidArgument */ /** @psalm-suppress PossiblyInvalidCast, PossiblyInvalidArgument */ $signature = htmlspecialchars(stripslashes($signature));

		/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $user_lang = stripslashes($user_lang);
		$user_dateformat = stripslashes($user_dateformat);

		if ( !isset($HTTP_POST_VARS['cancelavatar']))
		{
			$user_avatar = $user_avatar_category . '/' . $user_avatar_local;
			/* @phpstan-ignore-line */ $user_avatar_type = USER_AVATAR_GALLERY;
		}
	}
}

//
// Let's make sure the user isn't logged in while registering,
// and ensure that they were trying to register a second time
// (Prevents double registrations)
//
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ if ($mode == 'register' && ($userdata['session_logged_in'] || $username == $userdata['username']))
{
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ message_die(GENERAL_MESSAGE, $lang['Username_taken'], '', __LINE__, __FILE__);
}

//
// Did the user submit? In this case build a query to update the users profile in the DB
//
if ( isset($HTTP_POST_VARS['submit']) )
{
	/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/usercp_avatar.'.$phpEx);

	// session id check
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ if ($sid == '' || $sid != $userdata['session_id'])
	{
		$error = true;
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Session_invalid'];
	}

	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $passwd_sql = '';
	/* @phpstan-ignore-line */ if ( $mode == 'editprofile' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ if ( $user_id != $userdata['user_id'] )
		{
			$error = TRUE;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Wrong_Profile'];
		}
	}
	/* @phpstan-ignore-line */ else if ( $mode == 'register' )
	{
		if ( empty($username) || empty($new_password) || empty($password_confirm) || empty($email) )
		{
			$error = TRUE;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Fields_empty'];
		}
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ($board_config['enable_confirm'] && $mode == 'register')
	{
		if (empty($HTTP_POST_VARS['confirm_id']))
		{
			$error = TRUE;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Confirm_code_wrong'];
		}
		else
		{
			$confirm_id = htmlspecialchars($HTTP_POST_VARS['confirm_id']);
			if (!preg_match('/^[A-Za-z0-9]+$/', $confirm_id))
			{
				$confirm_id = '';
			}
			
			/** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $sql = 'SELECT code 
				FROM ' /* @phpstan-ignore-line */ . CONFIRM_TABLE . " 
				WHERE confirm_id = '$confirm_id' 
					AND session_id = '" /* @phpstan-ignore-line */ . $userdata['session_id'] . "'";
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if (!($result = $db->sql_query($sql)))
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not obtain confirmation code', '', __LINE__, __FILE__, $sql);
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ($row = $db->sql_fetchrow($result))
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ($row['code'] != $confirm_code)
				{
					$error = TRUE;
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Confirm_code_wrong'];
				}
				else
				{
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $sql = 'DELETE FROM ' . CONFIRM_TABLE . " 
						WHERE confirm_id = '$confirm_id' 
							AND session_id = '" /* @phpstan-ignore-line */ . $userdata['session_id'] . "'";
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if (!$db->sql_query($sql))
					{
						/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not delete confirmation code', '', __LINE__, __FILE__, $sql);
					}
				}
			}
			else
			{		
				$error = TRUE;
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Confirm_code_wrong'];
			}
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $db->sql_freeresult($result);
		}
	}

	$passwd_sql = '';
	if ( !empty($new_password) && !empty($password_confirm) )
	{
		if ( $new_password != $password_confirm )
		{
			$error = TRUE;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Password_mismatch'];
		}
		else if ( strlen($new_password) > 32 )
		{
			$error = TRUE;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Password_long'];
		}
		else
		{
			/* @phpstan-ignore-line */ if ( $mode == 'editprofile' )
			{
				/** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $sql = "SELECT user_password
					FROM " /* @phpstan-ignore-line */ . USERS_TABLE . "
					WHERE user_id = $user_id"/* @phpstan-ignore-line */ ;
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( !($result = $db->sql_query($sql)) )
				{
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not obtain user_password information', '', __LINE__, __FILE__, $sql);
				}

				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $row = $db->sql_fetchrow($result);

				/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $row['user_password'] != md5($cur_password) )
				{
					$error = TRUE;
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Current_password_mismatch'];
				}
			}

			if ( !$error )
			{
				$new_password = md5($new_password);
				$passwd_sql = "user_password = '$new_password', ";
			}
		}
	}
	else if ( ( empty($new_password) && !empty($password_confirm) ) || ( !empty($new_password) && empty($password_confirm) ) )
	{
		$error = TRUE;
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Password_mismatch'];
	}

	//
	// Do a ban check on this email address
	//
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ if ( $email != $userdata['user_email'] || $mode == 'register' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ $result = validate_email($email);
		if ( $result['error'] )
		{
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $email = $userdata['user_email'];

			$error = TRUE;
			$error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $result['error_msg'];
		}

		/* @phpstan-ignore-line */ if ( $mode == 'editprofile' )
		{
			/** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $sql = "SELECT user_password
				FROM " /* @phpstan-ignore-line */ . USERS_TABLE . "
				WHERE user_id = $user_id"/* @phpstan-ignore-line */ ;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( !($result = $db->sql_query($sql)) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not obtain user_password information', '', __LINE__, __FILE__, $sql);
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $row = $db->sql_fetchrow($result);

			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $row['user_password'] != md5($cur_password) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $email = $userdata['user_email'];

				$error = TRUE;
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Current_password_mismatch'];
			}
		}
	}

	$username_sql = '';
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $board_config['allow_namechange'] || $mode == 'register' )
	{
		if ( empty($username) )
		{
			// Error is already triggered, since one field is empty.
			$error = TRUE;
		}
		/* @phpstan-ignore-line */ else /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( $username != $userdata['username'] || $mode == 'register')
		{
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if (strtolower($username) != strtolower($userdata['username']) || $mode == 'register')
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ $result = validate_username($username);
				if ( $result['error'] )
				{
					$error = TRUE;
					$error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $result['error_msg'];
				}
			}

			if (!$error)
			{
				/** @psalm-suppress PossiblyInvalidOperand */ /** @psalm-suppress PossiblyInvalidOperand */ $username_sql = "username = '" . str_replace("\'", "''", $username) . "', ";
			}
		}
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $signature != '' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( strlen($signature) > $board_config['max_sig_chars'] )
		{
			$error = TRUE;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg .= ( ( isset($error_msg) ) ? '<br />' : '' ) . $lang['Signature_too_long'];
		}

		if ( !isset($signature_bbcode_uid) || $signature_bbcode_uid == '' )
		{
			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedFunction */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedFunction */ $signature_bbcode_uid = ( $allowbbcode ) ? make_bbcode_uid() : '';
		}
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ $signature = prepare_message($signature, $allowhtml, $allowbbcode, $allowsmilies, $signature_bbcode_uid);
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $website != '' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UnusedFunctionCall */ /** @psalm-suppress UnusedFunctionCall */ rawurlencode($website);
	}

	$avatar_sql = '';

	/* @phpstan-ignore-line */ if ( isset($HTTP_POST_VARS['avatardel']) && $mode == 'editprofile' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ $avatar_sql = user_avatar_delete($userdata['user_avatar_type'], $userdata['user_avatar']);
	}
	else
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( ( !empty($user_avatar_upload) || !empty($user_avatar_name) ) && $board_config['allow_avatar_upload'] )
	{
		if ( !empty($user_avatar_upload) )
		{
			$avatar_mode = (empty($user_avatar_name)) ? 'remote' : 'local';
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable, PossiblyUndefinedVariable */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable, PossiblyUndefinedVariable */ $avatar_sql = user_avatar_upload($mode, $avatar_mode, $userdata['user_avatar'], $userdata['user_avatar_type'], $error, $error_msg, $user_avatar_upload, $user_avatar_name, $user_avatar_size, $user_avatar_filetype);
		}
		/* @phpstan-ignore-line */ else if ( !empty($user_avatar_name) )
		{
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ $l_avatar_size = sprintf($lang['Avatar_filesize'], round($board_config['avatar_filesize'] / 1024));

			$error = true;
			$error_msg .= ( ( !empty($error_msg) ) ? '<br />' : '' ) . $l_avatar_size;
		}
	}
	/* @phpstan-ignore-line */ else /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $user_avatar_remoteurl != '' && $board_config['allow_avatar_remote'] )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ user_avatar_delete($userdata['user_avatar_type'], $userdata['user_avatar']);
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ $avatar_sql = user_avatar_url($mode, $error, $error_msg, $user_avatar_remoteurl);
	}
	/* @phpstan-ignore-line */ else /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $user_avatar_local != '' && $board_config['allow_avatar_local'] )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ user_avatar_delete($userdata['user_avatar_type'], $userdata['user_avatar']);
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ $avatar_sql = user_avatar_gallery($mode, $error, $error_msg, $user_avatar_local, $user_avatar_category);
	}

	if ( !$error )
	{
		if ( $avatar_sql == '' )
		{
			/* @phpstan-ignore-line */ $avatar_sql = ( $mode == 'editprofile' ) ? '' : "'', " . USER_AVATAR_NONE;
		}

		/* @phpstan-ignore-line */ if ( $mode == 'editprofile' )
		{
			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ if ( $email != $userdata['user_email'] && $board_config['require_activation'] != USER_ACTIVATION_NONE && $userdata['user_level'] != ADMIN )
			{
				$user_active = 0;

				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ $user_actkey = gen_rand_string(true);
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $key_len = 54 - ( strlen($server_url) );
				$key_len = ( $key_len > 6 ) ? $key_len : 6;
				$user_actkey = substr($user_actkey, 0, $key_len);

				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( $userdata['session_logged_in'] )
				{
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ session_end($userdata['session_id'], $userdata['user_id']);
				}
			}
			else
			{
				$user_active = 1;
				$user_actkey = '';
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyInvalidOperand, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyInvalidOperand, PossiblyUndefinedGlobalVariable */ $sql = "UPDATE " . USERS_TABLE . "
				SET " /* @phpstan-ignore-line */ . $username_sql . $passwd_sql . "user_email = '" . str_replace("\'", "''", $email) ."', user_icq = '" . str_replace("\'", "''", $icq) . "', user_website = '" . str_replace("\'", "''", $website) . "', user_occ = '" . str_replace("\'", "''", $occupation) . "', user_from = '" . str_replace("\'", "''", $location) . "', user_interests = '" . str_replace("\'", "''", $interests) . "', user_sig = '" . str_replace("\'", "''", $signature) . "', user_sig_bbcode_uid = '$signature_bbcode_uid', user_viewemail = $viewemail, user_aim = '" . str_replace("\'", "''", str_replace(' ', '+', $aim)) . "', user_yim = '" . str_replace("\'", "''", $yim) . "', user_msnm = '" . str_replace("\'", "''", $msn) . "', user_attachsig = $attachsig, user_allowsmile = $allowsmilies, user_allowhtml = $allowhtml, user_allowbbcode = $allowbbcode, user_allow_viewonline = $allowviewonline, user_notify = $notifyreply, user_notify_pm = $notifypm, user_popup_pm = $popup_pm, user_timezone = $user_timezone, user_dateformat = '" . str_replace("\'", "''", $user_dateformat) . "', user_lang = '" . str_replace("\'", "''", $user_lang) . "', user_style = $user_style, user_active = $user_active, user_actkey = '" . str_replace("\'", "''", $user_actkey) . "'" . $avatar_sql . "
				WHERE user_id = $user_id"/* @phpstan-ignore-line */ ;
			/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ if ( !($result = $db->sql_query($sql)) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not update users table', '', __LINE__, __FILE__, $sql);
			}

			// We remove all stored login keys since the password has been updated
			// and change the current one (if applicable)
			if ( !empty($passwd_sql) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable */ session_reset_keys($user_id, $user_ip);
			}

			if ( !$user_active )
			{
				//
				// The users account has been deactivated, send them an email with a new activation key
				//
				/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/emailer.'.$phpEx);
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UndefinedClass, PossiblyUndefinedGlobalVariable */ $emailer = new emailer($board_config['smtp_delivery']);

 				/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $board_config['require_activation'] != USER_ACTIVATION_ADMIN )
 				{
 					/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->from($board_config['board_email']);
 					/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->replyto($board_config['board_email']);
 
 					/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->use_template('user_activate', stripslashes($user_lang));
 					/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedVariable, UndefinedClass */ $emailer->email_address($email);
 					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedClass */ $emailer->set_subject($lang['Reactivate']);
  
 					/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, PossiblyInvalidCast, PossiblyInvalidArgument, UndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, PossiblyInvalidCast, PossiblyInvalidArgument, UndefinedGlobalVariable, UndefinedClass */ $emailer->assign_vars(array(
 						/* @phpstan-ignore-line */ 'SITENAME' => $board_config['sitename'],
 						/* @phpstan-ignore-line */ 'USERNAME' => preg_replace($unhtml_specialchars_match, $unhtml_specialchars_replace, substr(str_replace("\'", "'", $username), 0, 25)),
 						'EMAIL_SIG' => (!empty($board_config['board_email_sig'])) ? str_replace('<br />', "\n", "-- \n" . $board_config['board_email_sig']) : '',
  
 						/* @phpstan-ignore-line */ 'U_ACTIVATE' => $server_url . '?mode=activate&' . POST_USERS_URL . '=' . $user_id . '&act_key=' . $user_actkey)
 					);
 					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->send();
 					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->reset();
 				}
 				/* @phpstan-ignore-line */ else /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $board_config['require_activation'] == USER_ACTIVATION_ADMIN )
 				{
 					$sql = 'SELECT user_email, user_lang 
 						FROM ' /* @phpstan-ignore-line */ . USERS_TABLE . '
 						WHERE user_level = ' /* @phpstan-ignore-line */ . ADMIN;
 					
 					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( !($result = $db->sql_query($sql)) )
 					{
 						/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not select Administrators', '', __LINE__, __FILE__, $sql);
 					}
 					
 					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ while ($row = $db->sql_fetchrow($result))
 					{
 						/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->from($board_config['board_email']);
 						/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->replyto($board_config['board_email']);
 						
 						/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->email_address(trim($row['user_email']));
 						/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->use_template("admin_activate", $row['user_lang']);
 						/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedClass */ $emailer->set_subject($lang['Reactivate']);
 
 						/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyInvalidCast, PossiblyInvalidArgument, PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyInvalidCast, PossiblyInvalidArgument, PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable, UndefinedClass */ $emailer->assign_vars(array(
 							/* @phpstan-ignore-line */ 'USERNAME' => preg_replace($unhtml_specialchars_match, $unhtml_specialchars_replace, substr(str_replace("\'", "'", $username), 0, 25)),
 							/* @phpstan-ignore-line */ 'EMAIL_SIG' => str_replace('<br />', "\n", "-- \n" . $board_config['board_email_sig']),
 
 							/* @phpstan-ignore-line */ 'U_ACTIVATE' => $server_url . '?mode=activate&' . POST_USERS_URL . '=' . $user_id . '&act_key=' . $user_actkey)
 						);
 						/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->send();
 						/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->reset();
 					}
 					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $db->sql_freeresult($result);
 				}

				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedFunction */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedFunction */ $message = $lang['Profile_updated_inactive'] . '<br /><br />' . sprintf($lang['Click_return_index'],  '<a href="' . append_sid("index.$phpEx") . '">', '</a>');
			}
			else
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedFunction */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedFunction */ $message = $lang['Profile_updated'] . '<br /><br />' . sprintf($lang['Click_return_index'],  '<a href="' . append_sid("index.$phpEx") . '">', '</a>');
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedFunction */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedFunction */ $template->assign_vars(array(
				/* @phpstan-ignore-line */ "META" => '<meta http-equiv="refresh" content="5;url=' . append_sid("index.$phpEx") . '">')
			);

			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_MESSAGE, $message);
		}
		else
		{
			$sql = "SELECT MAX(user_id) AS total
				FROM " /* @phpstan-ignore-line */ . USERS_TABLE;
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( !($result = $db->sql_query($sql)) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not obtain next user_id information', '', __LINE__, __FILE__, $sql);
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( !($row = $db->sql_fetchrow($result)) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not obtain next user_id information', '', __LINE__, __FILE__, $sql);
			}
			$user_id = $row['total'] + 1;

			//
			// Get current date
			//
			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyInvalidOperand, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyInvalidOperand, PossiblyUndefinedGlobalVariable */ $sql = "INSERT INTO " . USERS_TABLE . "	(user_id, username, user_regdate, user_password, user_email, user_icq, user_website, user_occ, user_from, user_interests, user_sig, user_sig_bbcode_uid, user_avatar, user_avatar_type, user_viewemail, user_aim, user_yim, user_msnm, user_attachsig, user_allowsmile, user_allowhtml, user_allowbbcode, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_timezone, user_dateformat, user_lang, user_style, user_level, user_allow_pm, user_active, user_actkey)
				VALUES ($user_id, '" /* @phpstan-ignore-line */ . str_replace("\'", "''", $username) . "', " . time() . ", '" . str_replace("\'", "''", $new_password) . "', '" . str_replace("\'", "''", $email) . "', '" . str_replace("\'", "''", $icq) . "', '" . str_replace("\'", "''", $website) . "', '" . str_replace("\'", "''", $occupation) . "', '" . str_replace("\'", "''", $location) . "', '" . str_replace("\'", "''", $interests) . "', '" . str_replace("\'", "''", $signature) . "', '$signature_bbcode_uid', $avatar_sql, $viewemail, '" . str_replace("\'", "''", str_replace(' ', '+', $aim)) . "', '" . str_replace("\'", "''", $yim) . "', '" . str_replace("\'", "''", $msn) . "', $attachsig, $allowsmilies, $allowhtml, $allowbbcode, $allowviewonline, $notifyreply, $notifypm, $popup_pm, $user_timezone, '" . str_replace("\'", "''", $user_dateformat) . "', '" . str_replace("\'", "''", $user_lang) . "', $user_style, 0, 1, ";
			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $board_config['require_activation'] == USER_ACTIVATION_SELF || $board_config['require_activation'] == USER_ACTIVATION_ADMIN || $coppa )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ $user_actkey = gen_rand_string(true);
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $key_len = 54 - (strlen($server_url));
				$key_len = ( $key_len > 6 ) ? $key_len : 6;
				$user_actkey = substr($user_actkey, 0, $key_len);
				$sql .= "0, '" . str_replace("\'", "''", $user_actkey) . "')";
			}
			else
			{
				$sql .= "1, '')";
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ if ( !($result = $db->sql_query($sql, BEGIN_TRANSACTION)) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not insert data into users table', '', __LINE__, __FILE__, $sql);
			}

			/* @phpstan-ignore-line */ $sql = "INSERT INTO " . GROUPS_TABLE . " (group_name, group_description, group_single_user, group_moderator)
				VALUES ('', 'Personal User', 1, 0)";
			/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ if ( !($result = $db->sql_query($sql)) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not insert data into groups table', '', __LINE__, __FILE__, $sql);
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $group_id = $db->sql_nextid();

			/* @phpstan-ignore-line */ $sql = "INSERT INTO " . USER_GROUP_TABLE . " (user_id, group_id, user_pending)
				VALUES ($user_id, $group_id, 0)";
			/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ if( !($result = $db->sql_query($sql, END_TRANSACTION)) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not insert data into user_group table', '', __LINE__, __FILE__, $sql);
			}

			if ( $coppa )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $message = $lang['COPPA'];
				$email_template = 'coppa_welcome_inactive';
			}
			/* @phpstan-ignore-line */ else /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $board_config['require_activation'] == USER_ACTIVATION_SELF )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $message = $lang['Account_inactive'];
				$email_template = 'user_welcome_inactive';
			}
			/* @phpstan-ignore-line */ else /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $board_config['require_activation'] == USER_ACTIVATION_ADMIN )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $message = $lang['Account_inactive_admin'];
				$email_template = 'admin_welcome_inactive';
			}
			else
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $message = $lang['Account_added'];
				$email_template = 'user_welcome';
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/emailer.'.$phpEx);
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UndefinedClass, PossiblyUndefinedGlobalVariable */ $emailer = new emailer($board_config['smtp_delivery']);

			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->from($board_config['board_email']);
			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->replyto($board_config['board_email']);

			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->use_template($email_template, stripslashes($user_lang));
			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedVariable, UndefinedClass */ $emailer->email_address($email);
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->set_subject(sprintf($lang['Welcome_subject'], $board_config['sitename']));

			if( $coppa )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable, PossiblyInvalidCast, PossiblyInvalidArgument, DuplicateArrayKey, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable, PossiblyInvalidCast, PossiblyInvalidArgument, DuplicateArrayKey, UndefinedClass */ $emailer->assign_vars(array(
					/* @phpstan-ignore-line */ 'SITENAME' => $board_config['sitename'],
					/* @phpstan-ignore-line */ 'WELCOME_MSG' => sprintf($lang['Welcome_subject'], $board_config['sitename']),
					/* @phpstan-ignore-line */ 'USERNAME' => preg_replace($unhtml_specialchars_match, $unhtml_specialchars_replace, substr(str_replace("\'", "'", $username), 0, 25)),
					/* @phpstan-ignore-line */ 'PASSWORD' => $password_confirm,
					/* @phpstan-ignore-line */ 'EMAIL_SIG' => str_replace('<br />', "\n", "-- \n" . $board_config['board_email_sig']),

					/* @phpstan-ignore-line */ 'FAX_INFO' => $board_config['coppa_fax'],
					/* @phpstan-ignore-line */ 'MAIL_INFO' => $board_config['coppa_mail'],
					/* @phpstan-ignore-line */ 'EMAIL_ADDRESS' => $email,
					/* @phpstan-ignore-line */ 'ICQ' => $icq,
					/* @phpstan-ignore-line */ 'AIM' => $aim,
					/* @phpstan-ignore-line */ 'YIM' => $yim,
					/* @phpstan-ignore-line */ 'MSN' => $msn,
					'WEB_SITE' => $website,
					/* @phpstan-ignore-line */ 'FROM' => $location,
					/* @phpstan-ignore-line */ 'OCC' => $occupation,
					/* @phpstan-ignore-line */ 'INTERESTS' => $interests,
					/* @phpstan-ignore-line */ 'SITENAME' => $board_config['sitename']));
			}
			else
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable, PossiblyInvalidCast, PossiblyInvalidArgument, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable, PossiblyInvalidCast, PossiblyInvalidArgument, UndefinedClass */ $emailer->assign_vars(array(
					/* @phpstan-ignore-line */ 'SITENAME' => $board_config['sitename'],
					/* @phpstan-ignore-line */ 'WELCOME_MSG' => sprintf($lang['Welcome_subject'], $board_config['sitename']),
					/* @phpstan-ignore-line */ 'USERNAME' => preg_replace($unhtml_specialchars_match, $unhtml_specialchars_replace, substr(str_replace("\'", "'", $username), 0, 25)),
					/* @phpstan-ignore-line */ 'PASSWORD' => $password_confirm,
					/* @phpstan-ignore-line */ 'EMAIL_SIG' => str_replace('<br />', "\n", "-- \n" . $board_config['board_email_sig']),

					/* @phpstan-ignore-line */ 'U_ACTIVATE' => $server_url . '?mode=activate&' . POST_USERS_URL . '=' . $user_id . '&act_key=' . $user_actkey)
				);
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->send();
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->reset();

			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $board_config['require_activation'] == USER_ACTIVATION_ADMIN )
			{
				$sql = "SELECT user_email, user_lang 
					FROM " /* @phpstan-ignore-line */ . USERS_TABLE . "
					WHERE user_level = " /* @phpstan-ignore-line */ . ADMIN;
				
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ( !($result = $db->sql_query($sql)) )
				{
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not select Administrators', '', __LINE__, __FILE__, $sql);
				}
				
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ while ($row = $db->sql_fetchrow($result))
				{
					/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->from($board_config['board_email']);
					/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedClass */ $emailer->replyto($board_config['board_email']);
					
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->email_address(trim($row['user_email']));
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->use_template("admin_activate", $row['user_lang']);
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedClass */ $emailer->set_subject($lang['New_account_subject']);

					/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyInvalidCast, PossiblyInvalidArgument, PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable, UndefinedClass */ /** @psalm-suppress PossiblyInvalidCast, PossiblyInvalidArgument, PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable, UndefinedClass */ $emailer->assign_vars(array(
						/* @phpstan-ignore-line */ 'USERNAME' => preg_replace($unhtml_specialchars_match, $unhtml_specialchars_replace, substr(str_replace("\'", "'", $username), 0, 25)),
						/* @phpstan-ignore-line */ 'EMAIL_SIG' => str_replace('<br />', "\n", "-- \n" . $board_config['board_email_sig']),

						/* @phpstan-ignore-line */ 'U_ACTIVATE' => $server_url . '?mode=activate&' . POST_USERS_URL . '=' . $user_id . '&act_key=' . $user_actkey)
					);
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->send();
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $emailer->reset();
				}
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $db->sql_freeresult($result);
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedFunction */ /** @psalm-suppress UndefinedGlobalVariable, UndefinedFunction */ $message = $message . '<br /><br />' . sprintf($lang['Click_return_index'],  '<a href="' . append_sid("index.$phpEx") . '">', '</a>');

			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_MESSAGE, $message);
		} // if mode == register
	}
} // End of submit


if ( $error )
{
	//
	// If an error occured we need to stripslashes on returned data // codespell:ignore occured
	//
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $username = stripslashes($username);
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $email = stripslashes($email);
	$cur_password = '';
	$new_password = '';
	$password_confirm = '';

	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $icq = stripslashes($icq);
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $aim = str_replace('+', ' ', stripslashes($aim));
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $msn = stripslashes($msn);
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $yim = stripslashes($yim);

	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $website = stripslashes($website);
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $location = stripslashes($location);
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $occupation = stripslashes($occupation);
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $interests = stripslashes($interests);
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $signature = stripslashes($signature);
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $signature = ($signature_bbcode_uid != '') ? preg_replace("/:(([a-z0-9]+:)?)$signature_bbcode_uid(=|\])/si", '\\3', $signature) : $signature;

	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $user_lang = stripslashes($user_lang);
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $user_dateformat = stripslashes($user_dateformat);

}
/* @phpstan-ignore-line */ else if ( $mode == 'editprofile' && !isset($HTTP_POST_VARS['avatargallery']) && !isset($HTTP_POST_VARS['submitavatar']) && !isset($HTTP_POST_VARS['cancelavatar']) )
{
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_id = $userdata['user_id'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $username = $userdata['username'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $email = $userdata['user_email'];
	$cur_password = '';
	$new_password = '';
	$password_confirm = '';

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $icq = $userdata['user_icq'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $aim = str_replace('+', ' ', $userdata['user_aim']);
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $msn = $userdata['user_msnm'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $yim = $userdata['user_yim'];

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $website = $userdata['user_website'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $location = $userdata['user_from'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $occupation = $userdata['user_occ'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $interests = $userdata['user_interests'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $signature_bbcode_uid = $userdata['user_sig_bbcode_uid'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $signature = ($signature_bbcode_uid != '') ? preg_replace("/:(([a-z0-9]+:)?)$signature_bbcode_uid(=|\])/si", '\\3', $userdata['user_sig']) : $userdata['user_sig'];

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $viewemail = $userdata['user_viewemail'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $notifypm = $userdata['user_notify_pm'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $popup_pm = $userdata['user_popup_pm'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $notifyreply = $userdata['user_notify'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $attachsig = $userdata['user_attachsig'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowhtml = $userdata['user_allowhtml'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowbbcode = $userdata['user_allowbbcode'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowsmilies = $userdata['user_allowsmile'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $allowviewonline = $userdata['user_allow_viewonline'];

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_avatar = ( $userdata['user_allowavatar'] ) ? $userdata['user_avatar'] : '';
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_avatar_type = ( $userdata['user_allowavatar'] ) ? $userdata['user_avatar_type'] : USER_AVATAR_NONE;

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_style = $userdata['user_style'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_lang = $userdata['user_lang'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_timezone = $userdata['user_timezone'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $user_dateformat = $userdata['user_dateformat'];
}

//
// Default pages
//
/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/page_header.'.$phpEx);

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ make_jumpbox('viewforum.'.$phpEx);

/* @phpstan-ignore-line */ if ( $mode == 'editprofile' )
{
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedGlobalVariable */ if ( $user_id != $userdata['user_id'] )
	{
		$error = TRUE;
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $error_msg = $lang['Wrong_Profile'];
	}
}

if( isset($HTTP_POST_VARS['avatargallery']) && !$error )
{
	/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/usercp_avatar.'.$phpEx);

	$avatar_category = ( !empty($HTTP_POST_VARS['avatarcategory']) ) ? htmlspecialchars($HTTP_POST_VARS['avatarcategory']) : '';

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->set_filenames(array(
		'body' => 'profile_avatar_gallery.tpl')
	);

	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $allowviewonline = !$allowviewonline;

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UndefinedFunction, PossiblyUndefinedVariable, UndefinedGlobalVariable */ display_avatar_gallery($mode, $avatar_category, $user_id, $email, $current_email, $coppa, $username, $email, $new_password, $cur_password, $password_confirm, $icq, $aim, $msn, $yim, $website, $location, $occupation, $interests, $signature, $viewemail, $notifypm, $popup_pm, $notifyreply, $attachsig, $allowhtml, $allowbbcode, $allowsmilies, $allowviewonline, $user_style, $user_lang, $user_timezone, $user_dateformat, $userdata['session_id']);
}
else
{
	/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/functions_selects.'.$phpEx);

	/* @phpstan-ignore-line */ /** @psalm-suppress TypeDoesNotContainNull */ /** @psalm-suppress TypeDoesNotContainNull */ if ( !isset($coppa) )
	{
		$coppa = FALSE;
	}

	if ( !isset($user_style) )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $user_style = $board_config['default_style'];
	}

	$avatar_img = '';
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $user_avatar_type )
	{
		switch( $user_avatar_type )
		{
			/* @phpstan-ignore-line */ case USER_AVATAR_UPLOAD:
				/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $avatar_img = ( $board_config['allow_avatar_upload'] ) ? '<img src="' . $board_config['avatar_path'] . '/' . $user_avatar . '" alt="" />' : '';
				break;
			/* @phpstan-ignore-line */ case USER_AVATAR_REMOTE:
				/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $avatar_img = ( $board_config['allow_avatar_remote'] ) ? '<img src="' . $user_avatar . '" alt="" />' : '';
				break;
			/* @phpstan-ignore-line */ case USER_AVATAR_GALLERY:
				/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $avatar_img = ( $board_config['allow_avatar_local'] ) ? '<img src="' . $board_config['avatar_gallery_path'] . '/' . $user_avatar . '" alt="" />' : '';
				break;
		}
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress InvalidOperand */ /** @psalm-suppress InvalidOperand */ $s_hidden_fields = '<input type="hidden" name="mode" value="' . $mode . '" /><input type="hidden" name="agreed" value="true" /><input type="hidden" name="coppa" value="' . $coppa . '" />';
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $s_hidden_fields .= '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" />';
	/* @phpstan-ignore-line */ if( $mode == 'editprofile' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $s_hidden_fields .= '<input type="hidden" name="user_id" value="' . $userdata['user_id'] . '" />';
		//
		// Send the users current email address. If they change it, and account activation is turned on
		// the user account will be disabled and the user will have to reactivate their account.
		//
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $s_hidden_fields .= '<input type="hidden" name="current_email" value="' . $userdata['user_email'] . '" />';
	}

	if ( !empty($user_avatar_local) )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $s_hidden_fields .= '<input type="hidden" name="avatarlocal" value="' . $user_avatar_local . '" /><input type="hidden" name="avatarcatname" value="' . $user_avatar_category . '" />';
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ $html_status =  ( $userdata['user_allowhtml'] && $board_config['allow_html'] ) ? $lang['HTML_is_ON'] : $lang['HTML_is_OFF'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ $bbcode_status = ( $userdata['user_allowbbcode'] && $board_config['allow_bbcode']  ) ? $lang['BBCode_is_ON'] : $lang['BBCode_is_OFF'];
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ $smilies_status = ( $userdata['user_allowsmile'] && $board_config['allow_smilies']  ) ? $lang['Smilies_are_ON'] : $lang['Smilies_are_OFF'];

	if ( $error )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->set_filenames(array(
			'reg_header' => 'error_body.tpl')
		);
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_vars(array(
			'ERROR_MESSAGE' => $error_msg)
		);
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_var_from_handle('ERROR_BOX', 'reg_header');
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->set_filenames(array(
		'body' => 'profile_add_body.tpl')
	);

	/* @phpstan-ignore-line */ if ( $mode == 'editprofile' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_block_vars('switch_edit_profile', array());
	}

	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( ($mode == 'register') || ($board_config['allow_namechange']) )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_block_vars('switch_namechange_allowed', array());
	}
	else
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_block_vars('switch_namechange_disallowed', array());
	}


	// Visual Confirmation
	$confirm_image = '';
	/* @phpstan-ignore-line */ if (!empty($board_config['enable_confirm']) && $mode == 'register')
	{
		$sql = 'SELECT session_id 
			FROM ' /* @phpstan-ignore-line */ . SESSIONS_TABLE; 
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if (!($result = $db->sql_query($sql)))
		{
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not select session data', '', __LINE__, __FILE__, $sql);
		}

		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ($row = $db->sql_fetchrow($result))
		{
			$confirm_sql = '';
			/** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ do
			{
				$confirm_sql .= (($confirm_sql != '') ? ', ' : '') . "'" . $row['session_id'] . "'";
			}
			/* @phpstan-ignore-line */ while ($row = $db->sql_fetchrow($result));
		
			/* @phpstan-ignore-line */ $sql = 'DELETE FROM ' .  CONFIRM_TABLE . " 
				WHERE session_id NOT IN ($confirm_sql)";
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if (!$db->sql_query($sql))
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not delete stale confirm data', '', __LINE__, __FILE__, $sql);
			}
		}
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $db->sql_freeresult($result);

		/** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $sql = 'SELECT COUNT(session_id) AS attempts 
			FROM ' /* @phpstan-ignore-line */ . CONFIRM_TABLE . " 
			WHERE session_id = '" /* @phpstan-ignore-line */ . $userdata['session_id'] . "'";
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if (!($result = $db->sql_query($sql)))
		{
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not obtain confirm code count', '', __LINE__, __FILE__, $sql);
		}

		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if ($row = $db->sql_fetchrow($result))
		{
			if ($row['attempts'] > 3)
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ message_die(GENERAL_MESSAGE, $lang['Too_many_registers']);
			}
		}
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $db->sql_freeresult($result);
		
		// Generate the required confirmation code
		// NB 0 (zero) could get confused with O (the letter) so we make change it
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ $code = dss_rand();
		$code = substr(str_replace('0', 'Z', strtoupper(base_convert($code, 16, 35))), 2, 6);

		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $confirm_id = md5(uniqid($user_ip));

		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $sql = 'INSERT INTO ' . CONFIRM_TABLE . " (confirm_id, session_id, code) 
			VALUES ('$confirm_id', '"/* @phpstan-ignore-line */ . $userdata['session_id'] . "', '$code')";
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if (!$db->sql_query($sql))
		{
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ /** @psalm-suppress UndefinedFunction */ message_die(GENERAL_ERROR, 'Could not insert new confirm code information', '', __LINE__, __FILE__, $sql);
		}

		unset($code);
		
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ /** @psalm-suppress UndefinedFunction, UndefinedGlobalVariable */ $confirm_image = '<img src="' . append_sid("profile.$phpEx?mode=confirm&amp;id=$confirm_id") . '" alt="" title="" />';
		$s_hidden_fields .= '<input type="hidden" name="confirm_id" value="' . $confirm_id . '" />';

		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_block_vars('switch_confirm', array());
	}


	//
	// Let's do an overall check for settings/versions which would prevent
	// us from doing file uploads....
	//
	$ini_val = ( phpversion() >= '4.0.0' ) ? 'ini_get' : 'get_cfg_var';
	/* @phpstan-ignore-line */ /** @psalm-suppress InvalidScalarArgument, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress InvalidScalarArgument, PossiblyUndefinedGlobalVariable */ $form_enctype = ( @$ini_val('file_uploads') == '0' || strtolower(@$ini_val('file_uploads') == 'off') || phpversion() == '4.0.4pl1' || !$board_config['allow_avatar_upload'] || ( phpversion() < '4.0.3' && @$ini_val('open_basedir') != '' ) ) ? '' : 'enctype="multipart/form-data"';

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable, UndefinedFunction, PossiblyUndefinedVariable */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable, UndefinedFunction, PossiblyUndefinedVariable */ $template->assign_vars(array(
		'USERNAME' => isset($username) ? $username : '',
		'CUR_PASSWORD' => isset($cur_password) ? $cur_password : '',
		'NEW_PASSWORD' => isset($new_password) ? $new_password : '',
		'PASSWORD_CONFIRM' => isset($password_confirm) ? $password_confirm : '',
		'EMAIL' => isset($email) ? $email : '',
		'CONFIRM_IMG' => $confirm_image, 
		/* @phpstan-ignore-line */ 'YIM' => $yim,
		/* @phpstan-ignore-line */ 'ICQ' => $icq,
		/* @phpstan-ignore-line */ 'MSN' => $msn,
		/* @phpstan-ignore-line */ 'AIM' => $aim,
		/* @phpstan-ignore-line */ 'OCCUPATION' => $occupation,
		/* @phpstan-ignore-line */ 'INTERESTS' => $interests,
		/* @phpstan-ignore-line */ 'LOCATION' => $location,
		/* @phpstan-ignore-line */ 'WEBSITE' => $website,
		/* @phpstan-ignore-line */ 'SIGNATURE' => str_replace('<br />', "\n", $signature),
		/* @phpstan-ignore-line */ 'VIEW_EMAIL_YES' => ( $viewemail ) ? 'checked="checked"' : '',
		'VIEW_EMAIL_NO' => ( !$viewemail ) ? 'checked="checked"' : '',
		/* @phpstan-ignore-line */ 'HIDE_USER_YES' => ( !$allowviewonline ) ? 'checked="checked"' : '',
		'HIDE_USER_NO' => ( $allowviewonline ) ? 'checked="checked"' : '',
		/* @phpstan-ignore-line */ 'NOTIFY_PM_YES' => ( $notifypm ) ? 'checked="checked"' : '',
		'NOTIFY_PM_NO' => ( !$notifypm ) ? 'checked="checked"' : '',
		/* @phpstan-ignore-line */ 'POPUP_PM_YES' => ( $popup_pm ) ? 'checked="checked"' : '',
		'POPUP_PM_NO' => ( !$popup_pm ) ? 'checked="checked"' : '',
		/* @phpstan-ignore-line */ 'ALWAYS_ADD_SIGNATURE_YES' => ( $attachsig ) ? 'checked="checked"' : '',
		'ALWAYS_ADD_SIGNATURE_NO' => ( !$attachsig ) ? 'checked="checked"' : '',
		/* @phpstan-ignore-line */ 'NOTIFY_REPLY_YES' => ( $notifyreply ) ? 'checked="checked"' : '',
		'NOTIFY_REPLY_NO' => ( !$notifyreply ) ? 'checked="checked"' : '',
		/* @phpstan-ignore-line */ 'ALWAYS_ALLOW_BBCODE_YES' => ( $allowbbcode ) ? 'checked="checked"' : '',
		'ALWAYS_ALLOW_BBCODE_NO' => ( !$allowbbcode ) ? 'checked="checked"' : '',
		/* @phpstan-ignore-line */ 'ALWAYS_ALLOW_HTML_YES' => ( $allowhtml ) ? 'checked="checked"' : '',
		'ALWAYS_ALLOW_HTML_NO' => ( !$allowhtml ) ? 'checked="checked"' : '',
		/* @phpstan-ignore-line */ 'ALWAYS_ALLOW_SMILIES_YES' => ( $allowsmilies ) ? 'checked="checked"' : '',
		'ALWAYS_ALLOW_SMILIES_NO' => ( !$allowsmilies ) ? 'checked="checked"' : '',
		/* @phpstan-ignore-line */ 'ALLOW_AVATAR' => $board_config['allow_avatar_upload'],
		'AVATAR' => $avatar_img,
		/* @phpstan-ignore-line */ 'AVATAR_SIZE' => $board_config['avatar_filesize'],
		/* @phpstan-ignore-line */ 'LANGUAGE_SELECT' => language_select($user_lang, 'language'),
		/* @phpstan-ignore-line */ 'STYLE_SELECT' => style_select($user_style, 'style'),
		/* @phpstan-ignore-line */ 'TIMEZONE_SELECT' => tz_select($user_timezone, 'timezone'),
		/* @phpstan-ignore-line */ 'DATE_FORMAT' => $user_dateformat,
		'HTML_STATUS' => $html_status,
		/* @phpstan-ignore-line */ 'BBCODE_STATUS' => sprintf($bbcode_status, '<a href="' . append_sid("faq.$phpEx?mode=bbcode") . '" target="_phpbbcode">', '</a>'),
		'SMILIES_STATUS' => $smilies_status,

		/* @phpstan-ignore-line */ 'L_CURRENT_PASSWORD' => $lang['Current_password'],
		/* @phpstan-ignore-line */ 'L_NEW_PASSWORD' => ( $mode == 'register' ) ? $lang['Password'] : $lang['New_password'],
		/* @phpstan-ignore-line */ 'L_CONFIRM_PASSWORD' => $lang['Confirm_password'],
		/* @phpstan-ignore-line */ 'L_CONFIRM_PASSWORD_EXPLAIN' => ( $mode == 'editprofile' ) ? $lang['Confirm_password_explain'] : '',
		/* @phpstan-ignore-line */ 'L_PASSWORD_IF_CHANGED' => ( $mode == 'editprofile' ) ? $lang['password_if_changed'] : '',
		/* @phpstan-ignore-line */ 'L_PASSWORD_CONFIRM_IF_CHANGED' => ( $mode == 'editprofile' ) ? $lang['password_confirm_if_changed'] : '',
		/* @phpstan-ignore-line */ 'L_SUBMIT' => $lang['Submit'],
		/* @phpstan-ignore-line */ 'L_RESET' => $lang['Reset'],
		/* @phpstan-ignore-line */ 'L_ICQ_NUMBER' => $lang['ICQ'],
		/* @phpstan-ignore-line */ 'L_MESSENGER' => $lang['MSNM'],
		/* @phpstan-ignore-line */ 'L_YAHOO' => $lang['YIM'],
		/* @phpstan-ignore-line */ 'L_WEBSITE' => $lang['Website'],
		/* @phpstan-ignore-line */ 'L_AIM' => $lang['AIM'],
		/* @phpstan-ignore-line */ 'L_LOCATION' => $lang['Location'],
		/* @phpstan-ignore-line */ 'L_OCCUPATION' => $lang['Occupation'],
		/* @phpstan-ignore-line */ 'L_BOARD_LANGUAGE' => $lang['Board_lang'],
		/* @phpstan-ignore-line */ 'L_BOARD_STYLE' => $lang['Board_style'],
		/* @phpstan-ignore-line */ 'L_TIMEZONE' => $lang['Timezone'],
		/* @phpstan-ignore-line */ 'L_DATE_FORMAT' => $lang['Date_format'],
		/* @phpstan-ignore-line */ 'L_DATE_FORMAT_EXPLAIN' => $lang['Date_format_explain'],
		/* @phpstan-ignore-line */ 'L_YES' => $lang['Yes'],
		/* @phpstan-ignore-line */ 'L_NO' => $lang['No'],
		/* @phpstan-ignore-line */ 'L_INTERESTS' => $lang['Interests'],
		/* @phpstan-ignore-line */ 'L_ALWAYS_ALLOW_SMILIES' => $lang['Always_smile'],
		/* @phpstan-ignore-line */ 'L_ALWAYS_ALLOW_BBCODE' => $lang['Always_bbcode'],
		/* @phpstan-ignore-line */ 'L_ALWAYS_ALLOW_HTML' => $lang['Always_html'],
		/* @phpstan-ignore-line */ 'L_HIDE_USER' => $lang['Hide_user'],
		/* @phpstan-ignore-line */ 'L_ALWAYS_ADD_SIGNATURE' => $lang['Always_add_sig'],

		/* @phpstan-ignore-line */ 'L_AVATAR_PANEL' => $lang['Avatar_panel'],
		/* @phpstan-ignore-line */ 'L_AVATAR_EXPLAIN' => sprintf($lang['Avatar_explain'], $board_config['avatar_max_width'], $board_config['avatar_max_height'], (round($board_config['avatar_filesize'] / 1024))),
		/* @phpstan-ignore-line */ 'L_UPLOAD_AVATAR_FILE' => $lang['Upload_Avatar_file'],
		/* @phpstan-ignore-line */ 'L_UPLOAD_AVATAR_URL' => $lang['Upload_Avatar_URL'],
		/* @phpstan-ignore-line */ 'L_UPLOAD_AVATAR_URL_EXPLAIN' => $lang['Upload_Avatar_URL_explain'],
		/* @phpstan-ignore-line */ 'L_AVATAR_GALLERY' => $lang['Select_from_gallery'],
		/* @phpstan-ignore-line */ 'L_SHOW_GALLERY' => $lang['View_avatar_gallery'],
		/* @phpstan-ignore-line */ 'L_LINK_REMOTE_AVATAR' => $lang['Link_remote_Avatar'],
		/* @phpstan-ignore-line */ 'L_LINK_REMOTE_AVATAR_EXPLAIN' => $lang['Link_remote_Avatar_explain'],
		/* @phpstan-ignore-line */ 'L_DELETE_AVATAR' => $lang['Delete_Image'],
		/* @phpstan-ignore-line */ 'L_CURRENT_IMAGE' => $lang['Current_Image'],

		/* @phpstan-ignore-line */ 'L_SIGNATURE' => $lang['Signature'],
		/* @phpstan-ignore-line */ 'L_SIGNATURE_EXPLAIN' => sprintf($lang['Signature_explain'], $board_config['max_sig_chars']),
		/* @phpstan-ignore-line */ 'L_NOTIFY_ON_REPLY' => $lang['Always_notify'],
		/* @phpstan-ignore-line */ 'L_NOTIFY_ON_REPLY_EXPLAIN' => $lang['Always_notify_explain'],
		/* @phpstan-ignore-line */ 'L_NOTIFY_ON_PRIVMSG' => $lang['Notify_on_privmsg'],
		/* @phpstan-ignore-line */ 'L_POPUP_ON_PRIVMSG' => $lang['Popup_on_privmsg'],
		/* @phpstan-ignore-line */ 'L_POPUP_ON_PRIVMSG_EXPLAIN' => $lang['Popup_on_privmsg_explain'],
		/* @phpstan-ignore-line */ 'L_PREFERENCES' => $lang['Preferences'],
		/* @phpstan-ignore-line */ 'L_PUBLIC_VIEW_EMAIL' => $lang['Public_view_email'],
		/* @phpstan-ignore-line */ 'L_ITEMS_REQUIRED' => $lang['Items_required'],
		/* @phpstan-ignore-line */ 'L_REGISTRATION_INFO' => $lang['Registration_info'],
		/* @phpstan-ignore-line */ 'L_PROFILE_INFO' => $lang['Profile_info'],
		/* @phpstan-ignore-line */ 'L_PROFILE_INFO_NOTICE' => $lang['Profile_info_warn'],
		/* @phpstan-ignore-line */ 'L_EMAIL_ADDRESS' => $lang['Email_address'],

		/* @phpstan-ignore-line */ 'L_CONFIRM_CODE_IMPAIRED'	=> sprintf($lang['Confirm_code_impaired'], '<a href="mailto:' . $board_config['board_email'] . '">', '</a>'), 
		/* @phpstan-ignore-line */ 'L_CONFIRM_CODE'			=> $lang['Confirm_code'], 
		/* @phpstan-ignore-line */ 'L_CONFIRM_CODE_EXPLAIN'	=> $lang['Confirm_code_explain'], 

		/* @phpstan-ignore-line */ 'S_ALLOW_AVATAR_UPLOAD' => $board_config['allow_avatar_upload'],
		/* @phpstan-ignore-line */ 'S_ALLOW_AVATAR_LOCAL' => $board_config['allow_avatar_local'],
		/* @phpstan-ignore-line */ 'S_ALLOW_AVATAR_REMOTE' => $board_config['allow_avatar_remote'],
		'S_HIDDEN_FIELDS' => $s_hidden_fields,
		'S_FORM_ENCTYPE' => $form_enctype,
		/* @phpstan-ignore-line */ 'S_PROFILE_ACTION' => append_sid("profile.$phpEx"))
	);

	//
	// This is another cheat using the block_var capability
	// of the templates to 'fake' an IF...ELSE...ENDIF solution
	// it works well :)
	//
	/* @phpstan-ignore-line */ if ( $mode != 'register' )
	{
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable, PossiblyUndefinedGlobalVariable */ if ( $userdata['user_allowavatar'] && ( $board_config['allow_avatar_upload'] || $board_config['allow_avatar_local'] || $board_config['allow_avatar_remote'] ) )
		{
			/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_block_vars('switch_avatar_block', array() );

			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedFunction */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedFunction */ if ( $board_config['allow_avatar_upload'] && file_exists(@phpbb_realpath('./' . $board_config['avatar_path'])) )
			{
				if ( $form_enctype != '' )
				{
					/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_block_vars('switch_avatar_block.switch_avatar_local_upload', array() );
				}
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_block_vars('switch_avatar_block.switch_avatar_remote_upload', array() );
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if ( $board_config['allow_avatar_remote'] )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_block_vars('switch_avatar_block.switch_avatar_remote_link', array() );
			}

			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedFunction */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, UndefinedFunction */ if ( $board_config['allow_avatar_local'] && file_exists(@phpbb_realpath('./' . $board_config['avatar_gallery_path'])) )
			{
				/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->assign_block_vars('switch_avatar_block.switch_avatar_local_gallery', array() );
			}
		}
	}
}

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $template->pparse('body');

/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>
<?php // jscpd:ignore-end ?>
