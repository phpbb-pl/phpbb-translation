<?php
/** 
* /acp/users.php [Polish]
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
	'ADMIN_SIG_PREVIEW'				=> 'Podgląd sygnaturki',
	'AT_LEAST_ONE_FOUNDER'			=> 'Nie możesz zmienić statusu założyciela na status normalnego użytkownika. Wymagany jest przynajmniej jeden założyciel na forum. Jeśli chcesz zmienić status założyciela tego użytkownika, wcześniej uczyń innego użytkownika założycielem.',

	'BAN_ALREADY_ENTERED'			=> 'Ban został wcześniej pomyślnie wprowadzony. Lista banów nie została zaktualizowana.',
	'BAN_SUCCESSFUL'				=> 'Ban wprowadzony pomyślnie.',
	'CANNOT_BAN_ANONYMOUS'			=> 'Nie możesz zablokować konta gościa. Jego zezwolenia zmienisz w zakładce Zezwolenia.',

	'CANNOT_BAN_FOUNDER'			=> 'Nie możesz zbanować kont założycieli.',
	'CANNOT_BAN_YOURSELF'			=> 'Nie możesz zbanować sam siebie.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Nie możesz zdezaktywować kont botów. Zamiast tego proszę wyłączyć bota na stronie z botami.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Nie możesz zdezaktywować kont założycieli.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Nie możesz zdezaktywować swojego własnego konta.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Nie możesz wymusić ponownej aktywacji kont botów. Zamiast tego proszę ponownie aktywować bota na stronie z botami.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Nie możesz wymusić ponownej aktywacji kont założycieli.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Nie możesz wymusić ponownej aktywacji swojego konta.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Nie możesz usunąć konta gościa.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Nie możesz usunąć swojego własnego konta.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Nie możesz promować ignorowanych użytkowników na założycieli.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Musisz aktywować użytkowników zanim zmienisz ich status na założyciela, tylko aktywowani użytkownicy mogą mieć zmieniony status.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Musisz to określić tylko w przypadku zmiany adresu e-mail użytkownika.',

	'DELETE_POSTS'					=> 'Usuń posty',
	'DELETE_USER'					=> 'Usuń użytkownika',
	'DELETE_USER_EXPLAIN'			=> 'Proszę pamiętać, że usunięcie użytkownika jest ostateczne, nie da się go przywrócić.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Pomyślnie wymuszono ponowną aktywację.',
	'FOUNDER'						=> 'Założyciel',
	'FOUNDER_EXPLAIN'				=> 'Założyciel posiada wszystkie uprawnienia administratora i nigdy nie może zostać zbanowany ani usunięty przez użytkownika nie będącego założycielem.',

	'GROUP_APPROVE'					=> 'Zatwierdź członka',
	'GROUP_DEFAULT'					=> 'Ustaw grupę jako domyślną',
	'GROUP_DELETE'					=> 'Usuń użytkownika z grupy',
	'GROUP_DEMOTE'					=> 'Zdegraduj przywódcę grupy',
	'GROUP_PROMOTE'					=> 'Awansuj na przywódcę grupy',

	'IP_WHOIS_FOR'					=> 'Whois IP dla %s',

	'LAST_ACTIVE'					=> 'Ostatnia aktywność',

	'MOVE_POSTS_EXPLAIN'			=> 'Proszę wybrać forum, do którego chciałbyś przenieść wszystkie posty napisane przez tego użytkownika.',

	'NOT_MANAGE_FOUNDER'			=> 'Próbujesz zarządzać użytkownikiem ze statusem założyciela. Tylko założyciele mogą edytować innych założycieli.',
	'NO_SPECIAL_RANK'				=> 'Nie przydzielono rangi specjalnej',
	'NO_WARNINGS'					=> 'Brak ostrzeżeń.',

	'QUICK_TOOLS'					=> 'Szybkie narzędzia',

	'REGISTERED'					=> 'Zarejestrowany',
	'REGISTERED_IP'					=> 'Zarejestrowany z IP',
	'RETAIN_POSTS'					=> 'Zachowaj posty',

	'SELECT_FORM'					=> 'Wybierz formularz',
	'SELECT_USER'					=> 'Wybierz użytkownika',

	'USER_ADMIN'					=> 'Administracja użytkownikiem',
	'USER_ADMIN_ACTIVATE'			=> 'Aktywuj konto',
	'USER_ADMIN_ACTIVATED'			=> 'Użytkownik został pomyślnie aktywowany.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Awatar użytkownika został usunięty.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Zbanuj adres e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Adres e-mail zbanowany poprzez panel zarządzanie użytkownikiem',
	'USER_ADMIN_BAN_IP'				=> 'Zbanuj numer IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP zbanowane poprzez zarządzanie użytkownikiem',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Nazwa użytkownika zbanowana poprzez zarządzanie użytkownikiem',
	'USER_ADMIN_BAN_USER'			=> 'Zbanuj nazwę użytkownika',
	'USER_ADMIN_DEACTIVATE'			=> 'Dezaktywuj konto',
	'USER_ADMIN_DEACTIVED'			=> 'Użytkownik został pomyślnie dezaktywowany.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Usuń wszystkie załączniki',
	'USER_ADMIN_DEL_AVATAR'			=> 'Usuń awatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Skrzynka wysłanych wiadomości jest pusta',
	'USER_ADMIN_DEL_POSTS'			=> 'Usuń wszystkie posty',
	'USER_ADMIN_DEL_SIG'			=> 'Usuń podpis',
	'USER_ADMIN_EXPLAIN'			=> 'Tutaj możesz zmienić informacje i pewne specyficzne opcje użytkowników.',
	'USER_ADMIN_FORCE'				=> 'Wymuś ponowną aktywację',
	'USER_ADMIN_LEAVE_NR'			=> 'Usuń z nowych użytkowników',
	'USER_ADMIN_MOVE_POSTS'			=> 'Przenieś wszystkie posty',
	'USER_ADMIN_SIG_REMOVED'		=> 'Pomyślnie usunięto podpis z konta użytkownika.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Pomyślnie usunięto wszystkie załączniki tego użytkownika.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Nie można wyświetlić awataru, ponieważ awatary zostały wyłączone.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Nie można wyświetlić awataru, ponieważ rodzaj jego pliku został zabroniony.',
	'USER_AVATAR_UPDATED'			=> 'Pomyślnie zmodyfikowano szczegóły dotyczące awataru użytkownika.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Własne pola profilu',
	'USER_DELETED'					=> 'Użytkownik został pomyślnie usunięty.',
	'USER_GROUP_ADD'				=> 'Dodaj użytkownika do grupy',
	'USER_GROUP_NORMAL'				=> 'Zdefiniowane przez użytkownika grupy, których jest członkiem ',
	'USER_GROUP_PENDING'			=> 'Grupy użytkowników w trybie oczekującym',
	'USER_GROUP_SPECIAL'			=> 'Predefiniowane grupy, których użytkownik jest członkiem',
	'USER_LIFTED_NR'				=> 'Pomyślnie usunięto stan nowego użytkownika.',
	'USER_NO_ATTACHMENTS'			=> 'Brak załączonych plików do wyświetlenia.',
	'USER_OUTBOX_EMPTIED'			=> 'Pomyślnie wyczyszczono skrzynkę wysłanych wiadomości użytkownika.',
	'USER_OUTBOX_EMPTY'				=> 'Skrzynka wysłanych wiadomości była już pusta.',
	'USER_OVERVIEW_UPDATED'			=> 'Szczegóły użytkownika zaktualizowane.',
	'USER_POSTS_DELETED'			=> 'Usunięto poprawnie wszystkie posty napisane przez tego usera.',
	'USER_POSTS_MOVED'				=> 'Z sukcesem przeniesiono posty użytkownika do docelowego forum.',
	'USER_PREFS_UPDATED'			=> 'Ustawienia użytkownika zaktualizowane.',
	'USER_PROFILE'					=> 'Profil użytkownika',
	'USER_PROFILE_UPDATED'			=> 'Profil użytkownika zaktualizowany.',
	'USER_RANK'						=> 'Ranga użytkownika',
	'USER_RANK_UPDATED'				=> 'Ranga użytkownika zaktualizowana.',
	'USER_SIG_UPDATED'				=> 'Podpis zmieniony pomyślnie.',
	'USER_TOOLS'					=> 'Podstawowe narzędzia',
	'USER_WARNING_LOG_DELETED'		=> 'Brak dostępnych informacji. Prawdopodobnie wpis logów został usunięty.',
));

?>