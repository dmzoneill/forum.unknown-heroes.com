<?php
/***************************************************************************
 *                            lang_main.php [Swedish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.8 2007/01/04 14:40:43 virtuality Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//  *************************************
//  First, original Swedish translation by:
//	
//	Marcus Svensson
//      admin@world-of-war.com
//      http://www.world-of-war.com
//	-------------------------------------
// 	Jan�ke R�nnblom
//	jan-ake.ronnblom@skeria.skelleftea.se
//	-------------------------------------
//	Bruce
//	bruce@webway.se
//	-------------------------------------
//      Jakob Persson
//      jakob.persson@iname.com
//      http://www.jakob-persson.com
//
//  *************************************
//  Maintained and kept up-to-date by:
//  
//  Jonathan Gulbrandsen (Virtuality)
//  virtuality@carlssonplanet.com
//  http://www.carlssonplanet.com
//  *************************************
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-1';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] = 'd F Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = '<a href="http://www.phpbb.com/downloads.php#lang" target="_blank" class="gensmall">Swedish translation</a> by <a href="http://www.phpbb-se.com" target="_blank" class="gensmall">phpBB Sweden</a> and <a href="http://www.phpbb.com/phpBB/profile.php?mode=viewprofile&u=37489" target="_blank" title="Jonathan Gulbrandsen" class="gensmall">Virtuality</a> &copy; 2003-' . date('Y');

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategori';
$lang['Topic'] = '�mne';
$lang['Topics'] = '�mnen';
$lang['Replies'] = 'Svar';
$lang['Views'] = 'Visningar';
$lang['Post'] = 'Inl�gg';
$lang['Posts'] = 'Inl�gg';
$lang['Posted'] = 'Postat';
$lang['Username'] = 'Anv�ndarnamn';
$lang['Password'] = 'L�senord';
$lang['Email'] = 'E-post';
$lang['Poster'] = 'Postare';
$lang['Author'] = 'F�rfattare';
$lang['Time'] = 'Tid';
$lang['Hours'] = 'Timmar';
$lang['Message'] = 'Meddelande';

$lang['1_Day'] = '1 dag';
$lang['7_Days'] = '1 vecka';
$lang['2_Weeks'] = '2 veckor';
$lang['1_Month'] = '1 m�nad';
$lang['3_Months'] = '3 m�nader';
$lang['6_Months'] = '6 m�nader';
$lang['1_Year'] = '1 �r';

$lang['Go'] = 'G� till';
$lang['Jump_to'] = 'Hoppa till';
$lang['Submit'] = 'Skicka';
$lang['Reset'] = '�terst�ll';
$lang['Cancel'] = 'Avbryt';
$lang['Preview'] = 'F�rhandsgranska';
$lang['Confirm'] = 'Bekr�fta';
$lang['Spellcheck'] = 'Stavningskontroll';
$lang['Yes'] = 'Ja';
$lang['No'] = 'Nej';
$lang['Enabled'] = 'Aktiverad';
$lang['Disabled'] = 'Inaktiverad';
$lang['Error'] = 'Fel';

$lang['Next'] = 'N�sta';
$lang['Previous'] = 'F�reg�ende';
$lang['Goto_page'] = 'G� till sida';
$lang['Joined'] = 'Registreringsdatum';
$lang['IP_Address'] = 'IP-adress';

$lang['Select_forum'] = 'V�lj forum';
$lang['View_latest_post'] = 'L�s senaste inl�gget';
$lang['View_newest_post'] = 'L�s nyaste inl�gget';
$lang['Page_of'] = 'Sida <b>%d</b> av <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AOL Instant Messenger';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Forumindex';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Skapa nytt �mne';
$lang['Reply_to_topic'] = 'Svara p� �mnet';
$lang['Reply_with_quote'] = 'Svara med citat';

$lang['Click_return_topic'] = 'Klicka %sh�r%s f�r att �terv�nda till �mnet.'; // %s's here are for urls, do not remove!
$lang['Click_return_login'] = 'Klicka %sh�r%s f�r att f�rs�ka igen.';
$lang['Click_return_forum'] = 'Klicka %sh�r%s f�r att �terv�nda till forumet.';
$lang['Click_view_message'] = 'Klicka %sh�r%s f�r att se ditt meddelande.';
$lang['Click_return_modcp'] = 'Klicka %sh�r%s f�r att �terv�nda till Moderatorpanelen.';
$lang['Click_return_group'] = 'Klicka %sh�r%s f�r att �terv�nda till gruppinformationen.';

$lang['Admin_panel'] = 'G� till Administrationspanelen';

$lang['Board_disable'] = 'Det h�r forumet �r tyv�rr otillg�ngligt f�r tillf�llet, var v�nlig f�rs�k senare.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Registrerade anv�ndare online:';
$lang['Browsing_forum'] = 'Anv�ndare online p� forumet just nu:';
$lang['Online_users_zero_total'] = 'Totalt <b>0</b> anv�ndare online :: ';
$lang['Online_users_total'] = 'Totalt <b>%d</b> anv�ndare online :: ';
$lang['Online_user_total'] = 'Totalt <b>%d</b> anv�ndare online :: ';
$lang['Reg_users_zero_total'] = '0 registrerade, ';
$lang['Reg_users_total'] = '%d registrerade, ';
$lang['Reg_user_total'] = '%d registrerad, ';
$lang['Hidden_users_zero_total'] = '0 dolda och ';
$lang['Hidden_user_total'] = '%d dold och ';
$lang['Hidden_users_total'] = '%d dolda och ';
$lang['Guest_users_zero_total'] = '0 g�ster.';
$lang['Guest_users_total'] = '%d g�ster.';
$lang['Guest_user_total'] = '%d g�st.';
$lang['Record_online_users'] = 'Flest anv�ndare online samtidigt: <b>%s</b>, den %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%s<b>Administrat�r</b>%s';
$lang['Mod_online_color'] = '%s<b>Moderator</b>%s';

$lang['You_last_visit'] = 'Senaste bes�k: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Aktuell tid och datum: %s'; // %s replaced by time

$lang['Search_new'] = 'Nya inl�gg sedan ditt senaste bes�k';
$lang['Search_your_posts'] = 'Dina inl�gg';
$lang['Search_unanswered'] = 'Obesvarade �mnen';

$lang['Register'] = 'Bli medlem';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = '�ndra dina inst�llningar';
$lang['Search'] = 'S�k';
$lang['Memberlist'] = 'Medlemslista';
$lang['FAQ'] = 'Vanliga fr�gor';
$lang['BBCode_guide'] = 'BBCode-guide';
$lang['Usergroups'] = 'Anv�ndargrupper';
$lang['Last_Post'] = 'Senaste inl�gget';
$lang['Moderator'] = '<b>Moderator</b>';
$lang['Moderators'] = '<b>Moderatorer</b>';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'V�ra anv�ndare har skrivit totalt <b>0</b> inl�gg.'; // Number of posts
$lang['Posted_articles_total'] = 'V�ra anv�ndare har skrivit totalt <b>%d</b> inl�gg.'; // Number of posts
$lang['Posted_article_total'] = 'V�ra anv�ndare har skrivit totalt <b>%d</b> inl�gg.'; // Number of posts
$lang['Registered_users_zero_total'] = 'Vi har <b>0</b> registrerade anv�ndare.'; // # registered users
$lang['Registered_users_total'] = 'Vi har <b>%d</b> registrerade anv�ndare.'; // # registered users
$lang['Registered_user_total'] = 'Vi har <b>%d</b> registrerad anv�ndare.'; // # registered users
$lang['Newest_user'] = 'V�r nyaste anv�ndare: <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Inga nya inl�gg sedan ditt senaste bes�k.';
$lang['No_new_posts'] = 'Inga nya inl�gg';
$lang['New_posts'] = 'Nya inl�gg';
$lang['New_post'] = 'Nya inl�gg';
$lang['No_new_posts_hot'] = 'Inga nya inl�gg [ Popul�r ]';
$lang['New_posts_hot'] = 'Nya inl�gg [ Popul�r ]';
$lang['No_new_posts_locked'] = 'Inga nya inl�gg [ L�st ]';
$lang['New_posts_locked'] = 'Nya inl�gg [ L�st ]';
$lang['Forum_is_locked'] = 'Forumet �r l�st';


//
// Login
//
$lang['Enter_password'] = 'Skriv in ditt anv�ndarnamn och l�senord f�r att logga in';
$lang['Login'] = 'Logga in';
$lang['Logout'] = 'Logga ut';

$lang['Forgotten_password'] = 'Jag har gl�mt mitt l�senord';

$lang['Log_me_in'] = 'Logga in mig automatiskt';

$lang['Error_login'] = 'Du har skrivit in ett antingen felaktigt eller inaktivt anv�ndarnamn eller ett felaktigt l�senord';


//
// Index page
//
$lang['Index'] = 'Index';
$lang['No_Posts'] = 'Inga inl�gg';
$lang['No_forums'] = 'Inga forum har skapats';

$lang['Private_Message'] = 'Personligt meddelande';
$lang['Private_Messages'] = 'Personliga meddelanden';
$lang['Who_is_Online'] = 'Vem �r online';

$lang['Mark_all_forums'] = 'Markera alla forum som l�sta';
$lang['Forums_marked_read'] = 'Alla forum har nu markerats som l�sta';


//
// Viewforum
//
$lang['View_forum'] = 'Visar forum';

$lang['Forum_not_exist'] = 'Det forum som du valt finns inte.';
$lang['Reached_on_error'] = 'Du har n�tt den h�r sidan p� fel s�tt';

$lang['Display_topics'] = 'Visa �mnen nyare �n';
$lang['All_Topics'] = 'Alla �mnen';

$lang['Topic_Announcement'] = '<b>Viktigt meddelande:</b>';
$lang['Topic_Sticky'] = '<b>Klistrad:</b>';
$lang['Topic_Moved'] = '<b>Flyttad:</b>';
$lang['Topic_Poll'] = '<b>[ Omr�stning ]</b>';

$lang['Mark_all_topics'] = 'Markera alla �mnen som l�sta';
$lang['Topics_marked_read'] = 'Alla �mnen i det h�r forumet har markerats som l�sta';

$lang['Rules_post_can'] = 'Du <b>kan</b> skapa nya inl�gg i det h�r forumet';
$lang['Rules_post_cannot'] = 'Du <b>kan inte</b> skapa nya inl�gg i det h�r forumet';
$lang['Rules_reply_can'] = 'Du <b>kan</b> svara p� inl�gg i det h�r forumet';
$lang['Rules_reply_cannot'] = 'Du <b>kan inte</b> svara p� inl�gg i det h�r forumet';
$lang['Rules_edit_can'] = 'Du <b>kan</b> �ndra dina inl�gg i det h�r forumet';
$lang['Rules_edit_cannot'] = 'Du <b>kan inte</b> �ndra dina inl�gg i det h�r forumet';
$lang['Rules_delete_can'] = 'Du <b>kan</b> ta bort dina inl�gg i det h�r forumet';
$lang['Rules_delete_cannot'] = 'Du <b>kan inte</b> ta bort dina inl�gg i det h�r forumet';
$lang['Rules_vote_can'] = 'Du <b>kan</b> r�sta i det h�r forumet';
$lang['Rules_vote_cannot'] = 'Du <b>kan inte</b> r�sta i det h�r forumet';
$lang['Rules_moderate'] = 'Du <b>�r</b> %smoderator i det h�r forumet%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'Det finns inga �mnen i det h�r forumet.<br />Klicka p� <b>Nytt �mne</b> p� denna sida f�r att skapa ett.';


//
// Viewtopic
//
$lang['View_topic'] = 'L�ser �mne';

$lang['Guest'] = 'G�st';
$lang['Post_subject'] = 'Rubrik';
$lang['View_next_topic'] = 'N�sta �mne';
$lang['View_previous_topic'] = 'F�reg�ende �mne';
$lang['Submit_vote'] = 'Skicka in r�st';
$lang['View_results'] = 'Resultat';

$lang['No_newer_topics'] = 'Det finns inga nyare �mnen i det h�r forumet.';
$lang['No_older_topics'] = 'Det finns inga �ldre �mnen i det h�r forumet.';
$lang['Topic_post_not_exist'] = 'Det s�kta �mnet existerar inte.';
$lang['No_posts_topic'] = 'Det finns inga svar till det h�r �mnet.';

$lang['Display_posts'] = 'Visa inl�gg nyare �n';
$lang['All_Posts'] = 'Alla inl�gg';
$lang['Newest_First'] = 'Nyaste f�rst';
$lang['Oldest_First'] = '�ldsta f�rst';

$lang['Back_to_top'] = 'Till �verst p� sidan';

$lang['Read_profile'] = 'Anv�ndarens profil'; 
$lang['Visit_website'] = 'Bes�k anv�ndarens hemsida';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = '�ndra/Ta bort det h�r inl�gget';
$lang['View_IP'] = 'Anv�ndarens IP';
$lang['Delete_post'] = 'Ta bort det h�r inl�gget';

$lang['wrote'] = 'skrev'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Citat'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Senast �ndrad av %s den %s, �ndrad totalt %d g�ng'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Senast �ndrad av %s den %s, �ndrad totalt %d g�nger'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'L�s det h�r �mnet';
$lang['Unlock_topic'] = 'L�s upp det h�r �mnet';
$lang['Move_topic'] = 'Flytta det h�r �mnet';
$lang['Delete_topic'] = 'Ta bort det h�r �mnet';
$lang['Split_topic'] = 'Dela det h�r �mnet';

$lang['Stop_watching_topic'] = 'Sluta bevaka det h�r �mnet';
$lang['Start_watching_topic'] = 'Bevaka det h�r �mnet f�r svar';
$lang['No_longer_watching'] = 'Du bevakar inte l�ngre det h�r �mnet';
$lang['You_are_watching'] = 'Du bevakar nu det h�r �mnet';

$lang['Total_votes'] = 'Totalt antal r�ster';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Meddelande';
$lang['Topic_review'] = '�mneshistorik';

$lang['No_post_mode'] = 'Inget postningsval specificerat'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Skapa nytt �mne';
$lang['Post_a_reply'] = 'Svara p� �mne';
$lang['Post_topic_as'] = 'Skapa �mne som';
$lang['Edit_Post'] = '�ndra inl�gg';
$lang['Options'] = 'Alternativ';

$lang['Post_Announcement'] = 'Viktigt meddelande';
$lang['Post_Sticky'] = 'Klistrad';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = '�r du s�ker p� att du vill ta bort det h�r inl�gget?';
$lang['Confirm_delete_poll'] = '�r du s�ker p� att du vill ta bort den h�r omr�stningen?';

$lang['Flood_Error'] = 'Du m�ste v�nta lite innan du kan posta ett nytt inl�gg.';
$lang['Empty_subject'] = 'Du m�ste skriva en rubrik om du skapar ett nytt inl�gg.';
$lang['Empty_message'] = 'Du m�ste skriva ett meddelande n�r du postar.';
$lang['Forum_locked'] = 'Det h�r forumet �r l�st s� du kan varken skapa, svara p� eller �ndra inl�gg.';
$lang['Topic_locked'] = 'Det h�r �mnet �r l�st s� du kan varken svara p� eller �ndra det.';
$lang['No_post_id'] = 'Inget inl�ggs ID specificerat';
$lang['No_topic_id'] = 'Du m�ste v�lja ett inl�gg att svara p�';
$lang['No_valid_mode'] = 'Du kan bara skapa, svara p� eller �ndra inl�gg, g� tillbaka och f�rs�k igen.';
$lang['No_such_post'] = 'Inl�gget du letade efter finns inte, g� tillbaka och f�rs�k igen.';
$lang['Edit_own_posts'] = 'Du kan bara �ndra dina egna inl�gg.';
$lang['Delete_own_posts'] = 'Du kan bara ta bort dina egna inl�gg.';
$lang['Cannot_delete_replied'] = 'Du inte ta bort inl�gg som besvarats.';
$lang['Cannot_delete_poll'] = 'Du kan inte ta bort en aktiv omr�stning.';
$lang['Empty_poll_title'] = 'Du m�ste skriva in ett namn p� omr�stningen.';
$lang['To_few_poll_options'] = 'Du m�ste l�gga till minst 2 val i omr�stningen.';
$lang['To_many_poll_options'] = 'Du f�rs�kte l�gga till f�r m�nga val i omr�stningen.';
$lang['Post_has_no_poll'] = 'Detta inl�gg har ingen omr�stning.';
$lang['Already_voted'] = 'Du har redan deltagit i den h�r omr�stningen.';
$lang['No_vote_option'] = 'Du m�ste markera ett alternativ n�r du r�star.';

$lang['Add_poll'] = 'L�gg till omr�stning';
$lang['Add_poll_explain'] = 'Om du inte vill l�gga till n�gon omr�stning till ditt inl�gg, l�mna f�lten tomma.';
$lang['Poll_question'] = 'Omr�stningsfr�ga';
$lang['Poll_option'] = 'Svarsalternativ';
$lang['Add_option'] = 'L�gg till svarsalternativ';
$lang['Update'] = 'Uppdatera';
$lang['Delete'] = 'Ta bort';
$lang['Poll_for'] = 'Antal dagar omr�stningen l�per';
$lang['Days'] = 'dagar'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Ange 0 f�r att skapa en omr�stning som aldrig slutar ]';
$lang['Delete_poll'] = 'Ta bort omr�stning';

$lang['Disable_HTML_post'] = 'Inaktivera HTML i det h�r inl�gget.';
$lang['Disable_BBCode_post'] = 'Inaktivera BBCode i det h�r inl�gget.';
$lang['Disable_Smilies_post'] = 'Inaktivera smilies i det h�r inl�gget.';

$lang['HTML_is_ON'] = 'HTML �r <u>P�</u>';
$lang['HTML_is_OFF'] = 'HTML �r <u>AV</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s �r <u>P�</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s �r <u>AV</u>';
$lang['Smilies_are_ON'] = 'Smilies �r <u>P�</u>';
$lang['Smilies_are_OFF'] = 'Smilies �r <u>AV</u>';

$lang['Attach_signature'] = 'Infoga min signatur (signaturen kan �ndras i profilen).';
$lang['Notify'] = 'Under�tta mig vid svar.';

$lang['Stored'] = 'Ditt meddelande har sparats.';
$lang['Deleted'] = 'Ditt meddelande har tagits bort.';
$lang['Poll_delete'] = 'Din omr�stning har tagits bort.';
$lang['Vote_cast'] = 'Din r�st har r�knats.';

$lang['Topic_reply_notification'] = 'Rapport om svar p� �mne';

$lang['bbcode_b_help'] = 'Fet text: [b]text[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Kursiv text: [i]text[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Understruken text: [u]text[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Citerad text: [quote]text[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Visning av kod: [code]kod[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Ordnad lista: [list=]text[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Infoga bild: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Infoga l�nk: [url]http://url[/url] eller [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'St�ng alla �ppna BBCode taggar';
$lang['bbcode_s_help'] = 'Teckenf�rg: [color=red]text[/color]  Tips: du kan �ven anv�nda color=#FF0000';
$lang['bbcode_f_help'] = 'Teckenstorlek: [size=x-small]liten text[/size]';

$lang['Emoticons'] = 'Smilies';
$lang['More_emoticons'] = 'Fler smilies';

$lang['Font_color'] = 'Teckenf�rg';
$lang['color_default'] = 'Standard';
$lang['color_dark_red'] = 'M�rkr�d';
$lang['color_red'] = 'R�d';
$lang['color_orange'] = 'Orange';
$lang['color_brown'] = 'Brun';
$lang['color_yellow'] = 'Gul';
$lang['color_green'] = 'Gr�n';
$lang['color_olive'] = 'Oliv';
$lang['color_cyan'] = 'Cyan';
$lang['color_blue'] = 'Bl�';
$lang['color_dark_blue'] = 'M�rkbl�';
$lang['color_indigo'] = 'Lila';
$lang['color_violet'] = 'Rosa';
$lang['color_white'] = 'Vit';
$lang['color_black'] = 'Svart';

$lang['Font_size'] = 'Teckenstorlek';
$lang['font_tiny'] = 'Pytteliten';
$lang['font_small'] = 'Liten';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Stor';
$lang['font_huge'] = 'Enorm';

$lang['Close_Tags'] = 'St�ng �ppna taggar';
$lang['Styles_tip'] = 'Tips: Stilar kan snabbt appliceras p� markerad text.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Personliga meddelanden';

$lang['Login_check_pm'] = 'Logga in f�r att l�sa dina meddelanden';
$lang['New_pms'] = 'Du har %d nya meddelanden'; // You have 2 new messages
$lang['New_pm'] = 'Du har %d nytt meddelande'; // You have 1 new message
$lang['No_new_pm'] = 'Du har inga nya meddelanden';
$lang['Unread_pms'] = 'Du har %d ol�sta meddelanden';
$lang['Unread_pm'] = 'Du har %d ol�st meddelande';
$lang['No_unread_pm'] = 'Du har inga ol�sta meddelanden';
$lang['You_new_pm'] = 'Ett nytt meddelande v�ntar p� dig i Inkorgen';
$lang['You_new_pms'] = 'Nya meddelanden v�ntar p� dig i Inkorgen';
$lang['You_no_new_pm'] = 'Inga nya meddelanden v�ntar p� dig';

$lang['Unread_message'] = 'Ol�st meddelande';
$lang['Read_message'] = 'L�st meddelande';

$lang['Read_pm'] = 'L�s meddelande';
$lang['Post_new_pm'] = 'Skicka meddelande';
$lang['Post_reply_pm'] = 'Svara p� meddelande';
$lang['Post_quote_pm'] = 'Citera meddelande';
$lang['Edit_pm'] = '�ndra meddelande';

$lang['Inbox'] = 'Inkorgen';
$lang['Outbox'] = 'Utkorgen';
$lang['Savebox'] = 'Sparat';
$lang['Sentbox'] = 'Skickat';
$lang['Flag'] = 'Flagga';
$lang['Subject'] = 'Rubrik';
$lang['From'] = 'Fr�n';
$lang['To'] = 'Till';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Markera';
$lang['Sent'] = 'Skickad';
$lang['Saved'] = 'Sparat';
$lang['Delete_marked'] = 'Ta bort markerade';
$lang['Delete_all'] = 'Ta bort alla';
$lang['Save_marked'] = 'Spara markerade'; 
$lang['Save_message'] = 'Spara meddelande';
$lang['Delete_message'] = 'Ta bort meddelande';

$lang['Display_messages'] = 'Visa meddelanden nyare �n'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Alla meddelanden';

$lang['No_messages_folder'] = 'Du har inga meddelanden i den h�r mappen.';

$lang['PM_disabled'] = 'Personliga meddelanden har inaktiverats p� detta forum.';
$lang['Cannot_send_privmsg'] = 'Administrat�ren har f�rbjudit dig att skicka personliga meddelanden.';
$lang['No_to_user'] = 'Du m�ste skriva in ett anv�ndarnamn som meddelandet ska skickas till.';
$lang['No_such_user'] = 'Den anv�ndaren finns inte, f�rs�k igen.';

$lang['Disable_HTML_pm'] = 'Inaktivera HTML i det h�r meddelandet.';
$lang['Disable_BBCode_pm'] = 'Inaktivera BBCode i det h�r meddelandet.';
$lang['Disable_Smilies_pm'] = 'Inaktivera smilies i det h�r meddelandet.';

$lang['Message_sent'] = 'Ditt meddelande har skickats.';

$lang['Click_return_inbox'] = 'Klicka %sh�r%s f�r att �terg� till Inkorgen.';
$lang['Click_return_index'] = 'Klicka %sh�r%s f�r att �terg� till index.';

$lang['Send_a_new_message'] = 'Skicka ett nytt personligt meddelande';
$lang['Send_a_reply'] = 'Svara p� ett personligt meddelande';
$lang['Edit_message'] = '�ndra ett personligt meddelande';

$lang['Notification_subject'] = 'Du har f�tt ett personligt meddelande!';

$lang['Find_username'] = 'S�k efter anv�ndarnamn';
$lang['Find'] = 'S�k';
$lang['No_match'] = 'Inga matchande tr�ffar hittades.';

$lang['No_post_id'] = 'Inget inl�ggs ID specificerat';
$lang['No_such_folder'] = 'Den mappen finns inte';
$lang['No_folder'] = 'Ingen mapp specificerad.';

$lang['Mark_all'] = 'Markera alla';
$lang['Unmark_all'] = 'Avmarkera alla';

$lang['Confirm_delete_pm'] = '�r du s�ker p� att du vill ta bort det h�r meddelandet?';
$lang['Confirm_delete_pms'] = '�r du s�ker p� att du vill ta bort de h�r meddelandena?';

$lang['Inbox_size'] = 'Inkorgen �r %d%% full'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Utkorgen �r %d%% full'; 
$lang['Savebox_size'] = 'Sparat �r %d%% full'; 

$lang['Click_view_privmsg'] = 'Klicka %sh�r%s f�r att g� till Inkorgen.';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = '%ss profil'; // %s is username 
$lang['About_user'] = 'Allt om %s'; // %s is username

$lang['Preferences'] = 'Inst�llningar';
$lang['Items_required'] = 'Alla f�lt som �r markerade med * m�ste fyllas i om inte annat anges.';
$lang['Registration_info'] = 'Registreringsinformation';
$lang['Profile_info'] = 'Profilinformation';
$lang['Profile_info_warn'] = 'F�ljande information kommer vara synlig f�r andra.';
$lang['Avatar_panel'] = 'Avatarkontrollpanel';
$lang['Avatar_gallery'] = 'Avatargalleri';

$lang['Website'] = 'Hemsida';
$lang['Location'] = 'Ort';
$lang['Contact'] = 'Kontakta';
$lang['Email_address'] = 'E-postadress';
$lang['Send_private_message'] = 'Skicka personligt meddelande';
$lang['Hidden_email'] = '[ Dold ]';
$lang['Interests'] = 'Intressen';
$lang['Occupation'] = 'Yrke/syssels�ttning'; 
$lang['Poster_rank'] = 'Rank';

$lang['Total_posts'] = 'Totalt antal inl�gg';
$lang['User_post_pct_stats'] = '%.2f%% av det totala'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f inl�gg per dag'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Alla inl�gg som %s gjort'; // Find all posts by username

$lang['No_user_id_specified'] = 'Anv�ndaren du s�kte finns inte.';
$lang['Wrong_Profile'] = 'Du kan inte �ndra en profil som inte �r din egen.';

$lang['Only_one_avatar'] = 'Endast en typ av avatar kan v�ljas.';
$lang['File_no_data'] = 'Filen p� adressen du angav inneh�ll inga data.';
$lang['No_connection_URL'] = 'En anslutning kunde inte g�ras till adressen du angav.';
$lang['Incomplete_URL'] = 'Adressen du angav �r inte fullst�ndig.';
$lang['Wrong_remote_avatar_format'] = 'Adressen till avataren du angav �r ogiltig.';
$lang['No_send_account_inactive'] = 'Ditt l�senord kan inte skickas till dig eftersom ditt konto �r inaktivt. Kontakta administrat�ren f�r mer information.'; 

$lang['Always_smile'] = 'Ha alltid smilies aktiverade';
$lang['Always_html'] = 'Ha alltid HTML aktiverat';
$lang['Always_bbcode'] = 'Ha alltid BBCode aktiverat';
$lang['Always_add_sig'] = 'Infoga alltid min signatur';
$lang['Always_notify'] = 'Underr�tta mig alltid via e-post vid svar';
$lang['Always_notify_explain'] = 'Skickar ett e-postmeddelande till dig n�r n�gon svarar p� ett �mne d�r du har skrivit/svarat. Det h�r kan ocks� st�llas in individuellt vid varje inl�gg du g�r.';

$lang['Board_style'] = 'Forumstil';
$lang['Board_lang'] = 'Forumspr�k';
$lang['No_themes'] = 'Inga teman i databasen';
$lang['Timezone'] = 'Tidszon';
$lang['Date_format'] = 'Datumformat';
$lang['Date_format_explain'] = 'Anv�nd PHPs <a href="http://www.php.net/date" target="_other">date()</a>-funktion f�r detta f�lt.';
$lang['Signature'] = 'Signatur';
$lang['Signature_explain'] = 'Det h�r �r ett stycke text som kan l�ggas till automatiskt i slutet p� alla inl�gg du postar. Signaturen kan inte vara l�ngre �n %d tecken.';
$lang['Public_view_email'] = 'Visa alltid min e-postadress';

$lang['Current_password'] = 'Nuvarande l�senord';
$lang['New_password'] = 'Nytt l�senord';
$lang['Confirm_password'] = 'Bekr�fta nytt l�senord';
$lang['Confirm_password_explain'] = 'Du m�ste ange ditt nuvarande l�senord om du vill �ndra ditt l�senord eller din e-postadress.';
$lang['password_if_changed'] = 'Du m�ste bara fylla i ett l�senord om du t�nker �ndra det.';
$lang['password_confirm_if_changed'] = 'Du m�ste bara bekr�fta ditt l�senord om du t�nker �ndra det.';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Visar en liten bild precis under dina detaljer i dina inl�gg. Endast en bild kan visas �t g�ngen, bredden f�r inte vara st�rre �n %d pixlar, h�jden f�r inte vara st�rre �n %d pixlar och filstorleken f�r inte vara st�rre �n %d KB.';
$lang['Upload_Avatar_file'] = 'Ladda upp en avatar fr�n din dator';
$lang['Upload_Avatar_URL'] = 'Ladda upp en avatar fr�n en webbadress';
$lang['Upload_Avatar_URL_explain'] = 'Skriv in webbadressen d�r avatarbilden finns, bilden kommer att kopieras till det h�r forumet.';
$lang['Pick_local_Avatar'] = 'V�lj en avatar fr�n galleriet';
$lang['Link_remote_Avatar'] = 'L�nka till en avatar p� en annan sida';
$lang['Link_remote_Avatar_explain'] = 'Skriv in webbadressen d�r avatarbilden som du vill l�nka till finns p�.';
$lang['Avatar_URL'] = 'Adress till avatarbild';
$lang['Select_from_gallery'] = 'V�lj en avatar fr�n galleriet';
$lang['View_avatar_gallery'] = 'Visa galleriet';

$lang['Select_avatar'] = 'V�lj avatar';
$lang['Return_profile'] = 'Avbryt';
$lang['Select_category'] = 'V�lj kategori';

$lang['Delete_Image'] = 'Ta bort bild';
$lang['Current_Image'] = 'Nuvarande bild';

$lang['Notify_on_privmsg'] = 'Under�tta mig via e-post vid nytt personligt meddelande';
$lang['Popup_on_privmsg'] = '�ppna ett nytt f�nster vid nytt personligt meddelande'; 
$lang['Popup_on_privmsg_explain'] = 'Vissa forumstilar kan automatiskt �ppna ett nytt f�nster n�r ett nytt personligt meddelande ankommer.';
$lang['Hide_user'] = 'D�lj min onlinestatus';

$lang['Profile_updated'] = 'Din profil har uppdaterats.';
$lang['Profile_updated_inactive'] = 'Din profil har uppdaterats, men eftersom att du �ndrade viktiga detaljer har ditt konto nu inaktiverats. Ett e-postmeddelande har skickats ut till din e-postadress, f�lj instruktionerna d�r f�r att aktivera ditt konto igen. Eller om administrationsaktivering �r aktiverad, s� m�ste du v�nta tills administrat�ren aktiverat ditt konto igen.';

$lang['Password_mismatch'] = 'L�senorden du skrev in st�mde inte �verens.';
$lang['Current_password_mismatch'] = 'Ditt nuvarande l�senord st�mmer inte med vad du skrev in.';
$lang['Password_long'] = 'Ditt l�senord kan inte vara l�ngre �n 32 tecken.';
$lang['Username_taken'] = 'Tyv�rr var anv�ndarnamnet du valde upptaget.';
$lang['Username_invalid'] = 'Ditt anv�ndarnamn inneh�ller ett ogiltigt tecken som t.ex. \"';
$lang['Username_disallowed'] = 'Anv�ndarnamnet du valde �r otill�tet.';
$lang['Email_taken'] = 'Den e-postadressen �r redan registrerad hos oss.';
$lang['Email_banned'] = 'E-postadressen du f�rs�kte registrera dig med �r avst�ngd fr�n forumet.';
$lang['Email_invalid'] = 'E-postadressen �r felaktig.';
$lang['Signature_too_long'] = 'Signaturen du skrev in �r f�r l�ng.';
$lang['Fields_empty'] = 'Du m�ste fylla i alla f�lt som �r markerade med *.';
$lang['Avatar_filetype'] = 'Avatarfiltypen m�ste vara .jpg, .gif eller .png';
$lang['Avatar_filesize'] = 'Avatarfilstorleken m�ste vara mindre �n %d kB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Avataren m�ste vara mindre �n %d pixlar bred och %d pixlar h�g'; 

$lang['Welcome_subject'] = 'V�lkommen till %s'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Nytt anv�ndarkonto';
$lang['Account_activated_subject'] = 'Ditt konto har aktiverats';

$lang['Account_added'] = 'Tack f�r att du registrerade dig, ditt konto har skapats. Du kan nu logga in med ditt anv�ndarnamn och l�senord.';
$lang['Account_inactive'] = 'Tack f�r att du registrerade dig, ditt konto har skapats. Innan du kan anv�nda ditt konto m�ste du aktivera det, en aktiveringskod har skickats till e-postadressen du angav vid registreringen. Kolla din e-post f�r vidare information.';
$lang['Account_inactive_admin'] = 'Ditt konto har skapats. Det h�r forumet kr�ver dock att administrat�ren aktiverar ditt konto innan du kan anv�nda det. Ett e-postmeddelande har skickats till administrat�ren och du kommer att bli informerad via e-post n�r ditt konto aktiverats.';
$lang['Account_active'] = 'Ditt konto har nu aktiverats. Tack f�r att du registrerade dig.';
$lang['Account_active_admin'] = 'Kontot har nu aktiverats.';
$lang['Reactivate'] = '�teraktivera ditt konto!';
$lang['Already_activated'] = 'Du har redan aktiverat ditt konto!';
$lang['COPPA'] = 'Ditt konto har skapats men m�ste godk�nnas, kolla din e-post f�r vidare information.';

$lang['Registration'] = 'Registreringsavtal';
$lang['Reg_agreement'] = 'Fast�n administrat�rer och moderatorer p� det h�r forumet f�rs�ker att ta bort eller �ndra allt st�rande eller st�tande material s� fort som m�jligt, �r det om�jligt att g� igenom alla meddelanden. Vi vill d�rf�r meddela dig om att alla inl�gg som skrivits p� detta forum uttrycker vad f�rfattaren t�nker och tycker, och administrat�rer eller moderatorer skall inte st� till ansvar f�r det (f�rutom d� f�r de meddelanden som de sj�lva skrivit).<br /><br /> Du g�r med p� att inte posta n�got st�rande, st�tande, vulg�rt, hatiskt, hotande, sexuellt anspelande eller n�got annat material som kan t�nkas bryta mot n�gon till�mplig lag. Om du bryter mot detta kan det leda till att du blir permanent avst�ngd fr�n forumen (och din internetleverant�r kontaktas). Varje meddelandes IP-adress sparas f�r att st�rka de h�r vilkoren. Du g�r med p� att webmaster, administrat�r och moderatorer har r�tt att ta bort, �ndra, flytta eller st�nga vilka inl�gg som helst, n�r som helst. Som en anv�ndare g�r du med p� att all information som du skrivit in sparas i databasen. Den informationen kommer inte att distruberas till n�gon tredje part utan ditt samtycke. Webmastern, administrat�ren eller moderatorer kan inte h�llas ansvariga vid intr�ngsf�rs�k som kan leda till att data stj�ls. <br /><br />Det h�r forumsystemet anv�nder cookies till att spara information p� din dator. Desssa cookies inneh�ller inte n�got av den information du skrivit in ovan, utan de anv�nds endast f�r att g�ra din anv�ndning av forumet b�ttre. E-postadressen anv�nds bara f�r att aktivera din registrering (och f�r att skicka ett nytt l�senord till dig om du r�kar gl�mma det).<br /><br /> Genom att klicka p� Registrera nedan g�r du med p� att bindas till dessa villkor.';

$lang['Agree_under_13'] = 'Jag accepterar villkoren och �r <b>under</b> 13 �r';
$lang['Agree_over_13'] = 'Jag accepterar villkoren och �r <b>�ver</b> eller <b>exakt</b> 13 �r';
$lang['Agree_not'] = 'Jag g�r inte med p� de h�r vilkoren';

$lang['Wrong_activation'] = 'Aktiveringskoden du angav matchar inte med den i databasen';
$lang['Send_password'] = 'Skicka ett nytt l�senord till mig'; 
$lang['Password_updated'] = 'Ett nytt l�senord har skapats, kolla din e-post f�r mer information om hur du skall aktivera det';
$lang['No_email_match'] = 'E-postadressen som du angav matchar inte med den som �r listad med det anv�ndarnamnet';
$lang['New_password_activation'] = 'Ny l�senordsaktivering';
$lang['Password_activated'] = 'Ditt konto har �teraktiverats. F�r att logga in anv�nd l�senordet som du hittar i e-postmeddelandet du fick';

$lang['Send_email_msg'] = 'Skicka ett e-postmeddelande';
$lang['No_user_specified'] = 'Ingen anv�ndare specificerad';
$lang['User_prevent_email'] = 'Den h�r anv�ndaren vill inte ta emot e-post. F�rs�k att skicka ett personligt meddelande ist�llet.';
$lang['User_not_exist'] = 'Den anv�ndaren finns inte';
$lang['CC_email'] = 'Skicka en kopia av det h�r meddelandet till dig sj�lv';
$lang['Email_message_desc'] = 'Det h�r meddelandet kommer att skickas som oformaterad text, inkludera inte n�gon HTML eller BBCode. Svarsadressen f�r det h�r meddelandet kommer att vara din e-postadress.';
$lang['Flood_email_limit'] = 'Du kan inte skicka ett till e-postmeddelande just nu, f�rs�k igen senare.';
$lang['Recipient'] = 'Mottagare';
$lang['Email_sent'] = 'E-postmeddelandet har skickats.';
$lang['Send_email'] = 'Skicka e-post';
$lang['Empty_subject_email'] = 'Du m�ste skriva en rubrik p� e-postmeddelandet.';
$lang['Empty_message_email'] = 'Du m�ste skriva ett meddelande som skall skickas.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Bekr�ftelsekoden du angav var felaktig.';
$lang['Too_many_registers'] = 'Du har �verskridit antalet till�tna registreringsf�rs�k f�r denna session. F�rs�k igen senare.';
$lang['Confirm_code_impaired'] = 'Om du har d�lig syn eller p� annat s�tt inte kan l�sa denna kod, kontakta %sadministrat�ren%s f�r hj�lp.';
$lang['Confirm_code'] = 'Bekr�ftelsekod';
$lang['Confirm_code_explain'] = 'Ange koden exakt s� som du ser den. Koden �r k�nslig f�r stora/sm� bokst�ver, och noll har ett diagonalt streck genom sig.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'V�lj sorteringss�tt';
$lang['Sort'] = 'Sortera';
$lang['Sort_Top_Ten'] = 'Top tio postare';
$lang['Sort_Joined'] = 'Registreringsdatum';
$lang['Sort_Username'] = 'Anv�ndarnamn';
$lang['Sort_Location'] = 'Ort';
$lang['Sort_Posts'] = 'Antal inl�gg';
$lang['Sort_Email'] = 'E-post';
$lang['Sort_Website'] = 'Hemsida';
$lang['Sort_Ascending'] = 'Stigande ordning';
$lang['Sort_Descending'] = 'Fallande ordning';
$lang['Order'] = 'Ordning';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Gruppkontrollpanel';
$lang['Group_member_details'] = 'Gruppmedlemskapsdetaljer';
$lang['Group_member_join'] = 'G� med i en grupp';

$lang['Group_Information'] = 'Gruppinformation';
$lang['Group_name'] = 'Gruppnamn';
$lang['Group_description'] = 'Gruppbeskrivning';
$lang['Group_membership'] = 'Gruppmedlemskap';
$lang['Group_Members'] = 'Gruppmedlemmar';
$lang['Group_Moderator'] = 'Gruppledare';
$lang['Pending_members'] = 'Medlemskapsans�kningar';

$lang['Group_type'] = 'Grupptyp';
$lang['Group_open'] = '�ppen grupp';
$lang['Group_closed'] = 'St�ngd grupp';
$lang['Group_hidden'] = 'Dold grupp';

$lang['Current_memberships'] = 'Grupper du �r med i';
$lang['Non_member_groups'] = 'Grupper du ej �r med i';
$lang['Memberships_pending'] = 'Medlemskapsf�rfr�gningar';

$lang['No_groups_exist'] = 'Det finns inga grupper.';
$lang['Group_not_exist'] = 'Den anv�ndargruppen finns inte.';

$lang['Join_group'] = 'G� med i grupp';
$lang['No_group_members'] = 'Den h�r gruppen har inga medlemmar.';
$lang['Group_hidden_members'] = 'Den h�r gruppen �r dold, du kan inte se dess medlemmar.';
$lang['No_pending_group_members'] = 'Den h�r gruppen har inga medlemskapsans�kningar';
$lang['Group_joined'] = 'Du har nu ans�kt om att bli medlem i den h�r gruppen<br />Du kommer att bli meddelad om du blir godk�nd som medlem eller inte av gruppledaren.';
$lang['Group_request'] = 'En ans�kan om att bli medlem i din grupp har gjorts.';
$lang['Group_approved'] = 'Din ans�kan har godk�nts.';
$lang['Group_added'] = 'Du har lagts till i den h�r anv�ndargruppen.'; 
$lang['Already_member_group'] = 'Du �r redan medlem av den h�r gruppen.';
$lang['User_is_member_group'] = 'Anv�ndaren �r redan medlem i den h�r gruppen.';
$lang['Group_type_updated'] = 'Uppdaterade grupptypen.';

$lang['Could_not_add_user'] = 'Anv�ndaren du valde existerar inte.';
$lang['Could_not_anon_user'] = 'Du kan inte g�ra Anonymous till medlem i gruppen.';

$lang['Confirm_unsub'] = '�r du s�ker p� att du vill l�mna den h�r gruppen?';
$lang['Confirm_unsub_pending'] = 'Ditt medlemskap i den h�r gruppen har �nnu inte godk�nts, �r du s�ker p� att du vill avbryta ans�kan?';

$lang['Unsub_success'] = 'Ditt medlemskap i den h�r gruppen har avbrutits.';

$lang['Approve_selected'] = 'Godk�nn valda';
$lang['Deny_selected'] = 'Avsl� valda';
$lang['Not_logged_in'] = 'Du m�ste logga in f�r att g� med i en grupp.';
$lang['Remove_selected'] = 'Ta bort valda';
$lang['Add_member'] = 'L�gg till medlem';
$lang['Not_group_moderator'] = 'Du �r inte ledare av den h�r gruppen och d�rf�r kan du inte g�ra det h�r.';

$lang['Login_to_join'] = 'Logga in f�r att kontrollera gruppmedlemskap.';
$lang['This_open_group'] = 'Det h�r �r en �ppen grupp, klicka f�r att ans�ka om medlemskap.';
$lang['This_closed_group'] = 'Det h�r �r en st�ngd grupp, inga fler medlemmar accepteras.';
$lang['This_hidden_group'] = 'Det h�r �r en dold grupp, fler medlemmar kan inte l�ggas till automatiskt.';
$lang['Member_this_group'] = 'Du �r medlem i den h�r gruppen.';
$lang['Pending_this_group'] = 'Din ans�kan till denna grupp behandlas.';
$lang['Are_group_moderator'] = 'Du �r gruppledare.';
$lang['None'] = 'Inga';

$lang['Subscribe'] = 'Ans�k om medlemskap';
$lang['Unsubscribe'] = 'L�mna grupp';
$lang['View_Information'] = 'Mer information';


//
// Search
//
$lang['Search_query'] = 'S�kfr�ga';
$lang['Search_options'] = 'S�kalternativ';

$lang['Search_keywords'] = 'Nyckelordss�k';
$lang['Search_keywords_explain'] = 'Du kan anv�nda <u>AND</u> f�r att best�mma vilka ord som m�ste finnas i s�kresultatet, <u>OR</u> f�r att best�mma vilka ord som kan finnas i s�kresultatet och <u>NOT</u> f�r att best�mma ord som inte f�r finnas i s�kresultatet. Anv�nd * som "wildcard" (vad som helst) f�r ofullst�ndiga ord.';
$lang['Search_author'] = 'F�rfattars�k';
$lang['Search_author_explain'] = 'Anv�nd * som "wildcard" (vad som helst) f�r ofullst�ndiga ord.';

$lang['Search_for_any'] = 'S�k efter alla termer eller anv�nd den specificerade fr�gan';
$lang['Search_for_all'] = 'S�k efter alla termer';
$lang['Search_title_msg'] = 'S�k i rubrik och meddelandetext';
$lang['Search_msg_only'] = 'S�k endast i meddelandetext';

$lang['Return_first'] = 'Skriv ut f�rsta'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'tecknen av inl�gget';

$lang['Search_previous'] = 'S�k inl�gg nyare �n'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sortera efter';
$lang['Sort_Time'] = 'Tid skapad';
$lang['Sort_Post_Subject'] = 'Inl�ggsrubrik';
$lang['Sort_Topic_Title'] = '�mnestitel';
$lang['Sort_Author'] = 'F�rfattare';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Visa resultat som';
$lang['All_available'] = 'Alla tillg�ngliga';
$lang['No_searchable_forums'] = 'Du har inte tillst�nd att s�ka p� n�got forum.';

$lang['No_search_match'] = 'Inga tr�ffar p� dina s�kkriterier.';
$lang['Found_search_match'] = '%d tr�ffar'; // eg. Search found 1 match
$lang['Found_search_matches'] = '%d tr�ffar'; // eg. Search found 24 matches

$lang['Search_Flood_Error'] = 'F�r att minska belastningen p� servern har forumadministrat�ren begr�nsat hur ofta man kan utf�ra s�kningar. Var v�nlig v�nta en stund och f�rs�k sedan igen.';

$lang['Close_window'] = 'St�ng f�nster';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Endast %s kan skapa viktiga meddelanden i det h�r forumet.';
$lang['Sorry_auth_sticky'] = 'Endast %s kan skapa klistrade meddelanden i det h�r forumet.'; 
$lang['Sorry_auth_read'] = 'Endast %s kan l�sa �mnen i det h�r forumet.'; 
$lang['Sorry_auth_post'] = 'Endast %s kan skapa nya �mnen i det h�r forumet.'; 
$lang['Sorry_auth_reply'] = 'Endast %s kan svara p� inl�gg i det h�r forumet.';
$lang['Sorry_auth_edit'] = 'Endast %s kan redigera inl�gg i det h�r forumet.'; 
$lang['Sorry_auth_delete'] = 'Endast %s kan ta bort inl�gg fr�n det h�r forumet.';
$lang['Sorry_auth_vote'] = 'Endast %s kan delta i omr�stningar i det h�r forumet.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonyma anv�ndare</b>';
$lang['Auth_Registered_Users'] = '<b>registrerade anv�ndare</b>';
$lang['Auth_Users_granted_access'] = '<b>anv�ndare beviljade �tkomst av administrat�ren</b>';
$lang['Auth_Moderators'] = '<b>moderatorer</b>';
$lang['Auth_Administrators'] = '<b>administrat�rer</b>';

$lang['Not_Moderator'] = 'Du �r inte en moderator i det h�r forumet.';
$lang['Not_Authorised'] = 'Inte legitimerad.';

$lang['You_been_banned'] = 'Du har blivit avst�ngd fr�n detta forum.<br />Kontakta webmastern eller administrat�ren f�r mer information.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 registrerade anv�ndare och '; // There are 5 Registered and
$lang['Reg_users_online'] = '%d registrerade anv�ndare och '; // There are 5 Registered and
$lang['Reg_user_online'] = '%d registrerad anv�ndare och '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '0 dolda anv�ndare online'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d dolda anv�ndare online'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d dold anv�ndare online'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d g�ster online'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '0 g�ster online'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d g�st online'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Det �r inga anv�ndare p� forumet just nu.';

$lang['Online_explain'] = 'Informationen ovan �r baserad p� aktiva anv�ndare under de senaste 5 minuterna.';

$lang['Forum_Location'] = 'Forumplats';
$lang['Last_updated'] = 'Senast aktiv';

$lang['Forum_index'] = 'Forumindex';
$lang['Logging_on'] = 'Loggar in';
$lang['Posting_message'] = 'Skriver ett inl�gg';
$lang['Searching_forums'] = 'S�ker p� forumen';
$lang['Viewing_profile'] = 'Kollar p� profil';
$lang['Viewing_online'] = 'Kollar vilka som �r online';
$lang['Viewing_member_list'] = 'Kollar p� medlemslistan';
$lang['Viewing_priv_msgs'] = 'L�ser personliga meddelanden';
$lang['Viewing_FAQ'] = 'L�ser FAQ:en';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderatorkontrollpanel';
$lang['Mod_CP_explain'] = 'Genom att anv�nda formul�ret nedan kan du utf�ra massmodererings operationer p� det h�r forumet. Du kan l�sa, l�sa upp, flytta eller ta bort hur m�nga �mnen som helst.';

$lang['Select'] = 'V�lj';
$lang['Delete'] = 'Ta bort';
$lang['Move'] = 'Flytta';
$lang['Lock'] = 'L�s';
$lang['Unlock'] = 'L�s upp';

$lang['Topics_Removed'] = 'De valda �mnena har tagits bort fr�n databasen.';
$lang['Topics_Locked'] = 'De valda �mnena har l�sts.';
$lang['Topics_Moved'] = 'De valda �mnena har flyttats.';
$lang['Topics_Unlocked'] = 'De valda �mnena har l�sts upp.';
$lang['No_Topics_Moved'] = 'Inga �mnen flyttades.';

$lang['Confirm_delete_topic'] = '�r du s�ker p� att du vill ta bort de valda �mnena?';
$lang['Confirm_lock_topic'] = '�r du s�ker p� att du vill l�sa de valda �mnena?';
$lang['Confirm_unlock_topic'] = '�r du s�ker p� att du vill l�sa upp de valda �mnena?';
$lang['Confirm_move_topic'] = '�r du s�ker p� att du vill flytta de valda �mnena?';

$lang['Move_to_forum'] = 'Flytta till forum';
$lang['Leave_shadow_topic'] = 'L�mna skugga av �mnet i det gamla forumet.';

$lang['Split_Topic'] = 'Dela �mnekontrollpanel';
$lang['Split_Topic_explain'] = 'Genom att anv�nda formul�ret nedan kan du dela ett �mne i 2 delar, antingen genom att v�lja inl�ggen individuellt eller genom att dela vid ett valt inl�gg';
$lang['Split_title'] = 'Ny �mnesstitel';
$lang['Split_forum'] = 'Forum f�r nytt �mne';
$lang['Split_posts'] = 'Dela valda inl�gg';
$lang['Split_after'] = 'Dela fr�n valt inl�gg';
$lang['Topic_split'] = 'Det valda �mnet har delats';

$lang['Too_many_error'] = 'Du har valt f�r m�nga inl�gg. Du kan endast v�lja ett inl�gg att dela �mnet efter!';

$lang['None_selected'] = 'Du har inte valt n�gra �mnen att utf�ra operationen p�. G� tillbaka och v�lj minst ett.';
$lang['New_forum'] = 'Nytt forum';

$lang['This_posts_IP'] = 'IP f�r det h�r inl�gget';
$lang['Other_IP_this_user'] = 'Andra IP adresser som den h�r anv�ndaren har postat ifr�n';
$lang['Users_this_IP'] = 'Anv�ndare som postat ifr�n den h�r IP adressen';
$lang['IP_info'] = 'IP information';
$lang['Lookup_IP'] = 'Sl� upp IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Alla tider �r %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 timmar';
$lang['-11'] = 'GMT - 11 timmar';
$lang['-10'] = 'GMT - 10 timmar';
$lang['-9'] = 'GMT - 9 timmar';
$lang['-8'] = 'GMT - 8 timmar';
$lang['-7'] = 'GMT - 7 timmar';
$lang['-6'] = 'GMT - 6 timmar';
$lang['-5'] = 'GMT - 5 timmar';
$lang['-4'] = 'GMT - 4 timmar';
$lang['-3.5'] = 'GMT - 3.5 timmar';
$lang['-3'] = 'GMT - 3 timmar';
$lang['-2'] = 'GMT - 2 timmar';
$lang['-1'] = 'GMT - 1 timme';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 timme (svensk normaltid)';
$lang['2'] = 'GMT + 2 timmar (svensk sommartid)';
$lang['3'] = 'GMT + 3 timmar';
$lang['3.5'] = 'GMT + 3.5 timmar';
$lang['4'] = 'GMT + 4 timmar';
$lang['4.5'] = 'GMT + 4.5 timmar';
$lang['5'] = 'GMT + 5 timmar';
$lang['5.5'] = 'GMT + 5.5 timmar';
$lang['6'] = 'GMT + 6 timmar';
$lang['6.5'] = 'GMT + 6.5 timmar';
$lang['7'] = 'GMT + 7 timmar';
$lang['8'] = 'GMT + 8 timmar';
$lang['9'] = 'GMT + 9 timmar';
$lang['9.5'] = 'GMT + 9.5 timmar';
$lang['10'] = 'GMT + 10 timmar';
$lang['11'] = 'GMT + 11 timmar';
$lang['12'] = 'GMT + 12 timmar';
$lang['13'] = 'GMT + 13 timmar';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 timmar';
$lang['tz']['-11'] = 'GMT - 11 timmar';
$lang['tz']['-10'] = 'GMT - 10 timmar';
$lang['tz']['-9'] = 'GMT - 9 timmar';
$lang['tz']['-8'] = 'GMT - 8 timmar';
$lang['tz']['-7'] = 'GMT - 7 timmar';
$lang['tz']['-6'] = 'GMT - 6 timmar';
$lang['tz']['-5'] = 'GMT - 5 timmar';
$lang['tz']['-4'] = 'GMT - 4 timmar';
$lang['tz']['-3.5'] = 'GMT - 3.5 timmar';
$lang['tz']['-3'] = 'GMT - 3 timmar';
$lang['tz']['-2'] = 'GMT - 2 timmar';
$lang['tz']['-1'] = 'GMT - 1 timme';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 timme';
$lang['tz']['2'] = 'GMT + 2 timmar';
$lang['tz']['3'] = 'GMT + 3 timmar';
$lang['tz']['3.5'] = 'GMT + 3.5 timmar';
$lang['tz']['4'] = 'GMT + 4 timmar';
$lang['tz']['4.5'] = 'GMT + 4.5 timmar';
$lang['tz']['5'] = 'GMT + 5 timmar';
$lang['tz']['5.5'] = 'GMT + 5.5 timmar';
$lang['tz']['6'] = 'GMT + 6 timmar';
$lang['tz']['6.5'] = 'GMT + 6.5 timmar';
$lang['tz']['7'] = 'GMT + 7 timmar';
$lang['tz']['8'] = 'GMT + 8 timmar';
$lang['tz']['9'] = 'GMT + 9 timmar';
$lang['tz']['9.5'] = 'GMT + 9.5 timmar';
$lang['tz']['10'] = 'GMT + 10 timmar';
$lang['tz']['11'] = 'GMT + 11 timmar';
$lang['tz']['12'] = 'GMT + 12 timmar';
$lang['tz']['13'] = 'GMT + 13 timmar';

$lang['datetime']['Sunday'] = 's�ndag';
$lang['datetime']['Monday'] = 'm�ndag';
$lang['datetime']['Tuesday'] = 'tisdag';
$lang['datetime']['Wednesday'] = 'onsdag';
$lang['datetime']['Thursday'] = 'torsdag';
$lang['datetime']['Friday'] = 'fredag';
$lang['datetime']['Saturday'] = 'l�rdag';
$lang['datetime']['Sun'] = 's�n';
$lang['datetime']['Mon'] = 'm�n';
$lang['datetime']['Tue'] = 'tis';
$lang['datetime']['Wed'] = 'ons';
$lang['datetime']['Thu'] = 'tor';
$lang['datetime']['Fri'] = 'fre';
$lang['datetime']['Sat'] = 'l�r';
$lang['datetime']['January'] = 'januari';
$lang['datetime']['February'] = 'februari';
$lang['datetime']['March'] = 'mars';
$lang['datetime']['April'] = 'april';
$lang['datetime']['May'] = 'maj';
$lang['datetime']['June'] = 'juni';
$lang['datetime']['July'] = 'juli';
$lang['datetime']['August'] = 'augusti';
$lang['datetime']['September'] = 'september';
$lang['datetime']['October'] = 'oktober';
$lang['datetime']['November'] = 'november';
$lang['datetime']['December'] = 'december';
$lang['datetime']['Jan'] = 'jan';
$lang['datetime']['Feb'] = 'feb';
$lang['datetime']['Mar'] = 'mar';
$lang['datetime']['Apr'] = 'apr';
$lang['datetime']['May'] = 'maj';
$lang['datetime']['Jun'] = 'jun';
$lang['datetime']['Jul'] = 'jul';
$lang['datetime']['Aug'] = 'aug';
$lang['datetime']['Sep'] = 'sep';
$lang['datetime']['Oct'] = 'okt';
$lang['datetime']['Nov'] = 'nov';
$lang['datetime']['Dec'] = 'dec';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Information';
$lang['Critical_Information'] = 'Kritisk information';

$lang['General_Error'] = 'Fel';
$lang['Critical_Error'] = 'Kritiskt fel';
$lang['An_error_occured'] = 'Ett fel har uppst�tt.';
$lang['A_critical_error'] = 'Ett kritiskt fel har uppst�tt.';

$lang['Admin_reauthenticate'] = 'F�r att kunna administrera forumet m�ste du logga in igen.';

$lang['Login_attempts_exceeded'] = 'Du har nu gjort %s ogiltiga inloggningsf�rs�k och kan d�rf�r inte f�rs�ka logga in l�ngre. Du kan f�rs�ka igen om %s minuter.';
$lang['Please_remove_install_contrib'] = 'F�rs�kra dig om att mapparna install/ och contrib/ �r borttagna.';

$lang['Session_invalid'] = 'Felaktig session. Skicka om formul�ret.';

//
// That's all, Folks!
// -------------------------------------------------

?>