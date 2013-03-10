<?php
/** 
* /acp/language.php [Polish]
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
	'ACP_FILES'							=> 'Pliki językowe administratora',
	'ACP_LANGUAGE_PACKS_EXPLAIN'		=> 'Tutaj możesz instalować/usuwać paczki językowe. Domyślna paczka językowa jest oznaczona gwiazdką (*).',

	'EMAIL_FILES'						=> 'Szablony e-mail',

	'FILE_CONTENTS'						=> 'Treści pliku',
	'FILE_FROM_STORAGE'					=> 'Plik z katalogu przechowywania',

	'HELP_FILES'						=> 'Pliki pomocy',

	'INSTALLED_LANGUAGE_PACKS'			=> 'Wgrane paczki językowe',
	'INVALID_LANGUAGE_PACK'				=> 'Wybrana paczka wydają się błędna. Zaleca się sprawdzenie paczki i ponowne jej dodanie, jeśli to konieczne.',
	'INVALID_UPLOAD_METHOD'				=> 'Wybrana metoda wgrywania nie jest poprawna, prosimy wybrać inną.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Szczegóły języka zostały pomyślnie zaktualizowane.',
	'LANGUAGE_ENTRIES'					=> 'Wpisy językowe',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Tutaj możesz zmieniać istniejące bądź jeszcze nie przetłumaczone wpisy paczki językowej. Jeżeli dokonałeś zmian w pliku językowym, zmiany będą przechowywane w oddzielnym katalogu do pobrania. Zmiany nie będą widoczne przez użytkowników dopóki nie podmienisz oryginalnych plików językowych na Twoim serwerze (poprzez wgranie ich na serwer).',
	'LANGUAGE_FILES'					=> 'Pliki językowe',
	'LANGUAGE_KEY'						=> 'Klucz języka',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ten język jest już zainstalowany na forum.',
	'LANGUAGE_PACK_DELETED'				=> 'Paczka językowa <strong>%s</strong> została pomyślnie usunięta. Wszyscy użytkownicy używający tego języka zostaną przestawieni na domyślny język forum.',
	'LANGUAGE_PACK_DETAILS'				=> 'Szczegóły paczki językowej',
	'LANGUAGE_PACK_INSTALLED'			=> 'Paczka językowa <strong>%s</strong> została pomyślnie zainstalowana.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalna nazwa',
	'LANGUAGE_PACK_NAME'				=> 'Nazwa',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Wybrany plik językowy nie istnieje',
	'LANGUAGE_PACK_USED_BY'				=> 'Używane przez (wraz z robotami)',
	'LANGUAGE_VARIABLE'					=> 'Zmienna językowa',
	'LANG_AUTHOR'						=> 'Autor pliku językowego',
	'LANG_ENGLISH_NAME'					=> 'Angielska nazwa',
	'LANG_ISO_CODE'						=> 'Kod ISO',
	'LANG_LOCAL_NAME'					=> 'Lokalna nazwa',

	'MISSING_LANGUAGE_FILE'				=> 'Brakujący plik językowy: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'			=> 'Brakujące zmienne językowe',
	'MODS_FILES'						=> 'Pliki językowe MODów',

	'NO_FILE_SELECTED'					=> 'Nie określono pliku językowego.',
	'NO_LANG_ID'						=> 'Nie określiłeś paczki języka.',
	'NO_REMOVE_DEFAULT_LANG'			=> 'Nie możesz usunąć domyślnego języka.<br />Jeśli chcesz usunąć ten język forum, najpierw zmień domyślny język.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'		=> 'Brak odinstalowanych języków',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Usuń z katalogu przechowywania',

	'SELECT_DOWNLOAD_FORMAT'			=> 'Wybierz format pobierania',
	'SUBMIT_AND_DOWNLOAD'				=> 'Zatwierdź i pobierz plik',
	'SUBMIT_AND_UPLOAD'					=> 'Zatwierdź i wgraj plik',

	'THOSE_MISSING_LANG_FILES'			=> 'Następujące pliki językowe nie zostały odnalezione w katalogu %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Następując zmienne językowe nie zostały odnalezione w paczce językowej <strong>%s</strong>',

	'UNABLE_TO_WRITE_FILE'				=> 'Plik nie mógł być zapisany do %s.',
	'UNINSTALLED_LANGUAGE_PACKS'		=> 'Odinstalowane paczki językowe',
	'UPLOAD_COMPLETED'					=> 'Upload został zakończony pomyślnie.',
	'UPLOAD_FAILED'						=> 'Upload nie powiódł się z nieznanych powodów. Możesz zastąpić odpowiednie pliki ręcznie.',
	'UPLOAD_METHOD'						=> 'Metoda wgrywania',
	'UPLOAD_SETTINGS'					=> 'Ustawienia uploadu',

	'WRONG_LANGUAGE_FILE'				=> 'Wybrany plik językowy jest niepoprawny.',
));

?>