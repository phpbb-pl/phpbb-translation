<?php
/** 
* /acp/database.php [Polish]
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
	'ACP_BACKUP_EXPLAIN'		=> 'Tutaj możesz sporządzić kopię zapasową danych phpBB. Możesz zapisać te dane w katalogu <samp>store/</samp> lub pobrać je na swój komputer. W zależności od konfiguracji serwera, możesz wybrać kilka formatów kompresji.',
	'ACP_RESTORE_EXPLAIN'		=> 'Zostanie przeprowadzona procedura przywrócenia wszystkich tabel phpBB z pliku. Jeżeli twój serwer obsługuje kompresję gzip, możesz użyć do tego celu pliku skompresowanego za pomocą gzip lub bzip2. <strong>UWAGA!</strong> Ta operacja spowoduje nadpisanie istniejących danych. Proces przywracania może zająć dużo czasu. Nie zmieniaj strony, dopóki się nie zakończy. Kopie zapasowe są generowane przez wbudowany system i znajdują się w katalogu <samp>store/</samp>. Próba przywrócenia kopii nie wygenerowanej przez ten system, może zakończyć się niepowodzeniem.',

	'BACKUP_DELETE'				=> 'Plik kopii zapasowej został usunięty.',
	'BACKUP_INVALID'			=> 'Wybrany plik do kopii zapasowej jest niepoprawny.',
	'BACKUP_OPTIONS'			=> 'Opcje kopii zapasowej',
	'BACKUP_SUCCESS'			=> 'Plik kopii zapasowej został pomyślnie utworzony.',
	'BACKUP_TYPE'				=> 'Typ kopii zapasowej',

	'DATABASE'					=> 'Narzędzia bazy danych',
	'DATA_ONLY'					=> 'Tylko dane',
	'DELETE_BACKUP'				=> 'Usuń kopię',
	'DELETE_SELECTED_BACKUP'	=> 'Jesteś pewny, że chcesz usunąć wybrany backup?',
	'DESELECT_ALL'				=> 'Odznacz wszystkie',
	'DOWNLOAD_BACKUP'			=> 'Pobierz kopię',

	'FILE_TYPE'					=> 'Rodzaj pliku',
	'FILE_WRITE_FAIL'			=> 'Nie można było zapisać pliku w folderze przechowywania.',
	'FULL_BACKUP'				=> 'Pełna',

	'RESTORE_FAILURE'			=> 'Plik kopii zapasowej może być uszkodzony.',
	'RESTORE_OPTIONS'			=> 'Opcję odzyskiwania bazy',
	'RESTORE_SUCCESS'			=> 'Baza danych została pomyślnie odzyskana.<br /><br />Forum powinno wrócić do stanu z momentu wykonywania ostatniej kopii zapasowej.',

	'SELECT_ALL'				=> 'Zaznacz wszystkie',
	'SELECT_FILE'				=> 'Wybierz plik',
	'START_BACKUP'				=> 'Twórz kopię',
	'START_RESTORE'				=> 'Odzyskaj',
	'STORE_AND_DOWNLOAD'		=> 'Zapisz i pobierz',
	'STORE_LOCAL'				=> 'Zapisz plik lokalnie',
	'STRUCTURE_ONLY'			=> 'Tylko struktura',

	'TABLE_SELECT'				=> 'Wybierz tabele',
	'TABLE_SELECT_ERROR'		=> 'Musisz wybrać przynajmniej jedną tabelę.',
));

?>