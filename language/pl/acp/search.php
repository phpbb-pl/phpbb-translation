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
// 'Page %s of %s' you can (and should) write 'Page %1 of %2', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array (
  'ACP_SEARCH_INDEX_EXPLAIN' => 'Tutaj można zarządzać mechanizmami indeksowania wyszukiwania. Jeżeli jest używany tylko jeden mechanizm, należy usunąć nieużywane indeksy. Po zmianie niektórych ustawień wyszukiwania, np. minimalnej/maksymalnej liczby znaków, powinno się wykonać ponowne indeksowanie.',
  'ACP_SEARCH_SETTINGS_EXPLAIN' => 'Tutaj można określić, co mechanizm wyszukiwania będzie używał do indeksowania postów i przeprowadzania wyszukiwania. Można ustawić różne opcje, które mogą wpływać na czas potrzebny na wykonanie powyższych zadań. Niektóre z tych opcji są takie same dla wszystkich mechanizmów wyszukiwania.',
  'COMMON_WORD_THRESHOLD' => 'Próg popularności słowa ',
  'COMMON_WORD_THRESHOLD_EXPLAIN' => 'Wyrazy mające najwyższy procentowy udział w ogólnej liczbie postów zostaną uznane za popularne. Wyrazy te są pomijane podczas wyszukiwania. Wprowadź zero, aby wyłączyć tę funkcję. Funkcja ta działa, gdy jest więcej niż 100 postów. Jeśli chcesz, aby słowa uznane za popularne były ponownie uwzględniane podczas wyszukiwania, musisz wykonać ponowne indeksowanie.',
  'CONFIRM_SEARCH_BACKEND' => 'Czy na pewno chcesz zmienić mechanizm wyszukiwania? Zmiana mechanizmu wymaga stworzenia nowego indeksu dla nowego mechanizmu. Jeśli nie planuje się powrotu do poprzedniego mechanizmu wyszukiwania można usunąć stary indeks, aby zwolnić zasoby systemu.',
  'CONTINUE_DELETING_INDEX' => 'Kontynuuj proces usuwania poprzedniego indeksu',
  'CONTINUE_DELETING_INDEX_EXPLAIN' => 'Proces usuwania indeksu został rozpoczęty. Aby uzyskać dostęp do strony indeksu wyszukiwania, należy zakończyć lub anulować proces.',
  'CONTINUE_INDEXING' => 'Kontynuuj poprzedni proces indeksowania',
  'CONTINUE_INDEXING_EXPLAIN' => 'Rozpoczęto proces indeksowania. Aby uzyskać dostęp do strony indeksu wyszukiwania, należy zakończyć lub anulować proces.',
  'CREATE_INDEX' => 'Utwórz indeks',
  'DELETE_INDEX' => 'Usuń indeks',
  'DELETING_INDEX_IN_PROGRESS' => 'Trwa usuwanie indeksu…',
  'DELETING_INDEX_IN_PROGRESS_EXPLAIN' => 'Mechanizm wyszukiwania czyści teraz swój indeks. Może to potrwać kilka minut.',
  'FULLTEXT_MYSQL_NOT_SUPPORTED' => 'Mechanizm wyszukiwania pełnotekstowego MySQL może być użyty tylko z tabelami MyISAM lub InnoDB. MySQL 5.6.4 i nowsze wersje dla wyszukiwania pełnotekstowego wymagają tabel InnoDB.',
  'FULLTEXT_MYSQL_TOTAL_POSTS' => 'Liczba zindeksowanych postów',
  'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN' => 'Słowa składające się z przynajmniej tej liczby znaków będą indeksowane dla celów wyszukiwania. Tylko ty lub administrator twojego serwera może zmienić to ustawienie, zmieniając konfigurację bazy danych mysql.',
  'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN' => 'Słowa składające się z nie więcej niż tej liczby znaków będą indeksowane dla celów wyszukiwania. Tylko ty lub administrator twojego serwera może zmienić to ustawienie, zmieniając konfigurację bazy danych mysql.',
  'GENERAL_SEARCH_SETTINGS' => 'Ogólne ustawienia wyszukiwania',
  'GO_TO_SEARCH_INDEX' => 'Przejdź do strony wyszukiwania',
  'INDEX_STATS' => 'Statystyki indeksowania',
  'INDEXING_IN_PROGRESS' => 'Trwa indeksowanie…',
  'INDEXING_IN_PROGRESS_EXPLAIN' => 'Mechanizm wyszukiwania indeksuje teraz wszystkie posty. To może potrwać w zależności od wielkości twojego forum od kilku minut do kilku godzin.',
  'LIMIT_SEARCH_LOAD' => 'Limit obciążenia systemu serwera – przeszukiwanie strony',
  'LIMIT_SEARCH_LOAD_EXPLAIN' => 'Jeśli w ciągu 1 minuty obciążenie systemu serwera przewyższa podaną wartość, przeszukiwana strona przejdzie do trybu offline. Wartość 1.0 odpowiada ~100% wykorzystania procesora. Funkcja dostępna tylko na serwerach z systemami UNIX-owymi.',
  'MAX_SEARCH_CHARS' => 'Maksymalna liczba znaków indeksowana przez wyszukiwanie ',
  'MAX_SEARCH_CHARS_EXPLAIN' => 'Słowa z liczbą znaków nie większą od tej, będą indeksowane dla wyszukiwania.',
  'MAX_NUM_SEARCH_KEYWORDS' => 'Maksymalna liczba dozwolonych słów kluczowych',
  'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN' => 'Maksymalna liczba słów, jakie użytkownik może wyszukiwać. Wartość 0 – nielimitowana liczba słów.',
  'MIN_SEARCH_CHARS' => 'Minimalna liczba znaków indeksowana przez wyszukiwanie',
  'MIN_SEARCH_CHARS_EXPLAIN' => 'Słowa z co najmniej taką liczbą znaków zostaną zindeksowane dla wyszukiwania.',
  'MIN_SEARCH_AUTHOR_CHARS' => 'Minimalna liczba znaków nazwy autora',
  'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN' => 'Użytkownicy muszą podać co najmniej tyle znaków nazwy autora oprócz wieloznacznika (*,?), jeśli w szukanej nazwie wieloznacznik został użyty. Jeżeli nazwa autora jest krótsza od tej wartości, można szukać postów autora, wpisując całą nazwę użytkownika.',
  'SEARCH_GUEST_INTERVAL' => 'Interwał anty–przepełnieniowy dla gościa',
  'SEARCH_GUEST_INTERVAL_EXPLAIN' => 'Liczba sekund, jaką goście muszą odczekać między wyszukiwaniami. Jeśli jeden z gości przeprowadza wyszukiwanie, wszyscy pozostali muszą poczekać, aż upłynie określony tutaj czas.',
  'SEARCH_INDEX_CREATED' => 'Wszystkie posty znajdujące się w bazie danych witryny zostały zindeksowane.',
  'SEARCH_INDEX_REMOVED' => 'Indeks wyszukiwania dla tego mechanizmu został usunięty.',
  'SEARCH_INTERVAL' => 'Interwał anty–przepełnieniowy dla użytkownika',
  'SEARCH_INTERVAL_EXPLAIN' => 'Liczba sekund, jaką użytkownik musi odczekać pomiędzy wyszukiwaniami. Interwał ten jest sprawdzany niezależnie dla każdego użytkownika.',
  'SEARCH_STORE_RESULTS' => 'Czas przechowywania wyników wyszukiwania w buforze',
  'SEARCH_STORE_RESULTS_EXPLAIN' => 'Wyniki wyszukiwania znajdujące się w buforze wyszukiwania wygasną po określonym tutaj czasie. Wartość (0) wyłącza bufor wyników wyszukiwania.',
  'SEARCH_TYPE' => 'Mechanizm wyszukiwania',
  'SEARCH_TYPE_EXPLAIN' => 'phpBB pozwala na wybór mechanizmu używanego do przeszukiwania tekstów postów. Domyślnie wyszukiwanie będzie korzystało z pełnotekstowego mechanizmu wyszukiwania phpBB.',
  'SWITCHED_SEARCH_BACKEND' => 'Został zmieniony mechanizm wyszukiwania. Aby używać nowego mechanizmu, należy sprawdzić czy istnieje indeks wyszukiwania dla tego mechanizmu.',
  'TOTAL_WORDS' => 'Liczba zindeksowanych słów',
  'TOTAL_MATCHES' => 'Liczba zindeksowanych relacji słowo–post',
  'YES_SEARCH' => 'Wyświetlaj narzędzia wyszukiwania',
  'YES_SEARCH_EXPLAIN' => 'Włączenie funkcji spowoduje wyświetlanie pola wyszukiwania i odnośnika do formularza wyszukiwania zaawansowanego.',
  'YES_SEARCH_UPDATE' => 'Aktualizacja wyszukiwania pełnotekstowego',
  'YES_SEARCH_UPDATE_EXPLAIN' => 'Aktualizuje indeksy wyszukiwania pełnotekstowego podczas wysyłania posta. Funkcja jest ignorowana, jeśli wyszukiwanie jest wyłączone.',
  'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE' => 'The MySQL fulltext backend can only be used with MySQL4 and above.',
  'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE' => 'The PostgreSQL fulltext backend can only be used with PostgreSQL.',
  'FULLTEXT_POSTGRES_TOTAL_POSTS' => 'Total number of indexed posts',
  'FULLTEXT_POSTGRES_VERSION_CHECK' => 'PostgreSQL version',
  'FULLTEXT_POSTGRES_TS_NAME' => 'Text search Configuration Profile:',
  'FULLTEXT_POSTGRES_MIN_WORD_LEN' => 'Minimum word length for keywords',
  'FULLTEXT_POSTGRES_MAX_WORD_LEN' => 'Maximum word length for keywords',
  'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN' => 'This search backend requires PostgreSQL version 8.3 and above.',
  'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN' => 'The Text search configuration profile used to determine the parser and dictionary.',
  'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN' => 'Words with at least this many characters will be included in the query to the database.',
  'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN' => 'Words with no more than this many characters will be included in the query to the database.',
  'FULLTEXT_SPHINX_CONFIGURE' => 'Configure the following settings to generate sphinx config file',
  'FULLTEXT_SPHINX_DATA_PATH' => 'Path to data directory',
  'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN' => 'It will be used to store the indexes and log files. You should create this directory outside the web accessible directories. (should have a trailing slash)',
  'FULLTEXT_SPHINX_DELTA_POSTS' => 'Number of posts in frequently updated delta index',
  'FULLTEXT_SPHINX_HOST' => 'Sphinx search daemon host',
  'FULLTEXT_SPHINX_HOST_EXPLAIN' => 'Host on which the sphinx search daemon (searchd) listens. Leave empty to use the default localhost',
  'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT' => 'Indexer memory limit',
  'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN' => 'This number should at all times be lower than the RAM available on your machine. If you experience periodic performance problems this might be due to the indexer consuming too many resources. It might help to lower the amount of memory available to the indexer.',
  'FULLTEXT_SPHINX_MAIN_POSTS' => 'Number of posts in main index',
  'FULLTEXT_SPHINX_PORT' => 'Sphinx search daemon port',
  'FULLTEXT_SPHINX_PORT_EXPLAIN' => 'Port on which the sphinx search daemon (searchd) listens. Leave empty to use the default Sphinx API port 9312',
  'FULLTEXT_SPHINX_WRONG_DATABASE' => 'The sphinx search for phpBB supports MySQL and PostgreSQL only.',
  'FULLTEXT_SPHINX_CONFIG_FILE' => 'Sphinx config file',
  'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN' => 'The generated content of the sphinx config file. This data needs to be pasted into the sphinx.conf which is used by sphinx search daemon. Replace the [dbuser] and [dbpassword] placeholders with your database credentials.',
  'FULLTEXT_SPHINX_NO_CONFIG_DATA' => 'The sphinx data and config directory paths are not defined. Please define them to generate the config file.',
  'SEARCH_INDEX_CREATE_REDIRECT' => 
  array (
    2 => 'All posts up to post id %2$d have now been indexed, of which %1$d posts were within this step.<br />',
  ),
  'SEARCH_INDEX_CREATE_REDIRECT_RATE' => 
  array (
    2 => 'The current rate of indexing is approximately %1$.1f posts per second.<br />Indexing in progress…',
  ),
  'SEARCH_INDEX_DELETE_REDIRECT' => 
  array (
    2 => 'All posts up to post id %2$d have been removed from the search index.<br />Deleting in progress…',
  ),
));
