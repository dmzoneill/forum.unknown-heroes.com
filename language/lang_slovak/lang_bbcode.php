<?php

/***************************************************************************
 *                            lang_bbcode.php [Slovak]
 *                              -------------------
 *     begin                : Sun Jan 01 2007
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@pcforum.sk
 *
 *     $Id: lang_bbcode.php,v 1.0.0.0 2006/01/01 00:00:01 JanoF Exp $
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
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array('question', 'answer');
// If you want to separate a section enter $faq[] = array('--','Block heading goes here if wanted');
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put single quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \'something\'
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//

$faq[] = array('--','�vod');
$faq[] = array('�o je BBCode (zna�ky)?', 'Zna�ky s� zvl�tne pr�kazy vkladan� do pr�spevku. Pou��vanie zna�iek vo Va�ich pr�spevkoch povo�uje administr�tor. M��ete si dodato�n� zak�za� pou��vanie zna�iek v jednotliv�ch pr�spevkoch vo formul�ri k zaslaniu pr�spevku. Zna�ky s� ve�mi podobn� �t�lu HTML, pr�kazy s� zap�san� v zlo�en�ch z�tvork�ch [] a uzavieraj� v�dy nejak� text, ktor� sa n�sledne chov� pod�a t�chto pr�kazov. Zna�ky V�m umo�nia r�chle form�tovanie p�san�ho textu. Sami sa teda m��ete rozhodn��, �i budete chcie� pou��va� tieto zna�ky, ktor� s� zahrnut� vo formul�ri pre odoslanie pr�spevku �i budete pou��va� HTML (pokia� je HTML na tomto f�re povolen�).');

$faq[] = array('--','Form�tovanie textu');
$faq[] = array('Ako vytvori� text p�san� tu�ne, kurz�vou �i pod�iarknut�?', 'Zna�ky obsahuj� pr�kazy pre r�chlu zmenu �t�lu V�ho textu. M��ete sa pozrie� ako �ahko dosiahnu� po�adovan� v�sledok. Pre vytvorenie tu�ne p�san�ho textu, obklop�te text medzi <b>[b][/b]</b>.<br /><br />pr�klad: <b>[b]</b>Ahoj<b>[/b]</b><br />V�sledkom je <b>Ahoj</b><br /><br />Pre pod�iarknutie textu, obklop�te text medzi <b>[u][/u]</b>.<br /><br />pr�klad: <b>[u]</b>Dobr� de�<b>[/u]</b><br />V�sledkom je: <u>Dobr� de�</u><br /><br />Pre text p�san� kurz�vou, obklop�te text medzi <b>[i][/i]</b>.<br /><br />pr�klad: Toto je <b>[i]</b>uk�ka<b>[/i]</b><br />V�sledkom je: Toto je <i>uk�ka</i>');
$faq[] = array('Ako zmeni� farbu a ve�kos� p�sma?', 'Pre zmenu farby alebo ve�kosti textu je ur�en�ch nieko�ko pr�kazov. Dajte si pozor na to, ako bude v�stup zobrazen� v z�vislosti na Va�om prehliada�i a syst�me. Pre zmenu farby textu, obklop�te po�adovan� text medzi <b>[color=][/color]</b>. M��ete pou�i� bu� n�zvy farieb (napr. red, blue, yellow, at�.) alebo odpovedaj�ce hexadecim�lne k�dy farby, napr. #FFFFFF, #000000. Na pr�klade si uk�eme ako vytvori� �erven� text:<br /><br /><b>[color=red]</b>Ahoj!<b>[/color]</b> alebo <b>[color=#FF0000]</b>Ahoj!<b>[/color]</b><br />V�sledkom bude: <span style="color:red">Ahoj!</span><br /><br />Zmenu ve�kosti textu vykon�me podobne pou�it�m <b>[size=][/size]</b>. Tento pr�kaz m� p�eddefinovan� ��seln� hodnoty, ktor� maj� priraden� odpovedaj�cu ve�kos� p�sma v bodoch, za��naj�c od 1 (ve�mi mal� p�smo, nejmenej vidite�n�) a� po 29 (ve�mi ve�k�). Pre uk�ku:<br /><br /><b>[size=9]</b>MAL�<b>[/size]</b><br />V�sledkom je <span style="font-size:9px">MAL�</span><br /><br />zatia� �o<br /><br /><b>[size=24]</b>VE�K�<b>[/size]</b><br />zobraz� <span style="font-size:24px">VE�K�</span>');
$faq[] = array('Je mo�n� sp�ja� form�tovacie zna�ky?', '�no, toto je mo�n�, na nasleduj�com pr�klade si uk�eme ako spr�vne tieto zna�ky zap�sa�. Je ve�mi d�le�it� dodr�a� aj ich postupnos�.<br /><br />Napr�klad: <b>[size=18][color=red][b]</b>Pozri sa<b>[/b][/color][/size]</b><br /><br />V�sledkom je: <span style="color:red;font-size:18px"><b>Pozri sa</b></span><br /><br />Pokia� nedodr��te postupnos� ukon�en� zna�iek v porad� v akom boli vkladan�, bude text zobrazen� chybne! V�dy je potrebn� uzaviera� zna�ky v postupnosti v akej boli zadan�. Pozrite sa na nasleduj�cu uk�ku, kde s� zna�ky nekorektne uzavret�:<br /><br /><b>[b][u]</b>Toto je zle<b>[/b][/u]</b>');

$faq[] = array('--','Cit�cia a pevn� ��rka textu pri odoslan�');
$faq[] = array('Ako vytvori� cit�ciu?', 'S� dva sp�soby zadania citovan�ho textu, s uveden�m autora a bez neho. Ke� je to vhodn� m��ete pou�i� cit�t k pr�spevku, ktor� prid� pozn�mku o autorovi a text do zvl�tneho boxu v pr�spevku. Text cit�cie uzavrite medzi <b>[quote=""][/quote]</b>. Tento zp�sob prid� k cit�ci� pozn�mku koho citujete. V nasleduj�com pr�klade si uk�eme ako zad�me text, ktor� vyslovil Karol Nov�k:<br /><br /><b>[quote="Karol Nov�k"]</b>Toto je text, ktor� vyslovil tento p�n.<b>[/quote]</b><br /><br /> V�sledkom bude automatick� pridanie textu <i>Karol Nov�k nap�sal:</i> a text cit�cie. Pokia� chcete zada� text ako svoj vlastn� cit�t, pr�padne nikoho neur�ova�, zad�te len z�tvorky "". T�to vo�ba nie je povinn�. Druh�m sp�sobom je citova� iba text. Po�adovan� text, ktor� chcete citova� uzavrite medzi <b>[quote][/quote]</b>. Ke� si zobraz�te v�sledok takejto spr�vy, bude tu len <i>nap�sal:</i> a text cit�tu.');
$faq[] = array('V�stup k�du alebo pevn� ��rka d�t.', 'Ak chcete vlo�i� kus k�du alebo �oko�vek �o vy�aduje pevn� ��rku (font typu Courier), obklopte text medzi <b>[code][/code]</b>.<br /><br />napr�klad: <b>[code]</b>echo "Toto je k�d";<b>[/code]</b>');

$faq[] = array('--','Generovanie zoznamu');
$faq[] = array('Vytv�ranie jednoduch�ho zoznamu.', 'Zna�ky obsahuj� aj pr�kazy pre vytv�ranie zoznamov. Podporovan� s� dva druhy zoznamov, jednoduch� a �trukturovan�. Jednoduch� zoznam zobraz� jednotliv� polo�ky zoznamu postupne pod sebou oddelen� odr�kou. Pre vytvorenie zoznamu pou�ite <b>[list][/list]</b> a definujte jednotliv� polo�ky pomocou <b>[*]</b>. Pozrite sa na nasleduj�cu uk�ku jednoduch�ho zoznamu:<br /><br /><b>[list]</b><br /><b>[*]</b>�erven�<br /><b>[*]</b>modr�<br /><b>[*]</b>zelen�<br /><b>[/list]</b>');
$faq[] = array('Vytv�ranie �trukturovan�ho zoznamu.', 'Druh�m sp�sobom je vytv�ranie �trukturovan�ch zoznamov. Od predch�dzaj�ceho typu sa l�i znakom pred textom jednotliv�ch polo�iek, namiesto bodky je tu pou�it� niektor� z dvoch sp�sobov vzostupn�ho ozna�enia polo�iek zoznamu. Pre vytvorenie ��slovan�ho zoznamu pou�ite <b>[list=1][/list]</b> a pre abecedn� zoznam <b>[list=a][/list]</b>. Jednotliv� polo�ky zoznamu definujete pomocou <b>[*]</b>. Pozrite sa na nasleduj�cu uk�ku:<br /><br /><b>[list=1]</b><br /><b>[*]</b>�erven�<br /><b>[*]</b>modr�<br /><b>[*]</b>zelen�<br /><b>[/list]</b><br /><br />Pre vytvorenie abecedn�ho zoznamu pou�ite:<br /><br /><b>[list=a]</b><br /><b>[*]</b>prv� mo�n� odpove�<br /><b>[*]</b>druh� mo�n� odpove�<br /><b>[*]</b>tretia mo�n� odpove�<br /><b>[/list]</b>');

$faq[] = array('--', 'Vytvorenie odkazu');
$faq[] = array('Odkaz na in� webov� str�nky.', 'phpBB zna�ky podporuj� vytvorenie URL odkazov odkazuj�cich sa na in� internetov� str�nky. Prv�m sp�sobom je pou�i� <b>[url=][/url]</b> zna�ky, za znak = potom dopln�te URL adresu, na ktor� chcete odkazova�. Text medzi obomi zna�kami bude zv�raznen� a z�rove� bude sl��i� ako odkaz na uveden� URL adresu. Pozrite sa na nasleduj�c� pr�klad odkazuj�ci na server PCforum.sk:<br /><br /><b>[url=http://www.pcforum.sk/]</b>Str�nky PCforum.sk<b>[/url]</b><br /><br />T�mto sa vygeneruje odkaz <a href="http://www.pcforum.sk/" target="_blank">Str�nky PCforum.sk</a>. Pokia� kliknete na tento vytvoren� odkaz, otvor� sa V�m v novom okne prehliada�a odkaz na ktor� smerujete.<br /><br />Ak chcete zobrazi� URL priamo ako odkaz pou�ite nasleduj�ci postup:<br /><br /><b>[url]</b>http://www.pcforum.sk/<b>[/url]</b><br /><br />T�mto sa vygeneruje odkaz <a href="http://www.pcforum.sk/" target="_blank">http://www.pcforum.sk/</a>.<br /><br />V pr�pade zadania syntakticky spr�vneho URL aj bez za�iato�n�ho http:// do textu pr�spevku automaticky odkaz na zadan� URL adresu. Pre uk�ku si m��ete sk�si� nap�sa� do pr�spevku www.pcforum.sk a uvid�te, �e sa V�m text vo v�sledku zobraz� automaticky ako odkaz <a href="http://www.pcforum.sk/" target="_blank">www.pcforum.sk</a>.<br /><br />Obdobn�m zp�sobom sa daj� vytv�ra� aj odkazy na e-mailov� adresy, zadajte po�adovan� e-mailov� adresu pod�a pr�kladu:<br /><br /><b>[email]</b>support@pcforum.sk<b>[/email]</b><br /><br />V�sledok potom bude <a href="mailto:support@pcforum.sk">support@pcforum.sk</a> alebo m��ete zada� v texte pr�spevku support@pcforum.sk a adresa sa op� automaticky premen� na odkaz.<br /></br />URL odkaz m��ete zada� medzi ktor�ko�vek �al�ie zna�ky: Ak uzavriete URL medzi <b>[img][/img]</b> (vi� nasleduj�ca kapitola) m��e by� odkazom aj obr�zok. Len potom nezabudnite na spr�vnu postupnos� uzatv�rania zna�iek.<br /><br />URL adresa nesmie obsahova� medzeru, preto pokia� m�te tak� adresu, mus�te v�etky medzery nahradi� znakmi \'%20\' (bez �vodzoviek).');

$faq[] = array('--', 'Zobrazenie obr�zkov v pr�spevkoch');
$faq[] = array('Pridanie obr�zku do pr�spevku.', 'phpBB zna�ky �alej umo��uj� vkladanie obr�zkov do textu pr�spevku �i spr�vy. Toto je ve�mi u�ito�n� vlastnos�, v�aka ktorej nemus�te odkazova� na s�bory obr�zkov o ktor�ch napr�klad p�ete, ale v�etci u��vatelia ich hne� vidia vo Va�om pr�spevku. Ako bolo uveden� vy��ie, m��ete vyu�i� obr�zok k vytvoreniu URL odkazu na V� server alebo napr�klad pre zv��eninu mal�ho obr�zku tu v pr�spevku. Obr�zok sa mus� v�ak v�dy nach�dza� na internete a by� tak dostupn� pre v�etk�ch u��vate�ov, nie je mo�n� sa teda odkazova� na s�bory, ktor� m�te napr�klad na lok�lnom disku V�ho po��ta�a, preto�e k nim by u��vatelia internetu nemali pr�stup. Pre zobrazenie obr�zku mus�te uzav�ie� URL obr�zku medzi <b>[img][/img]</b>.<br /><br />pr�klad: <b>[img]</b>http://www.pcforum.sk/images/logo.gif<b>[/img]</b><br /><br />Ak zad�te URL adresu obr�zku medzi <b>[url][/url]</b>, m��e by� odkazom obr�zok.<br /><br />pr�klad: <b>[url=http://www.pcforum.sk/][img]</b>http://www.pcforum.sk/images/logo.gif<b>[/img][/url]</b><br /><br />V�sledkom bude:<br /><a href="http://www.pcforum.sk/" target="_blank"><img src="http://www.pcforum.sk/templates/white/images/logo_left.gif" border="0" alt="" /></a>');

$faq[] = array('--', '�al�ie z�le�itosti');
$faq[] = array('M��em si prida� svoje vlastn� t�gy?', 'Nie, zatia� to v phpBB 2 nejde. Chyst�me sa pon�knu� mo�nos� prid�vania vlastn�ch tagov v dal��ch verzi�ch phpBB.');

//
// This ends the BBCode guide entries
//

?>
