<?php
/** 
* /acp/permissions.php [Polish]
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
	'ACL_NEVER'									=> 'Nigdy',
	'ACL_NO'									=> 'Nie',
	'ACL_SET'									=> 'Ustawienia zezwoleń',
	'ACL_SETTING'								=> 'Ustawienie',
	'ACL_SET_EXPLAIN'							=> 'Zezwolenia bazują na prostym systemie <samp>TAK</samp>/<samp>NIE</samp>. Ustawienie opcji na <samp>NIGDY</samp> dla użytkownika lub grupy użytkowników nadpisuje wszystkie inne zezwolenia. Jeżeli nie chcesz przypisać zezwolenia dla tego użytkownika lub grupy, wybierz <samp>NIE</samp>. Jeżeli będą one przypisane gdzieś indziej, to ich wartość zostanie użyta, w przeciwnym razie założy się opcję <samp>NIGDY</samp>. Wszystkie zaznaczone obiekty (z polem wyboru przed nimi) skopiują ustawione przez Ciebie zezwolenia.',
	'ACL_TYPE_A_'								=> 'Zezwolenia administracyjne',
	'ACL_TYPE_F_'								=> 'Zezwolenia forum',
	'ACL_TYPE_GLOBAL_A_'						=> 'Zezwolenia administracyjne',
	'ACL_TYPE_GLOBAL_M_'						=> 'Zezwolenia Globalnego Moderatora',
	'ACL_TYPE_GLOBAL_U_'						=> 'Zezwolenia użytkownika',
	'ACL_TYPE_LOCAL_F_'							=> 'Zezwolenia forum',
	'ACL_TYPE_LOCAL_M_'							=> 'Zezwolenia moderatora forum',
	'ACL_TYPE_M_'								=> 'Zezwolenia moderacyjne',
	'ACL_TYPE_U_'								=> 'Zezwolenia użytkownika',
	'ACL_VIEW'									=> 'Podgląd zezwoleń',
	'ACL_VIEW_EXPLAIN'							=> 'Tutaj możesz podejrzeć zezwolenia, jakie ma użytkownik lub grupa. Czerwony kwadrat oznacza, że nie posiada on (ona) zezwoleń, a zielony - że tak.',
	'ACL_YES'									=> 'Tak',
	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Tutaj możesz przydzielić zezwolenia administratora użytkownikom oraz grupom. Wszyscy użytkownicy posiadający zezwolenia administratora mogą przeglądać panel administracji.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Tutaj możesz zarządzać zasadami dla zezwoleń administratorskich. Zasady są efektywnymi zezwoleniami, jeśli zmienisz zasady zastosowane do obiektów, zmienisz również ich uprawnienia.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Tutaj możesz przydzielić zezwolenia moderatora forum użytkownikom oraz grupom. Wszyscy użytkownicy posiadający zezwolenia administratora mogą przeglądać panel administracji. Aby przydzielić dostęp forum, nadać globalne zezwolenia moderatora lub administratora proszę przejść do odpowiedniej strony.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Tutaj możesz skopiować zezwolenia jednego forum do jednego lub kilku innych forów.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Tutaj możesz ustalić, którzy użytkownicy i grupy mogą mieć dostęp do danych for. Aby przydzielić moderatorów lub zdefiniować administratorów proszę użyć odpowiedniej podstrony.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Tutaj możesz zarządzać zasadami dla zezwoleń forum. Zasady są efektywnymi zezwoleniami, jeśli zmienisz zasady zastosowane do obiektów, zmienisz również ich uprawnienia.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Tutaj możesz nadać zezwolenia globalnego moderatora grupom i użytkownikom. Globalni moderatorzy różnią się od zwykłych tym, że posiadają uprawnienia na wszystkich forach.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tutaj możesz przydzielić zezwolenia grupom.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Tutaj możesz ustawiać globalne zezwolenia dla grup - zezwolenia użytkownika, zezwolenia globalnego moderatora oraz zezwolenia administratora. Zezwolenia użytkownika to następujące możliwości: używanie awatarów, wysyłanie prywatnych wiadomości itd.; Zezwolenia globalnego moderatora: zatwierdzanie postów, zarządzenia tematami, zarządzanie banami, itd.; i Zezwolenia moderatora: nadawanie uprawnień, ustalanie kodów BBCode, zarządzanie forami, itd. Indywidualne zezwolenia użytkowników powinny być zmieniane w wyjątkowych przypadkach. Preferowana jest metoda dołączania użytkowników do grup i ustalanie zezwoleń grupy.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Tutaj możesz zarządzać zasadami dla zezwoleń moderatorskich. Zasady są efektywnymi zezwoleniami, jeśli zmienisz zasady zastosowane do obiektów, zmienisz również ich uprawnienia.',
	'ACP_PERMISSIONS_EXPLAIN'					=> '<p>Zezwolenia są bardzo szczegółowe i pogrupowane na 4 główne kategorie:</p>

		<h2>Globalne zezwolenia</h2>
		<p>Używane są do kontroli dostępu w znaczeniu globalnym i zastosowywane są w całym forum. Następnie są podzielone na Zezwolenia Użytkowników, Zezwolenia Grup, Administratorów i Globalnych Moderatorów</p>

		<h2>Zezwolenia zależne od działu</h2>
		<p>Używane są do kontroli dostępu zależnie od działu. Następnie są podzielone na Zezwolenia Działu, Moderatorów Działu, Zezwolenia Użytkowników Działu i Zezwolenia Grup Działu.</p>

		<h2>Role</h2>
		<p>Używane są do tworzenia różnych grup zezwoleń dla różnych typów zezwoleń, które będą mogły być później użyte. Domyślne role powinny pokrywać dużą i małą administracje forum, a w każdym z czterech działów, możesz dowolnie dodawać/edytować/kasować role.</p>

		<h2>Maski</h2>
		<p>Maski są używane do widoku efektywnych zezwoleń przypisanych do Użytkowników, Moderatorów (Lokalnych i Globalnych), Administratorów lub Forów.</p>

		<br />

		<p>Po więcej informacji na temat ustawiania i zarządzania zezwoleniami, prosimy o wejście na <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Rozdział 1.5 w Szybkim Starcie (wersja angielska)</a>.</p>',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tutaj możesz przydzielić użytkownikom zezwolenia dostępu do forów.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Tutaj możesz ustawiać użytkownikom globalne zezwolenia - zezwolenia użytkownika, zezwolenia globalnego moderatora oraz zezwolenia administratora. Zezwolenia użytkownika to następujące możliwości: używanie awatarów, wysyłanie prywatnych wiadomości itd.; Zezwolenia globalnego moderatora: zatwierdzanie postów, zarządzenia tematami, zarządzanie banami, itd.; i Zezwolenia moderatora: nadawanie uprawnień, ustalanie BBCode\'ów, zarządzanie forami, itd. Aby zmienić te ustawienia dla dużej ilości użytkowników preferuje się metodę zezwoleń grup. Zezwolenia użytkowników powinny być zmieniane w wyjątkowych przypadkach. Preferowana jest metoda dołączania użytkowników do grup i ustalanie zezwoleń grupy.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Tutaj możesz zarządzać rolami dla zezwoleń użytkowników. Role są efektywnymi zezwoleniami, jeżeli zmienisz role to obiekty posiadające tą role będą mieli także zmienione zezwolenia.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Możesz tutaj przeglądać zezwolenia administracyjne przydzielone wybranym grupom/użytkownikom.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Tutaj możesz przeglądać zezwolenia moderacji przydzielone wybranym użytkownikom/grupom oraz forom',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tutaj możesz przeglądać zezwolenia przydzielone wybranym użytkownikom/grupom oraz forom.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Tutaj możesz przeglądać zezwolenia globalnej moderacji przydzielone wybranym użytkownikom/grupom.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Tutaj możesz przeglądać zezwolenia użytkownika przydzielone wybranym użytkownikom/grupom.',
	'ADD_GROUPS'								=> 'Dodaj grupy',
	'ADD_PERMISSIONS'							=> 'Dodaj zezwolenia',
	'ADD_USERS'									=> 'Dodaj użytkowników',
	'ADVANCED_PERMISSIONS'						=> 'Zaawansowane zezwolenia',
	'ALL_GROUPS'								=> 'Wybierz wszystkie grupy',
	'ALL_NEVER'									=> 'Wszystko <samp>NIGDY</samp>',
	'ALL_NO'									=> 'Wszystko <samp>NIE</samp>',
	'ALL_USERS'									=> 'Wybierz wszystkich użytkowników',
	'ALL_YES'									=> 'Wszystko <samp>TAK</samp>',
	'APPLY_ALL_PERMISSIONS'						=> 'Zatwierdź wszystkie zezwolenia',
	'APPLY_PERMISSIONS'							=> 'Zatwierdź zezwolenia',
	'APPLY_PERMISSIONS_EXPLAIN'					=> 'Zdefiniowane zezwolenia i role dla tego obiektu będą zatwierdzone tylko dla tej i wszystkich zaznaczonych pozycji.',
	'AUTH_UPDATED'								=> 'Zezwolenia zostały zaktualizowane.',

	'COPY_PERMISSIONS_CONFIRM'					=> 'Czy na pewno chcesz wykonać tę operację? To nadpisze wszelkie istniejące już zezwolenia.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'		=> 'Forum źródłowe, z którego chcesz skopiować zezwolenia.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'			=> 'Fora na których chcesz zastosować skopiowane zezwolenia.',
	'COPY_PERMISSIONS_FROM'						=> 'Skopiuj zezwolenia od',
	'COPY_PERMISSIONS_TO'						=> 'Zastosuj zezwolenia do',
	'CREATE_ROLE'								=> 'Utwórz rolę',
	'CREATE_ROLE_FROM'							=> 'Użyj ustawień od...',
	'CUSTOM'									=> 'Własne...',

	'DEFAULT'									=> 'Domyślne',
	'DELETE_ROLE'								=> 'Usuń rolę',
	'DELETE_ROLE_CONFIRM'						=> 'Czy jesteś pewien/pewna, że chcesz usunąć tą zasadę? Obiekty mające tą zasadę zastosowaną <strong>nie</strong> utracą swoich uprawnień.',
	'DISPLAY_ROLE_ITEMS'						=> 'Zobacz pozycje używania tej roli',

	'EDIT_PERMISSIONS'							=> 'Edytuj zezwolenia',
	'EDIT_ROLE'									=> 'Edytuj rolę',

	'GROUPS_NOT_ASSIGNED'						=> 'Brak grup przydzielonych do tej roli',

	'LOOK_UP_GROUP'								=> 'Sprawdź grupę',
	'LOOK_UP_USER'								=> 'Sprawdź użytkownika',

	'MANAGE_GROUPS'								=> 'Zarządzaj grupami',
	'MANAGE_USERS'								=> 'Zarządzaj użytkownikami',

	'NO_AUTH_SETTING_FOUND'						=> 'Ustawienia zezwoleń nie zostały zdefiniowane.',
	'NO_ROLE_ASSIGNED'							=> 'Brak przydzielonej roli…',
	'NO_ROLE_ASSIGNED_EXPLAIN'					=> 'Ustawienie tej roli nie zmieni zezwoleń po prawej. Jeżeli chcesz usunąć wszystkie zezwolenia powinieneś użyć linka “Wszystkie <samp>NIE</samp>”.',
	'NO_ROLE_AVAILABLE'							=> 'Brak dostępnej roli',
	'NO_ROLE_NAME_SPECIFIED'					=> 'Proszę nadać nazwę roli.',
	'NO_ROLE_SELECTED'							=> 'Rola nie została znaleziona.',
	'NO_USER_GROUP_SELECTED'					=> 'Nie zaznaczyłeś żadnego użytkownika ani grupy.',

	'ONLY_FORUM_DEFINED'						=> 'W twoim zaznaczeniu występują jedynie fora. Proszę także zaznaczyć przynajmniej jednego użytkownika bądź grupę.',

	'PERMISSION_APPLIED_TO_ALL'					=> 'Zezwolenia i reguły będą także ustawione dla wszystkich zaznaczonych objektów',
	'PLUS_SUBFORUMS'							=> '+Subfora',

	'REMOVE_PERMISSIONS'						=> 'Usuń zezwolenia',
	'REMOVE_ROLE'								=> 'Usuń rolę',
	'RESULTING_PERMISSION'						=> 'Ostateczne uprawnienie',
	'ROLE'										=> 'Rola',
	'ROLE_ADD_SUCCESS'							=> 'Rola została pomyślnie dodana.',
	'ROLE_ADMIN_FORUM'							=> 'Admin Forum',
	'ROLE_ADMIN_FULL'							=> 'Pełny Admin',
	'ROLE_ADMIN_STANDARD'						=> 'Standardowy Admin',
	'ROLE_ADMIN_USERGROUP'						=> 'Użytkownik i Grupy Admina',
	'ROLE_ASSIGNED_TO'							=> 'Użytkownicy/Grupy przydzielone do %s',
	'ROLE_DELETED'								=> 'Rola została pomyślnie usunięta.',
	'ROLE_DESCRIPTION'							=> 'Opis roli',
	'ROLE_DESCRIPTION_ADMIN_FORUM'				=> 'Posiada dostęp do zarządzania forami oraz ustawień zezwoleń forum.',
	'ROLE_DESCRIPTION_ADMIN_FULL'				=> 'Posiada dostęp do wszystkich administratorskich funkcji forum.<br />Nie zalecane.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'			=> 'Ma dostęp do większości opcji administracyjnych, ale nie może używać narzędzi dotyczących serwera i systemu.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'			=> 'Może zarządzać grupami i użytkownikami: zmieniać zezwolenia, ustawienia, zarządzać banami oraz rangami.',
	'ROLE_DESCRIPTION_EXPLAIN'					=> 'Możesz wprowadzić krótkie wyjaśnienie czego dotyczy reguła lub wyjaśnić co ona znaczy. Tekst, który tutaj wprowadzisz będzie także pokazany wewnątrz ekranu zezwoleń.',
	'ROLE_DESCRIPTION_FORUM_BOT'				=> 'Ta rola jest zalecana dla botów i robotów wyszukiwarek.',
	'ROLE_DESCRIPTION_FORUM_FULL'				=> 'Może używać wszystkich opcji forum, włączając w to pisanie ogłoszeń i przyklejonych. Może także ignorować limit antyfloodowy. <br />Nie zalecane dla zwykłych użytkowników.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'			=> 'Może używać niektóre opcji forum, ale nie może załączać plików oraz używać ikon postów.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'		=> 'Zgodnie z Ograniczonym Dostępem ale dodatkowo może tworzyć ankiety.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'			=> 'Rola dla członków specjalnej grupy „nowych użytkowników”; zawiera zezwolenia <samp>NIGDY</samp>, aby zablokować właściwości nowym użytkownikom.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'			=> 'Nie widzi, i nie ma dostępu do forum',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'			=> 'Może używać większość opcji forum włącznie z załącznikami, ale posty i tematy muszą zostać zatwierdzone przez moderatora.',
	'ROLE_DESCRIPTION_FORUM_POLLS'				=> 'Tak jak w Standardowym Dostępie, ale może tworzyć ankiety.',
	'ROLE_DESCRIPTION_FORUM_READONLY'			=> 'Może przeglądać forum, ale nie może tworzyć nowych tematów oraz odpowiadać w istniejących. ',
	'ROLE_DESCRIPTION_FORUM_STANDARD'			=> 'Może używać większości możliwości forum włącznie z załącznikami i usuwaniem własnych tematów, ale nie może zamykać swoich tematów czy też tworzyć ankiet.',
	'ROLE_DESCRIPTION_LONG'						=> 'Opis roli jest zbyt długi. Prosimy ograniczyć jego długość do 4000 znaków.',
	'ROLE_DESCRIPTION_MOD_FULL'					=> 'Może używać wszystkich możliwości moderacji, z banowaniem włącznie.',
	'ROLE_DESCRIPTION_MOD_QUEUE'				=> 'Może używać kolejki moderacji, by sprawdzać i edytować posty, ale nic więcej.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'				=> 'Może korzystać tylko z podstawowych działań na tematach. Nie może dawać ostrzeżeń ani używać kolejki moderacji.',
	'ROLE_DESCRIPTION_MOD_STANDARD'				=> 'Może używać większości narzędzi moderatora, jednak nie może banować użytkowników, ani zmieniać autora posta.',
	'ROLE_DESCRIPTION_USER_FULL'				=> 'Może używać wszystkich dostępnych możliwości forum, łącznie z zmianą nazwy użytkownika lub ignorowaniu filtru antyspamowego.<br />Nie polecane.',
	'ROLE_DESCRIPTION_USER_LIMITED'				=> 'Może korzystać z niektórych możliwości użytkownika. Załączniki, e-maile lub błyskawiczne wiadomości nie są dozwolone.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'			=> 'Rola dla członków specjalnej grupy „nowych użytkowników”; zawiera zezwolenia <samp>NIGDY</samp>, aby zablokować właściwości nowym użytkownikom.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'			=> 'Posiada ograniczone możliwości i nie może używać awataru.',
	'ROLE_DESCRIPTION_USER_NOPM'				=> 'Posiada ograniczone możliwości i nie posiada możliwości pisania prywatnych wiadomości.',
	'ROLE_DESCRIPTION_USER_STANDARD'			=> 'Może używać większości, ale nie wszystkich możliwości forum. Nie może zmienić nazwy użytkownika lub ignorować filtru antyspamowego.',
	'ROLE_DETAILS'								=> 'Szczegóły roli',
	'ROLE_EDIT_SUCCESS'							=> 'Rola pomyślnie zmieniona.',
	'ROLE_FORUM_BOT'							=> 'Dostęp bota',
	'ROLE_FORUM_FULL'							=> 'Pełny dostęp',
	'ROLE_FORUM_LIMITED'						=> 'Ograniczony dostęp',
	'ROLE_FORUM_LIMITED_POLLS'					=> 'Ograniczony dostęp + Ankiety',
	'ROLE_FORUM_NEW_MEMBER'						=> 'Nowy użytkownik',
	'ROLE_FORUM_NOACCESS'						=> 'Brak Dostępu',
	'ROLE_FORUM_ONQUEUE'						=> 'W kolejce do moderacji',
	'ROLE_FORUM_POLLS'							=> 'Standardowy dostęp + Ankiety',
	'ROLE_FORUM_READONLY'						=> 'Tylko czytanie',
	'ROLE_FORUM_STANDARD'						=> 'Standardowy dostęp',
	'ROLE_MOD_FULL'								=> 'Pełny Moderator',
	'ROLE_MOD_QUEUE'							=> 'Moderator kolejki',
	'ROLE_MOD_SIMPLE'							=> 'Prosty Moderator',
	'ROLE_MOD_STANDARD'							=> 'Standardowy Moderator',
	'ROLE_NAME'									=> 'Nazwa roli',
	'ROLE_NAME_ALREADY_EXIST'					=> 'Rola o nazwie <strong>%s</strong> już istnieje dla określonego typu zezwoleń.',
	'ROLE_NOT_ASSIGNED'							=> 'Rola nie została jeszcze przydzielona.',
	'ROLE_USER_FULL'							=> 'Wszystkie właściwości',
	'ROLE_USER_LIMITED'							=> 'Limitowane właściwości',
	'ROLE_USER_NEW_MEMBER'						=> 'Nowy użytkownik',
	'ROLE_USER_NOAVATAR'						=> 'Brak Awatara',
	'ROLE_USER_NOPM'							=> 'Brak Prywatnych Wiadomości',
	'ROLE_USER_STANDARD'						=> 'Standardowe właściwości',

	'SELECTED_FORUM_NOT_EXIST'					=> 'Wybrane forum(a) nie istnieje(ą).',
	'SELECTED_GROUP_NOT_EXIST'					=> 'Wybrana grupa nie istnieje.',
	'SELECTED_USER_NOT_EXIST'					=> 'Wybrany użytkownik nie istnieje.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'				=> 'Uwzględnione zostaną wszystkie subfora wybranego forum.',
	'SELECT_ROLE'								=> 'Wybierz rolę…',
	'SELECT_TYPE'								=> 'Wybierz typ',
	'SET_PERMISSIONS'							=> 'Ustaw zezwolenia',
	'SET_ROLE_PERMISSIONS'						=> 'Ustaw zezwolenia roli',
	'SET_USERS_FORUM_PERMISSIONS'				=> 'Ustaw zezwolenia użytkowników forum',
	'SET_USERS_PERMISSIONS'						=> 'Ustaw zezwolenia użytkowników',

	'TRACE_DEFAULT'								=> 'Standardowo każde uprawnienia są ustawione na <samp>NIE</samp> ( wyłączone). Dzięki temu, uprawnienia mogą być nadpisywane przez inne ustawienia.',
	'TRACE_FOR'									=> 'Śledź dla',
	'TRACE_GLOBAL_SETTING'						=> '%s (globalny)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'				=> 'To zezwolenie grup jest ustawione na <samp>NIGDY</samp> tak samo jak całkowity wynik, więc stary wynik został zachowany.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'		=> 'To zezwolenie grup dla tego działu jest ustawione na <samp>NIGDY</samp> tak samo jak całkowity wynik, więc stary wynik został zachowany.',
	'TRACE_GROUP_NEVER_TOTAL_NO'				=> 'To zezwolenie grup jest ustawione na <samp>NIGDY</samp> które staje się nową całkowitą wartością, ponieważ nie była jeszcze ustawiona (poprzednia to <samp>NIE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'			=> 'To zezwolenie grup dla tego działu jest ustawione na <samp>NIGDY</samp> które staje się całkowicie nową wartością, ponieważ nie była jeszcze ustawiona (poprzednia to <samp>NIE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'				=> 'Zezwolenie tej grupy ustawione są na <samp>NIGDY</samp>, co nadpisuje <samp>TAK</samp> ustawione dla tego użytkownika.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'			=> 'To zezwolenie grup dla tego działu jest ustawione na <samp>NIGDY</samp> które zmienia całkowite <samp>TAK</samp> na <samp>NIGDY</samp> dla tego użytkownika.',
	'TRACE_GROUP_NO'							=> 'Zezwolenie tej grupy ma wartość <samp>NIE</samp> więc stara ogólna wartość została zachowana.',
	'TRACE_GROUP_NO_LOCAL'						=> 'Zezwolenie jest ustawione na <samp>NIE</samp> dla tej grupy w tym dziale, więc stara całkowita wartość jest zatrzymana.',
	'TRACE_GROUP_YES_TOTAL_NEVER'				=> 'To zezwolenie grupy jest ustawione na <samp>TAK</samp> lecz całkowite <samp>NIGDY</samp> nie może być nadpisane.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'			=> 'To zezwolenie grupy dla tego działu jest ustawione na <samp>TAK</samp> lecz całkowite <samp>NIGDY</samp> nie może być nadpisane.',
	'TRACE_GROUP_YES_TOTAL_NO'					=> 'To zezwolenie grupy jest ustawione na <samp>TAK</samp> która staje się nową całkowitą wartościa, ponieważ nie była jeszcze ustawiona (poprzednia to <samp>NIE</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'			=> 'To zezwolenie grupy dla tego działu jest ustawione na <samp>TAK</samp> która staje się nową całkowitą wartościa, ponieważ nie była jeszcze ustawiona (poprzednia to <samp>NIE</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'					=> 'To zezwolenie grupy jest ustawione na <samp>TAK</samp> i całkowite zezwolenie jest już ustawione na <samp>TAK</samp>, więc całkowity wynik jest zatrzymany.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'			=> 'To zezwolenie grupy dla tego działu jest ustawione na <samp>TAK</samp> i całkowite zezwolenie jest już ustawione na <samp>TAK</samp>, więc całkowity wynik jest zatrzymany.',
	'TRACE_PERMISSION'							=> 'Śledź zezwolenia - %s',
	'TRACE_RESULT'								=> 'Śledź wynik',
	'TRACE_SETTING'								=> 'Ustawienia śledzenia',
	'TRACE_TOTAL'								=> 'W sumie',
	'TRACE_USER_FOUNDER'						=> 'Użytkownik jest założycielem, dlatego zezwolenia administratora są zawsze ustawione na <samp>TAK</samp>.',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'		=> 'Zezwolenia użytkownika niezależne od działu są ustawione na <samp>NIGDY</samp> co nie ma wpływu na lokalne zezwolenia. %sŚledź globalne zezwolenia%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'			=> 'Zezwolenia użytkownika niezależne od działu są ustawione na <samp>TAK</samp> co nadpisuje obecny lokalny wynik <samp>NIGDY</samp>. %sŚledź globalne zezwolenia%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'			=> 'Zezwolenia użytkownika niezależne od działu są ustawione na <samp>TAK</samp> lecz całkowite zezwolenia są już ustawione na <samp>TAK</samp>, więc całkowity wynik został zatrzymany. %sŚledź globalne zezwolenia%s',
	'TRACE_USER_KEPT'							=> 'Zezwolenie użytkownika ma wartość <samp>NIE</samp>, więc została zachowana poprzednia wartość ogólna.',
	'TRACE_USER_KEPT_LOCAL'						=> 'Zezwolenia użytkownika dla tego działu są ustawione na <samp>NIE</samp> więc stara całkowita wartość jest zatrzymana.',
	'TRACE_USER_NEVER_TOTAL_NEVER'				=> 'Zezwolenie użytkownika jest ustawione na <samp>NIGDY</samp> i ogólna wartość jest ustawiona na <samp>NIGDY</samp>, więc nic nie zostało zmienione.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'		=> 'Zezwolenia użytkownika dla tego działu są ustawione na <samp>NIGDY</samp> i całkowita wartość jest ustawiona na <samp>NIGDY</samp>, więc nic nie zostało zmienione.',
	'TRACE_USER_NEVER_TOTAL_NO'					=> 'Zezwolenia użytkownika są ustawione na <samp>NIGDY</samp> które staje się całkowitą wartościa, ponieważ było ustawione na <samp>NIE</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'			=> 'Zezwolenia użytkownika są ustawione na <samp>NIGDY</samp> które staje się całkowitą wartościa, ponieważ było ustawione na <samp>NIE</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES'				=> 'Zezwolenia użytkownika są ustawione na <samp>NIGDY</samp> co nadpisuje poprzednie <samp>TAK</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'			=> 'Zezwolenia użytkownika dla tego działu są ustawione na <samp>NIGDY</samp> co nadpisuje poprzednie <samp>TAK</samp>.',
	'TRACE_USER_NO_TOTAL_NO'					=> 'Zezwolenie użytkownika ma wartość <samp>NIE</samp> i ogólna wartość została ustawiona na <samp>NIE</samp> więc domyślna wartość na <samp>NIGDY</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'				=> 'Zezwolenie użytkownika dla tego forum ma wartość <samp>NIE</samp> i ogólna wartość została ustawiona na <samp>NIE</samp> więc domyślna wartość na <samp>NIGDY</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'				=> 'Zezwolenia użytkownika są ustawione na <samp>TAK</samp>, ale całkowita wartość <samp>NIGDY</samp> nie będzie mogła być nadpisana.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'			=> 'Zezwolenia użytkownika dla tego działu są ustawione na <samp>NIGDY</samp> lecz całkowite <samp>NIGDY</samp> nie może być nadpisane.',
	'TRACE_USER_YES_TOTAL_NO'					=> 'Zezwolenia użytkownika są ustawione na <samp>TAK</samp>, które są wartością całkowitą, ponieważ ta ustawiona jest na <samp>NIE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'				=> 'Zezwolenia użytkownika dla tego działu są ustawione na <samp>NIGDY</samp> lecz całkowite <samp>NIGDY</samp> nie może być nadpisane.',
	'TRACE_USER_YES_TOTAL_YES'					=> 'Zezwolenia użytkownika są ustawione na <samp>TAK</samp> i ogólna wartość jest ustawiona na <samp>TAK</samp>, więc bez zmian.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'			=> 'Zezwolenia użytkownika dla tego działu są ustawione na <samp>TAK</samp> i całkowita wartość jest ustawiona na <samp>TAK</samp>, więc nic nie zostało zmienione.',
	'TRACE_WHO'									=> 'Kto',

	'USERS_NOT_ASSIGNED'						=> 'Brak użytkowników przydzielonych do tej roli',
	'USER_IS_MEMBER_OF_CUSTOM'					=> 'jest członkiem następujących własnych grup',
	'USER_IS_MEMBER_OF_DEFAULT'					=> 'jest członkiem następujących domyślnych grup',

	'VIEW_ASSIGNED_ITEMS'						=> 'Wyświetlanie przypisanych rzeczy',
	'VIEW_GLOBAL_PERMS'							=> 'Globalne zezwolenia',
	'VIEW_LOCAL_PERMS'							=> 'Lokalne zezwolenia',
	'VIEW_PERMISSIONS'							=> 'Zobacz zezwolenia',

	'WRONG_PERMISSION_SETTING_FORMAT'			=> 'Ustawienia zezwoleń mają zły format, phpBB nie jest w stanie przetworzyć je poprawnie.',
	'WRONG_PERMISSION_TYPE'						=> 'Wybrano zły typ zezwoleń.',
));

?>