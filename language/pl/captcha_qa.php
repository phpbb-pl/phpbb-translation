<?php
/**
*
* captcha_qa [Polish]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
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
	'ANSWER'					=> 'Odpowiedź',
	'ANSWERS_EXPLAIN'			=> 'Proszę wprowadzić poprawne odpowiedzi dla tego pytania, jedną na linię.',

	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION'			=> 'Pytanie',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'To pytanie identyfikuje i blokuje działania spambotów.',
	'CONFIRM_QUESTION_WRONG'	=> 'Udzieliłeś niepoprawnej odpowiedzi na pytanie.',

	'EDIT_QUESTION'				=> 'Edytuj pytanie',

	'QA_ERROR_MSG'				=> 'Proszę wypełnić wszystkie pola i wprowadzić co najmniej jedną odpowiedź.',
	'QUESTIONS'					=> 'Pytania',
	'QUESTIONS_EXPLAIN'			=> 'Podczas rejestracji użytkownicy będą zapytani na jedno z określonych tutaj pytań. Musisz ustalić przynajmniej jedno pytanie w domyślnym języku, aby użyć tego pluginu. Te pytania powinny być proste dla ludzi, jednak muszą sprawiać problem botom zdolnym do korzystania z wyszukiwarki Google™. Najlepsze rezultaty daje używanie dużego zbioru pytań. Włącz dokładne sprawdzanie jeżeli twoje pytanie odnosi się do interpunkcji lub wielkości liter.',
	'QUESTION_ANSWERS'			=> 'Odpowiedzi',
	'QUESTION_DELETED'			=> 'Usunięto pytanie.',
	'QUESTION_LANG'				=> 'Język',
	'QUESTION_LANG_EXPLAIN'		=> 'Język pytania i odpowiedzi.',
	'QUESTION_STRICT'			=> 'Dokładne sprawdzanie',
	'QUESTION_STRICT_EXPLAIN'	=> 'Jeżeli włączone, wielkość liter i spacje będą także wymuszane.',
	'QUESTION_TEXT'				=> 'Pytanie',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pytanie, które będzie zadawane użytkownikowi.',
	
	'QA_LAST_QUESTION'			=> 'Nie można usunąć wszystkich pytań, dopóki wtyczka jest aktywna.',
));

?>