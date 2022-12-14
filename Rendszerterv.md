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

### Rendszerszereplők:
- Admin <br>
- Látogató <br>

### Rendszerhasználati esetek és lefutásuk:
 Adminisztrátor:

- Teljes hozzáférése van a rendszerhez <br>
- Adatbázis tartalmát látthatja, válltoztathatja <br>
- Felhasználói adatok módosítása <br>
- Kérdések hozzáadása/törlése/válltoztatása <br>

 Látogató:
- Ki kell tölteni a válaszokat, nem lehet átugorni <br>
- A végén beküldi a válaszait <br>


## 6. Fizikai környezet

Az alkalmazás webes felületre, elsősorban (nagyobb képernyős eszközökre) asztali számítógépekre, laptopokra és táblagépekre készül, ezért a felhasználói élmény érdekében célszerű így használni, viszont elérhető okostelefonról és kisebb tabletről is.
A szerver oldalon PHP programnyelvet, felhasználó oldalon pedig HTML és CSS webtechnológiákat használunk. 
Adatbázist használunk az adatok tárolására.
A webalkalmazás használatához Internet kapcsolatra van szükség.

## 7. Architecturális terv
A szoftver maga weboldalon fog megjelenni, így ebben az esetben az architektúráját két külön részre bontjuk szét.
Az egyik része a Bakckend a másik pedig a Frontend lesz.
A felhasználó kliens ezek közül csak a Frontend részével fog találkozni, míg a Backend része a webszerver adatbázisán fogja a vizsgálatokat végrehajtani.

### A Backend részhez szükséges:
- Adatbázis szerver, a szoftver ehhez a MySQL adatbázist fogja használni. <br>
- Kliensekkel kommunikáló szövegek. <br>

### A Frontend részéhez:
- A kérdőív felépítésének ábrázolása HTML és CSS kóddal. <br>
- Kliens elérése a webszerverhez. <br>
- PHP funkciók hozzáadása <br>

## 8. Teszt terv

A tesztelés az alkalmazás fejlesztés egyik, hanem a legfontosabb mellékteendője, mivel ezekből a tesztekből derül ki,
hogy mik vannak teljesen készen, és miket kell a későbbiekben javítani. Ezeket a teszteket a fejlsztők hajtják végre, általában a saját részükön, hogy pontosan tudják,
hogy hol keressék az esetleges hibákat.

- Az tesztelési a fejlesztéssel párhuzamosan, funkciók elkészítését követően, az oldal építése közben történik mind ameddig el nem jutunk egy szinte kész állapotba, amit az alpha teszt követ. <br>

- Az alpha tesztet a fejlesztő csapat fogja elvégezni, ekkor a funkciók, különboző böngészői környezetekben hogyan viselkedik az oldal. Amennyiben ez a könyvelt tesztelési folyamat lezárul következik az béta teszt. <br>


## 9. Telepítési terv

Maga a kérdőív egy webszerveren lesz elérhető, így a kliens oldalon mindössze ennyinek kell szerepelnie: <br>

- Egy böngésző amiben támogatott az adott weboldal elérése. (Google Chrome, Mozilla Firefox, Opera, stb.) <br>
- Webszerver eléréséhez internetkapcsolat szükségeltetik. <br>
- Elsősorban számítógépes környezet preferált, de reszponzív megoldás, telefonos megoldás működik. <br>

## 10.Karbantartási terv

### A weboldal folyamatos üzemeltetése és karban tartása a következőket foglalja magában:<br>

- A felhasználók által bejelentett bugok, hibák kijavítása.<br>
- Igény esetén a kérdőív funkcióinak bővítése.<br>
- Igény esetén a kérdőív kérdéseinek bővítése.<br>
- A böngészők újabb verzióival való kompatibilitás.<br>
- A felhasználók bejelentkezési információinak megváltoztatása, illetve törlése.<br>

## 11. Adatbázis terv


![Megnevezetlen diagram drawio](https://user-images.githubusercontent.com/113610878/204733314-fa1f5ba2-0a56-4ca5-b4e7-4ec3cdd0228c.png)



## 12. Implementációs terv

- A webes alkalmazások előnyeit kihasználva nincs szükség kompatibilitásra, hiszen a php szerver oldalon fut.<br>
- A megjelenítéshez használt technológiák minimális követelményekkel rendelkeznek.<br>
- Maguk a kérdések egy form alapján lesznek megalkotva és a bennük lévő adatokat a PHP Post metódussal fogjuk a webszerver számára, onnan pedig az adatbázisba betölteni.<br>
- Az adatbázist a PHP által nyújtott MySQL adatbázis elérés eszközeivel fogjuk elérni (mint pl.: PDO vagy MySQLi).
