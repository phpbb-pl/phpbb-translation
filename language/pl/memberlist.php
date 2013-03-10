<?php
/**
*
* memberlist.php [Polish]
*
* @package language
* @copyright (c) 2008 phpBB Group
* @author phpBB2.pl & phpBB.pl
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ABOUT_USER'				=> 'Profil',
	'ACTIVE_IN_FORUM'			=> 'Najbardziej aktywny na forum',
	'ACTIVE_IN_TOPIC'			=> 'Najbardziej aktywny w temacie',
	'ADD_FOE'					=> 'Dodaj do wrogów',
	'ADD_FRIEND'				=> 'Dodaj do przyjaciół',
	'AFTER'						=> 'Po',
	'ALL'						=> 'Wszystkie',

	'BEFORE'					=> 'Przed',

	'CC_EMAIL'					=> 'Wyślij kopię tego e-mail\'a do siebie.',
	'CONTACT_USER'				=> 'Kontakt z użytkownikiem',

	'DEST_LANG'					=> 'Język',
	'DEST_LANG_EXPLAIN'			=> 'Wybierz (o ile to możliwe) odpowiedni język dla odbiorcy tej wiadomości.',

	'EMAIL_BODY_EXPLAIN'		=> 'Ta wiadomość zostanie wysłana jako zwykły tekst, nie używaj HTML\'a ani BBCode. Jako adres zwrotny tej wiadomości będzie podany Twój e-mail.',
	'EMAIL_DISABLED'			=> 'Przykro nam, ale wszystkie funkcje dotyczące e-maili zostały wyłączone.',
	'EMAIL_SENT'				=> 'E-mail został wysłany.',
	'EMAIL_TOPIC_EXPLAIN'		=> 'Ta wiadomość zostanie wysłana jako zwykły tekst, nie używaj HTML\'a ani BBCode. Pamiętaj, że informacje o temacie są już dołączone do wiadomości. Jako adres zwrotny tej wiadomości będzie podany Twój e-mail.',
	'EMPTY_ADDRESS_EMAIL'		=> 'Musisz podać prawidłowy adres e-mail odbiorcy.',
	'EMPTY_MESSAGE_EMAIL'		=> 'Musisz wpisać wiadomość przed wysłaniem.',
	'EMPTY_MESSAGE_IM'			=> 'Musisz wprowadzić wiadomość do wysłania.',
	'EMPTY_NAME_EMAIL'			=> 'Musisz wprowadzić prawdziwą nazwę odbiorcy.',
	'EMPTY_SUBJECT_EMAIL'		=> 'Musisz określić temat e-mail\'a.',
	'EQUAL_TO'					=> 'Równe',

	'FIND_USERNAME_EXPLAIN'		=> 'Użyj tego formularza, aby wyszukać określonych użytkowników. Nie musisz wypełniać wszystkich pól. Żeby porównać częściowe dane, użyj * jako zamiennika. Gdy wpisujesz daty, użyj formatu YYYY-MM-DD, np. 2007-06-01. Użyj pola wyboru do wybrania jednej lub więcej nazw użytkowników (wiele nazw użytkowników może być zaakceptowane, zależnie od samego formularza) i kliknij przycisk "Wybierz zaznaczone", aby powrócić do poprzedniego formularza.',
	'FLOOD_EMAIL_LIMIT'			=> 'Nie możesz teraz wysłać kolejnego e-mail\'a. Proszę spróbować poźniej.',

	'GROUP_LEADER'				=> 'Przywódca grupy',

	'HIDE_MEMBER_SEARCH'		=> 'Ukryj wyszukiwarką użytkowników',

	'IM_ADD_CONTACT'			=> 'Dodaj kontakt',
	'IM_AIM'					=> 'Musisz mieć zainstalowany AOL Instant Messenger aby użyć tej funkcji.',
	'IM_AIM_EXPRESS'			=> 'AIM Express',
	'IM_DOWNLOAD_APP'			=> 'Ściągnij aplikacje',
	'IM_ICQ'					=> 'Użytkownik może mieć zablokowane otrzymywanie wiadomości od nieznajomych.',
	'IM_JABBER'					=> 'Użytkownik może mieć zablokowane otrzymywanie wiadomości od nieznajomych.',
	'IM_JABBER_SUBJECT'			=> 'To jest wiadomość automatyczna, proszę na nią nie odpowiadać. Wiadomość od użytkownika %1$s z %2$s',
	'IM_MESSAGE'				=> 'Twoja wiadomość',
	'IM_MSNM'					=> 'Pamiętaj, aby tego tego użyć musisz mieć zainstalowany Windows Messenger',
	'IM_MSNM_BROWSER'			=> 'Twoja przeglądarka tego nie obsługuje.',
	'IM_MSNM_CONNECT'			=> 'MSNM nie jest połączony.\nMusisz się połączyć z MSNM, aby kontynuować.',
	'IM_NAME'					=> 'Twoja Nazwa',
	'IM_NO_DATA'				=> 'Nie ma żadnych odpowiednich informacji kontaktowych dla tego użytkownika.',
	'IM_NO_JABBER'				=> 'Przepraszamy, bezpośrednie wiadomości sieci Jabber nie są obsługiwane przez forum. Musisz mieć zainstalowanego klienta sieci Jabber, aby napisać do użytkownika.',
	'IM_RECIPIENT'				=> 'Odbiorca',
	'IM_SEND'					=> 'Wyślij wiadomość',
	'IM_SEND_MESSAGE'			=> 'Wyślij wiadomość',
	'IM_SENT_JABBER'			=> 'Twoja wiadomość do %1$s została wysłana pomyślnie.',
	'IM_USER'					=> 'Wyślij natychmiastową wiadomość',

	'LAST_ACTIVE'				=> 'Ostatnia aktywność',
	'LESS_THAN'					=> 'Mniej niż',
	'LIST_USER'					=> '1 użytkownik',
	'LIST_USERS'				=> '%d użytkowników',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Administrator forum wymaga, żebyś był zarejestrowany i zalogowany podczas oglądania listy członków ekipy.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Aby mieć dostęp do listy użytkowników Administrator forum wymaga, żebyś był zarejestrowany i zalogowany.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Aby mieć dostęp do wyszukiwarki użytkowników Administrator forum wymaga, żebyś był zarejestrowany i zalogowany.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Administrator wymaga, żebyś był zarejestrowany i zalogowany jeśli chcesz oglądać profile innych użytkowników.',

	'MORE_THAN'					=> 'Więcej niż',

	'NO_EMAIL'					=> 'Nie masz uprawnień do wysłania wiadomości e-mail do tego użytkownika.',
	'NO_VIEW_USERS'				=> 'Nie masz uprawnień do przeglądania listy użytkowników oraz profili.',

	'ORDER'						=> 'Sortowanie',
	'OTHER'						=> 'Inny',

	'POST_IP'					=> 'Wysłano z IP/domeny',

	'RANK'						=> 'Ranga',
	'REAL_NAME'					=> 'Nazwa odbiorcy',
	'RECIPIENT'					=> 'Odbiorca',
	'REMOVE_FOE'				=> 'Usuń wroga',
	'REMOVE_FRIEND'				=> 'Usuń przyjaciela',

	'SEARCH_USER_POSTS'			=> 'Wyszukaj posty użytkownika',
	'SELECT_MARKED'				=> 'Wybierz zaznaczone',
	'SELECT_SORT_METHOD'		=> 'Wybierz metodę sortowania',
	'SEND_AIM_MESSAGE'			=> 'Wyślij wiadomość AIM',
	'SEND_ICQ_MESSAGE'			=> 'Wyślij wiadomość ICQ',
	'SEND_IM'					=> 'Szybkie wiadomości',
	'SEND_JABBER_MESSAGE'		=> 'Wyślij wiadomość Jabber',
	'SEND_MESSAGE'				=> 'Wiadomość',
	'SEND_MSNM_MESSAGE'			=> 'Wyślij wiadomość MSNM/WLM',
	'SEND_YIM_MESSAGE'			=> 'Wyślij wiadomość YIM',
	'SORT_EMAIL'				=> 'E-mail',
	'SORT_LAST_ACTIVE'			=> 'Ostatnia aktywność',
	'SORT_POST_COUNT'			=> 'Ilość postów',

	'USERNAME_BEGINS_WITH'		=> 'Login rozpoczynający się na',
	'USER_ADMIN'				=> 'Zarządzaj użytkownikiem',
	'USER_BAN'					=> 'Banowanie',
	'USER_FORUM'				=> 'Statystyki użytkownika',
	'USER_LAST_REMINDED'		=> array(
		'0'						=> 'Nie wysyłano przypomnienia w tym czasie',
		'1'						=> 'Wysłanych przypomnień: %1$d<br />» %2$s',
	),

	'USER_ONLINE'				=> 'Online',
	'USER_PRESENCE'				=> 'Obecność na forum',

	'VIEWING_PROFILE'			=> 'Ogląda profil - %s',
	'VISITED'					=> 'Ostatnia wizyta',

	'WWW'						=> 'Strona WWW',
));

?>