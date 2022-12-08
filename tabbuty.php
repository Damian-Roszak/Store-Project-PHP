<?php

function WypelnijTabButy() {
try{
 echo"<br> Rozpoczynam wypełnianie tabeli butów <br>";
    
    
    $host = 'localhost';
	$database = 'psw';
	$user = 'root';
	$password = '';
	
$database_connection = "mysql:host=$host;dbname=$database;charset=UTF8";
	$dbh1 = "mysql:host=$host;dbname=$database;charset=UTF8";

	$dbh = new PDO($dbh1, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET CHARACTER SET utf8");

    
 //INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1') 
    $nazwa = "Buty cichobiezki";
	$cena = "421.12";
	$ilosc = "123";
	$kategoria = "buty";
	$opis = "Buty cichobieżki firmy Sandał, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. Buty cichobieżki firmy Sandał, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. Buty cichobieżki firmy Sandał, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. ";
	$fot1 = "pliki/but1.jpeg"; 
	$fot2 = "pliki/b1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg"; 
$but = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "But Zielony";
	$cena = "50.00";
	$ilosc = "312";
	$kategoria = "buty";
	$opis = "But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty buty butki buteczki butunie butuńki butunieczki butusie. ";
	$fot1 = "pliki/but.jpeg";
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg";  
$but1 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Roczny abonament";
	$cena = "150.99";
	$ilosc = "56";
	$kategoria = "buty";
	$opis = "Abonament zapewniający dostępn do butów przez cały rok. Kiedy Ci się znudzą kto inny będzie je nosił, a Ty weźmiesz sobie następną parę. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Abonament zapewniający dostępn do butów przez cały rok. Kiedy Ci się znudzą kto inny będzie je nosił, a Ty weźmiesz sobie następną parę. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Abonament zapewniający dostępn do butów przez cały rok. Kiedy Ci się znudzą kto inny będzie je nosił, a Ty weźmiesz sobie następną parę. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg"; 
$but2 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Buty z nogami i kawałkiem dłoni";
	$cena = "332.34";
	$ilosc = "631";
	$kategoria = "buty";
	$opis = "Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b2.webp"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg"; 
$but3 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Cichobiegi z zabudową stopową";
	$cena = "367.98";
	$ilosc = "123";
	$kategoria = "buty";
	$opis = "Buty z wbudowanymi stopami z łydkami i kawałkiem deski. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b.jpeg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg"; 
$but4 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";



    $nazwa = "Buty i nogi gratis";
	$cena = "900.83";
	$ilosc = "123";
	$kategoria = "buty";
	$opis = "Buty z nogami, nogi opalone, dłoń do zakupu osobno. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b3.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg"; 
$but5 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Szpilki stopy osobno";
	$cena = "132.44";
	$ilosc = "431";
	$kategoria = "buty";
	$opis = "Buty z nogami, nogi opalone do zakupu osobno. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b5.jpg";
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg"; 
$but6 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Trampki do gry w kosza";
	$cena = "21.58";
	$ilosc = "467";
	$kategoria = "buty";
	$opis = "Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b6.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg";  
$but7 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";



    $nazwa = "Pancerne wojskowe trepy";
	$cena = "1234.56";
	$ilosc = "536";
	$kategoria = "buty";
	$opis = "Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b4.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg"; 
$but8 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Papucie";
	$cena = "35621.87";
	$ilosc = "456";
	$kategoria = "buty";
	$opis = "Papucie, papućki, papucieńki, papunie. Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. ";
	$fot1 = "pliki/b7.webp"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg";   
$but9 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Buty dziecięce - dziecko gratis";
	$cena = "99.99";
	$ilosc = "251";
	$kategoria = "buty";
	$opis = "Buty dziecięce - dziecko gratis. Papucie, papućki, papucieńki, papunie. Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej.";
	$fot1 = "pliki/b8.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg"; 
$but10 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Buty z skóry";
	$cena = "546.19";
	$ilosc = "543";
	$kategoria = "buty";
	$opis = "Buty dziecięce - dziecko gratis. Papucie, papućki, papucieńki, papunie. Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej.";
	$fot1 = "pliki/b9.jpg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg"; 
$but11 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Wszysktie buty w sklepie";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "buty";
	$opis = "Wszysktie buty w sklepie. Buty dziecięce - dziecko gratis. Papucie, papućki, papucieńki, papunie. Pancerne wojskowe trepy. Buty Trampki do gry w kosza bez nóg. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej. Buty z wbudowanymi stopami z łydkami i kawałkiem dłoni. Buty buty butki buteczki butunie butuńki butunieczki butusie. But zielony jeden dla osób, które zgubiły drugiego, przeniosą Cię wszędzie tam gdzie chcesz i dużo dalej.";
	$fot1 = "pliki/b10.jpeg"; 
	$fot2 = "pliki/but1.jpeg"; 
	$fot3 = "pliki/b9.jpg"; 
	$fot4 = "pliki/b7.webp"; 
	$fot5 = "pliki/b8.jpg"; 
	$fot6 = "pliki/b4.jpg";  
$but12 = "INSERT INTO buty (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

$TabBut = array($but, $but1, $but2, $but3, $but4, $but5, $but6, $but7, $but8, $but9, $but10, $but11, $but12);
	
    try{
        $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");
        
        
            foreach ($TabBut as $val){
                try{
                    echo "<br> dodaję $val<br>";
                    $sth = $dbh->prepare($val);
                    $sth->execute();          
                }catch (Exception $e1){
                    $er1 = $e1->getMessage();
                    echo "Błąd"+": "+$er1+" TabBut val= "+$val;
                }
            }
       
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
      
 echo"<br> kończę wypełnianie tabeli butów";
}catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
} 
WypelnijTabButy();



?>
