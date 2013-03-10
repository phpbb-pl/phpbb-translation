<?php
/** 
* /groups.php [Polish]
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
	'ALREADY_DEFAULT_GROUP'				=> 'Wybrana grupa już jest twoją domyślną.',
	'ALREADY_IN_GROUP'					=> 'Już jesteś członkiem wybranej grupy.',
	'ALREADY_IN_GROUP_PENDING'			=> 'Już poprosiłeś o przyłączenie do wybranej grupy.',

	'CANNOT_JOIN_GROUP'					=> 'Nie możesz dołączyć do tej grupy. Dołączyć możesz jedynie do otwartej lub całkowicie otwartej grupy',
	'CANNOT_RESIGN_GROUP'				=> 'Nie możesz opuścić tej grupy. Opuszczać możesz jedynie grupy otwarte lub całkowicie otwarte.',
	'CHANGED_DEFAULT_GROUP'				=> 'Zmieniono grupę.',

	'FORUM_UNDISCLOSED'					=> 'Moderowanie ukrytego forum(forów)',

	'GROUP_AVATAR'						=> 'Awatar grupy',
	'GROUP_CHANGE_DEFAULT'				=> 'Czy na pewno chcesz zmienić swoje domyślne członkostwo do grupy „%s”?',
	'GROUP_CLOSED'						=> 'Zamknięta',
	'GROUP_DESC'						=> 'Opis grupy',
	'GROUP_HIDDEN'						=> 'Ukryta',
	'GROUP_INFORMATION'					=> 'Informacje o grupie',
	'GROUP_IS_CLOSED'					=> 'Ta grupa jest zamknięta, nowi użytkownicy nie mogą się do niej przyłączyć.',
	'GROUP_IS_FREE'						=> 'Ta grupa jest otwarta, nowi użytkownicy mogą zostać przyjęci.',
	'GROUP_IS_HIDDEN'					=> 'Ta grupa jest ukryta, jedynie jej członkowie mogą przeglądać listę jej członków.',
	'GROUP_IS_OPEN'						=> 'Ta grupa jest otwarta, możesz poprosić o przyjęcie.',
	'GROUP_IS_SPECIAL'					=> 'To jest grupa specjalna, zarządzana przez administratorów Forum.',
	'GROUP_JOIN'						=> 'Dołącz',
	'GROUP_JOINED'						=> 'Dołączyłeś do grupy.',
	'GROUP_JOINED_PENDING'				=> 'Twoja prośba o dołączenie do grupy została przyjęta. Twoje członkostwo w grupie musi zostać zaakceptowane przez przywódcę grupy.',
	'GROUP_JOIN_CONFIRM'				=> 'Czy na pewno chcesz dołączyć do wybranej grupy?',
	'GROUP_JOIN_PENDING'				=> 'Poproś o dołączenie do grupy',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Czy jesteś pewien, że chcesz poprosić o dołączenie do grupy?',
	'GROUP_LIST'						=> 'Zarządzaj użytkownikami',
	'GROUP_MEMBERS'						=> 'Członkowie grupy',
	'GROUP_NAME'						=> 'Nazwa grupy',
	'GROUP_OPEN'						=> 'Open',
	'GROUP_RANK'						=> 'Ranga grupy',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Opuściłeś wybraną grupę.',
	'GROUP_RESIGNED_PENDING'			=> 'Twoja prośba o przyjęcie do grupy została usunięta z danej grupy.',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Zrezygnuj z członkostwa w grupie',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Czy na pewno chcesz zrezygnować z członkostwa w grupie?',
	'GROUP_RESIGN_PENDING'				=> 'Wycofaj prośbę o przyjęcie',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Czy na pewno chcesz wycofać prośbę o przyjęcie do wybranej grupy?',
	'GROUP_TYPE'						=> 'Rodzaj grupy',
	'GROUP_UNDISCLOSED'					=> 'Grupa ukryta',

	'LOGIN_EXPLAIN_GROUP'				=> 'Musisz się zalogować by zobaczyć szczegóły grupy.',

	'NOT_LEADER_OF_GROUP'				=> 'Wybrana operacja nie może zostać przeprowadzona ponieważ nie nie jesteś przywódcą tej grupy.',
	'NOT_MEMBER_OF_GROUP'				=> 'Wybrana operacja nie może zostać przeprowadzona ponieważ nie należysz do tej grupy.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'		=> 'Nie możesz zrezygnować z członkostwa w Twojej domyślnej grupie.',
	'NO_LEADERS'						=> 'W żadnej grupie nie jesteś przywódcą.',

	'PRIMARY_GROUP'						=> 'Grupa główna',

	'REMOVE_SELECTED'					=> 'Usuń zaznaczone',

	'USER_GROUP_CHANGE'					=> 'Z grupy „%1$s” do „%2$s”',
	'USER_GROUP_DEMOTE'					=> 'Zrezygnuj z przywództwa',
	'USER_GROUP_DEMOTED'				=> 'Zostałeś pomyślnie zdegradowany ze stanowiska przywódcy grupy.',
	'USER_GROUP_DEMOTE_CONFIRM'			=> 'Czy na pewno chcesz zrezygnować z przywództwa w wybranej grupie?',
));

?>