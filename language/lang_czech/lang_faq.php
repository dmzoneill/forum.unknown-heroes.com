<?php
/***************************************************************************
 *                            lang_faq.php [Czech]
 *                            --------------------
 *     characterset         : Windows-1250
 *     phpBB version        : 2.0.19
 *     copyright            : © 2005 The phpBB CZ Group
 *     www                  : http://www.phpbbcz.com
 *     last modified        : 30. 12. 2005
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
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array('question', 'answer');
// If you want to separate a section enter $faq[] = array('--','Block heading goes here if wanted');
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put single quotes (') in your FAQ entries, if you absolutely must then escape them ie. \'something\';
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//


$faq[] = array('--','Registrace a pøihlášení');
$faq[] = array('Proè se nemohu pøihlásit?', 'U jste se zaregistrovali? Pøed pøihlášením je nutné se nejdøíve registrovat. Byla vám na fóru zakázána èinnost (v takovém pøípadì se tato skuteènost zobrazí)? Pokud ano, kontaktujte administrátora a ptejte se na dùvody. Pokud jste se registrovali, nebyli jste z fóra vylouèeni a stále se nemùete pøihlásit, znovu zkontrolujte pøihlašovací jméno a heslo. Obvykle toto bıvá ten problém a pokud není, kontaktujte administrátora, moná má chybné nastavení fóra.');
$faq[] = array('Je vùbec potøeba se registrovat?', 'Nemusíte. Vše je na administrátorovi fóra, zda je potøeba se registrovat ke vkládání pøíspìvkù. Samozøejmì, e registrace vám dá pøístup k ostatním slubám nedostupnım anonymním uivatelùm, jako napø. postavièky, soukromé zprávy, posílání e-mailù uivatelùm, pøihlášení do skupin, atd. Vøele vám tedy registraci doporuèujeme. Zabere to jen pár chvil.');
$faq[] = array('Proè jsem automaticky odhlášen?', 'Pokud nezaškrtnete tlaèítko <i>Pøihlásit automaticky pøi pøíští návštìvì</i>, budete pøihlášeni jen po dobu práce na fóru. Toto má zabránit zneuití vašeho úètu nìkım jinım. Abyste zùstali pøihlášeni, zaškrtnìte toto políèko, kdy se pøihlašujete. Toto ovšem nedoporuèujeme, kdy se pøihlašujete z veøejného poèítaèe, napø. v knihovnì, internetové kavárnì, univerzitì atd.');
$faq[] = array('Jak zabráním, aby se moje uivatelské jméno objevilo v seznamu právì pøihlášenıch?', 'Ve vašem nastavení najdìte monost <i>Skrıt vaši pøítomnost ve fóru</i>, pokud tuto monost <i>zvolíte</i> budete viditelní jen pro administrátory nebo sami sobì. Budete poèítáni jako skrytı uivatel.');
$faq[] = array('Zapomnìl jsem heslo!', 'Nepanikaøte! Vaše heslo mùeme obnovit. V tomto pøípadì zmáèknìte na pøihlašovací stránce tlaèítko <i>Zapomnìl jsem svoje heslo</i>, pokraèujte dle instrukcí a témìø ihned budete pøihlášeni');
$faq[] = array('Zaregistroval jsem se, ale nemohu se pøihlásit!', 'Nejprve zkontrolujte, e zadáváte správné uivatelské jméno a heslo. Pokud jsou v poøádku, pak se mohla odehrát jedna z následujících dvou vìcí. Pokud je umonìna podpora COPPA a klikli jste pøi registraci na odkaz <i>... a je mi ménì ne 13 let</i>, budete muset následovat zaslané instrukce. Pokud toto není ten pøípad, pak váš úèet musí bıt aktivován. Nìkteré boardy vyadují aktivaci všech novıch registrací, buï Vámi, nebo administrátorem pøed tím, ne se budete moci pøihlásit. Kdy jste se registrovali, byli byste k tomuto vyzváni. Pokud vám byl zaslán e-mail, následujte instrukce v nìm obsaené, pokud jste tento email neobdreli, ujistìte se, e vámi zadaná emailová adresa je platná. Jedním dùvodem, proè se aktivace pouívá, je zmenšit monost vıskytu <i>neádoucích</i> uivatelù, kteøí se snaí pouze obtìovat. Pokud si jste jisti, e e-mailová adresa, kterou jste pouili je platná, kontaktujte administrátora boardu.');
$faq[] = array('V minulosti jsem se zaregistroval, ovšem nyní se nemohu pøihlásit?!', 'Nejpravdìpodobnìjší dùvody: zadali jste chybné uivatelské jméno nebo heslo (zkontrolujte e-mail, kterı jste obdreli pøi registraci) nebo administrátor z nìjakého dùvodu smazal váš úèet. Pokud je to ten druhı pøípad, pak jste moná nevloili ádnı pøíspìvek. Je to obvyklé, e se pravidelnì odstraòují uivatelé, kteøí nièím nepøispìli, aby se zmenšila velikost databáze. Zkuste se zaregistrovat znovu a zapojte se do diskuzí.');

$faq[] = array('--','Uivatelská nastavení');
$faq[] = array('Jak zmìním svoje nastavení?', 'Všechna vaše nastavení (pokud jste registrováni) jsou uloena v databázi. Ke zmìnì staèí kliknout na odkaz <i>Profil</i> (obvykle se nachází v horní èásti stránky, ale nemusí to bıt pravidlem). Takto si mùete zmìnit veškerá svá nastavení.');
$faq[] = array('Èasy jsou špatnì!', 'Èasy jsou témìø vdy v poøádku, ovšem to, co vidíte jsou èasy zobrazené v jiném èasovém pásmu ne v tom, ve kterém se nacházíte. Pokud je to tak, zmìòte si èasové pásmo v profilu. Berte na vìdomí, e zmìnou èasového pásma a podobná nastavení mohou mìnit jen registrovaní uivatelé. Take pokud nejste registrováni, toto je dobrı dùvod tak uèinit!');
$faq[] = array('Zmìnil jsem èasové pásmo, ale je to stále špatnì!', 'Jste si jisti, e jste zadali èasové pásmo správnì, a pøesto se liší od toho správného, pak tou nejpravdìpodobnìjší odpovìdí je, e se jedná o letní èas. Fórum není stavìno na uplatòování rozdílu mezi standardním a letním èasem, take se mùe jednat o 1 hodinovı rozdíl. Øešením mùe bıt posunutí èasového pásma o jednu hodinu po dobu trvání letního èasu.');
$faq[] = array('Mùj jazyk není na seznamu!', 'Zøejmì administrátor nenainstaloval tento jazyk, nebo jej nikdo do tohoto jazyka zatím nepøeloil. Kontaktujte administrátora, pøípadnì si pøeklad vytvoøte sami. Pro více informací se podívejte na stránky <a href="http://www.phpbb.com" target="_blank">phpBB Group</a>.');
$faq[] = array('Jak zobrazím obrázek pod uivatelskım jménem?', 'Moná, e jste zaregistrovali pøi prohlíení pøíspìvkù dva obrázky pod uivatelskım jménem. Ten první je obrázek spojenı s vaší úrovní, obvykle ve tvaru hvìzdièek nebo kostièek ukazující, kolik pøíspìvkù jste ji pøidali nebo vaší pozici ve fóru. Pod ním se mùe nacházet vìtší obrázek, známı jako "postavièka" (avatar), co je vlastnì unikátní obrázek kadého uivatele. Záleí na administrátorovi, zda postavièky povolí èi jak s nimi naloí (v jaké podobì se zobrazí). Pokud nemùete vyuívat postavièky, pak právì tehdy toto administrátoøi zakázali, a vy byste se mìli zeptat na dùvody (vìøíme, e se hodí).');
$faq[] = array('Jak zmìní svoje zaøazení?', 'Obecnì vzato, svoje zaøazení pøímo zmìnit nemùete (úrovnì se objevují pod vaším uivatelskım jménem v tématech a na vašem profilu, co záleí na pouitém vzhledu). Vìtšina boardù pouívají hodnocení úrovní k rozlišení poètu vámi pøidanıch pøíspìvkù a k identifikaci urèitıch uivatelù, napø. oznaèení moderátorù a administrátorù mùe mít zvláštní vzhled. Prosím, nezatìujte board zbyteènım pøispíváním jen, abyste dosáhli vyšší úrovnì. Moderátor nebo administrátor pak mùe poèet vašich pøíspìvkù sníit.');
$faq[] = array('Kdy kliknu na e-mailovı odkaz uivatele, jsem vyzván k pøihlášení!', 'Pouze registrovaní uivatelé mohou posílat e-mail lidem pøes nastavenı e-mailovı formuláø (pokud administrátor tuto monost povolil). Toto opatøení umoòuje zbavit se otravnıch anonymních vzkazù a robotù, které sbírají e-mailové adresy.');

$faq[] = array('--','Vkládání pøíspìvkù');
$faq[] = array('Jak vloím téma do fóra?', 'Jednouše. Kliknìte na pøíslušné tlaèítko na obrazovce fóra nebo tématu. Moná bude nutné se registrovat, ne budete moci pøispìt do diskuze. To, co vám je povoleno mùete vidìt na spodní èásti fóra nebo tématu (Napø. <i>Mùete pøidat nová téma do tohoto fóra, Mùete hlasovat v tomto fóru, atd.</i>).');
$faq[] = array('Jak zmìním nebo smau pøíspìvek?', 'V pøípadì, e nejste moderátor nebo administrátor, tak mùete upravovat nebo mazat jen svoje pøíspìvky. Mùete upravit zprávu (nìkdy jen do omezeného èasu po pøispìní) kliknutím na tlaèítko <i>upravit</i>. Pokud ji nìkdo odpovìdìl na váš pøíspìvek a vy ho upravíte, objeví se vám malinkı dodatek u pøíspìvku, kterı ukazuje, kolikrát jste tento pøíspìvek upravovali. Tento dodatek se neobjeví, pokud zatím nikdo neodpovìdìl nebo pokud moderátor èi administrátor zmìnili pøíspìvek (ti by mìli sami zanechat vzkaz proè jej zmìnili). Normální uivatelé nemohou pøíspìvek smazat, pokud na nìj ji nìkdo odpovìdìl.');
$faq[] = array('Jak pøidám podpis k mému pøíspìvku?', 'Pøidat podpis znamená, e si musíte nejdøív nìjakı vytvoøit. To udìláte pøes stránku <i>Profil</i>. Podpis mùete pøidat k právì psanému pøíspìvku zatrením poloky <i>Pøipojit podpis</i>. Mùete rovnì pøidat stejnı podpis pro všechny vaše pøíspìvky zaškrtnutím pøíslušného políèka v nastavení profilu (je moné nepøidávat podpis k vybranım pøíspìvkùm odstranìním tohoto zaškrtnutí).');
$faq[] = array('Jak vytvoøím hlasování?', 'Vytvoøení hlasování je jednoduché. Kdy pøidáte novı pøíspìvek (nebo upravujete první pøíspìvek, pokud mùete) mìli byste vidìt tlaèítko <i>Pøidat hlasování</i> pod hlavním oknem na pøidávání pøíspìvkù (pokud to nevidíte, zøejmì nemáte oprávnìní vytváøet ankety). Mìli byste zadat název ankety a pak alespoò dvì monosti (nastavte napsáním název otázky a kliknìte na <i>Pøidat odpovìï</i>. Mùete také pøidat èasovı limit pro anketu, kde 0 znamená neomezenou volbu. Poèet odpovìdí, které mùete zadat, urèuje administrátor boardu.');
$faq[] = array('Jak zmìním nebo smau hlasování?', 'Je to stejné jako s pøíspìvky, hlasování mohou bıt upravována pùvodním autorem, moderátorem nebo administrátorem. Úpravu zahájíte kliknutím na první pøíspìvek v tématu (toto je vdy s hlasováním spojeno). Pokud nikdo zatím nehlasoval, pak uivatelé mohou vymazat nebo zmìnit poloku v hlasování, v pøípadì ji uskuteènìné volby to tak mùe uèinit jen moderátor nebo administrátor. Tímto opatøením se snaíme zabránit manipulaci s vısledky hlasování.');
$faq[] = array('Proè se nemohu dostat k fóru?', 'Nìkterá fóra mohou bıt znepøístupnìna urèitım lidem èi skupinám. Ke ètení, prohlíení, pøispívání atd. potøebujete  zvláštní autorizaci, kterou mùe poskytnout jen moderátor a administrátor, take kontaktujte je.');
$faq[] = array('Proè nemohu hlasovat v anketì?', 'Hlasovat mohou jen registrovaní uivatelé (aby nebyly zkresleny vısledky). Pokud jste registrováni a stále nemùete volit, zøejmì nemáte oprávnìnı pøístup nebo je hlasování ji ukonèeno.');

$faq[] = array('--','Formátování a typy pøíspìvkù');
$faq[] = array('Co je BBCode?', 'BBCode je zvláštní implementace HTML. O jeho pouití rozhoduje administrátor (mùete toto nepovolit pro jednotlivé pøíspìvky). BBCode sám o sobì je podobnı stylu HTML, tagy jsou uzavøeny v hranatıch závorkách [ a ] a nabízí vìtší kontrolu nad tím, co a jak se zobrazí. Pro více informací o BBCode si prohlédnìte <a href="./faq.php?mode=bbcode">prùvodce</a>.');
$faq[] = array('Mùu pouívat HTML?', 'To závisí na tom, zda vám to administrátor povolí. Pokud to máte povoleno, zjistíte, e jen nìkteré tagy fungují, co je <i>bezpeènostní</i> funkce, která zamezí zneuití nebo znièení vzhledu èi zpùsobení jinıch problémù. Pokud je HTML povoleno, mùete zase pøíspìvek od pøíspìvku tuto volbu zakázat.');
$faq[] = array('Co to jsou smajlíky?', 'Smajlíky, neboli emotikony jsou malé grafické obrázky, které se pouívají k vyjádøení vırazu emocí za pouití malého kódu, napø. :) znamená šastnı, :( znamená smutnı. Kompletní seznam smajlíkù si mùete prohlédnout pøes pøíspìvkovı formuláø. Prosím, snate se tyto smajlíky nepøeuívat, aby se pøíspìvek nestal neèitelnım. Moderátor mùe také pøípadnì váš pøíspìvek v tomto smìru zmìnit.');
$faq[] = array('Mohu pøidávat obrázky?', 'Obrázky se mohou zobrazovat ve vašich pøíspìvcích, aèkoliv v souèasné dobì neexistuje ádná funkce k nahrání obrázkù pøímo na board. Z tohoto dùvodu musíte uvést na takovı obrázek odkaz, napø. http://www.nekde-na-internetu.cz/muj-obrazek.png. Nemùete vytváøet odkazy na obrázky umístìné na vlastním PC (pokud to není veøejnì pøístupná stanice) nebo obrázky za provìøujícími mechanismy, napø. schránky hotmail nebo yahoo, zaheslované odkazy, atd. K zobrazení obrázku pouijte buï BBCode [img] tag nebo pøíslušné HTML (je-li povoleno).');
$faq[] = array('Co to jsou oznámení?', 'Oznámení èasto pøinášejí dùleité informace a mìli byste je èíst co nejdøíve. Oznámení se objevují na horní èásti kadé stránky fóra, kde jsou uvedeny. Zda mùete èi nemùete pøidávat oznámení do fóra, záleí na tom, zdali vám to administrátor umonil.');
$faq[] = array('Co to jsou dùleitá témata?', 'Dùleitá témata se objevují na fóru hned pod oznámeními, ale pouze na první stránce. Jsou èasto velmi dùleitá, take si je pøeètìte tam, kde jsou. Stejnì jako u oznámení rozhoduje administrátor, kteøí uivatelé mají právo pøidávat dùleitá témata.');
$faq[] = array('Co to jsou uzamèená témata?', 'Témata mohou bıt uzamèena moderátorem nebo administrátorem. Nemùete odpovídat na zamèená témata ani upravovat své pøíspìvky. Kadé hlasování je automaticky ukonèeno. Témata mohou bıt uzamèena z mnoha rùznıch dùvodù.');

$faq[] = array('--','Uivatelské úrovnì a skupiny');
$faq[] = array('Kdo jsou administrátoøi?', 'Administrátoøi jsou lidé povìøení nejvyšší kontrolou nad celım fórem. Tito lidé mohou kontrolovat veškerı chod boardu vèetnì povolování, zakazování uivatelù, vytváøení uivatelskıch skupin nebo moderátorù, atd. Mají také všechny pravomoci moderátorù na celém boardu.');
$faq[] = array('Kdo jsou moderátoøi?', 'Moderátoøi jsou jednotlivci (nebo skupiny jednotlivcù), jejich práce je starat se o chod fóra kadı den. Mají právo upravovat nebo mazat pøíspìvky, zamykat/odemykat, pøesouvat, mazat a rozdìlovat témata, která spravují. Obecnì øeèeno, moderátoøi jsou od toho, aby lidé nepøispívali <i>mimo téma</i> nebo nepøidávali otravnı materiál.');
$faq[] = array('Co jsou uivatelské skupiny?', 'Uivatelské skupiny jsou cestou, kterou administrátoøi mohou seskupovat uivatele. Kadı uivatel mùe patøit do nìkolika skupin a kadé skupinì mùe bıt definován individuální pøístup. To umoòuje administrátorùm snáze nastavit nìkolik uivatelù jako moderátory fóra nebo jim dát pøístup na soukromé fórum, atd.');
$faq[] = array('Jak se mohu zapojit do uivatelské skupiny?', 'Pøipojit se do uivatelské skupiny staèí kliknout na odkaz <i>Uivatelské skupiny</i> (vìtšinou se nachází v horní èásti stránky, ale nemusí to bıt pravidlem) a pak si mùete prohlédnout všechny skupiny. Ne všechny skupiny mají <i>otevøenı pøístup</i>, nìkteré jsou uzavøené a nìkteré mají utajené èlenství. Pokud je skupina otevøená, mùete zaádat o zaøazení kliknutím na pøíslušné tlaèítko. Moderátor uivatelské skupiny musí vaši ádost schválit a mùe se vás zeptat na dùvody, proè chcete do skupiny vstoupit. Prosím, nenadávejte moderátorovi, pokud vaší ádosti nevyhoví. Má svùj dùvod.');
$faq[] = array('Jak se stanu moderátorem uivatelské skupiny?', 'Uivatelské skupiny jsou pùvodnì vytvoøeny administrátorem a mohou také ustanovit moderátora. Máte-li zájem vytvoøit uivatelskou skupinu, pak jako prvního kontaktujte administrátora soukromou zprávou.');

$faq[] = array('--','Soukromé zprávy');
$faq[] = array('Nemùu posílat soukromé zprávy!', 'Pro toto existují tøi hlavní dùvody. Nejste registrovaní nebo nejste pøihlášení, administrátor zakázal posílání soukromıch zpráv pro celı board nebo to administrátor zakázal pøímo vám. Pokud je toto ten dùvod, zeptejte se administrátora, proè to tomu tak je.');
$faq[] = array('Dostávám nechtìné soukromé zprávy!', 'Plánujeme pøidání seznamu ignorovanıch uivatelù v systému zasílání soukromıch zpráv. Nyní, pokud dostáváte takové zprávy, kontaktujte svého administrátora, kterı má tu moc takovému uivateli zasílání zpráv zakázat.');
$faq[] = array('Dostal jsem spamovı a obtínı e-mail od nìkoho z fóra!', 'To je nám líto. Pøíspìvkové formuláøe obsahují obranné mechanismy, kterımi se snaíme vystopovat takového uivatele. Mìli byste napsat administrátorovi a zaslat kopii e-mailu, kterı jste obdreli, co je velmi dùleité (kvùli hlavièce, která potøebné informace obsahuje). Oni pak mohou konat.');


//
// These entries should remain in all languages and for all modifications
//
$faq[] = array('--','Záleitosti okolo phpBB 2');
$faq[] = array('Kdo napsal tento program?', 'Tento software (v její nemodifikované formì) je vytvoøen, zveøejnìn a chránìn autorskımi právy <a href="http://www.phpbb.com/" target="_blank">phpBB Group</a>. Je dostupnı pod the GNU General Public Licence a mùe bıt volnì distribuován. Pro více informací kliknìte <a href="http://www.phpbb.com/" target="_blank">zde</a>.');
$faq[] = array('Proè není k dispozici funkce X?', 'Tento software byl napsán a licencován pøes phpBB Group. Máte-li dojem, e je potøeba pøidat nìjakou funkci, navštivte stránku <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com</a> a ovìøte si, co phpBB Group øekne. Prosím, nevkládejte tyto poadavky na fórum phpbb.com, phpBB Group pouívá sourceforge ke zkoušení novıch moností. Prosím, proètìte si fóra a ovìøte si, zda u se nìco takového nezkoušelo a následujte pøíslušné instrukce.');
$faq[] = array('Koho mám kontaktovat ohlednì obtínıch e-mailù nebo právních záleitostí boardu?', 'Mìli byste kontaktovat administrátora tohoto boardu. Jestlie ho nemùete najít, zkuste nejprve kontaktovat moderátora fóra a pøeptejte se na kontakt. Pokud se nic nedìje, kontaktujte majitele domény (zkuste vyhledat na "whois") nebo, pokud tato sluba bìí na freeserveru (napø. yahoo, free.fr, webzdarma, atd.), management nebo oddìlení stíností tohoto provozovatele. Berte na vìdomí, e phpBB Group nemá vùbec ádnou moc a nemùe nijak ovlivnit to jak, kdo a kde spravuje board. Je tedy absolutnì bezpøedmìtné kontaktovat phpBB Group v jakékoliv právní záleitosti (nactiutrhání, pomluvy, atd.) nepøímo spojenı s phpbb.com nebo se samotnım software phpBB. Pokud zašlete e-mail phpBB Group o pouití softwaru tøetí stranou, neoèekávejte ádnou odpovìï.');


//
// This ends the FAQ entries
//
?>