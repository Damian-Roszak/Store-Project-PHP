<?php

function WypelnijTabTelefony() {
try{
 echo"<br> Rozpoczynam wypełnianie tabeli telefonów";
 
    
    $host = 'localhost';
	$database = 'psw';
	$user = 'root';
	$password = '';
	
$database_connection = "mysql:host=$host;dbname=$database;charset=UTF8";
	$dbh1 = "mysql:host=$host;dbname=$database;charset=UTF8";

	$dbh = new PDO($dbh1, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET CHARACTER SET utf8");
    
    
    
    $nazwa = "Pancerny telefon";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych Pancerny telefon do zadań specjalnych ";
	$fot1 = "pliki/t1.jpeg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Drewniany telefon";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych Drewniany Pancerny telefon do zadań specjalnych ";
	$fot1 = "pliki/t2.jpeg"; 
	$fot2 = "pliki/t1.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon1 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "XPeria prawie nowa";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna XPeria prawie nowa, ale jescze fajna ";
	$fot1 = "pliki/t3.jpeg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t1.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon2 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon 4w1";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko Telefon 4w1: telefon + popielniczka + mydelniczka + lusterko ";
	$fot1 = "pliki/t4.jpeg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t1.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon3 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Pancerny smartfon ";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon Pancerny smartfon ";
	$fot1 = "pliki/t4.png"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon4 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon małżeński ";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński Telefon małżeński ";
	$fot1 = "pliki/t5.jpg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t4.png";    
$telefon5 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon wyginam śmiało ciało";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciałoTelefon wyginam śmiało ciało";
	$fot1 = "pliki/t6.png"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon6 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon przeźroczysty";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczystyTelefon przeźroczysty";
	$fot1 = "pliki/t7.jpg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon7 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Historyczny SmartPHone";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Historyczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHoneHistoryczny SmartPHone";
	$fot1 = "pliki/t8.jpeg"; 
	$fot2 = "pliki/t7.jpg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon8 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Telefon z grą ";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku Telefon z grą w środku ";
	$fot1 = "pliki/t10.jpg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t8.jpg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon9 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Zestaw telefonów";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Zestaw telefonów w abonamecie. Zestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonówZestaw telefonów";
	$fot1 = "pliki/t11.jpg"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon10 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Gangsterski telefon";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Gangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefonGangsterski telefon";
	$fot1 = "pliki/t12.png"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon11 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";

    $nazwa = "Jakiś takiś ale smart";
	$cena = "934.55";
	$ilosc = "555";
	$kategoria = "Telefony";
	$opis = "Jakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smartJakiś takiś ale smart";
	$fot1 = "pliki/t1.webp"; 
	$fot2 = "pliki/t2.jpeg"; 
	$fot3 = "pliki/t3.jpeg"; 
	$fot4 = "pliki/t1.webp"; 
	$fot5 = "pliki/t4.jpeg"; 
	$fot6 = "pliki/t5.jpg";    
$telefon12 = "INSERT INTO telefony (id, nazwa, cena, ilosc, kategoria, opis, fot1, fot2, fot3, fot4, fot5, fot6) VALUES (NULL, '$nazwa', '$cena', '$ilosc', '$kategoria', '$opis', '$fot1', '$fot2', '$fot3', '$fot4', '$fot5', '$fot6')";


	
$TabTel = array($telefon, $telefon1, $telefon2, $telefon3, $telefon4, $telefon5, $telefon6, $telefon7, $telefon8, $telefon9, $telefon10, $telefon11, $telefon12);	
    try{
        $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");
        
        
            foreach ($TabTel as $val){
                try{
                    echo "<br> dodaję $val<br>";
                    $sth = $dbh->prepare($val);
                    $sth->execute();              
                }catch (Exception $e1){
                    $er1 = $e1->getMessage();
                    echo "Błąd"+": "+$er1+" TelTab val= "+$val;
                }
            }
       
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
 echo"<br> kończę wypełnianie tabeli telefonów";
}catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
}
WypelnijTabTelefony();


?>
