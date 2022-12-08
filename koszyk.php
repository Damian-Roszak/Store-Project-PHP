<?php
session_start();
?>
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
            <span>Koszyk (
                <?php echo $_SESSION["koszyk"]; ?>
            )</span>
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
  <!---  lista-zakupow  --->
  <div class="lista-zakupow">
     <!--- item-zakupowy 1111111   --->
     <div class="item-zakupowy">
           <a href="but1.php"> <img class="miniFoto" width="119px" height="119px" src="pliki/but1.jpeg" alt=""></a>
         <div class="tytulek">
            <a class="co" href="but1.php"><span class="co">Buty - cichobieżki</span> </a>
            <span>100,00 zł</span>  
         </div>  
                     <div class="tytulek2">
                         <div id="ileKoszyk">
                                <form id="formButton">
                                    <input id="ile" placeholder="4" type="number" step="1" min="1" pattern="\d{1,}">
                                </form>
                         </div>
                         
                    <span class="fat">Razem:&nbsp;</span><br>
                    <span id="sumaZaProdukt">400,00 zł &nbsp;</span>
                    <a href=""><img id="wywal" width="35px" height="32px" src="pliki/smietnik.png"></a>
                
                         
                 </div><!--- KONIEC tytulek2 --->
         
            
     </div>  <!--- KONIEC item-zakupowy  --->



        <div class="item-zakupowy">
           <a href="tel1.php"> <img class="miniFoto" width="119px" height="119px" src="pliki/t1.jpeg"></a>
          <div class="tytulek">  
            <a class="co" href="tel1.php"><span class="co">Pancerny telefon</span> </a>
            <span class="zaIle">32 999,97 zł</span>  
          </div>  
            <div class="tytulek2">
              <div id="ileKoszyk">
                    <form id="formButton">
                        <input id="ile" placeholder="1" type="number" step="1" min="1" pattern="\d{1,}">
                    </form>
              </div>
            
                <span class="fat ">Razem: &nbsp;</span><br>
                <span id="sumaZaProdukt">32 999,97 zł &nbsp;</span>
                <a href=""><img id="wywal" width="35px" height="32px" src="pliki/smietnik.png"></a>
             </div><!--- KONIEC tytulek2 --->
        </div>




        <div class="item-zakupowy">
          <a href="koszulka.php"><img class="miniFoto" width="119px" height="119px" src="pliki/k3.jpeg"></a>
          <div class="tytulek"> 
            <a class="co" href="koszulka.php"><span class="co">Koszulka nocna</span> </a>
            <span class="zaIle">45,00 zł</span>   
          </div>
                <div class="tytulek2"> 
                    <div id="ileKoszyk">
                        <form id="formButton">
                            <input id="ile" placeholder="1" type="number" step="1" min="1" pattern="\d{1,}">
                        </form>
                    </div>
                    <span class="fat ">Razem: &nbsp;</span><br>
                    <span id="sumaZaProdukt">45,00 zł &nbsp;</span>
                    <a href=""><img id="wywal" width="35px" height="32px" src="pliki/smietnik.png"></a>
                </div>
            
        </div>





  <!--- KONIEC lista-zakupow  --->
  </div>    
  
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
