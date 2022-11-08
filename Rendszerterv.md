# Rendszerterv

## 1. A rendszer célja

A rendszer célja, hogy a információt gyűjtsön az emberektől. A fő kérdések előtt egy úgynevezett "mini kérdőívet" kell kitöltenie a felhasználónak, ami segít megkülönböztetni azokat az embereket akik jártasak az aktuális témában. A rendszerben két szerepkör található: az admin és a látogató(felhasználó). Az látogató csak a kérdőív kitöltésére jogosult, azon változtatni nem tud. Az admin jogosultsággal rendelkezők szerkeszthetik a kérdőívet és megtekinthetik a megadott válaszokat. Az alkalmazás webes felületen lesz elérhető, így törekszünk arra ,hogy minél több böngészővel kompatibilis legyen.<br>

## 2. Project terv

A projektet weblapra fejlesztjük front- és backend segítségével. Az elkülönített feladatokon más-más emberek dolgoznak.
### Frontend fejlesztése HTML/CSS segítségével <br>
- Frontend felelős: Magos Balázs (JJ3NZ0)-HTML, CSS és oldal dizájn
A feladat célja, hogy egy letisztult, könnyen kezelhető, igényes weblapot nyújtson a felhasználó számára. <br>

- Backend felelős: Kémeri Martin (SSR0TI)-PHP és tesztelés
Feladata a háttérben működő programok megírása, PHP kód, és az eredmény kiértékelés. <br>

## 3. Követelmények<br>

- Webes megvalósítás.<br>
- A rendszer fejlesztése HTML/CSS valamint PHP segítségével történik.<br>
- A weblap felépítése, valamint dizájnolása a HTML/CSS nyelv implementálásával valósítandó meg.<br>
- A weboldal használatához egy egyszerű böngészőre van szükség.<br>
- Az adatok adatbázisban való tárolása.<br>
- Egy olyan felület elkészítése ahol az admin jogosultsággal rendelkezők szerkeszthetik az adott kérdőívet.<br>

## 4. Üzleti folyamatok modellje

A rendszer két különböző jogosultsággal rendelkezik: amellyek az admin és a látogató(felhasználó). A látogató csak a kérdőív megtekintésére és/vagy kitöltésére jogosult, míg az admin szerkesztheti a kérdőívet, vagy admin jogosultságot adhat az általa kiválasztott embereknek.<br>


![Megnevezetlen diagram drawio (3)](https://user-images.githubusercontent.com/113610538/200619751-c2213b8a-4989-456f-8ad6-408b20f690ee.png)


## 5. Funkcionális terv

## 6. Fizikai környezet

Az alkalmazás webes felületre, elsősorban (nagyobb képernyős eszközökre) asztali számítógépekre, laptopokra és táblagépekre készül, ezért a felhasználói élmény érdekében célszerű így használni, viszont elérhető okostelefonról és kisebb tabletről is.
A szerver oldalon PHP programnyelvet, felhasználó oldalon pedig HTML és CSS webtechnológiákat használunk. 
Adatbázist használunk az adatok tárolására.
A webalkalmazás használatához Internet kapcsolatra van szükség.

## 7. Architecturális terv

## 8. Teszt terv

## 9. Telepítési terv

Maga a kérdőív egy webszerveren lesz elérhető, így a kliens oldalon mindössze ennyinek kell szerepelnie: <br>

Egy böngésző amiben támogatott az adott weboldal elérése. (Google Chrome, Mozilla Firefox, Opera, stb.)
Webszerver eléréséhez internetkapcsolat szükségeltetik.
Elsősorban számítógépes környezet preferált, de reszponzív megoldás, telefonos megoldás működik.

## 10.Karbantartási terv

### A weboldal folyamatos üzemeltetése és karban tartása a következőket foglalja magában:<br>

- A felhasználók által bejelentett bugok, hibák kijavítása.<br>
- Igény esetén a kérdőív funkcióinak bővítése.<br>
- Igény esetén a kérdőív kérdéseinek bővítése.<br>
- A böngészők újabb verzióival való kompatibilitás.<br>
- A felhasználók bejelentkezési információinak megváltoztatása, illetve törlése.<br>

## 11. Adatbázis terv

## 12. Implementációs terv

- A webes alkalmazások előnyeit kihasználva nincs szükség kompatibilitásra, hiszen a php szerver oldalon fut.<br>
- A megjelenítéshez használt technológiák minimális követelményekkel rendelkeznek.<br>
- Maguk a kérdések egy form alapján lesznek megalkotva és a bennük lévő adatokat a PHP Post metódussal fogjuk a webszerver számára, onnan pedig az adatbázisba betölteni.<br>
- Az adatbázist a PHP által nyújtott MySQL adatbázis elérés eszközeivel fogjuk elérni (mint pl.: PDO vagy MySQLi).
