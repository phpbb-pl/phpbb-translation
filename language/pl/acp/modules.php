<?php
/** 
* /acp/modules.php [Polish]
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Tutaj możesz zarządzać wszystkimi rodzajami modułów. Zauważ, że Panel zarządzania ma trójpoziomową strukturę menu (Kategoria -> Kategoria -> Moduł), podczas gdy pozostałe dwupoziomową (Kategoria -> Moduł) i musi być ona zachowana. Uważaj także, że możesz utknąć bez wyjścia, jeżeli dezaktywujesz lub usuniesz moduł odpowiedzialny za zarządzanie modułami.',
	'ADD_MODULE'					=> 'Dodaj moduł',
	'ADD_MODULE_CONFIRM'			=> 'Jesteś pewien, że chcesz dodać zaznaczony moduł z wybranym trybem?',
	'ADD_MODULE_TITLE'				=> 'Dodaj moduł',

	'CANNOT_REMOVE_MODULE'			=> 'Usunięcie modułu jest niemożliwe, ponieważ posiada on potomstwo. Usuń albo przenieś całe potomstwo przed wykonaniem tej akcji.',
	'CATEGORY'						=> 'Kategoria',
	'CHOOSE_MODE'					=> 'Wybierz tryb modułu',
	'CHOOSE_MODE_EXPLAIN'			=> 'Wybierz używany tryb modułu.',
	'CHOOSE_MODULE'					=> 'Wybierz moduł',
	'CHOOSE_MODULE_EXPLAIN'			=> 'Wybierz plik wywoływany przez ten moduł.',
	'CREATE_MODULE'					=> 'Utwórz nowy moduł',

	'DEACTIVATED_MODULE'			=> 'Dezaktywuj moduł',
	'DELETE_MODULE'					=> 'Usuń modul',
	'DELETE_MODULE_CONFIRM'			=> 'Czy jesteś pewien, że chcesz usunąć ten moduł?',

	'EDIT_MODULE'					=> 'Edytuj moduł',
	'EDIT_MODULE_EXPLAIN'			=> 'Tutaj możesz wprowadzić specyficzne ustawienia modułu.',

	'HIDDEN_MODULE'					=> 'Moduł ukryty',

	'MODULE'						=> 'Moduł',
	'MODULE_ADDED'					=> 'Moduł został dodany pomyślnie.',
	'MODULE_DELETED'				=> 'Moduł został pomyślnie usunięty.',
	'MODULE_DISPLAYED'				=> 'Moduł wyświetlono',
	'MODULE_DISPLAYED_EXPLAIN'		=> 'Jeśli nie chcesz wyświetlać tego modułu, ale chcesz go użyć, ustaw na "nie".',
	'MODULE_EDITED'					=> 'Edycja modułu zakończona pomyślnie.',
	'MODULE_ENABLED'				=> 'Moduł włączony',
	'MODULE_LANGNAME'				=> 'Nazwa języka modułu',
	'MODULE_LANGNAME_EXPLAIN'		=> 'Wprowadź nazwę modułu, która będzie wyświetlana. Użyj stałej językowej, jeżeli nazwa będzie pobierana z pliku językowego.',
	'MODULE_TYPE'					=> 'Typ modułu',

	'NO_CATEGORY_TO_MODULE'			=> 'Nie można zmienić kategorii w moduł. Musisz usunąć/przenieść wszystkie elementy potomne przed wykonaniem tej akcji.',
	'NO_MODULE'						=> 'Nie znaleziono modułów.',
	'NO_MODULE_ID'					=> 'Id modułu nie zostało określone.',
	'NO_MODULE_LANGNAME'			=> 'Nazwa języka modułu nie została określona.',
	'NO_PARENT'						=> 'Brak nadrzędnego',

	'PARENT'						=> 'Rodzic',
	'PARENT_NO_EXIST'				=> 'Rodzic nie istnieje',

	'SELECT_MODULE'					=> 'Wybierz moduł',
));

?>