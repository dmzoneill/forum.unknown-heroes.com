<?php

/***************************************************************************
 *                            lang_main.php [Croatian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
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

/***************************************************************************
 *   CONTRIBUTORS
  *   AN�I - START
 *   <NE bri�i i NE mijenjaj!>
 *   Danas �e biti toplo i sun�ano.
 *   [Hrvatski]
 *   Prevela s engleskog na hrvatski: An�ica Se�an [Ancica Secan].
 *   Verzija: 1.0.0.
 *   Vrijeme: 22. travnja 2003. godine [utorak].
 *   Verzija: 1.0.1.
 *   A�urirano za 2.0.5: 19. lipnja 2003. godine [�etvrtak].
 *   Verzija: 1.0.2.
 *   A�urirano za 2.0.11: 30. sije�nja 2005. godine [nedjelja].
 *   Verzija: 1.0.3.
 *   A�urirano za 2.0.12: 24. velja�e 2005. godine [�etvrtak].
 *   Verzija: 1.0.4.
 *   A�urirano za 2.0.15: 08. svibnja 2005. godine [nedjelja].
 *   Verzija: 1.0.5.
 *   A�urirano za 2.0.15: 20. lipnja 2005. godine [ponedjeljak].
 *   Verzija: 1.0.6.
 *   A�urirano za 2.0.15: 24. lipnja 2005. godine [petak].
 *   Verzija: 1.0.7.
 *   A�urirano za 2.0.17: 11. rujna 2005. godine [nedjelja].
 *   Verzija: 1.0.8.
 *   A�urirano za 2.0.17: 05. listopada 2005. godine [srijeda].
 *   Verzija: 1.0.9.
 *   A�urirano za 2.0.18: 31. listopada 2005. godine [ponedjeljak].
 *   Verzija: 2.0.0.
 *   A�urirano za 2.0.19: 05. sije�nja 2006. godine [�etvrtak].
 *   Verzija: 2.0.1.
 *   A�urirano za 2.0.19: 16. velja�e 2006. godine [�etvrtak].
 *   Verzija: 2.0.2.
 *   A�urirano za 2.0.20: 07. travnja 2006. godine [petak].
 *   Verzija: 2.0.3.
 *   A�urirano za 2.0.20: 09. travnja 2006. godine [nedjelja].
 *   Verzija: 2.0.4.
 *   A�urirano za 2.0.22: 23. prosinca 2006. godine [subota].
 *   Url: http://ancica.sunceko.net.
 *   Danas �e biti toplo i sun�ano.
 *   [Zadnju] Slu�benu verziju ovog mog prijevoda mo�e� skinuti sa www.phpbb.com.
 *   [Zadnju] NeSlu�benu verziju ovog mog prijevoda mo�e� skinuti sa forum.sunceko.net.
 *   Danas �e biti toplo i sun�ano.
 *   </NE bri�i i NE mijenjaj!>
  *   AN�I - END
 ***************************************************************************/

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-2';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd. m. Y.'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION'] = 'HR (Cro) by <a href="http://ancica.sunceko.net" title="HR (Cro) by An�ica Se�an...">An�ica Se�an</a>';
$lang['TRANSLATION_INFO'] = 'HR (Cro) by <a href="http://ancica.sunceko.net" title="HR (Cro) by An�ica Se�an...">An�ica Se�an</a>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategorija';
$lang['Topic'] = 'Tema';
$lang['Topics'] = 'Teme';
$lang['Replies'] = 'Odgovori';
$lang['Views'] = 'Pogledano';
$lang['Post'] = 'Post';
$lang['Posts'] = 'Postovi';
$lang['Posted'] = 'Postano';
$lang['Username'] = 'Korisni�ko ime';
$lang['Password'] = 'Zaporka';
$lang['Email'] = 'E-mail';
$lang['Poster'] = 'Autor/ica';
$lang['Author'] = 'Autor/ica';
$lang['Time'] = 'Vrijeme';
$lang['Hours'] = 'Sati';
$lang['Message'] = 'Poruka';

$lang['0_Day'] = '0 dana';
$lang['1_Day'] = '1 dan';
$lang['2_Days'] = '2 dana';
$lang['3_Days'] = '3 dana';
$lang['4_Days'] = '4 dana';
$lang['5_Days'] = '5 dana';
$lang['6_Days'] = '6 dana';
$lang['7_Days'] = '7 dana';
$lang['8_Days'] = '8 dana';
$lang['9_Days'] = '9 dana';
$lang['10_Days'] = '10 dana';
$lang['11_Days'] = '11 dana';
$lang['12_Days'] = '12 dana';
$lang['13_Days'] = '13 dana';
$lang['0_Week'] = '0 tjedana';
$lang['1_Week'] = '1 tjedan';
$lang['2_Weeks'] = '2 tjedna';
$lang['3_Weeks'] = '3 tjedna';
$lang['4_Weeks'] = '4 tjedna';
$lang['5_Weeks'] = '5 tjedana';
$lang['6_Weeks'] = '6 tjedana';
$lang['7_Weeks'] = '7 tjedana';
$lang['8_Weeks'] = '8 tjedana';
$lang['9_Weeks'] = '9 tjedana';
$lang['10_Weeks'] = '10 tjedana';
$lang['11_Weeks'] = '11 tjedana';
$lang['12_Weeks'] = '12 tjedana';
$lang['13_Weeks'] = '13 tjedana';
$lang['0_Month'] = '0 mjeseci';
$lang['1_Month'] = '1 mjesec';
$lang['2_Months'] = '2 mjeseca';
$lang['3_Months'] = '3 mjeseca';
$lang['4_Months'] = '4 mjeseca';
$lang['5_Months'] = '5 mjeseci';
$lang['6_Months'] = '6 mjeseci';
$lang['7_Months'] = '7 mjeseci';
$lang['8_Months'] = '8 mjeseci';
$lang['9_Months'] = '9 mjeseci';
$lang['10_Months'] = '10 mjeseci';
$lang['11_Months'] = '11 mjeseci';
$lang['12_Months'] = '12 mjeseci';
$lang['13_Months'] = '13 mjeseci';
$lang['0_Year'] = '0 godina';
$lang['1_Year'] = '1 godina';
$lang['2_Years'] = '2 godine';
$lang['3_Years'] = '3 godine';
$lang['4_Years'] = '4 godine';
$lang['5_Years'] = '5 godina';
$lang['6_Years'] = '6 godina';
$lang['7_Years'] = '7 godina';
$lang['8_Years'] = '8 godina';
$lang['9_Years'] = '9 godina';
$lang['10_Years'] = '10 godina';
$lang['11_Years'] = '11 godina';
$lang['12_Years'] = '12 godina';
$lang['13_Years'] = '13 godina';

$lang['Go'] = '-klik-';
$lang['Jump_to'] = 'Forum(o)Bir';
$lang['Submit'] = 'Po�alji';
$lang['Reset'] = 'Izbri�i';
$lang['Cancel'] = 'Poni�ti';
$lang['Preview'] = 'Pregledaj';
$lang['Confirm'] = 'Potvrdi';
$lang['Spellcheck'] = 'Provjera pravopisa';
$lang['Yes'] = 'Da';
$lang['No'] = 'Ne';
$lang['Enabled'] = 'Omogu�eno';
$lang['Disabled'] = 'Onemogu�eno';
$lang['Error'] = 'Gre�ka';

$lang['Next'] = 'Sljede�a';
$lang['Previous'] = 'Prethodna';
$lang['Goto_page'] = '';
$lang['Joined'] = 'Pridru�en/a';
$lang['IP_Address'] = 'IP adresa';

$lang['Select_forum'] = 'Izaberi forum';
$lang['View_latest_post'] = 'Pogledaj zadnji post';
$lang['View_newest_post'] = 'Pogledaj najnoviji post';
$lang['Page_of'] = 'Stranica <b>%d</b> / <b>%d</b>.'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AIM';
$lang['MSNM'] = 'MSNM';
$lang['YIM'] = 'YIM';

$lang['Forum_Index'] = '%s';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Zapo�ni novu temu';
$lang['Reply_to_topic'] = 'Odgovori na temu';
$lang['Reply_with_quote'] = 'Citiraj i odgovori';

$lang['Click_return_topic'] = 'Klikni %sovdje%s za povratak na temu.'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Klikni %sovdje%s da poku�a� ponovo.';
$lang['Click_return_forum'] = 'Klikni %sovdje%s za povratak na forum.';
$lang['Click_view_message'] = 'Klikni %sovdje%s da pogleda� post/poruku.';
$lang['Click_return_modcp'] = 'Klikni %sovdje%s za povratak na ModeratorControlPanel.';
$lang['Click_return_group'] = 'Klikni %sovdje%s za povratak na info o grupi.';

$lang['Admin_panel'] = 'AdministratorPanel';

$lang['Board_disable'] = 'Forum je trenutno nedostupan.<br />Poku�aj ponovo kasnije.';

//
// Global Header strings
//

$lang['Registered_users'] = 'Registriranih korisnika/ca:';
$lang['Browsing_forum'] = 'Trenutno korisnika/ca: ';
$lang['Online_users_zero_total'] = 'Ukupno je: <b>0</b> korisnika/ca online; ';
$lang['Online_users_total'] = 'Ukupno je: <b>%d</b> korisnika/ca online; ';
$lang['Online_user_total'] = 'Ukupno je: <b>%d</b> korisnik/ca online; ';
$lang['Reg_users_zero_total'] = '0 registriranih, ';
$lang['Reg_users_total'] = '%d registriranih, ';
$lang['Reg_user_total'] = '%d registriran/a, ';
$lang['Hidden_users_zero_total'] = '0 skrivenih i ';
$lang['Hidden_user_total'] = '%d skriven/a i ';
$lang['Hidden_users_total'] = '%d skrivenih i ';
$lang['Guest_users_zero_total'] = '0 gostiju.';
$lang['Guest_users_total'] = '%d gostiju.';
$lang['Guest_user_total'] = '%d gost.';
$lang['Record_online_users'] = 'Najvi�e korisnika/ca istovremeno online bilo je: <b>%s</b>, dana %s.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrator/ica%s';
$lang['Mod_online_color'] = '%sModerator/ica%s';

$lang['You_last_visit'] = 'Zadnji put si bio/la ovdje: %s.'; // %s replaced by date/time
$lang['Current_time'] = 'Sada je: %s.'; // %s replaced by time

$lang['Search_new'] = 'Pogledaj postove od zadnjeg posjeta';
$lang['Search_new_p'] = 'Pogledaj postove od <br />zadnjeg posjeta';
$lang['Search_your_posts'] = 'Pogledaj svoje postove';
$lang['Search_unanswered'] = 'Pogledaj neodgovorene postove';

$lang['Register'] = 'Registracija';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Uredi profil';
$lang['Search'] = 'Pretra�nik';
$lang['Memberlist'] = '�lanstvo';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'BBCode vodi�';
$lang['Usergroups'] = 'Korisni�ke grupe';
$lang['Last_Post'] = 'Zadnji post';
$lang['Moderator'] = 'Moderator/ica';
$lang['Moderators'] = 'Moderatori/ce';

//
// Stats block text
//

$lang['Posted_articles_zero_total'] = 'Ukupno postova: <b>0</b>.'; // Number of posts
$lang['Posted_articles_total'] = 'Ukupno postova: <b>%d</b>.'; // Number of posts
$lang['Posted_article_total'] = 'Ukupno postova: <b>%d</b>.'; // Number of posts
$lang['Registered_users_zero_total'] = 'Registriranih korisnika/ca: <b>0</b>.'; // # registered users
$lang['Registered_users_total'] = 'Registriranih korisnika/ca: <b>%d</b>.'; // # registered users
$lang['Registered_user_total'] = 'Registriranih korisnika/ca: <b>%d</b>.'; // # registered users
$lang['Newest_user'] = 'Najnoviji/a registrirani/a korisnik/ca: <b>%s%s%s</b>.'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Nema novih postova od tvog zadnjeg posjeta';
$lang['No_new_posts'] = 'Nema novih postova';
$lang['New_posts'] = 'Novi postovi';
$lang['New_post'] = 'Novi post';
$lang['No_new_posts_hot'] = 'Nema novih postova [Popularno]';
$lang['New_posts_hot'] = 'Novi postovi [Popularno]';
$lang['No_new_posts_locked'] = 'Nema novih postova [Zaklju�ano]';
$lang['New_posts_locked'] = 'Novi postovi [Zaklju�ano]';
$lang['Forum_is_locked'] = 'Forum je zaklju�an';


//
// Login
//

$lang['Enter_password'] = 'Unesi korisni�ko ime i zaporku za loginiranje...';
$lang['Login'] = 'Login';
$lang['Logout'] = 'Logout';

$lang['Forgotten_password'] = 'Zaboravih zaporku';

$lang['Log_me_in'] = 'Loginiraj me automatski';

$lang['Error_login'] = 'Unio/la si neto�no/neaktivno korisni�ko ime i/ili neto�nu zaporku.';

//
// Index page
//

$lang['Index'] = 'Index';
$lang['No_Posts'] = '/';
$lang['No_forums'] = '/';

$lang['Private_Message'] = 'Privatna poruka';
$lang['Private_Messages'] = 'Privatne poruke';
$lang['Who_is_Online'] = 'Online';

$lang['Mark_all_forums'] = 'Ozna�i sve forume kao pro�itane';
$lang['Forums_marked_read'] = 'Svi forumi ozna�eni su kao pro�itani.';

//
// Viewforum
//

$lang['View_forum'] = 'Pogledaj forum';

$lang['Forum_not_exist'] = 'Forum koji si izabrao/la ne postoji.';
$lang['Reached_on_error'] = 'Na ovu stranicu si dospio/la gre�kom.';

$lang['Display_topics'] = 'Prika�i prethodne teme';
$lang['All_Topics'] = 'Sve teme';

$lang['Topic_Announcement'] = '<b>Obavijest:</b>';
$lang['Topic_Sticky'] = '<b>Va�no:</b>';
$lang['Topic_Moved'] = '<b>Premje�teno:</b>';
$lang['Topic_Poll'] = '<b>[Anketa]</b>';

$lang['Mark_all_topics'] = 'Ozna�i sve teme kao pro�itane';
$lang['Topics_marked_read'] = 'Teme foruma ozna�ene su kao pro�itane.';

$lang['Rules_post_can'] = '<b>Mo�e�</b> otvarati nove teme.';
$lang['Rules_post_cannot'] = '<b>Ne mo�e�</b> otvarati nove teme.';
$lang['Rules_reply_can'] = '<b>Mo�e�</b> odgovarati na postove.';
$lang['Rules_reply_cannot'] = '<b>Ne mo�e�</b> odgovarati na postove.';
$lang['Rules_edit_can'] = '<b>Mo�e�</b> ure�ivati svoje postove.';
$lang['Rules_edit_cannot'] = '<b>Ne mo�e�</b> ure�ivati svoje postove.';
$lang['Rules_delete_can'] = '<b>Mo�e�</b> izbrisati svoje postove.';
$lang['Rules_delete_cannot'] = '<b>Ne mo�e�</b> izbrisati svoje postove.';
$lang['Rules_vote_can'] = '<b>Mo�e�</b> glasovati u anketama.';
$lang['Rules_vote_cannot'] = '<b>Ne mo�e�</b> glasovati u anketama.';
$lang['Rules_moderate'] = '<b>Mo�e�</b> %smoderirati ovaj forum%s.'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Nema tema/postova u ovom forumu.<br />Klikni na <b>nova tema</b> kako bi otvorio/la [pokrenuo/la] novu temu/postao/la.';

//
// Viewtopic
//

$lang['View_topic'] = 'Pogledaj temu';

$lang['Guest'] = 'Gost';
$lang['Post_subject'] = 'Naslov';
$lang['View_next_topic'] = 'Sljede�a tema';
$lang['View_previous_topic'] = 'Prethodna tema';
$lang['Submit_vote'] = 'Glasuj';
$lang['View_results'] = 'Rezultati';

$lang['No_newer_topics'] = 'Nema novijih tema.';
$lang['No_older_topics'] = 'Nema starijih tema.';
$lang['Topic_post_not_exist'] = 'Tema/post koju/i si tra�io/la ne postoji.';
$lang['No_posts_topic'] = 'Nema tema/postova.';

$lang['Display_posts'] = 'Prethodni postovi';
$lang['All_Posts'] = 'Svi postovi';
$lang['Newest_First'] = 'Prvo najnovije';
$lang['Oldest_First'] = 'Prvo najstarije';

$lang['Back_to_top'] = '[Vrh]';

$lang['Read_profile'] = 'Korisni�ki profil';
$lang['Visit_website'] = 'Posjeti Web stranice';
$lang['ICQ_status'] = 'ICQ status';
$lang['Edit_delete_post'] = 'Uredi post';
$lang['View_IP'] = 'Pogledaj IP';
$lang['Delete_post'] = 'Izbri�i post';

$lang['wrote'] = 'je napisao/la'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Citat'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Zadnja promjena: %s; %s; ukupno mijenjano %d put.'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Zadnja promjena: %s; %s; ukupno mijenjano %d put/a.'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Zaklju�aj temu';
$lang['Unlock_topic'] = 'Otklju�aj temu';
$lang['Move_topic'] = 'Premjesti temu';
$lang['Delete_topic'] = 'Izbri�i temu';
$lang['Split_topic'] = 'Podijeli temu';

$lang['Stop_watching_topic'] = 'Prestani pratiti temu';
$lang['Start_watching_topic'] = 'Po�ni pratiti temu';
$lang['No_longer_watching'] = 'Od sada vi�e ne prati� ovu temu.';
$lang['You_are_watching'] = 'Od sada prati� ovu temu.';

$lang['Total_votes'] = 'Ukupno glasova';

//
// Posting/Replying (Not private messaging!)
//

$lang['Message_body'] = 'Tijelo poruke';
$lang['Topic_review'] = 'Pregled teme/posta';

$lang['No_post_mode'] = 'Na�in postanja nije specificiran'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Zapo�ni novu temu';
$lang['Post_a_reply'] = 'Odgovori';
$lang['Post_topic_as'] = 'Zapo�ni temu kao';
$lang['Edit_Post'] = 'Uredi post';
$lang['Options'] = 'Opcije';

$lang['Post_Announcement'] = 'Obavijest';
$lang['Post_Sticky'] = 'Va�no';
$lang['Post_Normal'] = 'Normalno';

$lang['Confirm_delete'] = 'Jesi li siguran/na da �eli� izbrisati ovaj post?';
$lang['Confirm_delete_poll'] = 'Jesi li siguran/na da �eli� izbrisati ovu anketu?';

$lang['Flood_Error'] = 'Ne mo�e� postati tako brzo iza zadnjeg posta koji si postao/la.<br />Poku�aj ponovo kasnije.';
$lang['Empty_subject'] = 'Mora� specificirati naslov teme/posta.';
$lang['Empty_message'] = 'Mora� napisati poruku.';
$lang['Forum_locked'] = 'Ovaj forum je zaklju�an: ne mo�e� postati/odgovarati/ure�ivati teme/postove.';
$lang['Topic_locked'] = 'Ova tema je zaklju�ana: ne mo�e� ure�ivati postove niti odgovarati.';
$lang['No_post_id'] = 'Mora� izabrati post koji �eli� urediti.';
$lang['No_topic_id'] = 'Mora� izabrati temu/post na koju/i odgovara�.';
$lang['No_valid_mode'] = 'Mo�e� samo slati/odgovarati/ure�ivati/citirati postove.<br />Vrati se i poku�aj ponovo.';
$lang['No_such_post'] = 'Ne postoji takav post.<br />Vrati se i poku�aj ponovo.';
$lang['Edit_own_posts'] = 'Mo�e� ure�ivati samo svoje postove.';
$lang['Delete_own_posts'] = 'Mo�e� izbrisati samo svoje postove.';
$lang['Cannot_delete_replied'] = 'Ne mo�e� izbrisati postove na koje je odgovoreno.';
$lang['Cannot_delete_poll'] = 'Ne mo�e� izbrisati aktivnu anketu.';
$lang['Empty_poll_title'] = 'Mora� specificirati naslov ankete.';
$lang['To_few_poll_options'] = 'Mora� unijeti barem dvije opcije [za glasovanje].';
$lang['To_many_poll_options'] = 'Unio/la si previ�e opcija [za glasovanje].';
$lang['Post_has_no_poll'] = 'Ovaj post ne sadr�i anketu.';
$lang['Already_voted'] = 'Ve� si glasovao/la [u ovoj anketi].';
$lang['No_vote_option'] = 'Mora� ozna�iti opciju za koju glasuje�.';

$lang['Add_poll'] = 'Anketa';
$lang['Add_poll_explain'] = 'Ukoliko ne �eli� u post dodati anketu, ostavi ova polja praznima.';
$lang['Poll_question'] = 'Pitanje';
$lang['Poll_option'] = 'Odgovor';
$lang['Add_option'] = 'Dodaj odgovor';
$lang['Update'] = 'A�uriraj';
$lang['Delete'] = 'Izbri�i';
$lang['Poll_for'] = 'Anketa �e biti aktivna';
$lang['Days'] = 'dan/a'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[Unesi 0 ili ostavi prazno za anketu koja �e trajati stalno.]';
$lang['Delete_poll'] = 'Izbri�i anketu';

$lang['Disable_HTML_post'] = 'Onemogu�i HTML u ovom postu';
$lang['Disable_BBCode_post'] = 'Onemogu�i BBCode u ovom postu';
$lang['Disable_Smilies_post'] = 'Onemogu�i Smajli�e u ovom postu';

$lang['HTML_is_ON'] = 'HTML je <u>uklju�en</u>';
$lang['HTML_is_OFF'] = 'HTML je <u>isklju�en</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s je <u>uklju�en</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s je <u>isklju�en</u>';
$lang['Smilies_are_ON'] = 'Smajli�i su <u>uklju�eni</u>';
$lang['Smilies_are_OFF'] = 'Smajli�i su <u>isklju�eni</u>';

$lang['Attach_signature'] = 'Dodaj potpis';
$lang['Notify'] = 'Obavijesti me kad odgovor bude postan';

$lang['Stored'] = 'Post je uspje�no postan.';
$lang['Deleted'] = 'Post je uspje�no izbrisan.';
$lang['Poll_delete'] = 'Anketa je uspje�no izbrisana.';
$lang['Vote_cast'] = 'Glas je zabilje�en.';

$lang['Topic_reply_notification'] = 'Obavijest o odgovoru na temu/post';

$lang['bbcode_b_help'] = 'Podebljanje: [b]tekst[/b]  (alt+b)...';
$lang['bbcode_i_help'] = 'Nako�enje: [i]tekst[/i]  (alt+i)...';
$lang['bbcode_u_help'] = 'Podcrtanje: [u]tekst[/u]  (alt+u)...';
$lang['bbcode_q_help'] = 'Citiranje: [quote]tekst[/quote]  (alt+q)...';
$lang['bbcode_c_help'] = 'Prikaz koda: [code]kod[/code]  (alt+c)...';
$lang['bbcode_l_help'] = 'Nepobrojana ista: [list]tekst[/list] (alt+l)...';
$lang['bbcode_o_help'] = 'Pobrojana lista: [list=]tekst[/list]  (alt+o)...';
$lang['bbcode_p_help'] = 'Ubacivanje slike: [img]http://url_slike[/img]  (alt+p)...';
$lang['bbcode_w_help'] = 'Ubacivanje URL-a: [url]http://url[/url] ili [url=http://url]tekst[/url]  (alt+w)...';
$lang['bbcode_a_help'] = 'Zatvori sve otvorene BBCode tagove.';
$lang['bbcode_s_help'] = 'Boja fonta: [color=red]tekst[/color] [Mo�e� koristiti i: color=#FF0000.]...';
$lang['bbcode_f_help'] = 'Veli�ina fonta: [size=x-small]mali tekst[/size]...';

$lang['Emoticons'] = 'Smajli�i';
$lang['More_emoticons'] = 'Ostali Smajli�i';

$lang['Font_color'] = 'Boja fonta';
$lang['color_default'] = 'zadana';
$lang['color_dark_red'] = 'tamnocrvena';
$lang['color_red'] = 'crvena';
$lang['color_orange'] = 'naran�asta';
$lang['color_brown'] = 'sme�a';
$lang['color_yellow'] = '�uta';
$lang['color_green'] = 'zelena';
$lang['color_olive'] = 'maslinasta';
$lang['color_cyan'] = 'svjetloplava';
$lang['color_blue'] = 'plava';
$lang['color_dark_blue'] = 'tamnoplava';
$lang['color_indigo'] = 'indigo';
$lang['color_violet'] = 'ljubi�asta';
$lang['color_white'] = 'bijela';
$lang['color_black'] = 'crna';

$lang['Font_size'] = 'Veli�ina fonta';
$lang['font_tiny'] = 'si�u�na';
$lang['font_small'] = 'malena';
$lang['font_normal'] = 'normalna';
$lang['font_large'] = 'velika';
$lang['font_huge'] = 'ogromna';

$lang['Close_Tags'] = 'Zatvori tagove';
$lang['Styles_tip'] = ' ';

//
// Private Messaging
//

$lang['Private_Messaging'] = 'Privatne poruke';

$lang['Login_check_pm'] = 'Privatne poruke';
$lang['New_pms'] = 'Ima� %d novih privatnih poruka'; // You have 2 new messages
$lang['New_pm'] = 'Ima� %d novu privatnu poruku'; // You have 1 new message
$lang['No_new_pm'] = 'Nema� novih privatnih poruka';
$lang['Unread_pms'] = 'Ima� %d nepro�itanih privatnih poruka';
$lang['Unread_pm'] = 'Ima� %d nepro�itanu privatnu poruku';
$lang['No_unread_pm'] = 'Nema� nepro�itanih privatnih poruka';
$lang['You_new_pm'] = 'Nova privatna poruka te �eka u Sandu�i�u.';
$lang['You_new_pms'] = 'Nove privatne poruke te �ekaju u Sandu�i�u.';
$lang['You_no_new_pm'] = 'Nema� novih privatnih poruka';

$lang['Unread_message'] = 'Nepro�itana privatna poruka';
$lang['Read_message'] = 'Pro�itaj privatnu poruku';
$lang['Read_pm'] = 'Pro�itaj privatnu poruku';
$lang['Post_new_pm'] = 'Po�alji privatnu poruku';
$lang['Post_reply_pm'] = 'Odgovori na privatnu poruku';
$lang['Post_quote_pm'] = 'Citiraj privatnu poruku';
$lang['Edit_pm'] = 'Uredi privatnu poruku';

$lang['Inbox'] = 'Primljeno';
$lang['Outbox'] = 'Odlazno';
$lang['Savebox'] = 'Spremljeno';
$lang['Sentbox'] = 'Poslano';
$lang['Flag'] = 'Zastavica';
$lang['Subject'] = 'Naslov';
$lang['From'] = 'Od';
$lang['To'] = 'Za';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Ozna�eno';
$lang['Sent'] = 'Poslano';
$lang['Saved'] = 'Spremljeno';
$lang['Delete_marked'] = 'Izbri�i ozna�eno';
$lang['Delete_all'] = 'Izbri�i sve';
$lang['Save_marked'] = 'Spremi ozna�eno';
$lang['Save_message'] = 'Spremi poruku';
$lang['Delete_message'] = 'Izbri�i poruku';

$lang['Display_messages'] = 'Prika�i prethodne poruke'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Sve poruke';

$lang['No_messages_folder'] = 'Nema poruka u ovoj mapi.';

$lang['PM_disabled'] = 'Slanje privatnih poruka je onemogu�eno.';
$lang['Cannot_send_privmsg'] = 'Ne mo�e� slati privatne poruke.';
$lang['No_to_user'] = 'Mora� specificirati korisni�ko ime osobe kojoj �eli� poslati poruku.';
$lang['No_such_user'] = '(To) Korisni�ko ime ne postoji.';

$lang['Disable_HTML_pm'] = 'Onemogu�i HTML u ovoj poruci';
$lang['Disable_BBCode_pm'] = 'Onemogu�i BBCode u ovoj poruci';
$lang['Disable_Smilies_pm'] = 'Onemogu�i Smajli�e u ovoj poruci';

$lang['Message_sent'] = 'Poruka je poslana.';

$lang['Click_return_inbox'] = 'Klikni %sovdje%s za vra�anje u Sandu�i�.';
$lang['Click_return_index'] = 'Klikni %sovdje%s za vra�anje na Index.';

$lang['Send_a_new_message'] = 'Po�alji novu privatnu poruku';
$lang['Send_a_reply'] = 'Odgovori na privatnu poruku';
$lang['Edit_message'] = 'Uredi privatnu poruku';

$lang['Notification_subject'] = 'Stigla ti je nova privatna poruka!';

$lang['Find_username'] = 'Prona�i korisni�ko ime';
$lang['Find'] = 'Prona�i';
$lang['No_match'] = 'Ni�ta nije na�eno.';

$lang['No_post_id'] = 'Nije specificiran ID posta.';
$lang['No_such_folder'] = 'Ne postoji takva mapa.';
$lang['No_folder'] = 'Nije specificirana mapa.';

$lang['Mark_all'] = 'Ozna�i sve';
$lang['Unmark_all'] = 'Odozna�i sve';

$lang['Confirm_delete_pm'] = 'Jesi li siguran/na da �eli� izbrisati ovu poruku?';
$lang['Confirm_delete_pms'] = 'Jesi li siguran/na da �eli� izbrisati ove poruke?';

$lang['Inbox_size'] = '%d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = '%d%%';
$lang['Savebox_size'] = '%d%%';

$lang['Click_view_privmsg'] = 'Klikni %sovdje%s za [odlazak u] Sandu�i�.';

//
// Profiles/Registration
//

$lang['Viewing_user_profile'] = 'Profil';
$lang['About_user'] = '%s';

$lang['Preferences'] = 'Postavke';
$lang['Items_required'] = '<i>Podatci ozna�eni sa * su obvezni.</i>';
$lang['Registration_info'] = 'Osnovni podatci';
$lang['Profile_info'] = 'Ostali podatci';
$lang['Profile_info_warn'] = '<i>Ovi podatci �e biti javno dostupni svima.</i>';
$lang['Avatar_panel'] = 'AvatarControlPanel';
$lang['Avatar_gallery'] = 'AvatarGalerija';

$lang['Website'] = 'Web stranice';
$lang['Location'] = 'Lokacija';
$lang['Contact'] = 'Kontaktiraj';
$lang['Email_address'] = 'E-mail adresa';
$lang['Send_private_message'] = 'Po�alji privatnu poruku';
$lang['Hidden_email'] = '[Skriveno]';
$lang['Interests'] = 'Interesi';
$lang['Occupation'] = 'Zvanje/zanimanje';
$lang['Poster_rank'] = 'Status';

$lang['Total_posts'] = 'Ukupno postova';
$lang['User_post_pct_stats'] = '%.2f%% od ukupno'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f postova na dan'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Prona�i sve postove korisnika/ce: %s'; // Find all posts by username

$lang['No_user_id_specified'] = '(To) Korisni�ko ime ne postoji.';
$lang['Wrong_Profile'] = 'Mo�e� mijenjati samo svoj profil.';

$lang['Only_one_avatar'] = 'Samo jedna vrsta Avatara mo�e biti izabrana.';
$lang['File_no_data'] = 'Datoteka na URL-u koji si upisao/la ne sadr�i podatke.';
$lang['No_connection_URL'] = 'Nije mogu�e uspostaviti vezu s URL-om koji si upisao/la.';
$lang['Incomplete_URL'] = 'URL kojeg si upisao/la nije kompletan.';
$lang['Wrong_remote_avatar_format'] = 'URL Avatara nije valjan.';
$lang['No_send_account_inactive'] = 'Zaporka ti ne mo�e biti poslana jer ti je korisni�ki ra�un neaktivan.<br /> Kontaktiraj administratora/icu foruma za dodatne informacije.';

$lang['Always_smile'] = 'Uvijek dozvoli Smajli�e';
$lang['Always_html'] = 'Uvijek dozvoli HTML';
$lang['Always_bbcode'] = 'Uvijek dozvoli BBCode';
$lang['Always_add_sig'] = 'Uvijek dodaj moj potpis';
$lang['Always_notify'] = 'Uvijek me obavijesti o odgovorima';
$lang['Always_notify_explain'] = '<i>Kada netko odgovori na temu u kojoj (i) ti sudjeluje�, sti�i �e ti e-mail.<br />Ovu opciju mo�e� promijeniti svaki put kad posta�.</i>';

$lang['Board_style'] = 'Stil foruma';
$lang['Board_lang'] = 'Jezik foruma';
$lang['No_themes'] = 'Nema tema u bazi podataka';
$lang['Timezone'] = 'Vremenska zona';
$lang['Date_format'] = 'Format datuma';
$lang['Date_format_explain'] = '<i>Sintaksa identi�na PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> funkciji</i>.';
$lang['Signature'] = 'Potpis';
$lang['Signature_explain'] = '<i>Maksimalno %d znakova.</i>';
$lang['Public_view_email'] = 'Uvijek prika�i moju e-mail adresu';

$lang['Current_password'] = 'Trenutna zaporka';
$lang['New_password'] = 'Nova zaporka';
$lang['Confirm_password'] = 'Potvrdi zaporku';
$lang['Confirm_password_explain'] = '<i>Ukoliko �eli� promijeniti zaporku/e-mail adresu mora� potvrditi trenutnu zaporku.</i>';
$lang['password_if_changed'] = '<i>Upi�i zaporku samo ako ju �eli� promijeniti.</i>';
$lang['password_confirm_if_changed'] = '<i>Potvrdi zaporku samo ako si ju [iznad] promijenio/la.</i>';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Prikazuje malu sliku s tvojim detaljima u postu.<br />Slika mo�e biti �irine do %d piksela, visine do %d piksela, veli�ine do %d KB.';
$lang['Upload_Avatar_file'] = 'Uploadaj Avatar s ra�unala';
$lang['Upload_Avatar_URL'] = 'Uploadaj Avatar s URL-a';
$lang['Upload_Avatar_URL_explain'] = '<i>Upi�i URL na kojem se nalazi Avatar.</i>';
$lang['Pick_local_Avatar'] = 'Izaberi Avatar iz galerije';
$lang['Link_remote_Avatar'] = 'Link na URL Avatara';
$lang['Link_remote_Avatar_explain'] = '<i>Upi�i URL na kojem se nalazi Avatar.</i>';
$lang['Avatar_URL'] = 'URL slike Avatara';
$lang['Select_from_gallery'] = 'Izaberi Avatar iz galerije';
$lang['View_avatar_gallery'] = 'Galerija';

$lang['Select_avatar'] = 'Izaberi Avatar';
$lang['Return_profile'] = 'Poni�ti Avatar';
$lang['Select_category'] = 'Izaberi kategoriju';

$lang['Delete_Image'] = 'Izbri�i sliku';
$lang['Current_Image'] = 'Trenutna slika';

$lang['Notify_on_privmsg'] = 'Obavijesti me kada dobijem privatnu poruku';
$lang['Popup_on_privmsg'] = 'Obavijest o novoj privatnoj poruci prika�i u zasebnom prozoru';
$lang['Popup_on_privmsg_explain'] = '<i>Neki predlo�ci otvaraju zaseban prozor s obavije��u o novoj privatnoj poruci.</i>';
$lang['Hide_user'] = 'Sakrij moj online status';

$lang['Profile_updated'] = 'Tvoj profil je a�uriran.';
$lang['Profile_updated_inactive'] = 'Tvoj profil je a�uriran iako ti je korisni�ki ra�un neaktivan.<br />Provjeri e-mail da vidi� kako reaktivirati korisni�ki ra�un odnosno, ako je potrebna administratorska aktivacija, pri�ekaj da ga administrator/ica reaktivira.';

$lang['Password_mismatch'] = 'Zaporke koje si upisao/la nisu identi�ne.';
$lang['Current_password_mismatch'] = 'Trenutna zaporka koju si upisao/la ne odgovara onoj u bazi podataka.';
$lang['Password_long'] = 'Zaporka mo�e imati do 32 znaka.';
$lang['Username_taken'] = '(Ovo) Korisni�ko ime je ve� (za)uzeto [registrirano].';
$lang['Username_invalid'] = '(Ovo) Korisni�ko ime sadr�i nedozvoljeni/e znak/ove poput \'.';
$lang['Username_disallowed'] = '(Ovo) Korisni�ko ime nije dozvoljeno.';
$lang['Email_taken'] = '(Ovu) e-mail adresu koristi [prije] registriran/a korisnik/ca.';
$lang['Email_banned'] = '(Ova) e-mail adresa je isklju�ena [onemogu�ena].';
$lang['Email_invalid'] = '(Ova) e-mail adresa je nepravilna.';
$lang['Signature_too_long'] = 'Tvoj potpis je preduga�ak.';
$lang['Fields_empty'] = 'Mora� popuniti sva obvezna polja.';
$lang['Avatar_filetype'] = 'Ekstenzija Avatara mora biti .jpg/.gif/.png.';
$lang['Avatar_filesize'] = 'Avatar mo�e biti veli�ine do %d KB.'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Avatar mo�e biti �irine do %d piksela i visine do %d piksela.';

$lang['Welcome_subject'] = 'Dobrodo�ao/la na %s';
$lang['New_account_subject'] = 'Novi korisni�ki ra�un';
$lang['Account_activated_subject'] = 'Korisni�ki ra�un aktiviran';

$lang['Account_added'] = 'Hvala ti �to si se registrirao/la.<br />Korisni�ki ra�un je kreiran.<br />Mo�e� se loginirati koriste�i svoje korisni�ko ime i zaporku.';
$lang['Account_inactive'] = 'Korisni�ki ra�un je kreiran, no, ovaj forum zahtijeva aktivaciju korisni�kog ra�una.<br />Aktivacijski klju� ti je poslan na e-mail adresu koju si upisao/la prilikom registracije.';
$lang['Account_inactive_admin'] = 'Korisni�ki ra�un je kreiran, no, ovaj forum zahtijeva aktivaciju korisni�kog ra�una od strane administratora/ice.<br />Poslan mu/joj je e-mail, a ti �e� biti obavije�ten/a e-mailom kada ti korisni�ki ra�un bude aktiviran.';
$lang['Account_active'] = 'Korisni�ki ra�un je aktiviran.<br />Hvala ti �to si se registrirao/la.';
$lang['Account_active_admin'] = 'Korisni�ki ra�un je aktiviran.';
$lang['Reactivate'] = 'Reaktiviraj korisni�ki ra�un!';
$lang['Already_activated'] = 'Ve� si aktivirao/la korisni�ki ra�un.';
$lang['COPPA'] = 'Korisni�ki ra�un je kreiran, ali mora biti odobren.<br />Provjeri e-mail za detalje.';

$lang['Registration'] = 'Registracija';

$lang['Reg_agreement'] = 'Po�tovanje, da bi se mogao/la registrirati, mora� se slagati s uvjetima pod kojima radi/funkcionira ovaj forum, a koji su navedeni u tekstu ispod.<br /><br />Svi postovi [poruke] na ovom forumu izra�avaju mi�ljenja/stavove/poglede autora/ica tih postova; sukladno �emu administratori/ce, moderatori/ce i ostale osobe koje sudjeluju u odr�avanju ovog foruma [u daljnjem tekstu: Admini/ce] ne mogu i ne�e odgovarati za sadr�aj tih postova [naravno, osim vlastitih].<br /><br />Admini/ce �e u najkra�em mogu�em roku izbrisati postove uvredljivog/nepo�udnog/nedopu�tenog sadr�aja, no, treba imati na umu da je gotovo nemogu�e pogledati svaki post �to �e re�i da postoji mogu�nost da neki od postova takvog sadr�aja ne bude izbrisan [stoga se ne ustru�avaj obavijestiti Admine/ice o postojanju istog/ih].<br /><br />Postanje uvredljivih, bestidnih, vulgarnih, klevetni�kih, punih mr�nje, prijete�ih, seksualno orijentiranih sadr�aja kao i bilo kojih drugih sadr�aja koji kr�e zakon(e) nije dozvoljeno. �injenje nedozvoljenog uzrokuje trenutno i trajno isklju�ivanje osobe [�initelja/ice] s ovog foruma kao i obavijest provideru osobe [�initelja/ice] o u�injenom. Admini/ce imaju pravo, u bilo koje doba, izbrisati/urediti/premjestiti/zatvoriti teme/postove s nedozvoljenim sadr�ajem.<br /><br />Svi podatci, upisani prilikom Registracije, upisuju se u bazu podataka. Niti jedan podatak ne smije i ne�e biti dan na uvid ikojoj osobi [osim tebi, Admina/ica i onih-ako/�to/kako podlije�e zakonu]. Admini/ce ne mogu i ne�e biti odgovorni/e ukoliko uslijed hakerskog napada do�e do uvida u/otkrivanja podataka.<br /><br />Forum koristi tzv. cookies [kola�i�e] za spremanje podataka na ra�unalo kojim pregledava� sadr�aj foruma. Kola�i�i ne sadr�e nikakve osobne podatke i slu�e samo i isklju�ivo za bolji rad foruma. Tvoja e-mail adresa slu�i samo za Registraciju, te obavijesti vezane uz tvoj korisni�ki ra�un.<br /><br />Klikom na "Sla�em se..." potvr�uje� da se sla�e� sa svim gore navedenim kao i da �e� se istog pridr�avati.';

$lang['Agree_under_13'] = 'Sla�em se i imam manje od 13 godina';
$lang['Agree_over_13'] = '<b>Sla�em se</b>';
$lang['Agree_not'] = '<i>Ne sla�em se</i>';

$lang['Wrong_activation'] = 'Aktivacijski klju� koji si unio/la ne odgovara niti jednom u na�oj bazi podataka.';
$lang['Send_password'] = 'Po�alji mi novu zaporku';
$lang['Password_updated'] = 'Nova zaporka je kreirana.<br />Provjeri e-mail za detalje o aktivaciji nove zaporke.';
$lang['No_email_match'] = 'E-mail adresa koju si naveo/la ne odgovara onoj koja je za (to) korisni�ko ime upisana u na�oj bazi podataka.';
$lang['New_password_activation'] = 'Aktivacija nove zaporke';
$lang['Password_activated'] = 'Korisni�ki ra�un je reaktiviran.<br />Za loginiranje koristi zaporku navedenu u e-mailu koji si primio/la.';

$lang['Send_email_msg'] = 'Po�alji e-mail poruku';
$lang['No_user_specified'] = 'Nisi specificirao/la korisnika/cu.';
$lang['User_prevent_email'] = 'Korisnik/ca ne �eli primiti e-mail poruku.<br />Poku�aj mu/joj poslati privatnu poruku.';
$lang['User_not_exist'] = '(To) Korisni�ko ime ne postoji.';
$lang['CC_email'] = 'Po�alji kopiju ovog e-maila sebi';
$lang['Email_message_desc'] = 'Ova poruka �e biti poslana kao obi�an tekst, stoga nemoj koristiti HTML/BBCode.<br />Kao povratna adresa za ovu poruku biti �e navedena tvoja e-mail adresa.';
$lang['Flood_email_limit'] = 'Trenutno ne mo�e� poslati jo� koji e-mail.<br />Poku�aj ponovo kasnije.';
$lang['Recipient'] = 'Primatelj/ica';
$lang['Email_sent'] = 'E-mail je poslan.';
$lang['Send_email'] = 'Po�alji e-mail';
$lang['Empty_subject_email'] = 'Mora� upisati naslov e-maila.';
$lang['Empty_message_email'] = 'Mora� upisati sadr�aj e-maila.';

//
// Visual confirmation system strings
//

$lang['Confirm_code_wrong'] = 'Potvrdni kod kojeg si nuio/la je neto�an.';
$lang['Too_many_registers'] = 'Prekora�io/la si broj poku�aja registriranja.<br />Poku�aj ponovo kasnije.';
$lang['Confirm_code_impaired'] = 'Ako nikako ne mo�e� pro�itati ovaj kod kontaktiraj %sadministratora/icu%s.';
$lang['Confirm_code'] = 'Potvrdni kod';
$lang['Confirm_code_explain'] = 'Unesi kod to�no onako kako ga vidi�.<br /><i>Pazi na velika/mala slova; nula je ozna�ena dijagonalnom crtom.</i>';


//
// Memberslist
//

$lang['Select_sort_method'] = 'Sortiranje';
$lang['Sort'] = 'Sortiraj';
$lang['Sort_Top_Ten'] = 'Naj10';
$lang['Sort_Joined'] = 'Datum registracije';
$lang['Sort_Username'] = 'Korisni�ko ime';
$lang['Sort_Location'] = 'Lokacija';
$lang['Sort_Posts'] = 'Ukupno postova';
$lang['Sort_Email'] = 'E-mail';
$lang['Sort_Website'] = 'Web stranice';
$lang['Sort_Ascending'] = 'A-�';
$lang['Sort_Descending'] = '�-A';
$lang['Order'] = 'Niz:';

//
// Group control panel
//

$lang['Group_Control_Panel'] = 'ControlPanel grupe';
$lang['Group_member_details'] = 'Detalji o �lanstvu grupe';
$lang['Group_member_join'] = 'Pridru�i se grupi';

$lang['Group_Information'] = 'Info o grupi';
$lang['Group_name'] = 'Ime grupe';
$lang['Group_description'] = 'Opis grupe';
$lang['Group_membership'] = '�lanstvo u grupi';
$lang['Group_Members'] = '�lanstvo grupe';
$lang['Group_Moderator'] = 'Moderator/ica grupe';
$lang['Pending_members'] = 'Lista �ekanja za �lanstvo u grupi';

$lang['Group_type'] = 'Tip grupe';
$lang['Group_open'] = 'Otvorena grupa';
$lang['Group_closed'] = 'Zatvorena grupa';
$lang['Group_hidden'] = 'Skrivena grupa';

$lang['Current_memberships'] = '�lan/ica';
$lang['Non_member_groups'] = 'Ne�lan/ica';
$lang['Memberships_pending'] = 'Na Listi �ekanja';

$lang['No_groups_exist'] = 'Ne postoji niti jedna grupa.';
$lang['Group_not_exist'] = '(Ta) Grupa ne postoji.';

$lang['Join_group'] = 'Pridru�i se grupi';
$lang['No_group_members'] = 'Ova grupa nema �lanova/ica.';
$lang['Group_hidden_members'] = 'Ova grupa je skrivena; ne mo�e� vidjeti �lanstvo.';
$lang['No_pending_group_members'] = 'Ova grupa nema osoba na Listi �ekanja za �lanstvo u grupi.';
$lang['Group_joined'] = 'Uspje�no si se prijavio/la na ovu grupu.<br />Biti �e� obavije�ten/a kada moderator/ica odobri tvoju prijavu.';
$lang['Group_request'] = 'Korisnik/ca je zatra�io/la da se pridru�i grupi koju moderira�.';
$lang['Group_approved'] = 'Tvoj zahtjev je odobren.';
$lang['Group_added'] = 'Tvoj korisni�ki ra�un pridodan je ovoj grupi.';
$lang['Already_member_group'] = 'Ve� jesi �lan/ica ove grupe.';
$lang['User_is_member_group'] = 'Korisnik/ca ve� je �lan/ica ove grupe.';
$lang['Group_type_updated'] = 'Tip grupe je uspje�no a�uriran.';

$lang['Could_not_add_user'] = 'Korisni�ko ime koje si izabrao/la ne postoji.';
$lang['Could_not_anon_user'] = 'Anonimne osobe ne mogu biti primljene u �lanstvo.';

$lang['Confirm_unsub'] = 'Jes li siguran/na da se �eli� ispisati iz ove grupe?';
$lang['Confirm_unsub_pending'] = 'Tvoja prijava za upis u ovu grupu jo� nije odobrena; jesi li siguran/na da se �eli� ispisati?';

$lang['Unsub_success'] = 'Ispisan/a si iz ove grupe.';

$lang['Approve_selected'] = 'Odobri ozna�eno';
$lang['Deny_selected'] = 'Neodobri ozna�eno';
$lang['Not_logged_in'] = 'Mora� biti loginiran/a da bi se pridru�io/la grupi.';
$lang['Remove_selected'] = 'Izbri�i ozna�eno';
$lang['Add_member'] = 'Dodaj �lana/icu';
$lang['Not_group_moderator'] = 'Nisi moderator/ica ove grupe pa ne mo�et� izvesti tu radnju.';

$lang['Login_to_join'] = 'Loginiraj se da bi se pridru�io/la grupi odnosno moderirao/la grupu.';
$lang['This_open_group'] = 'Ovo je otvorena grupa: klikni da bi se prijavio/la za �lanstvo u grupi.';
$lang['This_closed_group'] = 'Ovo je zatvorena grupa: nema primanja novih �lanova/ica.';
$lang['This_hidden_group'] = 'Ovo je skrivena grupa: automatsko dodavanje �lanova/ica nije dopu�teno.';
$lang['Member_this_group'] = 'Ti si �lan/ica ove grupe.';
$lang['Pending_this_group'] = 'Na Listi �ekanja si za �lanstvo u ovoj grupi.';
$lang['Are_group_moderator'] = 'Ti si moderator/ica ove grupe.';
$lang['None'] = '/';

$lang['Subscribe'] = 'Upi�i se';
$lang['Unsubscribe'] = 'Ispi�i se';
$lang['View_Information'] = 'Info';

//
// Search
//

$lang['Search_query'] = 'Pretra�nik';
$lang['Search_options'] = 'Opcije pretra�ivanja';

$lang['Search_keywords'] = 'Tra�i klju�ne rije�i';
$lang['Search_keywords_explain'] = '<i>Mo�e� koristiti <u>AND</u> da definira� rije�i koje moraju biti u rezultatima, <u>OR</u> da definira� rije�i koje mogu biti u rezultatima, te <u>NOT</u> da definira� rije�i koje ne smiju biti u rezultatima.<br />Mo�e� koristiti * kao zamjenski znak.<br />Za po�etak pretrage klikni na gumb Pretra�nik.</i>';
$lang['Search_author'] = 'Tra�i autora/icu';
$lang['Search_author_explain'] = '<i>Mo�e� koristiti * kao zamjenski znak.<br />Za po�etak pretrage klikni na gumb Pretra�nik.</i>';

$lang['Search_for_any'] = 'Tra�i bilo koju rije�';
$lang['Search_for_all'] = 'Tra�i sve rije�i';
$lang['Search_title_msg'] = 'Pretra�i i naslove i tekst';
$lang['Search_msg_only'] = 'Pretra�i samo tekst';

$lang['Return_first'] = 'Prika�i prvih'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'znakova posta';

$lang['Search_previous'] = 'Pretra�i'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sortiranje';
$lang['Sort_Time'] = 'Datum postanja';
$lang['Sort_Post_Subject'] = 'Naslov posta';
$lang['Sort_Topic_Title'] = 'Naslov teme';
$lang['Sort_Author'] = 'Autor/ica';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Prika�i rezultate kao';
$lang['All_available'] = 'Sve';
$lang['No_searchable_forums'] = '(Ovaj/i) Forum/i nije/su pretra�ljiv/i.';
$lang['No_search_match'] = 'Ni�ta nije prona�eno.';
$lang['Found_search_match'] = 'Prona�eno: %d.'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Prona�eno: %d.'; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = 'Ne mo�e� pokrenuti novo pretra�ivanje tako brzo nakon zadnjeg koje si pokrenuo/la.<br />Poku�aj ponovo kasnije.';

$lang['Close_window'] = 'Zatvori prozor';

//
// Auth related entries
//

// Note the %s will be replaced with one of the following 'user' arrays

$lang['Sorry_auth_announce'] = 'Samo %s mo�e/gu postati [otvoriti] Obavijesti.';
$lang['Sorry_auth_sticky'] = 'Samo %s mo�e/gu postati [otvoriti] Va�ne teme.';
$lang['Sorry_auth_read'] = 'Samo %s mo�e/gu �itati teme/postove.';
$lang['Sorry_auth_post'] = 'Samo %s mo�e/gu postati.';
$lang['Sorry_auth_reply'] = 'Samo %s mo�e/gu odgovarati na teme/postove.';
$lang['Sorry_auth_edit'] = 'Samo %s mo�e/gu ure�ivati postove.';
$lang['Sorry_auth_delete'] = 'Samo %s mo�e/gu izbrisati postove.';
$lang['Sorry_auth_vote'] = 'Samo %s mo�e/gu glasovati u anketama.';

// These replace the %s in the above strings

$lang['Auth_Anonymous_Users'] = '<b>anonimne osobe</b>';
$lang['Auth_Registered_Users'] = '<b>registrirani/e korisnici/e</b>';
$lang['Auth_Users_granted_access'] = '<b>privilegirani/e korisnici/e</b>';
$lang['Auth_Moderators'] = '<b>moderatori/ce</b>';
$lang['Auth_Administrators'] = '<b>administratori/ce</b>';

$lang['Not_Moderator'] = 'Nisi moderator/ica ovog foruma.';
$lang['Not_Authorised'] = 'Nisi ovla�ten/a.';

$lang['You_been_banned'] = 'Isklju�en/a si s ovog foruma.<br />Kontaktiraj administratora/icu za dodatne informacije.';

//
// Viewonline
//

$lang['Reg_users_zero_online'] = 'Ukupno je: 0 registriranih korisnika/ca i '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Ukupno je: %d registriranih korisnika/ca i '; // There are 5 Registered and
$lang['Reg_user_online'] = 'Ukupno je: %d registrirani korisnik/ca i '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '0 skrivenih korisnika/ca online.'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d skrivenih korisnika/ca online.'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d skriveni korisnik/ca online.'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Ukupno je: %d gostiju online.'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Ukupno je: 0 gostiju online.'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Ukupno je: %d gost online.'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Trenutno nema �lanova/ica na ovom forumu.';

$lang['Online_explain'] = 'Podatci su bazirani na aktivnosti korisnika/ca u pro�lih pet minuta.';

$lang['Forum_Location'] = 'Lokacija';
$lang['Last_updated'] = 'A�urirano';

$lang['Forum_index'] = 'Po�etna';
$lang['Logging_on'] = 'Loginiranje';
$lang['Posting_message'] = 'Postanje';
$lang['Searching_forums'] = 'Pretra�ivanje';
$lang['Viewing_profile'] = 'Profil';
$lang['Viewing_online'] = 'Online';
$lang['Viewing_member_list'] = '�lanstvo';
$lang['Viewing_priv_msgs'] = 'Privatne poruke';
$lang['Viewing_FAQ'] = 'FAQ';

//
// Moderator Control Panel
//

$lang['Mod_CP'] = 'ModeratorControlPanel';
$lang['Mod_CP_explain'] = '<i>Kori�tenjem donje forme mo�e� izvoditi moderatorske operacije na ovom forumu.<br />Mo�e� zaklju�avati, otklju�avati, premje�tati, izbrisati teme...</i>';

$lang['Select'] = 'Izaberi';
$lang['Delete'] = 'Izbri�i';
$lang['Move'] = 'Premjesti';
$lang['Lock'] = 'Zaklju�aj';
$lang['Unlock'] = 'Otklju�aj';

$lang['Topics_Removed'] = 'Izabrana/e tema/e je/su uspje�no izbrisana/e iz baze podataka.';
$lang['Topics_Locked'] = 'Izabrana/e tema/e je/su zaklju�ana/e.';
$lang['Topics_Moved'] = 'Izabrana/e tema/e je/su premje�tena/e.';
$lang['Topics_Unlocked'] = 'Izabrana/e tema/e je/su otklju�ana/e.';
$lang['No_Topics_Moved'] = 'Niti jedna tema nije premje�tena.';

$lang['Confirm_delete_topic'] = 'Jesi li siguran/na da �eli� izbrisati ozna�enu/e temu/e?';
$lang['Confirm_lock_topic'] = 'Jesi li siguran/na da �eli� zaklju�ati ozna�enu/e temu/e?';
$lang['Confirm_unlock_topic'] = 'Jesi li siguran/na da �eli� otklju�ati ozna�enu/e temu/e?';
$lang['Confirm_move_topic'] = 'Jesi li siguran/na da �eli� premjestiti ozna�enu/e temu/e?';

$lang['Move_to_forum'] = 'Premjesti u forum';
$lang['Leave_shadow_topic'] = 'Nek\' tema/e ostane/u i u starom forumu.';

$lang['Split_Topic'] = 'SplitTopicControlPanel';
$lang['Split_Topic_explain'] = '<i>Kori�tenjem donje forme mo�e� podijeliti temu na dvije; ozna�avanjem odre�enih postova ili dijeljenjem od ozna�enog posta...</i>';
$lang['Split_title'] = 'Novi naslov teme';
$lang['Split_forum'] = 'Forum za novu temu';
$lang['Split_posts'] = 'Podijeli ozna�ene postove';
$lang['Split_after'] = 'Podijeli od ozna�enog posta';
$lang['Topic_split'] = 'Tema je uspje�no podijeljena.';

$lang['Too_many_error'] = 'Odabrao/la si previ�e postova.<br />Mo�e� izabrati samo jednog.';
$lang['None_selected'] = 'Nisi odabrao/la niti jednu temu/post za izvo�enje ove operacije.<br />Vrati se nazad i odaberi barem jednu/og.';
$lang['New_forum'] = 'Novi forum';

$lang['This_posts_IP'] = 'IP adresa ovog posta';
$lang['Other_IP_this_user'] = 'Ostale IP adrese s kojih je ovaj/ova �lan/ica postao/la';
$lang['Users_this_IP'] = 'Korisnici/e koji/e postaju s ove IP adrese';
$lang['IP_info'] = 'IP info';
$lang['Lookup_IP'] = '(Po)Tra�i IP adresu';

//
// Timezones ... for display on each page
//

$lang['All_times'] = 'Vremenska zona: %s.'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12:00';
$lang['-11'] = 'GMT - 11:00';
$lang['-10'] = 'GMT - 10:00';
$lang['-9'] = 'GMT - 09:00';
$lang['-8'] = 'GMT - 08:00';
$lang['-7'] = 'GMT - 07:00';
$lang['-6'] = 'GMT - 06:00';
$lang['-5'] = 'GMT - 05:00';
$lang['-4'] = 'GMT - 04:00';
$lang['-3.5'] = 'GMT - 03:30';
$lang['-3'] = 'GMT - 03:00';
$lang['-2'] = 'GMT - 02:00';
$lang['-1'] = 'GMT - 01:00';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 01:00';
$lang['2'] = 'GMT + 02:00';
$lang['3'] = 'GMT + 03:00';
$lang['3.5'] = 'GMT + 03:30';
$lang['4'] = 'GMT + 04:00';
$lang['4.5'] = 'GMT + 04:30';
$lang['5'] = 'GMT + 05:00';
$lang['5.5'] = 'GMT + 05:30';
$lang['6'] = 'GMT + 06:00';
$lang['6.5'] = 'GMT + 06:30';
$lang['7'] = 'GMT + 07:00';
$lang['8'] = 'GMT + 08:00';
$lang['9'] = 'GMT + 09:00';
$lang['9.5'] = 'GMT + 09:30';
$lang['10'] = 'GMT + 10:00';
$lang['11'] = 'GMT + 11:00';
$lang['12'] = 'GMT + 12:00';
$lang['13'] = 'GMT + 13:00';

// These are displayed in the timezone select box

$lang['tz']['-12'] = '(GMT-12:00) I-D-L-W...';
$lang['tz']['-11'] = '(GMT-11:00) Midway Island, Samoa...';
$lang['tz']['-10'] = '(GMT-10:00) Hawaii...';
$lang['tz']['-9'] = '(GMT-09:00) Aljaska...';
$lang['tz']['-8'] = '(GMT-08:00) PT-US&C, Tijuana...';
$lang['tz']['-7'] = '(GMT-07:00) MT-US&C, Arizona, Chihuahua, Mazatlan...';
$lang['tz']['-6'] = '(GMT-06:00) CT-US&C, S. Amerika, Guadalajara, Mexico City...';
$lang['tz']['-5'] = '(GMT-05:00) ET-US&C, Indiana (East), Bogota, Lima, Quito...';
$lang['tz']['-4'] = '(GMT-04:00) AT-C, Caracas, Santiago...';
$lang['tz']['-3.5'] = '(GMT-03:30) Newfoundland...';
$lang['tz']['-3'] = '(GMT-03:00) Brasilia, Buenos Aires, Georgetown, Greenland...';
$lang['tz']['-2'] = '(GMT-02:00) Mid-Atlantic...';
$lang['tz']['-1'] = '(GMT-01:00) Azores, Cape Verde I....';
$lang['tz']['0'] = '(GMT) Greenwich, Casablanca, Monrovia, Dublin, London, Lisbon...';
$lang['tz']['1'] = '(GMT+01:00) Zagreb, Ljubljana, Sarajevo, Madrid, Rim, Pariz, Be�...';
$lang['tz']['2'] = '(GMT+02:00) Atena, Istanbul, Minsk, Bukure�t, Jeruzalem, Kairo...';
$lang['tz']['3'] = '(GMT+03:00) Nairobi, Kuwait, Riyadh, Baghdad, Moskva, Volgograd...';
$lang['tz']['3.5'] = '(GMT+03:30) Tehran...';
$lang['tz']['4'] = '(GMT+04:00) Baku, Tbilisi, Yerevan, Abu Dhabi, Muscat...';
$lang['tz']['4.5'] = '(GMT+04:30) Kabul...';
$lang['tz']['5'] = '(GMT+05:00) Islamabad, Karachi, Tashkent, Ekaterinburg...';
$lang['tz']['5.5'] = '(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi...';
$lang['tz']['6'] = '(GMT+06:00) Sri Jayawardenepura, Astana, Dhaka, Novosibirsk...';
$lang['tz']['6.5'] = '(GMT+06:30) Rangoon...';
$lang['tz']['7'] = '(GMT+07:00) Krasnoyarsk, Bangkok, Hanoi, Jakarta...';
$lang['tz']['8'] = '(GMT+08:00) Taipei, Perth, Kuala Lumpur, Singapore, Hong Kong...';
$lang['tz']['9'] = '(GMT+09:00) Yakutsk, Seoul, Osaka, Sapporo, Tokyo...';
$lang['tz']['9.5'] = '(GMT+09:30) Darwin, Adelaide...';
$lang['tz']['10'] = '(GMT+10:00) Canberra, Melbourne, Sydney, Vladivostok, Guam...';
$lang['tz']['11'] = '(GMT+11:00) Magadan, Solomon I., Nova Caledonia...';
$lang['tz']['12'] = '(GMT+12:00) Fiji, Kamchatka, Marshall I., Auckland, Wellington...';
$lang['tz']['13'] = '(GMT+13:00) Nuku`alofa...';

$lang['datetime']['Sunday'] = 'nedjelja';
$lang['datetime']['Monday'] = 'ponedjeljak';
$lang['datetime']['Tuesday'] = 'utorak';
$lang['datetime']['Wednesday'] = 'srijeda';
$lang['datetime']['Thursday'] = '�etvrtak';
$lang['datetime']['Friday'] = 'petak';
$lang['datetime']['Saturday'] = 'subota';
$lang['datetime']['Sun'] = 'ned';
$lang['datetime']['Mon'] = 'pon';
$lang['datetime']['Tue'] = 'uto';
$lang['datetime']['Wed'] = 'sri';
$lang['datetime']['Thu'] = '�et';
$lang['datetime']['Fri'] = 'pet';
$lang['datetime']['Sat'] = 'sub';
$lang['datetime']['January'] = 'sije�anj';
$lang['datetime']['February'] = 'velja�a';
$lang['datetime']['March'] = 'o�ujak';
$lang['datetime']['April'] = 'travanj';
$lang['datetime']['May'] = 'svibanj';
$lang['datetime']['June'] = 'lipanj';
$lang['datetime']['July'] = 'srpanj';
$lang['datetime']['August'] = 'kolovoz';
$lang['datetime']['September'] = 'rujan';
$lang['datetime']['October'] = 'listopad';
$lang['datetime']['November'] = 'studeni';
$lang['datetime']['December'] = 'prosinac';
$lang['datetime']['Jan'] = 'sij';
$lang['datetime']['Feb'] = 'vel';
$lang['datetime']['Mar'] = 'o�u';
$lang['datetime']['Apr'] = 'tra';
$lang['datetime']['May'] = 'svi';
$lang['datetime']['Jun'] = 'lip';
$lang['datetime']['Jul'] = 'srp';
$lang['datetime']['Aug'] = 'kol';
$lang['datetime']['Sep'] = 'ruj';
$lang['datetime']['Oct'] = 'lis';
$lang['datetime']['Nov'] = 'stu';
$lang['datetime']['Dec'] = 'pro';

//
// Errors (not related to a
// specific failure on a page)
//

$lang['Information'] = 'Info';
$lang['Critical_Information'] = 'Kriti�ne informacije';
$lang['General_Error'] = 'Generalna gre�ka';
$lang['Critical_Error'] = 'Kriti�na gre�ka';
$lang['An_error_occured'] = 'Do�lo je do gre�ke!';
$lang['A_critical_error'] = 'Do�lo je do kriti�ne gre�ke!';
$lang['Admin_reauthenticate'] = 'Za administriranje foruma mora� se re-loginirati.';

$lang['Login_attempts_exceeded'] = 'Iskoristio/la si maksimalan broj [%s] poku�aja loginiranja.<br />Loginirati se mo�e� [ponovo poku�ati] za %s minuta/e.';
$lang['Please_remove_install_contrib'] = 'Izbri�i install/ i contrib/ mape.';

$lang['Session_invalid'] = 'Do�lo je do gre�ke! Ponovo po�alji/izvr�i formu/radnju.';

//
// That's all, Folks!
//

?>