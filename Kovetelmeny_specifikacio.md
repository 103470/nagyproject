# Követelmény specifikáció

## 1.Áttekintés

Csapatunk célja létrehozni egy olyan kérdőívet, amely információt gyűjt az emberektől. A válaszadás előtt egy félmérést kell kitölteniük a felhasználóknak, amivel teszteljük őket, melynek célja, hogy képet kapjuk az adott témáról ami foglalkoztat minket. A felmérés után a felhasználó megkapja a rendes kérdéseket amlyek fajtája a már megszokott felelet választós, igaz-hamis vagy simplán válaszadós forma. Az adatok egy adatbázisban kerülnek eltárolásra, amely megtekintéséhez egy felhasználói fiókba történő belépés után van lehetőség. Ennek a célja, hogy a begyűjtött információt ne tudja egy 3 fél megtekinteni és illetéktelenül felhazsnálni.<br>

## 2.Jelenlegi helyzet

A jelenlegi kérdőívek papír formában készülnek. A kérdőíveket el kell juttatni az emberekhez, akiknek kézzel kell az kitölteni, majd a kitöltést követően vissza is kell azt juttatni a megrendelőhöz. Ez a folyamat lassú és sokan csak a kérdőív megkapásáig jutnak el, és ott meg is szakad a folyamat.<br>
A csapatunk szeretne egy webes kérdőívet készíteni adatgyűjtés céljából. Szeretnénk mindenféle adatot begyűjteni a világ minden részéről, erre azért van szükség,hogy egy-egy témáról ne szubjektív véleményt kapjunk. Ahogy a mondás is tartja, "Több szem többet lát!". Elsősorban olyan emberek véleményére vagyunk kíváncsiak akik valamennyire jól informáltak a világ történéseiről, nincsenek bezárkózva a külvilágtól, mivel főleg állatokról és a környezetükről szeretnénk kérdezni. 

## 3.Vágyálom rendszer

 A projekt célja az hogy létrehozzunk egy olyan rendszert, ami különböző adatok, predikciók, vélemények megkérdezésére szolgál. A rendszert szeretnénk úgy létrehozni, hogy ez minél több ember számára elérhető legyen. Erre legalkalmasabb felületnek egy weboldalt gondolunk, hiszen az bármilyen eszközről elérhető, feltéve ha van internet kapcsolatunk. A rendszernek olyannak kell lennie, hogy az a különböző felhasználók által szolgált adatokat el tudja tárolni. Ahhoz hogy felmérjük a felhasználó témához értését tegyünk fel kalibráló kérdéseket, hiszen nem mindegy hogy egy témában jártas személy válaszol a kérdésekre, vagy egy olyan ember akinek az adott téma nem az erőssége.

## 4.Funkcionális követelmények

### A kerdőiv kezelésével kapcsolatban: <br>
   - A kérdőívben a kérdesek legyenek világosan és érthetően megfogalmazva. <br>
   - Ezen felül a kérdőív legyen könnyen kezelhető valamint egyszerűen megérthető/átlátható. <br>
### A vizuális felülettel kapcsolatban: <br>
   - A vizualis felület legyen tetszetős/kidolgozott, még sem túl komplikált. <br>
   - Szeretnénk, hogy a felület is átlátható legyen(látni lehet, hogy mely funkciók hol találhatók, és nem kell kutatni utánuk). <br>

## 5.Rendszerre vonatkozó törvények, szabványok, ajánlások

- A web felület szabványos eszközökkel készüljüön, html/css/javascript/php. <br>
- A képek jpeg vagy png formátumúak lehetnek. <br>
- A felhasznlókat azonosító web oldalak esetében szükséges jogszabályokat be kell tartani: GDPR <br>
- A rendszer bíztosítsa a kérdőívet kitöltő személy teljes anonimítást. <br>

## 6.Jelenlegi üzleti folyamatok modellje

A kérdőívek általános feladata az, hogy felmérjék az emberek véleményét egy vagy több dologgal kapcsolatban. Rengeteg kérdőív van az interneten. Miben különbözne egy új, milyen újítást tudna bevezetni? Szerintünk az rendben van, hogy egy kérdőívet bárki kitölthet. Ugyanakkor sok olyan szituació van amikor azok véleményére szeretnénk több kreditet adni akik jártasak abban a bizonyos témában. Ezért a kérdőívünkbe implementálni szeretnénk egy úgy nevezett "szűrést" amely eldönti, hogy leteszteljük az aktuális felhasználó hozzáértését.


![unnamed](https://user-images.githubusercontent.com/113610538/200769758-ab8cb843-206d-456d-8d18-411cc7966e5e.png)


## 7.Igényel üzleti folyamatok modellje

- Online megjelenés. <br>
- Válaszok elmentése adatbázisba. <br>
- Az egyéb válaszmegjelölés átnézése, és csak az értelmes válaszok elmentése adatbázisba. <br>
- Kötelező adatok megadásának ellenörzése. <br>
- A teszt kérdések megválaszolása esetén a helyesség ellenőrzése. <br>


![folyamat](https://user-images.githubusercontent.com/113610538/200769591-a5f8db30-81f8-479c-bff1-e456114e122b.png)


## 8.Követelmény lista

  - Biztonság https protocol amellyel biztosítjuk a felhasználó védettségét a weben. <br>
  - Egy választási lehetőséggel rendelkező kérdés és annak a választófelülete <br>
  - Több választási lehetőséggel rendelkező kérdés és annak a választófelülete <br>
  - Saját válasz beírása lehetőséggel rendelkező kérdés és annak a beírósáv felülete <br>
  - Legördülő menü hozzáadása és annak a felülelte <br>
  - Adatbázis kommunikáció a weboldal és egy webszerver adatbázisával <br>
  - Díszítés megalkotása a felülethez <br>
  - UI megalkotása a felülethez <br>

## 9.Fogalomszótár

- HTML: A HTML (angolul: HyperText Markup Language) egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a W3C támogatásával. Az aktuális változata az 5, ezt a verziót használjuk mi is. <br>
- CSS: A CSS (Cascading Style Sheets) egy stílusleíró nyelv, mely a HTML vagy XHTML típusú strukturált dokumentumok megjelenését írja le. Weblapunk stílusát ezzel készítjük el. <br>
- PHP: A PHP egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére. Az első szkriptnyelvek egyike, amely külső fájl használata helyett HTML oldalba ágyazható. opcionális statikus gépelést ad a nyelvhez. <br>
- Ui: Felhasználói felület (User interface). A user interface szoftverek, mobilalkalmazások felhasználó által látható “külső rétege”. <br>
