<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* @Polish locale 2014-07-07 18:24:32 Zespół Olympus.pl $
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Wprowadzenie'
	),
	array(
		0 => 'Co to jest BBCode?',
		1 => 'BBCode jest specjalną implementacją języka HTML, która daje lepszą kontrolę formatowania poszczególnych elementów w postach. Używanie BBCode na forum jest uzależnione od ustawień określanych przez administratora. Można wyłączyć BBCode w poszczególnych postach, zaznaczając odpowiednią funkcję w formularzu tworzenia posta. Sam BBCode jest podobny w składni do języka HTML, ale znaczniki zawarte są w nawiasach kwadratowych <code>[przykład]</code> zamiast w używanych w HTML-u nawiasach ostrych <code>&lt;przykład&gt;</code>. Każdy znacznik składa się ze znacznika otwierającego <code><strong>[</strong><span style="font-style: italic;">nazwa_znacznika</span><strong>]</strong></code> i zamykającego <code><strong>[/</strong><span style="font-style: italic;">nazwa_znacznika</span><strong>]</strong></code>, np. <code><strong>[b][/b]</strong></code>. Zależnie od używanego szablonu można w bardzo łatwy sposób dodawać znaczniki BBCode do postów, używając odpowiednich przycisków znajdujących się na górze formularza tworzenia posta.'
	),
	array(
		0 => '--',
		1 => 'Formatowanie tekstu'
	),
	array(
		0 => 'Jak utworzyć pogrubiony, pochylony lub podkreślony tekst?',
		1 => 'BBCode zawiera znaczniki umożliwiające szybką zmianę podstawowego wyglądu tekstu. Można to uzyskać w następujący sposób:<ul><li>Aby pogrubić jakiś tekst, należy wstawić go pomiędzy znaczniki <code><strong>[b][/b]</strong></code>. Przykład: <code><strong>[b]</strong>Tekst<strong>[/b]</strong></code> będzie wyświetlany jako <span style="font-weight: bold;">Tekst</span></li><li>Aby pochylić jakiś tekst, należy wstawić go pomiędzy znaczniki <code><strong>[i][/i]</strong></code>. Przykład: <code><strong>[i]</strong>Tekst<strong>[/i]</strong></code> będzie wyświetlany jako <span style="font-style: italic;">Tekst</span></li><li>Aby podkreślić jakiś tekst, należy wstawić go pomiędzy znaczniki <code><strong>[u][/u]</strong></code>. Przykład: <code><strong>[u]</strong>Tekst<strong>[/u]</strong></code> będzie wyświetlany jako <span style="text-decoration: underline;">Tekst</span>.</li></ul>'
	),
	array(
		0 => 'Jak zmienić kolor lub rozmiar tekstu?',
		1 => 'Aby zmienić kolor lub rozmiar tekstu można użyć znaczników wymienionych poniżej. Końcowy rezultat użycia znaczników formatujących zależy od używanej przeglądarki i systemu operacyjnego.<ul><li>Zmianę koloru tekstu można uzyskać poprzez zawarcie tekstu pomiędzy znacznikami <code><strong>[color=]</strong></code> i <code><strong>[/color]</strong></code>. Po znaku = należy podać nazwę koloru, np. red, blue, yellow, albo wartość szesnastkową, np. #FFFFFF, #000000. Przykładowo, aby uzyskać tekst w <span style="color: red;">kolorze czerwonym</span>, należy użyć kodu <code><strong>[color=</strong>red<strong>]</strong>kolorze czerwonym<strong>[/color]</strong></code> albo <code><strong>[color=</strong>#FF0000<strong>]</strong>kolorze czerwonym<strong>[/color]</strong></code>.</li><li>Zmianę rozmiaru tekstu można uzyskać podobnie, jak i w przypadku koloru poprzez zawarcie tekstu pomiędzy znacznikami <code><strong>[size=]</strong></code> i <code><strong>[/size]</strong></code>. Ten znacznik jest uzależniony od używanego szablonu, niemniej zalecanym formatem jest wartość liczbowa wyrażona w procentach określająca rozmiar tekstu począwszy od wartości 20 – bardzo mały, aż do 200 – bardzo duży. Na przykład, aby uzyskać <span style="font-size: 60%; line-height: normal">mały rozmiar tekstu</span>, należy użyć kodu <code><strong>[size=</strong>60<strong>]</strong>mały rozmiar tekstu<strong>[/size]</strong></code> a <span style="font-size: 150%; line-height: normal">duży rozmiar tekstu</span>, należy użyć kodu <code><strong>[size=</strong>150<strong>]</strong>duży rozmiar tekstu<strong>[/size]</strong></code>.</li></ul>'
	),
	array(
		0 => 'Czy można łączyć znaczniki formatujące?',
		1 => 'Tak, naturalnie, że można. Na przykład, aby zwrócić czyjąś uwagę można napisać: <code><strong>[size=</strong>150<strong>][color=</strong>red<strong>][b]</strong>POPATRZ NA MNIE!<strong>[/b][/color][/size]</strong></code>. Tak napisany kod zostanie wyświetlony następująco: <span style="font-size: 150%; line-height: normal; color: red; font-weight: bold">POPATRZ NA MNIE!</span> Nie zaleca się nadużywania w tekście tego typu formatowania. Proszę pamiętać o prawidłowym domykaniu znaczników – zachowaniu poprawnej ich kolejności. Na przykład następujący kod jest nieprawidłowy: <code><strong>[b][u]</strong>Tekst<strong>[/b][/u]</strong></code>. Po słowie Tekst powinien zostać użyty znacznik zamykający <code><strong>[/u]</strong></code>. Prawidłowa konstrukcja tego kodu powinna wyglądać następująco: <code><strong>[b][u]</strong>Tekst<strong>[/u][/b]</strong></code>.'
	),
	array(
		0 => '--',
		1 => 'Cytowanie i wstawianie tekstu o stałej szerokości znaków'
	),
	array(
		0 => 'Cytowanie tekstu w odpowiedziach',
		1 => 'Są dwa sposoby cytowania tekstu – z odwołaniem i bez.<ul><li>Cytując tekst podczas odpowiedzi na post, tekst posta jest dołączany do odpowiedzi w postaci bloku zawartego pomiędzy znacznikami <code><strong>[quote=&quot; &quot;][/quote]</strong></code>. Ta metoda umożliwia cytowanie z podaniem odwołania do autora posta lub innego dowolnego źródła. Na przykład, aby zacytować kawałek tekstu napisanego przez użytkownika o identyfikatorze „Adam”, należy napisać: <code><strong>[quote=&quot;</strong>Adam<strong>&quot;]</strong>Tekst, który napisał Adam<strong>[/quote]</strong></code> Wynikiem tego będzie wyświetlanie przed cytowanym tekstem frazy <strong>&ldquo;Adam pisze:</strong>. Należy <strong>obowiązkowo</strong> wstawić znaki cytowania (&quot; &quot;) wokół cytowanej nazwy źródła. W tym przypadku cytowanym źródłem jest „Adam”.</li><li>Druga metoda pozwala cytować tekst bez podawania źródła. Aby jej użyć, należy cytowany tekst umieścić między znacznikami <code><strong>[quote]</strong></code> i <code><strong>[/quote]</strong></code>. Wynikiem tak użytych znaczników cytowania będzie wyświetlanie przed cytowanym tekstem znaku <strong>&ldquo;</strong>.</li></ul>'
	),
	array(
		0 => 'Wstawianie kodu lub tekstu o stałej szerokości znaków',
		1 => 'Jeśli zachodzi potrzeba wstawienia do posta kawałka kodu lub cokolwiek, co wymaga stałej szerokości znaków, należy użyć znacznika <code><strong>[code][/code]</strong></code>. Przykład: <code><strong>[code]</strong>echo &quot;Oto jakiś kod&quot;;<strong>[/code]</strong></code>. Żadne znaki formatowania użyte między znacznikami <code><strong>[code]</strong></code> i <code><strong>[/code]</strong></code> nie będą przetwarzane podczas wyświetlania i zostaną wyświetlone w oryginalnej formie. Kolorowanie składni PHP może zostać włączone przez użycie znacznika <code><strong>[code=php][/code]</strong></code> i jest zalecane przy wysyłaniu kodu PHP, gdyż poprawia jego czytelność.'
	),
	array(
		0 => '--',
		1 => 'Tworzenie list'
	),
	array(
		0 => 'Tworzenie listy wypunktowanej',
		1 => 'BBCode umożliwia tworzenie dwóch rodzajów list: wypunktowanej i rozmieszczonej hierarchicznie. Są one w zasadzie takie same, jak ich odpowiedniki w języku HTML. Lista wypunktowana przedstawia kolejne pozycje jedna po drugiej, oznaczając każdą znakiem wypunktowania w formie kropki. Aby utworzyć listę wypunktowaną, należy użyć znacznika <code><strong>[list][/list]</strong></code> i oznaczyć każdą pozycję za pomocą znacznika <code><strong>[*]</strong></code>. Przykładowo, aby utworzyć listę ulubionych kolorów:<br /><br /><ul class="faq-block"><li>Czerwony</li><li>Niebieski</li><li>Żółty</li></ul>należy zastosować następujący kod:<br /><br /><code class="faq-block"><strong>[list]</strong><br /><strong>[*]</strong>Czerwony<br /><strong>[*]</strong>Niebieski<br /><strong>[*]</strong>Żółty<br /><strong>[/list]</strong></code><br /><br />'
	),
	array(
		0 => 'Tworzenie listy rozmieszczonej hierarchicznie',
		1 => 'Drugi typ list – rozmieszczona hierarchicznie, umożliwia kontrolę nad tym, co jest wyświetlane przed każdym elementem. Aby utworzyć listę numerowaną, należy użyć znacznika <code><strong>[list=1][/list]</strong></code>, listę alfabetyczną – <code><strong>[list=a][/list]</strong></code>. Podobnie, jak w liście wypunktowanej poszczególne elementy listy są oznaczane znacznikiem <code><strong>[*]</strong></code>. Na przykład, aby utworzyć listę numerowaną:<br /><br /><ol style="list-style-type: decimal;" class="faq-block"><li>Idź do sklepu</li><li>Kup nowy komputer</li><li>Przeklnij go, gdy się zawiesi</li></ol>należy zastosować następujący kod:<br /><br /><code class="faq-block"><strong>[list=1]</strong><br /><strong>[*]</strong>Idź do sklepu<br /><strong>[*]</strong>Kup nowy komputer<br /><strong>[*]</strong>Przeklnij go, gdy się zawiesi<br /><strong>[/list]</strong></code><br /><br />Aby utworzyć listę alfabetyczną:<br /><ol style="list-style-type: lower-alpha" class="faq-block"><br /><li>Pierwsza odpowiedź</li><li>Druga odpowiedź</li><li>Trzecia odpowiedź</li></ol>należy zastosować następujący kod:<br /><br /><code class="faq-block"><strong>[list=a]</strong><br /><strong>[*]</strong>Pierwsza odpowiedź<br /><strong>[*]</strong>Druga odpowiedź<br /><strong>[*]</strong>Trzecia odpowiedź<br /><strong>[/list]</strong></code><br /><br />'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Tworzenie odnośników'
	),
	array(
		0 => 'Odnośniki do innych stron',
		1 => 'BBCode stosowany w phpBB umożliwia tworzenie URI (Uniform Resource Indicators), znanych też pod nazwą adresów URL oraz adresów www, na kilka różnych sposobów.<ul><li>Pierwszy z nich wykorzystuje znacznik <code><strong>[url=][/url]</strong></code>. Wszystko, co zostanie wprowadzone za znakiem = zostanie uznane za adres URL. Na przykład, aby wstawić odnośnik do <code>phpBB.com</code>, gdzie opisem odnośnika będzie <a href="http://www.phpbb.com/">Odwiedź phpBB!</a> należy użyć kodu:<br /><br /><code><strong>[url=http://www.phpbb.com]</strong>Odwiedź phpBB!<strong>[/url]</strong></code>.<br /><br />Odnośnik ten będzie otwierał się w tym samym lub nowym oknie – zależnie od ustawień przeglądarki użytkownika.</li><li>Jeżeli sam adres URL ma być wyświetlany jako opis odnośnika, należy użyć takiej konstrukcji znacznika:<br /><br /><code><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong></code><br /><br /> Taki kod wygeneruje następujący odnośnik: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Dodatkowo phpBB zawiera funkcję zwaną <em><strong>magiczne odnośniki</strong></em>, która zmienia syntaktycznie (składniowo) poprawny adres URL na odnośnik, bez potrzeby dodawania jakichkolwiek znaczników lub nawet dopisywania na początku oznaczenia protokółu <code>http://</code>. Na przykład wpisanie <code>www.phpbb.com</code> w treści, zostanie automatycznie poprzedzone <code>http://</code> i stanie się odnośnikiem <a href="http://www.phpbb.com/">www.phpbb.com</a> podczas wyświetlania posta czy prywatnej wiadomości.</li><li>Podobnie jest z adresami e-mail. Można użyć znacznika BBCode <code><strong>[email][/email]</strong></code>. Adres e-mail zapisany w postaci<br /><br /><code><strong>[email]</strong>basia@domena.adr<strong>[/email]</strong></code><br /><br />będzie wyświetlany jako <a href="mailto:basia@domena.adr">basia@domena.adr</a>. Można także po prostu wpisać <code>basia@domena.adr</code>. Adres ten podczas wyświetlania posta, czy prywatnej wiadomości, jeśli nie jest wyłączona funkcja magicznych odnośników, zostanie automatycznie zamieniony, tak jak w przypadku adresów URL, na odnośnik.</li></ul>Adresy URL można wstawiać także do innych znaczników BBCode, takich jak <code><strong>[img][/img]</strong></code>, <code><strong>[b][/b]</strong></code>, itp. Zawsze należy pamiętać, aby prawidłowo otwierać i zamykać – zachować właściwą kolejność – znaczniki. Na przykład taka konstrukcja znaczników: <code><strong>[url=</strong>http://www.phpbb.com/]<strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong></code> jest <span style="color: red">nieprawidłowa</span> i może spowodować usunięcie posta, zatem należy zachować ostrożność i uważnie wstawiać znaczniki.'
	),
	array(
		0 => '--',
		1 => 'Wstawianie obrazków i załączników'
	),
	array(
		0 => 'Wstawianie obrazków do posta',
		1 => 'BBCode używane w phpBB zawiera znacznik umożliwiający wstawianie obrazków do postów. Należy jednak pamiętać o dwóch istotnych kwestiach:<ul><li>wielu użytkowników nie lubi wielu obrazków w postach</li><li>wstawiany obrazek musi być dostępny w internecie – nie może istnieć tylko na komputerze lokalnym, chyba że jest on serwerem</li></ul>Aby wstawić obrazek, należy zawrzeć jego adres URL pomiędzy znacznikami <code><strong>[img]</strong></code> i <code><strong>[/img]</strong></code>. Na przykład kod:<br /><br /><code><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong></code><br /><br />spowoduje wyświetlenie następującego obrazka:<br /><br /><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /><br /><br />Jeśli obrazek ma być odnośnikiem do jakiejś strony, należy jego adres URL umieścić pomiędzy znacznikami <code><strong>[url]</strong></code> i <code><strong>[/url]</strong></code> w następujący sposób:<br /><br /><code><strong>[url=</strong>adres_URL_strony (np. http://www.phpbb.com/)<strong>][img]</strong>adres_URL_obrazka (np. http://www.phpbb.com/theme/images/logos/blue/160x52.png)<strong>[/img][/url]</strong></code><br /><br /> Tak przygotowany odnośnik może wyglądać tak:<br /><br /><a href="http://www.phpbb.com"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	),
	array(
		0 => 'Wstawianie załączników do posta',
		1 => 'Załączniki mogą być wstawiane do postów za pomocą znacznika <code><strong>[attachment=][/attachment]</strong></code>. Aby można go było używać, funkcja załączników na forum musi być włączona przez administratora witryny i użytkownicy muszą mieć odpowiednie uprawnienia. Na stronie tworzenia posta znajduje się etykieta „Dodaj załącznik” po kliknięciu, której otwiera się formularz dodawania załączników.'
	),
	array(
		0 => '--',
		1 => 'Różne'
	),
	array(
		0 => 'Czy można dodawać własne znaczniki?',
		1 => 'Możliwość dodawania własnych znaczników mają administratorzy witryny posiadający odpowiednie uprawnienia.'
	),
);
