<?php
session_start();

?>
<html>
<head>
<title>Sklep internetowy - widok Logowania</title>
<meta charset="UTF-8">
<link id="csslink" rel="stylesheet" type="text/css" href="styl.css" />
<link id="csslink" rel="stylesheet" type="text/css" href="login.css" />
<!---
<link rel="stylesheet" media="screen and (min-width: 524px)" href="desktop.css">
<link rel="stylesheet" media="screen and (min-width: 524px)" href="fotoProdDesktop.css">
<link rel="stylesheet" media="screen and (min-width: 524px)" href="desktopKoszyk.css">

<link rel="stylesheet" media="screen and (max-width: 523px)" href="mobile.css">
<link rel="stylesheet" media="screen and (max-width: 523px)" href="mobileKoszyk1.css">
<link rel="stylesheet" media="screen and (max-width: 523px)" href="fotoProdMobile.css"> 
--->
</head>

<body>


<div id="obszar-log">
<?php
 
    $host = 'localhost';
	$database = 'psw';
	$user = 'root';
	$password = '';
	
	$dbh1 = "mysql:host=$host;dbname=$database;charset=UTF8";

	$dbh = new PDO($dbh1, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET CHARACTER SET utf8");
try{    
    $sql = "SELECT * FROM loguj";
    $sth = $dbh->prepare($sql);
    $sth->execute();          
    $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
    print "<pre>";
   // print_r($result);
    //echo "<BR>REZULTAT:=".$result[0]['opis'];
    print "</pre>";
    
  foreach($result as $val){  
        if( $_POST["username"] == $val["login"] && $_POST["password"] == $val["pass"]){
            $_SESSION["admin"] = TRUE;
            header("Location: panel.php");
            exit();
        }
    }
}catch (Exception $e){
    $er = $e->getMessage();
    echo $er;
}

 

 ?>

 <span id="info-zacheta">Zaloguj się</span>
 <span id="info-gdzie">do Twojego konta</span>
 <form action="login.php" method="POST">
  <br>
    <label for="username">Login:</label><br>
    <input type="text" id="username" name="username" pattern="+?"><br><br>
    <label for="password">Hasło:</label><br>
    <input type="password" id="password" name="password" size="70" maxlength="70"  pattern="+?" title="Musi zawierać przynajmniej jedną literę">
          <br> <a href="#">Nie pamiętam hasła?</a>
    <br><br>
    <button typu="submit" class="btnLog"> Zaloguj</button>

 
 </form>
</div>





    <div id="producerLog">Sklep internetowy by: DamianRoszak.pl</div>
</body>
</html>
