<?php
/**
*
* acp_groups.php [Polish]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'W tym panelu możesz zarządzać wszystkimi grupami. Możesz usuwać, tworzyć i edytować istniejące grupy a także wybierać moderatorów, zamykać, bądź otwierać/ukrywać/zamykać grupy, oraz zmieniać ich nazwę i opis.',
	'ADD_USERS'						=> 'Dodaj użytkowników',
	'ADD_USERS_EXPLAIN'				=> 'Tutaj możesz dodawać nowych użytkowników do grupy. Możesz wybrać czy grupa ma się stać grupą domyślną dla wybranych użytkowników. Dodatkowo możesz określić ich jako przywódców grupy. Proszę wprowadzić każdą nazwę użytkownika w oddzielnej linii.',

	'COPY_PERMISSIONS'				=> 'Copy permissions from',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Utworzona grupa będzie posiadała takie same Zezwolenia jak ta, którą tu wybierzesz.',
	'CREATE_GROUP'					=> 'Utwórz nową grupę',

	'GROUPS_NO_MEMBERS'				=> 'Ta grupa nie posiada żadnych członków',
	'GROUPS_NO_MODS'				=> 'Brak zdefiniowanych przywódców grupy',
	'GROUP_APPROVE'					=> 'Zatwierdź członka',
	'GROUP_APPROVED'				=> 'Zatwierdzeni członkowie',
	'GROUP_AVATAR'					=> 'Awatar grupy',
	'GROUP_AVATAR_EXPLAIN'			=> 'Ten obrazek będzie wyświetlany w Panelu Grupy',
	'GROUP_CLOSED'					=> 'Zamknięta',
	'GROUP_COLOR'					=> 'Kolor grupy',
	'GROUP_COLOR_EXPLAIN'			=> 'Definiuje kolor nazwy użytkowników, zostaw puste dla domyślnego koloru.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Jesteś pewien, że chcesz dodać użytkownika %1$s do grupy?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Jesteś pewien, że chcesz dodać użytkowników %1$s do grupy?',
	'GROUP_CREATED'					=> 'Grupa została pomyślnie utworzona.',
	'GROUP_DEFAULT'					=> 'Ustaw jako grupę domyślną',
	'GROUP_DEFS_UPDATED'			=> 'Ustaw jako grupę domyślną dla zaznaczonych użytkowników.',
	'GROUP_DELETE'					=> 'Usuń użytkownika z grupy',
	'GROUP_DELETED'					=> 'Grupa usunięta i ustawienia domyślnych grup wybrane pomyślnie.',
	'GROUP_DEMOTE'					=> 'Zdegraduj przywódcę grupy',
	'GROUP_DESC'					=> 'Opis grupy',
	'GROUP_DETAILS'					=> 'Szczegóły grupy',
	'GROUP_EDIT_EXPLAIN'			=> 'Tutaj możesz edytować istniejącą grupę. Możesz zmienić jej nazwę, opis i typ (otwarta, zamknięta itd.). Możesz również ustawić takie opcje jak kolor, ranga itd. Zmiany dokonane tutaj spowodują nadpisanie obecnych ustawień użytkowników. Pamiętaj, że członkowie grupy mogą ignorować ustawienia awataru grupy, jeśli nie ustawisz inaczej w zezwoleniach użytkownika.',
	'GROUP_ERR_USERS_EXIST'			=> 'Wybrani użytkownicy są już członkami tej grupy.',
	'GROUP_FOUNDER_MANAGE'			=> 'Zarządza tylko założyciel',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Ogranicz możliwość zarządzania tą grupą tylko dla założycieli. Użytkownicy posiadający zezwolenia do zarządzania grupami nadal będą widzieć grupę tak jak jej członkowie.',
	'GROUP_HIDDEN'					=> 'Ukryta',
	'GROUP_LANG'					=> 'Język grupy',
	'GROUP_LEAD'					=> 'Przywódcy grupy',
	'GROUP_LEADERS_ADDED'			=> 'Nowy lider grupy został dodany pomyślnie.',
	'GROUP_LEGEND'					=> 'Pokazuj grupę w legendzie',
	'GROUP_LIST'					=> 'Aktualni członkowie',
	'GROUP_LIST_EXPLAIN'			=> 'To jest kompletna lista użytkowników będących członkami tej grupy. Możesz usunąć użytkowników (z wyjątkiem pewnych grupy specjalnych) lub dodać nowego jeśli tego chcesz.',
	'GROUP_MAX_RECIPIENTS'			=> 'Maksymalna liczba dozwolonych odbiorców na prywatną wiadomość',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Maksymalna liczba dozwolonych odbiorców w prywatnej wiadomości. Jeżeli wprowadzono 0, używane jest ustawienie forum.',
	'GROUP_MEMBERS'					=> 'Członkowie grupy',
	'GROUP_MEMBERS_EXPLAIN'			=> 'To jest pełna lista wszystkich członków tej grupy. Zawiera osobne sekcje dla przywódców, oczekujących i istniejących członków. Możesz tutaj zarządzać wszystkimi aspektami: kto jest członkiem grupy i jaką pełni w niej rolę. Aby zabrać przywództwo, ale pozostawić go w grupie, wybierz Zdegraduj przywódcę grupy zamiast usuń. Podobnie użyj Awansuj na przywódcę grupy, aby uczynić członka grupy jej przywódcą.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limit prywatnych wiadomości grupy przypadających na katalog',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'To ustawienie nadpisuje nałożony użytkownikowi limit wiadomości. Wartość 0 oznacza, że zostanie użyta domyślna wartość limitu.',
	'GROUP_MODS_ADDED'				=> 'Nowi przywódcy grupy zostali dodani pomyślnie.',
	'GROUP_MODS_DEMOTED'			=> 'Przywódcy grupy zdegradowani pomyślnie.',
	'GROUP_MODS_PROMOTED'			=> 'Członkowie grupy zostali pomyślnie awansowani.',
	'GROUP_NAME'					=> 'Nazwa grupy',
	'GROUP_NAME_TAKEN'				=> 'Nazwa grupy, którą podałeś jest już używana. Proszę wybrać inną.',
	'GROUP_OPEN'					=> 'Otwarta',
	'GROUP_OPTIONS_SAVE'			=> 'Dodatkowe opcje grupy',
	'GROUP_PENDING'					=> 'Oczekujący członkowie',
	'GROUP_PROMOTE'					=> 'Awansuj na przywódcę grupy',
	'GROUP_RANK'					=> 'Ranga grupy',
	'GROUP_RECEIVE_PM'				=> 'Grupa posiada możliwość otrzymywania prywatnych wiadomości',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Pamiętaj, że do ukrytych grup nie można wysyłać wiadomości, niezależnie od tego ustawienia.',
	'GROUP_REQUEST'					=> 'Prośba',
	'GROUP_SETTINGS_SAVE'			=> 'Ustawienia całej grupy',
	'GROUP_SKIP_AUTH'				=> 'Zwolnij przywódcę grupy od zezwolneń',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Jeżeli włączone, to przywódca grupy nie będzie dłużej dziedziczył zezwoleń od tej grupy.',
	'GROUP_TYPE'					=> 'Typ grupy',
	'GROUP_TYPE_EXPLAIN'			=> 'Określa, którzy użytkownicy mogą przyłączać się lub oglądać tą grupę.',
	'GROUP_UPDATED'					=> 'Preferencje grupy pomyślnie zaktualizowano.',
	'GROUP_USERS_ADDED'				=> 'Nowi użytkownicy zostali pomyślnie dodani do grupy.',
	'GROUP_USERS_EXIST'				=> 'Wybrani użytkownicy są już członkami grupy.',
	'GROUP_USERS_REMOVE'			=> 'Użytkownicy zostali pomyślnie usunięci z grupy; ustawiono im nową grupę domyślną.',

	'MAKE_DEFAULT_FOR_ALL'			=> 'Uczyń grupę domyślną dla wszystkich członków.',
	'MEMBERS'						=> 'Członkowie',

	'NO_GROUP'						=> 'Wybrana grupa nie istnieje.',
	'NO_GROUPS_CREATED'				=> 'Nie utworzono jeszcze grup.',
	'NO_PERMISSIONS'				=> 'Nie kopiuj zezwoleń',
	'NO_USERS'						=> 'Nie wpisałeś żadnych użytkowników.',
	'NO_USERS_ADDED'				=> 'Nie dodano żadnych użytkowników do tej grupy.',
	'NO_VALID_USERS'				=> 'Nie masz wprowadzonych żadnych użytkownikow nadających się do tej akcji.',

	'SPECIAL_GROUPS'				=> 'Grupy predefiniowane',
	'SPECIAL_GROUPS_EXPLAIN'		=> 'Grupy predefiniowane są grupami specjalnymi, których nie można usunąć ani bezpośrednio modyfikować. Jednak cały czas możesz dodawać użytkowników a także zmieniać podstawowe ustawienia. Klikając "Domyślna" możesz ustawić członkom grupę jako ich grupę domyślną.',

	'TOTAL_MEMBERS'					=> 'Członków',

	'USERS_APPROVED'				=> 'Użytkownicy zaakceptowani pomyślnie.',
	'USER_DEFAULT'					=> 'Domyślny użytkownik',
	'USER_DEF_GROUPS'				=> 'Grupy zdefiniowane',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Są to grupy utworzone przez Ciebie lub innego administratora forum. Możesz zarządzać członkostwami jak również edytować własności grupy a także usunąć grupę. Klikając "Domyślna" możesz ustawić członkom grupę jako ich grupę domyślną.',
	'USER_GROUP_DEFAULT'			=> 'Ustaw jako grupę domyślną',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Zaznacz tak jeśli chcesz aby grupa była domyślną dla dodanych użytkowników.',
	'USER_GROUP_LEADER'				=> 'Ustaw jako przywódcę grupy',
));

?>