<?php
/**
*
* search [Polski]
*
* @package language
* @version $Id: search.php 10004 2009-08-17 13:25:04Z rxu $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 10004 2011-06-16 20:32:25 Zespół Olympus.pl $
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
	'ALL_AVAILABLE'			=> 'Wszystkie dostępne',
	'ALL_RESULTS'			=> 'Wszystkie wyniki',

	'DISPLAY_RESULTS'		=> 'Wyświetl wyniki jako',

	'FOUND_SEARCH_MATCH'		=> 'Znaleziono %d wynik',
	'FOUND_SEARCH_MATCHES'		=> 'Znalezione wyniki: %d',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Znaleziono więcej niż %d wyników',

	'GLOBAL'				=> 'Ogłoszenie globalne',

	'IGNORED_TERMS'			=> 'ignorowany',
	'IGNORED_TERMS_EXPLAIN'	=> 'Słowa pominięte ze względu na dużą częstotliwość występowania: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Przejdź do postu',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Aby zobaczyć swoje posty, musisz się zalogować.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Aby przeglądać nieprzeczytane posty, musisz się zalogować.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Aby przeglądać nowe posty od czasu ostatniej wizyty, musisz się zalogować.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Wybrano za dużo słów do wyszukania. Wprowadź maksymalnie %1$d słów.',

	'NO_KEYWORDS'			=> 'Aby rozpocząć wyszukiwanie, należy wprowadzić przynajmniej jedno słowo. Minimalna liczba znaków w słowie, z wyłączeniem wieloznaczników (*,?), to %d.',
	'NO_RECENT_SEARCHES'	=> 'Niczego ostatnio nie szukano.',
	'NO_SEARCH'				=> 'Nie masz uprawnień do używania wyszukiwarki.',
	'NO_SEARCH_RESULTS'		=> 'Nie znaleziono elementów spełniających kryteria szukania.',
	'NO_SEARCH_TIME'		=> 'W tej chwili nie możesz użyć wyszukiwarki. Spróbuj ponownie za chwilę.',
	'NO_SEARCH_UNREADS'		=> 'Wyszukiwanie nieprzeczytanych postów jest wyłączone na tej witrynie.',
	'WORD_IN_NO_POST'		=> 'Nic nie znaleziono, ponieważ słowo <strong>%s</strong> nie występuje w żadnym poście.',
	'WORDS_IN_NO_POST'		=> 'Nic nie znaleziono, ponieważ słowa <strong>%s</strong> nie występują w żadnym poście.',

	'POST_CHARACTERS'		=> 'znaków w poście',

	'RECENT_SEARCHES'		=> 'Ostatnie wyszukiwania',
	'RESULT_DAYS'			=> 'Wyświetl wyniki z ostatnich',
	'RESULT_SORT'			=> 'Sortuj wyniki wg',
	'RETURN_FIRST'			=> 'Wyświetl pierwsze',
	'RETURN_TO_SEARCH_ADV'	=> 'Wyszukiwanie zaawansowane',

	'SEARCHED_FOR'				=> 'Słowa kluczowe',
	'SEARCHED_TOPIC'			=> 'Przeszukany temat',
	'SEARCH_ALL_TERMS'			=> 'Szukaj wszystkich wyrażeń lub użyj wprowadzonego zapytania',
	'SEARCH_ANY_TERMS'			=> 'Szukaj któregokolwiek z wyrażeń',
	'SEARCH_AUTHOR'				=> 'Szukaj wg autora',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Można użyć gwiazdki (*) jako zamiennika dowolnego ciągu znaków.',
	'SEARCH_FIRST_POST'			=> 'Tylko pierwszy post tematu',
	'SEARCH_FORUMS'				=> 'Przeszukaj fora',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Wybierz fora, które chcesz przeszukać. Subfora są przeszukiwane automatycznie, chyba że funkcja „Przeszukuj subfora”, jest wyłączona.',
	'SEARCH_IN_RESULTS'			=> 'Szukaj w wynikach',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Umieść <strong>+</strong> przed słowem, które musi wystąpić oraz <strong>-</strong> przed słowem, które nie może wystąpić. Jeśli umieścisz listę słów oddzielonych <strong>|</strong> wewnątrz nawiasów, tylko jedno ze słów będzie musiało wystąpić. Możesz użyć gwiazdki (*) jako zamiennika dowolnego ciągu znaków.',
	'SEARCH_MSG_ONLY'			=> 'Tylko treść postu',
	'SEARCH_OPTIONS'			=> 'Opcje wyszukiwania',
	'SEARCH_QUERY'				=> 'Wyszukiwanie',
	'SEARCH_SUBFORUMS'			=> 'Przeszukaj subfora',
	'SEARCH_TITLE_MSG'			=> 'Temat i treść postu',
	'SEARCH_TITLE_ONLY'			=> 'Tylko tytuły tematów',
	'SEARCH_WITHIN'				=> 'Szukaj w',
	'SORT_ASCENDING'			=> 'Rosnąco',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Malejąco',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Temat postu',
	'SORT_TIME'					=> 'Czas postu',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Należy podać przynajmniej %d znaków nazwy autora.',
));

?>
