<?php
/** 
* /search.php [Polish]
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
	'ALL_AVAILABLE'						=> 'Wszystkie dostępne',
	'ALL_RESULTS'						=> 'Wszystkie wyniki',

	'DISPLAY_RESULTS'					=> 'Wyświetl wyniki jako',

	'FOUND_MORE_SEARCH_MATCHES'			=> 'Wyszukiwarka znalazła więcej niż %d wyników',
	'FOUND_SEARCH_MATCH'				=> 'Wyszukiwarka znalazła %d wynik',
	'FOUND_SEARCH_MATCHES'				=> 'Wyszukiwarka znalazła %d wyniki(ów)',

	'GLOBAL'							=> 'Globalne ogłoszenie',

	'IGNORED_TERMS'						=> 'Ignorowane',
	'IGNORED_TERMS_EXPLAIN'				=> 'Następujące słowa w twoim zapytaniu zostały zignorowane, ponieważ są zbyt popularne: <strong>%s</strong>.',

	'JUMP_TO_POST'						=> 'Skocz do postu',

	'LOGIN_EXPLAIN_EGOSEARCH'			=> 'Aby przeglądać swoje posty wymagane jest abyś był zalogowany.',
	'LOGIN_EXPLAIN_UNREADSEARCH'		=> 'Musisz być zalogowany, aby móc przeglądać nieprzeczytane posty.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Użyto za dużo słów do wyszukiwania. Proszę nie wpisywać więcej słów niż %1$d.',

	'NO_KEYWORDS'						=> 'Musisz wybrać przynajmniej jedno słowo do wyszukiwania. Każde słowo musi mieć długość co najmniej %d znaków i nie więcej niż %d znaków wyłączając znaki wieloznaczne.',
	'NO_RECENT_SEARCHES'				=> 'Nie przeprowadzano ostatnio żadnych wyszukiwań.',
	'NO_SEARCH'							=> 'Przepraszamy, ale nie masz uprawnień, aby skorzystać z systemu szukającego.',
	'NO_SEARCH_RESULTS'					=> 'Nie znaleziono pasujących fraz.',
	'NO_SEARCH_TIME'					=> 'Przepraszamy, ale nie możesz teraz użyć wyszukiwarki. Spróbuj ponownie za kilka minut.',
	'NO_SEARCH_UNREADS'					=> 'Przepraszam, ale wyszukiwanie po nieprzeczytanych postach zostało wyłączone na tym forum.',
	
	'POST_CHARACTERS'					=> 'znaków z postu',

	'RECENT_SEARCHES'					=> 'Ostatnie wyszukiwania',
	'RESULT_DAYS'						=> 'Wyniki z ostatnich',
	'RESULT_SORT'						=> 'Sortuj wyniki według',
	'RETURN_FIRST'						=> 'Pokaż pierwsze',
	'RETURN_TO_SEARCH_ADV'				=> 'Wróć do zaawansowanego wyszukiwania',

	'SEARCHED_FOR'						=> 'Poszukiwane frazy',
	'SEARCHED_TOPIC'					=> 'Znalezione tematy',
	'SEARCH_ALL_TERMS'					=> 'Szukaj wszystkich słów lub wyrażenia jeśli wpisano',
	'SEARCH_ANY_TERMS'					=> 'Szukaj któregokolwiek słowa',
	'SEARCH_AUTHOR'						=> 'Szukaj autora',
	'SEARCH_AUTHOR_EXPLAIN'				=> 'Użyj * jako zamiennika dowolnego ciągu znaków.',
	'SEARCH_FIRST_POST'					=> 'Tylko pierwszy post z tematu',
	'SEARCH_FORUMS'						=> 'Szukaj w forach',
	'SEARCH_FORUMS_EXPLAIN'				=> 'Wybierz forum lub fora, w których chcesz przeprowadzić wyszukiwanie. Subfora zostaną przeszukanie automatycznie jeżeli nie wyłączysz opcji poniżej “szukaj w subforach“.',
	'SEARCH_IN_RESULTS'					=> 'Przeszukaj te wyniki',
	'SEARCH_KEYWORDS_EXPLAIN'			=> 'Umieść <strong>+</strong> przed słowem, które musi wystąpić oraz <strong>-</strong> przed słowem, które nie może wystąpić. Jeśli umieścisz listę słów oddzielonych <strong>|</strong> wewnątrz nawiasów, tylko jedno ze słów będzie musiało wystąpić. Znak * zastępuje dowolny ciąg znaków.',
	'SEARCH_MSG_ONLY'					=> 'Tylko tekst wiadomości',
	'SEARCH_OPTIONS'					=> 'Opcje Wyszukiwania',
	'SEARCH_QUERY'						=> 'Wyszukaj zapytanie',
	'SEARCH_SUBFORUMS'					=> 'Szukaj w subforach',
	'SEARCH_TITLE_MSG'					=> 'Tematach oraz treściach wiadomości',
	'SEARCH_TITLE_ONLY'					=> 'Tylko tytuły tematów',
	'SEARCH_WITHIN'						=> 'Szukaj w',
	'SORT_ASCENDING'					=> 'Rosnąco',
	'SORT_AUTHOR'						=> 'Autor',
	'SORT_DESCENDING'					=> 'Malejąco',
	'SORT_FORUM'						=> 'Forum',
	'SORT_POST_SUBJECT'					=> 'Tematu postu',
	'SORT_TIME'							=> 'Czas wysłania postu',

	'TOO_FEW_AUTHOR_CHARS'				=> 'Musisz wpisać przynajmniej %d znaków nazwy autora.',

	'WORDS_IN_NO_POST'					=> 'Nie znaleziono postu, ponieważ żadem nie zawiera słów <strong>%s</strong>.',
	'WORD_IN_NO_POST'					=> 'Nie zwrócono wyników, ponieważ słowo <strong>%s</strong> nie występuje w żadnym poście.',
));

?>