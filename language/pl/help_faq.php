<?php
/** 
* /help_faq.php [Polish]
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

$help = array(
	array(
		0 => '--',
		1 => 'Problemy Logowania i Rejestracji'
	),
	array(
		0 => 'Dlaczego nie mogę się zalogować?',
		1 => 'Powodów tego może być kilka. Po pierwsze, upewnij się, że podajesz prawidłowy login i hasło. Jeśli są prawidłowe to być może zostałeś wyrzucony z forum (aby się upewnić skontaktuj się z administratorem). Możliwe jest także, że problem leży w błędnej konfiguracji forum.'
	),
	array(
		0 => 'Dlaczego muszę się zarejestrować?',
		1 => 'Być może nie musisz, zależy to od administratora forum czy rejestracja jest konieczna aby móc pisać wiadomości. Jednakże rejestracja umożliwi Ci dostęp do dodatkowych opcji niedostępnych dla gości takich jak prywatne wiadomości, wysyłanie maili do użytkowników, możliwość dołączenia awatara, subskrypcja grup użytkowników itd. Rejestracja zajmie Ci chwilę więc zachęcamy abyś jej dokonał.'
	),
	array(
		0 => 'Dlaczego jestem automatycznie wylogowywany?',
		1 => 'Jeżeli nie zaznaczysz opcji <em>Zaloguj mnie automatycznie przy każdej wizycie</em> podczas logowania będziesz zalogowany na forum tylko podczas tej wizyty. Uniemożliwia to korzystania z Twojego konta przez kogoś innego. Aby pozostawać zalogowanym przy kolejnych wizytach zaznacz powyższą opcję.  Nie jest to zalecane, gdy korzystasz z ogólnodostępnego komputera, np. w bibliotece, kawiarni internetowej czy na uczelni. Jeżeli nie widzisz tej opcji podczas logowania oznacza to, że administrator ją wyłączył.'
	),
	array(
		0 => 'Jak mogę ukryć moją obecność na forum?',
		1 => 'W Panelu użytkownika (UCP) w zakładce “Ustawienia Forum” znajdziesz opcję Ukryj moją obecność na forum. Jeżeli ją włączysz będziesz widoczny na liście użytkowników online tylko dla administratorów oraz dla siebie. Będziesz zliczany jako użytkownik ukryty. '
	),
	array(
		0 => 'Zapomniałem hasła!',
		1 => 'Nie martw się! Jeśli twoje hasło nie może byc odzyskane, istnieje możliwość zresetowania go. Aby zrobić to przejdź do strony logowania i kliknij na <em>Zapomniałem hasła</em> a następnie postępuj zgodnie ze wskazówkami.'
	),
	array(
		0 => 'Zarejestrowałem się, ale nie mogę się zalogować!',
		1 => 'Na początku sprawdź, czy wpisujesz poprawny login i hasło. Jeżeli te są w porządku, to problemem może być jedna z dwóch rzeczy. Jeżeli włączone są funkcje COPPA i kliknąłeś odnośnik <em>Mam mniej niż 13 lat</em> podczas rejestracji, musisz postąpić zgodnie z otrzymanymi instrukcjami. Jeżeli tak nie jest, to może twoje konto wymaga aktywacji? Niektóre fora wymagają aktywacji wszystkich nowych kont, bądź przez samych użytkowników, bądź przez administratora, zanim można się na nie logować. Po rejestracji powinieneś otrzymać wiadomość czy wymagana jest aktywacja konta. Jeżeli otrzymałeś e-mail postępuj zgodnie z instrukcjami w nim zawartymi, a jeśli nie otrzymałeś e-maila, to czy jesteś pewien, że podałeś poprawny adres? Jednym z powodów wykorzystania aktywacji jest <em>redukcja</em> dostępu do forum osób niepożądanych. Jeżeli jesteś pewien, że podałeś poprawmy adres e-mail spróbuj skontaktować się z administratorem Forum.'
	),
	array(
		0 => 'Zarejestrowałem się kiedyś, ale nie mogę się już zalogować!',
		1 => 'Prawdopodobny powód tego to: wprowadzasz błędna nazwę użytkownika lub hasło (sprawdź e-mail, który otrzymałeś po rejestracji) lub Twoje konto zostało usunięte przez administratora z jakiegoś powodu. Jeżeli Twoje konto zostało usunięte to być może nie pisałeś żadnych postów na forum? Zazwyczaj na forach okresowo usuwa się użytkowników, którzy nie napisali żadnego postu aby zmniejszyć rozmiar bazy danych. Spróbuj ponownie zarejestrować się i włączyć do dyskusji na forum.'
	),
	array(
		0 => 'Czym jest COPPA?',
		1 => '<acronym title="Child Online Privacy and Protection Act">COPPA</acronym> to istniejące w Stanach Zjednoczonych prawo, nakazujące witrynom, mogącym przechowywać dane osobowe niepełnoletnich do lat 13, posiadanie pisemnego zezwolenia rodziców lub prawnych opiekunów, zezwalające na przechowywanie w/w informacji. Jeżeli nie jesteś pewien, czy przepis ten dotyczy Ciebie lub witryny, na której próbujesz się zarejestrować, skontaktuj się z prawnikiem lub inną osobą, zdolną do udzielenia fachowej porady. Proszę pamiętać, że ani  phpBB Group, ani oficjalny support phpBB w Polsce nie mają kompetencji do udzielania porad prawnych i nie należy się z nimi kontaktować w tej kwestii.'
	),
	array(
		0 => 'Dlaczego nie mogę się zarejestrować?',
		1 => 'Prawdopodobnie właściciel strony zbanował Twój adres IP lub zabronił nazwy użytkownika, której próbujesz użyć przy rejestracji. Skontaktuj się z administratorem forum w celu uzyskania pomocy.'
	),
	array(
		0 => 'Co spowoduje "Usunięcie wszystkich cookies utworzonych przez forum"?',
		1 => '“Usuń cookies utworzone przez forum” usuwa cookies utworzone przez phpBB3, które pozwalają na zapamiętanie Twoich ustawień i bycie zalogowanym na forum. Dzięki nim działają również takie funkcje, jak zapamiętywanie nieprzeczytanych postów. Usunięcie cookies może pomóc w przypadku problemów z zalogowaniem lub wylogowaniem się.'
	),
	array(
		0 => '--',
		1 => 'Preferencje i ustawienia użytkownika'
	),
	array(
		0 => 'Jak mogę zmienić moje ustawienia?',
		1 => 'Wszystkie Twoje ustawienia (jeśli jesteś zarejestrowany) są zapisane w bazie danych. Aby je zmienić, kliknij link <em>Panel użytkownika</em> (przeważnie znajdujący się na górze strony). Pozwoli Ci to na zmianę wszystkich Twoich ustawień i preferencji.'
	),
	array(
		0 => 'Nieprawidłowo wyświetla mi się czas na forum (w postach, w profilach, itd.)',
		1 => 'Rzadko się zdarza, że serwer ma źle ustawiony czas i  prawdopodobnie podane czasy są właściwe. Być może widzisz czas ze strefy czasowej innej niż Twoja. Jeżeli tak jest, to powinieneś zaktualizować ustawienia twojego profilu, wybierając strefę czasową odpowiednią dla twojego obszaru (np Berlin, Bruksela, Kopenhaga, Madryd, Paryż itp.). Pamiętaj, że zmiana strefy czasowej, jak większość ustawień, może być dokonana jedynie przez zarejestrowanych użytkowników. Jeśli więc jeszcze się nie zarejestrowałeś, teraz jest dobry moment, żeby to zrobić.'
	),
	array(
		0 => 'Zmieniłem strefę czasową, ale czasy nadal są nieprawidłowe!',
		1 => 'Jeżeli ustawiona strefa czasu jest poprawna oraz uwzględnia czas letni, a czas nadal jest wyświetlany nieprawdłowo to prawdopodobnie źle ustawiony jest zegar na serwerze. Poinformuj administratora, aby naprawił ten problem.'
	),
	array(
		0 => 'Na liście nie ma mojego języka!',
		1 => 'Najprawdopodobniej administrator forum nie zainstalował Twojego języka lub nikt takiego tłumaczenia jeszcze nie wykonał. Spróbuj zapytać administratora czy mógłby zainstalować język, który Ciebie interesuje a jeśli takie tłumaczenie nie istnieje możesz sam spróbować wykonać takie tłumaczenie. Więcej informacji możesz znaleźć na stronie phpBB (link znajdziesz w stopce).'
	),
	array(
		0 => 'Jak mogę wyświetlać obrazek pod moją nazwą użytkownika?',
		1 => 'Są dwa obrazki, które mogą pokazać się poniżej nazwy użytkownika podczas wyświetlania postu. Zależnie od użytego stylu, pierwszym może być obrazek powiązany z Twoją rangą, najprawdopodobniej w formie gwiazdek, kwadratów lub kropek. Obrazek ten wskazuje ile postów już napisałeś/aś lub na Twój status na forum. Drugi, zazwyczaj większy, jest znany jako awatar i zazwyczaj jest unikatowy lub spersonalizowany dla każdego użytkownika. Administrator forum może włączać awatary i wybierać sposób w jaki awatary mogą być dostępne. Jeśli nie możesz używać awatarów, skontaktuj się z administratorami forum i zapytaj ich o przyczyny.'
	),
	array(
		0 => 'Czym jest moja ranga i jak mogę ją zmienić?',
		1 => 'Na ogół nie możesz bezpośrednio zmienić nazwy jakiejkolwiek rangi (ranga pojawia się pod nazwą użytkownika przy przeglądaniu tematu, oraz w twoim profilu, zależnie od szablonu). Większość forów używa rang aby wskazać liczbę postów, które napisałeś, i aby identyfikować konkretne osoby, np. moderatorzy czy administratorzy mogą mieć specjalną rangę. Prosimy nie pisać postów na forum tylko po to, aby otrzymać wyższą rangę. Moderator lub administrator w takim przypadku po prostu ręcznie ją zmniejszy.'
	),
	array(
		0 => 'Dlaczego muszę się zalogować po kliknięciu w przycisk "e-mail"?',
		1 => 'Tylko zarejestrowani użytkownicy mogą wysyłać e-maile do ludzi poprzez wbudowany w Forum formularz do ich wysyłania (jeśli administrator włączył tą możliwość). Ma to na celu zapobiegać złośliwemu użytkowniu systemu e-maili przez niezarejestrowanych użytkowników.'
	),
	array(
		0 => '--',
		1 => 'Problemy z pisaniem'
	),
	array(
		0 => 'Jak utworzyć temat na forum?',
		1 => 'Aby napisać nowy temat w jednym z forów, kliknij odpowiedni przycisk widoczny na stronie tematu lub listy tematów. Być może będziesz musiał się zarejestrować zanim napiszesz wiadomość. Na dole strony widoku tematu wymienione są dostępne dla Ciebie opcje ((<em>YMożesz zakładać nowe tematy na tym forum, Możesz edytować swoje posty na tym forum, itp.</em>).'
	),
	array(
		0 => 'Jak mogę wyedytować lub usunąć posta?',
		1 => 'Jeżeli nie jesteś administratorem ani moderatorem możesz edytować lub usuwać tylko swoje posty.  Aby zmienić post (czasem jest to możliwe tylko przez jakiś czas po jego napisaniu) kliknij w przycisk <em>zmień</em> przy danym poście. Jeżeli ktoś odpowiedział na Twój post to po zapisaniu zmian na dole będzie wyświetlana informacja ile razy post edytowano. Informacja nie zostanie dodana jeżeli nikt jeszcze nie dopisał kolejnego postu lub post był edytowany przez moderatora lub administratora (powinni oni poinformować dlaczego dokonali edycji). Pamiętaj, że normalni użytkownicy nie mogą usunąć postu jeżeli w temacie ktoś dopisał kolejny.'
	),
	array(
		0 => 'Jak mogę dodać podpis do mojego postu?',
		1 => 'Aby dodać podpis do postu po pierwsze musisz go utworzyć w swoim profilu. Kiedy już to zrobisz możesz zaznaczyć opcję <em>Dołącz podpis</em> przy formularzu wysyłania wiadomości, aby dodać podpis. Możesz także domyślnie dodawać podpis do wszystkich swoich postów zaznaczając odpowiednią opcję w swoim profilu (za każdym razem pisząc post możesz zadecydować o nie dodawaniu do niego podpisu, przez odznaczenie pola Dołącz podpis w formularzu wysyłania wiadomości)'
	),
	array(
		0 => 'Jak mogę utworzyć ankietę?',
		1 => 'Tworzenie ankiet jest proste, kiedy piszesz nowy temat (lub zmieniasz pierwszy post w temacie, jeśli masz odpowiednie uprawnienia) powinieneś widzieć formularz <em>Tworzenie ankiety</em> pod głównym polem wiadomości (jeśli nie widzisz go, to prawdopodobnie nie masz uprawnień do tworzenia ankiet). Musisz podać tytuł ankiety i podać przynajmniej dwie opcje (każdą opcję wpisujesz w nowej linii). Możesz także wyznaczyć czas trwania ankiety (0 dla niekończącej się) a także umożliwić użytkownikom zmianę wcześniej oddanego głosu. Liczba możliwych do ustawienia opcji jest określana przez administratora.'
	),
	array(
		0 => 'Dlaczego nie mogę dodać więcej opcji w ankiecie?',
		1 => 'Liczba opcji ankiety jest ograniczona przez administratora. Jeśli chciałbyś dodać więcej opcji do Twojej ankiety skontaktuj się z administratorem forum.'
	),
	array(
		0 => 'Jak mogę edytować lub usunąć ankietę?',
		1 => 'Tak jak posty, ankiety mogą być zmieniane przez autora, moderatora lub administratora. Aby edytować ankietę musisz edytować pierwszy post w temacie (ankieta zawsze jest z nim powiązana). Jeżeli nikt jeszcze nie oddał głosu to użytkownik może usunąć ankietę lub zmieniać jej opcje, jeśli jednak zostały już oddane głosy tylko moderator lub administrator może to zrobić. Uniemożliwia to użytkownikom manipulowanie w ankietach poprzez zmianę opcji w połowie trwania ankiety.'
	),
	array(
		0 => 'Dlaczego nie mam dostępu do forum?',
		1 => 'Niektóre fora mogą mieć wprowadzone ograniczenia dla określonych użytkowników albo grup. Żeby przeglądać, czytać, pisać, itd. możesz potrzebować specjalnych zezwoleń, które przydzielić mogą jedynie moderatorzy i administratorzy, więc powinieneś się z nimi skontaktować. '
	),
	array(
		0 => 'Dlaczego nie mogę dodawać załączników?',
		1 => 'Zezwolenia załączników są przyznawane dla danego forum, grupy lub też użytkownika. Administrator forum może nie zezwalać na dodawanie załączników w określonym forum, lub też prawdopodobnie tylko pewne grupy użytkowników mogą wysyłać załączniki. Skontaktuj się z administratorem Forum, jeśli nie jesteś pewien, dlaczego nie możesz dodawać załączników.'
	),
	array(
		0 => 'Dlaczego dostałam(em) ostrzeżenie?',
		1 => 'Każdy administrator określa zasady korzystania z forum. Jeżeli stwierdzą, że naruszasz regulamin, mogą przyznać Ci ostrzeżenie. Proszę pamiętać, że jest to decyzja administratora forum i grupa phpBB nie ma nic z tym wspólnego. Jeżeli nie jesteś pewien, dlaczego otrzymałeś ostrzeżenie, skontaktuj sie z administratorem.'
	),
	array(
		0 => 'Jak mogę zgłosić posty moderatorowi?',
		1 => 'Jeśli administrator Forum na to zezwolił, powinieneś widzieć przycisk raportowania obok postu, którego chcesz zgłosić moderatorowi. Klikając ten przycisk będziesz musiał przejść przez kilka koniecznych kroków, by zaraportować posta.'
	),
	array(
		0 => 'Do czego służy przycisk "Zapisz" podczas pisania tematu?',
		1 => 'Pozwala Ci na zapisanie wiadomości aby dokończyć i dodać ją w późniejszym terminie. By wczytać zapisaną wiadomość przejdź do Panelu użytkownika.'
	),
	array(
		0 => 'Dlaczego mój post musi być zatwierdzony?',
		1 => 'Administrator Forum mógł zdecydować, że na forum, w którym chcesz wysłać wiadomość, jest wymagany ponowny przegląd postu przed jego zatwierdzeniem. Jest także możliwe, ze administrator umieścił Cię w grupie użytkowników, których posty wymagają przeglądu przed zatwierdzeniem. Skontaktuj się a administratorem Forum, by zasięgnąć dalszych informacji.'
	),
	array(
		0 => 'Jak mogę podbić mój temat?',
		1 => 'Klikając link "Podbij temat" podczas jego przeglądania tematu, możesz "podbić" temat na górę listy tematów na pierwszej stronie danego forum. Jednak jeśli nie widzisz takiego linku opcja podbijania została wyłączona i wtedy możesz podbić temat po prostu pisząc w nim odpowiedź. Pamiętaj jednocześnie o przestrzeganiu regulaminu.'
	),
	array(
		0 => '--',
		1 => 'Formatowanie i typy tematów'
	),
	array(
		0 => 'Czym jest BBCode?',
		1 => 'BBCode jest specjalną implementacją HTML, która daje nam lepszą kontrolę nad tym jak poszczególne elementy będą wyświetlane. To, czy możesz używać BBCode w swoich postach na forum jest uzależnione od ustawień określonych przez administratora. Możesz również wyłączyć BBCode w poszczególnych postach, zaznaczając odpowiednią opcję w formularzu pisania postu. Sam BBCode jest podobny w składni do HTML,  ale tagi zawarte są w nawiasach kwadratowych [ i ] zamiast '
	),
	array(
		0 => 'Czy mogę używać HTML?',
		1 => 'Nie. Wstawiony do postu kod HTML będzie wyświetlany jako zwykły tekst. Większość formatowania, które daje nam HTML można uzyskać używając BBCode.'
	),
	array(
		0 => 'Czym są uśmieszki?',
		1 => 'Uśmieszki, bądź Emotikony, to małe graficzne obrazki, które mogą być użyte do wyrażania emocji przy użyciu krótkiego kodu, np. :) oznacza radość, :( oznacza smutek. Pełna lista emotikon jest dostępna przy formularzu wysyłania postu. Staraj się jednak nie używać uśmieszków w nadmiarze, gdyż mogą łatwo spowodować, że post stanie się nieczytelny i moderator może podjąć decyzję o ich skasowaniu bądź też usunięciu całej wiadomości. Administrator forum ma także możliwość ustalenia dopuszczalnego limitu uśmieszków w poście.'
	),
	array(
		0 => 'Czy mogę umieszczać obrazki w poście?',
		1 => 'Tak, obrazki mogą być wyświetlane w Twoich postach. Ponadto, jeśli administrator włączył możliwość wysyłania załączników, możesz wgrać obrazek bezpośrednio na Forum. W przeciwnym razie musisz podać link do obrazka  umieszczonego na publicznie dostępnym serwerze (np. http://www.jakas-strona.com/moj-obrazek.gif). Nie możesz podawać linków do obrazków zapisanych na Twoim prywatnym komputerze (chyba, że jest publicznie dostępnym serwerem) ani obrazków znajdujących się na stronach wymagających autoryzacji, takich jak np. skrzynki pocztowe na gmail lub yahoo i strony chronione hasłem. Aby wyświetlić obrazek użyj znaczników BBCode [img].'
	),
	array(
		0 => 'Czym są globalne ogłoszenia?',
		1 => 'Globalne ogłoszenia zawierają ważne informacje i powinieneś zawsze je czytać. Znajdować się one będą na górze każdego forum i w twoim Panelu Użytkownika. Zezwolenia globalnego ogłoszenia są nadawane przez administratora forum.'
	),
	array(
		0 => 'Czym są ogłoszenia?',
		1 => 'Ogłoszenia często zawierają ważne informacje odnośnie forum i powinieneś je przeczytać jak najszybciej. Ogłoszenia pojawiają się na górze każdej strony forum, w którym zostały napisane. To czy możesz pisać ogłoszenia jest uzależnione od wymaganych zezwoleń ustalonych przez administratora.'
	),
	array(
		0 => 'Czym są tematy przyklejone?',
		1 => 'Tematy przyklejone pojawiają się pod ogłoszeniami w przeglądzie tematów na pierwszej stronie. Przeważnie są one dość ważne, więc w miarę możliwości powinieneś je czytać. Podobnie jak z ogłoszeniami, administrator decyduje jakie uprawnienia są wymagane do pisania tematów przyklejonych na każdym forum.'
	),
	array(
		0 => 'Czym są tematy zamknięte?',
		1 => 'Zamknięte tematy zostają zablokowane przez jednego z moderatorów lub administratorów forum. Nie możesz odpowiadać w zamkniętych tematach, a ankiety w nich zawarte zostają automatycznie zakończone. Tematy mogą zostać zamknięte z wielu powodów (np. naruszenie regulaminu). Zależnie od zezwoleń ustalonych przez administratora możesz mieć możliwość zamykania swoich tematów.'
	),
	array(
		0 => 'Czym są ikony tematu?',
		1 => 'Ikony tematu są obrazkami, które autor wybiera podczas pisania postów wskazując na ich zawartość. Możliwość korzystania z ikon tematu uzależniona jest od zezwoleń ustalonych przez administratora.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Poziomy Użytkownika i Grupy'
	),
	array(
		0 => 'Kim są Administratorzy?',
		1 => 'Moderatorzy są osobami (albo też grupami osób), których zadaniem jest przaglądanie forum od czasu do czasu. Mają oni możliwość edytowania treści lub usuwania postów a także blokowania, odblokowywania, przenoszenia, usuwania i dzielenia tematów w forum, które moderują. Generalnie moderatorzy czuwają aby użytkownicy pisali na temat w dyskusjach oraz nie publikowali niewłaściwych i obraźliwych materiałow.'
	),
	array(
		0 => 'Kim są Moderatorzy?',
		1 => 'Moderatorzy są osobami (albo też grupami osób), których zadaniem jest przaglądanie forum od czasu do czasu. Mają oni możliwość edytowania treści lub usuwania postów a także blokowania, odblokowywania, przenoszenia, usuwania i dzielenia tematów w forum, które moderują. Generalnie moderatorzy czuwają aby użytkownicy pisali na temat w dyskusjach oraz nie publikowali niewłaściwych i obraźliwych materiałow.'
	),
	array(
		0 => 'Czym są grupy użytkowników?',
		1 => 'Grupy użytkowników są sposobem, w jaki administratorzy mogą grupować użytkowników. Każdy użytkownik może należeć do wielu grup i każda grupa może mieć własne zezwolenia. Dzięki temu administratorzy mogą łatwo zmienić zezwolenia dla wielu użytkowników za jednym razem, nadać zezwolenia moderatora lub dać dostęp użytkownikom do prywatnego forum.'
	),
	array(
		0 => 'Gdzie są grupy użytkowników i jak do nich mogę dołączyć?',
		1 => 'Aby dołączyć do grupy użytkowników kliknij w odnośnik Grupy znajdujący się w Twoim Panelu użytkownika, gdzie możesz przeglądać wszystkie grupy. Nie wszystkie są dostępne dla każdego, niektóre mogą wymagać akceptacji przyjęcia nowego użytkownika, niektóre mogą być zamknięte a inne mogą mieć ukryte członkowstwo. Jeżeli grupa jest otwarta możesz poprosić o przyjęcie do grupy klikając w odpowiedni przycisk. Jeżeli grupa wymaga akceptacji nowego członka, Twoja prośba musi zostać zaakceptowana przez moderatora grupy i może on zapytać dlaczego chcesz dołączyć do grupy. Prosimy nie dręczyć moderatora w przypadku negatywnej decyzji, ma swoje powody.'
	),
	array(
		0 => 'Jak mogę zostać przywódcą grupy?',
		1 => 'Możliwe, że administrator forum przypisał kolor członkom grupy, aby ułatwić ich identyfikowanie.'
	),
	array(
		0 => 'Czym jest "Domyślna grupa"?',
		1 => 'Możliwe, że administrator forum przypisał kolor członkom grupy, aby ułatwić ich identyfikowanie.'
	),
	array(
		0 => 'Czym jest "Domyślna grupa użytkownika"?',
		1 => 'Ta strona przedstawia listę osób zajmujących się obsługą forum m.in. administratorów forum oraz moderatorów wraz z informacją jakie fora moderują.'
	),
	array(
		0 => 'Czym jest link "Ekipa"?',
		1 => 'To jest strona z listą osób odpowiedzialnych za forum, w której znajdują się administratorzy i moderatorzy forum i fora przez nich moderowane.'
	),
	array(
		0 => '--',
		1 => 'Prywatne wiadomości'
	),
	array(
		0 => 'Nie mogę wysyłać prywatnych wiadomości!',
		1 => 'Przyczyną tego może być: nie jesteś zarejestrowany i/lub nie jesteś zalogowany, administrator forum wyłączył przesyłanie prywatnych wiadomości na całym forum lub też administrator uniemożliwił Tobie przesyłania wiadomości. Jeżeli jest do ostatni przypadek powinieneś skontaktować sie z administratorem z prośbą o wyjaśnienie przyczyn jego decyzji.'
	),
	array(
		0 => 'Otrzymuję niechciane prywatne wiadomości!',
		1 => 'Możesz zablokować przyjmowanie wiadomości od użytkownika używając reguł w Twoim Panelu uźytkownika. Jeżeli otrzymujesz od kogoś obelżywe prywatne wiadomości poinformuj o tym administratora forum, który będzie mógł zabronić takiej osobie wysyłania jakichkolwiek wiadomości.'
	),
	array(
		0 => 'Odebrałem spam lub obraźliwy e-mail od kogoś z tego forum!',
		1 => 'Przykro nam z tego powodu. System wysyłania e-maili forum zawiera zabezpieczenia umożliwiające tropić użytkowników, którzy piszą takie wiadomości. Powinieneś przesłać pełną kopię e-maila, który otrzymałeś, ważne żeby zawierał nagłówki (zawierają one informacje o użytkowniku, który wysłał e-maila). Wtedy będzie on mógł podjąć odpowiednie kroki.'
	),
	array(
		0 => '--',
		1 => 'Przyjaciele i wrogowie'
	),
	array(
		0 => 'Czym jest moja lista Przyjaciół i Wrogów?',
		1 => 'Użytkownicy dodani do Twojej listy przyjaciół będą wyświetleni w Panelu użytkownika i dzięki temu będziesz mógł szybko sprawdzić ich status online a także wysłać prywatną wiadomość. Zależnie od szablonu forum ich posty mogą być podświetlane. Jeśli dodasz użytkownika do listy wrogów to wszystkie posty przez niego napisane będą domyślnie ukryte.'
	),
	array(
		0 => 'Jak mogę dodać / usunąć użytkowników z mojej listy Przyjaciół lub Wrogów?',
		1 => 'Możesz dodawać użytkowników na dwa sposoby. Po pierwsze klikając w profilu wybranego użytkownika na odnośnik Dodaj do przyjaciół. Drugi sposób to skorzystanie z zakładki w swoim Panelu użytkownika - możesz tam wpisać nazwę użytkownika, którego chcesz dodać do listy. Na tej samej stronie możesz także usuwać przyjaciół z listy.'
	),
	array(
		0 => '--',
		1 => 'Przeszukiwanie forów'
	),
	array(
		0 => 'Jak mogę przeszukiwać forum lub fora?',
		1 => 'Wpisz poszukiwaną frazę w pole wyszukiwania, znajdujące się na stronie głównej, a także stronach forów i tematów. W celu uzyskania zaawansowanych opcji wyszukiwania, należy kliknąć odpowiedni przycisk, dostępny na wszystkich stronach Forum. Szczegóły korzystania z wyszukiwarki mogą zależeć od używanego stylu.'
	),
	array(
		0 => 'Dlaczego moje wyszukiwanie nie zwraca wyników?',
		1 => 'Wyszukiwanie zwróciło zbyt dużo wyników dla tego serwera. Użyj wyszukiwania złożonego, bardziej sprecyzuj zapytanie oraz fora do przeszukania.'
	),
	array(
		0 => 'Dlaczego moje wyszukiwanie zwraca pustą stronę!?',
		1 => 'Twoje wyszukiwanie zwróciło zbyt dużo wyników. Użyj "Zaawansowanego wyszukiwania" i postaraj się być bardziej precyzyjny określając okres i fora, które mają być przeszukane.'
	),
	array(
		0 => 'Jak mogę wyszukać użytkowników?',
		1 => 'Odwiedź stronę "Użytkownicy" i kliknij na "Znajdź użytkownika".'
	),
	array(
		0 => 'Jak mogę znaleźć moje posty i tematy?',
		1 => 'Swoje posty możesz znaleźć klikając na "Szukaj posty użytkownika" w Panelu użytkownika lub na stronie swojego profilu. Jeżeli chcesz wyszukać swoje tematy użyj strony Zaawansowanego wyszukiwania i skorzystaj z odpowiednich opcji.'
	),
	array(
		0 => '--',
		1 => 'Śledzenie tematu i Zakładki '
	),
	array(
		0 => 'Jaka jest różnica między utworzeniem zakładki a śledzeniem?',
		1 => 'Zakładki w phpBB3 działają podobnie jak zakładki w przeglądarce. Nie dostajesz powiadomienia, gdy pojawia się aktualizacja, ale możesz później wrócić do tematu. Śledzenie zaś powiadamia Cię w wybrany przez Ciebie sposób, gdy w temacie bądź na forum pojawia się aktualizacja.'
	),
	array(
		0 => 'Jak mogę śledzić wybrane fora lub tematy?',
		1 => 'Aby rozpocząć śledzenie wybranego forum kliknij odnośnik "Śledź forum" znajdujący na jego stronie. Natomiast żeby rozpocząć śledzenie odpowiedzi w temacie zaznacz odpowiednią opcję podczas pisania odpowiedzi lub kliknij odnośnik "Śledź temat" znajdujący się u dołu wybranego tematu.'
	),
	array(
		0 => 'Jak mogę usunąć moje śledzenia?',
		1 => 'Aby usunąć śledzenia przejdź do Panelu Użytkownika a następnie do zakładki Śledzone tematy i fora.'
	),
	array(
		0 => '--',
		1 => 'Załączniki'
	),
	array(
		0 => 'Jak mogę odnaleźć wszystkie moje załączniki?',
		1 => 'Aby znaleźć listę załączników, które dodałeś, musisz udać się do Panelu Użytkownika (inaczej UCP) i wybrać odpowiedni odnośnik, aby przejść do sekcji załączników.'
	),
	array(
		0 => 'Jak mogę znaleźć wszystkie moje załączniki?',
		1 => 'Aby wyświetlić listę załączników, które wgrałeś przejdź do Twojego Panelu Użytkownika a następnie kliknij odnośnik Załączniki.'
	),
	array(
		0 => '--',
		1 => 'Kwestie phpBB 3'
	),
	array(
		0 => 'Kto napisał skrypt tego forum?',
		1 => 'Ten skrypt (w niezmodyfikowanej formie) został utworzony, opublikowany i jest własnością <a href="http://www.phpbb.com/">Grupy phpBB</a>. Skrypt jest udostępniany na zasadach licencji GNU General Public Licence i może być dowolnie dystrybuowany. '
	),
	array(
		0 => 'Dlaczego funkcja X nie jest dostępna?',
		1 => 'To oprogramowanie zostało utworzone i jest własnością Grupy phpBB. Jeżeli sądzisz, że jakaś funkcja powinna zostać do niego dodana odwiedź stronę phpbb.com i zobacz co w tej sprawie ma do powiedzenia Grupa phpBB. Prosimy nie pisać próśb o nowe funkcje na forum z phpbb.com. Grupa wykorzystuje system SourceForge do zarządzania prośbami. Poszukaj na forum opinii Grupy phpBB na temat danej funkcji, jeśli taka już tam się znajduje, a w przeciwnym wypadku postępuj zgodnie z podaną tam procedurą zgłaszania prośb.'
	),
	array(
		0 => 'Z kim mam się skontaktować w sprawach nadużyć prawnych dotyczących tego Forum?',
		1 => 'Powinieneś skontaktować się z administratorem tego forum. Jeżeli nie możesz dowiedzieć się kto nim jest spróbuj skontaktować się z którymś z moderatorów i zapytać go do kogo się zwrócić. Jeżeli nadal nie dostaniesz odpowiedzi powinieneś skontaktować się z właścicielem domeny (poszukaj go przez <a href="http://www.google.com/search?q=whois">whois</a>) lub, jeśli strona jest na serwerze darmowych kont (wp.pl, lycos itp.) skontaktuj się z działem nadużyć firmy zarządzającej serwerem. Pamiętaj, że Grupa phpBB <strong>nie ma żadnej kontroli</strong> i nie może być w żaden sposób odpowiedzialna za to w jaki sposób, gdzie i przez kogo używane jest forum. Nie ma sensu kontaktować się z Grupą phpBB w sprawach prawnych <strong>niezwiązanych bezpośrednio</strong> ze stroną phpbb.com lub oprogramowaniem phpBB. Jeśli napiszesz do Grupy phpBB w sprawie wykorzystania skryptu <strong>przez osoby trzecie</strong> otrzymasz prawdopodobnie krótką odpowiedź lub też nie otrzymasz jej wcale.'
	)
);

?>