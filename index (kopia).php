<html>
<head>
<title>Sklep internetowy</title>
<meta charset="UTF-8">
<link id="csslink" rel="stylesheet" type="text/css" href="styl.css" />
</head>

<body>
<div id="top">
    <a id="kontakt" href="">Kontakt</a>
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
        <img class="foto" width="100%" height="70%" src="pliki/but1.jpeg">
        <span class="product-name">Buty - cichobieżki</span>
        <span class="product-price">900,00 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
       <a href="index.php"> <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/but.jpeg">
        <span class="product-name">But gdyby komuś brakowało</span>
        <span class="product-price">50,00 zł</span></a>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/k.jpeg">
        <span class="product-name">Koszulka - oryginalna bo droga</span>
        <span class="product-price">150,00 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/t2.jpeg">
        <span class="product-name">Pancerny telefon</span>
        <span class="product-price">33 242,99 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/b.jpeg">
        <span class="product-name">Cichobiegi z zabudową stopami</span>
        <span class="product-price">349,88 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/t4.jpeg">
        <span class="product-name">Telefon + mydelniczka + lusterko</span>
        <span class="product-price">800,00 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/k2.jpeg">
        <span class="product-name">Koszulka super bo z obrazkiem wszystkiego</span>
        <span class="product-price">132,44 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/lupa.jpg">
        <span class="product-name">Lupa do powiększania</span>
        <span class="product-price">21,58 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/t.jpeg">
        <span class="product-name">Pancerna komureczka</span>
        <span class="product-price">1234,56 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/t1.jpeg">
        <span class="product-name">Pancerna porcelanka</span>
        <span class="product-price">35 621,78 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/ubuntu.jpg">
        <span class="product-name">Ubuntu Linux - safety first</span>
        <span class="product-price">99,99 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/w.webp">
        <span class="product-name">Serwisowanie WordPress'a</span>
        <span class="product-price">546,17 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
 </div>
 <div id="featured-products">
 <div class="nag">Polecane Produkty</div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/k3.jpeg">
        <span class="product-name">Koszulka nocna - fajna bo prześwituje</span>
        <span class="product-price">45,00 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <img class="foto" width="100%" height="70%" src="pliki/t3.jpeg">
        <span class="product-name">XPERIA - prawie nowa</span>
        <span class="product-price">599,99 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <img class="foto" width="100%" height="70%" src="pliki/k1.jpeg">
        <span class="product-name">T-shirt fajny bo z napisem</span>
        <span class="product-price">77,99 zł</span>
        <form>
        <button type="submit" class="do-koszyka">Do koszyka</button>
        </form>
    </div>
    <div class="product">
        <span class="new">nowość</span>
        <img class="foto" width="100%" height="70%" src="pliki/c.png">
        <span class="product-name">Wózek z biedronki</span>
        <span class="product-price">156,77 zł</span>
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
