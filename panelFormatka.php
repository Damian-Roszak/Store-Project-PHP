<?php 
if($_POST["password"] == "asd"){
      
header("Location: panel.php");
exit();

    }
    ?>
<html>
<head>
<title>Sklep internetowy - widok Koszyka</title>
<meta charset="UTF-8">
<link id="csslink" rel="stylesheet" type="text/css" href="panel.css" />

</head>

<body>
<div id="top">
    <span id="top-at-left">
        <a id="kontakt" href="">Witaj, Admin</a> 
        <a id="zaloguj" href="SEO.php">SEO</a>
    </span>
    <span id="top-at-right">      
      <a id="wylog" href="wyloguj.php">Wyloguj się</a>
    </span>
</div>
<div id="mid">
<div id="left">
    <span class="nav-right">
        <a href="index.php">Kokpit</a><br>
        <a href="kubki.php">Zamówienia</a><br>
        <a href="telefony.php">Produkty</a><br>
        <a href="buty.php">Użytkownicy</a><br>
    </span>
</div>
  <!---    --->
<div id="content">
<div id="MidTop">
        <div id="AddFotosDiv">
            <div id="fot1" class="MiniFot"> Dodaj Fote</div>
            <div id="fot2" class="MiniFot"></div>
            <div id="fot3" class="MiniFot"></div>
            <div id="fot4" class="MiniFot"></div>
            <div id="fot5" class="MiniFot"></div>
            <div id="fot6" class="MiniFot"></div>
            <div id="fot7" class="MiniFot"></div>
            <div id="fot8" class="MiniFot"></div>
            <div id="fot9" class="MiniFot"></div>
            <form action="#upload" method='post' enctype="multipart/form-data">
                <input type="file" name="file"/><br><br>
                <input type="submit" value="Upload"/>
            </form>

        </div>

      <div id="AddCechyDiv">
          <form action="DodajProdukt.php" method="POST">
           <br>
           <label for="nazwa">Nazwa:</label><br>
           <input type="text" id="nazwa" name="nazwa" pattern="+?"><br><br>
           <label for="cena">Cena:</label><br>
           <input type="text" id="cena" name="cena" pattern="\d{1,},\d{2}"> zł
           <br><br>
           <label for="ilosc">Ilość:</label><br>
           <input type="text" id="ilosc" name="ilosc" pattern="\d{1,}"><br><br>
           <label for="kategoria">Kategoria:</label><br>
           <input type="text" id="kategoria" name="kategoria" pattern="+?">
           <br><br>
           <button id="BtnDodajProdukt">Dodaj produkt</button>
          </form>
    </div>
</div>



<span id="LabelOpis">Opis:</span>
    <div id="AddOpisDiv">
    <textarea cols="20" rows="10" >
    </textarea>
    </div>


  
</div>
</div>
    
    <div id="producer">Sklep internetowy by: DamianRoszak.pl</div>
</body>
</html>
