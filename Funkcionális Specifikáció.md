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

## 4.Vágyálomrendszer
Egy olyan rendszer szükséges számunkra amely kérdőív kitöltése kapcsán adatok feldolgozását teszi lehetővé. Funkcionalitást tekintve a rendszer egy kerdőívből álljon, tehát a felhasználó egy barátságos és egyértelmű felületet kell, hogy kapjon amin elsősorban fel kell, hogy mérjük tudását és a kérdőív másik felében megfelelő súlyozással tudjuk a válaszát feldolgozni. Amint ecseteltem, a kérdőív első része egy felmérés arról, hogy az illetőnek a témával kapcsolatban mennyi tudása van. A második felében pedig egyszerű kérdésekre vár választ a rendszer annak függvényében, hogy a feldolgozott adatból később egy jövőbeli becslést hajtsunk végre automatizáltan.

## 5.Igényelt üzleti folyamatok modellje

## 6.Használati esetek
A rendszer célja nem más, mint hogy az ADMINISZTRÁTOROK álltal létrehozozz kérdőíveket, az oldal LÁTOGATÓI tudják kitölteni, igy adatokat biztosítva a felméréshez.
Az ADMINOK és a LÁTOGATÓK különbözőképpen tudják majd használni a rendszert:

1. ADMINOK:
1.1. Kérdőívek létrehozása a rendszerbe. <br>
1.1.2. A kérdőívekhez egy teszt csatolása, amiből kiderül, hogy a kitöltőnek mennyi tudása van a felmérés témakörében. <br>
1.1.3. A kérdőívekhez témában megfelelő kép feltöltése. <br>
1.2. A felmérés statisztikáinak elérése. <br>
1.2.1. A statisztikák megtekintése. <br>
1.2.2. A statisztikák kimentése a használt eszközre. <br>
1.2.3. A statisztikák elmentése és tárolása egy adatbázisban <br>
1.3. A már létező kérdőívek törlése. <br>

2. LÁTOGATÓK:
2.1. Kérdőívek és az azt megelőző tesztek kitöltése. <br>
2.2. Váltás éjszakai és nappali mód között. <br>
2.3. A LÁTOGATÓ eldöntheti, hogy anonim szeretne e maradni, vagy a kitöltéséhez adja a nevét. <br>

## 7.Funkció-követelmény megfeleltetés

## 8.Képernyőterv

## 9.Fogalomszótár
