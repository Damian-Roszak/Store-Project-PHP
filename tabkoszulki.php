<?php

function WypelnijTabKoszulki() {
try{
 echo"<br> Rozpoczynam wypełnianie tabeli koszulek";

    
    $host = 'localhost';
	$database = 'psw';
	$user = 'root';
	$password = '';
	
$database_connection = "mysql:host=$host;dbname=$database;charset=UTF8";
	$dbh1 = "mysql:host=$host;dbname=$database;charset=UTF8";

	$dbh = new PDO($dbh1, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET CHARACTER SET utf8");
    
    
    
    $nazwa = "Koszulki małżeńskie";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie Koszulki małżeńskie ";
	$fot1 = "pliki/k1.jpg"; 
	$fot2 = "pliki/k.jpeg"; 
	$fot3 = "pliki/k2.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k4.jpg"; 
	$fot6 = "pliki/k2.jpeg";  
$koszulka = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka pakera";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera Koszulka pakera ";
	$fot1 = "pliki/k2.jpg"; 
	$fot2 = "pliki/k.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k4.jpg";  
$koszulka1 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka oryginalna bo droga";
	$cena = "3234.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga Koszulka oryginalna bo droga ";
	$fot1 = "pliki/k.jpeg"; 
	$fot2 = "pliki/k.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k.jpg";  
$koszulka2 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka maskująca";
	$cena = "1134.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca Koszulka maskująca ";
	$fot1 = "pliki/k3.jpeg"; 
	$fot2 = "pliki/k.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpeg"; 
	$fot6 = "pliki/k.jpg";  
$koszulka3 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka z kobietą ";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. Koszulka z kobietą, kobieta gratis. ";
	$fot1 = "pliki/k4.jpg"; 
	$fot2 = "pliki/k3.jpeg"; 
	$fot3 = "pliki/k.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k1.jpg"; 
	$fot6 = "pliki/k2.jpg";  
$koszulka4 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka patriotyczna ";
	$cena = "334.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. Koszulka patriotyczna kobieta gratis. ";
	$fot1 = "pliki/k5.jpg"; 
	$fot2 = "pliki/k3.jpeg"; 
	$fot3 = "pliki/k.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k4.jpg"; 
	$fot6 = "pliki/k1.jpg";  
$koszulka5 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka z obrazkiem wszystkiego";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka z obrazkiem wszystkiego Koszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiegoKoszulka z obrazkiem wszystkiego";
	$fot1 = "pliki/k2.jpeg"; 
	$fot2 = "pliki/k3.jpeg"; 
	$fot3 = "pliki/k.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k1.jpg"; 
	$fot6 = "pliki/k2.jpg";  
$koszulka6 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulki piguły";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki pigułyKoszulki piguły";
	$fot1 = "pliki/k6.webp"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k.jpg"; 
	$fot6 = "pliki/k2.jpg";  
$koszulka7 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka faceta co mieszka z zołzą";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołząKoszulka faceta co mieszka z zołzą";
	$fot1 = "pliki/k7.png"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k.jpg";  
$koszulka8 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka bojkotu wyborów";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborówKoszulka bojkotu wyborów";
	$fot1 = "pliki/k8.jpg"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k.jpg";   
$koszulka9 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Koszulka z wilkiem";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiemKoszulka z wilkiem";
	$fot1 = "pliki/k9.jpg"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k8.jpg";   
$koszulka10 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	
    $nazwa = "Koszulka mortal kombat";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombatKoszulka mortal kombat";
	$fot1 = "pliki/k10.webp"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k10.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k9.jpg";  
$koszulka11 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


    $nazwa = "Koszulka nocan fajna bo prześwituje";
	$cena = "34.00";
	$ilosc = "1432";
	$kategoria = "Koszulki";
	$opis = "Koszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwitujeKoszulka nocan fajna bo prześwituje";
	$fot1 = "pliki/k3.jpeg"; 
	$fot2 = "pliki/k2.jpeg"; 
	$fot3 = "pliki/k1.jpg"; 
	$fot4 = "pliki/k6.webp"; 
	$fot5 = "pliki/k2.jpg"; 
	$fot6 = "pliki/k8.jpg";    
$koszulka12 = "INSERT INTO koszulki (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

	$TabShirt = array($koszulka, $koszulka1, $koszulka2, $koszulka3, $koszulka4, $koszulka5, $koszulka6, $koszulka7, $koszulka8, $koszulka9, $koszulka10, $koszulka11, $koszulka12);
	
    try{
        $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");
       
            foreach ($TabShirt as $val){
                try{
                    echo "<br> dodaję $val<br>";
                    $sth = $dbh->prepare($val);
                    echo "<br> środek $val<br>"; 
                    $sth->execute();         
                    echo "<br> po dodaniu $val<br>";    
                }catch (Exception $e1){
                    $er1 = $e1->getMessage();
                    echo "Błąd"+": "+$er1+" TabShirt val= "+$val;
                }
            }
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
    
 echo"<br> kończę wypełnianie tabeli koszulek";
}catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
}
WypelnijTabKoszulki();



?>
