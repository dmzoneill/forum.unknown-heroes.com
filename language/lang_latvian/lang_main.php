<?php
/***************************************************************************
 *                            lang_main.php [Latvian]
 *                              -------------------
 *     begin                : 
 *     copyright            : (C) 2006 Eri Tehnologiju Risinajumi
 *     email                : kaspars@phpbb.lv
 *
 *     $Id:  $
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

/*
  CONTRIBUTORS:
    2006-03-25      kaspars@phpbb.lv - ies�kts. phpbb v2.0.19. tulk.versija 0.10
    2006-04-16      kaspars@phpbb.lv - updeitots uz phpbb v2.0.20. tulk.versija 0.11
    2006-07-22      kaspars@phpbb.lv - updeitots uz phpbb v2.0.21 tulk.versija 0.13
   
 */

// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'windows-1257';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] = 'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forums';
$lang['Category'] = 'Kategorijas';
$lang['Topic'] = 'T�ma';
$lang['Topics'] = 'T�mas';
$lang['Replies'] = 'Piebildes';
$lang['Views'] = 'Apskates';
$lang['Post'] = 'Atbild�t';
$lang['Posts'] = 'Atbildes';
$lang['Posted'] = 'Atbilde sa�emta';
$lang['Username'] = 'Lietot�js';
$lang['Password'] = 'Parole';
$lang['Email'] = 'E-pasts';
$lang['Poster'] = 'Rakst�t�js';
$lang['Author'] = 'Autors';
$lang['Time'] = 'Laiks';
$lang['Hours'] = 'Stundas';
$lang['Message'] = 'Zi�ojums';

$lang['1_Day'] = '1 diena';
$lang['7_Days'] = '7 dienas';
$lang['2_Weeks'] = '2 ned��as';
$lang['1_Month'] = '1 m�nesis';
$lang['3_Months'] = '3 m�ne�i';
$lang['6_Months'] = '6 m�ne�i';
$lang['1_Year'] = '1 gads';

$lang['Go'] = 'P�riet';
$lang['Jump_to'] = 'P�riet uz';
$lang['Submit'] = 'Apstiprin�t';
$lang['Reset'] = 'Atgriezt';
$lang['Cancel'] = 'Atcelt';
$lang['Preview'] = 'Apskat�t';
$lang['Confirm'] = 'Apstiprin�t';
$lang['Spellcheck'] = 'Rakst�bas p�rbaude';
$lang['Yes'] = 'J�';
$lang['No'] = 'N�';
$lang['Enabled'] = 'At�auts';
$lang['Disabled'] = 'Aizliegts';
$lang['Error'] = 'K��da';

$lang['Next'] = 'N�ko�ais';
$lang['Previous'] = 'Iepriek��jais';
$lang['Goto_page'] = 'P�riet uz lapu';
$lang['Joined'] = 'Pievienojies';
$lang['IP_Address'] = 'IP adrese';

$lang['Select_forum'] = 'Izv�l�ties forumu';
$lang['View_latest_post'] = 'Apskat�t p�d�jo zi�ojumu';
$lang['View_newest_post'] = 'Apskat�t jaun�ko zi�ojumu';
$lang['Page_of'] = 'Lapa <b>%d</b> no <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ numurs';
$lang['AIM'] = 'AIM adrese';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Foruma Saturs';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Izveidot jaunu t�mu';
$lang['Reply_to_topic'] = 'Atbild�t uz t�mu';
$lang['Reply_with_quote'] = 'Atbild�t cit�jot';

$lang['Click_return_topic'] = 'Spiediet %s�eit%s, lai atgrieztos uz t�mu'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Spiediet %s�eit%s, lai m��in�tu v�lreiz';
$lang['Click_return_forum'] = 'Spiediet %s�eit%s, lai atgrieztos uz forumu';
$lang['Click_view_message'] = 'Spiediet %s�eit%s, lai apskat�tu savu zi�u';
$lang['Click_return_modcp'] = 'Spiediet %s�eit%s, lai atgrieztos uz Moderatora Vad�bas Paneli';
$lang['Click_return_group'] = 'Spiediet %s�eit%s, lai atgrieztos uz grupas inform�ciju';

$lang['Admin_panel'] = 'P�riet uz Administr�cijas Paneli';

$lang['Board_disable'] = 'Atvainojiet, bet �is forums pa�laik nav pieejams. M��iniet v�l�k.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Re�istr�tie Lietot�ji:';
$lang['Browsing_forum'] = 'Lietot�ji, kuri skat�s �o forumu:';
$lang['Online_users_zero_total'] = '�obr�d neviens nav piesl�dzies :: ';
$lang['Online_users_total'] = 'Pavisam piesl�gu�ies <b>%d</b> lietot�ji :: ';
$lang['Online_user_total'] = 'Pavisam piesl�dzies <b>%d</b> lietot�js :: ';
$lang['Reg_users_zero_total'] = '0 Re�istr�to, ';
$lang['Reg_users_total'] = '%d Re�istr�to, ';
$lang['Reg_user_total'] = '%d Re�istr�ts, ';
$lang['Hidden_users_zero_total'] = '0 Sl�pto un ';
$lang['Hidden_user_total'] = '%d Sl�pto un ';
$lang['Hidden_users_total'] = '%d Sl�ptais un ';
$lang['Guest_users_zero_total'] = '0 Ciemi�u';
$lang['Guest_users_total'] = '%d Ciemi�u';
$lang['Guest_user_total'] = '%d Ciemi��';
$lang['Record_online_users'] = 'Visvair�k lietot�ju vienlaikus bijis <b>%s</b> (%s)'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrators%s';
$lang['Mod_online_color'] = '%sModerators%s';

$lang['You_last_visit'] = 'P�d�jo reizi �eit bij�t %s'; // %s replaced by date/time
$lang['Current_time'] = 'Tagad ir %s'; // %s replaced by time

$lang['Search_new'] = 'Skat�t jaunos zi�ojumus kop� p�d�ja apmekl�juma';
$lang['Search_your_posts'] = 'Skat�t savus zi�ojumus';
$lang['Search_unanswered'] = 'Skat�t neatbild�tos zi�ojumus';

$lang['Register'] = 'Re�istr�ties';
$lang['Profile'] = 'Profils';
$lang['Edit_profile'] = 'Main�t sava profila iestat�jumus';
$lang['Search'] = 'Mekl�t';
$lang['Memberlist'] = 'Lietot�ju saraksts';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'BBCode pamac�ba';
$lang['Usergroups'] = 'Lietot�ju Grupas';
$lang['Last_Post'] = 'P�d�jais zi�ojums';
$lang['Moderator'] = 'Moderators';
$lang['Moderators'] = 'Moderatori';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'M�su lietot�ji kop� ir public�ju�i <b>0</b> zi�ojumus'; // Number of posts
$lang['Posted_articles_total'] = 'M�su lietot�ji kop� ir public�ju�i <b>%d</b> zi�ojumus'; // Number of posts
$lang['Posted_article_total'] = 'M�su lietot�ji kop� ir public�ju�i <b>%d</b> zi�ojumus'; // Number of posts
$lang['Registered_users_zero_total'] = 'Mums ir <b>0</b> re�istr�ti lietotaji'; // # registered users
$lang['Registered_users_total'] = 'Mums ir <b>%d</b> re�istr�ti lietot�ji'; // # registered users
$lang['Registered_user_total'] = 'Mums ir <b>%d</b> re�istr�ts lietot�js'; // # registered users
$lang['Newest_user'] = 'Jaun�kais re�istr�tais lietot�js ir <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Kop� J�su p�d�ja apmekl�juma nav neviena jauna zi�ojuma';
$lang['No_new_posts'] = 'Nav jaunu zi�ojumu';
$lang['New_posts'] = 'Jauni zi�ojumi';
$lang['New_post'] = 'Jauns zi�ojums';
$lang['No_new_posts_hot'] = 'Nav jaunu zi�ojumu [ Popul�rs ]';
$lang['New_posts_hot'] = 'Jauni zi�ojumi [ Popul�rs ]';
$lang['No_new_posts_locked'] = 'Nav jaunu zi�ojumu [ Sl�gts ]';
$lang['New_posts_locked'] = 'Jauni zi�ojumi [ Sl�gts ]';
$lang['Forum_is_locked'] = 'Forums ir sl�gts';


//
// Login
//
$lang['Enter_password'] = 'L�dzu ievadiet savu lietot�ja v�rdu un paroli';
$lang['Login'] = 'Ieiet';
$lang['Logout'] = 'Iziet';

$lang['Forgotten_password'] = 'Esmu aizmirsis savu paroli';

$lang['Log_me_in'] = 'Piesl�gties autom�tiski, kad atveru �o logu';

$lang['Error_login'] = 'J�s esat ievad�jis nepareizu vai neakt�va lietot�ja v�rdu vai ar� k��dainu paroli.';


//
// Index page
//
$lang['Index'] = 'Saturs';
$lang['No_Posts'] = 'Nav zi�ojumu';
$lang['No_forums'] = '�aj� d�l� nav forumu';

$lang['Private_Message'] = 'Priv�ta Zi�a';
$lang['Private_Messages'] = 'Priv�tas Zi�as';
$lang['Who_is_Online'] = 'Kas ir Piesl�dzies';

$lang['Mark_all_forums'] = 'Atz�m�t visus forumus k� izlas�tus';
$lang['Forums_marked_read'] = 'Visi forumi atz�m�ti k� izlas�ti';


//
// Viewforum
//
$lang['View_forum'] = 'Apskat�t forumu';

$lang['Forum_not_exist'] = 'J�su izv�l�tais forums neeksist�';
$lang['Reached_on_error'] = 'K��da';

$lang['Display_topics'] = 'Att�lot tematus s�kot ar iepriek��jo';
$lang['All_Topics'] = 'Visi temati';

$lang['Topic_Announcement'] = '<b>Pazi�ojums:</b>';
$lang['Topic_Sticky'] = '<b>Pielipin�ts pazi�ojums:</b>';
$lang['Topic_Moved'] = '<b>P�rvietots:</b>';
$lang['Topic_Poll'] = '<b>[ Aptauja ]</b>';

$lang['Mark_all_topics'] = 'Atz�m�t visus tematus k� izlas�tus';
$lang['Topics_marked_read'] = '�� foruma temati tagad ir atz�m�ti k� izlas�ti';

$lang['Rules_post_can'] = 'J�s <b>varat</b> pievienot jaunus tematus �im forumam';
$lang['Rules_post_cannot'] = 'J�s <b>nevarat</b> pievienot jaunus tematus �im forumam';
$lang['Rules_reply_can'] = 'J�s <b>varat</b> atbild�t tematos �aj� forum�';
$lang['Rules_reply_cannot'] = 'J�s <b>nevarat</b> atbild�t tematos �aj� forum�';
$lang['Rules_edit_can'] = 'J�s <b>varat</b> labot J�su zi�ojumus forum�';
$lang['Rules_edit_cannot'] = 'J�s <b>nevarat</b> labot J�su zi�ojumus forum�';
$lang['Rules_delete_can'] = 'J�s <b>varat</b> dz�st J�su zi�ojumus forum�';
$lang['Rules_delete_cannot'] = 'J�s <b>nevarat</b> dz�st J�su zi�ojumus forum�';
$lang['Rules_vote_can'] = 'J�s <b>varat</b> piedal�ties aptauj� �aj� forum�';
$lang['Rules_vote_cannot'] = 'J�s <b>nevarat</b> piedal�ties aptauj� �aj� forum�';
$lang['Rules_moderate'] = 'J�s <b>varat</b> %smoder�t �o forumu%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = '�aj� forum� nav tematu.<br />Spiediet uz <b>Public�t jaunu tematu</b>, lai to s�ktu jaunu t�mu.';


//
// Viewtopic
//
$lang['View_topic'] = 'Apskat�t tematu';

$lang['Guest'] = 'Viesis';
$lang['Post_subject'] = 'T�ma';
$lang['View_next_topic'] = 'Apskat�t n�kamo tematu';
$lang['View_previous_topic'] = 'Apskat�t iepiek��jo tematu';
$lang['Submit_vote'] = 'Apstiprin�t balsojumu';
$lang['View_results'] = 'Apskat�t rezult�tus';

$lang['No_newer_topics'] = 'Nav jaun�ku tematu �aj� forum�';
$lang['No_older_topics'] = 'Nav vec�ku tematu �aja forum�';
$lang['Topic_post_not_exist'] = 'J�su piepras�tais Temats vai Zi�ojums, diem��l, neeksist�';
$lang['No_posts_topic'] = '�ai t�mai nav zi�ojumu';

$lang['Display_posts'] = 'Att�lot zi�ojumus s�kot ar pirmsp�d�jo';
$lang['All_Posts'] = 'Visi zi�ojumi';
$lang['Newest_First'] = 'Jaun�kais pirmais';
$lang['Oldest_First'] = 'Vec�kais pirmais';

$lang['Back_to_top'] = 'Atpaka� uz aug�u';

$lang['Read_profile'] = 'Apskat�t lietot�ja(-u) profilu'; 
$lang['Visit_website'] = 'Apmekl�t autora M�jas Lapu';
$lang['ICQ_status'] = 'ICQ statuss';
$lang['Edit_delete_post'] = 'Labot/Dz�st �o zi�ojumu';
$lang['View_IP'] = 'Apskat�t rakst�t�ja IP adresi';
$lang['Delete_post'] = 'Dz�st �o zi�ojumu';

$lang['wrote'] = 'rakst�ja'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Cit�t'; // comes before bbcode quote output.
$lang['Code'] = 'Kods'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'P�d�jo reizi labojis %s %s; labots %d reizi'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'P�d�jo reizi labojis %s %s; labots %d reizes'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Sl�gt �o tematu';
$lang['Unlock_topic'] = 'Atsl�gt �o tematu';
$lang['Move_topic'] = 'P�rvietot �o tematu';
$lang['Delete_topic'] = 'Dz�st �o tematu';
$lang['Split_topic'] = 'Sadal�t �o tematu';

$lang['Stop_watching_topic'] = 'Beigt uzraudz�t �o tematu';
$lang['Start_watching_topic'] = 'Uzraudz�t atbildes �aj� temat�';
$lang['No_longer_watching'] = 'J�s vairs neuzraugat �o tematu';
$lang['You_are_watching'] = 'J�s tagad uzraugat �o tematu';

$lang['Total_votes'] = 'Kop� Balsis';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Zi�ojums';
$lang['Topic_review'] = 'T�mas apskats';

$lang['No_post_mode'] = 'Public�t zi�ojumu nav paredz�ts'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Public�t jaunu t�mu';
$lang['Post_a_reply'] = 'Public�t atbildi';
$lang['Post_topic_as'] = 'Public�t t�mu k�';
$lang['Edit_Post'] = 'Redi��t zi�ojumu';
$lang['Options'] = 'Uzstat�jumi';

$lang['Post_Announcement'] = 'Pazi�ojums';
$lang['Post_Sticky'] = 'Pielipin�ts';
$lang['Post_Normal'] = 'Norm�ls';

$lang['Confirm_delete'] = 'Vai J�s tie��m v�laties dz�st �o zi�u?';
$lang['Confirm_delete_poll'] = 'Vai J�s tie��m v�laties dz�st �o aptauju?';

$lang['Flood_Error'] = 'Pa�laik tiek public�ts J�su iepriek��jais zi�ojums, l�dzu nedaudz uzgaidiet, pirms rakst�t n�kamo zi�u.';
$lang['Empty_subject'] = 'L�dzu nor�diet zi�ojuma t�mu.';
$lang['Empty_message'] = 'L�dzu ierakstiet zi�ojuma tekstu.';
$lang['Forum_locked'] = '�is forums ir sl�gts: Public�t, atbild�t, labot t�mas nav iesp�jams.';
$lang['Topic_locked'] = '�� t�ma ir sl�gta: Nav iesp�jams nedz labot, nedz atbild�t uz zi�ojumiem.';
$lang['No_post_id'] = 'Netika nor�d�ts zi�ojuma ID';
$lang['No_topic_id'] = 'Vispirms ir j�izv�las t�ma uz kuru v�laties atbild�t';
$lang['No_valid_mode'] = 'J�s varat tikai public�t, atbild�t, labot vai cit�t zi�as. L�dzu atgriezieties uz ieprie��jo lapu un m��iniet v�lreiz.';
$lang['No_such_post'] = 'Nav t�da zi�ojuma. L�dzu atgriezieties uz ieprie��jo lapu un m��iniet v�lreiz.';
$lang['Edit_own_posts'] = 'J�s varat labot tikai pats savus zi�ojumus.';
$lang['Delete_own_posts'] = 'J�s varat dz�st tikai pats savus zi�ojumus.';
$lang['Cannot_delete_replied'] = 'Diem��l nav iesp�jams dz�st zi�ojumus uz kuriem jau ir atbild�ts.';
$lang['Cannot_delete_poll'] = 'Nav iesp�jams dz�st pa�laik akt�vu aptauju.';
$lang['Empty_poll_title'] = 'Jums j�ievada aptaujas nosaukums.';
$lang['To_few_poll_options'] = 'Aptauj� j�ievada vismaz divi atbil�u varianti.';
$lang['To_many_poll_options'] = 'J�s m��in�j�t ievad�t par�k daudz atbil�u variantus.';
$lang['Post_has_no_poll'] = 'Zi�ojumam nav aptaujas.';
$lang['Already_voted'] = 'J�s jau esat piedal�jies �aj� aptauj�.';
$lang['No_vote_option'] = 'Ja piedal�ties aptauj�, tad vispirms ir j�izv�las atbildes variants.';

$lang['Add_poll'] = 'Pievienot aptauju';
$lang['Add_poll_explain'] = 'Ja J�s nev�laties pievienot aptauju �ai t�mai, tad atst�jiet �os laukus tuk�us.';
$lang['Poll_question'] = 'Aptaujas jaut�jums';
$lang['Poll_option'] = 'Aptaujas atbildes varianti';
$lang['Add_option'] = 'Pievienot variantu';
$lang['Update'] = 'Atjaunot';
$lang['Delete'] = 'Dz�st';
$lang['Poll_for'] = 'Aptauja b�s akt�va';
$lang['Days'] = 'Dienas'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Ievadiet 0 vai atst�jie tuk�u, ja nev�laties uzlikt dienu ierobe�ojumu ]';
$lang['Delete_poll'] = 'Dz�st aptauju';

$lang['Disable_HTML_post'] = 'Aizliegt HTML zi�ojum�';
$lang['Disable_BBCode_post'] = 'Aizliegt BBCode zi�ojum�';
$lang['Disable_Smilies_post'] = 'Aizliegt Smaidi�us zi�ojum�';

$lang['HTML_is_ON'] = 'HTML ir <u>ON</u>';
$lang['HTML_is_OFF'] = 'HTML ir <u>OFF</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s ir <u>ON</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s ir <u>OFF</u>';
$lang['Smilies_are_ON'] = 'Smaidi�i ir <u>ON</u>';
$lang['Smilies_are_OFF'] = 'Smaidi�i ir <u>OFF</u>';

$lang['Attach_signature'] = 'Pievienot parakstu (parakstu varat izmain�t sava lietot�ja uzst�d�jumos)';
$lang['Notify'] = 'Zi�ot man par atbild�m';

$lang['Stored'] = 'J�su zi�ojums tika veiksm�gi pievienots.';
$lang['Deleted'] = 'J�sus zi�ojums tika veiksm�gi izdz�sts.';
$lang['Poll_delete'] = 'J�su aptauja tika veiksm�gi izdz�sta.';
$lang['Vote_cast'] = 'J�su balss ir ieskait�ta.';

$lang['Topic_reply_notification'] = 'T�mas atbildes zi�ojums';

$lang['bbcode_b_help'] = 'Biezs teksts: [b]text[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Kurs�vs teksts: [i]text[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Pasv�trots teksts: [u]text[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Cit�ts teksts: [quote]text[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Koda fragments: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Saraksts: [list]text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Numur�ts saraksts: [list=]text[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Iek�aut att�lu: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Iek�aut adresi: [url]http://url[/url] vai [url=http://url]adreses teksts[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Aizv�rt visus atv�rtos bbCode tegus';
$lang['bbcode_s_help'] = 'Burtu kr�sa: [color=red]teksts[/color]  Noz.: vari ar� lietot color=#FF0000';
$lang['bbcode_f_help'] = 'Burtu lielums: [size=x-small]mazs teksts[/size]';

$lang['Emoticons'] = 'Smaidi�i';
$lang['More_emoticons'] = 'Skat�t vair�k';

$lang['Font_color'] = 'Burtu kr�sa';
$lang['color_default'] = '------';
$lang['color_dark_red'] = 'Tum�i sark.';
$lang['color_red'] = 'Sarkana';
$lang['color_orange'] = 'Oran�a';
$lang['color_brown'] = 'Br�na';
$lang['color_yellow'] = 'Dzeltena';
$lang['color_green'] = 'Za�a';
$lang['color_olive'] = 'Ol�va';
$lang['color_cyan'] = 'G. zila';
$lang['color_blue'] = 'Zila';
$lang['color_dark_blue'] = 'T. zila';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violeta';
$lang['color_white'] = 'Balta';
$lang['color_black'] = 'Melna';

$lang['Font_size'] = 'Burtu lielums';
$lang['font_tiny'] = 'S�ks';
$lang['font_small'] = 'Mazs';
$lang['font_normal'] = 'Norm�ls';
$lang['font_large'] = 'Liels';
$lang['font_huge'] = 'Milz�gs';

$lang['Close_Tags'] = 'Aizv�rt tegus';
$lang['Styles_tip'] = 'Noz.: Stilus �tr�k var pievienot iez�m�tam tekstam';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Priv�tais zi�ojumu centrs';

$lang['Login_check_pm'] = 'Ieiet, lai p�rbaud�tu priv�t�s zi�as';
$lang['New_pms'] = 'Jums ir %d jaunas zi�as'; // You have 2 new messages
$lang['New_pm'] = 'Jums ir %d jauna zi�a'; // You have 1 new message
$lang['No_new_pm'] = 'Jums nav jaunas zi�as';
$lang['Unread_pms'] = 'Jums ir %d neizlas�ti zi�ojumi';
$lang['Unread_pm'] = 'Jums ir %d neizlas�ts zi�ojums';
$lang['No_unread_pm'] = 'Jums nav neizlas�tu zi�ojumu';
$lang['You_new_pm'] = 'Jauna priv�t� zi�a J�s gaida Ies�tn�';
$lang['You_new_pms'] = 'Jaunas priv�t�s zi�as J�s gaida Ies�tn�';
$lang['You_no_new_pm'] = 'Jums nav jaunu privato zi�u';

$lang['Unread_message'] = 'Nelas�t zi�u';
$lang['Read_message'] = 'Las�t zi�u';

$lang['Read_pm'] = 'Las�t zi�u';
$lang['Post_new_pm'] = 'Public�t zi�u';
$lang['Post_reply_pm'] = 'Atbild�t uz zi�u';
$lang['Post_quote_pm'] = 'Cit�t zi�u';
$lang['Edit_pm'] = 'Main�t zi�u';

$lang['Inbox'] = 'Ies�tne';
$lang['Outbox'] = 'S�t�m�s';
$lang['Savebox'] = 'Saglab�t�s';
$lang['Sentbox'] = 'Aizs�t�t�s';
$lang['Flag'] = 'Karogs';
$lang['Subject'] = 'T�ma';
$lang['From'] = 'No';
$lang['To'] = 'Kam';
$lang['Date'] = 'Datums';
$lang['Mark'] = 'Iez�m�t';
$lang['Sent'] = 'S�t�t';
$lang['Saved'] = 'Saglab�t';
$lang['Delete_marked'] = 'Dz�st iez�m�t�s';
$lang['Delete_all'] = 'Dz�st visas';
$lang['Save_marked'] = 'Saglab�t iez�m�t�s'; 
$lang['Save_message'] = 'saglab�s zi�u';
$lang['Delete_message'] = 'Dz�st zi�u';

$lang['Display_messages'] = 'Att�lot zi�as no pirmsp�d�j�s'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Visas zi�as';

$lang['No_messages_folder'] = 'Jums nav zi�u �aj� map�';

$lang['PM_disabled'] = '�aj� forum� Priv�to zi�u s�t��ana ir aizliegta.';
$lang['Cannot_send_privmsg'] = 'Priv�to zi�u s�t��ana ir aizliegta.';
$lang['No_to_user'] = 'L�dzu nor�diet sa��m�ja v�rdu.';
$lang['No_such_user'] = '��ds lietot�js diem��l neeksist�.';

$lang['Disable_HTML_pm'] = 'Aizliegt HTML �aj� zi�ojum�';
$lang['Disable_BBCode_pm'] = 'Aizliegt BBCode �aj� zi�ojum�';
$lang['Disable_Smilies_pm'] = 'Aizliegt Smaidi�us �aj� zi�ojum�';

$lang['Message_sent'] = 'J�su zi�ojums tika nos�t�ts.';

$lang['Click_return_inbox'] = 'Spiediet %s�eit%s, lai atgrieztos Pasta Kast�';
$lang['Click_return_index'] = 'Spiediet %s�eit%s, lai atgrieztos Foruma Satur�';

$lang['Send_a_new_message'] = 'S�t�t jaunu priv�to zi�u';
$lang['Send_a_reply'] = 'Atbild�t uz priv�to zi�u';
$lang['Edit_message'] = 'Labot priv�to zi�u';

$lang['Notification_subject'] = 'Jums ir jauna priv�t� zi�a!';

$lang['Find_username'] = 'Mekl�t lietot�ju';
$lang['Find'] = 'Mekl�t';
$lang['No_match'] = 'Nekas nav atrasts.';

$lang['No_post_id'] = 'Netika nor�d�ts zi�ojuma ID';
$lang['No_such_folder'] = 'Mape neeksist�';
$lang['No_folder'] = 'Nav nor�d�ta mape';

$lang['Mark_all'] = 'Iez�m�t visus';
$lang['Unmark_all'] = 'Neiez�m�t visus';

$lang['Confirm_delete_pm'] = 'Vai J�s tie��m v�laties dz�st �o zi�u?';
$lang['Confirm_delete_pms'] = 'Vai J�s tie��m v�laties dz�st ��s zi�as?';

$lang['Inbox_size'] = 'J�su Ies�tne ir %d%% pilna'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'J�su S�t�t�s ir %d%% pilna'; 
$lang['Savebox_size'] = 'J�su Saglab�t�s ir %d%% pilna'; 

$lang['Click_view_privmsg'] = 'Spiediet %s�eit%s, lai apmekl�tu Ies�tni';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Apskat�t profilu :: %s'; // %s is username 
$lang['About_user'] = 'Viss par %s'; // %s is username

$lang['Preferences'] = 'Uzstat�jumi';
$lang['Items_required'] = 'Ar zvaigzn�ti(*) atz�m�tie lauki ir j�aizpilda oblig�ti, ja vien nav nor�d�ts sav�d�k.';
$lang['Registration_info'] = 'Re�istr�cijas Inform�cija';
$lang['Profile_info'] = 'Profila Inform�cija';
$lang['Profile_info_warn'] = '�� inform�cija b�s publiski apskat�ma';
$lang['Avatar_panel'] = 'Att�lu vad�bas panelis';
$lang['Avatar_gallery'] = 'Att�lu galerija';

$lang['Website'] = 'M�jas lappa';
$lang['Location'] = 'Dz�vesvieta';
$lang['Contact'] = 'Kontakti';
$lang['Email_address'] = 'E-pasta adrese';
$lang['Send_private_message'] = 'S�t�t priv�tu zi�u';
$lang['Hidden_email'] = '[ Sl�pts ]';
$lang['Interests'] = 'Intereses';
$lang['Occupation'] = 'Nodarbo�an�s'; 
$lang['Poster_rank'] = 'Reitings';

$lang['Total_posts'] = 'Kop� public�ts';
$lang['User_post_pct_stats'] = '%.2f%% no kop�j�'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f zi�ojumi dien�'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Atrast visus %s rakst�tos zi�ojumus '; // Find all posts by username

$lang['No_user_id_specified'] = 'Lietot�js neeksist�.';
$lang['Wrong_Profile'] = 'J�s nevarat labot sve�u profailu.';

$lang['Only_one_avatar'] = 'Var tikt nor�d�ts tikai viena tipa att�ls';
$lang['File_no_data'] = 'Nor�d�j� fail� nav inform�cijas';
$lang['No_connection_URL'] = 'Neizdev�s piesl�gties nor�d�tajam URL';
$lang['Incomplete_URL'] = 'URL nav piln�gs';
$lang['Wrong_remote_avatar_format'] = 'Att�lin�t� Att�la URL nav der�gs';
$lang['No_send_account_inactive'] = 'Paroli nevar atjaunot, jo J�su lietot�js pa�laik ir neakt�vs. L�dzu sazinieties ar foruma administratoru.';

$lang['Always_smile'] = 'Vienm�r at�aut Smaidi�us';
$lang['Always_html'] = 'Vienm�r at�aut HTML';
$lang['Always_bbcode'] = 'Vienm�r at�aut BBCode';
$lang['Always_add_sig'] = 'Vienm�r pievienot manu parakstu';
$lang['Always_notify'] = 'Vienm�r inform�t mani par atbild�m';
$lang['Always_notify_explain'] = 'S�t�t e-pastu, kad k�ds atbild uz t�mu, kuru esmu ies�cis. J�s var�siet to main�t ';

$lang['Board_style'] = 'Foruma stils';
$lang['Board_lang'] = 'Foruma valoda';
$lang['No_themes'] = 'Datub�z� nav Vizu�lo T�mu';
$lang['Timezone'] = 'Laika zona';
$lang['Date_format'] = 'Datuma form�ts';
$lang['Date_format_explain'] = 'Sintakse ir identiska PHP funkcijai <a href=\'http://www.php.net/date\' target=\'_other\'>datuma()</a>.';
$lang['Signature'] = 'Paraksts';
$lang['Signature_explain'] = '�is ir teksts, kuru varat pievienot vis�m sav�m publik�cij�m. �im tekstam ir %d z�mju ierobe�ojums';
$lang['Public_view_email'] = 'Vienm�r r�d�t manu e-pasta adresi';

$lang['Current_password'] = 'Tagad�j� parole';
$lang['New_password'] = 'Jaun� parole';
$lang['Confirm_password'] = 'Jaun� parole v�lreiz';
$lang['Confirm_password_explain'] = 'Jums ir j�ievada sava pa�reiz�j� parole, ja v�laties to nomain�t vai ar� nomainiet savu e-pasta adresi';
$lang['password_if_changed'] = 'Parole ir j�ievada tikai tad, ja v�laties to main�t';
$lang['password_confirm_if_changed'] = 'Parole ir j�apstiprina tikai tad, ja to ievad�j�t augst�k';

$lang['Avatar'] = 'Att�ls';
$lang['Avatar_explain'] = 'Att�lo mazu bild�ti zem J�su datiem katr� zi�ojum�. Vienlaic�gi var tikt att�lo tikai viena bilde, t�s platums nevar b�t liel�ks par %d pikse�iem un augstums par %d pikse�iem. Faila izm�rs nedr�kst p�rsniegt %d KB.';
$lang['Upload_Avatar_file'] = 'Iel�d�t no J�su PC';
$lang['Upload_Avatar_URL'] = 'Iel�d�t no URL';
$lang['Upload_Avatar_URL_explain'] = 'Ievadiet URL ar att�la atra�an�s vietu.';
$lang['Pick_local_Avatar'] = 'Izv�l�ties bildi no galerijas';
$lang['Link_remote_Avatar'] = 'Links uz att�lin�tu att�lu';
$lang['Link_remote_Avatar_explain'] = 'Ievadiet URL ar att�la atra�an�s vietu';
$lang['Avatar_URL'] = 'Att�la URL';
$lang['Select_from_gallery'] = 'Izv�l�ties no galerijas';
$lang['View_avatar_gallery'] = 'R�d�t galeriju';

$lang['Select_avatar'] = 'Izv�l�ties';
$lang['Return_profile'] = 'Atcelt';
$lang['Select_category'] = 'Izv�l�ties kategoriju';

$lang['Delete_Image'] = 'Dz�st bildi';
$lang['Current_Image'] = 'Tagad�j� bilde';

$lang['Notify_on_privmsg'] = 'Inform�t par jaunu priv�tu zi�ojumu';
$lang['Popup_on_privmsg'] = 'Jauns logs, kad sa�emu priv�tu zi�ojumu'; 
$lang['Popup_on_privmsg_explain'] = 'Tiek atv�rts jauns logs, lai inform�tu J�s, ka ir sa�emts jauns priv�tais zi�ojums.';
$lang['Hide_user'] = 'Sl�pt savu on-line statusu';

$lang['Profile_updated'] = 'Profils izmain�ts';
$lang['Profile_updated_inactive'] = 'Profils atjaunots. Gaidiet administratora zi�u.';

$lang['Password_mismatch'] = 'Paroles nesakr�t.';
$lang['Current_password_mismatch'] = 'J�su ievad�t� parole nesakr�t ar datub�z� eso�o.';
$lang['Password_long'] = 'Parole nedr�st b�t gar�ka par 32 z�m�m.';
$lang['Username_taken'] = '�is lietot�ja v�rds jau ir aiz�emts.';
$lang['Username_invalid'] = '�is lietot�ja v�rds satur neat�autas z�mes, k� piem�ram \'.';
$lang['Username_disallowed'] = '��ds lietot�ja v�rds ir aizliegts.';
$lang['Email_taken'] = 'E-pasta adrese jau ir re�istr�ta citam lietot�jam.';
$lang['Email_banned'] = 'E-pasta adrese ir aizliegta.';
$lang['Email_invalid'] = 'E-pasta adrese nav der�ga.';
$lang['Signature_too_long'] = 'J�su paraksts ir p�r�k gar�.';
$lang['Fields_empty'] = 'Aizpildiet pras�tos laukumus.';
$lang['Avatar_filetype'] = 'Att�la tipam ir j�b�t .jpg, .gif vai .png';
$lang['Avatar_filesize'] = 'Att�la izm�ram j�b�t maz�kam par %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Att�lam j�b�t �aur�kam par %d pikse�iem un zem�kam par %d pikse�iem'; 

$lang['Welcome_subject'] = 'Laipni l�gti %s Forum�'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Jauns lietot�ja konts';
$lang['Account_activated_subject'] = 'Konts aktiviz�ts';

$lang['Account_added'] = 'J�su lietot�ja konts tagad ir izveidots. J�s varat piesl�gties forumam izmantojot savu jauno lietot�ja v�rdu un paroli';
$lang['Account_inactive'] = 'J�su lietot�ja konts tika izveidots, ta�u �is forums paredz konta aktiviz�ciju. P�rbaudiet savu e-pastu un sekojiet sa�emtajiem nor�d�jumiem';
$lang['Account_inactive_admin'] = 'J�su lietot�ja konts tika izveidots, ta�u J�su kontu aktiviz�s administrators. Administr�cijai tika nos�t�ts epasts un J�s tiksiet inform�ts par sava jaun� foruma konta aktiviz�ciju.';
$lang['Account_active'] = 'Konts ir aktiviz�ts. Paldies, ka re�istr�j�ties.';
$lang['Account_active_admin'] = 'Konts tagad ir aktiviz�ts';
$lang['Reactivate'] = 'Aktiviz�jiet savu kontu atk�rtoti!';
$lang['Already_activated'] = 'J�s jau esat aktiviz�jis savu kontu';
$lang['COPPA'] = 'Konts ir izveidots, bet tam nepiecie�ams apstiprin�jums. Apskatiet savu e-pasta kast�ti.';

$lang['Registration'] = 'Foruma noteikumi';
$lang['Reg_agreement'] = 'While the administrators and moderators of this forum will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every message. Therefore you acknowledge that all posts made to these forums express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.<br /><br />You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all posts is recorded to aid in enforcing these conditions. You agree that the webmaster, administrator and moderators of this forum have the right to remove, edit, move or close any topic at any time should they see fit. As a user you agree to any information you	have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster, administrator and moderators cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br /><br />This forum system uses cookies to store information on your local computer. These cookies do not contain any of the information you have entered above, they serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password (and for sending new passwords should you forget your current one).<br /><br />By clicking Register below you agree to be bound by these conditions.';

$lang['Agree_under_13'] = 'Es piekr�tu �iem noteikumiem, bet esmu <b>jaun�ks par</b> 13 gadiem';
$lang['Agree_over_13'] = 'Es piekr�tu �iem noteikumiem, un esmu <b>vec�ks par</b> 13 gadiem';
$lang['Agree_not'] = 'Es nepiekr�tu �iem noteikumiem';

$lang['Wrong_activation'] = 'Aktiviz�cijas atsl�ga nav atrasta.';
$lang['Send_password'] = 'Nos�tiet man jaunu paroli'; 
$lang['Password_updated'] = 'Parole izveidota, l�dzu p�rbaudiet savu e-pastu, lai uzzin�tu k� to aktiviz�t.';
$lang['No_email_match'] = 'E-pasta adrese neatbilst lietot�jam.';
$lang['New_password_activation'] = 'Jaunas paroles aktiviz�cija';
$lang['Password_activated'] = 'J�su lietot�js tagad ir akt�vs. Lai piesl�gtos l�dzu izmantojiet e-past� sa�emto paroli.';

$lang['Send_email_msg'] = 'S�t�t e-pasta zi�ojumu';
$lang['No_user_specified'] = 'Nav nor�d�ts lietot�js';
$lang['User_prevent_email'] = '�is lietot�js nev�las sa�emt e-pastu. M��iniet s�t�t priv�tu zi�u.';
$lang['User_not_exist'] = 'Lietot�js neeksist�';
$lang['CC_email'] = 'E-pasta kopiju nos�t�t sev';
$lang['Email_message_desc'] = '�� zi�a tiks nos�t�ta, k� vienk�r� teksts, t�d�� l�dzu neizmantojiet HTML un BBCode.';
$lang['Flood_email_limit'] = 'J�su iepriek��jais e-pasts v�l tiek apstr�d�ts, l�dzu nedaudz uzgaidiet pirms s�t�t n�kamo.';
$lang['Recipient'] = 'Sa��m�js';
$lang['Email_sent'] = 'E-pasts nos�t�ts.';
$lang['Send_email'] = 'S�t�t e-pastu';
$lang['Empty_subject_email'] = 'Ierakstiet e-pasta t�mu.';
$lang['Empty_message_email'] = 'Ierakstiet e-pasta tekstu.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Apstiprin�juma kods netika ievad�ts pareizi.';
$lang['Too_many_registers'] = 'M��in�jumu skaits ��s sessijas ietvaros ir izt�r�ts. L�dzu m��iniet v�l�k.';
$lang['Confirm_code_impaired'] = 'Ja Jums ir redzes probl�mas, un nevarat ievad�t redzamo kodu, tad l�dzu sazinieties ar %sAdministrator%s.';
$lang['Confirm_code'] = 'Apstiprin�juma kods';
$lang['Confirm_code_explain'] = 'L�dzu ievadiet augst�k redzamo kodu.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Sak�rtot p�c';
$lang['Sort'] = 'Atlas�t';
$lang['Sort_Top_Ten'] = 'top 10 rakst�t�ji';
$lang['Sort_Joined'] = 'Re�istr��an�s datuma';
$lang['Sort_Username'] = 'Lietot�ja v�rda';
$lang['Sort_Location'] = 'Atra�an�s vietas';
$lang['Sort_Posts'] = 'Publik�ciju skaita';
$lang['Sort_Email'] = 'E-pasta';
$lang['Sort_Website'] = 'M�jas lapas';
$lang['Sort_Ascending'] = 'Augo�a';
$lang['Sort_Descending'] = 'Dilsto�a';
$lang['Order'] = 'Sec�ba: ';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Grupu kontroles panelis';
$lang['Group_member_details'] = 'Grupu dal�bas deta�as';
$lang['Group_member_join'] = 'Piebiedroties';

$lang['Group_Information'] = 'Grupas inform�cija';
$lang['Group_name'] = 'Grupas nosaukums';
$lang['Group_description'] = 'Grupas apraksts';
$lang['Group_membership'] = 'Grupas pieder�ba';
$lang['Group_Members'] = 'Grupas biedri';
$lang['Group_Moderator'] = 'Grupas Moderators';
$lang['Pending_members'] = 'Laika biedri';

$lang['Group_type'] = 'Grupas tips';
$lang['Group_open'] = 'Atv�rt grupu';
$lang['Group_closed'] = 'Sl�gt grupu';
$lang['Group_hidden'] = 'Sl�pt� grupa';

$lang['Current_memberships'] = 'Tagad�j� pieder�ba';
$lang['Non_member_groups'] = 'Tuk�as grupas';
$lang['Memberships_pending'] = 'Pieder�bas uzskaite';

$lang['No_groups_exist'] = 'Nav grupu';
$lang['Group_not_exist'] = 'Nav grupu';

$lang['Join_group'] = 'Pievienoties';
$lang['No_group_members'] = 'Grupai nav biedru';
$lang['Group_hidden_members'] = 'Sl�pta grupa';
$lang['No_pending_group_members'] = 'Nav uzskaites';
$lang['Group_joined'] = 'Veiksm�gi parakst�jies uz grupu.<br />Zi�osim, kad tiksiet uz�emts.';
$lang['Group_request'] = 'Ir sa�emts jauns pievieno�an�s piepras�jums J�su grupai.';
$lang['Group_approved'] = 'Piepras�jums apstiprin�ts.';
$lang['Group_added'] = 'J�s esat pievienots grupai.'; 
$lang['Already_member_group'] = 'J�s jau esat grupas biedrs';
$lang['User_is_member_group'] = 'Lietot�js jau ir grupas biedrs';
$lang['Group_type_updated'] = 'Veiksm�gi atjaunots grupas tips.';

$lang['Could_not_add_user'] = 'Lietot�js neeksist�.';
$lang['Could_not_anon_user'] = 'Anon�mus neie�em.';

$lang['Confirm_unsub'] = 'Vai esat dro�s, ka v�laties tikt dz�sts no ��s grupas?';
$lang['Confirm_unsub_pending'] = 'Piepras�jums v�l nav apstiprin�ts; P�rlieci�ts, ka v�laties atteikties no grupas?';

$lang['Unsub_success'] = 'J�s esat dz�sts no ��s grupas.';

$lang['Approve_selected'] = 'Apstiprin�ts';
$lang['Deny_selected'] = 'Noraid�ts';
$lang['Not_logged_in'] = 'Jums j�piesl�dzas d�lim, lai var�tu pievienoties grupai.';
$lang['Remove_selected'] = 'Dz�st';
$lang['Add_member'] = 'Pievienot biedru';
$lang['Not_group_moderator'] = 'J�s neesat grupas moderators.';

$lang['Login_to_join'] = 'Piesl�gties, lai pievienotos grupai, vai main�tu gupas uzstat�jumus';
$lang['This_open_group'] = 'Atv�rta grupa, spiediet, lai pievienotos';
$lang['This_closed_group'] = 'Sl�gta grupa, jaunus biedrus nepie�em';
$lang['This_hidden_group'] = 'Sl�pta grupa, autom�tiska pievieno�an�s nav at�auta';
$lang['Member_this_group'] = 'J�s esat grupas biedrs';
$lang['Pending_this_group'] = 'J�su biedra statuss ir laic�gs';
$lang['Are_group_moderator'] = 'J�s esat grupas moderators';
$lang['None'] = '0';

$lang['Subscribe'] = 'Parakst�ties';
$lang['Unsubscribe'] = 'Atrakst�ties';
$lang['View_Information'] = 'Apskat�t inform�ciju';


//
// Search
//
$lang['Search_query'] = 'Mekl�t';
$lang['Search_options'] = 'Mekl��anas parametri';

$lang['Search_keywords'] = 'Mekl�t p�c atsl�gas v�rdiem';
$lang['Search_keywords_explain'] = 'Lieto <u>AND</u> lai defin�tu v�rdus, kam j�but rezult�t�, <u>OR</u> lai defin�tu v�rdus, kuri var�tu b�t rezult�t� un <u>NOT</u> lai defin�tu v�rdus, kuriem nevajadz�tu b�t rezult�t�. Lieto * k� aizst�j�jz�mi nepiln�gam v�rdam';
$lang['Search_author'] = 'Mekl�t autoru';
$lang['Search_author_explain'] = 'Lieto * k� aizst�j�jz�mi nepiln�gam v�rdam';

$lang['Search_for_any'] = 'Mekl�t visu vai tikai jaut�jumu';
$lang['Search_for_all'] = 'Mekl�t p�c visiem parametriem';
$lang['Search_title_msg'] = 'Mekl�t t�mu un zi�ojuma tekstu';
$lang['Search_msg_only'] = 'Mekl�t tikai zi�ojuma tekstu';

$lang['Return_first'] = 'Atgriezt pirm�s'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'ierakstu z�mes';

$lang['Search_previous'] = 'Mekl�t iepriek��jo'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Atlas�t p�c';
$lang['Sort_Time'] = 'Publik�cijas laiks';
$lang['Sort_Post_Subject'] = 'Public�t t�mu';
$lang['Sort_Topic_Title'] = 'T�mas nosaukums';
$lang['Sort_Author'] = 'Autors';
$lang['Sort_Forum'] = 'Forums';

$lang['Display_results'] = 'Par�d�t rezult�tus k�';
$lang['All_available'] = 'Viss pieejamais';
$lang['No_searchable_forums'] = 'Jums nav pieejas mekl��anas lapai.';

$lang['No_search_match'] = 'Nekas nav atrasts.';
$lang['Found_search_match'] = 'Atrasts %d ieraksts'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Atrasti %d ieraksti'; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = 'L�dzu nedaudz uzgaidiet; pirms mekl�t v�lreiz.';

$lang['Close_window'] = 'Aizv�rt logu';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Atvainojamies, bet tikai %s var public�t pazi�ojumus forum�.';
$lang['Sorry_auth_sticky'] = 'Atvainojamies, bet tikai %s var public�t sliktas zi�as forum�.'; 
$lang['Sorry_auth_read'] = 'Atvainojamies, bet tikai %s var las�t t�mas forum�.'; 
$lang['Sorry_auth_post'] = 'Atvainojamies, bet tikai %s var public�t t�mas forum�.'; 
$lang['Sorry_auth_reply'] = 'Atvainojamies, bet tikai %s var atbild�t uz zi�ojumiem forum�.';
$lang['Sorry_auth_edit'] = 'Atvainojamies, bet tikai %s var labot zi�as forum�.'; 
$lang['Sorry_auth_delete'] = 'Atvainojamies, bet tikai %s var dz�st savus zi�ojumus forum�.';
$lang['Sorry_auth_vote'] = 'Atvainojamies, bet tikai %s var balsot aptauj�s forum�.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anon�mie lietot�ji</b>';
$lang['Auth_Registered_Users'] = '<b>re�istr�tie lietot�ji</b>';
$lang['Auth_Users_granted_access'] = '<b>lietot�ji ar speci�lu pieeju</b>';
$lang['Auth_Moderators'] = '<b>moder�tori</b>';
$lang['Auth_Administrators'] = '<b>administratori</b>';

$lang['Not_Moderator'] = 'J�s neesat �� foruma moderators.';
$lang['Not_Authorised'] = 'Neautoriz�ts';

$lang['You_been_banned'] = 'J�s esat izraid�ts no �� foruma.<br /> Varat sazin�ties ar lappas �pa�nieku vai administratoru.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Nav Re�istr�tu lietot�ju un '; // There are 5 Registered and
$lang['Reg_users_online'] = '%d Re�istr�tu lietot�ju un '; // There are 5 Registered and
$lang['Reg_user_online'] = '%d Re�istr�ts lietot�js un '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = 'Nav piesl�gu�ies Sl�ptie lietot�ji'; // 6 Hidden users online
$lang['Hidden_users_online'] = 'piesl�gu�ies %d Sl�ptu lietot�ju'; // 6 Hidden users online
$lang['Hidden_user_online'] = 'piesl�dzies %d Sl�pts lietot�js'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Piesl�gu�ies %d Ciemi�u'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Nav piesl�dzies neviens Ciemi��'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Piesl�dzies %d Ciemi��'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Pa�laik neviens neskat�s �o forumu';

$lang['Online_explain'] = 'Dati ir balst�ti uz lietot�ju aktivit�ti p�d�jo 5 min��u laik�';

$lang['Forum_Location'] = 'Foruma atra�an�s vieta';
$lang['Last_updated'] = 'P�d�j�s izmai�as';

$lang['Forum_index'] = 'Foruma pirm� lappa';
$lang['Logging_on'] = 'Piesl�dzas';
$lang['Posting_message'] = 'Public� zi�ojumu';
$lang['Searching_forums'] = 'Mekl� forumu';
$lang['Viewing_profile'] = 'Apskata profilu';
$lang['Viewing_online'] = 'Apskata, kas pa�laik ir piesl�dzies';
$lang['Viewing_member_list'] = 'Apskata lietot�ju sarakstu';
$lang['Viewing_priv_msgs'] = 'Apskata priv�t�s zi�as';
$lang['Viewing_FAQ'] = 'Apskata FAQ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderatora Vad�bas Panelis';
$lang['Mod_CP_explain'] = 'Izmantojot zem�k redzamo formu J�s varat veikt masu oper�cijas ar forumu. J�s varat sl�gt, atsl�gt, p�rvietot un dz�st vair�kas t�mas vienlaic�gi.';

$lang['Select'] = 'Izv�l�ties';
$lang['Delete'] = 'Dz�st';
$lang['Move'] = 'P�rvietot';
$lang['Lock'] = 'Sl�gt';
$lang['Unlock'] = 'Atv�rt';

$lang['Topics_Removed'] = 'Izv�l�t�s t�mas tika veiksm�gi izdz�stas.';
$lang['Topics_Locked'] = 'Izv�l�t�s t�mas tika sl�gtas.';
$lang['Topics_Moved'] = 'Izv�l�t�s temas tika p�rvietotas.';
$lang['Topics_Unlocked'] = 'Izv�l�t� t�mas tika atv�rtas.';
$lang['No_Topics_Moved'] = 'T�mas netika p�rvietotas.';

$lang['Confirm_delete_topic'] = 'Vai tie��m dz�st izv�l�to t�mu(-as)?';
$lang['Confirm_lock_topic'] = 'Vai tie��m sl�gt izv�l�to t�mu(-as)?';
$lang['Confirm_unlock_topic'] = 'Vai tie��m atv�rt izv�l�to t�mu(-as)?';
$lang['Confirm_move_topic'] = 'Vai tie��m p�rvietot izv�l�to t�mu(-as)?';

$lang['Move_to_forum'] = 'P�rvietot uz forumu';
$lang['Leave_shadow_topic'] = 'Atst�t �nas t�mu vecaj� forum�.';

$lang['Split_Topic'] = 'T�mas Sadal��anas Vad�bas Panelis';
$lang['Split_Topic_explain'] = 'Izmantojot zem�k redzamo formu J�s varat sadal�t t�mu uz pus�m. Sadal��anu varat veikt atz�m�jot zi�ojumus vai ar� sadalot s�kot no nor�d�t� zi�ojuma.';
$lang['Split_title'] = 'Jauns t�mas nosaukums';
$lang['Split_forum'] = 'Forums jaunajai t�mai';
$lang['Split_posts'] = 'Sadal�t izv�l�tos zi�ojumus';
$lang['Split_after'] = 'Sadal�t no izv�t�t� zi�ojuma';
$lang['Topic_split'] = 'Izv�l�t� t�ma tika veiksm�gi sadal�ta';

$lang['Too_many_error'] = 'Esat izv�l�ju�ies p�r�k daudz zi�ojumus. J�s varat nor�d�t tikai vienu zi�ojumu, p�c kura sadal�t t�mu.';

$lang['None_selected'] = 'J�s neesat izv�l�jies t�mu �ai oper�cijai. L�dzu atgriezieties un m��iniet v�lreiz.';
$lang['New_forum'] = 'Jauns forums';

$lang['This_posts_IP'] = '�� zi�ojuma public�t�j� IP';
$lang['Other_IP_this_user'] = 'Citas IP, no kur�m public�jis lietot�js';
$lang['Users_this_IP'] = 'Lietot�ji, kuri ir public�ju�i ar �o IP';
$lang['IP_info'] = 'IP inform�cija';
$lang['Lookup_IP'] = 'Skat�t IP adresi';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Visi laiki nor�d�ti %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 stundas';
$lang['-11'] = 'GMT - 11 stundas';
$lang['-10'] = 'GMT - 10 stundas';
$lang['-9'] = 'GMT - 9 stundas';
$lang['-8'] = 'GMT - 8 stundas';
$lang['-7'] = 'GMT - 7 stundas';
$lang['-6'] = 'GMT - 6 stundas';
$lang['-5'] = 'GMT - 5 stundas';
$lang['-4'] = 'GMT - 4 stundas';
$lang['-3.5'] = 'GMT - 3.5 stundas';
$lang['-3'] = 'GMT - 3 stundas';
$lang['-2'] = 'GMT - 2 stundas';
$lang['-1'] = 'GMT - 1 stunda';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 stunda';
$lang['2'] = 'GMT + 2 stundas';
$lang['3'] = 'GMT + 3 stundas';
$lang['3.5'] = 'GMT + 3.5 stundas';
$lang['4'] = 'GMT + 4 stundas';
$lang['4.5'] = 'GMT + 4.5 stundas';
$lang['5'] = 'GMT + 5 stundas';
$lang['5.5'] = 'GMT + 5.5 stundas';
$lang['6'] = 'GMT + 6 stundas';
$lang['6.5'] = 'GMT + 6.5 stundas';
$lang['7'] = 'GMT + 7 stundas';
$lang['8'] = 'GMT + 8 stundas';
$lang['9'] = 'GMT + 9 stundas';
$lang['9.5'] = 'GMT + 9.5 stundas';
$lang['10'] = 'GMT + 10 stundas';
$lang['11'] = 'GMT + 11 stundas';
$lang['12'] = 'GMT + 12 stundas';
$lang['13'] = 'GMT + 13 stundas';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 stundas';
$lang['tz']['-11'] = 'GMT - 11 stundas';
$lang['tz']['-10'] = 'GMT - 10 stundas';
$lang['tz']['-9'] = 'GMT - 9 stundas';
$lang['tz']['-8'] = 'GMT - 8 stundas';
$lang['tz']['-7'] = 'GMT - 7 stundas';
$lang['tz']['-6'] = 'GMT - 6 stundas';
$lang['tz']['-5'] = 'GMT - 5 stundas';
$lang['tz']['-4'] = 'GMT - 4 stundas';
$lang['tz']['-3.5'] = 'GMT - 3.5 stundas';
$lang['tz']['-3'] = 'GMT - 3 stundas';
$lang['tz']['-2'] = 'GMT - 2 stundas';
$lang['tz']['-1'] = 'GMT - 1 stunda';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 stunda';
$lang['tz']['2'] = 'GMT + 2 stundas';
$lang['tz']['3'] = 'GMT + 3 stundas';
$lang['tz']['3.5'] = 'GMT + 3.5 stundas';
$lang['tz']['4'] = 'GMT + 4 stundas';
$lang['tz']['4.5'] = 'GMT + 4.5 stundas';
$lang['tz']['5'] = 'GMT + 5 stundas';
$lang['tz']['5.5'] = 'GMT + 5.5 stundas';
$lang['tz']['6'] = 'GMT + 6 stundas';
$lang['tz']['6.5'] = 'GMT + 6.5 stundas';
$lang['tz']['7'] = 'GMT + 7 stundas';
$lang['tz']['8'] = 'GMT + 8 stundas';
$lang['tz']['9'] = 'GMT + 9 stundas';
$lang['tz']['9.5'] = 'GMT + 9.5 stundas';
$lang['tz']['10'] = 'GMT + 10 stundas';
$lang['tz']['11'] = 'GMT + 11 stundas';
$lang['tz']['12'] = 'GMT + 12 stundas';
$lang['tz']['13'] = 'GMT + 13 stundas';

$lang['datetime']['Sunday'] = 'Sv�tdiena';
$lang['datetime']['Monday'] = 'Pirmdiena';
$lang['datetime']['Tuesday'] = 'Otrdiena';
$lang['datetime']['Wednesday'] = 'Tre�diena';
$lang['datetime']['Thursday'] = 'Ceturtdiena';
$lang['datetime']['Friday'] = 'Piektdiena';
$lang['datetime']['Saturday'] = 'Sestdiena';
$lang['datetime']['Sun'] = 'Sv�tdena';
$lang['datetime']['Mon'] = 'Pirmdiena';
$lang['datetime']['Tue'] = 'Otrdiena';
$lang['datetime']['Wed'] = 'Tre�diena';
$lang['datetime']['Thu'] = 'Ceturtdiena';
$lang['datetime']['Fri'] = 'Piektdiena';
$lang['datetime']['Sat'] = 'Sestdiena';
$lang['datetime']['January'] = 'Janv�ris';
$lang['datetime']['February'] = 'Febru�ris';
$lang['datetime']['March'] = 'Marts';
$lang['datetime']['April'] = 'Apr�lis';
$lang['datetime']['May'] = 'Maijs';
$lang['datetime']['June'] = 'J�nijs';
$lang['datetime']['July'] = 'J�lijs';
$lang['datetime']['August'] = 'Augusts';
$lang['datetime']['September'] = 'Septembris';
$lang['datetime']['October'] = 'Oktobris';
$lang['datetime']['November'] = 'Novembris';
$lang['datetime']['December'] = 'Decembris';
$lang['datetime']['Jan'] = 'Janv�ris';
$lang['datetime']['Feb'] = 'Febru�ris';
$lang['datetime']['Mar'] = 'Marts';
$lang['datetime']['Apr'] = 'Apr�lis';
$lang['datetime']['May'] = 'Maijs';
$lang['datetime']['Jun'] = 'J�nijs';
$lang['datetime']['Jul'] = 'J�lijs';
$lang['datetime']['Aug'] = 'Augusts';
$lang['datetime']['Sep'] = 'Septembris';
$lang['datetime']['Oct'] = 'Oktobris';
$lang['datetime']['Nov'] = 'Novembris';
$lang['datetime']['Dec'] = 'Decembris';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Inform�cija';
$lang['Critical_Information'] = 'Kritiska Inform�cija';

$lang['General_Error'] = 'K��da';
$lang['Critical_Error'] = 'Kritiska k��da';
$lang['An_error_occured'] = 'K��da';
$lang['A_critical_error'] = 'Kritiska k��da';

$lang['Admin_reauthenticate'] = 'Lai administr�tu �o forumu, Jums v�lreiz j�veic autoriz�cija';
$lang['Login_attempts_exceeded'] = 'J�s esat m��in�jis piesl�gties jau %s reizes. Atvelciet elpu %s min�tes.';
$lang['Please_remove_install_contrib'] = 'L�dzu p�rliecinieties, ka ir izdz�stas gan install/, gan contrib/ direktorijas';

//
// That's all, Folks!
// -------------------------------------------------

?>