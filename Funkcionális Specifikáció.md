# Funkcionális Specifikáció

## 1.Áttekintés
- Csapatunk célja létrehozni egy kérdőívet, amely segítségével szeretnénk információt gyűjteni
- Az gyűjtött információt egy adatbázisban tároljuk
- A fő kérdések előtt egy felmérést kell kitöltenie a felhasználónak.
- A felmérés célja, hogy megmutassa mennyire jártas az adott felhasználó a témában

## 2.Jelenlegi helyzet
Jelenleg a megrendelő egy papíralapú kérdőív rendszert alkamaz. Ennek hosszadalmas a kiértékelése,
rendezetten tartása. A jelenlegi rendszeren belül is léteznek előzetes tudást felmérő kérdések,
melyeket a megrendelő szeretné ,ha implementálnánk a készülő rendszerbe is. A jelenlegi kérdőív kitöltése
egy 10-20 percet vesz igénybe, a kérdőíveket tollal töltik ki, így ha valamely résztvevő megváltoztatja
a véleményét, kisatírozott válaszok jönnek létre, így jelenleg semmilyen módon sem lehetséges a gépi
kiértekelés. Mivel a rendszer papíralapú és a kiértékelése sem gépi, így a kapott válaszoka/jóslatokat
kézzel vezetik egy papíralapú füzetbe. Illetve a kiérteklést is kézzel számolják.
A jelenlegi rendszer funkcionalitás szempontjából elavult, nem fenntartható az effajta működés
a jövőre nézve. Ennek a rendszernek és kiértékelésnek szeretné a megrendelő az egyszerűsítését és automatizálását.

## 3.Jelenlegi üzleti folyamatok modellje

A kérdőívek célja, hogy információt gyűjtsön az emberektől az adott témával kapcsolatban. Ma már a esetek többségében a kérdőívek online felületen jelennek meg, de még mindig léteznek papír alapú kérdőívek is. A papír alapú kérdőívekkel történő információ gyűjtés lassú, így az online formában megjelenő kérdőívek, az információ gyors begyűjtésével és olykor egy adatbázisban eltárolva lehetőséget nyújtanak a gyors kiértékelésre amelyet ma már nem szükséges embereknek végezniük, egy számítógépes program is képes lehet már erre.

## 4.Vágyálomrendszer
Egy olyan rendszer szükséges számunkra amely kérdőív kitöltése kapcsán adatok feldolgozását teszi lehetővé. Funkcionalitást tekintve a rendszer egy kerdőívből álljon, tehát a felhasználó egy barátságos és egyértelmű felületet kell, hogy kapjon amin elsősorban fel kell, hogy mérjük tudását és a kérdőív másik felében megfelelő súlyozással tudjuk a válaszát feldolgozni. Amint ecseteltem, a kérdőív első része egy felmérés arról, hogy az illetőnek a témával kapcsolatban mennyi tudása van. A második felében pedig egyszerű kérdésekre vár választ a rendszer annak függvényében, hogy a feldolgozott adatból később egy jövőbeli becslést hajtsunk végre automatizáltan.

## 5.Igényelt üzleti folyamatok modellje

A megrendelő egy olyan kérdőívet szeretne amelynek a fő kérdések megválaszolása előtt felméri egy "mini kérdőív" formájában, hogy a felhasználó mennyire jártás az adott témában. A válaszok egy adatbázisban kerülnek tárolásra. A rendszer rendelkezik egy admin-látogató jogosultság rendszerrel.
### Admin:
- Bejelentekezés után megtekintheti a megadott válaszokat
- Szerkesztheti a kérdőívet, hozzáadhat új kérdéseket vagy törölheti a már meglévőket
- Új felhasználó(kat) (admin) adhat hozzá a rendeszerhez
### Látogató:
- A kérdőív kitöltésére van lehetősége


![Megnevezetlen diagram drawio (2)](https://user-images.githubusercontent.com/113610538/200349658-38ca66a1-f361-4b97-87c7-ec0c94be09d6.png)


## 6.Használati esetek
A rendszer célja nem más, mint hogy az ADMINISZTRÁTOROK álltal létrehozozz kérdőíveket, az oldal LÁTOGATÓI tudják kitölteni, igy adatokat biztosítva a felméréshez.
Az ADMINOK és a LÁTOGATÓK különbözőképpen tudják majd használni a rendszert:

### 1. ADMINOK:
1.1. Kérdőívek létrehozása a rendszerbe. <br>
1.1.2. A kérdőívekhez egy teszt csatolása, amiből kiderül, hogy a kitöltőnek mennyi tudása van a felmérés témakörében. <br>
1.1.3. A kérdőívekhez témában megfelelő kép feltöltése. <br>
1.2. A felmérés statisztikáinak elérése. <br>
1.2.1. A statisztikák megtekintése. <br>
1.2.2. A statisztikák kimentése a használt eszközre. <br>
1.2.3. A statisztikák elmentése és tárolása egy adatbázisban <br>
1.3. A már létező kérdőívek törlése. <br>

### 2. LÁTOGATÓK:
2.1. Kérdőívek és az azt megelőző tesztek kitöltése. <br>
2.2. A LÁTOGATÓ eldöntheti, hogy anonim szeretne e maradni, vagy a kitöltéséhez adja a nevét. <br>


![hasznalati esetek](https://user-images.githubusercontent.com/113610878/200346421-1d44d950-b3e7-4b9e-8553-f1435b1f7566.png)


## 7.Funkció-követelmény megfeleltetés

- A felhasználó által megadott válaszokat csak az Admin felhasználók tekinthetik meg.<br>
- Ezzel elkerüljük az információk illetéktelen felsználását.<br>
- Többfajta kérdés típus közül választhat a megrendelő ezzel létrehozhat olyan kérdéseket amelyekre az általa megadot válaszok közül való választással lehet    válaszolni.<br>
- A megrendelő a maga ítlése szerint állíthatja össze a kérdőívet, amihez egy skeleton-t bizotsítunk.<br>

## 8.Képernyőterv

## 9.Fogalomszótár
