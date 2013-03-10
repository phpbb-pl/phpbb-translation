<?php
/** 
* /acp/permissions_phpbb.php [Polish]
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
	'acl_a_aauth'			=> array(
		'lang'				=> 'Może zmieniać klasę zezwoleń użytkowników',
		'cat'				=> 'permissions',
	),

	'acl_a_attach'			=> array(
		'lang'				=> 'Może zmieniać ustawienia związane z załącznikami',
		'cat'				=> 'posting',
	),

	'acl_a_authgroups'		=> array(
		'lang'				=> 'Może zmieniać zezwolenia grup',
		'cat'				=> 'permissions',
	),

	'acl_a_authusers'		=> array(
		'lang'				=> 'Może zmieniać zezwolenia użytkowników',
		'cat'				=> 'permissions',
	),

	'acl_a_backup'			=> array(
		'lang'				=> 'Może robić/przywracać kopię bazy danych',
		'cat'				=> 'misc',
	),

	'acl_a_ban'				=> array(
		'lang'				=> 'Może zarządzać banami',
		'cat'				=> 'user_group',
	),

	'acl_a_bbcode'			=> array(
		'lang'				=> 'Może definiować tagi BBCode',
		'cat'				=> 'posting',
	),

	'acl_a_board'			=> array(
		'lang'				=> 'Może zmieniać ustawienia forum/sprawdzać aktualizacje',
		'cat'				=> 'settings',
	),

	'acl_a_bots'			=> array(
		'lang'				=> 'Może zarządzać botami',
		'cat'				=> 'misc',
	),

	'acl_a_clearlogs'		=> array(
		'lang'				=> 'Może czyścić logi',
		'cat'				=> 'misc',
	),

	'acl_a_email'			=> array(
		'lang'				=> 'Może wysyłać masową korespondencję',
		'cat'				=> 'misc',
	),

	'acl_a_fauth'			=> array(
		'lang'				=> 'Może zmieniać klasę zezwoleń forów',
		'cat'				=> 'permissions',
	),

	'acl_a_forum'			=> array(
		'lang'				=> 'Może zarządzać forami',
		'cat'				=> 'forums',
	),

	'acl_a_forumadd'		=> array(
		'lang'				=> 'Może dodawać nowe fora',
		'cat'				=> 'forums',
	),

	'acl_a_forumdel'		=> array(
		'lang'				=> 'Może usuwać fora',
		'cat'				=> 'forums',
	),

	'acl_a_group'			=> array(
		'lang'				=> 'Może zarządzać grupami',
		'cat'				=> 'user_group',
	),

	'acl_a_groupadd'		=> array(
		'lang'				=> 'Może dodawać nowe grupy',
		'cat'				=> 'user_group',
	),

	'acl_a_groupdel'		=> array(
		'lang'				=> 'Może usuwać grupy',
		'cat'				=> 'user_group',
	),

	'acl_a_icons'			=> array(
		'lang'				=> 'Może zmieniać ikony tematów/postów i usmieszki',
		'cat'				=> 'posting',
	),

	'acl_a_jabber'			=> array(
		'lang'				=> 'Może zmieniać ustawienia Jabbera',
		'cat'				=> 'settings',
	),

	'acl_a_language'		=> array(
		'lang'				=> 'Może zarządzać paczkami językowymi',
		'cat'				=> 'misc',
	),

	'acl_a_mauth'			=> array(
		'lang'				=> 'Może zmieniać klasę zezwoleń moderatorów',
		'cat'				=> 'permissions',
	),

	'acl_a_modules'			=> array(
		'lang'				=> 'Może zarządzać modułami',
		'cat'				=> 'misc',
	),

	'acl_a_names'			=> array(
		'lang'				=> 'Może zarządzać zabronionymi nazwami użytkowników',
		'cat'				=> 'user_group',
	),

	'acl_a_phpinfo'			=> array(
		'lang'				=> 'Może przeglądać informacje o ustawieniach PHP',
		'cat'				=> 'settings',
	),

	'acl_a_profile'			=> array(
		'lang'				=> 'Może zarządzać dodatkowymi polami w profilu',
		'cat'				=> 'user_group',
	),

	'acl_a_prune'			=> array(
		'lang'				=> 'Może czyścić fora',
		'cat'				=> 'forums',
	),

	'acl_a_ranks'			=> array(
		'lang'				=> 'Może zarządzać rangami',
		'cat'				=> 'user_group',
	),

	'acl_a_reasons'			=> array(
		'lang'				=> 'Może zarządzać powodami raportu/odmowy',
		'cat'				=> 'misc',
	),

	'acl_a_roles'			=> array(
		'lang'				=> 'Może zarządzać rolami',
		'cat'				=> 'permissions',
	),

	'acl_a_search'			=> array(
		'lang'				=> 'Może zarządzać mechanizmami i ustawieniami wyszukiwania',
		'cat'				=> 'misc',
	),

	'acl_a_server'			=> array(
		'lang'				=> 'Może zmienić ustawienia serwera/komunikacji',
		'cat'				=> 'settings',
	),

	'acl_a_styles'			=> array(
		'lang'				=> 'Może zarządzać stylami',
		'cat'				=> 'misc',
	),

	'acl_a_switchperm'		=> array(
		'lang'				=> 'Może używać innych zezwoleń',
		'cat'				=> 'permissions',
	),

	'acl_a_uauth'			=> array(
		'lang'				=> 'Może zmieniać klasę zezwoleń administratorów',
		'cat'				=> 'permissions',
	),

	'acl_a_user'			=> array(
		'lang'				=> 'Może zarządzać użytkownikami<br /><em>To również pozwala zobaczyć informacje o przeglądarkach użytkowników w liście osób on-line.</em>',
		'cat'				=> 'user_group',
	),

	'acl_a_userdel'			=> array(
		'lang'				=> 'Może usuwać użytkowników',
		'cat'				=> 'user_group',
	),

	'acl_a_viewauth'		=> array(
		'lang'				=> 'Może wyświetlać maski zezwoleń',
		'cat'				=> 'permissions',
	),

	'acl_a_viewlogs'		=> array(
		'lang'				=> 'Może przeglądać logi',
		'cat'				=> 'misc',
	),

	'acl_a_words'			=> array(
		'lang'				=> 'Może zmieniać cenzurę słów',
		'cat'				=> 'posting',
	),

	'acl_f_announce'		=> array(
		'lang'				=> 'Może pisać ogłoszenia',
		'cat'				=> 'post',
	),

	'acl_f_attach'			=> array(
		'lang'				=> 'Może dodawać załączniki',
		'cat'				=> 'content',
	),

	'acl_f_bbcode'			=> array(
		'lang'				=> 'Może używać BBCode',
		'cat'				=> 'content',
	),

	'acl_f_bump'			=> array(
		'lang'				=> 'Może podbijac tematy',
		'cat'				=> 'actions',
	),

	'acl_f_delete'			=> array(
		'lang'				=> 'Może usuwać własne posty',
		'cat'				=> 'actions',
	),

	'acl_f_download'		=> array(
		'lang'				=> 'Może pobierać załączniki',
		'cat'				=> 'content',
	),

	'acl_f_edit'			=> array(
		'lang'				=> 'Może zmieniać własne posty',
		'cat'				=> 'actions',
	),

	'acl_f_email'			=> array(
		'lang'				=> 'Może wysyłać tematy e-mailem',
		'cat'				=> 'actions',
	),

	'acl_f_flash'			=> array(
		'lang'				=> 'Może używać znacznika BBCode [flash]',
		'cat'				=> 'content',
	),

	'acl_f_icons'			=> array(
		'lang'				=> 'Może używać ikon tematów/postów',
		'cat'				=> 'post',
	),

	'acl_f_ignoreflood'		=> array(
		'lang'				=> 'Może ignorować limit wiadomości na minutę',
		'cat'				=> 'misc',
	),

	'acl_f_img'				=> array(
		'lang'				=> 'Może używać znacznika BBCode [img]',
		'cat'				=> 'content',
	),

	'acl_f_list'			=> array(
		'lang'				=> 'Może zobaczyć forum',
		'cat'				=> 'post',
	),

	'acl_f_noapprove'		=> array(
		'lang'				=> 'Może pisać bez zatwierdzenia',
		'cat'				=> 'misc',
	),

	'acl_f_poll'			=> array(
		'lang'				=> 'Może tworzyć ankiety',
		'cat'				=> 'polls',
	),

	'acl_f_post'			=> array(
		'lang'				=> 'Może tworzyć nowe tematy',
		'cat'				=> 'post',
	),

	'acl_f_postcount'		=> array(
		'lang'				=> 'Zwiększaj licznik postów<br /><em>Pamiętaj, że to ustawienie wpłynie tylko na nowe posty.</em>',
		'cat'				=> 'misc',
	),

	'acl_f_print'			=> array(
		'lang'				=> 'Może drukować tematy',
		'cat'				=> 'actions',
	),

	'acl_f_read'			=> array(
		'lang'				=> 'Może czytać forum',
		'cat'				=> 'post',
	),

	'acl_f_reply'			=> array(
		'lang'				=> 'Może odpowiadać w tematach',
		'cat'				=> 'post',
	),

	'acl_f_report'			=> array(
		'lang'				=> 'Może raportować posty',
		'cat'				=> 'actions',
	),

	'acl_f_search'			=> array(
		'lang'				=> 'Może przeszukiwać forum',
		'cat'				=> 'misc',
	),

	'acl_f_sigs'			=> array(
		'lang'				=> 'Może używać podpisu',
		'cat'				=> 'content',
	),

	'acl_f_smilies'			=> array(
		'lang'				=> 'Może używać uśmieszków',
		'cat'				=> 'content',
	),

	'acl_f_sticky'			=> array(
		'lang'				=> 'Może pisać przyklejone',
		'cat'				=> 'post',
	),

	'acl_f_subscribe'		=> array(
		'lang'				=> 'Może sledzić forum',
		'cat'				=> 'actions',
	),

	'acl_f_user_lock'		=> array(
		'lang'				=> 'Może zamykać własne tematy',
		'cat'				=> 'actions',
	),

	'acl_f_vote'			=> array(
		'lang'				=> 'Może głosować w ankietach',
		'cat'				=> 'polls',
	),

	'acl_f_votechg'			=> array(
		'lang'				=> 'Może zmieniać istniejące ankiety',
		'cat'				=> 'polls',
	),

	'acl_m_approve'			=> array(
		'lang'				=> 'Może zatwierdzać posty',
		'cat'				=> 'post_actions',
	),

	'acl_m_ban'				=> array(
		'lang'				=> 'Może banować<br /><em>To zezwolenie jest przyznawane globalnie, a nie na poziomie forum.</em>',
		'cat'				=> 'misc',
	),

	'acl_m_chgposter'		=> array(
		'lang'				=> 'Może zmieniać autora postu',
		'cat'				=> 'post_actions',
	),

	'acl_m_delete'			=> array(
		'lang'				=> 'Może usuwać posty',
		'cat'				=> 'post_actions',
	),

	'acl_m_edit'			=> array(
		'lang'				=> 'Może zmieniać posty',
		'cat'				=> 'post_actions',
	),

	'acl_m_info'			=> array(
		'lang'				=> 'Może oglądać szczegół postu',
		'cat'				=> 'misc',
	),

	'acl_m_lock'			=> array(
		'lang'				=> 'Może zamykać tematy',
		'cat'				=> 'topic_actions',
	),

	'acl_m_merge'			=> array(
		'lang'				=> 'Może łączyć tematy',
		'cat'				=> 'topic_actions',
	),

	'acl_m_move'			=> array(
		'lang'				=> 'Może przenosić tematy',
		'cat'				=> 'topic_actions',
	),

	'acl_m_report'			=> array(
		'lang'				=> 'Może zamykać i usuwać raporty',
		'cat'				=> 'post_actions',
	),

	'acl_m_split'			=> array(
		'lang'				=> 'Może dzielić tematy',
		'cat'				=> 'topic_actions',
	),

	'acl_m_warn'			=> array(
		'lang'				=> 'Może dawać ostrzeżenia<br /><em>To zezwolenie jest przyznawane globalnie, a nie na poziomie forum.</em>',
		'cat'				=> 'misc',
	),

	'acl_u_attach'			=> array(
		'lang'				=> 'Może dodawać załączniki',
		'cat'				=> 'post',
	),

	'acl_u_chgavatar'		=> array(
		'lang'				=> 'Może zmieniać awatar',
		'cat'				=> 'profile',
	),

	'acl_u_chgcensors'		=> array(
		'lang'				=> 'Może wyłączać cenzurę słów',
		'cat'				=> 'post',
	),

	'acl_u_chgemail'		=> array(
		'lang'				=> 'Może zmieniać adres e-mail',
		'cat'				=> 'profile',
	),

	'acl_u_chggrp'			=> array(
		'lang'				=> 'Może zmieniać domyślną grupę użytkownika',
		'cat'				=> 'profile',
	),

	'acl_u_chgname'			=> array(
		'lang'				=> 'Może zmieniać nazwę użytkownika',
		'cat'				=> 'profile',
	),

	'acl_u_chgpasswd'		=> array(
		'lang'				=> 'Może zmieniać hasło',
		'cat'				=> 'profile',
	),

	'acl_u_download'		=> array(
		'lang'				=> 'Może pobierać załączniki',
		'cat'				=> 'post',
	),

	'acl_u_hideonline'		=> array(
		'lang'				=> 'Może ukryć status online',
		'cat'				=> 'misc',
	),

	'acl_u_ignoreflood'		=> array(
		'lang'				=> 'Może ignorować limit wiadomości na minutę',
		'cat'				=> 'misc',
	),

	'acl_u_masspm'			=> array(
		'lang'				=> 'Może wysyłać pw do wielu użytkowników i grup',
		'cat'				=> 'pm',
	),

	'acl_u_masspm_group'	=> array(
		'lang'				=> 'Może wysyłać wiadomości do grup',
		'cat'				=> 'pm',
	),

	'acl_u_pm_attach'		=> array(
		'lang'				=> 'Może dodawać załączniki do prywatnych wiadomości',
		'cat'				=> 'pm',
	),

	'acl_u_pm_bbcode'		=> array(
		'lang'				=> 'Może używać BBCode w prywatnych wiadomościach',
		'cat'				=> 'pm',
	),

	'acl_u_pm_delete'		=> array(
		'lang'				=> 'Może usuwać prywatne wiadomości z własnych folderów',
		'cat'				=> 'pm',
	),

	'acl_u_pm_download'		=> array(
		'lang'				=> 'Może pobierać załączniki z prywatnych wiadomości',
		'cat'				=> 'pm',
	),

	'acl_u_pm_edit'			=> array(
		'lang'				=> 'Może zmieniać własne prywatne wiadomości',
		'cat'				=> 'pm',
	),

	'acl_u_pm_emailpm'		=> array(
		'lang'				=> 'Może wysyłać prywatne wiadomości e-mailem',
		'cat'				=> 'pm',
	),

	'acl_u_pm_flash'		=> array(
		'lang'				=> 'Może używać znacznika BBCode [flash] w prywatnych wiadomościach',
		'cat'				=> 'pm',
	),

	'acl_u_pm_forward'		=> array(
		'lang'				=> 'Może przekazywać prywatne wiadomości',
		'cat'				=> 'pm',
	),

	'acl_u_pm_img'			=> array(
		'lang'				=> 'Może używać znacznika BBCode [img] w prywatnych wiadomościach',
		'cat'				=> 'pm',
	),

	'acl_u_pm_printpm'		=> array(
		'lang'				=> 'Może drukować prywatne wiadomości',
		'cat'				=> 'pm',
	),

	'acl_u_pm_smilies'		=> array(
		'lang'				=> 'Może używać uśmieszków w prywatnych wiadomościach',
		'cat'				=> 'pm',
	),

	'acl_u_readpm'			=> array(
		'lang'				=> 'Może czytać prywatne wiadomości',
		'cat'				=> 'pm',
	),

	'acl_u_savedrafts'		=> array(
		'lang'				=> 'Może zapisywać szkice',
		'cat'				=> 'post',
	),

	'acl_u_search'			=> array(
		'lang'				=> 'Może przeszukiwać forum',
		'cat'				=> 'misc',
	),

	'acl_u_sendemail'		=> array(
		'lang'				=> 'Może wysyłać e-maile',
		'cat'				=> 'misc',
	),

	'acl_u_sendim'			=> array(
		'lang'				=> 'Może wysyłać bezpośrednie wiadomości',
		'cat'				=> 'misc',
	),

	'acl_u_sendpm'			=> array(
		'lang'				=> 'Może wysyłać prywatne wiadomości',
		'cat'				=> 'pm',
	),

	'acl_u_sig'				=> array(
		'lang'				=> 'Może używać podpisu',
		'cat'				=> 'post',
	),

	'acl_u_viewonline'		=> array(
		'lang'				=> 'Może przeglądać listę ukrytych użytkowników on-line',
		'cat'				=> 'misc',
	),

	'acl_u_viewprofile'		=> array(
		'lang'				=> 'Może przeglądać profile, listę u?ytkowników oraz listę użytkowników obecnych na forum',
		'cat'				=> 'profile',
	),


	'permission_cat'		=> array(
		'actions'			=> 'Akcje',
		'content'			=> 'Zawartość',
		'forums'			=> 'Fora',
		'misc'				=> 'Różne',
		'permissions'		=> 'Zezwolenia',
		'pm'				=> 'Prywatne Wiadomości',
		'polls'				=> 'Ankiety',
		'post'				=> 'Post',
		'posting'			=> 'Posting',
		'post_actions'		=> 'Post actions',
		'profile'			=> 'Profil',
		'settings'			=> 'Ustawienia',
		'topic_actions'		=> 'Topic actions',
		'user_group'		=> 'Użytkownicy i grupy',
	),

	'permission_type'		=> array(
		'u_'				=> 'Zezwolenia użytkownika',
		'a_'				=> 'Zezwolenia administracji',
		'm_'				=> 'Zezwolenia moderatora',
		'f_'				=> 'Zezwolenie forum',
		'global'			=> array(
			'm_'			=> 'Zezwolenia globalnego moderatora',
		),

	),

));

?>