<?php
/**
*
* acp_profile [Polski]
*
* @package language
* @version $Id: profile.php 9916 2009-08-03 15:46:56Z Kellanved $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 9916 2009-09-25 19:36:21 Zespół Olympus.pl $

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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'		=> 'Dodano pole profilu.',
	'ALPHA_ONLY'			=> 'Tylko litery i cyfry',
	'ALPHA_SPACERS'			=> 'Litery, cyfry i odstępy',
	'ALWAYS_TODAY'			=> 'Zawsze aktualna data',

	'BOOL_ENTRIES_EXPLAIN'		=> 'Wprowadź swoje opcje',
	'BOOL_TYPE_EXPLAIN'		=> 'Zdefiniuj typ pola: pole zaznaczenia (checkbox) lub przycisk typu „radio”. Pole zaznaczenia będzie wyświetlane tylko, jeśli jest zaznaczone dla danego użytkownika. W tym przypadku będzie używana <strong>druga</strong> opcja językowa. Przyciski typu „radio” będą wyświetlane bez względu na ich wartości.',

	'CHANGED_PROFILE_FIELD'		=> 'Zmieniono pole profilu.',
	'CHARS_ANY'			=> 'Dowolny znak',
	'CHECKBOX'			=> 'Pole zaznaczenia',
	'COLUMNS'			=> 'Kolumny',
	'CP_LANG_DEFAULT_VALUE'		=> 'Domyślna wartość',
	'CP_LANG_EXPLAIN'		=> 'Pole opisu',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Opis pola, jaki będzie widział użytkownik.',
	'CP_LANG_NAME'			=> 'Nazwa/tytuł pola, jaki będzie widział użytkownik',
	'CP_LANG_OPTIONS'		=> 'Opcje',
	'CREATE_NEW_FIELD'		=> 'Utwórz nowe pole',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Co najmniej jedno pole profilu nie zostało jeszcze przetłumaczone. Wprowadź wymagane informacje, klikając odnośnik „Przetłumacz”.',

	'DEFAULT_ISO_LANGUAGE'		=> 'Domyślny język [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'W tym polu nie wprowadzono wpisów właściwych dla domyślnego języka.',
	'DEFAULT_VALUE'			=> 'Domyślna wartość',
	'DELETE_PROFILE_FIELD'		=> 'Usuń pole',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Czy na pewno chcesz usunąć to pole?',
	'DISPLAY_AT_PROFILE'		=> 'Wyświetlaj w panelu zarządzania kontem',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Użytkownik będzie miał możliwość zmiany tego pola z poziomu panelu zarządzania swoim kontem.',
	'DISPLAY_AT_REGISTER'		=> 'Wyświetlaj na stronie rejestracji',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Jeśli ta funkcja jest włączona, pole będzie wyświetlane na stronie rejestracji.',
	'DISPLAY_ON_VT'					=> 'Wyświetlaj na ekranie przeglądu tematu',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Jeśli ta funkcja jest włączona, pole będzie wyświetlane w mini profilu na ekranie przeglądu tematu.',
	'DISPLAY_PROFILE_FIELD'		=> 'Wyświetlaj pole',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'To pole profilu będzie wyświetlane we wszystkich lokalizacjach dozwolonych w ustawieniach wyświetlania. Wybranie „Nie” spowoduje, że pole nie będzie widoczne na stronach tematów, profili i na liście użytkowników.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'Wprowadź opcje teraz. Każda opcja w oddzielnym wierszu.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Można zmieniać opcje tekstu, a także dodawać nowe opcje na końcu. Nie należy usuwać ani dodawać nowych opcji pomiędzy istniejącymi – może to spowodować przydzielenie użytkownikom złych opcji. Usunięcie opcji znajdujących się na końcu spowoduje, że użytkownicy, którzy mieli przydzielony ten element powrócą do domyślnych ustawień.',
	'EMPTY_FIELD_IDENT'		=> 'Puste pole identyfikacji',
	'EMPTY_USER_FIELD_NAME'		=> 'Proszę wprowadzić nazwę/tytuł pola',
	'ENTRIES'			=> 'Wpisy',
	'EVERYTHING_OK'			=> 'Wszystko jest OK',

	'FIELD_BOOL'			=> 'Wartość logiczna (Tak/Nie)',
	'FIELD_DATE'			=> 'Data',
	'FIELD_DESCRIPTION'		=> 'Opis pola',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Zawartość tego pola zawierającą opis/objaśnienie będzie widział użytkownik.',
	'FIELD_DROPDOWN'		=> 'Menu rozwijane',
	'FIELD_IDENT'			=> 'Identyfikator pola',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Wybrana nazwa identyfikatora pola już istnieje. Proszę wybrać inną nazwę.',
	'FIELD_IDENT_EXPLAIN'		=> 'Identyfikator pola jest nazwą identyfikującą pole w bazie danych i szablonach.',
	'FIELD_INT'			=> 'Wartość liczbowa',
	'FIELD_LENGTH'			=> 'Długość pola wprowadzania',
	'FIELD_NOT_FOUND'		=> 'Nie znaleziono pola.',
	'FIELD_STRING'			=> 'Jednowierszowe pole tekstowe',
	'FIELD_TEXT'			=> 'Wielowierszowe pole tekstowe',
	'FIELD_TYPE'			=> 'Typ pola',
	'FIELD_TYPE_EXPLAIN'		=> 'Nie ma możliwości zmiany typu pola w późniejszym czasie.',
	'FIELD_VALIDATION'		=> 'Weryfikacja pola',
	'FIRST_OPTION'			=> 'Pierwsza opcja',

	'HIDE_PROFILE_FIELD'		=> 'Ukryj pole profilu',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Funkcja ta pozwala ukryć pole profilu. Jeśli jest włączona, tylko użytkownik, administratorzy i moderatorzy będą widzieli to pole. Jeśli funkcja „Wyświetlaj w panelu zarządzania kontem”, jest wyłączona – pole nie będzie widoczne dla użytkownika i będzie mogło być zmieniane tylko przez administratorów.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Pole identyfikacji może zawierać tylko małe litery (a–z) i _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Pole identyfikacji może mieć maksymalnie długość 17 znaków',
	'ISO_LANGUAGE'			=> 'Język [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Opcje specyficzne dla języka [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maksymalna liczba znaków',
	'MAX_FIELD_NUMBER'		=> 'Największa dozwolona liczba',
	'MIN_FIELD_CHARS'		=> 'Minimalna liczba znaków',
	'MIN_FIELD_NUMBER'		=> 'Najmniejsza dozwolona liczba',

	'NO_FIELD_ENTRIES'		=> 'Nie określono wpisów',
	'NO_FIELD_ID'			=> 'Nie określono ID pola.',
	'NO_FIELD_TYPE'			=> 'Nie określono typu pola.',
	'NO_VALUE_OPTION'		=> 'Opcja równoważna niewprowadzonej wartości',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Wartość w przypadku braku wpisu. Jeśli pole jest wymagane, użytkownik otrzyma powiadomienie o błędzie, jeśli wybierze opcję tutaj zaznaczoną.',
	'NUMBERS_ONLY'			=> 'Tylko cyfry (0–9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Opcje podstawowe',
	'PROFILE_FIELD_ACTIVATED'	=> 'Pole zostało aktywowane.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Pole zostało dezaktywowane.',
	'PROFILE_LANG_OPTIONS'		=> 'Opcje językowe',
	'PROFILE_TYPE_OPTIONS'		=> 'Opcje dodatkowe',

	'RADIO_BUTTONS'			=> 'Przyciski typu „radio”',
	'REMOVED_PROFILE_FIELD'		=> 'Pole zostało usunięte.',
	'REQUIRED_FIELD'		=> 'Pole wymagane',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Funkcja ta wymusza wypełnienie lub określenie danego pola przez użytkownika bądź administratora. Jeśli wyświetlanie na stronie rejestracji jest wyłączone, pole będzie wymagane podczas edycji profilu użytkownika.',
	'ROWS'				=> 'Wiersze',

	'SAVE'				=> 'Zapisz',
	'SECOND_OPTION'			=> 'Druga opcja',
	'STEP_1_EXPLAIN_CREATE'		=> 'Tutaj można wprowadzić pierwsze podstawowe parametry nowego pola profilu. Te informacje są potrzebne w drugim kroku, w którym będzie możliwość ustawienia pozostałych opcji, a także dla zmian pola profilu później.',
	'STEP_1_EXPLAIN_EDIT'		=> 'Tutaj można zmienić podstawowe parametry pola profilu. Odpowiednie opcje zostaną przewartościowane w następnym kroku.',
	'STEP_1_TITLE_CREATE'		=> 'Dodaj pole',
	'STEP_1_TITLE_EDIT'		=> 'Edycja pola',
	'STEP_2_EXPLAIN_CREATE'		=> 'Tutaj można zdefiniować kilka dodatkowych opcji, które będzie można potem dostosować.',
	'STEP_2_EXPLAIN_EDIT'		=> 'Tutaj można zmienić kilka dodatkowych opcji.<br /><strong>Zmiany w polach profilu nie mają wpływu na istniejące pola profilu wprowadzone przez użytkowników.</strong>',
	'STEP_2_TITLE_CREATE'		=> 'Opcje dodatkowe pola',
	'STEP_2_TITLE_EDIT'		=> 'Opcje dodatkowe pola',
	'STEP_3_EXPLAIN_CREATE'		=> 'Jeśli na witrynie jest zainstalowanych kilka języków trzeba wypełnić także definicje w pozostałych językach. Jeśli elementy te nie zostaną wypełnione, pole będzie współdziałało z domyślnym językiem witryny. Definicje można wypełnić również w późniejszym czasie.',
	'STEP_3_EXPLAIN_EDIT'		=> 'Jeśli na witrynie jest zainstalowanych kilka języków, można teraz zmienić lub dodać pozostałe definicje językowe. Jeśli elementy te nie zostaną wypełnione, pole będzie współdziałało z językiem domyślnym witryny.',
	'STEP_3_TITLE_CREATE'		=> 'Pozostałe definicje językowe',
	'STEP_3_TITLE_EDIT'		=> 'Definicje językowe',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Proszę wprowadzić frazę, która będzie wyświetlana jako wartość domyślna. Jeśli na pierwszym miejscu ma być wyświetlane puste pole, należy pozostawić to pole niewypełnione.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Proszę wprowadzić tekst, który będzie wyświetlany jako wartość domyślna. Jeśli na pierwszym miejscu ma być wyświetlane puste pole, należy pozostawić to pole niewypełnione.',
	'TRANSLATE'			=> 'Przetłumacz',

	'USER_FIELD_NAME'		=> 'Nazwa/tytuł pola jaki będzie widział użytkownik',

	'VISIBILITY_OPTION'		=> 'Opcje wyświetlania',
));

?>
