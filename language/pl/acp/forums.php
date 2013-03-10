<?php
/** 
* /acp/forums.php [Polish]
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
	'AUTO_PRUNE_DAYS'					=> 'Wiek automatycznie czyszczonego postu',
	'AUTO_PRUNE_DAYS_EXPLAIN'			=> 'Liczba dni od daty napisania ostatniego postu, po których temat zostanie usunięty.',
	'AUTO_PRUNE_FREQ'					=> 'Częstotliwość autoczyszczenia',
	'AUTO_PRUNE_FREQ_EXPLAIN'			=> 'Czas w dniach pomiędzy czyszczeniami.',
	'AUTO_PRUNE_VIEWED'					=> 'Czas automatycznego usunięcia posta od ostatniego oglądania',
	'AUTO_PRUNE_VIEWED_EXPLAIN'			=> 'Ilość dni po jakiej oglądany temat zostanie usunięty.',

	'CONTINUE'							=> 'Kontynuuj',
	'COPY_PERMISSIONS'					=> 'Kopiuj zezwolenia od',
	'COPY_PERMISSIONS_ADD_EXPLAIN'		=> 'Gdy utworzysz forum to będzie ono miało takie same zezwolenia jak to, które jest tutaj wybrane. Jeżeli żadne forum nie jest wybrane to nowe forum nie będzie widoczne dopóki nie zostaną mu nadane zezwolenia.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'		=> 'Jeżeli wybierzesz kopiowanie zezwoleń, to forum będzie miało takie same zezwolenia jak te tutaj zaznaczone. Ta opcja nadpisze wszystkie dotychczasowe zezwolenia. Jeżeli żadne forum nie jest zaznaczone to obecne zezwolenia pozostaną niezmienione.',
	'COPY_PERMISSIONS_EXPLAIN'			=> 'Skopiuj zezwolenia od istniejącego forum, aby uniknąć ich ponownego konfigurowania.',
	'COPY_TO_ACL'						=> 'Możesz także %sustalić nowe zezwolenia%s dla tego forum.',
	'CREATE_FORUM'						=> 'Utwórz nowe forum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Usuń treść lub przenieś do forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Usuń subforum lub przenieś do forum',
	'DEFAULT_STYLE'						=> 'Default style',
	'DELETE_ALL_POSTS'					=> 'Usuń posty',
	'DELETE_SUBFORUMS'					=> 'Usuń subfora oraz posty',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Włącz aktywne tematy',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Jeżeli wybierzesz tak to aktywne  tematy w wybranych subforach będą wyświetlane pod tą kategorią.',

	'EDIT_FORUM'						=> 'Edytuj forum',
	'ENABLE_INDEXING'					=> 'Włącz indeksowanie wyszukiwarki',
	'ENABLE_INDEXING_EXPLAIN'			=> 'Jeżeli jest ustawione na "tak", posty na tym forum będą indeksowane do wyszukiwania.',
	'ENABLE_POST_REVIEW'				=> 'Zezwól na podgląd postów.',
	'ENABLE_POST_REVIEW_EXPLAIN'		=> 'Jeśli jest ustawione na tak, użytkownicy mogą ponownie przeglądać swoje wiadomości, jeżeli w międzyczasie pojawiły się nowe posty w temacie. Opcja ta powinna być zablokowana na forach czatowych.',
	'ENABLE_QUICK_REPLY'				=> 'Włącz szybką odpowiedź',
	'ENABLE_QUICK_REPLY_EXPLAIN'		=> 'Jeżeli włączone, to użytkownicy będą mogli używać szybkiej odpowiedzi na tym forum. Jeżeli ogólna opcja dla szybkiej odpowiedzi jest wyłączona lub nie ma możliwości pisania na tym forum to boks szybkiej odpowiedzi nie będzie pokazywany, nawet jeżeli ustawisz to tutaj jako włączone.',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Włącza szybką odpowiedź w tym forum. Ustawienia te nie będą używane, jeśli funkcja szybkiej odpowiedzi nie jest włączona w ustawieniach. Będzie wyświetlana tylko dla użytkowników z odpowiednimi uprawnieniami.',
	'ENABLE_RECENT'						=> 'Pokaż aktywne tematy',
	'ENABLE_RECENT_EXPLAIN'				=> 'Jeśli ustawione na "tak", tematy utworzone na tym forum zostaną pokazane w liście aktywnych tematów.',
	'ENABLE_TOPIC_ICONS'				=> 'Włącz ikony tematów',

	'FORUM_ADMIN'						=> 'Administracja forum',
	'FORUM_ADMIN_EXPLAIN'				=> 'W phpBB3 nie ma kategorii, wszystko bazuje na forum. Każde forum może mieć nielimitowaną ilość podforów i tutaj możesz zdecydować, czy każde może być dodane, czy nie (np. czy ma zostać zakwalifikowane jako stara kategoria). Tutaj możesz dodawać, zmieniać, kasować, blokować i odblokowywać poszczególne fora, jak również ustawić dodatkowe opcje. Jeśli posty i tematy wydostały się z forum, możesz je także zsynchronizować. <strong>Musisz skopiować lub ustawić odpowiednie zezwolenia dla nowych forów, aby były one wyświetlane.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Włącz automatyczne czyszczenie',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Czyszczenie forum z tematów, ustaw częstotliwość/wiek postów poniżej.',
	'FORUM_CREATED'						=> 'Forum zostało utworzone pomyślnie.',
	'FORUM_DATA_NEGATIVE'				=> 'Parametry czyszczenia nie mogą być ujemne.',
	'FORUM_DELETE'						=> 'Usuń forum',
	'FORUM_DELETED'						=> 'Forum zostało usunięte.',
	'FORUM_DELETE_EXPLAIN'				=> 'Formularz poniżej pozwoli ci usunąć forum. Jeżeli forum nie jest puste, będziesz mógł zdecydować, gdzie umieścić wszystkie tematy (lub fora) w nim zawarte.',
	'FORUM_DESC'						=> 'Opis',
	'FORUM_DESC_EXPLAIN'				=> 'Wszelkie wprowadzone znaczniki HTML będą wyświetlane tak, jak tutaj.',
	'FORUM_DESC_TOO_LONG'				=> 'Opis forum jest za długi. Powinien wynosić mniej niż 4000 znaków.',
	'FORUM_EDIT_EXPLAIN'				=> 'Poniższy formularz pozwoli Ci dopasować to forum do własnych wymagań. Zwróć uwagę, że kontrolki moderacji i licznika postów są ustawione przez zezwolenia for dla każdego użytkownika lub grupy.',
	'FORUM_IMAGE'						=> 'Obrazek forum',
	'FORUM_IMAGE_EXPLAIN'				=> 'Lokalizacja względna do głównego katalogu phpBB, zawierająca dodatkowy obrazek do złączenia z forum.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Wybrany obrazek nie istnieje',
	'FORUM_LINK_EXPLAIN'				=> 'Pełny adres URL strony (wraz z protokołem, np.: <samp>http://</samp>) na którą zostanie przeniesiony użytkownik klikając na odnośnik forum, np.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Śledź przekierowania linku',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Zlicza ilość kliknięć odnośnika',
	'FORUM_NAME'						=> 'Nazwa forum',
	'FORUM_NAME_EMPTY'					=> 'Musisz wpisać nazwę dla tego forum.',
	'FORUM_PARENT'						=> 'Forum nadrzędne',
	'FORUM_PASSWORD'					=> 'Hasło forum',
	'FORUM_PASSWORD_CONFIRM'			=> 'Potwierdź hasło forum',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Musi być ustawione tylko jeśli hasło dla forum zostało wprowadzone. ',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Określa hasło dla tego forum, jednak w pierwszej kolejności używaj systemu zezwoleń.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Wpisane przez Ciebie hasła nie pasują do siebie.',
	'FORUM_PASSWORD_OLD'				=> 'Hasło forum używa starego szyfrowania i powinno być zmienione.',
	'FORUM_PASSWORD_UNSET'				=> 'Usuń hasło forum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Kliknij tutaj jeśli chcesz usunąć hasło forum.',
	'FORUM_PRUNE_SETTINGS'				=> 'Ustawienia czyszczenia forum',
	'FORUM_RESYNCED'					=> 'Forum "%s" zostało pomyślnie zsynchronizowane',
	'FORUM_RULES_EXPLAIN'				=> 'Regulamin tego forum jest wyświetlany na wszystkich jego podstronach.',
	'FORUM_RULES_LINK'					=> 'Link do regulaminu forum',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Możesz tutaj wprowadzić adres strony/postu zawierającej reguły twojego forum. To ustawienie nadpisze zdefiniowane przez Ciebie tekst z regułami forum.',
	'FORUM_RULES_PREVIEW'				=> 'Podgląd regulaminu forum',
	'FORUM_RULES_TOO_LONG'				=> 'Regulamin forum musi być krótszy niż 4000 znaków.',
	'FORUM_SETTINGS'					=> 'Ustawienia forum',
	'FORUM_STATUS'						=> 'Status forum',
	'FORUM_STYLE'						=> 'Styl forum',
	'FORUM_TOPICS_PAGE'					=> 'Tematów na stronę',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Wartość różna od zera spowoduje nadpisanie domyślnego ustawienia liczby tematów na stronę.',
	'FORUM_TYPE'						=> 'Typ forum',
	'FORUM_UPDATED'						=> 'Ustawienia forum zostały pomyślnie zaktualizowane.',
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Chcesz zmienić forum posiadające wewnątrz subfora w link. Musisz jednak wcześniej przenieść wszystkie subfora z tego forum, ponieważ po zmianie forum w link nie miałbyś dostępu do jego subfor.',

	'GENERAL_FORUM_SETTINGS'			=> 'Główne ustawienia forum',

	'LINK'								=> 'Link',
	'LIST_INDEX'						=> 'Wyświetl subforum pod opisem forum nadrzędnego',
	'LIST_INDEX_EXPLAIN'				=> 'To forum będzie wyświetlane pod opisem forum, które jest względem niego nadrzędne.',
	'LIST_SUBFORUMS'					=> 'Pokaż subfora w legendzie',
	'LIST_SUBFORUMS_EXPLAIN'			=> 'Wyświetla subfora tego forum na stronie głównej i innych miejsach jako link w legendze, jeśli jego opcja â€śWyświetl subforum pod opisem forum nadrzędnegoâ€ś jest włączona.',
	'LOCKED'							=> 'Zamknięte',

	'MOVE_POSTS_NO_POSTABLE_FORUM'		=> 'Na forum, do którego chcesz przenieść posty, nie ma możliwości wysyłania wiadomości. Wybierz forum posiadające taką możliwość.',
	'MOVE_POSTS_TO'						=> 'Przenieś posty do',
	'MOVE_SUBFORUMS_TO'					=> 'Przenieś subfora do',

	'NO_DESTINATION_FORUM'				=> 'Proszę wybrać forum docelowe.',
	'NO_FORUM_ACTION'					=> 'Nie zdefiniowano co ma się stać z zawartością forum.',
	'NO_PARENT'							=> 'Brak nadrzędnego',
	'NO_PERMISSIONS'					=> 'Nie kopiuj zezwoleń',
	'NO_PERMISSION_FORUM_ADD'			=> 'Nie masz wymaganych uprawnień, by dodawać fora.',
	'NO_PERMISSION_FORUM_DELETE'		=> 'Nie posiadasz wystarczających uprawnień aby usunąć to forum.',

	'PARENT_IS_LINK_FORUM'				=> 'Forum nadrzędne, które wybrałeś jest linkiem przekierowującym na inną stronę i nie może być nadrzędnym dla innych forów. Proszę wybrać kategorię lub forum jako nadrzędne.',
	'PARENT_NOT_EXIST'					=> 'Nadrzędny nie istnieje.',
	'PRUNE_ANNOUNCEMENTS'				=> 'Czyszczenie ogłoszeń',
	'PRUNE_OLD_POLLS'					=> 'Czyszczenie starych ankiet',
	'PRUNE_OLD_POLLS_EXPLAIN'			=> 'Usuń tematy z ankietami, w których nie głosowano przez określony czas.',
	'PRUNE_STICKY'						=> 'Czyszczenie przyklejonych',

	'REDIRECT_ACL'						=> 'Teraz możesz przejść do %sustawień zezwoleń%s tego forum.',

	'SYNC_IN_PROGRESS'					=> 'Synchronizacja forum',
	'SYNC_IN_PROGRESS_EXPLAIN'			=> 'Aktualnie trwa synchronizacja tematów z przedziału %1$d/%2$d.',

	'TYPE_CAT'							=> 'Kategoria',
	'TYPE_FORUM'						=> 'Forum',
	'TYPE_LINK'							=> 'Link',

	'UNLOCKED'							=> 'Odblokowany',
));

?>