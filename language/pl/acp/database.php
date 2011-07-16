<?php
/**
*
* acp_database [Polski]
*
* @package language
* @version $Id: database.php 9765 2009-07-17 10:11:10Z bantu $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 9765 2009-09-25 15:34:14 Zespół Olympus.pl $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Tutaj można wykonać kopię zapasową bazy danych powiązanej z witryną phpBB. Utworzone archiwum można zapisać w katalogu <samp>store/</samp> lub na dysku lokalnym. W zależności od konfiguracji serwera, można wykonać kompresję pliku w różnych formatach kompresji danych.',
	'ACP_RESTORE_EXPLAIN'	=> 'Tutaj można odtworzyć wszystkie tabele phpBB z zapisanego pliku. Jeśli serwer obsługuje kompresję gzip lub bzip2, skompresowany tą metodą plik może być automatycznie rozpakowany. <strong>Ostrzeżenie!</strong> W trakcie odtwarzania wszystkie istniejące dane zostaną zastąpione. Proces odtwarzania może potrwać dłuższy czas. Proszę nie opuszczać tej strony do czasu jego zakończenia. Kopia zapasowa jest zapisana w katalogu <samp>store/</samp>. Zaleca się, aby tworzyć ją za pomocą wewnętrznych funkcji phpBB. Odtwarzanie danych z kopii wykonanych inną metodą, niż za pomocą wbudowanego mechanizmu tworzenia kopii może powodować problemy.',

	'BACKUP_DELETE'		=> 'Plik kopii zapasowej został usunięty.',
	'BACKUP_INVALID'	=> 'Plik wybrany do utworzenia kopii jest nieprawidłowy.',
	'BACKUP_OPTIONS'	=> 'Opcje kopii zapasowej',
	'BACKUP_SUCCESS'	=> 'Kopia zapasowa została utworzona.',
	'BACKUP_TYPE'		=> 'Typ kopii zapasowej',

	'DATABASE'			=> 'Narzędzia bazy danych',
	'DATA_ONLY'			=> 'Tylko dane',
	'DELETE_BACKUP'		=> 'Usuń kopię zapasową',
	'DELETE_SELECTED_BACKUP'	=> 'Czy na pewno chcesz usunąć zaznaczoną kopię zapasową?',
	'DESELECT_ALL'		=> 'Żaden',
	'DOWNLOAD_BACKUP'	=> 'Pobierz kopię zapasową',

	'FILE_TYPE'			=> 'Typ pliku',
	'FILE_WRITE_FAIL'	=> 'Nie można zapisać pliku do folderu przechowywania.',
	'FULL_BACKUP'		=> 'Cała baza',

	'RESTORE_FAILURE'		=> 'Plik kopii zapasowej może być uszkodzony.',
	'RESTORE_OPTIONS'		=> 'Odtwórz opcje',
	'RESTORE_SUCCESS'		=> 'Baza danych została odtworzona.<br /><br />Witryna powinna wrócić do stanu, w jakim była w momencie wykonania kopii zapasowej.',

	'SELECT_ALL'			=> 'Zaznacz wszystko',
	'SELECT_FILE'			=> 'Wybierz plik',
	'START_BACKUP'			=> 'Uruchom tworzenie kopii',
	'START_RESTORE'			=> 'Uruchom odtwarzanie',
	'STORE_AND_DOWNLOAD'	=> 'Zapisz i pobierz',
	'STORE_LOCAL'			=> 'Zapisz plik lokalnie',
	'STRUCTURE_ONLY'		=> 'Tylko struktura',

	'TABLE_SELECT'		=> 'Wybór tabel',
	'TABLE_SELECT_ERROR'=> 'Należy wybrać przynajmniej jedną tablę.',
));

?>
