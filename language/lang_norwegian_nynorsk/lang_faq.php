<?php
/***************************************************************************
 *                            lang_faq.php [Nynorsk]
 *                              -------------------
 *     begin                : 16. feb 2004
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *              $Id: lang_faq.php, v 1.0.1 31. mar 2004$
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

//
// Norwegian - Nynorsk translation by Reiel Haugland.
//
// Nynorsk is one of two varations of the Norwegian language, the other is 
// "bokm�l", which normally is just refered to as norwegian. Feel free to 
// mail me at reiel@organizer.net if you have any questions concering this matter.
// 

//
// Nynorsk omsetting av Reiel Haugland. 
//
// Sp�rsm�l, kommentarar, rettingar og elles andre ting som har med denne 
// spr�kpakka � gjere, kan sendast til reiel@organizer.net, evt. leggast ut 
// i forumet p� www.phpbb.no 
// Meir informasjon i LES MEG fila som er inkludert i spr�kpakken
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
  
$faq[] = array("--", "Innlogging og registrering");
$faq[] = array("Kvifor kan eg ikkje logge inn?", "Har du registrert deg? Du m� vere registrert for � kunne logge inn. Er du utestengt fr� forumet? (Du skal ha blitt informert om dette). I tilfelle b�r du kontakte administratoren for � finne ut kvifor. Om du er registrert, ikkje er utestengt og framleis ikkje kan logge inn, dobbelsjekk at brukarnamnet og passordet er korrekt. Dette er som oftast problemet. Viss ikkje, kontakt administratoren, det kan vere ein feil med foruminstillingane.");
$faq[] = array("Kvifor m� eg registrere meg?", "Det er mogleg at du ikkje m�, det er opp til administratoren av forumet om du m� registrere deg eller ikkje for � skrive innlegg. Registrerer du deg vil du f� tilgjenge til ekstra funksjonalitet, som � velje ein avatar, sende private meldingar til andre brukarar, brukargruppemedlemskap osv. Registreringa tar berre eit par minutt og er � anbefale.");
$faq[] = array("Kvifor blir eg logga ut automatisk?", "Viss du ikkje krysser av i \"Logg meg p� automatisk kvar gong\" boksen n�r du logger inn i forumet, vil du berre vere innlogga ei viss tid. Dette er for � forhindre misbruk av brukarkontoar. Dette er ikkje � anbefale om du brukar ei datamaskin som er tilgjengeleg for andre brukarar, f.eks. eit bibliotek, internett-kaf�ar, skulenettverk osv.");
$faq[] = array("Korleis hindrar eg brukarnamnet mitt fr� � bli vist i \"Kven er i foruma\" lista?", "I profilen din vil du finne eit valg, \"Skjul onlinestatus\". Krysser du av i denne boksen, vil berre administrator og du kunne sj� deg. Du vil telje som ein skjult brukar.");
$faq[] = array("Eg har gl�ymt passordet mitt!", "Ingen grunn til panikk! Passordet ditt kan ikkje hentast fram igjen, men det kan bli nullstillt og erstatta. For � gjere dette, g� til logg inn sida og trykk p� \"Eg har gl�ymt passordet\". F�lgjer du instruksjonane p� den sida som kjem opp, f�r du tilsendt eit nytt passord.");
$faq[] = array("Eg har registrert meg, men kan ikkje logge inn!", "Sjekk fyrst at brukarnamn og passord er skrive inn riktig. Om dei er riktige, og du framleis ikkje f�r logga inn, kan ein av to ting ha skjedd. Viss COPPA-support er aktivert og du trykte \"eg er under 13 �r\" lenkja n�r du registrerte deg, m� du f�lge instruksjonane du fekk tilsendt (dette gjelder berre USA baserte forum). Om dette ikkje er problemet er det mogleg at kontoen din m� aktiverast. Nokre forum krevjer at alle nye registreringer m� aktiverast, enten av deg eller av administratoren, f�r du kan logge inn. Du skal ha f�tt beskjed ved registrering om aktivering var naudsynt. Om du mottok ein e-post om aktivering, f�lg instruksjonene. Viss du ikkje mottok ein e-post om aktivering, kan du ha skrive inn ei ugyldig e-postadresse. Hovedgrunnen til at aktivering er brukt, er � hindre at useri�se brukarar utnyttar forumet anonymt. Viss du er sikker p� at e-postadressa du oppgav er riktig, ta kontakt med administratoren.");
$faq[] = array("Eg har registrert meg tidlegare, men kan ikkje logge inn lenger?", "Den mest sannsynlege grunnen er at du har skrive inn feil brukarnamn eller passord (sjekk e-posten du mottok d� du registrerte deg) eller at administratoren har sletta kontoen din. Om det siste er tilfelle har du kanskje ikkje skrive eit einaste innlegg? Det er vanlig at administratorane sletter brukarar som ikkje skriv innlegg for � holde storleiken p� databasen nede. Pr�v og registrer deg p� nytt og bli med i nokre diskusjonar.");


$faq[] = array("--", "Brukarprofil og innstillingar");
$faq[] = array("Korleis endrer eg innstillingane mine?", "Alle innstillingane dine (om du er registrert) er lagra i databasen. For � endre dei, trykk p� \"Profil\" lenkja (vanligvis �vst p� sida). Her kan du endre alle innstillingane dine.");
$faq[] = array("Klokka er ikkje rett!", "Klokka er mest sannsynleg rett, men tida du ser kan vere i ei anna tidssone enn den du oppheld deg i. Viss dette er tilfelle kan du endre tidssona til ditt omr�d i profilen din, f.eks. London, Paris, New York, Sydney osv. Kun registrerte brukarar kan endre tidssona. Om du ikkje er registrert og ynskjer denne funksjonen, er dette eit fint tidspunkt � registrere seg p�.");
$faq[] = array("Eg har forandra tidssona, men klokka er end� feil!", "Viss du er sikker p� at du har sett rett tidssone og klokka end� er feil, er den mest sannsynlege grunnen sommartid. Forumet er ikkje designa til � handtere bytet mellom vintertid og sommartid, s� om sommaren kan klokka vere ein time feil.");
$faq[] = array("Spr�ket mitt er ikkje i lista!", "Den mest sannsynlege grunnen er anten at administratoren ikkje har installert spr�ket eller at ingen har omsett forumet til ditt spr�k. Sp�r administratoren om ho/han kan installere spr�ket, og om det ikkje finnast ei omsetting kan du gjerne lage ei! Meir informasjon finn du p� phpBB si heimeside (sj� lenkja nedst p� sida).");
$faq[] = array("Korleis viser eg eit bilete under brukarnamnet mitt?", "Det kan vere to bilete under brukarnamna n�r du ser p� innlegg. Det fyrste er eit bilete som viser rangen din, vanligvis stjerner, som viser kor mange innlegg du har skrive eller statusen din i forumet. Under dette kan det vere eit st�rre bilete som blir kalla avatar. Dette er vanlegvis eit unikt eller personleg bilete for kvar brukar. Det er opp til administratoren om avatarar skal kunne visast eller ikkje, og kva m�te du kan velje ein avatar p�. Viss du ikkje kan vise avatarer, er dette ei avgjerd administartor har tatt og viss du lurer p� kvifor, er det berre � sp�rje (det er som oftast ein god grunn).");
$faq[] = array("Korleis endrer eg rangen min?", "Rangen din er vanligvis basert p� antal innlegg, men unnatak finnst (rangen visast under brukarnamnet ditt i innlegg og i profilen, avhengig av kva stil som er velt). Rangering brukast og til og identifisere spesielle brukarar. F.eks. moderatorar og administratorar kan ha ein spesiell rang. Ver snill og ikkje utnytt forumet ved � skrive un�dig mange innlegg for � f� bedre rang, moderatorane eller administratorane vil d� senke innleggstalet ditt.");
$faq[] = array("N�r eg trykker p� e-postlenkja til ein brukar, blir eg bede om � logge inn", "Berre registrerte brukarar kan sende e-post til andre via den innebygde e-postfunksjonen (berre viss administratoren har aktivert denne funksjonen). Dette for � hindre utnytting av e-postsystemet av anonyme brukarar.");


$faq[] = array("--", "Innlegg");
$faq[] = array("Korleis skriv eg eit innlegg i forumet?", "Klikk p� den relevante knappen p� anten forum- eller emnesida. Det er mogleg at du m� registrere deg f�r du kan skrive eit innlegg. Dine rettar er lista opp nedst p� forum- og emnesidene. (F.eks. \"Du kan starte nye emner\", \"Du kan svare p� emner\" osv).");
$faq[] = array("Korleis endrer eller sletter eg eit innlegg?", "Viss du ikkje er administrator eller moderator kan du berre endre eller slette dine eigne innlegg. Du kan endre eit innlegg (nokre gonger kun for ein begrensa periode etter det er skrive) ved � klikke p� \"endre\" knappen p� innlegget. Om nokon allereie har svart p� innlegget, vil det visast ein liten tekst nederst i innlegget kor det st�r tal gonger innlegget er endra. Teksten vil ikkje kome opp viss ingen har svart p� innlegget, heller ikkje viss administratoren eller moderatorane har redigert innlegget (dei skal gje beskjed om kva dei har forandra, og kvifor). Legg merke til at vanlege brukarar ikkje kan slette eit innlegg etter at nokon har svart p� det.");
$faq[] = array("Korleis legg eg til ein signatur i innlegga mine?", "For � legge til en signatur m� du fyrst lage ein, dette gjer du i profilen din. N�r den er laga, krysser du av i \"Bruk signatur\" boksen n�r du skriv innlegget. Du kan og legge til ein signatur som standard til alle dine innlegg ved � krysse av i \"Bruk alltid signatur\" boksen i profilen din. Du kan framleis hindre at signaturen blir vist ved � ta vekk krysset i \"Bruk signatur\" boksen n�r du skriv eit innlegg.");
$faq[] = array("Korleis set eg opp ei r�ysting?", "N�r du skriv det fyrste innlegget i eit emne, ser du ein \"Legg til ei r�ysting\" boks under sj�lve innleggsboksen. Om du ikkje ser denne, har du ikkje lov til � sette opp r�ystingar. Det er administrator som avgjer om det skal vere lov, og kven som skal ha lov til dette i forumet. Du m� skrive inn ein tittel og minst to svaralternativ. For � legge til eit alternativ er det berre � skrive inn alternativet og klikke p� \"Legg til svaralternativ\" knappen. Du kan og sette ei tidsgrense for r�ystinga, skriv 0 eller lat feltet vere tomt viss du ikkje ynskjer ein sluttdato. Det er ei grense for kor mange alternativ det kan vere.");
$faq[] = array("Korleis endrer eller sletter eg ei r�ysting?", "Samme reglar som ved endring/sletting av innlegg. Om ingen har r�ysta kan brukaren slette eller endre r�ystinga. Det er berre moderatorar og administrator som kan endre eller slette r�ystingar etter at nokon har r�ysta. Dette for � hindre juks ved � endre meining under r�ystinga.");
$faq[] = array("Kvifor kan eg ikkje lese eit forum?", "Nokre forum er begrensa til nokre brukarar eller grupper. For � lese, skrive osv. er det molgleg at du treng spesielle l�yver og rettar. Moderatorar og administratoren kan gje deg desse l�yvene og rettane, og om du ynskjer dette, ta kontakt med dei.");
$faq[] = array("Kvifor kan eg ikkje r�yste i r�ystingar?", "Kun registrerte brukarar kan r�yste, dette for � hindre juks. Er du registrert og ikkje f�r r�yste, har du ikkje dei naudsynte rettane.");


$faq[] = array("--", "Formatering og emnetypar");
$faq[] = array("Kva er BBKode?", "BBKode er ein spesiell variant av HTML. Om BBKode kan brukast i forumet er opp til administratoren. Du kan sj�lv deaktiviere BBKode n�r du skriv eller endrer eit innlegg. BBKode liknar HTML i formateringa. Taggane er omslutta av firkantparenteser [ og ] i staden for < og >. Dete gjev ein bedre kontroll over korleis noko blir vist. Meir informasjon om BBKode finn du i rettleiinga p� innleggsida.");
$faq[] = array("Kan eg bruke HTML?", "Det er opp til administrator om du kan bruke HTML eller ikkje. Viss det er lov � bruke HTML vil du mest sannsynleg berre kunne bruke nokre f� taggar. Dette er en sikkerhetsfunksjon som skal hindre nokon fra � utnytte forumet ved � bruke taggar som kan �ydeleggje utsj�naden eller skape andre problem. Viss HTML er aktivert, kan du deaktivere det n�r du skriv eller endrer eit innlegg.");
$faq[] = array("Kva er eit smilefjes?", "Smilefjes er sm� bilete som kan brukast til � uttrykke kjensler ved � bruke ein kort kode, f.eks. :-) tyder glad, :-( tyder lei seg osv. Heile lista med smilefjes kan du sj� p� innleggingssida. Pr�v og begrens bruken av smilefjes, d� desse kan gjere eit innlegg uleselig. Dette kan f�re til at ein moderator fjerner dei eller sletter innlegget.");
$faq[] = array("Kan eg vise bilete?", "Du kan vise bilete i innlegga dine. Det er ingen funksjon for direkte opplasting av bilete til forumet. Du m� derfor lenkje til eit bilete som ligg p� ein offentleg internett-server, f.eks. http://www.ein-ukjent-stad.net/mitt-bilete.gif. Du kan ikkje lenkje til eit bilete p� din eigen PC (om du ikkje har ein offentleg tilgjengeleg server) eller bilete lagra bak passordbeskytta sider, som f.eks. Hotmail- eller Yahoo-e-postkontoer osv. For � vise eit bilete kan du bruke anten BBKode eller HTML.");
$faq[] = array("Kva er kunngjeringar?", "Kunngjeringar er ofte viktig informasjon og b�r lesast snarast moleg. Kunngjeringar blir vist �vst p� alle sidene i det forumet dei er lagt inn. Om det er mogleg for deg � skrive kunngjeringar, avheng av kva rettar som krevjast.");
$faq[] = array("Kva er emner med f�rerett?", "Emner med f�rerett blir vist under kunngjeringane i forumet, men berre p� den f�rste sida. Dei er som oftast viktige, og b�r lesast snarast mogleg. Om det er mogleg for deg � skrive innlegg med f�rerett, avheng av kva rettar som krevjast.");
$faq[] = array("Kva er stengte emner?", "Stengte emner er emner som har blitt l�st av moderatorane eller administratoren. Du kan ikkje svare i eit stengt emne, og eventuelle r�ystingar er avslutta. Emner kan bli stengt av mange grunnar.");


$faq[] = array("--", "Brukarniv�er og -grupper");
$faq[] = array("Kva er ein administrator?", "Ein administrator er ein enkelt brukar som er har den h�gaste grad av kontroll over heile forumet. Denne/desse brukarne kan kontrollere alle funksjoner av forumdrifta. Dette inkluderer blant anna � sette rettar, utestenge brukarar, lage brukargrupper eller moderatorar osv. Dei har og fulle moderatorrettar i alle foruma.");
$faq[] = array("Kva er ein moderator?", "Ein moderator er ein enkelt brukar, eller ei gruppe brukarar som skal overv�ke forumet fr� dag til dag. Denne/desse brukarne har f�tt tildelt rettar til � endre/slette innlegg, l�se/l�se opp, flytte, slette og dele emner i det forumet dei modererer. Vanligvis er moderatorar der for � hindre brukarar i og g� utanfor emnet eller skrive upassende eller st�ytande innlegg.");
$faq[] = array("Kva er ei brukargruppe?", "Administrator kan dele opp brukarane i brukargrupper. Kvar brukar kan tilh�yre flere grupper og kvar gruppe kan bli tildelt individuelle rettar og l�yve. Dette gjer det lett for administrator � sette opp fleire brukarar som moderatorar for eit forum, eller � gje dei rettar til � lese eit privat forum osv.");
$faq[] = array("Korleis blir eg medlem av en brukargruppe?", "For � bli medlem av en brukargruppe, klikk p� gruppelenkja. (Vanligvis �vst p� sida, avhengig av kva stil du har velt). Du kan d� sj� alle brukargruppene. Ikke alle grupper er offentlig tilgjengeleg, nokre er stengt og nokre kan til og med ha skjult medlemskap. Om gruppa er open, kan du sp�rje om � bli medlem ved � klikke p� den tilh�yrande knappen. Gruppemoderator m� fyrst godkjenne deg, og du kan f� sp�rsm�l om kvifor du vil bli medlem av gruppa. Godta gruppemoderatoren sitt svar viss du f�r avslag. Eit eventuelt avslag vil vere begrunna.");
$faq[] = array("Korleis blir eg en gruppemoderator?", "Brukargrupper blir starta av administrator som vel ein gruppemoderator. Viss du ynskjer � starte ei brukargruppe m� du ta kontakt med administratoren med ei privat melding.");


$faq[] = array("--", "Private meldingar");
$faq[] = array("Eg kan ikkje sende private meldingar!", "Det kan vere tre grunner til dette. Du er ikkje registrert og/eller ikkje innlogga, administratoren har deaktivert private meldingar for heile forumet eller administratoren har hindra deg fr� � sende meldingar. Om det siste er tilfelle, b�r du sp�rje om � f� ei grunngjeving.");
$faq[] = array("Eg f�r framleis u�nska, private meldingar!", "I framtida vil vi legge til en funksjon som gjer at du kan stoppe private meldingar fr� ein eller fleire brukarar. Om du framleis mottek u�nska private meldingar, kan du ta kontakt med administratoren. Administratoren kan, og kjem om naudsynt til, � ta i fr� brukaren retten til � sende private meldingar.");
$faq[] = array("Eg har moteke spam, upassande eller st�ytende e-post fra nokon i dette forumet!", "Dette beklager vi. E-postfunksjonen i dette forumet har en sikkerhetsfunksjon som kan hjelpe til � spore brukarar som sender denne typen meldingar. Send ein e-post til administrator med ein full kopi av e-posten du fekk. Det er veldig viktig at du inkluderer �verste delen (hodet/headeren) d� denne inneheld detaljer om kva brukar som sendte deg e-posten. Administratoren kan og vil d� gjere noko med dette.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--", "Om phpBB2");
$faq[] = array("Kven har laga dette forumskriptet?", "Denne programvara (i umodifisert form) er laga og distrubert av <a href=\"http://www.phpbb.com/\">phpBB Group</a>. Det er tilgjengelig under GNU-lisensen og kan fritt distrubuerast. Sjekk lenkja for meir informasjon. Support p� norsk: <a href=\"http://www.phpbb.no/\">phpBB.no</a>");
$faq[] = array("Kvifor er ikkje den og den funksjonen tilgjengelig?", "Denne programvara er laga av og lisensiert phpBB Group. Viss du ynskjer ein ny funksjon, kan du vitje phpbb.com og sj� kva phpBB Group har � seie om saken.");
$faq[] = array("Kven kan eg kontakte om misbruk av eller ulovlege tilstander i dette forumet?", "Du skal kontakte administratoren av dette forumet. Viss du ikkje klarer � finne ut kven det er, skal du fyrst kontakte ein av moderatorane og sp�rre ho/han om kven du skal kontakte. Viss du framleis ikkje f�r kontakt, er det eigaren av domenet som skal kontaktast. Viss forumet er p� ein gratis heimeside-tjeneste (f.eks. yahoo eller home.no.net), skal du kontakte denne tjenesten. Merk at phpBB Group ikkje har kontroll eller ansvar ovanfor kva som blir skrive i forumet. Det er derfor ingen vits i � kontakte dei.");

//
// This ends the FAQ entries
//

?>