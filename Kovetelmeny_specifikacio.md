# Követelmény specifikáció

## 1.Áttekintés

 Egy olyan rendszert szeretnénk, amely egy kérdőív formájában adatokat gyűjt emberektől. Legyen benne olyan funkció, hogy lehessen folytatni az elkezdett kérdőívet. Ez olyan esetekre hasznos, ha valakinek elmegy az internete például. A fő kérdések előtt legyen valamilyen féle felmérés, amivel leteszteljük a felhasználókat akik kitöltik a kérdőívet. Ez azért szüksges, mert szeretnénk minél jobb képet kapni az adott témákban amikre ténylegesen kíváncsiak vagyunk. Miután a felmérés megtörtént szeretnénk ha megkapná a felhasználó a rendes kérdéseket, ezek lehetnek igaz-hamis, felelet választós és a többi megszokott forma. Az adatokat nem kell feldolgozni, csak egy olyan program szükséges ami begyűjti az adatokat és eltárolja azokat egy adatbázisban. A legfontosabb az egészben, hogy nem szabad visszaélni ezekkel az adatokkal, minden adatot titkosan kell kezelni, ne lehessen hozzáférni illetéktelen személyeknek, mindenki csak a saját válaszaival kell hogy törődjön.

## 2.Jelenlegi helyzet

A csapatunk szeretne egy webes kérdőívet készíttetni adatgyűjtés céljából. A klubbunkról több helyen lehet hallani, hogy oda vannak az internetes kérdőívekért, mivel megrögzött adatgyűjtők alapították. Szeretnénk mindenféle adatot begyűjteni a világ minden részéről, erre azért van szükség,hogy egy-egy témáról ne szubjektív véleményt kapjunk. Ahogy a mondás is tartja, "Több szem többet lát!". Elsősorban olyan emberek véleményére vagyunk kíváncsiak akik valamennyire jól informáltak a világ történéseiről, nincsenek bezárkózva a külvilágtól, mivel főleg állatokról és a környezetükről szeretnénk kérdezni. Cégünk jelenleg kutatást végez a pingvineken, így nem kizárt, hogy róluk lesz majd az első kérdőívünk.

## 3.Vágyálom rendszer

 A projekt célja az hogy létrehozzunk egy olyan rendszert, ami különböző adatok, predikciók, vélemények megkérdezésére szolgál. A rendszert szeretnénk úgy létrehozni, hogy ez minél több ember számára elérhető legyen. Erre legalkalmasabb felületnek egy weboldalt gondolunk, hiszen az bármilyen eszközről elérhető, feltéve ha van internet kapcsolatunk. A rendszernek olyannak kell lennie, hogy az a különböző felhasználók által szolgált adatokat el tudja tárolni. Emellett ha egy felhasználó válaszol néhany kérdésre, majd abbahagyja a kérdőív kitöltését, akkor később azt tudja folytatni. Ahhoz hogy felmérjük a felhasználó témához értését tegyünk fel kalibráló kérdéseket, hiszen nem mindegy hogy egy témában jártas személy válaszol a kérdésekre, vagy egy olyan ember akinek az adott téma nem az erőssége.

## 4.Funkcionális követelmények

### A kerdőiv kezelésével kapcsolatban: <br>
   - A kérdőívben a kérdesek legyenek világosan és érthetően megfogalmazva. <br>
   - Ezen felül a kérdőív legyen könnyen kezelhető valamint egyszerűen megérthető/átlátható. <br>
   - A vizuális felülettel kapcsolatban: <br>
   - A vizualis felület legyen tetszetős/kidolgozott, még sem túl komplikált. <br>
   - Szeretnénk, hogy a felület is átlátható legyen(látni lehet, hogy mely funkciók hol találhatók, és nem kell kutatni utánuk). <br>
   - A kerdőiv funkcióival kapcsolatban: <br>
   - A weboldalnak képesnek kell lennie elmenteni a kérdoivek jelenlegi státuszát/állaspotját. <br>
   - Ez azért fontos, ugyanis ha bármi törtenik a kérdoiv kitöltése során a kitöltőnek tudnia kell folytatnia a már meg kezdett,de még be nem fejezett kerdőivet. <br>

## 5.Rendszerre vonatkozó törvények, szabványok, ajánlások

- A web felület szabványos eszközökkel készüljüön, html/css/javascript/php. <br>
- A képek jpeg vagy png formátumúak lehetnek. <br>
- A felhasznlókat azonosító web oldalak esetében szükséges jogszabályokat be kell tartani: GDPR <br>
- A rendszer bíztosítsa a kérdőívet kitöltő személy teljes anonimítást. <br>
- Mindenképp biztosítsa a rendszer az elkezdett, de valamilyen okból félbeszakadt kérdőív kitöltésének folytatását. <br>

## 6.Jelenlegi üzleti folyamatok modellje

A kérdőívek általános feladata az, hogy felmérjék az emberek véleményét egy vagy több dologgal kapcsolatban. Rengeteg kérdőív van az interneten. Miben különbözne egy új, milyen újítást tudna bevezetni? Szerintünk az rendben van, hogy egy kérdőívet bárki kitölthet. Ugyanakkor sok olyan szituació van amikor azok véleményére szeretnénk több kreditet adni akik jártasak abban a bizonyos témában. Ezért a kérdőívünkbe implementálni szeretnénk egy úgy nevezett "szűrést" amely eldönti, hogy letesyteljük az aktuális felhasználó hozzáértését.

## 7.Igényel üzleti folyamatok modellje

- Online megjelenés. <br>
- Válaszok elmentése adatbázisba. <br>
- Az egyéb válaszmegjelölés átnézése, és csak az értelmes válaszok elmentése adatbázisba. <br>
- A kérdőív folytatásának garantalásása, nem várt kilépés esetén. <br>
- Kötelező adatok megadásának ellenörzése. <br>
- A teszt kérdések megválaszolása esetén a helyesség ellenőrzése. <br>

## 8.Követelmény lista

## 9.Fogalomszótár
