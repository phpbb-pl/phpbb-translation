<?php
/**
*
* acp_language [Polski]
*
* @package language
* @version $Id: language.php 9649 2009-06-21 19:17:20Z bantu $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 9649 2009-09-25 15:34:14 Zespół Olympus.pl $
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
	'ACP_FILES'						=> 'Pliki językowe PA',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Tutaj można instalować/usuwać pakiety językowe. Domyślny pakiet językowy jest oznaczony gwiazdką (*).',

	'EMAIL_FILES'			=> 'Szablony e-maili',

	'FILE_CONTENTS'				=> 'Zawartość pliku',
	'FILE_FROM_STORAGE'			=> 'Plik z katalogu przechowywania',

	'HELP_FILES'				=> 'Pliki pomocy',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Zainstalowane pakiety językowe',
	'INVALID_LANGUAGE_PACK'		=> 'Wszystko wskazuje na to, że wybrany pakiet jest nieprawidłowy. Proszę sprawdzić pakiet i jeśli to niezbędne, wgrać go ponownie.',
	'INVALID_UPLOAD_METHOD'		=> 'Wybrana metoda wgrywania jest nieprawidłowa. Proszę wybrać inną.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Pakiet językowy został zaktualizowany.',
	'LANGUAGE_ENTRIES'					=> 'Zmienne językowe',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Tutaj można zmieniać istniejące frazy pakietu oraz dokonać tłumaczenia jeszcze nieprzetłumaczonych.<br /><strong>Informacja:</strong> Po zmianie pliku językowego zostanie on zapisany w osobnym katalogu, tak aby wygodnie było go pobrać. Zmiany nie będą widziane przez użytkowników witryny, dopóki nie nastąpi zamiana oryginalnych plików językowych nowymi.',
	'LANGUAGE_FILES'					=> 'Pliki językowe',
	'LANGUAGE_KEY'						=> 'Nazwa zmiennej',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ten pakiet językowy jest już zainstalowany.',
	'LANGUAGE_PACK_DELETED'				=> 'Pakiet językowy <strong>%s</strong> został usunięty. U wszystkich użytkowników korzystających z tego języka została dokonana zamiana na domyślny język witryny.',
	'LANGUAGE_PACK_DETAILS'				=> 'Szczegóły pakietu językowego',
	'LANGUAGE_PACK_INSTALLED'			=> 'Pakiet językowy <strong>%s</strong> został zainstalowany.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalna nazwa',
	'LANGUAGE_PACK_NAME'				=> 'Angielska nazwa',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Wybrany pakiet językowy nie istnieje.',
	'LANGUAGE_PACK_USED_BY'				=> 'Używany (łącznie z botami)',
	'LANGUAGE_VARIABLE'					=> 'Wartość zmiennej',
	'LANG_AUTHOR'						=> 'Autor pakietu',
	'LANG_ENGLISH_NAME'					=> 'Angielska nazwa',
	'LANG_ISO_CODE'						=> 'Kod ISO',
	'LANG_LOCAL_NAME'					=> 'Lokalna nazwa',

	'MISSING_LANGUAGE_FILE'		=> 'Brakujący plik językowy: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Brakujące zmienne językowe',
	'MODS_FILES'				=> 'Pliki językowe modów',

	'NO_FILE_SELECTED'				=> 'Nie wybrano pliku językowego.',
	'NO_LANG_ID'					=> 'Nie wybrano pakietu językowego.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Nie można usunąć domyślnego pakietu językowego.<br />Jeśli chcesz usunąć ten pakiet językowy, zmień najpierw domyślny język witryny.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Nie znaleziono niezainstalowanych pakietów językowych',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Usuń z katalogu przechowywania',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Wybierz format pobierania',
	'SUBMIT_AND_DOWNLOAD'		=> 'Pobierz plik',
	'SUBMIT_AND_UPLOAD'			=> 'Wgraj plik',

	'THOSE_MISSING_LANG_FILES'			=> 'W katalogu języka %s brakuje poniższych plików językowych',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'W pakiecie językowym <strong>%s</strong> brakuje poniższych zmiennych językowych',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Niezainstalowane pakiety językowe',

	'UNABLE_TO_WRITE_FILE'		=> 'Plik nie mógł zostać zapisany do %s.',
	'UPLOAD_COMPLETED'			=> 'Wgrywanie zostało zakończone.',
	'UPLOAD_FAILED'				=> 'Z nieznanych powodów wysyłanie plików się nie powiodło. Może wystąpić potrzeba ręcznej zamiany odpowiedniego pliku.',
	'UPLOAD_METHOD'				=> 'Metoda wgrywania',
	'UPLOAD_SETTINGS'			=> 'Ustawienia wgrywania',

	'WRONG_LANGUAGE_FILE'		=> 'Wybrany plik językowy jest niepoprawny.',
));

?>
