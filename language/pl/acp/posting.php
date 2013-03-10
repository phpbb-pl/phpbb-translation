<?php
/**
*
* acp_posting.php [Polish]
*
* @package language
* @copyright (c) 2008 phpBB Group
* @author phpBB2.pl & phpBB.pl
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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

$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode jest specjalną implementacją HTML-a i oferuje lepszą kontrolę nad tym co i jak będzie wyświetlane. Na tej stronie możesz dodać, usunąć i edytować znaczniki BBCode.',
	'ACP_DISALLOW_EXPLAIN'		=> 'Tutaj możesz zarządzać nazwami, których nie będą mogli używać użytkownicy jako loginów. Możesz używać * jako znaku wieloznacznego. Proszę pamiętać, że nie można wpisać nazwy pod którą ktoś już się zarejestrował. Jeżeli taka sytuacja wystąpi, należy najpierw zmienić nazwę tego użytkownika (lub usunąć go).',
	'ACP_ICONS_EXPLAIN'			=> 'Na tej stronie możesz dodawać, usuwać oraz edytować ikony, które użytkownicy mogą dołączać do swoich tematów i postów. Ikony te są wyświetlane przed nazwą tematu na liście tematów oraz przed tytułem postu w przeglądzie tematu. Możesz także instalować oraz tworzyć nowe paczki z ikonami.',
	'ACP_RANKS_EXPLAIN'			=> 'Używając tego formularza możesz dodawać, zmieniać, przeglądać i usuwać rangi. Możesz też tworzyć specjalne rangi i przydzielać je poprzez system zarządzania użytkowników.',
	'ACP_REASONS_EXPLAIN'		=> 'Tutaj możesz zarządzać powodami używanymi w raportach i wiadomościami odmownymi dla niezaakceptowanych postów. Tutaj znajduje się jeden domyślny powód (oznaczony gwiazdką), którego nie możesz usunąć. Ten powód jest normalnie używany dla wiadomości, jeżeli żaden z powodów nie pasuje. ',
	'ACP_SMILIES_EXPLAIN'		=> 'Uśmieszki bądź emotikony są zazwyczaj małymi, czasem animowanymi obrazkami używanymi do wyrażania emocji bądź uczuć. Na tej stronie możesz dodawać, usuwać i edytować emotikony, których użytkownicy mogą używać w swoich postach i prywatnych wiadomościach. Możesz także instalować i tworzyć nowe paczki uśmieszków.',
	'ACP_WORDS_EXPLAIN'			=> 'W tym panelu możesz dodawać, edytować i usuwać słowa, które będą automatycznie ocenzurowane. Użytkownicy będą mogli nadal używać je w nazwie użytkownika podczas rejestracji. Znaki wieloznaczne (*) są dozwolone, np. *test* obejmie przetestowanie, test* obejmie testowanie, *test obejmie xxxtest.',
	'ADD_BBCODE'				=> 'Dodaj nowy znacznik BBCode',
	'BBCODE_DANGER'				=> 'Znacznik, który chcesz dodać, używa tokenu {TEXT} wewnątrz atrybutu HTML. Powoduje to podatność na zagrożenia XSS. Zamiast tego, użyj bardziej restrykcyjnych typów {SIMPLETEXT} lub {INTTEXT}. Kontynuuj tylko w przypadku, gdy rozumiesz niebezpieczeństwo i użycie tokenu {TEXT} jest absolutnie nieuniknione.',
	'BBCODE_DANGER_PROCEED'		=> 'Kontynuuj', //'Rozumiem ryzyko',
	'ADD_DISALLOW_EXPLAIN'		=> 'Możesz zabronić korzystania z jakiejś nazwy wykorzystując znak * równoważny dowolnemu ciągowi znaków',
	'ADD_DISALLOW_TITLE'		=> 'Dodaj zabronioną nazwę użytkownika',
	'ADD_ICONS'					=> 'Dodaj wiele ikon',
	'ADD_NEW_REASON'			=> 'Dodaj nowy powód',
	'ADD_RANK'					=> 'Dodaj nową rangę',
	'ADD_SMILEY_CODE'			=> 'Dodaj dodatkowy kod uśmieszka',
	'ADD_SMILIES'				=> 'Dodaj wiele uśmieszków',
	'ADD_WORD'					=> 'Dodaj nowe słowo',
	'AFTER_ICONS'				=> 'Po %s',
	'AFTER_SMILIES'				=> 'Po %s',
	'AVAILABLE_TITLES'			=> 'Dostępne przetłumaczone powody',

	'BBCODE_ADDED'				=> 'Znacznik BBCode dodany pomyślnie.',
	'BBCODE_EDITED'				=> 'Znacznik BBCode edytowany pomyślnie.',
	'BBCODE_HELPLINE'			=> 'Linia pomocy',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Ten tekst będzie wyświetlany przy najechaniu kursorem myszy na przycisk znacznika BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Tekst linii pomocy',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Wprowadzony tekst linii pomocy jest za długi.',
	'BBCODE_INVALID'			=> 'Twój znacznik BBCode został niepoprawnie skonstruowany.',
	'BBCODE_INVALID_TAG_NAME'	=> 'Wybrany przez Ciebie znacznik BBCode już istnieje.',
	'BBCODE_NOT_EXIST'			=> 'Wybrany przez Ciebie znacznik BBCode nie istnieje.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Utworzony przez Ciebie znacznik BBCode musi zawierać zarówno otwierający, jak i zamykający tag.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Wpisana definicja taga jest zbyt długa. Proszę wpisać krótszą.',
	'BBCODE_TAG_TOO_LONG'		=> 'Nazwa wybranego taga jest zbyt długa.',
	'BBCODE_USAGE'				=> 'Używanie znacznika BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Tutaj możesz zdefiniować, jak używać znacznik BBcode. Zamień wszelkie zmienne wartości poprzez odpowiedni token {%szobacz poniżej%s}',

	'CODE'						=> 'Kod',
	'CURRENT_ICONS'				=> 'Aktualne ikony',
	'CURRENT_ICONS_EXPLAIN'		=> 'Wybierz, co zrobić z zainstalowanymi ikonami.',
	'CURRENT_SMILIES'			=> 'Aktualne uśmieszki',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Wybierz, co zrobić z zainstalowanymi uśmieszkami.',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Możesz usunąć zablokowaną nazwę użytkownika, wybierając ją z tej listy i klikając Wyślij. ',
	'DELETE_DISALLOW_TITLE'		=> 'Usuń zabronioną nazwę użytkownika',
	'DISALLOWED_ALREADY'		=> 'Nazwa którą wpisałeś, nie może zostać zablokowana. Jest już wpisana na listę, jest użyta w cenzurze słów, lub już istnieje użytkownik o takiej nazwie.',
	'DISALLOWED_DELETED'		=> 'Zablokowana nazwa została pomyślnie usunięta.',
	'DISALLOW_SUCCESSFUL'		=> 'Zabroniona nazwa użytkownika została dodana pomyślnie.',
	'DISPLAY_ON_POSTING'		=> 'Wyświetlaj na stronie wysyłania postu',
	'DISPLAY_POSTING'			=> 'Na stronie postowania',
	'DISPLAY_POSTING_NO'		=> 'Nie na stronie postowania',

	'EDIT_ICONS'				=> 'Edytuj ikony',
	'EDIT_SMILIES'				=> 'Edytuj uśmieszki',
	'EDIT_WORD'					=> 'Edytuj cenzor wyrazów',
	'EMOTION'					=> 'Uśmieszki',
	'ENTER_WORD'				=> 'Musisz wpisać słowo i zamiennik.',
	'EXAMPLE'					=> 'Przykład:',
	'EXAMPLES'					=> 'Przykłady:',
	'EXPORT_ICONS'				=> 'Eksportuj i pobierz icons.pack',
	'EXPORT_ICONS_EXPLAIN'		=> '%sKlikając ten odnośnik, konfiguracja zainstalowanych przez Ciebie ikonek, będzie spakowana w plik <samp>icons.pak</samp>, który będzie mógł być użyty do utworzenia pliku <samp>.zip</samp> lub <samp>.tgz</samp>, zawierającego wszystkie Twoje ikonki, oraz plik konfiguracyjny <samp>icons.pak</samp>%s',
	'EXPORT_SMILIES'			=> 'Eksportuj i pobierz smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sPo kliknięciu w ten odnośnik, konfiguracja twoich zainstalowanych uśmieszków zostanie spakowana do pliku <samp>smilies.pak</samp>, który po ściągnięciu może zostać użyty do utworzenia pliku <samp>.zip</samp> bądź <samp>.tgz</samp> zawierającego wszystkie twoje uśmieszki i ów plik konfiguracyjny <samp>smilies.pak</samp>%s.',

	'FIRST'						=> 'Pierwszy',

	'HTML_REPLACEMENT'			=> 'Zamiennik HTML',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'Tutaj możesz ustalić domyślny zamiennik HTML. Nie zapomnij o użyciu wszystkich stworzonych wcześniej tokenów!',

	'ICONS_ADD'					=> 'Dodaj nową ikonę',
	'ICONS_ADDED'				=> 'Ikony zostały pomyślnie dodane.',
	'ICONS_CONFIG'				=> 'Konfiguracja ikon',
	'ICONS_DELETED'				=> 'Ikona została usunięta pomyślnie.',
	'ICONS_EDIT'				=> 'Edytuj ikonę',
	'ICONS_EDITED'				=> 'Ikony zostały pomyślnie zaktualizowane.',
	'ICONS_HEIGHT'				=> 'Wysokość ikony',
	'ICONS_IMAGE'				=> 'Obraz ikony',
	'ICONS_IMPORTED'			=> 'Paczka ikon została pomyślnie zainstalowana.',
	'ICONS_IMPORT_SUCCESS'		=> 'Paczka ikon została pomyślnie zaimportowana',
	'ICONS_LOCATION'			=> 'Lokalizacja ikon',
	'ICONS_NONE_ADDED'			=> 'Nie dodano żadnych ikon.',
	'ICONS_NONE_EDITED'			=> 'Nie zaktualizowano żadnych ikon.',
	'ICONS_NOT_DISPLAYED'		=> 'Następujące ikony nie są wyświetlane w oknie pisania postu',
	'ICONS_ONE_ADDED'			=> 'Ikona została dodana.',
	'ICONS_ONE_EDITED'			=> 'Ikona została zaktualizowana.',
	'ICONS_ORDER'				=> 'Kolejność ikon',
	'ICONS_URL'					=> 'Plik obrazu ikony',
	'ICONS_WIDTH'				=> 'Szerokość ikony',
	'IMPORT_ICONS'				=> 'Instaluj paczkę ikon',
	'IMPORT_SMILIES'			=> 'Instaluj paczkę uśmieszków',
	'IS_NOT_TRANSLATED'			=> 'Powód <strong>nie</strong> został zlokalizowany.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Powód <strong>nie</strong> jest przetłumaczony. Jeżeli chcesz mieć jego przetłumaczoną wersję, podaj właściwy klucz (indeks) z pliku językowego, z części, gdzie trzymane są powody raportów.',
	'IS_TRANSLATED'				=> 'Powód został zlokalizowany.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Powód został zlokalizowany. Jeżeli tytuł, który wpisałeś/aś jest zdefiniowany w sekcji powody raportów w plikach językowych, wersja przetłumaczona tytułu i opisu będzie użyta.',

	'KEEP_ALL'					=> 'Zachowaj wszystko',

	'MASS_ADD_SMILIES'			=> 'Dodaj wiele uśmieszków',
	'MUST_SELECT_RANK'			=> 'Musisz wybrać rangę.',

	'NO_ASSIGNED_RANK'			=> 'Nie przypisano rangi specjalnej',
	'NO_DISALLOWED'				=> 'Brak zabronionych nazw',
	'NO_ICONS_ADD'				=> 'Nie ma żadnych ikon do dodania.',
	'NO_ICONS_EDIT'				=> 'Nie ma żadnych ikon do zmiany.',
	'NO_ICONS_EXPORT'			=> 'Nie masz ikonek, z których mógłbyś utworzyć paczkę.',
	'NO_ICONS_PAK'				=> 'Żadna paczka ikonek nie została znaleziona.',
	'NO_RANK_TITLE'				=> 'Nie podałeś tytułu rangi.',
	'NO_REASON'					=> 'Powód nie może zostać znaleziony',
	'NO_REASON_INFO'			=> 'Musisz wpisać tytuł i opis dla tego powodu.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Nie możesz usunąć domyślnego powodu "Inne".',
	'NO_SMILIES_ADD'			=> 'Nie ma żadnych uśmieszków do dodania.',
	'NO_SMILIES_EDIT'			=> 'Nie ma żadnych uśmieszków do zmiany.',
	'NO_SMILIES_EXPORT'			=> 'Nie masz żadnych uśmieszków, więc nie możesz utworzyć paczki.',
	'NO_SMILIES_PAK'			=> 'Żadna paczka uśmieszków nie została znaleziona.',
	'NO_UPDATE_RANKS'			=> 'Ranga została pomyślnie usunięta. Jednakże, konta użytkowników używających tej rangi nie zostały uaktualnione. Będziesz musiał ręcznie zmienić rangę na tych kontach.',
	'NO_USERNAME_SPECIFIED'		=> 'Nie zaznaczyłeś/wprowadziłeś nazwy użytkownika którym chcesz manipulować.',
	'NO_WORD'					=> 'Żadne słowo nie zostało wybrane do edycji.',

	'PAK_FILE_NOT_READABLE'		=> 'Nie udało się odczytać pliku <samp>.pak</samp>.',

	'RANK_ADDED'				=> 'Ranga została dodana pomyślnie.',
	'RANK_IMAGE'				=> 'Obrazek rangi',
	'RANK_IMAGE_EXPLAIN'		=> 'Użyj tego, aby zdefiniować małe obrazek powiązany z tą rangą. Ścieżka jest względna to głównej ścieżki katalogu phpBB.',
	'RANK_IMAGE_IN_USE'			=> '(W użyciu)',
	'RANK_MINIMUM'				=> 'Minimum postów',
	'RANK_REMOVED'				=> 'Ranga została pomyślnie usunięta.',
	'RANK_SPECIAL'				=> 'Ustaw jako rangę specjalną',
	'RANK_TITLE'				=> 'Tytuł rangi',
	'RANK_UPDATED'				=> 'Ranga została edytowana pomyślnie.',
	'REASON_ADD'				=> 'Dodaj powód raportu/odmowy',
	'REASON_ADDED'				=> 'Raport/odmowa został dodany pomyślnie.',
	'REASON_ALREADY_EXIST'		=> 'Powód z tym tytułem już istnieje, wybierz inny tytuł.',
	'REASON_DESCRIPTION'		=> 'Opis powodu',
	'REASON_DESC_TRANSLATED'	=> 'Opis wyświetlanego powodu',
	'REASON_EDIT'				=> 'Edytuj powód raportu/odmowy',
	'REASON_EDIT_EXPLAIN'		=> 'Tutaj możesz dodać lub edytować powód. Jeżeli jest dostępne jego tłumaczenie, będzie użyte zamiast wpisu tutaj.',
	'REASON_REMOVED'			=> 'Powód raportu/odmowy został usunięty pomyślnie.',
	'REASON_TITLE'				=> 'Tytuł powodu',
	'REASON_TITLE_TRANSLATED'	=> 'Wyświetlany tytuł powódu',
	'REASON_UPDATED'			=> 'Powód raportu/odmowy został zmieniony pomyślnie.',
	'REPLACEMENT'				=> 'Zastępstwo',
	'REPLACE_MATCHES'			=> 'Zastępuje pasujące wyniki',

	'SELECT_PACKAGE'			=> 'Wybierz plik paczki',
	'SMILIES_ADD'				=> 'Dodaj nowy uśmieszek',
	'SMILIES_ADDED'				=> 'Uśmieszek został dodany.',
	'SMILIES_CODE'				=> 'Kod uśmieszku',
	'SMILIES_CONFIG'			=> 'Konfiguracja uśmieszków',
	'SMILIES_DELETED'			=> 'Uśmieszek został usunięty pomyślnie.',
	'SMILIES_EDIT'				=> 'Edytuj uśmieszek',
	'SMILIES_EDITED'			=> 'Uśmieszek został zaktualizowany.',
	'SMILIES_EMOTION'			=> 'Emocja',
	'SMILIES_HEIGHT'			=> 'Wysokość uśmieszku',
	'SMILIES_IMAGE'				=> 'Obrazek uśmieszku',
	'SMILIES_IMPORTED'			=> 'Paczka uśmieszków została zainstalowana pomyślnie.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Paczka uśmieszków została zaimportowana pomyślnie.',
	'SMILIES_LOCATION'			=> 'Lokalizacja uśmieszku',
	'SMILIES_NONE_ADDED'		=> 'Nie dodano żadnych uśmieszków.',
	'SMILIES_NONE_EDITED'		=> 'Nie zaktualizowano żadnych uśmieszków.',
	'SMILIES_NOT_DISPLAYED'		=> 'Następujące uśmieszki nie są wyświetlane podczas komponowania postu',
	'SMILIES_ONE_ADDED'			=> 'Uśmieszek został dodany.',
	'SMILIES_ONE_EDITED'		=> 'Uśmieszek został zaktualizowany.',
	'SMILIES_ORDER'				=> 'Kolejność uśmieszków',
	'SMILIES_URL'				=> 'Obrazek uśmieszku',
	'SMILIES_WIDTH'				=> 'Szerokość uśmieszku',
	'SMILIE_NO_CODE'			=> 'Uśmieszek â€ś%sâ€ť został zignorowany, ponieważ nie wpisano żadnego kodu.',
	'SMILIE_NO_EMOTION'			=> 'Uśmieszek â€ś%sâ€ť został zignorowany, ponieważ nie wpisano żadnej emocji.',

	'TOKEN'						=> 'Token',
	'TOKENS'					=> 'Tokeny',
	'TOKENS_EXPLAIN'			=> 'Tokeny to miejsca na wprowadzanie danych. Wprowadzone dane będą sprawdzane tylko, jeśli będą pasowały do odpowiedniej definicji. Jeśli istnieje taka potrzeba, możesz numerować je dodając numer jako ostatni znak pomiędzy klamrami, np. {TEXT1}, {TEXT2}. <br /><br />W zamiennikach HTML możesz dodać dowolny łańcuch językowy istniejący w katalogu language/, jak np. {L_<NAZWACIĄGU>}, gdzie <NAZWACIĄGU> to nazwa przetłumaczonego ciągu, którego chcesz dodać. Na przykład, {L_WROTE} będzie wyświetlane jako "wrote" lub jako jego przetłumaczony na język użytkownika odpowiednik.<br /><br /><strong>Pamiętaj, że tylko tokeny wymienione poniżej mogą być używane w BBCode.</strong>',
	'TOKEN_DEFINITION'			=> 'Co to może być?',
	'TOO_MANY_BBCODES'			=> 'Nie możesz utworzyć nowych BBCode\'ów. Proszę usuń jeden lub więcej z już istniejących i spróbuj ponownie.',
	'TOO_MANY_SMILIES'			=> 'Osiągnięto limit %d uśmieszków.',

	'UPDATE_WORD'				=> 'Uaktualnij cenzurę słów',
	'USED_IN_REPORTS'			=> 'Używane w raportach',

	'WORD'						=> 'Słowo',
	'WORD_ADDED'				=> 'Cenzura słowa została dodana pomyślnie.',
	'WORD_REMOVED'				=> 'Wybrana cenzura słów została usunięta pomyślnie.',
	'WORD_UPDATED'				=> 'Wybrana cenzura słów została uaktualniona pomyślnie.',
	'WRONG_PAK_TYPE'			=> 'Paczka nie zawiera odpowiednich danych.',

	'tokens'					=> array(
		'COLOR'					=> 'Kolor HTML może być podany zarówno w formie numerycznej <samp>#FF1234</samp>, jak i jako <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">słowo kluczowe CSS</a>, jak np. <samp>blue</samp> lub <samp>InactiveBorder</samp>',
		'EMAIL'					=> 'Poprawny adres e-mail',
		'IDENTIFIER'			=> 'Znaki z łacińskiego alfabetu (A-Z), numery, łączniki i podkreślenia',
		'LOCAL_URL'				=> 'Lokalny URL. URL musi być względny do strony tematu i nie może zawierać nazwy serwera ani protokołu.',
		'NUMBER'				=> 'Dowolna seria cyfr',
		'TEXT'					=> 'Dowolny tekst, zawierający obce znaki, numery, itd... Nie powinieneś używać tego tokena w tagach HTML. Użyj w zamian IDENTIFIER, INTTEXT albo SIMPLETEXT.',
		'SIMPLETEXT'			=> 'Znaki alfabetu łacińskiego (A-Z), cyfry, spacje, przecinki, kropki, plus, minus, myślnik i podkreślenie',
		'INTTEXT'				=> 'Znaki Unicode liter, cyfry, spacje, przecinki, kropki, plus, minus, myślnik, podkreślenie i białe spacje.',
		'URL'					=> 'Poprawny URL używający dowolnego protokołu (http, ftp, itd... nie może być użyty do exploit\'ów napisanych w języku javascript). Jeśli żaden protokół nie jest podany, "http://" dopisany zostanie na początku adresu URL.',
	),

));

?>