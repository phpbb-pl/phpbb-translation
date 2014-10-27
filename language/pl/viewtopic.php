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
  'CODE' => 'Kod',
  'NO_UNREAD_POSTS' => 'Na tym forum nie ma nowych nieprzeczytanych postów.',
  'APPROVE' => 'Zaakceptuj',
  'DISAPPROVE' => 'Odrzuć',
  'FORK_TOPIC' => 'Kopiuj temat',
  'RETURN_POST' => '%sPowrót do posta%s',
  'UNLOCK_TOPIC' => 'Odblokuj temat',
  'ATTACHMENT' => 'Załącznik',
  'ATTACHMENT_FUNCTIONALITY_DISABLED' => 'Funkcje załączników zostały wyłączone.',
  'BOOKMARK_ADDED' => 'Zakładka została dodana do tematu.',
  'BOOKMARK_ERR' => 'Nie udało się dodać zakładki. Proszę spróbować ponownie.',
  'BOOKMARK_REMOVED' => 'Zakładka została usunięta.',
  'BOOKMARK_TOPIC' => 'Dodaj zakładkę',
  'BOOKMARK_TOPIC_REMOVE' => 'Usuń zakładkę',
  'BUMPED_BY' => 'Ostatnio przesunięty w górę %2$s przez: %1$s.',
  'BUMP_TOPIC' => 'Przesuń temat w górę',
  'DELETE_TOPIC' => 'Usuń temat',
  'DOWNLOAD_NOTICE' => 'Nie masz wymaganych uprawnień, aby zobaczyć pliki załączone do tego posta.',
  'EMAIL_TOPIC' => 'Email topic',
  'ERROR_NO_ATTACHMENT' => 'Wybrany załącznik już nie istnieje',
  'FILE_NOT_FOUND_404' => 'Plik <strong>%s</strong> nie istnieje.',
  'FULL_EDITOR' => 'Full Editor &amp; Preview',
  'LINKAGE_FORBIDDEN' => 'Nie masz uprawnień do przeglądania, pobierania lub wstawiania odnośników z/do tej strony.',
  'LOGIN_NOTIFY_TOPIC' => 'Powiadomienie o tym temacie zostało ci dostarczone. Zaloguj się, aby go przejrzeć.',
  'LOGIN_VIEWTOPIC' => 'Aby przejrzeć ten temat, musisz się zalogować.',
  'MAKE_ANNOUNCE' => 'Zmień na ogłoszenie',
  'MAKE_GLOBAL' => 'Zmień na ogłosz. globalne',
  'MAKE_NORMAL' => 'Zmień na zwykły temat',
  'MAKE_STICKY' => 'Zmień na przyklejony',
  'MISSING_INLINE_ATTACHMENT' => 'Załącznik <strong>%s</strong> nie jest już dostępny',
  'MOVE_TOPIC' => 'Przenieś temat',
  'NO_ATTACHMENT_SELECTED' => 'Nie wybrano załącznika do pobrania lub przeglądania.',
  'NO_NEWER_TOPICS' => 'Na tym forum nie ma nowszych tematów.',
  'NO_OLDER_TOPICS' => 'Na tym forum nie ma starszych tematów.',
  'NO_VOTE_OPTION' => 'Aby zagłosować musisz wybrać opcję.',
  'NO_VOTES' => 'Brak głosów',
  'POLL_ENDED_AT' => 'Czas głosowania minął %s',
  'POLL_RUN_TILL' => 'Czas głosowania minie %s',
  'POLL_VOTED_OPTION' => 'Oddano głos na tę opcję',
  'PRINT_TOPIC' => 'Podgląd wydruku',
  'QUICK_MOD' => 'Moderowanie',
  'QUICKREPLY' => 'Szybka odpowiedź',
  'QUOTE' => 'Cytuj',
  'REPLY_TO_TOPIC' => 'Odpowiedz w temacie',
  'SUBMIT_VOTE' => 'Wyślij',
  'TOTAL_VOTES' => 'Liczba głosów',
  'VIEW_INFO' => 'Szczegóły posta',
  'VIEW_NEXT_TOPIC' => 'Następny temat',
  'VIEW_PREVIOUS_TOPIC' => 'Poprzedni temat',
  'VIEW_RESULTS' => 'Pokaż wyniki',
  'VIEW_UNREAD_POST' => 'Pierwszy nieprzeczytany post',
  'VOTE_SUBMITTED' => 'Twój głos został zarejestrowany.',
  'VOTE_CONVERTED' => 'W skonwertowanych ankietach nie ma możliwości zmiany oddanego głosu.',
  'RESTORE' => 'Restore',
  'RESTORE_TOPIC' => 'Restore topic',
  'DELETED_INFORMATION' => 'Deleted by %1$s on %2$s',
  'EDITED_TIMES_TOTAL' => 
  array (
    1 => 'Last edited by %2$s on %3$s, edited %1$d time in total.',
    2 => 'Last edited by %2$s on %3$s, edited %1$d times in total.',
  ),
  'MAX_OPTIONS_SELECT' => 
  array (
    1 => 'You may select <strong>%d</strong> option',
    2 => 'You may select up to <strong>%d</strong> options',
  ),
  'POST_DELETED_RESTORE' => 'This post has been deleted. It can be restored.',
  'TOPIC_TOOLS' => 'Topic tools',
  'VIEW_TOPIC_POSTS' => 
  array (
    1 => '%d post',
    2 => '%d posts',
  ),
));
