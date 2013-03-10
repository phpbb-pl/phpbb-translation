<?php
/** 
* /help_bbcode.php [Polish]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @author phpBB2.pl & phpBB.pl
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

$help = array(
	array(
		0 => '--',
		1 => 'Wprowadzenie'
	),
	array(
		0 => 'Czym jest BBCode?',
		1 => 'BBCode jest specjalną implementacją HTML-a. To czy możesz używać BBCode w swoich postach na forum jest uzależnione od ustawień określonych  przez administratora. Możesz również wyłączyć BBCode w postach zaznaczając odpowiednią opcję w formularzu pisania postu.Sam BBCode jest stylowo podobny do HTML-a, tagi są zamykane w kwadratowych nawiasach [ i ] a w HTML używamy < i > i daje nam lepszą kontrolę nad tym co i jak będzie wyświetlane. Zależnie od szablonu jakiego używasz możesz znaleźć dodawanie BBCode do Twych postów które jest znacznie łatwiejsze dzięki przyciskom nad polem do wpisania treści posta. Więcej informacji o BBCode znajdziesz w przewodniku, do którego dostaniesz się ze strony wysyłania postu.'
	),
	array(
		0 => '--',
		1 => 'Formatowanie tekstu'
	),
	array(
		0 => 'Jak utworzyć pogrubiony, pochylony i podkreślony tekst',
		1 => 'BBCode zawiera tagi pozwalające na szybką zmianę stylu Twego tekstu. Można tego dokonać w następujące sposoby: <ul><li>By pogrubić kawałek tekstu obejmij go tymi tagami <strong>[b][/b]</strong>, np. <br /><br /><strong>[b]</strong>Witaj<strong>[/b]</strong><br /><br />da nam <strong>Witaj</strong></li><li>By podkreślić użyj <strong>[u][/u]</strong>, np.<br /><br /><strong>[u]</strong>Dzień dobry<strong>[/u]</strong><br /><br />da nam <u>Dzień dobry</u></li><li>By pochylić tekst użyj <strong>[i][/i]</strong>, np.<br /><br />To jest <strong>[i]</strong>Świetne!<strong>[/i]</strong><br /><br />da nam To jest <i>Świetne!</i></li></ul>'
	),
	array(
		0 => 'Jak zmienić kolor lub rozmiar tekstu',
		1 => 'Aby zmienić kolor lub rozmiar Twojego tekstu możesz użyć poniższych tagów. Pamiętaj, że ostateczny wygląd będzie zależał od systemu i przeglądarki oglądającego: <ul><li>Zmiana koloru następuje przez objęcie wybranego tekstu tagiem <strong>[color=][/color]</strong>. Możesz użyć zdefiniowanych nazw kolorów (np. red, blue, yellow, itd.) lub ich szesnastkowych odpowiedników, np. #FFFFFF, #000000. Przykładowo, aby utworzyć tekst o kolorze czerwonym:<br /><br /><strong>[color=red]</strong>Cześć!<strong>[/color]</strong><br /><br />lub<br /><br /><strong>[color=#FF0000]</strong>Cześć!<strong>[/color]</strong><br /><br />oba przykłady dadzą efekt <span style="color:red">Cześć!</span></li><li>Zmianę rozmiaru tekstu można osiągnąć w podobny sposób <strong>[size=][/size]</strong>. Ten tag jest zależny od szablonu wybranego przez użytkownika, ale zalecane jest użycie numerycznej wartości reprezentującej rozmiar tekstu w procentach czcionki domyślnej, począwszy od 20 aż do 200 (bardzo duże). Przykład:<br /><br /><strong>[size=30]</strong>mały<strong>[/size]</strong><br /><br />da nam <span style="font-size:30%;">mały</span><br /><br />a:<br /><br /><strong>[size=200]</strong>OGROMNY!<strong>[/size]</strong><br /><br /> da efekt <span style="font-size:200%;">OGROMNY!</span></li></ul>'
	),
	array(
		0 => 'Czy mogę połączyć kilka tagów?',
		1 => 'Tak, oczywiście możesz. Na przykład, by zwrócić czyjąś uwagę, możesz napisać tak:<br /><br /><strong>[size=150][color=red][b]</strong>Patrz na mnie!<strong>[/b][/color][/size]</strong><br /><br />co da nam <span style="color:red;font-size:250%;"><strong>Patrz na mnie!</strong></span><br /><br />Nie polecamy jednak pisać w ten sposób dużo tekstu! Pamiętaj, że to Twoim zadaniem jest, by upewnić się, że wszystkie tagi zostały zamknięte poprawnie. Na przykład, następujący zapis jest niepoprawny:<br /><br /><strong>[b][u]</strong>To jest źle<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Cytowanie oraz pisanie tekstu o stałej szerokości znaków'
	),
	array(
		0 => 'Cytowanie tekstu w odpowiedziach',
		1 => 'Są dwa sposoby, aby zacytować tekst - z odniesieniem lub bez.<ul><li>Kiedy używasz funkcji cytowania, aby odpowiedzieć na wcześniejszego posta, powinieneś zwrócić uwagę na to, żeby cytowaną treść umieścić w znacznikach <strong>[quote=""][/quote]</strong>. Ta metoda pozwala Ci na cytowanie z odniesieniem do osoby lub czegokolwiek innego, co zechcesz tam wpisać! Dla przykładu, aby zacytować tekst, który napisał Pan Janek, powinieneś wpisać:<br /><br /><strong>[quote="Pan Janek"]</strong>Tekst, który Pan Janek napisał w swoim poście.<strong>[/quote]</strong><br /><br />W wyniku zostanie automatycznie dodane <strong>Pan Janek napisał:</strong> przed zacytowanym tekstem. Pamiętaj, że imię osoby cytowanej <strong>musisz</strong> umieścić między podwójnymi cudzysłowami, ponieważ są one wymagane.</li><li>Druga metoda pozwala Ci zacytować cokolwiek bez odniesienia. Aby jej użyć, umieść tekst cytowany między znacznikami <strong>[quote][/quote]</strong>. Zobaczysz wtedy w wiadomości, że przed tekstem zostało dodane po prostu <strong>Cytat:</strong> przed zacytowanym tekstem.</li></ul>'
	),
	array(
		0 => 'Pisanie kodu lub danych o stałej szerokości znaków',
		1 => 'Jeżeli chcesz wyświetlić trochę kodu, lub inny tekst wymagający czcionki o stałej szerokości (np. Courier) powinieneś tekst umieścić w znacznikach <strong>[code][/code]</strong>, np.<br /><br /><strong>[code]</strong>echo "To jest trochę kodu";<strong>[/code]</strong><br /><br />Całe formatowanie użyte wewnątrz <strong>[code][/code]</strong> jest zachowane. Dodatkowo, może zostać użyte kolorowanie składni PHP. W tym celu użyj polecenia <strong>[code=php][/code]</strong>. Ten sposób jest polecany przy wklejaniu kodu PHP, ponieważ znacznie poprawia jego czytelność.'
	),
	array(
		0 => '--',
		1 => 'Generowanie list'
	),
	array(
		0 => 'Tworzenie listy nieuporządkowanej',
		1 => 'Wyróżnia się dwa typy list: uporządkowane i nieuporządkowane. Idea jest identyczna, jak w HTML. Lista nieuporządkowana wypisuje elementy jeden pod drugim, wyróżniając je kropką (lub innym punktorem). W celu utworzenia listy nieuporządkowanej użyj tagów <strong>[list][/list]</strong>, a elementy umieść wewnątrz, poprzedzając każdy znakiem <strong>[*]</strong>. Przykładowo, aby utworzyć listę kolorów, wpisz:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Czerwony<br /><strong>[*]</strong>Niebieski<br /><strong>[*]</strong>Żółty<br /><strong>[/list]</strong><br /><br />Co da w wyniku:<ul><li>Czerwony</li><li>Niebieski</li><li>Żółty</li></ul>'
	),
	array(
		0 => 'Tworzenie listy uporządkowanej',
		1 => 'Drugim typem list są listy uporządkowane, które dają nam kontrolę nad tym czym będzie poprzedzona każda z pozycji. By utworzyć uporządkowaną listę używamy <strong>[list=1][/list]</strong> co da nam numerowaną listę lub <strong>[list=a][/list]</strong> co da nam alfabetyczną listę. Tak jak w nieuporządkowanej liście pozycje określamy  używając <strong>[*]</strong>. Na przykład:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Idź do sklepu<br /><strong>[*]</strong>Kup nowy komputer<br /><strong>[*]</strong>Zaklnij gdy komputer ulegnie awarii<br /><strong>[/list]</strong><br /><br />wygeneruje:<ol type="1"><li>Idź do sklepu</li><li>Kup nowy komputer</li><li>Zaklnij gdy komputer ulegnie awarii</li></ol>Podczas gdy dla alfabetycznej listy używamy:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Pierwsza możliwa odpowiedź<br /><strong>[*]</strong>Druga możliwa odpowiedź<br /><strong>[*]</strong>Trzecia możliwa odpowiedź<br /><strong>[/list]</strong><br /><br />co da nam:<ol type="a"><li>Pierwsza możliwa odpowiedź</li><li>Druga możliwa odpowiedź</li><li>Trzecia możliwa odpowiedź</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Tworzenie linków'
	),
	array(
		0 => 'Link do innej strony',
		1 => 'phpBB umożliwia wiele sposobów tworzenia URI (Uniform Resource Indicators), szerzej znanych jako URL.<ul><li>Pierwszym jest zastosowanie tagu <strong>[url=][/url]</strong>; cokolwiek zostanie wpisane po znaku =, zostanie potraktowane jako URL. Na przykład chcąc uzyskać link do phpBB.com możesz napisać:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Odwiedź phpBB.com!<strong>[/url]</strong><br /><br />Powyższy kod spowoduje wygenerowanie linka: <a href="http://www.phpbb.com/">Odwiedź phpBB.com!</a>. Zauważ, że link tego typu otwiera się  w nowym oknie lub w tym samym oknie, zależnie od ustawień przeglądarki użytkowników.</li><li>Jeżeli chcesz, aby cały adres URL wyświetlony został jako link, użyj znacznika w sposób podany poniżej:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Powyższy kod spowoduje wygenerowanie linka: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Ponadto skrypt phpBB zawiera funkcję Magic Links, która zmienia podany adres na jego poprawną formy bez użycia żadnych dodatkowych tagów czy nawet frazy http://. Na przykład wpisanie www.phpbb.com w poście automatycznie spowoduje wygenerowanie linka <a href="http://www.phpbb.com/">www.phpbb.com</a>.</li><li>Tak samo ma się sprawa z adresami e-mail. Możesz wykorzystać tag, na przykład:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />co da następujący wynik: <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>, lub wpisać jedynie no.one@domain.adr w treści wiadomości a zostanie on automatycznie przerobiony na link.</li></ul>Nic nie stoi na przeszkodzie, aby wykorzystać wspomniane tagi w połączeniu z innymi np. <strong>[img][/img]</strong> (czytaj dalej), <strong>[b][/b]</strong>, itp. Oczywiście podobnie jak przy tagach formatujących tekst należy upewnić się, czy wszystkie są odpowiednio pozamykane na przykład:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />jest <span style="text-decoration: underline">błędną</span> formą, która może spowodować że Twój post zostanie usunięty.'
	),
	array(
		0 => '--',
		1 => 'Pokazywanie obrazków w postach'
	),
	array(
		0 => 'Wstawianie obrazka do postu',
		1 => 'BBCode w phpBB pozwala na umieszczanie obrazów w postach. Wiążą się z tym jednak dwie bardzo ważne kwestie, o których należy pamiętać: po pierwsze, wielu użytkowników nie lubi, gdy posty są wypełniane dużą ilością obrazów; po drugie, obraz musi znajdować się już w Internecie (nie może znajdować się wyłącznie na Twoim komputerze, chyba że jest to serwer WWW). Aby wyświetlić obrazek musisz otoczyć jego adres URL znacznikami <strong>[img][/img]</strong>. Na przykład:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Jak zostało zaznaczone w sekcji powyżej, mo��esz z obrazu uczynić odsyłacz, umieszczając go między tagami <strong>[url][/url]</strong>, np.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />wyświetli się jako:<br /><br /><a href="http://www.google.com/" target="_blank"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Dodawanie załączników do postu',
		1 => 'Załączniki mogą teraz być umieszczane w jakiejkolwiek części postu dzięki nowemu BBCode <strong>[attachment=][/attachment]</strong>, jeżeli załączniki są dozwolone przez administrację forum i jeżeli masz odpowiednie uprawnienia. Podczas pisania postu jest dostępna rozwijana lista do umieszczania załączników wstawionych.'
	),
	array(
		0 => '--',
		1 => 'Inne zagadnienia'
	),
	array(
		0 => 'Czy mogę dodawać własne tagi?',
		1 => 'Jeżeli jesteś administratorem tego forum i masz odpowiednie uprawnienia, możesz dodawać nowe BBCode poprzez sekcję własnych BBCode.'
	)
);

?>