<?php
/** 
* /acp/search.php [Polish]
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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Tutaj możesz zarządzać mechanizmami wyszukiwarki. Dopóki używasz tylko jednego mechanizmu, powinieneś usunąć nieużywane indeksy. Po zmianie niektórych z ustawień wyszukiwania (np. minimalna/maksymalna liczba znaków) warto jest z odświeżyć indeks.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Tutaj możesz określić, który mechanizm wyszukiwania będzie używany do indeksowania postów i przeprowadzania wyszukiwania. Możesz ustawić różne opcje, które mogą wpływać na czas potrzebny na wykonanie powyższych zadań. Niektóre z tych opcji są takie same dla wszystkich mechanizmów wyszukiwania.',

	'COMMON_WORD_THRESHOLD'					=> 'Próg popularności słowa ',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Wyrazy, występujące w znacznej części postów zostaną uznane jako częste. Wyrazy te są ignorowane podczas wyszukiwania. Wpisz zero, aby wyłączyć. Ta opcja działa wyłącznie, kiedy postów jest więcej niż 100. Jeżeli chcesz, aby wyrazy które są obecnie uzane jako powszechne były ponownie rozpoznawalne, musisz odtworzyć indeks.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Czy jesteś pewny, że chcesz zmienić mechanizm wyszukiwarki? Zmiana mechanizmu wyszukiwarki wymaga stworzenia nowego indeksu. Jeśli nie planujesz powrotu do byłego mechanizmu wyszukiwarki, możesz usunąc stary indeks, aby zwolnić zasoby pamięci systemu.',
	'CONTINUE_DELETING_INDEX'				=> 'Kontynuuj poprzedni proces usuwania indeksu',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Proces usuwania indeksu został rozpoczęty. W celu uzyskania dostępu do wyszukiwarki, musisz go zakończyć lub anulować.',
	'CONTINUE_INDEXING'						=> 'Kontyunuj poprzedni proces indeksowania',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Rozpoczęto proces indeksowania. Aby mieć dostęp do strony wyszukiwania, musisz go skończyć lub anulować.',
	'CREATE_INDEX'							=> 'Utwórz indeks',

	'DELETE_INDEX'							=> 'Usuń indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Trwa usuwanie indeksu ',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Mechanizm wyszukiwarki czyści teraz swój indeks. Może to potrwać kilka minut.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Mechanizm wyszukiwania pełnotekstowego MySQL może być użyty tylko dla wersji MySQL4 i wyższej.',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Wsparcie dla znaków diakrytycznych UTF-8 przy użyciu mbstring:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Jeżeli PCRE nie obsługuje znaków unicode, mechanizm wyszukiwania spróbuje użyć wyrażeń regularnych z pomocą mbstring.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Pełnotekstowe indeksy MySQL mogą być użyte tylko z tabelami typu MyISAM.',
	'FULLTEXT_MYSQL_PCRE'					=> 'Wsparcie dla kodowania znaków diakrytycznych UTF-8 używając PCRE:',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Ten mechanizm wyszukiwarki wymaga kodowania PCRE unicode, dostępnego w PHP 4.4, 5.1 i dalszych, jeśli chcesz wyszukiwać nie tylko w literach alfabetu łacińskiego.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Liczba zaindeksowanych postów',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Słowa z co najmniej taką liczbą znaków będą indeksowane przez wyszukiwarkę. Te ustawienie może zostać zmienione przez Ciebie albo Twojego dostawcę poprzez modyfikację konfiguracji MySQL.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Słowa z nie większą liczbą znaków będą indeksowane przez wyszukiwarkę. Te ustawienie może zostać zmienione przez Ciebie albo Twojego dostawcę poprzez modyfikację konfiguracji MySQL.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Główne ustawienia wyszukania',
	'GO_TO_SEARCH_INDEX'					=> 'Idź do strony wyszukiwania',

	'INDEXING_IN_PROGRESS'					=> 'Trwa indeksowanie',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Mechanizm wyszukiwarki indeksuje teraz wszystkie posty. To może potrwać, zależnie od wielkości Twojego forum, od kilku minut do nawet kilku godzin.',
	'INDEX_STATS'							=> 'Statystyki strony głównej',

	'LIMIT_SEARCH_LOAD'						=> 'Limit obciążenia systemu',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Jeżeli przez 1 minutę obciążenie systemu przewyższa podaną wartość strona wyszukiwarki nie zostanie wyświetlona, 1.0 odpowiada ~100% wykorzystania procesora. Funkcja dostępna tylko na serwerach z systemami UNIX-owymi.',

	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maksymalna liczba dozwolonych słów kluczowych',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maksymalna liczba słów, którą może użyć użytkownik do wyszukiwania. 0 oznacza brak limitu.',
	'MAX_SEARCH_CHARS'						=> 'Maksymalna liczba znaków indeksowana przez wyszukiwarkę ',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Słowa, z ilością znaków nie większą od tej, będą indeksowane przez wyszukiwarkę.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimalna ilość znaków nazwy autora',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Użytkownicy muszą podać co najmniej tyle znaków loginu w czasie wyszukiwania postów użytkownika z użyciem znaków wieloznacznych. Jeżeli login autora jest krótszy od tej wartości, to nadal można szukać jego postów wpisując całą nazwę użytkownika.',
	'MIN_SEARCH_CHARS'						=> 'Minimalna ilość znaków indeksowana przez wyszukiwarkę',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Słowa z co najmniej tyloma znakami zostaną zaindeksowane dla wyszukiwania.',

	'PROGRESS_BAR'							=> 'Pasek postępu',

	'SEARCH_GUEST_INTERVAL'					=> 'Zabezpieczenie wyszukiwarki przed floodem dla gościa',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Liczba sekund jaką goście muszą odczekać między wyszukiwaniami. Jeśli jeden z gości użyje wyszukiwarki wszyscy pozostali muszą poczekać aż podany czas minie.',
	'SEARCH_INDEX_CREATED'					=> 'Pomyślnie zindeksowano wszystkie posty znajdujące się w bazie danych.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Wszystkie posty do postu o id %1$d zostały zaindeksowane, z czego %2$d postów w tym kroku.<br />Aktualne szybkość indeksowania wynosi około %3$.1f postów na sekundę.<br />Indeksowanie w toku...',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Wszystkie posty w górę do postu o id %1$d zostaną usunięte z indeksu wyszukiwania.<br />Usuwanie w trakcie…',
	'SEARCH_INDEX_REMOVED'					=> 'Pomyślnie usunięto indeks dla tego mechanizmu wyszukiwania.',
	'SEARCH_INTERVAL'						=> 'Zabezpieczenie wyszukiwarki przed floodem dla użytkownika',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Liczba sekund jaką użytkownik musi odczekać pomiędzy wyszukiwaniami. Interwał ten jest sprawdzany niezależnie dla każdego użytkownika. ',
	'SEARCH_STORE_RESULTS'					=> 'Długość cache wyników wyszukiwania',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Cache wyników wyszukiwania wygaśnie po tym czasie, podanym w sekundach. Ustaw 0 jeśli chcesz wyłączyć cache wyników wyszukiwania.',
	'SEARCH_TYPE'							=> 'Mechanizm wyszukiwania',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB pozwala na wybór mechanizmu, który jest używany do przeszukiwania tekstów postów. Domyślnie wyszukiwarka będzie korzystała z własnego pełnotekstowego mechanizmu wyszukiwania phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Zmieniłeś mechanizm wyszukiwarki. Aby używać nowego mechanizmu wyszukiwarki, upewnij się, że istnieje indeks wyszukiwania dla wybranego mechanizmu.',

	'TOTAL_MATCHES'							=> 'Łączna liczba zindeksowanych relacji słowo-post',
	'TOTAL_WORDS'							=> 'Liczba zaindeksowanych słów',

	'YES_SEARCH'							=> 'Włącz ułatwienia wyszukiwania',
	'YES_SEARCH_EXPLAIN'					=> 'Włącz wyszukiwarkę łącznie z wyszukiwaniem użytkowników.',
	'YES_SEARCH_UPDATE'						=> 'Włącz aktualizację pełnotekstową',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Aktualizuje indeksy wyszukiwania pełnotekstowego podczas wysyłania postu, ustawienie zostaje zignorowane jeśli wyszukiwarka jest wyłączona.',
));

?>