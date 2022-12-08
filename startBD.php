echo "\n startBD.php \n";
<?php 

echo "\n startBD.php \n";
function ZrobBaze() {
//CREATE database nazwa_bazy;
echo "\n ZrobBaze start";
    try{
        $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");
       // $mysqli->set_charset('utf8');
        $wynik = $con->query("CREATE DATABASE psw");
       
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
    
echo "\n ZrobBaze END";
} 
ZrobBaze();

function ZrobTabele() {

echo "\n Zrob Tabele start";
$BUTY = "
CREATE TABLE buty
(id INT NOT NULL AUTO_INCREMENT,
 nazwa VARCHAR(20) NOT NULL,
 cena FLOAT NOT NULL,
 ilosc INT NOT NULL,
 kategoria VARCHAR(20) NOT NULL,
 opis TEXT NOT NULL,
 fot1 TEXT NOT NULL,
 fot2 TEXT NULL,
 fot3 TEXT NULL,
 fot4 TEXT NULL,
 fot5 TEXT NULL,
 fot6 TEXT NULL,
 PRIMARY KEY (id))
 ENGINE = InnoDB;";
$TELEFONY = "
CREATE TABLE telefony
(id INT NOT NULL AUTO_INCREMENT,
 nazwa VARCHAR(20) NOT NULL,
 cena FLOAT NOT NULL,
 ilosc INT NOT NULL,
 kategoria VARCHAR(20) NOT NULL,
 opis TEXT NOT NULL,
 fot1 TEXT NOT NULL,
 fot2 TEXT NULL,
 fot3 TEXT NULL,
 fot4 TEXT NULL,
 fot5 TEXT NULL,
 fot6 TEXT NULL,
 PRIMARY KEY (id))
 ENGINE = InnoDB;";
$KOSZULKI = "
CREATE TABLE koszulki
(id INT NOT NULL AUTO_INCREMENT,
 nazwa VARCHAR(20) NOT NULL,
 cena FLOAT NOT NULL,
 ilosc INT NOT NULL,
 kategoria VARCHAR(20) NOT NULL,
 opis TEXT NOT NULL,
 fot1 TEXT NOT NULL,
 fot2 TEXT NULL,
 fot3 TEXT NULL,
 fot4 TEXT NULL,
 fot5 TEXT NULL,
 fot6 TEXT NULL,
 PRIMARY KEY (id))
 ENGINE = InnoDB;";
 
    try{
        $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");

        $con->query($BUTY);
        $con->query($TELEFONY);
        $con->query($KOSZULKI);
       
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
 
/*CREATE TABLE nazwa_tabeli
(id INT NOT NULL AUTO_INCREMENT,
 nazwa VARCHAR(20) NOT NULL,
 cena FLOAT NOT NULL,
 ilosc INT NOT NULL,
 kategoria VARCHAR(20) NOT NULL,
 opis TEXT NOT NULL,
 fot1 TEXT NOT NULL,
 fot2 TEXT NULL,
 fot3 TEXT NULL,
 fot4 TEXT NULL,
 fot5 TEXT NULL,
 fot6 TEXT NULL,
 PRIMARY KEY (id))
 ENGINE = InnoDB;*/
 
echo "\n Zrob Tabele END";

} 
ZrobTabele();

function WypelnijTabButy() {
try{
 echo"\n Rozpoczynam wypełnianie tabeli butów";
    
 //INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1') 
    $nazwa = "Buty cichobiezki";
	$cena = "421,12";
	$ilosc = "123";
	$kategoria = "buty";
	$opis = "Buty cichobieżki firmy Sandał, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. Buty cichobieżki firmy Sandał, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. Buty cichobieżki firmy Sandał, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. ";
	$fot1 = "pliki/but1.jpeg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg"; 
$but = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "But Zielony";
	$cena = "50,00";
	$ilosc = "312";
	$kategoria = "buty";
	$opis = "But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. ";
	$fot1 = "pliki/but.jpeg";
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg";  
$but1 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Roczny abonament na buty";
	$cena = "150,99";
	$ilosc = "56";
	$kategoria = "buty";
	$opis = "Abonament zapewniający dostępn do butów przez cały rok. Kiedy Ci się znudzą kto inny będzie je nosił, a Ty weźmiesz sobie następną parę. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Abonament zapewniający dostępn do butów przez cały rok. Kiedy Ci się znudzą kto inny będzie je nosił, a Ty weźmiesz sobie następną parę. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Abonament zapewniający dostępn do butów przez cały rok. Kiedy Ci się znudzą kto inny będzie je nosił, a Ty weźmiesz sobie następną parę. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/buty1.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg"; 
$but2 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Buty z nogami i kawałkiem dłoni";
	$cena = "332,34";
	$ilosc = "631";
	$kategoria = "buty";
	$opis = "Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b2.webp"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg"; 
$but3 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Cichobiegi z zabudową stopową";
	$cena = "367,98";
	$ilosc = "123";
	$kategoria = "buty";
	$opis = "Buty z wbudowanymi stopami z łydkami i kawałkiem deski. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b.jpeg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg"; 
$but4 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";



    $nazwa = "Buty i nogi gratis";
	$cena = "900,83";
	$ilosc = "123";
	$kategoria = "buty";
	$opis = "Buty z nogami, nogi opalone, dłoń do zakupu osobno. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b3.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg"; 
$but5 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Szpilki stopy osobno";
	$cena = "132,44";
	$ilosc = "431";
	$kategoria = "buty";
	$opis = "Buty z nogami, nogi opalone do zakupu osobno. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b5.jpg";
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg"; 
$but6 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Trampki do gry w kosza";
	$cena = "21,58";
	$ilosc = "467";
	$kategoria = "buty";
	$opis = "Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b6.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg";  
$but7 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";



    $nazwa = "Pancerne wojskowe trepy";
	$cena = "1234,56";
	$ilosc = "536";
	$kategoria = "buty";
	$opis = "Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b4.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg"; 
$but8 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Papucie";
	$cena = "35621,87";
	$ilosc = "456";
	$kategoria = "buty";
	$opis = "Papucie, papućki, papucieńki, papunie. Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b7.webp"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg";   
$but9 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Buty dziecięce - dziecko gratis";
	$cena = "99,99";
	$ilosc = "251";
	$kategoria = "buty";
	$opis = "Buty dziecięce - dziecko gratis. Papucie, papućki, papucieńki, papunie. Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej.";
	$fot1 = "pliki/b8.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg"; 
$but10 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Buty z skóry";
	$cena = "546,19";
	$ilosc = "543";
	$kategoria = "buty";
	$opis = "Buty dziecięce - dziecko gratis. Papucie, papućki, papucieńki, papunie. Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej.";
	$fot1 = "pliki/b9.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg"; 
$but11 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Wszysktie buty w sklepie";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "buty";
	$opis = "Wszysktie buty w sklepie. Buty dziecięce - dziecko gratis. Papucie, papućki, papucieńki, papunie. Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej.";
	$fot1 = "pliki/b10.jpeg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/but9.jpg"; 
	$fot4 = "pliki/but7.webp"; 
	$fot5 = "pliki/but8.jpg"; 
	$fot6 = "pliki/but4.jpg";  
$but12 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

$TabBut = array($but, $but1, $but2, $but3, $but4, $but5, $but6, $but7, $but8, $but9, $but10, $but11, $but12);
	
    try{
        $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");
        
        
            foreach ($TabBut as $val){
                try{
                    $con->query($val);            
                }catch (Exception $e1){
                    $er1 = $e1->getMessage();
                    echo "Błąd"+": "+$er1+" TabBut val= "+$val;
            }
       
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
      
 echo"\n kończę wypełnianie tabeli butów";
}catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
} 
WypelnijTabButy();

function WypelnijTabKoszulki() {
try{
 echo"\n Rozpoczynam wypełnianie tabeli koszulek";

    $nazwa = "Koszulki małżeńskie";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie ";
	$fot1 = "pliki/k1.jpg"; 
	$fot2 = "pliki/k.jpeg"; 
	$fot3 = "pliki/k2.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k4.jpg"; 
	$fot6 = "pliki/k2.jpeg";  
$koszulka = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka pakera";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera ";
	$fot1 = "pliki/k2.jpg"; 
	$fot2 = "pliki/k.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k4.jpg";  
$koszulka1 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka oryginalna bo droga";
	$cena = "3234,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga ";
	$fot1 = "pliki/k.jpeg"; 
	$fot2 = "pliki/k.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k.jpg";  
$koszulka2 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka maskująca";
	$cena = "1134,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca ";
	$fot1 = "pliki/k3.jpeg"; 
	$fot2 = "pliki/k.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpeg"; 
	$fot6 = "pliki/k.jpg";  
$koszulka3 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka z kobietą ";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. ";
	$fot1 = "pliki/k4.jpg"; 
	$fot2 = "pliki/k3.jpeg"; 
	$fot3 = "pliki/k.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k1.jpg"; 
	$fot6 = "pliki/k2.jpg";  
$koszulka4 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka patriotyczna ";
	$cena = "334,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. ";
	$fot1 = "pliki/k5.jpg"; 
	$fot2 = "pliki/k3.jpeg"; 
	$fot3 = "pliki/k.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k4.jpg"; 
	$fot6 = "pliki/k1.jpg";  
$koszulka5 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka z obrazkiem wszystkiego";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka z obrazkiem wszystkiego Koszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiego";
	$fot1 = "pliki/k2.jpeg"; 
	$fot2 = "pliki/k3.jpeg"; 
	$fot3 = "pliki/k.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k1.jpg"; 
	$fot6 = "pliki/k2.jpg";  
$koszulka6 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulki piguły";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki piguły";
	$fot1 = "pliki/k6.webp"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k.jpg"; 
	$fot6 = "pliki/k2.jpg";  
$koszulka7 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka faceta co mieszka z zołzą";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołzą";
	$fot1 = "pliki/k7.png"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k.jpg";  
$koszulka8 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka bojkotu wyborów";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborów";
	$fot1 = "pliki/k8.jpg"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k.jpg";   
$koszulka9 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Koszulka z wilkiem";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiem";
	$fot1 = "pliki/k9.jpg"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k8.jpg";   
$koszulka10 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka mortal kombat";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombat";
	$fot1 = "pliki/k10.webp"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k10.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k9.jpg";  
$koszulka11 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka nocan fajna bo prześwituje";
	$cena = "34,00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwituje";
	$fot1 = "pliki/k3.jpeg"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k8.jpg";    
$koszulka12 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	$TabShirt = array($koszulka, $koszulka1, $koszulka2, $koszulka3, $koszulka4, $koszulka5, $koszulka6, $koszulka7, $koszulka8, $koszulka9, $koszulka10, $koszulka11, $koszulka12);
	
    try{
        $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");
       
            foreach ($TabShirt as $val){
                try{
                    $con->query($val);            
                }catch (Exception $e1){
                    $er1 = $e1->getMessage();
                    echo "Błąd"+": "+$er1+" TabShirt val= "+$val;
                }
            }
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
    
 echo"\n kończę wypełnianie tabeli koszulek";
}catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
}
WypelnijTabKoszulki();

function WypelnijTabTelefony() {
try{
 echo"\n Rozpoczynam wypełnianie tabeli telefonów";
 
    $nazwa = "Pancerny telefon";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych ";
	$fot1 = "pliki/t1.jpeg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Drewniany telefon";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych ";
	$fot1 = "pliki/t2.jpeg"; 
	$fot2 = "pliki/t1.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon1 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "XPeria prawie nowa";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna ";
	$fot1 = "pliki/t3.jpeg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t1.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon2 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon 4w1";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko ";
	$fot1 = "pliki/t4.jpeg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t1.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon3 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Pancerny smartfon ";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon ";
	$fot1 = "pliki/t4.png"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon4 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon małżeński ";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński ";
	$fot1 = "pliki/t5.jpg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t4.png";    
$telefon5 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon wyginam śmiało ciało";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciało";
	$fot1 = "pliki/t6.png"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon6 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon przeźroczysty";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczysty";
	$fot1 = "pliki/t7.jpg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon7 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Historyczny SmartPHone";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Historyczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHone";
	$fot1 = "pliki/t8.jpeg"; 
	$fot2 = "pliki/t7.jpg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon8 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon z grą ";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku ";
	$fot1 = "pliki/t10.jpg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t8.jpg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon9 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Zestaw telefonów";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Zestaw telefonów w abonamecie. Zestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonów";
	$fot1 = "pliki/t11.jpg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon10 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Gangsterski telefon";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Gangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefon";
	$fot1 = "pliki/t12.png"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon11 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Jakiś takiś ale smart";
	$cena = "934,55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Jakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smart";
	$fot1 = "pliki/t1.webp"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon12 = "INSERT INTO tabela (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


	
$TabTel = array($telefon, $telefon1, $telefon2, $telefon3, $telefon4, $telefon5, $telefon6, $telefon7, $telefon8, $telefon9, $telefon10, $telefon11, $telefon12);	
    try{
        $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");
        
        
            foreach ($TabTel as $val){
                try{
                    $con->query($val);            
                }catch (Exception $e1){
                    $er1 = $e1->getMessage();
                    echo "Błąd"+": "+$er1+" TelTab val= "+$val;
                }
            }
       
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
 echo"\n kończę wypełnianie tabeli telefonów";
}catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
}
WypelnijTabTelefony();

 /*
 INSERT INTO tabela (id, nazwa, ilosc) VALUES (NULL, 'NazwaProduktu', '123'), (NULL, 'NazwaProduktu', '321')

    $host = 'localhost';
	$database = 'nazwa_db';
	$user = 'root';
	$password = '';

    //dodatkowy scrypt z powyższymi danymi logowania do bazy itp potrzebnymi rzeczami
    require ('config.php');

	// Create a connection string
	$database_connection = "mysql:host=$host;dbname=$database;charset=UTF8";

	// Create a new PDO instance
	$pdo = new PDO($database_connection, $user, $password);

	// Prepare a SQL statement
	$statement = $pdo->prepare('SELECT name, color FROM fruit');

	// Execute the statement
	$statement->execute();

    // Fetch the results
    print("Fetch the result set:\n");
    $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
    print "<pre>";
    print_r($result);
    print "</pre>";

*/



?>
