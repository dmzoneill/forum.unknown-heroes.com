<?php

/***************************************************************************
 *                            lang_admin.php [Magyar]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.11 2005/10/04 21:45:02 grahamje Exp $
 *
 *     translated by   :  Szilard Andai
 *     web             :  http://iranon.ezustkep.hu
 *     version         : 2.0.20
 *     completed by    : Fodor Bertalan - http://phpbb.hu
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

/* CONTRIBUTORS
        2002-12-15        Philip M. White (pwhite@mailhaven.com)
                Fixed many minor grammatical mistakes
*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = '�ltal�nos';
$lang['Users'] = 'Felhaszn�l�k';
$lang['Groups'] = 'Csoportok';
$lang['Forums'] = 'F�rumok';
$lang['Styles'] = 'Sablonok';

$lang['Configuration'] = 'Be�ll�t�s';
$lang['Permissions'] = 'Jogosults�g';
$lang['Manage'] = 'Be�ll�t�s';
$lang['Disallow'] = 'Tiltott nevek';
$lang['Prune'] = 'Karbantart�s';
$lang['Mass_Email'] = 'Csoportos email';
$lang['Ranks'] = 'Rangok';
$lang['Smilies'] = 'Emotikonok';
$lang['Ban_Management'] = 'Kitilt�sok';
$lang['Word_Censor'] = 'Cenz�ra';
$lang['Export'] = 'Export�l�s';
$lang['Create_new'] = 'K�sz�t�s';
$lang['Add_new'] = 'Hozz�ad�s';
$lang['Backup_DB'] = 'Adatb�zis kiment�se';
$lang['Restore_DB'] = 'Adatb�zis vissza�ll�t�sa';


//
// Index
//
$lang['Admin'] = 'Adminisztr�ci�';
$lang['Not_admin'] = 'Nincs jogosults�god az adminisztr�ci�hoz!';
$lang['Welcome_phpBB'] = '�dv�zl�nk a phpBB-ben!';
$lang['Admin_intro'] = 'K�sz�nj�k, hogy a phpBB-t v�lasztottad a f�rumod megval�s�t�s�hoz. Ebben az ablakban egy gyors �ttekint�st l�thatsz a F�rum n�h�ny adat�r�l. Erre az oldalra mindig visszat�rhetsz, ha a bal oldali men�pontban r�kattintasz az <i>Admin kezd�lap</i> linkre. A F�rumba val� visszat�r�shez kattints a phpBB ikonra, mely szint�n a bal oldali men� tetej�n tal�lhat� meg. A t�bbi hivatkoz�ssal a F�rum be�ll�t�sait v�ltoztathatod meg, a legapr�bb r�szletekbe men�en. Minden oldalhoz egy k�l�n kis le�r�s tartozik, mely seg�t a be�ll�t�sokban.';
$lang['Main_index'] = 'F�rum kezd�lap';
$lang['Forum_stats'] = 'F�rum statisztika';
$lang['Admin_Index'] = 'Admin kezd�lap';
$lang['Preview_forum'] = 'F�rum el�n�zet';

$lang['Click_return_admin_index'] = 'Kattints %side%s, hogy visszat�rj az Admin kezd�lapra';

$lang['Statistic'] = 'Statisztika';
$lang['Value'] = '�rt�k';
$lang['Number_posts'] = 'Hozz�sz�l�sok sz�ma';
$lang['Posts_per_day'] = 'Hozz�sz�l�sok sz�ma naponta';
$lang['Number_topics'] = 'T�m�k sz�ma';
$lang['Topics_per_day'] = 'T�m�k sz�ma naponta';
$lang['Number_users'] = 'Felhaszn�l�k sz�ma';
$lang['Users_per_day'] = 'Felhaszn�l�k sz�ma naponta';
$lang['Board_started'] = 'F�rum indul�sa';
$lang['Avatar_dir_size'] = 'Avatar k�nyvt�r m�rete';
$lang['Database_size'] = 'Adatb�zis m�rete';
$lang['Gzip_compression'] ='Gzip t�m�r�t�s';
$lang['Not_available'] = 'Nem el�rhet�';

$lang['ON'] = 'Bekapcsolva'; // This is for GZip compression
$lang['OFF'] = 'Kikapcsolva';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Adatb�zis eszk�z�k';

$lang['Restore'] = 'Vissza�ll�t�s';
$lang['Backup'] = 'Kiment�s';
$lang['Restore_explain'] = 'Ezzel a funkci�val a phpBB f�rum adatb�zis�nak �sszes t�bl�j�t vissza lehet t�lteni egy kimentett f�jlb�l. Ha a szerver t�mogatja a kicsomagol�st, akkor egy GZIP-pel t�m�r�tett sz�veges f�jlb�l is be lehet t�lteni. <b>FIGYELEM!</b> Ez fel�l�rja az �ppen haszn�lt adatb�zist! Az adatb�zis vissza�ll�t�sa eltarthat egy ideig, ez�rt ne menj el addig err�l az oldalr�l, m�g nem jelzi, hogy k�sz van.';
$lang['Backup_explain'] = 'Ezzel a funkci�val a phpBB f�rum adatb�zis�nak �sszes t�bl�j�t ki lehet menteni egy k�ls� f�jlba. Ha van m�s, egy�ni phpBB-hez tartoz� t�bla is az adatb�zisban, akkor add meg azoknak a neveit is, vessz�vel elv�lasztva - az al�bbi Egy�b t�bl�k mez�be. Ha t�mogatja a szerver, akkor haszn�lhatsz GZIP t�m�r�t�st is, hogy kisebb legyen a let�ltend� f�jl m�rete.';

$lang['Backup_options'] = 'Kiment�si be�ll�t�sok';
$lang['Start_backup'] = 'Kiment�s ind�t�sa';
$lang['Full_backup'] = 'Teljes kiment�s';
$lang['Structure_backup'] = 'Csak az adatb�zis fel�p�t�s�nek kiment�se';
$lang['Data_backup'] = 'Csak az adatok kiment�se';
$lang['Additional_tables'] = 'Egy�b t�bl�k';
$lang['Gzip_compress'] = 'Gzip t�m�r�t�s';
$lang['Select_file'] = 'F�jl kiv�laszt�sa';
$lang['Start_Restore'] = 'Vissza�ll�t�s ind�t�sa';

$lang['Restore_success'] = 'Az adatb�zist sikeresen vissza�ll�tottam!<br /><br />A F�rum visszaker�lt a kiment�s el�tti �llapotba.';
$lang['Backup_download'] = 'A let�lt�s hamarosan elindul, v�rj a megkezd�s�ig.';
$lang['Backups_not_supported'] = 'Az adatb�zis kiment�se nem lehets�ges, mivel ez nincs t�mogatva ebben az adatb�zis rendszerben.';

$lang['Restore_Error_uploading'] = 'Hiba a kimentett f�jl felt�lt�se k�zben.';
$lang['Restore_Error_filename'] = 'Hib�s f�jln�v, v�lassz egy m�sik f�jlt.';
$lang['Restore_Error_decompress'] = 'A GZIP kit�m�r�t�s nem lehets�ges, adj meg egy sima sz�veges f�jlt.';
$lang['Restore_Error_no_file'] = 'A felt�lt�s sikertelen volt.';


//
// Auth pages
//
$lang['Select_a_User'] = 'V�lassz egy felhaszn�l�t';
$lang['Select_a_Group'] = 'V�lassz egy csoportot';
$lang['Select_a_Forum'] = 'V�lassz egy f�rumot';
$lang['Auth_Control_User'] = 'Felhaszn�l�i enged�lyek be�ll�t�sa';
$lang['Auth_Control_Group'] = 'Csoportenged�lyek be�ll�t�sa';
$lang['Auth_Control_Forum'] = 'F�rumhoz tartoz� jogosults�gok be�ll�t�sa';
$lang['Look_up_User'] = 'Felhaszn�l� keres�se';
$lang['Look_up_Group'] = 'Csoport keres�se';
$lang['Look_up_Forum'] = 'F�rum keres�se';

$lang['Group_auth_explain'] = 'Itt �ll�thatsz be jogosults�gokat �s moder�tor jogokat az egyes csoportokhoz. Ne felejtsd el, hogy a csoport jogosults�g megv�ltoztat�s�val egyes felhaszn�l�k m�g hozz�f�rhetnek a csoporthoz. Ebben az esetben egy figyelmezet� �zenetet fogsz kapni.';
$lang['User_auth_explain'] = 'Itt �ll�thatsz be jogosults�gokat �s moder�tor jogokat az egyes felhaszn�l�khoz. Ne felejtsd el, hogy a felhaszn�l�i jogosults�g megv�ltoztat�s�val egyes felhaszn�l�k m�g hozz�f�rhetnek egyes f�rumokhoz, stb. Ebben az esetben egy figyelmezet� �zenetet fogsz kapni.';
$lang['Forum_auth_explain'] = 'Itt �ll�thatod be a hozz�f�r�si jogosults�gokat az egyes f�rumokhoz, az Egyszer� vagy B�v�tett lehet�s�get haszn�lva. Ne feledd, hogy a jogosults�gok megv�ltoztat�s�val a felhaszn�l�k �jabb opci�kat, �s v�ltoztat�si lehet�s�get �rhetnek el.';

$lang['Simple_mode'] = 'Egyszer� m�d';
$lang['Advanced_mode'] = 'B�v�tett m�d';
$lang['Moderator_status'] = 'Moder�tori st�tusz';

$lang['Allowed_Access'] = 'Hozz�f�r�s enged�lyezve';
$lang['Disallowed_Access'] = 'Hozz�f�r�s megtagadva';
$lang['Is_Moderator'] = 'Moder�tor';
$lang['Not_Moderator'] = 'Nem moder�tor';

$lang['Conflict_warning'] = 'Jogosults�g-�tk�z�s';
$lang['Conflict_access_userauth'] = 'Ennek a felhaszn�l�nak m�r van f�rum jogosults�ga, a csoporttags�gon kereszt�l. Ha ezt meg akarod sz�ntetni vagy meg akarod v�ltoztatni, akkor a felhaszn�l� egy�ni jogosults�gaiban v�ltoztasd meg. A felhaszn�l�nak az al�bbi jogosults�gai vannak:';
$lang['Conflict_mod_userauth'] = 'Ennek a felhaszn�l�nak m�r van moder�tori joga ehhez a f�rumhoz a csoporttags�gon kereszt�l. Ha ezt meg akarod sz�ntetni, akkor a felhaszn�l� egy�ni jogosults�gaiban v�ltoztasd meg. A felhaszn�l�nak az al�bbi jogosults�gai vannak:';

$lang['Conflict_access_groupauth'] = 'Az egy�ni jogosults�gok be�ll�t�s�ban ennek a felhaszn�l�nak m�r van jogosults�ga ehhez a f�rumhoz. Ha ezt meg akarod v�ltoztatni, akkor a felhaszn�l� egy�ni jogosults�gaiban tedd meg. A felhaszn�l�nak az al�bbi jogosults�gai vannak:';
$lang['Conflict_mod_groupauth'] = 'Az egy�ni jogosults�gok be�ll�t�s�ban ennek a felhaszn�l�nak m�r van moder�tori joga ehhez a f�rumhoz. Ha ezt meg akarod sz�ntetni, akkor a felhaszn�l� egy�ni jogosults�gaiban v�ltoztasd meg. A felhaszn�l�nak az al�bbi jogosults�gai vannak:';

$lang['Public'] = 'Nyilv�nos';
$lang['Private'] = 'Priv�t';
$lang['Registered'] = 'Regisztr�lt';
$lang['Administrators'] = 'Adminisztr�tor';
$lang['Hidden'] = 'Rejtett';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'MINDENKI';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRIV�T';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'L�t�s';
$lang['Read'] = 'Olvas�s';
$lang['Post'] = 'T�manyit�s';
$lang['Reply'] = 'Hozz�sz�l�s';
$lang['Edit'] = 'Szerkeszt�s';
$lang['Delete'] = 'T�rl�s';
$lang['Sticky'] = 'Kiemelt';
$lang['Announce'] = 'K�zlem�ny';
$lang['Vote'] = 'Szavaz�s';
$lang['Pollcreate'] = 'Szavaz�s k�sz�t�se';

$lang['Permissions'] = 'Jogosults�gok';
$lang['Simple_Permission'] = 'Egyszer� jogosults�g';

$lang['User_Level'] = 'Felhaszn�l�szint';
$lang['Auth_User'] = 'Felhaszn�l�';
$lang['Auth_Admin'] = 'Adminisztr�tor';
$lang['Group_memberships'] = 'Csoporttags�gok';
$lang['Usergroup_members'] = 'A k�vetkez� felhaszn�l�k tartoznak ebbe a csoportba:';

$lang['Forum_auth_updated'] = 'F�rum enged�lyek friss�tve.';
$lang['User_auth_updated'] = 'Felhaszn�l�i enged�lyek friss�tve.';
$lang['Group_auth_updated'] = 'Csoport-jogosults�gok friss�tve.';

$lang['Auth_updated'] = 'A Jogosults�gok sikeresen megv�ltoztak!';
$lang['Click_return_userauth'] = 'Kattints %side%s, hogy visszat�rj a Felhaszn�l�i jogosults�g be�ll�t�saihoz.';
$lang['Click_return_groupauth'] = 'Kattints %side%s hogy visszat�rj a Csoport jogosults�g be�ll�t�saihoz.';
$lang['Click_return_forumauth'] = 'Kattints %side%s hogy visszat�rj a F�rum jogosults�g be�ll�t�saihoz.';


//
// Banning
//
$lang['Ban_control'] = 'Kitilt�s';
$lang['Ban_explain'] = 'Ezen az oldalon lehet kitiltani egy vagy t�bb felhaszn�l�t, �gy azok nem tudj�k bet�lteni a F�rum kezd�oldal�t. Ezt vagy felhaszn�l�n�v, vagy IP-c�m (vagy IP-tartom�ny), vagy hosztn�v megad�s�val �rheted el. Az email-c�met is letilthatod, ekkor a felhaszn�l� nem tudja �j n�ven regisztr�lni mag�t. Figyelem, egy email-c�m letilt�s�val m�g nem biztos, hogy a felhaszn�l� ki lett tiltva a F�rumr�l; ehhez a felhaszn�l�n�v, az IP-c�m, �s az email-c�m egyidej� letilt�s�t haszn�ld.';
$lang['Ban_explain_warn'] = 'Figyelem! Az IP-tartom�ny megad�s�val a kezd�, �s az utols� IP k�z�tt az �sszes c�m le lesz tiltva. Lehet�s�g szerint min�l kisebb tartom�nyt adj meg, hogy ne legyen t�l nagy az adatb�zis m�rete, illetve ha t�l nagy tartom�nyt adsz meg, el�fordulhat, hogy v�tlen felhaszn�l�k sem fogj�k tudni haszn�lni a f�rumot. Ha musz�j tartom�nyt megadni, akkor lehet�leg min�l kisebbet adj meg, de jobb, ha csak az IP-c�meket hat�rozol meg.';

$lang['Select_username'] = 'Felhaszn�l�n�v kiv�laszt�sa';
$lang['Select_ip'] = 'IP-c�m kiv�laszt�sa';
$lang['Select_email'] = 'Email-c�m kiv�laszt�sa';

$lang['Ban_username'] = 'Felhaszn�l� kitilt�sa';
$lang['Ban_username_explain'] = 'A haszn�lt oper�ci�s rendszert�l �s b�ng�sz�t�l f�gg�en egyszerre t�bb felhaszn�l�t is ki lehet tiltani (kijel�l�ssel, a CTRL �s a SHIFT gomb haszn�lat�val).';

$lang['Ban_IP'] = 'IP-c�m, vagy hosztn�v letilt�sa';
$lang['IP_hostname'] = 'IP-c�mek vagy hosztnevek';
$lang['Ban_IP_explain'] = 'T�bb IP-c�m, vagy hosztn�v megad�s�hoz vessz�vel v�laszd el �ket. IP-tartom�ny megad�s�hoz az els� �s az utols� sz�m el� tegy�l egy k�t�jelet. Jokerkaraktert (*) is haszn�lhatsz.';

$lang['Ban_email'] = 'Email-c�m letilt�sa';
$lang['Ban_email_explain'] = 'T�bb email-c�m kitilt�s�hoz vessz�vel v�laszd el a c�meket. Jokerkaraktert (*) is haszn�lhatsz, pld. *@hotmail.com';

$lang['Unban_username'] = 'Felhaszn�l�(k) enged�lyez�se';
$lang['Unban_username_explain'] = 'A haszn�lt oper�ci�s rendszert�l �s b�ng�sz�t�l f�gg�en egyszerre t�bb felhaszn�l�t is lehet �jraenged�lyezni (kijel�l�ssel, a CTRL �s a SHIFT gomb haszn�lat�val).';

$lang['Unban_IP'] = 'IP-c�m(ek) vagy hosztn�v(ek) enged�lyez�se';
$lang['Unban_IP_explain'] = 'A haszn�lt oper�ci�s rendszert�l �s b�ng�sz�t�l f�gg�en egyszerre t�bb IP-c�met is lehet enged�lyezni (kijel�l�ssel, a CTRL �s a SHIFT gomb haszn�lat�val).';

$lang['Unban_email'] = 'Email-c�m(ek) enged�lyez�se';
$lang['Unban_email_explain'] = 'A haszn�lt oper�ci�s rendszert�l �s b�ng�sz�t�l f�gg�en egyszerre t�bb email-c�met is lehet enged�lyezni (kijel�l�ssel, a CTRL �s a SHIFT gomb haszn�lat�val).';

$lang['No_banned_users'] = 'Nincsen kitiltott felhaszn�l�.';
$lang['No_banned_ip'] = 'Nincsen letiltott IP-c�m';
$lang['No_banned_email'] = 'Nincsen letiltott email-c�m';

$lang['Ban_update_sucessful'] = 'A kitilt�sok list�ja sikeresen megv�ltozott!';
$lang['Click_return_banadmin'] = 'Kattints %side%s, hogy visszat�rj a Kitilt�s be�ll�t�saihoz.';


//
// Configuration
//
$lang['General_Config'] = '�ltal�nos be�ll�t�sok';
$lang['Config_explain'] = 'A F�rum alapvet� be�ll�t�sait adhatod meg itt.';

$lang['Click_return_config'] = 'Kattints %side%s, hogy visszat�rj az �ltal�nos be�ll�t�sokhoz';

$lang['General_settings'] = '�ltal�nos be�ll�t�sok';
$lang['Server_name'] = 'Domain n�v:';
$lang['Server_name_explain'] = 'A domain n�v, melyen a F�rum fut';
$lang['Script_path'] = 'F�rum el�r�si �tvonal:';
$lang['Script_path_explain'] = 'A phpBB relat�v el�r�si �tvonala, a domain n�vhez k�pest';
$lang['Server_port'] = 'Szerver port:';
$lang['Server_port_explain'] = 'A haszn�lt port, szinte mindig a 80-as.';
$lang['Site_name'] = 'Oldal neve:';
$lang['Site_desc'] = 'Oldal le�r�sa:';
$lang['Board_disable'] = 'F�rum kikapcsol�sa:';
$lang['Board_disable_explain'] = 'Ha igenre �ll�tod, a felhaszn�l�k nem �rhetik el a f�rumot. Az Adminsztr�torok ett�l f�ggetlen�l bel�phetnek az Adminisztr�ci�s panelbe.';
$lang['Acct_activation'] = 'Azonos�t� aktiv�l�sa:';
$lang['Acc_None'] = 'Nincs'; // These three entries are the type of activation
$lang['Acc_User'] = 'Felhaszn�l�i';
$lang['Acc_Admin'] = 'Adminisztr�tori';

$lang['Abilities_settings'] = 'Felhaszn�l� �s f�rum be�ll�t�sok';
$lang['Max_poll_options'] = 'V�laszt�si lehet�s�gek maxim�lis sz�ma a szavaz�sokban:';
$lang['Flood_Interval'] = 'Flood id�k�z:';
$lang['Flood_Interval_explain'] = 'Ennyi m�sodpercet kell v�rni k�t hozz�sz�l�s elk�ld�se k�z�tt.';
$lang['Board_email_form'] = 'Felhaszn�l�i levelez�s enged�lyez�se az oldalon kereszt�l:';
$lang['Board_email_form_explain'] = 'A felhaszn�l�k email �zeneteket k�ldhetnek egym�snak az oldalon kereszt�l.';
$lang['Topics_per_page'] = 'T�m�k oldalak�nt:';
$lang['Posts_per_page'] = 'Hozz�sz�l�sok oldalank�nt:';
$lang['Hot_threshold'] = 'Hozz�sz�l�sok sz�ma t�ma n�pszer�k�nt megjel�l�s�hez:';
$lang['Default_style'] = 'Kezd�sablon:';
$lang['Override_style'] = 'Felhaszn�l� sablonj�nak fel�l�r�sa:';
$lang['Override_style_explain'] = 'Ez esetben mindenki csak a kezd�sablont haszn�lhatja.';
$lang['Default_language'] = 'Alapbe�ll�t�s� nyelv:';
$lang['Date_format'] = 'D�tum form�tum:';
$lang['System_timezone'] = 'Rendszer id�z�na:';
$lang['Enable_gzip'] = 'GZIP t�m�r�t�s bekapcsol�sa:';
$lang['Enable_prune'] = 'Automatikus karbantart�s bekapcsol�sa:';
$lang['Allow_HTML'] = 'HTML enged�lyez�se:';
$lang['Allow_BBCode'] = 'BBCode enged�lyez�se:';
$lang['Allowed_tags'] = 'Enged�lyezett HTML tagek:';
$lang['Allowed_tags_explain'] = 'A tageket vessz�vel kell elv�lasztani.';
$lang['Allow_smilies'] = 'Emotikonok enged�lyez�se:';
$lang['Smilies_path'] = 'Emotikonok el�r�si �tvonala:';
$lang['Smilies_path_explain'] = 'A phpBB-n bel�li el�r�si �t, �ltal�ban: images/smiles';
$lang['Allow_sig'] = 'Al��r�s enged�lyez�se:';
$lang['Max_sig_length'] = 'Al��r�s maximum hossza:';
$lang['Max_sig_length_explain'] = 'Az al��r�sok maximum hossza karakterben';
$lang['Allow_name_change'] = 'Felhaszn�l�n�v-v�lt�s enged�lyez�se:';

$lang['Avatar_settings'] = 'Avatar be�ll�t�sok';
$lang['Allow_local'] = 'Avatar gal�ria bekapcsol�sa:';
$lang['Allow_remote'] = 'T�voli avatar enged�lyez�se:';
$lang['Allow_remote_explain'] = 'M�s weboldalr�l belinkelt avatarok enged�lyez�se';
$lang['Allow_upload'] = 'Avatar felt�lt�s enged�lyez�se:';
$lang['Max_filesize'] = 'Maximum avatar k�pm�ret:';
$lang['Max_filesize_explain'] = 'A felt�lt�tt avatar k�pek legfeljebb ilyen nagys�g�ak lehetnek.';
$lang['Max_avatar_size'] = 'Maximum avatar felbont�s:';
$lang['Max_avatar_size_explain'] = 'Sz�less�g x Magass�g pixelben';
$lang['Avatar_storage_path'] = 'Avatarok el�r�si �tvonala:';
$lang['Avatar_storage_path_explain'] = 'A phpBB-n bel�li el�r�si �t, �ltal�ban: images/avatars';
$lang['Avatar_gallery_path'] = 'Avatar gal�ria helye:';
$lang['Avatar_gallery_path_explain'] = 'A phpBB-n bel�li el�r�si �t, �ltal�ban: images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA be�ll�t�sok';
$lang['COPPA_fax'] = 'COPPA fax-sz�m:';
$lang['COPPA_mail'] = 'COPPA levelez�si c�m:';
$lang['COPPA_mail_explain'] = 'Az a lev�lc�m, ahova a sz�l�knek a COPPA regisztr�ci�s k�relmeket kell k�ldeni�k.<br />A COPPA-t az Amerikai Egyes�lt �llamokban haszn�lj�k. L�nyege, hogy csak a sz�l� enged�ly�vel regisztr�lhat a F�rumon a 13 �ven aluli gyerek (a sz�l�nek j�v� kell hagynia gyermeke regisztr�ci�j�t a megadott c�mre vagy fax-sz�mra k�ld�tt nyilatkozattal).';

$lang['Email_settings'] = 'Email be�ll�t�sok';
$lang['Admin_email'] = 'Az Adminisztr�tor email-c�me:';
$lang['Email_sig'] = 'Email al��r�s:';
$lang['Email_sig_explain'] = 'A f�rum �ltal kik�ld�tt levelek v�g�hez csatolt sz�veg';
$lang['Use_SMTP'] = 'SMTP szerver haszn�lata emailk�ld�shez:';
$lang['Use_SMTP_explain'] = 'Kapcsold be, ha egy k�ls� email-szervert akarsz haszn�lni.';
$lang['SMTP_server'] = 'SMTP szerver c�me:';
$lang['SMTP_username'] = 'SMTP felhaszn�l�n�v:';
$lang['SMTP_username_explain'] = 'Csak akkor t�ltsd ki, ha sz�ks�ges.';
$lang['SMTP_password'] = 'SMTP jelsz�:';
$lang['SMTP_password_explain'] = 'Csak akkor t�ltsd ki, ha sz�ks�ges.';

$lang['Disable_privmsg'] = 'Priv�t �zenetk�ld�s:';
$lang['Inbox_limits'] = '�zenetek maxim�lis sz�ma az �rkezett fi�kban:';
$lang['Sentbox_limits'] = '�zenetek maxim�lis sz�ma az Elk�ld�tt fi�kban:';
$lang['Savebox_limits'] = '�zenetek maxim�lis sz�ma az Ment�s fi�kban:';

$lang['Cookie_settings'] = 'Cookie be�ll�t�sok';
$lang['Cookie_settings_explain'] = 'Itt �ll�thatod be a felhaszn�l�k b�ng�sz�inek kik�ld�tt cookie-kat. A legt�bb esetben elegend�ek az alapbe�ll�t�sok, �gy csak �vatosan v�ltoztass rajtuk, mert el�fordulhat, hogy a felhaszn�l�k nem fognak tudni bel�pni';
$lang['Cookie_domain'] = 'Cookie domain:';
$lang['Cookie_name'] = 'Cookie neve:';
$lang['Cookie_path'] = 'Cookie el�r�si �t:';
$lang['Cookie_secure'] = 'Cookie titkos�t�sa:';
$lang['Cookie_secure_explain'] = 'Ha a szerver SSL titkos�t�ssal fut, akkor kapcsold be ezt az opci�t, k�l�nben hagyd kikapcsolva.';
$lang['Session_length'] = 'Session hossz [ m�sodperc ]:';

// Visual Confirmation
$lang['Visual_confirm'] = 'Regisztr�ci� vizu�lis meger�s�t�se:';
$lang['Visual_confirm_explain'] = 'A regisztr�ci�n�l a felhaszn�l�nak be kell �rnia egy automatikusan gener�lt vizu�lis k�dot, amivel meger�s�ti a regisztr�ci�t (robotok regisztr�ci�ja ellen).';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Automatikus bejelentkez�s enged�lyez�se:';
$lang['Allow_autologin_explain'] = 'A felhaszn�l�k kiv�laszthatj�k-e, hogy automatikusan bejelentkeztesse �ket a rendszer a f�rum megl�togat�skor.';
$lang['Autologin_time'] = 'Automatikus bejelentkez�s lej�rata:';
$lang['Autologin_time_explain'] = 'H�ny napig �rv�nyes az automatikus bejelentkez�shez sz�ks�ges kulcs, ha a felhaszn�l� nem l�togatja meg a f�rumot. �ll�tsd 0-ra, hogy soha ne j�rjon le.';

// Search Flood Control - added 2.0.20 
$lang['Search_Flood_Interval'] = 'Keres�s flood id�k�z:'; 
$lang['Search_Flood_Interval_explain'] = 'Ennyi m�sodpercet kell v�rni a k�t keres�s k�z�tt.';

//
// Forum Management
//
$lang['Forum_admin'] = 'F�rum adminisztr�ci�';
$lang['Forum_admin_explain'] = 'Innen tudsz �j f�rumot nyitni, t�r�lni, szerkeszteni, �trendezni, kategoriz�lni �s szinkroniz�lni.';
$lang['Edit_forum'] = 'F�rum szerkeszt�se';
$lang['Create_forum'] = '�j f�rum';
$lang['Create_category'] = '�j t�mak�r';
$lang['Remove'] = 'Elt�vol�t';
$lang['Action'] = 'Utas�t�s';
$lang['Update_order'] = 'Friss�t�si sorrend';
$lang['Config_updated'] = 'A F�rum be�ll�t�sai sikeresen friss�ltek!';
$lang['Edit'] = 'Szerkeszt';
$lang['Delete'] = 'T�r�l';
$lang['Move_up'] = 'Feljebb';
$lang['Move_down'] = 'Lejjebb';
$lang['Resync'] = 'Szinkroniz�l';
$lang['No_mode'] = 'Nem lett m�d kiv�lasztva!';
$lang['Forum_edit_delete_explain'] = 'Az al�bbi oldallal be�ll�thatod a f�rum legfontosabb tulajdons�gait. A F�rum �s a Felhaszn�l�k be�ll�t�s�hoz haszn�ld a baloldali men�t.';

$lang['Move_contents'] = '�sszes tartalom �tmozgat�sa';
$lang['Forum_delete'] = 'F�rum t�rl�se';
$lang['Forum_delete_explain'] = 'Az al�bbi oldal seg�ts�g�vel t�r�lhetsz egy f�rumot, (vagy kateg�ri�t), megadva, hogy a tartalmazott f�rumok (vagy t�m�k) hova ker�ljenek �t.';

$lang['Status_locked'] = 'Lez�rt';
$lang['Status_unlocked'] = 'Nyitott';
$lang['Forum_settings'] = '�ltal�nos f�rum be�ll�t�sok';
$lang['Forum_name'] = 'F�rum neve';
$lang['Forum_desc'] = 'Le�r�s';
$lang['Forum_status'] = 'F�rum st�tusz';
$lang['Forum_pruning'] = 'Automatikus karbantart�s';

$lang['prune_freq'] = 'T�m�k ellen�rz�se (ennyi naponta):';
$lang['prune_days'] = 'T�m�k t�rl�se, melyekbe ennyi napig nem �rkezett hozz�sz�l�s:';
$lang['Set_prune_data'] = 'Az automatikus karbantart�s be van kapcsolva, de ehhez a f�rumhoz nincsen megadva a karbantart�s gyakoris�ga. L�pj vissza, �s �ll�tsd be.';

$lang['Move_and_Delete'] = '�tmozgat�s �s t�rl�s';

$lang['Delete_all_posts'] = '�sszes hozz�sz�l�s t�rl�se';
$lang['Nowhere_to_move'] = 'Sehova sem lehet �thelyezni.';

$lang['Edit_Category'] = 'T�mak�r szerkeszt�se';
$lang['Edit_Category_explain'] = 'Ezzel a t�mak�r nev�t v�ltoztathatod meg.';

$lang['Forums_updated'] = 'A f�rum �s t�mak�r be�ll�t�sai sikeresen friss�ltek!';

$lang['Must_delete_forums'] = 'El�bb az �sszes f�rumot t�r�ln�d kell, hogy t�r�lhesd ezt a kateg�ri�t.';

$lang['Click_return_forumadmin'] = 'Kattints %side%s, hogy visszat�rj a F�rum be�ll�t�saihoz.';


//
// Smiley Management
//
$lang['smiley_title'] = 'Emotikon be�ll�t�sok';
$lang['smile_desc'] = 'Ezen az oldalon adhatsz �j emotikonokat a f�rumhoz, illetve szerkesztheted �s t�r�lheted a m�r megl�v�ket.';

$lang['smiley_config'] = 'Emotikon be�ll�t�sa';
$lang['smiley_code'] = 'Emotikon k�d:';
$lang['smiley_url'] = 'Emotikon k�pf�jl:';
$lang['smiley_emot'] = 'Jelent�s:';
$lang['smile_add'] = '�j emotikon hozz�ad�sa';
$lang['Smile'] = 'Smiley';
$lang['Emotion'] = 'Emotikon';

$lang['Select_pak'] = 'Emotikon csomagf�jl (.pak) kiv�laszt�sa';
$lang['replace_existing'] = 'Jelenlegi emotikonok fel�l�r�sa';
$lang['keep_existing'] = 'Jelenlegi emotikonok megtart�sa';
$lang['smiley_import_inst'] = 'T�ltsd fel az emotikonok k�nyvt�r�ba a k�peket, �s az export�l�sn�l elk�sz�tett *.pak f�jlt. Ut�na a megfelel� adatok megad�s�val import�lhat� az emotikon csomag.';
$lang['smiley_import'] = 'Emotikonok import�l�sa';
$lang['choose_smile_pak'] = 'Emotikon csomag kiv�laszt�sa (.pak f�jl)';
$lang['import'] = 'Emotikonok import�l�sa';
$lang['smile_conflicts'] = 'Aktu�lis emotikonok:';
$lang['del_existing_smileys'] = 'Telep�tett emotikonok t�rl�se import�l�s el�tt';
$lang['import_smile_pack'] = 'Emotikon csomag import�l�sa';
$lang['export_smile_pack'] = 'Emotikon csomag export�l�sa';
$lang['export_smiles'] = 'Az emotikon csomag export�l�s�hoz kattints %sIDE%s, hogy let�ltsd a smiles.pak f�jlt. Ha �t akarod nevezni, akkor figyelj arra, hogy a .pak kiterjeszt�s megmaradjon. Ut�na a .pak f�jlt �s az emotikon k�peket t�m�r�tsd be egy f�jlba.';

$lang['smiley_add_success'] = 'Az emotikon sikeresen beker�lt a list�ba!';
$lang['smiley_edit_success'] = 'Az emotikon be�ll�t�sai sikeresen megv�ltoztak!';
$lang['smiley_import_success'] = 'Az emotikon csomag import�l�sa sikeres volt!';
$lang['smiley_del_success'] = 'Az emotikon elt�vol�t�sa sikeres volt!';
$lang['Click_return_smileadmin'] = 'Kattints %side%s, hogy visszat�rj az emotikonok be�ll�t�saihoz';

$lang['Confirm_delete_smiley'] = 'Biztosan t�r�lni akarod ezt az emotikont?';

//
// User Management
//
$lang['User_admin'] = 'Felhaszn�l�i be�ll�t�sok';
$lang['User_admin_explain'] = 'Ezen az oldalon megadhatod, megv�ltoztathatod a felhaszn�l�k adatait, �s n�h�ny �ltal�nos tulajdons�got �ll�thatsz be. A jogosults�gok kioszt�s�hoz haszn�ld az egy�ni- �s csoportjogosults�g-kezel� rendszert.';

$lang['Look_up_user'] = 'Felhaszn�l� keres�se';

$lang['Admin_user_fail'] = 'A felhaszn�l� profilj�nak friss�t�se sikertelen volt.';
$lang['Admin_user_updated'] = 'A felhaszn�l� profilja sikeresen m�dosult!';
$lang['Click_return_useradmin'] = 'Kattints %side%s, hogy visszat�rj a Felhaszn�l� be�ll�t�sokhoz';

$lang['User_delete'] = 'Felhaszn�l� t�rl�se';
$lang['User_delete_explain'] = 'Jel�ld be, ha t�r�lni akarod a felhaszn�l�t. A t�rl�s ut�n nem lehet visszahozni!';
$lang['User_deleted'] = 'A felhaszn�l� sikeresen t�r�lve lett.';

$lang['User_status'] = 'Akt�v felhaszn�l�';
$lang['User_allowpm'] = 'K�ldhet priv�t �zenetet';
$lang['User_allowavatar'] = 'Be�ll�that avatart';

$lang['Admin_avatar_explain'] = 'Itt n�zheted meg, �s t�r�lheted a felhaszn�l� avatarj�t.';

$lang['User_special'] = 'Speci�lis be�ll�t�sok';
$lang['User_special_explain'] = 'A felhaszn�l�k nem m�dos�thatj�k ezeket a mez�ket.';


//
// Group Management
//
$lang['Group_administration'] = 'Csoportok be�ll�t�sa';
$lang['Group_admin_explain'] = 'Ezzel az oldallal kezelni tudod a Csoportokat, t�r�lheted, m�dos�thatod �ket, �s �jakat k�sz�thetsz. V�laszhatsz moder�tort a csoporthoz, megadhatod, hogy ny�lt vagy z�rt csoport legyen-e, megadhatod a csoport nev�t �s le�r�s�t.';
$lang['Error_updating_groups'] = 'A friss�t�s k�zben hiba t�rt�nt.';
$lang['Updated_group'] = 'A csoport sikeresen friss�lt!';
$lang['Added_new_group'] = 'A csoport sikeresen elk�sz�lt!';
$lang['Deleted_group'] = 'A csoport sikeresen t�r�lve lett!';
$lang['New_group'] = '�j csoport';
$lang['Edit_group'] = 'Csoport szerkeszt�se';
$lang['group_name'] = 'Csoport neve';
$lang['group_description'] = 'Csoport le�r�sa';
$lang['group_moderator'] = 'Csoport moder�tor';
$lang['group_status'] = 'Csoport st�tusz';
$lang['group_open'] = 'Nyitott csoport';
$lang['group_closed'] = 'Z�rt csoport';
$lang['group_hidden'] = 'Rejtett csoport';
$lang['group_delete'] = 'Csoport t�rl�se';
$lang['group_delete_check'] = 'Csoport t�rl�se';
$lang['submit_group_changes'] = 'V�ltoz�sok elk�ld�se';
$lang['reset_group_changes'] = 'V�ltoz�sok t�rl�se';
$lang['No_group_name'] = 'Meg kell adnod egy csoportnevet.';
$lang['No_group_moderator'] = 'Adj meg egy Moder�tort a csoportnak!';
$lang['No_group_mode'] = 'Meg kell hat�roznod, hogy nyitott vagy z�rt csoport legyen-e.';
$lang['No_group_action'] = 'Nem hat�rozt�l meg utas�t�st.';
$lang['delete_group_moderator'] = 'R�gi moder�tor t�rl�se?';
$lang['delete_moderator_explain'] = 'Ha meg akarod v�ltoztatni a csoport moder�tor�t, �s t�r�lni akarod a r�git, akkor jel�ld be. Ha nem jel�l�d be, akkor a felhaszn�l� sima tag lesz a csoportban.';
$lang['Click_return_groupsadmin'] = 'Kattints %side%s, hogy visszat�rj a Csoportok be�ll�t�saihoz.';
$lang['Select_group'] = 'Csoport kiv�laszt�sa';
$lang['Look_up_group'] = 'Csoport keres�se';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'F�rum karbantart�s';
$lang['Forum_Prune_explain'] = 'A F�rum karbantart�s minden olyan t�m�t automatikusan t�r�l, ahova a megadott id�n bel�l nem �rkezik hozz�sz�l�s. Ha nem adsz meg id�t. akkor az �sszes t�ma t�rl�dik. Ezzel nem lehet t�r�lni azokat a t�m�kat, ahol akt�v szavaz�s van �rv�nyben, vagy azokat, melyek a kiemelt k�zlem�nyek kateg�ri�ba tartoznak. Ezeket k�zzel kell t�r�ln�d.';
$lang['Do_Prune'] = 'Karbantart�s ind�t�sa';
$lang['All_Forums'] = '�sszes f�rum';
$lang['Prune_topics_not_posted'] = 'T�m�k karbantart�sa, ahova ennyi ideig nem �rkezett �j hozz�sz�l�s.';
$lang['Topics_pruned'] = 'A t�m�k karbantart�sa befejez�d�tt.';
$lang['Posts_pruned'] = 'A hozz�sz�l�sok karbantart�sa befejez�d�tt.';
$lang['Prune_success'] = 'A F�rum karbantart�sa sikeresen befejez�d�tt!';


//
// Word censor
//
$lang['Words_title'] = 'Cenz�ra';
$lang['Words_explain'] = 'Ezzel az oldallal olyan szavakat adhatsz meg (szerkeszthetsz, vehetsz el), melyeket automatikusan cenz�r�z a f�rum. Ezekkel a szavakkal (vagy ilyen szavakat tartalmaz� szavakkal) nem regisztr�lhatnak �j fehaszn�l�t. A * jokerkarakter haszn�lhat�, pld. az *lap*-ra az alaplap sz� is cenz�r�zva lesz, a lap*-ra a lapsz�m, �s a *lap-ra a f�lap szavak is.';
$lang['Word'] = 'Sz�';
$lang['Edit_word_censor'] = 'Cenz�r�z�si szab�ly szerkeszt�se';
$lang['Replacement'] = 'Helyettes�t�';
$lang['Add_new_word'] = '�j sz� hozz�ad�sa';
$lang['Update_word'] = 'Cenz�r�z�si szab�ly friss�t�se';

$lang['Must_enter_word'] = 'Meg kell adnod egy sz�t �s a helyettes�t�s�t.';
$lang['No_word_selected'] = 'Nem v�lasztott�l ki sz�t.';

$lang['Word_updated'] = 'A kiv�laszott cenz�r�z�si szab�ly sikeresen friss�lt!';
$lang['Word_added'] = 'Cenz�r�z�si szab�ly sikeresen felv�ve!';
$lang['Word_removed'] = 'A kiv�lasztott cenz�r�z�si szab�ly sikeresen t�r�lve lett!';

$lang['Click_return_wordadmin'] = 'Kattints %side%s, hogy visszat�rj a Cenz�ra be�ll�t�saihoz.';

$lang['Confirm_delete_word'] = 'Biztosan t�r�lni akarod ezt a cenz�r�z�si szab�lyt?';

//
// Mass Email
//
$lang['Mass_email_explain'] = 'A Csoportos lev�l opci�val egy emailt k�ldhetsz minden felhaszn�l�nak, vagy egy adott csoport �sszes felhaszn�l�j�nak. Az email az adminisztr�tori c�mre post�z�dik, �s egy titkos m�solatot kap az �sszes felhaszn�l�. Ha sok emberr�l van sz�, akkor a lev�lk�ld�s eltarthat egy darabig, ne szak�tsd meg a program fut�s�t k�zben. Amint v�gzett, az oldal �rtes�t err�l.';
$lang['Compose'] = 'Lev�l�r�s';

$lang['Recipients'] = 'C�mzett';
$lang['All_users'] = '�sszes felhaszn�l�';

$lang['Email_successfull'] = '�zenet elk�ldve!';
$lang['Click_return_massemail'] = 'Kattints %side%s, hogy visszat�rj a Csoportos email men�ponthoz.';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rangok be�ll�t�sa';
$lang['Ranks_explain'] = 'Itt �ll�thatod be a rangokat: hozz�ad�s, szerkeszt�s, megtekint�s �s t�rl�s. Ezenk�v�l saj�t rangsort is k�sz�thetsz, melyeket a felhaszn�l�k be�ll�t�s�n�l hozz�rendelhetsz egyes felhaszn�l�khoz.';

$lang['Add_new_rank'] = '�j rang hozz�ad�sa';

$lang['Rank_title'] = 'Rang neve';
$lang['Rank_special'] = 'Speci�lis rang';
$lang['Rank_minimum'] = 'Minimum hozz�sz�l�sok sz�ma';
$lang['Rank_maximum'] = 'Maximum hozz�sz�l�sok sz�ma';
$lang['Rank_image'] = 'Rang k�p�nek el�r�si �tvonala (relat�v el�r�si �t, a phpBB gy�k�rk�nyvt�r�t�l)';
$lang['Rank_image_explain'] = 'A rangot reprezent�l� k�p';

$lang['Must_select_rank'] = 'Ki kell v�lasztanod egy rangot.';
$lang['No_assigned_rank'] = 'Nincsen speci�lis rang.';

$lang['Rank_updated'] = 'A rang sikeresen megv�ltozott!';
$lang['Rank_added'] = 'Rang sikeresen felv�ve!';
$lang['Rank_removed'] = 'Rang sikeresen t�r�lve!';
$lang['No_update_ranks'] = 'A rang sikeresen t�r�lve lett, b�r a felhaszn�l�i azonos�t�k nem friss�ltek. Ezt k�zzel kell megtenned ezeken az azonos�t�kon';

$lang['Click_return_rankadmin'] = 'Kattints %side%s hogy vissza�rj a Rangok be�ll�t�saihoz.';

$lang['Confirm_delete_rank'] = 'Biztosan t�r�lni akarod ezt a rangot?';

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Tiltott felhaszn�l�nevek be�ll�t�sa';
$lang['Disallow_explain'] = 'Itt �ll�thatod be azokat a felhaszn�l�neveket, melyek nem regisztr�lhat�ak. Haszn�lhat� a * jokerkarakter. Nem adhatsz meg olyan sz�t, amelyet m�r haszn�l valaki, ehhez el�sz�r ki kell t�r�ln�d a felhaszn�l�t, �s ut�na tilthatod le.';

$lang['Delete_disallow'] = 'T�rl�s';
$lang['Delete_disallow_title'] = 'Tiltott felhaszn�l�n�v t�rl�se:';
$lang['Delete_disallow_explain'] = 'Tiltott felhaszn�l�n�v t�rl�se. Jel�ld ki �s kattints a T�rl�s gombra.';

$lang['Add_disallow'] = 'Hozz�ad�s';
$lang['Add_disallow_title'] = 'Tiltott felhaszn�l�n�v hozz�ad�sa:';
$lang['Add_disallow_explain'] = 'Haszn�lhatod a * jokerkaraktert.';

$lang['No_disallowed'] = 'Nincsenek letiltott felhaszn�l�nevek.';

$lang['Disallowed_deleted'] = 'A letiltott felhaszn�l�nevet t�r�ltem!';
$lang['Disallow_successful'] = 'A letiltott felhaszn�l�n�v hozz�ad�sa siker�lt!';
$lang['Disallowed_already'] = 'A be�rt felhaszn�l�nevet nem lehet letiltani; vagy m�r l�tezik a list�ban, vagy l�tezik a cenz�r�zott szavak k�z�tt, esetleg van ilyen nev� felhaszn�l�.';

$lang['Click_return_disallowadmin'] = 'Kattints %side%s, hogy visszat�rj a Tiltott felhaszn�l�nevek be�ll�t�saihoz';


//
// Styles Admin
//

$lang['Styles_admin'] = 'St�lus be�ll�t�sok';
$lang['Styles_explain'] = 'Ezen az oldalon felvehetsz, t�r�lhetsz, be�ll�thatsz st�lusokat (sablonokat �s t�m�kat).';
$lang['Styles_addnew_explain'] = 'A k�vetkez� lista a m�g nem telep�tett t�m�kat tartalmazza a jelenlegi sablonaidhoz. A telep�t�shez kattints a n�v melletti "�j telep�t�s" linkre';

$lang['Select_template'] = 'V�lassz egy sablont';

$lang['Style'] = 'St�lus';
$lang['Template'] = 'Sablon';
$lang['Install'] = 'Telep�t';
$lang['Download'] = 'Let�lt';

$lang['Edit_theme'] = 'T�ma szerkeszt�se';
$lang['Edit_theme_explain'] = 'Az al�bbi �rlap seg�ts�g�vel a kiv�lasztott t�ma be�ll�t�sait v�ltoztathatod meg.';

$lang['Create_theme'] = 'T�ma k�sz�t�se';
$lang['Create_theme_explain'] = 'Az al�bbi �rlap seg�ts�g�vel �j t�m�kat k�sz�thetsz a jelenlegi sablonaidhoz. A sz�n megad�s�n�l ne haszn�ld a # karaktert. A CCCCCC helyes, a #CCCCCC hib�s.';

$lang['Export_themes'] = 'T�m�k export�l�sa';
$lang['Export_explain'] = 'Ennek az oldalnak a seg�ts�g�vel egy sablonhoz tartoz� t�ma adatait export�lhatod ki. V�laszd ki a sablont az al�bbi list�b�l, �s az oldal elk�sz�ti a t�ma konfigur�ci�s f�jlj�t, �s megpr�b�lja elmenteni a kiv�lasztott sablon k�nyvt�rba. Ha nem lehet elmenteni (nem �rhat� a k�nyvt�r, ezt a webszerveren tudod be�ll�tani), akkor t�ltsd le, �s k�zzel m�sold be.';

$lang['Theme_installed'] = 'A kiv�lasztott t�m� telep�t�se sikeresen megt�rt�nt.';
$lang['Style_removed'] = 'A kiv�laszott st�lus sikeresen t�r�lve lett az adatb�zisb�l. A teljes t�rl�shez a phpBB templates/ k�nyvt�r�b�l is t�vol�tsd el.';
$lang['Theme_info_saved'] = 'A kiv�lasztott sablonhoz tart�z� t�ma inform�ci� sikeresen el lett mentve. V�ltoztasd meg a theme_info.cfg jogosults�gait csak olvashat�ra (aj�nlott az eg�sz sablon k�nyvt�r�t is csak olvashat�ra �t�ll�tani).';
$lang['Theme_updated'] = 'A kiv�laszott t�ma friss�lt. Most m�r export�lhatod az �j t�ma be�ll�t�sait.';
$lang['Theme_created'] = 'A t�ma elk�sz�lt. Most m�r export�lhatod a konfigur�ci�s f�jlba, hogy biztons�gosan legyen t�rolva.';

$lang['Confirm_delete_style'] = 'Biztosan t�r�lni akarod ezt a st�lust?';

$lang['Download_theme_cfg'] = 'A t�ma inform�ci� f�jlt nem lehet �rni. Kattints az al�bbi gombra, hogy let�ltsd, �s ut�na m�sold be abba a k�nyvt�rba, ahol a sablon f�jlok vannak.';
$lang['No_themes'] = 'A kiv�lasztott sablonhoz nem tartozik t�ma. �j t�ma k�sz�t�s�hez kattints a Hozz�ad�sra a bal oldalon.';
$lang['No_template_dir'] = 'Nem lehet megnyitni a sablon k�nyvt�rat. Vagy nem olvashat�, vagy nem l�tezik.';
$lang['Cannot_remove_style'] = 'Nem t�r�lheted ezt a st�lust, mivel ez az alapbe�ll�t�s�. Menj vissza �s v�lassz egy m�sikat.';
$lang['Style_exists'] = 'A kiv�lasztott st�lus neve m�r l�tezik, menj vissza �s adj meg egy m�sik nevet.';

$lang['Click_return_styleadmin'] = 'Kattints %side%s, hogy visszat�rj a St�lus be�ll�t�sokhoz.';

$lang['Theme_settings'] = 'T�ma be�ll�t�sok';
$lang['Theme_element'] = 'T�ma elem';
$lang['Simple_name'] = 'Magyar�zat';
$lang['Value'] = '�rt�k';
$lang['Save_Settings'] = 'Be�ll�t�sok elment�se';

$lang['Stylesheet'] = 'CSS st�luslap';
$lang['Stylesheet_explain'] = 'A t�m�hoz haszn�lt CSS st�luslap f�jlneve.';
$lang['Background_image'] = 'H�tt�rk�p';
$lang['Background_color'] = 'H�tt�rsz�n';
$lang['Theme_name'] = 'T�ma neve';
$lang['Link_color'] = 'Linkek sz�ne';
$lang['Text_color'] = 'Sz�vegsz�n';
$lang['VLink_color'] = 'Megl�togatott linkek sz�ne';
$lang['ALink_color'] = 'Akt�v linkek sz�ne';
$lang['HLink_color'] = 'Link sz�ne, ha felette van az eg�r';
$lang['Tr_color1'] = 'T�bl�zat sor els� sz�ne';
$lang['Tr_color2'] = 'T�bl�zat sor m�sodik sz�ne';
$lang['Tr_color3'] = 'T�bl�zat sor harmadik sz�ne';
$lang['Tr_class1'] = 'T�bl�zat sor els� oszt�lya';
$lang['Tr_class2'] = 'T�bl�zat sor m�sodik oszt�lya';
$lang['Tr_class3'] = 'T�bl�zat sor harmadik oszt�lya';
$lang['Th_color1'] = 'T�bl�zat fejl�c els� sz�ne';
$lang['Th_color2'] = 'T�bl�zat fejl�c m�sodik sz�ne';
$lang['Th_color3'] = 'T�bl�zat fejl�c harmadik sz�ne';
$lang['Th_class1'] = 'T�bl�zat fejl�c els� oszt�lya';
$lang['Th_class2'] = 'T�bl�zat fejl�c m�sodik oszt�lya';
$lang['Th_class3'] = 'T�bl�zat fejl�c harmadik oszt�lya';
$lang['Td_color1'] = 'Els� cellasz�n';
$lang['Td_color2'] = 'M�sodik cellasz�n';
$lang['Td_color3'] = 'Harmadik cellasz�n';
$lang['Td_class1'] = 'Els� cellaoszt�ly';
$lang['Td_class2'] = 'M�sodik cellaoszt�ly';
$lang['Td_class3'] = 'Harmadik cellaoszt�ly';
$lang['fontface1'] = 'Els� bet�t�pus';
$lang['fontface2'] = 'M�sodik bet�t�pus';
$lang['fontface3'] = 'Harmadik bet�t�pus';
$lang['fontsize1'] = 'Els� bet�m�ret';
$lang['fontsize2'] = 'M�sodik bet�m�ret';
$lang['fontsize3'] = 'Harmadik bet�m�ret';
$lang['fontcolor1'] = 'Els� bet�sz�n';
$lang['fontcolor2'] = 'M�sodik bet�sz�n';
$lang['fontcolor3'] = 'Harmadik bet�sz�n';
$lang['span_class1'] = 'Els� span oszt�ly';
$lang['span_class2'] = 'M�sodik span oszt�ly';
$lang['span_class3'] = 'Harmadik span oszt�ly';
$lang['img_poll_size'] = 'Szavaz�s k�pe [px]';
$lang['img_pm_size'] = 'Priv�t �zenet st�tuszk�p�nek m�rete [px]';


//
// Install Process
//
$lang['Welcome_install'] = '�dv�zl�nk a phpBB 2 telep�t�j�ben!';
$lang['Initial_config'] = 'Alap konfigur�ci�';
$lang['DB_config'] = 'Adatb�zis konfigur�ci�';
$lang['Admin_config'] = 'Adminisztr�tor konfigur�ci�';
$lang['continue_upgrade'] = 'Miut�n let�lt�tted a konfigur�ci�s f�jlt, kattints a \'Telep�t�s folytat�sa\' gombra, hogy tov�bbl�phess a friss�t�sben. A konfigur�ci�s f�jl felt�lt�s�vel v�rj a friss�t�s befejez�s�ig.';
$lang['upgrade_submit'] = 'Friss�t�s folytat�sa';

$lang['Installer_Error'] = 'Hiba mer�lt fel a telep�t�s k�zben.';
$lang['Previous_Install'] = 'Egy el�z� verzi� m�r telep�tve van.';
$lang['Install_db_error'] = 'Hiba t�rt�nt az adatb�zis friss�t�s�nek pr�b�l�sa k�zben (feltehet�leg m�r egyszer megpr�b�ltad telep�teni a phpBB-t - gy�z�dj meg arr�l, hogy nincsenek t�bl�k az adatb�zisban megadott el�taggal, ha vannak t�r�ld �ket, vagy v�ltoztasd meg a t�bla el�tagot).';

$lang['Re_install'] = 'Egy r�gebben telep�tett phpBB f�rum m�g akt�v.<br /><br />Ha �jra akarod telep�teni a phpBB 2-t, kattints az al�bbi gombra. Figyelem! Ezzel a jelenlegi adatb�zis elveszik, nem k�sz�l r�la m�solat. Az el�z� f�rumhoz tartoz� adminisztr�tori felhaszn�l�n�v �s jelsz� is elveszik!<br /><br />Gondold �t, miel�tt az Igen gombra kattintasz!';

$lang['Inst_Step_0'] = 'K�sz�nj�k, hogy a phpBB-t v�lasztottad. A telep�t�s megkezd�s�hez t�ltsd ki az al�bbi mez�ket. Eml�keztet��l, figyelj arra, hogy a megadott adatb�zis m�r l�tezhet a szerveren, vigy�zz, hogy ne �rd fel�l. Ha ODBC-t vagy MS Access-t haszn�l� adatb�zist haszn�lsz, akkor el�bb k�sz�ts egy DSN-t, miel�tt folytatn�d a telep�t�st.';

$lang['Start_Install'] = 'Telep�t�s megkezd�se';
$lang['Finish_Install'] = 'Telep�t�s befejez�se';

$lang['Default_lang'] = 'A f�rum nyelve';
$lang['DB_Host'] = 'Az adatb�zis szerver hosztneve / DSN';
$lang['DB_Name'] = 'Az adatb�zis neve';
$lang['DB_Username'] = 'Adatb�zis felhaszn�l�n�v';
$lang['DB_Password'] = 'Adatb�zis jelsz�';
$lang['Database'] = 'Az adatb�zis';
$lang['Install_lang'] = 'A telep�t�s nyelve';
$lang['dbms'] = 'Az adatb�zis t�pusa';
$lang['Table_Prefix'] = 'A t�bl�k el�tagja';
$lang['Admin_Username'] = 'Adminisztr�tor felhaszn�l�n�v';
$lang['Admin_Password'] = 'Adminisztr�tor jelsz�';
$lang['Admin_Password_confirm'] = 'Adminisztr�tor jelsz� [ Meger�s�t�s ]';

$lang['Inst_Step_2'] = 'A telep�t�s sikeresen befejez�d�tt, �s az adminisztr�tor azonos�t� is elk�sz�lt. Miut�n a Telep�t�s befejez�se gombra kattintott�l, t�r�ld le a phpBB k�nyvt�rb�l a "contrib" �s az "install" k�nyvt�rakat. Ind�tsd a f�rumot, ahol a bel�p�s ut�n az Adminisztr�ci�s fel�leten kereszt�l be�ll�thatod a f�rumot, els�sorban az �ltal�nos be�ll�t�sokra �gyelve. K�sz�nj�k, hogy a phpBB 2-t v�lasztottad.';

$lang['Unwriteable_config'] = 'A konfigur�ci�s f�jlt jelenleg nem lehet �rni, val�sz�n�leg �r�s-olvas�si jogosults�g probl�ma miatt. A f�jl egy m�solata let�lthet�, ha az al�bbi linkre kattintasz. Ezt k�zzel t�ltsd fel a phpBB 2 gy�k�rk�nyvt�r�ba. Ezut�n l�pj be az el�bb megadott adminisztr�tor felhaszn�l�n�vvel �s jelsz�val a F�rumba, ahol a F�rum adminisztr�ci�ra kattintva be�ll�thatod a F�rum t�bbi fontos elem�t, els�sorban az �ltal�nos be�ll�t�st. K�sz�nj�k, hogy a phpBB 2-t v�lasztottad.';
$lang['Download_config'] = 'Be�ll�t�s let�lt�se';

$lang['ftp_choose'] = 'V�lassz let�lt�si m�dot';
$lang['ftp_option'] = '<br />Mivel a PHP ezen verzi�ja m�r k�pes kezelni az FTP-ket, �gy lehet�s�g van a konfigur�ci�s f�jl FTP-n kereszt�li felt�lt�s�re.';
$lang['ftp_instructs'] = 'FTP-n kereszt�li phpBB felt�lt�st v�lasztott�l. Ehhez add meg az al�bbi mez�kbe az FTP hozz�f�r�s�nek adatait.';
$lang['ftp_info'] = 'FTP inform�ci�k bevitele';
$lang['Attempt_ftp'] = 'Konfigur�ci�s f�jl FTP-n kereszt�li felt�lt�se';
$lang['Send_file'] = 'phpBB felt�lt�se k�zzel';
$lang['ftp_path'] = 'phpBB 2 FTP el�r�si �tja';
$lang['ftp_username'] = 'FTP felhaszn�l�n�v';
$lang['ftp_password'] = 'FTP jelsz�';
$lang['Transfer_config'] = 'Adat�tvitel megkezd�se';
$lang['NoFTP_config'] = 'A konfigur�ci�s f�jl FTP-n kereszt�li �tvitele sikertelen volt. T�ltsd le innen a f�jlt, �s k�zzel helyezd el a t�rhelyen.';

$lang['Install'] = '�j telep�t�s';
$lang['Upgrade'] = 'Friss�t�s';


$lang['Install_Method'] = 'Telep�t�s m�dja';

$lang['Install_No_Ext'] = 'A szerveren fut� PHP be�ll�t�s nem t�mogatja a kiv�lasztott adatb�zis t�pust.';

$lang['Install_No_PCRE'] = 'A phpBB2-h�z PCRE (Perl-Compatible Regular Expressions) modul sz�ks�ges, mely nem tal�lhat� meg a PHP ezen verzi�j�ban!';

//
// Version Check
//
$lang['Version_up_to_date'] = 'A phpBB-d a legfrissebb, nem �rhet� el �jabb verzi�.';
$lang['Version_not_up_to_date'] = 'A phpBB-d <b>nem</b> a legfrissebb verzi�j�! A friss�t�s el�rhet� a <a href="http://www.phpbb.com/downloads.php" target="_phpBB">phpBB</a>, vagy a <a href="http://download.phpbb.hu" target="_hunphpBB">Magyar phpBB k�z�ss�g</a> oldal�n.';
$lang['Latest_version_info'] = 'A phpBB legfrissebb el�rhet� verzi�ja a <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'Jelenlegi f�rumod verzi�ja: <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Nem siker�lt csatlakozni a phpBB szerverhez, a k�vetkez� hiba l�pett fel:<br />%s';
$lang['Socket_functions_disabled'] = 'A socket funkci�k nem enged�lyezettek.';
$lang['Mailing_list_subscribe_reminder'] = 'Hogy mindig azonnal �rtes�lj a phpBB friss�t�seir�l, <a href="http://www.phpbb.com/support/" target="_maillist">iratkozz fel a h�rlevel�nkre</a>.';
$lang['Version_information'] = 'Verzi� inform�ci�';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Enged�lyezett bel�p�si k�s�rletek sz�ma:';
$lang['Max_login_attempts_explain'] = 'Legfeljebb ennyiszer pr�b�lkozhat bel�pni a felhaszn�l�.';
$lang['Login_reset_time'] = 'Bel�p�s z�rol�s�nak ideje:';
$lang['Login_reset_time_explain'] = 'Ennyi percet kell v�rnia a felhaszn�l�nak, hogy bel�phessen, miut�n t�ll�pte az enged�lyezett bel�p�si k�s�rletek sz�m�t.';

//
// That's all Folks!
// -------------------------------------------------

?>