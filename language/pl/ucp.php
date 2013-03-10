<?php
/**
* /ucp.php [Polish]
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
	'ACCOUNT_ACTIVE'						=> 'Twoje konto zostało aktywowane. Dziękujemy za rejestrację.',
	'ACCOUNT_ACTIVE_ADMIN'					=> 'Konto zostało aktywowane.',
	'ACCOUNT_ACTIVE_PROFILE'				=> 'Twoje konto zostało ponownie aktywowane.',
	'ACCOUNT_ADDED'							=> 'Dziękujemy za rejestrację, Twoje konto zostało utworzone. Możesz zalogować się korzystając z podanych wcześniej: nazwy użytkownika i hasła.',
	'ACCOUNT_COPPA'							=> 'Twoje konto zostało utworzone, ale nie zostało jeszcze zatwierdzone. Sprawdź swoje konto e-mail, aby dowiedzieć się wiecej.',
	'ACCOUNT_EMAIL_CHANGED'					=> 'Twoje konto zostało zaktualizowane. Jednak w przypadku zmiany adresu e-mail wymagana jest jednak ponowna aktywacja konta. Klucz aktywacyjny został wysłany na nowy adres e-mail. Sprawdź swoje konto e-mail aby dowiedzieć się więcej.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'			=> 'Twoje konto zostało zaktualizowane. W przypadku zmiany adresu e-mail  niezbędna jest ponowna aktywacja konta przez administratora. Została do nich wysłana wiadomość e-mail i zostaniesz powiadomiony o aktywacji konta.',
	'ACCOUNT_INACTIVE'						=> 'Twoje konto zostało utworzone. Jednak to forum wymaga aktywacji konta poprzez podanie klucza aktywacyjnego. Klucz został wysłany na podany przez Ciebie adres e-mail. Sprawdź swoje konto e-mail aby dowiedzieć się więcej.',
	'ACCOUNT_INACTIVE_ADMIN'				=> 'Twoje konto zostało utworzone. Jednak to forum wymaga aktywacji konta poprzez administratora, został do niego wysłany e-mail w tej sprawie. Zostaniesz poinformowany kiedy konto zostanie aktywowane.',
	'ACTIVATION_EMAIL_SENT'					=> 'Link aktywacyjny został wysłany na Twój adres e-mail.',
	'ACTIVATION_EMAIL_SENT_ADMIN'			=> 'E-mail aktywacyjny został wysłany do administratorów.',
	'ADD'									=> 'Dodaj',
	'ADD_BCC'								=> 'Dodaj [BCC]',
	'ADD_FOES'								=> 'Dodaj nowych wrogów',
	'ADD_FOES_EXPLAIN'						=> 'Możesz umieścić kilka nazw użytkowników w oddzielnych liniach.',
	'ADD_FOLDER'							=> 'Dodaj katalog',
	'ADD_FRIENDS'							=> 'Dodaj nowych przyjaciół',
	'ADD_FRIENDS_EXPLAIN'					=> 'Możesz umieścić kilka nazw użytkowników w oddzielnych liniach.',
	'ADD_NEW_RULE'							=> 'Dodaj nową regułę',
	'ADD_RULE'								=> 'Dodaj regułę',
	'ADD_TO'								=> 'Dodaj [Do]',
	'ADD_USERS_UCP_EXPLAIN'					=> 'Tutaj możesz dodać nowych użytkowników do grupy. Możesz określić też czy ta grupa ma być domyślną dla wybranych użytkowników. Wprowadzaj każdego użytkownika w nowej linii.',
	'ADMIN_EMAIL'							=> 'Administratorzy mogą przysyłać mi informacje poprzez e-mail',
	'AGREE'									=> 'Zgadzam się na te warunki',
	'ALLOW_PM'								=> 'Zezwalaj użytkownikom na wysyłanie do Ciebie prywatnych wiadomości',
	'ALLOW_PM_EXPLAIN'						=> 'Proszę pamiętać, że administratorzy i moderatorzy zawsze mogą wysłać do Ciebie PW.',
	'ALREADY_ACTIVATED'						=> 'Twoje konto zostało już aktywowane.',
	'ATTACHMENTS_DELETED'					=> 'Załączniki usunięte pomyślnie.',
	'ATTACHMENTS_EXPLAIN'					=> 'To jest lista załączników, jakie dołączyłeś do postów na tym forum.',
	'ATTACHMENT_DELETED'					=> 'Załącznik usunięty pomyślnie.',
	'AVATAR_CATEGORY'						=> 'Kategoria',
	'AVATAR_EXPLAIN'						=> 'Maksymalny rozmiar; szerokość: %1$d pikseli, wysokość: %2$d pikseli, waga pliku: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'				=> 'Funkcja używania awatarów została zablokowana.',
	'AVATAR_GALLERY'						=> 'Lokalna galeria',
	'AVATAR_GENERAL_UPLOAD_ERROR'			=> 'Nie można wysłać awataru do %s',
	'AVATAR_NOT_ALLOWED'					=> 'Twój awatar nie mógł zostać wyświetlony, ponieważ awatary zostały wyłączone.',
	'AVATAR_PAGE'							=> 'Strona',
	'AVATAR_TYPE_NOT_ALLOWED'				=> 'Twój awatar nie mógł zostać wyświetlony, ponieważ rodzaj jego pliku został zabroniony.',

	'BACK_TO_DRAFTS'						=> 'Wróć do szkiców',
	'BACK_TO_LOGIN'							=> 'Wróć do strony logowania',
	'BIRTHDAY'								=> 'Urodziny',
	'BIRTHDAY_EXPLAIN'						=> 'Wpisanie roku spowoduje wyświetlenie Twojego wieku w momencie Twoich urodzin.',
	'BOARD_DATE_FORMAT'						=> 'Mój format daty',
	'BOARD_DATE_FORMAT_EXPLAIN'				=> 'Składnia jest identyczna z funkcją <a href="http://www.php.net/date">date()</a> w PHP.',
	'BOARD_DST'								=> 'Uwzględniaj czas letni',
	'BOARD_LANGUAGE'						=> 'Mój język',
	'BOARD_STYLE'							=> 'Mój styl Forum',
	'BOARD_TIMEZONE'						=> 'Moja strefa czasowa',
	'BOOKMARKS'								=> 'Zakładki',
	'BOOKMARKS_DISABLED'					=> 'Zakładki zostały wyłączone na tym Forum',
	'BOOKMARKS_EXPLAIN'						=> 'Możesz dodać tematy do zakładek, aby móc potem się łatwo do nich odwoływać. Zaznacz pola wyboru przy zakładkach, które chcesz usunąć i naciśnij przycisk <em>Usuń zaznaczone zakładki</em>.',
	'BOOKMARKS_REMOVED'						=> 'Zakładki zostały usunięte pomyślnie.',

	'CANNOT_EDIT_MESSAGE_TIME'				=> 'Nie możesz dłużej edytować, bądź usuwać tej wiadomości.',
	'CANNOT_MOVE_FROM_SPECIAL'				=> 'Wiadomości nie mogą zostać przeniesione ze skrzynki Do wysłania.',
	'CANNOT_MOVE_TO_SAME_FOLDER'			=> 'Wiadomości nie mogą zostać przeniesione do katalogu, który chcesz usunąć.',
	'CANNOT_REMOVE_FOLDER'					=> 'Ten katalog nie może być usunięty.',
	'CANNOT_RENAME_FOLDER'					=> 'Nie można zmienić nazwy tego katalogu.',
	'CHANGE_DEFAULT_GROUP'					=> 'Zmień domyślną grupę',
	'CHANGE_PASSWORD'						=> 'Zmień hasło',
	'CLICK_RETURN_FOLDER'					=> '%1$sPowróć do katalogu "%3$s"%2$s',
	'CONFIRMATION'							=> 'Potwierdzenie rejestracji',
	'CONFIRM_CHANGES'						=> 'Potwierdź zmiany',
	'CONFIRM_EMAIL'							=> 'Potwierdź adres e-mail',
	'CONFIRM_EMAIL_EXPLAIN'					=> 'Podaj tylko, gdy zmieniasz Twój adres e-mail.',
	'CONFIRM_EXPLAIN'						=> 'Aby ustrzec się przed rejestracjami dokonywanymi automatycznie, administrator wymaga od Ciebie wpisania kodu potwierdzającego. Kod jest wyświetlony na obrazku, który powinieneś zobaczyć poniżej. Jeżeli masz problemy ze wzrokiem lub z innego powodu nie możesz przeczytać tego kodu, skontaktuj się z %sadministratorem Forum%s.',
	'CONFIRM_PASSWORD'						=> 'Potwierdź hasło',
	'CONFIRM_PASSWORD_EXPLAIN'				=> 'Musisz potwierdzić swoje hasło tylko w przypadku, gdy wpisałeś nowe powyżej.',
	'COPPA_BIRTHDAY'						=> 'Proszę podać datę urodzin, by kontynuować proces rejestracji.',
	'COPPA_COMPLIANCE'						=> 'Zgodność z COPPA',
	'COPPA_EXPLAIN'							=> 'Kliknięcie "Wyślij" spowoduje utworzenie twojego konta. Jednakże konto nie może być aktywowane dopóki rodzic lub opiekun nie zatwierdzi Twojej rejestracji. Otrzymasz wiadomość e-mail z kopią wymaganego formularza wraz ze szczegółami dotyczącymi gdzie do odesłać.',
	'CREATE_FOLDER'							=> 'Dodaj katalog...',
	'CURRENT_IMAGE'							=> 'Obecny obraz',
	'CURRENT_PASSWORD'						=> 'Obecne hasło',
	'CURRENT_PASSWORD_EXPLAIN'				=> 'Musisz potwierdzić swoje obecne hasło, jeśli chcesz je zmienić, lub chcesz zmienić adres e-mail bądź nazwę użytkownika.',
	'CUR_PASSWORD_ERROR'					=> 'Wprowadzone przez Ciebie obecne hasło jest niepoprawne. ',
	'CUSTOM_DATEFORMAT'						=> 'Własny...',

	'DEFAULT_ACTION'						=> 'Domyślna akcja',
	'DEFAULT_ACTION_EXPLAIN'				=> 'Ta akcja zostanie wykonana, jeżeli żadna z powyższych nie będzie odpowiednia.',
	'DEFAULT_ADD_SIG'						=> 'Domyślnie dodawaj mój podpis',
	'DEFAULT_BBCODE'						=> 'Domyślnie włącz BBCode',
	'DEFAULT_NOTIFY'						=> 'Domyślnie powiadamiaj mnie o odpowiedziach',
	'DEFAULT_SMILIES'						=> 'Domyślnie włącz uśmieszki',
	'DEFINED_RULES'							=> 'Zdefiniowane reguły',
	'DELETED_TOPIC'							=> 'Temat został usunięty.',
	'DELETE_ATTACHMENT'						=> 'Usuń załącznik',
	'DELETE_ATTACHMENTS'					=> 'Usuń załączniki',
	'DELETE_ATTACHMENTS_CONFIRM'			=> 'Jesteś pewny, że chcesz usunąć te załączniki?',
	'DELETE_ATTACHMENT_CONFIRM'				=> 'Jesteś pewny, że chcesz usunąć ten załącznik?',
	'DELETE_AVATAR'							=> 'Usuń obraz',
	'DELETE_COOKIES_CONFIRM'				=> 'Jesteś pewny, że chcesz usunąć wszystkie cookies utworzone przez to Forum?',
	'DELETE_MARKED_PM'						=> 'Usuń zaznaczone wiadomości',
	'DELETE_MARKED_PM_CONFIRM'				=> 'Jesteś pewny, że chcesz usunąć wszystkie zaznaczone wiadomości?',
	'DELETE_MESSAGE'						=> 'Usuń wiadomość',
	'DELETE_MESSAGES_IN_FOLDER'				=> 'Usuń wszystkie wiadomości z usuwanego katalogu',
	'DELETE_MESSAGE_CONFIRM'				=> 'Jesteś pewny, że chcesz usunąć tę wiadomość?',
	'DELETE_OLDEST_MESSAGES'				=> 'Usuń najstarsze wiadomości',
	'DELETE_RULE'							=> 'Usuń regułę',
	'DELETE_RULE_CONFIRM'					=> 'Jesteś pewny, że chcesz usunąć tę regułę?',
	'DEMOTE_SELECTED'						=> 'Degraduj wybranych',
	'DISABLE_CENSORS'						=> 'Włącz cenzurę słów',
	'DISPLAY_GALLERY'						=> 'Wyświetl galerię',
	'DOMAIN_NO_MX_RECORD_EMAIL'				=> 'Wprowadzona domena e-mail nie jest poprawnym rekordem MX.',
	'DOWNLOADS'								=> 'Pobrań',
	'DRAFTS_DELETED'						=> 'Wszystkie wybrane szkice zostały pomyślnie usunięte.',
	'DRAFTS_EXPLAIN'						=> 'Tutaj możesz przeglądać, edytować i usuwać swoje szkice.',
	'DRAFT_UPDATED'							=> 'Szkic zaktualizowany pomyślnie.',

	'EDIT_DRAFT_EXPLAIN'					=> 'Tutaj możesz edytować swój szkic. Szkice nie zawierają informacji o załącznikach i ankietach.',
	'EMAIL_BANNED_EMAIL'					=> 'Podany przez Ciebie adres e-mail został już zarejestrowany wraz z innym użytkownikiem.',
	'EMAIL_INVALID_EMAIL'					=> 'Wprowadzony przez Ciebie adres e-mail jest nieprawidłowy.',
	'EMAIL_REMIND'							=> 'Musi być to adres e-mail podany w Twoim koncie. Jeżeli nie zmieniałeś go poprzez panel użytkownika będzie to tez sam adres, który podałeś podczas rejestracji.',
	'EMAIL_TAKEN_EMAIL'						=> 'Podany przez Ciebie adres e-mail został już zarejestrowany wraz z innym użytkownikiem.',
	'EMPTY_DRAFT'							=> 'Musisz wprowadzić wiadomość, aby wysłać zmiany',
	'EMPTY_DRAFT_TITLE'						=> 'Musisz wpisać tytuł szkicu.',
	'EXPORT_AS_CSV'							=> 'Eksport jako CSV',
	'EXPORT_AS_CSV_EXCEL'					=> 'Eksport jako CSV (Excel)',
	'EXPORT_AS_MSG'							=> 'Eksport jako MSG',
	'EXPORT_AS_TXT'							=> 'Eksport jako TXT',
	'EXPORT_AS_XML'							=> 'Eksport jako XML',
	'EXPORT_FOLDER'							=> 'Eksportuj ten widok',

	'FIELD_INVALID_CHARS_ALPHA_ONLY'		=> 'Pole "%s" zawiera niedozwolone znaki, dozwolone są tylko znaki alfanumeryczne.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'		=> 'Pole "%s" zawiera niedozwolone znaki, dozwolone są tylko liczby.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'		=> 'Pole "%s" zawiera niedozwolone znaki, dozwolone są tylko znaki alfanumeryczne, spacje oraz - _[].',
	'FIELD_INVALID_DATE'					=> 'Pole "%s" ma nieprawidłową datę.',
	'FIELD_REQUIRED'						=> 'Pole "%s" musi zostać wypełnione.',
	'FIELD_TOO_LARGE'						=> 'Wartość "%1$s" jest zbyt duża, maksymalna dozwolona wartość to %2$d.',
	'FIELD_TOO_LONG'						=> 'Wartość pola "%1$s" jest za długa, maksymalna liczba znaków to %2$d.',
	'FIELD_TOO_SHORT'						=> 'Wartość pola "%1$s" jest za krótka, minimalna liczba znaków to %2$d.',
	'FIELD_TOO_SMALL'						=> 'Wartość "%1$s" jest zbyt mała, minimalna dozwolona wartość to %2$d.',
	'FOES_EXPLAIN'							=> 'Wrogowie są domyślnie ignorowanymi użytkownikami. Posty tych użytkowników nie będą w pełni widoczne. Osobiste wiadomości od wrogów będą nadal dozwolone. Pamiętaj, że nie możesz ignorować moderatorów i administratorów.',
	'FOES_UPDATED'							=> 'Twoja lista wrogów została pomyślnie zaktualizowana.',
	'FOE_MESSAGE'							=> 'Wiadomość od wroga',
	'FOLDER_ADDED'							=> 'Katalog został pomyślnie dodany.',
	'FOLDER_MESSAGE_STATUS'					=> 'Zapisanych wiadomości: %1$d z %2$d',
	'FOLDER_NAME_EMPTY'						=> 'Musisz wprowadzić nazwę dla tego folderu.',
	'FOLDER_NAME_EXIST'						=> 'Katalog <strong>%s</strong> już istnieje.',
	'FOLDER_OPTIONS'						=> 'Opcje katalogu',
	'FOLDER_REMOVED'						=> 'Katalog został pomyślnie usunięty.',
	'FOLDER_RENAMED'						=> 'Nazwa katalogu została pomyślnie zmieniona.',
	'FOLDER_STATUS_MSG'						=> 'Katalog jest zapełniony w %1$d%% (zapisanych wiadomości: %2$d z %3$d)',
	'FORCE_PASSWORD_EXPLAIN'				=> 'Zanim będziesz kontynuować przeglądanie forum musisz zmienić swoje hasło.',
	'FORWARD_PM'							=> 'Przekaż PW',
	'FRIENDS'								=> 'Przyjaciele',
	'FRIENDS_EXPLAIN'						=> 'Lista przyjaciół ułatwi Ci dostęp do osób, z którymi utrzymujesz kontakty. Jeżeli szablon wspiera taką opcję, posty napisane przez przyjaciół zostaną wyróżnione.',
	'FRIENDS_OFFLINE'						=> 'Offline',
	'FRIENDS_ONLINE'						=> 'Online',
	'FRIENDS_UPDATED'						=> 'Twoja lista przyjaciół została pomyślnie zaktualizowana.',
	'FRIEND_MESSAGE'						=> 'Wiadomość od przyjaciela',
	'FULL_FOLDER_OPTION_CHANGED'			=> 'Wybrana akcja, podejmowana w wypadku zapełnienia katalogu, została zapisana pomyślnie.',
	'FWD_DATE'								=> 'Data: %s',
	'FWD_FROM'								=> 'Od: %s',
	'FWD_ORIGINAL_MESSAGE'					=> '-------- Wiadomość Oryginalna --------',
	'FWD_SUBJECT'							=> 'Temat: %s',
	'FWD_TO'								=> 'Do: %s',

	'GLOBAL_ANNOUNCEMENT'					=> 'Globalne ogłoszenie',
	'GROUPS_EXPLAIN'						=> 'Grupy użytkowników umożliwiają administratorom lepsze zarządzanie użytkownikami. Początkowo zostaniesz przypisany do określonej grupy, jest to twoja grupa domyślna. Określa ona jak będziesz postrzegany przez innych użytkowników, na przykład kolor Twojej nazwy użytkownika, awatar, ranga, itd. Zależnie od tego, czy administrator pozwala na zmianę grupy, będziesz mógł zmienić swoją grupę domyślną. Możesz również być przypisany lub dołączać do innych grup. Niektóre grupy mogą dać Ci dodatkowe uprawnienia do oglądania treści lub zwiększyć Twoje możliwości w innych miejscach.',
	'GROUP_DETAILS'							=> 'Detale grupy',
	'GROUP_LEADER'							=> 'Przywództwa',
	'GROUP_MEMBER'							=> 'Członkostwa',
	'GROUP_NONMEMBER'						=> 'Brak członkostw',
	'GROUP_PENDING'							=> 'Oczekujące członkostwa',

	'HIDE_ONLINE'							=> 'Ukryj moją obecność na forum',
	'HIDE_ONLINE_EXPLAIN'					=> 'Zmiana tego ustawienia przyniesie efekt dopiero przy Twojej kolejnej wizycie na forum.',
	'HOLD_NEW_MESSAGES'						=> 'Nie akceptuj nowych wiadomości (dostarczanie nowych wiadomości będzie wstrzymane, dopóki nie będzie dostępna wolna przestrzeń)',
	'HOLD_NEW_MESSAGES_SHORT'				=> 'Nowe wiadomości zostaną wstrzymane',

	'IF_FOLDER_FULL'						=> 'Jeśli katalog jest pełny',
	'IMPORTANT_NEWS'						=> 'Ważne ogłoszenia',
	'INVALID_CHARS_NEW_PASSWORD'			=> 'Hasło nie zawiera wymaganych znaków.',
	'INVALID_CHARS_USERNAME'				=> 'Nazwa użytkownika zawiera niedozwolone znaki.',
	'INVALID_USER_BIRTHDAY'					=> 'Wpisana data urodzenia nie jest prawidłową datą.',
	'ITEMS_REQUIRED'						=> 'Pola oznaczone * są wymagane i muszą zostać wypełnione.',

	'JOIN_SELECTED'							=> 'Dołącz zaznaczone',

	'LANGUAGE'								=> 'Język',
	'LINK_REMOTE_AVATAR'					=> 'Link zewnętrzny',
	'LINK_REMOTE_AVATAR_EXPLAIN'			=> 'Wpisz adres URL, pod którym znajduje się awatar, którego chcesz używać.',
	'LINK_REMOTE_SIZE'						=> 'Rozmiary Awatara',
	'LINK_REMOTE_SIZE_EXPLAIN'				=> 'Wprowadź szerokość i wysokość awatara, albo pozostaw pole puste dla automatycznej weryfikacji.',
	'LOGIN_EXPLAIN_UCP'						=> 'Zaloguj się, aby mieć dostęp do Panelu użytkownika.',
	'LOGIN_REDIRECT'						=> 'Zostałeś zalogowany pomyślnie.',
	'LOGOUT_FAILED'							=> 'Nie zostałeś wylogowany, gdyż żądanie nie zostało dopasowane do Twojej sesji. Proszę skontaktować się z administratorem Forum, jeżeli ten problem będzie się powtarzał.',
	'LOGOUT_REDIRECT'						=> 'Zostałeś wylogowany pomyślnie.',

	'MARKED_MESSAGE'						=> 'Oznaczona wiadomość',
	'MARK_IMPORTANT'						=> 'Oznacz/Odznacz jako ważne',
	'MAX_FOLDER_REACHED'					=> 'Osiągnąłeś maksymalną liczbę katalogów zdefiniowanych przez użytkownika.',
	'MESSAGES_DELETED'						=> 'Wiadomości zostały pomyślnie usunięte',
	'MESSAGE_BY_AUTHOR'						=> 'przez',
	'MESSAGE_COLOURS'						=> 'Kolory wiadomości',
	'MESSAGE_DELETED'						=> 'Wiadomość została usunięta pomyślnie.',
	'MESSAGE_HISTORY'						=> 'Historia wiadomości',
	'MESSAGE_REMOVED_FROM_OUTBOX'			=> 'Ta wiadomość została usunięta przez jej autora, przed dostarczeniem do odbiorcy.',
	'MESSAGE_SENT_ON'						=> 'włączone',
	'MESSAGE_STORED'						=> 'Wiadomość została wysłana pomyślnie.',
	'MESSAGE_TO'							=> 'Do',
	'MOVE_DELETED_MESSAGES_TO'				=> 'Przenieś wiadomości z usuniętego katalogu do',
	'MOVE_DOWN'								=> 'Przenieś w dół',
	'MOVE_MARKED_TO_FOLDER'					=> 'Przenieś zaznaczone do %s',
	'MOVE_PM_ERROR'							=> 'Wystąpił błąd, podczas przenoszenia wiadomości do nowego katalogu. Jedynie %1d z %2d wiadomości została przeniesiona.',
	'MOVE_TO_FOLDER'						=> 'Przenieś do katalogu',
	'MOVE_UP'								=> 'Przenieś w górę',

	'NEW_EMAIL_ERROR'						=> 'Wprowadzone adresy e-mail nie zgadzają  się.',
	'NEW_FOLDER_NAME'						=> 'Nowa nazwa katalogu',
	'NEW_PASSWORD'							=> 'Nowe hasło',
	'NEW_PASSWORD_ERROR'					=> 'Wprowadzone hasła się nie zgadzają.',
	'NOTIFY_METHOD'							=> 'Sposób powiadamiania',
	'NOTIFY_METHOD_BOTH'					=> 'Obydwie',
	'NOTIFY_METHOD_EMAIL'					=> 'Tylko e-mail',
	'NOTIFY_METHOD_EXPLAIN'					=> 'Metoda wysyłania wiadomości poprzez to forum.',
	'NOTIFY_METHOD_IM'						=> 'Tylko Jabber',
	'NOTIFY_ON_PM'							=> 'Poinformuj mnie o nowych prywatnych wiadomościach',
	'NOT_ADDED_FOES_ANONYMOUS'				=> 'Nie możesz dodać anonimowego użytkownika do listy wrogów.',
	'NOT_ADDED_FOES_BOTS'					=> 'Nie możesz dodać botów do listy wrogów.',
	'NOT_ADDED_FOES_FRIENDS'				=> 'Nie możesz dodać użytkowników do swojej listy wrogów, jeżeli są już oni na Twojej liście przyjaciół.',
	'NOT_ADDED_FOES_MOD_ADMIN'				=> 'Nie możesz dodawać administratorów i moderatorów do listy wrogów.',
	'NOT_ADDED_FOES_SELF'					=> 'Nie możesz dodać siebie samego do listy wrogów.',
	'NOT_ADDED_FRIENDS_ANONYMOUS'			=> 'Nie możesz dodać anonimowego użytkownika do swojej listy przyjaciół.',
	'NOT_ADDED_FRIENDS_BOTS'				=> 'Nie możesz dodać botów do listy przyjaciół.',
	'NOT_ADDED_FRIENDS_FOES'				=> 'Nie możesz dodać użytkowników do swojej listy przyjaciół, jeżeli są już oni na Twojej liście wrogów.',
	'NOT_ADDED_FRIENDS_SELF'				=> 'Nie możesz dodać siebie samego do listy przyjaciół.',
	'NOT_AGREE'								=> 'Nie zgadzam się na te warunki',
	'NOT_ENOUGH_SPACE_FOLDER'				=> 'Docelowy katalog "%s" jest pełny. Żądana akcja nie została podjęta.',
	'NOT_MOVED_MESSAGE'						=> 'Masz obecnie 1 wstrzymaną prywatną wiadomość z powodu pełnej skrzynki',
	'NOT_MOVED_MESSAGES'					=> 'Masz obecnie %d wstrzymanych prywatnych wiadomości z powodu pełnej skrzynki',
	'NO_ACTION_MODE'						=> 'Nie zostało wybrane żadne polecenie na wiadomościach.',
	'NO_AUTHOR'								=> 'Brak zdefiniowanego autora dla tej wiadomości.',
	'NO_AUTH_DELETE_MESSAGE'				=> 'Nie jesteś uprawniony do usuwania prywatnych wiadomości.',
	'NO_AUTH_EDIT_MESSAGE'					=> 'Nie jesteś uprawniony do edytowania prywatnych wiadomości.',
	'NO_AUTH_FORWARD_MESSAGE'				=> 'Nie jesteś uprawniony do przekazywania prywatnych wiadomości.',
	'NO_AUTH_GROUP_MESSAGE'					=> 'Nie jesteś uprawniony do wysyłania prywatnych wiadomości grupom.',
	'NO_AUTH_PASSWORD_REMINDER'				=> 'Nie jesteś uprawniony do prośby o nowe hasło.',
	'NO_AUTH_READ_HOLD_MESSAGE'				=> 'Nie jesteś uprawniony do czytania prywatnych wiadomości, które są zawieszone.',
	'NO_AUTH_READ_MESSAGE'					=> 'Nie jesteś uprawniony do czytania prywatnych wiadomości.',
	'NO_AUTH_READ_REMOVED_MESSAGE'			=> 'Nie możesz przeczytać tej wiadomości, ponieważ została ona usunięta przez autora.',
	'NO_AUTH_SEND_MESSAGE'					=> 'Nie jesteś uprawniony do wysyłania prywatnych wiadomości.',
	'NO_AUTH_SIGNATURE'						=> 'Nie masz uprawnień do zdefiniowania podpisu.',
	'NO_AVATAR_CATEGORY'					=> 'Brak',
	'NO_BCC_RECIPIENT'						=> 'Brak',
	'NO_BOOKMARKS'							=> 'Nie masz żadnych zakładek.',
	'NO_BOOKMARKS_SELECTED'					=> 'Nie wybrałeś żadnych zakładek.',
	'NO_EDIT_READ_MESSAGE'					=> 'Prywatna wiadomość nie może zostać zmieniona ponieważ została już przeczytana.',
	'NO_EMAIL_USER'							=> 'Wpisany e-mail/nazwa użytkownika nie może zostać odnaleziona.',
	'NO_FOES'								=> 'Brak wrogów na liście',
	'NO_FRIENDS'							=> 'Brak przyjaciół na liście',
	'NO_FRIENDS_OFFLINE'					=> 'Brak przyjaciół offline',
	'NO_FRIENDS_ONLINE'						=> 'Brak przyjaciół online',
	'NO_GROUP_SELECTED'						=> 'Nie określono grupy.',
	'NO_IMPORTANT_NEWS'						=> 'Aktualnie nie ma żadnych ważnych ogłoszeń.',
	'NO_LEADER'								=> 'Brak przywódcy grupy',
	'NO_MEMBER'								=> 'Nie jesteś członkiem żadnej grupy',
	'NO_MESSAGE'							=> 'Prywatna wiadomość nie może zostać odnaleziona.',
	'NO_NEWER_PM'							=> 'Brak nowszych wiadomości',
	'NO_NEW_FOLDER_NAME'					=> 'Musisz wprowadzić nową nazwę katalogu.',
	'NO_NONMEMBER'							=> 'Brak grup bez członków',
	'NO_OLDER_PM'							=> 'Brak starszych wiadomości',
	'NO_PASSWORD_SUPPLIED'					=> 'Nie możesz zalogować się bez hasła.',
	'NO_PENDING'							=> 'Brak oczekująych członkostw',
	'NO_RECIPIENT'							=> 'Nie zdefiniowano odbiorcy.',
	'NO_RULES_DEFINED'						=> 'Brak zdefiniowanych reguł.',
	'NO_SAVED_DRAFTS'						=> 'Brak zapisanych szkiców.',
	'NO_TO_RECIPIENT'						=> 'Brak',
	'NO_WATCHED_FORUMS'						=> 'Nie obserwujesz żadnego forum.',
	'NO_WATCHED_SELECTED'					=> 'Nie masz wybranych żadnych śledzonych tematów lub forów.',
	'NO_WATCHED_TOPICS'						=> 'Nie obserwujesz żadnego tematu.',

	'PASSWORD'								=> 'Hasło',
	'PASSWORD_ACTIVATED'					=> 'Twoje nowe hasło zostało aktywowane.',
	'PASSWORD_UPDATED'						=> 'Nowe hasło zostało wysłane na twój adres e-mail.',
	'PASS_TYPE_ALPHA_EXPLAIN'				=> 'Hasło musi mieć od %1$d do %2$d znaków, zawierać litery różnej wielkości oraz cyfry.',
	'PASS_TYPE_ANY_EXPLAIN'					=> 'Hasło musi mieć od %1$d do %2$d znaków.',
	'PASS_TYPE_CASE_EXPLAIN'				=> 'Hasło musi mieć od %1$d do %2$d znaków i zawierać litery różnej wielkości.',
	'PASS_TYPE_SYMBOL_EXPLAIN'				=> 'Hasło musi mieć od %1$d do %2$d znaków i zawierać litery różnej wielkości, cyfry oraz symbole.',
	'PERMISSIONS_RESTORED'					=> 'Oryginalne zezwolenia zostały przywrócone.',
	'PERMISSIONS_TRANSFERRED'				=> 'Pomyślnie przeniesiono uprawnienia z <strong>%s</strong>, teraz możesz przeglądać forum z zezwoleniami użytkownika. Pamiętaj, że uprawnienia administratora nie zostały przeniesione. W każdej chwili możesz powrócić do swoich ustawień uprawnień.',
	'PM_ACTION'								=> array(
		'DELETE_MESSAGE'					=> 'Usuń wiadomość',
		'MARK_AS_IMPORTANT'					=> 'Zaznacz wiadomość',
		'MARK_AS_READ'						=> 'Oznacz jako przeczytana',
		'PLACE_INTO_FOLDER'					=> 'Umieść w katalogu',
	),

	'PM_CHECK'								=> array(
		'MESSAGE'							=> 'Wiadomość',
		'SENDER'							=> 'Nadawca',
		'STATUS'							=> 'Status wiadomości',
		'SUBJECT'							=> 'Temat',
		'TO'								=> 'Wysłane do',
	),

	'PM_DISABLED'							=> 'Przesyłanie prywatnych wiadomości zostało wyłączone na tym Forum.',
	'PM_FROM'								=> 'Od',
	'PM_FROM_REMOVED_AUTHOR'				=> 'Ta wiadomość została wysłana przez użytkownika, którego konto już nie istnieje.',
	'PM_ICON'								=> 'Ikona PW',
	'PM_INBOX'								=> 'Odebrane',
	'PM_NO_USERS'							=> 'Wybrani użytkownicy nie istnieją.',
	'PM_OUTBOX'								=> 'Do wysłania',
	'PM_RULE'								=> array(
		'ANSWERED'							=> 'odpowiedziana',
		'BEGINS_WITH'						=> 'zaczyna się od',
		'ENDS_WITH'							=> 'kończy się na',
		'FORWARDED'							=> 'przekazana',
		'IS'								=> 'jest',
		'IS_FOE'							=> 'jest wrogiem',
		'IS_FRIEND'							=> 'jest przyjacielem',
		'IS_GROUP'							=> 'jest w grupie',
		'IS_LIKE'							=> 'jest podobny do',
		'IS_NOT'							=> 'nie jest',
		'IS_NOT_LIKE'						=> 'nie jest podobny do',
		'IS_USER'							=> 'jest użytkownikiem',
		'TO_GROUP'							=> 'do mojej domyślnie grupy',
		'TO_ME'								=> 'do mnie',
	),

	'PM_SENTBOX'							=> 'Wysłane',
	'PM_SUBJECT'							=> 'Temat wiadomości',
	'PM_TO'									=> 'Wyślij do',
	'PM_USERS_REMOVED_NO_PM'				=> 'Niektórzy użytkownicy nie mogli zostać dodani, gdyż mają wyłączone odbieranie prywatnych wiadomości.',
	'POPUP_ON_PM'							=> 'Wyświetl okienko pop up dla nowych prywatnych wiadomości',
	'POST_EDIT_PM'							=> 'Edytuj wiadomość',
	'POST_FORWARD_PM'						=> 'Przekaż wiadomość',
	'POST_NEW_PM'							=> 'Napisz wiadomość (PW)',
	'POST_PM_LOCKED'						=> 'Wysyłanie prywatnych wiadomości jest zablokowane',
	'POST_PM_POST'							=> 'Cytuj post',
	'POST_QUOTE_PM'							=> 'Cytuj wiadomość (PW)',
	'POST_REPLY_PM'							=> 'Odpowiedz na wiadomość (PW)',
	'PREFERENCES_UPDATED'					=> 'Twoje ustawienia zostały zaktualizowane pomyślnie.',
	'PRINT_PM'								=> 'Widok do druku',
	'PRIVACY_POLICY'						=> 'Polityka ta wyjaśnia w szczegółach jak "%1$s" ze swoimi dołączonymi podmiotami (dalej jako "my", "nasze", "nas", "%1$s", "%2$s") i phpBB (dalej jako "oni", "one", "ich", "skrypt phpBB", "www.phpbb.com", "Grupa phpBB", "Ekipy phpBB") używa jakichkolwiek informacji zbieranych podczas wszelkich Twoich sesji (dalej jako "informacje o Tobie").<br /><br />Informacje o Tobie są zbierane dwoma sposobami. Po pierwsze, podczas przeglądania "%1$s" skrypt phpBB będzie tworzył pewną liczbę cookies, które są małymi plikami tekstowymi pobieranymi przez przeglądarkę internetową na Twój komputer jako pliki tymczasowe. Pierwsze dwa cookies zawierają identyfikator użytkownika (dalej jako "user-id") i anonimowy identyfikator sesji (dalej jako "session-id"), automatycznie wyznaczony dla Ciebie przez skrypt phpBB. Trzeci cookie będzie tworzone za każdym razem, gdy czytasz tematy na "%1$s". Jest ono używane do oznaczania tematów, które zostały przeczytane, co zwiększa Twoją wygodę korzystania z forum.<br /><br />Możemy także tworzyć cookies niezwiązane ze skryptem phpBB podczas przeglądania "%1$s", jednakże te wykraczają poza ramy niniejszego dokumentu, dotyczącego wyłącznie stron generowanych przez oprogramowanie phpBB. Informacje o Tobie są także gromadzone na podstawie danych, które do nas wysyłasz. Zalicza się do tego między innymi: pisanie postów jako gość (dalej jako "posty gościa"), rejestrację na "%1$s" (dalej jako "Twoje konto") oraz posty wysłane przez Ciebie po zarejestrowaniu i zalogowaniu się (dalej jako "Twoje posty").<br /><br />Twoje konto musi zawierać co najmniej: unikalną identyfikującą nazwę (dalej jako "nazwa użytkownika"), prywatne hasło, używane do logowania na Twoje konto (dalej jako "hasło"), oraz prywatny, poprawny adres e-mail (dalej jako "e-mail"). Informacje związane z Twoim kontem na "%1$s" są chronione przez ustawę o ochronie danych osobowych odpowiednią dla kraju, w którym znajduje się serwer z forum. Jedynie w gestii "%1$s" leży określenie, jakie informacje - oprócz nazwy użytkownika, hasła, i adresu e-mail - są wymagane podczas procesu rejestracji. W każdym z przypadków masz możliwość wyboru, które informacje podane w Twoim koncie będą publicznie widoczne. Co więcej, z poziomu Twojego konta masz możliwość włączania i wyłączania otrzymywania e-maili generowanych automatycznie przez phpBB.<br /><br />Dla bezpieczeństwa Twoje hasło jest zaszyfrowane (bez możliwości rozszyfrowania). Mimo to zaleca się, aby nie używać tego samego hasła na kilku stronach. Twoje hasło jest drogą dostępu do "%1$s", więc chroń je i pamiętaj, że pod żadnym pozorem, żaden przedstawiciel "%1$s", phpBB lub jakiejkolwiek innej organizacji, nie będzie prosić Cię o jego udostępnienie. Jeżeli zapomnisz swojego hasła, możesz skorzystać z opcji "Zapomniałem hasła". Jeżeli skorzystasz z tej opcji, zostaniesz poproszony o podanie nazwy użytkownika oraz adresu e-mail. Następnie skrypt phpBB wygeneruje dla Ciebie nowe hasło.',
	'PROFILE_INFO_NOTICE'					=> 'Proszę mieć na uwadze, że te informacje będą dostępne dla innych użytkowników. Należy być ostrożnym podczas podawania informacji personalnych. Wszystkie pola oznaczone * są wymagane.',
	'PROFILE_UPDATED'						=> 'Twój profil został zaktualizowany.',

	'RECIPIENT'								=> 'Odbiorca',
	'RECIPIENTS'							=> 'Odbiorcy',
	'REGISTRATION'							=> 'Rejestracja',
	'RELEASE_MESSAGES'						=> '%sWypuść wszystkie wstrzymane wiadomości%s… zostaną posortowane do właściwych katalogów, jeśli dostępna jest wystarczająca ilość miejsca.',
	'REMOVE_ADDRESS'						=> 'Usuń adres',
	'REMOVE_BOOKMARK_MARKED'				=> 'Usuń wybrane zakładki',
	'REMOVE_FOLDER'							=> 'Usuń katalog',
	'REMOVE_FOLDER_CONFIRM'					=> 'Czy na pewno chcesz usunąć ten katalog?',
	'REMOVE_SELECTED_BOOKMARKS'				=> 'Usuń zaznaczone zakładki',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'		=> 'Czy na pewno chcesz usunąć wszystkie zaznaczone zakładki?',
	'RENAME'								=> 'Zmień nazwę',
	'RENAME_FOLDER'							=> 'Zmień nazwę katalogu',
	'REPLIED_MESSAGE'						=> 'Odpowiedź do wiadomośći',
	'REPLY_TO_ALL'							=> 'Odpowiedz do nadawcy i wszystkich odbiorców.',
	'REPORT_PM'								=> 'Zgłoś prywatną wiadomość',
	'RESIGN_SELECTED'						=> 'Wycofaj zaznaczone',
	'RETURN_FOLDER'							=> '%1$sWróć do poprzedniego katalogu%2$s',
	'RETURN_UCP'							=> '%sPowrót do Panelu Kontrolnego Użytkownika%s',
	'RULE_ADDED'							=> 'Reguła dodana pomyślnie',
	'RULE_ALREADY_DEFINED'					=> 'Ta reguła została wcześniej zdefiniowana.',
	'RULE_DELETED'							=> 'Reguła została pomyślnie usunięta.',
	'RULE_NOT_DEFINED'						=> 'Reguła nie została poprawnie określona.',
	'RULE_REMOVED_MESSAGE'					=> 'Jedna prywatna wiadomość została usunięta przez filtr.',
	'RULE_REMOVED_MESSAGES'					=> '%d prywatnych wiadomości zostało usuniętych przez filtr.',

	'SAME_PASSWORD_ERROR'					=> 'Wprowadzone przez Ciebie nowe hasło jest takie samo jak aktualne.',
	'SEARCH_YOUR_POSTS'						=> 'Zobacz swoje posty',
	'SEND_PASSWORD'							=> 'Wyślij hasło',
	'SENT_AT'								=> 'Wysłane',
	'SHOW_EMAIL'							=> 'Użytkownicy mogą się ze mną skontaktować przez e-mail',
	'SIGNATURE_EXPLAIN'						=> 'To jest blok tekstu, który może być dodany do Twoich postów. Limit wynosi %d znaków',
	'SIGNATURE_PREVIEW'						=> 'Twoja sygnatura będzie wyglądać tak',
	'SIGNATURE_TOO_LONG'					=> 'Twój podpis jest zbyt długi.',
	'SORT'									=> 'Sortuj',
	'SORT_COMMENT'							=> 'Komentarz pliku',
	'SORT_DOWNLOADS'						=> 'Pobrań',
	'SORT_EXTENSION'						=> 'Rozszerzenie',
	'SORT_FILENAME'							=> 'Nazwa pliku',
	'SORT_POST_TIME'						=> 'Data postu',
	'SORT_SIZE'								=> 'Rozmiar pliku',

	'TERMS_OF_USE_CONTENT'					=> 'Używając "%1$s" (dalej jako "my", "nasze", "nas", "%1$s", "%2$s"), zgadzasz się na poniższe warunki. Jeśli na nie się nie zgadzasz, proszę, nie wchodź na "%1$s" ani z niego nie korzystaj. Możemy zmienić te warunki i dołożymy wszelkich starań, by Cię o tym poinformować, lecz w Twoim obowiązku leży regularnie sprawdzanie tych warunki podczas dalszego używania "%1$s".<br /><br />Nasze forum jest oparte na skrypcie phpBB (dalej jako "oni", "ich", "skrypt phpBB", "www.phpbb.com", "Grupa phpBB"), które jest wydawane pod "<a href="http://www.gnu.org/licenses/gpl.html">Publiczną Licencją</a>" (dalej jako "GPL") i może zostać pobrane z <a href="http://www.phpbb.com/">www.phpbb.com</a>. Skrypt phpBB wspomaga tylko dyskusje przez Internet, grupa phpBB nie odpowiada za to co możemy, a czego nie możemy robić. W celu uzyskania więcej informacji o phpBB odwiedź <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br /><br />Zgadzasz się nie publikować obraźliwych, obscenicznych, wulgarnych lub obrażających mniejszości rasowe, religijne i seksualne materiałów, jak również innych materiałów, które mogą pogwałcać prawo w Twoim kraju, kraju, gdzie "%1$s" jest hostowane lub Prawo Międzynarodowe. W przypadku postępowania niezgodnego z powyższymi zasadami, zostaniesz natychmiastowo i bezapelacyjnie zbanowany, a Twój Dostawca Internetu zostanie przez nas powiadomiony o takim postępowaniu. Adres IP każdego postu jest zapisywany w celu przestrzegania zasad i/lub udowodnienia ich łamania. Zgadzasz się, że administracja "%1$s" ma prawo do usuwania, edycji, przesuwania i zamykania każdego Twojego tematu oraz Twoich postów. Jako użytkownik zgadzasz się na to, by Twoje informacje były zachowane w bazie danych. Informacje te nie będą podawane bez twojej zgody żadnym osobom ani podmiotom trzecim, jednakże ani "%1$s", ani phpBB nie będą obarczeni odpowiedzialnością za włamania hakerskie prowadzące do pozyskania tych danych.',
	'TIMEZONE'								=> 'Strefa czasowa',
	'TO'									=> 'Do',
	'TOO_MANY_RECIPIENTS'					=> 'Próbujesz wysłać prywatną wiadomość do zbyt wielu odbiorców.',
	'TOO_MANY_REGISTERS'					=> 'Przekroczyłeś limit dozwolonych prób rejestracji dla tej sesji. Spróbuj ponownie później.',

	'UCP'									=> 'Panel Kontrolny Użytkownika',
	'UCP_ACTIVATE'							=> 'Aktywuj konto',
	'UCP_ADMIN_ACTIVATE'					=> 'Musisz podać poprawny adres e-mail, ponieważ na podany przez Ciebie adres zostanie wysłany e-mail gdy administrator aktywuje Twoje konto.',
	'UCP_AIM'								=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'						=> 'Załącznik(i)',
	'UCP_COPPA_BEFORE'						=> 'Przed %s',
	'UCP_COPPA_ON_AFTER'					=> 'W albo po %s',
	'UCP_EMAIL_ACTIVATE'					=> 'Musisz wprowadzić poprawny adres e-mail, ponieważ na podany adres otrzymasz wiadomość zawierającą link aktywujący konto.',
	'UCP_ICQ'								=> 'Numer ICQ',
	'UCP_JABBER'							=> 'Adres Jabber',
	'UCP_MAIN'								=> 'Indeks',
	'UCP_MAIN_ATTACHMENTS'					=> 'Zarządzaj załącznikami',
	'UCP_MAIN_BOOKMARKS'					=> 'Zakładki',
	'UCP_MAIN_DRAFTS'						=> 'Szkice',
	'UCP_MAIN_FRONT'						=> 'Strona główna',
	'UCP_MAIN_SUBSCRIBED'					=> 'Śledzone tematy i fora',
	'UCP_MSNM'								=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'					=> 'Nie załączyłeś żadnych plików',
	'UCP_PM'								=> 'Prywatne wiadomości',
	'UCP_PM_COMPOSE'						=> 'Napisz wiadomość',
	'UCP_PM_DRAFTS'							=> 'Zarządzaj szkicami PW',
	'UCP_PM_OPTIONS'						=> 'Zasady, katalogi i ustawienia',
	'UCP_PM_POPUP'							=> 'Prywatne wiadomości',
	'UCP_PM_POPUP_TITLE'					=> 'Okienko prywatnej wiadomości',
	'UCP_PM_UNREAD'							=> 'Nieprzeczytane wiadomości',
	'UCP_PM_VIEW'							=> 'Zobacz wiadomości',
	'UCP_PREFS'								=> 'Preferencje forum',
	'UCP_PREFS_PERSONAL'					=> 'Edytuj globalne ustawienia',
	'UCP_PREFS_POST'						=> 'Edytuj domyślne ustawienia pisania',
	'UCP_PREFS_VIEW'						=> 'Edytuj opcje wyświetlania',
	'UCP_PROFILE'							=> 'Profil',
	'UCP_PROFILE_AVATAR'					=> 'Edytuj awatar',
	'UCP_PROFILE_PROFILE_INFO'				=> 'Edytuj profil',
	'UCP_PROFILE_REG_DETAILS'				=> 'Edytuj właściwości konta',
	'UCP_PROFILE_SIGNATURE'					=> 'Edytuj podpis',
	'UCP_REGISTER_DISABLE'					=> 'Tworzenie nowych kont jest obecnie nie możliwe.',
	'UCP_REMIND'							=> 'Wyślij hasło',
	'UCP_RESEND'							=> 'Wyślij e-mail aktywacyjny',
	'UCP_USERGROUPS'						=> 'Grupy',
	'UCP_USERGROUPS_MANAGE'					=> 'Zarządzaj grupami',
	'UCP_USERGROUPS_MEMBER'					=> 'Edytuj członkostwa',
	'UCP_WELCOME'							=> 'Witamy w Panelu Kontrolnym. Możesz tutaj zobaczyć oraz zaktualizować swój profil, ustawienia, śledzone fora i tematy. Możesz także wysyłać wiadomości do innych użytkowników (jeśli masz pozwolenie). Przed kontynuacją upewnij się, że przeczytałeś ogłoszenie.',
	'UCP_YIM'								=> 'Komunikator Yahoo',
	'UCP_ZEBRA'								=> 'Przyjaciele i wrogowie',
	'UCP_ZEBRA_FOES'						=> 'Zarządzaj wrogami',
	'UCP_ZEBRA_FRIENDS'						=> 'Zarządzaj przyjaciółmi',
	'UNDISCLOSED_RECIPIENT'					=> 'Nieznany odbiorca',
	'UNKNOWN_FOLDER'						=> 'Nieznany katalog',
	'UNWATCH_MARKED'						=> 'Przestań śledzić zaznaczone',
	'UPLOAD_AVATAR_FILE'					=> 'Wgraj ze swojego komputera',
	'UPLOAD_AVATAR_URL'						=> 'Wgraj z URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'				=> 'Wprowadź adres URL zawierający ścieżkę do obrazka. Obrazek zostanie skopiowany na tą stronę.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'			=> 'Nazwa użytkownika musi mieć długość od %1$d do %2$d znaków i może zawierać jedynie znaki alfanumeryczne',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'		=> 'Nazwa użytkownika musi mieć długość od %1$d do %2$d znaków i zawierać znaki alfanumeryczne, spację lub znaki -+_[]',
	'USERNAME_ASCII_EXPLAIN'				=> 'Nazwa użytkownika musi mieć długość od %1$d do %2$d znaków i może zawierać jedynie znaki ASCII, nie może zawierać również znaków specjalnych',
	'USERNAME_CHARS_ANY_EXPLAIN'			=> 'Długość musi być od %1$d do %2$d znaków',
	'USERNAME_DISALLOWED_USERNAME'			=> 'Wprowadzona nazwa użytkownika jest zabroniona lub zawiera zabronione słowa. Proszę wybrać inną nazwę.',
	'USERNAME_LETTER_NUM_EXPLAIN'			=> 'Nazwa użytkownika musi mieć długość od %1$d do %2$d znaków i zawierać jedynie litery i cyfry',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'Nazwa użytkownika musi zawierać od %1$d od %2$d znaków i może składać sie z liter, liczb, spacji oraz znaków -+_[]',
	'USERNAME_TAKEN_USERNAME'				=> 'Wprowadzona nazwa użytkownika jest już zajęta. Proszę wybrać inną.',
	'USER_NOT_FOUND_OR_INACTIVE'			=> 'Podany przez Ciebie użytkownik nie istnieje lub jego konto jest nieaktywne.',

	'VC_REFRESH'							=> 'Odśwież kod potwierdzający',
	'VC_REFRESH_EXPLAIN'					=> 'Jeżeli nie możesz odczytać tego kodu to klinij na przycisk aby zobaczyć inny.',
	'VIEW_AVATARS'							=> 'Wyświetl awatary',
	'VIEW_EDIT'								=> 'Zobacz/Edytuj',
	'VIEW_FLASH'							=> 'Pokazuj animacje Flash',
	'VIEW_IMAGES'							=> 'Wyświetlaj obrazki w postach',
	'VIEW_NEXT_HISTORY'						=> 'Następna PW w historii',
	'VIEW_NEXT_PM'							=> 'Następna PW',
	'VIEW_PM'								=> 'Zobacz wiadomość',
	'VIEW_PM_INFO'							=> 'Szczegóły wiadomości',
	'VIEW_PM_MESSAGE'						=> '1 wiadomość',
	'VIEW_PM_MESSAGES'						=> '%d wiadomości',
	'VIEW_POSTS_DAYS'						=> 'Wyświetl posty z poprzednich dni',
	'VIEW_POSTS_DIR'						=> 'Kierunek wyświetlania postów',
	'VIEW_POSTS_KEY'						=> 'Posortuj posty według',
	'VIEW_PREVIOUS_HISTORY'					=> 'Poprzednia PW w historii',
	'VIEW_PREVIOUS_PM'						=> 'Poprzednia PW',
	'VIEW_SIGS'								=> 'Wyświetl sygnatury',
	'VIEW_SMILIES'							=> 'Wyświetl uśmieszki jako obrazki',
	'VIEW_TOPICS_DAYS'						=> 'Wyświetl tematy z poprzednich dni',
	'VIEW_TOPICS_DIR'						=> 'Kierunek wyświetlania tematów',
	'VIEW_TOPICS_KEY'						=> 'Posortuj tematy według',

	'WATCHED_EXPLAIN'						=> 'Poniżej znajduje się lista forów i tematów, które subskrybujesz. Będziesz powiadamiany o nowych postach w każdym z nich. Aby wypisać się z subskrypcji, zaznacz forum lub temat, i kliknij przycisk <em>Przestań śledzić</em>',
	'WATCHED_FORUMS'						=> 'Obserwowane fora',
	'WATCHED_TOPICS'						=> 'Obserwowane tematy',
	'WRONG_ACTIVATION'						=> 'Podany przez Ciebie klucz aktywacyjny nie pasuje do żadnego z bazy danych.',

	'YOUR_DETAILS'							=> 'Twoja aktywność',
	'YOUR_FOES'								=> 'Twoi wrogowie',
	'YOUR_FOES_EXPLAIN'						=> 'Aby usunąć nazwy użytkowników, wybierz je i kliknij "Wyślij"',
	'YOUR_FRIENDS'							=> 'Twoi przyjaciele',
	'YOUR_FRIENDS_EXPLAIN'					=> 'Aby usunąć nazwy użytkowników, zaznacz je i kliknij "Wyślij"',
	'YOUR_WARNINGS'							=> 'Twój poziom ostrzeżeń',
));

?>