<html>
<head>
<title>Sklep internetowy - kategoria buty</title>
<meta charset="UTF-8">
<link id="csslink" rel="stylesheet" type="text/css" href="styl.css" />
<link rel="stylesheet" media="screen and (min-width: 524px)" href="desktop.css">

<link rel="stylesheet" media="screen and (max-width: 523px)" href="mobile.css">
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
 <div id="newest-content">
  <div class="nag">NOWOŚCI</div>
    <div class="product">
       <a href="but1.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/but1.jpeg">
        <span class="product-name">Buty - cichobieżki</span>
        <span class="product-price">900,00 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/but.jpeg">
        <span class="product-name">But gdyby komuś brakowało</span>
        <span class="product-price">50,00 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/buty1.jpg">
        <span class="product-name">Roczny abonament na buty</span>
        <span class="product-price">150,00 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b2.webp">
        <span class="product-name">Buty z nogami i kawałkiem dłoni</span>
        <span class="product-price">33 242,99 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <a href="index.php"><span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b.jpeg">
        <span class="product-name">Cichobiegi z zabudową stopami</span>
        <span class="product-price">349,88 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b3.jpg">
        <span class="product-name">Stopy do butów</span>
        <span class="product-price">800,00 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
      <a href="index.php">  <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b5.jpg">
        <span class="product-name">Szpilki szpileczki szpilunie</span>
        <span class="product-price">132,44 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b6.jpg">
        <span class="product-name">trampki snikersy albo do gry w kosza</span>
        <span class="product-price">21,58 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b4.jpg">
        <span class="product-name">Pancerna wojskowe trepy</span>
        <span class="product-price">1234,56 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
      <a href="index.php">  <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b7.webp">
        <span class="product-name">Papucie</span>
        <span class="product-price">35 621,78 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b8.jpg">
        <span class="product-name">Buty dziecięce - dziecko gratis</span>
        <span class="product-price">99,99 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b9.jpg">
        <span class="product-name">Buty z skóry</span>
        <span class="product-price">546,17 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
 </div>
 <div id="featured-products">
 <div class="nag">Polecane Produkty</div>
    <div class="product">
      <a href="index.php">  <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b10.jpeg">
        <span class="product-name">Wszystkie buty w sklepie</span>
        <span class="product-price">45,00 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
      <a href="index.php">  <img class="foto" width="220px" height="231px" src="pliki/b11.jpg">
        <span class="product-name">Traktory</span>
        <span class="product-price">599,99 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
      <a href="index.php">  <img class="foto" width="220px" height="231px" src="pliki/b12.jpg">
        <span class="product-name">Minibut</span>
        <span class="product-price">77,99 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="220px" height="231px" src="pliki/b13.jpg">
        <span class="product-name">Buty do biegania</span>
        <span class="product-price">156,77 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
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
