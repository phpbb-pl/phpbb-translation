<?php
/**
* acp_permissions [Polski]
*
* @package language
* @version $Id: permissions_phpbb.php 9686 2009-06-26 11:52:54Z rxu $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 9686 2009-09-25 18:14:25 Zespół Olympus.pl$
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Czynności',
		'content'		=> 'Treść',
		'forums'		=> 'Fora',
		'misc'			=> 'Różne',
		'permissions'	=> 'Uprawnienia',
		'pm'			=> 'Prywatne wiadomości',
		'polls'			=> 'Ankiety',
		'post'			=> 'Posty',
		'post_actions'	=> 'Zarządzanie postami',
		'posting'		=> 'Tworzenie',
		'profile'		=> 'Profil',
		'settings'		=> 'Ustawienia',
		'topic_actions'	=> 'Zarządzanie tematami',
		'user_group'	=> 'Użytkownicy i grupy',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Uprawnienia użytkownika',
		'a_'			=> 'Uprawnienia administratora',
		'm_'			=> 'Uprawnienia moderatora',
		'f_'			=> 'Uprawnienia na forum',
		'global'		=> array(
			'm_'			=> 'Uprawnienia moderatora globalnego',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Przeglądanie profili, listy użytkowników i listy użytkowników online', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Zmiana nazwy użytkownika', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Zmiana hasła', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Zmiana adresu e-mail', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Zmiana awatara', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Zmiana domyślnej grupy użytkownika', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Załączanie plików', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Pobieranie plików', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Zapisywanie kopii roboczych', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Wyłączanie cenzury słów', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Używanie podpisu', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Wysyłanie prywatnych wiadomości', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Wysyłanie wiadomości do wielu użytkowników jednocześnie', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Wysyłanie wiadomości do grup', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Czytanie prywatnych wiadomości', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Edytowanie swoich prywatnych wiadomości', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Usuwanie prywatnych wiadomości ze swoich folderów', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Przekazywanie prywatnych wiadomości dalej', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Wysyłanie prywatnych wiadomości e-mailem', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Drukowanie prywatnych wiadomości', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Załączanie plików w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Pobieranie plików załączonych w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Używanie BBCode w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Zamieszczanie emotikon w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Używanie znacznika BBCode [img] w prywatnych wiadomościach', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Używanie znacznika BBCode [flash] w prywatnych wiadomościach', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Wysyłanie e-maili', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Wysyłanie błyskawicznych wiadomości', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Ignorowanie limitu anty-przepełnieniowego', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Ukrywanie obecności na forum', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Możliwość widzenia ukrytych użytkowników online', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Przeszukiwanie witryny', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Możliwość widzenia forum', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Czytanie zawartości forum', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Tworzenie nowych tematów', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Odpowiadanie w istniejących tematach', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Używanie ikon tematów/postów', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Zamieszczanie ogłoszeń', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Przyklejanie tematów', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Tworzenie ankiet', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Głosowanie w ankietach', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Zmiana oddanego głosu', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Załączanie plików', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Pobieranie plików', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Używanie podpisów', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Używanie BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Zamieszczanie emotikon', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Używanie znacznika BBCode [img]', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Używanie znacznika BBCode [flash]', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Edytowanie swoich postów', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Usuwanie swoich postów', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Zamykanie swoich tematów', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Przesuwanie tematów w górę', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Zgłaszanie postów', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Obserwowanie forum', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Drukowanie tematów', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Wysyłanie tematów przez e-mail', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Przeszukiwanie forum', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Ignorowanie limitu anty-przepełnieniowego', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Zwiększanie licznika postów<br /><em>Funkcja ta dotyczy tylko nowych postów.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Pisanie bez konieczności akceptacji', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Edytowanie postów', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Usuwanie postów', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Akceptowanie i odrzucanie postów', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Zamykanie i usuwanie zgłoszenia', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Zmiana autora postu', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Przenoszenie tematów', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Zamykanie tematów', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Dzielenie tematów', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Łączenie tematów', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Przeglądanie szczegółów postów', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Udzielanie ostrzeżeń<br /><em>To uprawnienie może zostać nadane tylko globalnie.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Zarządzanie blokowaniem<br /><em>To uprawnienie może zostać nadane tylko globalnie.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Zmiana ustawień forum i sprawdzanie dostępności aktualizacji', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Zmiana ustawień serwera i komunikacji', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Zmiana ustawień Jabbera', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Przeglądanie ustawień PHP', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Zarządzanie forami', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Dodawanie nowych forów', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Usuwanie forów', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Czyszczenie forów', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Zmiana ikon tematów, postów i emotikon', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Zmiana cenzury słów', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Definiowanie nowych znaczników BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Zmiana ustawień załączników', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Zarządzanie użytkownikami<br /><em>To uprawnienie zawiera również prawo do oglądania identyfikatora przeglądarki na liście przeglądających forum.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Usuwanie użytkowników, czyszczenie listy', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Zarządzanie grupami', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Dodawanie nowych grup', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Usuwanie grup', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Zarządzanie rangami', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Zarządzanie dodatkowymi polami profilu', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Zarządzanie zabronionymi nazwami', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Zarządzanie blokowaniem', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Przeglądanie zestawów uprawnień', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Zmiana uprawnień poszczególnych grup', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Zmiana uprawnień poszczególnych użytkowników', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Zmiana uprawnień forum', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Zmiana uprawnień moderatora', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Zmiana uprawnień administratora', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Zmiana uprawnień użytkownika', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Zarządzanie zestawami uprawnień', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Używanie uprawnień innych użytkowników', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Zarządzanie stylami', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Przeglądanie dzienników zdarzeń', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Czyszczenie dzienników zdarzeń', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Zarządzanie modułami', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Zarządzanie pakietami językowymi', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang'   => 'Masowe wysyłanie e-maili', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang'   => 'Zarządzanie botami', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Zarządzanie powodami zgłoszeń i odrzuceń', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Tworzenie kopii danych i przywracanie danych bazy', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Zarządzanie mechanizmami i ustawieniami wyszukiwania', 'cat' => 'misc'),
));

?>
