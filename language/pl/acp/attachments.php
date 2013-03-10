<?php
/**
*
* acp_attachments.php [Polish]
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Tutaj możesz konfigurować główne ustawienia załączników i powiązane z nimi specjalne kategorie.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Tutaj możesz dodawać, usuwać, modyfikować lub wyłączać Twoje grupy rozszerzeń. Ponadto opcje obejmują wyznaczenie dla nich specjalnej kategorii, zmianę mechanizmu pobierania oraz zdefiniowanie ikonki, która będzie wyświetlana przed załącznikiem, który należy do grupy.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Tutaj możesz zarządzać dozwolonymi rozszerzeniami. Aby aktywować rozszerzenia, skieruj się do panelu zarządzania grupami rozszerzeń. Zdecydowaie odradzamy zezwalanie na używanie rozszerzeń plików skryptowych (takie jak <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, i tym podobne…)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Tutaj masz możliwość oglądania plików, które znajdują się w katalogu uploadu, jednak nie są skojarzone z żadnym postem. Zdarza się to przeważnie, gdy użytkownicy dołączają pliki, ale nie zatwierdzają posta. Masz możliwość kasowania tych plików oraz dołączania ich do już istniejących postów. Załączanie do postów wymaga podania prawidłowego ID posta; musisz określić to ID sam; opcja ta jest przede wszystkim dla ludzi, którzy czekają na upload pliku za pomocą innego programu oraz załączają ten (najczęściej duży) plik do już istniejącego posta. ',
	'ADD_EXTENSION'						=> 'Dodaj rozszerzenie',
	'ADD_EXTENSION_GROUP'				=> 'Dodaj grupę rozszerzeń',
	'ADMIN_UPLOAD_ERROR'				=> 'Błąd podczas próby załączenia pliku: %s',
	'ALLOWED_FORUMS'					=> 'Dozwolone fora',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Możliwość dodawania określonych rozszerzeń na zaznaczonych (lub wszystkich, jeśli zaznaczone) forach',
	'ALLOWED_IN_PM_POST'				=> 'Zezwolony',
	'ALLOW_ALL_FORUMS'					=> 'Zezwól na wszystkich forach',
	'ALLOW_ATTACHMENTS'					=> 'Zezwól na załączniki',
	'ALLOW_IN_PM'						=> 'Zezwolone w prywatnych wiadomościach',
	'ALLOW_PM_ATTACHMENTS'				=> 'Zezwól na załączniki w prywatnych wiadomościach',
	'ALLOW_SELECTED_FORUMS'				=> 'Tylko fora zaznaczone poniżej',
	'ASSIGNED_EXTENSIONS'				=> 'Przydzielone rozszerzenia',
	'ASSIGNED_GROUP'					=> 'Określona grupa rozszerzeń',
	'ATTACH_EXTENSIONS_URL'				=> 'Rozszerzenia',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupy rozszerzeń',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maksymalna wielkość pliku',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maksymalny rozmiar każdego pliku, 0 oznacza brak limitów.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maksymalna wielkość pliku w prywatnych wiadomościach',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksymalny rozmiar każdego pliku załączonego do prywatnej wiadomości, 0 oznacza brak limitu.',
	'ATTACH_ORPHAN_URL'					=> 'Osierocone załączniki',
	'ATTACH_POST_ID'					=> 'ID postu',
	'ATTACH_QUOTA'						=> 'Łączny rozmiar załączników',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksymalna przestrzeń dyskowa dostępna na załączniki całego forum; 0 oznacza brak limitu.',
	'ATTACH_TO_POST'					=> 'Dołącz plik do wiadomości',

	'CAT_FLASH_FILES'					=> 'Pliki Flash',
	'CAT_IMAGES'						=> 'Obrazy',
	'CAT_QUICKTIME_FILES'				=> 'Pliki Quicktime',
	'CAT_RM_FILES'						=> 'Pliki RealMedia',
	'CAT_WM_FILES'						=> 'Pliki Windows Media',
	'CHECK_CONTENT'						=> 'Sprawdź załączone pliki',
	'CHECK_CONTENT_EXPLAIN'				=> 'Niektóre przeglądarki oszukują przesyłając niepoprawny typ mime wgrywanych plików. Ta opcja sprawia, że takie pliki będą odrzucane.',
	'CREATE_GROUP'						=> 'Utwórz nową grupę',
	'CREATE_THUMBNAIL'					=> 'Utwórz miniaturę',
	'CREATE_THUMBNAIL_EXPLAIN'			=> 'Twórz miniaturę zawsze, kiedy możliwe.',

	'DEFINE_ALLOWED_IPS'				=> 'Dozwolone IP/hosty',
	'DEFINE_DISALLOWED_IPS'				=> 'Zabronione IP/hosty',
	'DISPLAY_INLINED'					=> 'Wyświetlaj obrazy w linii',
	'DISPLAY_INLINED_EXPLAIN'			=> 'Jeśli zaznaczysz \'Nie\', załączone obrazy będą wyświetlane jako odnośniki.',
	'DISPLAY_ORDER'						=> 'Kolejność wyświetlania załączników',
	'DISPLAY_ORDER_EXPLAIN'				=> 'Wyświetlaj załączniki wg daty.',
	'DOWNLOAD_ADD_IPS_EXPLAIN'			=> 'Aby określić kilka różnych IP lub nazw hostów, wpisz każde w nowej linii. Aby określić rangę adresów IP, oddziel początek i koniec myślnikiem (-); możesz używać * jako zamiennik dla dowolnego znaku',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'		=> 'Możesz usuwać (lub dodawać) wiele adresów IP podczas jednej próby używając stosowanej dla twojego komputera i przeglądarki kombinacji myszy i klawiatury. Wykluczane adresy IP mają niebieskie tło.',

	'EDIT_EXTENSION_GROUP'				=> 'Edytuj grupę rozszerzeń',
	'EXCLUDE_ENTERED_IP'				=> 'Włącz to, aby wykluczyć wprowadzony adres IP/nazwę hosta.',
	'EXCLUDE_FROM_ALLOWED_IP'			=> 'Wyklucz IP z dozwolonych adresów IP/nazw hostów',
	'EXCLUDE_FROM_DISALLOWED_IP'		=> 'Wyklucz IP z niedozwolonych adresów IP/nazw hostów',
	'EXTENSIONS_UPDATED'				=> 'Rozszerzenia zostały pomyślnie zaktualizowane',
	'EXTENSION_EXIST'					=> 'Rozszerzenie %s już istnieje',
	'EXTENSION_GROUP'					=> 'Grupa rozszerzeń',
	'EXTENSION_GROUPS'					=> 'Grupy rozszerzeń',
	'EXTENSION_GROUP_DELETED'			=> 'Grupa rozszerzeń została pomyślnie usunięta.',
	'EXTENSION_GROUP_EXIST'				=> 'Grupa %s już istnieje',
	'EXT_GROUP_ARCHIVES'				=> 'Archiwa',
	'EXT_GROUP_DOCUMENTS'				=> 'Dokumenty',
	'EXT_GROUP_DOWNLOADABLE_FILES'		=> 'Pliki pobieralne',
	'EXT_GROUP_FLASH_FILES'				=> 'Pliki Flash',
	'EXT_GROUP_IMAGES'					=> 'Obrazy',
	'EXT_GROUP_PLAIN_TEXT'				=> 'Zwykły tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'			=> 'Quicktime',
	'EXT_GROUP_REAL_MEDIA'				=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'			=> 'Windows Media',
	
	'GO_TO_EXTENSIONS'					=> 'Idź do widoku zarządzania rozszerzeniami',
	'GROUP_NAME'						=> 'Nazwa grupy',

	'IMAGE_LINK_SIZE'					=> 'Wymiary odsyłacza obrazkowego',
	'IMAGE_LINK_SIZE_EXPLAIN'			=> 'Wyświetlaj obrazkowe załączniki jako link w linii, jeśli obrazek jest większy od podanych wymiarów. Aby wyłączyć to zachowanie się załączników, ustaw wartości jako 0px do 0px.',
	'IMAGICK_PATH'						=> 'Ścieżka do Imagemagick',
	'IMAGICK_PATH_EXPLAIN'				=> 'Pełna ścieżka do konwertującej aplikacji imagemagick, na przykład <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'					=> 'Maksymalna liczba załączników na post',
	'MAX_ATTACHMENTS_PM'				=> 'Maksymalna liczba załączników na prywatną wiadomość',
	'MAX_EXTGROUP_FILESIZE'				=> 'Maksymalny rozmiar pliku',
	'MAX_IMAGE_SIZE'					=> 'Maksymalne wymiary obrazu',
	'MAX_IMAGE_SIZE_EXPLAIN'			=> 'Aby wyłączyć limit, wpisz <samp>0px</samp> w obu polach',
	'MAX_THUMB_WIDTH'					=> 'Maksymalna szerokość miniatury w pikselach',
	'MAX_THUMB_WIDTH_EXPLAIN'			=> 'Wygenerowana miniatura nie będzie przekraczała szerokości ustawionej tutaj',
	'MIN_THUMB_FILESIZE'				=> 'Minimalna wielkość pliku miniaturki',
	'MIN_THUMB_FILESIZE_EXPLAIN'		=> 'Nie twórz miniaturki dla obrazów mniejszych niż te wymiary.',
	'MODE_INLINE'						=> 'Wewnętrzny',
	'MODE_PHYSICAL'						=> 'Fizyczny',

	'NOT_ALLOWED_IN_PM'					=> 'Niedozwolone w prywatnych wiadomościach',
	'NOT_ALLOWED_IN_PM_POST'			=> 'Zabroniony',
	'NOT_ASSIGNED'						=> 'Nieokreślone',
	'NO_EXT_GROUP'						=> 'Brak',
	'NO_EXT_GROUP_NAME'					=> 'Nie wprowadzono nazwy grupy',
	'NO_EXT_GROUP_SPECIFIED'			=> 'Brak określonej grupy rozszerzeń',
	'NO_FILE_CAT'						=> 'Brak',
	'NO_IMAGE'							=> 'Brak obrazka',
	'NO_THUMBNAIL_SUPPORT'				=> 'Obsługiwanie miniaturek zostało wyłączone. Do poprawnego funkcjonowania potrzebne jest rozszerzenie GD lub zainstalowany imagemagick. Oba nie zostały znalezione.',
	'NO_UPLOAD_DIR'						=> 'Ścieżka uploadu, którą określiłeś, nie istnieje',
	'NO_WRITE_UPLOAD'					=> 'Ścieżka uploadu, którą określiłeś, nie ma praw do zapisu. Dodaj zezwolenia, aby serwer mógł zapisywać do tego katalogu.',

	'ONLY_ALLOWED_IN_PM'				=> 'Dostępne tylko w prywatnych wiadomościach',
	'ORDER_ALLOW_DENY'					=> 'Zezwól',
	'ORDER_DENY_ALLOW'					=> 'Zabroń',

	'REMOVE_ALLOWED_IPS'				=> 'Usuń lub dodaj zezwolone adresy IP/nazwy hostów',
	'REMOVE_DISALLOWED_IPS'				=> 'Usuń lub dodaj zabronione adresy IP/nazwy hostów',

	'SEARCH_IMAGICK'					=> 'Szukaj imagemagick\'a',
	'SECURE_ALLOW_DENY'					=> 'Lista zezwolonych/zabronionych',
	'SECURE_ALLOW_DENY_EXPLAIN'			=> 'Zmień domyślne zachowanie się, gdy bezpieczne ściąganie jest włączone dla listy dozwolonych (<strong>biała lista</strong>)/zabronionych(<strong>czarna lista</strong>).',
	'SECURE_DOWNLOADS'					=> 'Włącz bezpieczne pobieranie',
	'SECURE_DOWNLOADS_EXPLAIN'			=> 'Po włączeniu tej opcji, ściąganie jest dostępne tylko dla adresów IP/nazw hostów, które zdefiniowałeś.',
	'SECURE_DOWNLOAD_NOTICE'			=> 'Bezpieczne ściąganie nie jest włączone. Poniższe ustawienia będą zatwierdzone po włączeniu bezpiecznego ściągania.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'Lista IP została pomyslnie zaktualizowana.',
	'SECURE_EMPTY_REFERRER'				=> 'Zezwól na pustego referrera',
	'SECURE_EMPTY_REFERRER_EXPLAIN'		=> 'Bezpieczne pobierania są bazowane na referrerach. Czy chcesz zezwolić na ściąganie dla pomijających referrera?',
	'SETTINGS_CAT_IMAGES'				=> 'Ustawienie kategorii obrazów',
	'SPECIAL_CATEGORY'					=> 'Kategoria specjalna',
	'SPECIAL_CATEGORY_EXPLAIN'			=> 'Specjalne kategorie różnią się między sobą sposobem prezentacji załącznika w postach.',
	'SUCCESSFULLY_UPLOADED'				=> 'Pomyślnie wysłano',
	'SUCCESS_EXTENSION_GROUP_ADD'		=> 'Grupa rozszerzeń została pomyślnie dodana.',
	'SUCCESS_EXTENSION_GROUP_EDIT'		=> 'Grupa rozszerzeń pomyślnie zaktualizowana',

	'UPLOADING_FILES'					=> 'Wysyłanie plików',
	'UPLOADING_FILE_TO'					=> 'Wgrywanie pliku “%1$s” do postu numer %2$d…',
	'UPLOAD_DENIED_FORUM'				=> 'Nie masz uprawnień do wysyłania plików w forum "%s" ',
	'UPLOAD_DIR'						=> 'Katalog wgrywania',
	'UPLOAD_DIR_EXPLAIN'				=> 'Ścieżka przechowywania załączników. Pamiętaj, że jeśli zmienisz ten katalog w którym znajdują się już dodane załączniki musisz ręcznie skopiować pliki do nowego katalogu.',
	'UPLOAD_ICON'						=> 'Wgraj ikonę',
	'UPLOAD_NOT_DIR'					=> 'Wybrana przez ciebie lokalizacja nie wydaje się być katalogiem.',
));

?>