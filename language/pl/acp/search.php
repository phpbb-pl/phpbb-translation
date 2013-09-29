<?php
/** 
*
* acp_search [Polski]
*
* @package language
* @version $Id: search.php 9438 2009-04-11 11:09:45Z acydburn $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 9438 2010-11-16 19:36:21 Zespół Olympus.pl $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Tutaj można zarządzać mechanizmami indeksowania wyszukiwania. Jeżeli jest używany tylko jeden mechanizm, należy usunąć nieużywane indeksy. Po zmianie niektórych ustawień wyszukiwania, np. minimalnej/maksymalnej liczby znaków, powinno się wykonać ponowne indeksowanie.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Tutaj można określić, co mechanizm wyszukiwania będzie używał do indeksowania postów i przeprowadzania wyszukiwania. Można ustawić różne opcje, które mogą wpływać na czas potrzebny na wykonanie powyższych zadań. Niektóre z tych opcji są takie same dla wszystkich mechanizmów wyszukiwania.',

	'COMMON_WORD_THRESHOLD'					=> 'Próg popularności słowa ',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Wyrazy mające najwyższy procentowy udział w ogólnej liczbie postów zostaną uznane za popularne. Wyrazy te są pomijane podczas wyszukiwania. Wprowadź zero, aby wyłączyć tę funkcję. Funkcja ta działa, gdy jest więcej niż 100 postów. Jeśli chcesz, aby słowa uznane za popularne były ponownie uwzględniane podczas wyszukiwania, musisz wykonać ponowne indeksowanie.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Czy na pewno chcesz zmienić mechanizm wyszukiwania? Zmiana mechanizmu wymaga stworzenia nowego indeksu dla nowego mechanizmu. Jeśli nie planuje się powrotu do poprzedniego mechanizmu wyszukiwania można usunąć stary indeks, aby zwolnić zasoby systemu.',
	'CONTINUE_DELETING_INDEX'				=> 'Kontynuuj proces usuwania poprzedniego indeksu',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Proces usuwania indeksu został rozpoczęty. Aby uzyskać dostęp do strony indeksu wyszukiwania, należy zakończyć lub anulować proces.',
	'CONTINUE_INDEXING'						=> 'Kontynuuj poprzedni proces indeksowania',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Rozpoczęto proces indeksowania. Aby uzyskać dostęp do strony indeksu wyszukiwania, należy zakończyć lub anulować proces.',
	'CREATE_INDEX'							=> 'Utwórz indeks',

	'DELETE_INDEX'							=> 'Usuń indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Trwa usuwanie indeksu…',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Mechanizm wyszukiwania czyści teraz swój indeks. Może to potrwać kilka minut.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Mechanizm wyszukiwania pełnotekstowego MySQL może być użyty tylko z wersją MySQL4 i nowszymi.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'				=> 'Mechanizm wyszukiwania pełnotekstowego MySQL może być użyty tylko z tabelami MyISAM lub InnoDB. MySQL 5.6.4 i nowsze wersje dla wyszukiwania pełnotekstowego wymagają tabel InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Liczba zindeksowanych postów',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Wsparcie dla nie łacińskich znaków w kodowaniu UTF-8 za pomocą mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Wsparcie dla nie łacińskich znaków w kodowaniu UTF-8 za pomocą PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Jeżeli PCRE nie obsługuje znaków unicode, mechanizm wyszukiwania spróbuje użyć wyrażeń regularnych z pomocą mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Jeśli chce się wyszukiwać znaki inne niż znaki alfabetu łacińskiego, mechanizm wyszukiwania wymaga kodowania PCRE unicode, dostępnego w PHP 4.4, 5.1 i nowszych wersjach.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Słowa składające się z przynajmniej tej liczby znaków będą indeksowane dla celów wyszukiwania. Tylko ty lub administrator twojego serwera może zmienić to ustawienie, zmieniając konfigurację bazy danych mysql.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Słowa składające się z nie więcej niż tej liczby znaków będą indeksowane dla celów wyszukiwania. Tylko ty lub administrator twojego serwera może zmienić to ustawienie, zmieniając konfigurację bazy danych mysql.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Ogólne ustawienia wyszukiwania',
	'GO_TO_SEARCH_INDEX'					=> 'Przejdź do strony wyszukiwania',

	'INDEX_STATS'							=> 'Statystyki indeksowania',
	'INDEXING_IN_PROGRESS'					=> 'Trwa indeksowanie…',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Mechanizm wyszukiwania indeksuje teraz wszystkie posty. To może potrwać w zależności od wielkości twojego forum od kilku minut do kilku godzin.',

	'LIMIT_SEARCH_LOAD'						=> 'Limit obciążenia systemu serwera – przeszukiwanie strony',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Jeśli w ciągu 1 minuty obciążenie systemu serwera przewyższa podaną wartość, przeszukiwana strona przejdzie do trybu offline. Wartość 1.0 odpowiada ~100% wykorzystania procesora. Funkcja dostępna tylko na serwerach z systemami UNIX-owymi.',

	'MAX_SEARCH_CHARS'						=> 'Maksymalna liczba znaków indeksowana przez wyszukiwanie ',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Słowa z liczbą znaków nie większą od tej, będą indeksowane dla wyszukiwania.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maksymalna liczba dozwolonych słów kluczowych',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maksymalna liczba słów, jakie użytkownik może wyszukiwać. Wartość 0 – nielimitowana liczba słów.',
	'MIN_SEARCH_CHARS'						=> 'Minimalna liczba znaków indeksowana przez wyszukiwanie',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Słowa z co najmniej taką liczbą znaków zostaną zindeksowane dla wyszukiwania.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimalna liczba znaków nazwy autora',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Użytkownicy muszą podać co najmniej tyle znaków nazwy autora oprócz wieloznacznika (*,?), jeśli w szukanej nazwie wieloznacznik został użyty. Jeżeli nazwa autora jest krótsza od tej wartości, można szukać postów autora, wpisując całą nazwę użytkownika.',

	'PROGRESS_BAR'							=> 'Pasek postępu',

	'SEARCH_GUEST_INTERVAL'					=> 'Interwał anty–przepełnieniowy dla gościa',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Liczba sekund, jaką goście muszą odczekać między wyszukiwaniami. Jeśli jeden z gości przeprowadza wyszukiwanie, wszyscy pozostali muszą poczekać, aż upłynie określony tutaj czas.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Wszystkie posty do postu o id %1$d zostały zindeksowane, z czego %2$d postów w tym kroku.<br />Aktualnie szybkość indeksowania wynosi około %3$.1f postów na sekundę.<br />Indeksowanie w toku…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Wszystkie posty do postu o id %1$d zostały usunięte z indeksu wyszukiwania.<br />Trwa usuwanie…',
	'SEARCH_INDEX_CREATED'					=> 'Wszystkie posty znajdujące się w bazie danych witryny zostały zindeksowane.',
	'SEARCH_INDEX_REMOVED'					=> 'Indeks wyszukiwania dla tego mechanizmu został usunięty.',
	'SEARCH_INTERVAL'						=> 'Interwał anty–przepełnieniowy dla użytkownika',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Liczba sekund, jaką użytkownik musi odczekać pomiędzy wyszukiwaniami. Interwał ten jest sprawdzany niezależnie dla każdego użytkownika.',
	'SEARCH_STORE_RESULTS'					=> 'Czas przechowywania wyników wyszukiwania w buforze',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Wyniki wyszukiwania znajdujące się w buforze wyszukiwania wygasną po określonym tutaj czasie. Wartość (0) wyłącza bufor wyników wyszukiwania.',
	'SEARCH_TYPE'							=> 'Mechanizm wyszukiwania',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB pozwala na wybór mechanizmu używanego do przeszukiwania tekstów postów. Domyślnie wyszukiwanie będzie korzystało z pełnotekstowego mechanizmu wyszukiwania phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Został zmieniony mechanizm wyszukiwania. Aby używać nowego mechanizmu, należy sprawdzić czy istnieje indeks wyszukiwania dla tego mechanizmu.',

	'TOTAL_WORDS'							=> 'Liczba zindeksowanych słów',
	'TOTAL_MATCHES'							=> 'Liczba zindeksowanych relacji słowo–post',

	'YES_SEARCH'							=> 'Wyświetlaj narzędzia wyszukiwania',
	'YES_SEARCH_EXPLAIN'					=> 'Włączenie funkcji spowoduje wyświetlanie pola wyszukiwania i odnośnika do formularza wyszukiwania zaawansowanego.',
	'YES_SEARCH_UPDATE'						=> 'Aktualizacja wyszukiwania pełnotekstowego',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Aktualizuje indeksy wyszukiwania pełnotekstowego podczas wysyłania postu. Funkcja jest ignorowana, jeśli wyszukiwanie jest wyłączone.' 
));

?>
