<?php
/***************************************************************************
 *                            lang_bbcode.php [Czech]
 *                            -----------------------
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
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array('question', 'answer');
// If you want to separate a section enter $faq[] = array('--','Block heading goes here if wanted');
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put single quotes (') in your BBCode guide entries, if you absolutely must then escape them ie. \'something\';
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//

$faq[] = array('--','Úvod');
$faq[] = array('Co je BBCode (znaèky)?', 'Znaèky jsou zvláštní pøíkazy vkládané do pøíspìvku. Možnost používat znaèky ve vašich pøíspìvcích povoluje administrátor. Mùžete si dodateènì zakázat používání znaèek v jednotlivých pøíspìvcích ve formuláøi k zaslání pøíspìvku. Znaèky jsou velmi podobné stylu HTML, pøíkazy jsou zapsány ve složených závorkách [] a uzavírají vždy nìjaký text, který se následnì chová dle tìchto pøíkazù. Znaèky vám umožní rychlé formátovaní psaného textu. Sami se tedy mùžete rozhodnout zda budete chtít používat tyto znaèky, které jsou zahrnuty ve formuláøi pro odeslání pøíspìvku èi budete používat HTML (pokud je HTML na tomto boardu povoleno).');

$faq[] = array('--','Formátování textu');
$faq[] = array('Jak vytvoøit text psaný tuènì, kurzívou èi podtrženì?', 'Znaèky obsahují pøíkazy pro rychlou zmìnu stylu vašeho textu. Mùžete se podívat jak mùžete snadno dosáhnout požadovaného výsledku.<ul><li>Pro vytvoøení tuènì psaného textu, obklopte text mezi <b>[b][/b]</b>.<br /><br />pøíklad: <b>[b]</b>Ahoj<b>[/b]</b><br />Výsledkem je: <b>Ahoj</b><br /><br /><br /></li><li>Pro podtržení textu obklopte text mezi <b>[u][/u]</b>.<br /><br />pøíklad: <b>[u]</b>Dobrý den<b>[/u]</b><br />Výsledkem je: <u>Dobrý den</u><br /><br /><br /></li><li>Pro text psaný kurzívou obklopte text mezi <b>[i][/i]</b>.<br />pøíklad: Toto je <b>[i]</b>ukázka<b>[/i]</b><br />Výsledkem je: Toto je <i>ukázka</i></li></ul>');
$faq[] = array('Jak zmìnit barvu a velikost písma?', 'Pro zmìnu barvy nebo velikosti textu je urèeno nìkolik pøíkazù. Dejte si pozor na to, jak bude výstup zobrazen v závislosti na vašem prohlížeèi a systému:<ul><li>Pro zmìnu barvy textu, obklopte požadovaný text mezi <b>[color=][/color]</b>. Mùžete použít buï názvy barev (napø. red, blue, yellow, atd.) nebo odpovídající hexadecimální kód barvy, napø. #FFFFFF, #000000. Na pøíkladu si ukážeme, jak vytvoøit èervený text:<br /><br /><b>[color=red]</b>Ahoj!<b>[/color]</b><br />nebo<br /><b>[color=#FF0000]</b>Ahoj!<b>[/color]</b><br />Výsledkem bude: <span style="color:red">Ahoj!</span><br /><br /><br /></li><li>Zmìnu velikosti textu provedeme obdobnì použitím <b>[size=][/size]</b>. Tento pøíkaz má pøeddefinované èíselné hodnoty, které mají pøiøazenu odpovídající velikosti písma v pixelech, poèínaje 1 (velice malé písmo, nejmenší viditelné) až po 29 (velmi velké). Pro ukázku:<br /><br /><b>[size=9]</b>MALÉ<b>[/size]</b><br />Výsledkem je <span style="font-size:9px">MALÉ</span><br /><br />zatímco <b>[size=24]</b>VELKÉ<b>[/size]</b><br />zobrazí <span style="font-size:24px">VELKÉ</span></li></ul>');
$faq[] = array('Je možno spojovat formátovací znaèky?', 'Ano, toto je možné, na následujícím pøíkladu si ukážeme jak správnì tyto znaèky zapsat. Je velice dùležité dodržet i jejich sled.<br /><br />Napøíklad: <b>[size=18][color=red][b]</b>Podívej se<b>[/b][/color][/size]</b><br />Výsledkem je: <span style="color:red;font-size:18px"><b>Podívej se</b></span><br /><br />Pokud nedodržíte sled ukonèení znaèek v poøadí v jakém byly vkládány, mùže být text zobrazen chybnì! Vždy je zapotøebí uzavírat znaèky ve sledu v jakém byly zadány. Podívejte se na následující ukázku kde jsou znaèky nekorektnì uzavøeny: <b>[b][u]</b>Toto je špatnì<b>[/b][/u]</b>.');

$faq[] = array('--','Citace a pevná šíøka textu pøi odeslání');
$faq[] = array('Jak vytvoøit citaci?', 'Jsou dva zpùsoby zadání citovaného textu, s uvedením autora a bez nìj.<ul><li>Když je to vhodné, mùžete použít citát k pøíspìvku, který pøidá poznámku o autorovi a text do zvláštního boxu v pøíspìvku. Text citace uzavøete mezi <b>[quote=""][/quote]</b>. Tento zpùsob pøidá k citaci poznámku koho citujete. V následujícím pøíkladu si ukážeme jak zadáme text, který vyslovil Karel Novák:<br /><b>[quote="Karel Novák"]</b>Toto je text, který vyslovil tento pán.<b>[/quote]</b><br /> Výsledkem bude automatické pøidání textu <i>Karel Novák napsal:</i> a text citace. Pokud chcete zadat text jako svùj vlastní citát pøípadnì nikoho neurèovat, zadáte jen závorky "". Tato volba není povinná.<br /><br /></li><li>Druhým zpùsobem je citovat pouze text. Požadovaný text, který chcete citovat uzavøete mezi <b>[quote][/quote]</b>. Když si zobrazíte výsledek takovéto zprávy, bude zde jen <i>napsal:</i> a text citátu.</li></ul>');
$faq[] = array('Výstup kódu nebo pevná šíøka dat', 'Jestliže chcete vložit kus kódu nebo cokoliv co vyžaduje pevnou šíøku (font typu Courier), obklopte text mezi <b>[code][/code]</b>.<br /><br />napøíklad: <b>[code]</b>echo "Toto je kód";<b>[/code]</b>');

$faq[] = array('--','Generování seznamu');
$faq[] = array('Vytváøení jednoduchého seznamu', 'Znaèky obsahují i pøíkazy pro vytváøení seznamù. Podporovány jsou dva druhy seznamù, jednoduchý a strukturovaný. Jednoduchý seznam zobrazí jednotlivé položky seznamu postupnì pod sebou oddìlené puntíkem. Pro vytvoøení seznamu použijte <b>[list][/list]</b> a definujte jednotlivé položky pomocí <b>[*]</b>. Podívejte se na následující ukázku jednoduchého seznamu:<br /><br /><b>[list]</b><br /><b>[*]</b>èervená<br /><b>[*]</b>modrá<br /><b>[*]</b>zelená<br /><b>[/list]</b><br /><br />Výsledkem by bylo:<ul><li>èervená</li><li>modrá</li><li>zelená</li></ul>');
$faq[] = array('Vytváøení strukturovaného seznamu', 'Druhým zpùsobem je vytváøení strukturovaných seznamù. Od pøedchozího typu se liší znakem pøed textem jednotlivých položek, namísto teèky je zde použit nìkterý ze dvou zpùsobù vzestupného oznaèení položek seznamu. Pro vytvoøení èíslovaného seznamu použijte <b>[list=1][/list]</b> a pro abecední seznam <b>[list=a][/list]</b>. Jednotlivé položky seznamu definujete pomocí <b>[*]</b>. Podívejte se na následující ukázku:<br /><br /><b>[list=1]</b><br /><b>[*]</b>èervená<br /><b>[*]</b>modrá<br /><b>[*]</b>zelená<br /><b>[/list]</b><br /><br />Výsledkem bude:<ol type="1"><li>èervená</li><li>modrá</li><li>zelená</li></ol><br />Pro vytvoøení abecedního seznamu použijte:<br /><br /><b>[list=a]</b><br /><b>[*]</b>první možná odpovìï<br /><b>[*]</b>druhá možná odpovìï<br /><b>[*]</b>tøetí možná odpovìï<br /><b>[/list]</b><br /><br />Výsledek:<ol type="a"><li>první možná odpovìï</li><li>druhá možná odpovìï</li><li>tøetí možná odpovìï</li></ol>');

$faq[] = array('--', 'Vytvoøení odkazu');
$faq[] = array('Odkaz na jiné webové stránky', 'phpBB znaèky podporují vytvoøení URL odkazù odkazujících se na jiné internetové stránky èi e-mailové adresy.<ul><li>Prvním zpùsobem je použít <b>[url=][/url]</b> znaèky, za znak = pak doplníte URL adresu na kterou chcete odkazovat. Text mezi obìma znaèkama bude zvýraznìn a sloužit jako odkaz na uvedenou URL adresu. Podívejte se na následující pøiklad odkazující na server phpbb.com:<br /><b>[url=http://www.phpbb.com/]</b>Stránky phpBB<b>[/url]</b><br />Tímto se vygeneruje odkaz <a href="http://www.phpbb.com/" target="_blank">Stránky phpBB</a>. Pokud kliknete na tento vytvoøený odkaz, otevøe se vám v novém oknì prohlížeèe odkaz na který smìøujete.<br /><br /></li><li>Jestliže chcete zobrazit URL pøímo jako odkaz použijte následující postup:<br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br />Tímto se vygeneruje odkaz <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a>.<br /><br /></li><li>V pøípadì zadání syntakticky správného URL i bez poèáteèního http:// do textu pøíspìvky automaticky odkaz na zadanou URL adresu. Pro ukázku si mùžete zkusit napsat do pøíspìvku www.phpbb.com a uvidíte, že se vám text ve výsledku zobrazí automaticky jako odkaz <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a>.<br /><br /></li><li>Obdobným zpùsobem se dají vytváøet i odkazy na e-mailové adresy, zadejte požadovanou e-mailovou adresu dle pøíkladu:<br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br />Výsledkem pak bude <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> nebo mùžete zadat v textu pøíspìvku no.one@domain.adr a adresa se opìt automaticky pøemìní na odkaz.</li></ul>URL odkaz mùžete zadat mezi kterékoliv další znaèky: Uzavøete-li URL mezi <b>[img][/img]</b> (viz následující kapitola) mùže být odkazem i obrázek. Pouze opìt nezapomeòte na správnou posloupnost uzavírání znaèek.<br /><br />URL adresa nesmí obsahovat mezeru, proto pokud máte takovou adresu, musíte všechny mezery nahradit znaky \'%20\' (bez uvozovek).');

$faq[] = array('--', 'Zobrazení obrázkù v pøíspìvcích');
$faq[] = array('Pøidání obrázku do pøíspìvku', 'phpBB znaèky dále umožòují vkládání obrázkù do textu pøíspìvku èi zprávy. Toto je velice užiteèná vlastnost, díky níž nemusíte odkazovat na soubory obrázkù o kterých napøíklad píšete, ale všichni uživatelé je ihned vidí ve vašem pøíspìvku. Jak bylo uvedeno výše, mùžete využít obrázku k vytvoøení URL odkazu na váš server nebo napøíklad pro zvìtšeninu malého obrázku zde v pøíspìvku. Obrázek se musí ovšem vždy nacházet na internetu a být tak dostupný pro všechny uživatele, nelze se tedy odkazovat na soubory které máte napøíklad na lokálním disku vašeho poèítaèe, jelikož k nim by uživatelé internetu nemìli pøístup. Pro zobrazení obrázku musíte uzavøít URL obrázku mezi <b>[img][/img]</b>.<br /><br />pøíklad: <b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Jestliže zadáte URL adresu obrázku mezi <b>[url][/url]</b>, mùže být odkazem obrázek.<br /><br />pøíklad: <b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br />Výsledkem bude:<br /><br /><a href="http://www.phpbb.com/" target="_blank"><img src="./templates/subSilver/images/logo_phpBB_med.gif" border="0" alt="" /></a><br /><br /><br />Prosíme, používejte obrázky pøimìøené velikosti, aby vás uživatelé se slabším pøipojením nebo menším monitorem neproklínali.');

$faq[] = array('--', 'Další záležitosti');
$faq[] = array('Mùžu si pøidat své vlastní tagy?', 'Ne, zatím to v phpBB 2 nelze. Chystáme se nabídnout možnost pøidání vlastních tagù v další verzi phpBB.');

//
// This ends the BBCode guide entries
//

?>