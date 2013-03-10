<?php
/** 
* /viewforum.php [Polish]
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
	'ACTIVE_TOPICS'			=> 'Aktywne tematy',
	'ANNOUNCEMENTS'			=> 'Ogłoszenia',

	'FORUM_PERMISSIONS'		=> 'Zezwolenia forum',

	'ICON_ANNOUNCEMENT'		=> 'Ogłoszenie',
	'ICON_STICKY'			=> 'Przyklejony',

	'LOGIN_NOTIFY_FORUM'	=> 'Zostałeś powiadomiony o tym forum, proszę zaloguj się by je zobaczyć.',

	'MARK_TOPICS_READ'		=> 'Oznacz tematy jako przeczytane',

	'NEW_POSTS_HOT'			=> 'Nowe posty [ Popularny ]', // not used
	'NEW_POSTS_LOCKED'		=> 'Nowe posty [ Zablokowany ]', // not used
	'NO_NEW_POSTS_HOT'		=> 'Brak nowych postów [ Popularny ]', // not used
	'NO_NEW_POSTS_LOCKED'	=> 'Brak nowych postów [ Zablokowany ]', // not used
	'NO_READ_ACCESS'		=> 'Nie masz wymaganych uprawnień, aby czytać posty na tym forum.',

	'POST_FORUM_LOCKED'		=> 'Forum jest zablokowane',

	'TOPICS_MARKED'			=> 'Tematy na tym forum zostały oznaczone jako przeczytane.',

	'UNREAD_POSTS_HOT'		=> 'Nieprzeczytane posty [ Popularny ]',
	'UNREAD_POSTS_LOCKED'	=> 'Nieprzeczytane posty [ Zablokowany ]',
	
	'VIEW_FORUM'			=> 'Zobacz forum',
	'VIEW_FORUM_TOPIC'		=> '1 temat',
	'VIEW_FORUM_TOPICS'		=> '%d tematy(ów)',
));

?>