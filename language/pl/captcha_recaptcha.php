<?php
/**
*
* recaptcha [Polish]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
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
	'CAPTCHA_RECAPTCHA'			=> 'reCaptcha',

	'RECAPTCHA_EXPLAIN'			=> 'W celu uniknięcia automatycznych działań, wymagamy wprowadzenia obydwu wyświetlonych poniżej słów w pole tekstowe znajdujące się pod nimi.',
	'RECAPTCHA_INCORRECT'		=> 'Wprowadzony przez Ciebie kod był niepoprawny',
	'RECAPTCHA_LANG'			=> 'pl',
	'RECAPTCHA_NOT_AVAILABLE'	=> 'W celu użycia pluginu reCaptcha, musisz utworzyć konto na <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'			=> 'Prywatny klucz reCaptcha',
	'RECAPTCHA_PRIVATE_EXPLAIN'	=> 'Twój prywatny klucz reCaptcha. Klucze możesz uzyskać na <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PUBLIC'			=> 'Publiczny klucz reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'	=> 'Twój publiczny klucz reCaptcha. Klucze możesz uzyskać na <a href="http://recaptcha.net">reCaptcha.net</a>.',
));

?>