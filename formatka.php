<html>
<head>
<title>Sklep internetowy - widok Koszyka</title>
<meta charset="UTF-8">
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
<div id="baner">
    <a href="index.php"><img id="imgBaner" src="pliki/logo.png" alt=""></a>
</div>
<div class="top-right">
   <span class="nav-right"> 
    <form>
        <input id="szukajka" type="" name="szukaj" pattern="+?"></input>
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
