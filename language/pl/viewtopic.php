<?php
/** 
* /viewtopic.php [Polish]
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
	'ATTACHMENT'						=> 'Załącznik',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Możliwość dodawania załączników została wyłączona',

	'BOOKMARK_ADDED'					=> 'Temat pomyślnie dodany do zakładek.',
	'BOOKMARK_ERR'						=> 'Dodawanie do zakładek zakończone niepowodzeniem. Proszę spróbować ponownie.',
	'BOOKMARK_REMOVED'					=> 'Temat pomyślnie usunięty z zakładek.',
	'BOOKMARK_TOPIC'					=> 'Dodaj do zakładek',
	'BOOKMARK_TOPIC_REMOVE'				=> 'Usuń z zakładek',
	'BUMPED_BY'							=> 'Ostatnio podbity przez %1$s, %2$s',
	'BUMP_TOPIC'						=> 'Podbij temat',

	'CODE'								=> 'Kod',
	'COLLAPSE_QR'						=> 'Ukryj szybką odpowiedź',

	'DELETE_TOPIC'						=> 'Usuń temat',
	'DOWNLOAD_NOTICE'					=> 'Nie posiadasz wymaganych uprawnień, by zobaczyć pliki załączone do tej wiadomości.',

	'EDITED_TIMES_TOTAL'				=> 'Ostatnio edytowany przez %1$s  %2$s, edytowano w sumie %3$d razy',
	'EDITED_TIME_TOTAL'					=> 'Ostatnio edytowany przez %1$s, %2$s, edytowano w sumie %3$d raz',
	'EMAIL_TOPIC'						=> 'Powiadom przyjaciela',
	'ERROR_NO_ATTACHMENT'				=> 'Wybrane załączniki nie istnieją.',

	'FILE_NOT_FOUND_404'				=> 'Plik %s nie istnieje.',
	'FORK_TOPIC'						=> 'Kopiuj temat',
	'FULL_EDITOR'						=> 'Pełny edytor',

	'LINKAGE_FORBIDDEN'					=> 'Nie masz uprawnień do wyświetlania, pobierania i linkowania od/do tej strony.',
	'LOGIN_NOTIFY_TOPIC'				=> 'Zostałeś powiadomiony o tym temacie - zaloguj się, aby go przejrzeć.',
	'LOGIN_VIEWTOPIC'					=> 'Administrator tego forum wymaga, byś zarejestrował i zalogował się, by przejrzeć ten temat.',

	'MAKE_ANNOUNCE'						=> 'Zmień na "Ogłoszenie"',
	'MAKE_GLOBAL'						=> 'Zmień na "Globalny"',
	'MAKE_NORMAL'						=> 'Zmień na "Normalny Temat"',
	'MAKE_STICKY'						=> 'Zmień na "Przyklejony"',
	'MAX_OPTIONS_SELECT'				=> 'Możesz wybrać do <strong>%d</strong> opcji.',
	'MAX_OPTION_SELECT'					=> 'Możesz wybrać tylko <strong>1</strong> opcję',
	'MISSING_INLINE_ATTACHMENT'			=> 'Załącznik <strong>%s</strong> nie jest już dostępny',
	'MOVE_TOPIC'						=> 'Przenieś temat',

	'NO_ATTACHMENT_SELECTED'			=> 'Nie wybrano załącznika do pobrania lub podglądu.',
	'NO_NEWER_TOPICS'					=> 'Nie ma nowszych tematów na tym forum',
	'NO_OLDER_TOPICS'					=> 'Nie ma starszych tematów na tym forum.',
	'NO_UNREAD_POSTS'					=> 'Nie ma nowych nieprzeczytanych postów dla tego tematu.',
	'NO_VOTES'							=> 'Brak głosów',
	'NO_VOTE_OPTION'					=> 'Musisz wybrać opcję przy głosowaniu.',

	'POLL_ENDED_AT'						=> 'Ankieta zakończyła się %s',
	'POLL_RUN_TILL'						=> 'Ankieta aktywna do %s',
	'POLL_VOTED_OPTION'					=> 'Głosowałeś na tę opcję',
	'PRINT_TOPIC'						=> 'Widok do druku',

	'QUICKREPLY'						=> 'Szybka odpowiedź',
	'QUICK_MOD'							=> 'Narzędzia szybkiej moderacji',
	'QUOTE'								=> 'Cytuj',

	'REPLY_TO_TOPIC'					=> 'Odpowiedz',
	'RETURN_POST'						=> '%sPowróć do postu%s',

	'SHOW_QR'							=> 'Szybka odpowiedź',
	'SUBMIT_VOTE'						=> 'Zagłosuj',

	'TOTAL_VOTES'						=> 'Razem głosów',

	'UNLOCK_TOPIC'						=> 'Odblokuj temat',

	'VIEW_INFO'							=> 'Szczegóły postu',
	'VIEW_NEXT_TOPIC'					=> 'Następny temat',
	'VIEW_PREVIOUS_TOPIC'				=> 'Poprzedni temat',
	'VIEW_RESULTS'						=> 'Zobacz wyniki',
	'VIEW_TOPIC_POST'					=> '1 post',
	'VIEW_TOPIC_POSTS'					=> '%d posty(ów)',
	'VIEW_UNREAD_POST'					=> 'Pierwszy nieprzeczytany post',
	'VISIT_WEBSITE'						=> 'WWW',
	'VOTE_SUBMITTED'					=> 'Twój głos został zapisany.',

	'WROTE'								=> 'napisał(a)',
));

?>