<?php
session_start();
    $host = 'localhost';
	$database = 'psw';
	$user = 'root';
	$password = '';
	
	$dbh1 = "mysql:host=$host;dbname=$database;charset=UTF8";

	$dbh = new PDO($dbh1, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET CHARACTER SET utf8");
try{    
    $sql = "SELECT * FROM telefony WHERE id='1'";
    $sth = $dbh->prepare($sql);
    $sth->execute();          
    $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
    print "<pre>";
   // print_r($result);
    //echo "<BR>REZULTAT:=".$result[0]['opis'];
    print "</pre>";
}catch (Exception $e){
    $er = $e->getMessage();
    echo $er;
}


?>

<html>
<head>
<title>Sklep internetowy - widok produktu telefon</title>
<meta charset="UTF-8">
<link id="csslink" rel="stylesheet" type="text/css" href="styl.css" />
<link rel="stylesheet" media="screen and (min-width: 524px)" href="desktop.css">
<link rel="stylesheet" media="screen and (min-width: 524px)" href="fotoProdDesktop.css">

<link rel="stylesheet" media="screen and (max-width: 523px)" href="mobile.css">
<link rel="stylesheet" media="screen and (max-width: 523px)" href="fotoProdMobile.css">
</head>

<body>
<div id="top">
    <a id="kontakt" href="kontakt.php">Kontakt</a>
    <span id="top-at-right">
        <a id="zaloguj" href="login.php">Zaloguj się</a>
      <span id="rejestr"><a id="rejestracja" href="register.php">  Zarejestruj się</a></span>
    </span>
</div>
<div id="baner">
    <a href="index.php"><img id="imgBaner" src="pliki/logo.png"></a>
</div>
<div class="top-right">
   <span class="nav-right"> 
    <form>
        <input id="szukajka" type="" name="szukaj"></input>
        <button type="submit" class="szukBut" width="10px" height="10px"></button>
    </form>
        <a id="kosz" href="koszyk.php">
            <img src="pliki/c1.jpg">
            <span>Koszyk (<?php echo $_SESSION["koszyk"]; ?>)</span>
        </a>
    </span> 
</div>
<div class="top-right">
    <span class="nav-right">
        <a href="index.php">Strona główna</a>
        <a href="kubki.php">Kubki</a>
        <a href="telefony.php">Telefony</a>
        <a href="buty.php">Buty</a>
        <a href="koszulki.php">Koszulki</a>
    </span>
</div>
<div id="content">
<?php
  echo'<div class="foto">
      <span class="new">nowość</span>
        <img class="mainFoto" max-width="600px" max-height="400px" src="'.$result[0]["fot1"].'"><br>
        <img class="f1 f" width="140px" height="100px" src="'.$result[0]["fot2"].'">
        <img class="f2 f" width="140px" height="100px" src="'.$result[0]["fot3"].'">
        <img class="f3 f" width="140px" height="100px" src="'.$result[0]["fot4"].'">
        <img class="f4 f" width="140px" height="100px" src="'.$result[0]["fot5"].'">
    </div>
    
    <div class="panel-prawy">
            <div class="tytulCena">
                <span id="tytul">'.$result[0]["nazwa"].'</span>
                <span id="cena">'.$result[0]["cena"].'</span>
                <div id="ileKoszyk">
                    <form id="formButton">
                        <input id="ile" placeholder="1" type="number" step="1" min="1">
                        <button class="doKoszykaDuzy">DODAJ DO KOSZYKA</button>
                    </form>
                </div>
            
            </div>
            
            <div class="socialmedia">
                 <span>Udostępnij</span><img src="pliki/mediasocial.png">
            </div>
            <div class="ex1">
                <a href="#opis">Opis</a><a href="#detale">Szczegóły produktu</a>
            </div>
            <div class="blokOpisu">
                <div id="opis">
                   <span class="nfo"> '.$result[0]["opis"].'</span>
                </div>                
                
                <div id="detale">
                    <div class="ex1"> '.$result[0]["opis"].'</div>
                </div>
            </div>
    </div>';
?>
</div>
    
<div id="stopkaM">
        <div class="stopka-elementM">
                <a href="#help" class="nagA">Pomoc:<img class="arr" src="pliki/a.jpg"></a>
                <div id="help">
                    <p>
                            <a href="">Regulamin</a><br><br>
                            <a href="">Polityka prywatności</a><br><br>
                            <a href="">Zwroty i reklamacje</a>
                    </p>
                </div>
        </div>
        
        <div class="stopka-elementM">
            <a href="#mojeKonto" class="nagA">Moje konto:<img class="arr" src="pliki/a.jpg"></a>
             <div id="mojeKonto">
                 <p class="p2">
                    <a href="">Moje zamówienia</a><br><br>
                    <a href="">Ustawienia konta</a><br><br>
                    <a href="">Przechowalnia</a>
                 </p>
            </div>
        </div>
        
        
        <div class="stopka-elementM">
            <a href="#platDost" class="nagA">Płatność i dostawa:<img class="arr" src="pliki/a.jpg"></a>
            <div id="platDost">
                <p>
                    <a href="">Koszty wysyłki</a><br><br>
                    <a href="">Formy płatności</a>
                </p>
            </div>
        </div>
        
        
        <div class="stopka-elementM">
            <a href="#oNas" class="nagA">O Nas:<img class="arr" src="pliki/a.jpg"></a>
            <div id="oNas">
                <p>
                    <a href="">Kontakt</a>
                </p>
            </div>
        </div>

</div>
<!-- stopka desktop -->
<div id="stopka">
    <div id="info-stopki">
        <div class="stopka-element">
            <span class="stopkaInfoNag">Pomoc:</span>
            <p>
                <p><a href="">Regulamin</a></p>
                <a href="">Polityka prywatności</a><br><br>
                <a href="">Zwroty i reklamacje</a>
            </p>
        </div>
        <div class="stopka-element">
            <span class="stopkaInfoNag">Moje konto:</span>
            <p>
                <a href="">Moje zamówienia</a><br><br>
                <a href="">Ustawienia konta</a><br><br>
                <a href="">Przechowalnia</a>
            </p>
        </div>
        <div class="stopka-element">
            <span class="stopkaInfoNag">Płatność i dostawa:</span>
            <p>
                <a href="">Koszty wysyłki</a><br><br>
                <a href="">Formy płatności</a>
            </p>
        </div>
        <div class="stopka-element">
            <span class="stopkaInfoNag">O Nas:</span>
            <p>
                <a href="">Kontakt</a>
            </p>
        </div>
    </div>
</div>
    <div id="producer">Sklep internetowy by: DamianRoszak.pl</div>
</body>
</html>
