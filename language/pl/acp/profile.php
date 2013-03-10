<?php
/** 
* /acp/profile.php [Polish]
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
	'ADDED_PROFILE_FIELD'			=> 'Nowe pole profilu zostało dodane pomyślnie.',
	'ALPHA_ONLY'					=> 'Tylko znaki alfanumeryczne',
	'ALPHA_SPACERS'					=> 'Znaki alfanumeryczne i odstępy',
	'ALWAYS_TODAY'					=> 'Zawsze obecna data',

	'BOOL_ENTRIES_EXPLAIN'			=> 'Wprowadź teraz swoje opcje',
	'BOOL_TYPE_EXPLAIN'				=> 'Określ typ: pole wyboru lub pole opcji. Pole wyboru zostanie wyświetlone jedynie, jeżeli zostało wybrane przez danego użytkownika. W tym przypadku <strong>druga</strong> zmienna językowa zostanie użyta. Pola opcji będą wyświetlane niezależnie od ich zaznaczenia.',

	'CHANGED_PROFILE_FIELD'			=> 'Pole profilu zostało zmienione pomyślnie.',
	'CHARS_ANY'						=> 'Dowolny znak',
	'CHECKBOX'						=> 'Pole wyboru',
	'COLUMNS'						=> 'Kolumny',
	'CP_LANG_DEFAULT_VALUE'			=> 'Domyślna wartość',
	'CP_LANG_EXPLAIN'				=> 'Opis pola',
	'CP_LANG_EXPLAIN_EXPLAIN'		=> 'Wyjaśnienie dla tego pola wyświetlane użytkownikowi.',
	'CP_LANG_NAME'					=> 'Nazwa/tytuł pola wyświetlane użytkownikowi',
	'CP_LANG_OPTIONS'				=> 'Opcje',
	'CREATE_NEW_FIELD'				=> 'Utwórz nowe pole',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Przynajmniej jedno dodatkowe pole profilu nie zostało przetłumaczone. Wprowadź potrzebne informacje poprzez kliknięcie w odnośnik "Tłumacz".',

	'DEFAULT_ISO_LANGUAGE'			=> 'Domyślny język [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Wpisy językowe dla domyślnego języka nie są wypełniane dla tego pola.',
	'DEFAULT_VALUE'					=> 'Domyślna wartość',
	'DELETE_PROFILE_FIELD'			=> 'Usuń pole profilu',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Czy na pewno chcesz usunąć to pole profilu?',
	'DISPLAY_AT_PROFILE'			=> 'Wyświetlaj w panelu kontrolnym użytkownika',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Użytkownik może zmienić to pole wewnątrz Panelu Kontrolnego Użytkownika.',
	'DISPLAY_AT_REGISTER'			=> 'Wyświetlaj podczas rejestracji',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Jeśli ta opcja jest włączona, pole zostanie wyświetlone podczas rejestracji.',
	'DISPLAY_ON_VT'					=> 'Wyświetlaj w widoku tematu',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Jeżeli ta opcja jest włączona, to te pole będzie pokazywane w widoku tematu przy informacjach o profilu.',
	'DISPLAY_PROFILE_FIELD'			=> 'Publicznie pokazuj pole profilu',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Pole profilu będzie wyświetlane we wszystkich lokalizacjach jeżeli ustawienia obciążenia na to pozwalają. Ustawienie tego na “nie” ukryje to pole na stronie tematu, profilu oraz liście użytkowników.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Wprowadź teraz swoje opcje, każdą opcję w nowej linii.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Zauważ, że masz możliwość zmiany opisu własnych opcji. Możesz dodawać nowe opcje na końcu. Dodawanie nowych opcji pomiędzy już istniejącymi nie jest zalecane - może to spowodować błędne przekazywanie opcji dla Twoich użytkowników. Może się to również zdarzyć jeśli usuniesz opcję ze środka. Usuwanie opcji z końca powoduje, że użytkownikom zostanie przypisana tam ponownie domyślna wartość.',
	'EMPTY_FIELD_IDENT'				=> 'Pusty identyfikator pola',
	'EMPTY_USER_FIELD_NAME'			=> 'Proszę, wprowadź nazwę/tytuł pola',
	'ENTRIES'						=> 'Wpisy',
	'EVERYTHING_OK'					=> 'Wszystko w porządku',

	'FIELD_BOOL'					=> 'Wartość logiczna (Tak/Nie)',
	'FIELD_DATE'					=> 'Data',
	'FIELD_DESCRIPTION'				=> 'Opis pola',
	'FIELD_DESCRIPTION_EXPLAIN'		=> 'Wyjaśnienie dla tego pola wyświetlane użytkownikowi.',
	'FIELD_DROPDOWN'				=> 'Pole rozwijalne',
	'FIELD_IDENT'					=> 'Identyfikator pola',
	'FIELD_IDENT_ALREADY_EXIST'		=> 'Wybrany identyfikator pola już istnieje. Proszę wybrać inny.',
	'FIELD_IDENT_EXPLAIN'			=> 'Identyfikator pola jest nazwą, która odróżnia pola profilu wewnątrz bazy danych i w szablonach.',
	'FIELD_INT'						=> 'Liczby',
	'FIELD_LENGTH'					=> 'Długość pola',
	'FIELD_NOT_FOUND'				=> 'Pole profilu nie zostało znalezione.',
	'FIELD_STRING'					=> 'Pojedyńcze pole tekstowe',
	'FIELD_TEXT'					=> 'Pole tekstowe',
	'FIELD_TYPE'					=> 'Typ pola',
	'FIELD_TYPE_EXPLAIN'			=> 'Nie możesz zmienić później typu pola.',
	'FIELD_VALIDATION'				=> 'Sprawdzanie poprawności pola',
	'FIRST_OPTION'					=> 'Pierwsza opcja',

	'HIDE_PROFILE_FIELD'			=> 'Ukryj pole profilu',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Ukryj pole profilu wszystkim użytkownikom, za wyjątkiem administratorów i moderatorów, którzy będą widzieć to pole. Jeżeli opcja wyświetlania w panelu kontrolnym użytkownika jest wyłączona, użytkownik nie będzie widział oraz nie będzie mógł zmieniać tego pola, które będzie mogło być zmieniane tylko przez administratorów.',

	'INVALID_CHARS_FIELD_IDENT'		=> 'Identyfikator pola może zawierać tylko małe litery od a do z oraz znak _',
	'INVALID_FIELD_IDENT_LEN'		=> 'Identyfikator pola może mieć długość tylko 17 znaków',
	'ISO_LANGUAGE'					=> 'Język [%s]',

	'LANG_SPECIFIC_OPTIONS'			=> 'Szczególne opcje dla języka [%s]',

	'MAX_FIELD_CHARS'				=> 'Maksymalna liczba znaków',
	'MAX_FIELD_NUMBER'				=> 'Najwyższy dozwolony numer',
	'MIN_FIELD_CHARS'				=> 'Minimalna liczba znaków',
	'MIN_FIELD_NUMBER'				=> 'Najniższy dozwolony numer',

	'NO_FIELD_ENTRIES'				=> 'Żadne wpisy nie zostały zdefiniowane.',
	'NO_FIELD_ID'					=> 'ID pola nie zostało określone.',
	'NO_FIELD_TYPE'					=> 'Typ pola nie został zdefiniowany.',
	'NO_VALUE_OPTION'				=> 'Opcja równa niewpisanej wartości',
	'NO_VALUE_OPTION_EXPLAIN'		=> 'Wartość nieprzeznaczona do wybrania. Zostanie wygenerowany komunikat błędu, jeżeli pole jest wymagane a użytkownik wybierze właśnie tę opcję.',
	'NUMBERS_ONLY'					=> 'Tylko cyfry (0-9)',

	'PROFILE_BASIC_OPTIONS'			=> 'Opcje podstawowe',
	'PROFILE_FIELD_ACTIVATED'		=> 'Pole profilu zostało aktywowane pomyślnie.',
	'PROFILE_FIELD_DEACTIVATED'		=> 'Pole profilu zostało dezaktywowane pomyślnie.',
	'PROFILE_LANG_OPTIONS'			=> 'Szczególne opcje językowe',
	'PROFILE_TYPE_OPTIONS'			=> 'Szczegółowe opcje typu profilu',

	'RADIO_BUTTONS'					=> 'pole jednokrotnego wyboru',
	'REMOVED_PROFILE_FIELD'			=> 'Pole profilu zostało usunięte pomyślnie.',
	'REQUIRED_FIELD'				=> 'Wymagane pole',
	'REQUIRED_FIELD_EXPLAIN'		=> 'Wymuś na użytkowniku lub administratorze wypełnienie pola. Jeżeli opcja wyświetlania na stronie rejestracji jest wyłączona, to pole będzie wymagane tylko, kiedy użytkownik edytuje swój profil.',
	'ROWS'							=> 'Rzędów',

	'SAVE'							=> 'Zapisz',
	'SECOND_OPTION'					=> 'Druga opcja',
	'STEP_1_EXPLAIN_CREATE'			=> 'Tutaj możesz wpisać, pierwsze, podstawowe parametry Twojego nowego pola. Te informacje są potrzebne do drugiego kroku, gdzie będziesz mógł ustawić pozostałe opcje, zobaczyć i ustawić Twoje nowe pole profilu.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Tutaj możesz zmienić podstawowe parametry Twojego pola w profilu. Odpowiednie opcje są przeliczane w kolejnym kroku.',
	'STEP_1_TITLE_CREATE'			=> 'Dodaj pole profilu',
	'STEP_1_TITLE_EDIT'				=> 'Edytuj pole profilu',
	'STEP_2_EXPLAIN_CREATE'			=> 'Tutaj możesz dokonać zmian w głównych ustawieniach.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Tutaj masz możliwość zmiany niektórych wspólnych opcji.<br /><strong>Pamiętaj, że zmiana pól profilu nie wpłynie na istniejące, uzupełnione już przez użytkowników pola.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Szczegółowe opcje typu profilu',
	'STEP_2_TITLE_EDIT'				=> 'Szczegółowe opcje typu profilu',
	'STEP_3_EXPLAIN_CREATE'			=> 'Gdy masz zainstalowany więcej niż jeden język, będziesz musiał wypełnić też następne pola językowe. Pola profilu będą pracować z włączonym domyślnym językiem, więc możesz uzupełnić pola językowe później.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Gdy masz zainstalowany więcej niż jeden język, będziesz mógł zmienić lub dodać pozostałe pola językowe. Pole profilu będzie pracować z włączonym domyślnym językiem.',
	'STEP_3_TITLE_CREATE'			=> 'Pozostałe definicje językowe',
	'STEP_3_TITLE_EDIT'				=> 'Definicje językowe',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Wpisz domyślną wartość do wyświetlenia. Pozostaw puste, jeżeli ma wyświetlać się początkowo jako puste.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Wpisz domyślny tekst do wyświetlenia. Pole zostaw puste, jeśli chcesz pokazać je na pierwszym miejscu.',
	'TRANSLATE'						=> 'Przetłumacz',

	'USER_FIELD_NAME'				=> 'Nazwa/tytuł pola prezentowane użytkownikowi',

	'VISIBILITY_OPTION'				=> 'Widoczność opcji',
));

?>