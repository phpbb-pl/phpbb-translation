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
  'ACP_MASS_EMAIL_EXPLAIN' => 'Here you can email a message to either all of your users or all users of a specific group <strong>having the option to receive mass emails enabled</strong>. To achieve this an email will be sent out to the administrative email address supplied, with a blind carbon copy sent to all recipients. The default setting is to only include 20 recipients in such an email, for more recipients more emails will be sent. If you are emailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass emailing to take a long time, you will be notified when the script has completed.',
  'COMPOSE' => 'Utwórz wiadomość',
  'EMAIL_SEND_ERROR' => 'There were one or more errors while sending the email. Please check the %sError log%s for detailed error messages.',
  'EMAIL_SENT_QUEUE' => 'Wiadomość ta oczekuje na wysłanie.',
  'LOG_SESSION' => 'Zapisuj sesję mailową do raportu krytycznego',
  'SEND_IMMEDIATELY' => 'Wyślij niezwłocznie',
  'SEND_TO_GROUP' => 'Wyślij do grupy',
  'SEND_TO_USERS' => 'Wyślij do użytkowników',
  'SEND_TO_USERS_EXPLAIN' => 'Wprowadzenie tutaj nazw spowoduje zastąpienie wszystkich grup wybranych powyżej. Każdą nazwę użytkownika należy wprowadzić w osobnym wierszu.',
  'MAIL_BANNED' => 'Wysyłaj e-maile do zablokowanych użytkowników',
  'MAIL_BANNED_EXPLAIN' => 'When sending a mass email to a group you can select here whether banned users will also receive the email.',
  'MAIL_HIGH_PRIORITY' => 'Wysoki',
  'MAIL_LOW_PRIORITY' => 'Niski',
  'MAIL_NORMAL_PRIORITY' => 'Normalny',
  'MAIL_PRIORITY' => 'Priorytet',
  'MASS_MESSAGE' => 'Treść wiadomości',
  'MASS_MESSAGE_EXPLAIN' => 'Treść wiadomości musi być wpisana zwykłym tekstem. Przed wysłaniem wiadomości wszystkie znaczniki zostaną usunięte.',
));
