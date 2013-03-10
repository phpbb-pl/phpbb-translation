<?php
/**
*
* posting.php [Polish]
*
* @package language
* @copyright (c) 2008 phpBB Group
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
	'ADD_ATTACHMENT'				=> 'Dodaj załącznik',
	'ADD_ATTACHMENT_EXPLAIN'		=> 'Jeśli chcesz dołączyć jeden lub więcej plików, uzupełnij szczegóły poniżej.',
	'ADD_FILE'						=> 'Dodaj plik',
	'ADD_POLL'						=> 'Tworzenie ankiety',
	'ADD_POLL_EXPLAIN'				=> 'Jeśli nie chcesz dodawać ankiety do swojego tematu, pozostaw pola puste',
	'ALREADY_DELETED'				=> 'Przepraszamy, ale ta wiadomość została skasowana.',
	'ATTACH_QUOTA_REACHED'			=> 'Przepraszamy, skończyło sie miejsce na załączniki',
	'ATTACH_SIG'					=> 'Dołącz podpis (podpis można zmienić w panelu użytkownika)',

	'BBCODE_A_HELP'					=> 'Wgrywaj pliki w jednej linii: [attachment=]nazwapliku.roz[/attachment]',
	'BBCODE_B_HELP'					=> 'Pogrubiony tekst: [b]tekst[/b] (alt b)',
	'BBCODE_C_HELP'					=> 'Kod: [code]kod[/code] (alt c)',
	'BBCODE_D_HELP'					=> 'Flash: [flash=szerokość,wysokość]http://url[/flash]',
	'BBCODE_E_HELP'					=> 'Lista: Dodaj element listy',
	'BBCODE_F_HELP'					=> 'Rozmiar czcionki: [size=85-small]mała czcionka[/size]',
	'BBCODE_IS_OFF'					=> '%sBBCode%s <em>wyłączony</em>',
	'BBCODE_IS_ON'					=> '%sBBCode%s <em>włączony</em>',
	'BBCODE_I_HELP'					=> 'Tekst pochyły: [i]tekst[/i] ',
	'BBCODE_LISTITEM_HELP'			=> 'Pozycja listy: [*]tekst[/*]',
	'BBCODE_L_HELP'					=> 'Lista: [list]tekst[/list]',
	'BBCODE_O_HELP'					=> 'Lista uporządkowana: [list=]tekst[/list]',
	'BBCODE_P_HELP'					=> 'Wstaw obrazek: [img]http://adres_obrazka[/img]',
	'BBCODE_Q_HELP'					=> 'Cytat: [quote]text[/quote]',
	'BBCODE_S_HELP'					=> 'Kolor czcionki: [color=red]text[/color] Podpowiedź: możesz także użyć color=#FF0000',
	'BBCODE_U_HELP'					=> 'Podkreślony tekst: [u]tekst[/u]',
	'BBCODE_W_HELP'					=> 'Wstaw link: [url]http://url[/url] lub [url=http://url]URL tekst[/url]',
	'BUMP_ERROR'					=> 'Upłynęło za mało czasu od napisania ostatniego postu aby podbić ten temat.',

	'CANNOT_DELETE_REPLIED'			=> 'Przepraszamy, ale możesz usuwać tylko posty, na które nikt nie odpowiedział.',
	'CANNOT_EDIT_POST_LOCKED'		=> 'Ten post został zablokowany. Nie możesz go już edytować.',
	'CANNOT_EDIT_TIME'				=> 'Nie możesz już edytować ani usunąć tego postu.',
	'CANNOT_POST_ANNOUNCE'			=> 'Przepraszamy, ale nie możesz pisać ogłoszeń.',
	'CANNOT_POST_STICKY'			=> 'Przepraszamy, ale nie możesz wysyłać tematów przyklejonych.',
	'CHANGE_TOPIC_TO'				=> 'Zmień typ tematu na',
	'CLOSE_TAGS'					=> 'Zamknij tagi',
	'CURRENT_TOPIC'					=> 'Aktualny temat',

	'DELETE_FILE'					=> 'Usuń plik',
	'DELETE_MESSAGE'				=> 'Usuń wiadomość',
	'DELETE_MESSAGE_CONFIRM'		=> 'Jesteś pewny, że chcesz usunąć tę wiadomość?',
	'DELETE_OWN_POSTS'				=> 'Przepraszamy, ale możesz usuwać tylko swoje posty.',
	'DELETE_POST_CONFIRM'			=> 'Jesteś pewny, że chcesz usunąć tego posta?',
	'DELETE_POST_WARN'				=> 'Nie będzie możliwości przywrócenia usuniętego postu',
	'DISABLE_BBCODE'				=> 'Wyłącz BBCode',
	'DISABLE_MAGIC_URL'				=> 'Nie twórz automatycznie linków',
	'DISABLE_SMILIES'				=> 'Wyłącz uśmieszki',
	'DISALLOWED_CONTENT'			=> 'Wgrywanie zostało odrzucone, ponieważ wgrywany plik został zidentyfikowany jako element ataku.',
	'DISALLOWED_EXTENSION'			=> 'Rozszerzenie %s jest zabronione.',
	'DRAFT_LOADED'					=> 'Wersja robocza została załadowana do posta, możesz teraz dokończyć swój post.<br />Wersja robocza zostanie usunięta jednocześnie z wysłaniem posta.',
	'DRAFT_LOADED_PM'				=> 'Załadowano szkic do pola wiadomości, możesz teraz skończyć swoją wiadomość.<br />Twój szkic zostanie skasowany po wysłaniu tej wiadomości.',
	'DRAFT_SAVED'					=> 'Szkic zapisany pomyślnie.',
	'DRAFT_TITLE'					=> 'Tytuł szkicu',

	'EDIT_REASON'					=> 'Powód edycji postu',
	'EMPTY_FILEUPLOAD'				=> 'Wgrywany plik jest pusty.',
	'EMPTY_MESSAGE'					=> 'Przed wysłaniem musisz wpisać treść wiadomości.',
	'EMPTY_REMOTE_DATA'				=> 'Plik nie może zostać wgrany, sprobuj wgrać go ręcznie.',

	'FLASH_IS_OFF'					=> '[flash] <em>wyłączony</em>',
	'FLASH_IS_ON'					=> '[flash] <em>włączony</em>',
	'FLOOD_ERROR'					=> 'Nie możesz wysłać nowego postu tak szybko po poprzednim, zaczekaj chwilę i spróbuj ponownie',
	'FONT_COLOR'					=> 'Kolor czcionki',
	'FONT_COLOR_HIDE'				=> 'Ukryj kolor czcionki',
	'FONT_HUGE'						=> 'Wielki',
	'FONT_LARGE'					=> 'Duży',
	'FONT_NORMAL'					=> 'Normalny',
	'FONT_SIZE'						=> 'Font size',
	'FONT_SMALL'					=> 'Mały',
	'FONT_TINY'						=> 'Malutki',

	'GENERAL_UPLOAD_ERROR'			=> 'Nie udało się wgrać załącznika do %s',

	'IMAGES_ARE_OFF'				=> '[img] <em>wyłączone</em>',
	'IMAGES_ARE_ON'					=> '[img] <em>włączone</em>',
	'INVALID_FILENAME'				=> '%s jest nieprawidłową nazwą pliku.',

	'LOAD'							=> 'Załaduj',
	'LOAD_DRAFT'					=> 'Wczytaj szkic',
	'LOAD_DRAFT_EXPLAIN'			=> 'Tutaj możesz wybrać szkic, którego tworzenie chcesz kontynuować. Twój obecny post będzie anulowany, a jego zawartość skasowana. Przeglądaj, zmieniaj i usuwaj swoje szkice poprzez Twój panel użytkownika.',
	'LOGIN_EXPLAIN_BUMP'			=> 'Musisz się zalogować, aby móc podbijać tematy na tym forum.',
	'LOGIN_EXPLAIN_DELETE'			=> 'Musisz się zalogować aby usuwać posty na tym forum.',
	'LOGIN_EXPLAIN_POST'			=> 'Musisz się zalogować aby pisać posty na tym forum.',
	'LOGIN_EXPLAIN_QUOTE'			=> 'Musisz się zalogować aby cytować posty na tym forum.',
	'LOGIN_EXPLAIN_REPLY'			=> 'Musisz się zalogować aby odpowiadać na tematy w tym forum.',

	'MAX_FLASH_HEIGHT_EXCEEDED'		=> 'Twój obiekt flash może mieć tylko %1$d pikseli wysokości.',
	'MAX_FLASH_WIDTH_EXCEEDED'		=> 'Twój obiekt flash może mieć tylko %1$d pikseli szerokości.',
	'MAX_FONT_SIZE_EXCEEDED'		=> 'Nie możesz używać czcionki większej niż %1$d.',
	'MAX_IMG_HEIGHT_EXCEEDED'		=> 'Twoje obrazki mogą mieć maksymalnie %1$d wysokości.',
	'MAX_IMG_WIDTH_EXCEEDED'		=> 'Twój obraz może mieć tylko %1$d pikseli szerokości.',
	'MESSAGE_BODY_EXPLAIN'			=> 'Wpisz tutaj swoją wiadomość, nie może ona zawierać więcej niż <strong>%d</strong> znaków.',
	'MESSAGE_DELETED'				=> 'Wiadomość została pomyślnie usunięta.',
	'MORE_SMILIES'					=> 'Pokaż więcej uśmieszków',

	'NOTIFY_REPLY'					=> 'Powiadom mnie e-mailem o odpowiedzi',
	'NOT_UPLOADED'					=> 'Nie udało się wgrać pliku.',
	'NO_DELETE_POLL_OPTIONS'		=> 'Nie możesz usuwać istniejących opcji w ankiecie.',
	'NO_PM_ICON'					=> 'Brak ikony PW',
	'NO_POLL_TITLE'					=> 'Musisz wpisać temat ankiety.',
	'NO_POST'						=> 'Wybrany post nie istnieje.',
	'NO_POST_MODE'					=> 'Nie określono rodzaju postu.',

	'PARTIAL_UPLOAD'				=> 'Plik został wgrany tylko częściowo.',
	'PHP_SIZE_NA'					=> 'Rozmiar pliku załącznika jest za duży.<br />Nie możesz określić większej wagi pliku niż jest ona określona przez PHP w php.ini.',
	'PHP_SIZE_OVERRUN'				=> 'Rozmiar załącznika jest zbyt duży, maksymalny rozmiar pliku to %1$d %2$s.<br />Uwaga: wynika to z konfiguracji serwera i nie może zostać nadpisana w panelu administracji forum.',
	'PLACE_INLINE'					=> 'Umieść w treści wiadomości',
	'POLL_DELETE'					=> 'Usuń ankietę',
	'POLL_FOR'						=> 'Czas trwania ankiety',
	'POLL_FOR_EXPLAIN'				=> 'Wpisz 0 lub pozostaw pole puste, by ankieta nie miała końca',
	'POLL_MAX_OPTIONS'				=> 'Opcji na użytkownika',
	'POLL_MAX_OPTIONS_EXPLAIN'		=> 'Jest to maksymalna liczba opcji jaką może wybrać użytkownik podczas głosowania. ',
	'POLL_OPTIONS'					=> 'Opcje ankiety',
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> 'Każdą opcję umieszczaj w nowej linii. Możesz wprowadzić do <strong>%d</strong> opcji. Jeżeli usuwasz lub dodajesz opcje wszystkie dotychczasowe głosy zostaną zresetowane.',
	'POLL_OPTIONS_EXPLAIN'			=> 'Wpisz każdą opcję w nowej linii. Możesz wpisać maksymalnie <strong>%d</strong> opcji.',
	'POLL_QUESTION'					=> 'Pytanie do ankiety',
	'POLL_TITLE_COMP_TOO_LONG'		=> 'Tytuł ankiety jest zbyt długi, rozważ usunięcie BBCode i uśmieszków.',
	'POLL_TITLE_TOO_LONG'			=> 'Tytuł ankiety musi mieć mniej niż 100 znaków.',
	'POLL_VOTE_CHANGE'				=> 'Zezwól na zmienianie głosów',
	'POLL_VOTE_CHANGE_EXPLAIN'		=> 'Jeżeli jest włączone, pozwala użytkownikom zmieniać swój wybór w ankietach.',
	'POSTED_ATTACHMENTS'			=> 'Wysłane załączniki',
	'POST_APPROVAL_NOTIFY'			=> 'Zostaniesz poinformowany w momencie gdy Twój post zostanie zaakceptowany.',
	'POST_CONFIRMATION'				=> 'Potwierdzenie wiadomości',
	'POST_CONFIRM_EXPLAIN'			=> 'Aby ustrzec się przed postami wysyłanymi automatycznie, administrator wymaga od Ciebie wpisania kodu potwierdzającego. Kod jest wyświetlony na obrazku, który powinieneś zobaczyć poniżej. Jeżeli masz problemy ze wzrokiem lub z innego powodu nie możesz przeczytać tego kodu, skontaktuj się z %sadministratorem forum%s.',
	'POST_DELETED'					=> 'Ta wiadomość została usunięta pomyślnie.',
	'POST_EDITED'					=> 'Wiadomość została zmieniona pomyślnie.',
	'POST_EDITED_MOD'				=> 'Wiadomość została zmieniona, ale wymaga zatwierdzenia przez moderatora zanim będzie widoczna dla innych.',
	'POST_GLOBAL'					=> 'Globalny',
	'POST_ICON'						=> 'Ikona postu',
	'POST_NORMAL'					=> 'Normalny',
	'POST_REVIEW'					=> 'Podgląd postu',
	'POST_REVIEW_EDIT'				=> 'Podgląd postu',
	'POST_REVIEW_EDIT_EXPLAIN'		=> 'Ten post został zmieniony przez innego użytkownika, gdy go edytowałeś. Możesz podejrzeć obecną wersję postu i dokonać swoich poprawek..',
	'POST_REVIEW_EXPLAIN'			=> 'Co najmniej jeden nowy post pojawił się w tym temacie. Być może z tego powodu zechcesz dokonać poprawek w swoim poście.',
	'POST_STORED'					=> 'Wiadomość została dodana pomyślnie.',
	'POST_STORED_MOD'				=> 'Ta wiadomość została dodana pomyślnie, ale wymaga akceptacji przez moderatora zanim będzie widoczna dla innych.',
	'POST_TOPIC_AS'					=> 'Wyślij wiadomość jako',
	'PROGRESS_BAR'					=> 'Pasek postępu',

	'QUOTE_DEPTH_EXCEEDED'			=> 'Możesz zagnieździć tylko %1$d poziomów cytatów.',

	'SAVE'							=> 'Zapisz',
	'SAVE_DATE'						=> 'Zapisano jako',
	'SAVE_DRAFT'					=> 'Zapisz szkic',
	'SAVE_DRAFT_CONFIRM'			=> 'Pamiętaj, że zapisany szkic zawiera tylko temat i wiadomość, wszystkie inne elementy zostaną usunięte. Chcesz zapisać do szkiców?',
	'SMILIES'						=> 'Uśmieszki',
	'SMILIES_ARE_OFF'				=> 'Uśmieszki <em>wyłączone</em>',
	'SMILIES_ARE_ON'				=> 'Uśmieszki <em>włączone</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Limit czasu Przyklejonego/Ogłoszenia',
	'STICK_TOPIC_FOR'				=> 'Przyklej temat na',
	'STICK_TOPIC_FOR_EXPLAIN'		=> 'Wpisz 0 lub zostaw puste dla niewygasającego przyklejonego tematu/ogłoszenia. Ta liczba odnosi sie do daty postu.',
	'STYLES_TIP'					=> 'Wskazówka: Style mogą być szybko zastosowane do zaznaczonego tekstu.',

	'TOO_FEW_CHARS'					=> 'Twoja wiadomość zawiera za mało znaków.',
	'TOO_FEW_CHARS_LIMIT'			=> 'Liczba znaków w twojej wiadomości: %1$d. Minimalna liczba znaków jaką musisz wprowadzić: %2$d.',
	'TOO_FEW_POLL_OPTIONS'			=> 'Musisz podać przynajmniej dwie opcje ankiety.',
	'TOO_MANY_ATTACHMENTS'			=> 'Nie można dodać kolejnego załącznika. Maksymalna liczba załączników to %d.',
	'TOO_MANY_CHARS'				=> 'Twoje wiadomość zwiera zbyt wiele znaków.',
	'TOO_MANY_CHARS_POST'			=> 'Twoja wiadomość zawiera %1$d znaków. Maksymalna dozwolona liczba znaków to %2$d.',
	'TOO_MANY_CHARS_SIG'			=> 'Twój podpis zawiera %1$d znaków. Maksymalna dozwolona liczba znaków to %2$d.',
	'TOO_MANY_POLL_OPTIONS'			=> 'Próbowałeś wprowadzić zbyt wiele opcji ankiety.',
	'TOO_MANY_SMILIES'				=> 'Twoja wiadomość zawiera zbyt wiele uśmieszków. Maksymalna liczba uśmieszków w poście to %d.',
	'TOO_MANY_URLS'					=> 'Twoja wiadomość zawiera zbyt wiele linków. Maksymalna liczba linków w poście to %d.',
	'TOO_MANY_USER_OPTIONS'			=> 'Nie możesz wyznaczyć więcej możliwych opcji dla użytkownika, niż wynosi ich łączna liczba w ankiecie.',
	'TOPIC_BUMPED'					=> 'Temat został podbity pomyślnie.',

	'UNAUTHORISED_BBCODE'			=> 'Nie możesz używać takich BBCodów: %s',
	'UNGLOBALISE_EXPLAIN'			=> 'Aby zmienić typ tego tematu z globalnego na zwykły, musisz wybrać forum, na którym temat ma być wyświetlany.',
	'UPDATE_COMMENT'				=> 'Aktualizuj komentarz',
	'URL_INVALID'					=> 'Podany przez Ciebie adres URL jest nieprawidłowy.',
	'URL_IS_OFF'					=> '[url] <em>Wyłączony</em>',
	'URL_IS_ON'						=> '[url] <em>włączony</em>',
	'URL_NOT_FOUND'					=> 'Wybrany plik nie może zostać odnaleziony.',
	'USER_CANNOT_BUMP'				=> 'Nie możesz podbijać tematów w tym forum.',
	'USER_CANNOT_DELETE'			=> 'Nie możesz usuwać postów na tym forum.',
	'USER_CANNOT_EDIT'				=> 'Nie możesz edytować postów w tym forum.',
	'USER_CANNOT_FORUM_POST'		=> 'Nie możesz wykonać operacji wysyłania na tym forum, ponieważ forum tego typu nie obsługuje ich.',
	'USER_CANNOT_REPLY'				=> 'Nie możesz odpowiadać na tym forum.',

	'VIEW_MESSAGE'					=> '%sZobacz swoją wiadomość%s',
	'VIEW_PRIVATE_MESSAGE'			=> '%sPokaż twoje wysłane prywatne wiadomości%s',

	'WRONG_FILESIZE'				=> 'Plik jest za duży, maksymalny dopuszczalny rozmiar to %1d %2s.',
	'WRONG_SIZE'					=> 'Obrazek musi mieć przynajmniej %1$d pikseli szerokości, %2$d pikseli wysokości, i co najwyżej %3$d pikseli szerokości i %4$d pikseli wysokości. Przesyłany obrazek ma %5$d pikseli szerokości i %6$d pikseli wysokości.',
));

?>