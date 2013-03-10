<?php
/** 
* /acp/ban.php [Polish]
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
	'1_HOUR'					=> '1 godzina',

	'30_MINS'					=> '30 minut',

	'6_HOURS'					=> '6 godzin',

	'ACP_BAN_EXPLAIN'			=> 'Możesz tutaj kontrolować banowanie użytkowników na podstawie nazwy użytkownika, adresu IP czy też e-maila. Te metody uniemożliwiają użytkownikowi dotarcie do jakiejkolwiek części Forum. Możesz podać krótki (maks. 3000 znaków) powód przyznania bana, jeśli chcesz. Będzie on wyświetlany w logach admina. Długość bana może być określona. Jeśli chcesz przyznać bana na określony czas, wtedy wybierz jego długość z listy. Jeśli chcesz podać własną datę zdjęcia bana, wybierz <u>Trwający do -></u>,a następnie wprowadź datę w formacie RRRR-MM-DD.',

	'BANNED_UNTIL_DATE'			=> 'aż do %s',
	'BANNED_UNTIL_DURATION'		=> '%1$s (aż do %2$s)',
	'BAN_EXCLUDE'				=> 'Wyklucz z banowania',
	'BAN_GIVE_REASON'			=> 'Powód pokazywany zbanowanemu',
	'BAN_LENGTH'				=> 'Długość bana',
	'BAN_REASON'				=> 'Powód bana',
	'BAN_UPDATE_SUCCESSFUL'		=> 'Lista banów została zaktualizowana pomyślnie.',

	'EMAIL_BAN'					=> 'Zbanuj jeden lub więcej adresów e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Włącz to, aby wykluczyć wprowadzony e-mail z wszystkich bieżących banów.',
	'EMAIL_BAN_EXPLAIN'			=> 'Podając więcej niż jeden adres e-mail, wprowadź każdy w nowej linii. Można użyć * w celu częściowego dopasowania adresu, np. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, itp.',
	'EMAIL_NO_BANNED'			=> 'Brak zbanowanych adresów e-mail.',
	'EMAIL_UNBAN'				=> 'Odbanuj lub włącz e-maile',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Możesz odbanować wiele adresów e-mail jednocześnie, korzystając z kombinacji przycisków myszy i klawiatury odpowiednich dla Twojego komputera i przeglądarki (np. Ctrl + PPM). Adresy wyłączone z banowania są zapisane czcionką pogrubioną.',

	'IP_BAN'					=> 'Zbanuj jeden lub więcej IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Włącz to, aby wykluczyć wprowadzone numery IP ze wszystkich aktualnych banów.',
	'IP_BAN_EXPLAIN'			=> 'Określając wiele różnych adresów IP lub nazw komputerów, wprowadź każdy w nowej linii. Określając zakres adresów IP, oddziel myślnikiem (-) początek zakresu od końca zakresu, użyj * określając wzorzec nazwy.',
	'IP_HOSTNAME'				=> 'Adresy IP lub nazwy hostów',
	'IP_NO_BANNED'				=> 'Brak zbanowanych adresów IP',
	'IP_UNBAN'					=> 'Odbanuj lub przywróć dostęp numerom IP',
	'IP_UNBAN_EXPLAIN'			=> 'Możesz odbanować wiele adresów IP jednocześnie, korzystając z kombinacji przycisków myszy i klawiatury odpowiednich dla Twojego komputera i przeglądarki (np. Ctrl + PPM).',

	'LENGTH_BAN_INVALID'		=> 'Data powinna być w formacie kbd>RRRR-MM-DD</kbd>.',

	'PERMANENT'					=> 'Stały',

	'UNTIL'						=> 'Trwający do',
	'USER_BAN'					=> 'Banuj jedną lub kilka nazw użytkowników',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Włącz to, aby wykluczyć wprowadzonych użytkowników z wszystkich aktualnych banów.',
	'USER_BAN_EXPLAIN'			=> 'Możesz zbanować wielu użytkowników jednocześnie, wpisując nazwy w nowych liniach. Użyj opcji <u>Znajdź użytkownika</u>, aby znaleźć i dodać jednego lub wielu użytkowników automatycznie.',
	'USER_NO_BANNED'			=> 'Brak zbanowanych użytkowników',
	'USER_UNBAN'				=> 'Odbanuj lub przywróć dostęp użytkownikom',
	'USER_UNBAN_EXPLAIN'		=> 'Możesz odbanować wielu użytkowników jednocześnie, korzystając z kombinacji przycisków myszy i klawiatury odpowiednich dla Twojego komputera i przeglądarki (np. Ctrl + PPM). ',
));

?>