<?php
/** 
* /acp/bots.php [Polish]
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
	'BOTS'						=> 'Zarządzaj botami',
	'BOTS_EXPLAIN'				=> '“Boty”, “pająki” i “roboty” są zautomatyzowanymi programami, najczęściej używanymi przez wyszukiwarki internetowe do aktualizacji ich baz danych. Zanim odpowiednio użyją sesji, mogą przekłamać licznik wizyt, zwiększyć obciążenie i czasami źle zindeksować strony. Tutaj możesz zdefiniować specjalny typ użytkownika, aby zapobiec tym problemom.',
	'BOT_ACTIVATE'				=> 'Aktywować',
	'BOT_ACTIVE'				=> 'Bot aktywny',
	'BOT_ADD'					=> 'Dodaj bota',
	'BOT_ADDED'					=> 'Nowy bot dodany pomyślnie.',
	'BOT_AGENT'					=> 'Wyrażenie agenta',
	'BOT_AGENT_EXPLAIN'			=> 'User Agent String botów, znaki wieloznaczne są dozwolone.',
	'BOT_DEACTIVATE'			=> 'Dezaktywuj',
	'BOT_DELETED'				=> 'Bot usunięty pomyślnie.',
	'BOT_EDIT'					=> 'Edytuj boty',
	'BOT_EDIT_EXPLAIN'			=> 'Tutaj możesz dodać lub edytować istniejące opcje dotyczące botów. Możesz zdefiniować identyfikator przeglądarki (agent) i/lub jeden lub więcej adresów IP (puli adresów). Bądź ostrożny, gdy definiujesz pasujące wyrażenia lub adresy. Możesz także ustalić styl i język, które bot będzie używał przy przeglądaniu forum. Możesz zredukować transfer wykorzystywany przez boty, ustawiając im przykładowy styl. Pamiętaj, aby ustawić właściwe zezwolenia dla grupy `Bot`!',
	'BOT_IP'					=> 'Adres IP bota',
	'BOT_IP_EXPLAIN'			=> 'Dopuszcza się częściowe dopasowanie, oddziel adresy przecinkiem.',
	'BOT_LANG'					=> 'Język bota',
	'BOT_LANG_EXPLAIN'			=> 'Język zaprezentowany dla bota podczas przeglądania.',
	'BOT_LAST_VISIT'			=> 'Ostatnia wizyta',
	'BOT_NAME'					=> 'Nazwa bota',
	'BOT_NAME_EXPLAIN'			=> 'Użyte tylko dla Twojej własnej informacji.',
	'BOT_NAME_TAKEN'			=> 'Nazwa jest już używana na Twoim forum i nie może być użyta dla Bota.',
	'BOT_NEVER'					=> 'Nigdy',
	'BOT_STYLE'					=> 'Styl bota',
	'BOT_STYLE_EXPLAIN'			=> 'Styl forum używany dla botów.',
	'BOT_UPDATED'				=> 'Istniejący bot zaktualizowany pomyślnie.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Podany przez Ciebie agent bota jest podobny do jedno z już zdefiniowanych. Popraw agenta dla tego bota.',
	'ERR_BOT_NO_IP'				=> 'Wprowadzone adresy IP są niepoprawne lub nazwa hosta nie może być "przetłumaczona" na IP',
	'ERR_BOT_NO_MATCHES'		=> 'Musisz podać przynajmniej jednego useragenta lub IP dla tego bota.',

	'NO_BOT'					=> 'Nie znaleziono bota z takim ID.',
	'NO_BOT_GROUP'				=> 'Nie można znaleźć specjalnej grupy dla botów.',
));

?>