<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
// 'Page %s of %s' you can (and should) write 'Page %1 of %2', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array (
  'TOO_MANY_SMILIES' => 'Wiadomość zawiera za dużo emotikon. Maksymalna dozwolona liczba emotikon to: %d.',
  'SAVE' => 'Zapisz',
  'PROGRESS_BAR' => 'Pasek postępu',
  'FONT_SIZE' => 'Rozmiar czcionki',
  'DELETE_POSTS_CONFIRM' => 'Czy na pewno chcesz usunąć te posty?',
  'DELETE_POST_CONFIRM' => 'Czy na pewno chcesz usunąć ten post?',
  'DELETE_TOPICS_CONFIRM' => 'Czy na pewno chcesz usunąć te tematy?',
  'DELETE_TOPIC_CONFIRM' => 'Czy na pewno chcesz usunąć?',
  'NO_POST' => 'Żądany post nie istnieje.',
  'NO_POST_MODE' => 'Nie podano trybu posta.',
  'ADD_ATTACHMENT' => 'Dodaj załącznik',
  'ADD_ATTACHMENT_EXPLAIN' => 'Jeśli chcesz załączyć plik, uzupełnij poniższe pola.',
  'ADD_FILE' => 'Dodaj plik',
  'ADD_POLL' => 'Utwórz ankietę',
  'ADD_POLL_EXPLAIN' => 'Jeśli nie chcesz dołączyć ankiety do tematu, pozostaw poniższe pola puste.',
  'ALREADY_DELETED' => 'Wiadomość została już usunięta.',
  'ATTACH_DISK_FULL' => 'Nie ma wystarczającej ilości miejsca na dysku, by zamieścić ten załącznik.',
  'ATTACH_QUOTA_REACHED' => 'Przestrzeń na dysku przeznaczona na załączniki jest już zapełniona.',
  'ATTACH_SIG' => 'Dołącz podpis (podpis można zmienić w panelu zarządzania kontem)',
  'BBCODE_A_HELP' => 'Załącznik wstawiony w tekście: [attachment=]nazwa_pliku.roz[/attachment]',
  'BBCODE_B_HELP' => 'Pogrubienie: [b]tekst[/b]',
  'BBCODE_C_HELP' => 'Kod: [code]kod[/code]',
  'BBCODE_D_HELP' => 'Animacja Flash: [flash=szerokość,wysokość]http://adres_www[/flash]',
  'BBCODE_F_HELP' => 'Rozmiar czcionki: [size=85]tekst[/size]',
  'BBCODE_IS_OFF' => '%sBBCode%s  <em>wyłączony</em>',
  'BBCODE_IS_ON' => '%sBBCode%s  <em>włączony</em>',
  'BBCODE_I_HELP' => 'Tekst pochylony: [i]tekst[/i]',
  'BBCODE_L_HELP' => 'Lista wypunktowana: [list][*]tekst[/list]. Kliknij odnośnik BBCode, by zobaczyć, jak tworzyć listy.',
  'BBCODE_LISTITEM_HELP' => 'Element listy: [*]tekst',
  'BBCODE_O_HELP' => 'Lista rozmieszczona: [list=1][*]Pierwszy punkt[/list] lub [list=a][*]Punkt a[/list].',
  'BBCODE_P_HELP' => 'Wstaw obrazek: [img]http://url_obrazka[/img]',
  'BBCODE_Q_HELP' => 'Cytat: [quote]tekst[/quote]',
  'BBCODE_S_HELP' => 'Font colour: [color=red]text[/color] or [color=#FF0000]text[/color]',
  'BBCODE_U_HELP' => 'Tekst podkreślony: [u]tekst[/u]',
  'BBCODE_W_HELP' => 'Odnośnik: [url]http://adres_www[/url] lub [url=http://adres_www]tekst_będący_odnośnikiem[/url]',
  'BBCODE_Y_HELP' => 'Lista: Dodaj element listy',
  'BUMP_ERROR' => 'Nie można przesunąć tego tematu w górę od razu po ostatnim poście.',
  'CANNOT_DELETE_REPLIED' => 'Możesz usuwać tylko posty, na które jeszcze nie odpowiedziano.',
  'CANNOT_EDIT_POST_LOCKED' => 'Post został zablokowany. Nie możesz go edytować.',
  'CANNOT_EDIT_TIME' => 'Nie możesz już edytować ani usunąć tego posta.',
  'CANNOT_POST_ANNOUNCE' => 'Nie możesz publikować ogłoszeń.',
  'CANNOT_POST_STICKY' => 'Nie możesz przyklejać tematu.',
  'CHANGE_TOPIC_TO' => 'Zmień typ tematu na',
  'CLOSE_TAGS' => 'Zamknij znaczniki',
  'CURRENT_TOPIC' => 'Bieżący temat',
  'DELETE_FILE' => 'Usuń plik',
  'DELETE_OWN_POSTS' => 'Możesz usuwać tylko swoje posty.',
  'DELETE_POST_WARN' => 'Delete this post',
  'DISABLE_BBCODE' => 'Wyłącz BBCode',
  'DISABLE_MAGIC_URL' => 'Wyłącz przetwarzanie odnośników',
  'DISABLE_SMILIES' => 'Wyłącz emotikony',
  'DISALLOWED_CONTENT' => 'Przekaz został odrzucony, ponieważ wysyłany plik został rozpoznany jako potencjalnie niebezpieczny.',
  'DISALLOWED_EXTENSION' => 'Rozszerzenie %s jest niedozwolone.',
  'DRAFT_LOADED' => 'Kopia robocza została wczytana. Możesz teraz dokończyć pisanie posta.<br />Po wysłaniu posta kopia zostanie usunięta.',
  'DRAFT_LOADED_PM' => 'Kopia robocza została wczytana. Możesz teraz dokończyć pisanie prywatnej wiadomości.<br />Po wysłaniu wiadomości kopia zostanie usunięta.',
  'DRAFT_SAVED' => 'Kopia robocza została zapisana',
  'DRAFT_TITLE' => 'Tytuł kopii roboczej',
  'EDIT_REASON' => 'Powód zmiany posta',
  'EMPTY_FILEUPLOAD' => 'Wysłany plik jest pusty.',
  'EMPTY_MESSAGE' => 'Należy wprowadzić treść posta.',
  'EMPTY_REMOTE_DATA' => 'Nie można wysłać pliku. Spróbuj wysłać go ręcznie.',
  'FLASH_IS_OFF' => '[Flash]  <em>wyłączony</em>',
  'FLASH_IS_ON' => '[Flash]  <em>włączony</em>',
  'FLOOD_ERROR' => 'Nie można wysłać jednego posta za drugim.',
  'FONT_COLOR' => 'Kolor czcionki',
  'FONT_COLOR_HIDE' => 'Ukryj paletę kolorów',
  'FONT_HUGE' => 'Wielka',
  'FONT_LARGE' => 'Duża',
  'FONT_NORMAL' => 'Normalna',
  'FONT_SMALL' => 'Mała',
  'FONT_TINY' => 'Malutka',
  'GENERAL_UPLOAD_ERROR' => 'Nie można wysłać załącznika do %s.',
  'IMAGES_ARE_OFF' => '[Img]  <em>wyłączony</em>',
  'IMAGES_ARE_ON' => '[Img]  <em>włączony</em>',
  'INVALID_FILENAME' => '%s jest nieprawidłową nazwą pliku.',
  'LOAD' => 'Wczytaj',
  'LOAD_DRAFT' => 'Wczytaj kopię roboczą',
  'LOAD_DRAFT_EXPLAIN' => 'Tutaj, aby kontynuować pisanie, możesz wybrać kopię roboczą do wczytania. Aktualny post zostanie anulowany – cała zawartość posta zostanie usunięta. Możesz przeglądać, edytować i usuwać kopie robocze z poziomu swojego panelu zarządzania kontem.',
  'LOGIN_EXPLAIN_BUMP' => 'Tylko zalogowani użytkownicy mogą przesuwać tematy w górę na tym forum.',
  'LOGIN_EXPLAIN_DELETE' => 'Tylko zalogowani użytkownicy mogą usuwać posty na tym forum.',
  'LOGIN_EXPLAIN_POST' => 'Tylko zalogowani użytkownicy mogą pisać na tym forum.',
  'LOGIN_EXPLAIN_QUOTE' => 'Tylko zalogowani użytkownicy mogą cytować posty na tym forum.',
  'LOGIN_EXPLAIN_REPLY' => 'Tylko zalogowani użytkownicy mogą odpowiadać w tematach na tym forum.',
  'MAX_FONT_SIZE_EXCEEDED' => 'You may only use fonts up to size %d.',
  'MORE_SMILIES' => 'Wyświetl więcej emotikon',
  'NOTIFY_REPLY' => 'Powiadamiaj mnie o nowych postach w tym temacie',
  'NOT_UPLOADED' => 'Nie można wysłać pliku.',
  'NO_DELETE_POLL_OPTIONS' => 'Nie możesz usunąć istniejących opcji ankiety.',
  'NO_PM_ICON' => 'Brak',
  'NO_POLL_TITLE' => 'Musisz podać tytuł ankiety.',
  'PARTIAL_UPLOAD' => 'Plik został wysłany tylko częściowo.',
  'PHP_SIZE_NA' => 'Plik załącznika ma za duży rozmiar.<br />Nie może przekroczyć maksymalnego rozmiaru zdefiniowanego w ustawieniach.',
  'PHP_SIZE_OVERRUN' => 'Plik załącznika ma za duży rozmiar. Maksymalny rozmiar pliku to %1$d %2$s.<br />Wartość ta jest zapisana w ustawieniach i nie może zostać przekroczona.',
  'PLACE_INLINE' => 'Wstaw w tekst',
  'POLL_DELETE' => 'Usuń ankietę',
  'POLL_FOR' => 'Czas trwania ankiety',
  'POLL_FOR_EXPLAIN' => 'Enter 0 for a never ending poll.',
  'POLL_MAX_OPTIONS' => 'Liczba opcji do wybrania',
  'POLL_MAX_OPTIONS_EXPLAIN' => 'Liczba opcji jaką może wybrać każdy użytkownik podczas głosowania.',
  'POLL_OPTIONS' => 'Opcje ankiety',
  'POLL_QUESTION' => 'Pytanie ankiety',
  'POLL_TITLE_TOO_LONG' => 'Tytuł ankiety może maksymalnie zawierać 100 znaków.',
  'POLL_TITLE_COMP_TOO_LONG' => 'Rozmiar analizowanego tytułu ankiety jest za duży. Usuń kilka znaczników BBCode lub emotikon.',
  'POLL_VOTE_CHANGE' => 'Pozwalaj na zmianę oddanego głosu',
  'POLL_VOTE_CHANGE_EXPLAIN' => 'Jeśli funkcja zostanie włączona, użytkownicy będą mogli zmieniać swoje głosy.',
  'POSTED_ATTACHMENTS' => 'Wysyłanie załączników',
  'POST_APPROVAL_NOTIFY' => 'Otrzymasz informację, gdy twój post zostanie zaakceptowany.',
  'POST_CONFIRMATION' => 'Potwierdzenie wysłania posta',
  'POST_CONFIRM_EXPLAIN' => 'Aby zapobiec automatycznemu zamieszczaniu postów, witryna wymaga wpisania kodu potwierdzającego. Kod jest widoczny na obrazku poniżej. Jeśli występują problemy z jego odczytaniem, należy skontaktować się z %sadministratorem witryny%s.',
  'POST_DELETED' => 'This post has been deleted successfully.',
  'POST_EDITED' => 'This post has been edited successfully.',
  'POST_EDITED_MOD' => 'This post has been edited successfully, but it will need to be approved by a moderator before it is publicly viewable.',
  'POST_GLOBAL' => 'Globalny',
  'POST_ICON' => 'Ikona',
  'POST_NORMAL' => 'Zwykły',
  'POST_REVIEW' => 'Przegląd posta',
  'POST_REVIEW_EDIT' => 'Recenzja posta',
  'POST_REVIEW_EDIT_EXPLAIN' => 'W trakcie edytowania przez Ciebie tego posta, został on zmieniony przez innego użytkownika. Możesz życzyć sobie przejrzenia jego w aktutalnej wersji i skorygowania do Twoich zmian.',
  'POST_REVIEW_EXPLAIN' => 'Co najmniej jeden post został dopisany w tym temacie. W związku z tym, może będziesz chcieć zmienić swój post.',
  'POST_STORED' => 'Post został zamieszczony.',
  'POST_STORED_MOD' => 'Post został zamieszczony, ale przed opublikowaniem musi zostać zaakceptowany przez moderatora.',
  'POST_TOPIC_AS' => 'Opublikuj temat jako',
  'SAVE_DATE' => 'Zapisany',
  'SAVE_DRAFT' => 'Zapisz kopię roboczą',
  'SAVE_DRAFT_CONFIRM' => 'Zapisane kopie robocze zawierają tylko temat i treść posta. Wszystkie inne elementy zostaną usunięte. Czy chcesz zapisać kopię roboczą?',
  'SMILIES' => 'Emotikony',
  'SMILIES_ARE_OFF' => 'Emotikony  <em>wyłączone</em>',
  'SMILIES_ARE_ON' => 'Emotikony  <em>włączone</em>',
  'STICKY_ANNOUNCE_TIME_LIMIT' => 'Czas trwania ogłoszenia/przyklejenia',
  'STICK_TOPIC_FOR' => 'Przyklej temat na',
  'STICK_TOPIC_FOR_EXPLAIN' => 'Enter 0 for a never ending Sticky/Announcement. Please note that this number is relative to the date of the post.',
  'STYLES_TIP' => 'Podpowiedź: Żeby szybko zastosować style, wystarczy zaznaczyć tekst i nacisnąć właściwy przycisk.',
  'TOO_FEW_CHARS' => 'Wiadomość zawiera za mało znaków.',
  'TOO_FEW_POLL_OPTIONS' => 'Należy wprowadzić przynajmniej dwie opcje ankiety.',
  'TOO_MANY_ATTACHMENTS' => 'Nie można dodać kolejnego załącznika. Maksymalna dozwolona liczba załączników to: %d.',
  'TOO_MANY_CHARS' => 'Wiadomość zawiera za dużo znaków.',
  'TOO_MANY_POLL_OPTIONS' => 'Za dużo opcji ankiety.',
  'TOO_MANY_URLS' => 'Wiadomość zawiera za dużo odnośników. Maksymalna dozwolona liczba odnośników to: %d.',
  'TOO_MANY_USER_OPTIONS' => 'Nie można określać większej liczby opcji do wyboru niż zawiera ankieta.',
  'TOPIC_BUMPED' => 'Temat został przesunięty w górę.',
  'UNAUTHORISED_BBCODE' => 'Nie można używać następujących kodów: %s.',
  'UNGLOBALISE_EXPLAIN' => 'Aby zmienić status tematu z globalnego na zwykły, należy wybrać forum, na którym ma on zostać wyświetlony.',
  'UPDATE_COMMENT' => 'Zaktualizuj komentarz',
  'URL_INVALID' => 'Wprowadzony adres URL jest nieprawidłowy.',
  'URL_NOT_FOUND' => 'Nie znaleziono wybranego pliku.',
  'URL_IS_OFF' => '[URL]  <em>wyłączony</em>',
  'URL_IS_ON' => '[URL]  <em>włączony</em>',
  'USER_CANNOT_BUMP' => 'Nie możesz przesuwać w górę tematów na tym forum.',
  'USER_CANNOT_DELETE' => 'Nie możesz usuwać postów na tym forum.',
  'USER_CANNOT_EDIT' => 'Nie możesz edytować postów na tym forum.',
  'USER_CANNOT_REPLY' => 'Nie możesz odpowiadać na tym forum.',
  'USER_CANNOT_FORUM_POST' => 'Na tym forum nie możesz wykonywać operacji związanych z pisaniem postów, ponieważ typ forum na to nie pozwala.',
  'VIEW_MESSAGE' => '%sZobacz swój post%s',
  'VIEW_PRIVATE_MESSAGE' => '%sZobacz swoją wiadomość%s',
  'WRONG_FILESIZE' => 'The file is too big, maximum allowed size is %1$d %2$s.',
  'WRONG_SIZE' => 'The image must be at least %1$s wide, %2$s high and at most %3$s wide and %4$s high. The submitted image is %5$s wide and %6$s high.',
  'CHARS_POST_CONTAINS' => 
  array (
    1 => 'Your message contains %1$d character.',
    2 => 'Your message contains %1$d characters.',
  ),
  'CHARS_SIG_CONTAINS' => 
  array (
    1 => 'Your signature contains %1$d character.',
    2 => 'Your signature contains %1$d characters.',
  ),
  'DELETE_PERMANENTLY' => 'Delete permanently',
  'DELETE_POST_PERMANENTLY_CONFIRM' => 'Are you sure you want to <strong>permanently</strong> delete this post?',
  'DELETE_POST_PERMANENTLY' => 'Permanently delete this post so it can not be recovered',
  'DELETE_POSTS_PERMANENTLY_CONFIRM' => 'Are you sure you want to <strong>permanently</strong> delete these posts?',
  'DELETE_REASON' => 'Reason for deletion',
  'DELETE_REASON_EXPLAIN' => 'The specified reason for deletion will be visible to moderators.',
  'DELETE_TOPIC_PERMANENTLY' => 'Permanently delete this topic so it can not be recovered',
  'DELETE_TOPIC_PERMANENTLY_CONFIRM' => 'Are you sure you want to <strong>permanently</strong> delete this topic?',
  'DELETE_TOPICS_PERMANENTLY_CONFIRM' => 'Are you sure you want to <strong>permanently</strong> delete these topics?',
  'MAX_FLASH_HEIGHT_EXCEEDED' => 
  array (
    1 => 'Your flash files may only be up to %d pixel high.',
    2 => 'Your flash files may only be up to %d pixels high.',
  ),
  'MAX_FLASH_WIDTH_EXCEEDED' => 
  array (
    1 => 'Your flash files may only be up to %d pixel wide.',
    2 => 'Your flash files may only be up to %d pixels wide.',
  ),
  'MAX_IMG_HEIGHT_EXCEEDED' => 
  array (
    1 => 'Your images may only be up to %1$d pixel high.',
    2 => 'Your images may only be up to %1$d pixels high.',
  ),
  'MAX_IMG_WIDTH_EXCEEDED' => 
  array (
    1 => 'Your images may only be up to %d pixel wide.',
    2 => 'Your images may only be up to %d pixels wide.',
  ),
  'MESSAGE_BODY_EXPLAIN' => 
  array (
    0 => '',
    1 => 'Enter your message here, it may contain no more than <strong>%d</strong> character.',
    2 => 'Enter your message here, it may contain no more than <strong>%d</strong> characters.',
  ),
  'POLL_OPTIONS_EXPLAIN' => 
  array (
    1 => 'Place each option on a new line. You may enter <strong>%d</strong> option.',
    2 => 'Place each option on a new line. You may enter up to <strong>%d</strong> options.',
  ),
  'POLL_OPTIONS_EDIT_EXPLAIN' => 
  array (
    1 => 'Place each option on a new line. You may enter <strong>%d</strong> option. If you remove or add options all previous votes will be reset.',
    2 => 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
  ),
  'QUOTE_DEPTH_EXCEEDED' => 
  array (
    1 => 'You may embed only %d quote within each other.',
    2 => 'You may embed only %d quotes within each other.',
  ),
  'QUOTE_NO_NESTING' => 'You may not embed quotes within each other.',
  'REMOTE_UPLOAD_TIMEOUT' => 'The specified file could not be uploaded because the request timed out.',
  'TOO_FEW_CHARS_LIMIT' => 
  array (
    1 => 'You need to enter at least %1$d character.',
    2 => 'You need to enter at least %1$d characters.',
  ),
  'TOO_MANY_CHARS_LIMIT' => 
  array (
    2 => 'The maximum number of allowed characters is %1$d.',
  ),
  'UNSUPPORTED_CHARACTERS_MESSAGE' => 'Your message contains the following unsupported characters:<br />%s',
  'UNSUPPORTED_CHARACTERS_SUBJECT' => 'Your subject contains the following unsupported characters:<br />%s',
));
