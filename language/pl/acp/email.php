<?php
/** 
* /acp/email.php [Polish]
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
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Tutaj możesz wysłać wiadomość e-mail do wszystkich użytkowników lub też do członków wybranej grupy, <strong>pod warunkiem, że grupa ta ma włączoną możliwość odbierania masowych wiadomości e-mail</strong>. Wiadomość e-mail zostanie wysłana na adres administratora, zaś użytkownicy otrzymają ją jako ukrytą kopię. Domyślne ustawienia przewidują, iż na jedną przesyłkę przypadnie 50 użytkowników; większa ich liczba spowoduje wysłanie większej liczby e-maili. Jeżeli wysyłasz wiadomość to dużej grupy osób, proszę o cierpliwość i niezatrzymywanie strony w czasie wysyłania wiadomości. To normalne, że wysłanie masowej korespondencji trwa dłuższą chwilę. Zostaniesz poinformowany o zakończeniu rozsyłania wiadomości.',
	'ALL_USERS'					=> 'Zaznacz wszystkich użytkowników',

	'COMPOSE'					=> 'Ułóż',

	'EMAIL_SEND_ERROR'			=> 'Wystąpiło jeden lub więcej błędów w czasie wysyłania e-maila. Prosimy przejrzeć %sLog błędów%s, aby dowiedzieć się więcej na temat komunikatów o błędach.',
	'EMAIL_SENT'				=> 'Wiadomość została wysłana.',
	'EMAIL_SENT_QUEUE'			=> 'Wiadomość została dodana do kolejki wysyłania.',

	'LOG_SESSION'				=> 'Zapisuj sesję mailową do logów krytycznych',

	'MAIL_HIGH_PRIORITY'		=> 'Wysoki',
	'MAIL_LOW_PRIORITY'			=> 'Niski',
	'MAIL_NORMAL_PRIORITY'		=> 'Normalny',
	'MAIL_PRIORITY'				=> 'Priorytet wiadomości e-mail',
	'MASS_MESSAGE'				=> 'Twoja wiadomość',
	'MASS_MESSAGE_EXPLAIN'		=> 'Pamiętaj że możesz użyć tylko nieformatowanego tekstu. Całe formatowanie zostanie usunięte przed wysłaniem.',

	'NO_EMAIL_MESSAGE'			=> 'Musisz wpisać treść wiadomości.',
	'NO_EMAIL_SUBJECT'			=> 'Musisz określić temat twojej wiadomości.',

	'SEND_IMMEDIATELY'			=> 'Wyślij natychmiast',
	'SEND_TO_GROUP'				=> 'Wyślij do grupy',
	'SEND_TO_USERS'				=> 'Wyślij do użytkowników',
	'SEND_TO_USERS_EXPLAIN'		=> 'Wpisanie tutaj nazw nadpisze wybór grupy zaznaczonej powyżej. Wpisz każdą nazwę użytkownika w nowej linii.',
));

?>