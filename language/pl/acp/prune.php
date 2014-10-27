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
  'PRUNE_ANNOUNCEMENTS' => 'Usuń ogłoszenia',
  'PRUNE_STICKY' => 'Usuń przyklejone posty',
  'PRUNE_OLD_POLLS' => 'Usuń stare ankiety',
  'PRUNE_OLD_POLLS_EXPLAIN' => 'Usuwa tematy zawierające ankiety, w których nie oddano głosów w czasie aktywności ankiety.',
  'ACP_PRUNE_USERS_EXPLAIN' => 'This section allows you to delete or deactivate users on your board. Accounts can be filtered in a variety of ways; by post count, most recent activity, etc. Criteria may be combined to narrow down which accounts are affected. For example, you can prune users with fewer than 10 posts, who were also inactive after 2002-01-01. Use * as a wildcard for text fields. Alternatively, you may skip the criteria selection completely by entering a list of users (each on a separate line) into the text field. Take care with this facility! Once a user is deleted, there is no way to reverse the action.',
  'DEACTIVATE_DELETE' => 'Dezaktywuj lub usuń',
  'DEACTIVATE_DELETE_EXPLAIN' => 'Wybierz opcję – dezaktywować użytkownika, czy go usunąć. Pamiętaj, że kont usuniętych użytkowników nie można odtworzyć!',
  'DELETE_USERS' => 'Usuń',
  'DELETE_USER_POSTS' => 'Usuń posty usuwanych użytkowników',
  'DELETE_USER_POSTS_EXPLAIN' => 'Usuwa posty napisane przez usuwanych użytkowników. Nie oddziałuje na posty użytkowników dezaktywowanych.',
  'JOINED_EXPLAIN' => 'Enter a date in <kbd>YYYY-MM-DD</kbd> format. You may use both fields to specify an interval, or leave one blank for an open date range.',
  'LAST_ACTIVE_EXPLAIN' => 'Wprowadź datę w formacie <kbd>RRRR-MM-DD</kbd>. Wprowadź <kbd>0000-00-00</kbd>, aby usunąć użytkowników, którzy nigdy się nie zalogowali. Warunki <em>Przed</em> i <em>Po</em> będą ignorowane.',
  'PRUNE_USERS_LIST' => 'Użytkownicy do usunięcia',
  'PRUNE_USERS_LIST_DELETE' => 'With the selected critera for pruning users the following accounts will be removed. You can remove individual users from the deletion list by unchecking the box next to their username.',
  'PRUNE_USERS_LIST_DEACTIVATE' => 'With the selected critera for pruning users the following accounts will be deactivated. You can remove individual users from the deactivation list by unchecking the box next to their username.',
  'SELECT_USERS_EXPLAIN' => 'Enter specific usernames here. They will be used in preference to the criteria above. Founders cannot be pruned.',
  'USER_DEACTIVATE_SUCCESS' => 'Dezaktywowano wybranych użytkowników.',
  'USER_DELETE_SUCCESS' => 'Usunięto wybranych użytkowników.',
  'USER_PRUNE_FAILURE' => 'Nie ma użytkowników spełniających wybrane kryteria.',
  'WRONG_ACTIVE_JOINED_DATE' => 'Wprowadzona data jest nieprawidłowa. Data powinna być wprowadzona w formacie <kbd>RRRR-MM-DD</kbd>.',
  'ACP_PRUNE_FORUMS_EXPLAIN' => 'Tutaj można usunąć dowolny temat bez odpowiedzi bądź nieoglądany w ciągu określonej liczby dni. Jeśli nie zostanie określona liczba dni, wszystkie tematy zostaną usunięte. Domyślnie nie zostaną usunięte tematy, w których są zamieszczone ogłoszenia, przyklejone posty i aktywne ankiety.',
  'FORUM_PRUNE' => 'Czyszczenie forum',
  'NO_PRUNE' => 'Nie ma forów do wyczyszczenia.',
  'SELECTED_FORUM' => 'Wybrane forum',
  'SELECTED_FORUMS' => 'Wybrane fora',
  'POSTS_PRUNED' => 'Usunięte posty',
  'PRUNE_FINISHED_POLLS' => 'Usuń zamknięte ankiety',
  'PRUNE_FINISHED_POLLS_EXPLAIN' => 'Usuwa tematy z wygasłymi ankietami.',
  'PRUNE_FORUM_CONFIRM' => 'Czy na pewno chcesz wyczyścić zaznaczone fora, stosując wybrane kryteria? Operacji tej nie można odwrócić.',
  'PRUNE_NOT_POSTED' => 'Liczba dni od ostatniej publikacji',
  'PRUNE_NOT_VIEWED' => 'Liczba dni od ostatnich odwiedzin',
  'PRUNE_SUCCESS' => 'Czyszczenie forum zostało zakończone.',
  'TOPICS_PRUNED' => 'Usunięte tematy',
  'CRITERIA' => 'Criteria',
  'POSTS_ON_QUEUE' => 'Posts Awaiting Approval',
  'PRUNE_USERS_GROUP_EXPLAIN' => 'Limit to users within the selected group.',
  'PRUNE_USERS_GROUP_NONE' => 'All groups',
));
