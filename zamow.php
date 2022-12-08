<html>
<head>
<title>Sklep internetowy - widok Koszyka</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1" />

<link id="csslink" rel="stylesheet" type="text/css" href="styl.css" />

<link rel="stylesheet" media="screen and (min-width: 524px)" href="desktop.css">
<link rel="stylesheet" media="screen and (min-width: 524px)" href="fotoProdDesktop.css">
<link rel="stylesheet" media="screen and (min-width: 524px)" href="desktopKoszyk.css">

<link rel="stylesheet" media="screen and (max-width: 523px)" href="mobile.css">
<link rel="stylesheet" media="screen and (max-width: 523px)" href="mobileKoszyk1.css">
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
  <!---    --->
<div id="content2">
 
<!---ZAMÓWIENIE   --->

<div id="zamowienie">
        <div class="zamow-element">
                <a href="#daneOsobowe" class="">Dane Osobowe</a>
                <div id="daneOsobowe">
                    <p>
                            <input>Imie</input><br><br>
                            <input>Nazwisko<input><br><br>
                            <input>Nr Tel.:</input>
                    </p>
                </div>
        </div>
        
        <div class="zamow-element">
            <a href="#adresDost" class="">Adres dostawy</a>
             <div id="adresDost">
                 <p>
                    <input>Ulica</input><br><br>
                    <input>Nr domu / mieszkania</input><br><br>
                    <input>Miejscowość</input>
                    <input>Kod pocztowy</input>
                 </p>
            </div>
        </div>
        
        
        <div class="zamow-element">
            <a href="#sposobDost" class="">Sposób dostawy</a>
            <div id="sposobDost">
                <p>
                    <input>Kurier DPD</input><br><br>
                    <input>InPost</input><br><br>
                    <input>Komentarz</input>
                </p>
            </div>
        </div>
        
        
        <div class="zamow-element">
            <a href="#sposobPlatnosci" class="">Sposób Płatności</a>
            <div id="sposobPlatnosci">
                <p>
                    <input>Płatność przy odbiorze</input><br><br>
                    <input>Przelew on-line</input><br><br>
                    <img alt="" src="">
                </p>
            </div>
        </div>

</div>








  <!---KONIEC ZAMÓWIENIE   --->

  
  <div class="panel-prawy">
            <div class="cena-zakupu">
                <span id="doZaplaty">DO ZAPŁATY</span>
                <span id="ileRazem" class="fat">33 444,97 zł</span>
                <form id="formPlace">
                   <button id="place" class="fat">PŁATNOŚĆ I DOSTAWA</button> 
                </form>
            </div>
    </div>
  
  
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
