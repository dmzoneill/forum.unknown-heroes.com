<?php
/***************************************************************************
 *                            lang_main.php [Czech]
 *                            ---------------------
 *     characterset         : Windows-1250
 *     phpBB version        : 2.0.20
 *     copyright            : © 2005 The phpBB CZ Group
 *     www                  : http://www.phpbbcz.com
 *     last modified        : 08. 04. 2006
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/


//
// Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//


$lang['ENCODING'] = 'Windows-1250';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'j.n.Y'; // This should be changed to the default date format for your language, php date() format // j.n.Y == 23.5.1985


// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';


//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Fórum';
$lang['Category'] = 'Kategorie';
$lang['Topic'] = 'Téma';
$lang['Topics'] = 'Témata';
$lang['Replies'] = 'Odpovìdi';
$lang['Views'] = 'Zhlédnuto';
$lang['Post'] = 'Pøíspìvek';
$lang['Posts'] = 'Pøíspìvky';
$lang['Posted'] = 'Zaslal';
$lang['Username'] = 'Uivatel';
$lang['Password'] = 'Heslo';
$lang['Email'] = 'E-mail';
$lang['Poster'] = 'Odesílatel';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Èas';
$lang['Hours'] = 'Hodin';
$lang['Message'] = 'Zpráva';

$lang['1_Day'] = '1 den';
$lang['7_Days'] = '1 tıden';
$lang['2_Weeks'] = '2 tıdny';
$lang['1_Month'] = '1 mìsíc';
$lang['3_Months'] = '3 mìsíce';
$lang['6_Months'] = '6 mìsícù';
$lang['1_Year'] = '1 rok';

$lang['Go'] = 'jdi';
$lang['Jump_to'] = 'Pøejdi na';
$lang['Submit'] = 'Odeslat';
$lang['Reset'] = 'Pùvodní hodnoty';
$lang['Cancel'] = 'Storno';
$lang['Preview'] = 'Náhled';
$lang['Confirm'] = 'Potvrdit';
$lang['Spellcheck'] = 'Kontrola pravopisu';
$lang['Yes'] = 'Ano';
$lang['No'] = 'Ne';
$lang['Enabled'] = 'Povoleno';
$lang['Disabled'] = 'Zakázáno';
$lang['Error'] = 'Chyba';

$lang['Next'] = 'Další';
$lang['Previous'] = 'Pøedchozí';
$lang['Goto_page'] = 'Jdi na stránku';
$lang['Joined'] = 'Zaloen';
$lang['IP_Address'] = 'IP adresa';

$lang['Select_forum'] = 'Zvolte fórum';
$lang['View_latest_post'] = 'Zobrazit poslední pøíspìvek';
$lang['View_newest_post'] = 'Zobraz nejnovìjší pøíspìvky';
$lang['Page_of'] = 'Strana <b>%d</b> z <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AOL Instant Messenger';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Obsah fóra %s';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Pøidat nové téma';
$lang['Reply_to_topic'] = 'Zaslat odpovìï';
$lang['Reply_with_quote'] = 'Citovat';

$lang['Click_return_topic'] = 'Kliknìte %szde%s pro návrat do tématu.'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Kliknìte %szde%s pro opakování volby.';
$lang['Click_return_forum'] = 'Kliknìte %szde%s pro návrat na obsah fóra.';
$lang['Click_view_message'] = 'Kliknìte %szde%s pro zobrazení vaší zprávy.';
$lang['Click_return_modcp'] = 'Kliknìte %szde%s pro návrat do moderátorského ovládacího panelu.';
$lang['Click_return_group'] = 'Kliknìte %szde%s pro návrat do informací o skupinách.';

$lang['Admin_panel'] = 'Administrace fóra';

$lang['Board_disable'] = 'Promiòte, ale toto fórum je momentálnì nedostupné. Zkuste opakovat volbu pozdìji.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Registrovaní uivatelé:';
$lang['Browsing_forum'] = 'Uivatelé prohlíející toto fórum:';
$lang['Online_users_zero_total'] = 'Celkem je zde pøítomno <b>0</b> uivatelù: ';
$lang['Online_users_total'] = 'Celkem je zde pøítomno <b>%d</b> uivatelù: ';
$lang['Online_user_total'] = 'Celkem je zde pøítomen  <b>%d</b> uivatel: ';
$lang['Reg_users_zero_total'] = '0 registrovanıch, ';
$lang['Reg_users_total'] = '%d registrovanıch, ';
$lang['Reg_user_total'] = '%d registrovanı, ';
$lang['Hidden_users_zero_total'] = '0 skrytıch a ';
$lang['Hidden_user_total'] = '%d skrytı a ';
$lang['Hidden_users_total'] = '%d skrytıch a ';
$lang['Guest_users_zero_total'] = '0 anonymních.';
$lang['Guest_users_total'] = '%d anonymních.';
$lang['Guest_user_total'] = '%d anonymní.';
$lang['Record_online_users'] = 'Nejvíce zde bylo souèasnì pøítomno <b>%s</b> uivatelù dne %s.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sadministrátoøi%s';
$lang['Mod_online_color'] = '%smoderátoøi%s';

$lang['You_last_visit'] = 'Naposledy jste zde byl %s'; // %s replaced by date/time
$lang['Current_time'] = 'Právì je %s'; // %s replaced by time

$lang['Search_new'] = 'Zobrazit nové pøíspìvky od poslední návštìvy';
$lang['Search_your_posts'] = 'Zobrazit vaše pøíspìvky';
$lang['Search_unanswered'] = 'Zobrazit pøíspìvky bez odpovìdí';

$lang['Register'] = 'Registrace';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Zmìna nastavení';
$lang['Search'] = 'Hledat';
$lang['Memberlist'] = 'Seznam uivatelù';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'Prùvodce znaèkami';
$lang['Usergroups'] = 'Uivatelské skupiny';
$lang['Last_Post'] = 'Poslední pøíspìvek';
$lang['Moderator'] = 'Moderátor';
$lang['Moderators'] = 'Moderátoøi';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Uivatelé zaslali celkem <b>0</b> pøíspìvkù.'; // Number of posts
$lang['Posted_articles_total'] = 'Uivatelé zaslali celkem <b>%d</b> pøíspìvkù.'; // Number of posts
$lang['Posted_article_total'] = 'Uivatelé zaslali celkem <b>%d</b> pøíspìvek.'; // Number of posts
$lang['Registered_users_zero_total'] = 'Je zde <b>0</b> registrovanıch uivatelù.'; // # registered users
$lang['Registered_users_total'] = 'Je zde <b>%d</b> registrovanıch uivatelù.'; // # registered users
$lang['Registered_user_total'] = 'Je zde <b>%d</b> registrovanı uivatel.'; // # registered users
$lang['Newest_user'] = 'Nejnovìjším registrovanım uivatelem je <b>%s%s%s</b>.'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'ádné nové pøíspìvky od vaší poslední návštìvy';
$lang['No_new_posts'] = 'ádné nové pøíspìvky';
$lang['New_posts'] = 'Nové pøíspìvky';
$lang['New_post'] = 'Novı pøíspìvek';
$lang['No_new_posts_hot'] = 'ádné nové pøíspìvky [oblíbené]';
$lang['New_posts_hot'] = 'Nové pøíspìvky [oblíbené]';
$lang['No_new_posts_locked'] = 'ádné nové pøíspìvky [zamknuto]';
$lang['New_posts_locked'] = 'Nové pøíspìvky [zamknuto]';
$lang['Forum_is_locked'] = 'Fórum je zamknuto';


//
// Login
//
$lang['Enter_password'] = 'Zadejte prosím vaše uivatelské jméno a heslo';
$lang['Login'] = 'Pøihlášení';
$lang['Logout'] = 'Odhlášení';

$lang['Forgotten_password'] = 'Zapomnìli jste svoje heslo?';

$lang['Log_me_in'] = 'Pøihlásit automaticky pøi pøíští návštìvì';

$lang['Error_login'] = 'Bylo zadáno neplatné uivatelské jméno nebo heslo.';


//
// Index page
//
$lang['Index'] = 'Fórum';
$lang['No_Posts'] = 'ádné pøíspìvky';
$lang['No_forums'] = 'ádná fóra';

$lang['Private_Message'] = 'Soukromá zpráva';
$lang['Private_Messages'] = 'Soukromé zprávy';
$lang['Who_is_Online'] = 'Kdo je pøítomen';

$lang['Mark_all_forums'] = 'Oznaèit všechna fóra jako pøeètená';
$lang['Forums_marked_read'] = 'Všechna fóra byla oznaèena jako pøeètená.';


//
// Viewforum
//
$lang['View_forum'] = 'Zobrazit fórum';

$lang['Forum_not_exist'] = 'Zvolené fórum neexistuje.';
$lang['Reached_on_error'] = 'Došlo k chybì na této stránce.';

$lang['Display_topics'] = 'Zobrazit témata za pøedchozí';
$lang['All_Topics'] = 'Všechna témata';

$lang['Topic_Announcement'] = '<b>Oznámení:</b>';
$lang['Topic_Sticky'] = '<b>Dùleité:</b>';
$lang['Topic_Moved'] = '<b>Pøesunuto:</b>';
$lang['Topic_Poll'] = '<b>[Hlasování]</b>';

$lang['Mark_all_topics'] = 'Oznaèit všechna témata jako pøeètená';
$lang['Topics_marked_read'] = 'Témata tohoto fóra byla oznaèena jako pøeètená.';

$lang['Rules_post_can'] = '<b>Mùete</b> pøidat nové téma do tohoto fóra.';
$lang['Rules_post_cannot'] = '<b>Nemùete</b> odesílat nové téma do tohoto fóra.';
$lang['Rules_reply_can'] = '<b>Mùete</b> odpovídat na témata v tomto fóru.';
$lang['Rules_reply_cannot'] = '<b>Nemùete</b> odpovídat na témata v tomto fóru.';
$lang['Rules_edit_can'] = '<b>Mùete</b> upravovat své pøíspìvky v tomto fóru.';
$lang['Rules_edit_cannot'] = '<b>Nemùete</b> upravovat své pøíspìvky v tomto fóru.';
$lang['Rules_delete_can'] = '<b>Mùete</b> mazat své pøíspìvky v tomto fóru.';
$lang['Rules_delete_cannot'] = '<b>Nemùete</b> mazat své pøíspìvky v tomto fóru.';
$lang['Rules_vote_can'] = '<b>Mùete</b> hlasovat v tomto fóru.';
$lang['Rules_vote_cannot'] = '<b>Nemùete</b> hlasovat v tomto fóru.';
$lang['Rules_moderate'] = '<b>Mùete</b> %smoderovat toto fórum%s.'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Toto fórum neobsahuje ádná témata.<br />Kliknìte na odkaz <b>Nové téma</b> pro pøidání nového tématu.';


//
// Viewtopic
//
$lang['View_topic'] = 'Zobrazit téma';

$lang['Guest'] = 'Anonymní';
$lang['Post_subject'] = 'Pøedmìt';
$lang['View_next_topic'] = 'Zobrazit následující téma';
$lang['View_previous_topic'] = 'Zobrazit pøedchozí téma';
$lang['Submit_vote'] = 'Odeslat hlas';
$lang['View_results'] = 'Zobrazit vısledek';

$lang['No_newer_topics'] = 'V tomto fóru nejsou ádná novìjší témata.';
$lang['No_older_topics'] = 'V tomto fóru nejsou ádná starší témata.';
$lang['Topic_post_not_exist'] = 'Téma nebo pøíspìvek kterı poadujete nebyl nalezen.';
$lang['No_posts_topic'] = 'Pro toto téma neexistují ádné pøíspìvky.';

$lang['Display_posts'] = 'Zobrazit pøíspìvky z pøedchozích';
$lang['All_Posts'] = 'Všechny pøíspìvky';
$lang['Newest_First'] = 'Nejdøíve nejnovìjší';
$lang['Oldest_First'] = 'Nejdøíve nejstarší';

$lang['Back_to_top'] = 'Návrat nahoru';

$lang['Read_profile'] = 'Zobrazit informace o autorovi';
$lang['Visit_website'] = 'Zobrazit autorovy WWW stránky';
$lang['ICQ_status'] = 'ICQ stav';
$lang['Edit_delete_post'] = 'Upravit/Odstranit tento pøíspìvek';
$lang['View_IP'] = 'Zobrazit IP adresu odesilatele';
$lang['Delete_post'] = 'Odstranit tento pøíspìvek';

$lang['wrote'] = 'napsal'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'citace'; // comes before bbcode quote output.
$lang['Code'] = 'kód'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Naposledy upravil %s dne %s, celkovì upraveno %d krát.'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Naposledy upravil %s dne %s, celkovì upraveno %d krát.'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Zamknout toto téma';
$lang['Unlock_topic'] = 'Odemknout toto téma';
$lang['Move_topic'] = 'Pøesunout toto téma';
$lang['Delete_topic'] = 'Odstranit toto téma';
$lang['Split_topic'] = 'Rozdìlit toto téma';

$lang['Stop_watching_topic'] = 'Ukonèit sledování tohoto tématu';
$lang['Start_watching_topic'] = 'Sledovat odpovìdi na toto téma';
$lang['No_longer_watching'] = 'Pøestal(a) jste sledovat odpovìdi na toto téma.';
$lang['You_are_watching'] = 'Zaèal(a) jste sledovat odpovìdi na toto téma.';

$lang['Total_votes'] = 'Celkem hlasù';


//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Tìlo zprávy';
$lang['Topic_review'] = 'Pøehled tématu';

$lang['No_post_mode'] = 'Nebyl zvolen typ odeslání!'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Pøidat nové téma';
$lang['Post_a_reply'] = 'Odeslat odpovìï';
$lang['Post_topic_as'] = 'Odeslat téma jako';
$lang['Edit_Post'] = 'Upravit pøíspìvek';
$lang['Options'] = 'Pøedvolby';

$lang['Post_Announcement'] = 'Oznámení';
$lang['Post_Sticky'] = 'Dùleité';
$lang['Post_Normal'] = 'Normální';

$lang['Confirm_delete'] = 'Opravdu chcete odstranit tento pøíspìvek?';
$lang['Confirm_delete_poll'] = 'Opravdu chcete odstranit toto hlasování?';

$lang['Flood_Error'] = 'Nemùete odeslat novı pøíspìvek takto brzy po pøedchozím pøíspìvku, chvíli vyèkejte a zkuste to znovu.';
$lang['Empty_subject'] = 'Musíte zadat text pøedmìtu!';
$lang['Empty_message'] = 'Musíte zadat text pøíspìvku!';
$lang['Forum_locked'] = 'Toto fórum je zamknuto, nemùete zde psát ani upravovat pøíspìvky!';
$lang['Topic_locked'] = 'Toto téma je zamknuto, nemùete zde pøidávat odpovìdi ani upravovat své pøíspìvky!';
$lang['No_post_id'] = 'Musíte zvolit pøíspìvek, kterı chcete upravovat!';
$lang['No_topic_id'] = 'Musíte zvolit téma na které chcete odpovìdìt!';
$lang['No_valid_mode'] = 'Mùete jen odesílat, upravovat nebo citovat pøíspìvky, vrate se zpìt a zkuste to znovu.';
$lang['No_such_post'] = 'Takovıto pøíspìvek neexistuje, vrate se zpìt a zkuste to znovu.';
$lang['Edit_own_posts'] = 'Promiòte, ale mùete upravovat jen své pøíspìvky!';
$lang['Delete_own_posts'] = 'Promiòte, ale mùete mazat jen své pøíspìvky!';
$lang['Cannot_delete_replied'] = 'Promiòte, ale nemùete mazat pøíspìvky, na které ji bylo odpovìzeno!';
$lang['Cannot_delete_poll'] = 'Promiòte, ale nemùete vymazat aktivní hlasování!';
$lang['Empty_poll_title'] = 'Musíte napsat hlasovací otázku!';
$lang['To_few_poll_options'] = 'Musíte napsat alespoò dvì hlasovací monosti!';
$lang['To_many_poll_options'] = 'Pokoušíte se napsat pøíliš mnoho hlasovacích moností.';
$lang['Post_has_no_poll'] = 'Tento pøíspìvek nemá hlasování.';
$lang['Already_voted'] = 'V tomto hlasování jste ji hlasoval(a).';
$lang['No_vote_option'] = 'Pøi hlasování musíte zvolit nìkterou z moností.';

$lang['Add_poll'] = 'Pøidat hlasování';
$lang['Add_poll_explain'] = 'Jestlie nechcete pøidat monost hlasování k tomuto tématu, nechte pole prázdná.';
$lang['Poll_question'] = 'Hlasovací otázka';
$lang['Poll_option'] = 'Moné odpovìdi';
$lang['Add_option'] = 'Pøidat odpovìï';
$lang['Update'] = 'Aktualizovat';
$lang['Delete'] = 'Odstranit';
$lang['Poll_for'] = 'Délka trvání';
$lang['Days'] = 'dní'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '(zadejte 0 nebo nevyplòujte pro neomezenou dobu hlasování)';
$lang['Delete_poll'] = 'Smazat hlasování';

$lang['Disable_HTML_post'] = 'Zakázat HTML v tomto pøíspìvku';
$lang['Disable_BBCode_post'] = 'Zakázat znaèky v tomto pøíspìvku';
$lang['Disable_Smilies_post'] = 'Zakázat smajlíky v tomto pøíspìvku';

$lang['HTML_is_ON'] = 'HTML: <u>POVOLENO</u>';
$lang['HTML_is_OFF'] = 'HTML: <u>VYPNUTO</u>';
$lang['BBCode_is_ON'] = '%sZnaèky%s: <u>POVOLENY</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sZnaèky%s: <u>VYPNUTY</u>';
$lang['Smilies_are_ON'] = 'Smajlíky: <u>POVOLENY</u>';
$lang['Smilies_are_OFF'] = 'Smajlíky: <u>VYPNUTY</u>';

$lang['Attach_signature'] = 'Pøipojit podpis (podpis mùete zmìnit ve vašem nastavení)';
$lang['Notify'] = 'Upozornit mne, pøijde-li odpovìï';

$lang['Stored'] = 'Vaše zpráva byla úspìšnì odeslána.';
$lang['Deleted'] = 'Vaše zpráva byla úspìšnì odstranìna.';
$lang['Poll_delete'] = 'Hlasování bylo úspìšnì odstranìno.';
$lang['Vote_cast'] = 'Váš hlas byl pøijat.';

$lang['Topic_reply_notification'] = 'Upozornìní na odpovìï';

$lang['bbcode_b_help'] = 'Tuèné: [b]text[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Kurzíva: [i]text[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Podtrené: [u]text[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Citace: [quote]text[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Zobrazení kódu: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Seznam: [list]text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Uspoøádanı seznam: [list=]text[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Vloit obrázek: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Vloit URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Zavøe všechny otevøené znaèky';
$lang['bbcode_s_help'] = 'Barva písma: [color=red]text[/color] Tip: mùete pouít také color=#FF0000';
$lang['bbcode_f_help'] = 'Velikost písma: [size=x-small]malı text[/size]';

$lang['Emoticons'] = 'Smajlíky (emotikony)';
$lang['More_emoticons'] = 'Zobrazit další smajlíky (emotikony)';

$lang['Font_color'] = 'Barva písma';
$lang['color_default'] = 'Vıchozí';
$lang['color_dark_red'] = 'Kaštanová';
$lang['color_red'] = 'Èervená';
$lang['color_orange'] = 'Oranová';
$lang['color_brown'] = 'Hnìdá';
$lang['color_yellow'] = 'lutá';
$lang['color_green'] = 'Zelená';
$lang['color_olive'] = 'Olivová';
$lang['color_cyan'] = 'Azurová';
$lang['color_blue'] = 'Modrá';
$lang['color_dark_blue'] = 'Tmavì modrá';
$lang['color_indigo'] = 'Fialová';
$lang['color_violet'] = 'Fuchsiová';
$lang['color_white'] = 'Bílá';
$lang['color_black'] = 'Èerná';

$lang['Font_size'] = 'Velikost písma';
$lang['font_tiny'] = 'Drobné';
$lang['font_small'] = 'Malé';
$lang['font_normal'] = 'Vıchozí';
$lang['font_large'] = 'Velké';
$lang['font_huge'] = 'Obrovské';

$lang['Close_Tags'] = 'zavøít znaèky';
$lang['Styles_tip'] = 'Tip: Styl mùete aplikovat rychleji na oznaèeném textu.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Soukromé zprávy';
$lang['Login_check_pm'] = 'Soukromé zprávy';
$lang['New_pms'] = 'Soukromé zprávy (%d nové)'; // You have 2 new messages
$lang['New_pm'] = 'Soukromé zprávy (%d nová)'; // You have 1 new message
$lang['No_new_pm'] = 'Soukromé zprávy';
$lang['Unread_pms'] = 'Máte %d nepøeètené zprávy';
$lang['Unread_pm'] = 'Máte %d nepøeètenou zprávu';
$lang['No_unread_pm'] = 'Nemáte ádné nepøeètené zprávy';
$lang['You_new_pm'] = 'Nová soukromá zpráva èeká na pøeètení v doruèenıch zprávách.';
$lang['You_new_pms'] = 'Nové soukromé zprávy èekají na pøeètení v doruèenıch zprávách.';
$lang['You_no_new_pm'] = 'ádné nové soukromé zprávy neèekají na pøeètení.';
$lang['Unread_message'] = 'Nepøeètená zpráva';
$lang['Read_message'] = 'Èíst zprávu';

$lang['Read_pm'] = 'Èíst zprávu';
$lang['Post_new_pm'] = 'Poslat zprávu';
$lang['Post_reply_pm'] = 'Odpovìdìt na zprávu';
$lang['Post_quote_pm'] = 'Citovat zprávu';
$lang['Edit_pm'] = 'Upravit zprávu';

$lang['Inbox'] = 'Doruèené';
$lang['Outbox'] = 'Nedoruèené';
$lang['Savebox'] = 'Uloené';
$lang['Sentbox'] = 'Odeslané';
$lang['Flag'] = 'Pøíznak';
$lang['Subject'] = 'Pøedmìt';
$lang['From'] = 'Od';
$lang['To'] = 'Komu';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Oznaèit';
$lang['Sent'] = 'Zasláno';
$lang['Saved'] = 'Uloeno';
$lang['Delete_marked'] = 'Odstranit oznaèené';
$lang['Delete_all'] = 'Odstranit vše';
$lang['Save_marked'] = 'Uloit oznaèené';
$lang['Save_message'] = 'Uloit zprávu';
$lang['Delete_message'] = 'Odstranit zprávu';

$lang['Display_messages'] = 'Zobrazit zprávy za pøedchozí'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Všechny zprávy';

$lang['No_messages_folder'] = 'Nemáte ádné zprávy v této sloce.';

$lang['PM_disabled'] = 'Posílání soukromıch zpráv bylo na tomto boardu zakázáno.';
$lang['Cannot_send_privmsg'] = 'Promiòte, ale administrátor vám neumonil zasílání soukromıch zpráv.';
$lang['No_to_user'] = 'Musíte zadat uivatelské jméno aby bylo moné odeslat tuto zprávu.';
$lang['No_such_user'] = 'Tento uivatel není registrován.';

$lang['Disable_HTML_pm'] = 'Zakázat HTML v této zprávì';
$lang['Disable_BBCode_pm'] = 'Zakázat znaèky v této zprávì';
$lang['Disable_Smilies_pm'] = 'Zakázat smajlíky v této zprávì';

$lang['Message_sent'] = 'Vaše zpráva byla odeslána.';

$lang['Click_return_inbox'] = 'Kliknìte %szde%s pro návrat do doruèenıch.';
$lang['Click_return_index'] = 'Kliknìte %szde%s pro návrat na obsah.';

$lang['Send_a_new_message'] = 'Odeslat novou soukromou zprávu';
$lang['Send_a_reply'] = 'Odpovìdìt na soukromou zprávu';
$lang['Edit_message'] = 'Upravit soukromou zprávu';

$lang['Notification_subject'] = 'Pøišla nová soukromá zpráva';

$lang['Find_username'] = 'Hledat uivatele';
$lang['Find'] = 'Hledat';
$lang['No_match'] = 'ádnı vısledek';

$lang['No_post_id'] = 'Nebylo zvoleno ID zprávy.';
$lang['No_such_folder'] = 'Poadovaná sloka neexistuje.';
$lang['No_folder'] = 'Nebyla zvolena sloka.';

$lang['Mark_all'] = 'Oznaèit vše';
$lang['Unmark_all'] = 'Odznaèit vše';

$lang['Confirm_delete_pm'] = 'Opravdu chcete odstranit tuto zprávu?';
$lang['Confirm_delete_pms'] = 'Opravdu chcete odstranit tyto zprávy?';

$lang['Inbox_size'] = 'Schránka je zaplnìna z %d%%.'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Schránka je zaplnìna z %d%%.';
$lang['Savebox_size'] = 'Schránka je zaplnìna z %d%%.';

$lang['Click_view_privmsg'] = 'Kliknìte %szde%s pro zobrazení obsahu pøíchozích zpráv';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Informace o uivateli: %s'; // %s is username
$lang['About_user'] = 'Vše o uivateli %s'; // %s is username

$lang['Preferences'] = 'Monosti';
$lang['Items_required'] = 'Pole oznaèená "*" jsou povinná a musí bıt vyplnìna';
$lang['Registration_info'] = 'Registraèní údaje';
$lang['Profile_info'] = 'Osobní údaje';
$lang['Profile_info_warn'] = 'Tyto informace budou veøejnì zobrazitelné';
$lang['Avatar_panel'] = 'Nastavení postavièek';
$lang['Avatar_gallery'] = 'Galerie postavièek';

$lang['Website'] = 'WWW';
$lang['Location'] = 'Bydlištì';
$lang['Contact'] = 'Kontakt';
$lang['Email_address'] = 'E-mailová adresa';
$lang['Send_private_message'] = 'Odeslat soukromou zprávu';
$lang['Hidden_email'] = '[ skrytı ]';
$lang['Interests'] = 'Zájmy';
$lang['Occupation'] = 'Povolání';
$lang['Poster_rank'] = 'Odesilatelovo hodnocení';

$lang['Total_posts'] = 'Pøíspìvkù';
$lang['User_post_pct_stats'] = '%.2f%% ze všech pøíspìvkù'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f pøíspìvkù za den'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Hledat všechny pøíspìvky od uivatele %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Promiòte, ale tento uivatel neexistuje.';
$lang['Wrong_Profile'] = 'Nemùete modifikovat toto nastavení, jeliko nejste jeho vlastníkem.';

$lang['Only_one_avatar'] = 'Mùe bıt zvolen pouze jeden obrázek postavièky.';
$lang['File_no_data'] = 'Soubor na zadané URL adrese neobsahuje ádná data.';
$lang['No_connection_URL'] = 'Nelze navázat spojení se zadanou URL adresou.';
$lang['Incomplete_URL'] = 'Vámi zadaná URL adresa není kompletní.';
$lang['Wrong_remote_avatar_format'] = 'URL adresa vzdáleného obrázku postavièky není dostupná.';
$lang['No_send_account_inactive'] = 'Promiòte, ale vaše heslo nemùe bıt nalezeno, protoe je váš úèet momentálnì neaktivní. Pro více informací kontaktujte administrátora tohoto boardu.';

$lang['Always_smile'] = 'Vdy povolit smajlíky';
$lang['Always_html'] = 'Vdy povolit HTML';
$lang['Always_bbcode'] = 'Vdy povolit znaèky';
$lang['Always_add_sig'] = 'Vdy pøipojit mùj podpis';
$lang['Always_notify'] = 'Vdy mnì upozornit na odpovìdi';
$lang['Always_notify_explain'] = 'Pošle e-mail kdy nìkdo odpoví na vámi poslané téma. Toto mùe bıt zmìnìno kdykoli pøed odesláním nového tématu.';

$lang['Board_style'] = 'Vzhled fóra';
$lang['Board_lang'] = 'Jazyk fóra';
$lang['No_themes'] = 'Vzhled není v databázi';
$lang['Timezone'] = 'Èasové pásmo';
$lang['Date_format'] = 'Formát data a èasu';
$lang['Date_format_explain'] = 'Pouitá syntaxe je shodná s PHP funkcí <a href="http://www.php.net/date" target="_other">date()</a>';
$lang['Signature'] = 'Podpis';
$lang['Signature_explain'] = 'Text, kterı mùe bıt pøidáván do vašich pøíspìvkù<br />Maximálnì %d znakù';
$lang['Public_view_email'] = 'Vdy zobrazovat mou e-mailovou adresu';

$lang['Current_password'] = 'Aktuální heslo';
$lang['New_password'] = 'Nové heslo';
$lang['Confirm_password'] = 'Potvrzení hesla';
$lang['Confirm_password_explain'] = 'Pokud chcete zmìnit heslo nebo upravit e-mailovou adresu musíte zadat vaše aktuální heslo.';
$lang['password_if_changed'] = 'Vyplòte pokud chcete zmìnit aktuální heslo.';
$lang['password_confirm_if_changed'] = 'Vyplòte pro potvrzení, pokud chcete zmìnit vaše aktuální heslo.';

$lang['Avatar'] = 'Obrázek postavièky';
$lang['Avatar_explain'] = 'Zobrazit malı obrázek postavièky pod podrobnostmi v pøíspìvcích. Pouze jeden obrázek postavièky bude zobrazen, jeho šíøka by nemìla bıt vìtší ne %d bodù a vıška %d bodù a velikost souboru by nemìla pøesahovat %dkB.';
$lang['Upload_Avatar_file'] = 'Nahraj obrázek postavièky ze svého poèítaèe na server';
$lang['Upload_Avatar_URL'] = 'Pøihrát obrázek postavièky z URL';
$lang['Upload_Avatar_URL_explain'] = 'Zadejte URL umístìní obrázku postavièky, pro zkopírování na tento server.';
$lang['Pick_local_Avatar'] = 'Zvolte obrázek postavièky z galerie';
$lang['Link_remote_Avatar'] = 'Odkaz na vzdálenı obrázek postavièky';
$lang['Link_remote_Avatar_explain'] = 'Zadejte URL umístìní obrázku postavièky, na kterı chcete odkázat.';
$lang['Avatar_URL'] = 'URL adresa obrázku s postavièkou';
$lang['Select_from_gallery'] = 'Zvolte obrázek postavièky z galerie';
$lang['View_avatar_gallery'] = 'Zobrazit galerii postavièek';

$lang['Select_avatar'] = 'Zvolte obrázek postavièky';
$lang['Return_profile'] = 'Návrat do nastavení';
$lang['Select_category'] = 'Volba kategorie';

$lang['Delete_Image'] = 'Odstranit obrázek';
$lang['Current_Image'] = 'Aktuální obrázek';

$lang['Notify_on_privmsg'] = 'Upozornit na pøíchod nové soukromé zprávy';
$lang['Popup_on_privmsg'] = 'Otevøít nové okno pøi pøíchodu nové soukromé zprávy';
$lang['Popup_on_privmsg_explain'] = 'Nìkteré šablony mohou otevøít nové okno, aby vás informovaly o novì pøíchozí soukromé zprávì.';
$lang['Hide_user'] = 'Skrıt vaší pøítomnost ve fóru';

$lang['Profile_updated'] = 'Vaše nastavení bylo aktualizováno.';
$lang['Profile_updated_inactive'] = 'Vaše nastavení bylo aktualizováno, ale jeliko jste zmìnil(a) dùleité informace je nyní váš úèet neaktivní. Zkontrolujte váš e-mail pro informace jak jej znovu aktivovat nebo pokud je nutná administrátorská aktivace poèkejte a administrátor váš úèet znovu aktivuje.';

$lang['Password_mismatch'] = 'Zadaná hesla se neshodují.';
$lang['Current_password_mismatch'] = 'Vámi zadané aktuální heslo není správné.';
$lang['Password_long'] = 'Vaše heslo nesmí pøesahovat 32 znakù.';
$lang['Username_taken'] = 'Promiòte, ale tento uivatel je ji registrován.';
$lang['Username_invalid'] = 'Promiòte, ale toto uivatelské jméno obsahuje nepovolené znaky.';
$lang['Username_disallowed'] = 'Promiòte, ale toto uivatelské jméno je zakázáno.';
$lang['Email_taken'] = 'Promiòte, ale tuto e-mailovou adresu má ji registrována nìkterı uivatel.';
$lang['Email_banned'] = 'Promiòte, ale tato e-mailová adresa byla zakázána.';
$lang['Email_invalid'] = 'Promiòte, tato e-mailová adresa není platná.';
$lang['Signature_too_long'] = 'Váš podpis je pøíliš dlouhı.';
$lang['Fields_empty'] = 'Musíte zadat poadované údaje!';
$lang['Avatar_filetype'] = 'Obrázek postavièky musí bıt typu .jpg, .gif nebo .png.';
$lang['Avatar_filesize'] = 'Soubor obrázku postavièky musí bıt menší ne %d kB.'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Obrázek postavièky musí mít šíøku maximálnì %d bodù a vıšku %d bodù.';

$lang['Welcome_subject'] = 'Vítejte na %s fóru'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Novı uivatelskı úèet';
$lang['Account_activated_subject'] = 'Úèet aktivován';

$lang['Account_added'] = 'Dìkujeme za registraci, váš úèet byl vytvoøen. Nyní se mùete pøihlásit pod svım jménem a heslem.';
$lang['Account_inactive'] = 'Váš uivatelskı úèet byl vytvoøen. Ovšem tento board vyaduje aktivaci úètu. Aktivaèní klíè vám byl zaslán na vámi poskytnutou e-mailovou adresu, kde se dozvíte bliší informace.';
$lang['Account_inactive_admin'] = 'Váš uivatelskı úèet byl vytvoøen. Ovšem tento board vyaduje aktivaci úètu administrátorem. Po aktivaci administrátorem budete vyrozumìn(a) na vaší e-mailové adrese.';
$lang['Account_active'] = 'Váš úèet byl aktivován. Dìkujeme za registraci.';
$lang['Account_active_admin'] = 'Úèet byl aktivován.';
$lang['Reactivate'] = 'Reaktivujte si svùj úèet!';
$lang['Already_activated'] = 'Váš úèet jste ji aktivoval.';
$lang['COPPA'] = 'Váš úèet byl vytvoøen ale nemusí bıt ještì akceptován. Pro potvrzení si pøeètìte bliší informace v zaslaném e-mailu.';

$lang['Registration'] = 'Registraèní podmínky';
$lang['Reg_agreement'] = 'Aèkoliv se administrátoøi a moderátoøi tohoto fóra pokusí odstranit nebo upravit jakıkoliv všeobecnì neádoucí materiál tak rychle, jak je to jen moné, je nemoné prohlédnout kadı pøíspìvek. Proto musíte vzít na vìdomí, e všechny pøíspìvky v tomto fóru vyjadøují pohledy a názory autora pøíspìvku a ne administrátorù, moderátorù a webmastera (mimo pøíspìvkù od tìchto lidí), a proto za nì nemohou bıt zodpovìdní.<br /><br />Souhlasíte s tím, e nebudete posílat ádné hanlivé, neslušné, vulgární, nenávistné, zastrašující, sexuálnì orientované nebo jiné materiály, které mohou porušovat zákony. Posílání takovıch materiálù vám mùe pøivodit okamité a permanentní vyhoštìní z fóra (a váš ISP bude o vaší èinnosti informován). IP adresa všech pøíspìvkù je zaznamenávána pro pøípad potøeby vynucení tìchto podmínek. Souhlasíte, e webmaster, administrátor a moderátoøi tohoto fóra mají právo odstranit, upravit, pøesunout nebo ukonèit jakékoliv téma, kdykoliv zjistí, e odporuje tìmto podmínkám. Jako uivatel souhlasíte, e jakékoliv informace, které vloíte, budou uloeny v databázi. Dokud nebudou tyto informace prozrazeny tøetí stranì bez vašeho svolení, nemohou bıt webmaster, administrátor a moderátoøi èinìni zodpovìdnımi za jakékoliv hackerské pokusy, které mohou vést k tomu, e data budou kompromitována.<br /><br />Systém tohoto fóra pouívá cookies k ukládání informací na vašem poèítaèi. Tato cookies neobsahují ádné informace, které jste vloil, slouí jen ke zvıšení vašeho pohodlí pøi prohlíení. E-mailová adresa je pouívána jen pro potvrzení vašich registraèních detailù a hesla (a pro posláni nového hesla, pokud jste zapomnìl aktuální).<br /><br />Kliknutím na Registraci níe souhlasíte bıt vázanı tìmito podmínkami.';

$lang['Agree_under_13'] = 'Souhlasím s tìmito podmínkami a je mi <b>ménì</b> ne 13 let.';
$lang['Agree_over_13'] = 'Souhlasím s tìmito podmínkami a je mi <b>více</b> ne 13 let.';
$lang['Agree_not'] = 'Nesouhlasím s tìmito podmínkami.';

$lang['Wrong_activation'] = 'Vámi poskytnutı aktivaèní klíè se neshoduje s ádnım z databáze.';
$lang['Send_password'] = 'Zašlete mi nové heslo';
$lang['Password_updated'] = 'Nové heslo bylo vytvoøeno, oèekávejte e-mail s informacemi jak jej aktivovat.';
$lang['No_email_match'] = 'E-mailová adresa nesouhlasí s adresou pøiøazenou k vašemu uivatelskému jménu.';
$lang['New_password_activation'] = 'Aktivace nového hesla';
$lang['Password_activated'] = 'Váš úèet byl reaktivován. Pro pøihlášení pouijte heslo, která vám bylo zasláno e-mailem.';

$lang['Send_email_msg'] = 'Odeslat e-mail';
$lang['No_user_specified'] = 'Nebyl zvolen ádnı uivatel';
$lang['User_prevent_email'] = 'Tento uivatel si nepøeje pøijímat odpovìdi e-mailem. Zkuste mu zaslat soukromou zprávu.';
$lang['User_not_exist'] = 'Tento uivatel neexistuje.';
$lang['CC_email'] = 'Odeslat kopii tohoto e-mailu sobì.';
$lang['Email_message_desc'] = 'Tato zpráva bude zaslána jako prostı text, nebude obsahovat ádné HTML ani znaèky. Adresa pro odpovìï na tuto zprávu bude nastavena na vaši e-mailovou adresu.';
$lang['Flood_email_limit'] = 'Nemùete nyní odeslat další e-mail, zkuste opakovat pozdìji.';
$lang['Recipient'] = 'Pøíjemce';
$lang['Email_sent'] = 'E-mail byl odeslán.';
$lang['Send_email'] = 'Odeslat e-mail';
$lang['Empty_subject_email'] = 'Musíte zadat pøedmìt e-mailu!';
$lang['Empty_message_email'] = 'Musíte zadat text zprávy!';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Vámi zadanı ovìøovací kód není správnı!';
$lang['Too_many_registers'] = 'Pøekroèil jste maximální mnoství pokusù o registraci. Prosím, zkuste to znovu pozdìji.';
$lang['Confirm_code_impaired'] = 'Pokud si nejste jistı nebo je tento kód neèitelnı, kontaktujte %sadministrátora%s, kterı vám rád pomùe.';
$lang['Confirm_code'] = 'Ovìøovací kód';
$lang['Confirm_code_explain'] = 'Zapište kód pøesnì tak, jak ho vidíte. Je citlivı na malá a velká písmena a nulu poznáte podle pøeškrtnutí.';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Setøídit dle';
$lang['Sort'] = 'Setøídit';
$lang['Sort_Top_Ten'] = 'Nejèastìjší pøispìvatelé';
$lang['Sort_Joined'] = 'Data registrace';
$lang['Sort_Username'] = 'Jména uivatele';
$lang['Sort_Location'] = 'Bydlištì';
$lang['Sort_Posts'] = 'Poètu pøíspìvkù';
$lang['Sort_Email'] = 'E-mailu';
$lang['Sort_Website'] = 'WWW stránky';
$lang['Sort_Ascending'] = 'Vzestupnì';
$lang['Sort_Descending'] = 'Sestupnì';
$lang['Order'] = 'Dle poøadí';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Skupina - Ovládací panel';
$lang['Group_member_details'] = 'Detaily èlenství ve skupinì';
$lang['Group_member_join'] = 'Vstoupit do skupiny';

$lang['Group_Information'] = 'Informace o skupinì';
$lang['Group_name'] = 'Jméno skupiny';
$lang['Group_description'] = 'Popis skupiny';
$lang['Group_membership'] = 'Vaše èlenství';
$lang['Group_Members'] = 'Èlenové Skupiny';
$lang['Group_Moderator'] = 'Moderátor skupiny';
$lang['Pending_members'] = 'Èekající èlenové';

$lang['Group_type'] = 'Typ skupiny';
$lang['Group_open'] = 'Otevøená skupina';
$lang['Group_closed'] = 'Uzavøená skupina';
$lang['Group_hidden'] = 'Skrytá skupina';

$lang['Current_memberships'] = 'Aktuální èlenství';
$lang['Non_member_groups'] = 'Skupiny bez èlenù';
$lang['Memberships_pending'] = 'Èekací èlenství';

$lang['No_groups_exist'] = 'Neexistuje ádná skupina.';
$lang['Group_not_exist'] = 'Tato skupina neexistuje.';

$lang['Join_group'] = 'Pøihlásit se do skupiny';
$lang['No_group_members'] = 'Tato skupina nemá ádné èleny.';
$lang['Group_hidden_members'] = 'Tato skupina je skrytá, nemùete vidìt seznam jejích èlenù.';
$lang['No_pending_group_members'] = 'Tato skupina nemá èekající èleny.';
$lang['Group_joined'] = 'Úspìšnì jste vstoupil do této skupiny<br />Budete informován a bude váš vstup moderátorem této skupiny odsouhlasen.';
$lang['Group_request'] = 'Vaše ádost o vstup do skupiny byla odeslána.';
$lang['Group_approved'] = 'Vaše ádost byla odsouhlasena.';
$lang['Group_added'] = 'Byl jste pøijat do této skupiny.';
$lang['Already_member_group'] = 'Ji jste èlenem této skupiny.';
$lang['User_is_member_group'] = 'Uivatel ji je èlenem této skupiny.';
$lang['Group_type_updated'] = 'Typ skupiny byl úspìšnì aktualizován.';

$lang['Could_not_add_user'] = 'Zvolenı uivatel neexistuje.';
$lang['Could_not_anon_user'] = 'Anonymní uivatel nemùe bıt èlenem skupiny.';

$lang['Confirm_unsub'] = 'Opravdu chcete ukonèit èlenství v této skupinì?';
$lang['Confirm_unsub_pending'] = 'Vaše èlenství v této skupinì zatím nebylo odsouhlaseno, opravdu je chcete ukonèit?';

$lang['Unsub_success'] = 'Pøestal jste bıt èlenem této skupiny.';

$lang['Approve_selected'] = 'Akceptovat zvolené';
$lang['Deny_selected'] = 'Zamítnout zvolené';
$lang['Not_logged_in'] = ' Pro vstup do skupiny musíte bıt pøihlášen.';
$lang['Remove_selected'] = 'Odstranit zvolené';
$lang['Add_member'] = 'Pøidat èlena';
$lang['Not_group_moderator'] = 'Nejste moderátorem této skupiny, proto nemùete provést tuto akci.';

$lang['Login_to_join'] = 'Pøihlásit pro vstup do skupiny nebo úpravy èlenství.';
$lang['This_open_group'] = 'Toto je otevøená skupina, kliknìte pro poádání o èlenství.';
$lang['This_closed_group'] = 'Toto je uzavøená skupina, ádní další uivatelé nejsou pøíjímáni.';
$lang['This_hidden_group'] = 'Toto je skrytá skupina, automatické pøidávání uivatelù není dovoleno.';
$lang['Member_this_group'] = 'Jste èlenem této skupiny.';
$lang['Pending_this_group'] = 'Vaše èlenství v této skupinì èeká na odsouhlasení.';
$lang['Are_group_moderator'] = 'Jste moderátorem skupiny.';
$lang['None'] = 'nikdo není pøítomen';

$lang['Subscribe'] = 'Poádat o èlenství';
$lang['Unsubscribe'] = 'Ukonèit èlenství';
$lang['View_Information'] = 'Zobrazit informace';


//
// Search
//
$lang['Search_query'] = 'Hledanı øetìzec';
$lang['Search_options'] = 'Monosti hledání';

$lang['Search_keywords'] = 'Klíèová slova';
$lang['Search_keywords_explain'] = 'Mùete pouít <u>AND</u> pro slova, která musí bıt ve vısledcích, <u>OR</u> pro taková, která tam mohou náleet a <u>NOT</u> pro taková, která by ve vısledcích nemìla bıt. Znak "*" nahradí èást øetìzce pøi vyhledávání.';
$lang['Search_author'] = 'Autora';
$lang['Search_author_explain'] = 'Znak "*" nahradí èást øetìzce pøi vyhledávání.';

$lang['Search_for_any'] = 'Hledej kterékoliv slovo nebo vıraz jak je zadanı';
$lang['Search_for_all'] = 'Hledej všechna slova';
$lang['Search_title_msg'] = 'Hledej název tématu a text zprávy';
$lang['Search_msg_only'] = 'Hledat jen text zprávy';

$lang['Return_first'] = 'Zobraz prvních'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'znakù z pøíspìvku';

$lang['Search_previous'] = 'Prohledej pøedchozí'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Setøídit dle';
$lang['Sort_Time'] = 'Èas odeslání';
$lang['Sort_Post_Subject'] = 'Pøedmìtu';
$lang['Sort_Topic_Title'] = 'Hlavièky tématu';
$lang['Sort_Author'] = 'Autora';
$lang['Sort_Forum'] = 'Fóra';

$lang['Display_results'] = 'Zobrazit vısledek jako';
$lang['All_available'] = 'Všechny dostupné';
$lang['No_searchable_forums'] = 'Pokud nechcete povolit vyhledávání v libovolnıch fórech tohoto serveru';

$lang['No_search_match'] = 'ádné téma nebo pøíspìvek nebyl nalezen dle zvolenıch kritérií.';
$lang['Found_search_match'] = 'Byl nalezen %d vısledek hledání.'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Bylo nalezeno %d vısledkù hledání.'; // eg. Search found 24 matches

$lang['Search_Flood_Error'] = 'Nemùete provést další hledání takto brzy po pøedchozím hledání, chvíli vyèkejte a zkuste to znovu.';

$lang['Close_window'] = 'Zavøít okno';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Promiòte, ale jen %s mohou posílat oznámení do tohoto fóra.';
$lang['Sorry_auth_sticky'] = 'Promiòte, ale jen %s mohou posílat dùleité zprávy do tohoto fóra.';
$lang['Sorry_auth_read'] = 'Promiòte, ale jen %s mohou èíst témata v tomto fóru.';
$lang['Sorry_auth_post'] = 'Promiòte, ale jen %s mohou posílat témata do tohoto fóra.';
$lang['Sorry_auth_reply'] = 'Promiòte, ale jen %s mohou odpovídat na pøíspìvky v tomto fóru.';
$lang['Sorry_auth_edit'] = 'Promiòte, ale jen %s mohou upravovat pøíspìvky v tomto fóru.';
$lang['Sorry_auth_delete'] = 'Promiòte, ale jen %s mohou mazat pøíspìvky v tomto fóru.';
$lang['Sorry_auth_vote'] = 'Promiòte, ale jen %s mohou hlasovat v hlasování tohoto fóra.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonymní uivatelé</b>';
$lang['Auth_Registered_Users'] = '<b>registrovaní uivatelé</b>';
$lang['Auth_Users_granted_access'] = '<b>uivatelé se zvláštním oprávnìním</b>';
$lang['Auth_Moderators'] = '<b>moderátoøi</b>';
$lang['Auth_Administrators'] = '<b>administrátoøi</b>';

$lang['Not_Moderator'] = 'Nejste moderátorem tohoto fóra.';
$lang['Not_Authorised'] = 'Neautorizovanı';

$lang['You_been_banned'] = 'Byl jste vykázán z tohoto fóra<br />Prosím kontaktujte webmastera nebo administrátora tohoto fóra pro získání bliších informací.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Je zde 0 registrovanıch uivatelù a '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Je zde %d registrovanıch uivatelù a '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'Je zde %d registrovanı uivatel a '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 skrytıch uivatelù.'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d skrytıch uivatelù.'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d skrytı uivatel.'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Je zde %d anonymních uivatelù.'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Je zde 0 anonymních uivatelù.'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Je zde %d anonymní uivatel.'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Momentálnì zde nejsou ádní uivatelé.';

$lang['Online_explain'] = 'Tato data jsou zaloena na aktivitì uivatelù bìhem posledních 5 minut.';

$lang['Forum_Location'] = 'Nachází se';
$lang['Last_updated'] = 'Poslední aktualizace';

$lang['Forum_index'] = 'Obsah fóra';
$lang['Logging_on'] = 'Pøihlašuje se';
$lang['Posting_message'] = 'Odesílá zprávu';
$lang['Searching_forums'] = 'Prohledává fóra';
$lang['Viewing_profile'] = 'Prohlíí nastavení';
$lang['Viewing_online'] = 'Prohlíí seznam pøítomnıch uivatelù';
$lang['Viewing_member_list'] = 'Prohlíí seznam uivatelù';
$lang['Viewing_priv_msgs'] = 'Prohlíí soukromé zprávy';
$lang['Viewing_FAQ'] = 'prohlíí FAQ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderátor - Ovládací panel';
$lang['Mod_CP_explain'] = 'Pomocí následujícího formuláøe mùete provádìt hromadné zásahy do tohoto fóra. Mùete zamykat, odemykat, pøesouvat a mazat jakıkoliv poèet témat.';

$lang['Select'] = 'Zvolit';
$lang['Delete'] = 'Odstranit';
$lang['Move'] = 'Pøesunout';
$lang['Lock'] = 'Zamknout';
$lang['Unlock'] = 'Odemknout';

$lang['Topics_Removed'] = 'Zvolená témata byla úspìšnì odstranìna z databáze.';
$lang['Topics_Locked'] = 'Zvolená témata byla uzamknuta.';
$lang['Topics_Moved'] = 'Zvolená témata byla pøesunuta.';
$lang['Topics_Unlocked'] = 'Zvolená témata byla odemknuta.';
$lang['No_Topics_Moved'] = 'ádná témata nebyla pøesunuta.';

$lang['Confirm_delete_topic'] = 'Opravdu chcete odstranit zvolená témata?';
$lang['Confirm_lock_topic'] = 'Opravdu chcete zamknout zvolená témata?';
$lang['Confirm_unlock_topic'] = 'Opravdu chcete odemknout zvolená témata?';
$lang['Confirm_move_topic'] = 'Opravdu chcete pøesunout zvolená témata?';

$lang['Move_to_forum'] = 'Pøesunout do fóra';
$lang['Leave_shadow_topic'] = 'Ponechat stínové téma ve starém fóru?';

$lang['Split_Topic'] = 'Rozdìlení tématu - Ovládací panel';
$lang['Split_Topic_explain'] = 'Pomocí následujícího formuláøe mùete téma rozdìlit na dvì, buï vybráním pøíspìvkù jednotlivì, nebo rozdìlením od vybraného pøíspìvku.';
$lang['Split_title'] = 'Titulek nového tématu';
$lang['Split_forum'] = 'Forum pro nové téma';
$lang['Split_posts'] = 'Rozdìlit vybrané pøíspìvky';
$lang['Split_after'] = 'Rozdìlit od vybraného pøíspìvku';
$lang['Topic_split'] = 'Vybrané téma bylo úspìšnì rozdìleno';

$lang['Too_many_error'] = 'Vybral(a) jste pøíliš mnoho pøíspìvkù. Mùete vybrat pouze jeden pøíspìvek, od kterého chcete téma rozdìlit!';

$lang['None_selected'] = 'Nebylo vybrání ádné téma pro vykonání této operace. Proveïte návrat zpìt a zvolte alespoò jedno téma!';
$lang['New_forum'] = 'Nové fórum';

$lang['This_posts_IP'] = 'IP adresa pøíspìvku';
$lang['Other_IP_this_user'] = 'Další IP adresy ze kterıch uivatel odesílal pøíspìvky';
$lang['Users_this_IP'] = 'Uivatelé zasílající pøíspìvek z této IP adresy';
$lang['IP_info'] = 'Informace o IP adrese';
$lang['Lookup_IP'] = 'Hledat IP adresu';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Èasy uvádìny v %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 hodin';
$lang['-11'] = 'GMT - 11 hodin';
$lang['-10'] = 'GMT - 10 hodin';
$lang['-9'] = 'GMT - 9 hodin';
$lang['-8'] = 'GMT - 8 hodin';
$lang['-7'] = 'GMT - 7 hodin';
$lang['-6'] = 'GMT - 6 hodin';
$lang['-5'] = 'GMT - 5 hodin';
$lang['-4'] = 'GMT - 4 hodiny';
$lang['-3.5'] = 'GMT - 3.5 hodiny';
$lang['-3'] = 'GMT - 3 hodiny';
$lang['-2'] = 'GMT - 2 hodiny';
$lang['-1'] = 'GMT - 1 hodina';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 hodina';
$lang['2'] = 'GMT + 2 hodiny';
$lang['3'] = 'GMT + 3 hodiny';
$lang['3.5'] = 'GMT + 3.5 hodiny';
$lang['4'] = 'GMT + 4 hodiny';
$lang['4.5'] = 'GMT + 4.5 hodiny';
$lang['5'] = 'GMT + 5 hodin';
$lang['5.5'] = 'GMT + 5.5 hodiny';
$lang['6'] = 'GMT + 6 hodin';
$lang['6.5'] = 'GMT + 6.5 hodiny';
$lang['7'] = 'GMT + 7 hodin';
$lang['8'] = 'GMT + 8 hodin';
$lang['9'] = 'GMT + 9 hodin';
$lang['9.5'] = 'GMT + 9.5 hodin';
$lang['10'] = 'GMT + 10 hodin';
$lang['11'] = 'GMT + 11 hodin';
$lang['12'] = 'GMT + 12 hodin';
$lang['13'] = 'GMT + 13 hodin';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12:00 hodin) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11:00 hodin) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10:00 hodin) Hawaii';
$lang['tz']['-9'] = '(GMT -9:00 hodin) Alaska';
$lang['tz']['-8'] = '(GMT -8:00 hodin) Pacific Time (US &amp; Canada), Tijuana';
$lang['tz']['-7'] = '(GMT -7:00 hodin) Mountain Time (US &amp; Canada), Arizona';
$lang['tz']['-6'] = '(GMT -6:00 hodin) Central Time (US &amp; Canada), Mexico City';
$lang['tz']['-5'] = '(GMT -5:00 hodin) Eastern Time (US &amp; Canada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4:00 hodiny) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 hodiny) Newfoundland';
$lang['tz']['-3'] = '(GMT -3:00 hodiny) Brassila, Buenos Aires, Georgetown, Falkland Is';
$lang['tz']['-2'] = '(GMT -2:00 hodiny) Mid-Atlantic, Ascension Is., St. Helena';
$lang['tz']['-1'] = '(GMT -1:00 hodina) Azores, Cape Verde Islands';
$lang['tz']['0'] = '(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia';
$lang['tz']['1'] = '(GMT +1:00 hodina) Prague, Amsterdam, Berlin, Brussels, Madrid, Paris';
$lang['tz']['2'] = '(GMT +2:00 hodiny) Cairo, Helsinki, Kaliningrad, South Africa';
$lang['tz']['3'] = '(GMT +3:00 hodiny) Baghdad, Riyadh, Moscow, Nairobi';
$lang['tz']['3.5'] = '(GMT +3.5 hodiny) Tehran';
$lang['tz']['4'] = '(GMT +4:00 hodiny) Abu Dhabi, Baku, Muscat, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4.5 hodiny) Kabul';
$lang['tz']['5'] = '(GMT +5:00 hodin) Ekaterinburg, Islamabad, Karachi, Tashkent';
$lang['tz']['5.5'] = '(GMT +5.5 hodiny) Bombay, Calcutta, Madras, New Delhi';
$lang['tz']['6'] = '(GMT +6:00 hodin) Almaty, Colombo, Dhaka, Novosibirsk';
$lang['tz']['6.5'] = '(GMT +6.5 hodiny) Rangoon';
$lang['tz']['7'] = '(GMT +7:00 hodin) Bangkok, Hanoi, Jakarta';
$lang['tz']['8'] = '(GMT +8:00 hodin) Beijing, Hong Kong, Perth, Singapore, Taipei';
$lang['tz']['9'] = '(GMT +9:00 hodin) Osaka, Sapporo, Seoul, Tokyo, Yakutsk';
$lang['tz']['9.5'] = '(GMT +9.5 hodiny) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10:00 hodin) Canberra, Guam, Melbourne, Sydney, Vladivostok';
$lang['tz']['11'] = '(GMT +11:00 hodin) Magadan, New Caledonia, Solomon Islands';
$lang['tz']['12'] = '(GMT +12:00 hodin) Auckland, Wellington, Fiji, Marshall Island';
$lang['tz']['13'] = '(GMT +13:00 hodin) Nuku\'alofa';

$lang['datetime']['Sunday'] = 'nedìle';
$lang['datetime']['Monday'] = 'pondìlí';
$lang['datetime']['Tuesday'] = 'úterı';
$lang['datetime']['Wednesday'] = 'støeda';
$lang['datetime']['Thursday'] = 'ètvrtek';
$lang['datetime']['Friday'] = 'pátek';
$lang['datetime']['Saturday'] = 'sobota';
$lang['datetime']['Sun'] = 'ne';
$lang['datetime']['Mon'] = 'po';
$lang['datetime']['Tue'] = 'út';
$lang['datetime']['Wed'] = 'st';
$lang['datetime']['Thu'] = 'èt';
$lang['datetime']['Fri'] = 'pá';
$lang['datetime']['Sat'] = 'so';
$lang['datetime']['January'] = 'leden';
$lang['datetime']['February'] = 'únor';
$lang['datetime']['March'] = 'bøezen';
$lang['datetime']['April'] = 'duben';
$lang['datetime']['May'] = 'kvìten';
$lang['datetime']['June'] = 'èerven';
$lang['datetime']['July'] = 'èervenec';
$lang['datetime']['August'] = 'srpen';
$lang['datetime']['September'] = 'záøí';
$lang['datetime']['October'] = 'øíjen';
$lang['datetime']['November'] = 'listopad';
$lang['datetime']['December'] = 'prosinec';
$lang['datetime']['Jan'] = 'leden';
$lang['datetime']['Feb'] = 'únor';
$lang['datetime']['Mar'] = 'bøezen';
$lang['datetime']['Apr'] = 'duben';
$lang['datetime']['May'] = 'kvìten';
$lang['datetime']['Jun'] = 'èerven';
$lang['datetime']['Jul'] = 'èervenec';
$lang['datetime']['Aug'] = 'srpen';
$lang['datetime']['Sep'] = 'záøí';
$lang['datetime']['Oct'] = 'øíjen';
$lang['datetime']['Nov'] = 'listopad';
$lang['datetime']['Dec'] = 'prosinec';

$lang['TRANSLATION_INFO'] = 'Èeskı pøeklad <a href="http://www.phpbbcz.com" target="_blank">phpBB Czech - www.phpbbcz.com</a>';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informace';
$lang['Critical_Information'] = 'Kritická informace';

$lang['General_Error'] = 'Všeobecná chyba';
$lang['Critical_Error'] = 'Kritická chyba';
$lang['An_error_occured'] = 'Objevila se chyba';
$lang['A_critical_error'] = 'Objevila se kritická chyba';

$lang['Admin_reauthenticate'] = 'Pro vstup do administrátorské sekce se musíte znovu pøihlásit';

$lang['Login_attempts_exceeded'] = 'Byl pøekroèen maximální poèet pokusù o pøihlášení (%s). Následujících %s minut nebudete mít povoleno se pøihlásit.';
$lang['Please_remove_install_contrib'] = 'Zkontrolujte zda jsou odstranìny sloky install/ a contrib/.';

//
// That's all Folks!
// -------------------------------------------------
?>