<?php
/** 
* /acp/prune.php [Polish]
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
	'ACP_PRUNE_FORUMS_EXPLAIN'		=> 'To spowoduje usunięcie każdego tematu, w którym nie napisano odpowiedzi lub nie był wyświetlony od określonego przez Ciebie czasu. Jeśli nie wpiszesz żadnej liczby, wszystkie tematy zostaną usunięte. Domyślnie, żadne ogłoszenie, przyklejony temat albo temat w którym jest aktywna ankieta, nie zostanie usunięty.',
	'ACP_PRUNE_USERS_EXPLAIN'		=> 'Tutaj możesz usunąć (lub dezaktywować) użytkowników Twojego forum. Możesz to zrobić na wiele różnych sposobów; poprzez liczbę postów: czas ostatniej aktywności itd. Każde z tych kryteriów może być łączony. Możesz usunąć użytkowników którzy byli ostatnio aktywni 01-01-2002 i mają mniej niż 10 postów. Alternatywnie, możesz wprowadzić listę użytkowników prosto do pola tekstowego, wszelkie kryteria zostaną zignorowane. Bądź ostrożny! Raz usunięty użytkownik, nie może zostać przywrócony.',

	'DEACTIVATE_DELETE'				=> 'Dezaktywuj lub usuń',
	'DEACTIVATE_DELETE_EXPLAIN'		=> 'Wybierz czy zdezaktywować użytkownika, lub usunąć go. Pamiętaj że tej operacji nie można cofnąć!',
	'DELETE_USERS'					=> 'Usuń',
	'DELETE_USER_POSTS'				=> 'Usuń wyczyszczone posty użytkownika',
	'DELETE_USER_POSTS_EXPLAIN'		=> 'Usuń posty napisane przez usuniętego użytkownika. Nie ma żadnego efektu, jeśli użytkownik został dezaktywowany.',

	'FORUM_PRUNE'					=> 'Czyszczenie forum',

	'JOINED_EXPLAIN'				=> 'Wprowadź datę w formacie <kbd>RRRR-MM-DD</kbd>',

	'LAST_ACTIVE_EXPLAIN'			=> 'Wprowadź datę w formacie <kbd>YYYY-MM-DD</kbd>. Wprowadź <kbd>0000-00-00</kbd>, aby usunąć użytkowników, którzy nigdy się nie logowali. Warunki <em>Przed</em> i <em>Po</em> zostaną zignorowane.',

	'NO_PRUNE'						=> 'Żadne forum nie zostało wyczyszczone.',

	'POSTS_PRUNED'					=> 'Wyczyszczone posty',
	'PRUNE_ANNOUNCEMENTS'			=> 'Prune announcements',
	'PRUNE_FINISHED_POLLS'			=> 'Wyczyść zakończone ankiety',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Usuń tematy, z zakończonymi ankietami',
	'PRUNE_FORUM_CONFIRM'			=> 'Czy jesteś pewien, że chcesz wyczyścić zaznaczone fora według podanych ustawień? Jeżeli to zrobisz, nie będzie możliwości przywrócenia usuniętych tematów i postów.',
	'PRUNE_NOT_POSTED'				=> 'Dni od ostatniego postu',
	'PRUNE_NOT_VIEWED'				=> 'Dni od ostatniego wyświetlenia',
	'PRUNE_OLD_POLLS'				=> 'Prune old polls',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Removes topics with polls not voted in for post age days.',
	'PRUNE_STICKY'					=> 'Prune stickies',
	'PRUNE_SUCCESS'					=> 'Czyszczenie forów zakończyło się sukcesem',
	'PRUNE_USERS_LIST'				=> 'Użytkownicy do usunięcia',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Zgodnie z wybranymi kryteriami czyszczenia, poniższe konta zostaną dezaktywowane.',
	'PRUNE_USERS_LIST_DELETE'		=> 'Zgodnie z wybranymi kryteriami czyszczenia, poniższe konta zostaną usunięte.',

	'SELECTED_FORUM'				=> 'Zaznaczone forum',
	'SELECTED_FORUMS'				=> 'Zaznaczone fora',
	'SELECT_USERS_EXPLAIN'			=> 'Wpisz tutaj nazwy konkretnych użytkowników, zostaną oni porównani z powyższymi kryteriami. Założyciele nie mogą zostać usunięci.',

	'TOPICS_PRUNED'					=> 'Wyczyszczone tematy',

	'USER_DEACTIVATE_SUCCESS'		=> 'Zaznaczeni użytkownicy zostali zdezaktywowani pomyślnie.',
	'USER_DELETE_SUCCESS'			=> 'Zaznaczeni użytkownicy zostali pomyślnie usunięci.',
	'USER_PRUNE_FAILURE'			=> 'Brak użytkowników pasujących do wybranych kryteriów.',

	'WRONG_ACTIVE_JOINED_DATE'		=> 'Wprowadzona data jest niepoprawna, poprawny format to <kbd>RRRR-MM-DD</kbd>.',
));

?>