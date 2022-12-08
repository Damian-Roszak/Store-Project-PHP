<?php
//index.php
session_start();

require('funkcje_ksiazka_kz.php');
tworz_naglowek_html('Witamy w ksiegarni');
echo 'wybierz kategorie';
$tablica_kat = pobierz_kategorie();

wyswietl_kategorie($tablica_kat);

if(isset($_SESSION['uzyt_admin'])){
    wyswietl_przycisk('admin.php', 'menu-admin', 'Menu Administratora');
}
tworz_stopke_html();
?>

<?php
function pobierz_kategorie(){
    $lacz = $lacz_bd();
    $zapytanie = 'select idkat, nazwakat from kategorie';
    $wynik = @$lacz->query($zapytanie);
    if(!$wynik) return false;
    $ilosc_kat = @$wynik->num_rows;
    if($ilosc_kat == 0) return false;
    $wynik = wynik_bd_do_tablicy($wynik);
    return $wynik;
}

function wynik_bd_do_tablicy($wynik){
    $tablica_wyn = arra();
    for ($licznik = 0; $rzad = $wynik->fetch_assoc(); $licznik++)
        $tablica_wyn[$licznik] = $rzad;
        
    return $tablica_wyn;
}
  
function wyswietl_kategorie($tablica_kat){
    if(!is_array($tablica_kat)){
        echo 'brak kategori';
        return;
    }
    foreach($tablica_kat as $rzad){
        $url = 'pokaz_kat.php?idkat='.($rzad['idkat']);
        $tytul = $rzad['nazwakat'];
        tworz_html_url($url, $tytul);
    }
}

?>

<?php
//pokaz_kat.php
require('funkcje_ksiazka_kz.php');
session_start();

$idkat = $_GET['idkat'];
$nazwa = pobierz_kategorii($idkat);

tworz_naglowek_html($nazwa);

$tablica_ksiazek = pobierz_ksiazki($idkat);

wyswietl_ksiazki($tablica_ksiazek);

if(isset($_SESSION['uzyt_admin'])){
    wyswietl_przycisk('indeks.php', 'kontynuacja', 'kontynuacja zakupów');
    wyswietl_przycisk('admin.php', 'menu-admin', 'Menu Administratora');
    wyswietl_przycisk("edycja_kat_form.php.php?idkat=$idkat", 'edycja-kategorii', 'edycja kategorii');
}
else
    wyswietl_przycisk('indeks.php', 'kontynuacja', 'kontynuacja zakupów');
    
tworz_stopke_html();

?>

<?php
//funkcje_ksiazki.php
function pobierz_nazwe_kategorii($idkat){
    $idkat = intval($idkat);
    $lacz = lacz_bd();
    $zapytanie = "select nazwakat from kategorie where idkat = $idkat";
    $wynik = @$lacz->query($zapytanie);
    if(!$wynik) return false;
    $ilosc_kat = @$wynik->num_rows;
    if($ilosc_kat == 0 ) return false;
    $rzad = $wynik->fetch_object();
    return $rzad->nazwakat;
}
?>

<?php
//pokaz_ksiazke.php
inlude('funkcje_ksiazka_kz.php');
session_start();

$isbn = $_GET['isbn'];

$ksiazka = pobierz_dane_ksiazki($isbn);
tworz_naglowek_html($ksiazka['tytul']);
wyswietl_dane_ksiazki($ksiazki);

$cel = 'indeks.php';
if($ksiazka['idkat']){
    $cel = 'pokaz_kat.php?idkat='.$ksiazka['idkat'];
}

if(sprawdz_uzyt_admin() ){
    wyswietl_przycisk("edycja_ksiazki_form.php?isbn=$isbn", 'edycja-produktu', 'edycja produktu');
    wyswietl_przycisk('admin.php', 'menu-admin', 'Menu Administratora');
    wyswietl_przycisk($cel, 'kontynuacja', 'kontynuacja zakupów');
}
else{
    wyswietl_przycisk("pokaz_kosz.php?nowy=$isbn", 'dodaj-do-koszyka', 'Dodaj ', $ksiazka['tytul'], 'do koszyka na zakupy');
    wyswietl_przycisk($cel, 'kontynuacja', 'kontynuacja zakupów');
}

    
tworz_stopke_html();
}

?>


<?php
//pokaz_kosz.php
require('funkcje_ksiazka_kz.php');
session_start();

@ $nowy = $_GET['nowy'];
if($nowy){
    if(!isset($_SESSION['koszyk'])){
         $_SESSION['koszyk'] = array();
         $_SESSION['produkty'] = 0;
         $_SESSION['calkowita_wartosc'] = '0.00';
    }
    if(!isset($_SESSION['koszyk']['nowy']))
        $_SESSION['koszyk']['nowy']++;
    else
        $_SESSION['koszyk']['nowy'] = 1;
    $_SESSION['calkowita_wartosc'] = oblicz_wartosc($_SESSION['koszyk']);
    $_SESSION['produkty'] = oblicz_produkty($_SESSION['koszyk']);
}
if(isset($_POST['zapisz'])){
    foreach ($_SESSION['koszyk'] as $isbn => $ilosc)
    {
        if($_POST[$isbn]=='0')
            unset($_SESSION['koszyk'][$isbn]);
        else
            $_SESSION['koszyk'][$isbn] = $_POST[$isbn];
    }
     $_SESSION['calkowita_wartosc'] = oblicz_wartosc($_SESSION['koszyk']);
     $_SESSION['produkty'] = oblicz_produkty($_SESSION['koszyk']);
}
tworz_naglowek_html('koszyk na zakupy');
if($_SESSION['koszyk']&&array_count_values($_SESSION['koszyk']))
    wyswietl_koszyk($_SESSION['koszyk']);
else{
    echo'koszyk jest pusty';
}
$cel = 'indeks.php';
if($nowy){
    $dane = pobierz_dane_ksiazki($nowy);
    if($dane['idkat'])
        $cel = 'pokaz_kat.php?idkat='.$dane['idkat'];
}
wyswietl_przycisk($cel, 'kontynuacja', 'kontynuacja zakupów');

wyswietl_przycisk('kasa.php', 'idz-do-kasy', 'idz do kasy');

tworz_stopke_html();

?>

<?php
//funkcje_wyswietl.php
function wyswietl_koszyk($koszyk, $zmiana = true, $obrazki = 1){
    foreach($koszyk as $isbn => $ilosc){
        $ksiazka = pobierz_dane_ksiazki($isbn);
        if($obrazki == true){
          if(file_exist("pliki/$isbn")){
                $wielkosc = GetImageSize('pliki/'.$isbn);
                if($wielkosc[0]>0 && $wielkosc[1]>0){
                    echo '<img src="pliki/'.$isbn.'>';
                }
            }else 
                echo '&nbsp;';
          }
        
    }
    if($zmiana==true)
    
}


?>


<?php

?>


<?php

?>


<?php

?>

















