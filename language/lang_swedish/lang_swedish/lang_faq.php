<?php
/***************************************************************************
 *                          lang_faq.php [Swedish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.1 2006/01/13 15:45:31 virtuality Exp $
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
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Inloggnings- och registreringsproblem");
$faq[] = array("Varf�r kan jag inte logga in?", "Har du registrerat dig? Du m�ste registrera dig f�r att kunna logga in. Har du blivit avst�ngd fr�n forumet (i s� fall visas ett meddelande)? Om s� �r fallet b�r du kontakta webmastern eller administrat�ren f�r att f� reda p� varf�r. Om du har registrerat dig och inte �r avst�ngd men �nd� inte kan logga in kontrollera att ditt anv�ndarnamn och l�senord st�mmer. Oftast �r det problemet, om inte s� kontakta administrat�ren.");
$faq[] = array("Varf�r m�ste jag registrera mig?", "Det �r inte s�kert att du m�ste registrera dig, det �r upp till administrat�ren om du m�ste registrera dig f�r att skriva/l�sa inl�gg eller inte. Dock s� ger registreringen dig ytterligare funktioner som inte �r tillg�ngliga f�r g�ster, till exempel avatarer, personliga meddelanden, e-post till andra anv�ndare, medlemskap i anv�ndargrupper, med mera. Det tar endast n�gra sekunder att registrera sig, s� det rekommenderas.");
$faq[] = array("Varf�r blir jag automatiskt utloggad?", "Om du inte kryssar i <i>Logga in mig automatiskt</i> n�r du loggar in s� kommer du endast att vara inloggad under en begr�nsad tid. Det f�r att f�rhindra att n�gon missbrukar ditt konto. F�r att inte bli utloggad, kryssa i \"Logga in mig automatiskt\" vid inloggningen. Detta �r dock inte att rekommendera om du bes�ker forumet fr�n en offentlig dator, s� som bibliotek, internetcaf�, skola eller liknande.");
$faq[] = array("Hur hindrar jag att mitt anv�ndarnamn visas p� Vem �r Online-listan?", "I din profil finns en inst�llning kallad <i>D�lj min onlinestatus</i>, om du �ndrar inst�llningen till <i>Ja</i>, s� kommer endast du sj�lv och administrat�rer se om du �r online eller inte. Du kommer att r�knas som en dold anv�ndare.");
$faq[] = array("Jag har gl�mt mitt l�senord!", "Ingen panik. �ven om du inte kan f� tillbaka ditt nuvarande l�senord s� kan det �ndras till ett nytt. F�r att g�ra det s� g�r du till inloggningen och klickar p� <u>Jag har gl�mt mitt l�senord</u>. F�lj instruktionerna d�r och du kommer att vara tillbaka online p� nolltid.");
$faq[] = array("Jag har registrerat mig men jag kan inte logga in!", "Kontrollera f�rst att du anv�nder r�tt anv�ndarnamn och l�senord. Om du �r s�ker p� att de �r r�tt s� kan tv� saker ha intr�ffat. Antagligen s� m�ste ditt konto aktiveras. Vissa forum kr�ver att alla konton aktiveras f�rst innan du kan logga in, antingen av dig sj�lv eller av administrat�ren. N�r du registrerade dig s� stod det angivet om du m�ste aktivera kontot eller inte. Om du f�tt ett e-postmeddelande s� f�lj instruktionerna i det, om inte, s� �r du s�ker p� att du angett en korrekt e-postadress? En anledning till att man anv�nder kontoaktivering �r att minska m�jligheterna f�r personer med o�rligt upps�t att missbruka forumet anonymt. Om du �r s�ker p� att e-postadressen �r giltig s� kontakta administrat�ren f�r forumet. Om COPPA-st�d �r aktiverat och du klickat p� <u>Jag �r under 13 �r</u> n�r du registrerat dig s� m�ste du f�lja instruktionerna du f�tt f�rst.");
$faq[] = array("Jag har registrerat mig tidigare men nu kan jag inte logga in l�ngre!", "De troligaste anledningarna till detta �r; du har angett ett felaktigt anv�ndarnamn eller l�senord (kolla e-postmeddelandet du fick n�r du f�rst registrerade dig) eller s� har administrat�ren raderat ditt konto av n�gon anledning. Om ditt konto har raderats s� kan det bero p� att du inte skrivit n�gra eller f� inl�gg under en l�ngre tid. Det �r normalt att man ibland raderar anv�ndare som inte har skrivit n�got f�r att minska storleken p� databasen. F�rs�k registrera dig igen och skriv ett inl�gg i en diskussion.");


$faq[] = array("--","Anv�ndarpreferenser och inst�llningar");
$faq[] = array("Hur �ndrar jag mina inst�llningar?", "Alla dina inst�llningar (om du har registrerat dig) lagras i databasen. F�r att �ndra dem, klicka p� \"Profil\" (finns oftast h�gst upp p� sidan). D�r kan du �ndra alla dina inst�llningar.");
$faq[] = array("Tiden �r inte r�tt!", "Tiden �r s�kerligen r�tt, men den tiden som visas kanske �r f�r en annan tidszon �n den du befinner dig i. Klicka p� \"Profil\" (finns oftast h�gst upp p� sidan) och �ndra d�r din tidszonsinst�llning. Kom ih�g att f�r att kunna �ndra tidszonen, och de flesta andra inst�llningarna, s� m�ste du vara registrerad och inloggad. S� om du inte har registrerat dig s� �r det h�g tid att du g�r det nu!");
$faq[] = array("Jag har �ndrat tidszonen och tiden �r fortfarande fel!", "Om du �r s�ker p� att du har satt tidszonen korrekt och tiden fortfarande �r felaktig s� �r sommartid det mest troliga svaret. Forumet kan inte hantera f�r�ndringar mellan vinter och sommartid automatiskt, s� under sommarm�naderna kan tiden vara en timme fel. Du kan g� till din profil och �ka tidszonen med en timme manuellt om du vill. Kom ih�g att st�lla tillbaka igen n�r det blir vintertid bara!");
$faq[] = array("Mitt spr�k finns inte i listan!", "D� har f�rmodligen administrat�ren inte installerat just ditt spr�k eller s� har inte n�gon �versatt forumet till ditt spr�k. Fr�ga administrat�rerna om de inte kan installera det spr�k du beh�ver och om det inte finns s� tag g�rna chansen och skapa en ny �vers�ttning. Mer information finns p� phpBBs webbplats (se l�nken l�ngst ner p� sidorna).");
$faq[] = array("Hur visar jag en bild under mitt anv�ndarnamn?", "Det kan finnas tv� bilder under anv�ndarnamnet n�r man l�ser ett �mne. Den f�rsta �r en bild som �r associerad med din rank, oftast �r bilderna i form av stj�rnor eller block som visar hur m�nga inl�gg du har skrivit eller din status i forumet. Under den kan det finnas en bild som �r k�nt som en avatar, denna �r i allm�nhet unik eller personlig f�r varje anv�ndare. Det �r upp till administrat�ren att till�ta avatarer och de kan �ven v�lja p� vilket s�tt avatarer g�rs tillg�ngliga f�r anv�ndaren. Om du inte kan anv�nda avatarer i forumet s� �r det ett beslut av administrat�rerna, och du kan fr�ga dem om deras sk�l till detta.");
$faq[] = array("Hur �ndrar jag min rank?", "I normala fall kan du inte �ndra din rank direkt (din rank st�r under ditt anv�ndarnamn i inl�ggen och i din profil). De flesta forum anv�nder rank f�r att indikera antalet inl�gg du har skrivit och f�r att identifiera vissa anv�ndare, t.ex. moderatorer och administrat�rer. F�rs�k att inte missbruka forumet genom att skriva on�diga inl�gg bara f�r att �ka din rank, administrat�rerna kommer i s� fall att helt enkelt s�nka ditt antal inl�gg.");
$faq[] = array("N�r jag klickar p� e-postl�nken till en anv�ndare s� vill forumet att jag loggar in?", "Tyv�rr kan bara registrerade anv�ndare skicka e-post till andra anv�ndare via det inbyggda e-post formul�ret (om administrat�rerna har aktivera denna finess). Detta f�r att f�rhindra missbruk av e-postsystemet av anonyma anv�ndare.");


$faq[] = array("--","Problem med inl�gg");
$faq[] = array("Hur skriver jag ett meddelande i ett forum?", "Enkelt, klicka p� den relevanta knappen p� antingen forum eller �mnessidan. Det �r m�jligt att du m�ste registrera dig innan du kan skriva ett meddelande, de r�ttigheter du har visas l�ngst ned p� forum- och �mnessidan. (<i>Du kan skapa ett nytt meddelande, Du kan r�sta i omr�stningar<i> osv.)");
$faq[] = array("Hur �ndrar eller raderar jag ett inl�gg?", "S�vida du inte �r administrat�r eller moderator kan du bara redigera och radera dina egna inl�gg. Du kan redigera ett meddelande (ibland bara inom en begr�nsad tid efter det att det postades) genom att klicka p� <i>Redigera</i> vid det relevanta meddelandet. Om n�gon redan har besvarat meddelandet kommer det att finnas en f�rklarande text under meddelandet som talar om att det har redigerats, detta visar ocks� hur m�nga g�nger meddelandet har redigerats. Detta syns enbart om n�gon har svarat, det syns inte heller om en moderator eller administrat�r redigerar meddelandet (dock b�r de l�mna ett meddelande som talar om vad de har �ndrat och varf�r). Vanliga anv�ndare kan inte radera ett meddelande som n�gon redan svarat p�.");
$faq[] = array("Hur l�gger jag till en signatur till mitt meddelande?", "F�r att l�gga till en signatur till ett meddelande m�ste du f�rst skapa en signatur, detta g�r du via din profil. N�r du v�l har skapat din signatur kan du kryssa i <i>L�gg till signatur</i> n�r du skapar meddelandet f�r att l�gga till din signatur. Du kan ocks� l�gga till en signatur automatiskt till alla dina meddelanden genom att st�lla in det i din profil. (du kan fortfarande hindra din signatur fr�n att l�ggas till genom att kryssa ur rutan n�r du skapar meddelandet)");
$faq[] = array("Hur skapar jag en omr�stning?", "Att skapa en omr�stning �r enkelt, n�r du skapar ett nytt �mne (eller redigerar det f�rsta meddelandet i ett �mne) s� ska det finnas ett <i>L�gg till omr�stning</i> formul�r under textrutan (om du inte kan se detta s� har du f�rmodligen inte r�ttigheter f�r att skapa nya omr�stningar). Du b�r ange en titel f�r omr�stningen och minst tv� val (f�r att skapa en valm�jlighet ange fr�gan och klicka p� <i>L�gg till nytt val</i>). Du kan ocks� ange en tidsbegr�nsning f�r omr�stningen, 0 inneb�r o�ndligt. Det finns en begr�nsning p� hur m�nga olika valm�jligheter du kan ange, detta best�ms av administrat�ren.");
$faq[] = array("Hur �ndrar jag en omr�stning?", "Meddelanden och omr�stningar kan enbart redigeras av den som skapat dem, eller av moderatorer och administrat�rer. F�r att redigera en omr�stning klicka p� f�rsta meddelandet i �mnet (detta �r alltid associerat med omr�stningen). Om ingen har r�stat s� kan anv�ndaren radera omr�stningen eller redigera valm�jligheterna. Men om n�gon har r�stat s� kan bara moderatorer eller administrat�rer redigera eller radera omr�stningen. Detta f�r att f�rhindra folk att rigga omr�stningar genom att �ndra valm�jligheter n�r folk redan har r�stat.");
$faq[] = array("Varf�r kan jag inte komma in i ett forum?", "Vissa forum kan vara begr�nsade till vissa anv�ndare eller grupper. F�r att lista, l�sa, skriva, mm s� m�ste du ha speciell till�telse, enbart gruppledaren eller administrat�rerna kan ge ut dessa r�ttigheter, s� du m�ste kontakta dem.");
$faq[] = array("Varf�r kan jag inte r�sta i omr�stningar?", "Enbart registrerade anv�ndare kan r�sta i omr�stningar (f�r att f�rhindra fusk). Om du �r registrerad och du fortfarande inte kan r�sta s� har du f�rmodligen inte till�telse att r�sta.");


$faq[] = array("--","Formatering och �mnestyper");
$faq[] = array("Vad �r BBCode?", "BBCode �r en speciell variant av HTML. Om du kan anv�nda BBCode eller inte best�ms av administrat�ren (du kan ocks� hindra anv�ndningen av BBCode i ett specifikt meddelande). BBCode i sig �r snarlikt HTML, taggar �r omg�rdade/inneslutna i hakparanteser, [ och ] i st�llet f�r &lt; och &gt; och BBCode ger st�rre kontroll �ver hur vad och hur n�gonting visas. F�r mera information om BBCode titta i guiden som kan n�s fr�n <i>Nytt �mne/inl�gg</a>-sidan.");
$faq[] = array("Kan jag anv�nda HTML?", "Det beror p� om administrat�ren till�ter dig eller inte. Om det �r till�tet kommer du att finna att det bara �r vissa taggar som fungerar. Detta �r en s�kerhets�tg�rd f�r att hindra personer fr�n att missbruka forumet genom att anv�nda taggar som kan f�rst�ra designen eller skapa andra problem. Om HTML �r till�tet s� kan du f�rhindra det i ett specifikt meddelande om du vill.");
$faq[] = array("Vad �r smileys?", "Smileys �r sm� grafiska bilder som kan anv�ndas f�r att uttrycka n�gon typ av k�nsla via en f�rkortning, t.ex. \":)\" som betyder glad/lycklig eller \":(\" som betyder ledsen. Hela listan av smileys kan du hitta via nytt meddelande formul�ret. F�rs�k att inte �veranv�nda smileys, de kan fort f� ett meddelande att bli ol�sbart och en moderator kan best�mma sig f�r att redigera bort dem fr�n meddelandet eller radera hela meddelandet.");
$faq[] = array("Kan jag posta bilder?", "Bilder kan visas i ditt meddelande. Dock finns det f�r tillf�llet ingen funktion f�r att ladda upp bilder till forumet. D�rf�r m�ste du l�nka till en bild som finns p� en publik webbserver, t.ex. <pre>http://www.some-unknown-place.net/my-picture.gif</pre> Du kan inte l�nka till bilder som lagras p� din privata dator (s�vida den inte �r en publikt tillg�nglig server) eller till bilder som lagras bakom auktoriseringsmekanismer, t.ex. Hotmail eller Yahoo, l�senordsskyddade sajter, m.m. F�r att visa en bild s� anv�nd antingen BBCode [img] taggen eller motsvarande i HTML. (om det till�ts)");
$faq[] = array("Vad �r Viktiga �mnen/meddelanden?", "Viktiga meddelande inneh�ller oftast viktig information och du b�r l�sa dem s� fort som m�jligt. Viktiga meddelanden syns h�gst upp p� varje sida i det forum d�r de postats. Om du kan eller inte kan posta viktiga meddelanden beror p� vilka r�ttigheter du har, vilket styrs av administrat�rerna.");
$faq[] = array("Vad �r Klistrade �mnen/meddelanden?", "Klistrade �mnen syns under viktiga meddelanden och enbart p� f�rsta sidan. Dessa inneh�ller ocks� ofta viktig information s� du b�r l�sa dem n�r det �r m�jligt. S�som med viktiga meddelanden s� �r det administrat�rerna som best�mmer vilka r�ttigheter som kr�vs f�r att kunna skapa Klistrade meddelanden.");
$faq[] = array("Vad �r l�sta �mnen/meddelanden?", "En moderator eller administrat�r kan <i>l�sa</i> ett �mne. Detta inneb�r att ingen kan skapa nya svar till �mnet i fr�ga. Om �mnet inneh�ll en omr�stning avslutas den. �mnen kan l�sas av m�nga sk�l.");


$faq[] = array("--","Anv�ndarniv�er och grupper");
$faq[] = array("Vad �r en administrat�r?", "Administrat�rer �r personer som har den h�gsta niv�n av kontroll p� forumet. Dessa personer kan styra alla aspekter av forumets drift vilket inkluderar att st�lla in r�ttigheter, st�nga av anv�ndare, skapa anv�ndargrupper eller utse moderatorer, med mera. De har ocks� fulla moderatorr�ttigheter i alla forum.");
$faq[] = array("Vad �r en moderator?", "Moderatorer �r individer (eller grupper av individer) vars jobb det �r att sk�ta om de dagliga aktiviteterna i forumet. De kan redigera, radera, l�sa, l�sa upp, flytta och dela �mnen och inl�gg i forumet som de har ansvar f�r. Generellt s� �r moderatorer d�r f�r att hindra personer fr�n att <i>komma ifr�n �mnet<i> eller att posta grovt eller anst�tligt material.</i>");
$faq[] = array("Vad �r en anv�ndargrupp?", "Anv�ndargrupper �r ett s�tt som administrat�rerna anv�nder f�r att gruppera anv�ndare. Varje anv�ndare kan vara med i flera grupper och varje grupp kan tilldelas individuella r�ttigheter. Detta g�r det enkelt f�r administrat�rerna att ange flera anv�ndare som moderatorer f�r ett forum eller ge de �tkomst till ett privat forum, mm.");
$faq[] = array("Hur g�r jag med i en anv�ndargrupp?", "F�r att ansluta dig till en anv�ndargrupp s� klicka p� anv�ndargruppl�nken (vart den finns beror lite p�), d�r du kan se alla anv�ndargrupper. Inte alla grupper �r <i>�ppna</i>, vissa �r st�ngda och vissa kan �ven vara dolda. Om gruppen �r �ppen kan du ans�ka om att f� bli medlem genom att klicka p� l�mplig knapp. Anv�ndargruppens ledare kommer d� antingen bevilja eller avsl� din ans�kan och kan �ven fr�ga varf�r du vill bli medlem. Och tjata inte p� gruppledarna om de nekar dig medlemskap. De har s�kert sina sk�l.");
$faq[] = array("Hur blir jag ledare f�r en anv�ndargrupp?", "Anv�ndargrupper skapas initialt av administrat�rerna och de utser ocks� gruppledare. Om du �r intresserad av att skapa en anv�ndargrupp s� �r din f�rsta kontakt n�gon av administrat�rerna. Skicka ett personligt meddelande till n�gon av dem.");


$faq[] = array("--","Personliga meddelanden");
$faq[] = array("Jag kan inte skicka personliga meddelanden!", "Det finns tre sk�l till detta; du �r inte registrerad och/eller du har inte logga in, administrat�ren har inaktiverat personliga meddelanden f�r hela forumet eller s� har administrat�ren f�rhindrat just dig fr�n att skicka personliga meddelanden. Fr�ga i s� fall administrat�ren varf�r.");
$faq[] = array("Jag f�r o�nskade personliga meddelanden!", "I framtiden kommer vi (phpBB Group) att l�gga till en ignoreringslista till det personliga meddelandesystemet. Om du forts�tter att f� o�nskade meddelanden s� prata med en administrat�r, de kan f�rhindra en anv�ndare fr�n att skicka personliga meddelanden �verhuvudtaget.");
$faq[] = array("Jag har f�tt spam eller anst�tliga e-postmeddelanden fr�n n�gon p� detta forum!", "Vi �r ledsna att h�ra detta. E-postformul�ret i forumet inneh�ller skydd f�r att f�rs�ka sp�ra anv�ndare som skickar s�dana e-postmeddelanden. Du b�r kontakta administrat�rerna p� forumet och bifoga en full kopia av e-postmeddelandet du fick och det �r mycket viktigt att du bifogar e-posthuvudet (detta inneh�ller detaljerna om vilken anv�ndare som skickat e-postmeddelandet). Administrat�rerna kan d�refter vidta �tg�rder.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Ang�ende phpBB 2");
$faq[] = array("Vem har gjort detta forum?", "Denna programvara (i dess omodifierade form) �r producerad och sl�ppt av <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Den finns tillg�nglig under GNU General Public licensen och f�r distruberas fritt, se l�nken f�r mer detaljer.");
$faq[] = array("Varf�r finns inte funktion X?", "Denna programvara har gjorts och licensierats genom phpBB Group. Om du anser att en funktion b�r l�ggas till s� �r du v�lkommen att f�resl� den p� phpbb.com. Posta inte funktions�nskningar p� forumet p� phpbb.com, phpBB anv�nder sig av  sourceforge f�r att hantera funktions�nskningar. L�s igenom forumen f�r att se vad v�r �sikt om en viss funktion kanske redan �r och f�lj sedan instruktionerna som anges d�r.");
$faq[] = array("Vem kontaktar jag ang�ende juridiska �renden relaterade till detta forum?", "Kontakta administrat�ren. Om du inte kan hitta vem detta �r b�r du f�rst och fr�mst kontakta en av moderatorerna och fr�ga dem vem du ska kontakta. Om du fortfarande inte f�r n�got svar b�r du kontakta �garen av dom�nen (g�r en whois lookup) eller, om detta forum ligger p� en gratistj�nst s�som yahoo, free.fr, f2s.com, etc., deras abuse-avdelning. Kom ih�g att phpBB Group inte har n�gon som helst kontroll och kan inte p� n�got s�tt h�llas ansvariga �ver hur, var eller av vem som detta forum anv�nds. Det �r fullkomligt meningsl�st att kontakta phpBB Group ang�ende n�got juridiskt (cease and desist, liable, defamatory comment, etc.) �rende som inte �r direkt relaterat till phpbb.com. Om du e-postar phpBB Group ang�ende n�gon tredje-parts anv�nding av denna programvara s� kan du f�rv�nta dig ett f�ordigt svar eller inget svar alls.");

//
// This ends the FAQ entries
//

?>