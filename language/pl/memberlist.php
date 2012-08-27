<?php
/**
*
* memberlist [Polski]
*
* @package language
* @version $Id: memberlist.php 9933 2009-08-06 09:12:21Z marshalrusty $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 9933 2011-06-16 13:05:47 Zespół Olympus.pl $

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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Najaktywniejszy na forum',
	'ACTIVE_IN_TOPIC'		=> 'Najaktywniejszy w temacie',
	'ADD_FOE'				=> 'Dodaj do wrogów',
	'ADD_FRIEND'			=> 'Dodaj do przyjaciół',
	'AFTER'					=> 'Po',

	'ALL'					=> 'Wszyscy',

	'BEFORE'				=> 'Przed',

	'CC_EMAIL'				=> 'Wyślij kopię tej wiadomości do nadawcy',
	'CONTACT_USER'			=> 'Kontakt z',

	'DEST_LANG'				=> 'Język',
	'DEST_LANG_EXPLAIN'		=> 'Wybierz właściwy – jeśli jest dostępny – język dla odbiorcy tej wiadomości.',

	'EMAIL_BODY_EXPLAIN'	=> 'Wiadomość zostanie wysłana jako zwykły tekst bez znaczników HTML i BBCode. Twój adres e-mail zostanie ustawiony jako adres zwrotny tej wiadomości.',
	'EMAIL_DISABLED'		=> 'Przepraszamy, ale wszystkie funkcje e-maili zostały wyłączone.',
	'EMAIL_SENT'			=> 'Wiadomość e-mail została wysłana.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Wiadomość zostanie wysłana jako zwykły tekst bez znaczników HTML i BBCode. Informacje o temacie zostały załączone w wiadomości. Twój adres e-mail zostanie ustawiony jako adres zwrotny tej wiadomości.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Należy podać aktywny adres e-mail odbiorcy.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Należy wpisać treść wiadomości.',
	'EMPTY_MESSAGE_IM'		=> 'Należy wpisać treść wiadomości.',
	'EMPTY_NAME_EMAIL'		=> 'Należy podać rzeczywistą nazwę odbiorcy.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Należy podać temat wiadomości.',
	'EQUAL_TO'				=> 'Liczba równa',

	'FIND_USERNAME_EXPLAIN'	=> 'Tego formularza można użyć do szukania użytkowników. Nie trzeba wypełniać wszystkich pól. Można użyć gwiazdki (*) jako zamiennika dowolnego ciągu znaków. Datę należy wprowadzić w formacie <kbd>RRRR-MM-DD</kbd>, np. <samp>2007-08-31</samp>. Można też na poniżej wyświetlonej liście odszukać użytkownika, kliknąć jego nazwę, by zobaczyć profil tego użytkownika lub kliknąć odnośnik [Wybierz], aby przeprowadzać dalsze operacje.',
	'FLOOD_EMAIL_LIMIT'		=> 'Nie możesz teraz wysłać kolejnej wiadomości. Spróbuj ponownie za chwilę.',

	'GROUP_LEADER'			=> 'Lider grupy',

	'HIDE_MEMBER_SEARCH'	=> 'Ukryj wyszukiwanie użytkowników',

	'IM_ADD_CONTACT'		=> 'Dodaj kontakt',
	'IM_AIM'				=> 'Aby użyć tej funkcji, musisz mieć zainstalowany komunikator AOL Instant Messenger.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Pobierz program',
	'IM_ICQ'				=> 'Użytkownicy mogą mieć włączoną funkcję nieodbierania niechcianych wiadomości.',
	'IM_JABBER'				=> 'Użytkownicy mogą mieć włączoną funkcję nieodbierania niechcianych wiadomości.',
	'IM_JABBER_SUBJECT'		=> 'To jest wiadomość wygenerowana automatycznie. Nie odpowiadaj na nią! Wiadomość od użytkownika %1$s wysłana %2$s.',
	'IM_MESSAGE'			=> 'Twoja wiadomość',
	'IM_MSNM'				=> 'Aby użyć tej funkcji, musisz mieć zainstalowany komunikator Windows Messenger.',
	'IM_MSNM_BROWSER'		=> 'Twoja przeglądarka tego nie obsługuje.',
	'IM_MSNM_CONNECT'		=> 'MSNM nie jest podłączony.\nPodłącz się do MSNM, aby kontynuować.',
	'IM_NAME'				=> 'Twoja nazwa',
	'IM_NO_DATA'			=> 'Nie ma stosownych informacji kontaktowych dla tego użytkownika.',
	'IM_NO_JABBER'			=> 'Kontakty bezpośrednie z użytkownikami protokółu Jabber nie są obsługiwane przez tę witrynę. Aby kontaktować się z powyższym odbiorcą, musisz mieć zainstalowanego klienta protokółu Jabber.',
	'IM_RECIPIENT'			=> 'Odbiorca',
	'IM_SEND'				=> 'Wyślij',
	'IM_SEND_MESSAGE'		=> 'Wyślij wiadomość',
	'IM_SENT_JABBER'		=> 'Wiadomość do użytkownika %1$s została wysłana.',
	'IM_USER'				=> 'Wyślij wiadomość',

	'LAST_ACTIVE'				=> 'Ostatnio aktywny',
	'LESS_THAN'					=> 'Liczba < niż',
	'LIST_USER'					=> 'Użytkownicy: 1',
	'LIST_USERS'				=> 'Użytkownicy: %d',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Aby obejrzeć listę członków zespołu administracyjnego, musisz się zalogować.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Aby obejrzeć listę użytkowników, musisz się zalogować.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Aby szukać użytkowników, musisz się zalogować.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Aby oglądać profile, musisz się zalogować.',

	'MORE_THAN'				=> 'Liczba > niż',

	'NO_EMAIL'				=> 'Nie masz uprawnień, aby wysłać e-maila do tego użytkownika.',
	'NO_VIEW_USERS'			=> 'Nie masz uprawnień, aby przeglądać listę użytkowników lub profile.',

	'ORDER'					=> 'Kierunek',
	'OTHER'					=> 'Inny',

	'POST_IP'				=> 'Napisano z IP/domeny',

	'REAL_NAME'				=> 'Nazwa odbiorcy',
	'RECIPIENT'				=> 'Odbiorca',
	'REMOVE_FOE'			=> 'Usuń wroga',
	'REMOVE_FRIEND'			=> 'Usuń przyjaciela',

	'SELECT_MARKED'			=> 'Dodaj zaznaczonych',
	'SELECT_SORT_METHOD'	=> 'Wybierz metodę sortowania',
	'SEND_AIM_MESSAGE'		=> 'Wyślij wiadomość za pomocą AIM',
	'SEND_ICQ_MESSAGE'		=> 'Wyślij wiadomość za pomocą ICQ',
	'SEND_IM'				=> 'Wiadomości błyskawiczne',
	'SEND_JABBER_MESSAGE'	=> 'Wyślij wiadomość za pomocą Jabbera',
	'SEND_MESSAGE'			=> 'Wiadomość',
	'SEND_MSNM_MESSAGE'		=> 'Wyślij wiadomość za pomocą MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Wyślij wiadomość za pomocą YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Ostatnia aktywność',
	'SORT_POST_COUNT'		=> 'Liczba postów',

	'USERNAME_BEGINS_WITH'	=> 'Nazwa użytkownika zaczyna się na',
	'USER_ADMIN'			=> 'Zarządzaj',
	'USER_BAN'				=> 'Blokowanie',
	'USER_FORUM'			=> 'Statystyki użytkownika',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Jeszcze nie wysłano żadnego przypomnienia',
		1		=> 'Wysłane przypomnienia: %1$d<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Obecność na forum',

	'VIEWING_PROFILE'		=> 'Oglądasz profil – %s',
	'VISITED'				=> 'Ostatnia wizyta',

	'WWW'					=> 'Witryna internetowa',
));

?>
