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
  'USER_BAN' => 'Blokowanie',
  'ALL' => 'Wszyscy',
  'EMAIL_SENT' => 'The email has been sent.',
  'LAST_ACTIVE' => 'Ostatnio aktywny',
  'USER_ADMIN' => 'Zarządzaj',
  'ABOUT_USER' => 'Profil',
  'ACTIVE_IN_FORUM' => 'Najaktywniejszy na forum',
  'ACTIVE_IN_TOPIC' => 'Najaktywniejszy w temacie',
  'ADD_FOE' => 'Dodaj do wrogów',
  'ADD_FRIEND' => 'Dodaj do przyjaciół',
  'AFTER' => 'Po',
  'BEFORE' => 'Przed',
  'CC_EMAIL' => 'Send a copy of this email to yourself.',
  'DEST_LANG' => 'Język',
  'DEST_LANG_EXPLAIN' => 'Wybierz właściwy – jeśli jest dostępny – język dla odbiorcy tej wiadomości.',
  'EMAIL_BODY_EXPLAIN' => 'This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your email address.',
  'EMAIL_DISABLED' => 'Sorry but all email related functions have been disabled.',
  'EMAIL_TOPIC_EXPLAIN' => 'This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your email address.',
  'EMPTY_ADDRESS_EMAIL' => 'You must provide a valid email address for the recipient.',
  'EMPTY_MESSAGE_EMAIL' => 'Należy wpisać treść wiadomości.',
  'EMPTY_MESSAGE_IM' => 'Należy wpisać treść wiadomości.',
  'EMPTY_NAME_EMAIL' => 'Należy podać rzeczywistą nazwę odbiorcy.',
  'EMPTY_SUBJECT_EMAIL' => 'You must specify a subject for the email.',
  'EQUAL_TO' => 'Liczba równa',
  'FIND_USERNAME_EXPLAIN' => 'Tego formularza można użyć do szukania użytkowników. Nie trzeba wypełniać wszystkich pól. Można użyć gwiazdki (*) jako zamiennika dowolnego ciągu znaków. Datę należy wprowadzić w formacie <kbd>RRRR-MM-DD</kbd>, np. <samp>2007-08-31</samp>. Można też na poniżej wyświetlonej liście odszukać użytkownika, kliknąć jego nazwę, by zobaczyć profil tego użytkownika lub kliknąć odnośnik [Wybierz], aby przeprowadzać dalsze operacje.',
  'FLOOD_EMAIL_LIMIT' => 'You cannot send another email at this time. Please try again later.',
  'HIDE_MEMBER_SEARCH' => 'Ukryj wyszukiwanie użytkowników',
  'IM_ADD_CONTACT' => 'Dodaj kontakt',
  'IM_DOWNLOAD_APP' => 'Pobierz program',
  'IM_JABBER' => 'Użytkownicy mogą mieć włączoną funkcję nieodbierania niechcianych wiadomości.',
  'IM_JABBER_SUBJECT' => 'To jest wiadomość wygenerowana automatycznie. Nie odpowiadaj na nią! Wiadomość od użytkownika %1$s wysłana %2$s.',
  'IM_MESSAGE' => 'Twoja wiadomość',
  'IM_NAME' => 'Twoja nazwa',
  'IM_NO_DATA' => 'Nie ma stosownych informacji kontaktowych dla tego użytkownika.',
  'IM_NO_JABBER' => 'Kontakty bezpośrednie z użytkownikami protokółu Jabber nie są obsługiwane przez tę witrynę. Aby kontaktować się z powyższym odbiorcą, musisz mieć zainstalowanego klienta protokółu Jabber.',
  'IM_RECIPIENT' => 'Odbiorca',
  'IM_SEND' => 'Wyślij',
  'IM_SEND_MESSAGE' => 'Wyślij wiadomość',
  'IM_SENT_JABBER' => 'Wiadomość do użytkownika %1$s została wysłana.',
  'IM_USER' => 'Wyślij wiadomość',
  'LESS_THAN' => 'Liczba < niż',
  'LOGIN_EXPLAIN_MEMBERLIST' => 'Aby obejrzeć listę użytkowników, musisz się zalogować.',
  'LOGIN_EXPLAIN_SEARCHUSER' => 'Aby szukać użytkowników, musisz się zalogować.',
  'LOGIN_EXPLAIN_VIEWPROFILE' => 'Aby oglądać profile, musisz się zalogować.',
  'MORE_THAN' => 'Liczba > niż',
  'NO_EMAIL' => 'You are not permitted to send email to this user.',
  'NO_VIEW_USERS' => 'Nie masz uprawnień, aby przeglądać listę użytkowników lub profile.',
  'ORDER' => 'Kierunek',
  'OTHER' => 'Inny',
  'POST_IP' => 'Napisano z IP/domeny',
  'REAL_NAME' => 'Nazwa odbiorcy',
  'REMOVE_FOE' => 'Usuń wroga',
  'REMOVE_FRIEND' => 'Usuń przyjaciela',
  'SELECT_MARKED' => 'Dodaj zaznaczonych',
  'SELECT_SORT_METHOD' => 'Wybierz metodę sortowania',
  'SEND_ICQ_MESSAGE' => 'Wyślij wiadomość za pomocą ICQ',
  'SEND_IM' => 'Wiadomości błyskawiczne',
  'SEND_JABBER_MESSAGE' => 'Wyślij wiadomość za pomocą Jabbera',
  'SEND_MESSAGE' => 'Wiadomość',
  'SEND_YIM_MESSAGE' => 'Wyślij wiadomość za pomocą YIM',
  'SORT_EMAIL' => 'Email',
  'SORT_LAST_ACTIVE' => 'Ostatnia aktywność',
  'SORT_POST_COUNT' => 'Liczba postów',
  'USERNAME_BEGINS_WITH' => 'Nazwa użytkownika zaczyna się na',
  'USER_FORUM' => 'Statystyki użytkownika',
  'USER_LAST_REMINDED' => 
  array (
    0 => 'Jeszcze nie wysłano żadnego przypomnienia',
    1 => 'Wysłane przypomnienia: %1$d<br />» %2$s',
    2 => '%1$d reminder sent<br />» %2$s',
  ),
  'USER_ONLINE' => 'Online',
  'USER_PRESENCE' => 'Obecność na forum',
  'VIEWING_PROFILE' => 'Oglądasz profil – %s',
  'CONTACT_ADMIN' => 'Contact a Board Administrator',
  'EDIT_PROFILE' => 'Edit profile',
  'EMPTY_SENDER_EMAIL' => 'You must provide a valid email address.',
  'EMPTY_SENDER_NAME' => 'You must provide a name.',
  'LIST_USERS' => 
  array (
    1 => '%d user',
    2 => '%d users',
  ),
  'LOGIN_EXPLAIN_TEAM' => 'The board requires you to be registered and logged in to view the team listing.',
  'NO_CONTACT_FORM' => 'The board administrator contact form has been disabled.',
  'NO_CONTACT_PAGE' => 'The board administrator contact page has been disabled.',
  'SENDER_EMAIL_ADDRESS' => 'Your email address',
  'SENDER_NAME' => 'Your name',
  'USERS_PER_PAGE' => 'Users per page',
  'VIEW_FACEBOOK_PROFILE' => 'View Facebook Profile',
  'VIEW_SKYPE_PROFILE' => 'View Skype Profile',
  'VIEW_TWITTER_PROFILE' => 'View Twitter Profile',
  'VIEW_YOUTUBE_CHANNEL' => 'View YouTube Channel',
  'VIEW_GOOGLEPLUS_PROFILE' => 'View Google+ Profile',
));
