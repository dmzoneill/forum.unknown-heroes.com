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
    2006-03-25      kaspars@phpbb.lv - iesâkts. phpbb v2.0.19. tulk.versija 0.10
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
$lang['Topic'] = 'Tçma';
$lang['Topics'] = 'Tçmas';
$lang['Replies'] = 'Piebildes';
$lang['Views'] = 'Apskates';
$lang['Post'] = 'Atbildçt';
$lang['Posts'] = 'Atbildes';
$lang['Posted'] = 'Atbilde saòemta';
$lang['Username'] = 'Lietotâjs';
$lang['Password'] = 'Parole';
$lang['Email'] = 'E-pasts';
$lang['Poster'] = 'Rakstîtâjs';
$lang['Author'] = 'Autors';
$lang['Time'] = 'Laiks';
$lang['Hours'] = 'Stundas';
$lang['Message'] = 'Ziòojums';

$lang['1_Day'] = '1 diena';
$lang['7_Days'] = '7 dienas';
$lang['2_Weeks'] = '2 nedçïas';
$lang['1_Month'] = '1 mçnesis';
$lang['3_Months'] = '3 mçneði';
$lang['6_Months'] = '6 mçneði';
$lang['1_Year'] = '1 gads';

$lang['Go'] = 'Pâriet';
$lang['Jump_to'] = 'Pâriet uz';
$lang['Submit'] = 'Apstiprinât';
$lang['Reset'] = 'Atgriezt';
$lang['Cancel'] = 'Atcelt';
$lang['Preview'] = 'Apskatît';
$lang['Confirm'] = 'Apstiprinât';
$lang['Spellcheck'] = 'Rakstîbas pârbaude';
$lang['Yes'] = 'Jâ';
$lang['No'] = 'Nç';
$lang['Enabled'] = 'Atïauts';
$lang['Disabled'] = 'Aizliegts';
$lang['Error'] = 'Kïûda';

$lang['Next'] = 'Nâkoðais';
$lang['Previous'] = 'Iepriekðçjais';
$lang['Goto_page'] = 'Pâriet uz lapu';
$lang['Joined'] = 'Pievienojies';
$lang['IP_Address'] = 'IP adrese';

$lang['Select_forum'] = 'Izvçlçties forumu';
$lang['View_latest_post'] = 'Apskatît pçdçjo ziòojumu';
$lang['View_newest_post'] = 'Apskatît jaunâko ziòojumu';
$lang['Page_of'] = 'Lapa <b>%d</b> no <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ numurs';
$lang['AIM'] = 'AIM adrese';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Foruma Saturs';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Izveidot jaunu tçmu';
$lang['Reply_to_topic'] = 'Atbildçt uz tçmu';
$lang['Reply_with_quote'] = 'Atbildçt citçjot';

$lang['Click_return_topic'] = 'Spiediet %sðeit%s, lai atgrieztos uz tçmu'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Spiediet %sðeit%s, lai mçìinâtu vçlreiz';
$lang['Click_return_forum'] = 'Spiediet %sðeit%s, lai atgrieztos uz forumu';
$lang['Click_view_message'] = 'Spiediet %sðeit%s, lai apskatîtu savu ziòu';
$lang['Click_return_modcp'] = 'Spiediet %sðeit%s, lai atgrieztos uz Moderatora Vadîbas Paneli';
$lang['Click_return_group'] = 'Spiediet %sðeit%s, lai atgrieztos uz grupas informâciju';

$lang['Admin_panel'] = 'Pâriet uz Administrâcijas Paneli';

$lang['Board_disable'] = 'Atvainojiet, bet ðis forums paðlaik nav pieejams. Mçìiniet vçlâk.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Reìistrçtie Lietotâji:';
$lang['Browsing_forum'] = 'Lietotâji, kuri skatâs ðo forumu:';
$lang['Online_users_zero_total'] = 'Ðobrîd neviens nav pieslçdzies :: ';
$lang['Online_users_total'] = 'Pavisam pieslçguðies <b>%d</b> lietotâji :: ';
$lang['Online_user_total'] = 'Pavisam pieslçdzies <b>%d</b> lietotâjs :: ';
$lang['Reg_users_zero_total'] = '0 Reìistrçto, ';
$lang['Reg_users_total'] = '%d Reìistrçto, ';
$lang['Reg_user_total'] = '%d Reìistrçts, ';
$lang['Hidden_users_zero_total'] = '0 Slçpto un ';
$lang['Hidden_user_total'] = '%d Slçpto un ';
$lang['Hidden_users_total'] = '%d Slçptais un ';
$lang['Guest_users_zero_total'] = '0 Ciemiòu';
$lang['Guest_users_total'] = '%d Ciemiòu';
$lang['Guest_user_total'] = '%d Ciemiòð';
$lang['Record_online_users'] = 'Visvairâk lietotâju vienlaikus bijis <b>%s</b> (%s)'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrators%s';
$lang['Mod_online_color'] = '%sModerators%s';

$lang['You_last_visit'] = 'Pçdçjo reizi ðeit bijât %s'; // %s replaced by date/time
$lang['Current_time'] = 'Tagad ir %s'; // %s replaced by time

$lang['Search_new'] = 'Skatît jaunos ziòojumus kopð pçdçja apmeklçjuma';
$lang['Search_your_posts'] = 'Skatît savus ziòojumus';
$lang['Search_unanswered'] = 'Skatît neatbildçtos ziòojumus';

$lang['Register'] = 'Reìistrçties';
$lang['Profile'] = 'Profils';
$lang['Edit_profile'] = 'Mainît sava profila iestatîjumus';
$lang['Search'] = 'Meklçt';
$lang['Memberlist'] = 'Lietotâju saraksts';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'BBCode pamacîba';
$lang['Usergroups'] = 'Lietotâju Grupas';
$lang['Last_Post'] = 'Pçdçjais ziòojums';
$lang['Moderator'] = 'Moderators';
$lang['Moderators'] = 'Moderatori';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Mûsu lietotâji kopâ ir publicçjuði <b>0</b> ziòojumus'; // Number of posts
$lang['Posted_articles_total'] = 'Mûsu lietotâji kopâ ir publicçjuði <b>%d</b> ziòojumus'; // Number of posts
$lang['Posted_article_total'] = 'Mûsu lietotâji kopâ ir publicçjuði <b>%d</b> ziòojumus'; // Number of posts
$lang['Registered_users_zero_total'] = 'Mums ir <b>0</b> reìistrçti lietotaji'; // # registered users
$lang['Registered_users_total'] = 'Mums ir <b>%d</b> reìistrçti lietotâji'; // # registered users
$lang['Registered_user_total'] = 'Mums ir <b>%d</b> reìistrçts lietotâjs'; // # registered users
$lang['Newest_user'] = 'Jaunâkais reìistrçtais lietotâjs ir <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Kopð Jûsu pçdçja apmeklçjuma nav neviena jauna ziòojuma';
$lang['No_new_posts'] = 'Nav jaunu ziòojumu';
$lang['New_posts'] = 'Jauni ziòojumi';
$lang['New_post'] = 'Jauns ziòojums';
$lang['No_new_posts_hot'] = 'Nav jaunu ziòojumu [ Populârs ]';
$lang['New_posts_hot'] = 'Jauni ziòojumi [ Populârs ]';
$lang['No_new_posts_locked'] = 'Nav jaunu ziòojumu [ Slçgts ]';
$lang['New_posts_locked'] = 'Jauni ziòojumi [ Slçgts ]';
$lang['Forum_is_locked'] = 'Forums ir slçgts';


//
// Login
//
$lang['Enter_password'] = 'Lûdzu ievadiet savu lietotâja vârdu un paroli';
$lang['Login'] = 'Ieiet';
$lang['Logout'] = 'Iziet';

$lang['Forgotten_password'] = 'Esmu aizmirsis savu paroli';

$lang['Log_me_in'] = 'Pieslçgties automâtiski, kad atveru ðo logu';

$lang['Error_login'] = 'Jûs esat ievadîjis nepareizu vai neaktîva lietotâja vârdu vai arî kïûdainu paroli.';


//
// Index page
//
$lang['Index'] = 'Saturs';
$lang['No_Posts'] = 'Nav ziòojumu';
$lang['No_forums'] = 'Ðajâ dçlî nav forumu';

$lang['Private_Message'] = 'Privâta Ziòa';
$lang['Private_Messages'] = 'Privâtas Ziòas';
$lang['Who_is_Online'] = 'Kas ir Pieslçdzies';

$lang['Mark_all_forums'] = 'Atzîmçt visus forumus kâ izlasîtus';
$lang['Forums_marked_read'] = 'Visi forumi atzîmçti kâ izlasîti';


//
// Viewforum
//
$lang['View_forum'] = 'Apskatît forumu';

$lang['Forum_not_exist'] = 'Jûsu izvçlçtais forums neeksistç';
$lang['Reached_on_error'] = 'Kïûda';

$lang['Display_topics'] = 'Attçlot tematus sâkot ar iepriekðçjo';
$lang['All_Topics'] = 'Visi temati';

$lang['Topic_Announcement'] = '<b>Paziòojums:</b>';
$lang['Topic_Sticky'] = '<b>Pielipinâts paziòojums:</b>';
$lang['Topic_Moved'] = '<b>Pârvietots:</b>';
$lang['Topic_Poll'] = '<b>[ Aptauja ]</b>';

$lang['Mark_all_topics'] = 'Atzîmçt visus tematus kâ izlasîtus';
$lang['Topics_marked_read'] = 'Ðî foruma temati tagad ir atzîmçti kâ izlasîti';

$lang['Rules_post_can'] = 'Jûs <b>varat</b> pievienot jaunus tematus ðim forumam';
$lang['Rules_post_cannot'] = 'Jûs <b>nevarat</b> pievienot jaunus tematus ðim forumam';
$lang['Rules_reply_can'] = 'Jûs <b>varat</b> atbildçt tematos ðajâ forumâ';
$lang['Rules_reply_cannot'] = 'Jûs <b>nevarat</b> atbildçt tematos ðajâ forumâ';
$lang['Rules_edit_can'] = 'Jûs <b>varat</b> labot Jûsu ziòojumus forumâ';
$lang['Rules_edit_cannot'] = 'Jûs <b>nevarat</b> labot Jûsu ziòojumus forumâ';
$lang['Rules_delete_can'] = 'Jûs <b>varat</b> dzçst Jûsu ziòojumus forumâ';
$lang['Rules_delete_cannot'] = 'Jûs <b>nevarat</b> dzçst Jûsu ziòojumus forumâ';
$lang['Rules_vote_can'] = 'Jûs <b>varat</b> piedalîties aptaujâ ðajâ forumâ';
$lang['Rules_vote_cannot'] = 'Jûs <b>nevarat</b> piedalîties aptaujâ ðajâ forumâ';
$lang['Rules_moderate'] = 'Jûs <b>varat</b> %smoderçt ðo forumu%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'Ðajâ forumâ nav tematu.<br />Spiediet uz <b>Publicçt jaunu tematu</b>, lai to sâktu jaunu tçmu.';


//
// Viewtopic
//
$lang['View_topic'] = 'Apskatît tematu';

$lang['Guest'] = 'Viesis';
$lang['Post_subject'] = 'Tçma';
$lang['View_next_topic'] = 'Apskatît nâkamo tematu';
$lang['View_previous_topic'] = 'Apskatît iepiekðçjo tematu';
$lang['Submit_vote'] = 'Apstiprinât balsojumu';
$lang['View_results'] = 'Apskatît rezultâtus';

$lang['No_newer_topics'] = 'Nav jaunâku tematu ðajâ forumâ';
$lang['No_older_topics'] = 'Nav vecâku tematu ðaja forumâ';
$lang['Topic_post_not_exist'] = 'Jûsu pieprasîtais Temats vai Ziòojums, diemþçl, neeksistç';
$lang['No_posts_topic'] = 'Ðai tçmai nav ziòojumu';

$lang['Display_posts'] = 'Attçlot ziòojumus sâkot ar pirmspçdçjo';
$lang['All_Posts'] = 'Visi ziòojumi';
$lang['Newest_First'] = 'Jaunâkais pirmais';
$lang['Oldest_First'] = 'Vecâkais pirmais';

$lang['Back_to_top'] = 'Atpakaï uz augðu';

$lang['Read_profile'] = 'Apskatît lietotâja(-u) profilu'; 
$lang['Visit_website'] = 'Apmeklçt autora Mâjas Lapu';
$lang['ICQ_status'] = 'ICQ statuss';
$lang['Edit_delete_post'] = 'Labot/Dzçst ðo ziòojumu';
$lang['View_IP'] = 'Apskatît rakstîtâja IP adresi';
$lang['Delete_post'] = 'Dzçst ðo ziòojumu';

$lang['wrote'] = 'rakstîja'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Citçt'; // comes before bbcode quote output.
$lang['Code'] = 'Kods'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Pçdçjo reizi labojis %s %s; labots %d reizi'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Pçdçjo reizi labojis %s %s; labots %d reizes'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Slçgt ðo tematu';
$lang['Unlock_topic'] = 'Atslçgt ðo tematu';
$lang['Move_topic'] = 'Pârvietot ðo tematu';
$lang['Delete_topic'] = 'Dzçst ðo tematu';
$lang['Split_topic'] = 'Sadalît ðo tematu';

$lang['Stop_watching_topic'] = 'Beigt uzraudzît ðo tematu';
$lang['Start_watching_topic'] = 'Uzraudzît atbildes ðajâ tematâ';
$lang['No_longer_watching'] = 'Jûs vairs neuzraugat ðo tematu';
$lang['You_are_watching'] = 'Jûs tagad uzraugat ðo tematu';

$lang['Total_votes'] = 'Kopâ Balsis';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Ziòojums';
$lang['Topic_review'] = 'Tçmas apskats';

$lang['No_post_mode'] = 'Publicçt ziòojumu nav paredzçts'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Publicçt jaunu tçmu';
$lang['Post_a_reply'] = 'Publicçt atbildi';
$lang['Post_topic_as'] = 'Publicçt tçmu kâ';
$lang['Edit_Post'] = 'Rediìçt ziòojumu';
$lang['Options'] = 'Uzstatîjumi';

$lang['Post_Announcement'] = 'Paziòojums';
$lang['Post_Sticky'] = 'Pielipinâts';
$lang['Post_Normal'] = 'Normâls';

$lang['Confirm_delete'] = 'Vai Jûs tieðâm vçlaties dzçst ðo ziòu?';
$lang['Confirm_delete_poll'] = 'Vai Jûs tieðâm vçlaties dzçst ðo aptauju?';

$lang['Flood_Error'] = 'Paðlaik tiek publicçts Jûsu iepriekðçjais ziòojums, lûdzu nedaudz uzgaidiet, pirms rakstît nâkamo ziòu.';
$lang['Empty_subject'] = 'Lûdzu norâdiet ziòojuma tçmu.';
$lang['Empty_message'] = 'Lûdzu ierakstiet ziòojuma tekstu.';
$lang['Forum_locked'] = 'Ðis forums ir slçgts: Publicçt, atbildçt, labot tçmas nav iespçjams.';
$lang['Topic_locked'] = 'Ðî tçma ir slçgta: Nav iespçjams nedz labot, nedz atbildçt uz ziòojumiem.';
$lang['No_post_id'] = 'Netika norâdîts ziòojuma ID';
$lang['No_topic_id'] = 'Vispirms ir jâizvçlas tçma uz kuru vçlaties atbildçt';
$lang['No_valid_mode'] = 'Jûs varat tikai publicçt, atbildçt, labot vai citçt ziòas. Lûdzu atgriezieties uz ieprieðçjo lapu un mçìiniet vçlreiz.';
$lang['No_such_post'] = 'Nav tâda ziòojuma. Lûdzu atgriezieties uz ieprieðçjo lapu un mçìiniet vçlreiz.';
$lang['Edit_own_posts'] = 'Jûs varat labot tikai pats savus ziòojumus.';
$lang['Delete_own_posts'] = 'Jûs varat dzçst tikai pats savus ziòojumus.';
$lang['Cannot_delete_replied'] = 'Diemþçl nav iespçjams dzçst ziòojumus uz kuriem jau ir atbildçts.';
$lang['Cannot_delete_poll'] = 'Nav iespçjams dzçst paðlaik aktîvu aptauju.';
$lang['Empty_poll_title'] = 'Jums jâievada aptaujas nosaukums.';
$lang['To_few_poll_options'] = 'Aptaujâ jâievada vismaz divi atbilþu varianti.';
$lang['To_many_poll_options'] = 'Jûs mçìinâjât ievadît parâk daudz atbilþu variantus.';
$lang['Post_has_no_poll'] = 'Ziòojumam nav aptaujas.';
$lang['Already_voted'] = 'Jûs jau esat piedalîjies ðajâ aptaujâ.';
$lang['No_vote_option'] = 'Ja piedalâties aptaujâ, tad vispirms ir jâizvçlas atbildes variants.';

$lang['Add_poll'] = 'Pievienot aptauju';
$lang['Add_poll_explain'] = 'Ja Jûs nevçlaties pievienot aptauju ðai tçmai, tad atstâjiet ðos laukus tukðus.';
$lang['Poll_question'] = 'Aptaujas jautâjums';
$lang['Poll_option'] = 'Aptaujas atbildes varianti';
$lang['Add_option'] = 'Pievienot variantu';
$lang['Update'] = 'Atjaunot';
$lang['Delete'] = 'Dzçst';
$lang['Poll_for'] = 'Aptauja bûs aktîva';
$lang['Days'] = 'Dienas'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Ievadiet 0 vai atstâjie tukðu, ja nevçlaties uzlikt dienu ierobeþojumu ]';
$lang['Delete_poll'] = 'Dzçst aptauju';

$lang['Disable_HTML_post'] = 'Aizliegt HTML ziòojumâ';
$lang['Disable_BBCode_post'] = 'Aizliegt BBCode ziòojumâ';
$lang['Disable_Smilies_post'] = 'Aizliegt Smaidiòus ziòojumâ';

$lang['HTML_is_ON'] = 'HTML ir <u>ON</u>';
$lang['HTML_is_OFF'] = 'HTML ir <u>OFF</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s ir <u>ON</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s ir <u>OFF</u>';
$lang['Smilies_are_ON'] = 'Smaidiòi ir <u>ON</u>';
$lang['Smilies_are_OFF'] = 'Smaidiòi ir <u>OFF</u>';

$lang['Attach_signature'] = 'Pievienot parakstu (parakstu varat izmainît sava lietotâja uzstâdîjumos)';
$lang['Notify'] = 'Ziòot man par atbildçm';

$lang['Stored'] = 'Jûsu ziòojums tika veiksmîgi pievienots.';
$lang['Deleted'] = 'Jûsus ziòojums tika veiksmîgi izdzçsts.';
$lang['Poll_delete'] = 'Jûsu aptauja tika veiksmîgi izdzçsta.';
$lang['Vote_cast'] = 'Jûsu balss ir ieskaitîta.';

$lang['Topic_reply_notification'] = 'Tçmas atbildes ziòojums';

$lang['bbcode_b_help'] = 'Biezs teksts: [b]text[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Kursîvs teksts: [i]text[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Pasvîtrots teksts: [u]text[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Citçts teksts: [quote]text[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Koda fragments: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Saraksts: [list]text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Numurçts saraksts: [list=]text[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Iekïaut attçlu: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Iekïaut adresi: [url]http://url[/url] vai [url=http://url]adreses teksts[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Aizvçrt visus atvçrtos bbCode tegus';
$lang['bbcode_s_help'] = 'Burtu krâsa: [color=red]teksts[/color]  Noz.: vari arî lietot color=#FF0000';
$lang['bbcode_f_help'] = 'Burtu lielums: [size=x-small]mazs teksts[/size]';

$lang['Emoticons'] = 'Smaidiòi';
$lang['More_emoticons'] = 'Skatît vairâk';

$lang['Font_color'] = 'Burtu krâsa';
$lang['color_default'] = '------';
$lang['color_dark_red'] = 'Tumði sark.';
$lang['color_red'] = 'Sarkana';
$lang['color_orange'] = 'Oranþa';
$lang['color_brown'] = 'Brûna';
$lang['color_yellow'] = 'Dzeltena';
$lang['color_green'] = 'Zaïa';
$lang['color_olive'] = 'Olîva';
$lang['color_cyan'] = 'G. zila';
$lang['color_blue'] = 'Zila';
$lang['color_dark_blue'] = 'T. zila';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violeta';
$lang['color_white'] = 'Balta';
$lang['color_black'] = 'Melna';

$lang['Font_size'] = 'Burtu lielums';
$lang['font_tiny'] = 'Sîks';
$lang['font_small'] = 'Mazs';
$lang['font_normal'] = 'Normâls';
$lang['font_large'] = 'Liels';
$lang['font_huge'] = 'Milzîgs';

$lang['Close_Tags'] = 'Aizvçrt tegus';
$lang['Styles_tip'] = 'Noz.: Stilus âtrâk var pievienot iezîmçtam tekstam';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Privâtais ziòojumu centrs';

$lang['Login_check_pm'] = 'Ieiet, lai pârbaudîtu privâtâs ziòas';
$lang['New_pms'] = 'Jums ir %d jaunas ziòas'; // You have 2 new messages
$lang['New_pm'] = 'Jums ir %d jauna ziòa'; // You have 1 new message
$lang['No_new_pm'] = 'Jums nav jaunas ziòas';
$lang['Unread_pms'] = 'Jums ir %d neizlasîti ziòojumi';
$lang['Unread_pm'] = 'Jums ir %d neizlasîts ziòojums';
$lang['No_unread_pm'] = 'Jums nav neizlasîtu ziòojumu';
$lang['You_new_pm'] = 'Jauna privâtâ ziòa Jûs gaida Iesûtnç';
$lang['You_new_pms'] = 'Jaunas privâtâs ziòas Jûs gaida Iesûtnç';
$lang['You_no_new_pm'] = 'Jums nav jaunu privato ziòu';

$lang['Unread_message'] = 'Nelasît ziòu';
$lang['Read_message'] = 'Lasît ziòu';

$lang['Read_pm'] = 'Lasît ziòu';
$lang['Post_new_pm'] = 'Publicçt ziòu';
$lang['Post_reply_pm'] = 'Atbildçt uz ziòu';
$lang['Post_quote_pm'] = 'Citçt ziòu';
$lang['Edit_pm'] = 'Mainît ziòu';

$lang['Inbox'] = 'Iesûtne';
$lang['Outbox'] = 'Sûtâmâs';
$lang['Savebox'] = 'Saglabâtâs';
$lang['Sentbox'] = 'Aizsûtîtâs';
$lang['Flag'] = 'Karogs';
$lang['Subject'] = 'Tçma';
$lang['From'] = 'No';
$lang['To'] = 'Kam';
$lang['Date'] = 'Datums';
$lang['Mark'] = 'Iezîmçt';
$lang['Sent'] = 'Sûtît';
$lang['Saved'] = 'Saglabât';
$lang['Delete_marked'] = 'Dzçst iezîmçtâs';
$lang['Delete_all'] = 'Dzçst visas';
$lang['Save_marked'] = 'Saglabât iezîmçtâs'; 
$lang['Save_message'] = 'saglabâs ziòu';
$lang['Delete_message'] = 'Dzçst ziòu';

$lang['Display_messages'] = 'Attçlot ziòas no pirmspçdçjâs'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Visas ziòas';

$lang['No_messages_folder'] = 'Jums nav ziòu ðajâ mapç';

$lang['PM_disabled'] = 'Ðajâ forumâ Privâto ziòu sûtîðana ir aizliegta.';
$lang['Cannot_send_privmsg'] = 'Privâto ziòu sûtîðana ir aizliegta.';
$lang['No_to_user'] = 'Lûdzu norâdiet saòçmçja vârdu.';
$lang['No_such_user'] = 'Ðâds lietotâjs diemþçl neeksistç.';

$lang['Disable_HTML_pm'] = 'Aizliegt HTML ðajâ ziòojumâ';
$lang['Disable_BBCode_pm'] = 'Aizliegt BBCode ðajâ ziòojumâ';
$lang['Disable_Smilies_pm'] = 'Aizliegt Smaidiòus ðajâ ziòojumâ';

$lang['Message_sent'] = 'Jûsu ziòojums tika nosûtîts.';

$lang['Click_return_inbox'] = 'Spiediet %sðeit%s, lai atgrieztos Pasta Kastç';
$lang['Click_return_index'] = 'Spiediet %sðeit%s, lai atgrieztos Foruma Saturâ';

$lang['Send_a_new_message'] = 'Sûtît jaunu privâto ziòu';
$lang['Send_a_reply'] = 'Atbildçt uz privâto ziòu';
$lang['Edit_message'] = 'Labot privâto ziòu';

$lang['Notification_subject'] = 'Jums ir jauna privâtâ ziòa!';

$lang['Find_username'] = 'Meklçt lietotâju';
$lang['Find'] = 'Meklçt';
$lang['No_match'] = 'Nekas nav atrasts.';

$lang['No_post_id'] = 'Netika norâdîts ziòojuma ID';
$lang['No_such_folder'] = 'Mape neeksistç';
$lang['No_folder'] = 'Nav norâdîta mape';

$lang['Mark_all'] = 'Iezîmçt visus';
$lang['Unmark_all'] = 'Neiezîmçt visus';

$lang['Confirm_delete_pm'] = 'Vai Jûs tieðâm vçlaties dzçst ðo ziòu?';
$lang['Confirm_delete_pms'] = 'Vai Jûs tieðâm vçlaties dzçst ðîs ziòas?';

$lang['Inbox_size'] = 'Jûsu Iesûtne ir %d%% pilna'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Jûsu Sûtîtâs ir %d%% pilna'; 
$lang['Savebox_size'] = 'Jûsu Saglabâtâs ir %d%% pilna'; 

$lang['Click_view_privmsg'] = 'Spiediet %sðeit%s, lai apmeklçtu Iesûtni';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Apskatît profilu :: %s'; // %s is username 
$lang['About_user'] = 'Viss par %s'; // %s is username

$lang['Preferences'] = 'Uzstatîjumi';
$lang['Items_required'] = 'Ar zvaigznîti(*) atzîmçtie lauki ir jâaizpilda obligâti, ja vien nav norâdîts savâdâk.';
$lang['Registration_info'] = 'Reìistrâcijas Informâcija';
$lang['Profile_info'] = 'Profila Informâcija';
$lang['Profile_info_warn'] = 'Ðî informâcija bûs publiski apskatâma';
$lang['Avatar_panel'] = 'Attçlu vadîbas panelis';
$lang['Avatar_gallery'] = 'Attçlu galerija';

$lang['Website'] = 'Mâjas lappa';
$lang['Location'] = 'Dzîvesvieta';
$lang['Contact'] = 'Kontakti';
$lang['Email_address'] = 'E-pasta adrese';
$lang['Send_private_message'] = 'Sûtît privâtu ziòu';
$lang['Hidden_email'] = '[ Slçpts ]';
$lang['Interests'] = 'Intereses';
$lang['Occupation'] = 'Nodarboðanâs'; 
$lang['Poster_rank'] = 'Reitings';

$lang['Total_posts'] = 'Kopâ publicçts';
$lang['User_post_pct_stats'] = '%.2f%% no kopçjâ'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f ziòojumi dienâ'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Atrast visus %s rakstîtos ziòojumus '; // Find all posts by username

$lang['No_user_id_specified'] = 'Lietotâjs neeksistç.';
$lang['Wrong_Profile'] = 'Jûs nevarat labot sveðu profailu.';

$lang['Only_one_avatar'] = 'Var tikt norâdîts tikai viena tipa attçls';
$lang['File_no_data'] = 'Norâdîjâ failâ nav informâcijas';
$lang['No_connection_URL'] = 'Neizdevâs pieslçgties norâdîtajam URL';
$lang['Incomplete_URL'] = 'URL nav pilnîgs';
$lang['Wrong_remote_avatar_format'] = 'Attâlinâtâ Attçla URL nav derîgs';
$lang['No_send_account_inactive'] = 'Paroli nevar atjaunot, jo Jûsu lietotâjs paðlaik ir neaktîvs. Lûdzu sazinieties ar foruma administratoru.';

$lang['Always_smile'] = 'Vienmçr atïaut Smaidiòus';
$lang['Always_html'] = 'Vienmçr atïaut HTML';
$lang['Always_bbcode'] = 'Vienmçr atïaut BBCode';
$lang['Always_add_sig'] = 'Vienmçr pievienot manu parakstu';
$lang['Always_notify'] = 'Vienmçr informçt mani par atbildçm';
$lang['Always_notify_explain'] = 'Sûtît e-pastu, kad kâds atbild uz tçmu, kuru esmu iesâcis. Jûs varçsiet to mainît ';

$lang['Board_style'] = 'Foruma stils';
$lang['Board_lang'] = 'Foruma valoda';
$lang['No_themes'] = 'Datubâzç nav Vizuâlo Tçmu';
$lang['Timezone'] = 'Laika zona';
$lang['Date_format'] = 'Datuma formâts';
$lang['Date_format_explain'] = 'Sintakse ir identiska PHP funkcijai <a href=\'http://www.php.net/date\' target=\'_other\'>datuma()</a>.';
$lang['Signature'] = 'Paraksts';
$lang['Signature_explain'] = 'Ðis ir teksts, kuru varat pievienot visâm savâm publikâcijâm. Ðim tekstam ir %d zîmju ierobeþojums';
$lang['Public_view_email'] = 'Vienmçr râdît manu e-pasta adresi';

$lang['Current_password'] = 'Tagadçjâ parole';
$lang['New_password'] = 'Jaunâ parole';
$lang['Confirm_password'] = 'Jaunâ parole vçlreiz';
$lang['Confirm_password_explain'] = 'Jums ir jâievada sava paðreizçjâ parole, ja vçlaties to nomainît vai arî nomainiet savu e-pasta adresi';
$lang['password_if_changed'] = 'Parole ir jâievada tikai tad, ja vçlaties to mainît';
$lang['password_confirm_if_changed'] = 'Parole ir jâapstiprina tikai tad, ja to ievadîjât augstâk';

$lang['Avatar'] = 'Attçls';
$lang['Avatar_explain'] = 'Attçlo mazu bildîti zem Jûsu datiem katrâ ziòojumâ. Vienlaicîgi var tikt attçlo tikai viena bilde, tâs platums nevar bût lielâks par %d pikseïiem un augstums par %d pikseïiem. Faila izmçrs nedrîkst pârsniegt %d KB.';
$lang['Upload_Avatar_file'] = 'Ielâdçt no Jûsu PC';
$lang['Upload_Avatar_URL'] = 'Ielâdçt no URL';
$lang['Upload_Avatar_URL_explain'] = 'Ievadiet URL ar attçla atraðanâs vietu.';
$lang['Pick_local_Avatar'] = 'Izvçlçties bildi no galerijas';
$lang['Link_remote_Avatar'] = 'Links uz attâlinâtu attçlu';
$lang['Link_remote_Avatar_explain'] = 'Ievadiet URL ar attçla atraðanâs vietu';
$lang['Avatar_URL'] = 'Attçla URL';
$lang['Select_from_gallery'] = 'Izvçlçties no galerijas';
$lang['View_avatar_gallery'] = 'Râdît galeriju';

$lang['Select_avatar'] = 'Izvçlçties';
$lang['Return_profile'] = 'Atcelt';
$lang['Select_category'] = 'Izvçlçties kategoriju';

$lang['Delete_Image'] = 'Dzçst bildi';
$lang['Current_Image'] = 'Tagadçjâ bilde';

$lang['Notify_on_privmsg'] = 'Informçt par jaunu privâtu ziòojumu';
$lang['Popup_on_privmsg'] = 'Jauns logs, kad saòemu privâtu ziòojumu'; 
$lang['Popup_on_privmsg_explain'] = 'Tiek atvçrts jauns logs, lai informçtu Jûs, ka ir saòemts jauns privâtais ziòojums.';
$lang['Hide_user'] = 'Slçpt savu on-line statusu';

$lang['Profile_updated'] = 'Profils izmainîts';
$lang['Profile_updated_inactive'] = 'Profils atjaunots. Gaidiet administratora ziòu.';

$lang['Password_mismatch'] = 'Paroles nesakrît.';
$lang['Current_password_mismatch'] = 'Jûsu ievadîtâ parole nesakrît ar datubâzç esoðo.';
$lang['Password_long'] = 'Parole nedrîst bût garâka par 32 zîmçm.';
$lang['Username_taken'] = 'Ðis lietotâja vârds jau ir aizòemts.';
$lang['Username_invalid'] = 'Ðis lietotâja vârds satur neatïautas zîmes, kâ piemçram \'.';
$lang['Username_disallowed'] = 'Ðâds lietotâja vârds ir aizliegts.';
$lang['Email_taken'] = 'E-pasta adrese jau ir reìistrçta citam lietotâjam.';
$lang['Email_banned'] = 'E-pasta adrese ir aizliegta.';
$lang['Email_invalid'] = 'E-pasta adrese nav derîga.';
$lang['Signature_too_long'] = 'Jûsu paraksts ir pârâk garð.';
$lang['Fields_empty'] = 'Aizpildiet prasîtos laukumus.';
$lang['Avatar_filetype'] = 'Attçla tipam ir jâbût .jpg, .gif vai .png';
$lang['Avatar_filesize'] = 'Attçla izmçram jâbût mazâkam par %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Attçlam jâbût ðaurâkam par %d pikseïiem un zemâkam par %d pikseïiem'; 

$lang['Welcome_subject'] = 'Laipni lûgti %s Forumâ'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Jauns lietotâja konts';
$lang['Account_activated_subject'] = 'Konts aktivizçts';

$lang['Account_added'] = 'Jûsu lietotâja konts tagad ir izveidots. Jûs varat pieslçgties forumam izmantojot savu jauno lietotâja vârdu un paroli';
$lang['Account_inactive'] = 'Jûsu lietotâja konts tika izveidots, taèu ðis forums paredz konta aktivizâciju. Pârbaudiet savu e-pastu un sekojiet saòemtajiem norâdîjumiem';
$lang['Account_inactive_admin'] = 'Jûsu lietotâja konts tika izveidots, taèu Jûsu kontu aktivizçs administrators. Administrâcijai tika nosûtîts epasts un Jûs tiksiet informçts par sava jaunâ foruma konta aktivizâciju.';
$lang['Account_active'] = 'Konts ir aktivizçts. Paldies, ka reìistrçjâties.';
$lang['Account_active_admin'] = 'Konts tagad ir aktivizçts';
$lang['Reactivate'] = 'Aktivizçjiet savu kontu atkârtoti!';
$lang['Already_activated'] = 'Jûs jau esat aktivizçjis savu kontu';
$lang['COPPA'] = 'Konts ir izveidots, bet tam nepiecieðams apstiprinâjums. Apskatiet savu e-pasta kastîti.';

$lang['Registration'] = 'Foruma noteikumi';
$lang['Reg_agreement'] = 'While the administrators and moderators of this forum will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every message. Therefore you acknowledge that all posts made to these forums express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.<br /><br />You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all posts is recorded to aid in enforcing these conditions. You agree that the webmaster, administrator and moderators of this forum have the right to remove, edit, move or close any topic at any time should they see fit. As a user you agree to any information you	have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster, administrator and moderators cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br /><br />This forum system uses cookies to store information on your local computer. These cookies do not contain any of the information you have entered above, they serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password (and for sending new passwords should you forget your current one).<br /><br />By clicking Register below you agree to be bound by these conditions.';

$lang['Agree_under_13'] = 'Es piekrîtu ðiem noteikumiem, bet esmu <b>jaunâks par</b> 13 gadiem';
$lang['Agree_over_13'] = 'Es piekrîtu ðiem noteikumiem, un esmu <b>vecâks par</b> 13 gadiem';
$lang['Agree_not'] = 'Es nepiekrîtu ðiem noteikumiem';

$lang['Wrong_activation'] = 'Aktivizâcijas atslçga nav atrasta.';
$lang['Send_password'] = 'Nosûtiet man jaunu paroli'; 
$lang['Password_updated'] = 'Parole izveidota, lûdzu pârbaudiet savu e-pastu, lai uzzinâtu kâ to aktivizçt.';
$lang['No_email_match'] = 'E-pasta adrese neatbilst lietotâjam.';
$lang['New_password_activation'] = 'Jaunas paroles aktivizâcija';
$lang['Password_activated'] = 'Jûsu lietotâjs tagad ir aktîvs. Lai pieslçgtos lûdzu izmantojiet e-pastâ saòemto paroli.';

$lang['Send_email_msg'] = 'Sûtît e-pasta ziòojumu';
$lang['No_user_specified'] = 'Nav norâdîts lietotâjs';
$lang['User_prevent_email'] = 'Ðis lietotâjs nevçlas saòemt e-pastu. Mçìiniet sûtît privâtu ziòu.';
$lang['User_not_exist'] = 'Lietotâjs neeksistç';
$lang['CC_email'] = 'E-pasta kopiju nosûtît sev';
$lang['Email_message_desc'] = 'Ðî ziòa tiks nosûtîta, kâ vienkârð teksts, tâdçï lûdzu neizmantojiet HTML un BBCode.';
$lang['Flood_email_limit'] = 'Jûsu iepriekðçjais e-pasts vçl tiek apstrâdâts, lûdzu nedaudz uzgaidiet pirms sûtît nâkamo.';
$lang['Recipient'] = 'Saòçmçjs';
$lang['Email_sent'] = 'E-pasts nosûtîts.';
$lang['Send_email'] = 'Sûtît e-pastu';
$lang['Empty_subject_email'] = 'Ierakstiet e-pasta tçmu.';
$lang['Empty_message_email'] = 'Ierakstiet e-pasta tekstu.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Apstiprinâjuma kods netika ievadîts pareizi.';
$lang['Too_many_registers'] = 'Mçìinâjumu skaits ðîs sessijas ietvaros ir iztçrçts. Lûdzu mçìiniet vçlâk.';
$lang['Confirm_code_impaired'] = 'Ja Jums ir redzes problçmas, un nevarat ievadît redzamo kodu, tad lûdzu sazinieties ar %sAdministrator%s.';
$lang['Confirm_code'] = 'Apstiprinâjuma kods';
$lang['Confirm_code_explain'] = 'Lûdzu ievadiet augstâk redzamo kodu.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Sakârtot pçc';
$lang['Sort'] = 'Atlasît';
$lang['Sort_Top_Ten'] = 'top 10 rakstîtâji';
$lang['Sort_Joined'] = 'Reìistrçðanâs datuma';
$lang['Sort_Username'] = 'Lietotâja vârda';
$lang['Sort_Location'] = 'Atraðanâs vietas';
$lang['Sort_Posts'] = 'Publikâciju skaita';
$lang['Sort_Email'] = 'E-pasta';
$lang['Sort_Website'] = 'Mâjas lapas';
$lang['Sort_Ascending'] = 'Augoða';
$lang['Sort_Descending'] = 'Dilstoða';
$lang['Order'] = 'Secîba: ';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Grupu kontroles panelis';
$lang['Group_member_details'] = 'Grupu dalîbas detaïas';
$lang['Group_member_join'] = 'Piebiedroties';

$lang['Group_Information'] = 'Grupas informâcija';
$lang['Group_name'] = 'Grupas nosaukums';
$lang['Group_description'] = 'Grupas apraksts';
$lang['Group_membership'] = 'Grupas piederîba';
$lang['Group_Members'] = 'Grupas biedri';
$lang['Group_Moderator'] = 'Grupas Moderators';
$lang['Pending_members'] = 'Laika biedri';

$lang['Group_type'] = 'Grupas tips';
$lang['Group_open'] = 'Atvçrt grupu';
$lang['Group_closed'] = 'Slçgt grupu';
$lang['Group_hidden'] = 'Slçptâ grupa';

$lang['Current_memberships'] = 'Tagadçjâ piederîba';
$lang['Non_member_groups'] = 'Tukðas grupas';
$lang['Memberships_pending'] = 'Piederîbas uzskaite';

$lang['No_groups_exist'] = 'Nav grupu';
$lang['Group_not_exist'] = 'Nav grupu';

$lang['Join_group'] = 'Pievienoties';
$lang['No_group_members'] = 'Grupai nav biedru';
$lang['Group_hidden_members'] = 'Slçpta grupa';
$lang['No_pending_group_members'] = 'Nav uzskaites';
$lang['Group_joined'] = 'Veiksmîgi parakstîjies uz grupu.<br />Ziòosim, kad tiksiet uzòemts.';
$lang['Group_request'] = 'Ir saòemts jauns pievienoðanâs pieprasîjums Jûsu grupai.';
$lang['Group_approved'] = 'Pieprasîjums apstiprinâts.';
$lang['Group_added'] = 'Jûs esat pievienots grupai.'; 
$lang['Already_member_group'] = 'Jûs jau esat grupas biedrs';
$lang['User_is_member_group'] = 'Lietotâjs jau ir grupas biedrs';
$lang['Group_type_updated'] = 'Veiksmîgi atjaunots grupas tips.';

$lang['Could_not_add_user'] = 'Lietotâjs neeksistç.';
$lang['Could_not_anon_user'] = 'Anonîmus neieòem.';

$lang['Confirm_unsub'] = 'Vai esat droðs, ka vçlaties tikt dzçsts no ðîs grupas?';
$lang['Confirm_unsub_pending'] = 'Pieprasîjums vçl nav apstiprinâts; Pârlieciâts, ka vçlaties atteikties no grupas?';

$lang['Unsub_success'] = 'Jûs esat dzçsts no ðîs grupas.';

$lang['Approve_selected'] = 'Apstiprinâts';
$lang['Deny_selected'] = 'Noraidîts';
$lang['Not_logged_in'] = 'Jums jâpieslçdzas dçlim, lai varçtu pievienoties grupai.';
$lang['Remove_selected'] = 'Dzçst';
$lang['Add_member'] = 'Pievienot biedru';
$lang['Not_group_moderator'] = 'Jûs neesat grupas moderators.';

$lang['Login_to_join'] = 'Pieslçgties, lai pievienotos grupai, vai mainîtu gupas uzstatîjumus';
$lang['This_open_group'] = 'Atvçrta grupa, spiediet, lai pievienotos';
$lang['This_closed_group'] = 'Slçgta grupa, jaunus biedrus nepieòem';
$lang['This_hidden_group'] = 'Slçpta grupa, automâtiska pievienoðanâs nav atïauta';
$lang['Member_this_group'] = 'Jûs esat grupas biedrs';
$lang['Pending_this_group'] = 'Jûsu biedra statuss ir laicîgs';
$lang['Are_group_moderator'] = 'Jûs esat grupas moderators';
$lang['None'] = '0';

$lang['Subscribe'] = 'Parakstîties';
$lang['Unsubscribe'] = 'Atrakstîties';
$lang['View_Information'] = 'Apskatît informâciju';


//
// Search
//
$lang['Search_query'] = 'Meklçt';
$lang['Search_options'] = 'Meklçðanas parametri';

$lang['Search_keywords'] = 'Meklçt pçc atslçgas vârdiem';
$lang['Search_keywords_explain'] = 'Lieto <u>AND</u> lai definçtu vârdus, kam jâbut rezultâtâ, <u>OR</u> lai definçtu vârdus, kuri varçtu bût rezultâtâ un <u>NOT</u> lai definçtu vârdus, kuriem nevajadzçtu bût rezultâtâ. Lieto * kâ aizstâjçjzîmi nepilnîgam vârdam';
$lang['Search_author'] = 'Meklçt autoru';
$lang['Search_author_explain'] = 'Lieto * kâ aizstâjçjzîmi nepilnîgam vârdam';

$lang['Search_for_any'] = 'Meklçt visu vai tikai jautâjumu';
$lang['Search_for_all'] = 'Meklçt pçc visiem parametriem';
$lang['Search_title_msg'] = 'Meklçt tçmu un ziòojuma tekstu';
$lang['Search_msg_only'] = 'Meklçt tikai ziòojuma tekstu';

$lang['Return_first'] = 'Atgriezt pirmâs'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'ierakstu zîmes';

$lang['Search_previous'] = 'Meklçt iepriekðçjo'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Atlasît pçc';
$lang['Sort_Time'] = 'Publikâcijas laiks';
$lang['Sort_Post_Subject'] = 'Publicçt tçmu';
$lang['Sort_Topic_Title'] = 'Tçmas nosaukums';
$lang['Sort_Author'] = 'Autors';
$lang['Sort_Forum'] = 'Forums';

$lang['Display_results'] = 'Parâdît rezultâtus kâ';
$lang['All_available'] = 'Viss pieejamais';
$lang['No_searchable_forums'] = 'Jums nav pieejas meklçðanas lapai.';

$lang['No_search_match'] = 'Nekas nav atrasts.';
$lang['Found_search_match'] = 'Atrasts %d ieraksts'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Atrasti %d ieraksti'; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = 'Lûdzu nedaudz uzgaidiet; pirms meklçt vçlreiz.';

$lang['Close_window'] = 'Aizvçrt logu';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Atvainojamies, bet tikai %s var publicçt paziòojumus forumâ.';
$lang['Sorry_auth_sticky'] = 'Atvainojamies, bet tikai %s var publicçt sliktas ziòas forumâ.'; 
$lang['Sorry_auth_read'] = 'Atvainojamies, bet tikai %s var lasît tçmas forumâ.'; 
$lang['Sorry_auth_post'] = 'Atvainojamies, bet tikai %s var publicçt tçmas forumâ.'; 
$lang['Sorry_auth_reply'] = 'Atvainojamies, bet tikai %s var atbildçt uz ziòojumiem forumâ.';
$lang['Sorry_auth_edit'] = 'Atvainojamies, bet tikai %s var labot ziòas forumâ.'; 
$lang['Sorry_auth_delete'] = 'Atvainojamies, bet tikai %s var dzçst savus ziòojumus forumâ.';
$lang['Sorry_auth_vote'] = 'Atvainojamies, bet tikai %s var balsot aptaujâs forumâ.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonîmie lietotâji</b>';
$lang['Auth_Registered_Users'] = '<b>reìistrçtie lietotâji</b>';
$lang['Auth_Users_granted_access'] = '<b>lietotâji ar speciâlu pieeju</b>';
$lang['Auth_Moderators'] = '<b>moderâtori</b>';
$lang['Auth_Administrators'] = '<b>administratori</b>';

$lang['Not_Moderator'] = 'Jûs neesat ðî foruma moderators.';
$lang['Not_Authorised'] = 'Neautorizçts';

$lang['You_been_banned'] = 'Jûs esat izraidîts no ðî foruma.<br /> Varat sazinâties ar lappas îpaðnieku vai administratoru.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Nav Reìistrçtu lietotâju un '; // There are 5 Registered and
$lang['Reg_users_online'] = '%d Reìistrçtu lietotâju un '; // There are 5 Registered and
$lang['Reg_user_online'] = '%d Reìistrçts lietotâjs un '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = 'Nav pieslçguðies Slçptie lietotâji'; // 6 Hidden users online
$lang['Hidden_users_online'] = 'pieslçguðies %d Slçptu lietotâju'; // 6 Hidden users online
$lang['Hidden_user_online'] = 'pieslçdzies %d Slçpts lietotâjs'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Pieslçguðies %d Ciemiòu'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Nav pieslçdzies neviens Ciemiòð'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Pieslçdzies %d Ciemiòð'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Paðlaik neviens neskatâs ðo forumu';

$lang['Online_explain'] = 'Dati ir balstîti uz lietotâju aktivitâti pçdçjo 5 minûðu laikâ';

$lang['Forum_Location'] = 'Foruma atraðanâs vieta';
$lang['Last_updated'] = 'Pçdçjâs izmaiòas';

$lang['Forum_index'] = 'Foruma pirmâ lappa';
$lang['Logging_on'] = 'Pieslçdzas';
$lang['Posting_message'] = 'Publicç ziòojumu';
$lang['Searching_forums'] = 'Meklç forumu';
$lang['Viewing_profile'] = 'Apskata profilu';
$lang['Viewing_online'] = 'Apskata, kas paðlaik ir pieslçdzies';
$lang['Viewing_member_list'] = 'Apskata lietotâju sarakstu';
$lang['Viewing_priv_msgs'] = 'Apskata privâtâs ziòas';
$lang['Viewing_FAQ'] = 'Apskata FAQ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderatora Vadîbas Panelis';
$lang['Mod_CP_explain'] = 'Izmantojot zemâk redzamo formu Jûs varat veikt masu operâcijas ar forumu. Jûs varat slçgt, atslçgt, pârvietot un dzçst vairâkas tçmas vienlaicîgi.';

$lang['Select'] = 'Izvçlçties';
$lang['Delete'] = 'Dzçst';
$lang['Move'] = 'Pârvietot';
$lang['Lock'] = 'Slçgt';
$lang['Unlock'] = 'Atvçrt';

$lang['Topics_Removed'] = 'Izvçlçtâs tçmas tika veiksmîgi izdzçstas.';
$lang['Topics_Locked'] = 'Izvçlçtâs tçmas tika slçgtas.';
$lang['Topics_Moved'] = 'Izvçlçtâs temas tika pârvietotas.';
$lang['Topics_Unlocked'] = 'Izvçlçtâ tçmas tika atvçrtas.';
$lang['No_Topics_Moved'] = 'Tçmas netika pârvietotas.';

$lang['Confirm_delete_topic'] = 'Vai tieðâm dzçst izvçlçto tçmu(-as)?';
$lang['Confirm_lock_topic'] = 'Vai tieðâm slçgt izvçlçto tçmu(-as)?';
$lang['Confirm_unlock_topic'] = 'Vai tieðâm atvçrt izvçlçto tçmu(-as)?';
$lang['Confirm_move_topic'] = 'Vai tieðâm pârvietot izvçlçto tçmu(-as)?';

$lang['Move_to_forum'] = 'Pârvietot uz forumu';
$lang['Leave_shadow_topic'] = 'Atstât çnas tçmu vecajâ forumâ.';

$lang['Split_Topic'] = 'Tçmas Sadalîðanas Vadîbas Panelis';
$lang['Split_Topic_explain'] = 'Izmantojot zemâk redzamo formu Jûs varat sadalît tçmu uz pusçm. Sadalîðanu varat veikt atzîmçjot ziòojumus vai arî sadalot sâkot no norâdîtâ ziòojuma.';
$lang['Split_title'] = 'Jauns tçmas nosaukums';
$lang['Split_forum'] = 'Forums jaunajai tçmai';
$lang['Split_posts'] = 'Sadalît izvçlçtos ziòojumus';
$lang['Split_after'] = 'Sadalît no izvçtçtâ ziòojuma';
$lang['Topic_split'] = 'Izvçlçtâ tçma tika veiksmîgi sadalîta';

$lang['Too_many_error'] = 'Esat izvçlçjuðies pârâk daudz ziòojumus. Jûs varat norâdît tikai vienu ziòojumu, pçc kura sadalît tçmu.';

$lang['None_selected'] = 'Jûs neesat izvçlçjies tçmu ðai operâcijai. Lûdzu atgriezieties un mçìiniet vçlreiz.';
$lang['New_forum'] = 'Jauns forums';

$lang['This_posts_IP'] = 'ðî ziòojuma publicçtâjâ IP';
$lang['Other_IP_this_user'] = 'Citas IP, no kurâm publicçjis lietotâjs';
$lang['Users_this_IP'] = 'Lietotâji, kuri ir publicçjuði ar ðo IP';
$lang['IP_info'] = 'IP informâcija';
$lang['Lookup_IP'] = 'Skatît IP adresi';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Visi laiki norâdîti %s'; // eg. All times are GMT - 12 Hours (times from next block)

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

$lang['datetime']['Sunday'] = 'Svçtdiena';
$lang['datetime']['Monday'] = 'Pirmdiena';
$lang['datetime']['Tuesday'] = 'Otrdiena';
$lang['datetime']['Wednesday'] = 'Treðdiena';
$lang['datetime']['Thursday'] = 'Ceturtdiena';
$lang['datetime']['Friday'] = 'Piektdiena';
$lang['datetime']['Saturday'] = 'Sestdiena';
$lang['datetime']['Sun'] = 'Svçtdena';
$lang['datetime']['Mon'] = 'Pirmdiena';
$lang['datetime']['Tue'] = 'Otrdiena';
$lang['datetime']['Wed'] = 'Treðdiena';
$lang['datetime']['Thu'] = 'Ceturtdiena';
$lang['datetime']['Fri'] = 'Piektdiena';
$lang['datetime']['Sat'] = 'Sestdiena';
$lang['datetime']['January'] = 'Janvâris';
$lang['datetime']['February'] = 'Februâris';
$lang['datetime']['March'] = 'Marts';
$lang['datetime']['April'] = 'Aprîlis';
$lang['datetime']['May'] = 'Maijs';
$lang['datetime']['June'] = 'Jûnijs';
$lang['datetime']['July'] = 'Jûlijs';
$lang['datetime']['August'] = 'Augusts';
$lang['datetime']['September'] = 'Septembris';
$lang['datetime']['October'] = 'Oktobris';
$lang['datetime']['November'] = 'Novembris';
$lang['datetime']['December'] = 'Decembris';
$lang['datetime']['Jan'] = 'Janvâris';
$lang['datetime']['Feb'] = 'Februâris';
$lang['datetime']['Mar'] = 'Marts';
$lang['datetime']['Apr'] = 'Aprîlis';
$lang['datetime']['May'] = 'Maijs';
$lang['datetime']['Jun'] = 'Jûnijs';
$lang['datetime']['Jul'] = 'Jûlijs';
$lang['datetime']['Aug'] = 'Augusts';
$lang['datetime']['Sep'] = 'Septembris';
$lang['datetime']['Oct'] = 'Oktobris';
$lang['datetime']['Nov'] = 'Novembris';
$lang['datetime']['Dec'] = 'Decembris';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informâcija';
$lang['Critical_Information'] = 'Kritiska Informâcija';

$lang['General_Error'] = 'Kïûda';
$lang['Critical_Error'] = 'Kritiska kïûda';
$lang['An_error_occured'] = 'Kïûda';
$lang['A_critical_error'] = 'Kritiska kïûda';

$lang['Admin_reauthenticate'] = 'Lai administrçtu ðo forumu, Jums vçlreiz jâveic autorizâcija';
$lang['Login_attempts_exceeded'] = 'Jûs esat mçìinâjis pieslçgties jau %s reizes. Atvelciet elpu %s minûtes.';
$lang['Please_remove_install_contrib'] = 'Lûdzu pârliecinieties, ka ir izdzçstas gan install/, gan contrib/ direktorijas';

//
// That's all, Folks!
// -------------------------------------------------

?>