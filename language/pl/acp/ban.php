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
  '1_HOUR' => '1 godzina',
  '30_MINS' => '30 minut',
  '6_HOURS' => '6 godzin',
  'ACP_BAN_EXPLAIN' => 'Here you can control the banning of users by name, IP or email address. These methods prevent a user reaching any part of the board. You can give a short (maximum 3000 characters) reason for the ban if you wish. This will be displayed in the admin log. The duration of a ban can also be specified. If you want the ban to end on a specific date rather than after a set time period select <span style="text-decoration: underline;">Until -&gt;</span> for the ban length and enter a date in <kbd>YYYY-MM-DD</kbd> format.',
  'BAN_EXCLUDE' => 'Wyklucz z blokowania',
  'BAN_LENGTH' => 'Czas trwania blokady',
  'BAN_REASON' => 'Powód zablokowania',
  'BAN_GIVE_REASON' => 'Powód wyświetlany osobie zablokowanej',
  'BAN_UPDATE_SUCCESSFUL' => 'Lista blokad została zaktualizowana.',
  'BANNED_UNTIL_DATE' => 'do %s',
  'BANNED_UNTIL_DURATION' => '%1$s (do %2$s)',
  'EMAIL_BAN' => 'Ban one or more email addresses',
  'EMAIL_BAN_EXCLUDE_EXPLAIN' => 'Enable this to exclude the entered email address from all current bans.',
  'EMAIL_BAN_EXPLAIN' => 'To specify more than one email address enter each on a new line. To match partial addresses use * as the wildcard, e.g. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
  'EMAIL_NO_BANNED' => 'No banned email addresses',
  'EMAIL_UNBAN' => 'Un-ban or un-exclude emails',
  'EMAIL_UNBAN_EXPLAIN' => 'You can unban (or un-exclude) multiple email addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser. Excluded email addresses are emphasised.',
  'IP_BAN' => 'Blokowanie adresów IP',
  'IP_BAN_EXCLUDE_EXPLAIN' => 'Włączenie tej funkcji spowoduje wykluczenie wprowadzonego adresu IP ze wszystkich blokad.',
  'IP_BAN_EXPLAIN' => 'Aby zablokować jednocześnie kilka różnych adresów IP lub nazw serwerów, należy wprowadzić każdy z nich w nowym, osobnym wierszu. Aby określić zakres adresów IP, należy oddzielić początek i koniec zakresu myślnikiem (–). Można używać gwiazdki (*) jako wieloznacznika.',
  'IP_NO_BANNED' => 'Nie ma zablokowanych adresów IP',
  'IP_UNBAN' => 'Odblokowywanie lub usuwanie wykluczeń adresów IP',
  'IP_UNBAN_EXPLAIN' => 'Można usunąć blokadę lub wykluczenie wielu adresów IP w jednym kroku, używając odpowiednich kombinacji klawiszy myszy i klawiatury właściwych dla danego systemu operacyjnego i przeglądarki. Wykluczone adresy IP są wyróżnione.',
  'LENGTH_BAN_INVALID' => 'Data powinna mieć format <kbd>RRRR-MM-DD</kbd>.',
  'OPTIONS_BANNED' => 'Zablokowany',
  'OPTIONS_EXCLUDED' => 'Wykluczony',
  'PERMANENT' => 'Na stałe',
  'UNTIL' => 'Do',
  'USER_BAN_EXCLUDE_EXPLAIN' => 'Włączenie tej funkcji spowoduje wykluczenie wprowadzonej nazwy użytkownika ze wszystkich blokad.',
  'USER_BAN_EXPLAIN' => 'Można zablokować wielu użytkowników w jednym kroku poprzez wprowadzenie każdej nazwy użytkownika w nowym, oddzielnym wierszu. Można użyć narzędzia <b>Znajdź użytkownika</b>, aby wyszukać i automatycznie dodać użytkowników.',
  'USER_NO_BANNED' => 'Nie ma zablokowanych użytkowników',
  'USER_UNBAN' => 'Un-ban or un-exclude users by username',
  'USER_UNBAN_EXPLAIN' => 'Można usunąć blokadę lub wykluczenie wielu użytkowników w jednym kroku, używając odpowiednich kombinacji klawiszy myszy i klawiatury właściwych dla danego systemu operacyjnego i przeglądarki. Wykluczone nazwy użytkowników są wyróżnione.',
));
